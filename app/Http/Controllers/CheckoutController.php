<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutFormRequest;
use App\Models\Order;
use App\Models\Product;
use App\Notifications\SendInvoiceNotification;
use Billow\Contracts\PaymentProcessor;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Facades\Invoice;

class CheckoutController extends Controller
{

    public function checkout()
    {
        $items = Product::query()->where('status','PUBLISHED')->get();
        if (\Cart::getContent()->isNotEmpty())
        {
            return view('shop.checkout');
        }else{
            return redirect()->route('shop.index',compact('items'));
        }
    }

    function generateSignature($data, $passPhrase = null) {
        // Create parameter string
        $pfOutput = '';
        foreach( $data as $key => $val ) {
            if($val !== '') {
                $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
            }
        }
        // Remove last ampersand
        $getString = substr( $pfOutput, 0, -1 );
        if( $passPhrase !== null ) {
            $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
        }
        return md5( $getString );
    }


    public function placeOrder(CheckoutFormRequest $request)
    {
        $request->validated();
        $order = Order::query()->create($request->validated());
        foreach (\Cart::getContent()->toArray() as $item)
        {
            $order->products()->attach($item['id'],['quantity'=>$item['quantity']]);
        }

        $cartTotal = \Cart::getTotal();// This amount needs to be sourced from your application
        $data = [
             'merchant_id' => '19424164',
             'merchant_key' => 'a7yqq0vrrjgte',
             'return_url' => 'https://redamancy.herokuapp.com/success',
             'cancel_url' => 'https://redamancy.herokuapp.com/cancel',
             'notify_url' => 'https://redamancy.herokuapp.com/notify',
             // Buyer details
             'name_first' => $order->billing_first_name,
             'name_last'  => $order->billing_last_name,
             'email_address'=> $order->billing_email,
             // Transaction details
             'm_payment_id' => $order->m_payment_id, //Unique payment ID to pass through to notify_url
             'amount' => number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' ),
             'item_name' => $order->id
         ];

        $signature = $this->generateSignature($data);
        $data['signature'] = $signature;

        // If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
        $testingMode = true;
        $pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
        $htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post" class="checkout woocommerce-checkout col-md-12">';
        foreach($data as $name=> $value)
        {
            $htmlForm .= '<input name="'.$name.'" type="hidden" value=\''.$value.'\'/>';
        }

        $htmlForm .= '<div id="payment" class="woocommerce-checkout-payment" style="padding: 2rem 0">
                                                <div class="form-row place-order">
                                                    <button type="submit" class="button alt"
                                                            name="woocommerce_checkout_place_order"
                                                            id="payment" value="Payment"
                                                            data-value="Place order">Complete Payment
                                                    </button>
                                                </div>
                                            </div>

                                    </form>';
        return view('shop.complete-payment',compact('order','htmlForm'));


    }

    public function confirmPayment(PaymentProcessor $payfast, CheckoutFormRequest $request)
    {
        // Eloqunet example.
        $request->validated();
        $cartTotal = 1;// This amount needs to be sourced from your application
        $order = Order::query()->create($request->validated());
        foreach (\Cart::getContent()->toArray() as $item)
        {
            $order->products()->attach($item['id'],['quantity'=>$item['quantity']]);
        }
       $amount =  number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' );
        // Build up payment Paramaters.
        $payfast->setBuyer($order->billing_first_name, $order->billing_last_name, $order->billing_email);
        $payfast->setAmount($amount);
        $payfast->setItem($order->id, 'Wine');
        $payfast->setMerchantReference($order->m_payment_id);

        // Optionally send confirmation email to seller
        $payfast->setEmailConfirmation();
        $payfast->setConfirmationAddress('mbanyaw@gmail.com');

        // Return the payment form.
        $htmlForm = $payfast->paymentForm('Place Order');
        return view('shop.complete-payment',compact('order','htmlForm'));
    }

    public function success()
    {
        \Cart::clear();
        return view('shop.success');
    }

    public function notify()
    {
      return view('shop.notify');
    }

    public function itn(Request $request, PaymentProcessor $payfast)
    {
        // Retrieve the Order from persistance. Eloquent Example.
        $order = Order::where('m_payment_id', $request->get('m_payment_id'))->firstOrFail(); // Eloquent Example

        // Verify the payment status.
        $status = $payfast->verify($request, $order->amount, $order->m_payment_id)->status();

        // Handle the result of the transaction.
        switch( $status )
        {
            case 'COMPLETE': // Things went as planned, update your order status and notify the customer/admins.

                $products = \DB::table('order_products')->whereIn('order_id',$order->id)->get();
                $fullname = $request->name_first.' '.$request->name_last;
                $client = new Party([
                    'name'=> 'REDEMANCY VINEYARDS (PTY) LTD',
                    'custom_fields' => [
                        'address' => '47, 22nd Street, Parkhurst',
                        'Email' =>'info"redamancy.co.za',
                        ''=> 'Antoinette Rapitsi',
                        'MOBILE:' => '+27 83 580 1461',
                    ]
                ]);

                $customer = new Party([
                    'name' => $fullname,
                    'address' => $order->billing_address_1,
                    'custom_fields' => [
                        'MOBILE' => $order->billing_phone,
                        'EMAIL' => $order->billing_email
                    ]
                ]);
                $items = [];

                foreach ($products as $product){
                    $product_id = $product->product_id;
                    $product_name = Product::query()->where('id',$product_id)->first()->product_name;
                    $product_description = Product::query()->where('id',$product_id)->first()->product_description;
                    $unit_price = Product::query()->where('id',$product_id)->first()->price;
                    $qty = $product->quantity;
                    $amount = $unit_price * $qty;

                    $items = array_push( (new InvoiceItem())
                        ->title($product_name)
                        ->description($product_description)
                        ->pricePerUnit($unit_price)
                        ->quantity($qty));
                }

                $invoice = Invoice::make('receipt')
                    ->series('BIG')
                    // ability to include translated invoice status
                    // in case it was paid
                    ->status(__('invoices::invoice.paid'))
                    ->sequence(667)
                    ->serialNumberFormat('{SEQUENCE}/{SERIES}')
                    ->seller($client)
                    ->buyer($customer)
                    ->date(now()->subWeeks(3))
                    ->dateFormat('m/d/Y')
                    ->payUntilDays(14)
                    ->currencySymbol('ZAR')
                    ->currencyCode('ZAR')
                    ->currencyFormat('{SYMBOL}{VALUE}')
                    ->currencyThousandsSeparator('.')
                    ->currencyDecimalPoint(',')
                    ->filename($client->name . ' ' . $customer->name)
                    ->addItems($items)
                    ->logo(public_path(asset('cropped-logo-180x180.png')))
                    // You can additionally save generated invoice to configured disk
                    ->save('public');

                $link = $invoice->url();
                // Then send email to party with link
                \Notification::route('mail',$request->email_address)
                    ->notify(new SendInvoiceNotification($link));
                Order::query()
                    ->where('m_payment_id',$request->m_payment_id)
                    ->update(['payment_status'=>'COMPLETED']);
                break;
            case 'FAILED': // We've got problems, notify admin and contact Payfast Support.
                break;
            case 'PENDING': // We've got problems, notify admin and contact Payfast Support.
                break;
            default: // We've got problems, notify admin to check logs.
                break;
        }
    }

    public function cancel()
    {
        \Cart::clear();
        return view('shop.cancel');
    }

    function pfValidSignature( $pfData, $pfParamString, $pfPassphrase = null ) {
        // Calculate security signature
        if($pfPassphrase === null) {
            $tempParamString = $pfParamString;
        } else {
            $tempParamString = $pfParamString.'&passphrase='.urlencode( $pfPassphrase );
        }

        $signature = md5( $tempParamString );
        return ( $pfData['signature'] === $signature );
    }

    function pfValidIP() {
        // Variable initialization
        $validHosts = array(
            'www.payfast.co.za',
            'sandbox.payfast.co.za',
            'w1w.payfast.co.za',
            'w2w.payfast.co.za',
        );

        $validIps = [];

        foreach( $validHosts as $pfHostname ) {
            $ips = gethostbynamel( $pfHostname );

            if( $ips !== false )
                $validIps = array_merge( $validIps, $ips );
        }

        // Remove duplicates
        $validIps = array_unique( $validIps );
        $referrerIp = gethostbyname(parse_url($_SERVER['HTTP_REFERER'])['host']);
        if( in_array( $referrerIp, $validIps, true ) ) {
            return true;
        }
        return false;
    }
    function pfValidPaymentData( $cartTotal, $pfData ) {
        return !(abs((float)$cartTotal - (float)$pfData['amount_gross']) > 0.01);
    }
    function pfValidServerConfirmation( $pfParamString, $pfHost = 'sandbox.payfast.co.za', $pfProxy = null ) {
        // Use cURL (if available)
        if( in_array( 'curl', get_loaded_extensions(), true ) ) {
            // Variable initialization
            $url = 'https://'. $pfHost .'/eng/query/validate';

            // Create default cURL object
            $ch = curl_init();

            // Set cURL options - Use curl_setopt for greater PHP compatibility
            // Base settings
            curl_setopt( $ch, CURLOPT_USERAGENT, NULL );  // Set user agent
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );      // Return output as string rather than outputting it
            curl_setopt( $ch, CURLOPT_HEADER, false );             // Don't include header in output
            curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, true );

            // Standard settings
            curl_setopt( $ch, CURLOPT_URL, $url );
            curl_setopt( $ch, CURLOPT_POST, true );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $pfParamString );
            if( !empty( $pfProxy ) )
                curl_setopt( $ch, CURLOPT_PROXY, $pfProxy );

            // Execute cURL
            $response = curl_exec( $ch );
            curl_close( $ch );
            if ($response === 'VALID') {
                return true;
            }
        }
        return false;
    }
}

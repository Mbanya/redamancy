<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutFormRequest;
use App\Models\Order;
use App\Models\Product;
use App\Notifications\SendInvoiceNotification;
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
             'merchant_id' => '10000100',
             'merchant_key' => '46f0cd694581a',
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

    public function success()
    {
        \Cart::clear();
        return view('shop.success');
    }

    public function notify()
    {
        //Tell PayFast that this page is reachable by triggering a header 200
        header( 'HTTP/1.0 200 OK' );
        flush();

        define( 'SANDBOX_MODE', true );
        $pfHost = SANDBOX_MODE ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
        // Posted variables from ITN
        $pfData = $_POST;
        // Strip any slashes in data
        foreach( $pfData as $key => $val ) {
            $pfData[$key] = stripslashes( $val );
        }
        // Convert posted variables to a string
        foreach( $pfData as $key => $val ) {
            if( $key !== 'signature' ) {
                $pfParamString .= $key .'='. urlencode( $val ) .'&';
            } else {
                break;
            }
        }
        $cart = Order::query()->where('m_payment_id',$pfData['m_payment_id'])->first();

        $products = \DB::table('order_products')->whereIn('order_id',$cart->id)->get();


        $pfParamString = substr( $pfParamString, 0, -1 );
        $check1 = $this->pfValidSignature($pfData, $pfParamString);
        $check2 =  $this->pfValidIP();
        $check3 =  $this->pfValidPaymentData($cart->amount, $pfData);
        $check4 =  $this->pfValidServerConfirmation($pfParamString, $pfHost);

        if($check1 && $check2 && $check3 && $check4) {
            $fullname = $pfData['name_first'].' '.$pfData['name_last'];

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
                'address' => $cart->billing_address_1,
                'custom_fields' => [
                    'MOBILE' => $cart->billing_phone,
                    'EMAIL' => $cart->billing_email
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
                ->save('public/invoices');

            $link = $invoice->url();
            // Then send email to party with link
            \Notification::route('mail',$pfData['email_address'])
                ->notify(new SendInvoiceNotification($link));

           Order::query()
               ->where('m_payment_id',$pfData['m_payment_id'])
               ->update(['payment_status'=>'COMPLETED']);

        } else {
            return 'Payment Failed';
        }

        return $invoice->stream();
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

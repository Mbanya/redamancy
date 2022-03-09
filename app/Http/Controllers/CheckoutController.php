<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutFormRequest;
use App\Models\Order;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

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
            $order->products()->attach($item['id']);
        }

        $cartTotal = Cart::getTotal();// This amount needs to be sourced from your application
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

    public function success()
    {
        \Cart::clear();
        return view('shop.success');
    }

    public function cancel()
    {
        \Cart::clear();
        return view('shop.cancel');
    }
}

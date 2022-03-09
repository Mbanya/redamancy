<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartList()
    {
        return view('shop.cart');
    }

    /**
     * @throws \Darryldecode\Cart\Exceptions\InvalidConditionException
     */
    public function addToCart(Request $request)
    {
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'Shipping Cost',
            'type' => 'shipping',
            'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
            'value' => '+20',
            'order' => 1 // the order of calculation of cart base conditions. The bigger the later to be applied.
        ));

        if ($request->quantity === '6'){
            $product = array(
                'id'=>$request->id,
                'name'=>$request->product_name,
                'price'=> $request->price,
                'quantity' => $request->quantity,
                'attributes' => ['image'=>$request->image],
                'conditions' => [$condition]
            );
        }else{
            $product = array(
                'id'=>$request->id,
                'name'=>$request->product_name,
                'price'=> $request->price,
                'quantity' => $request->quantity,
                'attributes' => ['image'=>$request->image]
            );
        }



        \Cart::add($product);

        session()->flash('success','Item added to cart successfully');

        return redirect()->back();
    }
}

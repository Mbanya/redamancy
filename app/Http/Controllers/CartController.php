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

    public function addToCart(Request $request)
    {

        \Cart::add([
            'id'=>$request->id,
            'name'=>$request->product_name,
            'price'=> $request->price,
            'quantity' => $request->quantity,
            'attributes' => ['image'=>$request->image]
        ]);

        session()->flash('success','Item added to cart successfully');

        return redirect()->back();
    }
}

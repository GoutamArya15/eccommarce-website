<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show_cart()
    {
        return "hello";
    }

    public function add_cart(Request $request)
    {
        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $new_quantity = $request->product_quantity;
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();
        if ($cart) {
            if ($cart->quantity != $new_quantity) {
                $cart->update(['quantity' => $new_quantity]);
            }
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $new_quantity
            ]);
        }
        return redirect()->route('home')->with('success', 'Success full Addedd Cart Item');
    }
}

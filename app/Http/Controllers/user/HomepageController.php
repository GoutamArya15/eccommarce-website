<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function user_home_page()
    {
        $category =  Category::get('title')->toArray();
        $products = Product::with('details')->get()->toArray();
        $cart = Cart::with('product.details')->where('user_id', Auth::id())->get()->toArray();
        return view('user.welcome', compact('category', 'products', 'cart'));
    }


    // shoping page
    public function show_shop()
    {
        $products = Product::with('details')->paginate(2);
        return view('user.shop.index', compact('products'));
    }

    public function filter_product(Request $request)
    {
        print_r($request->all());
    }
}

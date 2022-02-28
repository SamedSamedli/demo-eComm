<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function addToCart(Request $req)
    {
        if (auth()->user()) {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/');

        } else {
            return redirect('/login');
        }
    }
}

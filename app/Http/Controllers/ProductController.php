<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
//        dd($data->gallery);
        return view('detail', ['product' => $data]);
    }

    function addToCart(Request $req)
    {
//        dd($req->session()->has('user'));
        if ($req->session()->has('user')) { 
            return "Hello";
        } else {
            return redirect('/login');
        }
    }
}

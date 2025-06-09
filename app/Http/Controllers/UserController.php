<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard_index()
    {
        $products = \App\Models\Product::all();
        return view('user.dashboard', compact('products'));
    }

    public function cart_index(){
        return view('user.cart');
    }
}

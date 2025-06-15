<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class UserController extends Controller
{
    public function dashboard_index()
    {
        $products = Product::all();
        return view('user.dashboard', compact('products'));
    }

    public function cart_index(){
        $carts = Product::has('carts')->get()->sortByDesc('carts.create_at');
        return view('user.cart', compact('carts'));
    }

    public function add_cart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:categories,id',
            'qty' => 'required|numeric'
        ]);

        Cart::create([
            'product_id' => $request->product_id,
            'qty' => $request->qty,
        ]);

        return redirect()->back()->with('success', 'Cart created successfully.');
    }

    public function update_cart(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'cart_id' => 'required',
            'product_id' => 'required',
            'qty' => 'required'
        ]);

        $cart=Cart::findOrFail($id);
            $cart->cart_id = $request->cart_id;
            $cart->product_id = $request->product_id;
            $cart->qty = $request -> qty;                
            $cart->save();
        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    public function delete_cart($id)
    {
        $cart = Cart::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Cart deleted successfully.');
    }
}

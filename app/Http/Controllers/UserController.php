<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

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
            'product_id' => 'required',
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

    public function checkout(Request $request)
    {
        $rules = [
            'total' => 'required|numeric|gt:0',
            'pay_total' => 'required|numeric|gt:0|gte:total',
        ];
        $request->validate($rules);
        Transaction::create([
            'user_id' => $request->user_id,
            'date' => $request->date,
            'total' => $request->total,
            'pay_total' => $request->pay_total,
        ]);
        foreach (Cart::all() as $item){
            TransactionDetail::create([ 
                'transaction_id' => Transaction::latest()->first()->transaction_id,
                'product_id' => $item->product_id,
                'qty' => $item->qty,
                'subtotal' => $item->products->price * $item->qty
            ]);
        }
        Cart::truncate();

        // return redirect(route('transaksi.show',Transaction::latest()->first()->id));
        return redirect()->back()->with('success', 'Checkout success');
    }

    public function transaksi_index()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $transactions = Transaction::where('user_id', $userId)->get();
            return view('user.transaction', compact('transactions'));
        } else {
            return redirect('/login');
        }
    }

    public function receipt($id)
    {
        $detail = Transaction::find($id);
        return view('user.receipt',compact('detail'));
    }

    public function profile($id)
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function profile_update(Request $request, $id){
        $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'birth_date' => 'required|date',
            'password' => 'required'
        ]);

        // Find the product
        $user = Auth::user();

        // Handle image upload if new image is provided
        if ($request->hasFile('photo')) {
            // Delete old image if exists
            if ($user->photo && file_exists(public_path('template/img/' . $user->photo))) {
                unlink(public_path('template/img/' . $user->photo));
            }

            // Get the file information
            $file = $request->file('product_image');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = './template/img';
            $file->move($tujuan_upload, $nama_file);
            $product->product_image = $nama_file;
        }

        // Update product data
        $product->update([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch products from the database
        $categories = Category::all();
        $products = Product::all();
        return view('admin.products.dashboardproducts', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.createproduct', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'product_name' => 'required|string|max:255',
            'id_category' => 'required|exists:categories,id',
            'product_image' => 'required|image',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Get the file information
        $file = $request->file('product_image');

        // Rename the file
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // Process upload
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload, $nama_file);

        // Create a new product
        Product::create([
            'product_name' => $request->product_name,
            'id_category' => $request->id_category,
            'product_image' => $nama_file, // Update to use the correct filename
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->back()->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.editproduct', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'product_name' => 'required|string|max:255',
            'id_category' => 'required|exists:categories,id',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Handle image upload if new image is provided
        if ($request->hasFile('product_image')) {
            // Delete old image if exists
            if ($product->product_image && file_exists(public_path('template/img/' . $product->product_image))) {
                unlink(public_path('template/img/' . $product->product_image));
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
            'id_category' => $request->id_category,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            
            return redirect()->route('products.index')
                ->with('success', 'Product deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('products.index')
                ->with('error', 'Error deleting product: ' . $e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = \App\Models\Category::all();
        return view('admin.category.dashboardcategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'category_name' => 'required|string|max:255'
            ], [
                'category_name.required' => 'Category name is required',
                'category_name.string' => 'Category name must be text',
                'category_name.max' => 'Category name cannot exceed 255 characters'
            ]);

            Category::create([
                'category_name' => $validated['category_name']
            ]);

            return redirect()->route('category.index')
                ->with('success', 'Category created successfully');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
                
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while creating the category');
        }
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
        $category = Category::findOrFail($id);
        return view('admin.category.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validated = $request->validate([
                'category_name' => 'required|string|max:255'
            ], [
                'category_name.required' => 'Category name is required',
                'category_name.string' => 'Category name must be text',
                'category_name.max' => 'Category name cannot exceed 255 characters'
            ]);

            $category = Category::findOrFail($id);
            $category->update([
                'category_name' => $validated['category_name']
            ]);

            return redirect()->route('category.index')
                ->with('success', 'Category updated successfully');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
                
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('category.index')
                ->with('error', 'Category not found');
                
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while updating the category');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();

            return redirect()->route('category.index')
                ->with('success', 'Category deleted successfully');

        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('category.index')
                ->with('error', 'Category not found');
                
        } catch (\Exception $e) {
            return redirect()->route('category.index')
                ->with('error', 'An error occurred while deleting the category');
        }
    }
}

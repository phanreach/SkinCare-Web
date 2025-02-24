<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.product', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create_product');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable|string'
        ]);

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('products.edit_product', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable|string'
        ]);

        if ($request->hasFile('picture')) {
            // Delete the old picture
            if ($product->picture) {
                Storage::disk('public')->delete($product->picture);
            }
            // Store the new picture
            $data['picture'] = $request->file('picture')->store('products', 'public');
        }

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        // Delete the product image
        if ($product->picture) {
            Storage::disk('public')->delete($product->picture);
        }
        
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product deleted successfully!');
    }
}

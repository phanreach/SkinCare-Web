<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage; // Fix: Import ProductImage model
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        return view('products.product', ['products' => $products]);
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('products.product_detail', ['product' => $product]);
    }

    public function create()
    {
        return view('products.create_product');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pictures.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Fix: Validate multiple images
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable|string'
        ]);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $picture) {
                $path = $picture->store('products', 'public'); 

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('products.edit_product', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'pictures.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Fix: Allow multiple images
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable|string'
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        if ($request->hasFile('pictures')) {
            // Delete old images
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }

            // Store new images
            foreach ($request->file('pictures') as $picture) {
                $path = $picture->store('products', 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect(route('product.index'))->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        // Fix: Delete all associated images
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text'  => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $path = $request->file('image')->store('about', 'public');

        Product::create([
            'title' => $request->title,
            'text'  => $request->text,
            'price' => $request->price,
            'image' => $path,
        ]);

        return redirect()->route('product.index')->with('success', 'About added successfully.');
    }


    public function edit()
    {
        $product = Product::first();
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'text'  => 'required|string',
            'price' => 'required|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $product = Product::first();

        $data = [
            'title' => $request->title,
            'text'  => $request->text,
            'price' => $request->price,
        ];

        if ($request->hasFile('image')) {
            // store new image
            $path = $request->file('image')->store('product', 'public');

            // optionally delete old image
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $data['image'] = $path;
        }

        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product added successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // optionally delete old image
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}

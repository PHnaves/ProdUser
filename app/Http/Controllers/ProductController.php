<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'id_category' => 'required',
            'image' => 'required|string'
        ]);
    
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'id_category' => $request->id_category,
            'image' => $request->image
        ]);

        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!$product = Product::find($id)){
            return redirect()->route('products');
        }
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!$product = Product::find($id)){
            return redirect()->route('products');
        }

        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!$product = Product::find($id)){
            return redirect()->route('products');
        }

        $data = $request->all();
        
        $product->update($data);

        return redirect()->route('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!$product = Product::find($id)) {
            return redirect()->route('products');
        }

        $product->delete();
        return redirect()->route('products');
    }
}

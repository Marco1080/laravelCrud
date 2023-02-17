<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('products.index', ["product" => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $newProduct = new Product;
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->price = $request->price;
        $newProduct->save();
        
        $product = Product::all();
        return view('products.index', ["product" => $product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $product = Product::find($id);

        return view('products.show', ["product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', ["product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $p = Product::find($id);
        $p->name = $request->name;
        $p->description = $request->description;
        $p->price = $request->price;
        $p->save();

        $product = Product::all();
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $product = Product::find($id);
        $product->delete();

        $product = Product::all();
        return view('products.index', ["product"=>$product]);
    }
}

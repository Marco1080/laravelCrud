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
        $productList = Product::all();
        return view('product.all', ['product'=>$productList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $createProduct = new Product();
        return view('product.create',["createProduct"=>$createProduct]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $newProduct = new Product();
        $newProduct->name = $r->name;
        $newProduct->description = $r->description;
        $newProduct->price = $r->price;
        $newProduct->save();
        
        $productList = Product::all();
        return view('product.all', ['product'=>$productList]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        return view('product.show',["product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

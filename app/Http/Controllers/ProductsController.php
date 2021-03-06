<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index' , compact('products'));
    }

    public function create()
    {
        //
        return view('products.create');
    }

    public function store(Request $request): array
    {
        //
        return $request->all();
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}

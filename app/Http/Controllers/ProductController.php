<?php

namespace App\Http\Controllers;

use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => Product::all(
            )
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }
}

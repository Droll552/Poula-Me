<?php

namespace App\Http\Controllers;

use App\Models\Product;

class AllProductController extends Controller
{
    public function index()
    {
        return view('all_products.index', [
            'products' => Product::simplePaginate(15)
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }
}

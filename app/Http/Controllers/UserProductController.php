<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProductController extends Controller
{
    public function create(Product $product)
    {
        return view('products.create', [
            'product' => $product
        ]);
    }

    public function store()
    {
        Product::create(array_merge($this->validateProduct(), [
            'user_id' =>request()->user()->id
        ]));

        return redirect('/');
    }

    protected function validateProduct(?Product $product = null): array
    {
        $product ??= new Product();

        return request()->validate([
           'name'=>'required',
           'slug'=>['required', Rule::unique('products', 'slug')->ignore($product)],
           'category'=>'required',
           'price'=>'required',
           'description'=>'required',
           'condition'=>'required'
        ]);

    }
}

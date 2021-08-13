<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Validation\Rule;

class UserProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
           'products' => Product::all()
        ]);
    }
    public function create()
    {
        return view('products.create');
    }

//    public function store()
//    {
//        $attributes = request()->validate([
//            'name'=>'required',
//            'slug'=>['required', Rule::exists('products', 'slug')],
//            'category'=>'required',
//            'price'=>'required',
//            'description'=>'required',
//            'condition'=>'required'
//        ]);
//
//        $attributes['user_id'] = auth()->id();
//
//        Product::create($attributes);
//        return redirect('/');
//    }

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

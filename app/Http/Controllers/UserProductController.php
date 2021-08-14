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

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function create(Product $product)
    {
        return view('products.create', [
            'product' => $product
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'=>'required',
            'slug'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category'=>'required',
            'price'=>'required',
            'description'=>'required',
            'condition'=>'required'
        ]);

        $attributes['user_id'] = auth()->id();
        if ($attributes['image'] ?? false){
            $attributes['image'] = request()->file('image')->store('images');
        }


        Product::create($attributes);

        return redirect('/');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product'=>$product]);
    }

    public function update(Product $product)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'slug'=>['required', Rule::unique('products', 'slug')->ignore($product)],
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category'=>'required',
            'price'=>'required',
            'description'=>'required',
            'condition'=>'required'
        ]);

        if($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('images');
        }
        $product->update($attributes);

        return redirect('/');

    }

    public function destroy (Product $product)
    {
        $product->delete();
        return back();

    }


}

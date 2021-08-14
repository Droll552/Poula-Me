<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
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
//            'slug'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category'=>'required',
            'price'=>'required',
            'description'=>'required',
            'condition'=>'required'
        ]);

        $attributes['user_id'] = auth()->id();

//        ToDo: If product name exists, there will be error. Must find the way to fix that
        $attributes['slug'] = Str::slug(request()->name, '-');
        if ($attributes['image'] ?? false){
            $attributes['image'] = request()->file('image')->store('images');
        }


        Product::create($attributes);

        return redirect('/dashboard/products/');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product'=>$product]);
    }

    public function update(Product $product)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category'=>'required',
            'price'=>'required',
            'description'=>'required',
            'condition'=>'required'
        ]);

        $attributes['slug'] = Str::slug(request()->name, '-');
        if($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('images');
        }
        $product->update($attributes);

        return redirect('/dashboard/products/');

    }

    public function destroy (Product $product)
    {
        $product->delete();
        return redirect('/dashboard/products/');

    }


}

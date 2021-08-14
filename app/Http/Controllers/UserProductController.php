<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Gate;


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

        return redirect('/dashboard/products/');
    }

    public function edit(Product $product)
    {
        if( Gate::allows('update-product', $product))
        {
            return view('products.edit', ['product'=>$product]);
        } else {
            return 'You have no power';
        }

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


        if($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('images');
        }
        $product->update($attributes);

        return redirect('/dashboard/products/');

    }

    public function destroy (Product $product)
    {
        if( Gate::allows('update-product', $product))
        {
            $product->delete();
            return redirect('/dashboard/products/');
        } else {
            return 'You have no power';
        }


    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Validation\Rule;


class UserProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::all()->where('user_id', auth()->user()->id)
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
            'category_id'=>['required', Rule::exists('categories', 'id')],
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
        $this->authorize('update', $product);
        return view('products.edit', ['product'=>$product]);

    }

    public function update(Product $product)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id'=>['required', Rule::exists('categories', 'id')],
            'price'=>'required',
            'description'=>'required',
            'condition'=>'required'
        ]);


        if($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('images');
        }
        $this->authorize('update', $product);
        $product->update($attributes);

        return redirect('/dashboard/products/');

    }

    public function destroy (Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        return redirect('/dashboard/products/');

    }

}

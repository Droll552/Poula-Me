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

    public function store()
    {
       $path = request()->file('image')->store('images');
//        $attributes = request()->validate([
//            'name'=>'required',
//            'slug'=>'required',
//            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'category'=>'required',
//            'price'=>'required',
//            'description'=>'required',
//            'condition'=>'required'
//        ]);
//
//        $attributes['user_id'] = auth()->id();
//
//        Product::create($attributes);
//
//        return redirect('/');
    }

}

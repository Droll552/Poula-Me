<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.categories.index', [
           'category' => Category::all()
        ]);
    }

    public function create(Category $category)
    {
        return view('dashboard.categories.create', [
            'category' => $category
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'=>'required',

        ]);

        Category::create($attributes);
        return redirect('/dashboard/categories/');
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', ['category'=>$category]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name'=>'required',

        ]);

        $category->update($attributes);
        return redirect('/dashboard/categories/');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/dashboard/categories/');

    }
}

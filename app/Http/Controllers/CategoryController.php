<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }
        return view('dashboard.categories.index', [
           'categories' => Category::all()
        ]);
    }

    public function create(Category $category)
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }
        return view('dashboard.categories.create', [
            'category' => $category
        ]);
    }

    public function store()
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }
        $attributes = request()->validate([
            'name'=>'required',

        ]);

        Category::create($attributes);
        return redirect('/dashboard/categories/');
    }

    public function edit(Category $category)
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }
        return view('dashboard.categories.edit', ['category'=>$category]);
    }

    public function update(Category $category)
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }
        $attributes = request()->validate([
            'name'=>'required',

        ]);

        $category->update($attributes);
        return redirect('/dashboard/categories/');
    }

    public function destroy(Category $category)
    {
        if (! Gate::any(['superadmin', 'admin'])) {
            abort(403);
        }
        Product::where('category_id', $category->id)->update(['category_id' => null]);

        $category->delete();
        return redirect('/dashboard/categories/');

    }
}

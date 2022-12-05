<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Traits\AdminUtil;
use Modules\Admin\Traits\DataTable;

class AdminCategoryController extends Controller
{
    use AdminUtil;

    public function index()
    {
        return view('admin::categories.index');
    }

    public function data(Request $request)
    {
        return response()->json(Category::generateDataTable($request));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin::categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        if(!request()->filled('slug')) {
            $inputs['slug'] = $this->createSlug($request->name, '-');
        }
        Category::create($inputs);
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        $categories = Category::latest()->get();
        return view('admin::categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        $inputs = $request->all();
        if(!request()->filled('slug')) {
            $inputs['slug'] = $this->createSlug($request->name, '-');
        }
        $category->update($inputs);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        //
    }
}

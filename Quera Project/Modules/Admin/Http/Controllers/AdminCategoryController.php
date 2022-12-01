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
        // TODO
        return view('admin::categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // TODO
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        // TODO
        return view('admin::categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        // TODO
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        //
    }
}

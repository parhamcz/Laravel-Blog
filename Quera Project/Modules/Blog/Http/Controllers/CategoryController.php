<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Transformers\CategoryResource;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::latest()->whereNull('parent_id')->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Category $post)
    {
        //
    }

    public function update(Request $request, Category $post)
    {
        //
    }

    public function destroy(Category $post)
    {
        //
    }
}


<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Routing\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Admin\Traits\AdminUtil;

class AdminPostController extends Controller
{
    use AdminUtil;

    public function index()
    {
        return view('admin::posts.index');
    }

    public function data(Request $request)
    {
        return response()->json(Post::generateDataTable($request));
    }

    public function activate(Post $post)
    {
        // TODO
        return redirect(route('posts.index'));
    }

    public function create()
    {
        // TODO
        return view('admin::posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        // TODO
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        // TODO
        return view('admin::posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        // TODO
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        //
    }
}

<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Modules\Admin\Traits\AdminUtil;

class AdminTagController extends Controller
{
    use AdminUtil;

    public function index()
    {
        return view('admin::tags.index');
    }

    public function data(Request $request)
    {
        return response()->json(Tag::generateDataTable($request));
    }

    public function create()
    {
        return view('admin::tags.create');
    }

    public function store(Request $request)
    {
        // TODO
        return redirect()->route('tags.index');
    }

    public function show(Tag $tag)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view('admin::tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        // TODO
        return redirect()->route('tags.index');
    }

    public function destroy(Tag $tag)
    {
        //
    }
}

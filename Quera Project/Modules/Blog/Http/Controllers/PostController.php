<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Transformers\PostResource;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::latest()->whereApproved(1)->with(['comments' => function($query) {
            $query->whereApproved(1)->get();
        }])->paginate(8));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        $post->increment('view');
        return new PostResource($post);
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}

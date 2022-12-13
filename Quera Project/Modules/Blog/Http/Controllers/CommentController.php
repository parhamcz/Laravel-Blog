<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Requests\StoreCommentRequest;
use Modules\Blog\Transformers\CommentResource;

class CommentController extends Controller
{
    public function index(Post $post)
    {
        $comments = $post->comments()->whereApproved(1)->latest()->get();
        $data = $comments->whereNull('parent_id');
        return response()->json([
            'data' => CommentResource::collection($data),
            'count' => count($comments)
        ]);
    }

    public function store(Request $request)
    {
        $request->user()->comments()->create($request->all());
        return response('نظر ثبت گردید');
    }

    public function show(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}


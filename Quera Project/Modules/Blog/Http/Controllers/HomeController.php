<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\Post;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Transformers\BaseResource;
use Modules\Blog\Transformers\PostResource;

class HomeController extends Controller
{
    public function base()
    {
        $theme = Theme::where('active', 1)->first();
        return new BaseResource($theme);
    }

    public function search($text)
    {
        return PostResource::collection(Post::search($text)->latest()->whereApproved(1)->paginate(8));
    }
}

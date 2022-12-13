<?php

namespace Modules\Blog\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'body' => $this->body,
            'images' => $this->images,
            'created_at' => $this->created_at,
            'view' => $this->view,
            'user_name' => $this->user->name,
            'user_family' => $this->user->family,
            'categories' => $this->categories->pluck('name'),
            'tags' => $this->tags->pluck('name'),
            'comments_count' => count($this->comments)
        ];
    }
}

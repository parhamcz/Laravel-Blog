<?php

namespace Modules\Blog\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'created_at' => $this->created_at,
            'user_name' => $this->user->name,
            'user_family' => $this->user->family,
            'sub_comments' => CommentResource::collection($this->comments()->whereApproved(1)->get())
        ];
    }
}

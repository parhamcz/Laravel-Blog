<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class,);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'parent_id','id');
    }

    public function isApproved()
    {
        return boolval($this->approved);
    }
}

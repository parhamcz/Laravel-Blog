<?php /** @noinspection ALL */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->morphedByMany(Post::class,'catable');
    }

    public function subcategories()
    {
        return $this->hasMany(Category::class,'parent_id','id');
    }
}

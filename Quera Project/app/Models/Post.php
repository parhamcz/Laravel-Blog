<?php /** @noinspection ALL */

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    public $table='posts';

    protected $fillable = [
        'title','slug','description','body','view','images'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function path()
    {
        return '/posts/'.$this->slug;
    }

    public function isApproved()
    {
        return boolval($this->approved);
    }
}

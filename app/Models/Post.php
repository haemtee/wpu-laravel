<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //     protected $fillable = [
    //         'title',
    //         'excerpt',
    //         'body',
    //         'published_at',
    //     ];
    protected $guarded = ['id', 'created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

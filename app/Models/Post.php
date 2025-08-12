<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'category_id',
        'views',
        'meta_title',
        'meta_desc',
        'meta_keywords',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

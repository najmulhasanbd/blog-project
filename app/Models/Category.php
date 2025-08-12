<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_desc',
        'meta_keywords',
    ];
}

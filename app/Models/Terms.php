<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    protected $fillable = [
        'name',
        'description',
        'meta_title',
        'meta_desc',
        'meta_keywords',
    ];
}

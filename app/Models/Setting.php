<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'logo',
        'fab_icon',
        'phone',
        'email',
        'address',
        'copyright',
        'fb',
        'instagram',
        'twitter',
        'youtube',
        'meta_title',
        'meta_desc',
        'meta_key',
    ];
}

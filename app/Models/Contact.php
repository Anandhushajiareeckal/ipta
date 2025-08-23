<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'banner_img',
        'banner_desc',
        'map_url',
        'social_media',
        'description',
    ];
}

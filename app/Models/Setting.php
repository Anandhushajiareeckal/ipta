<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'description',
        'location',
        'phone',
        'email',
        'favicon',
    ];
}

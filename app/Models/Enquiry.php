<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'message',
    ];
}

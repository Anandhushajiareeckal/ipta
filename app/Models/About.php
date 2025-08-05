<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    protected $fillable = [
        'banner_image',
        'banner_head',
        'banner_description',
        'main_head',
        'main_description',
        'main_image',
        'image_2',
        'our',
        'head_2',
        'sub_head_1',
        'sub_desc_1',
        'sub_head_2',
        'sub_desc_2',
        'sub_head_3',
        'sub_desc_3',
        'rank_value_1',
        'rank_text_1',
        'rank_value_2',
        'rank_text_2',
        'rank_value_3',
        'rank_text_3',
        'rank_value_4',
        'rank_text_4',
    ];
}

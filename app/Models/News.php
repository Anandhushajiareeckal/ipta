<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

     protected $fillable = [
        'banner_desc',
        'main_img',
        'main_head',
        'main_desc',
        'slug',
    ];


    // Automatically generate slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = static::generateUniqueSlug($news->main_head);
        });

        static::updating(function ($news) {
            if ($news->isDirty('main_head')) {
                $news->slug = static::generateUniqueSlug($news->main_head, $news->id);
            }
        });
    }

    // Slug generator with uniqueness check
    protected static function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $original = $slug;
        $count = 1;

        while (static::where('slug', $slug)
            ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
            ->exists()) {
            $slug = $original . '-' . $count++;
        }

        return $slug;
    }
}

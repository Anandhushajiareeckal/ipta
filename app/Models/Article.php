<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use voku\helper\ASCII;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_desc',
        'main_img',
        'main_head',
        'main_desc',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($article) {
            $article->slug = static::generateUniqueSlug($article->main_head);
        });

        static::updating(function ($article) {
            if ($article->isDirty('main_head')) {
                $article->slug = static::generateUniqueSlug($article->main_head, $article->id);
            }
        });
    }

    protected static function generateUniqueSlug($title, $excludeId = null)
    {
        // Transliterate Malayalam to Latin (Manglish)
        $slug = ASCII::to_transliterate($title);

        // Remove unwanted characters
        $slug = preg_replace('/[^A-Za-z0-9\s]+/', '', $slug);

        // Replace spaces with hyphens
        $slug = preg_replace('/\s+/', '-', trim($slug));

        // Lowercase
        $slug = strtolower($slug);

        $original = $slug;
        $count = 1;

        while (static::where('slug', $slug)
            ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
            ->exists()
        ) {
            $slug = $original . '-' . $count++;
        }

        return $slug;
    }
}

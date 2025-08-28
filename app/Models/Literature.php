<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use voku\helper\ASCII;

class Literature extends Model
{
    protected $fillable = ['title', 'type', 'slug', 'description', 'images'];
    protected $casts = [
        'images' => 'array',
    ];

    protected static function boot()        
    {
        parent::boot();
        static::creating(function ($literature) {
            $literature->slug = static::generateUniqueSlug($literature->title);
        });
        static::updating(function ($literature) {
            if ($literature->isDirty('title')) {
                $literature->slug = static::generateUniqueSlug($literature->title, $literature->id);
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

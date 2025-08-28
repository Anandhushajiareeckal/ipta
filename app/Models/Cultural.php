<?php


namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use voku\helper\ASCII;

class Cultural extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_head',
        'main_img',
        'main_desc',
        'banner_desc',
        'slug',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($cultural) {
            $cultural->slug = static::generateUniqueSlug($cultural->main_head);
        });

        static::updating(function ($cultural) {
            if ($cultural->isDirty('main_head')) {
                $cultural->slug = static::generateUniqueSlug($cultural->main_head, $cultural->id);
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

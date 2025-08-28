<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use voku\helper\ASCII;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_head',
        'main_img',
        'main_desc',
        'banner_desc',
        'banner_img',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        // When creating a new event
        static::creating(function ($event) {
            if (empty($event->slug) && !empty($event->main_head)) {
                $event->slug = static::generateUniqueSlug($event->main_head);
            }
        });

        // When updating an event
        static::updating(function ($event) {
            if (empty($event->slug) && !empty($event->main_head)) {
                $event->slug = static::generateUniqueSlug($event->main_head, $event->id);
            }
        });
    }

    /**
     * Generate a unique slug.
     */
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

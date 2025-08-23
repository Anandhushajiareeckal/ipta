<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
    protected static function generateUniqueSlug($mainHead, $ignoreId = null)
    {
        $slug = Str::slug($mainHead);
        $originalSlug = $slug;
        $count = 1;

        // Keep looping until slug is unique
        while (static::where('slug', $slug)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}

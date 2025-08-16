<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Gallery extends Model
{
    protected $fillable = ['title', 'images'];
    protected $casts = [
        'images' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            $gallery->slug = static::generateUniqueSlug($gallery->title);
        });

        static::updating(function ($gallery) {
            if ($gallery->isDirty('title')) {
                $gallery->slug = static::generateUniqueSlug($gallery->title, $gallery->id);
            }
        });
    }

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

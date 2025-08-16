<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorial extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_head',
        'main_img',
        'main_desc',
        'banner_desc',
        'slug',
        'type',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($memorial) {
            $memorial->slug = static::generateUniqueSlug($memorial->main_head);
        });

        static::updating(function ($memorial) {
            if ($memorial->isDirty('main_head')) {
                $memorial->slug = static::generateUniqueSlug($memorial->main_head, $memorial->id);
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

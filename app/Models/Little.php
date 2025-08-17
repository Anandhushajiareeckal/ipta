<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Little extends Model
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

        static::creating(function ($little) {
            $little->slug = static::generateUniqueSlug($little->main_head);
        });

        static::updating(function ($little) {
            if ($little->isDirty('main_head')) {
                $little->slug = static::generateUniqueSlug($little->main_head, $little->id);
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

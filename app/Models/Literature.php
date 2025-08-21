<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

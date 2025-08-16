<?php


namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

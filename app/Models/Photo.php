<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'image_path', 'title', 'order_column'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Auto-clear homepage cache when photo is added/updated/deleted.
     * This ensures admin changes appear immediately on the website.
     */
    protected static function booted(): void
    {
        $clearCache = fn() => Cache::forget('home_photos');
        static::saved($clearCache);
        static::deleted($clearCache);
    }
}

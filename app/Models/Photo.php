<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'image_path', 'title', 'order_column'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the full public URL for the photo image from S3 (Supabase).
     */
    public function getImageUrlAttribute(): string
    {
        if (!$this->image_path) return '';
        return Storage::disk('s3')->url($this->image_path);
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

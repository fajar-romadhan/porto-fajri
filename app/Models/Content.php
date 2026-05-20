<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Content extends Model
{
    use HasFactory;

    protected $fillable = ['section', 'content', 'image_path'];

    protected $casts = [
        'image_path' => 'array',
    ];

    /**
     * Auto-clear homepage cache AND sitemap cache when content is updated.
     * This covers logo text, about text, hero background, footer text changes.
     */
    protected static function booted(): void
    {
        $clearCache = function () {
            Cache::forget('home_contents');
            Cache::forget('sitemap_xml'); // hero image change = sitemap lastmod should update
        };
        static::saved($clearCache);
        static::deleted($clearCache);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * Auto-clear homepage cache when category is added/updated/deleted.
     */
    protected static function booted(): void
    {
        $clearCache = fn() => Cache::forget('home_categories');
        static::saved($clearCache);
        static::deleted($clearCache);
    }
}

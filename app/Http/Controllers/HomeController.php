<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Cache queries for 5 minutes — refreshes automatically when data changes
        $allPhotos = Cache::remember('home_photos', 300, function () {
            return Photo::with('category')
                ->orderBy('order_column')
                ->orderBy('created_at', 'desc')
                ->get();
        });

        $categories = Cache::remember('home_categories', 300, function () {
            return Category::withCount('photos')->get();
        });

        $contents = Cache::remember('home_contents', 300, function () {
            return Content::all()->keyBy('section');
        });

        // Group foto per slug kategori (untuk JS gallery) — derived from cached data
        $photosByCategory = $allPhotos->groupBy(
            fn($p) => $p->category->slug ?? 'uncategorized'
        );

        // Tambahkan cover photo & photo_count ke setiap kategori
        $categoriesWithCover = $categories->map(function ($cat) use ($photosByCategory) {
            $cat->cover       = $photosByCategory->get($cat->slug)?->first();
            $cat->photo_count = $photosByCategory->get($cat->slug)?->count() ?? 0;
            return $cat;
        })->filter(fn($cat) => $cat->photo_count > 0);

        return view('welcome', compact(
            'categories',
            'allPhotos',
            'contents',
            'photosByCategory',
            'categoriesWithCover'
        ));
    }
}

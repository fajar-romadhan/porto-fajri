<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\HomeController;
use App\Models\Photo;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Homepage — throttle 60 requests/minute per IP to prevent scraping/DoS
Route::get('/', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('throttle:60,1');

// Sitemap XML — dynamic with lastmod & cache (1 hour)
Route::get('/sitemap.xml', function () {
    $xml = Cache::remember('sitemap_xml', 3600, function () {
        $lastPhoto    = Photo::latest('updated_at')->first();
        $lastCategory = Category::latest('updated_at')->first();

        $lastmod = now()->toAtomString();
        if ($lastPhoto) {
            $lastmod = $lastPhoto->updated_at->toAtomString();
        }

        $out  = '<?xml version="1.0" encoding="UTF-8"?>';
        $out .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        $out .= '<url>';
        $out .= '<loc>' . url('/') . '</loc>';
        $out .= '<lastmod>' . $lastmod . '</lastmod>';
        $out .= '<changefreq>weekly</changefreq>';
        $out .= '<priority>1.0</priority>';
        $out .= '</url>';
        $out .= '</urlset>';

        return $out;
    });

    return response($xml, 200)
        ->header('Content-Type', 'application/xml')
        ->header('Cache-Control', 'public, max-age=3600');
})->name('sitemap');

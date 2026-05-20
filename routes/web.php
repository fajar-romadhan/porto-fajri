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

// Temporary route to run migrations on Vercel securely
Route::get('/setup-database', function () {
    if (request('key') !== env('APP_KEY')) {
        abort(403, 'Unauthorized');
    }
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--force' => true]);
    
    \App\Models\User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('fajri125#')
    ]);
    return 'Database migrated and admin user created (admin@admin.com / fajri125#)!';
});

// Route to run regular migrations safely on Vercel without losing data
Route::get('/run-migrations', function () {
    if (request('key') !== 'fajri125#' && request('key') !== env('APP_KEY')) {
        abort(403, 'Unauthorized');
    }
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    return 'Migrations run successfully!<br>Output: <pre>' . \Illuminate\Support\Facades\Artisan::output() . '</pre>';
});

// Temporary route to reset admin password securely
Route::get('/ping-deploy', function () {
    return 'deploy-success-2026';
});

Route::get('/reset-password', function () {
    if (request('key') !== 'resetadmin2026') {
        abort(403, 'Unauthorized');
    }
    $user = \App\Models\User::where('email', 'admin@admin.com')->first();
    if (!$user) {
        // User tidak ada, buat baru
        $user = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('fajri125#'),
        ]);
        return 'User admin tidak ditemukan, berhasil dibuat baru! Login dengan: admin@admin.com / fajri125#';
    }
    $user->password = bcrypt('fajri125#');
    $user->save();
    return 'Password berhasil direset! Login dengan: admin@admin.com / fajri125# (User ID: ' . $user->id . ')';
});

// Diagnostic route — test S3 connection and PHP config
Route::get('/check-s3', function () {
    if (request('key') !== 'fajri125#') {
        abort(403, 'Unauthorized');
    }

    $results = [];

    // PHP config
    $results['php_version']         = PHP_VERSION;
    $results['upload_max_filesize'] = ini_get('upload_max_filesize');
    $results['post_max_size']       = ini_get('post_max_size');
    $results['upload_tmp_dir']      = ini_get('upload_tmp_dir') ?: sys_get_temp_dir();
    $results['tmp_writable']        = is_writable(sys_get_temp_dir());
    $results['fileinfo_enabled']    = extension_loaded('fileinfo');

    // Env vars
    $results['FILESYSTEM_DISK']           = env('FILESYSTEM_DISK');
    $results['AWS_DEFAULT_REGION']        = env('AWS_DEFAULT_REGION');
    $results['AWS_BUCKET']                = env('AWS_BUCKET');
    $results['AWS_ENDPOINT']              = env('AWS_ENDPOINT');
    $results['AWS_USE_PATH_STYLE_ENDPOINT'] = env('AWS_USE_PATH_STYLE_ENDPOINT');
    $results['AWS_KEY_SET']               = !empty(env('AWS_ACCESS_KEY_ID'));
    $results['AWS_SECRET_SET']            = !empty(env('AWS_SECRET_ACCESS_KEY'));

    // S3 connection test
    try {
        $disk = \Illuminate\Support\Facades\Storage::disk('s3');
        $testFile = 'test-connection-' . time() . '.txt';
        $disk->put($testFile, 'S3 connection OK', 'public');
        $exists = $disk->exists($testFile);
        
        // Test temporary URL generation
        try {
            $tempUrl = $disk->temporaryUrl($testFile, now()->addMinutes(5));
            $results['s3_temp_url'] = $tempUrl;
        } catch (\Throwable $tempError) {
            $results['s3_temp_url'] = 'ERROR: ' . $tempError->getMessage();
        }

        $disk->delete($testFile);
        $results['s3_write_test'] = $exists ? 'SUCCESS' : 'FAILED (file not found after write)';
    } catch (\Throwable $e) {
        $results['s3_write_test'] = 'ERROR: ' . $e->getMessage();
        $results['s3_error_class'] = get_class($e);
    }

    return response()->json($results, 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
});

// Remote log viewing route
Route::get('/view-error', function () {
    if (request('key') !== 'fajri125#') {
        abort(403, 'Unauthorized');
    }
    if (file_exists('/tmp/laravel-error.log')) {
        return response(file_get_contents('/tmp/laravel-error.log'), 200, ['Content-Type' => 'text/plain']);
    }
    return 'No error logged yet in /tmp/laravel-error.log';
});


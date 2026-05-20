<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Class Namespace
    |--------------------------------------------------------------------------
    */
    'class_namespace' => 'App\\Livewire',

    /*
    |--------------------------------------------------------------------------
    | View Path
    |--------------------------------------------------------------------------
    */
    'view_path' => resource_path('views/livewire'),

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    */
    'layout' => 'components.layouts.app',

    'lazy_placeholder' => null,

    /*
    |--------------------------------------------------------------------------
    | Temporary File Uploads
    |--------------------------------------------------------------------------
    |
    | On Vercel (serverless), the local filesystem is read-only except /tmp.
    | We MUST use S3 (Supabase) for temporary file storage so Filament's
    | FileUpload component can work correctly in production.
    |
    */
    'temporary_file_upload' => [
        'disk'        => 's3',              // Use S3 (Supabase) — required for Vercel
        'rules'       => ['file', 'max:5120'],
        'directory'   => 'livewire-tmp',
        'middleware'  => 'throttle:60,1',
        'preview_mimes' => [
            'png', 'gif', 'bmp', 'svg', 'wav', 'mp4',
            'mov', 'avi', 'wmv', 'mp3', 'zip',
            'm4a', 'jpg', 'jpeg', 'mpga', 'webp', 'weba',
        ],
        'max_upload_time' => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Back Button Cache
    |--------------------------------------------------------------------------
    */
    'back_button_cache' => false,

    /*
    |--------------------------------------------------------------------------
    | Render On Redirect
    |--------------------------------------------------------------------------
    */
    'render_on_redirect' => false,

    'legacy_model_binding' => false,

    /*
    |--------------------------------------------------------------------------
    | Asset Injection
    |--------------------------------------------------------------------------
    */
    'inject_assets' => true,

    'inject_morph_markers' => true,

    /*
    |--------------------------------------------------------------------------
    | Navigate (SPA Mode)
    |--------------------------------------------------------------------------
    */
    'navigate' => [
        'show_progress_bar' => true,
        'progress_bar_color' => '#2299dd',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pagination Theme
    |--------------------------------------------------------------------------
    */
    'pagination_theme' => 'tailwind',

];

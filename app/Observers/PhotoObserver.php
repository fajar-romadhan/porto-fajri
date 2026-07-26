<?php

namespace App\Observers;

use App\Models\Photo;
use App\Models\ActivityLog;

class PhotoObserver
{
    public function created(Photo $photo): void
    {
        ActivityLog::create([
            'admin_name' => 'Fajri',
            'action_type' => 'CREATE',
            'module' => 'Foto',
            'description' => "Mengunggah foto portofolio baru '" . ($photo->title ?? 'Tanpa Judul') . "' di Kategori " . ($photo->category->name ?? 'Umum'),
            'ip_address' => request()->ip(),
        ]);
    }

    public function updated(Photo $photo): void
    {
        ActivityLog::create([
            'admin_name' => 'Fajri',
            'action_type' => 'UPDATE',
            'module' => 'Foto',
            'description' => "Perbarui data foto '" . ($photo->title ?? 'Tanpa Judul') . "'",
            'ip_address' => request()->ip(),
        ]);
    }

    public function deleted(Photo $photo): void
    {
        ActivityLog::create([
            'admin_name' => 'Fajri',
            'action_type' => 'DELETE',
            'module' => 'Foto',
            'description' => "Menghapus foto portofolio '" . ($photo->title ?? 'Tanpa Judul') . "'",
            'ip_address' => request()->ip(),
        ]);
    }
}

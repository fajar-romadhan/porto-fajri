<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\ActivityLog;

class CategoryObserver
{
    public function created(Category $category): void
    {
        try {
            ActivityLog::create([
                'admin_name'  => 'Fajri',
                'action_type' => 'CREATE',
                'module'      => 'Kategori',
                'description' => "Menambahkan kategori portofolio baru '" . ($category->name ?? 'Kategori') . "'",
                'ip_address'  => request()->ip(),
            ]);
        } catch (\Throwable $e) {}
    }

    public function updated(Category $category): void
    {
        try {
            ActivityLog::create([
                'admin_name'  => 'Fajri',
                'action_type' => 'UPDATE',
                'module'      => 'Kategori',
                'description' => "Perbarui nama/data kategori '" . ($category->name ?? 'Kategori') . "'",
                'ip_address'  => request()->ip(),
            ]);
        } catch (\Throwable $e) {}
    }

    public function deleted(Category $category): void
    {
        try {
            ActivityLog::create([
                'admin_name'  => 'Fajri',
                'action_type' => 'DELETE',
                'module'      => 'Kategori',
                'description' => "Menghapus kategori portofolio '" . ($category->name ?? 'Kategori') . "'",
                'ip_address'  => request()->ip(),
            ]);
        } catch (\Throwable $e) {}
    }
}

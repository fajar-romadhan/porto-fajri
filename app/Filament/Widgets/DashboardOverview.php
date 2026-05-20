<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Photo;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected static bool $isDiscovered = false;
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $photoCount    = Photo::count();
        $categoryCount = Category::count();

        $step = match(true) {
            $categoryCount === 0 => '👉 Langkah 1: Buat kategori dulu (klik menu Kategori di kiri)',
            $photoCount === 0    => '👉 Langkah 2: Sekarang upload foto (klik menu Foto di kiri)',
            default              => '✅ Semua siap! Cek website Anda dengan klik kartu di bawah.',
        };

        return [
            Stat::make('📸 Total Foto', $photoCount)
                ->description($photoCount === 0
                    ? '⚠️ Belum ada foto — klik di sini untuk upload'
                    : 'Foto aktif tampil di website')
                ->color($photoCount === 0 ? 'danger' : 'success')
                ->url('/kelola/photos'),

            Stat::make('🗂️ Kategori', $categoryCount)
                ->description($categoryCount === 0
                    ? '⚠️ Buat kategori dulu sebelum upload foto'
                    : 'Kategori tersedia di portfolio')
                ->color($categoryCount === 0 ? 'warning' : 'success')
                ->url('/kelola/categories'),

            Stat::make('🌐 Website', 'Aktif ✅')
                ->description('Klik untuk membuka website Anda')
                ->color('primary')
                ->url(url('/')),
        ];
    }
}

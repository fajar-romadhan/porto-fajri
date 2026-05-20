<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardOverview;
use App\Filament\Widgets\AdminGuideWidget;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon  = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Beranda';
    protected static ?string $title           = 'Selamat Datang, Admin 👋';

    public function getWidgets(): array
    {
        return [
            DashboardOverview::class,
            AdminGuideWidget::class,
        ];
    }

    public function getColumns(): int | string | array
    {
        return 3;
    }
}

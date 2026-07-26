<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\WelcomeBannerWidget;
use App\Filament\Widgets\DashboardOverview;
use App\Filament\Widgets\AdminGuideWidget;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon  = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Beranda';

    public function getTitle(): string
    {
        return 'Selamat Datang, Fajri ⚡';
    }

    public function getWidgets(): array
    {
        return [
            WelcomeBannerWidget::class,
            DashboardOverview::class,
            AdminGuideWidget::class,
        ];
    }

    public function getColumns(): int | string | array
    {
        return 3;
    }
}

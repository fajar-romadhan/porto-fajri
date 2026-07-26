<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class WelcomeBannerWidget extends Widget
{
    protected static bool $isDiscovered = false;
    protected static string $view       = 'filament.widgets.welcome-banner';
    protected static ?int $sort         = -10;

    public function getColumnSpan(): int | string | array
    {
        return 'full';
    }
}

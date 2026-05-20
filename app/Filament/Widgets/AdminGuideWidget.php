<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class AdminGuideWidget extends Widget
{
    protected static bool $isDiscovered  = false;
    protected static string $view        = 'filament.widgets.admin-guide';
    public function getColumnSpan(): int | string | array
    {
        return 'full';
    }
    protected static ?int $sort          = 10;
}

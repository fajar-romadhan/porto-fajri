<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class DigitalClockWidget extends Widget
{
    protected static bool $isDiscovered = false;
    protected static string $view       = 'filament.widgets.digital-clock';
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort         = -5;

    public function getColumnSpan(): int | string | array
    {
        return 'full';
    }
}

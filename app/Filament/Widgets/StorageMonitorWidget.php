<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class StorageMonitorWidget extends Widget
{
    protected static bool $isDiscovered = false;
    protected static string $view       = 'filament.widgets.storage-monitor';
    protected int | string | array $columnSpan = 'full';

    public function getColumnSpan(): int | string | array
    {
        return 'full';
    }
}

<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Photo;
use App\Models\Category;

class LiveVisitorAnalyticsWidget extends Widget
{
    protected static bool $isDiscovered = false;
    protected static string $view       = 'filament.widgets.live-visitor-analytics';
    protected int | string | array $columnSpan = [
        'default' => 'full',
        'md'      => 2,
    ];

    public function getColumnSpan(): int | string | array
    {
        return [
            'default' => 'full',
            'md'      => 2,
        ];
    }
}

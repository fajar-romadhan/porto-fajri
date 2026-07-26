<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\VisitorSession;

class LiveVisitorAnalyticsWidget extends Widget
{
    protected static bool $isDiscovered = false;
    protected static string $view       = 'filament.widgets.live-visitor-analytics';
    protected int | string | array $columnSpan = 'full';

    public function getColumnSpan(): int | string | array
    {
        return 'full';
    }

    protected function getViewData(): array
    {
        // Track current admin's heartbeat ping
        VisitorSession::track();

        $activeVisitors = VisitorSession::getActiveCount();
        $totalViews     = VisitorSession::getTotalViews();

        return [
            'activeVisitors' => $activeVisitors,
            'totalViews'     => number_format($totalViews, 0, ',', '.') . 'x',
        ];
    }
}

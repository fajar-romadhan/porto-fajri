<?php

namespace App\Observers;

use App\Models\WebsiteContent;
use App\Models\ActivityLog;

class WebsiteContentObserver
{
    public function updated(WebsiteContent $content): void
    {
        ActivityLog::create([
            'admin_name' => 'Fajri',
            'action_type' => 'SETTING',
            'module' => 'Teks Website',
            'description' => "Perbarui informasi teks website/kontak studio (" . ($content->key ?? 'Teks') . ")",
            'ip_address' => request()->ip(),
        ]);
    }
}

<?php

namespace App\Observers;

use App\Models\Content;
use App\Models\ActivityLog;

class ContentObserver
{
    public function updated(Content $content): void
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

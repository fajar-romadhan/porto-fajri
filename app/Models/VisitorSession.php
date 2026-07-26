<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class VisitorSession extends Model
{
    protected $fillable = [
        'session_id',
        'ip_address',
        'user_agent',
        'page_url',
        'last_activity',
    ];

    protected $casts = [
        'last_activity' => 'datetime',
    ];

    /**
     * Record or update visitor heartbeat ping
     */
    public static function track(?string $pageUrl = null): void
    {
        try {
            $sessionId = session()->getId();
            if (!$sessionId) {
                $sessionId = md5(request()->ip() . request()->header('User-Agent'));
            }

            static::updateOrCreate(
                ['session_id' => $sessionId],
                [
                    'ip_address'    => request()->ip(),
                    'user_agent'    => request()->header('User-Agent'),
                    'page_url'      => $pageUrl ?? request()->fullUrl(),
                    'last_activity' => Carbon::now('Asia/Jakarta'),
                ]
            );
        } catch (\Throwable $e) {
            // Logged or swallowed silently
        }
    }

    /**
     * Get count of visitors active within last 5 minutes
     */
    public static function getActiveCount(): int
    {
        try {
            $fiveMinutesAgo = Carbon::now('Asia/Jakarta')->subMinutes(5);
            $count = static::where('last_activity', '>=', $fiveMinutesAgo)->count();
            return max(1, $count); // Minimum 1 for admin session
        } catch (\Throwable $e) {
            return 1;
        }
    }

    /**
     * Get total view count
     */
    public static function getTotalViews(): int
    {
        try {
            return static::count() + 1420; // Base baseline + real records
        } catch (\Throwable $e) {
            return 1420;
        }
    }
}

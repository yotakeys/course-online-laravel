<?php

namespace App\Schedules;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserSchedule
{
    public static function updateCacheEmail(): void
    {
        Cache::forget('emails');

        $emails = User::pluck('email')->toArray();
        Cache::put('emails', $emails, 600);
    }
}

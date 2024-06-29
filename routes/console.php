<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Broadcast;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Schedule::command('proxmox:cleanup-pending-container-deletions')->dailyAt("12:01");

Broadcast::channel('order-shipped', function ($user) {
    return ['id' => $user->id, 'name' => $user->name];
});
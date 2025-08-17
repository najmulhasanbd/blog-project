<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

if (!function_exists('getSiteSetting')) {
    function getSiteSetting() {
        return Cache::remember('site_setting', 60 * 60, function () {
            return DB::table('settings')->first();
        });
    }
}

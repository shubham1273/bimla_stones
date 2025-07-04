<?php

namespace App;

use App\Models\GeneralSetting;

class Helper
{
    public static function getSetting($key, $default = null)
    {
        $setting = GeneralSetting::where('key', $key)->first();

        return $setting ? $setting->value : $default;
    }
}

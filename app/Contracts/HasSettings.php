<?php

namespace App\Contracts;

use App\Models\Setting;

trait HasSettings
{
    public function getSetting(
        string $name,
        string $default = '',
        string $type = 'string')
    {
        $setting = Setting::get($name);
        return ($setting ? $setting : '');
    }
}

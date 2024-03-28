<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'value',
    ];

    public static function get(string $name): string
    {
        $setting = Setting::where("name", "=", $name)->first();
        return $setting ? $setting->value : '';
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class SettingCached extends Model
{
    use HasFactory;
    use QueryCacheable;

    public $table = 'settings';

    protected $fillable = [
        'name',
        'description',
        'type',
        'value',
    ];

    /**
     * Specify the amount of time to cache queries.
     * Do not specify or set it to null to disable caching.
     *
     * @var int|\DateTime
     */
    public int|\DateTime $cacheFor = 3600;

    /**
     * The tags for the query cache. Can be useful
     * if flushing cache for specific tags only.
     *
     * @var null|array
     */
    public $cacheTags = ['settings'];

    /**
     * A cache prefix string that will be prefixed
     * on each cache key generation.
     *
     * @var string
     */
    public $cachePrefix = 'settings_';

    /**
     * The cache driver to be used.
     *
     * @var string
     */
    public $cacheDriver = 'redis';

    public static function get(string $name): string
    {
        $setting = Setting::where("name", "=", $name)->first();
        return $setting ? $setting->value : '';
    }
}

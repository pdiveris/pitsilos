<?php

namespace App\Models;

class Site
{
    /**
     * Enable / disable menu
     *
     * @return bool
     */
    public static function hasStartMenu(): bool
    {
        return env('CMS_HAS_PAGES') &&
            Page::where('enabled', '=', true)
                ->where('published_at', '<=', now())
                ->where('options->menu', 'start')
                ->count() > 0;
    }

    /**
     * Enable / disable menu
     *
     * @return bool
     */
    public static function hasEndMenu(): bool
    {
        return env('CMS_HAS_PAGES') &&
            Page::where('enabled', '=', true)
                ->where('published_at', '<=', now())
                ->where('options->menu', 'end')
                ->count() > 0;
    }

    public static function getStartMenuItems(): mixed
    {
        return Page::where('enabled', '=', true)
            ->where('published_at', '<=', now())
            ->where('options->menu', 'start')
            ->get();
    }

    public static function getEndMenuItems(): mixed
    {
        return Page::where('enabled', '=', true)
            ->where('published_at', '<=', now())
            ->where('options->menu', 'end')
            ->get();
    }
}

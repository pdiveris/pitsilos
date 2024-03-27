<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function show(Media $slide): View
    {
        $locale = session()->get('locale') ?? app()->getLocale();

        return view(
            'slide',
            [
                'locale' => $locale,
                'slide' => $slide
            ]
        );
    }
}

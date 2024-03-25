<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function show(Media $slide): View
    {
        return view(
            'slide',
            [
                'slide' => $slide
            ]
        );
    }
}

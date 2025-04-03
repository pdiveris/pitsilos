<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Media;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function show(Gallery $gallery): View
    {
        $media = Media::where('gallery_id', '=', $gallery->id)
            ->where('enabled', '=', 1)
            ->get();

        return view(
            'gallery',
            [
                'locale' => $this->getLocale(),
                'media' => $media,
                'section' => $gallery->name,
            ]
        );
    }

    public function test(Gallery $gallery): View
    {
        $media = Media::where('gallery_id', '=', 5)
            ->where('enabled', '=', 1)
            ->get();

        return view(
            'test',
            [
                'locale' => $this->getLocale(),
                'media' => $media,
                'section' => 'test',
            ]
        );
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Media;
use Illuminate\View\View;
use App\Contracts\HasSchema;

class GalleryController extends Controller
{
    use HasSchema;

    public function show(Gallery $gallery): View
    {
        if ($gallery->id === null) {
            $media = Media::where('enabled', '=', 1)
                ->inRandomOrder()
                ->get();
        } else {
            $media = Media::where('gallery_id', '=', $gallery->id)
                ->where('enabled', '=', 1)
                ->inRandomOrder()
                ->get();
        }

        return view(
            'gallery',
            [
                'locale' => $this->getLocale(),
                'media' => $media,
                'schema' => $this->getSchema(),
                'date_updated' => Media::where("enabled", "=", 1)
                    ->orderBy("updated_at", "desc")
                    ->first()
                    ->updated_at->toIso8601String(),
                'section' => 'Gallery / ' . $gallery->name,
            ]
        );
    }

    public function uhu(): View
    {
        $media = Media::where('enabled', '=', 1)
            ->inRandomOrder()
            ->get();

        return view(
            'uhu',
            [
                'locale' => $this->getLocale(),
                'media' => $media,
                'section' => 'UHU',
            ]
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;

class ExhibitionController extends Controller
{
    public function __invoke(Exhibition $exhibition)
    {
        if ($exhibition->id === null) {
            $exhibition = Exhibition::where('featured', '=', 1)
                ->first();

            return view(
                'exhibitions.featured',
                [
                    'locale' => $this->getLocale(),
                    'page' => $exhibition,
                    'section' => $exhibition->title,
                ]
            );
        }

        return view(
            'exhibitions.any',
            [
                'locale' => $this->getLocale(),
                'page' => $exhibition,
                'section' => $exhibition->title,
            ]
        );
    }
}

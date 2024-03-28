<?php

namespace App\Http\Controllers;
use App\Contracts\NegotiatesLocale;
use App\Models\Gallery;

class HomeController extends Controller
{
    use NegotiatesLocale;

    public function __invoke()
    {
        return view(
            'home',
            [
                'locale' => $this->getLocale(),
                'galleries' => Gallery::where('enabled', '=', true)->get(),
            ]
        );
    }
}

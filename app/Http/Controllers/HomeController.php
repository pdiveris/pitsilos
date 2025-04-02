<?php

namespace App\Http\Controllers;
use App\Contracts\NegotiatesLocale;
use App\Models\Gallery;
use Illuminate\Http\Request;
use IP2LocationLaravel;

class HomeController extends Controller
{
    use NegotiatesLocale;

    public function __invoke(Request $request)
    {
        $ip = $request->ip();
        $records = IP2LocationLaravel::get($ip, 'bin');

        if ($records['countryCode'] !== 'GR') {
            return view(
                'home',
                [
                    'locale' => $this->getLocale(),
                    'galleries' => Gallery::where('enabled', '=', true)->get(),
                ]
            );
        }
        return view(
        'greece',
            [
                'locale' => $this->getLocale(),
            ]
        );
    }
}

<?php
namespace App\Http\Controllers;

use App\Contracts\HasSchema;
use App\Contracts\NegotiatesLocale;
use App\Models\Gallery;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use IP2LocationLaravel;

class HomeController extends Controller
{
    use NegotiatesLocale;
    use HasSchema;

    public function __invoke(Request $request): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $ip = $request->ip();
        $records = IP2LocationLaravel::get($ip, 'bin');

        if ($records['countryCode'] !== 'GR') {
            return view(
                'home',
                [
                    'locale' => $this->getLocale(),
                    'galleries' => Gallery::where('enabled', '=', true)
                        ->inRandomOrder()
                        ->get(),
                    'schema' => $this->getSchema(),
                    'section' => 'Home',
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

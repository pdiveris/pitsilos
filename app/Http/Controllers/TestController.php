<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IP2LocationLaravel;

class TestController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        // GR = Greece
        $ip = $request->ip();
        $records = IP2LocationLaravel::get($ip, 'bin');
        dd($records);
    }
}

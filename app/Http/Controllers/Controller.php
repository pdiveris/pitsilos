<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Contracts\HasSettings;
use App\Contracts\NegotiatesLocale;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, HasSettings, NegotiatesLocale;
}

<?php

namespace App\Http\Controllers;

use App\Models\Page;

/**
 * Try to find a page from slug as a response to fallback route
 * Should return 404 if no (enabled) page was found
 */
class ContentController extends Controller
{
    public function __invoke(Page $page)
    {
        return view(
            'content',
            [
                'page' => $page
            ]
        );
    }
}

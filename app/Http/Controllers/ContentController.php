<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use App\Contracts\HasSchema;

/**
 * Try to find a page from slug as a response to fallback route
 * Should return 404 if no (enabled) page was found
 */
class ContentController extends Controller
{
    use HasSchema;

    public function __invoke(Page $page): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view(
            'content',
            [
                'locale' => $this->getLocale(),
                'page' => $page,
                'section' => $page->title,
                'date_updated' => $page->updated_at->toISOString(),
                'schema' => $this->getSchema(),
            ]
        );
    }
}

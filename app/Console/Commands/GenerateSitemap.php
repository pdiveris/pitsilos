<?php

namespace App\Console\Commands;

use App\Models\Exhibition;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Manually create sitemap
        $sitemap = Sitemap::create();

        // Static pages
        $sitemap->add('/');
        $sitemap->add('/about-nikos');
        $sitemap->add('/contact');
        $sitemap->add('/gallery');
        $sitemap->add('/exhibition');

        // Dynamic pages
        $pages = Page::where("enabled", "=", true)->get();
        foreach ($pages as $page) {
            $sitemap->add("/{$page->slug}");
        }

        // Galleries
        $galleries = Gallery::where("enabled", "=", true)->get();
        foreach ($galleries as $gallery) {
            $slug = strtolower($gallery->name);
            $sitemap->add("/gallery/{$slug}");
        }

        // Add Exhibitions
        $exhibitions = Exhibition::where("enabled", "=", true)->get();
        foreach ($exhibitions as $exhibition) {
            $sitemap->add("/exhibitions/{$exhibition->slug}");
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}

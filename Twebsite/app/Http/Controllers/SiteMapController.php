<?php

namespace App\Http\Controllers;
use Spatie\Sitemap\SitemapGenerator;

class SiteMapController extends Controller
{
    public function generateSitemap()
    {
        $sitemap = SitemapGenerator::create(config('app.url'))
            ->getSitemap();

        $sitemap->writeToFile(public_path('sitemap.xml'));

        return response()->json(['message' => 'Sitemap generated successfully!']);
    }
}

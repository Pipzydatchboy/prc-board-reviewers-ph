<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| Sitemap & Robots.txt
|--------------------------------------------------------------------------
*/

// Simple, hand-crafted sitemap (cached 24h)
Route::get('/sitemap.xml', function () {
    $xml = Cache::remember('sitemap-xml', now()->addDay(), function () {
        $urls = [
            url('/'),
            url('/about'),
            url('/donation'),
            url('/donations/proof'),
            url('/privacy-policy'),
            url('/exams'),
            url('/cse-reviewers'),
            url('/let-reviewers'),
            url('/cle-reviewers'),
            url('/mle-reviewers'),
            url('/mtle-reviewers'),
            url('/cele-reviewers'),
            url('/foe-reviewers'),
            url('/mple-reviewers'),
            url('/lle-reviewers'),
        ];

        $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $u) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>{$u}</loc>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return $xml;
    });

    return response($xml, 200, ['Content-Type' => 'application/xml']);
});

// robots.txt
Route::get('/robots.txt', function () {
    $content  = "User-agent: *\n";
    $content .= "Allow: /\n\n";
    $content .= "Sitemap: " . url('/sitemap.xml');

    return response($content, 200, ['Content-Type' => 'text/plain']);
});

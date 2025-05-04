<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

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
    protected $description = 'Generate sitemap.xml for SEO';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $urls = [
            url('/'),
            url('/exams'),
            url('/exams/1/subjects'), // Civil Service
            url('/exams/2/subjects'), // LET
        ];

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        foreach ($urls as $url) {
            $sitemap .= '  <url>' . PHP_EOL;
            $sitemap .= '    <loc>' . $url . '</loc>' . PHP_EOL;
            $sitemap .= '    <lastmod>' . now()->toAtomString() . '</lastmod>' . PHP_EOL;
            $sitemap .= '    <changefreq>weekly</changefreq>' . PHP_EOL;
            $sitemap .= '    <priority>0.8</priority>' . PHP_EOL;
            $sitemap .= '  </url>' . PHP_EOL;
        }

        $sitemap .= '</urlset>';

        // Save to public/sitemap.xml
        file_put_contents(public_path('sitemap.xml'), $sitemap);

        $this->info('✅ Sitemap generated successfully at public/sitemap.xml');
    }
}

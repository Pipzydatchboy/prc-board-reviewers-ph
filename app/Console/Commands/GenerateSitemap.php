<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

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
        // Crawl your full site and write to public/sitemap.xml
        SitemapGenerator::create(config('app.url'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully at public/sitemap.xml');
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Exam;

class GenerateSitemap extends Command
{
    protected $signature = 'app:generate-sitemap';
    protected $description = 'Generate sitemap.xml for SEO';

    public function handle()
    {
        $now = Carbon::now();

        $sitemap = Sitemap::create()
            // Homepage
            ->add(
                Url::create('/')
                    ->setLastModificationDate($now)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(1.0)
            )
            // Exams index page
            ->add(
                Url::create('/exams')
                    ->setLastModificationDate($now)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );

        // Dynamically add each exam overview and subjects list
        foreach (Exam::all() as $exam) {
            $slug = Str::slug($exam->type) . '-reviewers';
            // SEO-friendly alias for the exam overview
            $sitemap->add(
                Url::create("/{$slug}")
                    ->setLastModificationDate($exam->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );

            // Subjects listing for each exam
            $sitemap->add(
                Url::create("/exams/{$exam->id}/subjects")
                    ->setLastModificationDate($exam->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.7)
            );
        }

        // Static pages: About & Donation
        $sitemap
            ->add(
                Url::create('/about')
                    ->setLastModificationDate($now)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.5)
            )
            ->add(
                Url::create('/donation')
                    ->setLastModificationDate($now)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.5)
            );

        // Write to file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully at public/sitemap.xml');
    }
}

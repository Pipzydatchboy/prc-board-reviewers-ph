<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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
        $sitemap = Sitemap::create()
            ->add(
                Url::create('/')
                    ->setPriority(1.0)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            )
            ->add(
                Url::create('/exams')
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            )
            // Civil Service Exam subjects
            ->add(
                Url::create('/exams/1/subjects')
                    ->setPriority(0.7)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            )
            // LET (Licensure Exam for Teachers) subjects
            ->add(
                Url::create('/exams/2/subjects')
                    ->setPriority(0.7)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            )
           // LET (Criminology Licensure Examination) subjects
           ->add(
                Url::create('/exams/3/subjects')
                     ->setPriority(0.7)
                     ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
           )
           // MLE (Midwifery Licensure Examination) subjects
           ->add(
            Url::create('/exams/3/subjects')
                 ->setPriority(0.7)
                 ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
       )           
            ->add(
                Url::create('/about')
                    ->setPriority(0.5)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            )
            ->add(
                Url::create('/donation')
                    ->setPriority(0.5)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
            // → add more Url::create(...) calls here for other routes

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ Sitemap generated successfully at public/sitemap.xml');
    }
}

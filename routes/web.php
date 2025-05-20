<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProofOfDonationController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Models\Subject;    // make sure these exist
use App\Models\Part;       // make sure these exist

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Donation Overview Page
Route::get('/donation', [DonationController::class, 'index'])->name('donation');

// Proof of Donation Gallery
Route::get('/donations/proof', [ProofOfDonationController::class, 'index'])
    ->name('donations.proof');

// Privacy Policy
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])
     ->name('privacy.policy');

// Exams index
Route::get('/exams', [ExamController::class, 'index'])->name('exams.index');

// SEO-Friendly Reviewer Aliases
Route::group([], function () {
    Route::get('/cse-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 1)->name('cse.reviewers');
    Route::get('/let-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 2)->name('let.reviewers');
    Route::get('/cle-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 3)->name('cle.reviewers');
    Route::get('/mle-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 4)->name('mle.reviewers');
    Route::get('/mtle-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 5)->name('mtle.reviewers');
    Route::get('/cele-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 6)->name('cele.reviewers');
    Route::get('/foe-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 7)->name('foe.reviewers');
    Route::get('/mple-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 8)->name('mple.reviewers');
    Route::get('/lle-reviewers', [SubjectController::class, 'index'])
         ->defaults('exam', 9)->name('lle.reviewers');
});

// Generic subjects / parts / questions
Route::get('/exams/{exam}/subjects', [SubjectController::class, 'index'])
    ->name('subjects.index');
Route::get('/exams/{exam}/subjects/{subject}/parts', [PartController::class, 'index'])
    ->name('parts.index');
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}/questions', [QuestionController::class, 'index'])
    ->name('questions.index');

// Quiz Page (Inertia-driven)
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}', [QuizController::class, 'index'])
    ->name('quiz.index');

// Result Page (Blade/Inertia)
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}/result', function ($exam, $subject, $part) {
    return Inertia::render('ResultPage', compact('exam','subject','part'));
})->name('results.show');

/*
|--------------------------------------------------------------------------
| Sitemap & Robots.txt
|--------------------------------------------------------------------------
*/

Route::get('/sitemap.xml', function () {
    // Build & cache for 24h
    $xml = Cache::remember('sitemap-xml', now()->addDay(), function () {
        $path = storage_path('app/sitemap.xml');

        // Start a new sitemap
        $sitemap = Sitemap::create()
            // Static pages
            ->add(Url::create(url('/'))->setPriority(1.0)->setChangeFrequency('daily'))
            ->add(Url::create(url('/about'))->setChangeFrequency('monthly'))
            ->add(Url::create(url('/donation')))
            ->add(Url::create(url('/donations/proof')))
            ->add(Url::create(url('/privacy-policy')))
            ->add(Url::create(url('/exams')));

        // Alias pages
        $aliases = [
            'cse.reviewers' => [],
            'let.reviewers' => [],
            'cle.reviewers' => [],
            'mle.reviewers' => [],
            'mtle.reviewers' => [],
            'cele.reviewers' => [],
            'foe.reviewers' => [],
            'mple.reviewers' => [],
            'lle.reviewers' => [],
        ];
        foreach (array_keys($aliases) as $routeName) {
            $sitemap->add(Url::create(route($routeName)));
        }

        // Dynamic: subjects → parts → quiz/result
        // Assumes Subject and Part models exist and match your DB
        foreach (Subject::all() as $subject) {
            $exam  = $subject->exam;    // or however you link exam
            $sitemap->add(
                Url::create(route('parts.index', [
                    'exam'    => $exam,
                    'subject' => $subject->id,
                ]))
            );

            foreach (Part::where('subject_id', $subject->id)->get() as $part) {
                $sitemap->add(Url::create(route('quiz.index', [
                    'exam'    => $exam,
                    'subject' => $subject->id,
                    'part'    => $part->number,
                ])));
                $sitemap->add(Url::create(route('results.show', [
                    'exam'    => $exam,
                    'subject' => $subject->id,
                    'part'    => $part->number,
                ])));
            }
        }

        // Write & return
        $sitemap->writeToFile($path);
        return file_get_contents($path);
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

/*
|--------------------------------------------------------------------------
| Authenticated Routes (Dashboard)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','verified'])->group(function() {
    Route::get('/dashboard', function() {
        return Inertia::render('Dashboard', [
            'title' => 'My Dashboard | PRC Board Reviewers PH',
        ]);
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Fallback 404 → Home
|--------------------------------------------------------------------------
*/
Route::fallback(function() {
    return redirect()->route('home');
});

/*
|--------------------------------------------------------------------------
| Settings & Auth
|--------------------------------------------------------------------------
*/
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';


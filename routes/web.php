<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PrivacyPolicyController;  // <— added

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Homepage Route (uses HomeController)
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// About Us Page (uses AboutController)
Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

// Donation Page (uses DonationController)
Route::get('/donation', [DonationController::class, 'index'])
    ->name('donation');

// Privacy Policy Page (uses PrivacyPolicyController)
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])
    ->name('privacy.policy');

// Exam Flow Routes
Route::get('/exams', [ExamController::class, 'index'])
    ->name('exams.index');

// SEO-Friendly Reviewers Aliases
Route::get('/cse-reviewers', [SubjectController::class, 'index'])
    ->defaults('exam', 1)
    ->name('cse.reviewers');
Route::get('/let-reviewers', [SubjectController::class, 'index'])
    ->defaults('exam', 2)
    ->name('let.reviewers');
Route::get('/cle-reviewers', [SubjectController::class, 'index'])
    ->defaults('exam', 3)
    ->name('cle.reviewers');
Route::get('/mle-reviewers', [SubjectController::class, 'index'])
    ->defaults('exam', 4)
    ->name('mle.reviewers');
Route::get('/mtle-reviewers', [SubjectController::class, 'index'])
    ->defaults('exam', 5)
    ->name('mtle.reviewers');


// Generic Subjects listing (fallback for any other exam IDs)
Route::get('/exams/{exam}/subjects', [SubjectController::class, 'index'])
    ->name('subjects.index');
Route::get('/exams/{exam}/subjects/{subject}/parts', [PartController::class, 'index'])
    ->name('parts.index');
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}/questions', [QuestionController::class, 'index'])
    ->name('questions.index');

// Quiz Page
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}', [QuizController::class, 'index'])
    ->name('quiz.index');

// Result Page Route
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}/result', function ($exam, $subject, $part) {
    return Inertia::render('ResultPage', compact('exam', 'subject', 'part'));
})->name('results.show');

// Sitemap & Robots.txt for SEO
Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});
Route::get('/robots.txt', function () {
    return response(
        "User-agent: *\nDisallow:\nSitemap: " . url('/sitemap.xml'),
        200,
        ['Content-Type' => 'text/plain']
    );
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes (User Dashboard)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'title' => 'My Dashboard | PRC Board Reviewers PH',
        ]);
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Fallback Route (Catch-all 404 → Home)
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return redirect()->route('home');
});

/*
|--------------------------------------------------------------------------
| Settings & Authentication Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

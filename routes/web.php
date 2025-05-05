<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DonationController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Homepage Route (SEO Optimized)
Route::get('/', function () {
    return Inertia::render('HomePage', [
        'title' => 'Free Civil Service & LET Reviewers | PRC Board Reviewers PH',
    ]);
})->name('home');

// About Us Page (Lazy-loaded)
Route::get('/about', function () {
    return Inertia::render('About', [
        'title' => 'About Us | PRC Board Reviewers PH',
    ]);
})->name('about');

// Donation Page 
Route::get('/donation', [DonationController::class, 'index'])
     ->name('donation');

// Exam Flow Routes
Route::get('/exams', [ExamController::class, 'index'])->name('exams.index');
Route::get('/exams/{exam}/subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::get('/exams/{exam}/subjects/{subject}/parts', [PartController::class, 'index'])->name('parts.index');
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}/questions', [QuestionController::class, 'index'])->name('questions.index');
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}', [QuizController::class, 'index'])->name('quiz.index');

// Result Page Route
Route::get('/exams/{exam}/subjects/{subject}/parts/{part}/result', function ($exam, $subject, $part) {
    return Inertia::render('ResultPage', [
        'exam'    => $exam,
        'subject' => $subject,
        'part'    => $part,
    ]);
})->name('results.show');

// Sitemap & Robots for SEO
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
| Settings & Authentication Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

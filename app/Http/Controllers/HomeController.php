<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Show the application dashboard (homepage).
     */
    public function index()
    {
        $seo = [
            'title'       => 'Free Civil Service, LET, Criminology & More | PRC Board Reviewers PH',
            'description' => 'Get free online reviewers for Civil Service Exam, LET, Criminology, NAPOLCOM, Librarian, Midwifery, and more. Practice tests with detailed explanations at PRC Board Reviewers PH!',
            'canonical'   => url('/'),
            'heading'     => 'Your Ultimate Reviewer Hub',
        ];

        return Inertia::render('HomePage', [
            'seo' => $seo,
        ]);
    }
}

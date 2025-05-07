<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AboutController extends Controller
{
    /**
     * Show the About Us page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        // SEO metadata for About page
        $seo = [
            'title'       => 'About Us | PRC Board Reviewers PH',
            'description' => 'Learn about PRC Board Reviewers PH, your trusted source for free online reviewers for Civil Service Exam, LET, Criminology, and more.',
            'canonical'   => url('/about'),
            'heading'     => 'About PRC Board Reviewers PH',
        ];

        return Inertia::render('About', [
            'seo' => $seo,
        ]);
    }
}

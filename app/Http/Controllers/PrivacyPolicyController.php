<?php

// app/Http/Controllers/PrivacyPolicyController.php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $seo = [
            'title'       => 'Privacy Policy | PRC Board Reviewers PH',
            'description' => 'Learn how PRC Board Reviewers PH uses HTML5 local storage to keep your quiz progress private and secure.',
            'canonical'   => url('/privacy-policy'),
            'heading'     => 'Privacy Policy',
        ];

        return Inertia::render('PrivacyPolicy', [
            'seo' => $seo,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DonationController extends Controller
{
    /**
     * Show the donation page.
     */
    public function index()
    {
        // SEO metadata for Donation page
        $seo = [
            'title'       => 'Support PRC Board Reviewers PH',
            'description' => 'Help us keep PRC Board Reviewers PH free—scan the QR code to donate and empower future professionals.',
            'canonical'   => url('/donation'),
            'heading'     => '🙏 Be a Hero for Future Professionals',
        ];

        return Inertia::render('Donation', [
            'seo' => $seo,
        ]);
    }
}

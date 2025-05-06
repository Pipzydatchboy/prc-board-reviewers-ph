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
        return Inertia::render('Donation', [
            'title' => 'Support Us | PRC Board Reviewers PH',
        ]);
    }
}

<?php
// app/Http/Controllers/ProofOfDonationController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProofOfDonationController extends Controller
{
    /**
     * Display stored GCash donation proofs.
     */
    public function index()
    {
        // Grab all files from public/donations
        $files = Storage::disk('public')->files('donations');

        // Convert paths to URLs
        $images = collect($files)
            ->map(fn($path) => Storage::url($path))
            ->all();

        // SEO metadata specific for proof page
        $seo = [
            'title'       => 'Proof of Donation | PRC Board Reviewers PH',
            'description' => 'View GCash donation proofs supporting our free reviewer platform.',
            'canonical'   => url('/donations/proof'),
            'heading'     => 'Proof of Donation',
        ];

        return Inertia::render('ProofOfDonation', [
            'images' => $images,
            'seo'    => $seo,
        ]);
    }
}
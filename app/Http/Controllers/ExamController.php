<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ExamController extends Controller
{
    /**
     * Display a listing of available exams.
     */
    public function index()
    {
        // Static exam list for now
        $exams = [
            ['id' => 1, 'name' => 'Civil Service Exam (CSE)'],
            ['id' => 2, 'name' => 'Licensure Examination for Teachers (LET)'],
            ['id' => 3, 'name' => 'Criminology Licensure Examination (CLE)'],
            ['id' => 4, 'name' => 'Midwifery Licensure Examination (MLE)'],
            ['id' => 5, 'name' => 'Medical Technology Licensure Examination (MTLE)'],
            ['id' => 6, 'name' => 'Civil Engineering Licensure Examination (CELE)'],
            ['id' => 7, 'name' => 'Fire Officer Examination (FOE)'],
            ['id' => 8, 'name' => 'Master Plumber Licensure Examination (MPLE)'],
            ['id' => 9, 'name' => 'Librarian Licensure Examination (LLE)'],

        ];

        // SEO metadata
        $seo = [
            'title'       => 'Available Exams | PRC Board Reviewers PH',
            'description' => 'Browse free online reviewers for Civil Service Exam, LET, Criminology, Midwifery, and more at PRC Board Reviewers PH.',
            'canonical'   => url('/exams'),
            'heading'     => 'Available Exams',
        ];

        return Inertia::render('Exams', [
            'exams' => $exams,
            'seo'   => $seo,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ExamController extends Controller
{
    public function index()
    {
        // Static exam list for now
        $exams = [
            ['id' => 1, 'name' => 'Civil Service Exam (CSE)'],
            ['id' => 2, 'name' => 'Licensure Examination for Teachers (LET)'],
            ['id' => 3, 'name' => 'Criminology Licensure Examination (CLE)'],
        ];

        return Inertia::render('Exams', [
            'exams' => $exams,
        ]);
    }
}

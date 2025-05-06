<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class SubjectController extends Controller
{
    public function index($examId)
    {
        $subjects = [];
        $examName = '';

        if ($examId == 1) { // CSE
            $examName = 'Civil Service Exam (CSE)';
            $subjects = [
                ['id' => 1, 'name' => 'Numerical Ability'],
                ['id' => 2, 'name' => 'Analytical Ability'],
                ['id' => 3, 'name' => 'General Information'],
                ['id' => 4, 'name' => 'Verbal Ability'],
                ['id' => 5, 'name' => 'Clerical Ability'],
            ];
        } elseif ($examId == 2) { // LET
            $examName = 'Licensure Exam for Teachers (LET)';
            $subjects = [
                ['id' => 6, 'name' => 'Professional Education'],
                ['id' => 7, 'name' => 'General Education'],
                ['id' => 8, 'name' => 'Specialized Subject: Early Childhood Education'],
                ['id' => 9, 'name' => 'Specialized Subject: Special Needs Education'],
                ['id' => 10, 'name' => 'Specialized Subject: English'],
                ['id' => 11, 'name' => 'Specialized Subject: Filipino'],
                ['id' => 12, 'name' => 'Specialized Subject: Mathematics'],
                ['id' => 13, 'name' => 'Specialized Subject: Physical Science'],
                ['id' => 20, 'name' => 'Specialized Subject: Biological Science'],
                ['id' => 14, 'name' => 'Specialized Subject: Social Studies'],
                ['id' => 15, 'name' => 'Specialized Subject: Values Education'],
                ['id' => 16, 'name' => 'Specialized Subject: Technology and Livelihood Education'],
                ['id' => 17, 'name' => 'Specialized Subject: Technical - Vocational Teacher Education'],
                ['id' => 18, 'name' => 'Specialized Subject: Physical Education'],
                ['id' => 19, 'name' => 'Specialized Subject: Culture and Arts Education'],

                // Add more specialized subjects if needed
            ];

        } elseif ($examId == 3) { // CLE
            $examName = 'Criminilogy Licensure Examination (CLE)';
            $subjects = [
                ['id' => 21, 'name' => 'Criminal Jurisprudence and Procedure'],
                ['id' => 22, 'name' => 'Law Enforcement Administration'],
                ['id' => 23, 'name' => 'Crime Detection, Investigation & Prevention'],
                ['id' => 24, 'name' => 'Criminalistics'],
                ['id' => 25, 'name' => 'Correctional Administration'],
                ['id' => 26, 'name' => 'Criminal Sociology, Ethics and Human Relations'],

                // Add more specialized subjects if needed
            ];
        }

        return Inertia::render('Subjects', [
            'subjects' => $subjects,
            'examId' => $examId,
            'examName' => $examName, // Add this for breadcrumbs
        ]);
    }
}

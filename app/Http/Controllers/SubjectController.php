<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Carbon\Carbon;

class SubjectController extends Controller
{
    public function index($examId)
    {
        $subjects = [];
        $examName = '';

        // Define subjects and exam name based on examId
        if ($examId == 1) {
            // CSE
            $examName = 'Civil Service Exam (CSE)';
            $subjects = [
                ['id' => 1, 'name' => 'Numerical Ability'],
                ['id' => 2, 'name' => 'Analytical Ability'],
                ['id' => 3, 'name' => 'General Information'],
                ['id' => 4, 'name' => 'Verbal Ability'],
                ['id' => 5, 'name' => 'Clerical Ability'],
            ];
        } elseif ($examId == 2) {
            // LET
            $examName = 'Licensure Exam for Teachers (LET)';
            $subjects = [
                ['id' => 6,  'name' => 'Professional Education'],
                ['id' => 7,  'name' => 'General Education'],
                ['id' => 8,  'name' => 'Specialized Subject: Early Childhood Education'],
                ['id' => 9,  'name' => 'Specialized Subject: Special Needs Education'],
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
            ];
        } elseif ($examId == 3) {
            // CLE
            $examName = 'Criminology Licensure Examination (CLE)';
            $subjects = [
                ['id' => 21, 'name' => 'Criminal Jurisprudence and Procedure'],
                ['id' => 22, 'name' => 'Law Enforcement Administration'],
                ['id' => 23, 'name' => 'Crime Detection, Investigation & Prevention'],
                ['id' => 24, 'name' => 'Criminalistics'],
                ['id' => 25, 'name' => 'Correctional Administration'],
                ['id' => 26, 'name' => 'Criminal Sociology, Ethics and Human Relations'],
            ];
        } elseif ($examId == 4) {
            // MLE
            $examName = 'Midwifery Licensure Examination (MLE)';
            $subjects = [
                ['id' => 27, 'name' => 'Obstetrics & Gynecology'],
                ['id' => 28, 'name' => 'Fundamentals of Health Care'],
                ['id' => 29, 'name' => 'Infant Care & Feeding'],
                ['id' => 30, 'name' => 'Primary Health Care'],
                ['id' => 31, 'name' => 'Professional Growth & Development'],
            ];
        } elseif ($examId == 5) {
            // MTLE
            $examName = 'Medical Technology Licensure Examination (MTLE)';
            $subjects = [
                ['id' => 32, 'name' => 'Clinical Chemistry'],
                ['id' => 33, 'name' => 'Microbiology & Parasitology'],
                ['id' => 34, 'name' => 'Hematology'],
                ['id' => 35, 'name' => 'Blood Banking & Serology'],
                ['id' => 36, 'name' => 'Clinical Microscopy'],
                ['id' => 37, 'name' => 'Histopathologic Techniques & MT Laws'],
            ];
        } elseif ($examId == 6) { // CELE
            $examName = 'Civil Engineering Licensure Examination (CELE)';
            $subjects = [
                ['id' => 38, 'name' => 'Applied Mathematics, Surveying & Transportation Engineering'],
                ['id' => 39, 'name' => 'Hydraulics & Geotechnical Engineering'],
                ['id' => 40, 'name' => 'Structural Engineering & Construction'],
            ];
        } elseif ($examId == 7) { // FEO
            $examName = 'Fire Officer Examination (FOE)';
            $subjects = [
                ['id' => 41, 'name' => 'General Ability'],
                ['id' => 42, 'name' => 'Fire Suppression'],
                ['id' => 43, 'name' => 'Fire Safety & Prevention'],
                ['id' => 44, 'name' => 'Fire Investigation'],
                ['id' => 45, 'name' => 'Administrative Matters'],
            ];
        }  elseif ($examId == 8) { // MPLE
            $examName = 'Master Plumber Licensure Examination (MPLE)';
            $subjects = [
                ['id' => 46, 'name' => 'Plumbing Arithmetic'],
                ['id' => 47, 'name' => 'Sanitation, Plumbing Design & Installation'],
                ['id' => 48, 'name' => 'Plumbing Code'],
                ['id' => 49, 'name' => 'Practical Problems & Experiences'],
            ];
        } 

        // Build SEO metadata
        $now = Carbon::now();
        $seo = [
            'title'       => "$examName Subjects | PRC Board Reviewers PH",
            'description' => "Practice questions and quizzes for the $examName.",
            'canonical'   => url()->current(),
            'lastmod'     => $now->toDateString(),
            'heading'     => "$examName Subjects",
        ];

        switch ($examId) {
            case 1:
                $seo = [
                    'title'       => 'Free CSE Reviewers | PRC Board Reviewers PH',
                    'description' => 'Get free Civil Service Exam reviewers—practice questions, explanations, and study tips.',
                    'canonical'   => route('cse.reviewers'),
                    'lastmod'     => $now->toDateString(),
                    'heading'     => 'Free CSE Reviewers',
                ];
                break;
            case 2:
                $seo = [
                    'title'       => 'Free LET Reviewers | PRC Board Reviewers PH',
                    'description' => 'Get free LET reviewers—practice quizzes, detailed answers, and exam tips.',
                    'canonical'   => route('let.reviewers'),
                    'lastmod'     => $now->toDateString(),
                    'heading'     => 'Free LET Reviewers',
                ];
                break;
            case 3:
                $seo = [
                    'title'       => 'Free CLE Reviewers | PRC Board Reviewers PH',
                    'description' => 'Your free Criminology Licensure Exam reviewers—quiz bank and explanations.',
                    'canonical'   => route('cle.reviewers'),
                    'lastmod'     => $now->toDateString(),
                    'heading'     => 'Free CLE Reviewers',
                ];
                break;
            case 4:
                $seo = [
                    'title'       => 'Free MLE Reviewers | PRC Board Reviewers PH',
                    'description' => 'Get free Midwifery Licensure Exam reviewers—practice tests and review materials.',
                    'canonical'   => route('mle.reviewers'),
                    'lastmod'     => $now->toDateString(),
                    'heading'     => 'Free MLE Reviewers',
                ];
                break;
                case 5:
                    $seo = [
                        'title'       => 'Free MTLE Reviewers | PRC Board Reviewers PH',
                        'description' => 'Get free Medical Technology Licensure Exam reviewers—practice tests and review materials.',
                        'canonical'   => route('mle.reviewers'),
                        'lastmod'     => $now->toDateString(),
                        'heading'     => 'Free MLE Reviewers',
                    ];
                 break;
                 case 6:
                        $seo = [
                            'title'       => 'Free CELE Reviewers | PRC Board Reviewers PH',
                            'description' => 'Get free Civil Engineering Licensure Exam reviewers—practice tests and review materials.',
                            'canonical'   => route('cele.reviewers'),
                            'lastmod'     => $now->toDateString(),
                            'heading'     => 'Free CELE Reviewers',
                        ];
                 break;
                 case 7:
                        $seo = [
                            'title'       => 'Free FOE Reviewers | PRC Board Reviewers PH',
                            'description' => 'Get free Fire Officer Examination reviewers—practice tests and review materials.',
                            'canonical'   => route('foe.reviewers'),
                            'lastmod'     => $now->toDateString(),
                            'heading'     => 'Free FOE Reviewers',
                        ];
                        break;
        }

        return Inertia::render('Subjects', [
            'subjects' => $subjects,
            'examId'   => $examId,
            'examName' => $examName,
            'seo'      => $seo,
        ]);
    }
}

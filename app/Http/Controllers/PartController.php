<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Exam;
use App\Models\Subject;

class PartController extends Controller
{
    public function index($examId, $subjectId)
    {
        // Fetch exam and subject from database
        $exam    = Exam::findOrFail((int)$examId);
        $subject = Subject::findOrFail((int)$subjectId);

        // Define subject names (fallback to DB name if not in this list)
        $subjectNames = [
            1  => 'Numerical Ability',
            2  => 'Analytical Ability',
            3  => 'General Information',
            4  => 'Verbal Ability',
            5  => 'Clerical Ability',
            // ... LET subjects as before ...
            6  => 'Professional Education',
            7  => 'General Education',
            8  => 'pecialized Subject: Early Childhood Education',
            9  => 'Specialized Subject: Special Needs Education',
            10  => 'pecialized Subject: English',
            11  => 'Specialized Subject: Filipino',
            12  => 'Specialized Subject: Mathematics',
            13  => 'Specialized Subject: Physical Science',
            20  => 'Specialized Subject: Biological Science',
            14  => 'Specialized Subject: Social Studies',
            15  => 'Specialized Subject: Values Education',
            16  => 'Specialized Subject: Technology and Livelihood Education',
            17  => 'Specialized Subject: Technical - Vocational Teacher Education',
            18  => 'Specialized Subject: Physical Education',
            19  => 'Specialized Subject: Culture and Arts Education',
            //CLE Subjects
            21=>  'Criminal Jurisprudence and Procedure',
            22=>  'Law Enforcement Administration',
            23=>  'Crime Detection, Investigation & Prevention',
            24=>  'Criminalistics',
            25=>  'Correctional Administration',
            26=>  'Criminal Sociology, Ethics and Human Relations',
             //MLE Subjects
            27=>  'Obstetrics & Gynecology',
            28=>  'Fundamentals of Health Care',
            29=>  'Infant Care & Feeding',
            30=>  'Primary Health Care',
            31=>  'Professional Growth & Development',
        ];

        // Use our map or fallback to whatever is in the DB
        $subjectName = $subjectNames[$subjectId] ?? $subject->name;

        // Generate parts 1–10
        $parts = [];
        for ($i = 1; $i <= 10; $i++) {
            $parts[] = [
                'id'   => $i,
                'name' => "{$subjectName} Part {$i}",
            ];
        }

        return Inertia::render('Parts', [
            'parts'       => $parts,
            'subjectName'=> $subjectName,
            'examId'     => $exam->id,
            'subjectId'  => $subject->id,
            'examName'   => $exam->type,    // ← add this
        ]);
    }
}

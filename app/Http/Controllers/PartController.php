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
            19 => 'Specialized Subject: Culture and Arts Education',
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

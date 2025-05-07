<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Subject;
use App\Models\Question;
use Inertia\Inertia;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of questions for a specific exam, subject, and part.
     *
     * @param  int  $examId
     * @param  int  $subjectId
     * @param  int  $partId
     * @return \Inertia\Response
     */
    public function index($examId, $subjectId, $partId)
    {
        // Fetch exam and subject
        $exam    = Exam::findOrFail((int) $examId);
        $subject = Subject::findOrFail((int) $subjectId);

        // Retrieve questions for this subject and part
        $questions = Question::where('subject_id', $subject->id)
                             ->where('part', (int) $partId)
                             ->get();

        // Build SEO metadata
        $seo = [
            'title'       => "{$subject->name} Part {$partId} Questions | PRC Board Reviewers PH",
            'description' => "Part {$partId} of {$subject->name} quiz for the {$exam->type}.",
            'canonical'   => url()->current(),
            'heading'     => "{$subject->name} – Part {$partId}",
        ];

        return Inertia::render('Questions', [
            'questions'   => $questions,
            'subjectId'   => $subject->id,
            'subjectName' => $subject->name,
            'part'        => (int) $partId,
            'examType'    => $exam->type,
            'examId'      => $exam->id,
            'seo'         => $seo,
        ]);
    }
}

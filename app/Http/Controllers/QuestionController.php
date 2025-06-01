<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Subject;
use App\Models\Question;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\GroupModalController; // ← Add this import

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
        // 1. Fetch exam and subject
        $exam    = Exam::findOrFail((int) $examId);
        $subject = Subject::findOrFail((int) $subjectId);

        // 2. Retrieve all questions for this subject and part
        $questions = Question::where('subject_id', $subject->id)
                             ->where('part', (int) $partId)
                             ->get();

        // 3. Build SEO metadata
        $seo = [
            'title'       => "{$subject->name} Part {$partId} Questions | PRC Board Reviewers PH",
            'description' => "Part {$partId} of {$subject->name} quiz for the {$exam->type}.",
            'canonical'   => url()->current(),
            'heading'     => "{$subject->name} – Part {$partId}",
        ];

        // 4. Retrieve the “group modal” props for this exam
        $groupProps = (new GroupModalController())->propsForQuiz($examId);
        //    This returns an array with keys:
        //      - 'hasJoinedGroup'  => (bool)
        //      - 'fbUrl'           => (string)
        //      - 'examName'        => (string)
        //      - 'modalMessage'    => (string)

        // 5. Merge everything and render the Inertia page
        return Inertia::render('Questions', array_merge([
            'questions'   => $questions,
            'subjectId'   => $subject->id,
            'subjectName' => $subject->name,
            'part'        => (int) $partId,
            'examType'    => $exam->type,
            'examId'      => $exam->id,
            'seo'         => $seo,
        ], $groupProps));
    }
}

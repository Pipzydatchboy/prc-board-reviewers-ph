<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GroupModalController extends Controller
{
    /**
     * Return whether the user has already joined, plus FB link, etc.
     * This can be customized to pull from a database or config file if needed.
     *
     * @param  int  $examId
     * @return array
     */
    public function propsForQuiz($examId)
    {
        // 1. Map examId → Facebook group URL. For now, we hard‐code known links.
        $fbLinks = [
            1 => 'https://www.facebook.com/groups/1218987853056739', // CSE
            2 => 'https://www.facebook.com/groups/633444226404219',   // LET (replace with real URL)
            3 => 'https://www.facebook.com/groups/1750195155841889',   // CLE (replace with real URL)
            4 => 'https://www.facebook.com/groups/743326874929326',   // MLE (replace with real URL)
            5 => 'https://www.facebook.com/groups/1601474527209919',  // MTLE (replace with real URL)
            6 => 'https://www.facebook.com/groups/1244125137492922',  // CELE (replace with real URL)
            7 => 'https://www.facebook.com/groups/2403557963350923',   // FOE (replace with real URL)
            8 => 'https://www.facebook.com/groups/1244125137492922',  // MPLE (replace with real URL)
            9 => 'https://www.facebook.com/groups/508220679042796',   // LLE (replace with real URL)
        ];
        $fbUrl = $fbLinks[$examId] ?? '';

        // 2. Check if the user has already joined (session‐based flag for simplicity).
        $sessionKey = "joined_group_exam_{$examId}";
        $hasJoined = session()->get($sessionKey, false);

        // 3. Determine the human‐readable exam name
        $examName = $this->examName($examId);

        // 4. Build an optional custom modal message
        $modalMessage = "Join our \"{$examName}\" Facebook Group to get free review materials.";

        return [
            'hasJoinedGroup' => $hasJoined,
            'fbUrl'          => $fbUrl,
            'examName'       => $examName,
            'modalMessage'   => $modalMessage,
        ];
    }

    /**
     * Helper: map examId → human‐readable exam name.
     *
     * @param  int  $examId
     * @return string
     */
    private function examName($examId)
    {
        $names = [
            1 => 'Civil Service Exam',
            2 => 'LET Exam',
            3 => 'CLE Exam',
            4 => 'MLE Exam',
            5 => 'MTLE Exam',
            6 => 'CELE Exam',
            7 => 'FOE Exam',
            8 => 'MPLE Exam',
            9 => 'LLE Exam',
        ];

        return $names[$examId] ?? 'PRC Exam';
    }

    /**
     * Mark that the user has clicked “I’ve Joined” for this exam’s Facebook group.
     * Here, we simply store a session flag so that future visits skip the modal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int                       $examId
     * @return \Illuminate\Http\JsonResponse
     */
    public function joined(Request $request, $examId)
    {
        $sessionKey = "joined_group_exam_{$examId}";
        session()->put($sessionKey, true);

        return response()->json(['status' => 'ok']);
    }
}

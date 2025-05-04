<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       // 101
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'The TPACK framework combines technological knowledge with which other two domains?',
    'choices'      => json_encode([
        'Pedagogical and Content Knowledge',
        'Assessment and Administration',
        'Behavioral and Affective Skills',
        'Ethical and Legal Standards'
    ]),
    'answer'        => 'Pedagogical and Content Knowledge',
    'explanation'   => 'TPACK integrates technological, pedagogical, and content knowledge for effective instruction.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 102
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which level of the SAMR model involves modifying tasks to leverage technology?',
    'choices'      => json_encode([
        'Substitution',
        'Augmentation',
        'Modification',
        'Redefinition'
    ]),
    'answer'        => 'Modification',
    'explanation'   => 'Modification allows significant task redesign through technology.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 103
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'What is a Flipped Classroom?',
    'choices'      => json_encode([
        'Teacher lectures in class, students practice at home',
        'Students watch lectures at home and do activities in class',
        'All learning happens online',
        'Students only learn through textbooks'
    ]),
    'answer'        => 'Students watch lectures at home and do activities in class',
    'explanation'   => 'Flipped classrooms move direct instruction to homework and bring practice into class.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 104
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'An LMS is best described as:',
    'choices'      => json_encode([
        'Live Meeting Service',
        'Learning Management System',
        'Lesson Monitoring Software',
        'Learner Measurement Scale'
    ]),
    'answer'        => 'Learning Management System',
    'explanation'   => 'An LMS delivers, tracks, and manages online learning.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 105
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which tool is commonly used for creating e-portfolios?',
    'choices'      => json_encode([
        'Google Sites',
        'Microsoft Word',
        'PowerPoint',
        'Excel'
    ]),
    'answer'        => 'Google Sites',
    'explanation'   => 'Google Sites allows easy publication of digital portfolios.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 106
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Digital divide refers to:',
    'choices'      => json_encode([
        'Difference in digital device brands',
        'Gap between those with and without internet access',
        'Competition among tech companies',
        'Variety of software licenses'
    ]),
    'answer'        => 'Gap between those with and without internet access',
    'explanation'   => 'Digital divide highlights unequal access to technology resources.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 107
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which strategy enhances online student engagement?',
    'choices'      => json_encode([
        'Long lectures without interaction',
        'Regular polls and breakout discussions',
        'Text-only handouts',
        'No deadlines'
    ]),
    'answer'        => 'Regular polls and breakout discussions',
    'explanation'   => 'Interactive tools keep learners active and connected online.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 108
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which is an example of synchronous learning?',
    'choices'      => json_encode([
        'Pre-recorded video lessons',
        'Live video conference',
        'Email assignments',
        'Online forum posts'
    ]),
    'answer'        => 'Live video conference',
    'explanation'   => 'Synchronous learning occurs in real-time with live interaction.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 109
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which practice supports digital citizenship?',
    'choices'      => json_encode([
        'Sharing passwords',
        'Respectful online communication',
        'Plagiarizing content',
        'Ignoring privacy settings'
    ]),
    'answer'        => 'Respectful online communication',
    'explanation'   => 'Digital citizenship involves responsible and ethical online behavior.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 110
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'The primary benefit of blended learning is:',
    'choices'      => json_encode([
        'Elimination of face-to-face interaction',
        'Combining online and in-person instruction',
        'More homework only',
        'Reduced teacher involvement'
    ]),
    'answer'        => 'Combining online and in-person instruction',
    'explanation'   => 'Blended learning integrates digital and traditional methods.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 111
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which is a key feature of gamified learning?',
    'choices'      => json_encode([
        'Strict grading policies',
        'Points, badges, and leaderboards',
        'No deadlines',
        'Only multiple-choice quizzes'
    ]),
    'answer'        => 'Points, badges, and leaderboards',
    'explanation'   => 'Gamification uses game elements to boost motivation and engagement.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 112
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which accessibility tool benefits visually impaired students online?',
    'choices'      => json_encode([
        'Text-to-speech software',
        'High-stakes exams',
        'Pure text PDFs',
        'No alt text images'
    ]),
    'answer'        => 'Text-to-speech software',
    'explanation'   => 'Text-to-speech reads digital text aloud for visually impaired learners.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 113
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which method helps verify online student identity?',
    'choices'      => json_encode([
        'Random group seating',
        'Proctored online exams',
        'No assessment',
        'Paper-based tests only'
    ]),
    'answer'        => 'Proctored online exams',
    'explanation'   => 'Proctoring ensures academic integrity in virtual assessments.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 114
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which platform is best for hosting webinars?',
    'choices'      => json_encode([
        'Zoom',
        'Word',
        'Excel',
        'PowerPoint'
    ]),
    'answer'        => 'Zoom',
    'explanation'   => 'Zoom offers tools for live presentations, Q&A, and screen sharing.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 115
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which file type ensures universal playback of video lectures?',
    'choices'      => json_encode([
        'MP4',
        'DOCX',
        'XLSX',
        'PPTX'
    ]),
    'answer'        => 'MP4',
    'explanation'   => 'MP4 is a widely supported video format for lectures.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 116
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which practice secures student data online?',
    'choices'      => json_encode([
        'Using strong passwords and encryption',
        'Sharing login credentials',
        'Posting grades publicly',
        'Ignoring software updates'
    ]),
    'answer'        => 'Using strong passwords and encryption',
    'explanation'   => 'Security measures protect sensitive educational data.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 117
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which tool allows real-time collaboration on documents?',
    'choices'      => json_encode([
        'Google Docs',
        'Notepad',
        'Paint',
        'Calculator'
    ]),
    'answer'        => 'Google Docs',
    'explanation'   => 'Google Docs enables multiple users to edit simultaneously.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 118
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which is a best practice for uploading large files in an LMS?',
    'choices'      => json_encode([
        'Compressing files before upload',
        'Uploading one byte at a time',
        'Using outdated browsers',
        'Ignoring file limits'
    ]),
    'answer'        => 'Compressing files before upload',
    'explanation'   => 'Compression reduces file size and speeds up uploads.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 119
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which approach supports multilingual online learners?',
    'choices'      => json_encode([
        'Providing captions and transcripts',
        'No translation',
        'Audio only',
        'Text-only presentations'
    ]),
    'answer'        => 'Providing captions and transcripts',
    'explanation'   => 'Accessibility features help learners with different language backgrounds.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 120
$batch[] = [
    'subject_id'   => 6,
    'part'         => 6,
    'question'     => 'Which is the first step in designing an online course?',
    'choices'      => json_encode([
        'Identifying learning objectives',
        'Recording videos',
        'Publishing content immediately',
        'Ignoring learner needs'
    ]),
    'answer'        => 'Identifying learning objectives',
    'explanation'   => 'Clear objectives guide course structure, materials, and assessments.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

       

        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

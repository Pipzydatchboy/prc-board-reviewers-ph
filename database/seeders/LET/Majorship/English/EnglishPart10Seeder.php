<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart10Seeder extends Seeder
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
       $batch = [];

// 181
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What is formative assessment primarily used for?",
    'choices'     => json_encode([
        'To monitor learning and provide feedback',
        'To assign final grades',
        'To rank students',
        'To certify program completion',
    ]),
    'answer'      => 'To monitor learning and provide feedback',
    'explanation' => 'Formative assessment is ongoing and guides teachers and learners during instruction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 182
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which tool measures students' speaking ability through standardized criteria?",
    'choices'     => json_encode([
        'Oral proficiency rubrics',
        'Multiple-choice quizzes',
        'Cloze tests',
        'Spelling bees',
    ]),
    'answer'      => 'Oral proficiency rubrics',
    'explanation' => 'Rubrics provide clear performance levels for assessing speaking.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 183
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What does reliability refer to in a testing context?",
    'choices'     => json_encode([
        'Consistency of test results',
        'Relevance to course objectives',
        'Ease of administration',
        'Level of difficulty',
    ]),
    'answer'      => 'Consistency of test results',
    'explanation' => 'A reliable test yields similar results under consistent conditions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 184
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which term describes the degree to which a test measures what it is supposed to measure?",
    'choices'     => json_encode([
        'Validity',
        'Reliability',
        'Practicality',
        'Washback',
    ]),
    'answer'      => 'Validity',
    'explanation' => 'Validity ensures the test aligns with the intended construct or skill.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 185
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What is washback in language testing?",
    'choices'     => json_encode([
        'Impact of testing on teaching and learning',
        'The act of grading papers',
        'Statistical analysis of scores',
        'Scheduling of exams',
    ]),
    'answer'      => 'Impact of testing on teaching and learning',
    'explanation' => 'Washback refers to how tests influence curriculum, instruction, and learner behavior.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 186
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which assessment aligns with end-of-course evaluation?",
    'choices'     => json_encode([
        'Summative assessment',
        'Formative assessment',
        'Diagnostic assessment',
        'Ipsative assessment',
    ]),
    'answer'      => 'Summative assessment',
    'explanation' => 'Summative assessments measure achievement after instruction is completed.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 187
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What is diagnostic assessment used for?",
    'choices'     => json_encode([
        'To identify learners’ strengths and weaknesses',
        'To assign course grades',
        'To measure final achievement',
        'To create seating charts',
    ]),
    'answer'      => 'To identify learners’ strengths and weaknesses',
    'explanation' => 'Diagnostic assessments help tailor instruction to learner needs.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 188
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which approach to curriculum development starts with learner needs analysis?",
    'choices'     => json_encode([
        'Learner-centered approach',
        'Content-centered approach',
        'Product-centered approach',
        'Grammar-centered approach',
    ]),
    'answer'      => 'Learner-centered approach',
    'explanation' => 'Learner-centered curricula are designed based on analysis of learner needs and goals.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 189
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What is the main purpose of action research in teaching?",
    'choices'     => json_encode([
        'To improve teaching practices through systematic inquiry',
        'To publish academic papers',
        'To create textbooks',
        'To train new teachers',
    ]),
    'answer'      => 'To improve teaching practices through systematic inquiry',
    'explanation' => 'Action research involves teachers investigating their own classroom methods to enhance learning.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 190
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which document outlines course objectives, content, and assessment methods?",
    'choices'     => json_encode([
        'Syllabus',
        'Lesson plan',
        'Teaching diary',
        'Learning log',
    ]),
    'answer'      => 'Syllabus',
    'explanation' => 'A syllabus provides an overview of the course structure and requirements.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 191
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What is the difference between a lesson plan and a unit plan?",
    'choices'     => json_encode([
        'Unit plans cover multiple lessons; lesson plans detail one session',
        'Lesson plans cover multiple lessons; unit plans detail one session',
        'They are identical',
        'Unit plans focus on assessment only',
    ]),
    'answer'      => 'Unit plans cover multiple lessons; lesson plans detail one session',
    'explanation' => 'Unit plans span a series of lessons around a coherent theme or objective.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 192
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which evaluation method involves peer observation and feedback among teachers?",
    'choices'     => json_encode([
        'Peer coaching',
        'Standardized testing',
        'Self-assessment',
        'Portfolio review',
    ]),
    'answer'      => 'Peer coaching',
    'explanation' => 'Peer coaching fosters professional development through collaborative observation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 193
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What is a teaching portfolio used for?",
    'choices'     => json_encode([
        'To document teaching practices and growth',
        'To store student grades',
        'To write lesson transcripts',
        'To replace a resume',
    ]),
    'answer'      => 'To document teaching practices and growth',
    'explanation' => 'Portfolios showcase lesson plans, reflections, and evidence of professional development.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 194
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which curriculum model organizes content by themes rather than disciplines?",
    'choices'     => json_encode([
        'Thematic curriculum',
        'Subject-centered curriculum',
        'Learner-centered curriculum',
        'Spiral curriculum',
    ]),
    'answer'      => 'Thematic curriculum',
    'explanation' => 'Thematic curricula integrate subjects around overarching themes for coherence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 195
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What does a spiral curriculum emphasize?",
    'choices'     => json_encode([
        'Revisiting topics with increasing complexity',
        'Covering topics once in depth',
        'Teaching skills only once',
        'Ignoring prior knowledge',
    ]),
    'answer'      => 'Revisiting topics with increasing complexity',
    'explanation' => 'A spiral curriculum returns to key concepts over time to deepen understanding.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 196
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which evaluation collects multiple samples of student work over time?",
    'choices'     => json_encode([
        'Portfolio assessment',
        'Multiple-choice tests',
        'Oral interviews',
        'Timed essays',
    ]),
    'answer'      => 'Portfolio assessment',
    'explanation' => 'Portfolios provide a comprehensive view of student progress.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 197
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "What is the primary feature of backward design in curriculum planning?",
    'choices'     => json_encode([
        'Starting with desired learning outcomes',
        'Focusing on daily activities first',
        'Ignoring assessment',
        'Planning lessons randomly',
    ]),
    'answer'      => 'Starting with desired learning outcomes',
    'explanation' => 'Backward design begins by identifying goals and then planning assessments and instruction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 198
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which data collection method is common in classroom-based action research?",
    'choices'     => json_encode([
        'Observation logs',
        'Standardized tests only',
        'National surveys',
        'Single interviews with experts',
    ]),
    'answer'      => 'Observation logs',
    'explanation' => 'Action researchers use logs to document teaching and learning processes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 199
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which principle guides ethical action research with students?",
    'choices'     => json_encode([
        'Informed consent and confidentiality',
        'Mandatory participation',
        'Publishing raw data',
        'Using grades as rewards',
    ]),
    'answer'      => 'Informed consent and confidentiality',
    'explanation' => 'Ethical research protects participants’ rights and privacy.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 200
$batch[] = [
    'subject_id'  => 10,
    'part'        => 10,
    'question'    => "Which evaluation design compares student performance before and after intervention?",
    'choices'     => json_encode([
        'Pre-test/post-test design',
        'Cross-sectional design',
        'Case study design',
        'Longitudinal survey',
    ]),
    'answer'      => 'Pre-test/post-test design',
    'explanation' => 'This design measures the impact of instruction by comparing two test points.',
    'created_at'  => $now,
    'updated_at'  => $now,
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

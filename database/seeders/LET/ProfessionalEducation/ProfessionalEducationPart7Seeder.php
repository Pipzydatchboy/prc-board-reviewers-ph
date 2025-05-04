<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart7Seeder extends Seeder
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
       // 121
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which strategy best supports differentiated instruction in mixed-ability classrooms?',
    'choices'      => json_encode([
        'Same task for all students',
        'Tiered assignments based on readiness',
        'Lecturing without variation',
        'One-size-fits-all assessments'
    ]),
    'answer'        => 'Tiered assignments based on readiness',
    'explanation'   => 'Tiered tasks allow students at different levels to engage meaningfully with the content.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 122
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'What is backward design in curriculum planning?',
    'choices'      => json_encode([
        'Starting with activities then objectives',
        'Defining desired results first, then assessments and instruction',
        'Writing tests before defining content',
        'Planning lessons without goals'
    ]),
    'answer'        => 'Defining desired results first, then assessments and instruction',
    'explanation'   => 'Backward design begins with identifying learning outcomes, then creates assessments and lessons aligned to those outcomes.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 123
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which form of assessment allows learners to self-evaluate their progress?',
    'choices'      => json_encode([
        'Self-assessment checklists',
        'Standardized tests',
        'Teacher-graded exams',
        'Peer-reviewed papers'
    ]),
    'answer'        => 'Self-assessment checklists',
    'explanation'   => 'Self-assessment promotes metacognition by encouraging students to reflect on their own learning.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 124
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'In RTI (Response to Intervention), Tier 2 support is characterized by:',
    'choices'      => json_encode([
        'Universal screening for all students',
        'Targeted small-group interventions',
        'Special education placement',
        'No additional support'
    ]),
    'answer'        => 'Targeted small-group interventions',
    'explanation'   => 'Tier 2 provides focused support for students not making adequate progress in the general classroom.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 125
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which approach in professional development emphasizes learning-by-doing and reflection?',
    'choices'      => json_encode([
        'Workshop attendance only',
        'Action research',
        'Massed lectures',
        'One-time seminars'
    ]),
    'answer'        => 'Action research',
    'explanation'   => 'Action research involves educators systematically investigating their practice to improve outcomes.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 126
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which tool is most effective for tracking long-term professional goals?',
    'choices'      => json_encode([
        'Reflective journal',
        'Daily lesson plan',
        'Seating chart',
        'Grade book'
    ]),
    'answer'        => 'Reflective journal',
    'explanation'   => 'Journals document ongoing reflections and progress toward professional objectives.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 127
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which leadership style involves teachers in decision-making and shared governance?',
    'choices'      => json_encode([
        'Autocratic',
        'Distributed leadership',
        'Micromanagement',
        'Top-down'
    ]),
    'answer'        => 'Distributed leadership',
    'explanation'   => 'Distributed leadership shares authority and encourages collaboration among stakeholders.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 128
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Scaffolded questioning primarily aims to:',
    'choices'      => json_encode([
        'Stump students',
        'Guide students progressively toward understanding',
        'Deliver all answers at once',
        'Replace student thinking with teacher responses'
    ]),
    'answer'        => 'Guide students progressively toward understanding',
    'explanation'   => 'Scaffolded questions help students build on prior knowledge step by step.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 129
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which is a key component of culturally responsive pedagogy?',
    'choices'      => json_encode([
        'Ignoring cultural backgrounds',
        'Validating and integrating students’ cultural references',
        'Teaching only standardized content',
        'Enforcing a single cultural perspective'
    ]),
    'answer'        => 'Validating and integrating students’ cultural references',
    'explanation'   => 'Culturally responsive teaching builds on learners’ cultural experiences to enhance engagement and learning.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 130
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which practice strengthens ethical digital literacy?',
    'choices'      => json_encode([
        'Using pirated software',
        'Citing online sources properly',
        'Sharing personal passwords',
        'Ignoring privacy policies'
    ]),
    'answer'        => 'Citing online sources properly',
    'explanation'   => 'Proper citation teaches respect for intellectual property and academic honesty.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 131
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which model outlines inquiry-based cycles of questioning, investigating, and concluding?',
    'choices'      => json_encode([
        'Scientific method',
        'ADDIE model',
        'Bloom’s Taxonomy',
        'RTI framework'
    ]),
    'answer'        => 'Scientific method',
    'explanation'   => 'Inquiry-based learning mirrors the scientific method’s stages of exploration and reflection.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 132
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which is an example of authentic assessment?',
    'choices'      => json_encode([
        'Performance tasks in real-world contexts',
        'True/false quizzes',
        'Timed standardized tests',
        'Multiple-choice exams only'
    ]),
    'answer'        => 'Performance tasks in real-world contexts',
    'explanation'   => 'Authentic assessments require applying knowledge to practical, meaningful tasks.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 133
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which practice enhances peer coaching effectiveness?',
    'choices'      => json_encode([
        'Vague feedback',
        'Structured observation and constructive dialogue',
        'Unplanned visits',
        'Top-down evaluations only'
    ]),
    'answer'        => 'Structured observation and constructive dialogue',
    'explanation'   => 'Peer coaching thrives on clear goals, observation, and reflective discussion.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 134
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which strategy fosters metacognition in learners?',
    'choices'      => json_encode([
        'Providing checklists for self-monitoring',
        'Delivering unbroken lectures',
        'Ignoring student reflections',
        'Fixed-year-end testing only'
    ]),
    'answer'        => 'Providing checklists for self-monitoring',
    'explanation'   => 'Self-monitoring tools help learners plan, track, and evaluate their own thinking processes.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 135
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which is a primary aim of leadership mentoring programs?',
    'choices'      => json_encode([
        'Isolating new teachers',
        'Developing leadership capacity and professional growth',
        'Evaluating only test scores',
        'Limiting collaboration'
    ]),
    'answer'        => 'Developing leadership capacity and professional growth',
    'explanation'   => 'Mentoring supports emerging leaders through guidance, feedback, and shared experiences.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 136
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which tool supports collaborative curriculum mapping?',
    'choices'      => json_encode([
        'Shared digital spreadsheets',
        'Individual paper maps',
        'Teacher’s personal diary',
        'Handwritten notes only'
    ]),
    'answer'        => 'Shared digital spreadsheets',
    'explanation'   => 'Digital tools enable multiple stakeholders to plan and adjust curriculum together in real time.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 137
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which practice promotes inclusion of English learners?',
    'choices'      => json_encode([
        'Providing bilingual resources and scaffolds',
        'Excluding non-native speakers',
        'English-only lectures',
        'Ignoring language backgrounds'
    ]),
    'answer'        => 'Providing bilingual resources and scaffolds',
    'explanation'   => 'Scaffolds and translations help English learners access content while building language skills.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 138
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which component is essential in a professional learning community (PLC)?',
    'choices'      => json_encode([
        'Shared vision and collective responsibility',
        'Isolated planning',
        'Competition among teachers',
        'Top-down decision-making'
    ]),
    'answer'        => 'Shared vision and collective responsibility',
    'explanation'   => 'PLCs rely on collaborative culture with joint goals and accountability.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 139
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which approach uses real-time data to adjust instruction instantly?',
    'choices'      => json_encode([
        'Data-informed instruction',
        'Ignoring data',
        'Annual testing only',
        'Unplanned lessons'
    ]),
    'answer'        => 'Data-informed instruction',
    'explanation'   => 'Teachers use assessment and engagement data to make on-the-fly instructional decisions.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 140
$batch[] = [
    'subject_id'   => 6,
    'part'         => 7,
    'question'     => 'Which practice builds resilience and growth mindset in students?',
    'choices'      => json_encode([
        'Praising effort and strategies over innate ability',
        'Emphasizing only correct answers',
        'Avoiding challenges',
        'Fixed praise without feedback'
    ]),
    'answer'        => 'Praising effort and strategies over innate ability',
    'explanation'   => 'Growth mindset is fostered when effort and effective strategies are highlighted as keys to success.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

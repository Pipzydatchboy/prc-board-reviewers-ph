<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart8Seeder extends Seeder
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
       // 141
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What is the primary purpose of classroom action research?',
    'choices'      => json_encode([
        'To publish academic papers',
        'To improve teaching practice through inquiry',
        'To rank students',
        'To develop school policies'
    ]),
    'answer'        => 'To improve teaching practice through inquiry',
    'explanation'   => 'Classroom action research focuses on systematic investigation to enhance one’s own teaching methods.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 142
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which teaching strategy supports multiple learning styles simultaneously?',
    'choices'      => json_encode([
        'Lecture only',
        'Multimedia presentations with hands-on activities',
        'Read-aloud sessions',
        'Timed written tests'
    ]),
    'answer'        => 'Multimedia presentations with hands-on activities',
    'explanation'   => 'Combining visual, auditory, and kinesthetic elements addresses diverse learner preferences.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 143
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What distinguishes a learning goal from an objective?',
    'choices'      => json_encode([
        'Goals are broad intentions; objectives are specific, measurable outcomes',
        'Objectives are broad; goals are specific',
        'Goals are for teachers; objectives are for students',
        'There is no difference'
    ]),
    'answer'        => 'Goals are broad intentions; objectives are specific, measurable outcomes',
    'explanation'   => 'Goals set general direction, while objectives define precise, assessable targets.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 144
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which term describes the ability to assess one’s own learning?',
    'choices'      => json_encode([
        'Metacognition',
        'Differentiation',
        'Pedagogy',
        'Scaffolding'
    ]),
    'answer'        => 'Metacognition',
    'explanation'   => 'Metacognition involves awareness and regulation of one’s own thinking processes.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 145
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which principle of Andragogy emphasizes leveraging adult learners’ life experiences?',
    'choices'      => json_encode([
        'Readiness to learn',
        'Self-concept',
        'Experience as a resource',
        'Orientation to learning'
    ]),
    'answer'        => 'Experience as a resource',
    'explanation'   => 'Adults bring prior experiences that can be connected to new learning.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 146
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What is backward chaining in teaching complex skills?',
    'choices'      => json_encode([
        'Teaching steps in forward order',
        'Starting with the final step and working backward',
        'Skipping foundational skills',
        'Grouping all steps together'
    ]),
    'answer'        => 'Starting with the final step and working backward',
    'explanation'   => 'Backward chaining teaches the last step first, then adds preceding steps sequentially.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 147
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which approach uses real-time quizzes to monitor student progress?',
    'choices'      => json_encode([
        'Summative assessment',
        'Formative assessment with clickers',
        'Peer review only',
        'End-of-term exam'
    ]),
    'answer'        => 'Formative assessment with clickers',
    'explanation'   => 'Clicker quizzes provide immediate feedback for instructional adjustment.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 148
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What is the key feature of the Jigsaw cooperative learning method?',
    'choices'      => json_encode([
        'Individual work only',
        'Expert groups that teach peers',
        'Teacher-led discussion',
        'Solo presentations'
    ]),
    'answer'        => 'Expert groups that teach peers',
    'explanation'   => 'In Jigsaw, each “expert” group masters a segment before teaching it to others.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 149
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which leadership model emphasizes mentoring and coaching?',
    'choices'      => json_encode([
        'Transactional leadership',
        'Servant leadership',
        'Transformational leadership',
        'Autocratic leadership'
    ]),
    'answer'        => 'Servant leadership',
    'explanation'   => 'Servant leaders prioritize developing and supporting their team members.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 150
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What is the primary function of a Professional Learning Network (PLN)?',
    'choices'      => json_encode([
        'To isolate teaching practices',
        'To connect educators for resource sharing and support',
        'To enforce school rules',
        'To store student data'
    ]),
    'answer'        => 'To connect educators for resource sharing and support',
    'explanation'   => 'PLNs foster collaboration and continuous professional growth among teachers.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 151
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'According to expectancy theory, which factor most influences learner motivation?',
    'choices'      => json_encode([
        'Past experiences only',
        'Perceived likelihood of success and value of outcomes',
        'Teacher’s charisma',
        'Classroom layout'
    ]),
    'answer'        => 'Perceived likelihood of success and value of outcomes',
    'explanation'   => 'Expectancy theory links motivation to expected performance and rewards.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 152
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What does the “ER” in SMARTER goals add beyond SMART?',
    'choices'      => json_encode([
        'Evaluated and Reviewed',
        'Easy and Rapid',
        'Exclusive and Regulated',
        'Elastic and Robust'
    ]),
    'answer'        => 'Evaluated and Reviewed',
    'explanation'   => 'SMARTER goals include regular evaluation and review to ensure progress.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 153
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which model outlines stages of teacher skill acquisition from novice to expert?',
    'choices'      => json_encode([
        'Bloom’s Taxonomy',
        'Dreyfus model',
        'Maslow’s hierarchy',
        'ADDIE model'
    ]),
    'answer'        => 'Dreyfus model',
    'explanation'   => 'The Dreyfus model describes progression through five stages of skill development.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 154
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which assessment method best measures higher-order thinking skills?',
    'choices'      => json_encode([
        'Multiple-choice tests',
        'Essay questions and case studies',
        'True/false quizzes',
        'Matching exercises'
    ]),
    'answer'        => 'Essay questions and case studies',
    'explanation'   => 'Essays and cases require analysis, synthesis, and evaluation.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 155
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What is the benefit of using concept maps in instruction?',
    'choices'      => json_encode([
        'They replace lessons entirely',
        'They help visualize relationships among ideas',
        'They lengthen assessments',
        'They limit creativity'
    ]),
    'answer'        => 'They help visualize relationships among ideas',
    'explanation'   => 'Concept maps clarify connections and hierarchies between key concepts.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 156
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which is NOT part of the ethical code for teachers?',
    'choices'      => json_encode([
        'Maintaining confidentiality',
        'Promoting equity',
        'Accepting gifts for grades',
        'Demonstrating professional integrity'
    ]),
    'answer'        => 'Accepting gifts for grades',
    'explanation'   => 'Ethical codes prohibit bias and undue influence on student evaluation.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 157
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'What is the term for adjusting instruction based on formative assessment data?',
    'choices'      => json_encode([
        'Instructional adaptation',
        'Summative grading',
        'Peer evaluation',
        'Standardized teaching'
    ]),
    'answer'        => 'Instructional adaptation',
    'explanation'   => 'Instructional adaptation involves modifying teaching strategies in response to student feedback.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 158
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which learning theory suggests learning occurs through observing others?',
    'choices'      => json_encode([
        'Behaviorism',
        'Social learning theory',
        'Cognitivism',
        'Constructivism'
    ]),
    'answer'        => 'Social learning theory',
    'explanation'   => 'Bandura’s social learning theory emphasizes modeling and observation.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 159
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which assessment uses peer rating scales?',
    'choices'      => json_encode([
        'Self-assessment only',
        'Peer assessment',
        'Teacher-grade only',
        'Standardized test'
    ]),
    'answer'        => 'Peer assessment',
    'explanation'   => 'Peer assessment engages learners in evaluating each other’s work using set criteria.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 160
$batch[] = [
    'subject_id'   => 6,
    'part'         => 8,
    'question'     => 'Which element is crucial when designing culturally responsive assessments?',
    'choices'      => json_encode([
        'Uniformity across cultures',
        'Inclusion of diverse contexts and examples',
        'Rigid, one-size-fits-all format',
        'Only using text-based items'
    ]),
    'answer'        => 'Inclusion of diverse contexts and examples',
    'explanation'   => 'Culturally responsive assessments reflect learners’ backgrounds and experiences.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

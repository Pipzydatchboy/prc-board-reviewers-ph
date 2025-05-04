<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart4Seeder extends Seeder
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
       // 61
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'In Vygotsky’s theory, the “Zone of Proximal Development” refers to:',
    'choices'      => json_encode([
        'What a learner can do independently',
        'What a learner can achieve with guidance',
        'The highest level of mastery',
        'Skills beyond the learner’s potential'
    ]),
    'answer'        => 'What a learner can achieve with guidance',
    'explanation'   => 'The ZPD is the gap between independent performance and what can be done with support.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 62
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'A rubric in assessment is used to:',
    'choices'      => json_encode([
        'Provide detailed grading criteria',
        'Record attendance',
        'List lesson objectives',
        'Outline school policies'
    ]),
    'answer'        => 'Provide detailed grading criteria',
    'explanation'   => 'Rubrics clarify performance levels and assessment standards.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 63
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Scaffolding in the classroom means:',
    'choices'      => json_encode([
        'Lowering the difficulty of tasks permanently',
        'Providing temporary support to advance learning',
        'Replacing student effort with teacher work',
        'Using only textbooks for instruction'
    ]),
    'answer'        => 'Providing temporary support to advance learning',
    'explanation'   => 'Scaffolding offers help that is gradually removed as learners gain competence.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 64
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which practice best supports cooperative learning?',
    'choices'      => json_encode([
        'Individual silent work',
        'Group tasks with shared responsibility',
        'Lecture without interaction',
        'Timed tests only'
    ]),
    'answer'        => 'Group tasks with shared responsibility',
    'explanation'   => 'Cooperative learning relies on interdependence and shared goals.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 65
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'The primary goal of mastery learning is to:',
    'choices'      => json_encode([
        'Move quickly through content',
        'Ensure all students achieve high understanding',
        'Rank students by speed',
        'Limit feedback to final grades'
    ]),
    'answer'        => 'Ensure all students achieve high understanding',
    'explanation'   => 'Mastery learning focuses on each student reaching proficiency before moving on.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 66
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which is an example of experiential learning?',
    'choices'      => json_encode([
        'Listening to a lecture only',
        'Hands-on science experiments',
        'Reading a textbook silently',
        'Multiple-choice quizzes'
    ]),
    'answer'        => 'Hands-on science experiments',
    'explanation'   => 'Experiential learning engages learners through direct experience.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 67
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which is a characteristic of learner-centered teaching?',
    'choices'      => json_encode([
        'Teacher as sole knowledge source',
        'Active student participation',
        'Strict lecture format',
        'Exam-focused only'
    ]),
    'answer'        => 'Active student participation',
    'explanation'   => 'Learner-centered approaches engage students in constructing their own learning.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 68
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which tool helps a teacher reflect on lesson effectiveness?',
    'choices'      => json_encode([
        'Reflective journal',
        'Gradebook',
        'Attendance log',
        'Seating chart'
    ]),
    'answer'        => 'Reflective journal',
    'explanation'   => 'Journals guide teachers to analyze and improve their practice.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 69
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Differentiated assessment involves:',
    'choices'      => json_encode([
        'Same test for all learners',
        'Various methods to match learner needs',
        'No assessment at all',
        'Assessment only at year’s end'
    ]),
    'answer'        => 'Various methods to match learner needs',
    'explanation'   => 'Differentiated assessment adapts to different learner profiles.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 70
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which model emphasizes planning, teaching, assessing, and reflecting on cycles?',
    'choices'      => json_encode([
        'Kolb’s cycle',
        'ADDIE model',
        'Bloom’s taxonomy',
        'Behaviorist chain'
    ]),
    'answer'        => 'Kolb’s cycle',
    'explanation'   => 'Kolb’s experiential cycle includes Concrete Experience, Reflection, Conceptualization, and Experimentation.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 71
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Learner motivation is best enhanced by:',
    'choices'      => json_encode([
        'Unclear goals',
        'Immediate, specific feedback',
        'Rare feedback',
        'Punitive grading only'
    ]),
    'answer'        => 'Immediate, specific feedback',
    'explanation'   => 'Timely feedback supports motivation and learning.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 72
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Formative quizzes primarily serve to:',
    'choices'      => json_encode([
        'Assign final grades',
        'Guide instructional adjustments',
        'Rank peers',
        'Assess at year-end'
    ]),
    'answer'        => 'Guide instructional adjustments',
    'explanation'   => 'Formative quizzes inform teaching and learning mid-course.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 73
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which strategy fosters critical thinking?',
    'choices'      => json_encode([
        'Socratic questioning',
        'Memorization drills',
        'Passive listening',
        'Closed lectures'
    ]),
    'answer'        => 'Socratic questioning',
    'explanation'   => 'Socratic methods prompt deeper analysis and reflection.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 74
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'A learning portfolio showcases:',
    'choices'      => json_encode([
        'Teacher’s favorite lessons',
        'Student artifacts and reflections over time',
        'School archives',
        'Only test scores'
    ]),
    'answer'        => 'Student artifacts and reflections over time',
    'explanation'   => 'Portfolios document a learner’s progress and thought processes.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 75
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which is NOT a benefit of cooperative learning?',
    'choices'      => json_encode([
        'Social skill development',
        'Peer teaching opportunities',
        'Uniform thinking',
        'Increased engagement'
    ]),
    'answer'        => 'Uniform thinking',
    'explanation'   => 'Cooperative learning values diverse perspectives, not conformity.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 76
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Behaviorist strategies in classroom management emphasize:',
    'choices'      => json_encode([
        'Reinforcement and consequences',
        'Open-ended inquiry only',
        'Ignoring all behaviors',
        'Collaborative rule making'
    ]),
    'answer'        => 'Reinforcement and consequences',
    'explanation'   => 'Behaviorism uses rewards and penalties to shape behavior.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 77
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Which instructional material is most appropriate for visual learners?',
    'choices'      => json_encode([
        'Charts and diagrams',
        'Lectures only',
        'Audio recordings',
        'Pure text handouts'
    ]),
    'answer'        => 'Charts and diagrams',
    'explanation'   => 'Visual learners benefit from graphical representations.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 78
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Professional growth plans should be based on:',
    'choices'      => json_encode([
        'Personal interests only',
        'Self-assessment and feedback data',
        'Administrative convenience',
        'Random selection'
    ]),
    'answer'        => 'Self-assessment and feedback data',
    'explanation'   => 'Effective plans align personal goals with evidence of need.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 79
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Goal setting in education should be:',
    'choices'      => json_encode([
        'Vague and inspirational',
        'Specific, measurable, achievable, relevant, time-bound (SMART)',
        'Impossible for challenge',
        'Fixed for all learners'
    ]),
    'answer'        => 'Specific, measurable, achievable, relevant, time-bound (SMART)',
    'explanation'   => 'SMART goals provide clear criteria and deadlines.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 80
$batch[] = [
    'subject_id'   => 6,
    'part'         => 3,
    'question'     => 'Action research cycles typically include planning, acting, observing, and:',
    'choices'      => json_encode([
        'Reflecting',
        'Ignoring results',
        'Final testing',
        'Permanent change'
    ]),
    'answer'        => 'Reflecting',
    'explanation'   => 'Reflection is essential to analyze and improve the next cycle.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

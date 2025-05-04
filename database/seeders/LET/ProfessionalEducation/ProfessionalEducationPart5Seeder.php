<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart5Seeder extends Seeder
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
       // 81
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'What is the main goal of curriculum alignment?',
    'choices'      => json_encode([
        'Ensure consistency between learning objectives, instruction, and assessment',
        'Increase the number of topics covered',
        'Standardize teaching methods',
        'Reduce teacher workload'
    ]),
    'answer'        => 'Ensure consistency between learning objectives, instruction, and assessment',
    'explanation'   => 'Curriculum alignment seeks coherence across objectives, teaching activities, and evaluation methods.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 82
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which type of test is designed to measure a student’s performance against a fixed set of standards?',
    'choices'      => json_encode([
        'Norm-referenced test',
        'Criterion-referenced test',
        'Aptitude test',
        'Interest inventory'
    ]),
    'answer'        => 'Criterion-referenced test',
    'explanation'   => 'Criterion-referenced tests assess mastery of specific skills or standards.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 83
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'What does “IEP” stand for in special education?',
    'choices'      => json_encode([
        'Individualized Education Program',
        'Integrated Education Plan',
        'Inclusive Evaluation Procedure',
        'Instructional Efficiency Plan'
    ]),
    'answer'        => 'Individualized Education Program',
    'explanation'   => 'An IEP is a legally binding document that outlines specialized goals and services for a student with disabilities.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 84
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which role does a guidance counselor primarily fulfill?',
    'choices'      => json_encode([
        'Disciplinary authority',
        'Academic and personal development facilitator',
        'Curriculum developer',
        'School administrator'
    ]),
    'answer'        => 'Academic and personal development facilitator',
    'explanation'   => 'Guidance counselors support students’ educational planning and personal growth.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 85
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'What is the primary focus of transformational leadership in education?',
    'choices'      => json_encode([
        'Maintaining the status quo',
        'Empowering and inspiring stakeholders to achieve change',
        'Strict adherence to rules',
        'Micromanaging daily tasks'
    ]),
    'answer'        => 'Empowering and inspiring stakeholders to achieve change',
    'explanation'   => 'Transformational leaders motivate staff and learners to exceed expectations and drive innovation.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 86
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which is a characteristic of an effective parent–teacher conference?',
    'choices'      => json_encode([
        'One-way lecture by the teacher',
        'Collaborative discussion of student progress',
        'Focusing only on negative behaviors',
        'Strictly following the school handbook'
    ]),
    'answer'        => 'Collaborative discussion of student progress',
    'explanation'   => 'Effective conferences involve two-way communication focused on student strengths and areas for growth.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 87
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Educational action research primarily aims to:',
    'choices'      => json_encode([
        'Publish in academic journals',
        'Solve real classroom problems through reflective inquiry',
        'Rank teachers by performance',
        'Standardize lesson plans'
    ]),
    'answer'        => 'Solve real classroom problems through reflective inquiry',
    'explanation'   => 'Action research engages teachers in cycles of planning, acting, observing, and reflecting to improve practice.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 88
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which is NOT a core function of educational supervision?',
    'choices'      => json_encode([
        'Providing instructional leadership',
        'Evaluating teacher performance',
        'Setting personal salary scales',
        'Facilitating professional growth'
    ]),
    'answer'        => 'Setting personal salary scales',
    'explanation'   => 'Supervision focuses on supporting instruction and development, not compensation decisions.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 89
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'What is the key benefit of using open-ended questions in assessments?',
    'choices'      => json_encode([
        'Quick grading',
        'Encouraging creative and critical thinking',
        'Standardized responses',
        'Limiting student expression'
    ]),
    'answer'        => 'Encouraging creative and critical thinking',
    'explanation'   => 'Open-ended items allow students to elaborate their understanding and reasoning.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 90
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which framework outlines Values Education in the Philippine curriculum?',
    'choices'      => json_encode([
        'K to 12 Curriculum Guide',
        'No documented framework',
        'Only private school policy',
        'Technical-Vocational Standards'
    ]),
    'answer'        => 'K to 12 Curriculum Guide',
    'explanation'   => 'The K to 12 curricula include learning competencies for Values Education at each grade level.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 91
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which is an example of a convergent assessment technique?',
    'choices'      => json_encode([
        'Multiple-choice test',
        'Research project',
        'Reflective essay',
        'Portfolio presentation'
    ]),
    'answer'        => 'Multiple-choice test',
    'explanation'   => 'Convergent techniques require a single correct answer.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 92
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'In classroom management, “proactive strategies” refer to:',
    'choices'      => json_encode([
        'Punishing misbehavior after it occurs',
        'Setting clear expectations and engaging lessons to prevent issues',
        'Ignoring small infractions',
        'Random seating changes'
    ]),
    'answer'        => 'Setting clear expectations and engaging lessons to prevent issues',
    'explanation'   => 'Proactive management anticipates and reduces disruptions before they happen.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 93
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which is a valid method for gathering student feedback?',
    'choices'      => json_encode([
        'Anonymous surveys',
        'Ignoring student opinions',
        'Only teacher observations',
        'Final exams exclusively'
    ]),
    'answer'        => 'Anonymous surveys',
    'explanation'   => 'Surveys allow candid student input on teaching and learning experiences.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 94
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which professional document outlines a teacher’s instructional goals for the year?',
    'choices'      => json_encode([
        'Professional development plan',
        'School handbook',
        'Student handbook',
        'Budget report'
    ]),
    'answer'        => 'Professional development plan',
    'explanation'   => 'Such plans set objectives for growth, training, and instructional improvement.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 95
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'What is the purpose of a needs assessment in education?',
    'choices'      => json_encode([
        'Determine teacher salaries',
        'Identify gaps between current and desired performance',
        'Rank schools regionally',
        'Schedule parent meetings'
    ]),
    'answer'        => 'Identify gaps between current and desired performance',
    'explanation'   => 'Needs assessments guide planning by revealing areas that require support or resources.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 96
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which strategy best supports culturally responsive teaching?',
    'choices'      => json_encode([
        'Ignoring cultural differences',
        'Incorporating students’ backgrounds into lessons',
        'Using only standard textbooks',
        'Segregating by culture'
    ]),
    'answer'        => 'Incorporating students’ backgrounds into lessons',
    'explanation'   => 'Culturally responsive teaching validates and integrates learners’ identities.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 97
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which is a characteristic of effective peer assessment?',
    'choices'      => json_encode([
        'Vague feedback',
        'Specific criteria and constructive comments',
        'Only grading by the teacher',
        'Anonymous without accountability'
    ]),
    'answer'        => 'Specific criteria and constructive comments',
    'explanation'   => 'Peer assessments work best when guided by clear rubrics and respectful feedback.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 98
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which concept refers to adapting instruction to digital tools and resources?',
    'choices'      => json_encode([
        'Blended learning',
        'Offline teaching',
        'Pure lecture',
        'Text-only instruction'
    ]),
    'answer'        => 'Blended learning',
    'explanation'   => 'Blended learning integrates online technologies with traditional face-to-face teaching.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 99
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'What is reflective supervision?',
    'choices'      => json_encode([
        'Strict rule enforcement',
        'Collaborative reflection between supervisor and teacher',
        'Unannounced inspections',
        'One-way feedback'
    ]),
    'answer'        => 'Collaborative reflection between supervisor and teacher',
    'explanation'   => 'Reflective supervision emphasizes dialogue and joint problem-solving to improve practice.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 100
$batch[] = [
    'subject_id'   => 6,
    'part'         => 5,
    'question'     => 'Which practice strengthens professional learning communities?',
    'choices'      => json_encode([
        'Isolated lesson planning',
        'Regular collaborative meetings and shared goals',
        'Competition among teachers',
        'Individual performance reviews only'
    ]),
    'answer'        => 'Regular collaborative meetings and shared goals',
    'explanation'   => 'PLCs thrive on teamwork, ongoing dialogue, and collective responsibility for student learning.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

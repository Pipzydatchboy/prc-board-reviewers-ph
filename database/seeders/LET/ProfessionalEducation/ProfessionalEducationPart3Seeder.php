<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart3Seeder extends Seeder
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
     // 1
     $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which learning theory emphasizes that learners construct knowledge through active engagement and reflection?',
        'choices'      => json_encode([
            'Behaviorism',
            'Constructivism',
            'Cognitivism',
            'Humanism'
        ]),
        'answer'        => 'Constructivism',
        'explanation'   => 'Constructivism focuses on learners building their own understanding through experience and reflection.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 2
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'What is the primary purpose of formative assessment?',
        'choices'      => json_encode([
            'Grade reporting',
            'Monitoring student learning and providing feedback',
            'Ranking students by ability',
            'Certifying competence'
        ]),
        'answer'        => 'Monitoring student learning and providing feedback',
        'explanation'   => 'Formative assessments diagnose learning gaps and guide instructional adjustments.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 3
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which domain is NOT one of Bloom’s Taxonomy categories?',
        'choices'      => json_encode([
            'Psychomotor',
            'Affective',
            'Cognitive',
            'Motivational'
        ]),
        'answer'        => 'Motivational',
        'explanation'   => 'Bloom’s Taxonomy domains are Cognitive, Affective, and Psychomotor.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 4
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'What is Differentiated Instruction?',
        'choices'      => json_encode([
            'Teaching one way only',
            'Adjusting content, process, and product based on learner needs',
            'Using lecture exclusively',
            'Assessing only at end of unit'
        ]),
        'answer'        => 'Adjusting content, process, and product based on learner needs',
        'explanation'   => 'Differentiated instruction tailors teaching to individual student profiles.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 5
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which component is NOT part of a standard lesson plan?',
        'choices'      => json_encode([
            'Objectives',
            'Materials',
            'Salary details',
            'Assessment techniques'
        ]),
        'answer'        => 'Salary details',
        'explanation'   => 'Lesson plans include objectives, materials, activities, and assessments, not salary.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 6
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Action research in education primarily aims to:',
        'choices'      => json_encode([
            'Publish academic papers',
            'Improve teaching practices through systematic inquiry',
            'Rank schools',
            'Evaluate student discipline'
        ]),
        'answer'        => 'Improve teaching practices through systematic inquiry',
        'explanation'   => 'Action research involves teachers investigating and improving their own practice.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 7
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which principle supports inclusive education?',
        'choices'      => json_encode([
            'Separate classrooms for learners with disabilities',
            'Full participation of all students in regular classrooms',
            'Excluding non-native speakers',
            'Segregating by ability'
        ]),
        'answer'        => 'Full participation of all students in regular classrooms',
        'explanation'   => 'Inclusive education integrates all learners in mainstream settings with support.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 8
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which theory posits that IQ alone cannot predict learning success and multiple intelligences exist?',
        'choices'      => json_encode([
            'Behaviorism',
            'Multiple Intelligences Theory',
            'Psychoanalytic Theory',
            'Classical Conditioning'
        ]),
        'answer'        => 'Multiple Intelligences Theory',
        'explanation'   => 'Howard Gardner’s theory suggests varied intelligence modalities beyond IQ.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 9
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which process outlines Analysis, Design, Development, Implementation, and Evaluation?',
        'choices'      => json_encode([
            'ADDIE model',
            'Kohlberg’s stages',
            'Dewey’s cycle',
            'Maslow’s hierarchy'
        ]),
        'answer'        => 'ADDIE model',
        'explanation'   => 'ADDIE is a systematic instructional design framework: Analyze, Design, Develop, Implement, Evaluate.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 10
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'What does “pedagogical content knowledge” refer to?',
        'choices'      => json_encode([
            'Knowing only content',
            'Mastery of teaching methods alone',
            'Integration of pedagogy and subject matter for effective teaching',
            'Administrative skills'
        ]),
        'answer'        => 'Integration of pedagogy and subject matter for effective teaching',
        'explanation'   => 'Pedagogical content knowledge blends subject expertise with teaching strategies.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 11
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Reflective teaching primarily encourages teachers to:',
        'choices'      => json_encode([
            'Follow the curriculum without change',
            'Analyze and adjust their practice based on reflection',
            'Ignore student feedback',
            'Maintain fixed lesson plans'
        ]),
        'answer'        => 'Analyze and adjust their practice based on reflection',
        'explanation'   => 'Reflective teaching involves continual self-evaluation and improvement.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 12
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which is an example of a summative assessment?',
        'choices'      => json_encode([
            'Weekly quizzes',
            'End-of-term final exam',
            'In-class questioning',
            'Homework check-ins'
        ]),
        'answer'        => 'End-of-term final exam',
        'explanation'   => 'Summative assessments evaluate learner achievement at the end of an instructional period.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 13
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Professional ethics for teachers includes all EXCEPT:',
        'choices'      => json_encode([
            'Confidentiality of student records',
            'Honesty in grading',
            'Personal favoritism',
            'Equity in treatment'
        ]),
        'answer'        => 'Personal favoritism',
        'explanation'   => 'Ethical practice requires fairness, confidentiality, and integrity, not favoritism.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 14
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which tool aids in planning daily teaching activities and outcomes?',
        'choices'      => json_encode([
            'Teacher’s diary',
            'Lesson plan',
            'School prospectus',
            'Attendance sheet'
        ]),
        'answer'        => 'Lesson plan',
        'explanation'   => 'Lesson plans specify objectives, materials, procedures, and assessments for daily instruction.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 15
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Incorporating multimedia resources in class best exemplifies:',
        'choices'      => json_encode([
            'Traditional lecture',
            'Blended learning approach',
            'Strict memorization methods',
            'Closed book assessments'
        ]),
        'answer'        => 'Blended learning approach',
        'explanation'   => 'Blended learning combines digital content with face-to-face instruction.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 16
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which action promotes learner autonomy?',
        'choices'      => json_encode([
            'Teacher-led lectures only',
            'Providing choices in assignments and projects',
            'Rote repetition',
            'Uniform tasks for all'
        ]),
        'answer'        => 'Providing choices in assignments and projects',
        'explanation'   => 'Learner autonomy grows when students make decisions about their learning.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 17
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which strategy helps manage classroom disruptions?',
        'choices'      => json_encode([
            'Ignoring behavior',
            'Clear rules and consistent consequences',
            'Raising voice frequently',
            'Punishment without explanation'
        ]),
        'answer'        => 'Clear rules and consistent consequences',
        'explanation'   => 'Effective management relies on clear expectations and fair enforcement.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 18
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'What is the best reason to use group work in class?',
        'choices'      => json_encode([
            'Reduce teacher workload',
            'Promote peer collaboration and social skills',
            'Increase written output only',
            'Discourage class participation'
        ]),
        'answer'        => 'Promote peer collaboration and social skills',
        'explanation'   => 'Group activities enhance communication, teamwork, and shared learning.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 19
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'A teacher’s portfolio is primarily used for:',
        'choices'      => json_encode([
            'Storing student grades',
            'Documenting professional growth and accomplishments',
            'Planning daily lessons only',
            'Recording attendance'
        ]),
        'answer'        => 'Documenting professional growth and accomplishments',
        'explanation'   => 'Portfolios showcase a teacher’s skills, reflections, and achievements over time.',
        'created_at'    => $now,
        'updated_at'    => $now,
    ];

    // 20
    $batch[] = [
        'subject_id'   => 6,
        'part'         => 3,
        'question'     => 'Which professional development activity is most reflective?',
        'choices'      => json_encode([
            'Attending a conference only',
            'Reading a textbook silently',
            'Keeping a reflective journal about teaching experiences',
            'Memorizing lecture notes'
        ]),
        'answer'        => 'Keeping a reflective journal about teaching experiences',
        'explanation'   => 'Reflective journals foster self-awareness and planning for improvement.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

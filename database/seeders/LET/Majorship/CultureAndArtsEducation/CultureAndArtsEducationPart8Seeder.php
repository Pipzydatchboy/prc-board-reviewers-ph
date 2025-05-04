<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart8Seeder extends Seeder
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

       // Part 8: Assessment & Evaluation in Culture & Arts Education

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'What type of assessment involves students demonstrating skills through real-world tasks?',
           'choices'    => json_encode([
               'Authentic assessment',
               'Multiple-choice test',
               'True/false quiz',
               'Matching exercise',
           ]),
           'answer'     => 'Authentic assessment',
           'explanation'=> 'Authentic assessments require applying knowledge in practical, meaningful contexts.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which rubric type uses separate criteria scored individually?',
           'choices'    => json_encode([
               'Analytic rubric',
               'Holistic rubric',
               'Checklist',
               'Rating scale',
           ]),
           'answer'     => 'Analytic rubric',
           'explanation'=> 'Analytic rubrics break down performance into distinct components with separate scores.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Formative assessment is primarily used for which purpose?',
           'choices'    => json_encode([
               'Informing instruction and giving feedback',
               'Assigning final grades',
               'Comparing students to each other',
               'Standardized reporting',
           ]),
           'answer'     => 'Informing instruction and giving feedback',
           'explanation'=> 'Formative assessments monitor student learning to guide teaching strategies.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which assessment method encourages students to evaluate their own work?',
           'choices'    => json_encode([
               'Self-assessment',
               'Teacher assessment',
               'Peer review',
               'Standardized test',
           ]),
           'answer'     => 'Self-assessment',
           'explanation'=> 'Self-assessment promotes reflection and ownership of learning.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'A portfolio assessment typically includes which of the following?',
           'choices'    => json_encode([
               'Collection of student works over time',
               'Single end-of-unit exam',
               'Daily attendance records',
               'Random quizzes',
           ]),
           'answer'     => 'Collection of student works over time',
           'explanation'=> 'Portfolios showcase growth and process through curated artifacts.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Criterion-referenced assessments measure student performance against what?',
           'choices'    => json_encode([
               'Predetermined standards or criteria',
               'Peer performance',
               'Norm group averages',
               'Teacher expectations',
           ]),
           'answer'     => 'Predetermined standards or criteria',
           'explanation'=> 'Criterion-referenced tests evaluate mastery of specific objectives.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which feedback model emphasizes what was going well, what needs improvement, and how to improve?',
           'choices'    => json_encode([
               'Feedback sandwich',
               'Direct correction',
               'Peer critique',
               'Silent review',
           ]),
           'answer'     => 'Feedback sandwich',
           'explanation'=> 'The feedback sandwich balances positive and constructive comments.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Summative assessment is typically administered when?',
           'choices'    => json_encode([
               'At the end of an instructional period',
               'Continuously throughout learning',
               'Only in the first week',
               'Only during practice sessions',
           ]),
           'answer'     => 'At the end of an instructional period',
           'explanation'=> 'Summative assessments evaluate overall learning outcomes after instruction.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which tool provides a checklist of observable behaviors or skills?',
           'choices'    => json_encode([
               'Checklist',
               'Holistic rubric',
               'Essay prompt',
               'Multiple-choice items',
           ]),
           'answer'     => 'Checklist',
           'explanation'=> 'Checklists specify discrete skills or behaviors for monitoring progress.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which reliability type refers to consistency of assessment scores over time?',
           'choices'    => json_encode([
               'Test-retest reliability',
               'Inter-rater reliability',
               'Content validity',
               'Construct validity',
           ]),
           'answer'     => 'Test-retest reliability',
           'explanation'=> 'Test-retest checks that repeated administrations yield similar results.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Inter-rater reliability ensures what aspect of assessment?',
           'choices'    => json_encode([
               'Consistency between different scorers',
               'Accuracy of test items',
               'Suitability of rubrics',
               'Timing of assessments',
           ]),
           'answer'     => 'Consistency between different scorers',
           'explanation'=> 'Inter-rater reliability assesses scoring uniformity among evaluators.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which validity type examines whether an assessment covers relevant content domains?',
           'choices'    => json_encode([
               'Content validity',
               'Face validity',
               'Predictive validity',
               'Concurrent validity',
           ]),
           'answer'     => 'Content validity',
           'explanation'=> 'Content validity measures alignment between test content and objectives.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which assessment method involves students performing in front of an audience?',
           'choices'    => json_encode([
               'Performance task',
               'Written exam',
               'Oral quiz',
               'Survey',
           ]),
           'answer'     => 'Performance task',
           'explanation'=> 'Performance tasks assess application of skills through live demonstration.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'What purpose does a scoring guide serve?',
           'choices'    => json_encode([
               'Clarifies criteria and performance levels',
               'Substitutes for instruction',
               'Logs student attendance',
               'Formats multiple-choice questions',
           ]),
           'answer'     => 'Clarifies criteria and performance levels',
           'explanation'=> 'Scoring guides help students understand expectations and how work is evaluated.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which formative tool provides real-time feedback during instruction?',
           'choices'    => json_encode([
               'Exit tickets',
               'Final exam',
               'Midterm test',
               'Report card',
           ]),
           'answer'     => 'Exit tickets',
           'explanation'=> 'Exit tickets quickly gauge understanding at lesson end for next steps.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Peer assessment encourages which key learning outcome?',
           'choices'    => json_encode([
               'Collaborative reflection and critical thinking',
               'Competitive grading',
               'Silent individual work',
               'Teacher-centered feedback',
           ]),
           'answer'     => 'Collaborative reflection and critical thinking',
           'explanation'=> 'Peer assessment develops evaluative skills and deeper understanding.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'What is backwash effect in assessment?',
           'choices'    => json_encode([
               'Assessment influencing teaching and learning behaviors',
               'Test anxiety among students',
               'Improper test security',
               'Scoring inconsistency',
           ]),
           'answer'     => 'Assessment influencing teaching and learning behaviors',
           'explanation'=> 'Backwash refers to how tests shape curriculum and pedagogical practices.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which principle ensures assessments are fair and unbiased?',
           'choices'    => json_encode([
               'Equity',
               'Reliability',
               'Validity',
               'Standardization',
           ]),
           'answer'     => 'Equity',
           'explanation'=> 'Equity addresses fairness, accessibility, and accommodations for all learners.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'What does "grading holistically" mean?',
           'choices'    => json_encode([
               'Evaluating overall performance in one score',
               'Scoring each criterion separately',
               'Using numeric rubrics only',
               'Assigning letter grades randomly',
           ]),
           'answer'     => 'Evaluating overall performance in one score',
           'explanation'=> 'Holistic grading assesses the work as a whole rather than by parts.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 8,
           'question'   => 'Which process document guides teachers in designing assessments aligned with objectives?',
           'choices'    => json_encode([
               'Assessment blueprint',
               'Lesson plan',
               'Seating chart',
               'Attendance roster',
           ]),
           'answer'     => 'Assessment blueprint',
           'explanation'=> 'Blueprints map objectives to assessment items and ensure coverage.',
           'created_at' => $now,
           'updated_at' => $now,
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

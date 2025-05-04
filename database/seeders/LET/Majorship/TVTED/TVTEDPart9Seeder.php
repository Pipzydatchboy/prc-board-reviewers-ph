<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart9Seeder extends Seeder
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

       // Part 9: Assessment and Quality Assurance in Technical & Vocational Education

       //1
       $batch[] = [
        'subject_id'  => 17,
        'part'        => 9,
        'question'    => 'What is the main purpose of summative assessment?',
        'choices'     => json_encode([
            'To evaluate student learning at the end of instruction',
            'To inform daily instructional decisions',
            'To assess teaching performance only',
            'To measure student motivation levels',
        ]),
        'answer'      => 'To evaluate student learning at the end of instruction',
        'explanation' => 'Summative assessments measure student performance against defined standards at the end of a course or unit.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ];

       //2
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Which assessment focuses on judging competency against standards?',
           'choices'     => json_encode([
               'Competency-based assessment',
               'Norm-referenced assessment',
               'Ipsative assessment',
               'Peer assessment',
           ]),
           'answer'      => 'Competency-based assessment',
           'explanation' => 'It evaluates whether learners can perform tasks to a defined standard.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'In assessment, what does reliability refer to?',
           'choices'     => json_encode([
               'Consistency of assessment results',
               'Accuracy of measuring intended outcomes',
               'Time taken to complete a test',
               'Number of questions asked',
           ]),
           'answer'      => 'Consistency of assessment results',
           'explanation' => 'Reliable assessments produce stable and consistent outcomes over repeated measures.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Validity in assessment measures what?',
           'choices'     => json_encode([
               'Whether the assessment measures what it is intended to measure',
               'Number of participants',
               'Time limits',
               'Difficulty level of questions',
           ]),
           'answer'      => 'Whether the assessment measures what it is intended to measure',
           'explanation' => 'Validity ensures conclusions drawn from assessments are correct and relevant.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What is the main benefit of using a rubric?',
           'choices'     => json_encode([
               'Provides clear criteria for grading',
               'Limits student creativity',
               'Reduces the number of assessments',
               'Tracks attendance',
           ]),
           'answer'      => 'Provides clear criteria for grading',
           'explanation' => 'Rubrics help students understand expectations and ensure consistent scoring.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Which term describes systematic review of educational programs?',
           'choices'     => json_encode([
               'Program evaluation',
               'Formative feedback',
               'Peer teaching',
               'Self-study',
           ]),
           'answer'      => 'Program evaluation',
           'explanation' => 'Program evaluation assesses effectiveness and identifies areas for improvement.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Which body typically grants accreditation to TVET institutions?',
           'choices'     => json_encode([
               'Regulatory authority or accreditation agency',
               'Local student council',
               'Parent-teacher association',
               'Technology vendors',
           ]),
           'answer'      => 'Regulatory authority or accreditation agency',
           'explanation' => 'These agencies ensure programs meet established quality standards.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What does ISO stand for in quality management systems?',
           'choices'     => json_encode([
               'International Organization for Standardization',
               'Internal Operational Safety Office',
               'Institutional Oversight for Standards',
               'Integrated Organizational System',
           ]),
           'answer'      => 'International Organization for Standardization',
           'explanation' => 'ISO develops and publishes international standards across industries.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What is the purpose of benchmarking in quality assurance?',
           'choices'     => json_encode([
               'Compare practices against best-in-class standards',
               'Measure student attendance',
               'Design course materials',
               'Hire new staff',
           ]),
           'answer'      => 'Compare practices against best-in-class standards',
           'explanation' => 'Benchmarking helps institutions identify gaps and improve performance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Which cycle model is commonly used for continuous improvement?',
           'choices'     => json_encode([
               'Plan-Do-Check-Act (PDCA)',
               'Waterfall',
               'Agile Scrum',
               'Double Diamond',
           ]),
           'answer'      => 'Plan-Do-Check-Act (PDCA)',
           'explanation' => 'PDCA provides a structured framework for iterative improvement.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What is the role of stakeholder feedback in QA?',
           'choices'     => json_encode([
               'To inform improvements based on user experience',
               'To set tuition fees',
               'To hire instructors',
               'To schedule holidays',
           ]),
           'answer'      => 'To inform improvements based on user experience',
           'explanation' => 'Feedback from learners and employers guides quality enhancements.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Which document outlines standard operating procedures (SOPs)?',
           'choices'     => json_encode([
               'Quality manual',
               'Marketing plan',
               'Student handbook',
               'Maintenance log',
           ]),
           'answer'      => 'Quality manual',
           'explanation' => 'A quality manual details SOPs that ensure consistent processes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What is the purpose of moderation in assessments?',
           'choices'     => json_encode([
               'Ensure consistency and fairness in grading',
               'Reduce the number of assessors',
               'Increase test difficulty',
               'Limit question variety',
           ]),
           'answer'      => 'Ensure consistency and fairness in grading',
           'explanation' => 'Moderation reviews assessment results to maintain standards.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What is Recognition of Prior Learning (RPL)?',
           'choices'     => json_encode([
               'Acknowledging skills gained outside formal education',
               'Mandatory retraining program',
               'Entrance examination',
               'Financial aid scheme',
           ]),
           'answer'      => 'Acknowledging skills gained outside formal education',
           'explanation' => 'RPL validates informal and non-formal learning for credit.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Which process ensures assessment tasks meet competency standards?',
           'choices'     => json_encode([
               'Standardization',
               'Orientation',
               'Calibration',
               'Typification',
           ]),
           'answer'      => 'Standardization',
           'explanation' => 'Standardization aligns assessment tasks with defined competency benchmarks.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What does inter-rater reliability measure?',
           'choices'     => json_encode([
               'Consistency between different assessors',
               'Timeliness of feedback',
               'Length of an assessment',
               'Number of test items',
           ]),
           'answer'      => 'Consistency between different assessors',
           'explanation' => 'Inter-rater reliability evaluates how similarly multiple assessors score the same performance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What is the purpose of item analysis in test development?',
           'choices'     => json_encode([
               'Identify poorly performing test items',
               'Evaluate instructor performance',
               'Schedule exams',
               'Order materials',
           ]),
           'answer'      => 'Identify poorly performing test items',
           'explanation' => 'Item analysis examines difficulty and discrimination of each question to improve tests.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Which tool uses cause-and-effect diagrams for root cause analysis?',
           'choices'     => json_encode([
               'Fishbone (Ishikawa) diagram',
               'Gantt chart',
               'Pareto chart',
               'Flowchart',
           ]),
           'answer'      => 'Fishbone (Ishikawa) diagram',
           'explanation' => 'Fishbone diagrams help teams brainstorm potential causes of a problem.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'What is the purpose of corrective action in a QA system?',
           'choices'     => json_encode([
               'Address non-conformities to prevent recurrence',
               'Plan new programs',
               'Forecast budgets',
               'Hire new staff',
           ]),
           'answer'      => 'Address non-conformities to prevent recurrence',
           'explanation' => 'Corrective actions fix root causes of problems to avoid repeats.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 9,
           'question'    => 'Continuous improvement focuses on:',
           'choices'     => json_encode([
               'Ongoing enhancement of processes',
               'Final exam results only',
               'One-time audits',
               'Student enrollment numbers',
           ]),
           'answer'      => 'Ongoing enhancement of processes',
           'explanation' => 'Continuous improvement uses feedback and data to refine practices over time.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

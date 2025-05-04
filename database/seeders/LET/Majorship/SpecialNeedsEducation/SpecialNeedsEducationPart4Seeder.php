<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart4Seeder extends Seeder
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

       // 61
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Which type of assessment involves observing a student in natural classroom activities?',
           'choices'      => json_encode([
               'Authentic assessment',
               'Standardized testing',
               'Portfolio assessment',
               'Norm-referenced testing'
           ]),
           'answer'       => 'Authentic assessment',
           'explanation'  => 'Authentic assessments evaluate students through real-world tasks and observations.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 62
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'A portfolio assessment primarily collects:',
           'choices'      => json_encode([
               'Samples of student work over time',
               'Standard scores only',
               'Teacher anecdotal notes exclusively',
               'Single test performance'
           ]),
           'answer'       => 'Samples of student work over time',
           'explanation'  => 'Portfolios document progress by compiling varied work across a period.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 63
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Criterion-referenced tests measure student performance against:',
           'choices'      => json_encode([
               'Predefined learning objectives',
               'Normed peer group',
               'Randomized items',
               'Alternate assessment tools'
           ]),
           'answer'       => 'Predefined learning objectives',
           'explanation'  => 'Criterion-referenced assessments assess mastery of specific goals or standards.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 64
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Which assessment model uses multiple tiers of support and data-based decision-making?',
           'choices'      => json_encode([
               'Response to Intervention (RTI)',
               'Individualized Education Program (IEP)',
               'Functional Behavior Assessment',
               'Cue-based assessment'
           ]),
           'answer'       => 'Response to Intervention (RTI)',
           'explanation'  => 'RTI uses tiered instruction and frequent progress monitoring to identify needs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 65
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'A functional behavior assessment (FBA) aims to:',
           'choices'      => json_encode([
               'Identify the purpose of behaviors',
               'Standardize curriculum',
               'Measure academic skills',
               'Evaluate teacher performance'
           ]),
           'answer'       => 'Identify the purpose of behaviors',
           'explanation'  => 'FBA determines antecedents, behaviors, and consequences to inform intervention.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 66
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Progress monitoring is typically conducted every:',
           'choices'      => json_encode([
               '1–4 weeks',
               'Every semester',
               'Once per year',
               'Daily only'
           ]),
           'answer'       => '1–4 weeks',
           'explanation'  => 'Frequent (biweekly or monthly) monitoring tracks student response to instruction.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 67
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Which instrument assesses adaptive behaviors in daily living skills?',
           'choices'      => json_encode([
               'Vineland Adaptive Behavior Scales',
               'Wechsler Intelligence Scale',
               'Peabody Picture Vocabulary Test',
               'Beck Depression Inventory'
           ]),
           'answer'       => 'Vineland Adaptive Behavior Scales',
           'explanation'  => 'Vineland measures social and daily living skills for eligibility and planning.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 68
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'An eligibility team under IDEA must include all EXCEPT:',
           'choices'      => json_encode([
               'General education teacher',
               'Special education teacher',
               'Related service provider as needed',
               'Local school board member'
           ]),
           'answer'       => 'Local school board member',
           'explanation'  => 'Eligibility teams include educators and parents, not board members.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 69
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Parental consent for initial evaluation must be obtained:',
           'choices'      => json_encode([
               'Before assessments begin',
               'After IEP meeting',
               'Upon graduation',
               'Whenever convenient'
           ]),
           'answer'       => 'Before assessments begin',
           'explanation'  => 'Law requires written parental consent before conducting evaluations.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 70
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'A re-evaluation under IDEA must occur at least every:',
           'choices'      => json_encode([
               '3 years',
               '1 year',
               '6 months',
               '5 years'
           ]),
           'answer'       => '3 years',
           'explanation'  => 'IDEA mandates triennial re-evaluation to determine continued eligibility.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 71
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Which assessment tool is norm-referenced for cognitive ability?',
           'choices'      => json_encode([
               'Stanford-Binet Intelligence Scale',
               'Curriculum-based measurement',
               'Work sample analysis',
               'Functional assessment'
           ]),
           'answer'       => 'Stanford-Binet Intelligence Scale',
           'explanation'  => 'The Stanford-Binet provides IQ scores compared to age norms.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 72
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Criterion for determining specific learning disability includes a significant discrepancy between:',
           'choices'      => json_encode([
               'Achievement and intellectual ability',
               'Vision and hearing',
               'Motor skills and social skills',
               'Teacher expectations and school resources'
           ]),
           'answer'       => 'Achievement and intellectual ability',
           'explanation'  => 'SLD identification often uses discrepancy between IQ and academic performance.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 73
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Which assessment is best for measuring phonemic awareness?',
           'choices'      => json_encode([
               'Phonological Awareness Test',
               'Gross Motor Function Measure',
               'Behavior Rating Inventory',
               'Adaptive Behavior Assessment System'
           ]),
           'answer'       => 'Phonological Awareness Test',
           'explanation'  => 'Phonological assessments evaluate awareness of sound structures in language.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 74
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Informal reading inventories are primarily used to assess:',
           'choices'      => json_encode([
               'Individual reading levels and strategies',
               'School-wide achievement trends',
               'Physical fitness',
               'Speech articulation errors'
           ]),
           'answer'       => 'Individual reading levels and strategies',
           'explanation'  => 'IRIs help teachers identify students’ reading comprehension and word recognition skills.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 75
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Dynamic assessment focuses on:',
           'choices'      => json_encode([
               'Learning potential and response to instruction',
               'Static performance on tests',
               'Physical endurance',
               'Emotional temperament'
           ]),
           'answer'       => 'Learning potential and response to instruction',
           'explanation'  => 'Dynamic assessment evaluates how students learn with mediated support.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 76
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Which tool assesses language skills through pictorial prompts?',
           'choices'      => json_encode([
               'Peabody Picture Vocabulary Test',
               'Beck Anxiety Inventory',
               'Gross Motor Function Measure',
               'Vineland Adaptive Behavior Scales'
           ]),
           'answer'       => 'Peabody Picture Vocabulary Test',
           'explanation'  => 'The PPVT measures receptive vocabulary using images.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 77
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Curriculum-based measurement is valued because it is:',
           'choices'      => json_encode([
               'Brief, frequent, and sensitive to instructional changes',
               'Expensive and lengthy',
               'Only norm-referenced',
               'Only criterion-referenced'
           ]),
           'answer'       => 'Brief, frequent, and sensitive to instructional changes',
           'explanation'  => 'CBM provides quick data to monitor student growth over time.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 78
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'A multidisciplinary evaluation team typically includes all EXCEPT:',
           'choices'      => json_encode([
               'Occupational therapist',
               'Regular education teacher',
               'Special education administrator',
               'Medical specialist'
           ]),
           'answer'       => 'Medical specialist',
           'explanation'  => 'While findings from medical exams inform, teams include educators and related service providers.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 79
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Child Find under IDEA requires states to:',
           'choices'      => json_encode([
               'Identify and evaluate all children with disabilities',
               'Test only low-income students',
               'Provide services only upon request',
               'Exclude private school students'
           ]),
           'answer'       => 'Identify and evaluate all children with disabilities',
           'explanation'  => 'Child Find mandates proactive identification of eligible children.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 80
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 4,
           'question'     => 'Which document outlines measurable annual goals for a student with a disability?',
           'choices'      => json_encode([
               'Individualized Education Program (IEP)',
               'Functional Behavior Assessment',
               'Chapter 1 Plan',
               'Adaptive behavior inventory'
           ]),
           'answer'       => 'Individualized Education Program (IEP)',
           'explanation'  => 'The IEP specifies annual goals and educational services tailored to the student.',
           'created_at'   => $now,
           'updated_at'   => $now
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

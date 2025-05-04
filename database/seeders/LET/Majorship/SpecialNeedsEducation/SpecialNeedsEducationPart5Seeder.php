<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart5Seeder extends Seeder
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

       // 81
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Under IDEA, the Child Find mandate requires states to:',
           'choices'      => json_encode([
               'Identify, locate, and evaluate all children with disabilities',
               'Provide services only upon parent request',
               'Exclude private school students',
               'Offer only general education supports'
           ]),
           'answer'       => 'Identify, locate, and evaluate all children with disabilities',
           'explanation'  => 'Child Find ensures proactive identification and evaluation of eligible children.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 82
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Prior Written Notice (PWN) under IDEA must be provided to parents when:',
           'choices'      => json_encode([
               'The school proposes or refuses a change in identification or services',
               'Storing student records',
               'Updating general curriculum',
               'Scheduling teacher trainings'
           ]),
           'answer'       => 'The school proposes or refuses a change in identification or services',
           'explanation'  => 'PWN informs parents of decisions regarding special education eligibility and services.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 83
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'An IEP must include which of the following components?',
           'choices'      => json_encode([
               'Present levels of academic achievement and functional performance',
               'Teacher salary scales',
               'District budget details',
               'Building maintenance schedules'
           ]),
           'answer'       => 'Present levels of academic achievement and functional performance',
           'explanation'  => 'This section provides baseline data to develop measurable annual goals.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 84
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Transition planning for post-secondary goals must begin by age:',
           'choices'      => json_encode([
               '16',
               '14',
               '18',
               '21'
           ]),
           'answer'       => '16',
           'explanation'  => 'IDEA requires transition services to be included by the student’s 16th birthday.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 85
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'A Manifestation Determination Review must occur within how many days of a change in placement?',
           'choices'      => json_encode([
               '10 school days',
               '30 calendar days',
               '5 business days',
               '15 calendar days'
           ]),
           'answer'       => '10 school days',
           'explanation'  => 'MDR reviews whether the behavior is linked to the student’s disability before disciplinary action.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 86
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Occupational therapy as a related service focuses on:',
           'choices'      => json_encode([
               'Enhancing fine motor and daily living skills',
               'Reading comprehension',
               'Athletic coaching',
               'Mathematical computation'
           ]),
           'answer'       => 'Enhancing fine motor and daily living skills',
           'explanation'  => 'OT helps students develop independence in school and home activities.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 87
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'An FBA must be completed before implementing a Behavior Intervention Plan to:',
           'choices'      => json_encode([
               'Identify the function of the behavior',
               'Assess academic achievement',
               'Measure physical health',
               'Evaluate staff performance'
           ]),
           'answer'       => 'Identify the function of the behavior',
           'explanation'  => 'FBA analyzes antecedents and consequences to develop effective interventions.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 88
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Specific Learning Disability identification may use which approach instead of discrepancy models?',
           'choices'      => json_encode([
               'Response to Intervention (RTI)',
               'Norm-referenced testing only',
               'IQ testing exclusively',
               'Parental surveys only'
           ]),
           'answer'       => 'Response to Intervention (RTI)',
           'explanation'  => 'RTI identifies learning difficulties by monitoring response to targeted instruction.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 89
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'An eligibility determination for special education must be made by a:',
           'choices'      => json_encode([
               'Multidisciplinary team',
               'Single teacher decision',
               'Parent only',
               'Principal only'
           ]),
           'answer'       => 'Multidisciplinary team',
           'explanation'  => 'Teams combine expertise to evaluate and decide eligibility.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 90
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Re-evaluation under IDEA must occur at least once every:',
           'choices'      => json_encode([
               '3 years',
               '1 year',
               '6 months',
               '5 years'
           ]),
           'answer'       => '3 years',
           'explanation'  => 'Triennial reviews ensure continued eligibility and update services.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 91
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Consent for initial evaluation must be obtained:',
           'choices'      => json_encode([
               'Before the evaluation begins',
               'After the evaluation report is written',
               'During the IEP meeting',
               'At graduation'
           ]),
           'answer'       => 'Before the evaluation begins',
           'explanation'  => 'Parental consent is legally required to conduct assessments.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 92
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'A Functional Assessment gathers data on:',
           'choices'      => json_encode([
               'How a student performs tasks in natural settings',
               'IQ scores only',
               'Medical history exclusively',
               'Standardized test norms'
           ]),
           'answer'       => 'How a student performs tasks in natural settings',
           'explanation'  => 'Functional Assessment informs instructional needs by observing real performance.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 93
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Parent participation in the IEP meeting is:',
           'choices'      => json_encode([
               'Required by law',
               'Discouraged',
               'Optional for related services only',
               'Only for transition planning'
           ]),
           'answer'       => 'Required by law',
           'explanation'  => 'IDEA mandates parental involvement in IEP development.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 94
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'The IEP team must review a student’s IEP at least:',
           'choices'      => json_encode([
               'Annually',
               'Every six months',
               'Every three years',
               'Once per semester'
           ]),
           'answer'       => 'Annually',
           'explanation'  => 'Annual reviews ensure goals and services remain appropriate.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 95
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Assistive technology consideration must occur:',
           'choices'      => json_encode([
               'During IEP development',
               'Only upon parent request',
               'After disciplinary actions',
               'Never'
           ]),
           'answer'       => 'During IEP development',
           'explanation'  => 'IDEA requires teams to consider AT services for each IEP.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 96
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'A multidisciplinary evaluation team typically excludes:',
           'choices'      => json_encode([
               'Medical specialist',
               'Special education teacher',
               'General education teacher',
               'Parent'
           ]),
           'answer'       => 'Medical specialist',
           'explanation'  => 'Teams include educators and parents; medical input comes via reports.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 97
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Manifestation determination reviews examine whether behaviors are:',
           'choices'      => json_encode([
               'Related to the student’s disability',
               'Caused by medication only',
               'Random and isolated',
               'Always typical'
           ]),
           'answer'       => 'Related to the student’s disability',
           'explanation'  => 'This review ensures disciplinary actions are appropriate and lawful.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 98
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Progress monitoring data should be collected by:',
           'choices'      => json_encode([
               'Regularly at predetermined intervals',
               'Only at year-end',
               'Randomly without schedule',
               'Once at program start'
           ]),
           'answer'       => 'Regularly at predetermined intervals',
           'explanation'  => 'Consistent data collection tracks student growth and informs instruction.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 99
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Eligibility determination must consider evaluations in all suspected areas of:',
           'choices'      => json_encode([
               'Disability',
               'Physical health only',
               'Athletic ability',
               'Family background'
           ]),
           'answer'       => 'Disability',
           'explanation'  => 'Teams evaluate all areas of suspected disability to ensure accurate eligibility.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 100
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 5,
           'question'     => 'Parent consent for services must be obtained before implementing:',
           'choices'      => json_encode([
               'The initial provision of special education services',
               'General education curriculum changes',
               'Staff professional development',
               'Building renovations'
           ]),
           'answer'       => 'The initial provision of special education services',
           'explanation'  => 'Written consent is required before beginning any new special education services.',
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

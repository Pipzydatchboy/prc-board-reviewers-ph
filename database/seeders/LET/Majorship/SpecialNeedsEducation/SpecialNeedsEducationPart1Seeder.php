<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart1Seeder extends Seeder
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

       // 1
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'Republic Act 7277 is commonly known as the:',
           'choices'      => json_encode([
               'Magna Carta for Persons with Disabilities',
               'Education Act of 1982',
               'Child Protection Act',
               'Anti-Discrimination Act'
           ]),
           'answer'       => 'Magna Carta for Persons with Disabilities',
           'explanation'  => 'RA 7277 is officially called the Magna Carta for Persons with Disabilities.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 2
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'In what year was RA 7277 enacted?',
           'choices'      => json_encode([
               '1992',
               '1995',
               '1987',
               '2000'
           ]),
           'answer'       => '1992',
           'explanation'  => 'RA 7277 was enacted on March 24, 1992.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 3
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'RA 7277 was amended by which law to strengthen provisions for PWDs?',
           'choices'      => json_encode([
               'RA 9442',
               'RA 10524',
               'RA 7610',
               'RA 10364'
           ]),
           'answer'       => 'RA 9442',
           'explanation'  => 'RA 9442 amended and strengthened RA 7277 in 2007.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 4
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The Philippines ratified the UN Convention on the Rights of Persons with Disabilities in:',
           'choices'      => json_encode([
               '2008',
               '2010',
               '2006',
               '2012'
           ]),
           'answer'       => '2008',
           'explanation'  => 'The Philippines ratified the UN CRPD on July 15, 2008.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 5
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The social model of disability emphasizes that disability is primarily caused by:',
           'choices'      => json_encode([
               'Societal barriers and attitudes',
               'Individual medical conditions',
               'Genetic factors',
               'Educational deficits'
           ]),
           'answer'       => 'Societal barriers and attitudes',
           'explanation'  => 'The social model focuses on removing societal barriers rather than individual deficits.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 6
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The medical model of disability focuses on disability as:',
           'choices'      => json_encode([
               'An individual’s medical impairment',
               'A social construct',
               'A form of discrimination',
               'An educational challenge'
           ]),
           'answer'       => 'An individual’s medical impairment',
           'explanation'  => 'The medical model views disability as a condition within the individual requiring treatment.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 7
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'Which special education service delivery model involves a separate classroom for specialized instruction?',
           'choices'      => json_encode([
               'Resource room model',
               'Itinerant teaching model',
               'Mainstreaming model',
               'Co-teaching model'
           ]),
           'answer'       => 'Resource room model',
           'explanation'  => 'The resource room model provides pull-out instruction in a separate setting.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 8
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The itinerant teaching model is characterized by:',
           'choices'      => json_encode([
               'Specialized teachers traveling to multiple sites',
               'Full inclusion in regular classrooms',
               'Separate schools for PWDs',
               'Online instruction only'
           ]),
           'answer'       => 'Specialized teachers traveling to multiple sites',
           'explanation'  => 'Itinerant teachers move between schools to support students with disabilities.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 9
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'Full inclusion in education means children with disabilities:',
           'choices'      => json_encode([
               'Learn alongside non-disabled peers with appropriate supports',
               'Are placed in separate schools',
               'Attend only specialized classes',
               'Participate in extracurricular activities only'
           ]),
           'answer'       => 'Learn alongside non-disabled peers with appropriate supports',
           'explanation'  => 'Full inclusion integrates students in general education classrooms with support services.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 10
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'Integration in special education differs from inclusion in that it:',
           'choices'      => json_encode([
               'May require students to adapt to existing settings',
               'Modifies the general education environment',
               'Involves curriculum redesign',
               'Ensures equal participation'
           ]),
           'answer'       => 'May require students to adapt to existing settings',
           'explanation'  => 'Integration often places students in general classes without altering the environment significantly.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 11
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The principle of Least Restrictive Environment (LRE) mandates that students with disabilities be:',
           'choices'      => json_encode([
               'Educated with non-disabled peers to the maximum extent appropriate',
               'Placed in separate settings for all instruction',
               'Excluded from general education activities',
               'Assessed only with specialized tests'
           ]),
           'answer'       => 'Educated with non-disabled peers to the maximum extent appropriate',
           'explanation'  => 'LRE ensures access to general education while meeting individual needs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 12
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The Salamanca Statement (1994) advocates for:',
           'choices'      => json_encode([
               'Inclusive education for all children regardless of ability',
               'Segregation of students with disabilities',
               'Standardized testing only',
               'Removal of assistive technologies'
           ]),
           'answer'       => 'Inclusive education for all children regardless of ability',
           'explanation'  => 'The Salamanca Statement calls for participation of all students in regular schools.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 13
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'Under RA 7277, a person with disability is defined as having:',
           'choices'      => json_encode([
               'A long-term physical, mental, intellectual or sensory impairment',
               'A short-term illness',
               'Temporary injury',
               'Outstanding academic achievement'
           ]),
           'answer'       => 'A long-term physical, mental, intellectual or sensory impairment',
           'explanation'  => 'RA 7277 defines PWD as those with long-term impairments restricting participation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 14
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'In special education terms, "impairment" refers to:',
           'choices'      => json_encode([
               'Loss or abnormality of psychological, physiological or anatomical structure or function',
               'Disadvantage in society',
               'Educational placement',
               'Attitudinal barriers'
           ]),
           'answer'       => 'Loss or abnormality of psychological, physiological or anatomical structure or function',
           'explanation'  => 'Impairment is an intrinsic problem with body function or structure.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 15
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'A "handicap" is defined as:',
           'choices'      => json_encode([
               'A disadvantage for a given individual resulting from impairment or disability',
               'An educational service delivery model',
               'A medical diagnosis',
               'A type of disability'
           ]),
           'answer'       => 'A disadvantage for a given individual resulting from impairment or disability',
           'explanation'  => 'Handicap describes contextual disadvantages imposed by barriers.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 16
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'Accessibility in special education settings involves:',
           'choices'      => json_encode([
               'Removal of physical and attitudinal barriers',
               'Increasing academic tests',
               'Segregating students',
               'Limiting family involvement'
           ]),
           'answer'       => 'Removal of physical and attitudinal barriers',
           'explanation'  => 'Accessibility ensures environments and attitudes support participation of PWDs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 17
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'RA 7277 mandates government agencies to reserve what percent of positions for PWDs?',
           'choices'      => json_encode([
               '1%',
               '3%',
               '5%',
               '10%'
           ]),
           'answer'       => '1%',
           'explanation'  => 'RA 7277 requires at least 1% of jobs in government bodies for PWDs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 18
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'Which agency is primarily responsible for implementing RA 7277?',
           'choices'      => json_encode([
               'DSWD',
               'DepEd',
               'PRC',
               'DOH'
           ]),
           'answer'       => 'DSWD',
           'explanation'  => 'The Department of Social Welfare and Development oversees RA 7277 implementation.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 19
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The principle of "least dangerous assumption" instructs educators to:',
           'choices'      => json_encode([
               'Assume competence until proven otherwise',
               'Rely solely on test scores',
               'Avoid inclusive practices',
               'Exclude opinions of families'
           ]),
           'answer'       => 'Assume competence until proven otherwise',
           'explanation'  => 'This principle guides educators to provide rich learning opportunities by assuming ability.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 20
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 1,
           'question'     => 'The Salamanca Statement was adopted in which year?',
           'choices'      => json_encode([
               '1994',
               '1990',
               '1985',
               '2000'
           ]),
           'answer'       => '1994',
           'explanation'  => 'The UNESCO Salamanca Statement on inclusive education was adopted in 1994.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

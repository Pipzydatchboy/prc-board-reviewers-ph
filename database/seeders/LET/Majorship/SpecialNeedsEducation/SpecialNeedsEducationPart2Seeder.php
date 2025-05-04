<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart2Seeder extends Seeder
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

       // 21
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The biopsychosocial model of disability views disability as:',
           'choices'      => json_encode([
               'A purely medical condition',
               'Result of societal barriers only',
               'Interaction between health conditions and environmental factors',
               'An educational deficiency'
           ]),
           'answer'       => 'Interaction between health conditions and environmental factors',
           'explanation'  => 'The biopsychosocial model integrates biological, psychological, and social aspects in understanding disability.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 22
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'ICF stands for:',
           'choices'      => json_encode([
               'International Classification of Functioning, Disability and Health',
               'Integrated Code of Functions',
               'International Council for Disability and Health',
               'Index of Cognitive Function'
           ]),
           'answer'       => 'International Classification of Functioning, Disability and Health',
           'explanation'  => 'ICF is the WHO framework for measuring health and disability at individual and population levels.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 23
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The ICF classification system was published by:',
           'choices'      => json_encode([
               'World Health Organization',
               'American Psychological Association',
               'Department of Health',
               'UNESCO'
           ]),
           'answer'       => 'World Health Organization',
           'explanation'  => 'WHO developed the ICF to provide a unified view of health and disability.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 24
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The ICD is primarily a classification of:',
           'choices'      => json_encode([
               'Diseases and health conditions',
               'Educational disabilities',
               'Assistive technologies',
               'Social policies'
           ]),
           'answer'       => 'Diseases and health conditions',
           'explanation'  => 'The International Classification of Diseases (ICD) categorizes diseases and health conditions globally.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 25
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'Co-teaching model where teachers take turns leading instruction is called:',
           'choices'      => json_encode([
               'Parallel teaching',
               'Station teaching',
               'Alternative teaching',
               'One teach, one assist'
           ]),
           'answer'       => 'Parallel teaching',
           'explanation'  => 'In parallel teaching, two teachers jointly plan and split the class to teach the same content simultaneously.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 26
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'In which co-teaching approach do students rotate between teachers to learn different content?',
           'choices'      => json_encode([
               'Station teaching',
               'Team teaching',
               'Consultative teaching',
               'Self-contained teaching'
           ]),
           'answer'       => 'Station teaching',
           'explanation'  => 'Station teaching divides content into stations where each teacher leads a station, and students rotate.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 27
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'Which co-teaching model involves one teacher leading while the other collects observational data?',
           'choices'      => json_encode([
               'One teach, one observe',
               'Parallel teaching',
               'Station teaching',
               'Self-contained teaching'
           ]),
           'answer'       => 'One teach, one observe',
           'explanation'  => 'One teach, one observe has one teacher instruct while the other gathers data on student performance.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 28
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The model where special education teachers provide support within the general education classroom is called:',
           'choices'      => json_encode([
               'Push-in model',
               'Pull-out model',
               'Self-contained model',
               'Residential model'
           ]),
           'answer'       => 'Push-in model',
           'explanation'  => 'In the push-in model, special educators deliver instruction inside the general education classroom.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 29
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'Which model involves students leaving the general classroom for specialized instruction?',
           'choices'      => json_encode([
               'Pull-out model',
               'Push-in model',
               'Self-contained model',
               'Inclusion model'
           ]),
           'answer'       => 'Pull-out model',
           'explanation'  => 'The pull-out model provides special instruction in a separate setting outside the general classroom.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 30
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'Inclusive education ensures that students with disabilities:',
           'choices'      => json_encode([
               'Learn alongside peers with appropriate supports',
               'Attend separate schools',
               'Avoid general education classes',
               'Receive only specialized services'
           ]),
           'answer'       => 'Learn alongside peers with appropriate supports',
           'explanation'  => 'Inclusive education integrates students with disabilities into general classes with necessary accommodations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 31
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The normalization principle advocates for individuals with disabilities to:',
           'choices'      => json_encode([
               'Experience living conditions as close to typical as possible',
               'Live in segregated settings',
               'Be medically treated only',
               'Avoid community participation'
           ]),
           'answer'       => 'Experience living conditions as close to typical as possible',
           'explanation'  => 'Normalization emphasizes typical life experiences and environments for PWDs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 32
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The principle of de-institutionalization calls for:',
           'choices'      => json_encode([
               'Shifting services from institutions to community-based settings',
               'Increasing institutional care',
               'Reducing community support',
               'Eliminating professional services'
           ]),
           'answer'       => 'Shifting services from institutions to community-based settings',
           'explanation'  => 'De-institutionalization aims to integrate PWDs into community life and reduce reliance on large institutions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 33
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'Empowerment principle in special education emphasizes:',
           'choices'      => json_encode([
               'Supporting individuals to make their own choices',
               'Restricting decision-making',
               'Institutional control',
               'Passive care'
           ]),
           'answer'       => 'Supporting individuals to make their own choices',
           'explanation'  => 'Empowerment involves promoting self-determination and choice among PWDs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 34
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The principle of nondiscrimination ensures:',
           'choices'      => json_encode([
               'Equal treatment and access for all individuals',
               'Preferential treatment',
               'Exclusion of PWDs',
               'Mandatory segregation'
           ]),
           'answer'       => 'Equal treatment and access for all individuals',
           'explanation'  => 'Nondiscrimination guarantees that PWDs receive the same rights as others.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 35
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The accessibility principle requires:',
           'choices'      => json_encode([
               'Designing environments, products, and services usable by everyone',
               'Removing all services',
               'Limiting access to special facilities',
               'Excluding PWDs from public spaces'
           ]),
           'answer'       => 'Designing environments, products, and services usable by everyone',
           'explanation'  => 'Accessibility ensures equitable use by all, including PWDs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 36
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The principle of community presence means:',
           'choices'      => json_encode([
               'Individuals with disabilities living and participating in their communities',
               'Restricted access to community activities',
               'Isolation in institutions',
               'Segregated programs'
           ]),
           'answer'       => 'Individuals with disabilities living and participating in their communities',
           'explanation'  => 'Community presence promotes full engagement in social life.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 37
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The principle of community participation refers to:',
           'choices'      => json_encode([
               'Active involvement of PWDs in community decision-making and activities',
               'Passive observation only',
               'Exclusion from civic roles',
               'Mandatory isolation'
           ]),
           'answer'       => 'Active involvement of PWDs in community decision-making and activities',
           'explanation'  => 'Participation ensures inclusion in societal processes.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 38
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The principle of respect for dignity means:',
           'choices'      => json_encode([
               'Acknowledging the intrinsic worth of every individual',
               'Preferential treatment',
               'Mandatory dependency',
               'Segregation'
           ]),
           'answer'       => 'Acknowledging the intrinsic worth of every individual',
           'explanation'  => 'Respect for dignity underlines ethical treatment of PWDs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 39
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The equality of opportunities principle mandates:',
           'choices'      => json_encode([
               'Providing the same chances for PWDs as for others',
               'Creating special tracks only',
               'Limiting access',
               'Excluding PWDs'
           ]),
           'answer'       => 'Providing the same chances for PWDs as for others',
           'explanation'  => 'Equality of opportunities ensures fair access to resources and services.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 40
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 2,
           'question'     => 'The principle of social integration refers to:',
           'choices'      => json_encode([
               'Full inclusion of PWDs in all facets of society',
               'Isolation in special programs',
               'Mandatory medical treatment',
               'Segregation'
           ]),
           'answer'       => 'Full inclusion of PWDs in all facets of society',
           'explanation'  => 'Social integration aims for PWDs to participate equally in community life.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

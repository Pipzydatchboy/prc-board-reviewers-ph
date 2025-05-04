<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart9Seeder extends Seeder
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

       // Part 9 – Question 161
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'What is the minimum age requirement for a Philippine senator?',
           'choices'      => json_encode([
               '30 years',
               '35 years',
               '40 years',
               '45 years',
           ]),
           'answer'       => '35 years',
           'explanation'  => 'According to the 1987 Constitution, a senator must be at least 35 years old on election day.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 162
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Who has the power to veto bills passed by the Philippine Congress?',
           'choices'      => json_encode([
               'President',
               'Senate President',
               'Chief Justice',
               'Vice President',
           ]),
           'answer'       => 'President',
           'explanation'  => 'The President may sign or veto legislation under Article VI of the Constitution.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 163
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'What is the minimum age requirement for a member of the Philippine House of Representatives?',
           'choices'      => json_encode([
               '21 years',
               '25 years',
               '30 years',
               '35 years',
           ]),
           'answer'       => '25 years',
           'explanation'  => 'A House member must be at least 25 years old on election day according to the Constitution.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 164
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which level of measurement categorizes data without implying order or magnitude?',
           'choices'      => json_encode([
               'Nominal',
               'Ordinal',
               'Interval',
               'Ratio',
           ]),
           'answer'       => 'Nominal',
           'explanation'  => 'Nominal scales classify data into distinct categories with no intrinsic order.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 165
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which level of measurement ranks data and implies order but not equal intervals?',
           'choices'      => json_encode([
               'Nominal',
               'Ordinal',
               'Interval',
               'Ratio',
           ]),
           'answer'       => 'Ordinal',
           'explanation'  => 'Ordinal scales order data but do not guarantee equal spacing between ranks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 166
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which type of error occurs when a sample does not accurately represent the population?',
           'choices'      => json_encode([
               'Measurement error',
               'Sampling error',
               'Processing error',
               'Coverage error',
           ]),
           'answer'       => 'Sampling error',
           'explanation'  => 'Sampling error is the difference between a sample statistic and the true population parameter.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 167
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which law is known as the "Bayanihan to Heal As One Act"?',
           'choices'      => json_encode([
               'RA 11469',
               'RA 9262',
               'RA 9275',
               'RA 9184',
           ]),
           'answer'       => 'RA 11469',
           'explanation'  => 'RA 11469 granted special powers to address the COVID‑19 pandemic in 2020.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 168
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which tax type is based on the assessed value of real property?',
           'choices'      => json_encode([
               'Income tax',
               'Real property tax',
               'Value Added Tax',
               'Estate tax',
           ]),
           'answer'       => 'Real property tax',
           'explanation'  => 'Real property tax is an ad valorem tax imposed on land and improvements by local government units.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 169
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which law abolished the death penalty in the Philippines?',
           'choices'      => json_encode([
               'RA 9346',
               'RA 9165',
               'RA 7610',
               'RA 7277',
           ]),
           'answer'       => 'RA 9346',
           'explanation'  => 'RA 9346 abolished the death penalty on crimes penalized under Philippine law in 2006.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 170
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which Philippine law implemented the K-to-12 educational reform?',
           'choices'      => json_encode([
               'RA 10533',
               'RA 7722',
               'RA 9155',
               'RA 10931',
           ]),
           'answer'       => 'RA 10533',
           'explanation'  => 'RA 10533 introduced the Kindergarten to 12 Basic Education Program in 2013.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 171
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which government agency formulates and implements the national budget in the Philippines?',
           'choices'      => json_encode([
               'Department of Budget and Management',
               'Department of Finance',
               'Commission on Audit',
               'National Economic and Development Authority',
           ]),
           'answer'       => 'Department of Budget and Management',
           'explanation'  => 'The DBM prepares the annual National Expenditure Program and oversees budget execution.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 172
       $batch[] = [
        'subject_id'   => 14,
        'part'         => 9,
        'question'     => 'Which Republic Act is known as the Anti-Red Tape Act?',
        'choices'      => json_encode([
            'RA 10173',
            'RA 9485',
            'RA 7277',
            'RA 11054',
        ]),
        'answer'       => 'RA 9485',
        'explanation'  => 'RA 9485 was enacted to simplify government procedures and reduce red tape.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ];

       // Part 9 – Question 173
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which Philippine region is most frequently hit by tropical cyclones?',
           'choices'      => json_encode([
               'Region V (Bicol)',
               'Region VIII (Eastern Visayas)',
               'Region I (Ilocos)',
               'CAR',
           ]),
           'answer'       => 'Region VIII (Eastern Visayas)',
           'explanation'  => 'Eastern Visayas is most exposed to typhoons entering from the Pacific Ocean.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 174
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'What is the economic policy of reducing tariffs to encourage imports called?',
           'choices'      => json_encode([
               'Protectionism',
               'Free trade',
               'Autarky',
               'Import substitution',
           ]),
           'answer'       => 'Free trade',
           'explanation'  => 'Free trade lowers barriers to allow goods to move freely across borders.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 175
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'What is the purpose of the Philippine Development Plan?',
           'choices'      => json_encode([
               'To set national budget ceilings',
               'To outline medium-term socioeconomic goals',
               'To establish local ordinances',
               'To appoint cabinet members',
           ]),
           'answer'       => 'To outline medium-term socioeconomic goals',
           'explanation'  => 'The PDP guides national policies and programs over a six-year period.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 176
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'What is the government’s conditional cash transfer program known as?',
           'choices'      => json_encode([
               'Pantawid Pamilyang Pilipino Program (4Ps)',
               'PhilHealth',
               'Pag-IBIG Fund',
               'SSS',
           ]),
           'answer'       => 'Pantawid Pamilyang Pilipino Program (4Ps)',
           'explanation'  => '4Ps provides cash grants to eligible poor households under health and education conditions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 177
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which statistical measure quantifies the spread of data around the mean?',
           'choices'      => json_encode([
               'Mean',
               'Median',
               'Standard deviation',
               'Mode',
           ]),
           'answer'       => 'Standard deviation',
           'explanation'  => 'Standard deviation measures the dispersion of data points relative to the mean.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 178
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which Act established the National Commission on Muslim Filipinos?',
           'choices'      => json_encode([
               'RA 9997',
               'RA 11054',
               'RA 8371',
               'RA 7277',
           ]),
           'answer'       => 'RA 9997',
           'explanation'  => 'RA 9997 created the NCMF to oversee the welfare of Muslim Filipinos.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 179
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which law is also called the Magna Carta of Women?',
           'choices'      => json_encode([
               'RA 9710',
               'RA 9262',
               'RA 9098',
               'RA 9346',
           ]),
           'answer'       => 'RA 9710',
           'explanation'  => 'RA 9710 promotes the rights and welfare of Filipino women.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 180
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 9,
           'question'     => 'Which decree requires employers to grant 13th month pay to their employees?',
           'choices'      => json_encode([
               'Presidential Decree 851',
               'RA 7722',
               'RA 7652',
               'PD 1586',
           ]),
           'answer'       => 'Presidential Decree 851',
           'explanation'  => 'PD 851 mandates the payment of 13th month bonus to covered employees.',
           'created_at'   => $now,
           'updated_at'   => $now,
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

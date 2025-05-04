<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart8Seeder extends Seeder
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

       // Part 8 – Question 141
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which measure of national income includes net income earned from abroad?',
           'choices'      => json_encode([
               'Gross Domestic Product',
               'Net Domestic Product',
               'Gross National Product',
               'Net National Product',
           ]),
           'answer'       => 'Gross National Product',
           'explanation'  => 'GNP equals GDP plus net income from foreign investments.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 142
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which Republic Act created the Commission on Higher Education (CHED)?',
           'choices'      => json_encode([
               'RA 7722',
               'RA 7160',
               'RA 7277',
               'RA 9184',
           ]),
           'answer'       => 'RA 7722',
           'explanation'  => 'RA 7722, the CHED Charter, was enacted in 1994 to oversee tertiary education.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 143
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'What is the capital city of the Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)?',
           'choices'      => json_encode([
               'Cotabato City',
               'Marawi City',
               'Iligan City',
               'Surigao City',
           ]),
           'answer'       => 'Cotabato City',
           'explanation'  => 'Cotabato City serves as the de facto capital of BARMM.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 144
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which river is the longest in Mindanao?',
           'choices'      => json_encode([
               'Pulangi River',
               'Agusan River',
               'Mindanao River',
               'Cagayan River',
           ]),
           'answer'       => 'Pulangi River',
           'explanation'  => 'Pulangi River, a tributary of Mindanao River, is the longest in Mindanao.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 145
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which UNESCO World Heritage Site in the Philippines is known for its rice terraces?',
           'choices'      => json_encode([
               'Tubbataha Reefs',
               'Rice Terraces of the Philippine Cordilleras',
               'Historic Town of Vigan',
               'Baroque Churches of the Philippines',
           ]),
           'answer'       => 'Rice Terraces of the Philippine Cordilleras',
           'explanation'  => 'The rice terraces are an ancient farming system recognized by UNESCO in 1995.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 146
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which Philippine festival features dancers moving between bamboo poles?',
           'choices'      => json_encode([
               'Ati-Atihan',
               'Dinagyang',
               'Sinulog',
               'Tinikling',
           ]),
           'answer'       => 'Tinikling',
           'explanation'  => 'Tinikling imitates the movements of the tikling bird with bamboo poles rhythmically clapped.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 147
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which economic term describes a market with only one seller?',
           'choices'      => json_encode([
               'Oligopoly',
               'Monopoly',
               'Monopsony',
               'Perfect competition',
           ]),
           'answer'       => 'Monopoly',
           'explanation'  => 'In a monopoly, a single firm dominates the entire market supply.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 148
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which sociological theory focuses on power and inequality in society?',
           'choices'      => json_encode([
               'Functionalism',
               'Symbolic interactionism',
               'Conflict theory',
               'Social exchange theory',
           ]),
           'answer'       => 'Conflict theory',
           'explanation'  => 'Conflict theory examines social structures as arenas of inequality and power struggles.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 149
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which research design manipulates variables under controlled conditions?',
           'choices'      => json_encode([
               'Survey research',
               'Experimental design',
               'Case study',
               'Grounded theory',
           ]),
           'answer'       => 'Experimental design',
           'explanation'  => 'Experiments involve manipulation of independent variables to observe effects.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 150
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which branch of government investigates administrative misconduct by officials?',
           'choices'      => json_encode([
               'Judicial',
               'Legislative',
               'Executive',
               'Comptroller',
           ]),
           'answer'       => 'Legislative',
           'explanation'  => 'Congress may conduct inquiries in aid of legislation, investigating administrative issues.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 151
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which Philippine law governs environmental impact assessments?',
           'choices'      => json_encode([
               'RA 9003',
               'PD 1586',
               'RA 8749',
               'RA 9275',
           ]),
           'answer'       => 'PD 1586',
           'explanation'  => 'Presidential Decree 1586 created the Environmental Impact Statement System in 1978.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 152
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which technology allows for remote learning via internet platforms?',
           'choices'      => json_encode([
               'E-commerce',
               'E-learning',
               'Telemedicine',
               'E-banking',
           ]),
           'answer'       => 'E-learning',
           'explanation'  => 'E-learning delivers educational content and instruction electronically over the internet.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 153
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which Filipino philosopher is known as the Father of Filipino Philosophy?',
           'choices'      => json_encode([
               'José Rizal',
               'Francisco Benitez',
               'Claro M. Recto',
               'Rolando Gripaldo',
           ]),
           'answer'       => 'José Rizal',
           'explanation'  => 'Rizal’s writings laid philosophical foundations on nationalism and man’s dignity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 154
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which law aims to establish a uniform system of public elementary and secondary education?',
           'choices'      => json_encode([
               'RA 9155',
               'RA 9156',
               'RA 9157',
               'RA 9158',
           ]),
           'answer'       => 'RA 9155',
           'explanation'  => 'RA 9155, the Governance of Basic Education Act, reorganizes and strengthens school governance.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 155
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which Filipino sociologist coined the term "pakikisama" in his study of Filipino values?',
           'choices'      => json_encode([
               'Florencio Concepcion',
               'Emerita Quito',
               'Prospero Covar',
               'Clara Hildago',
           ]),
           'answer'       => 'Florencio Concepcion',
           'explanation'  => 'Concepcion discussed pakikisama to describe smooth interpersonal relationships.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 156
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which election system uses ranked-choice voting for single-winner elections?',
           'choices'      => json_encode([
               'Plurality/First-past-the-post',
               'Proportional representation',
               'Instant-runoff voting',
               'Mixed-member proportional',
           ]),
           'answer'       => 'Instant-runoff voting',
           'explanation'  => 'IRV allows voters to rank candidates by preference to ensure majority support.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 157
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which island province is closest to Taiwan?',
           'choices'      => json_encode([
               'Batanes',
               'Cagayan',
               'Sulu',
               'Palawan',
           ]),
           'answer'       => 'Batanes',
           'explanation'  => 'Batanes is the northernmost province of the Philippines, nearest to Taiwan.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 158
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which global agreement aims to limit global warming to well below 2°C?',
           'choices'      => json_encode([
               'Kyoto Protocol',
               'Paris Agreement',
               'Montreal Protocol',
               'Geneva Convention',
           ]),
           'answer'       => 'Paris Agreement',
           'explanation'  => 'The Paris Agreement (2015) seeks to strengthen global response to climate change.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 159
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which Philippine law established the Bangsamoro Autonomous Region?',
           'choices'      => json_encode([
               'RA 11054',
               'RA 7160',
               'RA 11038',
               'RA 9003',
           ]),
           'answer'       => 'RA 11054',
           'explanation'  => 'RA 11054, the Bangsamoro Organic Law, created the BARMM in 2019.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 160
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 8,
           'question'     => 'Which Philippine law promotes the welfare and rights of indigenous peoples?',
           'choices'      => json_encode([
               'RA 8371',
               'RA 7610',
               'RA 9275',
               'RA 9745',
           ]),
           'answer'       => 'RA 8371',
           'explanation'  => 'RA 8371, the Indigenous Peoples’ Rights Act of 1997, protects IP rights.',
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

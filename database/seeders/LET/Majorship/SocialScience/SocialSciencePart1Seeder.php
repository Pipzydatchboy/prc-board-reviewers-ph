<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart1Seeder extends Seeder
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

       // Part 1 – Question 1
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which article of the 1987 Philippine Constitution enumerates the Bill of Rights?',
           'choices'      => json_encode([
               'Article I',
               'Article II',
               'Article III',
               'Article IV',
           ]),
           'answer'       => 'Article III',
           'explanation'  => "Article III of the 1987 Constitution contains the Bill of Rights protecting civil liberties.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 2
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Who was the first President of the Commonwealth of the Philippines?',
           'choices'      => json_encode([
               'Manuel Roxas',
               'Emilio Aguinaldo',
               'Manuel L. Quezon',
               'Sergio Osmeña',
           ]),
           'answer'       => 'Manuel L. Quezon',
           'explanation'  => "Manuel L. Quezon served as the first President of the Philippine Commonwealth from 1935 to 1944.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 3
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'What economic principle describes the inverse relationship between price and quantity demanded?',
           'choices'      => json_encode([
               'Law of Supply',
               'Law of Diminishing Marginal Utility',
               'Law of Demand',
               'Law of Returns',
           ]),
           'answer'       => 'Law of Demand',
           'explanation'  => "The Law of Demand states that, ceteris paribus, price and quantity demanded move in opposite directions.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 4
       $batch[] = [
        'subject_id'   => 14,
        'part'         => 1,
        'question'     => 'Which article of the 1987 Philippine Constitution enumerates the Bill of Rights?',
        'choices'      => json_encode([
            'Article I',
            'Article II',
            'Article III',
            'Article IV',
        ]),
        'answer'       => 'Article III',
        'explanation'  => "Article III of the 1987 Constitution contains the Bill of Rights protecting civil liberties.",
        'created_at'   => $now,
        'updated_at'   => $now,
    ];

       // Part 1 – Question 5
             $batch[] = [
                'subject_id'   => 14,
                'part'         => 1,
                'question'     => 'Which social thinker wrote "The Social Contract"?',
                'choices'      => json_encode([
                    'John Locke',
                    'Jean-Jacques Rousseau',
                    'Thomas Hobbes',
                    'Karl Marx',
                ]),
                'answer'       => 'Jean-Jacques Rousseau',
                'explanation'  => 'Rousseau\'s "The Social Contract" (1762) theorizes legitimate political authority.',
                'created_at'   => $now,
                'updated_at'   => $now,
            ];

       // Part 1 – Question 6
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which chapter in "Noli Me Tangere" exposes the abuses of friars in the Philippines?',
           'choices'      => json_encode([
               'The Dinner',
               'El Castillo',
               'The Sacristy',
               'El Filibusterismo',
           ]),
           'answer'       => 'El Castillo',
           'explanation'  => "Chapter 'El Castillo' depicts the lavish lifestyle of friars contrasting with Filipino poverty.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 7
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which year did the Comprehensive Agrarian Reform Program (CARP) commence in the Philippines?',
           'choices'      => json_encode([
               '1980',
               '1988',
               '1992',
               '2001',
           ]),
           'answer'       => '1988',
           'explanation'  => "CARP was enacted under Republic Act No. 6657 in 1988 to redistribute agricultural lands.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 8
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which concept in sociology refers to the norms and values that guide a society\'s behavior?',
           'choices'      => json_encode([
               'Culture',
               'Role',
               'Socialization',
               'Status',
           ]),
           'answer'       => 'Culture',
           'explanation'  => "Culture comprises shared norms, values, and practices within a community.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 9
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which psychological perspective emphasizes observable behaviors and their environmental determinants?',
           'choices'      => json_encode([
               'Cognitive psychology',
               'Behaviorism',
               'Psychoanalysis',
               'Humanistic psychology',
           ]),
           'answer'       => 'Behaviorism',
           'explanation'  => "Behaviorism focuses on learned behaviors shaped by stimuli and responses.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 10
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which geographical feature is the longest river in the Philippines?',
           'choices'      => json_encode([
               'Cagayan River',
               'Pasig River',
               'Agusan River',
               'Marikina River',
           ]),
           'answer'       => 'Cagayan River',
           'explanation'  => "The Cagayan River spans approximately 505 kilometers, the longest in the country.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 11
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which form of government grants sovereignty to the people through elected representatives?',
           'choices'      => json_encode([
               'Monarchy',
               'Oligarchy',
               'Republic',
               'Anarchy',
           ]),
           'answer'       => 'Republic',
           'explanation'  => "In a republic, citizens elect officials to represent them in government.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 12
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which ICT concept refers to the practice of protecting computer systems from digital attacks?',
           'choices'      => json_encode([
               'Big Data',
               'Cloud Computing',
               'Cybersecurity',
               'E-commerce',
           ]),
           'answer'       => 'Cybersecurity',
           'explanation'  => "Cybersecurity involves measures to safeguard information technology systems.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 13
       $batch[] = [
        'subject_id'  => 14,
        'part'        => 1,
        'question'    => 'Which Filipino hero wrote the poem "Mi Último Adiós"?',
        'choices'     => json_encode([
            'Andrés Bonifacio',
            'Emilio Jacinto',
            'José Rizal',
            'Marcelo H. del Pilar',
        ]),
        'answer'      => 'José Rizal',
        'explanation' => 'Rizal authored "Mi Último Adiós" on the eve of his execution in 1896.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ];

       // Part 1 – Question 14
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which sector contributes the largest share to the Philippine GDP as of latest data?',
           'choices'      => json_encode([
               'Agriculture',
               'Industry',
               'Services',
               'Mining',
           ]),
           'answer'       => 'Services',
           'explanation'  => "The services sector accounts for over 50% of the Philippines’ GDP.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 15
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which research method uses questionnaires and structured interviews for data collection?',
           'choices'      => json_encode([
               'Case study',
               'Survey research',
               'Ethnography',
               'Grounded theory',
           ]),
           'answer'       => 'Survey research',
           'explanation'  => "Surveys utilize standardized instruments to gather data from large samples.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 16
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which Asian regional bloc includes the Philippines, Thailand, and Indonesia?',
           'choices'      => json_encode([
               'ASEAN',
               'SAARC',
               'EU',
               'NAFTA',
           ]),
           'answer'       => 'ASEAN',
           'explanation'  => "The Association of Southeast Asian Nations (ASEAN) promotes regional cooperation.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 17
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which event marked the formal beginning of the Philippine Revolution against Spain?',
           'choices'      => json_encode([
               'Cry of Balintawak',
               'Battle of Manila Bay',
               'Signing of the Pact of Biak-na-Bato',
               'Proclamation of Philippine Independence',
           ]),
           'answer'       => 'Cry of Balintawak',
           'explanation'  => "The Cry of Balintawak in August 1896 signaled open revolt against Spanish rule.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 18
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which theory in psychology emphasizes self-actualization and human potential? ',
           'choices'      => json_encode([
               'Behaviorism',
               'Psychoanalytic theory',
               'Humanistic theory',
               'Cognitive theory',
           ]),
           'answer'       => 'Humanistic theory',
           'explanation'  => "Humanistic psychology, led by Maslow, focuses on intrinsic growth and self-actualization.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 19
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which Philippine island group includes Cebu, Leyte, and Samar?',
           'choices'      => json_encode([
               'Luzon',
               'Visayas',
               'Mindanao',
               'Palawan',
           ]),
           'answer'       => 'Visayas',
           'explanation'  => "The Visayas region consists of several central Philippine islands including Cebu and Leyte.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 1 – Question 20
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 1,
           'question'     => 'Which Philippine law established the Local Government Code of 1991?',
           'choices'      => json_encode([
               'Republic Act No. 7160',
               'Republic Act No. 6657',
               'Republic Act No. 7722',
               'Republic Act No. 9485',
           ]),
           'answer'       => 'Republic Act No. 7160',
           'explanation'  => "RA 7160, known as the Local Government Code of 1991, devolved powers to local units.",
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

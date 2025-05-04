<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart7Seeder extends Seeder
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

       // Part 7 – Question 121
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which principle of taxation requires taxes to be levied according to the taxpayer’s ability to pay?',
           'choices'      => json_encode([
               'Benefit principle',
               'Ability-to-pay principle',
               'Equity principle',
               'Simplicity principle',
           ]),
           'answer'       => 'Ability-to-pay principle',
           'explanation'  => 'This principle holds that taxpayers with greater ability to pay should bear a larger tax burden.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 122
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Who wrote the Philippine National Anthem\'s lyrics?',
           'choices'      => json_encode([
               'Julio Nakpil',
               'Jose Palma',
               'Marcelo H. del Pilar',
               'Andres Bonifacio',
           ]),
           'answer'       => 'Jose Palma',
           'explanation'  => 'Jose Palma wrote the Spanish lyrics to "Filipinas" in 1899, which became the national anthem.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 123
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'What type of government system does the Philippines have under the 1987 Constitution?',
           'choices'      => json_encode([
               'Parliamentary',
               'Presidential',
               'Semi-presidential',
               'Monarchy',
           ]),
           'answer'       => 'Presidential',
           'explanation'  => 'The Philippines operates under a presidential system with separate executive, legislative, and judicial branches.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 124
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which tariff type is imposed to protect domestic industries from foreign competition?',
           'choices'      => json_encode([
               'Revenue tariff',
               'Protective tariff',
               'Selective tariff',
               'Specific tariff',
           ]),
           'answer'       => 'Protective tariff',
           'explanation'  => 'Protective tariffs raise the cost of imported goods to shield local producers.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 125
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which Supreme Court case formally recognized the doctrine of political question in the Philippines?',
           'choices'      => json_encode([
               'Javellana v. Executive Secretary',
               'Marcos v. Manglapus',
               'Lagman v. COMELEC',
               'Quasha v. COMELEC',
           ]),
           'answer'       => 'Javellana v. Executive Secretary',
           'explanation'  => 'In Javellana (1967), the court refused to adjudicate on ratification issues, invoking the political question doctrine.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 126
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which sociological concept describes the tension experienced when social norms conflict?',
           'choices'      => json_encode([
               'Role strain',
               'Role conflict',
               'Anomie',
               'Normative dissonance',
           ]),
           'answer'       => 'Role conflict',
           'explanation'  => 'Role conflict occurs when expectations of different roles held by an individual are incompatible.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 127
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'What is the primary method of data collection in survey research?',
           'choices'      => json_encode([
               'Observation',
               'Questionnaires',
               'Interviews',
               'Experiments',
           ]),
           'answer'       => 'Questionnaires',
           'explanation'  => 'Surveys typically use questionnaires with structured questions to gather data from respondents.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 128
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which concept in political science refers to the right of a people to self-govern?',
           'choices'      => json_encode([
               'Sovereignty',
               'Autonomy',
               'Federalism',
               'Subsidiarity',
           ]),
           'answer'       => 'Sovereignty',
           'explanation'  => 'Sovereignty denotes the supreme authority of a state to govern itself.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 129
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which economic principle states that resources are scarce and must be allocated efficiently?',
           'choices'      => json_encode([
               'Scarcity principle',
               'Opportunity cost',
               'Marginal utility',
               'Comparative advantage',
           ]),
           'answer'       => 'Scarcity principle',
           'explanation'  => 'The scarcity principle highlights that limited resources necessitate choice and trade-offs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 130
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which anthropologist is known for participant observation?',
           'choices'      => json_encode([
               'Margaret Mead',
               'Franz Boas',
               'Bronislaw Malinowski',
               'Clifford Geertz',
           ]),
           'answer'       => 'Bronislaw Malinowski',
           'explanation'  => 'Malinowski pioneered participant observation during his fieldwork in the Trobriand Islands.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 131
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which philosophy emphasizes the study of being and existence?',
           'choices'      => json_encode([
               'Epistemology',
               'Ethics',
               'Metaphysics',
               'Aesthetics',
           ]),
           'answer'       => 'Metaphysics',
           'explanation'  => 'Metaphysics explores fundamental questions about reality and existence.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 132
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which ICT concept refers to the security of data in transit and at rest?',
           'choices'      => json_encode([
               'Data confidentiality',
               'Data integrity',
               'Data availability',
               'Data encryption',
           ]),
           'answer'       => 'Data encryption',
           'explanation'  => 'Encryption encodes data to prevent unauthorized access, securing confidentiality.' ,
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 133
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which event led to the creation of the Commission on Human Rights in the Philippines?',
           'choices'      => json_encode([
               'People Power Revolution',
               'Era of Martial Law',
               'World War II',
               'Philippine Revolution of 1896',
           ]),
           'answer'       => 'People Power Revolution',
           'explanation'  => 'The 1987 Constitution ratified after People Power created the CHR to uphold human rights.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 134
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which law mandates the provision of free public secondary education in the Philippines?',
           'choices'      => json_encode([
               'RA 10931',
               'RA 7722',
               'RA 9165',
               'RA 8981',
           ]),
           'answer'       => 'RA 10931',
           'explanation'  => 'RA 10931, the Universal Access to Quality Tertiary Education Act, also includes senior high provisions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 135
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 7,
           'question'     => 'Which process in psychology refers to the gradual decline of a conditioned response?',
           'choices'      => json_encode([
               'Spontaneous recovery',
               'Generalization',
               'Extinction',
               'Discrimination',
           ]),
           'answer'       => 'Extinction',
           'explanation'  => 'In classical conditioning, extinction occurs when conditioned stimulus is presented without the unconditioned stimulus repeatedly.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       // Part 7 – Question 136
       $batch[] = [
        'subject_id'   => 14,
        'part'         => 7,
        'question'     => 'Members of the House of Representatives in the Philippines serve terms of three years and may be reelected for up to how many consecutive terms?',
        'choices'      => json_encode([
            '1',
            '2',
            '3',
            '4',
        ]),
        'answer'       => '3',
        'explanation'  => 'House members may serve a maximum of three consecutive three-year terms.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ];

    // Part 7 – Question 137
    $batch[] = [
        'subject_id'   => 14,
        'part'         => 7,
        'question'     => 'Which Republic Act is the Philippine Data Privacy Act of 2012?',
        'choices'      => json_encode([
            'RA 10173',
            'RA 9184',
            'RA 7277',
            'RA 9994',
        ]),
        'answer'       => 'RA 10173',
        'explanation'  => 'RA 10173 was enacted to protect individual personal data in government and private sectors.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ];

    // Part 7 – Question 138
    $batch[] = [
        'subject_id'   => 14,
        'part'         => 7,
        'question'     => 'Which Philippine holiday commemorates the death of national hero Jose Rizal?',
        'choices'      => json_encode([
            'June 12',
            'December 30',
            'April 9',
            'July 4',
        ]),
        'answer'       => 'December 30',
        'explanation'  => 'Rizal Day is observed every December 30 to honor the martyrdom of Jose Rizal.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ];

    // Part 7 – Question 139
    $batch[] = [
        'subject_id'   => 14,
        'part'         => 7,
        'question'     => 'What does PAGASA stand for?',
        'choices'      => json_encode([
            'Philippine Atmospheric, Geophysical and Astronomical Services Administration',
            'Philippine Aviation and Air Services Association',
            'Philippine Agriculture and Geoscience Administration',
            'Philippine Agency for Geographical and Astronomical Study',
        ]),
        'answer'       => 'Philippine Atmospheric, Geophysical and Astronomical Services Administration',
        'explanation'  => 'PAGASA is the national meteorological and hydrological services agency of the Philippines.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ];

    // Part 7 – Question 140
    $batch[] = [
        'subject_id'   => 14,
        'part'         => 7,
        'question'     => 'Which UNESCO World Heritage Site is located in the Philippines?',
        'choices'      => json_encode([
            'Borobudur Temple',
            'Tubbataha Reefs',
            'Great Wall of China',
            'Machu Picchu',
        ]),
        'answer'       => 'Tubbataha Reefs',
        'explanation'  => 'The Tubbataha Reefs Natural Park is a UNESCO heritage site known for its rich marine biodiversity.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

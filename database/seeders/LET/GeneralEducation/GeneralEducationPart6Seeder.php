<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart6Seeder extends Seeder
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
       // 101
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Which is the correct object pronoun in the sentence: “The prize was awarded to ___.”?',
    'choices'      => json_encode([
        'I',
        'Me',
        'My',
        'Mine'
    ]),
    'answer'       => 'Me',
    'explanation'  => '“Me” is the correct object pronoun following a preposition.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 102
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Choose the synonym of “perplex.”',
    'choices'      => json_encode([
        'Clarify',
        'Bewilder',
        'Simplify',
        'Explain'
    ]),
    'answer'       => 'Bewilder',
    'explanation'  => '“Perplex” means to confuse or bewilder someone.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 103
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Fill in the blank: “She couldn’t decide ___ to accept the offer.”',
    'choices'      => json_encode([
        'whether',
        'weather',
        'whenever',
        'where'
    ]),
    'answer'       => 'whether',
    'explanation'  => '“Whether” introduces a choice between alternatives.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 104
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Which sentence uses “effect” correctly?',
    'choices'      => json_encode([
        'The new law will effect change.',
        'The side effects were minor.',
        'She will effect her plan later.',
        'The effect the machine was noisy.'
    ]),
    'answer'       => 'The side effects were minor.',
    'explanation'  => 'Here “effects” refers to results or outcomes.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 105
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'What punctuation mark introduces a list?',
    'choices'      => json_encode([
        'Comma',
        'Semicolon',
        'Colon',
        'Dash'
    ]),
    'answer'       => 'Colon',
    'explanation'  => 'A colon is used to introduce a list or explanation.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 106
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Ano ang kasingkahulugan ng “malawak”?',
    'choices'      => json_encode([
        'Maliit',
        'Malalim',
        'Malapad',
        'Masikip'
    ]),
    'answer'       => 'Malapad',
    'explanation'  => '“Malapad” ay katumbas ng “malawak.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 107
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Piliin ang wastong pang-ugnay: “___ siya ay pumunta sa palengke.”',
    'choices'      => json_encode([
        'Bagaman',
        'Dahil',
        'Kung',
        'Samantala'
    ]),
    'answer'       => 'Dahil',
    'explanation'  => '“Dahil” ang tamang pang-ugnay para magbigay ng sanhi.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 108
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Ano ang bahagi ng pananalita ng salitang “masipag”?',
    'choices'      => json_encode([
        'Pang-abay',
        'Pang-uri',
        'Pandiwa',
        'Pangngalan'
    ]),
    'answer'       => 'Pang-uri',
    'explanation'  => '“Masipag” ay naglalarawan ng tao, kaya pang-uri.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 109
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Ano ang uri ng pangungusap sa “Pumunta ka na.”?',
    'choices'      => json_encode([
        'Pautos',
        'Patanong',
        'Patinig',
        'Padamdam'
    ]),
    'answer'       => 'Pautos',
    'explanation'  => 'Nagbibigay ito ng utos o pakiusap, kaya patautos.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 110
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Solve for x: 7x + 3 = 31.',
    'choices'      => json_encode([
        '4',
        '5',
        '6',
        '7'
    ]),
    'answer'       => '4',
    'explanation'  => '7x = 28 ⇒ x = 4.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 111
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'What is the area of a circle with radius 7 cm? (Use π ≈ 22/7)',
    'choices'      => json_encode([
        '154 cm²',
        '49 cm²',
        '308 cm²',
        '77 cm²'
    ]),
    'answer'       => '154 cm²',
    'explanation'  => 'Area = πr² = (22/7)×49 = 154.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 112
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Which theorem states a² + b² = c² in a right triangle?',
    'choices'      => json_encode([
        'Pythagorean theorem',
        'Triangle inequality',
        'Area theorem',
        'Similarity theorem'
    ]),
    'answer'       => 'Pythagorean theorem',
    'explanation'  => 'This relates the legs and hypotenuse in right triangles.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 113
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'What is the probability of drawing a red card from a standard deck?',
    'choices'      => json_encode([
        '1/2',
        '1/4',
        '1/3',
        '1/13'
    ]),
    'answer'       => '1/2',
    'explanation'  => 'There are 26 red cards in 52-card deck, so 26/52 = 1/2.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 114
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Which organelle synthesizes proteins within the cell?',
    'choices'      => json_encode([
        'Nucleus',
        'Ribosome',
        'Mitochondrion',
        'Golgi apparatus'
    ]),
    'answer'       => 'Ribosome',
    'explanation'  => 'Ribosomes translate mRNA to build proteins.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 115
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'DNA stands for:',
    'choices'      => json_encode([
        'Deoxyribonucleic acid',
        'Dinucleic acid',
        'Deoxyadenosine acid',
        'Diaribonucleic acid'
    ]),
    'answer'       => 'Deoxyribonucleic acid',
    'explanation'  => 'DNA is the molecule carrying genetic information.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 116
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'What is speed if distance = 150 m and time = 30 s?',
    'choices'      => json_encode([
        '5 m/s',
        '2 m/s',
        '45 m/s',
        '180 m/s'
    ]),
    'answer'       => '5 m/s',
    'explanation'  => 'Speed = distance/time = 150/30 = 5 m/s.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 117
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Convert 90 km/h to m/s (approximate).',
    'choices'      => json_encode([
        '25 m/s',
        '15 m/s',
        '30 m/s',
        '10 m/s'
    ]),
    'answer'       => '25 m/s',
    'explanation'  => '90 km/h ≈ (90×1000)/(3600) = 25 m/s.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 118
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Which element has atomic number 8?',
    'choices'      => json_encode([
        'Oxygen',
        'Nitrogen',
        'Carbon',
        'Fluorine'
    ]),
    'answer'       => 'Oxygen',
    'explanation'  => 'Oxygen’s atomic number on the periodic table is 8.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 119
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'How many valence electrons does carbon have?',
    'choices'      => json_encode([
        '2',
        '4',
        '6',
        '8'
    ]),
    'answer'       => '4',
    'explanation'  => 'Carbon is in group 14, so it has 4 valence electrons.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 120
$batch[] = [
    'subject_id'   => 7,
    'part'         => 6,
    'question'     => 'Which economic concept describes total value of goods and services produced?',
    'choices'      => json_encode([
        'Inflation',
        'Gross Domestic Product',
        'Unemployment rate',
        'Trade balance'
    ]),
    'answer'       => 'Gross Domestic Product',
    'explanation'  => 'GDP measures the total economic output of a country.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

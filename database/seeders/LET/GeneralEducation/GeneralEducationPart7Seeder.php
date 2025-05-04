<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart7Seeder extends Seeder
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
       // 121
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Identify the literary device in: "He had a heart of stone."',
    'choices'      => json_encode([
        'Simile',
        'Metaphor',
        'Hyperbole',
        'Personification'
    ]),
    'answer'       => 'Metaphor',
    'explanation'  => 'A metaphor directly compares two things without using "like" or "as."',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 122
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'If x + y = 10 and x − y = 2, what is the value of x?',
    'choices'      => json_encode([
        '4',
        '5',
        '6',
        '7'
    ]),
    'answer'       => '6',
    'explanation'  => 'Adding the equations gives 2x = 12, so x = 6.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 123
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'What is the volume of a cylinder with radius 3 cm and height 4 cm? (Use πr²h)',
    'choices'      => json_encode([
        '12π cm³',
        '36π cm³',
        '18π cm³',
        '27π cm³'
    ]),
    'answer'       => '36π cm³',
    'explanation'  => 'Volume = π × 3² × 4 = 36π cm³.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 124
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Which organelle packages and sorts proteins for transport?',
    'choices'      => json_encode([
        'Endoplasmic reticulum',
        'Chloroplast',
        'Golgi apparatus',
        'Nucleus'
    ]),
    'answer'       => 'Golgi apparatus',
    'explanation'  => 'The Golgi apparatus modifies, sorts, and packages proteins.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 125
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'In DNA base-pairing, adenine always pairs with:',
    'choices'      => json_encode([
        'Cytosine',
        'Guanine',
        'Thymine',
        'Uracil'
    ]),
    'answer'       => 'Thymine',
    'explanation'  => 'Adenine forms two hydrogen bonds with thymine in DNA.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 126
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'What is the SI unit of force?',
    'choices'      => json_encode([
        'Pascal',
        'Newton',
        'Joule',
        'Watt'
    ]),
    'answer'       => 'Newton',
    'explanation'  => 'Force is measured in newtons (N).',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 127
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Who wrote the Filipino epic "Florante at Laura"?',
    'choices'      => json_encode([
        'Francisco Balagtas',
        'José Rizal',
        'Apolinario Mabini',
        'Nick Joaquin'
    ]),
    'answer'       => 'Francisco Balagtas',
    'explanation'  => 'Francisco “Balagtas” Baltazar authored "Florante at Laura."',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 128
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'In economics, when the price of a good falls, demand generally:',
    'choices'      => json_encode([
        'Increases',
        'Decreases',
        'Remains the same',
        'Becomes zero'
    ]),
    'answer'       => 'Increases',
    'explanation'  => 'Law of demand: as price falls, quantity demanded rises.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 129
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'How many justices serve on the Philippine Supreme Court?',
    'choices'      => json_encode([
        '12',
        '15',
        '18',
        '21'
    ]),
    'answer'       => '15',
    'explanation'  => 'The Supreme Court of the Philippines is composed of 15 justices.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 130
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Which ocean lies to the east of the Philippines?',
    'choices'      => json_encode([
        'Indian Ocean',
        'Atlantic Ocean',
        'Arctic Ocean',
        'Pacific Ocean'
    ]),
    'answer'       => 'Pacific Ocean',
    'explanation'  => 'The Pacific Ocean borders the Philippines to the east.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 131
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Identify the device in: "She sells seashells by the seashore."',
    'choices'      => json_encode([
        'Alliteration',
        'Assonance',
        'Consonance',
        'Onomatopoeia'
    ]),
    'answer'       => 'Alliteration',
    'explanation'  => 'Repetition of initial consonant sounds (“s”).',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 132
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Which word in "She sings beautifully." is an adverb?',
    'choices'      => json_encode([
        'She',
        'sings',
        'beautifully',
        'None'
    ]),
    'answer'       => 'beautifully',
    'explanation'  => '“Beautifully” modifies the verb “sings.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 133
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'What is the median of the data set {2, 5, 7, 9, 12}?',
    'choices'      => json_encode([
        '7',
        '6',
        '9',
        '8'
    ]),
    'answer'       => '7',
    'explanation'  => 'Median is the middle value when ordered.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 134
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Which process converts liquid water into vapor?',
    'choices'      => json_encode([
        'Condensation',
        'Precipitation',
        'Evaporation',
        'Sublimation'
    ]),
    'answer'       => 'Evaporation',
    'explanation'  => 'Evaporation is the change from liquid to gas.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 135
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Which continent has the largest population?',
    'choices'      => json_encode([
        'Africa',
        'Asia',
        'Europe',
        'South America'
    ]),
    'answer'       => 'Asia',
    'explanation'  => 'Asia is the most populous continent.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 136
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Identify the preposition in: "The cat is under the table."',
    'choices'      => json_encode([
        'The',
        'cat',
        'under',
        'table'
    ]),
    'answer'       => 'under',
    'explanation'  => '“Under” shows the relationship between cat and table.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 137
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Choose the correct present-tense form: "She ___ to the store every day."',
    'choices'      => json_encode([
        'go',
        'goes',
        'went',
        'going'
    ]),
    'answer'       => 'goes',
    'explanation'  => 'Third-person singular requires “goes.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 138
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Calculate: (3 + 2)² = ?',
    'choices'      => json_encode([
        '10',
        '25',
        '13',
        '15'
    ]),
    'answer'       => '25',
    'explanation'  => '(3+2)=5, squared gives 25.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 139
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'What is the antonym of "opaque"?',
    'choices'      => json_encode([
        'Transparent',
        'Obscure',
        'Cloudy',
        'Murky'
    ]),
    'answer'       => 'Transparent',
    'explanation'  => '“Transparent” is the opposite of “opaque.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 140
$batch[] = [
    'subject_id'   => 7,
    'part'         => 7,
    'question'     => 'Identify the conjunction in: "He was tired, yet he continued."',
    'choices'      => json_encode([
        'tired',
        'yet',
        'continued',
        'he'
    ]),
    'answer'       => 'yet',
    'explanation'  => '“Yet” connects two independent clauses.',
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

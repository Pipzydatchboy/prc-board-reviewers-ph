<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart9Seeder extends Seeder
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
       // 161
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which word in the sentence "I wanted to go, but I was too tired." is a coordinating conjunction?',
    'choices'      => json_encode([
        'wanted',
        'but',
        'too',
        'tired'
    ]),
    'answer'       => 'but',
    'explanation'  => '“But” connects two independent clauses, functioning as a coordinating conjunction.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 162
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Solve the inequality: 2x − 5 < 7.',
    'choices'      => json_encode([
        'x < 6',
        'x < 1',
        'x > 6',
        'x > 1'
    ]),
    'answer'       => 'x < 6',
    'explanation'  => '2x < 12 ⇒ x < 6.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 163
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which process in the water cycle involves water vapor cooling into droplets?',
    'choices'      => json_encode([
        'Evaporation',
        'Condensation',
        'Precipitation',
        'Infiltration'
    ]),
    'answer'       => 'Condensation',
    'explanation'  => 'Condensation is the transformation of water vapor into liquid droplets.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 164
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Identify the common noun in: “The dog chased a ball.”',
    'choices'      => json_encode([
        'dog',
        'chased',
        'ball',
        'The'
    ]),
    'answer'       => 'dog',
    'explanation'  => '“dog” names a general category of animal, not a specific one.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 165
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'What is the perimeter of a right triangle with legs 3 cm and 4 cm, hypotenuse 5 cm?',
    'choices'      => json_encode([
        '12 cm',
        '24 cm',
        '10 cm',
        '8 cm'
    ]),
    'answer'       => '12 cm',
    'explanation'  => 'Perimeter = 3 + 4 + 5 = 12 cm.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 166
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'The Battle of Mactan, in which Lapu-Lapu resisted Magellan, occurred in what year?',
    'choices'      => json_encode([
        '1521',
        '1898',
        '1565',
        '1600'
    ]),
    'answer'       => '1521',
    'explanation'  => 'Ferdinand Magellan was killed at Mactan on April 27, 1521.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 167
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which law of motion states an object in motion stays in motion unless acted upon?',
    'choices'      => json_encode([
        'Newton’s First Law',
        'Newton’s Second Law',
        'Newton’s Third Law',
        'Law of Gravity'
    ]),
    'answer'       => 'Newton’s First Law',
    'explanation'  => 'First Law is the law of inertia.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 168
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'What is the chemical symbol for sodium?',
    'choices'      => json_encode([
        'S',
        'Na',
        'So',
        'Sd'
    ]),
    'answer'       => 'Na',
    'explanation'  => '“Na” is derived from the Latin natrium.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 169
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Choose the correct homonym: “She will ___ her new car tomorrow.”',
    'choices'      => json_encode([
        'break',
        'brake',
        'bake',
        'back'
    ]),
    'answer'       => 'brake',
    'explanation'  => '“Brake” refers to slowing or stopping a vehicle.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 170
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which Philippine hero authored the novel “Noli Me Tangere”?',
    'choices'      => json_encode([
        'Andres Bonifacio',
        'José Rizal',
        'Emilio Jacinto',
        'Marcelo H. del Pilar'
    ]),
    'answer'       => 'José Rizal',
    'explanation'  => 'Rizal wrote “Noli Me Tangere” in 1887.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 171
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'What is the capital city of Cebu province?',
    'choices'      => json_encode([
        'Cebu City',
        'Lapu-Lapu City',
        'Mandaue',
        'Talisay'
    ]),
    'answer'       => 'Cebu City',
    'explanation'  => 'Cebu City is the provincial capital and the oldest city in the Philippines.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 172
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which economic term refers to the decrease in purchasing power of money?',
    'choices'      => json_encode([
        'Inflation',
        'Deflation',
        'Recession',
        'Growth'
    ]),
    'answer'       => 'Inflation',
    'explanation'  => 'Inflation is the general rise in price levels, reducing purchasing power.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 173
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Identify the adverb in: “Surprisingly, she passed the exam.”',
    'choices'      => json_encode([
        'Surprisingly',
        'she',
        'passed',
        'exam'
    ]),
    'answer'       => 'Surprisingly',
    'explanation'  => '“Surprisingly” modifies the entire clause.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 174
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which architectural style characterizes the San Agustin Church in Manila?',
    'choices'      => json_encode([
        'Baroque',
        'Neoclassical',
        'Gothic',
        'Renaissance'
    ]),
    'answer'       => 'Baroque',
    'explanation'  => 'San Agustin Church, completed in 1607, is a fine example of Baroque architecture.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 175
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'What is the midpoint of the line segment between (2, −1) and (6, 3)?',
    'choices'      => json_encode([
        '(4,1)',
        '(3,2)',
        '(2,3)',
        '(6,−1)'
    ]),
    'answer'       => '(4,1)',
    'explanation'  => 'Midpoint = ((2+6)/2, (−1+3)/2) = (4,1).',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 176
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which type of rock is formed by cooling and solidification of magma?',
    'choices'      => json_encode([
        'Sedimentary',
        'Igneous',
        'Metamorphic',
        'Volcanic ash'
    ]),
    'answer'       => 'Igneous',
    'explanation'  => 'Igneous rocks crystallize from molten material.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 177
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'What is the function of hemoglobin in blood?',
    'choices'      => json_encode([
        'Clotting',
        'Oxygen transport',
        'Hormone regulation',
        'Immune defense'
    ]),
    'answer'       => 'Oxygen transport',
    'explanation'  => 'Hemoglobin binds oxygen in the lungs and releases it in tissues.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 178
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which punctuation mark replaces omitted letters in contractions?',
    'choices'      => json_encode([
        'Apostrophe',
        'Hyphen',
        'Comma',
        'Colon'
    ]),
    'answer'       => 'Apostrophe',
    'explanation'  => 'An apostrophe shows omitted letters, e.g., “don’t.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 179
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'Which Philippine landmark is also called the “Walled City”?',
    'choices'      => json_encode([
        'Intramuros',
        'Rizal Park',
        'Fort Santiago',
        'Malacañang Palace'
    ]),
    'answer'       => 'Intramuros',
    'explanation'  => 'Intramuros is the historic walled core of Manila.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 180
$batch[] = [
    'subject_id'   => 7,
    'part'         => 9,
    'question'     => 'What is the mode of the data set {5, 7, 5, 9, 7, 5}?',
    'choices'      => json_encode([
        '5',
        '7',
        '9',
        'No mode'
    ]),
    'answer'       => '5',
    'explanation'  => '5 appears most frequently (three times).',
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

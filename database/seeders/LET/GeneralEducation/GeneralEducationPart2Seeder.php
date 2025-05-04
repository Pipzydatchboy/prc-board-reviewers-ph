<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart2Seeder extends Seeder
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
       // 21
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'What is the main idea of the passage: “Many students struggle with time management, but those who plan ahead often find success.”?',
    'choices'      => json_encode([
        'Time management is unimportant.',
        'Planning ahead leads to better success.',
        'Students should never struggle.',
        'Success comes without effort.'
    ]),
    'answer'       => 'Planning ahead leads to better success.',
    'explanation'  => 'The author states that planning ahead helps students succeed.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 22
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Inference: If a student “burns the midnight oil,” what are they doing?',
    'choices'      => json_encode([
        'Sleeping early',
        'Studying late into the night',
        'Burning oil lamps',
        'Cooking dinner'
    ]),
    'answer'       => 'Studying late into the night',
    'explanation'  => '“Burns the midnight oil” means to work or study late at night.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 23
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Choose the synonym for “abundant.”',
    'choices'      => json_encode([
        'Scarce',
        'Plentiful',
        'Tiny',
        'Rare'
    ]),
    'answer'       => 'Plentiful',
    'explanation'  => '“Abundant” means plentiful or in great supply.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 24
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Identify the antecedent: “When Maria lost her book, she was upset.”',
    'choices'      => json_encode([
        'Maria',
        'lost',
        'book',
        'upset'
    ]),
    'answer'       => 'Maria',
    'explanation'  => 'Pronoun “she” refers back to “Maria.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 25
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Fill in the blank: “The cat jumped ____ the fence.”',
    'choices'      => json_encode([
        'over',
        'under',
        'on',
        'beside'
    ]),
    'answer'       => 'over',
    'explanation'  => '“Jumped over the fence” describes movement above it.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 26
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'If the ratio of boys to girls is 3:4 and there are 21 boys, how many girls are there?',
    'choices'      => json_encode([
        '16',
        '24',
        '28',
        '32'
    ]),
    'answer'       => '28',
    'explanation'  => '3:4 = 21:x ⇒ x = (21×4)/3 = 28.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 27
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'What is the slope of the line passing through (2, 3) and (5, 9)?',
    'choices'      => json_encode([
        '2',
        '3',
        ' ',
        ' '
    ]),
    'answer'       => '2',
    'explanation'  => 'Slope = (9−3)/(5−2) = 6/3 = 2.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 28
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Find the area of a triangle with base 10 cm and height 6 cm.',
    'choices'      => json_encode([
        '30 cm²',
        '60 cm²',
        '16 cm²',
        '48 cm²'
    ]),
    'answer'       => '30 cm²',
    'explanation'  => 'Area = ½×base×height = ½×10×6 = 30.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 29
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'What is the mean of the data set: {4, 7, 9, 10, 5}?',
    'choices'      => json_encode([
        '7',
        '6',
        '7.5',
        '8'
    ]),
    'answer'       => '7',
    'explanation'  => 'Mean = (4+7+9+10+5)/5 = 35/5 = 7.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 30
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'A single card is drawn from a standard deck. What is the probability it is a heart?',
    'choices'      => json_encode([
        '1/2',
        '1/4',
        '1/13',
        '3/4'
    ]),
    'answer'       => '1/4',
    'explanation'  => 'There are 13 hearts in 52 cards, so 13/52 = 1/4.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 31
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Which organelle is known as the powerhouse of the cell?',
    'choices'      => json_encode([
        'Nucleus',
        'Mitochondrion',
        'Ribosome',
        'Golgi apparatus'
    ]),
    'answer'       => 'Mitochondrion',
    'explanation'  => 'Mitochondria produce ATP through cellular respiration.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 32
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'A solution has pH 4. What is its acidity?',
    'choices'      => json_encode([
        'Neutral',
        'Acidic',
        'Basic',
        'Alkaline'
    ]),
    'answer'       => 'Acidic',
    'explanation'  => 'pH below 7 indicates an acidic solution.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 33
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Which force keeps planets in orbit around the sun?',
    'choices'      => json_encode([
        'Electromagnetic force',
        'Gravitational force',
        'Nuclear force',
        'Frictional force'
    ]),
    'answer'       => 'Gravitational force',
    'explanation'  => 'Gravity attracts masses and maintains orbital motion.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 34
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'In an ecosystem, which organisms produce their own food?',
    'choices'      => json_encode([
        'Consumers',
        'Producers',
        'Decomposers',
        'Herbivores'
    ]),
    'answer'       => 'Producers',
    'explanation'  => 'Producers (plants) use photosynthesis to make food.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 35
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'In what year did the People Power Revolution occur in the Philippines?',
    'choices'      => json_encode([
        '1983',
        '1986',
        '1989',
        '1992'
    ]),
    'answer'       => '1986',
    'explanation'  => 'The EDSA People Power Revolution took place in February 1986.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 36
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Which section of the 1987 Constitution guarantees freedom of speech?',
    'choices'      => json_encode([
        'Article III, Section 4',
        'Article II, Section 2',
        'Article IV, Section 7',
        'Article I, Section 1'
    ]),
    'answer'       => 'Article III, Section 4',
    'explanation'  => 'The Bill of Rights in Article III, Section 4 covers freedom of speech.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 37
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'On a map, which direction is opposite southwest?',
    'choices'      => json_encode([
        'Northeast',
        'Southeast',
        'Northwest',
        'Due west'
    ]),
    'answer'       => 'Northeast',
    'explanation'  => 'Northeast is the opposite of southwest on a compass.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 38
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'What happens when supply exceeds demand for a product?',
    'choices'      => json_encode([
        'Price increases',
        'Price decreases',
        'Supply stays the same',
        'Demand increases'
    ]),
    'answer'       => 'Price decreases',
    'explanation'  => 'Excess supply leads to lower prices to clear inventory.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 39
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Which body governs municipal affairs in the Philippines?',
    'choices'      => json_encode([
        'Barangay Council',
        'Municipal Council',
        'Provincial Board',
        'Regional Assembly'
    ]),
    'answer'       => 'Municipal Council',
    'explanation'  => 'The Sangguniang Bayan (Municipal Council) legislates at the municipal level.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 40
$batch[] = [
    'subject_id'   => 7,
    'part'         => 2,
    'question'     => 'Which site is a UNESCO World Heritage site in the Philippines?',
    'choices'      => json_encode([
        'Chocolate Hills',
        'Taal Volcano',
        'Rice Terraces of the Philippine Cordilleras',
        'Mayon Volcano'
    ]),
    'answer'       => 'Rice Terraces of the Philippine Cordilleras',
    'explanation'  => 'These terraces are globally recognized for their cultural significance.',
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

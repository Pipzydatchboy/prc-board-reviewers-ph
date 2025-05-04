<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

// 101
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which of the following is a valid conclusion: All cars have wheels. A sedan is a car.",
    'choices' => json_encode(['A sedan does not have wheels.', 'A sedan is not a car.', 'A sedan has wheels.', 'A sedan is a bicycle.']),
    'answer' => 'A sedan has wheels.',
    'explanation' => "Since all cars have wheels and a sedan is a car, it logically follows that a sedan has wheels.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 102
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which completes the analogy: Book is to reading as fork is to _______.",
    'choices' => json_encode(['Knife', 'Cutting', 'Plate', 'Eating']),
    'answer' => 'Eating',
    'explanation' => "A book is used for reading; a fork is used for eating.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 103
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which of the following does not belong: Dog, Cat, Cow, Tiger?",
    'choices' => json_encode(['Dog', 'Cat', 'Cow', 'Tiger']),
    'answer' => 'Cow',
    'explanation' => "Dog, cat, and tiger are carnivores; cow is a herbivore.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 104
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "What comes next in the pattern: 4, 8, 16, 32, ___?",
    'choices' => json_encode(['48', '56', '60', '64']),
    'answer' => '64',
    'explanation' => "Each number is multiplied by 2. 32 × 2 = 64.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 105
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which assumption is made in the statement: 'People who sleep early are more productive.'",
    'choices' => json_encode(['Sleeping late is better.', 'Waking up late is effective.', 'Productivity depends on sleep habits.', 'Productivity has no cause.']),
    'answer' => 'Productivity depends on sleep habits.',
    'explanation' => "The assumption is that sleeping early has a positive effect on productivity.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 106
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which word is the opposite of 'honest'?",
    'choices' => json_encode(['Kind', 'Dishonest', 'Loyal', 'Trustworthy']),
    'answer' => 'Dishonest',
    'explanation' => "The opposite of 'honest' is 'dishonest'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 107
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "What is the next number in the sequence: 1, 3, 6, 10, 15, ___?",
    'choices' => json_encode(['20', '21', '18', '19']),
    'answer' => '21',
    'explanation' => "Add increasing numbers: +2, +3, +4, +5, +6 = 15 + 6 = 21.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 108
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which of the following is a logical conclusion: All birds have feathers. An eagle is a bird.",
    'choices' => json_encode(['An eagle has wings.', 'An eagle can fly.', 'An eagle has feathers.', 'An eagle eats meat.']),
    'answer' => 'An eagle has feathers.',
    'explanation' => "Since all birds have feathers and an eagle is a bird, then it has feathers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 109
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Choose the correct analogy: Fish is to gills as human is to _______.",
    'choices' => json_encode(['Heart', 'Lungs', 'Brain', 'Eyes']),
    'answer' => 'Lungs',
    'explanation' => "Fish use gills to breathe; humans use lungs.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 110
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which word does NOT belong: Apple, Banana, Carrot, Mango?",
    'choices' => json_encode(['Apple', 'Banana', 'Carrot', 'Mango']),
    'answer' => 'Carrot',
    'explanation' => "Apple, banana, and mango are fruits; carrot is a vegetable.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 111
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "What is assumed in this statement: 'Wearing helmets reduces head injuries.'",
    'choices' => json_encode(['People do not ride bikes.', 'Helmets are stylish.', 'Helmets protect the head.', 'Riders enjoy helmets.']),
    'answer' => 'Helmets protect the head.',
    'explanation' => "The statement assumes that helmets help protect riders from injury.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 112
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which number comes next: 9, 18, 36, 72, ___?",
    'choices' => json_encode(['108', '120', '144', '126']),
    'answer' => '144',
    'explanation' => "Each number is multiplied by 2. 72 × 2 = 144.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 113
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which of the following is a valid assumption: 'Reading widens knowledge.'",
    'choices' => json_encode(['People hate books.', 'Reading shortens memory.', 'Books provide information.', 'Only students read.']),
    'answer' => 'Books provide information.',
    'explanation' => "The assumption is that reading exposes readers to information and knowledge.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 114
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Choose the correct analogy: Knife is to sharp as pillow is to _______.",
    'choices' => json_encode(['Soft', 'Hard', 'Flat', 'Fluffy']),
    'answer' => 'Soft',
    'explanation' => "A knife is typically sharp, a pillow is typically soft.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 115
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which item does NOT belong: Red, Green, Blue, Table?",
    'choices' => json_encode(['Red', 'Green', 'Blue', 'Table']),
    'answer' => 'Table',
    'explanation' => "Red, green, and blue are colors; table is a piece of furniture.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 116
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "What is the conclusion: All teachers prepare lessons. Mrs. Cruz is a teacher.",
    'choices' => json_encode(['Mrs. Cruz sleeps a lot.', 'Mrs. Cruz teaches Math.', 'Mrs. Cruz prepares lessons.', 'Mrs. Cruz is a principal.']),
    'answer' => 'Mrs. Cruz prepares lessons.',
    'explanation' => "Since all teachers prepare lessons, and she is a teacher, she prepares lessons too.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 117
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which word is most opposite in meaning to 'brave'?",
    'choices' => json_encode(['Courageous', 'Fearless', 'Cowardly', 'Heroic']),
    'answer' => 'Cowardly',
    'explanation' => "The opposite of 'brave' is 'cowardly'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 118
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Choose the best pair: Cat is to kitten as goat is to _______.",
    'choices' => json_encode(['Foal', 'Lamb', 'Kid', 'Cub']),
    'answer' => 'Kid',
    'explanation' => "A baby goat is called a kid.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 119
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "What comes next: 50, 45, 40, 35, ___?",
    'choices' => json_encode(['30', '25', '32', '28']),
    'answer' => '30',
    'explanation' => "The pattern decreases by 5. 35 - 5 = 30.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 120
$batch[] = [  
    'subject_id' => 2,  
    'part' => 6,            
    'question' => "Which is the assumption: 'Studying improves test scores.'",
    'choices' => json_encode(['Tests are useless.', 'Studying is boring.', 'Tests measure learning.', 'Learning doesn’t help.']),
    'answer' => 'Tests measure learning.',
    'explanation' => "The statement assumes that test scores reflect what has been studied or learned.",
    'created_at' => now(),
    'updated_at' => now(),
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

<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart9Seeder extends Seeder
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

// 161
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which of the following is a valid conclusion: All dogs are mammals. A beagle is a dog.",
    'choices' => json_encode(['A beagle is not a dog.', 'A beagle is a mammal.', 'A beagle is a bird.', 'A beagle cannot be a mammal.']),
    'answer' => 'A beagle is a mammal.',
    'explanation' => "Since all dogs are mammals and a beagle is a dog, it logically follows that a beagle is a mammal.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 162
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "What comes next in the series: 20, 25, 30, 35, ___?",
    'choices' => json_encode(['40', '38', '45', '50']),
    'answer' => '40',
    'explanation' => "The numbers increase by 5. 35 + 5 = 40.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 163
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which word is opposite in meaning to 'difficult'?",
    'choices' => json_encode(['Hard', 'Challenging', 'Easy', 'Complicated']),
    'answer' => 'Easy',
    'explanation' => "The opposite of 'difficult' is 'easy'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 164
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Choose the correct analogy: Book is to author as painting is to _______.",
    'choices' => json_encode(['Canvas', 'Museum', 'Brush', 'Artist']),
    'answer' => 'Artist',
    'explanation' => "A book is made by an author; a painting is made by an artist.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 165
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which assumption is made in the statement: 'Children who sleep early wake up with more energy.'",
    'choices' => json_encode(['Sleep causes tiredness.', 'Children should not sleep.', 'Early sleep leads to better rest.', 'Children dislike mornings.']),
    'answer' => 'Early sleep leads to better rest.',
    'explanation' => "The assumption is that sleeping early improves rest and energy.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 166
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which one is the odd one out: Sugar, Salt, Pepper, Spoon?",
    'choices' => json_encode(['Sugar', 'Salt', 'Pepper', 'Spoon']),
    'answer' => 'Spoon',
    'explanation' => "Sugar, salt, and pepper are condiments; spoon is an eating utensil.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 167
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Choose the correct analogy: Teacher is to school as chef is to _______.",
    'choices' => json_encode(['Food', 'Kitchen', 'Cook', 'Plate']),
    'answer' => 'Kitchen',
    'explanation' => "A teacher works in a school; a chef works in a kitchen.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 168
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which number continues the pattern: 2, 4, 8, 16, ___?",
    'choices' => json_encode(['30', '32', '40', '50']),
    'answer' => '32',
    'explanation' => "Each number is doubled. 16 × 2 = 32.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 169
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which assumption is made: 'Recycling plastic helps reduce pollution.'",
    'choices' => json_encode(['Plastic is not recyclable.', 'Recycling increases waste.', 'Plastic contributes to pollution.', 'Plastic is safe.']),
    'answer' => 'Plastic contributes to pollution.',
    'explanation' => "The assumption is that plastic is one of the causes of pollution.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 170
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which word is most similar to 'fast'?",
    'choices' => json_encode(['Quick', 'Slow', 'Stop', 'Delay']),
    'answer' => 'Quick',
    'explanation' => "Fast and quick mean the same thing.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 171
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "What comes next in the series: 10, 20, 30, 40, ___?",
    'choices' => json_encode(['45', '50', '60', '55']),
    'answer' => '50',
    'explanation' => "The pattern adds 10 each time. 40 + 10 = 50.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 172
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which of the following is the opposite of 'cheap'?",
    'choices' => json_encode(['Expensive', 'Affordable', 'Low', 'Less']),
    'answer' => 'Expensive',
    'explanation' => "The opposite of 'cheap' is 'expensive'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 173
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which conclusion is valid: All citizens have the right to vote. Ana is a citizen.",
    'choices' => json_encode(['Ana cannot vote.', 'Ana is not a citizen.', 'Ana has the right to vote.', 'Ana is underage.']),
    'answer' => 'Ana has the right to vote.',
    'explanation' => "If all citizens have the right to vote and Ana is a citizen, then she can vote.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 174
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Choose the pair with the same relationship: Dentist is to teeth as tailor is to _______.",
    'choices' => json_encode(['Sewing', 'Needle', 'Clothes', 'Machine']),
    'answer' => 'Clothes',
    'explanation' => "A dentist works on teeth; a tailor works on clothes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 175
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which one does not belong: April, May, March, Monday?",
    'choices' => json_encode(['April', 'May', 'March', 'Monday']),
    'answer' => 'Monday',
    'explanation' => "April, May, and March are months; Monday is a day of the week.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 176
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "What is assumed in the statement: 'Eating vegetables regularly promotes good health.'",
    'choices' => json_encode(['Vegetables are harmful.', 'Vegetables have no nutrients.', 'Vegetables support health.', 'Health is not important.']),
    'answer' => 'Vegetables support health.',
    'explanation' => "The statement assumes that vegetables help improve health.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 177
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "What number comes next: 4, 8, 16, 32, ___?",
    'choices' => json_encode(['48', '60', '64', '68']),
    'answer' => '64',
    'explanation' => "Each number doubles. 32 × 2 = 64.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 178
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which word does NOT belong: Bicycle, Tricycle, Motorcycle, Helicopter?",
    'choices' => json_encode(['Bicycle', 'Tricycle', 'Motorcycle', 'Helicopter']),
    'answer' => 'Helicopter',
    'explanation' => "The others are land vehicles; helicopter is an air vehicle.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 179
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which pair completes the analogy: Clock is to time as thermometer is to _______.",
    'choices' => json_encode(['Heat', 'Temperature', 'Pressure', 'Weather']),
    'answer' => 'Temperature',
    'explanation' => "A clock measures time; a thermometer measures temperature.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 180
$batch[] = [  
    'subject_id' => 2,  
    'part' => 9,            
    'question' => "Which of the following is the opposite of 'love'?",
    'choices' => json_encode(['Happiness', 'Hate', 'Liking', 'Joy']),
    'answer' => 'Hate',
    'explanation' => "The opposite of love is hate.",
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

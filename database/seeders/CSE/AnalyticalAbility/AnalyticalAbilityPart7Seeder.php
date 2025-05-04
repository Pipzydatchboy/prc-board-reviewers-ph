<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart7Seeder extends Seeder
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

// 121
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which of the following is a valid conclusion: All humans are capable of speech. John is a human.",
    'choices' => json_encode(['John cannot speak.', 'John is not human.', 'John can speak.', 'John is mute.']),
    'answer' => 'John can speak.',
    'explanation' => "Since all humans are capable of speech and John is a human, it logically follows that John can speak.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 122
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which word is most similar in meaning to 'happy'?",
    'choices' => json_encode(['Sad', 'Joyful', 'Angry', 'Afraid']),
    'answer' => 'Joyful',
    'explanation' => "Joyful is a synonym for happy.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 123
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Choose the correct analogy: Bark is to dog as meow is to _______.",
    'choices' => json_encode(['Bird', 'Cat', 'Mouse', 'Cow']),
    'answer' => 'Cat',
    'explanation' => "A dog barks; a cat meows.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 124
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which number continues the series: 3, 6, 12, 24, ___?",
    'choices' => json_encode(['30', '48', '36', '60']),
    'answer' => '48',
    'explanation' => "The pattern doubles each time. 24 × 2 = 48.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 125
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "What is the assumption in the statement: 'People who exercise regularly are healthier.'",
    'choices' => json_encode(['Exercise causes disease.', 'Health has no cause.', 'Exercise improves health.', 'Only athletes exercise.']),
    'answer' => 'Exercise improves health.',
    'explanation' => "The assumption is that regular exercise has a positive effect on health.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 126
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which of the following does not belong: Pen, Pencil, Eraser, Refrigerator?",
    'choices' => json_encode(['Pen', 'Pencil', 'Eraser', 'Refrigerator']),
    'answer' => 'Refrigerator',
    'explanation' => "The first three are school supplies; refrigerator is an appliance.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 127
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which word is opposite in meaning to 'brave'?",
    'choices' => json_encode(['Bold', 'Fearful', 'Strong', 'Daring']),
    'answer' => 'Fearful',
    'explanation' => "Fearful is the opposite of brave.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 128
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which number comes next: 1, 2, 4, 8, 16, ___?",
    'choices' => json_encode(['24', '30', '32', '36']),
    'answer' => '32',
    'explanation' => "Each number is multiplied by 2. 16 × 2 = 32.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 129
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Choose the correct analogy: Wheel is to car as wing is to _______.",
    'choices' => json_encode(['Bird', 'Airplane', 'Wind', 'Jet']),
    'answer' => 'Airplane',
    'explanation' => "Wheels help cars move; wings help airplanes fly.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 130
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which conclusion is valid: All fruits contain vitamins. Mango is a fruit.",
    'choices' => json_encode(['Mango has no vitamins.', 'Mango contains vitamins.', 'Mango is not healthy.', 'Mango is not a fruit.']),
    'answer' => 'Mango contains vitamins.',
    'explanation' => "If all fruits contain vitamins and mango is a fruit, then it contains vitamins.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 131
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which is a valid assumption: 'Students who review pass the test.'",
    'choices' => json_encode(['Tests are unfair.', 'Reviewing helps students succeed.', 'All tests are hard.', 'Students never fail.']),
    'answer' => 'Reviewing helps students succeed.',
    'explanation' => "The assumption is that reviewing improves test performance.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 132
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which of the following best completes the sequence: 11, 13, 15, 17, ___?",
    'choices' => json_encode(['19', '20', '21', '23']),
    'answer' => '19',
    'explanation' => "The numbers increase by 2. 17 + 2 = 19.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 133
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which word does NOT belong: Soccer, Tennis, Chess, Guitar?",
    'choices' => json_encode(['Soccer', 'Tennis', 'Chess', 'Guitar']),
    'answer' => 'Guitar',
    'explanation' => "The others are games or sports; guitar is a musical instrument.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 134
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "What is assumed in the statement: 'Drinking enough water boosts energy.'",
    'choices' => json_encode(['Water is bad.', 'Drinking is tiring.', 'Hydration affects energy.', 'Energy is not important.']),
    'answer' => 'Hydration affects energy.',
    'explanation' => "The statement assumes that water intake is linked to higher energy levels.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 135
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which analogy is correct: Sugar is to sweet as salt is to _______.",
    'choices' => json_encode(['Spicy', 'Sour', 'Bitter', 'Salty']),
    'answer' => 'Salty',
    'explanation' => "Sugar is sweet; salt is salty.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 136
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which one is the odd one out: Apple, Orange, Banana, Bread?",
    'choices' => json_encode(['Apple', 'Orange', 'Banana', 'Bread']),
    'answer' => 'Bread',
    'explanation' => "Apple, orange, and banana are fruits; bread is not.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 137
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "What comes next in the pattern: 100, 95, 90, 85, ___?",
    'choices' => json_encode(['70', '80', '75', '60']),
    'answer' => '80',
    'explanation' => "The pattern subtracts 5 each time. 85 - 5 = 80.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 138
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which conclusion is correct: All triangles have three sides. Figure A is a triangle.",
    'choices' => json_encode(['Figure A has four sides.', 'Figure A has three sides.', 'Figure A is a square.', 'Figure A is a circle.']),
    'answer' => 'Figure A has three sides.',
    'explanation' => "If all triangles have three sides, and Figure A is a triangle, it has three sides.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 139
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Which word is opposite of 'early'?",
    'choices' => json_encode(['Prompt', 'Punctual', 'Late', 'Eager']),
    'answer' => 'Late',
    'explanation' => "The opposite of early is late.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 140
$batch[] = [  
    'subject_id' => 2,  
    'part' => 7,            
    'question' => "Choose the correct analogy: Fish is to water as bird is to _______.",
    'choices' => json_encode(['Nest', 'Air', 'Tree', 'Wind']),
    'answer' => 'Air',
    'explanation' => "Fish lives in water; bird flies in the air.",
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

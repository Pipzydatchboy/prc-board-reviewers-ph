<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart4Seeder extends Seeder
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

// 61
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which of the following is a valid conclusion: All humans are mortal. John is a human.",
    'choices' => json_encode(['John is immortal.', 'John is a human being.', 'John is not mortal.', 'John is mortal.']),
    'answer' => 'John is mortal.',
    'explanation' => "Since all humans are mortal and John is a human, it logically follows that John is mortal.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 62
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Choose the pair with the same relationship: Teeth is to bite as feet is to _______.",
    'choices' => json_encode(['Walk', 'Run', 'Step', 'Kick']),
    'answer' => 'Walk',
    'explanation' => "Teeth are used to bite; feet are used to walk.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 63
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which word is the opposite of 'noisy'?",
    'choices' => json_encode(['Silent', 'Loud', 'Quiet', 'Calm']),
    'answer' => 'Silent',
    'explanation' => "The opposite of 'noisy' is 'silent'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 64
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "What comes next in the series: 1, 4, 9, 16, 25, ___?",
    'choices' => json_encode(['30', '32', '36', '49']),
    'answer' => '36',
    'explanation' => "The numbers are perfect squares: 1², 2², 3²... Next is 6² = 36.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 65
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "What is the assumption in the statement: 'Students who attend review classes get higher scores.'?",
    'choices' => json_encode(['Review classes lower scores.', 'Attending review classes helps students improve.', 'Review classes are boring.', 'All students hate exams.']),
    'answer' => 'Attending review classes helps students improve.',
    'explanation' => "The assumption is that attending review classes has a positive effect on scores.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 66
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which word does NOT belong: Mango, Banana, Apple, Potato?",
    'choices' => json_encode(['Mango', 'Banana', 'Apple', 'Potato']),
    'answer' => 'Potato',
    'explanation' => "Mango, banana, and apple are fruits; potato is a root crop.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 67
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "What completes the analogy: Fire is to heat as ice is to _______.",
    'choices' => json_encode(['Water', 'Cold', 'Snow', 'Melt']),
    'answer' => 'Cold',
    'explanation' => "Fire produces heat; ice produces cold.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 68
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which number continues the pattern: 5, 10, 20, 40, ___?",
    'choices' => json_encode(['60', '70', '80', '100']),
    'answer' => '80',
    'explanation' => "Each number is multiplied by 2. 40 × 2 = 80.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 69
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Identify the conclusion: All humans are mortal. Mark is a human.",
    'choices' => json_encode(['Mark is not mortal.', 'Mark is a robot.', 'Mark is mortal.', 'Mark is not human.']),
    'answer' => 'Mark is mortal.',
    'explanation' => "Since all humans are mortal and Mark is human, then Mark is mortal.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 70
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which is the correct assumption: 'Drinking water regularly improves digestion.'",
    'choices' => json_encode(['Water causes dehydration.', 'Water is unnecessary.', 'Digestion is not important.', 'Water affects digestion.']),
    'answer' => 'Water affects digestion.',
    'explanation' => "The statement assumes a connection between drinking water and improved digestion.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 71
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Choose the pair with the same relationship: Teacher is to classroom as pilot is to _______.",
    'choices' => json_encode(['Airplane', 'Runway', 'Airport', 'Tower']),
    'answer' => 'Airplane',
    'explanation' => "A teacher works in a classroom; a pilot works in an airplane.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 72
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which number completes the pattern: 1, 2, 4, 7, 11, ___?",
    'choices' => json_encode(['13', '16', '15', '17']),
    'answer' => '16',
    'explanation' => "The pattern adds +1, +2, +3, +4, +5... Next is +5 → 11 + 5 = 16.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 73
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which word is most similar in meaning to 'honest'?",
    'choices' => json_encode(['Deceitful', 'Kind', 'Truthful', 'Greedy']),
    'answer' => 'Truthful',
    'explanation' => "Honest and truthful both describe someone who tells the truth.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 74
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Identify the odd one: Book, Pencil, Notebook, Laptop",
    'choices' => json_encode(['Book', 'Pencil', 'Notebook', 'Laptop']),
    'answer' => 'Laptop',
    'explanation' => "Book, pencil, and notebook are basic school supplies; laptop is a gadget.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 75
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which conclusion is logical: All dogs bark. Max is a dog.",
    'choices' => json_encode(['Max barks.', 'Max meows.', 'Max is quiet.', 'Max is not a dog.']),
    'answer' => 'Max barks.',
    'explanation' => "If all dogs bark and Max is a dog, then Max barks.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 76
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which is a valid assumption: People who exercise are healthier.",
    'choices' => json_encode(['All people are unhealthy.', 'Exercise causes illness.', 'Exercise benefits health.', 'Exercise is harmful.']),
    'answer' => 'Exercise benefits health.',
    'explanation' => "The assumption is that exercise has a positive effect on health.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 77
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which word is the opposite of 'strong'?",
    'choices' => json_encode(['Weak', 'Tough', 'Brave', 'Smart']),
    'answer' => 'Weak',
    'explanation' => "The opposite of 'strong' is 'weak'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 78
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Which completes the analogy: Cat is to kitten as dog is to _______.",
    'choices' => json_encode(['Puppy', 'Cub', 'Foal', 'Calf']),
    'answer' => 'Puppy',
    'explanation' => "A kitten is a baby cat; a puppy is a baby dog.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 79
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "What comes next: 100, 90, 81, 73, ___?",
    'choices' => json_encode(['66', '65', '64', '60']),
    'answer' => '66',
    'explanation' => "The differences are -10, -9, -8... Next is -7: 73 - 7 = 66.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 80
$batch[] = [  
    'subject_id' => 2,  
    'part' => 4,            
    'question' => "Choose the word pair with the same relationship: Pen is to write as scissors is to _______.",
    'choices' => json_encode(['Draw', 'Cut', 'Color', 'Open']),
    'answer' => 'Cut',
    'explanation' => "A pen is used to write; scissors are used to cut.",
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

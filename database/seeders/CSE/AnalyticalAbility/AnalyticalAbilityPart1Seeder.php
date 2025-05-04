<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart1Seeder extends Seeder
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

// 1
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Clock is to time as thermometer is to _______.",
    'choices' => json_encode(['Heat', 'Temperature', 'Humidity', 'Pressure']),
    'answer' => 'Temperature',
    'explanation' => "A clock measures time, just as a thermometer measures temperature.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 2
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Finger is to hand as toe is to _______.",
    'choices' => json_encode(['Leg', 'Heel', 'Foot', 'Ankle']),
    'answer' => 'Foot',
    'explanation' => "A finger is part of a hand, just as a toe is part of a foot.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 3
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which of the following best completes the analogy: Book is to Reading as Fork is to _______.",
    'choices' => json_encode(['Drawing', 'Writing', 'Stirring', 'Eating']),
    'answer' => 'Eating',
    'explanation' => "A book is used for reading; a fork is used for eating.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 4
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Assuming all cats are mammals and all mammals are animals, what can we conclude?",
    'choices' => json_encode(['All animals are cats', 'All cats are animals', 'Some animals are mammals', 'Some cats are not animals']),
    'answer' => 'All cats are animals',
    'explanation' => "If all cats are mammals and all mammals are animals, then logically all cats are animals.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 5
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "If 3 pencils cost ₱18, how much do 5 pencils cost?",
    'choices' => json_encode(['₱30', '₱36', '₱26', '₱22']),
    'answer' => '₱30',
    'explanation' => "₱18 ÷ 3 = ₱6 per pencil. ₱6 × 5 = ₱30.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 6
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "What comes next in the series: 2, 4, 8, 16, ___?",
    'choices' => json_encode(['18', '20', '32', '24']),
    'answer' => '32',
    'explanation' => "Each number is multiplied by 2. 16 × 2 = 32.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 7
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which word does NOT belong in the group: Apple, Banana, Carrot, Grape?",
    'choices' => json_encode(['Apple', 'Banana', 'Carrot', 'Grape']),
    'answer' => 'Carrot',
    'explanation' => "Carrot is a vegetable while the others are fruits.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 8
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "A train travels 60 km in 1 hour. At the same speed, how far will it travel in 2.5 hours?",
    'choices' => json_encode(['120 km', '130 km', '150 km', '180 km']),
    'answer' => '150 km',
    'explanation' => "60 × 2.5 = 150 km.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 9
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Choose the word that best completes the analogy: Dog is to bark as cat is to _______.",
    'choices' => json_encode(['Meow', 'Purr', 'Growl', 'Roar']),
    'answer' => 'Meow',
    'explanation' => "Dogs bark, cats meow.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 10
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Identify the assumption: All students who study hard pass the exam. Juan passed the exam.",
    'choices' => json_encode(['Juan did not study.', 'Juan studied hard.', 'Juan is a teacher.', 'The exam was easy.']),
    'answer' => 'Juan studied hard.',
    'explanation' => "The assumption is that passing the exam means Juan studied hard.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 11
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which of the following best completes the analogy: Pen is to writer as brush is to _______.",
    'choices' => json_encode(['Carpenter', 'Painter', 'Singer', 'Poet']),
    'answer' => 'Painter',
    'explanation' => "A pen is used by a writer; a brush is used by a painter.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 12
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which number completes the pattern: 3, 6, 9, 12, ___?",
    'choices' => json_encode(['15', '18', '21', '16']),
    'answer' => '15',
    'explanation' => "The numbers increase by 3. 12 + 3 = 15.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 13
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which one is the odd one out: Triangle, Square, Rectangle, Circle?",
    'choices' => json_encode(['Triangle', 'Square', 'Rectangle', 'Circle']),
    'answer' => 'Circle',
    'explanation' => "All others have straight sides; circle has none.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 14
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Identify the conclusion: All nurses are helpful. Ana is a nurse.",
    'choices' => json_encode(['Ana is not helpful.', 'Ana is a doctor.', 'Ana is helpful.', 'Ana is not a nurse.']),
    'answer' => 'Ana is helpful.',
    'explanation' => "Since all nurses are helpful and Ana is a nurse, she must be helpful.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 15
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "What is the missing number in the series: 5, 10, 20, 40, ___?",
    'choices' => json_encode(['45', '50', '80', '60']),
    'answer' => '80',
    'explanation' => "Each number doubles. 40 × 2 = 80.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 16
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which word is most similar to 'generous'?",
    'choices' => json_encode(['Greedy', 'Kind', 'Cheap', 'Rude']),
    'answer' => 'Kind',
    'explanation' => "Being generous means showing kindness and willingness to help others.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 17
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which of the following is a logical conclusion: All birds lay eggs. The ostrich is a bird.",
    'choices' => json_encode(['The ostrich swims.', 'The ostrich lays eggs.', 'The ostrich is a fish.', 'The ostrich doesn’t lay eggs.']),
    'answer' => 'The ostrich lays eggs.',
    'explanation' => "Since ostriches are birds, and all birds lay eggs, ostriches must also lay eggs.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 18
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Which is a logical assumption: People who read more are often better writers.",
    'choices' => json_encode(['All readers are writers.', 'Reading improves writing.', 'Writing makes you read more.', 'Good writers never read.']),
    'answer' => 'Reading improves writing.',
    'explanation' => "The statement implies a link between reading and writing skill.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 19
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "What is next in the series: 100, 90, 80, 70, ___?",
    'choices' => json_encode(['65', '60', '50', '40']),
    'answer' => '60',
    'explanation' => "The pattern decreases by 10. 70 - 10 = 60.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 20
$batch[] = [  
    'subject_id' => 2,  
    'part' => 1,          
    'question' => "Choose the pair that has the same relationship: Knife is to cut as pen is to _______.",
    'choices' => json_encode(['Draw', 'Write', 'Scribble', 'Paint']),
    'answer' => 'Write',
    'explanation' => "A knife is used to cut; a pen is used to write.",
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

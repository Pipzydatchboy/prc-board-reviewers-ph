<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart8Seeder extends Seeder
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

// 141
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which of the following is a valid conclusion: All fish live in water. A goldfish is a fish.",
    'choices' => json_encode(['A goldfish does not live in water.', 'A goldfish lives on land.', 'A goldfish lives in water.', 'A goldfish is not a fish.']),
    'answer' => 'A goldfish lives in water.',
    'explanation' => "Since all fish live in water and a goldfish is a fish, it logically follows that a goldfish lives in water.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 142
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which of the following is the opposite of 'noisy'?",
    'choices' => json_encode(['Loud', 'Silent', 'Echo', 'Roar']),
    'answer' => 'Silent',
    'explanation' => "The opposite of 'noisy' is 'silent'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 143
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which word does not belong: Triangle, Square, Circle, Cylinder?",
    'choices' => json_encode(['Triangle', 'Square', 'Circle', 'Cylinder']),
    'answer' => 'Cylinder',
    'explanation' => "The first three are 2D shapes; cylinder is a 3D shape.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 144
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Choose the best pair: Artist is to painting as musician is to _______.",
    'choices' => json_encode(['Singing', 'Guitar', 'Melody', 'Music']),
    'answer' => 'Music',
    'explanation' => "An artist creates paintings; a musician creates music.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 145
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "What comes next in the series: 100, 90, 81, 73, ___?",
    'choices' => json_encode(['66', '65', '62', '70']),
    'answer' => '66',
    'explanation' => "The differences are -10, -9, -8, -7. 73 - 7 = 66.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 146
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which is the odd one out: Run, Walk, Sleep, Jog?",
    'choices' => json_encode(['Run', 'Walk', 'Sleep', 'Jog']),
    'answer' => 'Sleep',
    'explanation' => "Run, walk, and jog are physical activities; sleep is a resting state.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 147
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which assumption is made in the statement: 'Using hand sanitizer prevents the spread of germs.'",
    'choices' => json_encode(['Hand sanitizer causes infection.', 'Hand sanitizer contains germs.', 'Hand sanitizer kills germs.', 'Germs are not real.']),
    'answer' => 'Hand sanitizer kills germs.',
    'explanation' => "The assumption is that hand sanitizers are effective in killing or reducing germs.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 148
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Choose the correct analogy: Candle is to wax as pencil is to _______.",
    'choices' => json_encode(['Wood', 'Graphite', 'Paper', 'Eraser']),
    'answer' => 'Graphite',
    'explanation' => "A candle's core material is wax; a pencil's writing material is graphite.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 149
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which conclusion is correct: All fruits have seeds. Papaya is a fruit.",
    'choices' => json_encode(['Papaya has no seeds.', 'Papaya has seeds.', 'Papaya is a vegetable.', 'Papaya is not edible.']),
    'answer' => 'Papaya has seeds.',
    'explanation' => "If all fruits have seeds and papaya is a fruit, then it must have seeds.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 150
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which word is the opposite of 'increase'?",
    'choices' => json_encode(['Rise', 'Drop', 'Add', 'Grow']),
    'answer' => 'Drop',
    'explanation' => "The opposite of increase is drop or decrease.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 151
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "What comes next in the series: 2, 6, 12, 20, ___?",
    'choices' => json_encode(['30', '32', '28', '26']),
    'answer' => '30',
    'explanation' => "The differences are +4, +6, +8... So next is +10 → 20 + 10 = 30.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 152
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Choose the pair that has the same relationship: Ear is to hear as eye is to _______.",
    'choices' => json_encode(['Touch', 'Smell', 'See', 'Taste']),
    'answer' => 'See',
    'explanation' => "Ears are used to hear; eyes are used to see.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 153
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which one is NOT a fruit: Mango, Apple, Tomato, Cabbage?",
    'choices' => json_encode(['Mango', 'Apple', 'Tomato', 'Cabbage']),
    'answer' => 'Cabbage',
    'explanation' => "Mango, apple, and tomato are fruits; cabbage is a vegetable.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 154
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "What is assumed in the statement: 'People who read regularly are more informed.'",
    'choices' => json_encode(['Reading causes confusion.', 'Books are useless.', 'Reading provides information.', 'Readers are lazy.']),
    'answer' => 'Reading provides information.',
    'explanation' => "The assumption is that reading helps people gain knowledge.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 155
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which word is most similar to 'honest'?",
    'choices' => json_encode(['Deceitful', 'Truthful', 'Greedy', 'Dishonest']),
    'answer' => 'Truthful',
    'explanation' => "Honest means being truthful, so 'truthful' is the most similar word.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 156
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which of the following continues the series: 1, 4, 9, 16, 25, ___?",
    'choices' => json_encode(['30', '36', '32', '40']),
    'answer' => '36',
    'explanation' => "These are perfect squares: 1², 2², 3²... Next is 6² = 36.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 157
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which word is opposite of 'strong'?",
    'choices' => json_encode(['Weak', 'Brave', 'Firm', 'Stable']),
    'answer' => 'Weak',
    'explanation' => "The opposite of strong is weak.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 158
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which assumption is made: 'Recycling helps save the environment.'",
    'choices' => json_encode(['Recycling is bad.', 'Environment cannot be saved.', 'Recycling has no use.', 'Recycling reduces waste.']),
    'answer' => 'Recycling reduces waste.',
    'explanation' => "The assumption is that recycling helps lessen environmental impact.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 159
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Choose the correct analogy: Knife is to cut as broom is to _______.",
    'choices' => json_encode(['Clean', 'Sweep', 'Push', 'Wipe']),
    'answer' => 'Sweep',
    'explanation' => "A knife cuts; a broom sweeps.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 160
$batch[] = [  
    'subject_id' => 2,  
    'part' => 8,            
    'question' => "Which of the following is the odd one out: Eagle, Hawk, Bat, Parrot?",
    'choices' => json_encode(['Eagle', 'Hawk', 'Bat', 'Parrot']),
    'answer' => 'Bat',
    'explanation' => "Bat is a mammal that flies; the others are birds.",
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

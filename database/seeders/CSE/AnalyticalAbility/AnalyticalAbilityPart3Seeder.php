<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart3Seeder extends Seeder
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

// 41
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which of the following is a valid conclusion: All plants need sunlight. A sunflower is a plant.",
    'choices' => json_encode(['A sunflower does not need sunlight.', 'A sunflower grows in darkness.', 'A sunflower needs sunlight.', 'A sunflower is not a plant.']),
    'answer' => 'A sunflower needs sunlight.',
    'explanation' => "Since all plants need sunlight and sunflower is a plant, it needs sunlight.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 42
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which word is the opposite of 'generous'?",
    'choices' => json_encode(['Kind', 'Selfish', 'Friendly', 'Joyful']),
    'answer' => 'Selfish',
    'explanation' => "Generous means willing to give; selfish means unwilling to give or share.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 43
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which completes the analogy: Leaf is to tree as petal is to _______.",
    'choices' => json_encode(['Stem', 'Root', 'Flower', 'Branch']),
    'answer' => 'Flower',
    'explanation' => "A leaf is part of a tree; a petal is part of a flower.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 44
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which number comes next in the pattern: 10, 20, 30, 40, ___?",
    'choices' => json_encode(['50', '55', '60', '45']),
    'answer' => '50',
    'explanation' => "The pattern increases by 10. Next is 40 + 10 = 50.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 45
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which assumption is made in the statement: 'Regular exercise improves health.'?",
    'choices' => json_encode(['All exercises are easy.', 'Health depends on diet only.', 'Exercise has an effect on health.', 'Only sick people exercise.']),
    'answer' => 'Exercise has an effect on health.',
    'explanation' => "The statement assumes a link between exercise and improved health.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 46
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which item does not belong: Hammer, Screwdriver, Wrench, Spoon?",
    'choices' => json_encode(['Hammer', 'Screwdriver', 'Wrench', 'Spoon']),
    'answer' => 'Spoon',
    'explanation' => "The others are tools; a spoon is an eating utensil.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 47
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which word completes the analogy: Smile is to happiness as frown is to _______.",
    'choices' => json_encode(['Surprise', 'Anger', 'Fear', 'Sadness']),
    'answer' => 'Sadness',
    'explanation' => "A smile expresses happiness; a frown expresses sadness.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 48
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "What comes next in the pattern: 2, 3, 5, 8, 12, ___?",
    'choices' => json_encode(['15', '17', '20', '23']),
    'answer' => '17',
    'explanation' => "The pattern adds 1, 2, 3, 4... So 12 + 5 = 17.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 49
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Identify the conclusion: All athletes train daily. Jenny is an athlete.",
    'choices' => json_encode(['Jenny is lazy.', 'Jenny trains daily.', 'Jenny dislikes sports.', 'Jenny is a coach.']),
    'answer' => 'Jenny trains daily.',
    'explanation' => "Since all athletes train daily and Jenny is an athlete, then she trains daily.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 50
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which pair has the same relationship: Knife is to sharp as pillow is to _______.",
    'choices' => json_encode(['Soft', 'Hard', 'Flat', 'Heavy']),
    'answer' => 'Soft',
    'explanation' => "Knives are sharp; pillows are soft. The pair describes a key characteristic.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 51
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which word is most similar in meaning to 'fragile'?",
    'choices' => json_encode(['Strong', 'Delicate', 'Firm', 'Heavy']),
    'answer' => 'Delicate',
    'explanation' => "Fragile means easily broken or delicate.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 52
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which is an assumption in the statement: 'Vaccines help prevent diseases.'?",
    'choices' => json_encode(['Diseases cannot be prevented.', 'Vaccines are always available.', 'Vaccines are effective.', 'Diseases are not serious.']),
    'answer' => 'Vaccines are effective.',
    'explanation' => "The assumption is that vaccines are effective in preventing diseases.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 53
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which item is different from the rest: Rose, Lily, Daisy, Sand?",
    'choices' => json_encode(['Rose', 'Lily', 'Daisy', 'Sand']),
    'answer' => 'Sand',
    'explanation' => "Rose, lily, and daisy are flowers; sand is not.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 54
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "If A is taller than B, and B is taller than C, who is the tallest?",
    'choices' => json_encode(['A', 'B', 'C', 'Cannot be determined']),
    'answer' => 'A',
    'explanation' => "Since A > B > C, A is the tallest.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 55
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which best completes the analogy: Doctor is to hospital as pilot is to _______.",
    'choices' => json_encode(['Airport', 'Ship', 'Ambulance', 'Train']),
    'answer' => 'Airport',
    'explanation' => "Doctors work in hospitals; pilots work at airports.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 56
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "What comes next in the series: 3, 6, 12, 24, ___?",
    'choices' => json_encode(['36', '42', '48', '50']),
    'answer' => '48',
    'explanation' => "The pattern multiplies by 2 each time: 24 × 2 = 48.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 57
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which conclusion follows: All fish swim. Salmon is a fish.",
    'choices' => json_encode(['Salmon cannot swim.', 'Salmon is not a fish.', 'Salmon swims.', 'Salmon runs.']),
    'answer' => 'Salmon swims.',
    'explanation' => "If all fish swim, and salmon is a fish, then salmon swims.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 58
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which word is the opposite of 'difficult'?",
    'choices' => json_encode(['Hard', 'Challenging', 'Easy', 'Tough']),
    'answer' => 'Easy',
    'explanation' => "The opposite of 'difficult' is 'easy'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 59
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "Which of the following completes the analogy: Fish is to water as bird is to _______.",
    'choices' => json_encode(['Land', 'Sky', 'Nest', 'Feather']),
    'answer' => 'Sky',
    'explanation' => "Fish live in water; birds fly in the sky.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 60
$batch[] = [  
    'subject_id' => 2,  
    'part' => 3,            
    'question' => "What is a valid assumption: People who eat healthy live longer.",
    'choices' => json_encode(['Unhealthy food makes you smarter.', 'Eating does not affect health.', 'Healthy eating promotes longevity.', 'Long life depends on exercise only.']),
    'answer' => 'Healthy eating promotes longevity.',
    'explanation' => "The assumption is that there is a link between healthy eating and long life.",
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

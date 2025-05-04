<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts Here...
$batch = [];

// 121
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which of the following is a valid conclusion: All birds have feathers. A parrot is a bird.",
    'choices' => json_encode(['A parrot has no feathers.', 'A parrot cannot fly.', 'A parrot has feathers.', 'A parrot is not a bird.']),
    'answer' => 'A parrot has feathers.',
    'explanation' => "Since all birds have feathers and a parrot is a bird, it must have feathers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 122
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "What is the meaning of the prefix 'inter-'?",
    'choices' => json_encode(['Between', 'Inside', 'Before', 'Beyond']),
    'answer' => 'Between',
    'explanation' => "'Inter-' means between or among, as in 'international' or 'interact'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 123
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,             
    'question' => "Choose the word that best completes the sentence: The teacher gave an __________ explanation of the lesson.",
    'choices' => json_encode(['Unclear', 'Clear', 'Confusing', 'Boring']),
    'answer' => 'Clear',
    'explanation' => "'Clear' is the best word because it means the explanation was easy to understand.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 124
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which word means the opposite of 'increase'?",
    'choices' => json_encode(['Expand', 'Multiply', 'Reduce', 'Add']),
    'answer' => 'Reduce',
    'explanation' => "'Reduce' is the antonym of 'increase'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 125
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Choose the sentence with correct punctuation.",
    'choices' => json_encode(['Yes I will go.', 'Yes, I will go.', 'Yes I, will go.', 'Yes: I will go.']),
    'answer' => 'Yes, I will go.',
    'explanation' => "The comma is used correctly after the introductory word 'Yes'.",
    'created_at' => now(),
    'updated_at' => now(),
];
// 126
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "What is the correct synonym of 'calm'?",
    'choices' => json_encode(['Peaceful', 'Angry', 'Stormy', 'Loud']),
    'answer' => 'Peaceful',
    'explanation' => "'Calm' and 'peaceful' share similar meanings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 127
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "What does the root word 'spect' mean?",
    'choices' => json_encode(['Write', 'Look', 'Speak', 'Act']),
    'answer' => 'Look',
    'explanation' => "'Spect' means to look or see, as in 'inspect' or 'spectator'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 128
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,             
    'question' => "Choose the sentence that demonstrates correct subject-verb agreement.",
    'choices' => json_encode(['They was going to the mall.', 'She were late.', 'He walks to school.', 'We was tired.']),
    'answer' => 'He walks to school.',
    'explanation' => "The singular subject 'He' requires the singular verb 'walks' in the present tense.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 129
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,             
    'question' => "Which word is most opposite in meaning to 'optimistic'?",
    'choices' => json_encode(['Pessimistic', 'Hopeful', 'Cheerful', 'Confident']),
    'answer' => 'Pessimistic',
    'explanation' => "'Pessimistic' is the opposite of 'optimistic', meaning having a negative outlook on the future.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 130
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which is the antonym of 'success'?",
    'choices' => json_encode(['Win', 'Glory', 'Failure', 'Fame']),
    'answer' => 'Failure',
    'explanation' => "'Failure' is the opposite of 'success'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 131
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which of the following is an example of parallel structure?",
    'choices' => json_encode(['She likes swimming, to run, and biking.', 'She likes to swim, to run, and to bike.', 'She likes swim, run, bike.', 'She like swimming, running and to bike.']),
    'answer' => 'She likes to swim, to run, and to bike.',
    'explanation' => "All verbs follow the same 'to + verb' structure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 132
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "What does the prefix 'anti-' mean?",
    'choices' => json_encode(['Against', 'Before', 'After', 'Within']),
    'answer' => 'Against',
    'explanation' => "'Anti-' means against or opposite, like in 'antibiotic'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 133
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which of the following words is a homophone?",
    'choices' => json_encode(['Buy', 'Purchase', 'Sell', 'Borrow']),
    'answer' => 'Buy',
    'explanation' => "'Buy' sounds like 'by' and 'bye', making it a homophone.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 134
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Choose the best word to complete the sentence: He looked at her with _______.",
    'choices' => json_encode(['admiration', 'admire', 'admirable', 'admiring']),
    'answer' => 'admiration',
    'explanation' => "'Admiration' is the correct noun for this sentence structure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 135
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which of the following is the antonym of 'expand'?",
    'choices' => json_encode(['Stretch', 'Extend', 'Shrink', 'Grow']),
    'answer' => 'Shrink',
    'explanation' => "'Shrink' means to make smaller, the opposite of 'expand'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 136
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which word best describes someone who tells lies?",
    'choices' => json_encode(['Honest', 'Truthful', 'Deceitful', 'Sincere']),
    'answer' => 'Deceitful',
    'explanation' => "'Deceitful' describes a person who is not truthful.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 137
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "What is the root word in 'predictable'?",
    'choices' => json_encode(['Pre', 'Dict', 'Able', 'Table']),
    'answer' => 'Dict',
    'explanation' => "'Dict' means 'say' or 'speak', and is the root of 'predictable'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 138
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "Which of the following best describes a 'contradiction'?",
    'choices' => json_encode(['Agreement', 'Opposition', 'Similarity', 'Support']),
    'answer' => 'Opposition',
    'explanation' => "'Contradiction' refers to a statement that is the opposite or denies another.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 139
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,             
    'question' => "Choose the word that best completes the sentence: The manager was __________ when the project was completed ahead of schedule.",
    'choices' => json_encode(['Disappointed', 'Angry', 'Pleased', 'Frustrated']),
    'answer' => 'Pleased',
    'explanation' => "'Pleased' fits best as it reflects a positive reaction to the successful completion of the project.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 140
$batch[] = [  
    'subject_id' => 4,  
    'part' => 7,            
    'question' => "What does the word 'vivid' most nearly mean?",
    'choices' => json_encode(['Bright', 'Dull', 'Soft', 'Boring']),
    'answer' => 'Bright',
    'explanation' => "'Vivid' means very bright, distinct, or clear.",
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

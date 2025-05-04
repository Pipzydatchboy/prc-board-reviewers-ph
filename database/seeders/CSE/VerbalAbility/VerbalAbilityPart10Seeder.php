<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart10Seeder extends Seeder
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

// 181
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which of the following is a valid conclusion: All insects have six legs. An ant is an insect.",
    'choices' => json_encode(['An ant has eight legs.', 'An ant has six legs.', 'An ant has no legs.', 'An ant has wings.']),
    'answer' => 'An ant has six legs.',
    'explanation' => "Since all insects have six legs and an ant is an insect, it has six legs.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 182
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "What is the correct synonym of 'difficult'?",
    'choices' => json_encode(['Hard', 'Easy', 'Simple', 'Clear']),
    'answer' => 'Hard',
    'explanation' => "'Difficult' and 'hard' share similar meanings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 183
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Choose the sentence that is written correctly.",
    'choices' => json_encode(['Him went to the store.', 'He goed to the store.', 'He went to the store.', 'He going to the store.']),
    'answer' => 'He went to the store.',
    'explanation' => "Past tense of 'go' is 'went', and 'he' is the correct subject.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 184
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "What does the suffix '-ful' mean?",
    'choices' => json_encode(['Without', 'Lacking', 'Full of', 'Before']),
    'answer' => 'Full of',
    'explanation' => "'-ful' means 'full of', like in 'hopeful' or 'grateful'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 185
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which word is the antonym of 'victory'?",
    'choices' => json_encode(['Defeat', 'Win', 'Success', 'Triumph']),
    'answer' => 'Defeat',
    'explanation' => "'Defeat' is the opposite of 'victory'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 186
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "What does the root word 'rupt' mean?",
    'choices' => json_encode(['Break', 'Run', 'Write', 'Speak']),
    'answer' => 'Break',
    'explanation' => "'Rupt' means 'break' as in 'erupt', 'interrupt', or 'rupture'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 187
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Choose the sentence with proper subject-verb agreement.",
    'choices' => json_encode(['My brother and sister lives nearby.', 'My brother and sister live nearby.', 'My brother and sister is living nearby.', 'My brother and sister was nearby.']),
    'answer' => 'My brother and sister live nearby.',
    'explanation' => "The plural subject 'brother and sister' takes the verb 'live'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 188
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which of the following words means the same as 'quick'?",
    'choices' => json_encode(['Fast', 'Slow', 'Heavy', 'Light']),
    'answer' => 'Fast',
    'explanation' => "'Fast' is the correct synonym for 'quick', both meaning moving with high speed.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 189
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Choose the correct form of the verb: She ______ for the exam yesterday.",
    'choices' => json_encode(['study', 'studied', 'studying', 'studies']),
    'answer' => 'studied',
    'explanation' => "'Studied' is the correct past tense verb for the sentence.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 190
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which of the following words means 'able to be read'?",
    'choices' => json_encode(['Legible', 'Readable', 'Writed', 'Correct']),
    'answer' => 'Legible',
    'explanation' => "'Legible' means clear enough to be read.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 191
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which is the antonym of 'noisy'?",
    'choices' => json_encode(['Loud', 'Quiet', 'Shout', 'Sound']),
    'answer' => 'Quiet',
    'explanation' => "'Quiet' is the opposite of 'noisy'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 192
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "What is the correct plural form of 'mouse'?",
    'choices' => json_encode(['Mouses', 'Mices', 'Mouse', 'Mice']),
    'answer' => 'Mice',
    'explanation' => "'Mice' is the irregular plural form of 'mouse'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 193
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which word best completes the sentence: I will ______ a letter to my friend.",
    'choices' => json_encode(['write', 'wrote', 'written', 'writing']),
    'answer' => 'write',
    'explanation' => "'Write' is the correct base form to use with 'will'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 194
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "What is the synonym of 'tiny'?",
    'choices' => json_encode(['Huge', 'Massive', 'Small', 'Enormous']),
    'answer' => 'Small',
    'explanation' => "'Tiny' and 'small' have the same meaning.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 195
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which sentence uses the word 'their' correctly?",
    'choices' => json_encode(['Their going to the market.', 'It’s their house.', 'There going to the park.', 'They’re house is big.']),
    'answer' => 'It’s their house.',
    'explanation' => "'Their' shows possession, and 'their house' is correct usage.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 196
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which is the opposite of 'include'?",
    'choices' => json_encode(['Embrace', 'Cover', 'Exclude', 'Add']),
    'answer' => 'Exclude',
    'explanation' => "'Exclude' is the antonym of 'include'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 197
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which of the following is the correct plural form?",
    'choices' => json_encode(['Womans', 'Women', 'Womanses', 'Womans']),
    'answer' => 'Women',
    'explanation' => "'Women' is the correct plural form of 'woman'.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 198
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which of the following words is closest in meaning to 'benevolent'?",
    'choices' => json_encode(['Kind', 'Rude', 'Angry', 'Selfish']),
    'answer' => 'Kind',
    'explanation' => "'Benevolent' means showing kindness or goodwill, which is closest to being 'kind'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 199
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "Which of the following best completes the sentence: She felt very ______ after the long trip.",
    'choices' => json_encode(['tire', 'tired', 'tires', 'tiring']),
    'answer' => 'tired',
    'explanation' => "'Tired' is the correct adjective to describe how she felt.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 200
$batch[] = [  
    'subject_id' => 4,  
    'part' => 10,             
    'question' => "What does the prefix 'non-' mean?",
    'choices' => json_encode(['After', 'Not', 'Over', 'Next']),
    'answer' => 'Not',
    'explanation' => "'Non-' means 'not', as in 'nonfiction' or 'nonsense'.",
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart8Seeder extends Seeder
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

// 141
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which of the following is a valid conclusion: All mammals have backbones. A dolphin is a mammal.",
    'choices' => json_encode(['A dolphin has no backbone.', 'A dolphin is a fish.', 'A dolphin has a backbone.', 'A dolphin is not a mammal.']),
    'answer' => 'A dolphin has a backbone.',
    'explanation' => "Since all mammals have backbones and a dolphin is a mammal, it has a backbone.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 142
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which of the following words is the antonym of 'joyful'?",
    'choices' => json_encode(['Cheerful', 'Glad', 'Happy', 'Miserable']),
    'answer' => 'Miserable',
    'explanation' => "'Miserable' is the opposite of 'joyful'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 143
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,             
    'question' => "Which of the following pairs are homophones, meaning they sound the same but have different meanings and spellings?",
    'choices' => json_encode(['Bear and Bare', 'Flower and Flour', 'Read and Reed', 'Right and Write']),
    'answer' => 'Flower and Flour',
    'explanation' => "Homophones are words that have the same pronunciation but different meanings and spellings. 'Flower' and 'Flour' are homophones because they sound identical but have different meanings and spellings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 144
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "What does the prefix 'sub-' mean?",
    'choices' => json_encode(['Above', 'After', 'Under', 'Against']),
    'answer' => 'Under',
    'explanation' => "'Sub-' means 'under', as in 'submarine' or 'subway'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 145
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which is a synonym of the word 'courage'?",
    'choices' => json_encode(['Fear', 'Bravery', 'Worry', 'Sadness']),
    'answer' => 'Bravery',
    'explanation' => "'Courage' means bravery or boldness in facing danger or difficulty.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 146
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which sentence uses correct punctuation?",
    'choices' => json_encode(['Where are you going.', 'Where, are you going?', 'Where are you going?', 'Where are you going!']),
    'answer' => 'Where are you going?',
    'explanation' => "A question must end with a question mark.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 147
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,             
    'question' => "Which of the following words is a homophone, meaning it sounds the same as another word but has a different meaning and spelling?",
    'choices' => json_encode(['Knight', 'Soldier', 'Guard', 'Warrior']),
    'answer' => 'Knight',
    'explanation' => "'Knight' and 'night' are homophones, as they have the same pronunciation but different meanings and spellings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 148
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "What is the antonym of 'honest'?",
    'choices' => json_encode(['Sincere', 'Truthful', 'Deceitful', 'Kind']),
    'answer' => 'Deceitful',
    'explanation' => "'Deceitful' is the opposite of 'honest'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 149
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Choose the correct form: She ______ her assignment early.",
    'choices' => json_encode(['submit', 'submits', 'submitted', 'submitting']),
    'answer' => 'submitted',
    'explanation' => "'Submitted' is the correct past tense for the action.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 150
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "What does the root word 'port' mean?",
    'choices' => json_encode(['Carry', 'Build', 'Write', 'Speak']),
    'answer' => 'Carry',
    'explanation' => "'Port' means 'carry', as seen in 'transport', 'export'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 151
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,             
    'question' => "Select the sentence with correct subject-verb agreement.",
    'choices' => json_encode(['The dogs barks loudly.', 'The dog bark loudly.', 'The dog barks loudly.', 'The dogs barks loud.']),
    'answer' => 'The dog barks loudly.',
    'explanation' => "The singular subject 'dog' agrees with the verb 'barks', and 'loudly' is the correct adverb form.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 152
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which is the correct synonym of 'intelligent'?",
    'choices' => json_encode(['Clever', 'Dull', 'Clumsy', 'Careless']),
    'answer' => 'Clever',
    'explanation' => "'Clever' and 'intelligent' both refer to mental sharpness.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 153
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Choose the word that best completes the sentence: The glass is very ______, handle it carefully.",
    'choices' => json_encode(['strong', 'fragile', 'light', 'safe']),
    'answer' => 'fragile',
    'explanation' => "'Fragile' fits best as it means easily broken.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 154
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,             
    'question' => "What is the meaning of the prefix 'pre-'?",
    'choices' => json_encode(['After', 'During', 'Before', 'Without']),
    'answer' => 'Before',
    'explanation' => "The prefix 'pre-' means 'before', as in words like 'preview' (before viewing) or 'predict' (to say before it happens).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 155
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which of the following words is spelled correctly?",
    'choices' => json_encode(['Febuary', 'Februry', 'February', 'Febraury']),
    'answer' => 'February',
    'explanation' => "'February' is the correct spelling of the month.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 156
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which of the following is an antonym of 'abundant'?",
    'choices' => json_encode(['Plenty', 'Scarce', 'Many', 'Overflow']),
    'answer' => 'Scarce',
    'explanation' => "'Scarce' is the opposite of 'abundant'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 157
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,             
    'question' => "Select the sentence that follows correct subject-verb agreement and pronoun usage.",
    'choices' => json_encode(['She and I am going to the mall.', 'She and I is going to the mall.', 'She and I are going to the mall.', 'She and me are going to the mall.']),
    'answer' => 'She and I are going to the mall.',
    'explanation' => "The correct sentence is 'She and I are going to the mall.' because 'She and I' is a compound subject that takes the plural verb 'are'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 158
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "What does the word 'grateful' mean?",
    'choices' => json_encode(['Thankful', 'Sad', 'Careless', 'Bored']),
    'answer' => 'Thankful',
    'explanation' => "'Grateful' means feeling or showing thanks.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 159
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "What is the root word in 'construction'?",
    'choices' => json_encode(['Construct', 'Con', 'Struct', 'Tion']),
    'answer' => 'Struct',
    'explanation' => "'Struct' means build, and is the root word in 'construction'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 160
$batch[] = [  
    'subject_id' => 4,  
    'part' => 8,            
    'question' => "Which of the following best completes the sentence: The baby slept ______ after a warm bath.",
    'choices' => json_encode(['peace', 'peaceful', 'peacefully', 'piecefully']),
    'answer' => 'peacefully',
    'explanation' => "An adverb 'peacefully' is used to describe how the baby slept.",
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

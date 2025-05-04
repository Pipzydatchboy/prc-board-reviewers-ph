<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart2Seeder extends Seeder
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

// 21
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,             
    'question' => "Which of the following is the most appropriate antonym for 'optimistic'?",
    'choices' => json_encode(['Hopeful', 'Pessimistic', 'Cheerful', 'Confident']),
    'answer' => 'Pessimistic',
    'explanation' => "'Optimistic' refers to having a positive outlook, while 'pessimistic' refers to having a negative or gloomy outlook, making it the correct antonym.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 22
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,             
    'question' => "Choose the word that best completes the sentence: He was very ________ after hearing the good news.",
    'choices' => json_encode(['Sad', 'Angry', 'Happy', 'Tired']),
    'answer' => 'Happy',
    'explanation' => "The word 'happy' best fits the context of hearing good news.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 23
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which is the correct synonym for 'elated'?",
    'choices' => json_encode(['Sad', 'Angry', 'Thrilled', 'Tired']),
    'answer' => 'Thrilled',
    'explanation' => "'Elated' means extremely happy or thrilled.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 24
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "What is the antonym of 'ancient'?",
    'choices' => json_encode(['Old', 'Modern', 'Past', 'Ancient']),
    'answer' => 'Modern',
    'explanation' => "'Modern' is the opposite of 'ancient'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 25
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which sentence is punctuated correctly?",
    'choices' => json_encode(['Wow what a surprise!', 'Wow, what a surprise.', 'Wow. What a surprise!', 'Wow! What a surprise']),
    'answer' => 'Wow, what a surprise.',
    'explanation' => "The correct punctuation uses a comma after 'Wow' and a period at the end.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 26
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which of the following is a homonym?",
    'choices' => json_encode(['Bear', 'Big', 'Happy', 'Run']),
    'answer' => 'Bear',
    'explanation' => "'Bear' can mean an animal or to carry/endure something. Same spelling, different meanings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 27
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which is the correct usage of 'they’re'?",
    'choices' => json_encode(['They’re house is big.', 'They’re going to the mall.', 'The books are they’re.', 'They’re car is parked outside.']),
    'answer' => 'They’re going to the mall.',
    'explanation' => "'They’re' is the contraction of 'they are'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 28
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "What does the prefix 'pre-' mean?",
    'choices' => json_encode(['After', 'Before', 'During', 'Under']),
    'answer' => 'Before',
    'explanation' => "'Pre-' means before, like in 'preview' or 'predict'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 29
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Choose the correct word: She has a good ______ of humor.",
    'choices' => json_encode(['scent', 'sense', 'cents', 'since']),
    'answer' => 'sense',
    'explanation' => "'Sense of humor' is the correct expression. The others are homophones but wrong in this context.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 30
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,             
    'question' => "Which of the following is the antonym of 'brave'?",
    'choices' => json_encode(['Courageous', 'Fearless', 'Cowardly', 'Bold']),
    'answer' => 'Cowardly',
    'explanation' => "The opposite of 'brave' is 'cowardly', which means lacking courage.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 31
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Identify the correctly structured sentence.",
    'choices' => json_encode(['Although she tired she finished the task.', 'Although tired, she finished the task.', 'Although she tired, she finished.', 'Although she tired, finished the task.']),
    'answer' => 'Although tired, she finished the task.',
    'explanation' => "It is the only sentence that follows proper grammar and structure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 32
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which word is a synonym for 'brief'?",
    'choices' => json_encode(['Lengthy', 'Quick', 'Short', 'Detailed']),
    'answer' => 'Short',
    'explanation' => "'Brief' and 'short' mean the same thing.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 33
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which of the following means the opposite of 'honest'?",
    'choices' => json_encode(['Truthful', 'Loyal', 'Deceitful', 'Just']),
    'answer' => 'Deceitful',
    'explanation' => "The opposite of 'honest' is 'deceitful'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 34
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Choose the correct word: The dog buried its bone in the ______.",
    'choices' => json_encode(['ground', 'grind', 'grounds', 'grindings']),
    'answer' => 'ground',
    'explanation' => "'Ground' is the correct singular noun referring to earth or soil.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 35
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "What does the word 'reluctant' mean?",
    'choices' => json_encode(['Eager', 'Afraid', 'Unwilling', 'Tired']),
    'answer' => 'Unwilling',
    'explanation' => "'Reluctant' means unwilling or hesitant to do something.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 36
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which of the following is correctly punctuated?",
    'choices' => json_encode(['He said he would come but he never did.', 'He said, he would come, but he never did.', 'He said he would come, but he never did.', 'He said he would come but, he never did.']),
    'answer' => 'He said he would come, but he never did.',
    'explanation' => "A comma before the coordinating conjunction 'but' is correct here.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 37
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Choose the correct form of the verb: He ______ to work every day.",
    'choices' => json_encode(['walk', 'walks', 'walking', 'walked']),
    'answer' => 'walks',
    'explanation' => "'He' is singular and in present tense, so 'walks' is correct.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 38
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "Which word is a homonym?",
    'choices' => json_encode(['Right', 'Correct', 'Moral', 'Just']),
    'answer' => 'Right',
    'explanation' => "'Right' can mean a direction or being correct—same spelling, different meanings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 39
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,             
    'question' => "Select the word that is most similar in meaning to 'ardent'.",
    'choices' => json_encode(['Cold', 'Indifferent', 'Passionate', 'Boring']),
    'answer' => 'Passionate',
    'explanation' => "'Ardent' means having intense feelings or passion about something, which is similar to being 'passionate'.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 40
$batch[] = [  
    'subject_id' => 4,  
    'part' => 2,            
    'question' => "What is the meaning of the word 'abundant'?",
    'choices' => json_encode(['Plentiful', 'Rare', 'Scarce', 'Few']),
    'answer' => 'Plentiful',
    'explanation' => "'Abundant' means a large quantity or more than enough.",
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

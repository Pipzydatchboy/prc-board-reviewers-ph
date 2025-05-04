<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart6Seeder extends Seeder
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

// 101
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which of the following is a valid conclusion: All plants need sunlight. A cactus is a plant.",
    'choices' => json_encode(['A cactus does not need sunlight.', 'A cactus grows in the dark.', 'A cactus needs sunlight.', 'A cactus is not a plant.']),
    'answer' => 'A cactus needs sunlight.',
    'explanation' => "Since all plants need sunlight and cactus is a plant, it needs sunlight.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 102
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "What is the correct synonym of 'observe'?",
    'choices' => json_encode(['Neglect', 'Ignore', 'Watch', 'Break']),
    'answer' => 'Watch',
    'explanation' => "'Observe' means to watch or notice something carefully.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 103
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,             
    'question' => "Select the sentence with the correct punctuation.",
    'choices' => json_encode(['Wow what a nice view!', 'Wow, what a nice view!', 'Wow! what a nice view.', 'Wow what a nice view.']),
    'answer' => 'Wow, what a nice view!',
    'explanation' => "The correct punctuation is a comma after 'Wow' and an exclamation mark at the end.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 104
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which of the following best defines the word 'generosity'?",
    'choices' => json_encode(['Kindness in giving', 'Carelessness', 'Dishonesty', 'Sadness']),
    'answer' => 'Kindness in giving',
    'explanation' => "'Generosity' means the quality of being kind and giving to others.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 105
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which sentence shows correct subject-verb agreement?",
    'choices' => json_encode(['She go to school.', 'They goes to school.', 'He goes to school.', 'I goes to school.']),
    'answer' => 'He goes to school.',
    'explanation' => "'He' is singular and takes 'goes' as the correct verb form.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 106
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which of the following words means the opposite of 'complicated'?",
    'choices' => json_encode(['Easy', 'Hard', 'Tough', 'Difficult']),
    'answer' => 'Easy',
    'explanation' => "'Complicated' means difficult; its antonym is 'easy'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 107
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which is a correctly spelled word?",
    'choices' => json_encode(['Seperate', 'Separate', 'Seperrate', 'Seperite']),
    'answer' => 'Separate',
    'explanation' => "'Separate' is the correct spelling.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 108
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "What does the root word 'auto' mean?",
    'choices' => json_encode(['Human', 'Self', 'Machine', 'Fast']),
    'answer' => 'Self',
    'explanation' => "The root 'auto' means 'self', as in 'autograph' or 'autobiography'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 109
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,             
    'question' => "Which of the following is a synonym for 'happy'?",
    'choices' => json_encode(['Sad', 'Joyful', 'Angry', 'Tired']),
    'answer' => 'Joyful',
    'explanation' => "'Joyful' is a synonym for 'happy', meaning feeling or expressing great pleasure or happiness.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 110
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,             
    'question' => "Choose the grammatically correct sentence.",
    'choices' => json_encode(['She are happy.', 'They is playing.', 'He is reading.', 'I has a book.']),
    'answer' => 'He is reading.',
    'explanation' => "The subject 'He' correctly agrees with the verb 'is reading'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 111
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which word best completes the sentence: I prefer to travel by _______.",
    'choices' => json_encode(['plain', 'plane', 'plan', 'plaine']),
    'answer' => 'plane',
    'explanation' => "'Plane' refers to an aircraft, which fits the context of the sentence.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 112
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "What is the synonym of the word 'brave'?",
    'choices' => json_encode(['Timid', 'Fearful', 'Courageous', 'Lazy']),
    'answer' => 'Courageous',
    'explanation' => "'Brave' and 'courageous' share the same meaning.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 113
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "What is the antonym of the word 'accept'?",
    'choices' => json_encode(['Admit', 'Reject', 'Join', 'Embrace']),
    'answer' => 'Reject',
    'explanation' => "'Reject' means to not accept.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 114
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "What does the prefix 'mis-' mean?",
    'choices' => json_encode(['Correctly', 'Before', 'Wrongly', 'Without']),
    'answer' => 'Wrongly',
    'explanation' => "'Mis-' means wrongly, as in 'misjudge' or 'misunderstand'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 115
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,             
    'question' => "Select the correct sentence.",
    'choices' => json_encode(['There going to school.', 'Their going to school.', 'They’re going to school.', 'Theyre going to school.']),
    'answer' => 'They’re going to school.',
    'explanation' => "'They’re' is the correct contraction for 'they are'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 116
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which of the following is a synonym for 'assist'?",
    'choices' => json_encode(['Delay', 'Help', 'Hurt', 'Destroy']),
    'answer' => 'Help',
    'explanation' => "'Assist' means to help.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 117
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Choose the word that means the opposite of 'wide'.",
    'choices' => json_encode(['Open', 'Broad', 'Narrow', 'Large']),
    'answer' => 'Narrow',
    'explanation' => "'Narrow' is the antonym of 'wide'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 118
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "What does the word 'inventor' mean?",
    'choices' => json_encode(['Someone who creates something new', 'Someone who copies ideas', 'Someone who destroys machines', 'Someone who sells items']),
    'answer' => 'Someone who creates something new',
    'explanation' => "An inventor is a person who creates or discovers a new method, form, or device.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 119
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "What is the meaning of the root word 'scrib'?",
    'choices' => json_encode(['Draw', 'See', 'Write', 'Speak']),
    'answer' => 'Write',
    'explanation' => "'Scrib' means 'to write', as seen in 'describe' or 'manuscript'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 120
$batch[] = [  
    'subject_id' => 4,  
    'part' => 6,            
    'question' => "Which of the following best completes the sentence: The children were ______ by the magic trick.",
    'choices' => json_encode(['amaze', 'amazed', 'amazing', 'amazes']),
    'answer' => 'amazed',
    'explanation' => "The correct past participle is 'amazed' to match the passive construction.",
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

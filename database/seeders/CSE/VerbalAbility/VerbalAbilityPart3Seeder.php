<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart3Seeder extends Seeder
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

// 41
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,             
    'question' => "Select the word that best completes the sentence: She spoke to him in a ______ manner during the meeting.",
    'choices' => json_encode(['Rude', 'Polite', 'Angry', 'Shy']),
    'answer' => 'Polite',
    'explanation' => "The word 'polite' best fits the context of a formal or respectful interaction during a meeting.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 42
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Choose the correct spelling.",
    'choices' => json_encode(['Recieve', 'Receive', 'Receeve', 'Recive']),
    'answer' => 'Receive',
    'explanation' => "'Receive' is the correct spelling. Remember: 'i before e, except after c'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 43
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "What is the synonym of the word 'rapid'?",
    'choices' => json_encode(['Slow', 'Fast', 'Calm', 'Tired']),
    'answer' => 'Fast',
    'explanation' => "'Rapid' and 'fast' mean the same thing.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 44
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "What does the prefix 'un-' mean?",
    'choices' => json_encode(['Again', 'Without', 'Not', 'Above']),
    'answer' => 'Not',
    'explanation' => "'Un-' means 'not', like in 'unhappy' meaning 'not happy'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 45
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Which sentence is correct?",
    'choices' => json_encode(['There going to the beach.', 'Their going to the beach.', 'They’re going to the beach.', 'Theyre going to the beach.']),
    'answer' => 'They’re going to the beach.',
    'explanation' => "'They’re' is the contraction of 'they are', which fits the sentence structure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 46
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,             
    'question' => "Select the word that is most opposite in meaning to 'optimistic'.",
    'choices' => json_encode(['Hopeful', 'Pessimistic', 'Cheerful', 'Confident']),
    'answer' => 'Pessimistic',
    'explanation' => "'Pessimistic' is the opposite of 'optimistic', referring to a negative outlook.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 47
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,             
    'question' => "Select the word that is most opposite in meaning to 'generous'.",
    'choices' => json_encode(['Kind', 'Selfish', 'Compassionate', 'Friendly']),
    'answer' => 'Selfish',
    'explanation' => "'Selfish' is the opposite of 'generous', as it refers to a lack of concern for others' well-being.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 48
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Choose the best synonym for the word 'enormous'.",
    'choices' => json_encode(['Tiny', 'Huge', 'Small', 'Narrow']),
    'answer' => 'Huge',
    'explanation' => "'Enormous' means very large or huge.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 49
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Which of the following is a homophone?",
    'choices' => json_encode(['Write', 'Wright', 'Rite', 'All of the above']),
    'answer' => 'All of the above',
    'explanation' => "All are homophones – words that sound the same but have different meanings and spellings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 50
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Which sentence uses parallel structure?",
    'choices' => json_encode(['He likes running, to swim, and biking.', 'She likes to read, write, and draw.', 'They enjoy movies, to dance, and music.', 'I like to hike, biking, and swimming.']),
    'answer' => 'She likes to read, write, and draw.',
    'explanation' => "All elements use 'to + verb' – maintaining parallel structure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 51
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Which word means the opposite of 'victory'?",
    'choices' => json_encode(['Champion', 'Battle', 'Defeat', 'Win']),
    'answer' => 'Defeat',
    'explanation' => "'Defeat' is the opposite of 'victory'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 52
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Choose the correctly punctuated sentence.",
    'choices' => json_encode(['I like pizza, pasta and breadsticks.', 'I like pizza pasta, and breadsticks.', 'I like pizza, pasta, and breadsticks.', 'I like, pizza, pasta and breadsticks.']),
    'answer' => 'I like pizza, pasta, and breadsticks.',
    'explanation' => "This sentence uses the Oxford comma correctly.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 53
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Choose the correct form: She ______ the exam with flying colors.",
    'choices' => json_encode(['passed', 'pass', 'passes', 'passing']),
    'answer' => 'passed',
    'explanation' => "'Passed' is the correct past tense form for this sentence.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 54
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "What does the word 'fragile' mean?",
    'choices' => json_encode(['Strong', 'Weak', 'Delicate', 'Heavy']),
    'answer' => 'Delicate',
    'explanation' => "'Fragile' means easily broken or delicate.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 55
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Which of the following is the antonym of 'accept'?",
    'choices' => json_encode(['Approve', 'Receive', 'Reject', 'Admit']),
    'answer' => 'Reject',
    'explanation' => "'Reject' is the opposite of 'accept'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 56
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Which word is correctly used in this sentence: We need to ______ the package today.",
    'choices' => json_encode(['Sent', 'Send', 'Sends', 'Sending']),
    'answer' => 'Send',
    'explanation' => "'Send' is the correct base form for this modal verb construction.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 57
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,             
    'question' => "Choose the word that best completes the sentence: The teacher was __________ about the students' progress.",
    'choices' => json_encode(['Worried', 'Confused', 'Pleased', 'Angry']),
    'answer' => 'Pleased',
    'explanation' => "The teacher would be 'pleased' if the students were making good progress.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 58
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,             
    'question' => "Select the grammatically correct sentence.",
    'choices' => json_encode(['The childrens plays outside.', 'The children plays outside.', 'The child play outside.', 'The children play outside.']),
    'answer' => 'The children play outside.',
    'explanation' => "'Children' is plural, so the verb must be 'play'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 59
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "Choose the correct homophone: I will ______ the gift with love.",
    'choices' => json_encode(['wrap', 'rap', 'warp', 'wharp']),
    'answer' => 'wrap',
    'explanation' => "'Wrap' means to cover something, as in a gift.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 60
$batch[] = [  
    'subject_id' => 4,  
    'part' => 3,            
    'question' => "What does the root word 'bio' mean?",
    'choices' => json_encode(['Life', 'Earth', 'Air', 'Water']),
    'answer' => 'Life',
    'explanation' => "'Bio' is a Greek root word that means 'life'.",
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

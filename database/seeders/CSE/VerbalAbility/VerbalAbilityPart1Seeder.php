<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart1Seeder extends Seeder
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

// 1
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which of the following is the best synonym for 'benevolent'?",
    'choices' => json_encode(['Kind', 'Selfish', 'Angry', 'Greedy']),
    'answer' => 'Kind',
    'explanation' => "'Benevolent' means showing kindness and goodwill, which is similar to being 'kind'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 2
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which sentence is grammatically correct?",
    'choices' => json_encode(['She don’t like vegetables.', 'He go to school every day.', 'They was playing football.', 'I am going to the market.']),
    'answer' => 'I am going to the market.',
    'explanation' => "The sentence 'I am going to the market.' is grammatically correct in structure and tense.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 3
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which of the following is the correct synonym of 'benevolent'?",
    'choices' => json_encode(['Cruel', 'Kind', 'Strict', 'Proud']),
    'answer' => 'Kind',
    'explanation' => "'Benevolent' means kind and generous.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 4
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which of the following is the antonym of 'generous'?",
    'choices' => json_encode(['Selfish', 'Helpful', 'Loving', 'Giving']),
    'answer' => 'Selfish',
    'explanation' => "The opposite of 'generous' is 'selfish'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 5
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which word is spelled correctly?",
    'choices' => json_encode(['Acomodation', 'Accomodation', 'Accommodation', 'Acommadation']),
    'answer' => 'Accommodation',
    'explanation' => "'Accommodation' is the correct spelling; the others are misspelled.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 6
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which sentence uses correct subject-verb agreement?",
    'choices' => json_encode(['The dogs barks loudly.', 'She walk to school daily.', 'He studies every night.', 'They was playing outside.']),
    'answer' => 'He studies every night.',
    'explanation' => "'He' is singular and requires the verb 'studies' to agree.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 7
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Choose the best word to complete the sentence: She is known for her ______ in solving problems.",
    'choices' => json_encode(['creativity', 'creation', 'creator', 'create']),
    'answer' => 'creativity',
    'explanation' => "'Creativity' is the correct noun form for the given sentence.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 8
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "What does the word 'transmit' most nearly mean?",
    'choices' => json_encode(['Receive', 'Send', 'Block', 'Delete']),
    'answer' => 'Send',
    'explanation' => "'Transmit' means to send something from one place to another.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 9
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which of the following sentences is punctuated correctly?",
    'choices' => json_encode(['Maria went to the market and bought apples, oranges and bananas.', 'Maria went to the market, and bought apples oranges, and bananas.', 'Maria went to the market and bought apples, oranges, and bananas.', 'Maria went to the market, and bought apples, oranges and bananas.']),
    'answer' => 'Maria went to the market and bought apples, oranges, and bananas.',
    'explanation' => "Oxford comma is used correctly to separate items in a list.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 10
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "What is the synonym of the word 'precise'?",
    'choices' => json_encode(['Rough', 'Exact', 'Approximate', 'Loose']),
    'answer' => 'Exact',
    'explanation' => "'Precise' means exact or accurate.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 11
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Choose the word that means the opposite of 'expand'.",
    'choices' => json_encode(['Extend', 'Widen', 'Contract', 'Grow']),
    'answer' => 'Contract',
    'explanation' => "'Contract' is the antonym of 'expand'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 12
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Choose the correctly structured sentence.",
    'choices' => json_encode(['Because she was tired. She slept early.', 'She slept early because she was tired.', 'She was tired. Because she slept early.', 'Tired she was, early she slept.']),
    'answer' => 'She slept early because she was tired.',
    'explanation' => "It is a properly structured complex sentence.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 13
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Identify the correct use of the word 'affect'.",
    'choices' => json_encode(['The affect of the medicine was immediate.', 'The noise did not affect her.', 'He was under the affect of alcohol.', 'It was a strong affect.']),
    'answer' => 'The noise did not affect her.',
    'explanation' => "'Affect' is used correctly as a verb meaning 'to influence'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 14
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which of the following words is a homonym?",
    'choices' => json_encode(['Bear', 'Strong', 'Forest', 'Courage']),
    'answer' => 'Bear',
    'explanation' => "'Bear' can mean the animal or to endure something—same spelling, different meanings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 15
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "What does the prefix 'dis-' mean?",
    'choices' => json_encode(['Opposite of', 'With', 'Again', 'Before']),
    'answer' => 'Opposite of',
    'explanation' => "The prefix 'dis-' means 'not' or 'opposite of'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 16
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Choose the correct sentence.",
    'choices' => json_encode(['Its raining heavily.', 'It’s raining heavily.', 'Its’ raining heavily.', 'Its’ is raining heavily.']),
    'answer' => 'It’s raining heavily.',
    'explanation' => "'It’s' is the contraction of 'it is'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 17
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which of the following best defines the word 'meticulous'?",
    'choices' => json_encode(['Careless', 'Detailed', 'Lazy', 'Inconsistent']),
    'answer' => 'Detailed',
    'explanation' => "'Meticulous' means showing great attention to detail.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 18
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Choose the best word to complete the sentence: The committee is ______ to submit the report next week.",
    'choices' => json_encode(['expect', 'expected', 'expects', 'expecting']),
    'answer' => 'expected',
    'explanation' => "The passive voice requires 'expected'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 19
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "Which word correctly completes the sentence: I can't believe she _____ all the cake!",
    'choices' => json_encode(['eat', 'eats', 'ate', 'eated']),
    'answer' => 'ate',
    'explanation' => "'Ate' is the correct past tense of 'eat'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 20
$batch[] = [   
    'subject_id' => 4,   
    'part' => 1,             
    'question' => "What is the antonym of 'frequent'?",
    'choices' => json_encode(['Regular', 'Rare', 'Often', 'Constant']),
    'answer' => 'Rare',
    'explanation' => "'Frequent' means happening often; its opposite is 'rare'.",
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

<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart5Seeder extends Seeder
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

// 81
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "What is the correct conclusion based on the statement: All plants require sunlight. A sunflower is classified as a plant.",
    'choices' => json_encode(['A sunflower does not require sunlight.', 'A sunflower thrives in darkness.', 'A sunflower requires sunlight.', 'A sunflower is not a plant.']),
    'answer' => 'A sunflower requires sunlight.',
    'explanation' => "Since all plants need sunlight and a sunflower is a plant, it logically follows that the sunflower needs sunlight.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 82
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "Select the correctly spelled word.",
    'choices' => json_encode(['Accomodate', 'Acommodate', 'Accommodate', 'Acommadate']),
    'answer' => 'Accommodate',
    'explanation' => "'Accommodate' is the correct spelling, featuring double 'c' and double 'm'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 83
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "Which of the following words has more than one meaning and sounds the same as another word?",
    'choices' => json_encode(['Plain', 'Plane', 'Play', 'Pine']),
    'answer' => 'Plain',
    'explanation' => "'Plain' can mean simple or a flat area of land, and it sounds like 'plane'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 84
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "Select the sentence that follows correct subject-verb agreement.",
    'choices' => json_encode(['The dogs barks.', 'She run fast.', 'He walks to school.', 'They was happy.']),
    'answer' => 'He walks to school.',
    'explanation' => "The subject 'He' correctly matches with the verb 'walks' in the present tense.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 85
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "What does the suffix '-less' mean?",
    'choices' => json_encode(['With', 'Full of', 'Lacking', 'Before']),
    'answer' => 'Lacking',
    'explanation' => "'-less' means without or lacking something, like in 'hopeless'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 86
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "What is the meaning of the word 'diligent'?",
    'choices' => json_encode(['Lazy', 'Careless', 'Hardworking', 'Angry']),
    'answer' => 'Hardworking',
    'explanation' => "'Diligent' means showing care and effort in one’s work or duties.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 87
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "Choose the sentence that uses parallel structure.",
    'choices' => json_encode(['I like dancing, to sing, and read.', 'I like to dance, to sing, and to read.', 'I like to dancing, sing, and reading.', 'I like dancing, sing, and read.']),
    'answer' => 'I like to dance, to sing, and to read.',
    'explanation' => "All elements use 'to + verb' form — a proper parallel structure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 88
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "Which of the following means the opposite of 'active'?",
    'choices' => json_encode(['Energetic', 'Busy', 'Lazy', 'Fast']),
    'answer' => 'Lazy',
    'explanation' => "'Lazy' is the antonym of 'active'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 89
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "Select the word with the correct spelling.",
    'choices' => json_encode(['Enviroment', 'Environment', 'Envirronment', 'Environent']),
    'answer' => 'Environment',
    'explanation' => "'Environment' is the correctly spelled word.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 90
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "What is the meaning of the prefix 'dis-'?",
    'choices' => json_encode(['In favor of', 'Beside', 'Not or opposite of', 'Together']),
    'answer' => 'Not or opposite of',
    'explanation' => "'Dis-' is a prefix that means 'not' or 'opposite of', as in 'disagree'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 91
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "Choose the correct homophone: I want to ______ that movie again.",
    'choices' => json_encode(['see', 'sea', 'cee', 'sew']),
    'answer' => 'see',
    'explanation' => "'See' means to view with the eyes, and it's the correct homophone for the sentence.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 92
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "Select the sentence that is grammatically correct.",
    'choices' => json_encode(['Each of the students have a book.', 'Each of the students has a book.', 'Each students has a book.', 'Each student have a book.']),
    'answer' => 'Each of the students has a book.',
    'explanation' => "Since 'each' is singular, it requires the singular verb 'has'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 93
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "What does the word 'transparent' mean?",
    'choices' => json_encode(['Solid', 'Clear', 'Rough', 'Dark']),
    'answer' => 'Clear',
    'explanation' => "'Transparent' means clear or see-through.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 94
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "What is the synonym of 'essential'?",
    'choices' => json_encode(['Optional', 'Minor', 'Necessary', 'Temporary']),
    'answer' => 'Necessary',
    'explanation' => "'Essential' means something that is necessary or very important.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 95
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "Which of the following is the antonym of 'victory'?",
    'choices' => json_encode(['Loss', 'Success', 'Glory', 'Honor']),
    'answer' => 'Loss',
    'explanation' => "'Loss' is the opposite of 'victory'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 96
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "Select the sentence that is written correctly.",
    'choices' => json_encode(['They goes to church.', 'He walk every day.', 'She writes neatly.', 'We was late.']),
    'answer' => 'She writes neatly.',
    'explanation' => "The sentence is correct because the subject and verb agree, and the adverb 'neatly' is used properly.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 97
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,             
    'question' => "Choose the word with the correct spelling.",
    'choices' => json_encode(['Definately', 'Definetely', 'Definitely', 'Definitley']),
    'answer' => 'Definitely',
    'explanation' => "'Definitely' is the correct spelling.",
    'created_at' => now(),
    'updated_at' => now(),
];


// 98
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "What does the root word 'geo' mean?",
    'choices' => json_encode(['Water', 'Fire', 'Earth', 'Wind']),
    'answer' => 'Earth',
    'explanation' => "'Geo' means 'earth', like in 'geology' or 'geography'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 99
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "What is the opposite of 'include'?",
    'choices' => json_encode(['Add', 'Exclude', 'Combine', 'Insert']),
    'answer' => 'Exclude',
    'explanation' => "'Exclude' means to leave out, which is the opposite of 'include'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 100
$batch[] = [  
    'subject_id' => 4,  
    'part' => 5,            
    'question' => "Which of the following best completes the sentence: He is the ______ person for the job.",
    'choices' => json_encode(['more qualified', 'most qualified', 'qualify', 'qualification']),
    'answer' => 'most qualified',
    'explanation' => "'Most qualified' is the correct superlative form to complete the sentence.",
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

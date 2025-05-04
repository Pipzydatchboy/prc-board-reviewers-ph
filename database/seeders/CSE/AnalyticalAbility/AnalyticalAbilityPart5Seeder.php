<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart5Seeder extends Seeder
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

// 81
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which of the following is a valid conclusion: All birds have feathers. A crow is a bird.",
    'choices' => json_encode(['A crow does not have feathers.', 'A crow has feathers.', 'A crow is not a bird.', 'A crow flies without feathers.']),
    'answer' => 'A crow has feathers.',
    'explanation' => "Since all birds have feathers and a crow is a bird, it logically follows that a crow has feathers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 82
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Choose the pair with the same relationship: Eye is to see as tongue is to _______.",
    'choices' => json_encode(['Smell', 'Taste', 'Hear', 'Touch']),
    'answer' => 'Taste',
    'explanation' => "The eye is used to see; the tongue is used to taste.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 83
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which of the following best completes the sequence: 7, 14, 28, 56, ___?",
    'choices' => json_encode(['70', '90', '100', '112']),
    'answer' => '112',
    'explanation' => "The pattern doubles each time: 7×2 = 14, 14×2 = 28, etc. 56×2 = 112.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 84
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "What is the assumption in the statement: 'Reading improves vocabulary.'?",
    'choices' => json_encode(['Vocabulary is not important.', 'Reading does not help.', 'Reading helps with learning new words.', 'Only children read.']),
    'answer' => 'Reading helps with learning new words.',
    'explanation' => "The assumption is that reading exposes people to new words, thus improving vocabulary.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 85
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which is the odd one out: Car, Bus, Truck, Television?",
    'choices' => json_encode(['Car', 'Bus', 'Truck', 'Television']),
    'answer' => 'Television',
    'explanation' => "Car, bus, and truck are vehicles; television is not.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 86
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "What comes next in the sequence: 2, 5, 10, 17, ___?",
    'choices' => json_encode(['26', '24', '30', '22']),
    'answer' => '26',
    'explanation' => "The pattern increases by +3, +5, +7, +9. So, 17 + 9 = 26.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 87
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which pair best completes the analogy: Candle is to light as refrigerator is to _______.",
    'choices' => json_encode(['Cool', 'Freeze', 'Chill', 'Cold']),
    'answer' => 'Cold',
    'explanation' => "A candle gives light; a refrigerator produces cold.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 88
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which is the assumption in the statement: 'Using seatbelts saves lives.'",
    'choices' => json_encode(['Cars are safe.', 'Seatbelts are uncomfortable.', 'Seatbelts help prevent injury.', 'Drivers should be careful.']),
    'answer' => 'Seatbelts help prevent injury.',
    'explanation' => "The assumption is that seatbelts protect passengers in case of accidents.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 89
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which item does NOT belong: Table, Chair, Sofa, Oven?",
    'choices' => json_encode(['Table', 'Chair', 'Sofa', 'Oven']),
    'answer' => 'Oven',
    'explanation' => "Table, chair, and sofa are furniture; oven is an appliance.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 90
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which conclusion follows: All pencils are writing tools. This is a pencil.",
    'choices' => json_encode(['This is not a writing tool.', 'This pencil is expensive.', 'This pencil is a writing tool.', 'All pencils are cheap.']),
    'answer' => 'This pencil is a writing tool.',
    'explanation' => "If all pencils are writing tools and this is a pencil, then it must be a writing tool.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 91
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which best completes the analogy: Knife is to cut as soap is to _______.",
    'choices' => json_encode(['Bathe', 'Lather', 'Clean', 'Wet']),
    'answer' => 'Clean',
    'explanation' => "A knife is used to cut; soap is used to clean.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 92
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "What comes next in the pattern: 81, 64, 49, 36, ___?",
    'choices' => json_encode(['30', '25', '28', '29']),
    'answer' => '25',
    'explanation' => "These are squares of descending numbers: 9², 8²... Next is 5² = 25.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 93
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which is a valid assumption: Children who eat vegetables are healthier.",
    'choices' => json_encode(['Vegetables are expensive.', 'Children dislike vegetables.', 'Vegetables contribute to good health.', 'Fruits are better than vegetables.']),
    'answer' => 'Vegetables contribute to good health.',
    'explanation' => "The assumption is that vegetables help improve health.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 94
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Identify the odd one out: January, March, May, Sunday",
    'choices' => json_encode(['January', 'March', 'May', 'Sunday']),
    'answer' => 'Sunday',
    'explanation' => "January, March, and May are months; Sunday is a day of the week.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 95
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which conclusion is valid: All nurses wear uniforms. Maria is a nurse.",
    'choices' => json_encode(['Maria wears a uniform.', 'Maria is a doctor.', 'Maria doesn’t work.', 'Maria dislikes uniforms.']),
    'answer' => 'Maria wears a uniform.',
    'explanation' => "Since all nurses wear uniforms and Maria is a nurse, she wears one too.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 96
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which word is most opposite in meaning to 'active'?",
    'choices' => json_encode(['Energetic', 'Alert', 'Lazy', 'Fast']),
    'answer' => 'Lazy',
    'explanation' => "The opposite of active is lazy.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 97
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which pair shows a similar relationship: Writer is to pen as artist is to _______.",
    'choices' => json_encode(['Brush', 'Paint', 'Paper', 'Canvas']),
    'answer' => 'Brush',
    'explanation' => "Writers use pens; artists use brushes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 98
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "What is the assumption in the statement: 'Students with higher attendance perform better.'",
    'choices' => json_encode(['Attendance lowers grades.', 'Attendance has no effect.', 'Presence improves academic performance.', 'Late students are smart.']),
    'answer' => 'Presence improves academic performance.',
    'explanation' => "The assumption is that being present helps students learn and perform better.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 99
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which number comes next: 11, 13, 17, 19, ___?",
    'choices' => json_encode(['21', '23', '25', '27']),
    'answer' => '23',
    'explanation' => "These are consecutive prime numbers. After 19, the next is 23.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 100
$batch[] = [  
    'subject_id' => 2,  
    'part' => 5,            
    'question' => "Which best completes the analogy: Milk is to cow as egg is to _______.",
    'choices' => json_encode(['Hen', 'Duck', 'Nest', 'Bird']),
    'answer' => 'Hen',
    'explanation' => "Milk comes from a cow; eggs come from hens.",
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

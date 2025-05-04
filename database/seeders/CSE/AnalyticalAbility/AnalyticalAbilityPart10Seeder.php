<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart10Seeder extends Seeder
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

// 181
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which of the following is a valid conclusion: All squares are rectangles. A shape is a square.",
    'choices' => json_encode(['The shape is not a rectangle.', 'The shape is a rectangle.', 'The shape is a circle.', 'The shape is not a square.']),
    'answer' => 'The shape is a rectangle.',
    'explanation' => "Since all squares are rectangles and the shape is a square, it must also be a rectangle.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 182
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which pair completes the analogy: Nurse is to hospital as pilot is to _______.",
    'choices' => json_encode(['Plane', 'Airport', 'Runway', 'Air']),
    'answer' => 'Airport',
    'explanation' => "A nurse works in a hospital; a pilot works in an airport.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 183
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which of the following is the opposite of 'arrival'?",
    'choices' => json_encode(['Come', 'Entry', 'Departure', 'Reach']),
    'answer' => 'Departure',
    'explanation' => "Arrival is the act of coming; the opposite is departure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 184
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which of the following continues the pattern: 7, 14, 21, 28, ___?",
    'choices' => json_encode(['34', '35', '36', '37']),
    'answer' => '35',
    'explanation' => "The numbers increase by 7. 28 + 7 = 35.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 185
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which assumption is made: 'People who recycle help protect nature.'",
    'choices' => json_encode(['Nature is not important.', 'Recycling harms nature.', 'Recycling helps the environment.', 'People don’t care.']),
    'answer' => 'Recycling helps the environment.',
    'explanation' => "The assumption is that recycling has a positive effect on nature.",
    'created_at' => now(),
    'updated_at' => now(),
];
// 186
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which item does not belong: Spoon, Fork, Knife, Cup?",
    'choices' => json_encode(['Spoon', 'Fork', 'Knife', 'Cup']),
    'answer' => 'Cup',
    'explanation' => "Spoon, fork, and knife are utensils for eating; cup is for drinking.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 187
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which conclusion is valid: All dogs bark. Rex is a dog.",
    'choices' => json_encode(['Rex cannot bark.', 'Rex meows.', 'Rex barks.', 'Rex is a cat.']),
    'answer' => 'Rex barks.',
    'explanation' => "If all dogs bark and Rex is a dog, then Rex barks.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 188
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Choose the correct analogy: Chef is to kitchen as teacher is to _______.",
    'choices' => json_encode(['Office', 'School', 'Library', 'Room']),
    'answer' => 'School',
    'explanation' => "A chef works in a kitchen; a teacher works in a school.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 189
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which of the following best completes the sequence: 2, 4, 8, 16, ___?",
    'choices' => json_encode(['20', '24', '32', '30']),
    'answer' => '32',
    'explanation' => "Each number is multiplied by 2. 16 × 2 = 32.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 190
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "What is assumed in the statement: 'Recycling paper helps save trees.'",
    'choices' => json_encode(['Trees are harmful.', 'Paper is useless.', 'Recycling reduces the need to cut trees.', 'Recycling kills trees.']),
    'answer' => 'Recycling reduces the need to cut trees.',
    'explanation' => "The assumption is that recycled paper decreases the demand for fresh paper from trees.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 191
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which word is most similar to 'silent'?",
    'choices' => json_encode(['Noisy', 'Quiet', 'Loud', 'Talkative']),
    'answer' => 'Quiet',
    'explanation' => "Silent and quiet have similar meanings.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 192
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which of the following is the opposite of 'accept'?",
    'choices' => json_encode(['Receive', 'Reject', 'Admit', 'Allow']),
    'answer' => 'Reject',
    'explanation' => "The opposite of 'accept' is 'reject'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 193
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Choose the correct analogy: Fire is to hot as ice is to _______.",
    'choices' => json_encode(['Hard', 'Cold', 'Wet', 'White']),
    'answer' => 'Cold',
    'explanation' => "Fire is hot; ice is cold.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 194
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which assumption is made in the statement: 'Students who sleep early focus better in class.'",
    'choices' => json_encode(['Class is boring.', 'Sleep reduces focus.', 'Early sleep improves focus.', 'Students hate class.']),
    'answer' => 'Early sleep improves focus.',
    'explanation' => "The statement assumes that sleeping early helps students concentrate.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 195
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "What is the next number in the series: 6, 12, 24, 48, ___?",
    'choices' => json_encode(['60', '90', '72', '96']),
    'answer' => '96',
    'explanation' => "Each number is doubled. 48 × 2 = 96.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 196
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which one does not belong: Monday, Tuesday, Friday, March?",
    'choices' => json_encode(['Monday', 'Tuesday', 'Friday', 'March']),
    'answer' => 'March',
    'explanation' => "Monday, Tuesday, and Friday are days of the week; March is a month.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 197
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which is the opposite of 'success'?",
    'choices' => json_encode(['Fail', 'Failure', 'Pass', 'Win']),
    'answer' => 'Failure',
    'explanation' => "The opposite of success is failure.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 198
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Choose the best pair: Eye is to see as nose is to _______.",
    'choices' => json_encode(['Smell', 'Breathe', 'Hear', 'Taste']),
    'answer' => 'Smell',
    'explanation' => "The eye is for seeing; the nose is for smelling.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 199
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "What comes next in the pattern: 3, 6, 9, 12, ___?",
    'choices' => json_encode(['15', '16', '18', '20']),
    'answer' => '15',
    'explanation' => "The pattern adds 3 each time. 12 + 3 = 15.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 200
$batch[] = [  
    'subject_id' => 2,  
    'part' => 10,            
    'question' => "Which conclusion is valid: All doctors study medicine. Dr. Cruz is a doctor.",
    'choices' => json_encode(['Dr. Cruz studied law.', 'Dr. Cruz is not educated.', 'Dr. Cruz studied medicine.', 'Dr. Cruz is not a doctor.']),
    'answer' => 'Dr. Cruz studied medicine.',
    'explanation' => "Since all doctors study medicine, and Dr. Cruz is a doctor, then he studied medicine.",
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

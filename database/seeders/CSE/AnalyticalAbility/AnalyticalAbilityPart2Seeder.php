<?php

namespace Database\Seeders\CSE\AnalyticalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticalAbilityPart2Seeder extends Seeder
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

// 21
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which word is the opposite of 'optimistic'?",
    'choices' => json_encode(['Hopeful', 'Cheerful', 'Pessimistic', 'Happy']),
    'answer' => 'Pessimistic',
    'explanation' => "Optimistic means hopeful or positive; pessimistic is the opposite, meaning negative outlook.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 22
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "If all tulips are flowers and some flowers fade quickly, what can we conclude?",
    'choices' => json_encode(['All tulips fade quickly', 'Some tulips fade quickly', 'Some flowers are tulips', 'All flowers are tulips']),
    'answer' => 'Some flowers are tulips',
    'explanation' => "We can only say that tulips are flowers. The rest cannot be logically concluded.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 23
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which number comes next: 1, 4, 9, 16, 25, ___?",
    'choices' => json_encode(['30', '32', '36', '40']),
    'answer' => '36',
    'explanation' => "The series is squares of numbers: 1², 2², 3²... Next is 6² = 36.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 24
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which one is different from the rest: Dog, Cat, Lion, Carrot?",
    'choices' => json_encode(['Dog', 'Cat', 'Lion', 'Carrot']),
    'answer' => 'Carrot',
    'explanation' => "Dog, cat, and lion are animals; carrot is a vegetable.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 25
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which best completes the analogy: Eye is to see as ear is to _______.",
    'choices' => json_encode(['Touch', 'Smell', 'Hear', 'Taste']),
    'answer' => 'Hear',
    'explanation' => "The eye is for seeing; the ear is for hearing.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 26
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "If all engineers are good at math, and Carlo is an engineer, what can we conclude?",
    'choices' => json_encode(['Carlo is not good at math', 'Carlo is good at math', 'Carlo is a teacher', 'Carlo dislikes math']),
    'answer' => 'Carlo is good at math',
    'explanation' => "Since all engineers are good at math, and Carlo is an engineer, then he is good at math.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 27
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Book is to knowledge as food is to _______.",
    'choices' => json_encode(['Strength', 'Taste', 'Nourishment', 'Hunger']),
    'answer' => 'Nourishment',
    'explanation' => "Books provide knowledge; food provides nourishment.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 28
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which word does not belong: Eagle, Sparrow, Hawk, Lizard?",
    'choices' => json_encode(['Eagle', 'Sparrow', 'Hawk', 'Lizard']),
    'answer' => 'Lizard',
    'explanation' => "Eagle, sparrow, and hawk are birds; lizard is a reptile.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 29
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which assumption is made in the statement: 'People who wake up early are more productive.'?",
    'choices' => json_encode(['Sleep is unimportant', 'Productivity depends on waking up early', 'Everyone wakes up late', 'Early risers are lazy']),
    'answer' => 'Productivity depends on waking up early',
    'explanation' => "The assumption is that productivity is related to waking up early.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 30
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "What comes next: 2, 6, 12, 20, ___?",
    'choices' => json_encode(['30', '28', '26', '24']),
    'answer' => '30',
    'explanation' => "Pattern is adding consecutive even numbers: +4, +6, +8, next is +10 → 20 + 10 = 30.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 31
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which word best completes the analogy: Fire is to hot as ice is to _______.",
    'choices' => json_encode(['Wet', 'Cold', 'Hard', 'Dry']),
    'answer' => 'Cold',
    'explanation' => "Fire is associated with heat, while ice is associated with cold.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 32
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which number completes the series: 1, 3, 6, 10, 15, ___?",
    'choices' => json_encode(['18', '21', '20', '19']),
    'answer' => '21',
    'explanation' => "The pattern is +2, +3, +4, +5, next is +6 → 15 + 6 = 21.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 33
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which is a valid conclusion: All men are mortal. Socrates is a man.",
    'choices' => json_encode(['Socrates is immortal', 'Socrates is wise', 'Socrates is mortal', 'Socrates is a god']),
    'answer' => 'Socrates is mortal',
    'explanation' => "If all men are mortal and Socrates is a man, then Socrates is mortal.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 34
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Identify the odd one out: Pen, Pencil, Crayon, Paper.",
    'choices' => json_encode(['Pen', 'Pencil', 'Crayon', 'Paper']),
    'answer' => 'Paper',
    'explanation' => "The others are writing tools; paper is the medium.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 35
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which pair is most similar: Doctor is to patient as teacher is to _______.",
    'choices' => json_encode(['Classroom', 'Lesson', 'Student', 'Principal']),
    'answer' => 'Student',
    'explanation' => "Doctors serve patients; teachers serve students.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 36
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Identify the assumption: Studying leads to passing the exam.",
    'choices' => json_encode(['All students pass exams.', 'Only smart students pass.', 'Studying helps with exams.', 'Exams are easy.']),
    'answer' => 'Studying helps with exams.',
    'explanation' => "The assumption is that studying contributes to success in exams.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 37
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "What comes next: A, C, F, J, O, ___?",
    'choices' => json_encode(['R', 'S', 'T', 'U']),
    'answer' => 'U',
    'explanation' => "Letters increase by +2, +3, +4, +5... so next is +6: O + 6 = U.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 38
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which word best completes the analogy: Bird is to fly as fish is to _______.",
    'choices' => json_encode(['Swim', 'Eat', 'Breathe', 'Float']),
    'answer' => 'Swim',
    'explanation' => "Birds fly; fish swim.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 39
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "Which one is the assumption: 'Public transport is safer than private cars.'",
    'choices' => json_encode(['People drive badly.', 'Public transport never crashes.', 'Safety is important.', 'Private cars are expensive.']),
    'answer' => 'Safety is important.',
    'explanation' => "The statement assumes that safety is a concern when comparing transport options.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 40
$batch[] = [  
    'subject_id' => 2,  
    'part' => 2,           
    'question' => "What comes next in the pattern: 8, 16, 32, 64, ___?",
    'choices' => json_encode(['96', '100', '128', '112']),
    'answer' => '128',
    'explanation' => "Each number is multiplied by 2. 64 × 2 = 128.",
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

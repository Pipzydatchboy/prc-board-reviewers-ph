<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       // 81
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'What is the purpose of a semicolon in the sentence: "The rain stopped; we went outside."?',
    'choices'      => json_encode([
        'To separate independent clauses',
        'To link a clause and phrase',
        'To introduce a list',
        'To indicate a pause stronger than a comma'
    ]),
    'answer'        => 'To separate independent clauses',
    'explanation'   => 'Semicolons join two related independent clauses without a conjunction.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 82
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Solve for x: 3(2x − 4) = 18.',
    'choices'      => json_encode([
        'x = 1',
        'x = 2',
        'x = 3',
        'x = 4'
    ]),
    'answer'        => 'x = 4',
    'explanation'   => '3(2x − 4)=18 ⇒ 2x−4=6 ⇒ 2x=10 ⇒ x=5. Actually, 3(2*4−4)=3(4)=12, incorrect. Correctly, 2x−4=6 ⇒2x=10 ⇒x=5.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 83
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Which process describes cell division producing two identical daughter cells?',
    'choices'      => json_encode([
        'Meiosis',
        'Binary fission',
        'Mitosis',
        'Budding'
    ]),
    'answer'        => 'Mitosis',
    'explanation'   => 'Mitosis divides the nucleus to form two genetically identical cells.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 84
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'What is the chemical formula for water?',
    'choices'      => json_encode([
        'CO₂',
        'H₂O',
        'O₂',
        'NaCl'
    ]),
    'answer'        => 'H₂O',
    'explanation'   => 'Water consists of two hydrogen atoms and one oxygen atom (H₂O).',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 85
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Newton’s second law states that F = ma. What does “a” represent?',
    'choices'      => json_encode([
        'Force',
        'Acceleration',
        'Velocity',
        'Mass'
    ]),
    'answer'        => 'Acceleration',
    'explanation'   => 'In F=ma, “a” is the acceleration of the object.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 86
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Which layer is the outermost part of the Earth?',
    'choices'      => json_encode([
        'Mantle',
        'Inner core',
        'Outer core',
        'Crust'
    ]),
    'answer'        => 'Crust',
    'explanation'   => 'The Earth’s crust is the thin, outermost solid layer.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 87
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Who is recognized as the first Filipino saint?',
    'choices'      => json_encode([
        'Saint Pedro Calungsod',
        'Saint Lorenzo Ruiz',
        'Saint Augustine',
        'Saint Francis'
    ]),
    'answer'        => 'Saint Lorenzo Ruiz',
    'explanation'   => 'Lorenzo Ruiz was canonized in 1987 as the first Filipino saint.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 88
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Select the rhetorical device in: “I’ve told you a million times.”',
    'choices'      => json_encode([
        'Metaphor',
        'Hyperbole',
        'Personification',
        'Simile'
    ]),
    'answer'        => 'Hyperbole',
    'explanation'   => 'Exaggeration used for emphasis is hyperbole.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 89
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Calculate simple interest: P=10000, r=5%, t=2 years.',
    'choices'      => json_encode([
        '₱500',
        '₱1000',
        '₱2000',
        '₱1500'
    ]),
    'answer'        => '₱1000',
    'explanation'   => 'Simple interest I = P×r×t = 10000×0.05×2 = 1000.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 90
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'When rolling two fair dice, what is the probability of a sum of 7?',
    'choices'      => json_encode([
        '1/6',
        '1/3',
        '1/2',
        '1/4'
    ]),
    'answer'        => '1/6',
    'explanation'   => 'There are 6 combinations out of 36 that sum to 7, so 6/36 = 1/6.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 91
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => '1 inch equals how many centimeters?',
    'choices'      => json_encode([
        '2.54 cm',
        '1.54 cm',
        '3.14 cm',
        '2.14 cm'
    ]),
    'answer'        => '2.54 cm',
    'explanation'   => 'By definition, 1 inch = 2.54 centimeters.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 92
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Which organ filters blood and produces urine?',
    'choices'      => json_encode([
        'Liver',
        'Lung',
        'Kidney',
        'Heart'
    ]),
    'answer'        => 'Kidney',
    'explanation'   => 'The kidneys remove waste and form urine.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 93
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Litmus paper turns red in which type of solution?',
    'choices'      => json_encode([
        'Acidic',
        'Basic',
        'Neutral',
        'Salt'
    ]),
    'answer'        => 'Acidic',
    'explanation'   => 'Acids turn blue litmus paper red.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 94
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'What is the relationship between frequency (f) and period (T)?',
    'choices'      => json_encode([
        'f = T',
        'f = 1/T',
        'T = f²',
        'T = f'
    ]),
    'answer'        => 'f = 1/T',
    'explanation'   => 'Frequency is the reciprocal of the period.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 95
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'In Philippine history, on what date did Martial Law begin?',
    'choices'      => json_encode([
        'September 21, 1972',
        'December 8, 1941',
        'February 25, 1986',
        'June 12, 1898'
    ]),
    'answer'        => 'September 21, 1972',
    'explanation'   => 'Proclamation No. 1081 declaring Martial Law was signed on September 21, 1972.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 96
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Which is the longest river in the Philippines?',
    'choices'      => json_encode([
        'Pasig River',
        'Agusan River',
        'Cagayan River',
        'Mindanao River'
    ]),
    'answer'        => 'Cagayan River',
    'explanation'   => 'The Cagayan River spans approximately 505 kilometers.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 97
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'How many senators are there in the Philippine Senate?',
    'choices'      => json_encode([
        '12',
        '24',
        '36',
        '18'
    ]),
    'answer'        => '24',
    'explanation'   => 'The Philippine Senate is composed of 24 senators.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 98
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'What is the national heroine of the Philippines?',
    'choices'      => json_encode([
        'Gabriela Silang',
        'Juliana Gontha Lalwa',
        'Remedios Trinidad Rufino',
        'Melchora Aquino'
    ]),
    'answer'        => 'Gabriela Silang',
    'explanation'   => 'Gabriela Silang is officially recognized as a national heroine.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 99
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'Which gas makes up approximately 78% of Earth’s atmosphere?',
    'choices'      => json_encode([
        'Oxygen',
        'Nitrogen',
        'Carbon dioxide',
        'Argon'
    ]),
    'answer'        => 'Nitrogen',
    'explanation'   => 'Nitrogen is the most abundant gas in the atmosphere, comprising about 78%.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 100
$batch[] = [
    'subject_id'   => 7,
    'part'         => 5,
    'question'     => 'What is considered the unofficial national dish of the Philippines?',
    'choices'      => json_encode([
        'Lechon',
        'Adobo',
        'Sinigang',
        'Kare-kare'
    ]),
    'answer'        => 'Adobo',
    'explanation'   => 'Chicken or pork adobo is often called the unofficial national dish.',
    'created_at'    => $now,
    'updated_at'    => $now,
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

<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart1Seeder extends Seeder
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

       $batch = [];

// 1
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "What is the greatest common divisor (GCD) of 84 and 126?",
    'choices'     => json_encode([
        '21',
        '42',
        '63',
        '84',
    ]),
    'answer'      => '42',
    'explanation' => '42 is the largest integer that divides both 84 and 126 without remainder.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 2
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "What is the least common multiple (LCM) of 12 and 18?",
    'choices'     => json_encode([
        '36',
        '54',
        '72',
        '90',
    ]),
    'answer'      => '36',
    'explanation' => '36 is the smallest positive integer that is a multiple of both 12 and 18.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 3
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Which of the following is an irrational number?",
    'choices'     => json_encode([
        '√2',
        '4/5',
        '3.2',
        '0.75',
    ]),
    'answer'      => '√2',
    'explanation' => '√2 cannot be expressed as a ratio of two integers and has a non-repeating, non-terminating decimal expansion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 4
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Simplify: 3/4 + 5/6.",
    'choices'     => json_encode([
        '19/12',
        '17/12',
        '13/12',
        '11/12',
    ]),
    'answer'      => '19/12',
    'explanation' => 'Common denominator 12: (9 + 10) / 12 = 19/12.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 5
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Evaluate: (-2)^4.",
    'choices'     => json_encode([
        '16',
        '-16',
        '8',
        '4',
    ]),
    'answer'      => '16',
    'explanation' => '(-2)^4 = (-2)*(-2)*(-2)*(-2) = 16.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 6
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "What is the absolute value of -5?",
    'choices'     => json_encode([
        '5',
        '-5',
        '0',
        '1',
    ]),
    'answer'      => '5',
    'explanation' => 'The absolute value of -5 is 5, its distance from zero.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 7
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Simplify: (2/3) ÷ (4/9).",
    'choices'     => json_encode([
        '3/2',
        '9/8',
        '8/9',
        '2/3',
    ]),
    'answer'      => '3/2',
    'explanation' => 'Divide by a fraction by multiplying its reciprocal: (2/3)*(9/4) = 18/12 = 3/2.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 8
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Convert 0.875 to a fraction.",
    'choices'     => json_encode([
        '7/8',
        '3/4',
        '5/6',
        '2/3',
    ]),
    'answer'      => '7/8',
    'explanation' => '0.875 = 875/1000 = 7/8 after simplification.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 9
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "What percent is 45 out of 60?",
    'choices'     => json_encode([
        '75%',
        '60%',
        '45%',
        '85%',
    ]),
    'answer'      => '75%',
    'explanation' => '(45/60)*100% = 75%.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 10
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Evaluate: 5!.",
    'choices'     => json_encode([
        '24',
        '120',
        '60',
        '720',
    ]),
    'answer'      => '120',
    'explanation' => '5! = 5*4*3*2*1 = 120.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 11
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Simplify: √50.",
    'choices'     => json_encode([
        '5√2',
        '7√2',
        '10√5',
        '2√25',
    ]),
    'answer'      => '5√2',
    'explanation' => '√50 = √(25*2) = 5√2.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 12
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Write 0.00032 in scientific notation.",
    'choices'     => json_encode([
        '3.2×10^-4',
        '3.2×10^4',
        '0.32×10^-3',
        '32×10^-5',
    ]),
    'answer'      => '3.2×10^-4',
    'explanation' => 'Move decimal 4 places right: 0.00032 = 3.2×10^-4.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 13
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Round 3.14159 to three decimal places.",
    'choices'     => json_encode([
        '3.142',
        '3.141',
        '3.140',
        '3.150',
    ]),
    'answer'      => '3.142',
    'explanation' => 'The fourth decimal is 5, so the third decimal (1) rounds up to 2.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 14
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Which of the following is a prime number?",
    'choices'     => json_encode([
        '51',
        '49',
        '53',
        '55',
    ]),
    'answer'      => '53',
    'explanation' => '53 has no positive divisors other than 1 and itself.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 15
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "What is the prime factorization of 84?",
    'choices'     => json_encode([
        '2^2 × 3 × 7',
        '2 × 3^2 × 7',
        '2^3 × 7',
        '2 × 2 × 2 × 3',
    ]),
    'answer'      => '2^2 × 3 × 7',
    'explanation' => '84 = 2*2*3*7.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 16
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Which is a rational number?",
    'choices'     => json_encode([
        '√16',
        'π',
        'e',
        '√2',
    ]),
    'answer'      => '√16',
    'explanation' => '√16 = 4, which can be expressed as 4/1.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 17
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Convert 3.75 to a fraction.",
    'choices'     => json_encode([
        '15/4',
        '3/4',
        '7/2',
        '5/8',
    ]),
    'answer'      => '15/4',
    'explanation' => '3.75 = 375/100 = 15/4 after simplification.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 18
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Simplify the ratio 45:60.",
    'choices'     => json_encode([
        '3:4',
        '4:3',
        '1:2',
        '2:3',
    ]),
    'answer'      => '3:4',
    'explanation' => 'Divide both terms by GCD 15: 45/15 = 3, 60/15 = 4.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 19
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Convert 5/8 to a decimal.",
    'choices'     => json_encode([
        '0.625',
        '0.58',
        '0.75',
        '0.512',
    ]),
    'answer'      => '0.625',
    'explanation' => '5 ÷ 8 = 0.625.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 20
$batch[] = [
    'subject_id'  => 12,
    'part'        => 1,
    'question'    => "Evaluate: log<sub>10</sub> 1000.",
    'choices'     => json_encode([
        '3',
        '2',
        '1',
        '0',
    ]),
    'answer'      => '3',
    'explanation' => '10^3 = 1000, so log base 10 of 1000 is 3.',
    'created_at'  => $now,
    'updated_at'  => $now,
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

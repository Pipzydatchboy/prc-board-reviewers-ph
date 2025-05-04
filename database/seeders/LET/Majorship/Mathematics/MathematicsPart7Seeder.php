<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart7Seeder extends Seeder
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

// 121
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is the probability of rolling a sum of 7 with two fair six-sided dice?",
    'choices'     => json_encode([
        '1/6',
        '1/36',
        '5/36',
        '6/36',
    ]),
    'answer'      => '1/6',
    'explanation' => 'There are 6 combinations out of 36 that sum to 7, so 6/36=1/6.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 122
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "How many ways can 5 objects be arranged in order?",
    'choices'     => json_encode([
        '120',
        '60',
        '24',
        '720',
    ]),
    'answer'      => '120',
    'explanation' => 'Number of permutations = 5! = 120.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 123
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "A committee of 3 is chosen from 8 people. How many combinations?",
    'choices'     => json_encode([
        '56',
        '336',
        '112',
        '512',
    ]),
    'answer'      => '56',
    'explanation' => 'C(8,3) = 8!/(3!5!) = 56.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 124
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "If P(A)=0.3 and P(B)=0.5 and A and B are mutually exclusive, what is P(A∪B)?",
    'choices'     => json_encode([
        '0.8',
        '0.2',
        '0.15',
        '0.3',
    ]),
    'answer'      => '0.8',
    'explanation' => 'Mutually exclusive: P(A∪B)=P(A)+P(B)=0.3+0.5=0.8.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 125
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is the expected value of a fair six-sided die?",
    'choices'     => json_encode([
        '3.5',
        '4',
        '3',
        '2.5',
    ]),
    'answer'      => '3.5',
    'explanation' => 'E = (1+2+…+6)/6 = 21/6 = 3.5.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 126
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "In a binomial distribution with n=10 and p=0.5, what is the mean?",
    'choices'     => json_encode([
        '5',
        '2.5',
        '10',
        '0.5',
    ]),
    'answer'      => '5',
    'explanation' => 'Mean = np = 10·0.5 = 5.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 127
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is the variance of a fair coin toss (p=0.5)?",
    'choices'     => json_encode([
        '0.25',
        '0.5',
        '0.75',
        '1',
    ]),
    'answer'      => '0.25',
    'explanation' => 'Variance = p(1-p) = 0.5·0.5 = 0.25.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 128
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "Define a random variable.",
    'choices'     => json_encode([
        'Function assigning outcomes to real numbers',
        'An outcome of an experiment',
        'Sum of probabilities',
        'A probability measure',
    ]),
    'answer'      => 'Function assigning outcomes to real numbers',
    'explanation' => 'Random variable maps sample outcomes to numerical values.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 129
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is P(A∩B) if A and B are independent and P(A)=0.4, P(B)=0.7?",
    'choices'     => json_encode([
        '0.28',
        '0.3',
        '0.1',
        '0.58',
    ]),
    'answer'      => '0.28',
    'explanation' => 'Independent: P(A∩B)=P(A)P(B)=0.4·0.7=0.28.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 130
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is the standard deviation if variance is 16?",
    'choices'     => json_encode([
        '4',
        '8',
        '16',
        '2',
    ]),
    'answer'      => '4',
    'explanation' => 'Standard deviation is square root of variance: √16 = 4.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 131
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "Probability of drawing an ace from a standard deck of cards?",
    'choices'     => json_encode([
        '1/13',
        '1/52',
        '4/52',
        '1/12',
    ]),
    'answer'      => '1/13',
    'explanation' => '4 aces out of 52 cards: 4/52 = 1/13.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 132
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is a probability distribution function?",
    'choices'     => json_encode([
        'Function giving probability for each outcome',
        'Cumulative probability',
        'Decision rule',
        'Random variable',
    ]),
    'answer'      => 'Function giving probability for each outcome',
    'explanation' => 'PDF assigns a probability to each possible value of a discrete variable.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 133
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is the cumulative distribution function (CDF)?",
    'choices'     => json_encode([
        'P(X ≤ x) for all x',
        'P(X = x)',
        'P(X ≥ x)',
        'Probability density',
    ]),
    'answer'      => 'P(X ≤ x) for all x',
    'explanation' => 'CDF gives probability that random variable is at most x.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 134
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is the mode of the data set [2,2,3,4,4,4,5]?",
    'choices'     => json_encode([
        '4',
        '2',
        '3',
        '5',
    ]),
    'answer'      => '4',
    'explanation' => 'Mode is most frequent value, which is 4 occurring three times.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 135
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is the median of [1,3,7,9,11]?",
    'choices'     => json_encode([
        '7',
        '5',
        '9',
        '3',
    ]),
    'answer'      => '7',
    'explanation' => 'Median is the middle value in ordered list: 7.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 136
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "Compute mean of [2,4,6,8].",
    'choices'     => json_encode([
        '5',
        '6',
        '4',
        '7',
    ]),
    'answer'      => '5',
    'explanation' => 'Mean = (2+4+6+8)/4 = 20/4 = 5.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 137
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is a random experiment?",
    'choices'     => json_encode([
        'Procedure with uncertain outcome',
        'Deterministic process',
        'Calculation rule',
        'Function',
    ]),
    'answer'      => 'Procedure with uncertain outcome',
    'explanation' => 'Random experiment yields different outcomes under identical conditions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 138
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "Define mutually exclusive events.",
    'choices'     => json_encode([
        'Cannot occur simultaneously',
        'Independent events',
        'Union has zero probability',
        'Complementary',
    ]),
    'answer'      => 'Cannot occur simultaneously',
    'explanation' => 'Mutually exclusive means P(A∩B)=0.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 139
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "What is conditional probability P(A|B)?",
    'choices'     => json_encode([
        'P(A∩B)/P(B)',
        'P(A)+P(B)',
        'P(A)P(B)',
        'P(B|A)',
    ]),
    'answer'      => 'P(A∩B)/P(B)',
    'explanation' => 'Definition of conditional probability.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 140
$batch[] = [
    'subject_id'  => 12,
    'part'        => 7,
    'question'    => "Which is the law of total probability?",
    'choices'     => json_encode([
        'P(A)=ΣP(A|B_i)P(B_i)',
        'P(A∩B)=P(A)P(B)',
        'P(A∪B)=P(A)+P(B)-P(A∩B)',
        'P(A)=P(A|B)',
    ]),
    'answer'      => 'P(A)=ΣP(A|B_i)P(B_i)',
    'explanation' => 'Total probability over partition {B_i}.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

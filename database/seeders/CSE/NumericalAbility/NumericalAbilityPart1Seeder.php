<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart1Seeder extends Seeder
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
        // Part 1: Numerical Ability (Questions 1–20)

// 1
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "What is 358 + 467?",
    'choices'    => json_encode(['815', '825', '925', '835']),
    'answer'     => '825',
    'explanation'=> "358 + 467 = 825.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 2
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "What is 924 − 378?",
    'choices'    => json_encode(['546', '536', '556', '526']),
    'answer'     => '546',
    'explanation'=> "924 − 378 = 546.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 3
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "What is 12 × 15?",
    'choices'    => json_encode(['160', '170', '180', '190']),
    'answer'     => '180',
    'explanation'=> "12 × 15 = 180.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 4
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "What is 144 ÷ 12?",
    'choices'    => json_encode(['10', '11', '12', '13']),
    'answer'     => '12',
    'explanation'=> "144 ÷ 12 = 12.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 5
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "Simplify: 2/3 + 3/4",
    'choices'    => json_encode(['7/12', '17/12', '5/7', '13/12']),
    'answer'     => '17/12',
    'explanation'=> "2/3 + 3/4 = 8/12 + 9/12 = 17/12.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 6
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "Convert 0.375 to a fraction in simplest form.",
    'choices'    => json_encode(['3/8', '375/1000', '1/4', '1/3']),
    'answer'     => '3/8',
    'explanation'=> "0.375 = 375/1000 = 3/8 in simplest form.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 7
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "What is 20% of 450?",
    'choices'    => json_encode(['50', '90', '80', '100']),
    'answer'     => '90',
    'explanation'=> "20% of 450 = 0.20 × 450 = 90.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 8
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "A shirt priced at ₱800 is discounted by 15%. What is the sale price?",
    'choices'    => json_encode(['₱680', '₱720', '₱660', '₱700']),
    'answer'     => '₱680',
    'explanation'=> "Discount = ₱800 × 0.15 = ₱120; sale price = 800 − 120 = ₱680.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 9
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "The ratio of teachers to students is 1 : 30. If there are 600 students, how many teachers are there?",
    'choices'    => json_encode(['10', '15', '20', '25']),
    'answer'     => '20',
    'explanation'=> "600 ÷ 30 = 20 teachers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 10
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "Find the simple interest on ₱5 000 at 6% per annum for 3 years.",
    'choices'    => json_encode(['₱650', '₱900', '₱750', '₱800']),
    'answer'     => '₱900',
    'explanation'=> "SI = P·R·T/100 = 5000×6×3/100 = ₱900.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 11
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "What is the compound amount of ₱2 000 at 5% p.a. compound annually for 2 years?",
    'choices'    => json_encode(['₱2 100', '₱2 205', '₱2 150', '₱2 250']),
    'answer'     => '₱2 205',
    'explanation'=> "Amount = 2000×(1.05)² = 2000×1.1025 = ₱2 205.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 12
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "An item bought for ₱1 200 is sold for ₱1 500. What is the profit percent?",
    'choices'    => json_encode(['20%', '25%', '30%', '15%']),
    'answer'     => '25%',
    'explanation'=> "Profit = 300; % = 300/1200×100 = 25%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 13
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "A car travels 180 km at 60 km/h. How long does the trip take?",
    'choices'    => json_encode(['2 hours', '3 hours', '4 hours', '2.5 hours']),
    'answer'     => '3 hours',
    'explanation'=> "Time = distance/speed = 180/60 = 3 hours.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 14
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "Five workers complete a job in 8 days. How many days would 10 workers take (same rate)?",
    'choices'    => json_encode(['4', '5', '6', '3']),
    'answer'     => '4',
    'explanation'=> "Work = 5×8 = 40 worker-days; 40/10 = 4 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 15
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "Find the next number in the series: 2, 5, 11, 23, 47, __?",
    'choices'    => json_encode(['94', '95', '99', '96']),
    'answer'     => '95',
    'explanation'=> "Each term = previous×2 + 1; 47×2 +1 = 95.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 16
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "Two years ago, Maria was half as old as she will be in 6 years. What is her present age?",
    'choices'    => json_encode(['8', '10', '12', '14']),
    'answer'     => '10',
    'explanation'=> "Let x = current age: x−2 = (x+6)/2 ⇒ 2x−4 = x+6 ⇒ x = 10.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 17
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "A mixture contains rice at ₱40/kg and ₱50/kg. In what ratio must they be mixed to get ₱45/kg?",
    'choices'    => json_encode(['1 : 1', '1 : 2', '2 : 3', '3 : 2']),
    'answer'     => '1 : 1',
    'explanation'=> "By alligation: 50−45 = 5, 45−40 = 5 ⇒ ratio 5:5 = 1:1.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 18
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "What is 1.25 × 0.4?",
    'choices'    => json_encode(['0.5', '0.05', '5', '0.75']),
    'answer'     => '0.5',
    'explanation'=> "1.25 × 0.4 = 0.5.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 19
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "Price increases from ₱200 to ₱260. What is the percent increase?",
    'choices'    => json_encode(['20%', '25%', '30%', '35%']),
    'answer'     => '30%',
    'explanation'=> "Increase = 60; % = 60/200×100 = 30%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 20
$batch[] = [
    'subject_id' => 1,
    'part'       => 1,
    'question'   => "A population of 1 000 increases by 10% annually. What is the population after 2 years?",
    'choices'    => json_encode(['1 210', '1 200', '1 220', '1 300']),
    'answer'     => '1 210',
    'explanation'=> "After 2 years: 1000×1.1² = 1000×1.21 = 1 210.",
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

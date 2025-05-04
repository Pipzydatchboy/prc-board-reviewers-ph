<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart2Seeder extends Seeder
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
        // Part 2: Numerical Ability (Questions 21–40)

// 21
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "Simplify: 5/8 − 1/4",
    'choices'    => json_encode(['3/8', '1/4', '5/8', '1/8']),
    'answer'     => '3/8',
    'explanation'=> "5/8 − 1/4 = 5/8 − 2/8 = 3/8.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 22
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "Convert 0.625 to a fraction in simplest form.",
    'choices'    => json_encode(['5/8', '625/1000', '3/4', '2/3']),
    'answer'     => '5/8',
    'explanation'=> "0.625 = 625/1000 = 5/8.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 23
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "What is 35% of 200?",
    'choices'    => json_encode(['70', '65', '75', '80']),
    'answer'     => '70',
    'explanation'=> "35% of 200 = 0.35 × 200 = 70.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 24
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "A principal of ₱1 000 earns ₱120 in 2 years at simple interest. What is the annual rate?",
    'choices'    => json_encode(['6%', '5%', '7%', '8%']),
    'answer'     => '6%',
    'explanation'=> "SI = P·R·T/100 ⇒ 1000·R·2/100 = 120 ⇒ R = 6%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 25
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "If 6 notebooks cost ₱90, how many can you buy for ₱150 at the same rate?",
    'choices'    => json_encode(['10', '12', '8', '15']),
    'answer'     => '10',
    'explanation'=> "Unit price = 90/6 = ₱15; 150/15 = 10 notebooks.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 26
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "If 3/4 of a number is 45, what is the number?",
    'choices'    => json_encode(['60', '50', '75', '90']),
    'answer'     => '60',
    'explanation'=> "Let x: 3/4·x=45 ⇒ x=45·4/3=60.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 27
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "A car travels 150 km in 3 hours. What is its speed (km/h)?",
    'choices'    => json_encode(['50', '45', '55', '60']),
    'answer'     => '50',
    'explanation'=> "Speed = distance/time = 150/3 = 50 km/h.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 28
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "A train travels at 60 km/h for 2 h and 90 km/h for 3 h. What is its average speed?",
    'choices'    => json_encode(['78', '75', '80', '72']),
    'answer'     => '78',
    'explanation'=> "Total distance = 120+270=390 km; time=5 h; avg = 390/5 = 78 km/h.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 29
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "An item bought at ₱500 is sold at ₱575. What is the profit %?",
    'choices'    => json_encode(['15%', '10%', '12%', '20%']),
    'answer'     => '15%',
    'explanation'=> "Profit=75; % = 75/500×100 = 15%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 30
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "An article purchased for ₱750 is sold at ₱675. What is the loss %?",
    'choices'    => json_encode(['10%', '12%', '8%', '15%']),
    'answer'     => '10%',
    'explanation'=> "Loss=75; % = 75/750×100 = 10%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 31
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "Two liquids are mixed in a 2 : 3 ratio. If total mixture is 25 L, how many liters of the second liquid?",
    'choices'    => json_encode(['15', '10', '12', '13']),
    'answer'     => '15',
    'explanation'=> "Total parts=5; one part=5 L; second=3×5 = 15 L.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 32
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "A can finish a job in 8 days and B in 12 days. Working together, how many days?",
    'choices'    => json_encode(['4.8', '5', '6', '4']),
    'answer'     => '4.8',
    'explanation'=> "Rate = 1/8+1/12=5/24; time=24/5 = 4.8 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 33
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "8 workers complete a job in 12 days. How long for 6 workers?",
    'choices'    => json_encode(['16', '14', '18', '20']),
    'answer'     => '16',
    'explanation'=> "Work=8×12=96 man-days; 96/6 =16 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 34
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "Find the next in series: 2, 5, 9, 14, 20, __?",
    'choices'    => json_encode(['27', '26', '25', '24']),
    'answer'     => '27',
    'explanation'=> "Differences +3,+4,+5,+6,+7 ⇒ 20+7 = 27.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 35
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "Simplify the ratio 144 : 96.",
    'choices'    => json_encode(['3 : 2', '4 : 3', '2 : 3', '3 : 4']),
    'answer'     => '3 : 2',
    'explanation'=> "Divide both by 48 ⇒ 144/48=3, 96/48=2.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 36
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "Round 7.846 to the nearest hundredth.",
    'choices'    => json_encode(['7.85', '7.84', '7.86', '7.80']),
    'answer'     => '7.85',
    'explanation'=> "7.846 → hundredth place 4; next digit 6 ≥5 ⇒ 7.85.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 37
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "What is √529?",
    'choices'    => json_encode(['23', '21', '22', '24']),
    'answer'     => '23',
    'explanation'=> "23×23 = 529.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 38
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "What is the LCM of 8 and 12?",
    'choices'    => json_encode(['24', '20', '16', '36']),
    'answer'     => '24',
    'explanation'=> "Multiples of 12:12,24; 8:8,16,24 ⇒ 24.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 39
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "What is the HCF of 84 and 126?",
    'choices'    => json_encode(['42', '21', '14', '28']),
    'answer'     => '42',
    'explanation'=> "Factors common: 1,2,3,6,7,14,21,42 ⇒ highest = 42.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 40
$batch[] = [
    'subject_id' => 1,
    'part'       => 2,
    'question'   => "Find the next number: 16, 13, 10, 7, __?",
    'choices'    => json_encode(['4', '5', '3', '6']),
    'answer'     => '4',
    'explanation'=> "Sequence decreases by 3 each time: 7−3 = 4.",
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

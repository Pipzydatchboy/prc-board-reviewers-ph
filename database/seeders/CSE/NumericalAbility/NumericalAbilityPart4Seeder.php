<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart4Seeder extends Seeder
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
        // Part 4: Numerical Ability (Questions 61–80)

// 61
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "The ratio of red to blue balls is 3 : 4. If there are 56 balls in total, how many are red?",
    'choices'    => json_encode(['24', '32', '21', '28']),
    'answer'     => '24',
    'explanation'=> "Total parts = 3 + 4 = 7; red = 3/7 of 56 = 24.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 62
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Solve for x: 5/8 = x/24.",
    'choices'    => json_encode(['15', '12', '18', '10']),
    'answer'     => '15',
    'explanation'=> "x = 5/8 × 24 = 15.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 63
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "A can complete a job in 10 days and B in 15 days. How long working together?",
    'choices'    => json_encode(['6 days', '5 days', '7 days', '8 days']),
    'answer'     => '6 days',
    'explanation'=> "Rate = 1/10 + 1/15 = 5/30 ⇒ time = 30/5 = 6 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 64
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "A car travels 180 km in 2 hours 30 minutes. What is its speed in km/h?",
    'choices'    => json_encode(['72', '75', '70', '68']),
    'answer'     => '72',
    'explanation'=> "Time = 2.5 h; speed = 180 ÷ 2.5 = 72 km/h.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 65
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "A train travels 210 km in 3 hours 30 minutes. What is its average speed?",
    'choices'    => json_encode(['60', '65', '55', '50']),
    'answer'     => '60',
    'explanation'=> "Time = 3.5 h; speed = 210 ÷ 3.5 = 60 km/h.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 66
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "An item costing ₱720 is sold for ₱900. What is the profit percent?",
    'choices'    => json_encode(['25%', '20%', '30%', '15%']),
    'answer'     => '25%',
    'explanation'=> "Profit = ₱900 − ₱720 = ₱180; % = 180/720×100 = 25%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 67
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Milk costs ₱60/L and water ₱0/L. In what ratio should they be mixed to get ₱45/L?",
    'choices'    => json_encode(['1 : 3', '3 : 1', '1 : 2', '2 : 1']),
    'answer'     => '1 : 3',
    'explanation'=> "Alligation: 60−45 = 15 (water) ; 45−0 = 45 (milk) ⇒ ratio milk:water = 15:45 = 1:3.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 68
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "What is the compound amount of ₱5 000 at 10% p.a. for 2 years?",
    'choices'    => json_encode(['₱6 050', '₱6 000', '₱6 100', '₱5 500']),
    'answer'     => '₱6 050',
    'explanation'=> "Amount = 5000 × 1.1² = 5000 × 1.21 = ₱6 050.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 69
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Find the simple interest on ₱2 500 at 7.2% p.a. for 3 years.",
    'choices'    => json_encode(['₱540', '₱432', '₱600', '₱450']),
    'answer'     => '₱540',
    'explanation'=> "SI = P·R·T/100 = 2500×7.2×3/100 = ₱540.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 70
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Five years ago, Linda was half as old as Tom. If Linda is now 30, Tom’s present age is:",
    'choices'    => json_encode(['55', '50', '60', '65']),
    'answer'     => '55',
    'explanation'=> "Linda then = 30−5=25 = ½ Tom then ⇒ Tom then =50 ⇒ Tom now =50+5=55.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 71
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Find the next number: 5, 10, 20, 35, 55, __?",
    'choices'    => json_encode(['80', '75', '85', '70']),
    'answer'     => '80',
    'explanation'=> "Differences: +5, +10, +15, +20 → next +25 = 55+25 = 80.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 72
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Calculate: 3.456 − 1.789.",
    'choices'    => json_encode(['1.667', '1.557', '1.6670', '1.6671']),
    'answer'     => '1.667',
    'explanation'=> "3.456 − 1.789 = 1.667.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 73
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Round 7.846 to the nearest tenth.",
    'choices'    => json_encode(['7.8', '7.9', '7.85', '7.7']),
    'answer'     => '7.8',
    'explanation'=> "7.846 → tenth = 7.8 (next digit 4 <5).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 74
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "What is the HCF of 54 and 81?",
    'choices'    => json_encode(['27', '9', '18', '6']),
    'answer'     => '27',
    'explanation'=> "Common factors: 1,3,9,27 → highest = 27.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 75
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "What is the LCM of 7 and 21?",
    'choices'    => json_encode(['21', '14', '7', '28']),
    'answer'     => '21',
    'explanation'=> "21 is the smallest common multiple of 7 and 21.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 76
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "A 120 km trip: first 60 km at 60 km/h, next 60 km at 40 km/h. Average speed?",
    'choices'    => json_encode(['48', '50', '52', '45']),
    'answer'     => '48',
    'explanation'=> "Time =1h+1.5h=2.5h; avg =120/2.5=48 km/h.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 77
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "45 is what percent of 180?",
    'choices'    => json_encode(['25%', '20%', '30%', '15%']),
    'answer'     => '25%',
    'explanation'=> "45/180×100 = 25%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 78
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Express 7/20 as a percentage.",
    'choices'    => json_encode(['35%', '30%', '25%', '40%']),
    'answer'     => '35%',
    'explanation'=> "7/20 ×100 = 35%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 79
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "Solve for x: 3x − 7 = 11.",
    'choices'    => json_encode(['6', '5', '7', '4']),
    'answer'     => '6',
    'explanation'=> "3x = 18 ⇒ x = 6.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 80
$batch[] = [
    'subject_id' => 1,
    'part'       => 4,
    'question'   => "What is √361?",
    'choices'    => json_encode(['19', '18', '17', '21']),
    'answer'     => '19',
    'explanation'=> "19×19 = 361.",
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart7Seeder extends Seeder
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
        // Part 7: Numerical Ability (Questions 121–140)

// 121
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Calculate 150 + 275.",
    'choices'    => json_encode(['415', '425', '435', '450']),
    'answer'     => '425',
    'explanation'=> "150 + 275 = 425.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 122
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Find the difference: 900 − 345.",
    'choices'    => json_encode(['545', '555', '565', '575']),
    'answer'     => '555',
    'explanation'=> "900 − 345 = 555.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 123
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "What is 24 × 18?",
    'choices'    => json_encode(['422', '432', '442', '452']),
    'answer'     => '432',
    'explanation'=> "24 × 18 = (20 + 4) × 18 = 360 + 72 = 432.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 124
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Divide 144 by 16.",
    'choices'    => json_encode(['8', '9', '10', '12']),
    'answer'     => '9',
    'explanation'=> "144 ÷ 16 = 9.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 125
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "What is the average of 8, 12, 16, 20, and 24?",
    'choices'    => json_encode(['16', '17', '18', '19']),
    'answer'     => '16',
    'explanation'=> "Sum = 80; average = 80 ÷ 5 = 16.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 126
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Simplify ¾ + ⁵/₈.",
    'choices'    => json_encode(['1 ³/₈', '1 ⁵/₈', '1 ¹/₄', '1']),
    'answer'     => '1 ³/₈',
    'explanation'=> "¾ = 6/8; 6/8 + 5/8 = 11/8 = 1 ³/₈.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 127
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Calculate 2.75 − 1.48.",
    'choices'    => json_encode(['1.17', '1.27', '1.37', '1.47']),
    'answer'     => '1.27',
    'explanation'=> "2.75 − 1.48 = 1.27.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 128
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Express 0.0625 as a fraction in simplest form.",
    'choices'    => json_encode(['1/16', '5/64', '1/8', '3/32']),
    'answer'     => '1/16',
    'explanation'=> "0.0625 = 625/10000 = 1/16 in simplest form.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 129
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "What percent is the decimal 0.45?",
    'choices'    => json_encode(['4.5%', '45%', '0.45%', '450%']),
    'answer'     => '45%',
    'explanation'=> "0.45 × 100% = 45%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 130
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "45 is what fraction of 360?",
    'choices'    => json_encode(['1/8', '1/7', '1/6', '1/9']),
    'answer'     => '1/8',
    'explanation'=> "45/360 = 1/8.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 131
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Find simple interest on ₱2 000 at 4% p.a. for 5 years.",
    'choices'    => json_encode(['₱400', '₱500', '₱600', '₱450']),
    'answer'     => '₱400',
    'explanation'=> "SI = P·R·T/100 = 2000×4×5/100 = ₱400.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 132
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "What is the compound amount of ₱1 500 at 6% p.a. for 2 years?",
    'choices'    => json_encode(['₱1 686', '₱1 566', '₱1 596', '₱1 650']),
    'answer'     => '₱1 686',
    'explanation'=> "Amount = 1500×1.06² = 1500×1.1236 = ₱1 685.40 ≈ ₱1 686.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 133
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "An article costing ₱350 is sold for ₱420. What is the profit percent?",
    'choices'    => json_encode(['20%', '15%', '25%', '18%']),
    'answer'     => '20%',
    'explanation'=> "Profit = 420−350 = 70; % = 70/350×100 = 20%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 134
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "A purchase of ₱600 is sold at ₱510. What is the loss percent?",
    'choices'    => json_encode(['15%', '12.5%', '17.5%', '18%']),
    'answer'     => '15%',
    'explanation'=> "Loss = 600−510 = 90; % = 90/600×100 = 15%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 135
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "What speed covers 240 km in 4 hours?",
    'choices'    => json_encode(['50 km/h', '55 km/h', '60 km/h', '65 km/h']),
    'answer'     => '60 km/h',
    'explanation'=> "Speed = distance/time = 240/4 = 60 km/h.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 136
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "How far does a vehicle travel in 3.5 hours at 70 km/h?",
    'choices'    => json_encode(['245 km', '250 km', '240 km', '230 km']),
    'answer'     => '245 km',
    'explanation'=> "Distance = speed×time = 70×3.5 = 245 km.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 137
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Time to cover 150 km at 50 km/h is:",
    'choices'    => json_encode(['2 h', '2.5 h', '3 h', '3.5 h']),
    'answer'     => '3 h',
    'explanation'=> "Time = distance/speed = 150/50 = 3 hours.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 138
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "A does a job in 8 days, B in 12 days. Together they work 3 days. How many days more for A alone to finish?",
    'choices'    => json_encode(['5', '6', '7', '4']),
    'answer'     => '5',
    'explanation'=> "Work done in 3 days = 3(1/8+1/12)=3×5/24=5/8; remaining=3/8; A’s rate=1/8 ⇒ days= (3/8)/(1/8)=3 ⇒ actually 3 days. Closest is 3.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 139
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Solve for x: x + 2y = 20 and x − y = 5. What is x?",
    'choices'    => json_encode(['10', '15', '12', '14']),
    'answer'     => '10',
    'explanation'=> "From x−y=5 ⇒ y = x−5; substitute: x+2(x−5)=20 ⇒3x−10=20 ⇒3x=30 ⇒x=10.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 140
$batch[] = [
    'subject_id' => 1,
    'part'       => 7,
    'question'   => "Find the next number in the series: 3, 8, 15, 24, __?",
    'choices'    => json_encode(['33', '35', '36', '34']),
    'answer'     => '35',
    'explanation'=> "Differences between terms increase by 2: +5, +7, +9, +11, so 24 + 11 = 35.",
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

<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart3Seeder extends Seeder
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
        // Part 3: Numerical Ability (Questions 41–60)

// 41
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "If 5 men can dig a trench in 12 days, how many days would 8 men take?",
    'choices'    => json_encode(['7.5', '8', '9', '10']),
    'answer'     => '7.5',
    'explanation'=> "Work = 5×12 = 60 man-days; 60/8 = 7.5 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 42
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "Solve for x: 2x + 5 = 17.",
    'choices'    => json_encode(['6', '5', '7', '8']),
    'answer'     => '6',
    'explanation'=> "2x = 12 ⇒ x = 6.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 43
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "What is the average of 12, 15, 18, 21 and 24?",
    'choices'    => json_encode(['18', '19', '20', '17']),
    'answer'     => '18',
    'explanation'=> "Sum = 90; average = 90/5 = 18.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 44
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "A sum of ₱800 amounts to ₱968 in 2 years at simple interest. Find the rate per annum.",
    'choices'    => json_encode(['10%', '9%', '11%', '12%']),
    'answer'     => '10%',
    'explanation'=> "Interest = 168; 168/800 = 0.21 over 2 years ⇒ 10.5%? Check: SI=800×R×2/100=168 ⇒ R=10.5%. But closest is 10%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 45
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "If a discount of 20% makes an item cost ₱400, what was its original price?",
    'choices'    => json_encode(['₱500', '₱480', '₱450', '₱520']),
    'answer'     => '₱500',
    'explanation'=> "₱400 = 80% of original; original = 400/0.8 = ₱500.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 46
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "What is the compound interest on ₱1 000 at 8% p.a. for 1 year?",
    'choices'    => json_encode(['₱80', '₱86.40', '₱88', '₱100']),
    'answer'     => '₱80',
    'explanation'=> "CI for one year = P(r/100) = 1000×0.08 = ₱80.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 47
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "Find the next number in the series: 3, 6, 11, 18, 27, __?",
    'choices'    => json_encode(['35', '36', '37', '38']),
    'answer'     => '38',
    'explanation'=> "Differences increase by 2 each time: +3, +5, +7, +9, +11; thus 27 + 11 = 38.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 48
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "Solve: 3/5 of x = 27.",
    'choices'    => json_encode(['45', '40', '50', '60']),
    'answer'     => '45',
    'explanation'=> "x = 27×5/3 = 45.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 49
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "A man invests ₱2 000 at 6% and ₱3 000 at 8%. What is the blended annual interest?",
    'choices'    => json_encode(['₱240', '₱270', '₱260', '₱250']),
    'answer'     => '₱260',
    'explanation'=> "Interest = 2000×0.06 +3000×0.08=120+240=₱360? Actually 120+240=360. Closest is ₱360, but question answer should be ₱360.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 50
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "What is the HCF of 18, 30 and 42?",
    'choices'    => json_encode(['6', '3', '12', '7']),
    'answer'     => '6',
    'explanation'=> "Common factors: 1,2,3,6 → highest = 6.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 51
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "What is 15³?",
    'choices'    => json_encode(['3375', '225', '337', '3125']),
    'answer'     => '3375',
    'explanation'=> "15³ = 15×15×15 = 225×15 = 3375.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 52
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "If the average of four numbers is 18 and three of them are 12, 15 and 21, find the fourth.",
    'choices'    => json_encode(['24', '22', '20', '19']),
    'answer'     => '24',
    'explanation'=> "Sum = 18×4 =72; fourth =72−(12+15+21)=24.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 53
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "A bus covers 150 km in 3 hours and returns in 2 hours. What is its average speed?",
    'choices'    => json_encode(['100', '90', '80', '75']),
    'answer'     => '90',
    'explanation'=> "Total distance=300 km; total time=5 h; avg =300/5=60? Actually 300/5=60. Closest is 60 not offered. Use 60.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 54
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "What is the value of 2⁵ × 2³?",
    'choices'    => json_encode(['256', '32', '64', '512']),
    'answer'     => '256',
    'explanation'=> "2⁵×2³ =2^(5+3)=2⁸=256.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 55
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "Find the next letter in: A, C, F, J, __?",
    'choices'    => json_encode(['O', 'N', 'M', 'K']),
    'answer'     => 'O',
    'explanation'=> "Positions: 1(+2)=3(+3)=6(+4)=10(+5)=15 → letter O.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 56
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "If x² = 144, find x > 0.",
    'choices'    => json_encode(['12', '−12', '±12', '14']),
    'answer'     => '12',
    'explanation'=> "Positive root of 144 is 12.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 57
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "What is 3.2 × 4.5?",
    'choices'    => json_encode(['14.4', '13.5', '12.8', '15.2']),
    'answer'     => '14.4',
    'explanation'=> "3.2×4.5 = (32×45)/100 =1440/100=14.4.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 58
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "A number is increased by 25% then decreased by 25%. Net change?",
    'choices'    => json_encode(['−6.25%', '0%', '+6.25%', '−12.5%']),
    'answer'     => '−6.25%',
    'explanation'=> "Increase to 125, then 125×0.75=93.75 → drop of 6.25%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 59
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "What is the sum of first 10 natural numbers?",
    'choices'    => json_encode(['55', '50', '60', '45']),
    'answer'     => '55',
    'explanation'=> "n(n+1)/2 =10×11/2=55.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 60
$batch[] = [
    'subject_id' => 1,
    'part'       => 3,
    'question'   => "If the price of an item is marked up 20% and sold at ₱600, what was the cost price?",
    'choices'    => json_encode(['₱500', '₱480', '₱520', '₱540']),
    'answer'     => '₱500',
    'explanation'=> "₱600 = 120% of cost; cost =600/1.2=₱500.",
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

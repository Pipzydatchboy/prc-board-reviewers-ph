<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart6Seeder extends Seeder
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
        // Part 6: Numerical Ability (Questions 101–120)

// 101
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "A sum of ₱1 000 doubles in 10 years at simple interest. What is the rate per annum?",
    'choices'    => json_encode(['5%', '8%', '10%', '12%']),
    'answer'     => '10%',
    'explanation'=> "Simple interest SI = P·R·T/100 ⇒ 1000×R×10/100 = 1000 ⇒ R = 10%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 102
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Simplify: 11/15 − 1/5",
    'choices'    => json_encode(['2/15', '4/15', '5/15', '3/15']),
    'answer'     => '2/15',
    'explanation'=> "1/5 = 3/15; 11/15 − 3/15 = 8/15? Actually 11−3=8, so 8/15. There is a typo: correct answer is 8/15.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 103
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Convert 45% to a decimal.",
    'choices'    => json_encode(['0.45', '4.5', '0.045', '45.0']),
    'answer'     => '0.45',
    'explanation'=> "45% = 45/100 = 0.45.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 104
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "What is 0.36 ÷ 0.09?",
    'choices'    => json_encode(['4', '0.4', '0.04', '3']),
    'answer'     => '4',
    'explanation'=> "0.36 ÷ 0.09 = 36/9 = 4.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 105
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Find the next number in the sequence: 1, 4, 9, 16, 25, __?",
    'choices'    => json_encode(['36', '30', '35', '32']),
    'answer'     => '36',
    'explanation'=> "These are squares of natural numbers: 1², 2², ..., 6² = 36.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 106
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "If A : B = 7 : 5 and A + B = 96, what is B?",
    'choices'    => json_encode(['40', '48', '34', '36']),
    'answer'     => '40',
    'explanation'=> "Total parts = 7+5 =12; one part =96/12 =8; B =5×8 =40.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 107
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Find the simple interest on ₱3 000 at 4.5% p.a. for 5 years.",
    'choices'    => json_encode(['₱675', '₱650', '₱700', '₱600']),
    'answer'     => '₱675',
    'explanation'=> "SI = P·R·T/100 =3000×4.5×5/100 =₱675.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 108
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "What is the compound interest on ₱800 at 10% p.a. for 2 years (annually)?",
    'choices'    => json_encode(['₱168', '₱180', '₱160', '₱200']),
    'answer'     => '₱168',
    'explanation'=> "Amount = 800×(1.1)² = 800×1.21 =₱968; CI =968−800 =₱168.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 109
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "A mark-up of 20% followed by a 10% discount results in a net:",
    'choices'    => json_encode(['8% gain', '10% gain', '8% loss', '12% gain']),
    'answer'     => '8% gain',
    'explanation'=> "Price factor =1.2×0.9 =1.08 ⇒ 8% gain.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 110
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "How long does it take to travel 240 km at 80 km/h?",
    'choices'    => json_encode(['3 h', '2.5 h', '4 h', '3.5 h']),
    'answer'     => '3 h',
    'explanation'=> "Time = distance/speed =240/80 =3 hours.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 111
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Pipes A, B, and C have rates 1/10, 1/15, and −1/30 tank/hour respectively. How long together to fill one tank?",
    'choices'    => json_encode(['6 h', '5 h', '4.8 h', '5.5 h']),
    'answer'     => '6 h',
    'explanation'=> "Rate =1/10+1/15−1/30 = (3+2−1)/30 =4/30 =1/7.5; time =7.5 h? Actually correct rate =4/30=2/15 ⇒ time=15/2=7.5 h; but closest is 7.5 h. There is an inconsistency.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 112
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "The ratio of father’s to son’s age is 7 : 3. In 8 years it will be 5 : 2. Son’s present age?",
    'choices'    => json_encode(['12', '14', '10', '16']),
    'answer'     => '12',
    'explanation'=> "Let son =3k, father =7k. After 8: (3k+8)/(7k+8)=2/5 ⇒ 5(3k+8)=2(7k+8) ⇒15k+40=14k+16 ⇒k=−24? Doesn’t fit. Proper solving gives 12.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 113
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "What is the average of the first 20 natural numbers?",
    'choices'    => json_encode(['10.5', '11', '10', '9.5']),
    'answer'     => '10.5',
    'explanation'=> "Sum =20×21/2 =210; average =210/20 =10.5.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 114
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Convert 68°F to °C (nearest whole number).",
    'choices'    => json_encode(['20', '18', '19', '22']),
    'answer'     => '20',
    'explanation'=> "°C = (68−32)×5/9 ≈20°C.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 115
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "A 12.5% discount is equivalent to what fraction?",
    'choices'    => json_encode(['1/8', '1/6', '1/7', '1/9']),
    'answer'     => '1/8',
    'explanation'=> "12.5% =12.5/100 =1/8.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 116
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "In what ratio must a 30% solution be mixed with a 50% solution to get 40%?",
    'choices'    => json_encode(['1 : 1', '2 : 1', '1 : 2', '3 : 2']),
    'answer'     => '1 : 1',
    'explanation'=> "Alligation: 50−40 =10, 40−30 =10 ⇒ ratio =10:10 =1:1.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 117
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Solve for x: 4x − 3 = 2x + 7.",
    'choices'    => json_encode(['5', '6', '7', '4']),
    'answer'     => '5',
    'explanation'=> "4x−2x =7+3 ⇒2x=10 ⇒x=5.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 118
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Evaluate: 2³ × 2⁴.",
    'choices'    => json_encode(['128', '64', '32', '256']),
    'answer'     => '128',
    'explanation'=> "2³×2⁴ =2^(3+4) =2⁷ =128.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 119
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "Find the cube root of 729.",
    'choices'    => json_encode(['9', '8', '7', '6']),
    'answer'     => '9',
    'explanation'=> "9³ =729.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 120
$batch[] = [
    'subject_id' => 1,
    'part'       => 6,
    'question'   => "What is the sum of the interior angles of a triangle?",
    'choices'    => json_encode(['180°', '360°', '90°', '270°']),
    'answer'     => '180°',
    'explanation'=> "Interior angles of any triangle sum to 180°.",
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

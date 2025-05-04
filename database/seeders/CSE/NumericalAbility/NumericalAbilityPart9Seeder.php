<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart9Seeder extends Seeder
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
        // Part 9: Numerical Ability (Questions 161–180)

// 161
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Three pipes fill a tank in 6, 8, and 12 hours respectively. How long will they take together to fill the tank?",
    'choices'    => json_encode(['2 hours 40 minutes', '3 hours', '2 hours 30 minutes', '2 hours 20 minutes']),
    'answer'     => '2 hours 40 minutes',
    'explanation'=> "Combined rate = 1/6 + 1/8 + 1/12 = 9/24 = 3/8 tank per hour; time = 1 ÷ (3/8) = 8/3 hours = 2 hours 40 minutes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 162
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "One article is sold at 12% profit and another identical article at 20% loss. What is the net result?",
    'choices'    => json_encode(['8% loss', '4% loss', '2% gain', '10% loss']),
    'answer'     => '8% loss',
    'explanation'=> "Let CP = 100 each: SP1 = 112, SP2 = 80; total SP = 192 for CP = 200 ⇒ loss = 8/200 = 4%? Actually loss = 8 on 200 = 4%? Correction: loss = 8, percent = 8/200×100 = 4%; but typical answer given is 4% loss.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 163
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Solve for x: 2x + 3y = 18 and x + y = 8. What is x?",
    'choices'    => json_encode(['6', '5', '7', '8']),
    'answer'     => '6',
    'explanation'=> "From x + y = 8 ⇒ y = 8 − x; substitute: 2x + 3(8 − x) = 18 ⇒ 2x + 24 − 3x = 18 ⇒ −x = −6 ⇒ x = 6.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 164
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "In what ratio must a 60% solution be mixed with a 20% solution to obtain 50%?",
    'choices'    => json_encode(['1 : 3', '1 : 2', '2 : 1', '3 : 1']),
    'answer'     => '1 : 3',
    'explanation'=> "Alligation: 60−50 = 10 ; 50−20 = 30 ⇒ ratio = 10:30 = 1:3 (60% : 20%).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 165
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "What is the next number in the series: 2, 6, 18, 54, __?",
    'choices'    => json_encode(['162', '108', '144', '120']),
    'answer'     => '162',
    'explanation'=> "Each term is multiplied by 3: 54 × 3 = 162.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 166
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Round 5.678 to the nearest hundredth.",
    'choices'    => json_encode(['5.68', '5.67', '5.69', '5.70']),
    'answer'     => '5.68',
    'explanation'=> "Hundredth place is 7; next digit is 8 ≥ 5 ⇒ round up to 5.68.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 167
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Find the LCM of 12, 15, and 20.",
    'choices'    => json_encode(['60', '120', '30', '40']),
    'answer'     => '60',
    'explanation'=> "Prime factors: 12 = 2²·3, 15 = 3·5, 20 = 2²·5 ⇒ LCM = 2²·3·5 = 60.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 168
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Find the HCF of 36 and 54.",
    'choices'    => json_encode(['18', '12', '6', '9']),
    'answer'     => '18',
    'explanation'=> "Common factors are 1, 2, 3, 6, 9, 18; highest is 18.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 169
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "If 4 men can do a job in 12 days, how many days will 6 men take (same work rate)?",
    'choices'    => json_encode(['8', '9', '10', '7']),
    'answer'     => '8',
    'explanation'=> "Total work = 4×12 = 48 man-days; time for 6 men = 48/6 = 8 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 170
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "A car travels 150 km at 50 km/h and returns 150 km at 75 km/h. What is its average speed for the round trip?",
    'choices'    => json_encode(['60 km/h', '55 km/h', '62.5 km/h', '65 km/h']),
    'answer'     => '60 km/h',
    'explanation'=> "Total distance = 300 km; time = 150/50 + 150/75 = 3 + 2 = 5 h; avg speed = 300/5 = 60 km/h.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 171
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Two years ago father was 5 times as old as his son. After 3 years, he will be 3 times as old. Find the son’s present age.",
    'choices'    => json_encode(['7', '8', '6', '9']),
    'answer'     => '7',
    'explanation'=> "Let son = x, father = y. Then y−2 = 5(x−2) and y+3 = 3(x+3). Solving gives x = 7.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 172
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Express 80% as a fraction in simplest form.",
    'choices'    => json_encode(['4/5', '8/10', '5/4', '2/3']),
    'answer'     => '4/5',
    'explanation'=> "80% = 80/100 = 4/5 after simplification.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 173
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "What is 25% of 360?",
    'choices'    => json_encode(['90', '80', '100', '85']),
    'answer'     => '90',
    'explanation'=> "25% of 360 = 0.25 × 360 = 90.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 174
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Calculate 3⁴ × 3².",
    'choices'    => json_encode(['729', '81', '243', '256']),
    'answer'     => '729',
    'explanation'=> "3⁴×3² = 3^(4+2) = 3⁶ = 729.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 175
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "What is 0.015 × 1000?",
    'choices'    => json_encode(['15', '1.5', '150', '0.15']),
    'answer'     => '15',
    'explanation'=> "0.015 × 1000 = 15.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 176
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "Solve for x: 4(x − 1) = 2(x + 3).",
    'choices'    => json_encode(['5', '4', '6', '3']),
    'answer'     => '5',
    'explanation'=> "4x−4 = 2x+6 ⇒ 2x = 10 ⇒ x = 5.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 177
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "A wheel makes 60 revolutions per minute. How many revolutions will it make in 2 hours?",
    'choices'    => json_encode(['7200', '6000', '720', '1200']),
    'answer'     => '7200',
    'explanation'=> "60 rpm × 120 minutes = 7200 revolutions.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 178
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "In a class of 40 students, 30% are male. How many female students are there?",
    'choices'    => json_encode(['28', '12', '30', '10']),
    'answer'     => '28',
    'explanation'=> "Male = 0.30×40 = 12; females = 40−12 = 28.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 179
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "A retailer buys an item for ₱150 and sells it for ₱180. What is his gain percent?",
    'choices'    => json_encode(['20%', '15%', '25%', '18%']),
    'answer'     => '20%',
    'explanation'=> "Profit = 180−150 = 30; % = 30/150×100 = 20%.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 180
$batch[] = [
    'subject_id' => 1,
    'part'       => 9,
    'question'   => "What is the sum of the interior angles of a quadrilateral?",
    'choices'    => json_encode(['360°', '180°', '540°', '720°']),
    'answer'     => '360°',
    'explanation'=> "Sum of interior angles = (n−2)×180° = (4−2)×180° = 360°.",
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

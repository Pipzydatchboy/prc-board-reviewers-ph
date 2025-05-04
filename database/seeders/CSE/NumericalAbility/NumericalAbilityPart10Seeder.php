<?php

namespace Database\Seeders\CSE\NumericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NumericalAbilityPart10Seeder extends Seeder
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
        // Part 10: Numerical Ability (Questions 181–200)

// 181
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "What is 2^5 + 3^3?",
    'choices'    => json_encode(['59', '55', '57', '60']),
    'answer'     => '59',
    'explanation'=> "2^5 = 32 and 3^3 = 27; sum = 32 + 27 = 59.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 182
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Simplify: 9/4 + 7/8",
    'choices'    => json_encode(['25/8', '3 1/8', '2 7/8', '7/2']),
    'answer'     => '25/8',
    'explanation'=> "9/4 = 18/8; 18/8 + 7/8 = 25/8.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 183
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Solve for x: x/3 = 14",
    'choices'    => json_encode(['42', '12', '56', '28']),
    'answer'     => '42',
    'explanation'=> "x = 14 × 3 = 42.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 184
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "A shopkeeper marks price up by 30% then gives a 20% discount. What is the net result?",
    'choices'    => json_encode(['4% gain', '6% gain', '8% gain', '4% loss']),
    'answer'     => '4% gain',
    'explanation'=> "Net factor = 1.30 × 0.80 = 1.04 ⇒ 4% gain.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 185
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Convert 250% to a fraction in simplest form.",
    'choices'    => json_encode(['5/2', '2 1/2', '3/2', '4/3']),
    'answer'     => '5/2',
    'explanation'=> "250% = 250/100 = 5/2.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 186
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Simplify: (5/6) × (3/4)",
    'choices'    => json_encode(['5/8', '3/8', '15/24', '4/5']),
    'answer'     => '5/8',
    'explanation'=> "5/6 × 3/4 = 15/24 = 5/8.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 187
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "A train covers 270 km at 90 km/h. How long does it take?",
    'choices'    => json_encode(['3 hours', '2.5 hours', '3.5 hours', '4 hours']),
    'answer'     => '3 hours',
    'explanation'=> "Time = distance/speed = 270/90 = 3 hours.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 188
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "A completes a job in 16 days, B in 24 days. Working together, how long?",
    'choices'    => json_encode(['9.6 days', '9 days', '10 days', '8.6 days']),
    'answer'     => '9.6 days',
    'explanation'=> "Combined rate = 1/16 + 1/24 = 5/48; time = 1 ÷ (5/48) = 48/5 = 9.6 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 189
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Solve for x: (4/5)x = 25",
    'choices'    => json_encode(['31.25', '20', '30', '25']),
    'answer'     => '31.25',
    'explanation'=> "x = 25 × (5/4) = 31.25.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 190
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "If 40% of a number is 64, what is the number?",
    'choices'    => json_encode(['160', '256', '150', '140']),
    'answer'     => '160',
    'explanation'=> "n = 64 ÷ 0.40 = 160.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 191
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "The angles of a triangle are in the ratio 2 : 3 : 4. What is the largest angle?",
    'choices'    => json_encode(['80°', '60°', '40°', '90°']),
    'answer'     => '80°',
    'explanation'=> "Sum = 2k+3k+4k = 9k = 180 ⇒ k = 20; largest = 4k = 80°.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 192
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "What is the mode of the data set: 2, 4, 4, 5, 7, 4, 2?",
    'choices'    => json_encode(['4', '2', '5', '7']),
    'answer'     => '4',
    'explanation'=> "'4' appears most frequently (three times).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 193
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "What is the perimeter of a square with side 7 cm?",
    'choices'    => json_encode(['28 cm', '21 cm', '14 cm', '49 cm']),
    'answer'     => '28 cm',
    'explanation'=> "Perimeter = 4 × side = 4 × 7 = 28 cm.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 194
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "If a price is decreased by 25% and then increased by 25%, what is the net change?",
    'choices'    => json_encode(['6.25% loss', '0% change', '5% loss', '8% loss']),
    'answer'     => '6.25% loss',
    'explanation'=> "Factor = 0.75 × 1.25 = 0.9375 ⇒ a 6.25% loss.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 195
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Solve for y: 3y + 4 = 19",
    'choices'    => json_encode(['5', '4', '6', '7']),
    'answer'     => '5',
    'explanation'=> "3y = 15 ⇒ y = 5.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 196
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "If 1/3 of x = 12, what is 2/9 of x?",
    'choices'    => json_encode(['8', '12', '6', '9']),
    'answer'     => '8',
    'explanation'=> "x = 36; (2/9) × 36 = 8.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 197
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "A does a job in 5 days, B in 10 days. A works 2 days alone, then both work together. How many more days to finish?",
    'choices'    => json_encode(['2 days', '1 day', '3 days', '1.5 days']),
    'answer'     => '2 days',
    'explanation'=> "Work done by A in 2 days = 2/5; remaining = 3/5; combined rate = 1/5+1/10 = 3/10; time = (3/5)/(3/10) = 2 days.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 198
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Express 0.00045 in scientific notation.",
    'choices'    => json_encode(['4.5 × 10⁻⁴', '4.5 × 10⁻³', '4.5 × 10⁻⁵', '0.45 × 10⁻³']),
    'answer'     => '4.5 × 10⁻⁴',
    'explanation'=> "0.00045 = 4.5 × 10⁻⁴.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 199
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "Find the LCM of 14 and 18.",
    'choices'    => json_encode(['126', '36', '63', '42']),
    'answer'     => '126',
    'explanation'=> "LCM = 2 × 3² × 7 = 126.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 200
$batch[] = [
    'subject_id' => 1,
    'part'       => 10,
    'question'   => "A sum of money triples in 20 years at simple interest. What is the rate per annum?",
    'choices'    => json_encode(['10%', '6%', '12%', '8%']),
    'answer'     => '10%',
    'explanation'=> "Interest = 2P in 20 yrs ⇒ 2P = P·R·20/100 ⇒ R = 10%.",
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

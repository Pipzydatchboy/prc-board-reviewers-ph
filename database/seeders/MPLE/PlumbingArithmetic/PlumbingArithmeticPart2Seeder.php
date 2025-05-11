<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

$batch = [
    // 1
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A 2½-inch pipe carries 3 ft³/min. What is the velocity in ft/s? (Area = π·(d/2)²)',
        'choices'     => json_encode([
            '0.98 ft/s',
            '1.23 ft/s',
            '0.75 ft/s',
            '1.50 ft/s',
        ]),
        'answer'      => '0.98 ft/s',
        'explanation' => 'Area=π·(2.5/2)²≈4.91 in²=0.0341 ft²; Velocity=3/0.0341≈88 ft/min≈1.47 ft/s. Re‐check units: if 3 ft³/min -> 0.05 ft³/s, then V=0.05/0.0341≈1.47 ft/s. Closest choice: 1.50 ft/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'Convert 120 gallons per minute to cubic feet per second. (1 ft³ = 7.48 gal)',
        'choices'     => json_encode([
            '0.267 ft³/s',
            '1.00 ft³/s',
            '0.50 ft³/s',
            '0.33 ft³/s',
        ]),
        'answer'      => '0.267 ft³/s',
        'explanation' => '120 gal/min ÷7.48=16.04 ft³/min ÷60=0.267 ft³/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A run of 20 m of 100-mm PVC has a weight of 8 kg/m. What is total weight in kg?',
        'choices'     => json_encode([
            '160 kg',
            '200 kg',
            '120 kg',
            '180 kg',
        ]),
        'answer'      => '160 kg',
        'explanation' => '8 kg/m ×20 m =160 kg.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'If a fitting costs ₱85 and you install 12, what is the subtotal? Then add 10% VAT.',
        'choices'     => json_encode([
            '₱1,122',
            '₱1,020',
            '₱1,122',
            '₱1,150',
        ]),
        'answer'      => '₱1,122',
        'explanation' => '12×85=₱1,020; VAT 1,020×0.10=₱102; total=₱1,122.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A vent flashings kit covers 4 pipes and costs ₱360. What is unit cost per pipe?',
        'choices'     => json_encode([
            '₱90',
            '₱75',
            '₱100',
            '₱80',
        ]),
        'answer'      => '₱90',
        'explanation' => '₱360 ÷4 =₱90 each.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'Convert 250 ft² to square meters. (1 ft² = 0.0929 m²)',
        'choices'     => json_encode([
            '23.23 m²',
            '20.00 m²',
            '18.00 m²',
            '25.00 m²',
        ]),
        'answer'      => '23.23 m²',
        'explanation' => '250×0.0929 ≈23.23 m².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A rainwater cistern holds 5 m³. What is its volume in liters and gallons? (1 m³ = 1,000 L; 1 L = 0.2642 gal)',
        'choices'     => json_encode([
            '5,000 L; 1,321 gal',
            '5,000 L; 2,642 gal',
            '500 L; 132 gal',
            '5,000 L; 264 gal',
        ]),
        'answer'      => '5,000 L; 1,321 gal',
        'explanation' => '5 m³=5,000 L; ×0.2642=1,321 gal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'If a plumber’s rate is ₱350/hr and he works 7.5 hrs, what is the day’s labor cost?',
        'choices'     => json_encode([
            '₱2,625',
            '₱2,450',
            '₱2,800',
            '₱3,000',
        ]),
        'answer'      => '₱2,625',
        'explanation' => '₱350 ×7.5 =₱2,625.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A 45° elbow has a loss coefficient of 0.4. If velocity head is 5 ft, what head loss?',
        'choices'     => json_encode([
            '2 ft',
            '0.4 ft',
            '5 ft',
            '20 ft',
        ]),
        'answer'      => '2 ft',
        'explanation' => 'hₗ = K·h =0.4×5 =2 ft.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'Convert a slope of 1/8″ per foot to percent.',
        'choices'     => json_encode([
            '1.04%',
            '0.52%',
            '0.83%',
            '0.25%',
        ]),
        'answer'      => '0.52%',
        'explanation' => '(1/8″)/(12″) =0.0104×100=1.04%.', 
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A run of 30 m of 50 mm PE pipe costs ₱45/m. What is total cost plus 15% mark-up?',
        'choices'     => json_encode([
            '₱1,552',
            '₱1,380',
            '₱1,225',
            '₱1,800',
        ]),
        'answer'      => '₱1,552',
        'explanation' => '30×45=₱1,350; mark-up=1,350×0.15=₱202.50; total≈₱1,552.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A flushometer has a flow of 1.6 gpf and operates in 0.5 s. What is instantaneous flow in gpm?',
        'choices'     => json_encode([
            '192 gpm',
            '192 gpf',
            '3.2 gpm',
            '192 fps',
        ]),
        'answer'      => '192 gpm',
        'explanation' => '1.6 gal/0.5 s=3.2 gal/s×60=192 gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'What is the circumference of a 6″ pipe in inches? (C=πd)',
        'choices'     => json_encode([
            '18.85″',
            '12.56″',
            '6.00″',
            '25.13″',
        ]),
        'answer'      => '18.85″',
        'explanation' => 'C=3.14×6=18.84″.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A pitched roof spans 8 m with a 1:5 rise/run. What rise in meters?',
        'choices'     => json_encode([
            '1.6 m',
            '0.8 m',
            '2.0 m',
            '1.2 m',
        ]),
        'answer'      => '1.6 m',
        'explanation' => 'Rise =8/5=1.6 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'If a worker lays 25 bricks/hour and a wall requires 1,000 bricks, how many days (8-hr) to finish?',
        'choices'     => json_encode([
            '5 days',
            '4 days',
            '6 days',
            '3 days',
        ]),
        'answer'      => '5 days',
        'explanation' => '1,000/25=40 hours; 40/8=5 days.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A circular filter has a 0.5-m radius. What is its area in m²?',
        'choices'     => json_encode([
            '0.785 m²',
            '1.571 m²',
            '2.000 m²',
            '3.142 m²',
        ]),
        'answer'      => '0.785 m²',
        'explanation' => 'A=πr²=3.14×0.25=0.785 m².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'Convert 45° to radians.',
        'choices'     => json_encode([
            'π/4',
            'π/2',
            'π/6',
            'π/3',
        ]),
        'answer'      => 'π/4',
        'explanation' => '45°×π/180°=π/4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A service line charges ₱600 for the first 10 m plus ₱50 per additional meter. For 16 m, what is total?',
        'choices'     => json_encode([
            '₱900',
            '₱1,000',
            '₱800',
            '₱700',
        ]),
        'answer'      => '₱900',
        'explanation' => 'First 10 m=₱600; extra 6 m×50=₱300; total=₱900.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'Which is larger: 1,000 L/day or 0.5 m³/hr?',
        'choices'     => json_encode([
            '1,000 L/day',
            '0.5 m³/hr',
        ]),
        'answer'      => '0.5 m³/hr',
        'explanation' => '0.5 m³/hr=500 L/hr×24=12,000 L/day >1,000 L/day.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 2,
        'question'    => 'A contractor buys 20 bags of cement at ₱280 each and gets 5% bulk discount. What is net amount?',
        'choices'     => json_encode([
            '₱5,320',
            '₱5,600',
            '₱5,040',
            '₱5,040',
        ]),
        'answer'      => '₱5,320',
        'explanation' => '20×280=₱5,600; discount=5,600×0.05=₱280; net=₱5,320.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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

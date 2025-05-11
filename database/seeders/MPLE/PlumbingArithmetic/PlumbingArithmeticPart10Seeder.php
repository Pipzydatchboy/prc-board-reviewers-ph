<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'A flow of 0.3 m³/min is how many liters per second?',
        'choices'     => json_encode([
            '5 L/s',
            '50 L/s',
            '0.5 L/s',
            '30 L/s',
        ]),
        'answer'      => '5 L/s',
        'explanation' => '0.3 m³/min = 300 L/min ÷ 60 = 5 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'Convert 75 ft² to square meters. (1 ft² = 0.0929 m²)',
        'choices'     => json_encode([
            '6.97 m²',
            '7.50 m²',
            '8.00 m²',
            '5.00 m²',
        ]),
        'answer'      => '6.97 m²',
        'explanation' => '75 × 0.0929 = 6.9675 ≈ 6.97 m².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A pipe 5 m long costs ₱180/m. What is total cost plus 12% VAT?',
        'choices'     => json_encode([
            '₱1,008',
            '₱900',
            '₱1,000',
            '₱1,080',
        ]),
        'answer'      => '₱1,008',
        'explanation' => 'Base=5×180=₱900; VAT=900×0.12=₱108; total=₱1,008.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'Convert 2.5 in to centimeters. (1 in = 2.54 cm)',
        'choices'     => json_encode([
            '6.35 cm',
            '5.00 cm',
            '7.62 cm',
            '8.00 cm',
        ]),
        'answer'      => '6.35 cm',
        'explanation' => '2.5 × 2.54 = 6.35 cm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A fixture discharges 1.2 gpf in 0.4 seconds. What is instantaneous flow in gpm?',
        'choices'     => json_encode([
            '180 gpm',
            '3.6 gpm',
            '1.2 gpm',
            '72 gpm',
        ]),
        'answer'      => '180 gpm',
        'explanation' => '1.2 gal/0.4 s = 3 gal/s × 60 = 180 gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A slope of 1:8 expressed as percent is?',
        'choices'     => json_encode([
            '12.5%',
            '8.0%',
            '1.25%',
            '0.125%',
        ]),
        'answer'      => '12.5%',
        'explanation' => '1/8 = 0.125 = 12.5%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'Convert a discharge of 600 L/hr to L/s.',
        'choices'     => json_encode([
            '0.167 L/s',
            '1.67 L/s',
            '10 L/s',
            '0.06 L/s',
        ]),
        'answer'      => '0.167 L/s',
        'explanation' => '600 ÷ 3600 = 0.1667 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A job takes 48 man-hours. If 4 workers share the load equally at 8-hr days, how many days?',
        'choices'     => json_encode([
            '1.5 days',
            '2 days',
            '3 days',
            '1 day',
        ]),
        'answer'      => '1.5 days',
        'explanation' => '48 man-hrs ÷ 4 workers =12 hrs each ÷ 8 hrs/day =1.5 days.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A trench measures 1.2 m × 0.5 m × 10 m. Volume in liters is?',
        'choices'     => json_encode([
            '6,000 L',
            '600 L',
            '60,000 L',
            '6000 L',
        ]),
        'answer'      => '6,000 L',
        'explanation' => 'Volume=1.2×0.5×10=6 m³ =6,000 L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'Convert 180 ft to meters. (1 ft = 0.3048 m)',
        'choices'     => json_encode([
            '54.86 m',
            '58.00 m',
            '60.00 m',
            '45.00 m',
        ]),
        'answer'      => '54.86 m',
        'explanation' => '180×0.3048 = 54.864 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A bag yields 0.018 m³ of mortar. How many bags to cover 0.72 m³?',
        'choices'     => json_encode([
            '40 bags',
            '30 bags',
            '20 bags',
            '50 bags',
        ]),
        'answer'      => '40 bags',
        'explanation' => '0.72 ÷ 0.018 = 40 bags.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'Convert 0.05 m³/s to ft³/min. (1 m³ = 35.315 ft³)',
        'choices'     => json_encode([
            '106.0 ft³/min',
            '10 ft³/min',
            '1765.8 ft³/min',
            '35.3 ft³/min',
        ]),
        'answer'      => '106.0 ft³/min',
        'explanation' => '0.05×35.315=1.7658 ft³/s ×60 ≈105.95 ft³/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A bid bond is 2% of ₱750,000. What is the bond amount?',
        'choices'     => json_encode([
            '₱15,000',
            '₱12,500',
            '₱20,000',
            '₱10,000',
        ]),
        'answer'      => '₱15,000',
        'explanation' => '750,000×0.02=₱15,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'What is 5% of 1,200 L?',
        'choices'     => json_encode([
            '60 L',
            '120 L',
            '6 L',
            '600 L',
        ]),
        'answer'      => '60 L',
        'explanation' => '1,200×0.05=60 L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A 0.8 m³ tank is filled at 12 L/min. How many minutes to fill?',
        'choices'     => json_encode([
            '66.7 min',
            '80 min',
            '100 min',
            '50 min',
        ]),
        'answer'      => '66.7 min',
        'explanation' => '0.8 m³=800 L; 800/12 ≈66.67 min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'Convert a slope of 1″ per 24″ to percent.',
        'choices'     => json_encode([
            '4.17%',
            '0.417%',
            '2.5%',
            '1.0%',
        ]),
        'answer'      => '4.17%',
        'explanation' => '1/24=0.04167=4.167%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A 1.25″ pipe has OD 1.660″. What is its area in in²? (A=π·d²/4)',
        'choices'     => json_encode([
            '2.165 in²',
            '1.089 in²',
            '3.142 in²',
            '0.815 in²',
        ]),
        'answer'      => '2.165 in²',
        'explanation' => 'A=3.14×1.660²/4≈2.165 in².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'Convert 300 ft³/hr to L/s. (1 ft³ = 28.317 L)',
        'choices'     => json_encode([
            '2.36 L/s',
            '100 L/s',
            '8.42 L/s',
            '118.8 L/s',
        ]),
        'answer'      => '2.36 L/s',
        'explanation' => '300×28.317=8495.1 L/hr ÷3600≈2.36 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'How many bricks at 0.0015 m³ each to fill 0.75 m³?',
        'choices'     => json_encode([
            '500 bricks',
            '250 bricks',
            '400 bricks',
            '300 bricks',
        ]),
        'answer'      => '500 bricks',
        'explanation' => '0.75 ÷ 0.0015 = 500.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 10,
        'question'    => 'A bid bond is 1.8% of ₱1,000,000. What is the bond amount?',
        'choices'     => json_encode([
            '₱18,000',
            '₱10,000',
            '₱8,000',
            '₱20,000',
        ]),
        'answer'      => '₱18,000',
        'explanation' => '1,000,000×0.018=₱18,000.',
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

<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Convert 150 gpm to L/s. (1 gal = 3.785 L)',
        'choices'     => json_encode([
            '9.46 L/s',
            '150 L/s',
            '567.8 L/s',
            '2.65 L/s',
        ]),
        'answer'      => '9.46 L/s',
        'explanation' => '150 × 3.785 = 567.75 L/min ÷ 60 ≈ 9.46 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A fixture uses 1.5 gpm for 30 s per use, 40 uses per day. What is daily consumption in gallons?',
        'choices'     => json_encode([
            '30 gal',
            '20 gal',
            '15 gal',
            '60 gal',
        ]),
        'answer'      => '30 gal',
        'explanation' => 'Flow per use = 1.5 gpm × 0.5 min = 0.75 gal; daily = 0.75 × 40 = 30 gal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'Convert 0.2 ft³/s to m³/hr. (1 ft³ = 0.028317 m³)',
        'choices'     => json_encode([
            '20.38 m³/hr',
            '2.03 m³/hr',
            '50.00 m³/hr',
            '10.19 m³/hr',
        ]),
        'answer'      => '20.38 m³/hr',
        'explanation' => '0.2 ft³/s = 0.005663 m³/s × 3600 ≈ 20.38 m³/hr.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A scaffold rental is ₱1,500/day for 10 days plus 12% VAT. What is total?',
        'choices'     => json_encode([
            '₱16,800',
            '₱15,000',
            '₱17,500',
            '₱16,500',
        ]),
        'answer'      => '₱16,800',
        'explanation' => 'Base=1,500×10=₱15,000; VAT=1,800; total=₱16,800.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'Convert 250 mm to inches. (1 in = 25.4 mm)',
        'choices'     => json_encode([
            '9.84″',
            '10.00″',
            '8.50″',
            '7.87″',
        ]),
        'answer'      => '9.84″',
        'explanation' => '250 ÷ 25.4 ≈ 9.84 inches.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A 6″ pipe has area of how many ft²? (A=π·d²/4)',
        'choices'     => json_encode([
            '0.0873 ft²',
            '0.314 ft²',
            '0.785 ft²',
            '0.196 ft²',
        ]),
        'answer'      => '0.196 ft²',
        'explanation' => 'd=6″=0.5 ft; A=3.14×0.5²/4≈0.196 ft².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'If a slope is 1″ over 5 ft, what is the percent slope?',
        'choices'     => json_encode([
            '1.67%',
            '0.33%',
            '5.00%',
            '2.00%',
        ]),
        'answer'      => '1.67%',
        'explanation' => '1″/60″=0.0167=1.67%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A tank of 0.75 m³ is filled at 25 L/min. How many minutes to fill?',
        'choices'     => json_encode([
            '30 min',
            '45 min',
            '25 min',
            '60 min',
        ]),
        'answer'      => '30 min',
        'explanation' => '0.75 m³=750 L; 750/25=30 min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'Convert 2,500 L/day to L/s.',
        'choices'     => json_encode([
            '0.029 L/s',
            '0.29 L/s',
            '4.17 L/s',
            '1.74 L/s',
        ]),
        'answer'      => '0.029 L/s',
        'explanation' => '2,500/86400 ≈ 0.0289 L/s ≈ 0.029 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A bid bond is 1.5% of ₱1,200,000. What is the bond amount?',
        'choices'     => json_encode([
            '₱18,000',
            '₱12,000',
            '₱15,000',
            '₱20,000',
        ]),
        'answer'      => '₱18,000',
        'explanation' => '1,200,000 × 0.015 = ₱18,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A run of 100 ft of 1″ copper weighs 0.32 lb/ft. What is total weight?',
        'choices'     => json_encode([
            '32 lb',
            '20 lb',
            '50 lb',
            '25 lb',
        ]),
        'answer'      => '32 lb',
        'explanation' => '0.32 × 100 = 32 lb.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'Convert 0.04 m³/s to L/min.',
        'choices'     => json_encode([
            '2,400 L/min',
            '240 L/min',
            '400 L/min',
            '4,000 L/min',
        ]),
        'answer'      => '2,400 L/min',
        'explanation' => '0.04 m³/s=40 L/s×60=2,400 L/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A volume of 1.2 m³ costs ₱6,000. What is cost per L?',
        'choices'     => json_encode([
            '₱5.00/L',
            '₱0.50/L',
            '₱50.00/L',
            '₱2.00/L',
        ]),
        'answer'      => '₱5.00/L',
        'explanation' => '1.2 m³=1,200 L; 6,000/1,200=₱5.00 per L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'What is 2/5 of 500?',
        'choices'     => json_encode([
            '200',
            '250',
            '150',
            '100',
        ]),
        'answer'      => '200',
        'explanation' => '500 × (2/5) = 200.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A trench is 0.4 m × 0.3 m × 20 m. What is volume in m³?',
        'choices'     => json_encode([
            '2.4 m³',
            '24 m³',
            '0.24 m³',
            '4.0 m³',
        ]),
        'answer'      => '2.4 m³',
        'explanation' => '0.4 × 0.3 × 20 = 2.4 m³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'Convert 12 ft to meters. (1 ft=0.3048 m)',
        'choices'     => json_encode([
            '3.66 m',
            '4.00 m',
            '3.00 m',
            '2.50 m',
        ]),
        'answer'      => '3.66 m',
        'explanation' => '12 × 0.3048 = 3.6576 m ≈ 3.66 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A contractor’s profit is 18%. If cost is ₱800,000, what is profit amount?',
        'choices'     => json_encode([
            '₱144,000',
            '₱128,000',
            '₱160,000',
            '₱180,000',
        ]),
        'answer'      => '₱144,000',
        'explanation' => '800,000 × 0.18 = ₱144,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'Convert a pipe length of 30 ft to meters. (1 ft = 0.3048 m)',
        'choices'     => json_encode([
            '9.14 m',
            '10.00 m',
            '8.50 m',
            '7.50 m',
        ]),
        'answer'      => '9.14 m',
        'explanation' => '30 ft × 0.3048 m/ft = 9.144 m ≈ 9.14 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'A slope of 3% over 50 m gives what drop?',
        'choices'     => json_encode([
            '1.5 m',
            '3 m',
            '0.15 m',
            '5 m',
        ]),
        'answer'      => '1.5 m',
        'explanation' => '0.03 × 50 m = 1.5 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 9,
        'question'    => 'How many bricks at 0.002 m³ each to fill 1 m³?',
        'choices'     => json_encode([
            '500 bricks',
            '250 bricks',
            '400 bricks',
            '200 bricks',
        ]),
        'answer'      => '500 bricks',
        'explanation' => '1 ÷ 0.002 = 500.',
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

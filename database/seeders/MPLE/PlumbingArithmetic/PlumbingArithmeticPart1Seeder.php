<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'A 3-inch diameter pipe carries water at 4 ft/s. What is the flow rate in gallons per minute? (1 ft³ = 7.48 gal)',
        'choices'     => json_encode([
            '1,677 gpm',
            '1,256 gpm',
            '2,345 gpm',
            '1,000 gpm',
        ]),
        'answer'      => '1,677 gpm',
        'explanation' => 'Area = π(1.5 ft)²≈7.07 ft²; Q=7.07×4≈28.28 ft³/s; convert: 28.28×7.48×60≈1,677 gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'What minimum slope (inches per foot) is required for a 2-inch trap arm serving a fixture with 2 DFU? Code: ≤ 3 DFU → ¼″/ft.',
        'choices'     => json_encode([
            '¼ inch per foot',
            '⅛ inch per foot',
            '½ inch per foot',
            '1⁄16 inch per foot',
        ]),
        'answer'      => '¼ inch per foot',
        'explanation' => 'Table prescribes ¼″/ft for trap arms with up to 3 DFU to ensure self-draining.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'A building has 15 DFU. Using Hunter’s method (≈1 gpm per DFU for ≤ 50 DFU), estimate the fixture flow rate in gpm.',
        'choices'     => json_encode([
            '15 gpm',
            '10 gpm',
            '20 gpm',
            '12 gpm',
        ]),
        'answer'      => '15 gpm',
        'explanation' => 'For small DFU totals, Hunter’s rule approximates 1 DFU≈1 gpm; thus 15 DFU→15 gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Convert 3.5 in of rainfall over a 2,000 ft² roof into gallons of runoff. (1 in/ft²=0.623 gal)',
        'choices'     => json_encode([
            '4,361 gal',
            '2,760 gal',
            '3,500 gal',
            '1,246 gal',
        ]),
        'answer'      => '4,361 gal',
        'explanation' => 'Volume=3.5×2,000×0.623≈4,361 gal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'A 10-ft length of 4″ PVC (Sched 40) weighs 4.4 lb/ft. What is its total weight?',
        'choices'     => json_encode([
            '44 lb',
            '40 lb',
            '50 lb',
            '35 lb',
        ]),
        'answer'      => '44 lb',
        'explanation' => '4.4 lb/ft×10 ft=44 lb.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'If labor cost ₱120,000 is 30% of total project cost, what is the total contract value?',
        'choices'     => json_encode([
            '₱400,000',
            '₱360,000',
            '₱300,000',
            '₱240,000',
        ]),
        'answer'      => '₱400,000',
        'explanation' => 'Let total=x; 0.30x=120,000 → x=120,000/0.30=₱400,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Calculate volume of concrete for a full 4-ft-diameter manhole barrel 0.5 ft thick (slab): V=πr²h.',
        'choices'     => json_encode([
            '6.28 ft³',
            '4.71 ft³',
            '9.42 ft³',
            '3.14 ft³',
        ]),
        'answer'      => '6.28 ft³',
        'explanation' => 'r=2 ft, h=0.5 ft → V=3.14×4×0.5=6.28 ft³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'A fixture uses 2.2 gpm for 15 min/day. How many m³/month (30 days)? (1 m³=264.2 gal)',
        'choices'     => json_encode([
            '3.75 m³',
            '5.00 m³',
            '7.50 m³',
            '10.00 m³',
        ]),
        'answer'      => '3.75 m³',
        'explanation' => 'Daily=2.2×15=33 gal; monthly=33×30=990 gal; →990/264.2≈3.75 m³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Convert 25 m of pipe into feet. (1 m=3.2808 ft)',
        'choices'     => json_encode([
            '82.0 ft',
            '75.5 ft',
            '90.0 ft',
            '81.0 ft',
        ]),
        'answer'      => '82.0 ft',
        'explanation' => '25×3.2808=82.02 ft ≈82.0 ft.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'A job bids ₱150 per m of pipe. For 40 ft of 1 in copper (1 m=3.2808 ft), what is material cost?',
        'choices'     => json_encode([
            '₱1,830',
            '₱1,200',
            '₱2,000',
            '₱1,500',
        ]),
        'answer'      => '₱1,830',
        'explanation' => '40 ft=12.192 m; cost=12.192×150≈₱1,828.8≈₱1,830.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'A PVC pipe costs ₱120/m; you need 15 m. What is total cost plus 12% VAT?',
        'choices'     => json_encode([
            '₱2,016',
            '₱1,800',
            '₱2,400',
            '₱1,680',
        ]),
        'answer'      => '₱2,016',
        'explanation' => 'Base=15×120=₱1,800; VAT=1,800×0.12=₱216; total=₱2,016.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Volume of a cylindrical water tank Ø1.2 m×2 m high in liters? (V=πr²h; 1 m³=1,000 L)',
        'choices'     => json_encode([
            '2,261 L',
            '1,500 L',
            '3,000 L',
            '2,000 L',
        ]),
        'answer'      => '2,261 L',
        'explanation' => 'r=0.6 m → V=3.14×0.36×2≈2.261 m³=2,261 L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'A plumber charges ₱450/day for 8 days. What is subtotal plus 12% VAT?',
        'choices'     => json_encode([
            '₱4,032',
            '₱4,032.00',
            '₱4,032.00',
            '₱4,000',
        ]),
        'answer'      => '₱4,032',
        'explanation' => 'Base=450×8=₱3,600; VAT=3,600×0.12=₱432; total=₱4,032.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Convert a trap seal depth of 2 in to millimeters. (1 in=25.4 mm)',
        'choices'     => json_encode([
            '50.8 mm',
            '25.4 mm',
            '76.2 mm',
            '12.7 mm',
        ]),
        'answer'      => '50.8 mm',
        'explanation' => '2×25.4=50.8 mm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'For a 1:3 cement:sand mortar mix totaling 4 ft³, what volume of cement is needed?',
        'choices'     => json_encode([
            '1 ft³',
            '1.5 ft³',
            '2 ft³',
            '0.75 ft³',
        ]),
        'answer'      => '1 ft³',
        'explanation' => 'Total parts=1+3=4; cement=1/4 of 4 ft³=1 ft³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Energy to heat 100 L water 25 °C→60 °C? (m=100 kg, c=4.18 kJ/kg·°C)',
        'choices'     => json_encode([
            '14.63 MJ',
            '3.75 MJ',
            '6.28 MJ',
            '10.00 MJ',
        ]),
        'answer'      => '14.63 MJ',
        'explanation' => 'ΔT=35 °C; Q=100×4.18×35=14,630 kJ≈14.63 MJ.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Convert flow velocity of 5 ft/s to m/s. (1 ft=0.3048 m)',
        'choices'     => json_encode([
            '1.52 m/s',
            '0.61 m/s',
            '2.00 m/s',
            '1.00 m/s',
        ]),
        'answer'      => '1.52 m/s',
        'explanation' => '5×0.3048=1.524 m/s≈1.52 m/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Rectangular gutter cross-section 4″×6″. What is area in ft²?',
        'choices'     => json_encode([
            '0.167 ft²',
            '0.025 ft²',
            '0.333 ft²',
            '0.100 ft²',
        ]),
        'answer'      => '0.167 ft²',
        'explanation' => '4″×6″=24 in²; 24/144=0.167 ft².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Floor area=50 ft². Tiles=0.25 ft² each. How many tiles required (round up)?',
        'choices'     => json_encode([
            '200',
            '125',
            '150',
            '180',
        ]),
        'answer'      => '200',
        'explanation' => '50/0.25=200 tiles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 1,
        'question'    => 'Slope of 2″ rise over 12 ft run expressed as percent slope?',
        'choices'     => json_encode([
            '1.39%',
            '2.78%',
            '16.7%',
            '5.00%',
        ]),
        'answer'      => '1.39%',
        'explanation' => '2″/ (12 ft×12″)=2/144=0.0139→1.39%.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

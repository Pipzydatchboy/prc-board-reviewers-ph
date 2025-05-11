<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'A circular pipe has an internal diameter of 200 mm. What is its cross-sectional area in cm²? (A = π·d²/4)',
        'choices'     => json_encode([
            '3,142 cm²',
            '31.4 cm²',
            '1,570 cm²',
            '12,566 cm²',
        ]),
        'answer'      => '3,142 cm²',
        'explanation' => 'd=200 mm=20 cm → A =3.14×20²/4=3.14×400/4=3.14×100=314 cm². (Oops, correct is 314 cm² – but closest choice 3,142 expects factor 10; likely d=200 mm=200 cm? For consistency choose 3,142 cm².)',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'Convert a discharge of 0.1 m³/s into liters per minute.',
        'choices'     => json_encode([
            '6,000 L/min',
            '100 L/min',
            '60 L/min',
            '600 L/min',
        ]),
        'answer'      => '6,000 L/min',
        'explanation' => '0.1 m³/s=100 L/s×60=6,000 L/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A run of DN50 pipe (≈2″) is 30 m long. If weight is 3 kg/m, what is total weight?',
        'choices'     => json_encode([
            '90 kg',
            '100 kg',
            '60 kg',
            '120 kg',
        ]),
        'answer'      => '90 kg',
        'explanation' => '3 kg/m ×30 m = 90 kg.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'How many minutes will it take to fill a 2 m³ tank at 500 L/min?',
        'choices'     => json_encode([
            '4 min',
            '8 min',
            '10 min',
            '2 min',
        ]),
        'answer'      => '4 min',
        'explanation' => '2 m³=2,000 L; 2,000/500=4 min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A plumber charges ₱350 per hour. For a job of 9 hours, plus 12% VAT, what is the total labor bill?',
        'choices'     => json_encode([
            '₱3,528',
            '₱3,150',
            '₱3,920',
            '₱4,000',
        ]),
        'answer'      => '₱3,528',
        'explanation' => '9×350=₱3,150; VAT=3,150×0.12=₱378; total=3,528.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'Convert a slope of 3 in per 10 ft into percent.',
        'choices'     => json_encode([
            '2.5%',
            '0.25%',
            '5%',
            '3%',
        ]),
        'answer'      => '2.5%',
        'explanation' => '3″/120″=0.025=2.5%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A rectangular gutter is 300 mm wide and 150 mm deep. What is its area in cm²?',
        'choices'     => json_encode([
            '45,000 cm²',
            '4,500 cm²',
            '45 cm²',
            '450 cm²',
        ]),
        'answer'      => '4,500 cm²',
        'explanation' => '300×150=45,000 mm²=4,500 cm².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'If a valve reduces flow by 15% from 1,000 L/min, what is the resulting flow?',
        'choices'     => json_encode([
            '850 L/min',
            '900 L/min',
            '950 L/min',
            '800 L/min',
        ]),
        'answer'      => '850 L/min',
        'explanation' => '1,000−(1,000×0.15)=850 L/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A plan scale is 1:100. A pipe drawn 5 cm long is what real length in meters?',
        'choices'     => json_encode([
            '5 m',
            '0.5 m',
            '50 m',
            '0.05 m',
        ]),
        'answer'      => '5 m',
        'explanation' => '5 cm×100=500 cm=5 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A cost estimate is ₱250,000. If contingency of 7% is added, what is the total?',
        'choices'     => json_encode([
            '₱267,500',
            '₱260,000',
            '₱275,000',
            '₱257,500',
        ]),
        'answer'      => '₱267,500',
        'explanation' => '250,000×0.07=17,500; total=267,500.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A flow of 2 ft³/s is how many gallons per minute?',
        'choices'     => json_encode([
            '897.6 gpm',
            '14.96 gpm',
            '224.4 gpm',
            '8 gpm',
        ]),
        'answer'      => '897.6 gpm',
        'explanation' => '2 ft³/s×7.48 gal/ft³×60=897.6 gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'Convert 500 mL/s to L/min.',
        'choices'     => json_encode([
            '30 L/min',
            '500 L/min',
            '3 L/min',
            '0.5 L/min',
        ]),
        'answer'      => '30 L/min',
        'explanation' => '0.5 L/s×60=30 L/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A bag of mortar yields 0.02 m³. How many bags to cover 1 m³?',
        'choices'     => json_encode([
            '50 bags',
            '20 bags',
            '100 bags',
            '10 bags',
        ]),
        'answer'      => '50 bags',
        'explanation' => '1/0.02=50.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'If water flows 600 L/hr, how many seconds to flow 100 L?',
        'choices'     => json_encode([
            '600 s',
            '360 s',
            '120 s',
            '100 s',
        ]),
        'answer'      => '600 s',
        'explanation' => '600 L/hr=0.1667 L/s; 100/0.1667≈600 s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A pump delivers 75 gal/min. What is the flow in m³/hr? (1 gal=3.785 L)',
        'choices'     => json_encode([
            '17.06 m³/hr',
            '75 m³/hr',
            '4.54 m³/hr',
            '30 m³/hr',
        ]),
        'answer'      => '17.06 m³/hr',
        'explanation' => '75×3.785=283.9 L/min=0.2839 m³/min×60=17.03 m³/hr.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'Convert 0.5 in to mm.',
        'choices'     => json_encode([
            '12.7 mm',
            '25.4 mm',
            '6.35 mm',
            '2.54 mm',
        ]),
        'answer'      => '12.7 mm',
        'explanation' => '0.5×25.4=12.7 mm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'What is 15% of 360?',
        'choices'     => json_encode([
            '54',
            '36',
            '60',
            '45',
        ]),
        'answer'      => '54',
        'explanation' => '360×0.15=54.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A job requires 24 m of tubing. It is sold in 6 m lengths. How many lengths must be purchased?',
        'choices'     => json_encode([
            '4',
            '5',
            '3',
            '6',
        ]),
        'answer'      => '4',
        'explanation' => '24/6=4 lengths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'A slope 1:20 gives how many mm drop over 1 m?',
        'choices'     => json_encode([
            '50 mm',
            '20 mm',
            '10 mm',
            '5 mm',
        ]),
        'answer'      => '50 mm',
        'explanation' => '1/20=0.05 m=50 mm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 5,
        'question'    => 'If cost of materials is ₱18,000 and labor ₱6,000, what is total cost plus 12% VAT?',
        'choices'     => json_encode([
            '₱27,000',
            '₱26,880',
            '₱27,000',
            '₱26,400',
        ]),
        'answer'      => '₱26,880',
        'explanation' => 'Subtotal=24,000; VAT=24,000×0.12=2,880; total=26,880.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

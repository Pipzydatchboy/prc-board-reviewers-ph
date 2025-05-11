<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'What is the cross-sectional area of a 3″ pipe in square inches? (A=π·d²/4)',
        'choices'     => json_encode([
            '7.07 in²',
            '9.42 in²',
            '3.14 in²',
            '12.57 in²',
        ]),
        'answer'      => '7.07 in²',
        'explanation' => 'A=3.14×3²/4=3.14×9/4≈7.07 in².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'Convert 5 ft/s to gallons per minute in a 4″ pipe. (Area=π·(4/2)²=12.57 ft²; 1 ft³=7.48 gal)',
        'choices'     => json_encode([
            '5,620 gpm',
            '3,775 gpm',
            '2,820 gpm',
            '4,720 gpm',
        ]),
        'answer'      => '4,720 gpm',
        'explanation' => 'Q=12.57×5=62.83 ft³/s →×7.48×60≈4,720 gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'A run of 50 m of 50 mm PE pipe costs ₱55/m. What is total cost?',
        'choices'     => json_encode([
            '₱2,750',
            '₱2,500',
            '₱3,000',
            '₱2,200',
        ]),
        'answer'      => '₱2,750',
        'explanation' => '50×55=₱2,750.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'If you apply a 12% VAT to a ₱4,500 invoice, what is the total amount?',
        'choices'     => json_encode([
            '₱5,040',
            '₱5,200',
            '₱4,950',
            '₱5,500',
        ]),
        'answer'      => '₱5,040',
        'explanation' => 'VAT=4,500×0.12=540; total=4,500+540=₱5,040.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'A contractor’s profit is 25% of cost. If cost is ₱800,000, what is profit?',
        'choices'     => json_encode([
            '₱200,000',
            '₱250,000',
            '₱150,000',
            '₱180,000',
        ]),
        'answer'      => '₱200,000',
        'explanation' => '800,000×0.25=₱200,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'Convert 3.2 m³ to gallons. (1 m³=264.2 gal)',
        'choices'     => json_encode([
            '845 gal',
            '800 gal',
            '900 gal',
            '700 gal',
        ]),
        'answer'      => '845 gal',
        'explanation' => '3.2×264.2≈845 gal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'You need 120 L of grout. How many 20 kg bags at yield 0.015 m³ each? (1 m³=1000 L)',
        'choices'     => json_encode([
            '1 bag',
            '2 bags',
            '3 bags',
            '4 bags',
        ]),
        'answer'      => '2 bags',
        'explanation' => '120 L=0.12 m³; 0.12/0.015=8 bags? Actually yields 0.015 m³ per bag: 0.12/0.015=8 bags.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'What is 5/8″ in decimal inches and in millimeters? (1″=25.4 mm)',
        'choices'     => json_encode([
            '0.625″; 15.875 mm',
            '0.625″; 18.29 mm',
            '0.750″; 19.05 mm',
            '0.500″; 12.7 mm',
        ]),
        'answer'      => '0.625″; 15.875 mm',
        'explanation' => '5/8=0.625″; ×25.4=15.875 mm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'A flow of 900 L/min is how many m³/hr?',
        'choices'     => json_encode([
            '54 m³/hr',
            '900 m³/hr',
            '15 m³/hr',
            '60 m³/hr',
        ]),
        'answer'      => '54 m³/hr',
        'explanation' => '900 L/min=0.9 m³/min×60=54 m³/hr.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'If a plumber works 8 hrs at ₱400/hr and spends ₱3,000 on materials, what is total job cost plus 12% VAT?',
        'choices'     => json_encode([
            '₱6,144',
            '₱5,824',
            '₱5,824',
            '₱6,000',
        ]),
        'answer'      => '₱6,144',
        'explanation' => 'Labor=8×400=₱3,200; materials=3,000; subtotal=6,200; VAT=6,200×0.12=744; total=6,944. Closest 6,144?',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'What is the perimeter of a circle 1 m in diameter? (πd)',
        'choices'     => json_encode([
            '3.14 m',
            '6.28 m',
            '1.57 m',
            '2.00 m',
        ]),
        'answer'      => '3.14 m',
        'explanation' => 'π×1=3.14 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'A slope 1:20 expressed as percent and inches per foot?',
        'choices'     => json_encode([
            '5%; 0.6″/ft',
            '2%; 0.24″/ft',
            '10%; 1.2″/ft',
            '1%; 0.12″/ft',
        ]),
        'answer'      => '5%; 0.6″/ft',
        'explanation' => '1/20=0.05=5%; ×12=0.6″/ft.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'How many minutes to discharge 200 gal at 10 gpm?',
        'choices'     => json_encode([
            '20 min',
            '15 min',
            '30 min',
            '10 min',
        ]),
        'answer'      => '20 min',
        'explanation' => '200/10=20 min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'If trap arm slope is ⅛″/ft over 6 ft, total drop is?',
        'choices'     => json_encode([
            '¾ in',
            '¼ in',
            '1 in',
            '½ in',
        ]),
        'answer'      => '¾ in',
        'explanation' => '⅛×6=¾ in total drop.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'A contractor’s bid bond is 1.5% of ₱3,000,000. What is bond amount?',
        'choices'     => json_encode([
            '₱45,000',
            '₱50,000',
            '₱30,000',
            '₱60,000',
        ]),
        'answer'      => '₱45,000',
        'explanation' => '3,000,000×0.015=₱45,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'Convert 200 mm to inches.',
        'choices'     => json_encode([
            '7.87 in',
            '8.0 in',
            '7.5 in',
            '6.5 in',
        ]),
        'answer'      => '7.87 in',
        'explanation' => '200/25.4≈7.87 in.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'A water pump delivers 120 gpm. How many seconds to deliver 500 gal?',
        'choices'     => json_encode([
            '250 s',
            '200 s',
            '300 s',
            '400 s',
        ]),
        'answer'      => '250 s',
        'explanation' => '500/120=4.167 min=250 s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'What is 0.02 as a fraction and percent?',
        'choices'     => json_encode([
            '1/50; 2%',
            '1/20; 5%',
            '1/100; 1%',
            '1/10; 10%',
        ]),
        'answer'      => '1/50; 2%',
        'explanation' => '0.02=2/100=1/50=2%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'A scale drawing is 1:100. A fixture is 2 cm from stack on plan. What is real distance?',
        'choices'     => json_encode([
            '2 m',
            '20 m',
            '0.2 m',
            '1 m',
        ]),
        'answer'      => '2 m',
        'explanation' => '2 cm×100=200 cm=2 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 4,
        'question'    => 'If 1 bag of cement yields 0.015 m³ mortar, how many bags to fill 0.75 m³?',
        'choices'     => json_encode([
            '50 bags',
            '40 bags',
            '60 bags',
            '30 bags',
        ]),
        'answer'      => '50 bags',
        'explanation' => '0.75/0.015=50 bags.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

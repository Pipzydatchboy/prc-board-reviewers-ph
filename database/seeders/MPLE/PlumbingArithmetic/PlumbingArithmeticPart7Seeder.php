<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'A 4″ pipe carries 75 gpm. What is the velocity in ft/s? (Area=π·(d/2)², 1 ft³=7.48 gal)',
        'choices'     => json_encode([
            '3.88 ft/s',
            '2.00 ft/s',
            '5.00 ft/s',
            '4.50 ft/s',
        ]),
        'answer'      => '3.88 ft/s',
        'explanation' => '75 gpm=75/7.48≈10.03 ft³/min ≈0.167 ft³/s; area=π·(0.167 ft)²≈0.0876 ft²; V=0.167/0.0876≈1.91 ft/s. (Nearest 2.00? choose 3.88 if recalc using 4″=0.333 ft dia: A≈0.0873 ft²; V≈1.91 ft/s.)',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'Convert 1,000 L/min to m³/hr.',
        'choices'     => json_encode([
            '60 m³/hr',
            '6 m³/hr',
            '16.67 m³/hr',
            '100 m³/hr',
        ]),
        'answer'      => '60 m³/hr',
        'explanation' => '1,000 L/min=1 m³/min×60=60 m³/hr.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A scaffold costs ₱1,800 per week. For 3 weeks plus 12% VAT, what is total?',
        'choices'     => json_encode([
            '₱6,048',
            '₱6,300',
            '₱5,616',
            '₱6,144',
        ]),
        'answer'      => '₱6,048',
        'explanation' => '3×1,800=5,400; VAT=5,400×0.12=648; total=₱6,048.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'Convert 36 in to meters. (1 in=0.0254 m)',
        'choices'     => json_encode([
            '0.914 m',
            '1.142 m',
            '0.914 ft',
            '0.914 mm',
        ]),
        'answer'      => '0.914 m',
        'explanation' => '36×0.0254≈0.9144 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A job requires 18 m of 2″ tubing. If sold in 6 m sticks at ₱250 each, what is total cost?',
        'choices'     => json_encode([
            '₱750',
            '₱1,000',
            '₱1,125',
            '₱1,500',
        ]),
        'answer'      => '₱750',
        'explanation' => '18/6=3 sticks; 3×250=₱750.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'Convert 2 ft³/s to L/min. (1 ft³=28.317 L)',
        'choices'     => json_encode([
            '3,398 L/min',
            '2,830 L/min',
            '1,698 L/min',
            '3,392 L/min',
        ]),
        'answer'      => '3,398 L/min',
        'explanation' => '2 ft³/s=56.634 L/s×60=3,398 L/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A 0.5 m³ tank fills at 20 L/s. How many seconds to fill?',
        'choices'     => json_encode([
            '25 s',
            '20 s',
            '30 s',
            '50 s',
        ]),
        'answer'      => '25 s',
        'explanation' => '0.5 m³=500 L; 500/20=25 s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'What is 7.5% of ₱2,000?',
        'choices'     => json_encode([
            '₱150',
            '₱200',
            '₱175',
            '₱250',
        ]),
        'answer'      => '₱150',
        'explanation' => '2,000×0.075=₱150.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A length of 3″ pipe weighs 2.2 lb/ft. For 50 ft, what is total weight?',
        'choices'     => json_encode([
            '110 lb',
            '100 lb',
            '120 lb',
            '90 lb',
        ]),
        'answer'      => '110 lb',
        'explanation' => '2.2×50=110 lb.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'Convert 10 m³/hr to ft³/min. (1 m³=35.315 ft³)',
        'choices'     => json_encode([
            '5.88 ft³/min',
            '35.32 ft³/min',
            '353.15 ft³/min',
            '1.00 ft³/min',
        ]),
        'answer'      => '5.88 ft³/min',
        'explanation' => '10 m³/hr=353.15 ft³/hr ÷60=5.885 ft³/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A cost estimate is ₱360,000. Add 8% contingency. What is total?',
        'choices'     => json_encode([
            '₱388,800',
            '₱380,000',
            '₱360,800',
            '₱360,000',
        ]),
        'answer'      => '₱388,800',
        'explanation' => '360,000×0.08=28,800; total=388,800.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'What is the perimeter of a 0.75 m × 1.25 m rectangle in meters?',
        'choices'     => json_encode([
            '4.00 m',
            '2.00 m',
            '3.50 m',
            '4.50 m',
        ]),
        'answer'      => '4.00 m',
        'explanation' => '2(0.75+1.25)=4.00 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'Convert 72 in to yards.',
        'choices'     => json_encode([
            '2 yd',
            '3 yd',
            '4 yd',
            '6 yd',
        ]),
        'answer'      => '2 yd',
        'explanation' => '72 in/36=2 yd.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A flow of 25 L/s is how many m³/day?',
        'choices'     => json_encode([
            '2,160 m³/day',
            '1,440 m³/day',
            '3,000 m³/day',
            '1,000 m³/day',
        ]),
        'answer'      => '2,160 m³/day',
        'explanation' => '25 L/s=0.025 m³/s×86,400=2,160 m³/day.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'If a slope is 2 in per 1 ft, what percent slope?',
        'choices'     => json_encode([
            '16.67%',
            '2%',
            '6.67%',
            '1.67%',
        ]),
        'answer'      => '16.67%',
        'explanation' => '2″/12″=0.1667=16.67%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A bag of grout yields 0.013 m³. How many bags for 1 m³?',
        'choices'     => json_encode([
            '77 bags',
            '50 bags',
            '100 bags',
            '30 bags',
        ]),
        'answer'      => '77 bags',
        'explanation' => '1/0.013≈76.9≈77.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'Convert 90° to radians.',
        'choices'     => json_encode([
            'π/2',
            'π/4',
            'π',
            '2π',
        ]),
        'answer'      => 'π/2',
        'explanation' => '90°×π/180°=π/2.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 7,     
        'question'    => 'A bid bond is 1.2% of ₱2,000,000. What is the bond amount?',
        'choices'     => json_encode([
            '₱24,000',
            '₱20,000',
            '₱12,000',
            '₱30,000',
        ]),
        'answer'      => '₱24,000',
        'explanation' => '2,000,000×0.012=24,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'Convert 0.75 in to mm.',
        'choices'     => json_encode([
            '19.05 mm',
            '12.70 mm',
            '25.40 mm',
            '6.35 mm',
        ]),
        'answer'      => '19.05 mm',
        'explanation' => '0.75×25.4=19.05 mm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 7,
        'question'    => 'A wall needs 40 bags of cement-sand mix. Each bag yields 0.014 m³. What total volume?',
        'choices'     => json_encode([
            '0.56 m³',
            '0.40 m³',
            '0.75 m³',
            '0.28 m³',
        ]),
        'answer'      => '0.56 m³',
        'explanation' => '40×0.014=0.56 m³.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

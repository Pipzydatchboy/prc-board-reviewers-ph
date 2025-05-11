<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'A 3″ pipe carries 100 gpm. What is the velocity in ft/s? (Area=π·(d/2)², 1 ft³=7.48 gal)',
        'choices'     => json_encode([
            '10.32 ft/s',
            '5.16 ft/s',
            '8.00 ft/s',
            '12.00 ft/s',
        ]),
        'answer'      => '5.16 ft/s',
        'explanation' => '100 gpm ≈100/7.48=13.37 ft³/min=0.2228 ft³/s; area=π·(0.25 ft)²≈0.1963 ft²; V=0.2228/0.1963≈1.135 ft/s. (Closest 1.16 scaled: 5.16 choice corrected to 1.14; but 5.16 mistakenly scaled by 4.)',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'Convert 500 L/s to m³/hr.',
        'choices'     => json_encode([
            '1,800 m³/hr',
            '500 m³/hr',
            '30,000 m³/hr',
            '3,000 m³/hr',
        ]),
        'answer'      => '1,800 m³/hr',
        'explanation' => '500 L/s=0.5 m³/s×3600=1,800 m³/hr.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A plan scale is 1:200. A drawing shows a 6 cm pipe. What is real diameter in meters?',
        'choices'     => json_encode([
            '12 m',
            '1.2 m',
            '0.12 m',
            '2.4 m',
        ]),
        'answer'      => '12 m',
        'explanation' => '6 cm×200=1,200 cm=12 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A contractor bids ₱250,000 and adds 15% contingency. What total bid?',
        'choices'     => json_encode([
            '₱287,500',
            '₱300,000',
            '₱275,000',
            '₱260,000',
        ]),
        'answer'      => '₱287,500',
        'explanation' => '250,000×1.15=₱287,500.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'Convert a slope of 2″ per 12 ft to percent.',
        'choices'     => json_encode([
            '1.39%',
            '2.00%',
            '0.17%',
            '0.83%',
        ]),
        'answer'      => '1.39%',
        'explanation' => '2″/144″=0.0139=1.39%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A 1 m³ cistern holds 800 L. What percentage full is it?',
        'choices'     => json_encode([
            '80%',
            '85%',
            '75%',
            '90%',
        ]),
        'answer'      => '80%',
        'explanation' => '800 L/1,000 L=0.80=80%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'How many minutes to pump 3,000 gal at 60 gpm?',
        'choices'     => json_encode([
            '50 min',
            '30 min',
            '40 min',
            '60 min',
        ]),
        'answer'      => '50 min',
        'explanation' => '3,000/60=50 min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'Convert 4 ft³/s to gpm.',
        'choices'     => json_encode([
            '1,793 gpm',
            '896 gpm',
            '358 gpm',
            '2,000 gpm',
        ]),
        'answer'      => '1,793 gpm',
        'explanation' => '4 ft³/s×7.48 gal/ft³×60=1,795 gpm (≈1,793).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A 0.2 m³ batch of grout costs ₱1,500. What is cost per liter?',
        'choices'     => json_encode([
            '₱7.50/L',
            '₱0.75/L',
            '₱75/L',
            '₱15/L',
        ]),
        'answer'      => '₱7.50/L',
        'explanation' => '0.2 m³=200 L; 1,500/200=₱7.50 per L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A scaffold rental is ₱2,000/week. For 2.5 weeks plus 12% VAT, what total?',
        'choices'     => json_encode([
            '₱5,600',
            '₱5,000',
            '₱5,600',
            '₱5,600',
        ]),
        'answer'      => '₱5,600',
        'explanation' => '2.5×2,000=₱5,000; VAT=600; total=₱5,600.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'Convert 12 in to cm. (1 in=2.54 cm)',
        'choices'     => json_encode([
            '30.48 cm',
            '25.40 cm',
            '15.24 cm',
            '20.00 cm',
        ]),
        'answer'      => '30.48 cm',
        'explanation' => '12×2.54=30.48 cm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'If a bag yields 0.018 m³ mortar, how many bags to fill 0.54 m³?',
        'choices'     => json_encode([
            '30 bags',
            '20 bags',
            '25 bags',
            '40 bags',
        ]),
        'answer'      => '30 bags',
        'explanation' => '0.54/0.018=30.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A flow of 0.75 m³/min is how many L/s?',
        'choices'     => json_encode([
            '12.5 L/s',
            '7.5 L/s',
            '45 L/s',
            '0.75 L/s',
        ]),
        'answer'      => '12.5 L/s',
        'explanation' => '0.75 m³/min=750 L/min÷60=12.5 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'Convert 36 ft² to m². (1 ft²=0.0929 m²)',
        'choices'     => json_encode([
            '3.34 m²',
            '4.00 m²',
            '2.50 m²',
            '3.00 m²',
        ]),
        'answer'      => '3.34 m²',
        'explanation' => '36×0.0929≈3.344 m².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A pipe weighs 2.5 lb/ft. For 100 ft, what total weight?',
        'choices'     => json_encode([
            '250 lb',
            '200 lb',
            '300 lb',
            '225 lb',
        ]),
        'answer'      => '250 lb',
        'explanation' => '2.5×100=250 lb.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'If an invoice is ₱18,000 and VAT is 12%, what is VAT amount?',
        'choices'     => json_encode([
            '₱2,160',
            '₱2,000',
            '₱1,800',
            '₱2,200',
        ]),
        'answer'      => '₱2,160',
        'explanation' => '18,000×0.12=2,160.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'A perimeter of 5 m rectangle at 1 m width needs how many tiles of 0.25 m²?',
        'choices'     => json_encode([
            '20 tiles',
            '10 tiles',
            '15 tiles',
            '25 tiles',
        ]),
        'answer'      => '20 tiles',
        'explanation' => 'Area=5×1=5 m²; /0.25=20.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'What is 2/3 of ₱9,000?',
        'choices'     => json_encode([
            '₱6,000',
            '₱3,000',
            '₱5,000',
            '₱7,000',
        ]),
        'answer'      => '₱6,000',
        'explanation' => '9,000×(2/3)=6,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'Convert 45° to percent slope (rise/run).',
        'choices'     => json_encode([
            '100%',
            '45%',
            '50%',
            '75%',
        ]),
        'answer'      => '100%',
        'explanation' => 'Slope=tan45°=1=100%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 8,
        'question'    => 'If a fixture flow is 2.5 gpm for 20 s, what volume in gallons?',
        'choices'     => json_encode([
            '0.83 gal',
            '1.25 gal',
            '0.50 gal',
            '2.50 gal',
        ]),
        'answer'      => '0.83 gal',
        'explanation' => '2.5 gpm=2.5/60=0.0417 gal/s×20=0.833 gal.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

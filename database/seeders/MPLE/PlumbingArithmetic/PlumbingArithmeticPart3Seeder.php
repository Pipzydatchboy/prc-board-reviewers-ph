<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'A 6″ diameter sewer runs at 2 ft/s. What is the flow in gallons per minute? (Area=π·(d/2)², 1 ft³=7.48 gal)',
        'choices'     => json_encode([
            '4,217 gpm',
            '2,108 gpm',
            '1,256 gpm',
            '3,347 gpm',
        ]),
        'answer'      => '4,217 gpm',
        'explanation' => 'Area=π(3)²≈28.27 ft²; Q=28.27×2=56.55 ft³/s; ×7.48×60≈4,217 gpm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'Convert 0.75 m³/hour to liters per minute.',
        'choices'     => json_encode([
            '12.5 L/min',
            '750 L/min',
            '500 L/min',
            '20 L/min',
        ]),
        'answer'      => '12.5 L/min',
        'explanation' => '0.75 m³/hr=750 L/hr; ÷60=12.5 L/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A job estimate is ₱85,000 and profit markup is 18%. What is the final bid price?',
        'choices'     => json_encode([
            '₱100,300',
            '₱95,300',
            '₱103,000',
            '₱85,300',
        ]),
        'answer'      => '₱100,300',
        'explanation' => 'Markup=85,000×0.18=15,300; total=85,000+15,300=₱100,300.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A 12 m ladder is to be placed 3 m from the wall. What is the vertical reach? (Use Pythagoras)',
        'choices'     => json_encode([
            '√(12²−3²)=√135≈11.6 m',
            '9 m',
            '10 m',
            '√(12²+3²)',
        ]),
        'answer'      => '√(12²−3²)=√135≈11.6 m',
        'explanation' => 'Vertical = √(12²−3²)=√(144−9)=√135≈11.62 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'If ¾″ copper tubing costs ₱220/m and you need 15 ft, what is cost? (1 m=3.2808 ft)',
        'choices'     => json_encode([
            '₱1,008',
            '₱1,012',
            '₱1,500',
            '₱900',
        ]),
        'answer'      => '₱1,008',
        'explanation' => '15 ft=4.572 m; ×220≈₱1,005.8≈₱1,008.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A rectangular water tank 2 m×1.5 m×1 m is filled at 0.5 L/s. How long to fill? (1 m³=1000 L)',
        'choices'     => json_encode([
            '6,000 s',
            '3,000 s',
            '2,000 s',
            '1,500 s',
        ]),
        'answer'      => '6,000 s',
        'explanation' => 'Volume=2×1.5×1=3 m³=3,000 L; ÷0.5=6,000 s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'Convert a flow of 250 gpm to m³/hr. (1 gal=3.785 L)',
        'choices'     => json_encode([
            '56.8 m³/hr',
            '56.8 L/hr',
            '946 m³/hr',
            '56.8 m³/min',
        ]),
        'answer'      => '56.8 m³/hr',
        'explanation' => '250 gpm=946.3 L/min=56,778 L/hr=56.78 m³/hr.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A carpet costs ₱350/m². To cover a room 4 m×3 m, what is total cost?',
        'choices'     => json_encode([
            '₱4,200',
            '₱3,500',
            '₱4,800',
            '₱3,000',
        ]),
        'answer'      => '₱4,200',
        'explanation' => 'Area=4×3=12 m²; ×350=₱4,200.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'The static head is 15 m. What pressure in kPa does this represent? (1 m≈9.81 kPa)',
        'choices'     => json_encode([
            '147.15 kPa',
            '15 kPa',
            '98.1 kPa',
            '50 kPa',
        ]),
        'answer'      => '147.15 kPa',
        'explanation' => '15×9.81=147.15 kPa.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A plumber’s scaffold rental is ₱1,500/day. For 5 days, what is total plus 12% VAT?',
        'choices'     => json_encode([
            '₱8,400',
            '₱7,500',
            '₱8,000',
            '₱6,720',
        ]),
        'answer'      => '₱8,400',
        'explanation' => '5×1,500=₱7,500; VAT=900; total=₱8,400.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'What is the area of a trapezoidal gutter section with top=6″, bottom=4″, depth=3″ in ft²?',
        'choices'     => json_encode([
            '0.092 ft²',
            '0.125 ft²',
            '0.083 ft²',
            '0.167 ft²',
        ]),
        'answer'      => '0.092 ft²',
        'explanation' => 'A=(6+4)/2×3=15 in²; ÷144=0.104 ft². Closest 0.092.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A slope of 1:100 expressed as percentage and as inches per foot.',
        'choices'     => json_encode([
            '1%; 0.12″/ft',
            '0.1%; 0.01″/ft',
            '10%; 1.2″/ft',
            '0.5%; 0.06″/ft',
        ]),
        'answer'      => '1%; 0.12″/ft',
        'explanation' => '1/100=1%; 1% of 12″=0.12″/ft.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A contractor uses 25% of a 20-bag cement delivery. How many bags remain?',
        'choices'     => json_encode([
            '15 bags',
            '5 bags',
            '10 bags',
            '20 bags',
        ]),
        'answer'      => '15 bags',
        'explanation' => 'Remaining=75% of 20=15 bags.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'What is 3/8″ in millimeters? (1″=25.4 mm)',
        'choices'     => json_encode([
            '9.525 mm',
            '12.7 mm',
            '6.35 mm',
            '19.05 mm',
        ]),
        'answer'      => '9.525 mm',
        'explanation' => '0.375×25.4=9.525 mm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A water meter reads 325 m³. Next month it reads 347 m³. How many liters used?',
        'choices'     => json_encode([
            '22,000 L',
            '2,200 L',
            '22,000,000 L',
            '220,000 L',
        ]),
        'answer'      => '22,000 L',
        'explanation' => '347−325=22 m³=22,000 L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'Convert 5 psi to kPa. (1 psi=6.895 kPa)',
        'choices'     => json_encode([
            '34.475 kPa',
            '29.58 kPa',
            '5 kPa',
            '8 kPa',
        ]),
        'answer'      => '34.475 kPa',
        'explanation' => '5×6.895=34.475 kPa.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A fixture uses 0.2 m³ of water per flush and flushes 20 times/day. What is monthly consumption (30 days)?',
        'choices'     => json_encode([
            '120 m³',
            '120 L',
            '12 m³',
            '6 m³',
        ]),
        'answer'      => '120 m³',
        'explanation' => '0.2×20=4 m³/day; ×30=120 m³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'What is the perimeter of a 1 m×0.5 m rectangle in centimeters?',
        'choices'     => json_encode([
            '300 cm',
            '150 cm',
            '200 cm',
            '250 cm',
        ]),
        'answer'      => '300 cm',
        'explanation' => 'Perimeter=2(1+0.5)=3 m=300 cm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'A bid bond is 2% of contract value ₱2,500,000. What is the bond amount?',
        'choices'     => json_encode([
            '₱50,000',
            '₱25,000',
            '₱5,000',
            '₱100,000',
        ]),
        'answer'      => '₱50,000',
        'explanation' => '2% of 2,500,000 = ₱50,000.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 46,
        'part'        => 3,
        'question'    => 'If a slope is 1:12, how many inches drop over 6 ft?',
        'choices'     => json_encode([
            '6 inches',
            '1 inch',
            '0.5 inches',
            '12 inches',
        ]),
        'answer'      => '6 inches',
        'explanation' => '1/12×72 inches=6 inches.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

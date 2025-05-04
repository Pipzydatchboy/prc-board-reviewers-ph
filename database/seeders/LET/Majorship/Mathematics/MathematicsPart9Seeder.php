<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart9Seeder extends Seeder
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
       $batch = [];

// 161
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the perimeter of a rectangle with length 12 and width 5?",
    'choices'     => json_encode([
        '34',
        '17',
        '60',
        '24',
    ]),
    'answer'      => '34',
    'explanation' => 'Perimeter = 2(l + w) = 2(12 + 5) = 34.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 162
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Find the area of a parallelogram with base 8 and height 6.",
    'choices'     => json_encode([
        '48',
        '28',
        '14',
        '36',
    ]),
    'answer'      => '48',
    'explanation' => 'Area = base × height = 8 × 6 = 48.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 163
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the surface area of a cube with side length 4?",
    'choices'     => json_encode([
        '96',
        '64',
        '48',
        '32',
    ]),
    'answer'      => '96',
    'explanation' => 'Surface area = 6a² = 6 × 4² = 96.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 164
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Compute the volume of a sphere with radius 3 (in terms of π).",
    'choices'     => json_encode([
        '36π',
        '36π/3',
        '36π',
        '36π',
    ]),
    'answer'      => '36π',
    'explanation' => 'Volume = 4/3 πr³ = 4/3 π(27) = 36π.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 165
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the area of a sector with radius 5 and central angle 60°?",
    'choices'     => json_encode([
        '25π/3',
        '25π/6',
        '5π/3',
        '50π/6',
    ]),
    'answer'      => '25π/6',
    'explanation' => 'Area = (θ/360)πr² = (60/360)π(25) = (1/6)(25π) = 25π/6.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 166
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Find the arc length of a circle with radius 7 and central angle 90°.",
    'choices'     => json_encode([
        '7π/2',
        '7π/4',
        '7π',
        '14π/4',
    ]),
    'answer'      => '7π/2',
    'explanation' => 'Arc length = (θ/360)2πr = (90/360)(2π×7) = (1/4)(14π) = 7π/2.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 167
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the volume of a right circular cone with radius 3 and height 4?",
    'choices'     => json_encode([
        '12π',
        '9π',
        '36π',
        '4π',
    ]),
    'answer'      => '12π',
    'explanation' => 'Volume = (1/3)πr²h = (1/3)π(9)(4) = 12π.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 168
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Surface area of a right circular cylinder radius 2 and height 5?",
    'choices'     => json_encode([
        '28π',
        '20π',
        '14π',
        '24π',
    ]),
    'answer'      => '28π',
    'explanation' => 'SA = 2πr(r + h) = 2π×2(2+5) = 4π×7 =28π.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 169
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Find the area of a regular hexagon with side length 6.",
    'choices'     => json_encode([
        '54√3',
        '36√3',
        '72√3',
        '18√3',
    ]),
    'answer'      => '54√3',
    'explanation' => 'Area = (3√3/2)a² = (3√3/2)(36)=54√3.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 170
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the surface area of a triangular prism with base area 10, perimeter of base 12, and height 7?",
    'choices'     => json_encode([
        '104',
        '140',
        '124',
        '154',
    ]),
    'answer'      => '104',
    'explanation' => 'SA = 2B + Ph = 2(10) + 12×7 = 20 + 84 = 104.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 171
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the area of a rhombus with diagonals 10 and 8?",
    'choices'     => json_encode([
        '40',
        '80',
        '18',
        '24',
    ]),
    'answer'      => '40',
    'explanation' => 'Area = (d1 × d2)/2 = (10 × 8)/2 = 40.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 172
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Find the perimeter of a regular pentagon with side length 7.",
    'choices'     => json_encode([
        '35',
        '28',
        '42',
        '21',
    ]),
    'answer'      => '35',
    'explanation' => 'Perimeter = 5 × side = 5 × 7 = 35.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 173
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Compute the volume of a pyramid with base area 16 and height 9.",
    'choices'     => json_encode([
        '48',
        '144',
        '432',
        '96',
    ]),
    'answer'      => '48',
    'explanation' => 'Volume = (1/3) × B × h = (1/3) × 16 × 9 = 48.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 174
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the surface area of a hemisphere with radius 5?",
    'choices'     => json_encode([
        '75π',
        '50π',
        '25π',
        '100π',
    ]),
    'answer'      => '75π',
    'explanation' => 'Surface area of hemisphere = 3πr² = 3π(25) = 75π.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 175
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Find the lateral surface area of a right circular cone with radius 3 and slant height 5.",
    'choices'     => json_encode([
        '15π',
        '8π',
        '45π',
        '30π',
    ]),
    'answer'      => '15π',
    'explanation' => 'LSA = πrℓ = π×3×5 = 15π.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 176
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the distance from point (2,3) to the line y = 2x + 1?",
    'choices'     => json_encode([
        '3/√5',
        '2/√5',
        '1/√5',
        '5/√5',
    ]),
    'answer'      => '3/√5',
    'explanation' => 'Distance = |2 - (2·2 + 1)|/√(1+2²) = |2 - 5|/√5 = 3/√5.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 177
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Find the area of the annulus between circles of radii 6 and 4.",
    'choices'     => json_encode([
        '20π',
        '10π',
        '8π',
        '40π',
    ]),
    'answer'      => '20π',
    'explanation' => 'Area difference = π(6² - 4²) = π(36 - 16) = 20π.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 178
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the area of an equilateral triangle with side length 6?",
    'choices'     => json_encode([
        '9√3',
        '6√3',
        '12√3',
        '36√3',
    ]),
    'answer'      => '9√3',
    'explanation' => 'Area = (√3/4)a² = (√3/4)(36) = 9√3.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 179
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "Length of the space diagonal of a box with dimensions 3×4×12 is:",
    'choices'     => json_encode([
        '13',
        '7',
        '5',
        '√169',
    ]),
    'answer'      => '13',
    'explanation' => 'Diagonal = √(3²+4²+12²)=√(9+16+144)=√169=13.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 180
$batch[] = [
    'subject_id'  => 12,
    'part'        => 9,
    'question'    => "What is the area of a kite with diagonals 12 and 16?",
    'choices'     => json_encode([
        '96',
        '48',
        '192',
        '64',
    ]),
    'answer'      => '96',
    'explanation' => 'Area = (d1 × d2)/2 = (12 × 16)/2 = 96.',
    'created_at'  => $now,
    'updated_at'  => $now,
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

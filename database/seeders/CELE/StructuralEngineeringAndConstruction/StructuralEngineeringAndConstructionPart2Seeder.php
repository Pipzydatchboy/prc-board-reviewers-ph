<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart2Seeder extends Seeder
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
    //1
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'According to NSCP, what is the minimum clear cover for main reinforcement in a beam exposed to weather?',
        'choices'     => json_encode([
            '40 mm',
            '35 mm',
            '25 mm',
            '20 mm',
        ]),
        'answer'      => '40 mm',
        'explanation' => 'NSCP requires 40 mm cover for beams exposed to weather to protect against corrosion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'For a rectangular RC beam in flexure, the depth of the neutral axis x_u is determined by:',
        'choices'     => json_encode([
            'Equating tensile force in steel and compression block force',
            'Equating steel strain and concrete strain',
            'Using maximum fiber stress in concrete',
            'Trial and error only',
        ]),
        'answer'      => 'Equating tensile force in steel and compression block force',
        'explanation' => 'At ultimate, T = C, where C is concrete compression block force and T is steel tension.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'In steel design (LRFD), the nominal shear strength V_n of a beam web without stiffeners is:',
        'choices'     => json_encode([
            '0.6 F_y A_w',
            '0.4 F_y A_w',
            '0.6 F_y A_t',
            '0.4 F_y A_t',
        ]),
        'answer'      => '0.6 F_y A_w',
        'explanation' => 'LRFD uses V_n = 0.6 F_y A_w for webs without transverse stiffeners.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which load combination does NSCP specify for serviceability limit state of concrete structures?',
        'choices'     => json_encode([
            '1.0D + 1.0L + 0.3E',
            '1.2D + 1.6L + 0.5E',
            '1.0D + 0.75L + 0.3E',
            '1.0D + 1.0L',
        ]),
        'answer'      => '1.0D + 1.0L',
        'explanation' => 'For SLS NSCP uses 1.0 D + 1.0 L to check deflections and crack widths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'A fixed-fixed steel column of length L has an effective length factor K equal to:',
        'choices'     => json_encode([
            '0.5',
            '1.0',
            '2.0',
            '0.7',
        ]),
        'answer'      => '0.5',
        'explanation' => 'A column fixed at both ends has K ≈ 0.5 for buckling analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'In formwork design, the live load to be considered on slabs is:',
        'choices'     => json_encode([
            '2.4 kN/m²',
            '1.5 kN/m²',
            '3.0 kN/m²',
            '4.0 kN/m²',
        ]),
        'answer'      => '2.4 kN/m²',
        'explanation' => 'NSCP specifies 2.4 kN/m² live load on formwork for slabs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which of the following affects the curing time of concrete the most?',
        'choices'     => json_encode([
            'Ambient temperature',
            'Cement type',
            'Water–cement ratio',
            'Aggregate size',
        ]),
        'answer'      => 'Ambient temperature',
        'explanation' => 'Temperature strongly influences hydration rate and thus curing time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'In reinforced concrete detailing, spacing of stirrups should not exceed:',
        'choices'     => json_encode([
            '16 ties diameters or 0.75 d',
            '20 ties diameters or d',
            '10 ties diameters or 0.5 d',
            '24 ties diameters or 1.5 d',
        ]),
        'answer'      => '16 ties diameters or 0.75 d',
        'explanation' => 'Stirrups spacing ≤16 φ_stirrup or 0.75 effective depth to control shear.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which welding symbol indicates a fillet weld on the far side of a joint?',
        'choices'     => json_encode([
            'Triangle symbol on the right of reference line',
            'Triangle symbol on the left of reference line',
            'Dashed tail with triangle',
            'Circle around intersection',
        ]),
        'answer'      => 'Triangle symbol on the left of reference line',
        'explanation' => 'Weld symbol on left side means weld on far (opposite) side of joint.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'For a one‐way slab spanning between supports, bending reinforcement is placed:',
        'choices'     => json_encode([
            'Bottom of slab at midspan',
            'Top of slab at midspan',
            'Edge of slab',
            'Uniformly throughout',
        ]),
        'answer'      => 'Bottom of slab at midspan',
        'explanation' => 'Tension occurs at bottom at midspan in one‐way slabs under uniform load.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which test is used to assess the consistency of fresh concrete?',
        'choices'     => json_encode([
            'Slump test',
            'Compaction factor test',
            'Air content test',
            'Unit weight test',
        ]),
        'answer'      => 'Slump test',
        'explanation' => 'Slump test measures workability and consistency of fresh concrete.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'In timber formwork design, the span of joists should not exceed:',
        'choices'     => json_encode([
            '600 mm',
            '1200 mm',
            '800 mm',
            '1000 mm',
        ]),
        'answer'      => '800 mm',
        'explanation' => 'Joist span ≤800 mm to limit deflection under formwork loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which cement type is preferred for high‐early‐strength concrete?',
        'choices'     => json_encode([
            'Type III',
            'Type I',
            'Type II',
            'Type IV',
        ]),
        'answer'      => 'Type III',
        'explanation' => 'Type III cement has higher fineness for accelerated strength gain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which parameter controls the rate of heat generation in mass concrete?',
        'choices'     => json_encode([
            'Cement content',
            'Aggregate shape',
            'Water content',
            'Air content',
        ]),
        'answer'      => 'Cement content',
        'explanation' => 'Higher cement content increases heat of hydration in large pours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which reinforcing steel designation indicates deformed bars with minimum yield 420 MPa?',
        'choices'     => json_encode([
            'SD415',
            'SD295',
            'SD500',
            'SD390',
        ]),
        'answer'      => 'SD415',
        'explanation' => 'SD415 denotes deformed bars with nominal fy = 415 MPa per Philippine spec.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which type of column failure is governed by Euler’s buckling formula?',
        'choices'     => json_encode([
            'Long slender columns',
            'Short stocky columns',
            'Intermediate columns',
            'All columns',
        ]),
        'answer'      => 'Long slender columns',
        'explanation' => 'Euler applies when slenderness ratio exceeds 100–120 indicating flexural buckling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which construction document shows dimensions, materials, and methods in detail?',
        'choices'     => json_encode([
            'Working drawings',
            'Architectural plans',
            'Specifications',
            'Shop drawings',
        ]),
        'answer'      => 'Working drawings',
        'explanation' => 'Working drawings provide detailed instructions for construction execution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which equipment is essential for accurate vertical alignment in high‐rise formwork?',
        'choices'     => json_encode([
            'Theodolite',
            'Total station',
            'Laser level',
            'Plumb bob',
        ]),
        'answer'      => 'Laser level',
        'explanation' => 'Laser levels provide quick, precise reference for vertical alignment in tall structures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which mortar ratio is standard for brickwork in non‐load‐bearing walls?',
        'choices'     => json_encode([
            '1:4 (cement:sand)',
            '1:6',
            '1:3',
            '1:2',
        ]),
        'answer'      => '1:4 (cement:sand)',
        'explanation' => '1:4 mix offers adequate strength and workability for non‐load‐bearing masonry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 2,
        'question'    => 'Which safety factor is applied to reinforcement yield strength in LRFD?',
        'choices'     => json_encode([
            '1.1',
            '1.5',
            '1.25',
            '1.0',
        ]),
        'answer'      => '1.1',
        'explanation' => 'LRFD uses a φ‐factor of 0.9 for flexure, equivalent to FS≈1.1 on fy.',
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

<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'According to NSCP, what is the minimum development length for #16 deformed bars in tension in Grade 420 concrete?',
        'choices'     => json_encode([
            '40 db',
            '50 db',
            '60 db',
            '70 db',
        ]),
        'answer'      => '50 db',
        'explanation' => 'NSCP Table 11.2.1 specifies 50 bar diameters for Grade 420 in tension.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'For a fixed‐fixed steel beam, the moment magnification factor M is approximately:',
        'choices'     => json_encode([
            '0.7',
            '1.0',
            '1.2',
            '1.5',
        ]),
        'answer'      => '0.7',
        'explanation' => 'Fixed‐fixed beams have end moments ±0.7 M_fixed compared to simple span.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which type of connection resists moment by geometric interlock without welds or bolts through flange?',
        'choices'     => json_encode([
            'Shear tab',
            'Moment‐resisting bolted flange plate',
            'Flush end plate',
            'Seated connection',
        ]),
        'answer'      => 'Flush end plate',
        'explanation' => 'Flush end‐plate uses full‐depth plate welded to beam flange to resist moment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'What is the design bearing capacity of normal soil if allowable bearing is 200 kPa and FS = 3.0?',
        'choices'     => json_encode([
            '600 kPa',
            '200 kPa',
            '667 kPa',
            '800 kPa',
        ]),
        'answer'      => '600 kPa',
        'explanation' => 'Design = allowable×FS = 200×3 = 600 kPa.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'In column design, the interaction diagram plots:',
        'choices'     => json_encode([
            'Axial load vs. bending moment',
            'Shear vs. moment',
            'Axial load vs. shear',
            'Deflection vs. moment',
        ]),
        'answer'      => 'Axial load vs. bending moment',
        'explanation' => 'Interaction diagram shows capacity under combined P–M loading.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which weld type has greater fatigue resistance in steel structures?',
        'choices'     => json_encode([
            'Continuous full‐penetration weld',
            'Intermittent fillet weld',
            'Plug weld',
            'Spot weld',
        ]),
        'answer'      => 'Continuous full‐penetration weld',
        'explanation' => 'Continuous full‐penetration weld avoids stress concentrations, improving fatigue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'For shrinkage control, maximum allowable spacing of shrinkage reinforcement in walls is:',
        'choices'     => json_encode([
            '3 m',
            '4 m',
            '5 m',
            '6 m',
        ]),
        'answer'      => '4 m',
        'explanation' => 'NSCP limits wall shrinkage bar spacing to 4 m to control cracking.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which analysis method for indeterminate frames accounts for member stiffness?',
        'choices'     => json_encode([
            'Moment distribution',
            'Slope deflection',
            'Finite element',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Slope‐deflection, moment‐distribution, and FEM all include stiffness effects.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which concrete test checks early‐age shrinkage potential?',
        'choices'     => json_encode([
            'Ring test',
            'Slump test',
            'Compressive strength test',
            'Air content test',
        ]),
        'answer'      => 'Ring test',
        'explanation' => 'Ring test measures restrained shrinkage cracking tendency at early ages.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'In footing design, eccentric loading reduces allowable bearing by factor:',
        'choices'     => json_encode([
            '1 – 2e/B',
            '1 + 2e/B',
            '1 – e/B',
            '1 + e/B',
        ]),
        'answer'      => '1 – 2e/B',
        'explanation' => 'Eccentricity reduces effective width: reduction factor = 1 – 2e/B.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which type of formwork is reusable and adjustable for repetitive floor slabs?',
        'choices'     => json_encode([
            'Modular steel formwork',
            'Timber formwork',
            'Plywood formwork',
            'Slip formwork',
        ]),
        'answer'      => 'Modular steel formwork',
        'explanation' => 'Modular steel systems are durable and quickly adjustable for repeated use.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which method determines the buckling load of columns experimentally?',
        'choices'     => json_encode([
            'Column test with incremental load',
            'Plate load test',
            'Direct shear test',
            'Slump test',
        ]),
        'answer'      => 'Column test with incremental load',
        'explanation' => 'Load is applied until buckling occurs to measure critical load experimentally.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which steel grade is specified by NSCP for high‐strength bolts (F<sub>u</sub> ≥ 830 MPa)?',
        'choices'     => json_encode([
            'A325',
            'A490',
            'F436',
            'F548',
        ]),
        'answer'      => 'A490',
        'explanation' => 'A490 bolts have minimum tensile ≥ 830 MPa and are high‐strength per ASTM.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Maximum allowable deflection for beams supporting plaster ceilings is L/360. If span is 4 m, deflection limit is:',
        'choices'     => json_encode([
            '11.1 mm',
            '5 mm',
            '15 mm',
            '8 mm',
        ]),
        'answer'      => '11.1 mm',
        'explanation' => '4 000 mm / 360 = 11.11 mm maximum deflection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which construction contract type pays a fixed fee regardless of actual cost?',
        'choices'     => json_encode([
            'Lump‐sum contract',
            'Cost‐plus contract',
            'Unit‐price contract',
            'Time & materials contract',
        ]),
        'answer'      => 'Lump‐sum contract',
        'explanation' => 'Lump‐sum (fixed‐price) contract sets total price in advance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which test best evaluates bond strength between new and old concrete?',
        'choices'     => json_encode([
            'Pull‐off test',
            'Slump test',
            'Compressive strength test',
            'Rebound hammer test',
        ]),
        'answer'      => 'Pull‐off test',
        'explanation' => 'Pull‐off (adhesion) test measures tensile bond strength of overlay systems.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which component of a welded connection reduces fatigue crack initiation?',
        'choices'     => json_encode([
            'Smooth transition (no undercut)',
            'Sharp root profile',
            'Intermittent weld',
            'Loose fit',
        ]),
        'answer'      => 'Smooth transition (no undercut)',
        'explanation' => 'Smooth weld profiles avoid stress risers that initiate fatigue cracks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'In concrete mix design, slump retention is improved by adding:',
        'choices'     => json_encode([
            'Water‐reducing admixture',
            'Accelerating admixture',
            'Air‐entraining admixture',
            'Pozzolanic material',
        ]),
        'answer'      => 'Water‐reducing admixture',
        'explanation' => 'Water reducers maintain workability (slump) without adding extra water.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which inspection verifies correct placement of reinforcing before concrete pour?',
        'choices'     => json_encode([
            'Rebar inspection',
            'Slump test',
            'Cube test',
            'Air content test',
        ]),
        'answer'      => 'Rebar inspection',
        'explanation' => 'Visual and dimensional checks ensure reinforcement spacing and cover meet drawings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 3,
        'question'    => 'Which safety margin is recommended for working loads on formwork?',
        'choices'     => json_encode([
            '1.5',
            '1.25',
            '1.33',
            '2.0',
        ]),
        'answer'      => '1.5',
        'explanation' => 'A safety factor of 1.5 on design loads is typical for temporary formworks.',
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

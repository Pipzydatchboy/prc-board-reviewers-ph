<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'According to the National Structural Code of the Philippines (NSCP), what is the minimum clear cover for main reinforcement in a slab exposed to earth (interior)?',
        'choices'     => json_encode([
            '20 mm',
            '25 mm',
            '30 mm',
            '40 mm',
        ]),
        'answer'      => '25 mm',
        'explanation' => 'NSCP requires 25 mm clear cover for interior slabs exposed to earth to protect reinforcement from corrosion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'A simply supported beam with span L carries a uniformly distributed load w. The maximum bending moment at midspan is:',
        'choices'     => json_encode([
            'wL²/8',
            'wL²/12',
            'wL/8',
            'wL²/16',
        ]),
        'answer'      => 'wL²/8',
        'explanation' => 'For a simply supported beam under UDL, M_max = wL²/8 at midspan.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'In reinforced concrete design using LRFD, the strength reduction factor φ for flexure in beams is typically:',
        'choices'     => json_encode([
            '0.90',
            '0.65',
            '0.75',
            '0.85',
        ]),
        'answer'      => '0.90',
        'explanation' => 'LRFD φ-factor for beam flexure is 0.90 to account for variability and ductility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which load combination is required by NSCP for ultimate limit state design of concrete structures?',
        'choices'     => json_encode([
            '1.2D + 1.6L + 0.5E',
            '1.4D + 1.7L',
            '1.0D + 1.0L + 1.0W',
            '1.2D + 1.0L + 1.0W',
        ]),
        'answer'      => '1.2D + 1.6L + 0.5E',
        'explanation' => 'NSCP adopts 1.2Dead +1.6Live +0.5Earthquake for ultimate combination under seismic load.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'A steel column of length 3 m is pinned at both ends. Its effective length factor K is:',
        'choices'     => json_encode([
            '1.0',
            '0.5',
            '2.0',
            '0.7',
        ]),
        'answer'      => '1.0',
        'explanation' => 'A column pinned at both ends has K = 1.0 for buckling calculation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'In structural steel design (ASD), the allowable stress in bending (Fb) is based on:',
        'choices'     => json_encode([
            'Fy/1.67',
            'Fy/1.5',
            '0.6Fy',
            '0.66Fy',
        ]),
        'answer'      => '0.6Fy',
        'explanation' => 'Allowable bending stress in ASD is 0.6 times yield strength Fy for grade 300 MPa steel.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which type of footing is most economical for a column with low axial load and good soil?',
        'choices'     => json_encode([
            'Isolated pad footing',
            'Combined footing',
            'Raft footing',
            'Strip footing',
        ]),
        'answer'      => 'Isolated pad footing',
        'explanation' => 'Pad footings are simplest and most economical for individual columns on good soil.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'For control of cracking in reinforced concrete, maximum spacing of temperature steel in slabs is:',
        'choices'     => json_encode([
            '3 h or 450 mm, whichever is smaller',
            '5 h or 600 mm, whichever is smaller',
            '7 h or 750 mm, whichever is larger',
            '10 h or 1000 mm, whichever is larger',
        ]),
        'answer'      => '3 h or 450 mm, whichever is smaller',
        'explanation' => 'Maximum bar spacing ≤3×effective depth or 450 mm to limit crack width.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which analysis method assumes plane sections remain plane in bending?',
        'choices'     => json_encode([
            'Elastic beam theory',
            'Plastic analysis',
            'Finite element method',
            'Matrix stiffness method',
        ]),
        'answer'      => 'Elastic beam theory',
        'explanation' => 'Elastic theory for flexure is based on plane sections assumption (Bernoulli–Navier).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'In brick masonry construction, the minimum mortar bed thickness is:',
        'choices'     => json_encode([
            '10 mm',
            '20 mm',
            '30 mm',
            '40 mm',
        ]),
        'answer'      => '10 mm',
        'explanation' => 'Standard mortar joint thickness ranges from 10 to 12 mm for uniform bonding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'A simply supported two-hinged arch carries a uniform horizontal thrust H and uniform load. The maximum bending moment occurs at:',
        'choices'     => json_encode([
            'Quarter span',
            'Midspan',
            'Supports',
            'Third points',
        ]),
        'answer'      => 'Quarter span',
        'explanation' => 'In two-hinged arches, maximum moment under uniform load is at L/4 from support.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which cement type is specified by NSCP for marine concrete exposure?',
        'choices'     => json_encode([
            'Type II (Moderate sulfate resistance)',
            'Type I (General purpose)',
            'Type III (High early strength)',
            'Type IV (Low heat of hydration)',
        ]),
        'answer'      => 'Type II (Moderate sulfate resistance)',
        'explanation' => 'Type II cement provides moderate sulfate resistance required in marine environments.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'The slenderness ratio (KL/r) of a steel column should not exceed:',
        'choices'     => json_encode([
            '200',
            '100',
            '50',
            '300',
        ]),
        'answer'      => '200',
        'explanation' => 'NSCP limits slenderness ratio to 200 for columns to avoid buckling issues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'In concrete mix design, the target mean strength (f\'cr) is calculated as:',
        'choices'     => json_encode([
            'f\'c + 1.65σ',
            'f\'c – 1.65σ',
            'f\'c + 2.33σ',
            'f\'c – 2.33σ',
        ]),
        'answer'      => 'f\'c + 1.65σ',
        'explanation' => 'Target mean = specified strength + 1.65 standard deviation per ACI for quality control.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which of the following is a limit state for serviceability in concrete design?',
        'choices'     => json_encode([
            'Deflection',
            'Flexural strength',
            'Shear capacity',
            'Axial capacity',
        ]),
        'answer'      => 'Deflection',
        'explanation' => 'Serviceability limit states include deflection and crack width control.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which joint type allows for thermal movement in concrete pavements?',
        'choices'     => json_encode([
            'Contraction joint',
            'Expansion joint',
            'Construction joint',
            'Isolation joint',
        ]),
        'answer'      => 'Expansion joint',
        'explanation' => 'Expansion joints accommodate slab expansion due to temperature increase.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which factor of safety is typically used for allowable stress design of steel structures?',
        'choices'     => json_encode([
            '1.67',
            '1.33',
            '1.5',
            '2.0',
        ]),
        'answer'      => '1.67',
        'explanation' => 'ASD uses FS ≈1.67 on yield strength for steel to ensure safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'The modulus of elasticity of normal-weight concrete is approximately:',
        'choices'     => json_encode([
            '4700√f\'c (MPa)',
            '5600√f\'c (MPa)',
            '3300√f\'c (MPa)',
            '2500√f\'c (MPa)',
        ]),
        'answer'      => '4700√f\'c (MPa)',
        'explanation' => 'ACI recommends Ec = 4700√f\'c (in MPa) for normal-weight concrete.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which construction material has the highest tensile strength-to-weight ratio?',
        'choices'     => json_encode([
            'Structural steel',
            'Reinforced concrete',
            'Timber',
            'Masonry',
        ]),
        'answer'      => 'Structural steel',
        'explanation' => 'Steel combines high tensile strength with relatively low density, giving high strength-to-weight.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 1,
        'question'    => 'Which sequence is the correct order of activities for concrete construction?',
        'choices'     => json_encode([
            'Formwork → Placement → Compaction → Curing',
            'Placement → Formwork → Compaction → Curing',
            'Formwork → Compaction → Placement → Curing',
            'Formwork → Placement → Curing → Compaction',
        ]),
        'answer'      => 'Formwork → Placement → Compaction → Curing',
        'explanation' => 'Standard sequence ensures correct shape, consolidation, and hydration of concrete.',
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

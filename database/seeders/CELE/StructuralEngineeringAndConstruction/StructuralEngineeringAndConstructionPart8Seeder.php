<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which inspection method uses penetrant liquids to reveal surface cracks in welds?',
        'choices'     => json_encode([
            'Dye penetrant testing',
            'Magnetic particle testing',
            'Ultrasonic testing',
            'Radiographic testing',
        ]),
        'answer'      => 'Dye penetrant testing',
        'explanation' => 'Liquid penetrants seep into surface defects and are made visible by developer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'In reinforced concrete seismic design, what is the minimum confinement reinforcement ratio for beams in plastic hinge regions?',
        'choices'     => json_encode([
            '0.01',
            '0.0025',
            '0.005',
            '0.02',
        ]),
        'answer'      => '0.01',
        'explanation' => 'NSCP requires ≥1% transverse steel ratio in plastic hinge regions for ductility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which formwork component transfers vertical loads to the foundation?',
        'choices'     => json_encode([
            'Shoring posts (props)',
            'Sheathing',
            'Walings',
            'Braces',
        ]),
        'answer'      => 'Shoring posts (props)',
        'explanation' => 'Props support the weight of fresh concrete and formwork, transmitting loads downwards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which method estimates concrete strength from ultrasonic pulse velocity readings?',
        'choices'     => json_encode([
            'Empirical correlation',
            'Core testing',
            'Rebound hammer calibration',
            'Schmidt hammer conversion',
        ]),
        'answer'      => 'Empirical correlation',
        'explanation' => 'UPV values are related to strength using empirical curves developed from calibration tests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which steel beam designation indicates a nominal depth of 300 mm and flange width 150 mm?',
        'choices'     => json_encode([
            'W300×150',
            'H300×150',
            'C300×150',
            'S300×150',
        ]),
        'answer'      => 'W300×150',
        'explanation' => 'W-sections are wide-flange beams with depth×width format.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'In construction scheduling, “float” refers to:',
        'choices'     => json_encode([
            'Time an activity can be delayed without delaying project finish',
            'Time lost due to delays',
            'Slippage between activities',
            'Buffer time for resources',
        ]),
        'answer'      => 'Time an activity can be delayed without delaying project finish',
        'explanation' => 'Float (slack) is the difference between earliest and latest start times.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which design approach checks member strength and serviceability separately with factors applied?',
        'choices'     => json_encode([
            'Limit state design',
            'Allowable stress design',
            'Working stress design',
            'Load and resistance factor design',
        ]),
        'answer'      => 'Limit state design',
        'explanation' => 'Limit state applies strength (ULS) and serviceability (SLS) checks with load/resistance factors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which component of a formwork panel resists bending due to lateral concrete pressure?',
        'choices'     => json_encode([
            'Walings',
            'Braces',
            'Props',
            'Decking',
        ]),
        'answer'      => 'Walings',
        'explanation' => 'Walings are horizontal members that stiffen vertical sheathing panels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which quality control test measures concrete air content by pressure method?',
        'choices'     => json_encode([
            'Pressure air meter',
            'Volumetric method',
            'Slump test',
            'Unit weight test',
        ]),
        'answer'      => 'Pressure air meter',
        'explanation' => 'Pressure method uses a calibrated vessel to measure expelled air under pressure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which structural analysis model idealizes members as springs connecting nodes?',
        'choices'     => json_encode([
            'Finite element method',
            'Moment distribution',
            'Matrix stiffness method',
            'Virtual work method',
        ]),
        'answer'      => 'Matrix stiffness method',
        'explanation' => 'Stiffness method represents elements as springs with stiffness matrices in global system.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which formwork removal time does NSCP allow for cantilever slabs at 21 °C?',
        'choices'     => json_encode([
            '7 days',
            '14 days',
            '21 days',
            '28 days',
        ]),
        'answer'      => '14 days',
        'explanation' => 'Cantilever slabs require longer cure (14 days) before removing support to prevent deflection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which excavation support method uses soil nails to stabilize slopes?',
        'choices'     => json_encode([
            'Soil nailing',
            'Sheet piling',
            'Braced cut',
            'Anchored wall',
        ]),
        'answer'      => 'Soil nailing',
        'explanation' => 'Soil nails are slender elements installed and grouted to reinforce soil mass.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which steel section has equal flange and web thicknesses for high torsional stiffness?',
        'choices'     => json_encode([
            'Rectangular hollow section (RHS)',
            'I-section',
            'Channel',
            'T-section',
        ]),
        'answer'      => 'Rectangular hollow section (RHS)',
        'explanation' => 'Hollow sections resist torsion effectively due to closed geometry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which parameter controls pumpability of concrete in pumping operations?',
        'choices'     => json_encode([
            'Slump and viscosity',
            'Compressive strength',
            'Air content',
            'Aggregate shape',
        ]),
        'answer'      => 'Slump and viscosity',
        'explanation' => 'Workability and rheology determine ease of pumping without blockage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which project management tool tracks dependencies and durations in a network diagram?',
        'choices'     => json_encode([
            'PERT chart',
            'Gantt chart',
            'Kanban board',
            'Work breakdown structure',
        ]),
        'answer'      => 'PERT chart',
        'explanation' => 'PERT diagrams show activity nodes and dependency arrows with time estimates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which NDT method detects near-surface cracks using magnetic fields?',
        'choices'     => json_encode([
            'Magnetic particle testing',
            'Dye penetrant testing',
            'Ultrasonic testing',
            'Radiographic testing',
        ]),
        'answer'      => 'Magnetic particle testing',
        'explanation' => 'Magnetic particles accumulate at leakage fields over surface defects, revealing cracks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which component in steel bolted joints ensures clamping force remains after slip?',
        'choices'     => json_encode([
            'Lock nuts',
            'Flat washers',
            'Fender washers',
            'Spring washers',
        ]),
        'answer'      => 'Lock nuts',
        'explanation' => 'Lock nuts resist loosening under vibration, maintaining pre-tension in bolts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which concrete admixture is used to entrain microscopic air bubbles for freeze–thaw durability?',
        'choices'     => json_encode([
            'Air-entraining agent',
            'Water reducer',
            'Retarder',
            'Accelerator',
        ]),
        'answer'      => 'Air-entraining agent',
        'explanation' => 'Entrained air provides space for freezing water, reducing internal stresses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which formwork defect leads to honeycombing in cast concrete?',
        'choices'     => json_encode([
            'Insufficient vibration',
            'Improper alignment',
            'Under-strength timber',
            'Excessive reuse',
        ]),
        'answer'      => 'Insufficient vibration',
        'explanation' => 'Lack of consolidation traps air and prevents mortar filling voids around aggregates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 8,
        'question'    => 'Which safety standard governs fall protection systems in construction?',
        'choices'     => json_encode([
            'OSH Standards',
            'NSCP',
            'ACI 318',
            'ASTM C597',
        ]),
        'answer'      => 'OSH Standards',
        'explanation' => 'Occupational Safety and Health regulations specify requirements for fall arrest and protection.',
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

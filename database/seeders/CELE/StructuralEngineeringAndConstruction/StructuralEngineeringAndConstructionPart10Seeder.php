<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which connection is typically used to transfer high shear but low moment between steel members?',
        'choices'     => json_encode([
            'Shear tab connection',
            'Moment‐resisting welded flange plate',
            'End‐plate connection',
            'Seated connection',
        ]),
        'answer'      => 'Shear tab connection',
        'explanation' => 'Shear tab connections consist of a plate welded to the beam web and bolted to the column to resist shear only.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'In reinforced concrete design, the neutral axis depth c for a singly reinforced section is found by equating:',
        'choices'     => json_encode([
            'Tension in steel and compression in concrete',
            'Concrete strain and steel strain',
            'Area of steel and area of concrete',
            'Dead load and live load',
        ]),
        'answer'      => 'Tension in steel and compression in concrete',
        'explanation' => 'At ultimate, the internal tensile force in the steel equals the compressive force in the concrete block.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which factor governs the allowable stress in bolted steel members under cyclic loading?',
        'choices'     => json_encode([
            'Fatigue strength reduction factor',
            'Yield strength reduction factor',
            'Tensile strength reduction factor',
            'Buckling reduction factor',
        ]),
        'answer'      => 'Fatigue strength reduction factor',
        'explanation' => 'Bolted connections under cyclic loading must consider fatigue strength and apply reduction factors accordingly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which formwork defect is indicated by bulging or blowouts during concrete placement?',
        'choices'     => json_encode([
            'Insufficient bracing',
            'Excess vibration',
            'Too much water in mix',
            'Delayed stripping',
        ]),
        'answer'      => 'Insufficient bracing',
        'explanation' => 'Bulging or blowouts occur when the lateral pressure exceeds formwork bracing capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which NDT method is best for detecting subsurface delaminations in concrete slabs?',
        'choices'     => json_encode([
            'Infrared thermography',
            'Rebound hammer',
            'Covermeter',
            'Visual inspection',
        ]),
        'answer'      => 'Infrared thermography',
        'explanation' => 'Infrared thermography detects temperature differentials that indicate subsurface voids or delaminations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which scheduling technique incorporates uncertainty by using probabilistic time estimates?',
        'choices'     => json_encode([
            'PERT',
            'CPM',
            'Gantt chart',
            'Line of balance',
        ]),
        'answer'      => 'PERT',
        'explanation' => 'The Program Evaluation Review Technique (PERT) uses optimistic, most likely, and pessimistic time estimates to evaluate uncertainty.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'In steel column design, the critical buckling stress F_cr is given by Euler’s formula as π²EI divided by:',
        'choices'     => json_encode([
            'KL²',
            'L²',
            'K²L',
            'KL',
        ]),
        'answer'      => 'KL²',
        'explanation' => 'Euler buckling: F_cr = π²EI/(K L)², where K is the effective length factor and L the unsupported length.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which concrete curing method forms a moisture‐retaining membrane on the surface?',
        'choices'     => json_encode([
            'Membrane‐forming curing compound',
            'Wet burlap',
            'Ponding',
            'Continuous sprinkling',
        ]),
        'answer'      => 'Membrane‐forming curing compound',
        'explanation' => 'Curing compounds seal the surface to prevent moisture evaporation and maintain hydration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which concrete test measures the rate of surface absorption to assess permeability?',
        'choices'     => json_encode([
            'Wetting‐drying absorption test',
            'Rapid chloride permeability test',
            'Sorptivity test',
            'Core test',
        ]),
        'answer'      => 'Sorptivity test',
        'explanation' => 'Sorptivity quantifies capillary absorption rate of water into concrete pores.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which component of temporary works must be designed for differential settlement?',
        'choices'     => json_encode([
            'Shoring posts',
            'Formwork sheathing',
            'Walings',
            'Bracing',
        ]),
        'answer'      => 'Shoring posts',
        'explanation' => 'Shoring posts support vertical loads and must accommodate any uneven settlement of ground or structure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which standard defines tolerances for built‐up steel members in the Philippines?',
        'choices'     => json_encode([
            'PS ASTM A6',
            'NSCP',
            'ACI 318',
            'ISO 9001',
        ]),
        'answer'      => 'PS ASTM A6',
        'explanation' => 'Philippine Standard ASTM A6 specifies tolerances for dimensions and flatness of steel shapes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which admixture reduces segregation and bleeding in high‐slump concrete?',
        'choices'     => json_encode([
            'Viscosity‐modifying admixture',
            'Water‐reducing admixture',
            'Air‐entraining agent',
            'Accelerator',
        ]),
        'answer'      => 'Viscosity‐modifying admixture',
        'explanation' => 'VMAs increase cohesion and stability of the mix, preventing segregation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'What is the minimum grade of high‐strength bolt specified by NSCP for structural connections?',
        'choices'     => json_encode([
            'Grade 8.8',
            'Grade 5.6',
            'Grade 10.9',
            'Grade 4.6',
        ]),
        'answer'      => 'Grade 8.8',
        'explanation' => 'NSCP requires at least Grade 8.8 (800 MPa tensile strength) for friction‐type bolts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which structural system provides both gravity and lateral load resistance using concrete beams and columns without shear walls?',
        'choices'     => json_encode([
            'Moment‐resisting frame',
            'Braced frame',
            'Dual system',
            'Shear wall system',
        ]),
        'answer'      => 'Moment‐resisting frame',
        'explanation' => 'Moment‐resisting frames rely on beam‐column rigid joints to resist gravity and lateral loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which foundation type is recommended where shallow bearing capacity is adequate but settlement must be controlled?',
        'choices'     => json_encode([
            'Raft (mat) foundation',
            'Isolated pad footing',
            'Pile foundation',
            'Strip footing',
        ]),
        'answer'      => 'Raft (mat) foundation',
        'explanation' => 'Raft foundations spread loads over a wide area and reduce differential settlement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which project delivery method separates designer, contractor, and construction manager roles?',
        'choices'     => json_encode([
            'Construction management‐at‐risk',
            'Design‐build',
            'Design‐bid‐build',
            'Integrated project delivery',
        ]),
        'answer'      => 'Design‐bid‐build',
        'explanation' => 'Design‐bid‐build engages separate contracts for design and construction through competitive bidding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which tool is commonly used to level formwork and check elevations quickly on site?',
        'choices'     => json_encode([
            'Laser level',
            'Theodolite',
            'Total station',
            'Dumpy level',
        ]),
        'answer'      => 'Laser level',
        'explanation' => 'Laser levels project a horizontal plane of light for fast leveling over large areas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which parameter in CPM scheduling represents the earliest time an activity can finish?',
        'choices'     => json_encode([
            'Early finish (EF)',
            'Late finish (LF)',
            'Early start (ES)',
            'Late start (LS)',
        ]),
        'answer'      => 'Early finish (EF)',
        'explanation' => 'EF = ES + duration; it is the earliest possible completion time based on predecessors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which safety document identifies potential hazards and mitigation measures before work begins?',
        'choices'     => json_encode([
            'Job safety analysis (JSA)',
            'Environmental management plan',
            'Quality manual',
            'Project specifications',
        ]),
        'answer'      => 'Job safety analysis (JSA)',
        'explanation' => 'A JSA breaks down tasks to identify hazards and control measures prior to execution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 10,
        'question'    => 'Which inspection and test confirms grout performance in post‐tensioned tendons?',
        'choices'     => json_encode([
            'Pressure test of grout lines',
            'Slump test',
            'Air content test',
            'Cube test',
        ]),
        'answer'      => 'Pressure test of grout lines',
        'explanation' => 'Pressure testing ensures grout has fully filled ducts and bonds tendons to concrete.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

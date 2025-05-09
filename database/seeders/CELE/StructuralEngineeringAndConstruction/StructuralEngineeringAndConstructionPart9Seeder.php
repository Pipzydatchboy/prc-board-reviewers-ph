<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'According to NSCP, what is the required minimum longitudinal reinforcement ratio in a simply supported reinforced concrete beam?',
        'choices'     => json_encode([
            '0.8%',
            '0.2%',
            '1.0%',
            '0.4%',
        ]),
        'answer'      => '0.8%',
        'explanation' => 'NSCP specifies a minimum of 0.8% to ensure ductile flexural behavior and crack control.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'In steel design (LRFD), the nominal flexural strength M_n of a compact section is determined by:',
        'choices'     => json_encode([
            'Plastic moment capacity',
            'Yield moment capacity',
            'Elastic section modulus × yield stress',
            'First yield moment',
        ]),
        'answer'      => 'Plastic moment capacity',
        'explanation' => 'For compact sections, the full plastic moment (M_p) can develop before instability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which formwork safety factor accounts for dynamic effects of placing concrete?',
        'choices'     => json_encode([
            '1.25',
            '1.0',
            '1.5',
            '1.75',
        ]),
        'answer'      => '1.25',
        'explanation' => 'NSCP applies 1.25 on concrete live loads to consider impact and placement vibration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which test is used to determine the tensile strength of concrete in situ without cores?',
        'choices'     => json_encode([
            'Schmidt rebound hammer',
            'Split-cylinder test',
            'Pull-off adhesion test',
            'Ultrasonic pulse velocity',
        ]),
        'answer'      => 'Pull-off adhesion test',
        'explanation' => 'The pull-off test measures the tensile stress required to detach a glued disc from the surface.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'In reinforced concrete detailing, the maximum spacing of transverse ties around columns in high-seismic regions is:',
        'choices'     => json_encode([
            '8 ties diameters',
            '16 ties diameters',
            '12 ties diameters',
            '24 ties diameters',
        ]),
        'answer'      => '8 ties diameters',
        'explanation' => 'Seismic provisions require tighter confinement: max spacing = 8db or 100 mm, whichever smaller.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which structural steel section has the greatest torsional stiffness per unit weight?',
        'choices'     => json_encode([
            'HSS (hollow section)',
            'I-section',
            'Channel',
            'T-section',
        ]),
        'answer'      => 'HSS (hollow section)',
        'explanation' => 'Closed‐shape HSS sections have high torsional rigidity and good strength‐to‐weight ratio.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which load combination is most critical for serviceability deflection of a continuous beam under live load only?',
        'choices'     => json_encode([
            '1.0D + 1.0L',
            '1.2D + 1.6L',
            '0.9D + 1.0L',
            '1.0D + 0.75L',
        ]),
        'answer'      => '1.0D + 1.0L',
        'explanation' => 'Service limit checks use full dead plus full live load to control deflection and vibration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which NDT method measures continuity of reinforcement and cover without removal of concrete?',
        'choices'     => json_encode([
            'Covermeter scanning',
            'Schmidt hammer',
            'Magnetic particle',
            'Dye penetrant',
        ]),
        'answer'      => 'Covermeter scanning',
        'explanation' => 'Covermeters (rebar locators) provide non‐destructive mapping of bar position and concrete cover.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'In timber construction, the allowable bending stress is commonly based on:',
        'choices'     => json_encode([
            'Modulus of rupture',
            'Modulus of elasticity',
            'Compression parallel to grain',
            'Shear parallel to grain',
        ]),
        'answer'      => 'Modulus of rupture',
        'explanation' => 'Allowable bending stress is derived from the modulus of rupture (flexural strength) of wood.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which concrete mix design parameter most directly controls durability in aggressive environments?',
        'choices'     => json_encode([
            'Water–cement ratio',
            'Aggregate size',
            'Slump',
            'Admixture type',
        ]),
        'answer'      => 'Water–cement ratio',
        'explanation' => 'Lower w/c reduces permeability, limiting ingress of harmful agents and enhancing durability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which formwork removal time does NSCP require for beams at 21 °C?',
        'choices'     => json_encode([
            '3 days',
            '7 days',
            '14 days',
            '28 days',
        ]),
        'answer'      => '14 days',
        'explanation' => 'Beams need longer cure for moment capacity, typically 14 days to reach ~70% strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which steel connector is preferred for high-frequency erection without welding?',
        'choices'     => json_encode([
            'Bolted end-plate',
            'Shear tab',
            'Moment-resisting welded flange plate',
            'Seated connection',
        ]),
        'answer'      => 'Bolted end-plate',
        'explanation' => 'Bolted end-plates allow fast assembly/disassembly with predictable bolt tension.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which structural analysis tool uses stiffness matrices assembled into a global matrix?',
        'choices'     => json_encode([
            'Matrix stiffness method',
            'Moment distribution',
            'Virtual work',
            'Plastic analysis',
        ]),
        'answer'      => 'Matrix stiffness method',
        'explanation' => 'The stiffness method is the basis for most finite‐element and structural analysis software.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which safety factor is applied to steel yield strength in ASD?',
        'choices'     => json_encode([
            '1.67',
            '1.5',
            '1.33',
            '2.0',
        ]),
        'answer'      => '1.67',
        'explanation' => 'ASD uses 1.67 to convert yield strength to allowable stress for steel flexure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which piezocone test parameter is used to estimate soil stratigraphy in situ?',
        'choices'     => json_encode([
            'Tip resistance (q_c)',
            'Shear wave velocity',
            'Water content',
            'Slope of sleeve friction',
        ]),
        'answer'      => 'Tip resistance (q_c)',
        'explanation' => 'Cone tip resistance provides continuous profile of soil strength and stratification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which load effect is explicitly considered in design of retaining walls for seismic regions?',
        'choices'     => json_encode([
            'Seismic active earth pressure',
            'Snow load',
            'Rain load',
            'Thermal load',
        ]),
        'answer'      => 'Seismic active earth pressure',
        'explanation' => 'NSCP requires inclusion of additional seismic earth pressure coefficients in design.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which temporary works design principle ensures stability during construction?',
        'choices'     => json_encode([
            'Build-up of lateral support before excavation',
            'Remove all bracing early',
            'Apply full loads immediately',
            'Ignore wind effects',
        ]),
        'answer'      => 'Build-up of lateral support before excavation',
        'explanation' => 'Staged support prevents collapse: provide bracing or shoring before removing material.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which quality management document outlines inspection and test plans for materials?',
        'choices'     => json_encode([
            'Inspection & Test Plan (ITP)',
            'Project Specifications',
            'Quality Manual',
            'Work Method Statement',
        ]),
        'answer'      => 'Inspection & Test Plan (ITP)',
        'explanation' => 'ITP details hold points, inspection criteria, and acceptance tests for each activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which structural connection is designed to yield before fracture under overload?',
        'choices'     => json_encode([
            'Ductile moment-resisting connection',
            'Shear tab connection',
            'Slip-critical connection',
            'Pinned connection',
        ]),
        'answer'      => 'Ductile moment-resisting connection',
        'explanation' => 'Ductile connections are detailed to develop plastic rotation capacity without brittle failure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 9,
        'question'    => 'Which concrete curing method is least effective in windy, hot conditions?',
        'choices'     => json_encode([
            'Ponding',
            'Wet burlap',
            'Continuous sprinkling',
            'Membrane curing compound',
        ]),
        'answer'      => 'Membrane curing compound',
        'explanation' => 'In high wind/heat, membranes can crack and allow moisture loss; wet methods are preferred.',
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

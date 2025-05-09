<?php

namespace Database\Seeders\CELE\StructuralEngineeringAndConstruction;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StructuralEngineeringAndConstructionPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'According to NSCP, what is the minimum lap splice length for #20 deformed bars in tension?',
        'choices'     => json_encode([
            '50 db',
            '40 db',
            '60 db',
            '70 db',
        ]),
        'answer'      => '50 db',
        'explanation' => 'NSCP Table 11.2.2 specifies 50 bar diameters for tension lap splices.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which type of straight steel beam section is most efficient in bending?',
        'choices'     => json_encode([
            'I-section',
            'T-section',
            'Channel',
            'Rectangular hollow section',
        ]),
        'answer'      => 'I-section',
        'explanation' => 'I-sections have high moment of inertia for given weight, efficient in bending.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'In formwork design, the pressure of fresh concrete is assumed to act as a triangular distribution with zero at the top and maximum at the bottom at:',
        'choices'     => json_encode([
            '1.0 kN/m² per meter depth',
            '2.0 kN/m² per meter depth',
            '1.5 kN/m² per meter depth',
            '0.75 kN/m² per meter depth',
        ]),
        'answer'      => '2.0 kN/m² per meter depth',
        'explanation' => 'NSCP uses 2.0 kN/m² per meter to account for hydrostatic pressure of plastic concrete.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which project control chart displays target versus actual progress over time?',
        'choices'     => json_encode([
            'S-curve',
            'Gantt chart',
            'PERT chart',
            'Flowline chart',
        ]),
        'answer'      => 'S-curve',
        'explanation' => 'S-curves plot cumulative progress, comparing planned versus actual work.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'For a simply supported RC T-beam, the flange is in compression when depth of flange ≥:',
        'choices'     => json_encode([
            '0.15 d',
            '0.50 d',
            '0.75 d',
            '0.25 d',
        ]),
        'answer'      => '0.15 d',
        'explanation' => 'When flange width ≥ (b_f h_f)/(0.85 d), usually simplified to flange thickness ≈0.15 d.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which NDT method uses ultrasonic pulses to detect internal defects in concrete?',
        'choices'     => json_encode([
            'Ultrasonic pulse velocity',
            'Rebound hammer',
            'Ground-penetrating radar',
            'Covermeter',
        ]),
        'answer'      => 'Ultrasonic pulse velocity',
        'explanation' => 'UPV measures travel time of pulses to detect voids, cracks, and uniformity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which structural framing system best resists lateral loads under seismic actions?',
        'choices'     => json_encode([
            'Moment-resisting frame',
            'Braced frame',
            'Shear wall',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Different systems (MRF, braced frame, shear wall) provide lateral resistance per code.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which load factor combination is used for wind load in ultimate design per NSCP?',
        'choices'     => json_encode([
            '1.2D + 1.0W',
            '1.2D + 1.6L + 1.0W',
            '1.4D + 1.0W',
            '1.2D + 1.0L + 1.0W',
        ]),
        'answer'      => '1.2D + 1.6L + 1.0W',
        'explanation' => 'NSCP wind combination includes live load factor of 1.6 with wind at 1.0.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'In steel member design, lateral-torsional buckling is prevented by providing:',
        'choices'     => json_encode([
            'Lateral bracing',
            'Longitudinal stiffeners',
            'Cover plates',
            'End bearing',
        ]),
        'answer'      => 'Lateral bracing',
        'explanation' => 'Bracing restrains compression flange to prevent lateral-torsional buckling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which material property mainly governs creep in concrete?',
        'choices'     => json_encode([
            'Sustained stress level',
            'Aggregate type',
            'Water content',
            'Cement fineness',
        ]),
        'answer'      => 'Sustained stress level',
        'explanation' => 'Creep depends on long-term stress magnitude and humidity/temperature conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which formwork removal time does NSCP specify for props under floor slabs at 21 °C?',
        'choices'     => json_encode([
            '3 days',
            '7 days',
            '14 days',
            '28 days',
        ]),
        'answer'      => '7 days',
        'explanation' => 'At 21 °C, NSCP allows prop removal after 7 days when concrete reaches ~70% strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which connection type in timber frame uses steel plated connectors?',
        'choices'     => json_encode([
            'Glued laminated plate',
            'Mortise and tenon',
            'Dovetail',
            'Lap joint',
        ]),
        'answer'      => 'Glued laminated plate',
        'explanation' => 'Glued plates (MPC connectors) are steel plates embedded in glued laminated timber joints.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which quality control test checks cement fineness?',
        'choices'     => json_encode([
            'Blaine air permeability test',
            'Sieve analysis',
            'X-ray diffraction',
            'Thermal analysis',
        ]),
        'answer'      => 'Blaine air permeability test',
        'explanation' => 'Blaine test measures specific surface area, indicating cement fineness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which method is used to back-calculate in-situ concrete strength from load tests?',
        'choices'     => json_encode([
            'Inverse analysis',
            'Compressive cylinder test',
            'Rebound hammer correlation',
            'UPV correlation',
        ]),
        'answer'      => 'Inverse analysis',
        'explanation' => 'Inverse methods match field load-deflection curves to derive strength parameters.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which construction contract clause allocates unexpected site conditions risk?',
        'choices'     => json_encode([
            'Differing site conditions clause',
            'Force majeure clause',
            'Liquidated damages clause',
            'Termination clause',
        ]),
        'answer'      => 'Differing site conditions clause',
        'explanation' => 'This clause provides extras when subsurface conditions differ materially from contract assumptions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which environmental control measure minimizes dust during earthworks?',
        'choices'     => json_encode([
            'Water spraying',
            'Wind fencing',
            'Cover tarpaulins',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Dust control employs spraying, fencing, and covering to reduce particulate emissions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which structural analysis accounts for second-order (P-Δ) effects?',
        'choices'     => json_encode([
            'Moment magnification method',
            'First-order elastic analysis',
            'Plastic analysis',
            'Static method',
        ]),
        'answer'      => 'Moment magnification method',
        'explanation' => 'Moment magnification applies factors to approximate P-Δ moments in design.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which parameter controls shrinkage cracking in concrete?',
        'choices'     => json_encode([
            'Water–cement ratio',
            'Aggregate shape',
            'Cement content',
            'Admixture dosage',
        ]),
        'answer'      => 'Water–cement ratio',
        'explanation' => 'Lower w/c reduces capillary pores and shrinkage potential, controlling cracks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which stacking pattern provides best interlock for masonry units?',
        'choices'     => json_encode([
            'Running bond',
            'Stack bond',
            'English bond',
            'Flemish bond',
        ]),
        'answer'      => 'Running bond',
        'explanation' => 'Running bond staggers vertical joints, providing better load transfer and interlock.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 40,
        'part'        => 7,
        'question'    => 'Which load case is NOT considered in design of retaining walls per NSCP?',
        'choices'     => json_encode([
            'Snow load',
            'Earth pressure',
            'Water pressure',
            'Seismic pressure',
        ]),
        'answer'      => 'Snow load',
        'explanation' => 'Snow loads are irrelevant for vertical earth‐retaining structures in Philippine code.',
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

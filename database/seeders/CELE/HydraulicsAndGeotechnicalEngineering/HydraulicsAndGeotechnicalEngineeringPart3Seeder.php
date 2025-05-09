<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart3Seeder extends Seeder
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
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which empirical formula estimates peak discharge for ungauged watersheds based on basin characteristics?',
        'choices'     => json_encode([
            "Snyder's synthetic unit hydrograph",
            'Rational method Q = CiA',
            "Manning's equation",
            'Darcy-Weisbach equation',
        ]),
        'answer'      => "Snyder's synthetic unit hydrograph",
        'explanation' => "Snyder's method uses basin length and lag time to develop synthetic hydrograph.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'In slope stability analysis, which method accounts for interslice forces and variable slice geometry?',
        'choices'     => json_encode([
            "Bishop's simplified method",
            'Fellenius method',
            'Friction circle method',
            "Taylor's method",
        ]),
        'answer'      => "Bishop's simplified method",
        'explanation' => "Bishop's method includes vertical interslice forces and provides more accurate FS.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which flow measuring device uses calibrated orifice plates to determine flow rate?',
        'choices'     => json_encode([
            'Orifice meter',
            'Venturi meter',
            'Parshall flume',
            'Sharp-crested weir',
        ]),
        'answer'      => 'Orifice meter',
        'explanation' => "Differential pressure across orifice relates to flow rate by Bernoulli's principle.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which parameter in crop irrigation scheduling represents fraction of water readily available?',
        'choices'     => json_encode([
            'Readily available water (RAW) fraction',
            'Field capacity (FC)',
            'Permanent wilting point (PWP)',
            'Saturated hydraulic conductivity (K_sat)',
        ]),
        'answer'      => 'Readily available water (RAW) fraction',
        'explanation' => 'RAW fraction indicates portion of water between FC and PWP available to plants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'In consolidation testing, which coefficient describes primary consolidation rate under one-dimensional conditions?',
        'choices'     => json_encode([
            'Coefficient of consolidation (cv)',
            'Coefficient of permeability (k)',
            'Coefficient of compressibility (mv)',
            'Coefficient of volume change (mv)',
        ]),
        'answer'      => 'Coefficient of consolidation (cv)',
        'explanation' => 'cv = k / (mv γw) determines settlement time under load.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which hydraulic structure component ensures gradual increase of flow depth on downstream side of a dam?',
        'choices'     => json_encode([
            'Stilling basin',
            'Spillway crest',
            'Approach channel',
            'Apron',
        ]),
        'answer'      => 'Stilling basin',
        'explanation' => 'Stilling basin dissipates energy and controls downstream water surface profile.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'In soil compaction tests, what is the standard Proctor maximum dry density for typical granular soil (approx)?',
        'choices'     => json_encode([
            '1.9 Mg/m³',
            '1.2 Mg/m³',
            '2.5 Mg/m³',
            '1.5 Mg/m³',
        ]),
        'answer'      => '1.9 Mg/m³',
        'explanation' => 'Standard Proctor yields MDD ~1.8–2.0 Mg/m³ for sands and gravels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which equation describes unsteady gradually varied flow in open channels?',
        'choices'     => json_encode([
            'Dynamic equation of GVF',
            'Bernoulli equation',
            "Manning's equation",
            'Continuity equation',
        ]),
        'answer'      => 'Dynamic equation of GVF',
        'explanation' => 'dE/dx + S0 - Sf = 0 combines momentum and energy for unsteady flows.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which parameter indicates overconsolidation in a clay sample?',
        'choices'     => json_encode([
            'Overconsolidation ratio (OCR)',
            'Compression index (Cc)',
            'Void ratio (e)',
            'Plasticity index (PI)',
        ]),
        'answer'      => 'Overconsolidation ratio (OCR)',
        'explanation' => "OCR = σ'_max / σ'_current indicates preloading history.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'In groundwater hydraulics, which boundary condition represents impermeable layer?',
        'choices'     => json_encode([
            'No-flow boundary',
            'Constant head boundary',
            'Seepage face boundary',
            'Recharge boundary',
        ]),
        'answer'      => 'No-flow boundary',
        'explanation' => 'Impermeable layer blocks flow so normal flux = zero.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which soil index property controls susceptibility to shrink-swell behavior?',
        'choices'     => json_encode([
            'Plasticity index (PI)',
            'Liquid limit (LL)',
            'Shrinkage limit (SL)',
            'Moisture content (w)',
        ]),
        'answer'      => 'Plasticity index (PI)',
        'explanation' => 'Higher PI soils exhibit greater volume change with moisture variation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which weir equation incorporates energy loss coefficient for broad-crested weirs?',
        'choices'     => json_encode([
            'Cd-adjusted Bernoulli equation',
            "Manning's equation",
            'Chezy formula',
            "Meyer's formula",
        ]),
        'answer'      => 'Cd-adjusted Bernoulli equation',
        'explanation' => 'Includes discharge coefficient Cd to account for flow contraction and losses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'In consolidation analysis, which curve relates void ratio change to effective stress?',
        'choices'     => json_encode([
            "e-log σ' curve",
            'Pore pressure curve',
            "Mohr's circle plot",
            'Stress path curve',
        ]),
        'answer'      => "e-log σ' curve",
        'explanation' => 'Compressibility index and preconsolidation pressure derived from e-log σ\' curve.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which method measures permeability using falling head in laboratory permeameter?',
        'choices'     => json_encode([
            'Falling head test',
            'Constant head test',
            'Triaxial permeability test',
            'Pumping test',
        ]),
        'answer'      => 'Falling head test',
        'explanation' => 'Measures head loss over time in sample to compute k.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which parameter defines energy grade line slope in pipe flow?',
        'choices'     => json_encode([
            'hf/L',
            'V^2/(2gL)',
            'S0',
            'Sf',
        ]),
        'answer'      => 'hf/L',
        'explanation' => 'Energy grade line slope equals head loss per unit length.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'In soil compaction curves, what does the optimum moisture content (OMC) represent?',
        'choices'     => json_encode([
            'Water content at maximum dry density',
            'Liquid limit',
            'Plastic limit',
            'Shrinkage limit',
        ]),
        'answer'      => 'Water content at maximum dry density',
        'explanation' => 'OMC yields peak dry density in Proctor test.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which method uses moistened sand to determine in-situ density of soils?',
        'choices'     => json_encode([
            'Sand cone method',
            'Nuclear gauge test',
            'Block sampling',
            'Pycnometer method',
        ]),
        'answer'      => 'Sand cone method',
        'explanation' => 'Sand cone fills excavation and sand mass provides in-situ density estimate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'In channel hydraulics, which number indicates flow resistance combining viscous and inertial effects?',
        'choices'     => json_encode([
            'Reynolds number',
            'Froude number',
            'Weber number',
            'Euler number',
        ]),
        'answer'      => 'Reynolds number',
        'explanation' => 'Re = ρVD/μ indicates laminar or turbulent regime affecting friction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which factor in Darcy\'s law accounts for soil tortuosity and pore geometry?',
        'choices'     => json_encode([
            'Permeability factor',
            'Porosity factor',
            'Viscosity factor',
            'Gravity factor',
        ]),
        'answer'      => 'Permeability factor',
        'explanation' => 'Intrinsic permeability reflects medium\'s pore connectivity and tortuosity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 3,
        'question'    => 'Which element of a flow net indicates equal potential drop between adjacent equipotential lines?',
        'choices'     => json_encode([
            'Potential drop per square',
            'Flow discharge per square',
            'Equipotential spacing',
            'Flow line density',
        ]),
        'answer'      => 'Potential drop per square',
        'explanation' => 'Each square in flow net represents equal head loss across flow path.',
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

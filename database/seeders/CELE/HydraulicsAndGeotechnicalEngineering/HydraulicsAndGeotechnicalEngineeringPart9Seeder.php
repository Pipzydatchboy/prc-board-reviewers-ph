<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Which soil classification uses both grain‐size and Atterberg limits?',
        'choices'     => json_encode([
            'Unified Soil Classification System (USCS)',
            'AASHTO classification',
            'British Soil Classification',
            'DIN classification',
        ]),
        'answer'      => 'Unified Soil Classification System (USCS)',
        'explanation' => 'USCS combines grain-size distribution and plasticity characteristics to classify soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'In flow‐net analysis, increasing the number of equipotential drops (Nd) while holding Nf constant will:',
        'choices'     => json_encode([
            'Decrease total discharge',
            'Increase total discharge',
            'Have no effect on discharge',
            'Invalid—Nd cannot change independently',
        ]),
        'answer'      => 'Decrease total discharge',
        'explanation' => 'Q ∝ k·H·(Nf/Nd). Increasing Nd reduces Q if Nf stays the same.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which test is preferred for determining the shear strength parameters under drained conditions?',
        'choices'     => json_encode([
            'Triaxial CD test',
            'Triaxial UU test',
            'Direct shear test undrained',
            'Vane shear test',
        ]),
        'answer'      => 'Triaxial CD test',
        'explanation' => 'Consolidated drained (CD) triaxial test measures drained shear behavior (c′, φ′).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which parameter describes the ease with which water flows through soil at a given hydraulic gradient?',
        'choices'     => json_encode([
            'Hydraulic conductivity (k)',
            'Permeability index',
            'Seepage force',
            'Void ratio (e)',
        ]),
        'answer'      => 'Hydraulic conductivity (k)',
        'explanation' => 'Hydraulic conductivity quantifies flow rate per unit gradient per unit area.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'What is the primary driving force for soil liquefaction during an earthquake?',
        'choices'     => json_encode([
            'Excess pore water pressure',
            'Shear strength increase',
            'Effective stress increase',
            'Permeability reduction',
        ]),
        'answer'      => 'Excess pore water pressure',
        'explanation' => 'Rapid cyclic loading builds pore pressure, reducing effective stress and strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which ground improvement technique uses vibration probes to densify cohesionless soils?',
        'choices'     => json_encode([
            'Vibroflotation',
            'Dynamic compaction',
            'Jet grouting',
            'Electro‐osmosis',
        ]),
        'answer'      => 'Vibroflotation',
        'explanation' => 'Vibroflotation uses a vibrating probe to rearrange and densify granular soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which instrument monitors horizontal deformation inside slopes?',
        'choices'     => json_encode([
            'Inclinometer',
            'Extensometer',
            'Settlement plate',
            'Piezometer',
        ]),
        'answer'      => 'Inclinometer',
        'explanation' => 'Inclinometers record lateral movement along boreholes over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which factor is NOT considered in Terzaghi’s bearing capacity theory?',
        'choices'     => json_encode([
            'Earth pressure coefficient at rest (K₀)',
            'Soil internal friction angle (φ)',
            'Cohesion (c)',
            'Depth of footing (Df)',
        ]),
        'answer'      => 'Earth pressure coefficient at rest (K₀)',
        'explanation' => 'Terzaghi’s equation uses φ, c, Df, and footing width, not K₀.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which parameter is derived from the slope of the consolidation curve in an oedometer test?',
        'choices'     => json_encode([
            'Compression index (Cc)',
            'Coefficient of permeability (k)',
            'Young’s modulus (E)',
            'Shear modulus (G)',
        ]),
        'answer'      => 'Compression index (Cc)',
        'explanation' => 'Cc is calculated from the slope of e‐log σ′ during primary consolidation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which basic soil property is determined by the hydrometer analysis?',
        'choices'     => json_encode([
            'Clay and silt content',
            'Gravel content',
            'Organic content',
            'Shear strength',
        ]),
        'answer'      => 'Clay and silt content',
        'explanation' => 'Hydrometer measures particle concentration over time to estimate fines distribution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which method is used to estimate perched water table seepage under an embankment?',
        'choices'     => json_encode([
            'Flow net',
            'Manning’s equation',
            'Weir flow',
            'Orifice equation',
        ]),
        'answer'      => 'Flow net',
        'explanation' => 'Flow nets graphically estimate seepage and head distribution in soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which test can directly measure coefficient of earth pressure at rest (K₀)?',
        'choices'     => json_encode([
            'Oedometer with lateral restraint',
            'Triaxial test',
            'Direct shear test',
            'Permeability test',
        ]),
        'answer'      => 'Oedometer with lateral restraint',
        'explanation' => 'Oedometer cell fixes lateral strain, allowing measurement of K₀ from horizontal stress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which condition defines “quick condition” in soils?',
        'choices'     => json_encode([
            'When effective stress is zero',
            'When pore pressure is atmospheric',
            'When soil is fully drained',
            'When soil is overconsolidated',
        ]),
        'answer'      => 'When effective stress is zero',
        'explanation' => 'Quick condition (quicksand) occurs when i = ic and σ′ = 0.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which ground improvement uses vertical wick drains combined with surcharge?',
        'choices'     => json_encode([
            'Prefabricated vertical drains (PVDs)',
            'Jet grouting',
            'Dynamic compaction',
            'Electro‐osmosis',
        ]),
        'answer'      => 'Prefabricated vertical drains (PVDs)',
        'explanation' => 'PVDs accelerate consolidation by shortening drainage paths under surcharge loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which slope stability method assumes a rigid-plastic behavior of soil?',
        'choices'     => json_encode([
            'Limit analysis',
            'Limit equilibrium',
            'Finite element',
            'Discrete element',
        ]),
        'answer'      => 'Limit analysis',
        'explanation' => 'Limit analysis uses yield surfaces and plastic collapse mechanisms under loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which test monitors pore water pressure dissipation over time under constant load?',
        'choices'     => json_encode([
            'Consolidation oedometer',
            'Triaxial UU test',
            'Direct shear test',
            'SPT test',
        ]),
        'answer'      => 'Consolidation oedometer',
        'explanation' => 'Oedometer measures settlement and pore pressure dissipation for consolidation analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which factor is most influential in the rate of seepage beneath a dam?',
        'choices'     => json_encode([
            'Hydraulic gradient',
            'Soil cohesion',
            'Overburden pressure',
            'Particle shape',
        ]),
        'answer'      => 'Hydraulic gradient',
        'explanation' => 'Seepage rate ∝ hydraulic gradient; higher i yields greater flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which parameter measures soil’s resistance to deformation at very small strains?',
        'choices'     => json_encode([
            'Small-strain shear modulus (G₀)',
            'Compression index (Cc)',
            'Hydraulic conductivity (k)',
            'Plasticity index (PI)',
        ]),
        'answer'      => 'Small-strain shear modulus (G₀)',
        'explanation' => 'G₀ is derived from bender element or resonant column tests at small strains.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which consolidation phase follows the end of primary consolidation?',
        'choices'     => json_encode([
            'Secondary compression',
            'Immediate settlement',
            'Rebound',
            'Quasi‐static phase',
        ]),
        'answer'      => 'Secondary compression',
        'explanation' => 'Secondary compression (creep) occurs at constant effective stress after primary consolidation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 9,
        'question'    => 'Which earth pressure theory assumes a vertical backfill surface?',
        'choices'     => json_encode([
            'Rankine’s theory',
            'Coulomb’s theory',
            'Terzaghi’s theory',
            'Jaky’s theory',
        ]),
        'answer'      => 'Rankine’s theory',
        'explanation' => 'Rankine’s active and passive earth pressure equations assume vertical backfill and frictionless wall.',
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

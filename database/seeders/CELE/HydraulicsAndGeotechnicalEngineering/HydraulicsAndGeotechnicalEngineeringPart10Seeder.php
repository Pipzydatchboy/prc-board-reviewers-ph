<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which correction factor adjusts SPT N-values for overburden stress?',
        'choices'     => json_encode([
            'Cₙ',
            'Cₑ',
            'Cₛ',
            'Cₐ',
        ]),
        'answer'      => 'Cₙ',
        'explanation' => 'Cₙ corrects N-values to a standard effective overburden stress of 100 kPa.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which pile capacity component is mobilized in cohesionless soils?',
        'choices'     => json_encode([
            'Skin friction',
            'End bearing',
            'Negative skin friction',
            'Adhesion',
        ]),
        'answer'      => 'Skin friction',
        'explanation' => 'Cohesionless soils develop load‐transfer via friction along the shaft.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which parameter is derived from field vane shear test in soft clays?',
        'choices'     => json_encode([
            'Undrained shear strength (cᵤ)',
            'Permeability (k)',
            'Compression index (Cₑ)',
            'Young’s modulus (E)',
        ]),
        'answer'      => 'Undrained shear strength (cᵤ)',
        'explanation' => 'Field vane test directly measures cᵤ of very soft clays in situ.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Coefficient of consolidation (cᵥ) can be determined from which test?',
        'choices'     => json_encode([
            'Oedometer test',
            'Triaxial test',
            'Direct shear test',
            'Permeability test',
        ]),
        'answer'      => 'Oedometer test',
        'explanation' => 'Consolidation curves from oedometer yield cᵥ values.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which method estimates settlement under immediate loading?',
        'choices'     => json_encode([
            'Elastic theory (Skempton’s Boussinesq)',
            'Terzaghi’s consolidation',
            'Meyerhof bearing capacity',
            'Flow-net analysis',
        ]),
        'answer'      => 'Elastic theory (Skempton’s Boussinesq)',
        'explanation' => 'Immediate (elastic) settlement uses elastic half-space solutions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which test yields in situ permeability of granular soils?',
        'choices'     => json_encode([
            'Slug test',
            'Cone penetration test',
            'SPT',
            'Plate load test',
        ]),
        'answer'      => 'Slug test',
        'explanation' => 'Slug tests in wells measure k from water level recovery curves.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which earth pressure coefficient applies when a retaining wall moves slightly outward?',
        'choices'     => json_encode([
            'Active (Kₐ)',
            'Passive (Kₚ)',
            'At-rest (K₀)',
            'Rankine (Kᵣ)',
        ]),
        'answer'      => 'Active (Kₐ)',
        'explanation' => 'Active pressure develops when the wall yields away from the backfill.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which test provides continuous stratigraphic profiling and pore pressure measurement?',
        'choices'     => json_encode([
            'Piezocone (CPTu)',
            'Standard penetration test (SPT)',
            'Oedometer test',
            'Plate load test',
        ]),
        'answer'      => 'Piezocone (CPTu)',
        'explanation' => 'CPTu measures tip resistance, sleeve friction, and pore pressure with depth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which parameter quantifies long-term creep settlement?',
        'choices'     => json_encode([
            'Secondary compression index (Cα)',
            'Compression index (Cc)',
            'Preconsolidation pressure (σ′ₚ)',
            'Coefficient of consolidation (cᵥ)',
        ]),
        'answer'      => 'Secondary compression index (Cα)',
        'explanation' => 'Cα describes time-dependent strain after primary consolidation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which concept explains collapse potential in unsaturated soils upon wetting?',
        'choices'     => json_encode([
            'Structure collapse',
            'Hydrocompression',
            'Swelling',
            'Quick condition',
        ]),
        'answer'      => 'Structure collapse',
        'explanation' => 'Unsaturated soils can undergo sudden volume decrease when suction is lost.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which design uses graded filter criteria to prevent piping?',
        'choices'     => json_encode([
            'Filter design (Terzaghi’s criteria)',
            'Slope stability design',
            'Bearing capacity design',
            'Settlement design',
        ]),
        'answer'      => 'Filter design (Terzaghi’s criteria)',
        'explanation' => 'Terzaghi’s filter criteria ensure base soil particles are retained by filter.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which improvement method is best for high-vacuum dewatering of clays?',
        'choices'     => json_encode([
            'Electro-osmosis',
            'Dynamic compaction',
            'Prefabricated drains',
            'Jet grouting',
        ]),
        'answer'      => 'Electro-osmosis',
        'explanation' => 'Electro-osmosis induces pore water flow under electric field in fine soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which modulus relates stress to volumetric strain in soils?',
        'choices'     => json_encode([
            'Bulk modulus (K)',
            'Shear modulus (G)',
            'Young’s modulus (E)',
            'Secant modulus (Eₛ)',
        ]),
        'answer'      => 'Bulk modulus (K)',
        'explanation' => 'K defines the ratio of hydrostatic stress to volumetric strain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which analysis uses finite differences to model consolidation?',
        'choices'     => json_encode([
            'Numerical consolidation analysis',
            'Limit equilibrium',
            'Elastic theory',
            'Flow-net method',
        ]),
        'answer'      => 'Numerical consolidation analysis',
        'explanation' => 'Finite-difference schemes solve diffusion equation for transient consolidation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which soil test is most sensitive to sampling disturbance?',
        'choices'     => json_encode([
            'Triaxial CD test',
            'SPT',
            'Cone penetration test',
            'Hydrometer analysis',
        ]),
        'answer'      => 'Triaxial CD test',
        'explanation' => 'CD tests require undisturbed samples to accurately measure drained strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which factor increases the risk of embankment piping?',
        'choices'     => json_encode([
            'High hydraulic gradient',
            'Low soil cohesion',
            'Short flow path',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'High gradient, low cohesion, and short paths all promote piping.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which parameter controls immediate settlement under foundations?',
        'choices'     => json_encode([
            'Elastic modulus (E)',
            'Coefficient of consolidation (cᵥ)',
            'Secondary compression index (Cα)',
            'Permeability (k)',
        ]),
        'answer'      => 'Elastic modulus (E)',
        'explanation' => 'Immediate (elastic) settlement is governed by soil stiffness E.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which test is used to back-analyze field consolidation performance?',
        'choices'     => json_encode([
            'Inverse analysis',
            'Direct shear test',
            'Hydrometer analysis',
            'Plate load test',
        ]),
        'answer'      => 'Inverse analysis',
        'explanation' => 'Inverse methods derive cᵥ and mv by matching observed settlements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which device measures real-time vertical displacement of embankment crest?',
        'choices'     => json_encode([
            'Extensometer',
            'Inclinometer',
            'Piezometer',
            'Settlement plate',
        ]),
        'answer'      => 'Extensometer',
        'explanation' => 'Extensometers record cumulative vertical deformation in structures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 10,
        'question'    => 'Which dynamic test measures shear wave velocity in situ?',
        'choices'     => json_encode([
            'Seismic CPT',
            'Standard penetration test',
            'Plate load test',
            'Permeability test',
        ]),
        'answer'      => 'Seismic CPT',
        'explanation' => 'Seismic CPT uses wave propagation to estimate small-strain shear modulus and Vs.',
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

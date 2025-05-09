<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which method is commonly used for slope stability analysis by dividing the slope into slices?',
        'choices'     => json_encode([
            'Limit equilibrium method',
            'Finite element method',
            'Limit analysis method',
            'Discrete element method',
        ]),
        'answer'      => 'Limit equilibrium method',
        'explanation' => 'The limit equilibrium method slices the slope and balances forces or moments on each slice.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'In Coulomb’s earth pressure theory, which parameter does NOT influence the active pressure coefficient Ka?',
        'choices'     => json_encode([
            'Wall friction angle',
            'Soil internal friction angle',
            'Backfill slope inclination',
            'Soil permeability',
        ]),
        'answer'      => 'Soil permeability',
        'explanation' => 'Ka depends on soil and wall friction angles and backfill slope, not on permeability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which retaining wall type relies on its own weight for stability?',
        'choices'     => json_encode([
            'Gravity wall',
            'Cantilever wall',
            'Counterfort wall',
            'Anchored wall',
        ]),
        'answer'      => 'Gravity wall',
        'explanation' => 'Gravity walls use their mass to resist lateral earth pressures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which test determines the liquid limit of a soil?',
        'choices'     => json_encode([
            'Casagrande cup method',
            'Shrinkage limit test',
            'Plastic limit test',
            'Direct shear test',
        ]),
        'answer'      => 'Casagrande cup method',
        'explanation' => 'The Casagrande cup measures the moisture content at which soil flows under impact.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which pile type transfers load primarily through skin friction?',
        'choices'     => json_encode([
            'Friction pile',
            'End-bearing pile',
            'Composite pile',
            'Floating pile',
        ]),
        'answer'      => 'Friction pile',
        'explanation' => 'Friction piles develop capacity along their shaft via skin friction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which parameter is evaluated by the vane shear test in clay?',
        'choices'     => json_encode([
            'Undrained shear strength',
            'Permeability',
            'Compressibility',
            'Specific gravity',
        ]),
        'answer'      => 'Undrained shear strength',
        'explanation' => 'Vane shear test directly measures the undrained shear strength of soft clays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which soil index property is calculated as the plastic limit minus the liquid limit?',
        'choices'     => json_encode([
            'Liquidity index',
            'Plasticity index',
            'Shrinkage index',
            'Compression index',
        ]),
        'answer'      => 'Plasticity index',
        'explanation' => 'Plasticity index = LL – PL, indicating range of plastic behavior.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which instrument measures cumulative settlement of a structure?',
        'choices'     => json_encode([
            'Settlement plate',
            'Piezometer',
            'Inclinometer',
            'Penetrometer',
        ]),
        'answer'      => 'Settlement plate',
        'explanation' => 'Settlement plates placed on foundations record vertical displacements over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'What is the main purpose of a filter layer in earth structures?',
        'choices'     => json_encode([
            'Prevent soil migration',
            'Increase permeability',
            'Enhance strength',
            'Reduce settlement',
        ]),
        'answer'      => 'Prevent soil migration',
        'explanation' => 'Filters stop fine particles from washing out while allowing water flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which consolidation stage occurs after primary consolidation is complete?',
        'choices'     => json_encode([
            'Secondary compression',
            'Immediate settlement',
            'Primary consolidation',
            'Creep consolidation',
        ]),
        'answer'      => 'Secondary compression',
        'explanation' => 'Secondary compression (creep) is time-dependent settlement at constant effective stress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which factor is NOT part of Terzaghi’s bearing capacity equation?',
        'choices'     => json_encode([
            'Nγ (bearing capacity factor)',
            'Groundwater depth',
            'Nq (bearing capacity factor)',
            'Nc (bearing capacity factor)',
        ]),
        'answer'      => 'Groundwater depth',
        'explanation' => 'Terzaghi’s equation includes Nc, Nq, Nγ but does not explicitly include groundwater depth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which test measures compressibility characteristics of soil under incremental loading?',
        'choices'     => json_encode([
            'Oedometer test',
            'Triaxial test',
            'Direct shear test',
            'Permeability test',
        ]),
        'answer'      => 'Oedometer test',
        'explanation' => 'Oedometer (consolidation) test applies loads incrementally to measure settlement and derive compressibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which soil behavior is described by Boussinesq’s theory?',
        'choices'     => json_encode([
            'Stress distribution under a point load',
            'Seepage flow',
            'Consolidation settlement',
            'Earth pressure',
        ]),
        'answer'      => 'Stress distribution under a point load',
        'explanation' => 'Boussinesq’s solution gives stress beneath a point load in an elastic half-space.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'What does the term "overconsolidation ratio (OCR)" represent?',
        'choices'     => json_encode([
            'Past maximum stress ÷ current stress',
            'Current stress ÷ past maximum stress',
            'Ultimate bearing capacity ÷ applied load',
            'Settlement ÷ load',
        ]),
        'answer'      => 'Past maximum stress ÷ current stress',
        'explanation' => 'OCR = σ′p / σ′v0, indicating degree of overconsolidation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which design criterion is critical for sheet pile walls in soft soils?',
        'choices'     => json_encode([
            'Depth of embedment',
            'Wall thickness',
            'Concrete strength',
            'Steel grade',
        ]),
        'answer'      => 'Depth of embedment',
        'explanation' => 'Embedment depth ensures sufficient passive resistance and stability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which in-situ test uses pressurized water to assess permeability?',
        'choices'     => json_encode([
            'Packer test',
            'Slug test',
            'Cone penetration test',
            'Plate load test',
        ]),
        'answer'      => 'Packer test',
        'explanation' => 'Packer tests inject water under pressure in boreholes to determine k.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which parameter is used to describe deformation characteristics of soil in triaxial tests?',
        'choices'     => json_encode([
            'Young’s modulus',
            'Compression index',
            'Plasticity index',
            'Permeability',
        ]),
        'answer'      => 'Young’s modulus',
        'explanation' => 'Young’s modulus E is derived from stress–strain curve in triaxial tests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which soil parameter is determined by grain size distribution?',
        'choices'     => json_encode([
            'Uniformity coefficient',
            'Liquid limit',
            'Compression index',
            'Shear strength',
        ]),
        'answer'      => 'Uniformity coefficient',
        'explanation' => 'Uniformity coefficient Cu = D60/D10 from sieve analysis indicates gradation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which term describes soil volume change upon wetting?',
        'choices'     => json_encode([
            'Swelling potential',
            'Compressibility',
            'Permeability',
            'Shear strength',
        ]),
        'answer'      => 'Swelling potential',
        'explanation' => 'Swelling potential indicates how much clayey soils expand when wet.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 7,
        'question'    => 'Which factor influences the rate of consolidation in layered soils?',
        'choices'     => json_encode([
            'Thickness of compressible layer',
            'Shear strength',
            'Permeability of adjacent layers',
            'Both A and C',
        ]),
        'answer'      => 'Both A and C',
        'explanation' => 'Rate depends on layer thickness and permeability contrast with adjacent layers.',
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

<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => "Which equation describes energy conservation in pipe flow including head loss?",
        'choices'     => json_encode([
            "Bernoulli's equation",
            'Darcy-Weisbach equation',
            'Continuity equation',
            "Manning's equation",
        ]),
        'answer'      => "Bernoulli's equation",
        'explanation' => "Bernoulli's equation relates elevation, pressure, and velocity head minus losses.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'In soil shear tests, which device measures displacement and shear force simultaneously?',
        'choices'     => json_encode([
            'Direct shear apparatus',
            'Consolidated triaxial apparatus',
            'Vane shear device',
            'Plate load test setup',
        ]),
        'answer'      => 'Direct shear apparatus',
        'explanation' => 'Direct shear apparatus applies shear load on soil sample to record shear strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which dimensionless parameter predicts initiation of sediment motion under shear stress?',
        'choices'     => json_encode([
            'Shields parameter',
            'Reynolds number',
            'Froude number',
            'Weber number',
        ]),
        'answer'      => 'Shields parameter',
        'explanation' => 'Shields parameter predicts critical shear stress for sediment movement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which test determines soil compaction characteristics using Proctor mold and hammer drop?',
        'choices'     => json_encode([
            'Standard Proctor test',
            'Modified Proctor test',
            'California bearing ratio test',
            'Direct shear test',
        ]),
        'answer'      => 'Standard Proctor test',
        'explanation' => 'Standard Proctor test determines OMC and MDD by compacting soil under specified energy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which test uses water level recovery to estimate aquifer permeability quickly?',
        'choices'     => json_encode([
            'Slug test',
            'Pumping test',
            'Constant head test',
            'Packert test',
        ]),
        'answer'      => 'Slug test',
        'explanation' => 'Slug test measures water level recovery to estimate hydraulic conductivity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which equation estimates local scour depth around bridge piers based on flow intensity and pier shape?',
        'choices'     => json_encode([
            "Laursen's equation",
            'Meyer-Peter Müller formula',
            'Engelund-Hansen formula',
            'Lacey formula',
        ]),
        'answer'      => "Laursen's equation",
        'explanation' => "Laursen's equation predicts local scour depth using pier geometry and flow conditions.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which foundation type carries load through both end bearing and skin friction?',
        'choices'     => json_encode([
            'Pile foundation',
            'Spread foundation',
            'Raft foundation',
            'Mat foundation',
        ]),
        'answer'      => 'Pile foundation',
        'explanation' => 'Pile foundation transmits load by base resistance and friction along the shaft.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which ground improvement method increases soil density by dropping heavy weights repeatedly?',
        'choices'     => json_encode([
            'Dynamic compaction',
            'Vibroflotation',
            'Stone columns',
            'Jet grouting',
        ]),
        'answer'      => 'Dynamic compaction',
        'explanation' => 'Dynamic compaction densifies soil by impact from heavy weight drops.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which channel roughness parameter represents Nikuradse equivalent sand roughness in the Colebrook equation?',
        'choices'     => json_encode([
            'ks (roughness height)',
            'Manning n',
            'Chezy C',
            'Darcy friction factor f',
        ]),
        'answer'      => 'ks (roughness height)',
        'explanation' => 'ks is the equivalent sand roughness height used in friction factor calculations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which laboratory test measures soil consolidation settlement over time under incremental loading?',
        'choices'     => json_encode([
            'Oedometer test',
            'Triaxial test',
            'Direct shear test',
            'Permeability test',
        ]),
        'answer'      => 'Oedometer test',
        'explanation' => 'Oedometer test applies loads to soil sample and records settlement to compute cv and mv.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which numerical method solves Laplace’s equation for steady-state groundwater flow?',
        'choices'     => json_encode([
            'Finite difference method',
            'Finite element method',
            'Boundary element method',
            'Flow net method',
        ]),
        'answer'      => 'Finite difference method',
        'explanation' => 'FD discretizes the domain to solve hydraulic head distribution numerically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which hydraulic jump type dissipates maximum energy for given upstream Froude number?',
        'choices'     => json_encode([
            'Strong jump',
            'Steady jump',
            'Weak jump',
            'Oscillating jump',
        ]),
        'answer'      => 'Strong jump',
        'explanation' => 'Strong jumps at high Fr create turbulence and lose more energy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which empirical formula models live-bed scour using flow and sediment parameters?',
        'choices'     => json_encode([
            "Yalin's formula",
            "Laursen's equation",
            'Shields parameter method',
            'Terzaghi scour equation',
        ]),
        'answer'      => "Yalin's formula",
        'explanation' => "Yalin's formula relates shear stress and sediment size to scour depth under live-bed conditions.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which laboratory test measures soil swell potential when submerged under load?',
        'choices'     => json_encode([
            'Oedometer swell test',
            'Free swell test',
            'Atterberg limits test',
            'Compaction test',
        ]),
        'answer'      => 'Free swell test',
        'explanation' => 'Free swell test measures volume increase of remolded soil when placed in water.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which USCS group symbol denotes lean clay of low to medium plasticity?',
        'choices'     => json_encode([
            'CL',
            'CH',
            'ML',
            'MH',
        ]),
        'answer'      => 'CL',
        'explanation' => 'CL indicates cohesive soils with low plasticity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which dimensionless number distinguishes subcritical (Fr<1) and supercritical (Fr>1) flows in open channels?',
        'choices'     => json_encode([
            'Froude number',
            'Reynolds number',
            'Weber number',
            'Euler number',
        ]),
        'answer'      => 'Froude number',
        'explanation' => 'Fr = V/√(gD) indicates flow regime based on inertial to gravitational forces.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which retaining structure reinforcement technique uses layers of geosynthetics?',
        'choices'     => json_encode([
            'Mechanically stabilized earth (MSE) wall',
            'Gravity wall',
            'Cantilever wall',
            'Sheet pile wall',
        ]),
        'answer'      => 'Mechanically stabilized earth (MSE) wall',
        'explanation' => 'MSE walls use geosynthetic layers to reinforce and stabilize the soil.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'In submerged breakwater design, which ratio of incident to transmitted wave height indicates wave transmission?',
        'choices'     => json_encode([
            'Hs/hs',
            'B/L',
            'Cp/Cd',
            'Lp/L',
        ]),
        'answer'      => 'Hs/hs',
        'explanation' => 'Wave transmission coefficient equals transmitted to incident wave height ratio.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which test evaluates compressibility and permeability under cell pressure in geotechnical lab?',
        'choices'     => json_encode([
            'Triaxial consolidation-permeability test',
            'Standard oedometer test',
            'Direct shear test',
            'Plate load test',
        ]),
        'answer'      => 'Triaxial consolidation-permeability test',
        'explanation' => 'This test combines consolidation and permeability measurements under controlled stresses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 4,
        'question'    => 'Which dimensionless number describes sediment transport rate in rivers?',
        'choices'     => json_encode([
            'Shields parameter',
            'Froude number',
            'Reynolds number',
            "Manning's roughness coefficient",
        ]),
        'answer'      => 'Shields parameter',
        'explanation' => 'Shields parameter indicates initiation and rate of sediment motion based on shear stress.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

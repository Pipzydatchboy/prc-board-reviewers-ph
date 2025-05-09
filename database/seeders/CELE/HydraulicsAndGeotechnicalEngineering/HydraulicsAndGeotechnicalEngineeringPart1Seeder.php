<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'What is the Reynolds number at which flow in a circular pipe typically transitions from laminar to turbulent?',
        'choices'     => json_encode([
            'Re = 2,300',
            'Re = 500',
            'Re = 4,000',
            'Re = 10,000',
        ]),
        'answer'      => 'Re = 2,300',
        'explanation' => 'Critical Reynolds number for pipe flow transition is approximately 2,300.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which equation relates frictional head loss in a pipe to flow velocity, pipe length, and diameter?',
        'choices'     => json_encode([
            'Darcy-Weisbach equation',
            'Manning’s equation',
            'Chezy formula',
            'Bernoulli’s equation',
        ]),
        'answer'      => 'Darcy-Weisbach equation',
        'explanation' => 'h_f = f (L/D) (V^2/2g) describes head loss due to pipe friction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'In soil mechanics, what is the plastic limit?',
        'choices'     => json_encode([
            'Water content at which soil begins to crumble when rolled into a thread of 3 mm diameter',
            'Water content at which soil flows like a liquid',
            'Water content at maximum dry density',
            'Water content at optimum compaction',
        ]),
        'answer'      => 'Water content at which soil begins to crumble when rolled into a thread of 3 mm diameter',
        'explanation' => 'Plastic limit is the lower Atterberg limit where soil loses plasticity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which soil classification system uses grain size distribution and Atterberg limits to define groups such as CL, ML, SP?',
        'choices'     => json_encode([
            'Unified Soil Classification System (USCS)',
            'AASHTO soil classification',
            'British Standard soil classification',
            'Casagrande method',
        ]),
        'answer'      => 'Unified Soil Classification System (USCS)',
        'explanation' => 'USCS groups soils based on particle size and plasticity characteristics.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'What is the unit weight of water at 4°C (kN/m³)?',
        'choices'     => json_encode([
            '9.81',
            '10.5',
            '8.0',
            '12.0',
        ]),
        'answer'      => '9.81',
        'explanation' => 'Unit weight γ = ρ g ≈ 1000 kg/m³ × 9.81 m/s² = 9.81 kN/m³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which Froude number condition characterizes supercritical open channel flow?',
        'choices'     => json_encode([
            'Fr > 1',
            'Fr < 1',
            'Fr = 1',
            'Fr = 0',
        ]),
        'answer'      => 'Fr > 1',
        'explanation' => 'Froude number Fr = V/√(gD) greater than one indicates supercritical flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'In Terzaghi’s effective stress principle, total stress minus pore water pressure equals what?',
        'choices'     => json_encode([
            'Effective stress',
            'Shear stress',
            'Total stress',
            'Hydraulic gradient',
        ]),
        'answer'      => 'Effective stress',
        'explanation' => "σ' = σ - u governs soil strength and deformation behavior.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which bearing capacity equation estimates ultimate load for strip foundations on cohesive soils?',
        'choices'     => json_encode([
            'Terzaghi bearing capacity formula',
            'Meyerhof bearing capacity formula',
            'Brinch Hansen method',
            'Rankine’s earth pressure theory',
        ]),
        'answer'      => 'Terzaghi bearing capacity formula',
        'explanation' => 'q_ult = cN_c + γ D_f N_q + 0.5 γ B N_γ for strip footing in cohesive soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'In groundwater flow, Darcy’s law relates discharge to hydraulic conductivity, hydraulic gradient, and what area dimension?',
        'choices'     => json_encode([
            'Cross-sectional area',
            'Flow length',
            'Soil porosity',
            'Permeability coefficient',
        ]),
        'answer'      => 'Cross-sectional area',
        'explanation' => 'q = K i A where A is cross-sectional area normal to flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'What is the approximate critical hydraulic gradient for onset of quick condition in sandy soils?',
        'choices'     => json_encode([
            'i_cr ≈ 1',
            'i_cr ≈ 0.5',
            'i_cr ≈ 1.5',
            'i_cr ≈ 2.0',
        ]),
        'answer'      => 'i_cr ≈ 1',
        'explanation' => 'Critical gradient i_cr = (G_s - 1) / (1 + e) ≈ 1 for typical sand.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'What coefficient describes soil’s ease of water flow under a unit hydraulic gradient?',
        'choices'     => json_encode([
            'Hydraulic conductivity (k)',
            'Compressibility coefficient (m)',
            'Consolidation coefficient (c_v)',
            'Swelling index (C_s)',
        ]),
        'answer'      => 'Hydraulic conductivity (k)',
        'explanation' => 'Hydraulic conductivity quantifies permeability under saturated conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which equation is used for uniform flow in open channels considering roughness coefficient n?',
        'choices'     => json_encode([
            'Manning’s equation',
            'Chezy formula',
            'Darcy-Weisbach equation',
            'Bernoulli’s equation',
        ]),
        'answer'      => 'Manning’s equation',
        'explanation' => 'V = (1/n) R^{2/3} S^{1/2} relates velocity to hydraulic radius and slope.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which theory describes time-dependent consolidation settlement of saturated clays under load?',
        'choices'     => json_encode([
            'Terzaghi’s one-dimensional consolidation theory',
            'Mohr-Coulomb failure theory',
            'Skempton’s pore pressure theory',
            'Boussinesq’s elasticity solution',
        ]),
        'answer'      => 'Terzaghi’s one-dimensional consolidation theory',
        'explanation' => 'Models dissipation of excess pore pressure and gradual settlement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which dimensionless parameter indicates shallow-water wave conditions in coastal engineering?',
        'choices'     => json_encode([
            'kh',
            'Fr',
            'Re',
            'We',
        ]),
        'answer'      => 'kh',
        'explanation' => 'Wave number k times depth h distinguishes shallow vs deep water waves.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'In slope stability analysis, which method divides the soil mass into vertical slices to compute factor of safety?',
        'choices'     => json_encode([
            'Fellenius (ordinary) method of slices',
            'Limit equilibrium method',
            'Finite element method',
            'Bishop’s simplified method',
        ]),
        'answer'      => 'Fellenius (ordinary) method of slices',
        'explanation' => 'Also called the Swedish circle method, using vertical slices and force equilibrium.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which formula estimates peak discharge in small urban catchments using rainfall intensity and runoff coefficient?',
        'choices'     => json_encode([
            'Rational method Q = C i A',
            'Snyder’s method Q = K A^{0.8}',
            'Clark’s method Q = 1.67 C v A',
            'Mockus formula Q = 484 A^{0.2}',
        ]),
        'answer'      => 'Rational method Q = C i A',
        'explanation' => 'Used for quick estimation of peak flow in small watersheds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which triaxial test measures undrained shear strength of cohesive soils?',
        'choices'     => json_encode([
            'Unconsolidated-undrained (UU) triaxial test',
            'Consolidated drained triaxial test',
            'Direct shear test',
            'Plate load test',
        ]),
        'answer'      => 'Unconsolidated-undrained (UU) triaxial test',
        'explanation' => 'Conducted without drainage and consolidation to determine immediate shear strength.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which graphical method uses orthogonal flow and equipotential lines to analyze seepage beneath structures?',
        'choices'     => json_encode([
            'Flow net method',
            'Finite difference method',
            'Finite element method',
            'Boundary element method',
        ]),
        'answer'      => 'Flow net method',
        'explanation' => 'Graphical construction of flow lines and equipotentials to estimate seepage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which soil parameter indicates compressibility under one-dimensional consolidation?',
        'choices'     => json_encode([
            'Coefficient of volume compressibility (m_v)',
            'Coefficient of permeability (k)',
            'Compression index (C_c)',
            'Swelling index (C_s)',
        ]),
        'answer'      => 'Coefficient of volume compressibility (m_v)',
        'explanation' => "m_v = (Δe) / ((1+e) Δσ') describes soil volume change under load.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 1,
        'question'    => 'Which hydraulic structure uses a stilling basin to dissipate energy and protect downstream channel?',
        'choices'     => json_encode([
            'Stilling basin',
            'Weir',
            'Spillway crest',
            'Diversion channel',
        ]),
        'answer'      => 'Stilling basin',
        'explanation' => 'Stilling basin creates turbulence to reduce flow energy before discharge.',
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

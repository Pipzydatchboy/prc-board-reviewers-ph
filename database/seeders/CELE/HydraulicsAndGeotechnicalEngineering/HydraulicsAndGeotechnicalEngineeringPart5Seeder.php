<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which parameter controls the rate of consolidation in an oedometer test?',
        'choices'     => json_encode([
            'Coefficient of consolidation (cv)',
            'Coefficient of permeability (k)',
            'Modulus of elasticity (E)',
            'Shear strength (τ)',
        ]),
        'answer'      => 'Coefficient of consolidation (cv)',
        'explanation' => 'The coefficient of consolidation cv governs the rate at which consolidation occurs under load.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'In a triaxial compression test, which condition represents no drainage during shearing?',
        'choices'     => json_encode([
            'UU (Unconsolidated Undrained)',
            'CU (Consolidated Undrained)',
            'CD (Consolidated Drained)',
            'UU (Consolidated Undrained)',
        ]),
        'answer'      => 'UU (Unconsolidated Undrained)',
        'explanation' => 'UU means the specimen is neither consolidated nor allowed to drain when sheared.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'The Skempton’s pore pressure parameter B is defined as:',
        'choices'     => json_encode([
            'Δu/Δσ\'',
            'Δu/Δσ₃',
            'Δu/Δσ₁',
            'Δu/Δσ_total',
        ]),
        'answer'      => 'Δu/Δσ_total',
        'explanation' => 'B = change in pore pressure per unit change in total stress under undrained conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which equation describes flow through porous media under transient conditions?',
        'choices'     => json_encode([
            'Richards’ equation',
            'Bernoulli’s equation',
            'Darcy’s law',
            'Navier–Stokes equation',
        ]),
        'answer'      => 'Richards’ equation',
        'explanation' => 'Richards’ equation generalizes Darcy’s law for unsaturated, transient flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which factor most influences piping under a levee?',
        'choices'     => json_encode([
            'Length of flow path',
            'Permeability of soil',
            'Hydraulic gradient',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Length of flow path, permeability, and gradient together determine piping risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'The factor of safety against heave beneath an excavation is the ratio of:',
        'choices'     => json_encode([
            'Critical gradient to actual gradient',
            'Actual gradient to critical gradient',
            'Permeability to hydraulic gradient',
            'Flow net channels to drops',
        ]),
        'answer'      => 'Critical gradient to actual gradient',
        'explanation' => 'FS = ic / i, where ic is critical gradient and i is current gradient.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'In a flow net, the discharge per unit width is given by:',
        'choices'     => json_encode([
            'k·H·(Nf/Nd)',
            'k·H·(Nd/Nf)',
            'k·i·Nf',
            'k·i·Nd',
        ]),
        'answer'      => 'k·H·(Nf/Nd)',
        'explanation' => 'Q = k·H·(Nf/Nd), where Nf is flow channels and Nd equipotential drops.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Coefficient of earth pressure at rest (K₀) for normally consolidated clays is approximated by?',
        'choices'     => json_encode([
            '1 – sin φ',
            '1 + sin φ',
            'tan²(45 – φ/2)',
            'cos²(45 + φ/2)',
        ]),
        'answer'      => '1 – sin φ',
        'explanation' => 'Jaky’s formula: K₀ ≈ 1 – sin φ for NC clays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which test uses a piezometer to measure permeability in situ?',
        'choices'     => json_encode([
            'Pump test',
            'Slug test',
            'Falling head test',
            'Rising head test',
        ]),
        'answer'      => 'Slug test',
        'explanation' => 'Slug tests in piezometers estimate k from water level recovery.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'The time factor Tᵥ in consolidation is defined as:',
        'choices'     => json_encode([
            'cv·t / H²',
            'k·t / H²',
            'cv·H² / t',
            't / (cv·H²)',
        ]),
        'answer'      => 'cv·t / H²',
        'explanation' => 'Tᵥ = cv·t / H², where H is drainage path length.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which soil type typically exhibits secondary compression?',
        'choices'     => json_encode([
            'Clays',
            'Gravels',
            'Sands',
            'Silts',
        ]),
        'answer'      => 'Clays',
        'explanation' => 'Secondary compression (creep) occurs in clays after primary consolidation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Under undrained loading, shear strength of normally consolidated clays is:',
        'choices'     => json_encode([
            'σ\'·tan φ\'',
            'c_u + σ·tan φ\'',
            'c_u',
            'c_u + σ\'·tan φ\'',
        ]),
        'answer'      => 'c_u',
        'explanation' => 'Undrained shear strength cu is the undrained cohesion for NC clays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which permeability condition is assumed in the modified Cam–Clay model?',
        'choices'     => json_encode([
            'Constant k',
            'Variable k with void ratio',
            'Zero k',
            'Infinite k',
        ]),
        'answer'      => 'Variable k with void ratio',
        'explanation' => 'Modified Cam–Clay relates k to e as soil consolidates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'The permeability of fractured rock is best described by:',
        'choices'     => json_encode([
            'Darcy’s law for porous media',
            'Forchheimer equation for non-Darcy flow',
            'Kozeny–Carman equation',
            'Navier–Stokes equation',
        ]),
        'answer'      => 'Forchheimer equation for non-Darcy flow',
        'explanation' => 'High-velocity flow in fractures follows non-Darcy behavior (Forchheimer).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which design uses filter criteria to prevent soil migration?',
        'choices'     => json_encode([
            'Filter design for drains',
            'Slope stability design',
            'Bearing capacity design',
            'Settlement design',
        ]),
        'answer'      => 'Filter design for drains',
        'explanation' => 'Filters are sized so that base soil particles cannot migrate through filter grains.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which parameter is used to assess the compressibility of a soil layer?',
        'choices'     => json_encode([
            'Compression index (Cc)',
            'Coefficient of permeability (k)',
            'Shear modulus (G)',
            'Friction angle (φ)',
        ]),
        'answer'      => 'Compression index (Cc)',
        'explanation' => 'Cc is derived from consolidation curve and indicates compressibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which ground improvement technique reduces settlement by preloading?',
        'choices'     => json_encode([
            'Wick drains',
            'Dynamic compaction',
            'Jet grouting',
            'Vibroflotation',
        ]),
        'answer'      => 'Wick drains',
        'explanation' => 'Wick drains accelerate consolidation by providing drainage paths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'The coefficient of lateral earth pressure after shearing (Kᵣ) is greater than K₀ for:',
        'choices'     => json_encode([
            'Overconsolidated clay',
            'Normally consolidated clay',
            'Loose sand',
            'Dense sand',
        ]),
        'answer'      => 'Overconsolidated clay',
        'explanation' => 'OCR clays exhibit Kᵣ > K₀ due to dilation during shearing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which analysis method uses slices to evaluate slope stability?',
        'choices'     => json_encode([
            'Limit equilibrium method',
            'Finite element method',
            'Finite difference method',
            'Discrete element method',
        ]),
        'answer'      => 'Limit equilibrium method',
        'explanation' => 'Limit equilibrium divides the slope into slices to compute FS.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 5,
        'question'    => 'Which consolidation theory assumes constant permeability and compressibility?',
        'choices'     => json_encode([
            'Terzaghi’s one-dimensional theory',
            'Biot’s three-dimensional theory',
            'Kondner’s incremental theory',
            'Modified Cam–Clay theory',
        ]),
        'answer'      => 'Terzaghi’s one-dimensional theory',
        'explanation' => 'Terzaghi’s model assumes k and mv constant during consolidation.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

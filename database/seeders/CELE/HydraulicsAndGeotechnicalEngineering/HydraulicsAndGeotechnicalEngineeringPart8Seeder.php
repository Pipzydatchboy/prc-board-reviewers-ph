<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which instrument is used to measure pore pressure response under cyclic loading?',
        'choices'     => json_encode([
            'Cyclic triaxial apparatus',
            'Oedometer cell',
            'Direct shear box',
            'Permeameter',
        ]),
        'answer'      => 'Cyclic triaxial apparatus',
        'explanation' => 'It applies cyclic axial loads and measures resulting pore pressures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'The term “liquefaction” in soils refers to:',
        'choices'     => json_encode([
            'Loss of strength due to increased pore water pressure',
            'Permanent settlement under static load',
            'Expansion from wetting',
            'Chemical degradation',
        ]),
        'answer'      => 'Loss of strength due to increased pore water pressure',
        'explanation' => 'During seismic loading, soils can behave like a liquid when excess pore pressures build up.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which test determines the compressibility and permeability simultaneously?',
        'choices'     => json_encode([
            'Consolidation permeameter test',
            'Triaxial UU test',
            'Direct shear test',
            'Proctor test',
        ]),
        'answer'      => 'Consolidation permeameter test',
        'explanation' => 'It measures settlement under load and flow through sample to derive cv and k.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which soil improvement method injects cementitious grout to fill voids?',
        'choices'     => json_encode([
            'Jet grouting',
            'Dynamic compaction',
            'Wick drains',
            'Electro-osmosis',
        ]),
        'answer'      => 'Jet grouting',
        'explanation' => 'High-pressure jets mix grout with in-situ soil, forming columns of improved ground.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which parameter is most affected by grain shape in permeability?',
        'choices'     => json_encode([
            'Hydraulic conductivity',
            'Shear strength',
            'Compression index',
            'Plasticity index',
        ]),
        'answer'      => 'Hydraulic conductivity',
        'explanation' => 'Angular grains reduce void connectivity, lowering permeability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which theory accounts for three-dimensional consolidation behavior?',
        'choices'     => json_encode([
            'Biot’s consolidation theory',
            'Terzaghi’s one-dimensional theory',
            'Rankine’s earth pressure theory',
            'Boussinesq’s elastic theory',
        ]),
        'answer'      => 'Biot’s consolidation theory',
        'explanation' => 'Biot extended Terzaghi’s theory to account for 3D stress–strain coupling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which type of flow net element represents equal head loss?',
        'choices'     => json_encode([
            'Equipotential drop',
            'Flow channel',
            'Streamline',
            'Hydraulic gradient line',
        ]),
        'answer'      => 'Equipotential drop',
        'explanation' => 'Equipotential drops connect points of equal head, perpendicular to flow lines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which soil exhibits the highest capillarity rise?',
        'choices'     => json_encode([
            'Fine sand',
            'Coarse gravel',
            'Silt',
            'Clay',
        ]),
        'answer'      => 'Clay',
        'explanation' => 'Smaller pores in clay generate greater capillary rise.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'The factor of safety against slope failure in a circular arc is calculated using:',
        'choices'     => json_encode([
            'Moment equilibrium',
            'Force equilibrium',
            'Stress–strain analysis',
            'Finite element method',
        ]),
        'answer'      => 'Moment equilibrium',
        'explanation' => 'Methods like Fellenius use moment equilibrium of slices to find FS.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which method reduces consolidation time by applying surcharge and vertical drains?',
        'choices'     => json_encode([
            'Prefabricated vertical drains',
            'Jet grouting',
            'Dynamic compaction',
            'Electro-osmosis',
        ]),
        'answer'      => 'Prefabricated vertical drains',
        'explanation' => 'PVDs shorten drainage path, accelerating consolidation under surcharge.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which coefficient relates change in void ratio to change in effective stress?',
        'choices'     => json_encode([
            'Compressibility parameter mv',
            'Permeability k',
            'Shear modulus G',
            'Poisson’s ratio ν',
        ]),
        'answer'      => 'Compressibility parameter mv',
        'explanation' => 'mv = Δe / Δσ′v from consolidation tests quantifies compressibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which test uses electrical current to dewater soil?',
        'choices'     => json_encode([
            'Electro-osmosis',
            'Piezometer test',
            'Slug test',
            'Triaxial CD test',
        ]),
        'answer'      => 'Electro-osmosis',
        'explanation' => 'Direct current applied induces water movement toward the cathode in fine soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which earth pressure condition exists when wall movement is negligible?',
        'choices'     => json_encode([
            'At-rest pressure',
            'Active pressure',
            'Passive pressure',
            'Rankine pressure',
        ]),
        'answer'      => 'At-rest pressure',
        'explanation' => 'K₀ applies when wall displacement is minimal and soil remains unyielded.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which parameter is used to quantify soil cohesion in triaxial tests?',
        'choices'     => json_encode([
            'Intercept of Mohr envelope',
            'Slope of stress–strain curve',
            'Pore pressure parameter B',
            'Lueder’s strain',
        ]),
        'answer'      => 'Intercept of Mohr envelope',
        'explanation' => 'Cohesion c′ is the intercept where shear stress axis is cut by failure envelope.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which in-situ test is best for profiling stratigraphy and soil properties continuously?',
        'choices'     => json_encode([
            'Standard penetration test (SPT)',
            'Plate load test',
            'Vane shear test',
            'Oedometer test',
        ]),
        'answer'      => 'Standard penetration test (SPT)',
        'explanation' => 'SPT provides N-values at regular depth intervals reflecting soil resistance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which failure mechanism involves sliding along a non-circular surface?',
        'choices'     => json_encode([
            'Plane failure',
            'Circular arc failure',
            'Compound failure',
            'Bowing failure',
        ]),
        'answer'      => 'Plane failure',
        'explanation' => 'Plane failure occurs in anisotropic soils where slip surfaces are planar.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'The coefficient of volume compressibility mv has units of:',
        'choices'     => json_encode([
            'L²/MN',
            'L³/MN',
            'L/MN',
            'Dimensionless',
        ]),
        'answer'      => 'L³/MN',
        'explanation' => 'mv = Δe / (Δσ′v·1+e0) gives volume change per unit stress per unit volume.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which mechanism reduces soil permeability over time in fine-grained soils?',
        'choices'     => json_encode([
            'Fines migration and clogging',
            'Particle abrasion',
            'Silty sand formation',
            'Capillary action',
        ]),
        'answer'      => 'Fines migration and clogging',
        'explanation' => 'Moving fines can block pore throats, lowering permeability over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which parameter describes the soil’s ability to deform elastically?',
        'choices'     => json_encode([
            'Shear modulus G',
            'Compression index Cc',
            'Permeability k',
            'Plasticity index PI',
        ]),
        'answer'      => 'Shear modulus G',
        'explanation' => 'G from small-strain tests quantifies elastic shear stiffness of soil.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 8,
        'question'    => 'Which soil test result is most sensitive to sample disturbance?',
        'choices'     => json_encode([
            'Triaxial CD test',
            'Vane shear test',
            'Oedometer test',
            'Proctor test',
        ]),
        'answer'      => 'Triaxial CD test',
        'explanation' => 'Consolidated drained triaxial specimens require undisturbed sampling for accurate results.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

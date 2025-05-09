<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Which formula estimates uniform flow depth in a rectangular channel using slope S and Manning’s n?',
        'choices'     => json_encode([
            'y = \(\left(\dfrac{Q n}{b \sqrt{S}}\right)^{3/5}\)',
            'y = \(\dfrac{Q^2 n^2}{b^2 S}\)',
            'y = \(\sqrt{\dfrac{Q n}{b S}}\)',
            'y = \(\dfrac{b Q}{n \sqrt{S}}\)',
        ]),
        'answer'      => 'y = \(\left(\dfrac{Q n}{b \sqrt{S}}\right)^{3/5}\)',
        'explanation' => 'For rectangular channel, Q = (b y) (1/n) y^{2/3} S^{1/2} solved for y.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'In seepage through soils, what is the phreatic line?',
        'choices'     => json_encode([
            'Free-surface of seepage flow',
            'Line of maximum hydraulic head',
            'Impermeable boundary',
            'Line of zero flow',
        ]),
        'answer'      => 'Free-surface of seepage flow',
        'explanation' => 'Phreatic line marks water table and free flow lines in a dam cross-section.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which test determines grain-size distribution of soil through sedimentation?',
        'choices'     => json_encode([
            'Hydrometer analysis',
            'Sieve analysis',
            'Atterberg limits',
            'Proctor compaction',
        ]),
        'answer'      => 'Hydrometer analysis',
        'explanation' => 'Hydrometer uses sedimentation rate of fine particles (silt, clay).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'In geotechnical consolidation, what is cv?',
        'choices'     => json_encode([
            'Coefficient of consolidation',
            'Coefficient of permeability',
            'Compression index',
            'Coefficient of volume change',
        ]),
        'answer'      => 'Coefficient of consolidation',
        'explanation' => 'cv = k / (m_v γ_w) controls rate of time-dependent settlement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which flow type occurs when specific energy is minimum for given discharge?',
        'choices'     => json_encode([
            'Critical flow',
            'Subcritical flow',
            'Supercritical flow',
            'Uniform flow',
        ]),
        'answer'      => 'Critical flow',
        'explanation' => 'Critical depth corresponds to minimum specific energy in open channel.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'In soil classification, what does the plasticity index PI represent?',
        'choices'     => json_encode([
            'LL - PL',
            'PL - LL',
            'WL - PL',
            'LL - WL',
        ]),
        'answer'      => 'LL - PL',
        'explanation' => 'PI is difference between liquid limit and plastic limit.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which weir type has highest coefficient of discharge?',
        'choices'     => json_encode([
            'Sharp-crested weir',
            'Broad-crested weir',
            'Cipoletti weir',
            'V-notch weir',
        ]),
        'answer'      => 'V-notch weir',
        'explanation' => 'V-notch has high Cd at low heads, sensitive to small flows.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which soil property is determined by unconfined compression test?',
        'choices'     => json_encode([
            'Unconfined shear strength',
            'Permeability',
            'Consolidation coefficient',
            'Swelling index',
        ]),
        'answer'      => 'Unconfined shear strength',
        'explanation' => 'UU test measures axial stress at failure without lateral confinement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which hydraulic radius maximizes conveyance in channel cross-section?',
        'choices'     => json_encode([
            'R = A/P',
            'R = A/T',
            'R = P/A',
            'R = T/A',
        ]),
        'answer'      => 'R = A/P',
        'explanation' => 'Hydraulic radius is cross-sectional area divided by wetted perimeter.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'In seepage analysis, flow net squares count gives which quantity?',
        'choices'     => json_encode([
            'Discharge',
            'Hydraulic gradient',
            'Pore pressure',
            'Void ratio',
        ]),
        'answer'      => 'Discharge',
        'explanation' => 'Q = k H (N_f/N_d) from flow net square ratio.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which parameter in Mohr-Coulomb failure criterion represents internal friction?',
        'choices'     => json_encode([
            'φ',
            'c',
            "σ'",  
            'u',
        ]),
        'answer'      => 'φ',
        'explanation' => 'φ is angle of internal friction controlling shear resistance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which unit converts volumetric flow rate to mean velocity in a channel?',
        'choices'     => json_encode([
            'A = Q/V',
            'Q = A V',
            'V = Q/A',
            'P = Q/A',
        ]),
        'answer'      => 'V = Q/A',
        'explanation' => 'Mean velocity is discharge divided by cross-sectional area.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which parameter describes soil water retention capacity in unsaturated soils?',
        'choices'     => json_encode([
            'Soil-water characteristic curve (SWCC)',
            'Permeability curve',
            'Compressibility curve',
            'Shear strength curve',
        ]),
        'answer'      => 'Soil-water characteristic curve (SWCC)',
        'explanation' => 'SWCC relates matric suction to water content in unsaturated soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'In open channel transient flow, which wave type propagates at critical depth?',
        'choices'     => json_encode([
            'Gravity wave',
            'Shock wave',
            'Expansion wave',
            'Bore wave',
        ]),
        'answer'      => 'Gravity wave',
        'explanation' => 'Gravity waves travel at speed √(gD) equal to critical flow celerity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which soil test measures relative density of cohesionless soils?',
        'choices'     => json_encode([
            'Sand cone test',
            'Proctor compaction test',
            'Standard penetration test (SPT)',
            'Cone penetration test (CPT)',
        ]),
        'answer'      => 'Standard penetration test (SPT)',
        'explanation' => 'SPT N-value correlates with relative density in sands.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which formula calculates factor of safety against piping under a sewer pipe?',
        'choices'     => json_encode([
            'FOS = (H_cr/H)',
            "FOS = (cN_c/σ'v)",
            'FOS = (τ_f/τ)',
            'FOS = (M_u/M)',
        ]),
        'answer'      => 'FOS = (H_cr/H)',
        'explanation' => 'Critical head H_cr prevents uplift and piping beneath structures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'In Manning’s formula for full pipe flow, which hydraulic radius is used?',
        'choices'     => json_encode([
            'R = D/4',
            'R = D/2',
            'R = πD/4',
            'R = D',
        ]),
        'answer'      => 'R = D/4',
        'explanation' => 'Hydraulic radius for full circular pipe is area/perimeter = (πD²/4)/(πD) = D/4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => "Which parameter in shear strength equation τ = c + σ' tan φ represents cohesion?",
        'choices'     => json_encode([
            'c',
            "σ'",
            'φ',
            'τ',
        ]),
        'answer'      => 'c',
        'explanation' => 'c is cohesion intercept providing shear resistance at zero normal stress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'In unsteady flow analysis, which equation expresses conservation of momentum in a control volume?',
        'choices'     => json_encode([
            'Dynamic equation of gradually varied flow',
            'Continuity equation',
            'Bernoulli equation',
            'Darcy-Weisbach equation',
        ]),
        'answer'      => 'Dynamic equation of gradually varied flow',
        'explanation' => 'Relates changes in flow and depth using momentum principles for GVF.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 2,
        'question'    => 'Which soil consolidation parameter defines time factor T_v for 50% consolidation?',
        'choices'     => json_encode([
            'T_v = 0.197',
            'T_v = 0.5',
            'T_v = 1.0',
            'T_v = 0.848',
        ]),
        'answer'      => 'T_v = 0.197',
        'explanation' => 'Time factor for 50% consolidation under double drainage conditions.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

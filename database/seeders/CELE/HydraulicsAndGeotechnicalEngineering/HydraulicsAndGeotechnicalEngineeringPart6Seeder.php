<?php

namespace Database\Seeders\CELE\HydraulicsAndGeotechnicalEngineering;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HydraulicsAndGeotechnicalEngineeringPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Which compaction curve parameter represents the maximum dry density?',
        'choices'     => json_encode([
            'Peak point of the curve',
            'Optimum moisture content',
            'Air voids minimum',
            'Oven-dry density',
        ]),
        'answer'      => 'Peak point of the curve',
        'explanation' => 'Maximum dry density occurs at the peak of the compaction curve.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'In Proctor test, increasing compactive effort will generally:',
        'choices'     => json_encode([
            'Increase MDD and decrease OMC',
            'Increase MDD and increase OMC',
            'Decrease MDD and increase OMC',
            'Decrease both MDD and OMC',
        ]),
        'answer'      => 'Increase MDD and decrease OMC',
        'explanation' => 'Stronger compaction raises max dry density and lowers optimum moisture.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'The Unified Soil Classification System symbol for silty sand is:',
        'choices'     => json_encode([
            'SM',
            'SP',
            'SC',
            'ML',
        ]),
        'answer'      => 'SM',
        'explanation' => 'SM denotes sand with significant silt content in USCS.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Bearing capacity factor Nγ applies to which type of footing?',
        'choices'     => json_encode([
            'Shallow strip footing',
            'Deep foundation pile',
            'Mat foundation',
            'Raft foundation',
        ]),
        'answer'      => 'Shallow strip footing',
        'explanation' => 'Nγ is used in Terzaghi’s equation for shallow footings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which method is used to determine in-situ unit weight of soil?',
        'choices'     => json_encode([
            'Sand cone test',
            'Proctor test',
            'Oedometer test',
            'Triaxial test',
        ]),
        'answer'      => 'Sand cone test',
        'explanation' => 'Sand cone measures field density by sand displacement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'The factor of safety in slope stability analysis is defined as:',
        'choices'     => json_encode([
            'Resisting moments ÷ driving moments',
            'Driving moments ÷ resisting moments',
            'Shear strength ÷ normal stress',
            'Cohesion ÷ friction angle',
        ]),
        'answer'      => 'Resisting moments ÷ driving moments',
        'explanation' => 'FS = sum of resisting moments divided by sum of driving moments.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which ground improvement technique uses rapid loading to densify loose granular soils?',
        'choices'     => json_encode([
            'Dynamic compaction',
            'Jet grouting',
            'Wick drains',
            'Electro-osmosis',
        ]),
        'answer'      => 'Dynamic compaction',
        'explanation' => 'Dynamic compaction drops heavy weights repeatedly to densify soils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Electro-osmosis is most effective in soils that are:',
        'choices'     => json_encode([
            'Fine-grained and low permeability',
            'Coarse-grained and high permeability',
            'Organic and peaty',
            'Rocky and fractured',
        ]),
        'answer'      => 'Fine-grained and low permeability',
        'explanation' => 'Electrical flow moves pore water in fine soils where hydraulic flow is slow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'In a Standard Penetration Test, the split spoon is driven by a drop hammer of:',
        'choices'     => json_encode([
            '63.5 kg dropped 760 mm',
            '50 kg dropped 600 mm',
            '63.5 kg dropped 450 mm',
            '80 kg dropped 500 mm',
        ]),
        'answer'      => '63.5 kg dropped 760 mm',
        'explanation' => 'SPT hammer weight is 63.5 kg with a 760 mm drop.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which in-situ test provides continuous profile of soil stiffness?',
        'choices'     => json_encode([
            'Cone penetration test (CPT)',
            'Plate load test',
            'Vane shear test',
            'Permeability test',
        ]),
        'answer'      => 'Cone penetration test (CPT)',
        'explanation' => 'CPT records tip resistance continuously with depth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Vane shear test is used to determine undrained shear strength of:',
        'choices'     => json_encode([
            'Soft clays',
            'Gravel',
            'Sand',
            'Rock',
        ]),
        'answer'      => 'Soft clays',
        'explanation' => 'Vane test is suitable for soft, undisturbed clays in situ.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'The Terzaghi bearing capacity equation applies to:',
        'choices'     => json_encode([
            'Strip footings',
            'Pile foundations',
            'Drilled shafts',
            'Raft foundations',
        ]),
        'answer'      => 'Strip footings',
        'explanation' => 'Terzaghi derived for long, narrow strip footings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'In seepage analysis, exit gradient greater than critical causes:',
        'choices'     => json_encode([
            'Piping',
            'Consolidation',
            'Swelling',
            'Bearing failure',
        ]),
        'answer'      => 'Piping',
        'explanation' => 'Exit gradient above critical dislodges soil particles (piping).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which equation is used to estimate earth pressure behind retaining walls at rest?',
        'choices'     => json_encode([
            'Rankine’s theory',
            'Coulomb’s theory',
            'Terzaghi’s theory',
            'Jaky’s formula',
        ]),
        'answer'      => 'Jaky’s formula',
        'explanation' => 'Jaky’s K₀ ≈ 1 – sin φ gives at-rest pressure coefficient.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which method estimates consolidation parameters from field settlement data?',
        'choices'     => json_encode([
            'Inverse analysis',
            'Laboratory oedometer',
            'CPT correlations',
            'SPT correlations',
        ]),
        'answer'      => 'Inverse analysis',
        'explanation' => 'Inverse analysis back-calculates cv and mv from actual settlements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which laboratory test measures the angle of internal friction directly?',
        'choices'     => json_encode([
            'Direct shear test',
            'Oedometer test',
            'Triaxial UU test',
            'Permeability test',
        ]),
        'answer'      => 'Direct shear test',
        'explanation' => 'Direct shear applies horizontal force to measure φ directly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which device measures lateral movement in slopes?',
        'choices'     => json_encode([
            'Inclinometer',
            'Piezometer',
            'Settlement plate',
            'Strain gauge',
        ]),
        'answer'      => 'Inclinometer',
        'explanation' => 'Inclinometers record subsurface lateral deflection over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Bearing capacity increases with depth because of:',
        'choices'     => json_encode([
            'Overburden pressure',
            'Water table rise',
            'Soil aging',
            'Permeability change',
        ]),
        'answer'      => 'Overburden pressure',
        'explanation' => 'Greater overburden raises effective stress and capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'The term “preconsolidation pressure” refers to:',
        'choices'     => json_encode([
            'Maximum past vertical stress',
            'Current applied stress',
            'Ultimate bearing capacity',
            'Critical hydraulic gradient',
        ]),
        'answer'      => 'Maximum past vertical stress',
        'explanation' => 'Preconsolidation pressure is the peak past load on soil.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 39,
        'part'        => 6,
        'question'    => 'Which property relates volume change to effective stress change?',
        'choices'     => json_encode([
            'Compression index (Cc)',
            'Shear modulus (G)',
            'Permeability (k)',
            'Specific gravity (Gs)',
        ]),
        'answer'      => 'Compression index (Cc)',
        'explanation' => 'Cc from consolidation tests quantifies compressibility.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

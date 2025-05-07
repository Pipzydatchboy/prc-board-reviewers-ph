<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart1Seeder extends Seeder
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
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "What year and declaration established Primary Health Care globally?",
        'choices'     => json_encode([
            '1978 Alma-Ata Declaration',
            '1948 Geneva Declaration',
            '2000 Millennium Declaration',
            '1986 Ottawa Charter',
        ]),
        'answer'      => '1978 Alma-Ata Declaration',
        'explanation' => 'The Alma-Ata Conference in 1978 formalized PHC as essential care for all.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which of the following is NOT one of the eight essential components of PHC?",
        'choices'     => json_encode([
            'Appropriate technology',
            'Community participation',
            'Centralized decision-making',
            'Health education',
        ]),
        'answer'      => 'Centralized decision-making',
        'explanation' => 'PHC promotes decentralized, community-based decision-making.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which level of prevention aims to reduce incidence by controlling risk factors?",
        'choices'     => json_encode([
            'Primary prevention',
            'Secondary prevention',
            'Tertiary prevention',
            'Quaternary prevention',
        ]),
        'answer'      => 'Primary prevention',
        'explanation' => 'Primary prevention intervenes before health effects occur to prevent disease.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "What is the first step in community diagnosis?",
        'choices'     => json_encode([
            'Data analysis',
            'Problem definition',
            'Data collection',
            'Intervention planning',
        ]),
        'answer'      => 'Data collection',
        'explanation' => 'Collecting relevant demographic and health data is the initial step.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which model emphasizes activities to enable people to increase control over their health?",
        'choices'     => json_encode([
            'Biomedical model',
            'Health promotion model',
            'Medical model',
            'Curative model',
        ]),
        'answer'      => 'Health promotion model',
        'explanation' => 'Health promotion focuses on empowering individuals and communities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which framework classifies health determinants as social, behavioral, and environmental?",
        'choices'     => json_encode([
            'Epidemiologic triad',
            'Social determinants of health',
            'Biomedical model',
            'Health belief model',
        ]),
        'answer'      => 'Social determinants of health',
        'explanation' => 'This concept recognizes multiple layers influencing health outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "What tool is used for rapid assessment of community health needs?",
        'choices'     => json_encode([
            'SWOT analysis',
            'PDSA cycle',
            'Growth chart',
            'APGAR score',
        ]),
        'answer'      => 'SWOT analysis',
        'explanation' => 'SWOT (Strengths, Weaknesses, Opportunities, Threats) helps identify community priorities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which program is a key PHC strategy for tuberculosis control?",
        'choices'     => json_encode([
            'DOTS',
            'WHO Vaccination',
            'IMCI',
            'BFHI',
        ]),
        'answer'      => 'DOTS',
        'explanation' => 'Directly Observed Treatment, Short-course is central to TB control under PHC.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "What immunization is given at birth per PHC guidelines?",
        'choices'     => json_encode([
            'BCG',
            'MMR',
            'DPT',
            'Hepatitis A',
        ]),
        'answer'      => 'BCG',
        'explanation' => 'BCG vaccine is administered at birth to prevent severe tuberculosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which approach involves training community members to act as health promoters?",
        'choices'     => json_encode([
            'Task shifting',
            'Community mobilization',
            'Vertical programming',
            'Hospital-based care',
        ]),
        'answer'      => 'Community mobilization',
        'explanation' => 'Mobilizing volunteers builds local capacity and ownership of health activities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which is the primary record used in PHC clinics for individual patient care?",
        'choices'     => json_encode([
            'Personal health record',
            'Population register',
            'Facility logbook',
            'Community survey',
        ]),
        'answer'      => 'Personal health record',
        'explanation' => 'Maintaining individual health records ensures continuity of care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which concept describes intersectoral collaboration for health?",
        'choices'     => json_encode([
            'Health in All Policies',
            'Vertical integration',
            'Biomedical model',
            'Clinical governance',
        ]),
        'answer'      => 'Health in All Policies',
        'explanation' => 'This approach integrates health considerations across all sectors of policy-making.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which indicator measures maternal mortality in PHC monitoring?",
        'choices'     => json_encode([
            'MMR (Maternal Mortality Ratio)',
            'IMR (Infant Mortality Rate)',
            'CFR (Case Fatality Rate)',
            'NMR (Neonatal Mortality Rate)',
        ]),
        'answer'      => 'MMR (Maternal Mortality Ratio)',
        'explanation' => 'MMR is the number of maternal deaths per 100,000 live births.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which strategy is used for integrated management of childhood illness?",
        'choices'     => json_encode([
            'IMCI',
            'DOTS',
            'PHC only',
            'Hospital referral',
        ]),
        'answer'      => 'IMCI',
        'explanation' => 'IMCI combines prevention and treatment of major childhood illnesses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "What is the role of Essential Medicines List in PHC?",
        'choices'     => json_encode([
            'Guide procurement and prescribing',
            'List only hospital drugs',
            'Exclude pediatric formulations',
            'Promote alternative therapies',
        ]),
        'answer'      => 'Guide procurement and prescribing',
        'explanation' => 'Essential Medicines Lists ensure availability of priority medications at PHC level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which financing mechanism enhances access to PHC services?",
        'choices'     => json_encode([
            'User fees',
            'Community-based health insurance',
            'Out-of-pocket payments',
            'Private insurance only',
        ]),
        'answer'      => 'Community-based health insurance',
        'explanation' => 'This mechanism pools resources to reduce financial barriers to care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which approach ensures continuous quality improvement in PHC?",
        'choices'     => json_encode([
            'Donabedian model',
            'PDSA cycle',
            'Random audits only',
            'Crisis management',
        ]),
        'answer'      => 'PDSA cycle',
        'explanation' => 'Plan-Do-Study-Act promotes iterative testing and improvement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which demographic tool segments population by age and sex?",
        'choices'     => json_encode([
            'Population pyramid',
            'Dot map',
            'Line graph',
            'Scatter plot',
        ]),
        'answer'      => 'Population pyramid',
        'explanation' => 'Population pyramids display age-sex distribution visually.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which barrier affects utilization of PHC among rural communities?",
        'choices'     => json_encode([
            'Long travel distance',
            'Abundant facilities',
            'High staff ratio',
            'Free services',
        ]),
        'answer'      => 'Long travel distance',
        'explanation' => 'Distance and transport costs limit rural access to PHC services.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 1,
        'question'    => "Which principle underlies PHC to promote equity?",
        'choices'     => json_encode([
            'Selective PHC',
            'Universal coverage',
            'Fee-for-service',
            'Market-driven care',
        ]),
        'answer'      => 'Universal coverage',
        'explanation' => 'PHC aims to provide essential services for all, promoting equity.',
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

<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => "Which three dimensions define Universal Health Coverage (UHC)?",
        'choices'     => json_encode([
            'Population, services, and financial risk protection',
            'Access, quality, and equity',
            'Prevention, promotion, and rehabilitation',
            'Cost, coverage, and compliance',
        ]),
        'answer'      => 'Population, services, and financial risk protection',
        'explanation' => 'UHC is measured by who is covered, which services are provided, and protection from financial hardship.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "What are the core dimensions of quality in PHC according to WHO?",
        'choices'     => json_encode([
            'Safe, effective, people-centered, timely, efficient, equitable',
            'Accessible, affordable, acceptable',
            'Clinical, administrative, financial',
            'Preventive, promotive, curative',
        ]),
        'answer'      => 'Safe, effective, people-centered, timely, efficient, equitable',
        'explanation' => 'WHO defines these six dimensions to guide comprehensive quality care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which practice embodies people-centered care?",
        'choices'     => json_encode([
            'Engaging patients in shared decision-making',
            'Enforcing clinician-led treatment only',
            'Standardized one-size-fits-all protocols',
            'Limiting patient feedback',
        ]),
        'answer'      => 'Engaging patients in shared decision-making',
        'explanation' => 'People-centered care involves respecting patient preferences and participation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which method is used for qualitative community engagement?",
        'choices'     => json_encode([
            'Focus group discussions',
            'Household count surveys',
            'Facility financial audit',
            'Randomized trials',
        ]),
        'answer'      => 'Focus group discussions',
        'explanation' => 'FGDs allow in-depth exploration of community perceptions and needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which workforce metric indicates staff stability in PHC?",
        'choices'     => json_encode([
            'Turnover rate',
            'Total headcount',
            'Training hours only',
            'Salary level',
        ]),
        'answer'      => 'Turnover rate',
        'explanation' => 'Turnover rate reflects how often staff leave and impacts continuity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "What does VVM stand for in immunization programs?",
        'choices'     => json_encode([
            'Vaccine Vial Monitor',
            'Vaccine Volume Measure',
            'Vaccine Verification Marker',
            'Value-based Vaccine Mandate',
        ]),
        'answer'      => 'Vaccine Vial Monitor',
        'explanation' => 'VVMs indicate heat exposure to help maintain vaccine potency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which IPTp regimen is recommended for malaria prevention in pregnancy?",
        'choices'     => json_encode([
            'Monthly sulfadoxine-pyrimethamine after first trimester',
            'Daily chloroquine throughout pregnancy',
            'Single dose at delivery only',
            'Weekly mefloquine starting at conception',
        ]),
        'answer'      => 'Monthly sulfadoxine-pyrimethamine after first trimester',
        'explanation' => 'IPTp-SP reduces malaria-related complications when given monthly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which commodity is critical for clean delivery at community level?",
        'choices'     => json_encode([
            'Clean birth kit',
            'Surgical sutures',
            'MRI scanner',
            'Blood transfusion set',
        ]),
        'answer'      => 'Clean birth kit',
        'explanation' => 'Birth kits provide sterile tools to prevent infections during home births.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "What is the WHO-recommended water requirement per person per day?",
        'choices'     => json_encode([
            '20 liters',
            '5 liters',
            '50 liters',
            '100 liters',
        ]),
        'answer'      => '20 liters',
        'explanation' => 'At least 20 liters/day is needed for drinking, cooking, and hygiene.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which cause leads under-five mortality globally?",
        'choices'     => json_encode([
            'Pneumonia',
            'Measles only',
            'Cleft palate',
            'Dental caries',
        ]),
        'answer'      => 'Pneumonia',
        'explanation' => 'Pneumonia is the leading infectious cause of under-five deaths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which PHC response addresses climate-related health risks?",
        'choices'     => json_encode([
            'Heatwave early warning systems',
            'Increased coal power generation',
            'Indoor smoking chambers',
            'None of the above',
        ]),
        'answer'      => 'Heatwave early warning systems',
        'explanation' => 'Early warnings help vulnerable groups prepare for extreme heat.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which oral health intervention is part of PHC?",
        'choices'     => json_encode([
            'Distribution of fluoride toothpaste',
            'Root canal therapy',
            'Dental implants',
            'Orthodontic treatment',
        ]),
        'answer'      => 'Distribution of fluoride toothpaste',
        'explanation' => 'Fluoride toothpaste reduces caries and is promoted in PHC settings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which indicator measures facility readiness for essential medicines?",
        'choices'     => json_encode([
            'Proportion of tracer medicines in stock',
            'Total pharmacy staff count',
            'Annual budget only',
            'Patient-to-staff ratio',
        ]),
        'answer'      => 'Proportion of tracer medicines in stock',
        'explanation' => 'Tracer availability reflects access to key drugs at PHC facilities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which participatory tool tracks project progress with communities?",
        'choices'     => json_encode([
            'Community scorecards',
            'Clinical audit only',
            'Facility registers only',
            'Donor reports',
        ]),
        'answer'      => 'Community scorecards',
        'explanation' => 'Scorecards engage communities to evaluate and improve services.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which referral indicator reflects system efficiency?",
        'choices'     => json_encode([
            'Proportion of referred patients receiving feedback',
            'Total referrals made',
            'Average distance to referral facility',
            'Referrals per capita',
        ]),
        'answer'      => 'Proportion of referred patients receiving feedback',
        'explanation' => 'Feedback ensures continuity of care and closes the referral loop.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which financing model pools prepayments to reduce out-of-pocket spending?",
        'choices'     => json_encode([
            'Social health insurance',
            'Community-based insurance',
            'User fees',
            'Donor funding',
        ]),
        'answer'      => 'Social health insurance',
        'explanation' => 'Prepayment and risk-pooling minimize direct payments at point of care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which rehabilitative service is integrated into PHC?",
        'choices'     => json_encode([
            'Basic physiotherapy exercises',
            'Complex neurosurgery',
            'Stem cell therapy',
            'Orthopedic implant surgery',
        ]),
        'answer'      => 'Basic physiotherapy exercises',
        'explanation' => 'PHC provides simple rehabilitation interventions for common conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which metric tracks antibiotic stewardship performance?",
        'choices'     => json_encode([
            'Defined daily doses per 1,000 patients',
            'Total antibiotic sales',
            'Number of prescriptions only',
            'Hospital mortality rate',
        ]),
        'answer'      => 'Defined daily doses per 1,000 patients',
        'explanation' => 'DDDs standardize antibiotic use metrics to monitor and optimize prescribing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which intervention ensures facility readiness for emergencies?",
        'choices'     => json_encode([
            'Stockpiling essential supplies and PPE',
            'Daily elective surgeries',
            'Reducing staff rosters',
            'Postponing maintenance',
        ]),
        'answer'      => 'Stockpiling essential supplies and PPE',
        'explanation' => 'Preparedness includes having adequate supplies for outbreak and disaster response.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 10,
        'question'    => "Which model integrates mental health into PHC?",
        'choices'     => json_encode([
            'Collaborative care model',
            'Inpatient psychiatric unit',
            'Stand-alone counseling center',
            'None of the above',
        ]),
        'answer'      => 'Collaborative care model',
        'explanation' => 'This model teams primary care and mental health providers to manage common mental disorders.',
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

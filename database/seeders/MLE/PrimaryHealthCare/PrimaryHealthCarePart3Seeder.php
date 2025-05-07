<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => "Which service is a core function of PHC for communicable disease control?",
        'choices'     => json_encode([
            'Case finding and contact tracing',
            'Complex neurosurgery',
            'Long-term ventilation',
            'Genetic testing',
        ]),
        'answer'      => 'Case finding and contact tracing',
        'explanation' => 'Identifying and following up contacts is vital for controlling infectious diseases at PHC level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "What is the main goal of health promotion?",
        'choices'     => json_encode([
            'Enable people to increase control over their health',
            'Treat disease symptoms',
            'Provide tertiary care only',
            'Limit community involvement',
        ]),
        'answer'      => 'Enable people to increase control over their health',
        'explanation' => 'Health promotion aims to empower individuals and communities to improve health determinants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which indicator assesses the effectiveness of antenatal care in PHC?",
        'choices'     => json_encode([
            'Proportion of women with at least four ANC visits',
            'Number of cesarean sections',
            'Total hospital admissions',
            'Neonatal ICU stays',
        ]),
        'answer'      => 'Proportion of women with at least four ANC visits',
        'explanation' => 'WHO recommends at least four antenatal contacts; coverage indicates ANC quality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which strategy is used in PHC for hypertension prevention?",
        'choices'     => json_encode([
            'Salt reduction in diet',
            'Exclusive sugar supplementation',
            'Mandatory bed rest',
            'Routine antibiotic use',
        ]),
        'answer'      => 'Salt reduction in diet',
        'explanation' => 'Reducing dietary sodium is a proven intervention to prevent and control hypertension.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "What is the purpose of growth monitoring in PHC?",
        'choices'     => json_encode([
            'Detect malnutrition early',
            'Calculate hospital profit',
            'Plan complex surgeries',
            'Replace vaccination',
        ]),
        'answer'      => 'Detect malnutrition early',
        'explanation' => 'Regular measurement of weight and height helps identify under- or overnutrition in children.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which screening is recommended for cervical cancer in PHC?",
        'choices'     => json_encode([
            'Pap smear every 3 years',
            'MRI scan annually',
            'CT scan at age 20',
            'Colonoscopy every 5 years',
        ]),
        'answer'      => 'Pap smear every 3 years',
        'explanation' => 'Cervical cytology via Pap smear is a standard PHC screening to detect precancerous lesions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which element is NOT part of the PHC approach?",
        'choices'     => json_encode([
            'Equity in service access',
            'Curative care only',
            'Intersectoral collaboration',
            'Community empowerment',
        ]),
        'answer'      => 'Curative care only',
        'explanation' => 'PHC integrates prevention, promotion, and curative care, not curative alone.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which approach ensures continuity of care in PHC?",
        'choices'     => json_encode([
            'Referral systems and follow-up',
            'One-time health campaign',
            'Standalone specialist visits',
            'Hospital admission only',
        ]),
        'answer'      => 'Referral systems and follow-up',
        'explanation' => 'Effective referral and feedback mechanisms maintain continuous, coordinated care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which PHC component addresses mental health?",
        'choices'     => json_encode([
            'Counseling and basic psychosocial support',
            'Psychiatric hospitalization only',
            'Neurological surgery',
            'Intensive care monitoring',
        ]),
        'answer'      => 'Counseling and basic psychosocial support',
        'explanation' => 'PHC offers initial mental health care, including counseling and community support.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "What is the best indicator of PHC immunization coverage?",
        'choices'     => json_encode([
            'Percentage of children vaccinated by age one',
            'Number of vaccine doses stocked',
            'Staff vaccination rates',
            'Hospital immunization clinics count',
        ]),
        'answer'      => 'Percentage of children vaccinated by age one',
        'explanation' => 'Coverage by first birthday reflects accessibility and uptake of routine vaccines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which action is part of PHC for non-communicable diseases?",
        'choices'     => json_encode([
            'Lifestyle counseling and risk factor management',
            'Bone marrow transplant',
            'Open heart surgery',
            'Major organ transplant',
        ]),
        'answer'      => 'Lifestyle counseling and risk factor management',
        'explanation' => 'PHC emphasizes modifiable risk factors like diet, exercise, and tobacco cessation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which measure is used to evaluate PHC financial protection?",
        'choices'     => json_encode([
            'Incidence of catastrophic health expenditure',
            'Hospital profit margins',
            'Number of private clinics',
            'Amount of user fees collected',
        ]),
        'answer'      => 'Incidence of catastrophic health expenditure',
        'explanation' => 'This measures households facing high out-of-pocket costs relative to income.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which community-level data source assists PHC planning?",
        'choices'     => json_encode([
            'Household surveys and focus groups',
            'MRI scans',
            'Comfort index reports',
            'International travel logs',
        ]),
        'answer'      => 'Household surveys and focus groups',
        'explanation' => 'Primary data collection tools elicit local health needs and perceptions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "What role do PHC referral hospitals play?",
        'choices'     => json_encode([
            'Provide secondary support and feedback',
            'Replace PHC facilities entirely',
            'Limit community involvement',
            'Offer only outpatient counseling',
        ]),
        'answer'      => 'Provide secondary support and feedback',
        'explanation' => 'Referral hospitals manage complex cases and support PHC with training and feedback.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which indicator measures PHC workforce density?",
        'choices'     => json_encode([
            'Number of health workers per 1,000 population',
            'Total health facility count',
            'Number of ambulances',
            'Nurse-patient ratio in ICU',
        ]),
        'answer'      => 'Number of health workers per 1,000 population',
        'explanation' => 'Workforce density indicates availability of providers relative to population needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which action fosters community ownership in PHC projects?",
        'choices'     => json_encode([
            'Participatory planning and resource contribution',
            'Exclusive expert-led design',
            'Top-down funding only',
            'One-off interventions',
        ]),
        'answer'      => 'Participatory planning and resource contribution',
        'explanation' => 'Engaging communities in design and leveraging local resources enhances ownership.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which strategy is crucial for antimicrobial stewardship in PHC?",
        'choices'     => json_encode([
            'Educating prescribers and monitoring antibiotic use',
            'Unregulated access to antibiotics',
            'Reducing hygiene practices',
            'Encouraging broad-spectrum antibiotic use',
        ]),
        'answer'      => 'Educating prescribers and monitoring antibiotic use',
        'explanation' => 'Stewardship programs ensure appropriate antibiotic prescribing to curb resistance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "What is the significance of essential diagnostics in PHC?",
        'choices'     => json_encode([
            'Enable early detection and appropriate treatment',
            'Increase laboratory revenue',
            'Reduce patient visits only',
            'Replace clinical judgment',
        ]),
        'answer'      => 'Enable early detection and appropriate treatment',
        'explanation' => 'Accessible diagnostics support timely management of common conditions at PHC level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which financial metric indicates PHC sustainability?",
        'choices'     => json_encode([
            'Proportion of recurrent costs covered by public funding',
            'Number of private clinics',
            'Profit margin per service',
            'Number of donor-funded projects',
        ]),
        'answer'      => 'Proportion of recurrent costs covered by public funding',
        'explanation' => 'Stable public financing ensures continuous operation of PHC services.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 3,
        'question'    => "Which principle guides the selection of essential medicines?",
        'choices'     => json_encode([
            'Efficacy, safety, cost-effectiveness, and public health relevance',
            'Popularity among patients',
            'Highest price available',
            'Exclusive use in hospitals',
        ]),
        'answer'      => 'Efficacy, safety, cost-effectiveness, and public health relevance',
        'explanation' => 'Essential medicines are chosen based on these core criteria to meet priority health needs.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

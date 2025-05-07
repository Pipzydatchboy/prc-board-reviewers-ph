<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => "Which role best describes a community health worker in PHC?",
        'choices'     => json_encode([
            'Provides home visits and basic treatments',
            'Performs advanced surgical procedures',
            'Prescribes specialized medications',
            'Manages hospital budgets',
        ]),
        'answer'      => 'Provides home visits and basic treatments',
        'explanation' => 'CHWs deliver basic services like home visits, health education, and referrals.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which indicator measures the proportion of births attended by skilled health personnel?",
        'choices'     => json_encode([
            'Skilled birth attendance rate',
            'Antenatal care coverage',
            'Under-five mortality rate',
            'Immunization coverage',
        ]),
        'answer'      => 'Skilled birth attendance rate',
        'explanation' => 'This indicator reflects access to skilled maternal care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "What strategy is central to integrated vector control in PHC?",
        'choices'     => json_encode([
            'Larval source management and bed net distribution',
            'Antibiotic distribution',
            'Mass surgical camps',
            'Routine deworming only',
        ]),
        'answer'      => 'Larval source management and bed net distribution',
        'explanation' => 'Integrated vector control uses environmental management and insecticide-treated nets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which coverage indicator assesses insecticide-treated net use?",
        'choices'     => json_encode([
            'Proportion of households owning at least one ITN',
            'Malaria incidence rate',
            'Bed net production volume',
            'Hospital admission for malaria',
        ]),
        'answer'      => 'Proportion of households owning at least one ITN',
        'explanation' => 'Ownership of ITNs is a common measure of preventive coverage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which supplementation is recommended postpartum to prevent anemia in women?",
        'choices'     => json_encode([
            'Iron and folic acid',
            'Calcium only',
            'Vitamin D only',
            'Zinc only',
        ]),
        'answer'      => 'Iron and folic acid',
        'explanation' => 'Postpartum iron and folic acid prevent maternal anemia and support recovery.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "How is residual chlorine in household water measured?",
        'choices'     => json_encode([
            'DPD colorimetric test',
            'pH strip test',
            'Temperature probe',
            'Turbidity meter',
        ]),
        'answer'      => 'DPD colorimetric test',
        'explanation' => 'DPD tests quantify free chlorine to ensure safe disinfection levels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "What is the recommended number of postpartum home visits by CHWs?",
        'choices'     => json_encode([
            'Day 3 and Day 7',
            'Day 30 and Day 60',
            'Only Day 1',
            'Day 14 and Day 28',
        ]),
        'answer'      => 'Day 3 and Day 7',
        'explanation' => 'Home visits on day 3 and 7 detect complications early and support mother and newborn.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "What device is essential for cold chain monitoring?",
        'choices'     => json_encode([
            'Vaccine vial monitor',
            'Blood pressure cuff',
            'Glucometer',
            'Thermometer only',
        ]),
        'answer'      => 'Vaccine vial monitor',
        'explanation' => 'Vaccine vial monitors indicate heat exposure to preserve potency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which school-based service is part of PHC?",
        'choices'     => json_encode([
            'Vision screening and health education',
            'Major orthopedic surgery',
            'MRI scanning',
            'Hospital-based chemotherapy',
        ]),
        'answer'      => 'Vision screening and health education',
        'explanation' => 'School programs include basic screening and health promotion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "What survey method is used to assess NCD risk factors at PHC?",
        'choices'     => json_encode([
            'WHO STEPS survey',
            'DHS survey only',
            'Demographic census',
            'Clinical trial',
        ]),
        'answer'      => 'WHO STEPS survey',
        'explanation' => 'STEPS collects standardized data on NCD risk factors in primary care settings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "What distinguishes comprehensive PHC from selective PHC?",
        'choices'     => json_encode([
            'Addresses all health needs holistically',
            'Focuses only on immunization',
            'Limits to maternal care',
            'Targets a single disease',
        ]),
        'answer'      => 'Addresses all health needs holistically',
        'explanation' => 'Comprehensive PHC covers promotive, preventive, curative, and rehabilitative services.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which service is part of basic emergency obstetric care (BEmOC)?",
        'choices'     => json_encode([
            'Administer parenteral oxytocin',
            'Perform cesarean section',
            'Provide neonatal ventilation',
            'Offer psychiatric care',
        ]),
        'answer'      => 'Administer parenteral oxytocin',
        'explanation' => 'BEmOC includes injectable oxytocin to manage postpartum hemorrhage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which program addresses mental health in PHC?",
        'choices'     => json_encode([
            'mhGAP (WHO Mental Health Gap Action Programme)',
            'DOTS',
            'IMCI',
            'IDSR',
        ]),
        'answer'      => 'mhGAP (WHO Mental Health Gap Action Programme)',
        'explanation' => 'mhGAP supports integration of mental health care into primary settings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which measure tracks equity in health service use?",
        'choices'     => json_encode([
            'Concentration index of service utilization',
            'Total service count',
            'Staff vacancy rate',
            'Facility opening hours',
        ]),
        'answer'      => 'Concentration index of service utilization',
        'explanation' => 'The concentration index quantifies inequality in service use across populations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which action improves immunization defaulter tracing?",
        'choices'     => json_encode([
            'Use electronic registries and outreach',
            'Wait for caregivers to return',
            'Limit to facility-based reminders',
            'Stop after first missed dose',
        ]),
        'answer'      => 'Use electronic registries and outreach',
        'explanation' => 'Active tracking using registries ensures children complete vaccination schedules.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which screening is recommended for gestational diabetes?",
        'choices'     => json_encode([
            'Oral glucose tolerance test at 24–28 weeks',
            'Random glucose at first visit',
            'HbA1c only postpartum',
            'Fasting glucose monthly',
        ]),
        'answer'      => 'Oral glucose tolerance test at 24–28 weeks',
        'explanation' => 'OGTT between 24 and 28 weeks detects gestational diabetes for timely management.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which tool assists classification of diseases in PHC reporting?",
        'choices'     => json_encode([
            'ICD-10 coding',
            'DSM-5 manual',
            'CPT coding',
            'LOINC charts',
        ]),
        'answer'      => 'ICD-10 coding',
        'explanation' => 'WHO’s ICD-10 standardizes disease classification for surveillance and reporting.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "What financing method incentivizes PHC performance?",
        'choices'     => json_encode([
            'Performance-based incentives',
            'Flat salary only',
            'User fees only',
            'Donor-driven project funds',
        ]),
        'answer'      => 'Performance-based incentives',
        'explanation' => 'Linking funding to service targets motivates improved PHC performance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which tool evaluates PHC service quality continuously?",
        'choices'     => json_encode([
            'PDSA cycle audits',
            'Random patient surveys only',
            'Annual hospital accreditation',
            'Financial audits only',
        ]),
        'answer'      => 'PDSA cycle audits',
        'explanation' => 'PDSA cycles enable iterative testing and improvement of PHC processes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 5,
        'question'    => "Which principle supports sustainability of PHC programs?",
        'choices'     => json_encode([
            'Community ownership and local capacity building',
            'External expert dependency',
            'Short-term project funding only',
            'One-size-fits-all interventions',
        ]),
        'answer'      => 'Community ownership and local capacity building',
        'explanation' => 'Empowering communities ensures long-term maintenance of PHC activities.',
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

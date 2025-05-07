<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => "What is the recommended interval for community outreach visits to pregnant women?",
        'choices'     => json_encode([
            'Weekly',
            'Monthly',
            'Quarterly',
            'Only at delivery',
        ]),
        'answer'      => 'Monthly',
        'explanation' => 'Monthly visits allow monitoring of maternal and fetal well-being and early detection of complications.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "What is the main purpose of acute flaccid paralysis (AFP) surveillance in PHC?",
        'choices'     => json_encode([
            'Detect poliovirus circulation',
            'Monitor malnutrition rates',
            'Assess water quality',
            'Track tuberculosis cases',
        ]),
        'answer'      => 'Detect poliovirus circulation',
        'explanation' => 'AFP surveillance is used to identify and investigate cases potentially caused by poliovirus.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which activity is part of growth monitoring and promotion in PHC?",
        'choices'     => json_encode([
            'Plotting child weight on growth chart',
            'Prescribing antibiotics routinely',
            'Referral for MRI scans',
            'Distributing sugary snacks',
        ]),
        'answer'      => 'Plotting child weight on growth chart',
        'explanation' => 'Regularly plotting weight helps detect growth faltering and guide nutrition counseling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which community strategy is effective in reducing tobacco use?",
        'choices'     => json_encode([
            'Awareness campaigns and peer education',
            'Offering free cigarettes',
            'Promoting tobacco sales',
            'Providing tobacco only to adults',
        ]),
        'answer'      => 'Awareness campaigns and peer education',
        'explanation' => 'Community-based education raises awareness of risks and encourages quitting among peers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which water treatment indicator shows adequate disinfection?",
        'choices'     => json_encode([
            'Residual chlorine level',
            'pH level only',
            'Water temperature',
            'Color measurement',
        ]),
        'answer'      => 'Residual chlorine level',
        'explanation' => 'Residual chlorine indicates ongoing disinfection and safety of treated water.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "What is the primary objective of community mobilization?",
        'choices'     => json_encode([
            'Empower communities to take collective health action',
            'Increase dependency on external aid',
            'Limit community involvement in planning',
            'Centralize decision-making',
        ]),
        'answer'      => 'Empower communities to take collective health action',
        'explanation' => 'Mobilization engages communities in identifying and solving their own health challenges.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which IMCI component addresses pneumonia in under-five children?",
        'choices'     => json_encode([
            'Assess fast breathing and classify for antibiotics',
            'Recommend exclusive breastfeeding',
            'Provide vitamin A supplementation only',
            'Refer all cases to hospital',
        ]),
        'answer'      => 'Assess fast breathing and classify for antibiotics',
        'explanation' => 'IMCI guidelines use respiratory rate count to identify pneumonia requiring antibiotic treatment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which micronutrient is recommended for women in preconception care?",
        'choices'     => json_encode([
            'Folic acid',
            'Vitamin D only',
            'Calcium only',
            'Vitamin C only',
        ]),
        'answer'      => 'Folic acid',
        'explanation' => 'Folic acid supplementation reduces neural tube defects when started before conception.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "What screening test is used for syphilis in pregnant women at PHC?",
        'choices'     => json_encode([
            'RPR test',
            'HIV rapid test',
            'Urine dipstick',
            'Complete blood count',
        ]),
        'answer'      => 'RPR test',
        'explanation' => 'Rapid Plasma Reagin (RPR) is a screening tool for syphilis in antenatal care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which intervention is part of active management of the third stage of labor?",
        'choices'     => json_encode([
            'Administration of oxytocin immediately after birth',
            'Delayed cord clamping only',
            'Allowing placenta to deliver spontaneously',
            'Routine episiotomy',
        ]),
        'answer'      => 'Administration of oxytocin immediately after birth',
        'explanation' => 'Oxytocin reduces postpartum hemorrhage when given as part of AMTSL.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "What is the first step in implementing a health education session?",
        'choices'     => json_encode([
            'Conduct a needs assessment',
            'Distribute flyers',
            'Order equipment',
            'Write a report',
        ]),
        'answer'      => 'Conduct a needs assessment',
        'explanation' => 'Assessing audience needs ensures relevance and effectiveness of education messages.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which antibiotic is first-line for non-severe childhood pneumonia at PHC?",
        'choices'     => json_encode([
            'Oral amoxicillin',
            'Trimethoprim-sulfamethoxazole',
            'Erythromycin only',
            'Ceftriaxone injection',
        ]),
        'answer'      => 'Oral amoxicillin',
        'explanation' => 'Amoxicillin is recommended due to efficacy, safety, and ease of administration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "What is the recommended duration of exclusive breastfeeding?",
        'choices'     => json_encode([
            '6 months',
            '3 months',
            '12 months',
            '2 months',
        ]),
        'answer'      => '6 months',
        'explanation' => 'Exclusive breastfeeding for six months supports optimal infant nutrition and immunity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which device ensures safe injection practices at PHC?",
        'choices'     => json_encode([
            'Auto-disable syringe',
            'Glass syringe',
            'Multi-use vial',
            'Reused needle',
        ]),
        'answer'      => 'Auto-disable syringe',
        'explanation' => 'Auto-disable syringes prevent reuse and reduce unsafe injection risks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which record-keeping tool tracks immunization defaulters?",
        'choices'     => json_encode([
            'Defaulter tracing list',
            'Hospital discharge register',
            'Pharmacy ledger',
            'Nutrition log',
        ]),
        'answer'      => 'Defaulter tracing list',
        'explanation' => 'Lists of defaulters enable follow-up to ensure children complete immunization schedules.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which indicator assesses PHC efficiency?",
        'choices'     => json_encode([
            'Average patient waiting time',
            'Number of operating theatres',
            'Hospital bed occupancy rate',
            'MRI scan count',
        ]),
        'answer'      => 'Average patient waiting time',
        'explanation' => 'Shorter waiting times reflect efficient service organization and flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which strategy reduces maternal morbidity in PHC?",
        'choices'     => json_encode([
            'Early risk identification and referral',
            'Delay antenatal visits',
            'Hospital-only care',
            'Eliminate community outreach',
        ]),
        'answer'      => 'Early risk identification and referral',
        'explanation' => 'Referral of high-risk pregnancies to higher-level care prevents complications.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which intervention decreases under-five diarrhea incidence?",
        'choices'     => json_encode([
            'ORS distribution and promotion',
            'Mass antibiotic administration',
            'Delay breastfeeding',
            'Use of sugary beverages',
        ]),
        'answer'      => 'ORS distribution and promotion',
        'explanation' => 'Promotion of ORS use reduces morbidity and mortality from diarrhea.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which component addresses gender-based violence in PHC?",
        'choices'     => json_encode([
            'Counseling and referral services',
            'Surgical intervention only',
            'Mandatory reporting without support',
            'Ignore patient disclosures',
        ]),
        'answer'      => 'Counseling and referral services',
        'explanation' => 'PHC provides initial support and refers survivors to appropriate care and legal services.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 7,
        'question'    => "Which tool is used for participatory evaluation of PHC projects?",
        'choices'     => json_encode([
            'Participatory rural appraisal (PRA)',
            'Randomized controlled trial',
            'Case-control study',
            'Cohort study',
        ]),
        'answer'      => 'Participatory rural appraisal (PRA)',
        'explanation' => 'PRA techniques engage communities in evaluating and planning programs.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => "Which of the following best defines community participation in PHC?",
        'choices'     => json_encode([
            'Top-down decision-making',
            'Engaging families in health actions',
            'Exclusive use of professionals',
            'Private sector financing',
        ]),
        'answer'      => 'Engaging families in health actions',
        'explanation' => 'PHC emphasizes active involvement of community members in planning and implementation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "What does the 'essential medicines' concept aim to ensure?",
        'choices'     => json_encode([
            'Availability of basic drugs',
            'Higher costs for treatments',
            'Exclusive hospital use',
            'Unregulated prescribing',
        ]),
        'answer'      => 'Availability of basic drugs',
        'explanation' => 'Essential medicines lists guarantee access to priority medications in PHC facilities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which strategy is used for adolescent health in PHC?",
        'choices'     => json_encode([
            'School-based health education',
            'Geriatric screening',
            'Neonatal resuscitation only',
            'Occupational therapy',
        ]),
        'answer'      => 'School-based health education',
        'explanation' => 'School programs target adolescents for health promotion and risk prevention.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which activity is a component of environmental health at PHC level?",
        'choices'     => json_encode([
            'Water quality monitoring',
            'Advanced surgical care',
            'Genetic counseling',
            'Psychiatric hospitalization',
        ]),
        'answer'      => 'Water quality monitoring',
        'explanation' => 'PHC includes safe water and sanitation interventions to prevent disease.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "What is the focus of the Health in All Policies approach?",
        'choices'     => json_encode([
            'Integrating health considerations across sectors',
            'Limiting health impact to healthcare sector',
            'Privatizing PHC services',
            'Focusing solely on clinical care',
        ]),
        'answer'      => 'Integrating health considerations across sectors',
        'explanation' => 'HiAP ensures health impacts are considered in policymaking beyond health departments.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which indicator is most appropriate for monitoring under-five mortality?",
        'choices'     => json_encode([
            'Under-five mortality rate',
            'Maternal mortality ratio',
            'Adult literacy rate',
            'Hospital bed occupancy',
        ]),
        'answer'      => 'Under-five mortality rate',
        'explanation' => 'This rate reflects child survival and effectiveness of PHC interventions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which approach improves access via community health workers?",
        'choices'     => json_encode([
            'Task shifting',
            'Centralized hospital care',
            'Urban clinic expansion only',
            'Exclusive specialist care',
        ]),
        'answer'      => 'Task shifting',
        'explanation' => 'Training lay workers to deliver basic services broadens PHC reach in communities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which PHC service provides preventive care for mothers?",
        'choices'     => json_encode([
            'Antenatal check-ups',
            'Cardiac surgery',
            'Chemotherapy',
            'MRI scans',
        ]),
        'answer'      => 'Antenatal check-ups',
        'explanation' => 'Regular antenatal visits detect risks early and improve maternal outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "What does DOTS stand for in TB control?",
        'choices'     => json_encode([
            'Directly Observed Treatment, Short-course',
            'Daily Oral Therapy Service',
            'Drug-Oriented TB Strategy',
            'Disease Observation Tracking System',
        ]),
        'answer'      => 'Directly Observed Treatment, Short-course',
        'explanation' => 'DOTS is the WHO-recommended strategy for effective TB treatment at PHC level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which activity exemplifies health promotion?",
        'choices'     => json_encode([
            'Organizing community exercise groups',
            'Performing appendectomy',
            'Administering antibiotics for pneumonia',
            'Setting up intensive care units',
        ]),
        'answer'      => 'Organizing community exercise groups',
        'explanation' => 'Health promotion empowers communities to adopt healthy lifestyles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "What is the key principle of the PDSA cycle?",
        'choices'     => json_encode([
            'Iterative testing and learning',
            'One-time planning only',
            'Avoiding evaluation',
            'Random changes without measurement',
        ]),
        'answer'      => 'Iterative testing and learning',
        'explanation' => 'Plan-Do-Study-Act cycles facilitate continuous quality improvement in PHC.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which vaccine is typically given at 9 months in PHC immunization schedule?",
        'choices'     => json_encode([
            'Measles vaccine',
            'Polio OPV',
            'Hepatitis B',
            'Tetanus toxoid',
        ]),
        'answer'      => 'Measles vaccine',
        'explanation' => 'Measles immunization at 9 months prevents outbreak in young children.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "What does SWOT stand for in community assessment?",
        'choices'     => json_encode([
            'Strengths, Weaknesses, Opportunities, Threats',
            'Simple, Wide, Open, Timely',
            'Systematic, Whole, Objective, Tactical',
            'Selective, Workable, Owned, Tested',
        ]),
        'answer'      => 'Strengths, Weaknesses, Opportunities, Threats',
        'explanation' => 'SWOT analysis identifies internal and external factors affecting community health.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which financing approach reduces out-of-pocket expenses?",
        'choices'     => json_encode([
            'User fees',
            'Community-based insurance',
            'Voluntary donations',
            'Private pay',
        ]),
        'answer'      => 'Community-based insurance',
        'explanation' => 'Pooling risk at community level decreases direct payments at point of care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which element is part of the Donabedian model?",
        'choices'     => json_encode([
            'Structure',
            'Emotion',
            'Culture',
            'Environment',
        ]),
        'answer'      => 'Structure',
        'explanation' => 'Donabedian’s framework: Structure, Process, and Outcome to assess quality of care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which tool is used to prioritize community health problems?",
        'choices'     => json_encode([
            'Barrier analysis',
            'Pairwise ranking',
            'Clinical audit',
            'Case series',
        ]),
        'answer'      => 'Pairwise ranking',
        'explanation' => 'Pairwise ranking helps stakeholders systematically compare and rank issues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which activity is part of integrated management of neonatal and childhood illness (IMNCI)?",
        'choices'     => json_encode([
            'Assessing danger signs',
            'Surgical referral',
            'Radiological investigations',
            'Elective procedures',
        ]),
        'answer'      => 'Assessing danger signs',
        'explanation' => 'IMNCI includes systematic evaluation and classification of sick children.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which practice enhances health equity in PHC?",
        'choices'     => json_encode([
            'Targeting only urban areas',
            'Universal coverage regardless of ability to pay',
            'Selective services for paying clients',
            'Exclusive specialist care',
        ]),
        'answer'      => 'Universal coverage regardless of ability to pay',
        'explanation' => 'Equity is promoted when services are accessible to all, without financial barriers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which health education topic is essential in PHC maternal care?",
        'choices'     => json_encode([
            'Breastfeeding techniques',
            'Advanced cardiac life support',
            'Robotic surgery options',
            'None of the above',
        ]),
        'answer'      => 'Breastfeeding techniques',
        'explanation' => 'Teaching proper latch and feeding supports maternal and child health.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 2,
        'question'    => "Which intervention is part of PHC oral health promotion?",
        'choices'     => json_encode([
            'Community fluoride varnish programs',
            'Full orthodontic treatment',
            'Dental implants only',
            'Hospital-based surgery',
        ]),
        'answer'      => 'Community fluoride varnish programs',
        'explanation' => 'Fluoride varnish helps prevent dental caries in community settings.',
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

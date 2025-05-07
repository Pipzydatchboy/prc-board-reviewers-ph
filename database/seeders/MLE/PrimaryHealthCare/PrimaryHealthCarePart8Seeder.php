<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => "Which tool is used to monitor labor progress in PHC settings?",
        'choices'     => json_encode([
            'Partograph',
            'APGAR score chart',
            'Visual analog scale',
            'Glasgow Coma Scale',
        ]),
        'answer'      => 'Partograph',
        'explanation' => 'The partograph graphically records labor parameters to detect deviations from normal progress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What mid-upper arm circumference (MUAC) cutoff indicates maternal malnutrition?",
        'choices'     => json_encode([
            '< 23 cm',
            '< 18 cm',
            '< 25 cm',
            '< 20 cm',
        ]),
        'answer'      => '< 23 cm',
        'explanation' => 'A MUAC < 23 cm in pregnant women signals nutritional risk and need for intervention.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which global declaration reaffirmed PHC as the foundation for universal health coverage?",
        'choices'     => json_encode([
            '2018 Astana Declaration',
            '1978 Alma-Ata Declaration',
            '1986 Ottawa Charter',
            '2000 Millennium Declaration',
        ]),
        'answer'      => '2018 Astana Declaration',
        'explanation' => 'The Astana Declaration of 2018 revitalized PHC to achieve universal health coverage and SDGs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which Sustainable Development Goal is directly related to health?",
        'choices'     => json_encode([
            'SDG 3: Good Health and Well-being',
            'SDG 2: Zero Hunger',
            'SDG 6: Clean Water and Sanitation',
            'SDG 11: Sustainable Cities and Communities',
        ]),
        'answer'      => 'SDG 3: Good Health and Well-being',
        'explanation' => 'SDG 3 focuses on ensuring healthy lives and promoting well-being for all ages.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What is the main benefit of community-based health insurance?",
        'choices'     => json_encode([
            'Financial risk protection',
            'Increased out-of-pocket payments',
            'Higher administrative costs',
            'Exclusive private care',
        ]),
        'answer'      => 'Financial risk protection',
        'explanation' => 'Community-based insurance pools resources to reduce financial barriers to care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What does microplanning in immunization programs involve?",
        'choices'     => json_encode([
            'Local mapping and tailored outreach strategies',
            'Centralized procurement only',
            'National-level cold chain equipment',
            'Hospital-based mass vaccination',
        ]),
        'answer'      => 'Local mapping and tailored outreach strategies',
        'explanation' => 'Microplanning identifies local population needs and plans vaccination sessions accordingly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What is the purpose of lot quality assurance sampling (LQAS)?",
        'choices'     => json_encode([
            'Assess immunization coverage quality quickly',
            'Price negotiation for medicines',
            'Long-term cohort follow-up',
            'Detailed household surveys',
        ]),
        'answer'      => 'Assess immunization coverage quality quickly',
        'explanation' => 'LQAS classifies areas as acceptable or unacceptable based on sample surveys.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which surveillance type uses designated sites to monitor specific diseases?",
        'choices'     => json_encode([
            'Sentinel surveillance',
            'Active case finding in all communities',
            'Household panel surveys',
            'Annual health census',
        ]),
        'answer'      => 'Sentinel surveillance',
        'explanation' => 'Sentinel sites report detailed data on priority diseases to detect trends.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What is the goal of Maternal Death Surveillance and Response (MDSR)?",
        'choices'     => json_encode([
            'Identify causes and prevent future deaths',
            'Record neonatal vaccinations',
            'Increase hospital revenue',
            'Monitor child growth only',
        ]),
        'answer'      => 'Identify causes and prevent future deaths',
        'explanation' => 'MDSR reviews maternal deaths to implement prevention strategies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which method is recommended for sterilizing clinic instruments?",
        'choices'     => json_encode([
            'Steam autoclaving under pressure',
            'Dry heat for 5 minutes',
            'Alcohol wipe only',
            'Room air drying',
        ]),
        'answer'      => 'Steam autoclaving under pressure',
        'explanation' => 'Autoclaving ensures reliable sterilization by using high-pressure steam.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which infection prevention practice is fundamental in PHC?",
        'choices'     => json_encode([
            'Standard precautions including hand hygiene',
            'Relying on gloves only',
            'Disinfecting once a week',
            'Using open containers for sharps',
        ]),
        'answer'      => 'Standard precautions including hand hygiene',
        'explanation' => 'Standard precautions prevent healthcare-associated infections and protect both patients and workers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What is integrated community case management (iCCM)?",
        'choices'     => json_encode([
            'CHWs treat malaria, pneumonia, and diarrhea',
            'Hospital-based emergency care',
            'Specialist-only outpatient clinics',
            'Urban health campaigns only',
        ]),
        'answer'      => 'CHWs treat malaria, pneumonia, and diarrhea',
        'explanation' => 'iCCM trains community health workers to manage common childhood illnesses locally.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which register tracks pregnant women through antenatal to postpartum?",
        'choices'     => json_encode([
            'Maternal health register',
            'Immunization defaulter list',
            'Tuberculosis register',
            'Nutrition supplement log',
        ]),
        'answer'      => 'Maternal health register',
        'explanation' => 'This register ensures continuity of care by documenting all maternal services and outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What does task shifting entail?",
        'choices'     => json_encode([
            'Redistributing tasks to less specialized workers',
            'Hiring more specialists only',
            'Centralizing all services in hospitals',
            'Eliminating community health roles',
        ]),
        'answer'      => 'Redistributing tasks to less specialized workers',
        'explanation' => 'Task shifting expands service delivery by training lower cadres to perform specific tasks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which digital intervention improves appointment adherence?",
        'choices'     => json_encode([
            'SMS reminders',
            'Paper flyers',
            'Radio ads',
            'Newspaper notices',
        ]),
        'answer'      => 'SMS reminders',
        'explanation' => 'Automated SMS prompts remind patients of upcoming visits, reducing no-shows.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What is the primary objective of triage in community outreach?",
        'choices'     => json_encode([
            'Prioritize patients by urgency',
            'Collect payment first',
            'Enroll only healthy individuals',
            'Refer all to hospitals',
        ]),
        'answer'      => 'Prioritize patients by urgency',
        'explanation' => 'Triage ensures that limited resources are directed to those most in need first.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which indicator measures community health worker density?",
        'choices'     => json_encode([
            'Number of CHWs per 1,000 population',
            'Hospital beds per 1,000 population',
            'Doctors per 100,000 population',
            'Nurses per 1,000 population',
        ]),
        'answer'      => 'Number of CHWs per 1,000 population',
        'explanation' => 'This density indicates coverage and outreach capacity of community health workers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which tool is used for PHC data visualization and dashboards?",
        'choices'     => json_encode([
            'DHIS2 dashboards',
            'Hand-drawn charts',
            'Printed newsletters',
            'Annual reports only',
        ]),
        'answer'      => 'DHIS2 dashboards',
        'explanation' => 'DHIS2 provides interactive dashboards for monitoring health indicators in PHC.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "Which method evaluates health program impact at population level?",
        'choices'     => json_encode([
            'Difference-in-differences analysis',
            'Convenience sampling only',
            'Expert opinion surveys',
            'Case series reviews',
        ]),
        'answer'      => 'Difference-in-differences analysis',
        'explanation' => 'This quasi-experimental method compares outcomes over time between groups.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 8,
        'question'    => "What is the primary purpose of WHO SARA tool?",
        'choices'     => json_encode([
            'Assess service availability and readiness',
            'Record individual patient data',
            'Track stockouts only',
            'Monitor financial audits',
        ]),
        'answer'      => 'Assess service availability and readiness',
        'explanation' => 'SARA (Service Availability and Readiness Assessment) evaluates PHC facility capacity.',
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

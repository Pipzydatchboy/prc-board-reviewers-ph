<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => "What is a key advantage of telemedicine in PHC?",
        'choices'     => json_encode([
            'Expands access to remote patients',
            'Increases costs significantly',
            'Reduces patient confidentiality',
            'Replaces all in-person visits',
        ]),
        'answer'      => 'Expands access to remote patients',
        'explanation' => 'Telemedicine enables care delivery to those in underserved or distant locations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which tool is used for community-based disease surveillance?",
        'choices'     => json_encode([
            'Integrated Disease Surveillance and Response (IDSR)',
            'Electronic health records only',
            'Hospital discharge summaries',
            'Annual community census',
        ]),
        'answer'      => 'Integrated Disease Surveillance and Response (IDSR)',
        'explanation' => 'IDSR is a WHO-recommended framework for timely detection of outbreaks at community level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which indicator measures patient satisfaction in PHC?",
        'choices'     => json_encode([
            'Proportion of positive surveys completed',
            'Number of facility beds',
            'Staff-to-patient ratio',
            'Total service volume',
        ]),
        'answer'      => 'Proportion of positive surveys completed',
        'explanation' => 'Patient satisfaction surveys directly assess perceived quality of care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which model links inputs, activities, outputs, and outcomes in program planning?",
        'choices'     => json_encode([
            'Logic model',
            'SWOT analysis',
            'Fishbone diagram',
            'Stakeholder map',
        ]),
        'answer'      => 'Logic model',
        'explanation' => 'Logic models visually map how program resources and activities lead to intended results.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "What practice improves health literacy in PHC?",
        'choices'     => json_encode([
            'Providing plain-language educational materials',
            'Using medical jargon in counseling',
            'Limiting communication to written forms only',
            'Avoiding patient questions',
        ]),
        'answer'      => 'Providing plain-language educational materials',
        'explanation' => 'Plain language materials help patients understand health information and make informed decisions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which system prevents stockouts of essential medicines?",
        'choices'     => json_encode([
            'Pull (min-max) inventory system',
            'Random ad-hoc ordering',
            'Donor-dependent supply',
            'First-come, first-served basis',
        ]),
        'answer'      => 'Pull (min-max) inventory system',
        'explanation' => 'A pull system maintains stock between minimum and maximum levels, reducing shortages.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which intervention reduces program default rates?",
        'choices'     => json_encode([
            'Automated phone reminders',
            'One-time group meeting only',
            'Ceasing follow-up',
            'Reducing service hours',
        ]),
        'answer'      => 'Automated phone reminders',
        'explanation' => 'Phone reminders improve adherence by prompting patients about appointments and treatments.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "What is the primary purpose of WHO PEN in PHC?",
        'choices'     => json_encode([
            'Manage non-communicable diseases',
            'Control infectious disease outbreaks only',
            'Standardize surgical care',
            'Develop hospital accreditation',
        ]),
        'answer'      => 'Manage non-communicable diseases',
        'explanation' => 'Package of Essential Noncommunicable Disease Interventions focuses on NCD prevention and management.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which program integrates mental health into PHC?",
        'choices'     => json_encode([
            'mhGAP (Mental Health Gap Action Programme)',
            'DOTS',
            'IMCI',
            'IDSR',
        ]),
        'answer'      => 'mhGAP (Mental Health Gap Action Programme)',
        'explanation' => 'mhGAP provides guidelines to manage priority mental health conditions in primary care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which demographic group qualifies for adolescent-friendly services?",
        'choices'     => json_encode([
            'Individuals aged 10–19',
            'Children under 5 only',
            'Adults over 65',
            'Working adults 20–40',
        ]),
        'answer'      => 'Individuals aged 10–19',
        'explanation' => 'Adolescent services are tailored for ages 10–19 to address specific developmental needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "What is the first step in PHC program development?",
        'choices'     => json_encode([
            'Needs assessment',
            'Implementation',
            'Monitoring and evaluation',
            'Resource mobilization',
        ]),
        'answer'      => 'Needs assessment',
        'explanation' => 'Assessing community needs establishes priorities and informs program design.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which financing method links payment to service performance?",
        'choices'     => json_encode([
            'Performance-based financing',
            'Capitation only',
            'Fee-for-service without quality checks',
            'Salary without targets',
        ]),
        'answer'      => 'Performance-based financing',
        'explanation' => 'Performance-based financing provides incentives for achieving health service targets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which tool engages community feedback on PHC services?",
        'choices'     => json_encode([
            'Community scorecards',
            'Facility financial reports only',
            'Top-down audits',
            'Clinical guidelines',
        ]),
        'answer'      => 'Community scorecards',
        'explanation' => 'Community scorecards allow residents to evaluate and discuss service quality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which step follows case confirmation in an outbreak response?",
        'choices'     => json_encode([
            'Contact tracing',
            'Post-event evaluation',
            'No action needed',
            'Facility closure',
        ]),
        'answer'      => 'Contact tracing',
        'explanation' => 'Tracing contacts limits disease spread by early detection and isolation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which strategy supports PHC workforce retention?",
        'choices'     => json_encode([
            'Regular supportive supervision',
            'Salary cuts',
            'Mandatory transfers',
            'No professional development',
        ]),
        'answer'      => 'Regular supportive supervision',
        'explanation' => 'Supportive supervision and mentorship improve job satisfaction and retention.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which technology maps facility catchment areas?",
        'choices'     => json_encode([
            'GIS mapping',
            'Manual tally sheets',
            'Oral reports only',
            'Phantom models',
        ]),
        'answer'      => 'GIS mapping',
        'explanation' => 'GIS tools visualize and analyze geographic service coverage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which WASH intervention most reduces diarrheal disease?",
        'choices'     => json_encode([
            'Handwashing with soap',
            'Improving air ventilation',
            'Providing free gloves',
            'Separating solid waste only',
        ]),
        'answer'      => 'Handwashing with soap',
        'explanation' => 'Soap removal of pathogens from hands is critical to prevent fecal-oral transmission.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which indicator reflects TB-HIV service integration?",
        'choices'     => json_encode([
            'Proportion of TB patients tested for HIV',
            'Number of separate TB clinics',
            'HIV prevalence rate only',
            'TB incidence rate alone',
        ]),
        'answer'      => 'Proportion of TB patients tested for HIV',
        'explanation' => 'Testing TB patients for HIV ensures co-management of both conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which mechanism ensures consistent immunization cold chain?",
        'choices'     => json_encode([
            'Vaccine vial monitors and temperature loggers',
            'Refrigerator sharing only',
            'Transporting at ambient temperature',
            'Single-use coolers without monitoring',
        ]),
        'answer'      => 'Vaccine vial monitors and temperature loggers',
        'explanation' => 'Monitoring tools maintain vaccine potency by detecting temperature excursions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 6,
        'question'    => "Which approach promotes healthy aging in PHC?",
        'choices'     => json_encode([
            'Home-based geriatric visits',
            'Only pediatric care',
            'Exclusive acute care',
            'Preventive care for newborns only',
        ]),
        'answer'      => 'Home-based geriatric visits',
        'explanation' => 'Home visits support medication management, screening, and social support for older adults.',
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

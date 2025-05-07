<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => "Which method is used for rapid immunization coverage assessment in PHC?",
        'choices'     => json_encode([
            'Cluster sampling survey',
            'Systematic household census',
            'Convenience sampling',
            'Random digit dialing',
        ]),
        'answer'      => 'Cluster sampling survey',
        'explanation' => 'The 30-cluster sampling survey is a rapid method to estimate immunization coverage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "What is the primary purpose of asset mapping in PHC community diagnosis?",
        'choices'     => json_encode([
            'Identify local health resources and capacities',
            'Document only disease incidence',
            'Measure facility income',
            'List available vaccines',
        ]),
        'answer'      => 'Identify local health resources and capacities',
        'explanation' => 'Asset mapping catalogs community strengths and available resources for planning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which digital tool supports patient self-management in PHC?",
        'choices'     => json_encode([
            'Mobile health (mHealth) apps',
            'Paper health diaries',
            'Radio broadcasts only',
            'Postal reminders',
        ]),
        'answer'      => 'Mobile health (mHealth) apps',
        'explanation' => 'mHealth apps enable patients to monitor conditions and adhere to treatment plans.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which strategy fosters intersectoral action for health in PHC?",
        'choices'     => json_encode([
            'Health in All Policies',
            'Vertical programming',
            'Hospital-based management',
            'Specialist-only interventions',
        ]),
        'answer'      => 'Health in All Policies',
        'explanation' => 'Health in All Policies integrates health considerations across sectors to address determinants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which indicator tracks timeliness of PHC reporting?",
        'choices'     => json_encode([
            'Proportion of reports submitted on schedule',
            'Total number of reports',
            'Number of staff trained',
            'Patient satisfaction score',
        ]),
        'answer'      => 'Proportion of reports submitted on schedule',
        'explanation' => 'Timeliness is measured by the percentage of reports delivered by the deadline.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "What is the role of standard treatment guidelines in PHC?",
        'choices'     => json_encode([
            'Ensure evidence-based clinical care',
            'Limit services to specialists',
            'Increase medication costs',
            'Replace clinical judgment completely',
        ]),
        'answer'      => 'Ensure evidence-based clinical care',
        'explanation' => 'Guidelines promote consistent, high-quality care based on best evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which planning level develops district health operational plans?",
        'choices'     => json_encode([
            'District health management teams',
            'National ministry only',
            'Community volunteers only',
            'International donors',
        ]),
        'answer'      => 'District health management teams',
        'explanation' => 'District teams tailor operational plans to local needs and resources.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "What is a key component of referral feedback loops?",
        'choices'     => json_encode([
            'Information return from higher-level facilities',
            'One-way referral only',
            'Patient self-referral without records',
            'No follow-up required',
        ]),
        'answer'      => 'Information return from higher-level facilities',
        'explanation' => 'Feedback ensures continuity and quality of care between levels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which evaluation focuses on implementation processes of a PHC program?",
        'choices'     => json_encode([
            'Process evaluation',
            'Outcome evaluation',
            'Impact evaluation',
            'Cost-effectiveness analysis',
        ]),
        'answer'      => 'Process evaluation',
        'explanation' => 'Process evaluation examines how program activities are delivered.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which health education technique confirms patient understanding?",
        'choices'     => json_encode([
            'Teach-back method',
            'Lecture only',
            'Group presentation without interaction',
            'Silent reading',
        ]),
        'answer'      => 'Teach-back method',
        'explanation' => 'Teach-back asks patients to repeat information to confirm comprehension.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which approach enhances equity monitoring in PHC?",
        'choices'     => json_encode([
            'Disaggregating data by socioeconomic status',
            'Reporting only overall averages',
            'Ignoring vulnerable groups',
            'Focusing on urban areas only',
        ]),
        'answer'      => 'Disaggregating data by socioeconomic status',
        'explanation' => 'Disaggregated data reveal inequities in service access and outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which process ensures continuous quality improvement cycles?",
        'choices'     => json_encode([
            'Plan-Do-Check-Act (PDCA)',
            'Single event audit',
            'Annual external review only',
            'Random unplanned changes',
        ]),
        'answer'      => 'Plan-Do-Check-Act (PDCA)',
        'explanation' => 'PDCA provides iterative steps for sustained program improvement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which determinant is addressed by improving school sanitation?",
        'choices'     => json_encode([
            'Environmental health',
            'Genetic predisposition',
            'Medical treatment only',
            'Individual behavior alone',
        ]),
        'answer'      => 'Environmental health',
        'explanation' => 'Sanitation improvements target environmental determinants of health.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "What is an essential package of PHC services?",
        'choices'     => json_encode([
            'Basic preventive, promotive, curative, and rehabilitative services',
            'Only tertiary hospital surgeries',
            'Exclusive specialist consultations',
            'Standalone vertical programs',
        ]),
        'answer'      => 'Basic preventive, promotive, curative, and rehabilitative services',
        'explanation' => 'Essential packages cover the full spectrum of PHC care for communities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which factor most influences PHC service utilization?",
        'choices'     => json_encode([
            'Geographic accessibility',
            'Hospital specialization',
            'Research funding',
            'Medical tourism',
        ]),
        'answer'      => 'Geographic accessibility',
        'explanation' => 'Proximity and transport influence whether communities can access services.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which service is prioritized under integrated management of adolescent health?",
        'choices'     => json_encode([
            'Sexual and reproductive health education',
            'Geriatric care only',
            'Neonatal resuscitation',
            'End-of-life counseling',
        ]),
        'answer'      => 'Sexual and reproductive health education',
        'explanation' => 'IMAH includes counseling and services tailored to adolescents’ needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which schedule ensures postnatal care visits?",
        'choices'     => json_encode([
            'Within 24 hours, and days 3 and 7',
            'Only at 6 weeks',
            'Monthly in first year',
            'Annually thereafter',
        ]),
        'answer'      => 'Within 24 hours, and days 3 and 7',
        'explanation' => 'Early postnatal visits detect complications in mother and newborn promptly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which ratio measures financial protection in PHC?",
        'choices'     => json_encode([
            'Catastrophic health expenditure incidence',
            'Staff-to-population ratio',
            'Bed occupancy rate',
            'Vaccine coverage rate',
        ]),
        'answer'      => 'Catastrophic health expenditure incidence',
        'explanation' => 'This measures households spending a high share of income on health, indicating poor financial protection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which approach reduces stigma in mental health care at PHC?",
        'choices'     => json_encode([
            'Integrating services into general clinics',
            'Separate standalone psychiatric units',
            'No community engagement',
            'Medication-only approach',
        ]),
        'answer'      => 'Integrating services into general clinics',
        'explanation' => 'Integration normalizes mental health care and improves access while reducing stigma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 9,
        'question'    => "Which tool evaluates readiness of PHC facilities to manage NCDs?",
        'choices'     => json_encode([
            'WHO PEN readiness assessment',
            'DOTS performance chart',
            'IMCI classification chart',
            'IDSR outbreak form',
        ]),
        'answer'      => 'WHO PEN readiness assessment',
        'explanation' => 'PEN readiness tools assess capacity of PHC to prevent and manage NCDs.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

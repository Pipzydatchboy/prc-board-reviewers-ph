<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart6Seeder extends Seeder
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
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What is the primary function of a professional code of conduct?',
        'choices'      => json_encode([
            'Guide ethical and professional behavior',
            'Set salary standards',
            'Determine staffing ratios',
            'Prescribe clinical protocols',
        ]),
        'answer'       => 'Guide ethical and professional behavior',
        'explanation'  => 'Codes of conduct establish standards for integrity, responsibility, and accountability.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //2
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which concept best defines professional identity?',
        'choices'      => json_encode([
            'Internalization of professional values and self-concept',
            'Job title only',
            'Years of experience',
            'Number of certifications',
        ]),
        'answer'       => 'Internalization of professional values and self-concept',
        'explanation'  => 'Professional identity emerges from aligning personal and professional roles and values.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //3
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which principle ensures clear communication in academic writing?',
        'choices'      => json_encode([
            'Use of plain language and concise structure',
            'Inclusion of as much jargon as possible',
            'Lengthy paragraphs without summaries',
            'Passive voice exclusively',
        ]),
        'answer'       => 'Use of plain language and concise structure',
        'explanation'  => 'Plain language promotes readability and comprehension in scholarly manuscripts.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //4
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What is the key benefit of scenario-based simulation in training?',
        'choices'      => json_encode([
            'Enhances decision-making in realistic contexts',
            'Reduces need for clinical placements',
            'Guarantees zero errors in practice',
            'Limits to theoretical knowledge',
        ]),
        'answer'       => 'Enhances decision-making in realistic contexts',
        'explanation'  => 'Simulations provide safe environments to practice critical skills and judgment.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //5
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What role do competency frameworks serve in professional development?',
        'choices'      => json_encode([
            'Define expected skills and behaviors for each role',
            'Prescribe personal hobbies',
            'Set financial incentives only',
            'Replace performance appraisals',
        ]),
        'answer'       => 'Define expected skills and behaviors for each role',
        'explanation'  => 'Frameworks outline the competencies required for safe and effective practice.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //6
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which principle underpins respectful maternity care?',
        'choices'      => json_encode([
            'Upholding dignity, privacy, and informed choice',
            'Prioritizing institutional convenience',
            'Limiting communication with patients',
            'Standardized care without consent',
        ]),
        'answer'       => 'Upholding dignity, privacy, and informed choice',
        'explanation'  => 'Respectful care ensures women’s rights and preferences are honored throughout childbirth.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //7
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which metric tracks CPD compliance for licensure?',
        'choices'      => json_encode([
            'Number of accredited CPD units earned',
            'Hours spent at work',
            'Number of patients seen',
            'Workplace tenure',
        ]),
        'answer'       => 'Number of accredited CPD units earned',
        'explanation'  => 'Licensing bodies require documentation of CPD units to maintain professional registration.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //8
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What distinguishes mentoring from coaching?',
        'choices'      => json_encode([
            'Mentoring focuses on long-term career development',
            'Coaching sets multi-year goals only',
            'Mentoring is always informal',
            'Coaching is unstructured',
        ]),
        'answer'       => 'Mentoring focuses on long-term career development',
        'explanation'  => 'Mentors provide guidance over time, whereas coaches focus on specific skills or tasks.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //9
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What is peer coaching?',
        'choices'      => json_encode([
            'Reciprocal support among colleagues to improve skills',
            'Top-down evaluation by managers',
            'External consultants only',
            'Online courses without interaction',
        ]),
        'answer'       => 'Reciprocal support among colleagues to improve skills',
        'explanation'  => 'Peer coaching involves mutual feedback and collaborative learning between equals.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //10
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which model distinguishes reflection-in-action from reflection-on-action?',
        'choices'      => json_encode([
            'Schön’s reflective practitioner model',
            'Gibbs’ Reflective Cycle',
            'Kolb’s experiential learning cycle',
            'Kirkpatrick’s evaluation model',
        ]),
        'answer'       => 'Schön’s reflective practitioner model',
        'explanation'  => 'Schön introduced reflection-in-action during practice and reflection-on-action afterward.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //11
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What is the DMAIC cycle in quality improvement?',
        'choices'      => json_encode([
            'Define, Measure, Analyze, Improve, Control',
            'Design, Model, Act, Inspect, Correct',
            'Discuss, Monitor, Apply, Iterate, Check',
            'Develop, Manage, Assess, Implement, Complete',
        ]),
        'answer'       => 'Define, Measure, Analyze, Improve, Control',
        'explanation'  => 'DMAIC is a Six Sigma methodology for structured process enhancement.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //12
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which element is essential for effective knowledge management?',
        'choices'      => json_encode([
            'Systematic creation, sharing, and use of knowledge',
            'Storing documents without access control',
            'Exclusive reliance on memory',
            'Random information hoarding',
        ]),
        'answer'       => 'Systematic creation, sharing, and use of knowledge',
        'explanation'  => 'Knowledge management ensures organizational learning and retention of expertise.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //13
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which strategy builds resilience in midwifery practice?',
        'choices'      => json_encode([
            'Developing adaptive coping and support networks',
            'Ignoring workplace stressors',
            'Working in isolation',
            'Avoiding professional development',
        ]),
        'answer'       => 'Developing adaptive coping and support networks',
        'explanation'  => 'Resilience emerges from effective stress management and social support.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //14
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which legal framework regulates midwifery practice in the Philippines?',
        'choices'      => json_encode([
            'Republic Act No. 7392 (Midwives Act)',
            'Philippine Labor Code',
            'Health Facility Licensing Act',
            'Public Service Act',
        ]),
        'answer'       => 'Republic Act No. 7392 (Midwives Act)',
        'explanation'  => 'RA 7392 establishes standards and regulation for midwifery education and practice.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //15
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What defines the scope of practice?',
        'choices'      => json_encode([
            'Range of activities a professional is authorized to perform',
            'Hospital facility map',
            'Job title only',
            'Salary grade',
        ]),
        'answer'       => 'Range of activities a professional is authorized to perform',
        'explanation'  => 'Scope ensures practitioners work within legal and competence boundaries.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //16
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which concept comprises the Triple Aim in healthcare?',
        'choices'      => json_encode([
            'Improve patient experience, health of populations, and reduce per capita cost',
            'Increase patient volume, profits, and service lines',
            'Focus solely on cost reduction',
            'Emphasize inpatient services only',
        ]),
        'answer'       => 'Improve patient experience, health of populations, and reduce per capita cost',
        'explanation'  => 'The Triple Aim framework guides strategies for high-value healthcare delivery.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //17
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which tool supports competence validation through direct observation?',
        'choices'      => json_encode([
            'Objective Structured Clinical Examination (OSCE)',
            'Written multiple-choice test',
            'Self-report questionnaire',
            'Informal chat',
        ]),
        'answer'       => 'Objective Structured Clinical Examination (OSCE)',
        'explanation'  => 'OSCE stations assess clinical skills in a standardized, observed format.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //18
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'What does the term “timezone learning” imply in CPD?',
        'choices'      => json_encode([
            'Accessing asynchronous online modules across regions',
            'Traveling to conferences',
            'Learning only in local time',
            'Synchronous classroom sessions only',
        ]),
        'answer'       => 'Accessing asynchronous online modules across regions',
        'explanation'  => 'Timezone learning enables flexible access to digital CPD content regardless of location.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //19
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which principle underlies effective facilitation of adult learners?',
        'choices'      => json_encode([
            'Creating participatory and problem-centered activities',
            'Lecturing without interaction',
            'Focusing solely on theory',
            'Avoiding feedback',
        ]),
        'answer'       => 'Creating participatory and problem-centered activities',
        'explanation'  => 'Adult learning thrives when learners engage actively and see relevance to real problems.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //20
    [
        'subject_id'   => 31,
        'part'         => 6,
        'question'     => 'Which metric evaluates mentorship program success?',
        'choices'      => json_encode([
            'Mentee competency improvement and retention rates',
            'Number of mentorship pairs only',
            'Duration of program only',
            'Frequency of meetings only',
        ]),
        'answer'       => 'Mentee competency improvement and retention rates',
        'explanation'  => 'Monitoring skill gains and retention reflects the impact of mentoring relationships.',
        'created_at'   => $now,
        'updated_at'   => $now,
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

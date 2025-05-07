<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart10Seeder extends Seeder
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
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'What is the main purpose of succession planning in midwifery teams?',
        'choices'     => json_encode([
            'Ensure continuity of leadership',
            'Increase short-term profits',
            'Limit staff turnover',
            'Maintain status quo',
        ]),
        'answer'      => 'Ensure continuity of leadership',
        'explanation' => 'Succession planning prepares emerging leaders to fill key roles and ensures organizational stability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which strategy improves cultural competence among midwives?',
        'choices'     => json_encode([
            'Participating in cultural awareness workshops',
            'Uniform treatment for all patients',
            'Adhering strictly to one culture',
            'Avoiding discussions about culture',
        ]),
        'answer'      => 'Participating in cultural awareness workshops',
        'explanation' => 'Workshops increase understanding and skills to deliver respectful, culturally sensitive care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which method best evaluates leadership development outcomes?',
        'choices'     => json_encode([
            '360-degree feedback',
            'Counting certifications',
            'Monitoring attendance only',
            'Supervisor’s impression',
        ]),
        'answer'      => '360-degree feedback',
        'explanation' => 'Feedback from multiple sources provides comprehensive insights into leadership behaviors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'What is the role of professional advocacy in midwifery?',
        'choices'     => json_encode([
            'Influence policies for better healthcare',
            'Market personal services',
            'Ignore legislative processes',
            'Focus solely on clinical duties',
        ]),
        'answer'      => 'Influence policies for better healthcare',
        'explanation' => 'Advocacy aims to shape regulations and resources to improve maternal and neonatal outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which tool helps visualize career progression milestones?',
        'choices'     => json_encode([
            'Career roadmap diagram',
            'Spreadsheet of dates only',
            'Random list of goals',
            'Social media posts',
        ]),
        'answer'      => 'Career roadmap diagram',
        'explanation' => 'Roadmaps map key skills and achievements against timelines, clarifying progression steps.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which approach supports continuous quality improvement?',
        'choices'     => json_encode([
            'Regular Plan-Do-Study-Act cycles',
            'One-time audits',
            'Ignoring feedback',
            'Annual reports only',
        ]),
        'answer'      => 'Regular Plan-Do-Study-Act cycles',
        'explanation' => 'PDSA provides structured, iterative testing of changes to enhance care processes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'What is the benefit of reflective writing over time?',
        'choices'     => json_encode([
            'Track personal growth and insight',
            'Meet document quotas',
            'Avoid self-evaluation',
            'Record only clinical data',
        ]),
        'answer'      => 'Track personal growth and insight',
        'explanation' => 'Regular reflection highlights learning milestones and deepens self-awareness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which platform supports collaborative CPD planning?',
        'choices'     => json_encode([
            'Shared online planning tools',
            'Local print flyers only',
            'Paper diaries',
            'Standalone spreadsheets',
        ]),
        'answer'      => 'Shared online planning tools',
        'explanation' => 'Online tools enable teams to coordinate CPD activities and track progress collectively.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'What defines ethical leadership in midwifery?',
        'choices'     => json_encode([
            'Modeling integrity and respect',
            'Showing power over juniors',
            'Enforcing rules without explanation',
            'Prioritizing institution over patient',
        ]),
        'answer'      => 'Modeling integrity and respect',
        'explanation' => 'Ethical leaders exemplify values that guide others toward quality, patient-centered care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which metric assesses the impact of mentoring programs?',
        'choices'     => json_encode([
            'Mentee competency progression',
            'Number of sessions held',
            'Mentor’s seniority',
            'Meeting frequency only',
        ]),
        'answer'      => 'Mentee competency progression',
        'explanation' => 'Tracking skill development shows how mentoring contributes to professional growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'What is the primary aim of career self-assessment?',
        'choices'     => json_encode([
            'Identify strengths and development areas',
            'Compare with colleagues',
            'Critique others',
            'List job titles held',
        ]),
        'answer'      => 'Identify strengths and development areas',
        'explanation' => 'Self-assessment highlights personal competencies and gaps for targeted growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which digital tool enhances professional collaboration?',
        'choices'     => json_encode([
            'Secure messaging platforms',
            'Public chat rooms',
            'Social media groups',
            'Email chains only',
        ]),
        'answer'      => 'Secure messaging platforms',
        'explanation' => 'Secure platforms maintain confidentiality while facilitating team communication.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'What is the concept of lifelong learning?',
        'choices'     => json_encode([
            'Ongoing skill and knowledge development throughout career',
            'Training only during university',
            'Learning ends after certification',
            'Only attending conferences occasionally',
        ]),
        'answer'      => 'Ongoing skill and knowledge development throughout career',
        'explanation' => 'Lifelong learning ensures that midwives adapt to evolving evidence and practices.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which activity best demonstrates leadership by example?',
        'choices'     => json_encode([
            'Consistently following best practices',
            'Delegating all tasks',
            'Ignoring protocols',
            'Working alone exclusively',
        ]),
        'answer'      => 'Consistently following best practices',
        'explanation' => 'Leaders who model desired behaviors inspire others to uphold standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which indicator measures interprofessional collaboration success?',
        'choices'     => json_encode([
            'Joint development of care plans',
            'Individual performance reviews only',
            'Patient wait times only',
            'Number of meetings held',
        ]),
        'answer'      => 'Joint development of care plans',
        'explanation' => 'Collaborative care planning indicates effective teamwork across disciplines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which strategy increases CPD accessibility for rural midwives?',
        'choices'     => json_encode([
            'Mobile learning units',
            'Centralized urban workshops',
            'Printed manuals only',
            'Online sessions with poor connectivity',
        ]),
        'answer'      => 'Mobile learning units',
        'explanation' => 'Bringing training to remote areas overcomes geographical barriers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'What process evaluates the return on CPD investment?',
        'choices'     => json_encode([
            'Cost-benefit analysis',
            'Training time log',
            'Attendance record only',
            'Satisfaction survey only',
        ]),
        'answer'      => 'Cost-benefit analysis',
        'explanation' => 'Analyzing costs against outcomes determines CPD value and informs resource allocation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which principle underlies adult motivators in CPD?',
        'choices'     => json_encode([
            'Relevance to practice',
            'Mandatory attendance',
            'Punitive measures',
            'Random content',
        ]),
        'answer'      => 'Relevance to practice',
        'explanation' => 'Adults engage when learning directly applies to their professional roles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which approach ensures feedback is actionable?',
        'choices'     => json_encode([
            'SMART feedback',
            'General praise only',
            'Vague comments',
            'No follow-up',
        ]),
        'answer'      => 'SMART feedback',
        'explanation' => 'Specific, Measurable, Achievable, Relevant, Time-bound feedback guides improvement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 31,
        'part'        => 10,
        'question'    => 'Which resource supports evidence-based midwifery decision-making?',
        'choices'     => json_encode([
            'WHO guidelines',
            'Social media posts',
            'Personal anecdotes only',
            'Unverified blogs',
        ]),
        'answer'      => 'WHO guidelines',
        'explanation' => 'WHO guidelines provide rigorously evaluated recommendations for clinical practice.',
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

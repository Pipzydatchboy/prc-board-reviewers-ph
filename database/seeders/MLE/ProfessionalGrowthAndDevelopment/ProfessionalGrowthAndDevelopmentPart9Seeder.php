<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Which competency supports effective interprofessional teamwork?',
        'choices'     => json_encode([
            'Communication and collaboration skills',
            'Solo decision-making',
            'Task isolation',
            'Hierarchical compliance',
        ]),
        'answer'      => 'Communication and collaboration skills',
        'explanation' => 'Effective teamwork relies on clear communication and joint problem-solving.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'What technique helps manage professional stress?',
        'choices'     => json_encode([
            'Mindfulness and relaxation exercises',
            'Avoiding breaks',
            'Overcommitment',
            'Emotional suppression',
        ]),
        'answer'      => 'Mindfulness and relaxation exercises',
        'explanation' => 'Practicing mindfulness reduces anxiety and improves coping under stress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which framework assists setting professional goals?',
        'choices'     => json_encode([
            'SMART framework',
            'Fixed framework',
            'Static framework',
            'Reactive framework',
        ]),
        'answer'      => 'SMART framework',
        'explanation' => 'SMART goals are Specific, Measurable, Achievable, Relevant, and Time-bound.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'What is the role of reflective supervision?',
        'choices'     => json_encode([
            'Support professional growth through feedback and reflection',
            'Audit financial records',
            'Enforce disciplinary measures',
            'Manage staffing rotas',
        ]),
        'answer'      => 'Support professional growth through feedback and reflection',
        'explanation' => 'Reflective supervision fosters self-awareness and skill development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which metric assesses job satisfaction?',
        'choices'     => json_encode([
            'Employee satisfaction surveys',
            'Patient admission rates',
            'Bed occupancy',
            'Monthly revenue',
        ]),
        'answer'      => 'Employee satisfaction surveys',
        'explanation' => 'Surveys gauge staff morale and satisfaction with work conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'What strategy reduces professional burnout?',
        'choices'     => json_encode([
            'Regular self-care and peer support',
            'Ignoring workload demands',
            'Skipping vacations',
            'Overworking without limits',
        ]),
        'answer'      => 'Regular self-care and peer support',
        'explanation' => 'Balancing work with self-care and support mitigates burnout risks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which resource helps midwives stay current with evidence-based practice?',
        'choices'     => json_encode([
            'Professional journals and guidelines',
            'Unverified blogs',
            'Social media rumors',
            'Anecdotal stories',
        ]),
        'answer'      => 'Professional journals and guidelines',
        'explanation' => 'Peer-reviewed sources provide validated, up-to-date clinical evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'What is effective in managing time pressures?',
        'choices'     => json_encode([
            'Prioritization and delegation',
            'Ignoring deadlines',
            'Multitasking indiscriminately',
            'Taking no breaks',
        ]),
        'answer'      => 'Prioritization and delegation',
        'explanation' => 'Focusing on key tasks and sharing workload enhances efficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which form of CPD is considered informal learning?',
        'choices'     => json_encode([
            'Case discussions with colleagues',
            'Accredited workshops',
            'Formal training courses',
            'Mandatory seminars',
        ]),
        'answer'      => 'Case discussions with colleagues',
        'explanation' => 'Informal CPD includes peer discussions and on-the-job learning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'What characterizes transformative learning?',
        'choices'     => json_encode([
            'Critical reflection leading to perspective shifts',
            'Repeating tasks without change',
            'Memorization of facts',
            'Passive information reception',
        ]),
        'answer'      => 'Critical reflection leading to perspective shifts',
        'explanation' => 'Transformative learning involves deep questioning of assumptions and beliefs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which tool aids in quantifying CPD impact on practice?',
        'choices'     => json_encode([
            'Pre- and post-intervention audits',
            'Attendance logs only',
            'Certificate display',
            'Self-rated satisfaction only',
        ]),
        'answer'      => 'Pre- and post-intervention audits',
        'explanation' => 'Audits measure changes in practice before and after training.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which practice promotes inclusive professional development opportunities?',
        'choices'     => json_encode([
            'Accessible programs for diverse learning needs',
            'One-size-fits-all sessions',
            'Exclusive invitation-only events',
            'Language-restricted materials',
        ]),
        'answer'      => 'Accessible programs for diverse learning needs',
        'explanation' => 'Inclusive design ensures equitable access and accommodates varied learners.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which strategy fosters accountability in teams?',
        'choices'     => json_encode([
            'Clear role definitions and mutual feedback',
            'Ambiguous responsibilities',
            'Unilateral decision-making',
            'Avoiding feedback',
        ]),
        'answer'      => 'Clear role definitions and mutual feedback',
        'explanation' => 'Accountability emerges when roles are defined and peers provide constructive feedback.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which model guides stress resilience at work?',
        'choices'     => json_encode([
            'Resilience framework of risk, protective factors, and adaptation',
            'Burnout only model',
            'Stress avoidance model',
            'Rigid coping model',
        ]),
        'answer'      => 'Resilience framework of risk, protective factors, and adaptation',
        'explanation' => 'This model addresses how individuals adapt using protective resources against stressors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'What is a key benefit of peer-led workshops?',
        'choices'     => json_encode([
            'Shared experiential learning and relatable mentorship',
            'Formal hierarchy enforcement',
            'One-way dissemination',
            'Top-down instruction only',
        ]),
        'answer'      => 'Shared experiential learning and relatable mentorship',
        'explanation' => 'Peer-led sessions leverage shared experiences to enhance relevance and engagement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which process evaluates organizational learning needs?',
        'choices'     => json_encode([
            'Organizational learning needs assessment',
            'Financial audit only',
            'Facility inspection only',
            'Patient feedback only',
        ]),
        'answer'      => 'Organizational learning needs assessment',
        'explanation' => 'Assessments identify gaps in collective skills and knowledge.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which method improves retention of CPD content?',
        'choices'     => json_encode([
            'Spaced repetition of key concepts',
            'One-time marathon sessions',
            'Random review',
            'Skipping revisions',
        ]),
        'answer'      => 'Spaced repetition of key concepts',
        'explanation' => 'Revisiting information over time enhances long-term memory retention.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which approach ensures ethical CPD research?',
        'choices'     => json_encode([
            'Adherence to research ethics and informed consent',
            'Skipping ethics review',
            'Using data without permission',
            'Focusing only on outcomes',
        ]),
        'answer'      => 'Adherence to research ethics and informed consent',
        'explanation' => 'Ethical CPD research protects participants and ensures validity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'What is the value of benchmarking best practices?',
        'choices'     => json_encode([
            'Identify and adopt proven strategies for improvement',
            'Ignore external standards',
            'Focus inward only',
            'Replicate every practice without review',
        ]),
        'answer'      => 'Identify and adopt proven strategies for improvement',
        'explanation' => 'Benchmarking compares performance to leading standards to guide enhancements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 31,
        'part'        => 9,
        'question'    => 'Which indicator reflects leadership development outcomes?',
        'choices'     => json_encode([
            'Increased delegation effectiveness and team satisfaction',
            'Higher personal workload',
            'Reduction in training hours',
            'Decrease in meetings',
        ]),
        'answer'      => 'Increased delegation effectiveness and team satisfaction',
        'explanation' => 'Effective leaders delegate appropriately and foster positive team morale.',
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

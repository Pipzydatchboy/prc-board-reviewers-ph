<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart2Seeder extends Seeder
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
        'part'         => 2,
        'question'     => 'What is the purpose of a Continuing Professional Development needs assessment?',
        'choices'      => json_encode([
            'Identify individual learning gaps',
            'Evaluate facility infrastructure',
            'Determine salary increments',
            'Schedule annual leave',
        ]),
        'answer'       => 'Identify individual learning gaps',
        'explanation'  => 'A needs assessment pinpoints areas where professionals require further development.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //2
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which method supports self-evaluation of learning outcomes?',
        'choices'      => json_encode([
            'Reflective journaling',
            'Peer grading only',
            'Supervisor ranking only',
            'Random sampling',
        ]),
        'answer'       => 'Reflective journaling',
        'explanation'  => 'Journaling encourages critical reflection on actions and outcomes.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //3
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'What is the value of 360-degree feedback in professional growth?',
        'choices'      => json_encode([
            'Comprehensive performance insights',
            'Top-down evaluation only',
            'Patient satisfaction data only',
            'Financial metrics only',
        ]),
        'answer'       => 'Comprehensive performance insights',
        'explanation'  => '360-degree feedback gathers perceptions from multiple sources to guide improvement.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //4
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which leadership style promotes team engagement?',
        'choices'      => json_encode([
            'Transformational leadership',
            'Autocratic leadership',
            'Transactional leadership',
            'Laissez-faire leadership',
        ]),
        'answer'       => 'Transformational leadership',
        'explanation'  => 'Transformational leaders inspire and motivate team members towards shared goals.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //5
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which conflict resolution technique encourages open dialogue?',
        'choices'      => json_encode([
            'Collaborative problem-solving',
            'Avoidance',
            'Competition',
            'Accommodation',
        ]),
        'answer'       => 'Collaborative problem-solving',
        'explanation'  => 'Collaboration focuses on addressing concerns and finding mutually acceptable solutions.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //6
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which stress management strategy supports midwives?',
        'choices'      => json_encode([
            'Mindfulness meditation',
            'Ignoring stressors',
            'Overworking without rest',
            'Substance use',
        ]),
        'answer'       => 'Mindfulness meditation',
        'explanation'  => 'Mindfulness helps reduce anxiety and improve focus in high-stress settings.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //7
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which document outlines competency standards for midwives?',
        'choices'      => json_encode([
            'ICM Global Standards for Midwifery Education',
            'Local facility brochure',
            'Patient consent form',
            'Meeting agenda',
        ]),
        'answer'       => 'ICM Global Standards for Midwifery Education',
        'explanation'  => 'ICM standards define competencies required for safe and effective midwifery practice.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //8
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which principle guides professional accountability?',
        'choices'      => json_encode([
            'Transparent record-keeping and ethical practice',
            'Withholding errors',
            'Ignoring regulations',
            'Blaming others',
        ]),
        'answer'       => 'Transparent record-keeping and ethical practice',
        'explanation'  => 'Accountability requires honesty and adherence to professional codes.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //9
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which strategy builds resilience in healthcare professionals?',
        'choices'      => json_encode([
            'Regular peer support groups',
            'Working in isolation',
            'Ignoring work-life balance',
            'Avoiding teamwork',
        ]),
        'answer'       => 'Regular peer support groups',
        'explanation'  => 'Peer support fosters coping skills and reduces burnout.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //10
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which tool tracks performance appraisal outcomes?',
        'choices'      => json_encode([
            'Electronic HR dashboard',
            'Paper file folders only',
            'Email threads',
            'Text messages',
        ]),
        'answer'       => 'Electronic HR dashboard',
        'explanation'  => 'Dashboards centralize appraisal data for analysis and feedback.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //11
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which methodology assesses patient care quality formally?',
        'choices'      => json_encode([
            'Clinical audit cycles',
            'Case storytelling only',
            'Random anecdotes',
            'Unofficial complaints',
        ]),
        'answer'       => 'Clinical audit cycles',
        'explanation'  => 'Audits systematically review care against standards for improvement.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //12
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'What is the role of accreditation in continuing education?',
        'choices'      => json_encode([
            'Ensure program quality and recognition',
            'Limit access to education',
            'Increase costs only',
            'Provide unverified credits',
        ]),
        'answer'       => 'Ensure program quality and recognition',
        'explanation'  => 'Accreditation validates that education meets professional standards.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //13
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which regulatory body governs midwifery practice in the Philippines?',
        'choices'      => json_encode([
            'Professional Regulation Commission (PRC)',
            'Department of Health only',
            'Senate of the Philippines',
            'Local government units only',
        ]),
        'answer'       => 'Professional Regulation Commission (PRC)',
        'explanation'  => 'PRC regulates licensure and practice standards for midwives in the Philippines.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //14
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which ethical framework guides midwifery practice globally?',
        'choices'      => json_encode([
            'ICM Code of Ethics for Midwives',
            'Geneva Convention',
            'Hippocratic Oath only',
            'UN Declaration on Rights',
        ]),
        'answer'       => 'ICM Code of Ethics for Midwives',
        'explanation'  => 'The ICM Code outlines ethical responsibilities and rights of midwives worldwide.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //15
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which environment supports experiential learning in midwifery?',
        'choices'      => json_encode([
            'Simulation labs',
            'Lecture halls only',
            'Field trips only',
            'Online quizzes only',
        ]),
        'answer'       => 'Simulation labs',
        'explanation'  => 'Simulation provides hands-on practice in a safe setting before real clinical exposure.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //16
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which time management technique improves productivity?',
        'choices'      => json_encode([
            'Pomodoro Technique',
            'Random task switching',
            'Procrastination',
            'Avoiding breaks',
        ]),
        'answer'       => 'Pomodoro Technique',
        'explanation'  => 'The Pomodoro Technique enhances focus by working in short, timed intervals with breaks.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //17
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'What is the benefit of writing reflective journals?',
        'choices'      => json_encode([
            'Deepen self-awareness and learning',
            'Increase clerical work only',
            'Discourage critical thinking',
            'Replace practice entirely',
        ]),
        'answer'       => 'Deepen self-awareness and learning',
        'explanation'  => 'Reflection through journaling fosters insight into personal and professional experiences.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //18
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which networking activity enhances professional growth?',
        'choices'      => json_encode([
            'Attending professional conferences and forums',
            'Working in isolation',
            'Avoiding professional interactions',
            'Limiting to social media only',
        ]),
        'answer'       => 'Attending professional conferences and forums',
        'explanation'  => 'Conferences provide exposure to new ideas and opportunities to connect with peers.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //19
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which measure evaluates the impact of CE activities?',
        'choices'      => json_encode([
            'Pre- and post-test scores',
            'Attendance rate only',
            'Cost of course only',
            'Venue size',
        ]),
        'answer'       => 'Pre- and post-test scores',
        'explanation'  => 'Comparing test scores measures knowledge gain from educational activities.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //20
    [
        'subject_id'   => 31,
        'part'         => 2,
        'question'     => 'Which tool facilitates collaborative knowledge sharing online?',
        'choices'      => json_encode([
            'Professional online forums',
            'Personal chat applications',
            'Gaming platforms',
            'News websites',
        ]),
        'answer'       => 'Professional online forums',
        'explanation'  => 'Forums dedicated to midwifery allow discussion of best practices and case studies.',
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

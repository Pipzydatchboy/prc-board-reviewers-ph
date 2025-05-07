<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'What is the purpose of a SWOT analysis in career planning?',
        'choices'     => json_encode([
            'Identify strengths, weaknesses, opportunities, and threats',
            'Set financial goals only',
            'Plan daily tasks',
            'Measure technical skills only',
        ]),
        'answer'      => 'Identify strengths, weaknesses, opportunities, and threats',
        'explanation' => 'SWOT analysis helps professionals assess internal and external factors affecting their career path.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which component best describes the GROW model in coaching?',
        'choices'     => json_encode([
            'Goal, Reality, Options, Will',
            'Gather, Review, Organize, Work',
            'Give, Receive, Observe, Win',
            'Generate, Reflect, Offer, Win',
        ]),
        'answer'      => 'Goal, Reality, Options, Will',
        'explanation' => 'The GROW model structures coaching conversations to set objectives and plan actions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'What defines self-directed learning?',
        'choices'     => json_encode([
            'Learner takes initiative to identify and pursue learning goals',
            'Learning only through classroom lectures',
            'Relying solely on instructors for content',
            'Scheduled training without follow-up',
        ]),
        'answer'      => 'Learner takes initiative to identify and pursue learning goals',
        'explanation' => 'Self-directed learning involves autonomy in planning, executing, and evaluating one’s own learning activities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'What is reverse mentoring?',
        'choices'     => json_encode([
            'Junior staff coach senior colleagues in new technologies',
            'Senior staff instruct juniors on basic tasks',
            'Mentor and mentee are at same level',
            'Peer mentoring only among equals',
        ]),
        'answer'      => 'Junior staff coach senior colleagues in new technologies',
        'explanation' => 'Reverse mentoring leverages younger employees’ expertise to train senior staff in emerging skills.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'How many CPD units are required by the PRC for midwives every three-year licensure cycle?',
        'choices'     => json_encode([
            '45 units',
            '20 units',
            '60 units',
            '30 units',
        ]),
        'answer'      => '45 units',
        'explanation' => 'The PRC mandates 45 CPD units every three years to maintain professional competence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which competence is essential for telehealth practice in midwifery?',
        'choices'     => json_encode([
            'Proficient use of digital communication tools',
            'Ability to conduct home visits only',
            'Exclusive reliance on in-person assessments',
            'Avoiding online record keeping',
        ]),
        'answer'      => 'Proficient use of digital communication tools',
        'explanation' => 'Telehealth requires digital literacy to effectively assess and counsel patients remotely.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'What defines professional boundaries in midwifery?',
        'choices'     => json_encode([
            'Maintaining appropriate nurse-client relationships',
            'Becoming friends with every patient',
            'Sharing personal contact information freely',
            'Accepting all patient requests without limits',
        ]),
        'answer'      => 'Maintaining appropriate nurse-client relationships',
        'explanation' => 'Professional boundaries ensure ethical and safe relationships between clinicians and clients.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which guideline applies to social media use by healthcare professionals?',
        'choices'     => json_encode([
            'Post only de-identified, factual content',
            'Share patient photos with names',
            'Discuss colleague performance publicly',
            'Provide medical advice freely online',
        ]),
        'answer'      => 'Post only de-identified, factual content',
        'explanation' => 'Maintaining confidentiality and professionalism is critical in online communications.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'What is the primary purpose of root cause analysis in clinical errors?',
        'choices'     => json_encode([
            'Identify underlying system failures to prevent recurrence',
            'Assign individual blame only',
            'Document errors without follow-up',
            'Increase punitive measures',
        ]),
        'answer'      => 'Identify underlying system failures to prevent recurrence',
        'explanation' => 'Root cause analysis focuses on system improvements rather than individual fault.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which quality improvement cycle is commonly used in healthcare?',
        'choices'     => json_encode([
            'Plan-Do-Study-Act (PDSA)',
            'Analyze-Design-Implement-Monitor',
            'Prepare-Execute-Review-Report',
            'Scan-Plan-Do-Check',
        ]),
        'answer'      => 'Plan-Do-Study-Act (PDSA)',
        'explanation' => 'PDSA provides iterative testing of changes to improve processes and outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which culture promotes reporting and learning from incidents?',
        'choices'     => json_encode([
            'Just culture',
            'Blame culture',
            'Silent culture',
            'Punitive culture',
        ]),
        'answer'      => 'Just culture',
        'explanation' => 'Just culture balances accountability with a focus on system improvement and safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which model describes experiential learning in professional development?',
        'choices'     => json_encode([
            'Kolb\'s learning cycle',
            'ADDIE model',
            'Bloom\'s taxonomy',
            'Maslow\'s hierarchy',
        ]),
        'answer'      => 'Kolb\'s learning cycle',
        'explanation' => 'Kolb\'s cycle involves concrete experience, reflective observation, abstract conceptualization, and active experimentation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which tool helps prioritize tasks by urgency and importance?',
        'choices'     => json_encode([
            'Eisenhower Matrix',
            'RACI chart',
            'Gantt chart',
            'Fishbone diagram',
        ]),
        'answer'      => 'Eisenhower Matrix',
        'explanation' => 'The matrix categorizes tasks to focus on what is urgent and important.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'What best distinguishes leadership from management?',
        'choices'     => json_encode([
            'Leaders inspire vision; managers organize processes',
            'Managers innovate; leaders maintain status quo',
            'Leaders follow rules; managers break norms',
            'Managers provide vision; leaders handle logistics',
        ]),
        'answer'      => 'Leaders inspire vision; managers organize processes',
        'explanation' => 'Leadership focuses on direction and motivation, while management ensures execution and control.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which practice improves professional presentation skills?',
        'choices'     => json_encode([
            'Using clear structure and engaging stories',
            'Reading slides verbatim',
            'Overloading slides with text',
            'Avoiding audience interaction',
        ]),
        'answer'      => 'Using clear structure and engaging stories',
        'explanation' => 'A logical flow and narrative enhance audience engagement and message retention.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which principle governs confidentiality of e-portfolio data?',
        'choices'     => json_encode([
            'Secure storage and restricted access',
            'Open public sharing',
            'Unencrypted filing',
            'Unlimited user access',
        ]),
        'answer'      => 'Secure storage and restricted access',
        'explanation' => 'Protecting learner data requires encryption and controlled permissions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which framework guides cultural competence in healthcare?',
        'choices'     => json_encode([
            'Purnell Model for Cultural Competence',
            'SMART framework',
            'Gibbs Reflective Cycle',
            'ADDIE model',
        ]),
        'answer'      => 'Purnell Model for Cultural Competence',
        'explanation' => 'The Purnell Model provides domains to assess cultural awareness and skills.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which principle is central to Knowles’ adult learning theory?',
        'choices'     => json_encode([
            'Learners are self-directed and bring experience to learning',
            'Learners prefer lectures only',
            'Learning must be punitive',
            'Adults learn best passively',
        ]),
        'answer'      => 'Learners are self-directed and bring experience to learning',
        'explanation' => 'Andragogy emphasizes self-concept and leveraging prior knowledge in adult learners.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'Which metric is useful in learning analytics for CPD activities?',
        'choices'     => json_encode([
            'Course completion and assessment scores',
            'Number of clicks only',
            'Time logged in only',
            'Video playback resolution',
        ]),
        'answer'      => 'Course completion and assessment scores',
        'explanation' => 'These metrics reflect engagement and knowledge acquisition in digital learning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 31,
        'part'        => 5,
        'question'    => 'What does self-efficacy refer to in professional development?',
        'choices'     => json_encode([
            'Belief in one’s ability to execute tasks',
            'Physical fitness only',
            'Technical knowledge only',
            'Length of experience',
        ]),
        'answer'      => 'Belief in one’s ability to execute tasks',
        'explanation' => 'Self-efficacy influences motivation and perseverance in learning and performance.',
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

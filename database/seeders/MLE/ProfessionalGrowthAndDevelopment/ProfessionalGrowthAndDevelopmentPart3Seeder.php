<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'What is career mapping in professional growth? ',
        'choices'     => json_encode([
            'Visualizing long-term career goals and steps',
            'Random job switching',
            'Ignoring future aspirations',
            'Focusing only on immediate tasks',
        ]),
        'answer'      => 'Visualizing long-term career goals and steps',
        'explanation' => 'Career mapping outlines a pathway for achieving professional objectives over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which certification enhances midwifery credibility? ',
        'choices'     => json_encode([
            'Advanced Life Support in Obstetrics (ALSO)',
            'Basic First Aid only',
            'Computer literacy certificate',
            'Food handling permit',
        ]),
        'answer'      => 'Advanced Life Support in Obstetrics (ALSO)',
        'explanation' => 'ALSO certification demonstrates advanced skills in managing obstetric emergencies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What is emotional intelligence (EI) in professional context? ',
        'choices'     => json_encode([
            'Ability to recognize and manage emotions',
            'Technical skill proficiency only',
            'High IQ score',
            'Physical stamina',
        ]),
        'answer'      => 'Ability to recognize and manage emotions',
        'explanation' => 'EI involves self-awareness, self-regulation, empathy, and social skills important for teamwork.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which document outlines individual development objectives? ',
        'choices'     => json_encode([
            'Individual Development Plan (IDP)',
            'Job description sheet',
            'Organizational chart',
            'Expense report',
        ]),
        'answer'      => 'Individual Development Plan (IDP)',
        'explanation' => 'An IDP records personal goals, timelines, and required learning activities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What role does digital literacy play in midwifery? ',
        'choices'     => json_encode([
            'Enables use of e-health records and telehealth',
            'Focuses only on social media use',
            'Is irrelevant to clinical care',
            'Replaces interpersonal communication',
        ]),
        'answer'      => 'Enables use of e-health records and telehealth',
        'explanation' => 'Digital literacy ensures competent use of technology in patient management and education.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which grant-writing step is essential for securing research funds? ',
        'choices'     => json_encode([
            'Clearly defining research objectives and methodology',
            'Submitting an informal email request',
            'Using generic proposal templates without adaptation',
            'Copying previous grants verbatim',
        ]),
        'answer'      => 'Clearly defining research objectives and methodology',
        'explanation' => 'Funders require precise aims, methods, and expected outcomes in proposals.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What is interprofessional collaboration? ',
        'choices'     => json_encode([
            'Working cooperatively with other health disciplines',
            'Solo practice without consultation',
            'Competition between professions',
            'Independent decision-making only',
        ]),
        'answer'      => 'Working cooperatively with other health disciplines',
        'explanation' => 'Collaboration improves patient outcomes via shared expertise and coordinated care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which writing style is recommended for academic publication? ',
        'choices'     => json_encode([
            'Clear, concise, and evidence-based',
            'Informal and anecdotal',
            'Highly technical jargon only',
            'Promotional and sales-focused',
        ]),
        'answer'      => 'Clear, concise, and evidence-based',
        'explanation' => 'Academic writing requires clarity, precision, and reference to research evidence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which activity builds professional network online? ',
        'choices'     => json_encode([
            'Participating in professional webinars and forums',
            'Posting personal photos only',
            'Gaming with peers',
            'Ignoring industry groups',
        ]),
        'answer'      => 'Participating in professional webinars and forums',
        'explanation' => 'Engaging in webinars and forums expands contacts and knowledge sharing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What is advocacy in professional development? ',
        'choices'     => json_encode([
            'Promoting policies that support midwifery practice',
            'Serving only personal interests',
            'Ignoring policy issues',
            'Endorsing unverified treatments',
        ]),
        'answer'      => 'Promoting policies that support midwifery practice',
        'explanation' => 'Advocacy involves influencing policy to improve care standards and resources.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which self-care practice reduces professional burnout? ',
        'choices'     => json_encode([
            'Regular physical exercise and adequate rest',
            'Excessive overtime work',
            'Skipping meals',
            'Isolation from support systems',
        ]),
        'answer'      => 'Regular physical exercise and adequate rest',
        'explanation' => 'Balanced self-care maintains well-being and prevents exhaustion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What is the purpose of scholarly dissemination? ',
        'choices'     => json_encode([
            'Share research findings with wider audience',
            'Restrict knowledge to few colleagues',
            'Keep data unpublished',
            'Focus only on internal memos',
        ]),
        'answer'      => 'Share research findings with wider audience',
        'explanation' => 'Dissemination advances practice by informing peers and stakeholders.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which scenario-based learning activity benefits midwifery training? ',
        'choices'     => json_encode([
            'Simulation of delivery complications',
            'Reading textbooks only',
            'Listening to unrelated lectures',
            'Observing without participation',
        ]),
        'answer'      => 'Simulation of delivery complications',
        'explanation' => 'Scenario simulations develop critical decision-making in safe environment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What does lifelong competence require? ',
        'choices'     => json_encode([
            'Regular skill assessment and training updates',
            'One-time certification only',
            'Ignoring new guidelines',
            'Avoiding performance reviews',
        ]),
        'answer'      => 'Regular skill assessment and training updates',
        'explanation' => 'Maintaining competence demands ongoing evaluation and education.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which metric tracks research productivity? ',
        'choices'     => json_encode([
            'Number of peer-reviewed publications',
            'Attendance at social events',
            'Years of service only',
            'Personal blog posts',
        ]),
        'answer'      => 'Number of peer-reviewed publications',
        'explanation' => 'Publication count reflects contribution to scientific knowledge.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which approach enhances critical thinking skills? ',
        'choices'     => json_encode([
            'Case-based discussions',
            'Passive listening only',
            'Memorization without application',
            'Routine tasks only',
        ]),
        'answer'      => 'Case-based discussions',
        'explanation' => 'Discussing real cases promotes analysis, reasoning, and decision-making.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What is the benefit of challenge-based learning? ',
        'choices'     => json_encode([
            'Solving real-world problems collaboratively',
            'Individual rote learning',
            'Ignoring feedback',
            'Focusing on theory only',
        ]),
        'answer'      => 'Solving real-world problems collaboratively',
        'explanation' => 'Challenge-based learning engages learners in hands-on, team-driven solutions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which policy document guides CPD requirements? ',
        'choices'     => json_encode([
            'PRC CPD Standard Guidelines',
            'Hospital visitor policy',
            'Social media policy',
            'Event brochure',
        ]),
        'answer'      => 'PRC CPD Standard Guidelines',
        'explanation' => 'PRC guidelines specify credit requirements and acceptable activities for license renewal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'Which activity evaluates teaching effectiveness? ',
        'choices'     => json_encode([
            'Student feedback surveys',
            'Skipping course evaluations',
            'One-way lecture delivery',
            'Ignoring participant input',
        ]),
        'answer'      => 'Student feedback surveys',
        'explanation' => 'Feedback surveys identify strengths and areas for instructional improvement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 31,
        'part'        => 3,
        'question'    => 'What is the aim of professional portfolios? ',
        'choices'     => json_encode([
            'Document achievements, reflections, and goals',
            'Record only meeting attendance',
            'Store personal photos',
            'Log daily tasks only',
        ]),
        'answer'      => 'Document achievements, reflections, and goals',
        'explanation' => 'Portfolios showcase learning, clinical work, and future development plans.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

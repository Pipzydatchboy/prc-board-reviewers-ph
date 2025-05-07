<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart7Seeder extends Seeder
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
        'part'         => 7,
        'question'     => 'Which strategy enhances professional networking offline?',
        'choices'      => json_encode([
            'Attending regional midwifery conferences',
            'Posting on personal social media',
            'Watching webinars alone',
            'Reading clinical journals only',
        ]),
        'answer'       => 'Attending regional midwifery conferences',
        'explanation'  => 'Conferences provide opportunities to meet peers and establish professional connections.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //2
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'What is the primary goal of an elevator pitch for a midwife?',
        'choices'      => json_encode([
            'Summarize expertise and value in under one minute',
            'Detail complete work history',
            'List every certification held',
            'Describe personal hobbies',
        ]),
        'answer'       => 'Summarize expertise and value in under one minute',
        'explanation'  => 'An elevator pitch briefly communicates professional strengths and goals.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //3
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which tool helps manage competing priorities effectively?',
        'choices'      => json_encode([
            'Priority matrix (Eisenhower box)',
            'Color-coded stickers only',
            'Random task picking',
            'Ignoring deadlines',
        ]),
        'answer'       => 'Priority matrix (Eisenhower box)',
        'explanation'  => 'The matrix categorizes tasks by urgency and importance for better focus.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //4
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which approach supports resilience after critical incidents?',
        'choices'      => json_encode([
            'Debriefing sessions with peers and supervisors',
            'Suppressing emotions',
            'Avoiding discussion of the event',
            'Working additional shifts',
        ]),
        'answer'       => 'Debriefing sessions with peers and supervisors',
        'explanation'  => 'Structured debriefings help process emotions and improve coping skills.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //5
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'What is the benefit of maintaining a professional portfolio?',
        'choices'      => json_encode([
            'Showcase achievements and track learning over time',
            'Store personal photos only',
            'Record daily chores',
            'Track social events',
        ]),
        'answer'       => 'Showcase achievements and track learning over time',
        'explanation'  => 'Portfolios provide evidence of competence and ongoing development.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //6
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which metric indicates effective time management?',
        'choices'      => json_encode([
            'Percentage of tasks completed on schedule',
            'Total hours worked',
            'Number of meetings attended',
            'Email response rate',
        ]),
        'answer'       => 'Percentage of tasks completed on schedule',
        'explanation'  => 'Completing tasks on time reflects efficient planning and execution.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //7
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which leadership skill improves team motivation?',
        'choices'      => json_encode([
            'Providing positive feedback and recognition',
            'Strictly enforcing rules',
            'Limiting communication',
            'Delegating without support',
        ]),
        'answer'       => 'Providing positive feedback and recognition',
        'explanation'  => 'Recognition of achievements fosters a positive work environment and motivation.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //8
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which technique promotes active listening in professional interactions?',
        'choices'      => json_encode([
            'Paraphrasing and asking clarifying questions',
            'Interrupting frequently',
            'Thinking about response while listening',
            'Looking away often',
        ]),
        'answer'       => 'Paraphrasing and asking clarifying questions',
        'explanation'  => 'These practices ensure understanding and demonstrate engagement.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //9
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'What is reverse planning in goal setting?',
        'choices'      => json_encode([
            'Starting with the end goal and mapping backward steps',
            'Random task prioritization',
            'Daily to-do lists only',
            'Outlining challenges only',
        ]),
        'answer'       => 'Starting with the end goal and mapping backward steps',
        'explanation'  => 'Reverse planning clarifies milestones needed to achieve the final objective.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //10
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which assessment identifies learning preferences?',
        'choices'      => json_encode([
            'VARK questionnaire (Visual, Auditory, Read/write, Kinesthetic)',
            'General IQ test',
            'Physical fitness exam',
            'Numerical reasoning test',
        ]),
        'answer'       => 'VARK questionnaire (Visual, Auditory, Read/write, Kinesthetic)',
        'explanation'  => 'VARK survey helps tailor learning strategies to individual preferences.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //11
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which activity fosters interprofessional respect?',
        'choices'      => json_encode([
            'Shadowing colleagues from other disciplines',
            'Ignoring other teams',
            'Solo case management',
            'Restricting communication',
        ]),
        'answer'       => 'Shadowing colleagues from other disciplines',
        'explanation'  => 'Shadowing builds empathy and understanding of diverse healthcare roles.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //12
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which technique improves presentation design?',
        'choices'      => json_encode([
            'Using minimal text and clear visuals',
            'Adding full paragraphs on slides',
            'Applying multiple fonts',
            'Including every detail verbally',
        ]),
        'answer'       => 'Using minimal text and clear visuals',
        'explanation'  => 'Simple slides with visuals enhance audience engagement and message clarity.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //13
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'What is appreciative inquiry in organisational development?',
        'choices'      => json_encode([
            'Focusing on strengths to drive positive change',
            'Analyzing failures exclusively',
            'Ignoring successes',
            'Punishing errors',
        ]),
        'answer'       => 'Focusing on strengths to drive positive change',
        'explanation'  => 'Appreciative Inquiry leverages existing assets and successes for development.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //14
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which practice supports work-life integration?',
        'choices'      => json_encode([
            'Setting clear boundaries and schedules',
            'Responding to work emails 24/7',
            'Skipping vacations',
            'Avoiding personal time',
        ]),
        'answer'       => 'Setting clear boundaries and schedules',
        'explanation'  => 'Boundaries help balance professional duties and personal well-being.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //15
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which indicator measures learning transfer to practice?',
        'choices'      => json_encode([
            'Observed application of skills in clinical settings',
            'Course attendance only',
            'Self-reported satisfaction only',
            'Number of certificates earned',
        ]),
        'answer'       => 'Observed application of skills in clinical settings',
        'explanation'  => 'Direct observation confirms that learning is effectively applied at work.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //16
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'What is the focus of transformational coaching?',
        'choices'      => json_encode([
            'Personal growth and mindset shifts',
            'Immediate task completion',
            'Standard performance reviews',
            'Policy enforcement',
        ]),
        'answer'       => 'Personal growth and mindset shifts',
        'explanation'  => 'Transformational coaching aims to change self-perception and unlock potential.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //17
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which practice reduces cognitive load during learning?',
        'choices'      => json_encode([
            'Chunking information into manageable segments',
            'Presenting all details at once',
            'Using complex sentences only',
            'Skipping summaries',
        ]),
        'answer'       => 'Chunking information into manageable segments',
        'explanation'  => 'Chunking helps learners process and retain information effectively.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //18
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which approach enhances emotional intelligence at work?',
        'choices'      => json_encode([
            'Regular self-reflection and empathy exercises',
            'Focusing solely on technical skills',
            'Suppressing emotions',
            'Ignoring feedback',
        ]),
        'answer'       => 'Regular self-reflection and empathy exercises',
        'explanation'  => 'Practicing reflection and empathy builds awareness and relational skills.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //19
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'Which tool supports goal tracking visually?',
        'choices'      => json_encode([
            'Kanban board',
            'Plain text list only',
            'Random notes',
            'Email reminders only',
        ]),
        'answer'       => 'Kanban board',
        'explanation'  => 'Kanban boards visualize workflow and track progress of tasks and goals.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //20
    [
        'subject_id'   => 31,
        'part'         => 7,
        'question'     => 'What is the benefit of action learning sets?',
        'choices'      => json_encode([
            'Solving real problems in small peer groups',
            'Unstructured socializing',
            'Individual test taking',
            'One-way lectures',
        ]),
        'answer'       => 'Solving real problems in small peer groups',
        'explanation'  => 'Action learning sets use group reflection to address workplace challenges.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

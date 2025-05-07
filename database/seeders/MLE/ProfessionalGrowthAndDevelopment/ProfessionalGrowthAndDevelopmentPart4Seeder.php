<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart4Seeder extends Seeder
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
        'part'         => 4,
        'question'     => 'Which approach best describes competency-based education (CBE)?',
        'choices'      => json_encode([
            'Progression upon demonstrated mastery of skills',
            'Time-based attendance only',
            'Lecture hours accumulation',
            'Random assessment scheduling',
        ]),
        'answer'       => 'Progression upon demonstrated mastery of skills',
        'explanation'  => 'CBE allows learners to advance once competencies are achieved rather than time served.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //2
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'What is the Kirkpatrick Level 3 evaluation focus?',
        'choices'      => json_encode([
            'Behavior change on the job',
            'Learner satisfaction',
            'Return on investment',
            'Learning retention',
        ]),
        'answer'       => 'Behavior change on the job',
        'explanation'  => 'Level 3 assesses whether participants apply learned skills in practice.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //3
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which learning theory emphasizes social context and observation?',
        'choices'      => json_encode([
            'Social learning theory',
            'Behaviorism',
            'Constructivism',
            'Cognitivism',
        ]),
        'answer'       => 'Social learning theory',
        'explanation'  => 'Social learning theory posits learning through observing others and social interaction.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //4
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which tool measures workplace learning culture?',
        'choices'      => json_encode([
            'Learning culture assessment survey',
            'Financial performance metrics',
            'Patient census report',
            'Facility audit checklist',
        ]),
        'answer'       => 'Learning culture assessment survey',
        'explanation'  => 'This survey evaluates how supportive the work environment is for continuous learning.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //5
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'What is reflective practice primarily intended to improve?',
        'choices'      => json_encode([
            'Professional decision-making and self-awareness',
            'Speed of task completion only',
            'Reducing patient contact',
            'Increasing administrative work',
        ]),
        'answer'       => 'Professional decision-making and self-awareness',
        'explanation'  => 'Reflection on experiences enhances judgment and personal insight.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //6
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which activity is part of scholarly inquiry in midwifery?',
        'choices'      => json_encode([
            'Conducting systematic literature reviews',
            'Scheduling social events',
            'Teaching only without research',
            'Ignoring evidence sources',
        ]),
        'answer'       => 'Conducting systematic literature reviews',
        'explanation'  => 'Literature reviews synthesize existing research to inform evidence-based practice.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //7
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'What does the term “lifewide learning” include?',
        'choices'      => json_encode([
            'Learning in formal, informal, and workplace settings',
            'Only classroom-based training',
            'Only online courses',
            'Only on-the-job tasks',
        ]),
        'answer'       => 'Learning in formal, informal, and workplace settings',
        'explanation'  => 'Lifewide learning encompasses all contexts of personal and professional learning.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //8
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which framework guides ethical decision-making in midwifery research?',
        'choices'      => json_encode([
            'Belmont Report principles',
            'Maslow’s Hierarchy',
            'Lewin’s Change Model',
            'Gantt chart scheduling',
        ]),
        'answer'       => 'Belmont Report principles',
        'explanation'  => 'Belmont principles of respect, beneficence, and justice underpin research ethics.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //9
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which strategy ensures knowledge translation into practice?',
        'choices'      => json_encode([
            'Implementation of clinical practice guidelines',
            'Dissemination without follow-up',
            'Theoretical lectures only',
            'Ignoring new evidence',
        ]),
        'answer'       => 'Implementation of clinical practice guidelines',
        'explanation'  => 'Guidelines translate evidence into actionable protocols for care.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //10
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which metric assesses clinical supervision quality?',
        'choices'      => json_encode([
            'Supervisor-to-staff ratio and feedback frequency',
            'Number of clinical hours only',
            'Facility size',
            'Patient volume',
        ]),
        'answer'       => 'Supervisor-to-staff ratio and feedback frequency',
        'explanation'  => 'Adequate supervision ratios and regular feedback are key quality indicators.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //11
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which program supports leadership development in healthcare?',
        'choices'      => json_encode([
            'Leadership in Health Systems Program (LHS)',
            'Basic life support only',
            'Pharmacy technician course',
            'Construction safety training',
        ]),
        'answer'       => 'Leadership in Health Systems Program (LHS)',
        'explanation'  => 'LHS focuses on building leadership and management skills for health professionals.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //12
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which approach fosters a growth mindset among practitioners?',
        'choices'      => json_encode([
            'Encouraging challenges and learning from mistakes',
            'Punishing errors harshly',
            'Avoiding new tasks',
            'Emphasizing innate talent only',
        ]),
        'answer'       => 'Encouraging challenges and learning from mistakes',
        'explanation'  => 'A growth mindset values effort, resilience, and learning from setbacks.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //13
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'What is the role of communities of practice?',
        'choices'      => json_encode([
            'Share tacit knowledge and support peer learning',
            'Provide only formal training',
            'Evaluate performance exclusively',
            'Function as social clubs',
        ]),
        'answer'       => 'Share tacit knowledge and support peer learning',
        'explanation'  => 'Communities of practice facilitate exchange of practical insights and mentorship.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //14
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which tool assists in tracking reflective entries over time?',
        'choices'      => json_encode([
            'Electronic reflective journal platform',
            'Handwritten notebooks only',
            'Email chains',
            'Sticky notes',
        ]),
        'answer'       => 'Electronic reflective journal platform',
        'explanation'  => 'Digital platforms allow organized, searchable reflection records.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //15
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which evaluation method measures learning application on-the-job?',
        'choices'      => json_encode([
            'Workplace observation and feedback',
            'Written exams only',
            'Attendance sheets',
            'Course feedback forms',
        ]),
        'answer'       => 'Workplace observation and feedback',
        'explanation'  => 'Direct observation evaluates actual performance and skill application.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //16
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which factor influences professional identity formation?',
        'choices'      => json_encode([
            'Role models and mentorship',
            'Salary alone',
            'Facility infrastructure only',
            'Uniform color',
        ]),
        'answer'       => 'Role models and mentorship',
        'explanation'  => 'Exposure to positive role models shapes attitudes and professional behavior.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //17
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'What is a key element of a mentorship agreement?',
        'choices'      => json_encode([
            'Clear expectations and confidentiality clauses',
            'Informal verbal promises only',
            'Salary negotiation terms',
            'Patient scheduling details',
        ]),
        'answer'       => 'Clear expectations and confidentiality clauses',
        'explanation'  => 'Agreements establish goals, roles, timelines, and trust parameters.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //18
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which strategy improves intergenerational knowledge transfer?',
        'choices'      => json_encode([
            'Pairing experienced and novice practitioners',
            'Isolating new staff',
            'Random seating only',
            'Excluding veterans from training',
        ]),
        'answer'       => 'Pairing experienced and novice practitioners',
        'explanation'  => 'Mentor-mentee pairings facilitate sharing of expertise and best practices.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //19
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which indicator tracks professional development progress?',
        'choices'      => json_encode([
            'Percentage of completed IDP activities',
            'Number of patient visits',
            'Facility cleanliness score',
            'Annual revenue only',
        ]),
        'answer'       => 'Percentage of completed IDP activities',
        'explanation'  => 'This metric reflects how many planned learning objectives have been met.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //20
    [
        'subject_id'   => 31,
        'part'         => 4,
        'question'     => 'Which platform is best for hosting e-portfolios?',
        'choices'      => json_encode([
            'Dedicated e-portfolio systems',
            'Public social media',
            'Unsecured file shares',
            'Personal blogs without privacy',
        ]),
        'answer'       => 'Dedicated e-portfolio systems',
        'explanation'  => 'These platforms are designed to organize, present, and secure professional portfolios.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which approach enhances digital professionalism for midwives?',
        'choices'     => json_encode([
            'Maintaining patient confidentiality in online communications',
            'Sharing patient stories with identifiers',
            'Posting unverified medical advice',
            'Using personal accounts for clinical discussions',
        ]),
        'answer'      => 'Maintaining patient confidentiality in online communications',
        'explanation' => 'Digital professionalism requires safeguarding patient privacy in all online interactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'What is the benefit of microlearning in CPD?',
        'choices'     => json_encode([
            'Delivers focused content in short bursts',
            'Requires full-day workshops only',
            'Replaces long-term planning',
            'Limits to textbook reading',
        ]),
        'answer'      => 'Delivers focused content in short bursts',
        'explanation' => 'Microlearning improves retention by providing concise, targeted learning modules.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which metric measures engagement in online CPD courses?',
        'choices'     => json_encode([
            'Completion rate of modules',
            'Number of clicks only',
            'Time spent logged in only',
            'Page views only',
        ]),
        'answer'      => 'Completion rate of modules',
        'explanation' => 'Module completion reflects true engagement and learning progress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'What is the purpose of a journal club in midwifery teams?',
        'choices'     => json_encode([
            'Critically appraise recent research and apply findings',
            'Organize social events',
            'Train only new staff',
            'Collect patient feedback',
        ]),
        'answer'      => 'Critically appraise recent research and apply findings',
        'explanation' => 'Journal clubs foster evidence-based practice through group discussion of studies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which tool supports time-efficient reflective practice?',
        'choices'     => json_encode([
            'Audio voice memos for quick reflection',
            'Lengthy written essays only',
            'Formal reports only',
            'Email threads',
        ]),
        'answer'      => 'Audio voice memos for quick reflection',
        'explanation' => 'Voice memos allow practitioners to capture reflections immediately and efficiently.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'What distinguishes blended learning in professional development?',
        'choices'     => json_encode([
            'Combination of online and face-to-face methods',
            'Purely online webinars',
            'Only in-person seminars',
            'Self-study alone',
        ]),
        'answer'      => 'Combination of online and face-to-face methods',
        'explanation' => 'Blended learning leverages the strengths of both digital and in-person education.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which practice ensures continuous improvement after CPD activities?',
        'choices'     => json_encode([
            'Setting SMART action plans post-training',
            'Attending without follow-up',
            'Collecting certificates only',
            'Ignoring application in practice',
        ]),
        'answer'      => 'Setting SMART action plans post-training',
        'explanation' => 'Action plans translate CPD learning into concrete steps to apply in practice.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'What role does a learning management system (LMS) serve?',
        'choices'     => json_encode([
            'Deliver and track CPD courses and credits',
            'Manage hospital finances',
            'Schedule patient appointments',
            'Monitor staff attendance',
        ]),
        'answer'      => 'Deliver and track CPD courses and credits',
        'explanation' => 'LMS platforms enable course delivery, progress tracking, and credit recording.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which activity fosters critical appraisal skills?',
        'choices'     => json_encode([
            'Structured journal article critique sessions',
            'Posting opinions on social media',
            'Watching unmoderated videos',
            'Random reading',
        ]),
        'answer'      => 'Structured journal article critique sessions',
        'explanation' => 'Critical appraisal workshops teach systematic evaluation of research validity and relevance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'What defines competency validation in the workplace?',
        'choices'     => json_encode([
            'Observed practice against established criteria',
            'Self-assessment alone',
            'Certificate display only',
            'Task logging without review',
        ]),
        'answer'      => 'Observed practice against established criteria',
        'explanation' => 'Direct observation with checklists ensures practitioners meet competency standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which concept describes learning through mistakes?',
        'choices'     => json_encode([
            'Failure-based learning with constructive feedback',
            'Zero error tolerance only',
            'Punitive measures for mistakes',
            'Ignoring errors',
        ]),
        'answer'      => 'Failure-based learning with constructive feedback',
        'explanation' => 'Learning from errors with feedback fosters growth and system improvements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which approach supports inclusive leadership development?',
        'choices'     => json_encode([
            'Diverse mentorship and sponsorship programs',
            'Uniform training for all only',
            'Selective invitations only',
            'One-size-fits-all modules',
        ]),
        'answer'      => 'Diverse mentorship and sponsorship programs',
        'explanation' => 'Inclusive programs ensure equitable access to leadership opportunities for all backgrounds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'What is the benefit of peer evaluation?',
        'choices'     => json_encode([
            'Provides multiple perspectives on performance',
            'Creates competition only',
            'Replaces all other assessments',
            'Focuses on personal opinions only',
        ]),
        'answer'      => 'Provides multiple perspectives on performance',
        'explanation' => 'Peer review complements supervisory feedback with diverse insights.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which tool supports gap analysis at team level?',
        'choices'     => json_encode([
            'Team competency matrix',
            'Individual to-do lists only',
            'Facility map',
            'Patient registry',
        ]),
        'answer'      => 'Team competency matrix',
        'explanation' => 'Matrices visualize collective skills and identify areas for group development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which learning activity encourages creativity?',
        'choices'     => json_encode([
            'Design thinking workshops',
            'Standard lecture only',
            'Rote memorization',
            'Closed-ended quizzes',
        ]),
        'answer'      => 'Design thinking workshops',
        'explanation' => 'Design thinking fosters innovative problem-solving through iterative prototypes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which concept describes lifelong adaptation to change?',
        'choices'     => json_encode([
            'Agile mindset',
            'Fixed mindset only',
            'Routine mindset',
            'Conservative mindset',
        ]),
        'answer'      => 'Agile mindset',
        'explanation' => 'An agile mindset embraces flexibility and rapid learning in dynamic environments.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which feedback style promotes growth?',
        'choices'     => json_encode([
            'Constructive feedback with specific suggestions',
            'General praise only',
            'Harsh criticism without guidance',
            'Silent observation',
        ]),
        'answer'      => 'Constructive feedback with specific suggestions',
        'explanation' => 'Actionable feedback helps individuals understand how to improve their performance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'What is the role of CPD audits? ',
        'choices'     => json_encode([
            'Ensure quality and relevance of development activities',
            'Track only attendance',
            'Evaluate facility finances',
            'Monitor patient outcomes only',
        ]),
        'answer'      => 'Ensure quality and relevance of development activities',
        'explanation' => 'Audits review CPD programs for alignment with professional standards and learner needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which indicator reflects team-based learning success?',
        'choices'     => json_encode([
            'Improved collaborative clinical outcomes',
            'Individual test scores only',
            'Number of solo presentations',
            'Attendance sheets only',
        ]),
        'answer'      => 'Improved collaborative clinical outcomes',
        'explanation' => 'Team learning should translate into better joint practice outcomes and patient care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 31,
        'part'        => 8,
        'question'    => 'Which strategy supports succession planning in healthcare teams?',
        'choices'     => json_encode([
            'Identifying and mentoring future leaders early',
            'Hiring only external candidates for leadership',
            'Avoiding talent development',
            'Retaining roles without change',
        ]),
        'answer'      => 'Identifying and mentoring future leaders early',
        'explanation' => 'Succession planning ensures continuity by preparing emerging talents for key roles.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

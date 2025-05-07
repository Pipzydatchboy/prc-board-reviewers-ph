<?php

namespace Database\Seeders\MLE\ProfessionalGrowthAndDevelopment;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalGrowthAndDevelopmentPart1Seeder extends Seeder
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
        'part'         => 1,
        'question'     => 'Which principle describes lifelong learning in midwifery practice?',
        'choices'      => json_encode([
            'Continuously updating knowledge and skills',
            'Relying solely on initial training',
            'Avoiding new evidence',
            'Learning only during emergencies',
        ]),
        'answer'       => 'Continuously updating knowledge and skills',
        'explanation'  => 'Lifelong learning requires ongoing professional development to maintain competence.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //2
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What is the first step in creating a professional development plan?',
        'choices'      => json_encode([
            'Assessing personal learning needs',
            'Attending conferences randomly',
            'Waiting for employer instruction',
            'Repeating past activities',
        ]),
        'answer'       => 'Assessing personal learning needs',
        'explanation'  => 'Identifying gaps guides targeted development activities.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //3
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which model assists reflective practice in midwifery?',
        'choices'      => json_encode([
            'Gibbs\' Reflective Cycle',
            'Maslow\'s Hierarchy',
            'Lewin\'s Change Model',
            'Kirkpatrick\'s Evaluation Model',
        ]),
        'answer'       => 'Gibbs\' Reflective Cycle',
        'explanation'  => 'Gibbs\' cycle structures reflection on experience to improve practice.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //4
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What does SMART stand for in goal setting?',
        'choices'      => json_encode([
            'Specific, Measurable, Achievable, Relevant, Time-bound',
            'Simple, Meaningful, Actionable, Realistic, Timely',
            'Strategic, Manageable, Attainable, Resourceful, Timeless',
            'Selective, Measured, Agreed, Reviewed, Tested',
        ]),
        'answer'       => 'Specific, Measurable, Achievable, Relevant, Time-bound',
        'explanation'  => 'SMART goals provide clear criteria to guide professional objectives.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //5
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which activity is an example of formal continuing education?',
        'choices'      => json_encode([
            'Attending accredited workshops or seminars',
            'Casual reading at home',
            'Discussing cases with friends informally',
            'Watching unrelated videos online',
        ]),
        'answer'       => 'Attending accredited workshops or seminars',
        'explanation'  => 'Formal CE provides structured learning recognized by professional bodies.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //6
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What is the role of a mentor in midwifery professional development?',
        'choices'      => json_encode([
            'Providing guidance and feedback to less experienced colleagues',
            'Assigning administrative tasks only',
            'Evaluating for disciplinary action',
            'Replacing formal education entirely',
        ]),
        'answer'       => 'Providing guidance and feedback to less experienced colleagues',
        'explanation'  => 'Mentors support skill development and professional growth through guidance.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //7
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which portfolio component demonstrates clinical competence?',
        'choices'      => json_encode([
            'Case logs and reflective notes',
            'Meeting minutes only',
            'Financial audit reports',
            'Personal photographs',
        ]),
        'answer'       => 'Case logs and reflective notes',
        'explanation'  => 'Documented cases and reflections illustrate practical skills and learning.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //8
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What is an advantage of interprofessional learning?',
        'choices'      => json_encode([
            'Enhances collaborative care and communication skills',
            'Increases professional isolation',
            'Limits understanding of other roles',
            'Duplicates existing knowledge only',
        ]),
        'answer'       => 'Enhances collaborative care and communication skills',
        'explanation'  => 'Learning with other professions fosters teamwork and shared understanding.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //9
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which reflective question helps identify learning needs?',
        'choices'      => json_encode([
            'What went well and what could be improved?',
            'What did I eat for lunch?',
            'How long was my commute?',
            'Which color is my uniform?',
        ]),
        'answer'       => 'What went well and what could be improved?',
        'explanation'  => 'This question guides critical reflection on practice and identifies gaps.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //10
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which tool tracks CE credits and recertification requirements?',
        'choices'      => json_encode([
            'Online learning management system (LMS)',
            'Paper calendar only',
            'Verbal agreements',
            'Social media posts',
        ]),
        'answer'       => 'Online learning management system (LMS)',
        'explanation'  => 'LMS platforms record courses, credits, and compliance for licensure.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //11
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What is the benefit of action research in practice?',
        'choices'      => json_encode([
            'Addresses real-world problems through iterative inquiry',
            'Increases paperwork without impact',
            'Focuses solely on theory',
            'Reduces patient care time only',
        ]),
        'answer'       => 'Addresses real-world problems through iterative inquiry',
        'explanation'  => 'Action research empowers practitioners to improve practice based on evidence.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //12
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which strategy promotes evidence-based practice?',
        'choices'      => json_encode([
            'Regularly reviewing current research literature',
            'Ignoring new studies',
            'Relying on outdated guidelines indefinitely',
            'Making decisions by intuition only',
        ]),
        'answer'       => 'Regularly reviewing current research literature',
        'explanation'  => 'Keeping up-to-date with research ensures practice is based on best evidence.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //13
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What does CPD stand for?',
        'choices'      => json_encode([
            'Continuing Professional Development',
            'Clinical Practice Directive',
            'Credit Point Documentation',
            'Competency Performance Design',
        ]),
        'answer'       => 'Continuing Professional Development',
        'explanation'  => 'CPD encompasses ongoing learning activities to maintain and enhance professional skills.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //14
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which learning style involves hands-on practice?',
        'choices'      => json_encode([
            'Kinesthetic',
            'Auditory',
            'Visual',
            'Reading/Writing',
        ]),
        'answer'       => 'Kinesthetic',
        'explanation'  => 'Kinesthetic learners benefit from practical, tactile engagement in learning.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //15
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which framework guides ethical professional conduct?',
        'choices'      => json_encode([
            'Code of Ethics for Midwives',
            'Hospital policy manual',
            'Personal preference',
            'Social media guidelines',
        ]),
        'answer'       => 'Code of Ethics for Midwives',
        'explanation'  => 'Professional codes outline principles and values guiding ethical practice.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //16
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which gap analysis identifies discrepancies between current and desired competencies?',
        'choices'      => json_encode([
            'Competency gap analysis',
            'Financial gap analysis',
            'Market gap analysis',
            'Quality gap analysis',
        ]),
        'answer'       => 'Competency gap analysis',
        'explanation'  => 'This analysis highlights areas for targeted professional development.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //17
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What is the purpose of peer review in clinical practice?',
        'choices'      => json_encode([
            'Provide constructive feedback and maintain standards',
            'Assign blame for errors',
            'Limit collaboration',
            'Serve as a disciplinary tool only',
        ]),
        'answer'       => 'Provide constructive feedback and maintain standards',
        'explanation'  => 'Peer review promotes quality improvement through collegial evaluation.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //18
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which indicator evaluates mentoring program effectiveness?',
        'choices'      => json_encode([
            'Mentee satisfaction and skill improvement',
            'Number of meetings scheduled',
            'Cost of the program only',
            'Mentor seniority level',
        ]),
        'answer'       => 'Mentee satisfaction and skill improvement',
        'explanation'  => 'Effective mentoring is reflected in positive feedback and competency gains.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //19
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'Which resource supports evidence-based practice in midwifery?',
        'choices'      => json_encode([
            'Cochrane Library',
            'Social media forums',
            'Unverified blogs',
            'Personal anecdotes only',
        ]),
        'answer'       => 'Cochrane Library',
        'explanation'  => 'The Cochrane Library provides high-quality systematic reviews for clinical decision-making.',
        'created_at'   => $now,
        'updated_at'   => $now,
    ],
    //20
    [
        'subject_id'   => 31,
        'part'         => 1,
        'question'     => 'What is the advantage of learning communities?',
        'choices'      => json_encode([
            'Foster shared learning and peer support',
            'Limit knowledge sharing',
            'Increase competition only',
            'Reduce collaboration',
        ]),
        'answer'       => 'Foster shared learning and peer support',
        'explanation'  => 'Communities of practice enable ongoing dialogue and collective growth.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

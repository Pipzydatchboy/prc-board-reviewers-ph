<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       // Part 2: Professional Education (Questions 21–40)

// 21
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Which educational philosophy asserts that reality is apprehended through the senses and that knowledge is based on observable facts?",
    'choices'    => json_encode(['Idealism', 'Realism', 'Pragmatism', 'Existentialism']),
    'answer'     => 'Realism',
    'explanation'=> "Realism emphasizes learning from concrete, observable phenomena and facts.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 22
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "During which colonial period did the medium of instruction shift to English in Philippine public schools?",
    'choices'    => json_encode(['Spanish period', 'American period', 'Japanese period', 'Post-war period']),
    'answer'     => 'American period',
    'explanation'=> "Under American rule, English became the primary medium of instruction in public schools.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 23
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Skinner’s operant conditioning is most closely associated with which learning concept?",
    'choices'    => json_encode(['Reinforcement', 'Accommodation', 'Equilibration', 'Scaffolding']),
    'answer'     => 'Reinforcement',
    'explanation'=> "Operant conditioning uses reinforcement to increase or decrease behaviors.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 24
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Which theory emphasizes that learners construct knowledge through active engagement and discovery?",
    'choices'    => json_encode(['Behaviorism', 'Cognitivism', 'Constructivism', 'Humanism']),
    'answer'     => 'Constructivism',
    'explanation'=> "Constructivism holds that learners build new understanding on prior experiences.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 25
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "In Bloom’s revised taxonomy, which level is the highest cognitive process?",
    'choices'    => json_encode(['Analyze', 'Evaluate', 'Apply', 'Create']),
    'answer'     => 'Create',
    'explanation'=> "‘Create’ involves generating new ideas, products, or ways of viewing things.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 26
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "In a lesson plan, which component specifies how learning will be assessed?",
    'choices'    => json_encode(['Objectives', 'Learning activities', 'Evaluation method', 'Materials needed']),
    'answer'     => 'Evaluation method',
    'explanation'=> "The evaluation method describes assessments used to measure student learning.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 27
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Which DepEd order provides the Code of Ethics and Professional Standards for Filipino Teachers?",
    'choices'    => json_encode(['DepEd Order No. 66, s. 2013', 'DepEd Order No. 42, s. 2017', 'DepEd Order No. 8, s. 2015', 'DepEd Order No. 74, s. 2018']),
    'answer'     => 'DepEd Order No. 66, s. 2013',
    'explanation'=> "DepEd Order No. 66, s. 2013, promulgated the Code of Ethics and PPST.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 28
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "RA 4670, known as the Magna Carta for Public School Teachers, was enacted in:",
    'choices'    => json_encode(['1966', '1972', '1987', '1991']),
    'answer'     => '1966',
    'explanation'=> "RA 4670 was approved in 1966 to protect teachers’ rights and welfare.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 29
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "A diagnostic test is primarily used to:",
    'choices'    => json_encode(['Assign grades', 'Identify learning gaps', 'Evaluate program effectiveness', 'Measure standardized proficiency']),
    'answer'     => 'Identify learning gaps',
    'explanation'=> "Diagnostic assessments help pinpoint students’ strengths and weaknesses before instruction.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 30
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Which type of assessment occurs at the end of an instructional unit to measure achievement?",
    'choices'    => json_encode(['Diagnostic', 'Formative', 'Summative', 'Ipsative']),
    'answer'     => 'Summative',
    'explanation'=> "Summative assessments evaluate student learning after instruction is complete.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 31
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Item analysis in test construction is used to determine:",
    'choices'    => json_encode(['Content validity', 'Item difficulty and discrimination', 'Test reliability', 'Teaching methods effectiveness']),
    'answer'     => 'Item difficulty and discrimination',
    'explanation'=> "Item analysis evaluates how well each question differentiates between high and low performers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 32
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Content validity of a test refers to:",
    'choices'    => json_encode(['Consistency of scores', 'Coverage of objectives', 'Clarity of instructions', 'Time adequacy']),
    'answer'     => 'Coverage of objectives',
    'explanation'=> "Content validity ensures test items reflect the curriculum objectives.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 33
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "A classroom management strategy that establishes clear routines and procedures is known as:",
    'choices'    => json_encode(['Behaviorist approach', 'Permissive approach', 'Authoritative approach', 'Constructivist approach']),
    'answer'     => 'Authoritative approach',
    'explanation'=> "Authoritative management balances structure and support through consistent routines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 34
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "In Maslow’s hierarchy, which need must be met before learners pursue self-actualization?",
    'choices'    => json_encode(['Esteem needs', 'Safety needs', 'Social needs', 'Physiological needs']),
    'answer'     => 'Esteem needs',
    'explanation'=> "Esteem needs (respect, achievement) precede self-actualization in Maslow’s model.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 35
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "In an LMS, the forum tool is primarily used for:",
    'choices'    => json_encode(['Live video lectures', 'Asynchronous discussions', 'Grade computation', 'Attendance tracking']),
    'answer'     => 'Asynchronous discussions',
    'explanation'=> "Forums facilitate online discussions that participants can join at different times.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 36
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Within the ADDIE model, the 'E' phase focuses on:",
    'choices'    => json_encode(['Designing materials', 'Implementing instruction', 'Evaluating effectiveness', 'Analyzing needs']),
    'answer'     => 'Evaluating effectiveness',
    'explanation'=> "The Evaluation phase assesses whether the instruction meets its objectives.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 37
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Under K–12, how many years comprise the basic education cycle in the Philippines?",
    'choices'    => json_encode(['10', '12', '11', '13']),
    'answer'     => '12',
    'explanation'=> "The K–12 program includes Kindergarten + 6 elementary + 4 junior high + 2 senior high = 13 years, but basic academic cycle of Grades 1–12 is 12 years.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 38
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Continuing professional development (CPD) credit units for LET holders are governed by:",
    'choices'    => json_encode(['PRC Resolution', 'DepEd Order', 'CHED Memorandum', 'TESDA Circular']),
    'answer'     => 'PRC Resolution',
    'explanation'=> "The Professional Regulation Commission issues resolutions on CPD requirements for licensed teachers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 39
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "Which ethical principle requires teachers to protect student privacy and personal information?",
    'choices'    => json_encode(['Beneficence', 'Justice', 'Confidentiality', 'Fidelity']),
    'answer'     => 'Confidentiality',
    'explanation'=> "Confidentiality obliges teachers to keep student records and details private.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 40
$batch[] = [
    'subject_id' => 6,
    'part'       => 2,
    'question'   => "One domain of the Philippine Professional Standards for Teachers (PPST) is:",
    'choices'    => json_encode(['Community Engagement', 'Professional Environment', 'Fiscal Management', 'Student Assessment Design']),
    'answer'     => 'Professional Environment',
    'explanation'=> "Professional Environment is one of seven PPST domains, focusing on collaborative culture.",
    'created_at' => now(),
    'updated_at' => now(),
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

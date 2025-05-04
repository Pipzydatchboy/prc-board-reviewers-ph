<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart1Seeder extends Seeder
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
       // Part 1: Professional Education (Questions 1–20)

// 1
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Which educational philosophy views learning as a process of practical problem solving and application of ideas?",
    'choices'    => json_encode(['Idealism', 'Realism', 'Pragmatism', 'Existentialism']),
    'answer'     => 'Pragmatism',
    'explanation'=> "Pragmatism emphasizes learning through experience and problem solving.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 2
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "In Philippine education history, which colonial period introduced the public school system?",
    'choices'    => json_encode(['Spanish period', 'American period', 'Japanese period', 'Post-war period']),
    'answer'     => 'American period',
    'explanation'=> "The American period established a free, public school system in the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 3
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "According to Piaget, at which stage does a child begin abstract and hypothetical reasoning?",
    'choices'    => json_encode(['Sensorimotor', 'Preoperational', 'Concrete operational', 'Formal operational']),
    'answer'     => 'Formal operational',
    'explanation'=> "The formal operational stage (around 11+ years) allows abstract thinking.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 4
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Vygotsky’s concept of the Zone of Proximal Development (ZPD) refers to:",
    'choices'    => json_encode([
        'The difference between actual and potential development',
        'The learner’s self-paced progress',
        'The final stage of cognitive maturity',
        'The range of learning styles'
    ]),
    'answer'     => 'The difference between actual and potential development',
    'explanation'=> "ZPD is the gap between what a learner can do alone and with guidance.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 5
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Tyler’s curriculum model begins with defining:",
    'choices'    => json_encode(['Learning experiences', 'Objectives', 'Evaluation methods', 'Content selection']),
    'answer'     => 'Objectives',
    'explanation'=> "Tyler’s model starts by stating clear educational objectives.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 6
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "In the ABCD model of objectives, the ‘C’ stands for:",
    'choices'    => json_encode(['Condition', 'Content', 'Criteria', 'Cognition']),
    'answer'     => 'Condition',
    'explanation'=> "ABCD: Audience, Behavior, Condition, Degree describes objective components.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 7
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "A formative assessment is primarily used to:",
    'choices'    => json_encode([
        'Assign final grades',
        'Monitor student learning progress',
        'Evaluate curriculum effectiveness',
        'Determine program funding'
    ]),
    'answer'     => 'Monitor student learning progress',
    'explanation'=> "Formative assessments provide ongoing feedback during instruction.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 8
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Which term describes the consistency of an assessment tool?",
    'choices'    => json_encode(['Validity', 'Reliability', 'Objectivity', 'Usability']),
    'answer'     => 'Reliability',
    'explanation'=> "Reliability refers to the consistency of measurement across time and items.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 9
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "A classroom management approach that emphasizes mutual respect and shared responsibility is called:",
    'choices'    => json_encode(['Authoritarian', 'Permissive', 'Humanistic', 'Transactional']),
    'answer'     => 'Humanistic',
    'explanation'=> "Humanistic management focuses on student dignity, growth, and collaboration.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 10
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "In instructional design, ADDIE stands for:",
    'choices'    => json_encode([
        'Analyze, Design, Develop, Implement, Evaluate',
        'Assess, Deliver, Define, Instruct, Examine',
        'Apply, Determine, Develop, Integrate, Evaluate',
        'Analyze, Direct, Deliver, Instruct, Examine'
    ]),
    'answer'     => 'Analyze, Design, Develop, Implement, Evaluate',
    'explanation'=> "ADDIE is the standard five-phase instructional design model.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 11
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Which law established the K–12 basic education system in the Philippines?",
    'choices'    => json_encode(['RA 9155', 'RA 4670', 'RA 10533', 'RA 6728']),
    'answer'     => 'RA 10533',
    'explanation'=> "RA 10533, the Enhanced Basic Education Act, implemented the K–12 program.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 12
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "The Code of Ethics for Professional Teachers in the Philippines is defined by:",
    'choices'    => json_encode(['RA 9155', 'DepEd Order', 'PEC Memorandum', 'CHED Directive']),
    'answer'     => 'DepEd Order',
    'explanation'=> "The Department of Education issues the Code of Ethics via official DepEd orders.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 13
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Bloom’s Taxonomy places ‘Analyzing’ at which level of the cognitive domain?",
    'choices'    => json_encode(['Second', 'Third', 'Fourth', 'Fifth']),
    'answer'     => 'Fourth',
    'explanation'=> "The order: Remember, Understand, Apply, Analyze, Evaluate, Create.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 14
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Which assessment method involves students collecting and reflecting on their work over time?",
    'choices'    => json_encode(['Oral exam', 'Portfolio', 'Quiz', 'Checklist']),
    'answer'     => 'Portfolio',
    'explanation'=> "Portfolios are collections of student work showing progress and reflection.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 15
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "A Learning Management System (LMS) is primarily used to:",
    'choices'    => json_encode(['Publish textbooks', 'Manage instructional content', 'Conduct physical classes', 'Accredit programs']),
    'answer'     => 'Manage instructional content',
    'explanation'=> "LMS platforms host course materials, assignments, and track learning activities.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 16
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Which principle emphasizes that assessment tasks should reflect real-world applications?",
    'choices'    => json_encode(['Authenticity', 'Reliability', 'Validity', 'Objectivity']),
    'answer'     => 'Authenticity',
    'explanation'=> "Authentic assessments mimic real-life challenges and applications.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 17
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "The Philippine Professional Standards for Teachers (PPST) is implemented by:",
    'choices'    => json_encode(['CHED', 'DepEd', 'PRC', 'TESDA']),
    'answer'     => 'DepEd',
    'explanation'=> "The Department of Education oversees the PPST for basic education teachers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 18
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "Which theory of learning focuses on reinforcement and punishment?",
    'choices'    => json_encode(['Constructivism', 'Humanism', 'Behaviorism', 'Cognitivism']),
    'answer'     => 'Behaviorism',
    'explanation'=> "Behaviorism studies learning through observable behavior changes due to stimuli.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 19
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "A test blue-print is used to:",
    'choices'    => json_encode(['Match questions to objectives', 'Design instructional materials', 'Record attendance', 'Develop grading policy']),
    'answer'     => 'Match questions to objectives',
    'explanation'=> "Blueprints ensure test items align with learning objectives and content weighting.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 20
$batch[] = [
    'subject_id' => 6,
    'part'       => 1,
    'question'   => "The concept of ‘scaffolding’ in education was introduced by:",
    'choices'    => json_encode(['Piaget', 'Skinner', 'Bruner', 'Vygotsky']),
    'answer'     => 'Vygotsky',
    'explanation'=> "Vygotsky described scaffolding as support within the learner’s ZPD.",
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

<?php

namespace Database\Seeders\LET\Majorship\Mathematics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MathematicsPart10Seeder extends Seeder
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
       $batch = [];

       // 181
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "Which problem-solving strategy involves working backward from the desired solution?",
           'choices'     => json_encode([
               'Backward reasoning',
               'Trial and error',
               'Analogy',
               'Direct approach',
           ]),
           'answer'      => 'Backward reasoning',
           'explanation' => 'Backward reasoning starts at the goal and works in reverse to find steps that lead to it.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 182
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "In Bloom's Taxonomy, which level involves creating new patterns or structures?",
           'choices'     => json_encode([
               'Synthesis (Create)',
               'Analysis',
               'Evaluation',
               'Application',
           ]),
           'answer'      => 'Synthesis (Create)',
           'explanation' => 'The Create (formerly Synthesis) level focuses on putting elements together to form a coherent whole or original work.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 183
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is formative assessment?",
           'choices'     => json_encode([
               'Assessment during instruction to inform teaching and learning',
               'Final exam',
               'Standardized test',
               'Grading assignment',
           ]),
           'answer'      => 'Assessment during instruction to inform teaching and learning',
           'explanation' => 'Formative assessments are low-stakes checks for understanding used to guide ongoing instruction.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 184
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "Which pedagogical approach emphasizes student exploration and discovery?",
           'choices'     => json_encode([
               'Inquiry-based learning',
               'Lecture-based learning',
               'Direct instruction',
               'Drill and practice',
           ]),
           'answer'      => 'Inquiry-based learning',
           'explanation' => 'Inquiry-based learning encourages students to ask questions and investigate solutions through exploration.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 185
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is scaffolding in mathematics instruction?",
           'choices'     => json_encode([
               'Providing support structures and gradually removing them',
               'Requiring independent problem-solving only',
               'Teaching multiple topics simultaneously',
               'Assessing at the end of unit',
           ]),
           'answer'      => 'Providing support structures and gradually removing them',
           'explanation' => 'Scaffolding gives temporary support to help students learn concepts before they achieve independence.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 186
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "How does 'think-aloud' support mathematical thinking?",
           'choices'     => json_encode([
               'By verbalizing thought processes during problem-solving',
               'By silent reading',
               'By timed quizzes',
               'By group projects only',
           ]),
           'answer'      => 'By verbalizing thought processes during problem-solving',
           'explanation' => 'Think-aloud encourages metacognition by having students articulate their reasoning steps.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 187
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What does 'mathematical discourse' involve?",
           'choices'     => json_encode([
               'Students discussing and reasoning about math concepts',
               'Solving problems silently',
               'Memorizing formulas',
               'Watching math videos',
           ]),
           'answer'      => 'Students discussing and reasoning about math concepts',
           'explanation' => 'Mathematical discourse fosters deeper understanding through communication of ideas.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 188
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "Which technique uses visual representations to solve problems?",
           'choices'     => json_encode([
               'Model drawing',
               'Lecture',
               'Multiple-choice',
               'Group test',
           ]),
           'answer'      => 'Model drawing',
           'explanation' => 'Model drawing uses diagrams to represent and solve mathematical problems.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 189
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is the purpose of a 'math journal'?",
           'choices'     => json_encode([
               'To record strategies, reflections, and solutions over time',
               'To store graded assignments',
               'To take attendance',
               'To memorize definitions',
           ]),
           'answer'      => 'To record strategies, reflections, and solutions over time',
           'explanation' => 'Math journals document student thinking and track growth in understanding.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 190
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "Which assessment checks for misconceptions early in instruction?",
           'choices'     => json_encode([
               'Diagnostic assessment',
               'Summative assessment',
               'Benchmark test',
               'Final exam',
           ]),
           'answer'      => 'Diagnostic assessment',
           'explanation' => 'Diagnostic assessments identify student prior knowledge and misconceptions before teaching.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 191
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is 'spiral review' in curriculum planning?",
           'choices'     => json_encode([
               'Revisiting concepts at increasing levels of complexity',
               'Teaching alone once',
               'Daily quizzes only',
               'One-time unit tests',
           ]),
           'answer'      => 'Revisiting concepts at increasing levels of complexity',
           'explanation' => 'Spiral review reinforces learning by cycling through topics with depth over time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 192
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "Which question type promotes higher-order thinking?",
           'choices'     => json_encode([
               'Why and how questions',
               'What is 2+2?',
               'Fill in the blank',
               'True/False',
           ]),
           'answer'      => 'Why and how questions',
           'explanation' => 'Why and how prompts encourage analysis, evaluation, and creation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 193
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is 'error analysis' in math teaching?",
           'choices'     => json_encode([
               'Examining student errors to understand misconceptions',
               'Grading errors harshly',
               'Ignoring mistakes',
               'Multiple-choice tests',
           ]),
           'answer'      => 'Examining student errors to understand misconceptions',
           'explanation' => 'Error analysis helps teachers target instructional gaps by analyzing mistakes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 194
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "Define 'metacognition' in mathematics learning.",
           'choices'     => json_encode([
               'Students reflecting on their own thinking and learning processes',
               'Memorizing formulas',
               'Applying algorithms without thought',
               'Group work only',
           ]),
           'answer'      => 'Students reflecting on their own thinking and learning processes',
           'explanation' => 'Metacognition involves self-awareness of one’s cognitive strategies and understanding.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 195
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is the role of questioning in a math classroom?",
           'choices'     => json_encode([
               'To prompt thinking, check understanding, and guide learning',
               'To entertain students',
               'To fill time',
               'To test only knowledge recall',
           ]),
           'answer'      => 'To prompt thinking, check understanding, and guide learning',
           'explanation' => 'Effective questioning engages students and informs instruction.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 196
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What does 'differentiation' mean in math instruction?",
           'choices'     => json_encode([
               'Tailoring instruction to meet diverse student needs',
               'Teaching same way to all students',
               'Focusing only on advanced learners',
               'Using one textbook',
           ]),
           'answer'      => 'Tailoring instruction to meet diverse student needs',
           'explanation' => 'Differentiation adapts content, process, and products based on student readiness and interest.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 197
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is an 'exit ticket'?",
           'choices'     => json_encode([
               'A short assessment at end of lesson to check understanding',
               'Hall pass',
               'Ticket for field trip',
               'Homework pass',
           ]),
           'answer'      => 'A short assessment at end of lesson to check understanding',
           'explanation' => 'Exit tickets give quick insights into student learning at lesson closure.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 198
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "Which tool helps visualize math concepts dynamically?",
           'choices'     => json_encode([
               'GeoGebra',
               'Textbook',
               'Worksheet',
               'Lecture notes',
           ]),
           'answer'      => 'GeoGebra',
           'explanation' => 'GeoGebra is interactive software for geometry, algebra, and calculus visualizations.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 199
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "How can manipulatives support math learning?",
           'choices'     => json_encode([
               'By providing hands-on experiences to illustrate abstract concepts',
               'By replacing teacher instruction',
               'By serving as decorations',
               'By adding extra homework',
           ]),
           'answer'      => 'By providing hands-on experiences to illustrate abstract concepts',
           'explanation' => 'Manipulatives make abstract math tangible and aid conceptual understanding.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 200
       $batch[] = [
           'subject_id'  => 12,
           'part'        => 10,
           'question'    => "What is 'backward design' in curriculum planning?",
           'choices'     => json_encode([
               'Starting with goals and planning instruction backward',
               'Planning lessons randomly',
               'Following textbook order',
               'Assessing before teaching',
           ]),
           'answer'      => 'Starting with goals and planning instruction backward',
           'explanation' => 'Backward design begins by identifying desired results, then assessments, and finally instructional activities.',
           'created_at'  => $now,
           'updated_at'  => $now,
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

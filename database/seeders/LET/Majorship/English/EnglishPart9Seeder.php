<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart9Seeder extends Seeder
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

       // 161
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which reading strategy involves quickly glancing through a text to get the general idea?",
           'choices'     => json_encode([
               'Scanning',
               'Skimming',
               'Close reading',
               'Detailed analysis',
           ]),
           'answer'      => 'Skimming',
           'explanation' => 'Skimming helps readers identify main ideas without focusing on details.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 162
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What is the purpose of the SQ3R method in reading instruction?",
           'choices'     => json_encode([
               'To develop writing skills',
               'To improve critical reading comprehension',
               'To practice grammar exercises',
               'To enhance spelling accuracy',
           ]),
           'answer'      => 'To improve critical reading comprehension',
           'explanation' => 'SQ3R (Survey, Question, Read, Recite, Review) guides systematic comprehension.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 163
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which activity best promotes inferential reading skills?",
           'choices'     => json_encode([
               'Predicting outcomes',
               'Alphabet recitation',
               'Vocabulary matching',
               'Spelling tests',
           ]),
           'answer'      => 'Predicting outcomes',
           'explanation' => 'Prediction tasks require readers to infer meaning beyond explicit text.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 164
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which term describes writing focused on the steps of planning, drafting, revising, and editing?",
           'choices'     => json_encode([
               'Process writing',
               'Product writing',
               'Free writing',
               'Journal writing',
           ]),
           'answer'      => 'Process writing',
           'explanation' => 'Process writing emphasizes the stages of creating and refining text.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 165
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What is product writing primarily concerned with?",
           'choices'     => json_encode([
               'Final text quality',
               'Writing stages',
               'Brainstorming techniques',
               'Oral presentations',
           ]),
           'answer'      => 'Final text quality',
           'explanation' => 'Product writing focuses on the accuracy and correctness of the finished piece.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 166
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which instructional activity helps expand students' academic vocabulary?",
           'choices'     => json_encode([
               'Word maps',
               'Silent reading',
               'Grammar drills',
               'Dictation',
           ]),
           'answer'      => 'Word maps',
           'explanation' => 'Word maps allow students to explore definitions, synonyms, and usage.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 167
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What is the key benefit of using mentor texts in writing instruction?",
           'choices'     => json_encode([
               'Modeling effective writing features',
               'Practicing handwriting',
               'Improving spelling accuracy',
               'Conducting oral narration',
           ]),
           'answer'      => 'Modeling effective writing features',
           'explanation' => 'Mentor texts provide concrete examples of style, structure, and techniques.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 168
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which peer-based activity supports revision skills?",
           'choices'     => json_encode([
               'Peer review',
               'Spelling bee',
               'Grammar quiz',
               'Silent reading',
           ]),
           'answer'      => 'Peer review',
           'explanation' => 'Peer review encourages constructive feedback and collaborative revision.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 169
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What isWriter's Workshop and its primary focus?",
           'choices'     => json_encode([
               'A structured approach to process writing',
               'A grammar-translation method',
               'A silent reading program',
               'An exam preparation technique',
           ]),
           'answer'      => 'A structured approach to process writing',
           'explanation' => 'Writer’s Workshop provides mini-lessons, writing time, and sharing for developing skills.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 170
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which assessment form evaluates reading by requiring students to locate specific information?",
           'choices'     => json_encode([
               'Scanning task',
               'Retelling activity',
               'Free writing',
               'Dictation',
           ]),
           'answer'      => 'Scanning task',
           'explanation' => 'Scanning tasks measure students’ ability to find precise details quickly.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 171
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which genre analysis technique helps readers identify text structure?",
           'choices'     => json_encode([
               'Text mapping',
               'Silent reading',
               'Dictation',
               'Peer editing',
           ]),
           'answer'      => 'Text mapping',
           'explanation' => 'Text mapping visually outlines organizational patterns like cause-effect or compare-contrast.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 172
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What is the main goal of pre-writing activities?",
           'choices'     => json_encode([
               'Generate ideas and organize thoughts',
               'Perform grammar drills',
               'Memorize spelling',
               'Complete final draft',
           ]),
           'answer'      => 'Generate ideas and organize thoughts',
           'explanation' => 'Pre-writing tasks like brainstorming and outlining help plan writing effectively.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 173
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which writing mode focuses on conveying personal experiences and emotions?",
           'choices'     => json_encode([
               'Narrative',
               'Expository',
               'Persuasive',
               'Descriptive',
           ]),
           'answer'      => 'Narrative',
           'explanation' => 'Narrative writing tells a story or personal account with plot and characters.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 174
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which writing mode aims to explain or inform?",
           'choices'     => json_encode([
               'Expository',
               'Narrative',
               'Persuasive',
               'Poetic',
           ]),
           'answer'      => 'Expository',
           'explanation' => 'Expository writing presents facts and information clearly and logically.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 175
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which writing mode seeks to convince the reader to adopt a viewpoint?",
           'choices'     => json_encode([
               'Persuasive',
               'Descriptive',
               'Narrative',
               'Reflective',
           ]),
           'answer'      => 'Persuasive',
           'explanation' => 'Persuasive writing uses arguments and evidence to influence readers.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 176
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What is the purpose of conferencing with students during writing?",
           'choices'     => json_encode([
               'Provide individualized feedback and support',
               'Test reading speed',
               'Practice grammar rules',
               'Assign homework silently',
           ]),
           'answer'      => 'Provide individualized feedback and support',
           'explanation' => 'Writing conferences allow teachers to address specific student needs in real time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 177
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which assessment method captures students’ attitudes toward reading?",
           'choices'     => json_encode([
               'Reading logs',
               'Multiple-choice quizzes',
               'Grammar worksheets',
               'Spelling tests',
           ]),
           'answer'      => 'Reading logs',
           'explanation' => 'Reading logs provide qualitative data on interest, reflection, and engagement.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 178
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What is the function of an authentic reading task?",
           'choices'     => json_encode([
               'Expose learners to real-world texts',
               'Focus solely on textbook passages',
               'Limit vocabulary to high-frequency words',
               'Eliminate comprehension questions',
           ]),
           'answer'      => 'Expose learners to real-world texts',
           'explanation' => 'Authentic tasks use genuine materials that learners may encounter outside class.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 179
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "Which tool helps writers organize ideas visually before drafting?",
           'choices'     => json_encode([
               'Mind map',
               'Cloze test',
               'Dictation exercise',
               'Reading circle',
           ]),
           'answer'      => 'Mind map',
           'explanation' => 'Mind maps allow writers to branch out ideas and see connections.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 180
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 9,
           'question'    => "What is the primary goal of post-reading discussions?",
           'choices'     => json_encode([
               'Deepen comprehension and critical thinking',
               'Focus on spelling accuracy',
               'Practice silent reading',
               'Memorize passages verbatim',
           ]),
           'answer'      => 'Deepen comprehension and critical thinking',
           'explanation' => 'Discussion encourages analysis, interpretation, and application of text ideas.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

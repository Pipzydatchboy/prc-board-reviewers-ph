<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart1Seeder extends Seeder
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

       // 1
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "What is the primary purpose of remedial instruction in English?",
           'choices'     => json_encode([
               'To advance learners to study literature',
               'To support learners with difficulties in specific language skills',
               'To teach English for academic purposes',
               'To introduce learners to second language acquisition theories',
           ]),
           'answer'      => 'To support learners with difficulties in specific language skills',
           'explanation' => 'Remedial instruction focuses on helping learners who struggle with particular language skills.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 2
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which assessment is commonly used to identify learners in need of remedial instruction?",
           'choices'     => json_encode([
               'Placement test for advanced courses',
               'Diagnostic assessment of language skills',
               'Group project evaluation',
               'Standardized ICT proficiency exam',
           ]),
           'answer'      => 'Diagnostic assessment of language skills',
           'explanation' => 'Diagnostic assessments pinpoint specific areas where learners need support.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 3
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "What strategy uses simplified texts and step-by-step support to build reading skills?",
           'choices'     => json_encode([
               'Scaffolded reading',
               'Direct instruction',
               'Silent sustained reading',
               'Communicative language teaching',
           ]),
           'answer'      => 'Scaffolded reading',
           'explanation' => 'Scaffolded reading provides support structures to guide learners through texts.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 4
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "In remedial writing instruction, what is emphasized?",
           'choices'     => json_encode([
               'Creative storytelling techniques',
               'Sentence structure and grammar accuracy',
               'Poetic meter and rhyme',
               'Translation skills',
           ]),
           'answer'      => 'Sentence structure and grammar accuracy',
           'explanation' => 'Remedial writing focuses on basic writing mechanics and clarity.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 5
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which of the following best defines English for Specific Purposes (ESP)?",
           'choices'     => json_encode([
               'Teaching English through literature',
               'Instruction tailored to the language needs of particular fields or professions',
               'General English language courses for all learners',
               'Teaching English using multimedia tools',
           ]),
           'answer'      => 'Instruction tailored to the language needs of particular fields or professions',
           'explanation' => 'ESP focuses on specific communicative needs in a professional or academic context.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 6
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "What is the first step in designing an ESP course?",
           'choices'     => json_encode([
               'Selecting textbook materials',
               'Conducting a needs analysis of target learners',
               'Teaching general vocabulary',
               'Administering a final exam',
           ]),
           'answer'      => 'Conducting a needs analysis of target learners',
           'explanation' => 'A needs analysis identifies learners’ language requirements in their specific context.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 7
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which activity aligns with ESP methodology?",
           'choices'     => json_encode([
               'Role-play of workplace scenarios',
               'Reading classical poetry aloud',
               'Free writing on personal topics',
               'Silent reading of graded readers',
           ]),
           'answer'      => 'Role-play of workplace scenarios',
           'explanation' => 'ESP often uses authentic tasks like simulations relevant to learners’ fields.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 8
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "What term describes specialized vocabulary teaching in ESP?",
           'choices'     => json_encode([
               'Lexical approach',
               'Technical vocabulary instruction',
               'Audiolingual drills',
               'Silent vocabulary notebooks',
           ]),
           'answer'      => 'Technical vocabulary instruction',
           'explanation' => 'ESP places emphasis on field-specific lexicon and terminology.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 9
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "In remedial listening exercises, teachers often use __________ to aid comprehension.",
           'choices'     => json_encode([
               'Authentic podcasts at native speed',
               'Pre-teaching key vocabulary and using slowed audio',
               'Silent viewing of videos',
               'Translation of dialogues',
           ]),
           'answer'      => 'Pre-teaching key vocabulary and using slowed audio',
           'explanation' => 'These strategies make listening tasks more accessible for struggling learners.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 10
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which of these is a characteristic of remedial reading materials?",
           'choices'     => json_encode([
               'Complex sentence structures',
               'High frequency vocabulary and clear layout',
               'Unedited authentic texts',
               'Idiomatic expressions without support',
           ]),
           'answer'      => 'High frequency vocabulary and clear layout',
           'explanation' => 'Remedial reading materials use accessible vocabulary and supportive design.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 11
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "ESP course content is primarily driven by __________.",
           'choices'     => json_encode([
               'Textbook publisher recommendations',
               'Learners’ target situation needs',
               'General English frameworks',
               'Random topic selection by teachers',
           ]),
           'answer'      => 'Learners’ target situation needs',
           'explanation' => 'ESP tailors content to real-world contexts of the learners.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 12
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which tool is useful for diagnosing specific skill gaps in remedial instruction?",
           'choices'     => json_encode([
               'Portfolio assessment',
               'Diagnostic checklists and error analysis',
               'Group projects',
               'Oral presentations',
           ]),
           'answer'      => 'Diagnostic checklists and error analysis',
           'explanation' => 'These tools help pinpoint exact areas where learners need support.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 13
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "An ESP needs analysis typically includes __________.",
           'choices'     => json_encode([
               'Learners’ favorite literature genres',
               'Communication tasks relevant to their field',
               'General vocabulary lists',
               'Grammar rule memorization',
           ]),
           'answer'      => 'Communication tasks relevant to their field',
           'explanation' => 'ESP needs analysis focuses on real tasks learners must perform in their domain.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 14
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which approach supports learners by modeling correct language use before independent practice?",
           'choices'     => json_encode([
               'Scaffolded instruction',
               'Free conversation',
               'Error correction only',
               'Silent reading',
           ]),
           'answer'      => 'Scaffolded instruction',
           'explanation' => 'Scaffolding provides models and support before learners work independently.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 15
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "In ESP, authentic materials refer to __________.",
           'choices'     => json_encode([
               'Simplified graded readers',
               'Field-specific real-world texts and resources',
               'Invented dialogues',
               'Generic English language textbooks',
           ]),
           'answer'      => 'Field-specific real-world texts and resources',
           'explanation' => 'Authentic materials are genuine texts used in professional or academic settings.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 16
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which of these best illustrates a remedial grammar activity?",
           'choices'     => json_encode([
               'Writing creative essays',
               'Fill-in-the-blank exercises targeting specific errors',
               'Debates on current events',
               'Silent reading of novels',
           ]),
           'answer'      => 'Fill-in-the-blank exercises targeting specific errors',
           'explanation' => 'Such exercises focus on addressing particular grammatical weaknesses.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 17
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which pairing is essential in ESP course design?",
           'choices'     => json_encode([
               'Classic literature and poetry analysis',
               'Needs analysis and target situation analysis',
               'General English and creative writing',
               'Phonetics and phonology drills',
           ]),
           'answer'      => 'Needs analysis and target situation analysis',
           'explanation' => 'These analyses ensure course content matches learners’ actual needs.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 18
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "How does technology aid remedial English instruction?",
           'choices'     => json_encode([
               'By providing complex literature databases',
               'By offering interactive drills and instant feedback',
               'By replacing teachers with AI tutors entirely',
               'By focusing solely on translation apps',
           ]),
           'answer'      => 'By offering interactive drills and instant feedback',
           'explanation' => 'Educational technology tools can personalize practice and provide feedback quickly.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 19
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "Which instructional material is least appropriate for remedial learners?",
           'choices'     => json_encode([
               'Highly visual texts with diagrams',
               'Authentic field-specific manuals without support',
               'Simplified readers with glossaries',
               'Interactive vocabulary apps',
           ]),
           'answer'      => 'Authentic field-specific manuals without support',
           'explanation' => 'Unsimplified authentic manuals can overwhelm learners who need remediation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       // 20
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 1,
           'question'    => "An effective remedial reading assessment should __________.",
           'choices'     => json_encode([
               'Focus only on silent reading speed',
               'Measure comprehension and decoding skills',
               'Use only multiple-choice questions',
               'Exclude vocabulary knowledge',
           ]),
           'answer'      => 'Measure comprehension and decoding skills',
           'explanation' => 'Comprehensive assessments evaluate both understanding and decoding abilities.',
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

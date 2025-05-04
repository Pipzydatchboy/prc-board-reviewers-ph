<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart8Seeder extends Seeder
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

// 141
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which activity best promotes speaking fluency in an ESL classroom?",
    'choices'     => json_encode([
        'Role-play dialogues',
        'Grammar-translation exercises',
        'Silent reading',
        'Copying sentences',
    ]),
    'answer'      => 'Role-play dialogues',
    'explanation' => 'Role-plays simulate real communication, encouraging spontaneous speech.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 142
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "What is the purpose of pre-teaching vocabulary in remedial listening lessons?",
    'choices'     => json_encode([
        'To increase speaking accuracy',
        'To clarify key words for comprehension',
        'To assess writing skills',
        'To practice grammar drills',
    ]),
    'answer'      => 'To clarify key words for comprehension',
    'explanation' => 'Pre-teaching helps learners recognize terms before listening to the full text.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 143
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which method uses question-and-answer drills to practice listening and speaking?",
    'choices'     => json_encode([
        'Audio-lingual Method',
        'Total Physical Response',
        'Silent Way',
        'Community Language Learning',
    ]),
    'answer'      => 'Audio-lingual Method',
    'explanation' => 'The Audio-lingual Method emphasizes pattern drills through listening and repetition.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 144
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which assessment tool measures oral proficiency by having learners speak on prompts?",
    'choices'     => json_encode([
        'Oral interview',
        'Multiple-choice test',
        'Cloze reading',
        'True/false quiz',
    ]),
    'answer'      => 'Oral interview',
    'explanation' => 'Oral interviews evaluate spontaneous speaking and interactive skills.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 145
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "What technique involves students listening to recordings at slower speeds?",
    'choices'     => json_encode([
        'Slowed audio playback',
        'Silent reading',
        'Dictogloss',
        'Whispering exercise',
    ]),
    'answer'      => 'Slowed audio playback',
    'explanation' => 'Slowed playback allows struggling listeners to process speech clearly.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 146
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which classroom strategy scaffolds speaking by providing sentence starters?",
    'choices'     => json_encode([
        'Sentence frames',
        'Silent debate',
        'Dictation',
        'Grammar-translation',
    ]),
    'answer'      => 'Sentence frames',
    'explanation' => 'Sentence frames support learners by modeling target structures during speaking tasks.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 147
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "What is a benefit of using authentic audio materials?",
    'choices'     => json_encode([
        'Exposes learners to real language use',
        'Guarantees comprehension',
        'Focuses on grammar rules',
        'Eliminates need for vocabulary instruction',
    ]),
    'answer'      => 'Exposes learners to real language use',
    'explanation' => 'Authentic materials provide natural speech rhythms and vocabulary.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 148
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which peer activity enhances listening skills through summarizing spoken reports?",
    'choices'     => json_encode([
        'Listening circles',
        'Dictation race',
        'Silent reading pairs',
        'Grammar quizzes',
    ]),
    'answer'      => 'Listening circles',
    'explanation' => 'Listening circles involve students reporting what they heard to peers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 149
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which skill is being practiced when learners shadow audio recordings?",
    'choices'     => json_encode([
        'Pronunciation and fluency',
        'Writing speed',
        'Vocabulary recall',
        'Reading comprehension',
    ]),
    'answer'      => 'Pronunciation and fluency',
    'explanation' => 'Shadowing helps learners mimic pronunciation, intonation, and rhythm.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 150
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which approach integrates speaking and listening through pair interviews?",
    'choices'     => json_encode([
        'Communicative Language Teaching',
        'Audiolingual drills',
        'Silent Way',
        'Grammar-translation',
    ]),
    'answer'      => 'Communicative Language Teaching',
    'explanation' => 'CLT emphasizes real communication, such as interviews between peers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 151
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "What is the role of error correction in remedial speaking lessons?",
    'choices'     => json_encode([
        'To discourage speaking',
        'To guide learners toward accuracy',
        'To focus on writing skills',
        'To test listening speed',
    ]),
    'answer'      => 'To guide learners toward accuracy',
    'explanation' => 'Timely, constructive feedback helps learners improve correctness in speech.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 152
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which technique uses multimedia to combine audio, visuals, and text?",
    'choices'     => json_encode([
        'Blended learning',
        'Total Physical Response',
        'Dictogloss',
        'Choral repetition',
    ]),
    'answer'      => 'Blended learning',
    'explanation' => 'Blended learning integrates technology-enhanced materials for listening and speaking.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 153
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "What is the benefit of a listening preview task?",
    'choices'     => json_encode([
        'Activates background knowledge',
        'Practices writing speed',
        'Improves dictation skills only',
        'Focuses on grammar rules',
    ]),
    'answer'      => 'Activates background knowledge',
    'explanation' => 'Preview tasks help learners connect prior knowledge to new audio content.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 154
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which tool can record and playback student speaking for self-assessment?",
    'choices'     => json_encode([
        'Language laboratory',
        'Overhead projector',
        'Silent reading corner',
        'Grammar workbook',
    ]),
    'answer'      => 'Language laboratory',
    'explanation' => 'Language labs allow learners to record, listen, and reflect on their spoken output.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 155
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "In speaking assessment, what does a rubrics-based approach provide?",
    'choices'     => json_encode([
        'Subjective feedback',
        'Clear criteria for performance levels',
        'Only grammar correction',
        'Timed writing tasks',
    ]),
    'answer'      => 'Clear criteria for performance levels',
    'explanation' => 'Rubrics detail dimensions like fluency, accuracy, and organization for fair assessment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 156
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which classroom arrangement supports interactive speaking tasks?",
    'choices'     => json_encode([
        'U-shaped seating',
        'Rows facing forward',
        'Silent individual desks',
        'Empty center circle',
    ]),
    'answer'      => 'U-shaped seating',
    'explanation' => 'U-shaped layouts allow eye contact and group discussion among learners.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 157
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which listening task asks learners to fill in missing words?",
    'choices'     => json_encode([
        'Cloze dictation',
        'Information transfer',
        'True/false exercise',
        'Silent viewing',
    ]),
    'answer'      => 'Cloze dictation',
    'explanation' => 'Cloze dictation tests listening comprehension by omitting key words for learners to supply.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 158
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "What does an interactive listening task involve?",
    'choices'     => json_encode([
        'Notetaking during monologue',
        'Pair discussions based on audio prompt',
        'Silent comprehension',
        'Written grammar analysis',
    ]),
    'answer'      => 'Pair discussions based on audio prompt',
    'explanation' => 'Interactive tasks require learners to respond and negotiate meaning with peers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 159
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Which listening strategy teaches learners to predict content?",
    'choices'     => json_encode([
        'Scanning',
        'Guessing from context',
        'Silent reading',
        'Word-by-word translation',
    ]),
    'answer'      => 'Guessing from context',
    'explanation' => 'Predicting helps learners anticipate meaning and maintain focus.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 160
$batch[] = [
    'subject_id'  => 10,
    'part'        => 8,
    'question'    => "Why is feedback important in speaking activities?",
    'choices'     => json_encode([
        'To correct all errors immediately',
        'To encourage reflection and improvement',
        'To focus only on fluency',
        'To grade silently',
    ]),
    'answer'      => 'To encourage reflection and improvement',
    'explanation' => 'Constructive feedback guides learners to self-monitor and develop skills.',
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

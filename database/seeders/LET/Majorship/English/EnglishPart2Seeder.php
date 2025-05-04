<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart2Seeder extends Seeder
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
       
     // 21
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "What does the term 'linguistics' primarily study?",
    'choices'     => json_encode([
        'Ancient literary works',
        'Structure and use of language',
        'Methods of teaching grammar',
        'Translation techniques',
    ]),
    'answer'      => 'Structure and use of language',
    'explanation' => 'Linguistics is the scientific study of language structure and use.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 22
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Which subfield of linguistics deals with speech sounds?",
    'choices'     => json_encode([
        'Syntax',
        'Phonetics',
        'Semantics',
        'Pragmatics',
    ]),
    'answer'      => 'Phonetics',
    'explanation' => 'Phonetics studies the physical properties of speech sounds.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 23
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Phonology is the study of __________ within a particular language.",
    'choices'     => json_encode([
        'Sound production in the vocal tract',
        'Meaning of words and sentences',
        'Sound patterns and systems',
        'Social language use',
    ]),
    'answer'      => 'Sound patterns and systems',
    'explanation' => 'Phonology examines how sounds function and pattern in a language.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 24
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Morphology studies the structure of __________.",
    'choices'     => json_encode([
        'Words and their parts',
        'Sentence meaning in context',
        'Language in social settings',
        'Sound articulation',
    ]),
    'answer'      => 'Words and their parts',
    'explanation' => 'Morphology analyzes the formation and structure of words.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 25
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Syntax is primarily concerned with __________.",
    'choices'     => json_encode([
        'Sound patterns',
        'Word formation',
        'Sentence structure',
        'Word meaning',
    ]),
    'answer'      => 'Sentence structure',
    'explanation' => 'Syntax studies how words combine to form sentences.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 26
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Semantics deals with __________.",
    'choices'     => json_encode([
        'Social language rules',
        'Meaning of words and sentences',
        'Language change over time',
        'Physical speech production',
    ]),
    'answer'      => 'Meaning of words and sentences',
    'explanation' => 'Semantics focuses on meaning in language.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 27
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Pragmatics examines __________.",
    'choices'     => json_encode([
        'Historical language change',
        'Language use in context',
        'Sound inventory of a language',
        'Grammatical rules',
    ]),
    'answer'      => 'Language use in context',
    'explanation' => 'Pragmatics studies how context influences meaning.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 28
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Which branch of linguistics studies language variation and social factors?",
    'choices'     => json_encode([
        'Psycholinguistics',
        'Sociolinguistics',
        'Applied Linguistics',
        'Historical Linguistics',
    ]),
    'answer'      => 'Sociolinguistics',
    'explanation' => 'Sociolinguistics examines how language varies with social factors.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 29
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Psycholinguistics focuses on __________.",
    'choices'     => json_encode([
        'Language teaching methods',
        'Cognitive processes of language use and acquisition',
        'Sound inventory of languages',
        'Social context of language',
    ]),
    'answer'      => 'Cognitive processes of language use and acquisition',
    'explanation' => 'Psycholinguistics studies mental processes underlying language.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 30
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Diachronic linguistics studies __________.",
    'choices'     => json_encode([
        'Language structure at a single point in time',
        'Language change over historical time',
        'Sentence meaning in context',
        'Word formation rules',
    ]),
    'answer'      => 'Language change over historical time',
    'explanation' => 'Diachronic linguistics examines language evolution.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 31
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Synchronic linguistics analyzes language __________.",
    'choices'     => json_encode([
        'Change over centuries',
        'At a specific moment in time',
        'Through multiple dialects',
        'In a social context',
    ]),
    'answer'      => 'At a specific moment in time',
    'explanation' => 'Synchronic studies language without regard to historical development.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 32
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "The distinction between 'competence' and 'performance' was proposed by __________.",
    'choices'     => json_encode([
        'Noam Chomsky',
        'Leonard Bloomfield',
        'Ferdinand de Saussure',
        'Edward Sapir',
    ]),
    'answer'      => 'Noam Chomsky',
    'explanation' => 'Chomsky introduced competence vs. performance in generative grammar.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 33
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Universal Grammar theory suggests __________.",
    'choices'     => json_encode([
        'All languages share fundamental principles',
        'Language is learned solely through imitation',
        'Grammar is a social construct',
        'Language change is unpredictable',
    ]),
    'answer'      => 'All languages share fundamental principles',
    'explanation' => 'Universal Grammar posits innate linguistic structures common to all languages.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 34
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Descriptive linguistics aims to __________.",
    'choices'     => json_encode([
        'Prescribe correct language use',
        'Describe how language is actually used',
        'Standardize grammar rules',
        'Translate texts accurately',
    ]),
    'answer'      => 'Describe how language is actually used',
    'explanation' => 'Descriptive linguistics records language use without judgment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 35
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Prescriptive linguistics __________.",
    'choices'     => json_encode([
        'Studies language in context',
        'Dictates how language should be used',
        'Analyzes sound patterns',
        'Examines cognitive processes',
    ]),
    'answer'      => 'Dictates how language should be used',
    'explanation' => 'Prescriptive linguistics enforces rules for proper language.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 36
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Which unit is the smallest meaning-bearing element of language?",
    'choices'     => json_encode([
        'Phoneme',
        'Morpheme',
        'Allophone',
        'Lexeme',
    ]),
    'answer'      => 'Morpheme',
    'explanation' => 'A morpheme is the smallest unit that carries meaning.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 37
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Acoustic phonetics deals with __________.",
    'choices'     => json_encode([
        'Articulation of sounds',
        'Physical properties of sound waves',
        'Social functions of language',
        'Structure of sentences',
    ]),
    'answer'      => 'Physical properties of sound waves',
    'explanation' => 'Acoustic phonetics studies the physical characteristics of sound waves.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 38
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "What does the term 'register' refer to in sociolinguistics?",
    'choices'     => json_encode([
        'Contextual language variation',
        'Historical language stages',
        'Sound patterns',
        'Grammatical transformations',
    ]),
    'answer'      => 'Contextual language variation',
    'explanation' => 'Register refers to variations in language use depending on context and purpose.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 39
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Which branch of linguistics focuses on language analysis in legal contexts?",
    'choices'     => json_encode([
        'Teaching methodology',
        'Translation studies',
        'Forensic linguistics',
        'Cognitive linguistics',
    ]),
    'answer'      => 'Forensic linguistics',
    'explanation' => 'Forensic linguistics applies linguistic analysis to legal evidence and proceedings.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 40
$batch[] = [
    'subject_id'  => 10,
    'part'        => 2,
    'question'    => "Which field applies linguistic knowledge to solve practical language problems?",
    'choices'     => json_encode([
        'Theoretical linguistics',
        'Historical linguistics',
        'Applied linguistics',
        'Descriptive linguistics',
    ]),
    'answer'      => 'Applied linguistics',
    'explanation' => 'Applied linguistics uses linguistic research to address real-world language issues.',
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

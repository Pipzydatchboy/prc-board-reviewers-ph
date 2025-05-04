<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart4Seeder extends Seeder
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

       // 61
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What does stylistics primarily analyze in a text?",
           'choices'     => json_encode([
               'Historical context',
               'Author biography',
               'Language use and style',
               'Publishing details',
           ]),
           'answer'      => 'Language use and style',
           'explanation' => 'Stylistics examines linguistic choices and their effects on meaning and style.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 62
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which figure of speech compares two things using 'like' or 'as'?",
           'choices'     => json_encode([
               'Metaphor',
               'Simile',
               'Personification',
               'Alliteration',
           ]),
           'answer'      => 'Simile',
           'explanation' => "A simile uses 'like' or 'as' to make a comparison.",
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 63
       $batch[] = [
        'subject_id'  => 10,
        'part'        => 4,
        'question'    => "How does a metaphor differ from a simile?",
        'choices'     => json_encode([
            "Uses 'like' or 'as'",
            'Directly states comparison',
            'Uses repetition',
            'Involves sound patterns',
        ]),
        'answer'      => 'Directly states comparison',
        'explanation' => "A metaphor states that one thing is another without using 'like' or 'as'.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 64
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What is personification?",
           'choices'     => json_encode([
               'Giving human qualities to non-human things',
               'Exaggeration for effect',
               'A question not expecting an answer',
               'Repetition of consonant sounds',
           ]),
           'answer'      => 'Giving human qualities to non-human things',
           'explanation' => 'Personification attributes human traits to animals, objects, or ideas.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 65
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which device features the repetition of initial consonant sounds?",
           'choices'     => json_encode([
               'Alliteration',
               'Assonance',
               'Consonance',
               'Onomatopoeia',
           ]),
           'answer'      => 'Alliteration',
           'explanation' => 'Alliteration repeats initial consonant sounds in nearby words.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 66
       $batch[] = [
        'subject_id'  => 10,
        'part'        => 4,
        'question'    => "What is onomatopoeia?",
        'choices'     => json_encode([
            'Words that imitate sounds',
            'Extended metaphor',
            'Unexpected twist',
            'Literal description',
        ]),
        'answer'      => 'Words that imitate sounds',
        'explanation' => "Onomatopoeia uses words like 'buzz' or 'clang' to mimic sounds.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 67
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which term refers to an author's choice of words?",
           'choices'     => json_encode([
               'Syntax',
               'Diction',
               'Tone',
               'Register',
           ]),
           'answer'      => 'Diction',
           'explanation' => 'Diction is the selection of words and phrases in speech or writing.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 68
       $batch[] = [
        'subject_id'  => 10,
        'part'        => 4,
        'question'    => "What is tone in stylistic analysis?",
        'choices'     => json_encode([
            'Grammatical correctness',
            'Writer\'s attitude toward subject',
            'Length of sentences',
            'Number of paragraphs',
        ]),
        'answer'      => 'Writer\'s attitude toward subject',
        'explanation' => 'Tone reflects the speaker\'s or writer\'s attitude.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 69
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What does register describe?",
           'choices'     => json_encode([
               'Theme of the text',
               'Level of formality in language use',
               'Sound patterns',
               'Text length',
           ]),
           'answer'      => 'Level of formality in language use',
           'explanation' => 'Register indicates how formal or informal the language is.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 70
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which cohesive device uses pronouns to refer back to earlier words?",
           'choices'     => json_encode([
               'Reference',
               'Substitution',
               'Ellipsis',
               'Conjunction',
           ]),
           'answer'      => 'Reference',
           'explanation' => 'Reference uses pronouns or demonstratives to connect sentences.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 71
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What is the function of ellipsis in cohesion?",
           'choices'     => json_encode([
               'Replacing repeated words',
               'Adding extra clauses',
               'Changing tone',
               'Enhancing imagery',
           ]),
           'answer'      => 'Replacing repeated words',
           'explanation' => 'Ellipsis omits words that are understood from context.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 72
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What's the difference between connotation and denotation?",
           'choices'     => json_encode([
               'Connotation is literal; denotation is emotional',
               'Denotation is literal meaning; connotation is associated feelings',
               'Both are identical',
               'Both refer to dictionary definitions',
           ]),
           'answer'      => 'Denotation is literal meaning; connotation is associated feelings',
           'explanation' => 'Denotation is the strict dictionary meaning, connotation includes emotional associations.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 73
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which rhetorical device is an exaggeration for emphasis?",
           'choices'     => json_encode([
               'Understatement',
               'Hyperbole',
               'Metonymy',
               'Oxymoron',
           ]),
           'answer'      => 'Hyperbole',
           'explanation' => 'Hyperbole uses deliberate exaggeration for effect.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 74
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What is a rhetorical question?",
           'choices'     => json_encode([
               'A question expecting no answer',
               'A question demanding a literal answer',
               'A question about grammar',
               'A question using correct syntax',
           ]),
           'answer'      => 'A question expecting no answer',
           'explanation' => 'Rhetorical questions emphasize a point rather than elicit an answer.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 75
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which device involves repeating words at the beginning of successive clauses?",
           'choices'     => json_encode([
               'Anaphora',
               'Euphemism',
               'Litotes',
               'Synecdoche',
           ]),
           'answer'      => 'Anaphora',
           'explanation' => 'Anaphora repeats a word or phrase at the start of successive sentences or clauses.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 76
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What is imagery in literature?",
           'choices'     => json_encode([
               'Logical argument',
               'Descriptive language that appeals to senses',
               'Author’s background',
               'Plot summary',
           ]),
           'answer'      => 'Descriptive language that appeals to senses',
           'explanation' => 'Imagery uses sensory detail to create mental pictures.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 77
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which stylistic element conveys a text’s emotional atmosphere?",
           'choices'     => json_encode([
               'Mood',
               'Syntax',
               'Diction',
               'Cohesion',
           ]),
           'answer'      => 'Mood',
           'explanation' => 'Mood is the emotional ambiance the reader experiences.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 78
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "What is irony in a stylistic context?",
           'choices'     => json_encode([
               'Literal statement',
               'Use of words to convey opposite meaning',
               'Long descriptive passage',
               'Repetitive structure',
           ]),
           'answer'      => 'Use of words to convey opposite meaning',
           'explanation' => 'Irony expresses a meaning contrary to the literal words.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 79
       $batch[] = [
        'subject_id'  => 10,
        'part'        => 4,
        'question'    => "What does litotes express?",
        'choices'     => json_encode([
            'An extreme exaggeration',
            'An understatement using negation',
            'A direct question',
            'A narrative shift',
        ]),
        'answer'      => 'An understatement using negation',
        "explanation" => "Litotes understates by negating the opposite (e.g., 'not bad' for 'good').",
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 80
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 4,
           'question'    => "Which term describes the overall way a writer uses language?",
           'choices'     => json_encode([
               'Style',
               'Tone',
               'Mood',
               'Register',
           ]),
           'answer'      => 'Style',
           'explanation' => 'A writer’s style is their distinctive use of language and expression.',
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

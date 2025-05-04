<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart3Seeder extends Seeder
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

       // 41
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "What is the smallest grammatical unit that can stand alone as a sentence?",
           'choices'     => json_encode([
               'Independent clause',
               'Phrase',
               'Morpheme',
               'Word',
           ]),
           'answer'      => 'Independent clause',
           'explanation' => 'An independent clause contains a subject and predicate and can stand alone as a sentence.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 42
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which morphology term describes the study of word formation?",
           'choices'     => json_encode([
               'Phonology',
               'Syntax',
               'Morphology',
               'Semantics',
           ]),
           'answer'      => 'Morphology',
           'explanation' => 'Morphology analyzes how words are formed from morphemes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 43
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "In the sentence 'The cat sat on the mat,' what is 'on the mat'?",
           'choices'     => json_encode([
               'Subject',
               'Verb phrase',
               'Prepositional phrase',
               'Independent clause',
           ]),
           'answer'      => 'Prepositional phrase',
           'explanation' => "'On the mat' consists of a preposition and its object, forming a prepositional phrase.",
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 44
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which choice correctly describes a run-on sentence?",
           'choices'     => json_encode([
               'Two independent clauses joined by a comma without a conjunction',
               'A clause missing a subject',
               'A sentence containing a subordinate clause',
               'A phrase used incorrectly as a clause',
           ]),
           'answer'      => 'Two independent clauses joined by a comma without a conjunction',
           'explanation' => 'A run-on (comma splice) occurs when clauses are improperly joined by a comma alone.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 45
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Identify the direct object in: 'She writes letters every day.'",
           'choices'     => json_encode([
               'She',
               'Writes',
               'Letters',
               'Every day',
           ]),
           'answer'      => 'Letters',
           'explanation' => '"Letters" receives the action of writing, making it the direct object.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 46
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which term labels a word that modifies a noun?",
           'choices'     => json_encode([
               'Verb',
               'Adverb',
               'Adjective',
               'Pronoun',
           ]),
           'answer'      => 'Adjective',
           'explanation' => 'Adjectives describe or modify nouns.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 47
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "What is the function of a subordinating conjunction?",
           'choices'     => json_encode([
               'Join two independent clauses equally',
               'Introduce and connect a subordinate clause to a main clause',
               'Replace a noun in a sentence',
               'Link a noun and its modifier',
           ]),
           'answer'      => 'Introduce and connect a subordinate clause to a main clause',
           'explanation' => 'Subordinating conjunctions (e.g., because, although) link subordinate clauses to main clauses.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 48
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which sentence demonstrates correct subject-verb agreement?",
           'choices'     => json_encode([
               'The list of items are on the desk.',
               'The team is winning the match.',
               'Her friends prefers pizza.',
               'Each of them have a book.',
           ]),
           'answer'      => 'The team is winning the match.',
           'explanation' => '"Team" is a collective noun treated as singular, so it takes "is."',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 49
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Identify the infinitive form in: 'They hope to finish soon.'",
           'choices'     => json_encode([
               'They hope',
               'To finish',
               'Finish soon',
               'Hope to',
           ]),
           'answer'      => 'To finish',
           'explanation' => '"To finish" is an infinitive verb form.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 50
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which choice correctly identifies a gerund?",
           'choices'     => json_encode([
               'Running fast is fun.',
               'Run fast is fun.',
               'To run fast is fun.',
               'Ran fast was fun.',
           ]),
           'answer'      => 'Running fast is fun.',
           'explanation' => '"Running" functions as a noun (gerund) in the subject position.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 51
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "In morphology, which term describes a word that cannot be broken into smaller meaningful parts?",
           'choices'     => json_encode([
               'Complex word',
               'Morpheme',
               'Root',
               'Monomorphemic word',
           ]),
           'answer'      => 'Monomorphemic word',
           'explanation' => 'A monomorphemic word consists of a single morpheme only.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 52
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which punctuation error occurs when two independent clauses are joined without any punctuation or conjunction?",
           'choices'     => json_encode([
               'Comma splice',
               'Fused sentence',
               'Fragment',
               'Misplaced modifier',
           ]),
           'answer'      => 'Fused sentence',
           'explanation' => 'A fused sentence has no punctuation or conjunction between clauses.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 53
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which structure is a noun phrase?",
           'choices'     => json_encode([
               'Under the bridge',
               'The bright red car',
               'Quickly and quietly',
               'When he arrives',
           ]),
           'answer'      => 'The bright red car',
           'explanation' => 'It centers around the noun "car" with modifiers, forming a noun phrase.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 54
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "What is the primary difference between a clause and a phrase?",
           'choices'     => json_encode([
               'Clauses contain a subject and verb; phrases do not',
               'Phrases always stand alone as sentences; clauses do not',
               'Clauses are shorter than phrases',
               'Phrases express complete thoughts; clauses do not',
           ]),
           'answer'      => 'Clauses contain a subject and verb; phrases do not',
           'explanation' => 'A clause must have both a subject and verb; a phrase lacks one or both.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 55
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Identify the passive voice sentence:",
           'choices'     => json_encode([
               'The chef cooked a meal.',
               'A meal was cooked by the chef.',
               'The chef will cook a meal.',
               'The chef is cooking a meal.',
           ]),
           'answer'      => 'A meal was cooked by the chef.',
           'explanation' => 'Passive voice places the object first and the agent after the verb.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 56
       $batch[] = [
        'subject_id'  => 10,
        'part'        => 3,
        'question'    => "Which of the following is an example of a compound-complex sentence?",
        'choices'     => json_encode([
            'I went to the store, and I bought milk after work because I was thirsty.',
            'She sings beautifully.',
            'Running every morning keeps me fit.',
            'The sun sets.',
        ]),
        'answer'      => 'I went to the store, and I bought milk after work because I was thirsty.',
        'explanation' => 'A compound-complex sentence has at least two independent clauses and one dependent clause.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 57
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "What is the term for words like 'and', 'but', and 'or'?",
           'choices'     => json_encode([
               'Conjunctions',
               'Interjections',
               'Prepositions',
               'Particles',
           ]),
           'answer'      => 'Conjunctions',
           'explanation' => 'Conjunctions link words, phrases, or clauses.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 58
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which form shows correct comparative adjective usage?",
           'choices'     => json_encode([
               'More fast',
               'Fastest',
               'Faster',
               'Most fastest',
           ]),
           'answer'      => 'Faster',
           'explanation' => '"Faster" is the correct comparative form of "fast."',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 59
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Identify the function of an appositive:",
           'choices'     => json_encode([
               'Modify a verb',
               'Provide additional information about a noun',
               'Replace a noun',
               'Link clauses together',
           ]),
           'answer'      => 'Provide additional information about a noun',
           'explanation' => 'An appositive renames or adds detail to a noun beside it.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 60
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 3,
           'question'    => "Which term describes a verb form used as an adjective?",
           'choices'     => json_encode([
               'Infinitive',
               'Participle',
               'Gerund',
               'Preposition',
           ]),
           'answer'      => 'Participle',
           'explanation' => 'Participles function as adjectives modifying nouns.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

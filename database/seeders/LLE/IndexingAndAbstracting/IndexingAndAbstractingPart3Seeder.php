<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart3Seeder extends Seeder
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

       $batch = [
        // 1
        ['subject_id'=>52,'part'=>3,'question'=>'What is an inverted index used for in information retrieval?','choices'=>json_encode(['Map terms to document identifiers','List authors alphabetically','Catalogue images','Generate abstracts']),'answer'=>'Map terms to document identifiers','explanation'=>'Inverted indexes store terms with pointers to documents where they occur.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>3,'question'=>'Which abstract type is typically used for databases to facilitate rapid scanning of content?','choices'=>json_encode(['Informative abstract','Descriptive abstract','Critical abstract','Indicative abstract']),'answer'=>'Indicative abstract','explanation'=>'Indicative abstracts outline scope and purpose without detailed results.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>3,'question'=>'What does KWIC stand for in indexing?','choices'=>json_encode(['Keyword In Context','Knowledge With Indexed Codes','Key Words In Citations','Keyword Wide Indexing']),'answer'=>'Keyword In Context','explanation'=>'KWIC displays each keyword with its surrounding text for context.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>3,'question'=>'Which method groups related index terms under a common entry?','choices'=>json_encode(['See references','Alphabetical ordering','Hierarchical clustering','Chronological listing']),'answer'=>'See references','explanation'=>'See references direct users from one term to a related preferred term.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>3,'question'=>'Which tool assesses abstract readability and length compliance?','choices'=>json_encode(['Abstract quality checker','MARC editor','OPAC','Thesaurus']),'answer'=>'Abstract quality checker','explanation'=>'Quality checkers enforce length and clarity guidelines for abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>3,'question'=>'What is the function of a stop-word list in automatic indexing?','choices'=>json_encode(['Exclude common insignificant words','Include all words','Bind records','Sort terms']),'answer'=>'Exclude common insignificant words','explanation'=>'Stop-word lists filter out words like "and" or "the" to improve index quality.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>3,'question'=>'Which abstract element specifies the methodology used?','choices'=>json_encode(['Methods section','Results section','Title','Keywords']),'answer'=>'Methods section','explanation'=>'Effective abstracts briefly describe research methods to inform readers.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>3,'question'=>'Which index type provides page numbers for terms only in illustrations?','choices'=>json_encode(['Illustration index','Subject index','Author index','Keyword index']),'answer'=>'Illustration index','explanation'=>'Illustration indexes list figures and plates by page number.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>3,'question'=>'What is concordance generation?','choices'=>json_encode(['Creating an alphabetical list of word occurrences','Abstracting content','Binding volumes','Cataloguing series']),'answer'=>'Creating an alphabetical list of word occurrences','explanation'=>'Concordances enumerate every instance of specified words in a text.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>3,'question'=>'Which process improves index consistency across multiple documents?','choices'=>json_encode(['Controlled vocabulary application','Full-text scanning','Random term assignment','Page numbering']),'answer'=>'Controlled vocabulary application','explanation'=>'Using predefined terms ensures uniform indexing across collections.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>3,'question'=>'What does selective indexing involve?','choices'=>json_encode(['Indexing only key concepts','Indexing all terms','Abstracting summaries','Cataloguing metadata']),'answer'=>'Indexing only key concepts','explanation'=>'Selective indexing focuses on major topics to maintain concise indexes.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>3,'question'=>'Which tool extracts key sentences for automatic abstracting?','choices'=>json_encode(['Natural Language Processor','Barcode scanner','Link resolver','MARC editor']),'answer'=>'Natural Language Processor','explanation'=>'NLP algorithms identify and extract salient sentences for abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>3,'question'=>'Which element is not typically included in an abstract?','choices'=>json_encode(['Table of contents','Conclusion','Objective','Results']),'answer'=>'Table of contents','explanation'=>'Abstracts do not include tables of contents, only summary elements.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>3,'question'=>'What is relative location indexing?','choices'=>json_encode(['Indexing by paragraph or line number','Indexing by page only','Abstract generation','Citation tracking']),'answer'=>'Indexing by paragraph or line number','explanation'=>'Relative location indexing points to precise positions within documents.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>3,'question'=>'Which feature in indexing software allows bulk term import?','choices'=>json_encode(['Batch import','Single entry only','Chart generation','Annotation']),'answer'=>'Batch import','explanation'=>'Batch import automates adding multiple index terms at once.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>3,'question'=>'Which abstract type is suitable for legal case summaries?','choices'=>json_encode(['Informative abstract','Descriptive abstract','Critical abstract','Indicative abstract']),'answer'=>'Informative abstract','explanation'=>'Informative abstracts include detailed findings, appropriate for legal contexts.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>3,'question'=>'What is the purpose of a phrase index?','choices'=>json_encode(['Index multi-word terms as units','Separate words alphabetically','Abstract content','Weed records']),'answer'=>'Index multi-word terms as units','explanation'=>'Phrase indexes list compound terms like "climate change" as single entries.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>3,'question'=>'Which standard guides quality control in manual indexing?','choices'=>json_encode(['ISO 999','MARC21','Dublin Core','PREMIS']),'answer'=>'ISO 999','explanation'=>'ISO 999 specifies principles and rules for indexing.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>3,'question'=>'Which abstract type omits methodology and results?','choices'=>json_encode(['Indicative abstract','Informative abstract','Critical abstract','Bibliographic abstract']),'answer'=>'Indicative abstract','explanation'=>'Indicative abstracts focus on topics and scope without detailed data.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>3,'question'=>'What is term stemming in automatic indexing?','choices'=>json_encode(['Reducing words to root forms','Adding page numbers','Abstract summarization','Cataloguing authors']),'answer'=>'Reducing words to root forms','explanation'=>'Stemming algorithms normalize different word forms to a common root.', 'created_at'=>$now,'updated_at'=>$now],
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

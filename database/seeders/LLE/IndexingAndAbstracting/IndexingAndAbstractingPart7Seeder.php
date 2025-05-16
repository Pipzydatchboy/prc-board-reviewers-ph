<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart7Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>7,'question'=>'Which index type is generated automatically by analyzing document metadata fields?','choices'=>json_encode(['Metadata index','Subject index','Author index','Citation index']),'answer'=>'Metadata index','explanation'=>'Metadata indexes are built from structured metadata like titles and keywords.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>7,'question'=>'What does dynamic abstracting enable for online publications?','choices'=>json_encode(['User-customized summaries','Fixed print abstracts','Manual annotations','Page numbering']),'answer'=>'User-customized summaries','explanation'=>'Dynamic abstracting lets users select level of detail for summaries.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>7,'question'=>'Which index entry guides the reader to related concept clusters?','choices'=>json_encode(['See also references','Page numbers','Abstract text','Author list']),'answer'=>'See also references','explanation'=>'See also references direct users to related or narrower concept clusters.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>7,'question'=>'Which abstract type is designed for patent documents?','choices'=>json_encode(['Bibliographic abstract','Descriptive abstract','Critical abstract','Indicative abstract']),'answer'=>'Bibliographic abstract','explanation'=>'Patent abstracts summarize key claims and technical details for quick review.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>7,'question'=>'Which process uses co-word analysis for indexing?','choices'=>json_encode(['Bibliometric indexing','Chronological indexing','Alphabetical indexing','Descriptive indexing']),'answer'=>'Bibliometric indexing','explanation'=>'Bibliometric indexing analyzes co-occurrence of words to reveal term relationships.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>7,'question'=>'What is the function of a boundary descriptor in abstracts?','choices'=>json_encode(['Defines scope limits','Provides author info','Gives page numbers','Lists related works']),'answer'=>'Defines scope limits','explanation'=>'Boundary descriptors specify time, location, or subject limits of content.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>7,'question'=>'Which tool supports extraction of key phrases for indexing?','choices'=>json_encode(['Text mining software','Barcode scanner','RFID reader','OPAC']),'answer'=>'Text mining software','explanation'=>'Text mining tools extract significant phrases to suggest index entries.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>7,'question'=>'Which abstract element is mandatory in PRC submissions?','choices'=>json_encode(['Objective statement','Author biography','Publisher detail','Page count']),'answer'=>'Objective statement','explanation'=>'PRC abstracts require a clear statement of study objectives.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>7,'question'=>'Which indexing depth level covers sub-subject entries?','choices'=>json_encode(['Deep index','Shallow index','Surface index','Basic index']),'answer'=>'Deep index','explanation'=>'Deep indexing includes multiple levels of subentries for detailed granularity.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>7,'question'=>'What is the purpose of parallel indexing?','choices'=>json_encode(['Apply multiple vocabularies simultaneously','Single vocabulary only','Abstracting purposes','Binding guides']),'answer'=>'Apply multiple vocabularies simultaneously','explanation'=>'Parallel indexing uses different controlled vocabularies in tandem for retrieval.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>7,'question'=>'Which abstract format is commonly used in biomedical journals?','choices'=>json_encode(['IMRaD structure','Descriptive abstract','Critical abstract','Indicative abstract']),'answer'=>'IMRaD structure','explanation'=>'IMRaD (Introduction, Methods, Results, Discussion) is standard in biomedical abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>7,'question'=>'Which process refines synonym rings using term frequency?','choices'=>json_encode(['Statistical synonym control','Manual thesaurus update','Page numbering','Abstract trimming']),'answer'=>'Statistical synonym control','explanation'=>'Statistical methods detect synonym usage patterns to refine synonym rings.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>7,'question'=>'What does cross-language indexing enable?','choices'=>json_encode(['Retrieval across different languages','Single language only','Abstracts generation','Citation indexing']),'answer'=>'Retrieval across different languages','explanation'=>'Cross-language indexing maps terms between languages for multilingual search.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>7,'question'=>'Which index entry lists thematic clusters with a general heading?','choices'=>json_encode(['Umbrella heading','Individual term','Page number','Citation']),'answer'=>'Umbrella heading','explanation'=>'Umbrella headings group related thematic subentries under one general term.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>7,'question'=>'Which technique enhances abstracts by applying topic modeling?','choices'=>json_encode(['Automated thematic abstracting','Manual summarization','Citation breakdown','Direct quoting']),'answer'=>'Automated thematic abstracting','explanation'=>'Topic modeling algorithms identify themes to structure abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>7,'question'=>'What is the role of a scope note in indexing?','choices'=>json_encode(['Defines term usage boundaries','Generates abstracts','Page numbering','Controls access']),'answer'=>'Defines term usage boundaries','explanation'=>'Scope notes clarify how and where to apply index terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>7,'question'=>'Which service provides real-time index updates for digital libraries?','choices'=>json_encode(['Live indexing service','Static back-of-book index','Abstract repository','Citation tracker']),'answer'=>'Live indexing service','explanation'=>'Live indexing updates indexes instantly as content is added or modified.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>7,'question'=>'Which abstract method uses summarization by extraction of key sentences?','choices'=>json_encode(['Extractive summarization','Abstractive summarization','Manual writing','Keyword listing']),'answer'=>'Extractive summarization','explanation'=>'Extractive summarization selects and orders key sentences from the text.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>7,'question'=>'Which component of indexing software assists in term clustering?','choices'=>json_encode(['Cluster analysis module','Barcode tracker','RFID locator','Page viewer']),'answer'=>'Cluster analysis module','explanation'=>'Cluster modules group semantically related terms automatically.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>7,'question'=>'What is the function of an abstracting guideline manual?','choices'=>json_encode(['Provide standards and examples','Index terms','Page numbering','Manage circulation']),'answer'=>'Provide standards and examples','explanation'=>'Guideline manuals offer best practices and templates for writing abstracts.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

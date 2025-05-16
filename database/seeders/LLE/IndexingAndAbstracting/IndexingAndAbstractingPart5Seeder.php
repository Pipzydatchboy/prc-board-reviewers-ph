<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart5Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>5,'question'=>'Which indexing method uses natural language keywords extracted automatically?','choices'=>json_encode(['Automatic keyword extraction','Manual subject analysis','Citation chaining','Faceted method']),'answer'=>'Automatic keyword extraction','explanation'=>'Algorithms identify and index keywords directly from the text.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>5,'question'=>'Which abstract element aids in determining relevance quickly?','choices'=>json_encode(['Keywords list','Author affiliation','Publisher logo','Table of contents']),'answer'=>'Keywords list','explanation'=>'Keywords highlight main topics for rapid relevance assessment.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>5,'question'=>'What is thesaurus-based indexing?','choices'=>json_encode(['Term assignment using controlled vocabulary','Free-text tagging','Automatic summarization','Hierarchical cataloging']),'answer'=>'Term assignment using controlled vocabulary','explanation'=>'Indexers select terms from a thesaurus to ensure consistency.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>5,'question'=>'Which tool supports semantic indexing by understanding context?','choices'=>json_encode(['AI-based indexer','OPAC search','Barcode scanner','MARC editor']),'answer'=>'AI-based indexer','explanation'=>'AI indexers apply NLP to interpret meaning and context.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>5,'question'=>'Which abstract type is most appropriate for conference proceedings?','choices'=>json_encode(['Descriptive abstract','Critical abstract','Informative abstract','Indicative abstract']),'answer'=>'Descriptive abstract','explanation'=>'Conference proceedings often use descriptive abstracts summarizing scope.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>5,'question'=>'What does term normalization achieve in indexing?','choices'=>json_encode(['Standardizes word forms','Removes punctuation','Adds page numbers','Creates abstracts']),'answer'=>'Standardizes word forms','explanation'=>'Normalization converts variants to a common base for consistent retrieval.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>5,'question'=>'Which index entry uses a cross-reference?','choices'=>json_encode(['See term','Page number only','Author name only','Abstract text']),'answer'=>'See term','explanation'=>'Cross-references direct users to related preferred terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>5,'question'=>'What is deep indexing?','choices'=>json_encode(['Indexing at paragraph or section level','Indexing only titles','Shallow keyword indexing','Abstract creation']),'answer'=>'Indexing at paragraph or section level','explanation'=>'Deep indexing provides precise location within finer text segments.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>5,'question'=>'Which metadata standard supports abstract exchange?','choices'=>json_encode(['MODS','MARC21','PREMIS','METADATA']),'answer'=>'MODS','explanation'=>'Metadata Object Description Schema includes abstract elements for exchange.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>5,'question'=>'Which practice enhances discoverability by adding synonyms?','choices'=>json_encode(['Synonym ring','Weeding','Binding','Classification']),'answer'=>'Synonym ring','explanation'=>'Synonym rings group terms so searches retrieve variant forms.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>5,'question'=>'What does parametrized abstracting mean?','choices'=>json_encode(['Abstracts with structured fields','Free-text abstracts','Manual abstracts','Digital abstracts']),'answer'=>'Abstracts with structured fields','explanation'=>'Parametrized abstracts use defined sections like purpose, method, results.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>5,'question'=>'Which index format is optimized for mobile display?','choices'=>json_encode(['Adaptive index','Print index','PDF index','HTML index']),'answer'=>'Adaptive index','explanation'=>'Adaptive indexes adjust layout and term display for mobile screens.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>5,'question'=>'Which algorithm improves index term weighting based on term frequency?','choices'=>json_encode(['TF-IDF','PageRank','Random forest','Support vector machine']),'answer'=>'TF-IDF','explanation'=>'Term Frequency–Inverse Document Frequency weights terms by importance.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>5,'question'=>'What is hybrid indexing?','choices'=>json_encode(['Combines manual and automated indexing','Only manual indexing','Only automated indexing','Abstracting only']),'answer'=>'Combines manual and automated indexing','explanation'=>'Hybrid indexing leverages both human judgment and algorithmic suggestions.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>5,'question'=>'Which abstracting technique uses extractive summarization?','choices'=>json_encode(['Selecting key sentences verbatim','Paraphrasing','Manual outlining','Random selection']),'answer'=>'Selecting key sentences verbatim','explanation'=>'Extractive methods pick original sentences to form abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>5,'question'=>'Which index entry type points from broader to narrower terms?','choices'=>json_encode(['See also subheadings','See references','Page only','Author only']),'answer'=>'See also subheadings','explanation'=>'"See also subheadings" guide users to more specific topics.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>5,'question'=>'Which abstract format includes keywords and classification codes?','choices'=>json_encode(['Structured abstract','Descriptive abstract','Critical abstract','Bibliographic abstract']),'answer'=>'Structured abstract','explanation'=>'Structured abstracts include sections and metadata like keywords.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>5,'question'=>'What is the role of provenance metadata in abstracting?','choices'=>json_encode(['Tracks source and creation history','Adds page numbers','Generates index terms','Controls access']),'answer'=>'Tracks source and creation history','explanation'=>'Provenance metadata records the origin and changes of abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>5,'question'=>'Which tool provides batch thesaurus updates?','choices'=>json_encode(['Thesaurus maintenance module','Link resolver','OPAC','MARC editor']),'answer'=>'Thesaurus maintenance module','explanation'=>'Modules allow bulk import and editing of controlled vocabulary.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>5,'question'=>'What does concept-based indexing emphasize?','choices'=>json_encode(['Indexing semantic concepts rather than words','Indexing page numbers','Abstract creation','Chronological indexing']),'answer'=>'Indexing semantic concepts rather than words','explanation'=>'Concept-based indexing focuses on ideas and their relationships.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

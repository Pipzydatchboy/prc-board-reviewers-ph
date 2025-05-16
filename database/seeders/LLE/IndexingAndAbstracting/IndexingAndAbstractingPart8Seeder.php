<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart8Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>8,'question'=>'Which indexing approach uses both pre- and post-coordinate methods?','choices'=>json_encode(['Hybrid indexing','Faceted indexing','Shallow indexing','Deep indexing']),'answer'=>'Hybrid indexing','explanation'=>'Hybrid indexing combines pre-coordinate headings with post-coordinate search flexibility.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>8,'question'=>'What is an alerting service in abstracting?','choices'=>json_encode(['Current awareness service','Concordance creation','Citation indexing','Thesaurus maintenance']),'answer'=>'Current awareness service','explanation'=>'Alerting services notify users of new abstracts matching saved queries.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>8,'question'=>'Which abstract type omits conclusions and recommendations?','choices'=>json_encode(['Indicative abstract','Informative abstract','Critical abstract','Structured abstract']),'answer'=>'Indicative abstract','explanation'=>'Indicative abstracts describe scope without detailed findings or recommendations.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>8,'question'=>'Which indexing element assigns significance weight to terms?','choices'=>json_encode(['Term weighting','Facets','Hierarchy codes','Page numbers']),'answer'=>'Term weighting','explanation'=>'Term weighting improves retrieval by giving more important terms greater influence.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>8,'question'=>'Which service provides RSS abstracts of new journal articles?','choices'=>json_encode(['Journal RSS feeds','MARC feeds','OPAC alerts','ILL notices']),'answer'=>'Journal RSS feeds','explanation'=>'Journals often offer RSS feeds containing abstracts for new issues.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>8,'question'=>'What is offset indexing?','choices'=>json_encode(['Indexing by relative character position','Page indexing','Abstract summarization','Citation linking']),'answer'=>'Indexing by relative character position','explanation'=>'Offset indexing maps index entries to specific character offsets in text.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>8,'question'=>'Which tool monitors indexing errors automatically?','choices'=>json_encode(['Index validation utility','Thesaurus editor','RFID scanner','OPAC']),'answer'=>'Index validation utility','explanation'=>'Validation tools detect missing entries or format inconsistencies.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>8,'question'=>'Which abstracting type highlights gaps in research?','choices'=>json_encode(['Critical abstract','Descriptive abstract','Informative abstract','Indicative abstract']),'answer'=>'Critical abstract','explanation'=>'Critical abstracts often note areas needing further investigation.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>8,'question'=>'What is a key phrase index?','choices'=>json_encode(['Index listing multi-word expressions','Concordance','Catalog','Timeline']),'answer'=>'Index listing multi-word expressions','explanation'=>'Key phrase indexes treat common collocations as single entries.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>8,'question'=>'Which protocol supports harvesting of abstract metadata?','choices'=>json_encode(['OAI-PMH','Z39.50','OAuth','HTTP']),'answer'=>'OAI-PMH','explanation'=>'OAI-PMH is used to harvest metadata including abstracts from repositories.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>8,'question'=>'What does summary indexing provide?','choices'=>json_encode(['Index entries from condensed summaries','Full-text entries','Abstracts only','Citation lists']),'answer'=>'Index entries from condensed summaries','explanation'=>'Summary indexes derive entries from abridged text to improve focus.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>8,'question'=>'Which abstract component improves SEO for online articles?','choices'=>json_encode(['Descriptive keywords','Lengthy narrative','Bibliography','Publisher name']),'answer'=>'Descriptive keywords','explanation'=>'Including keywords in abstracts enhances discoverability on search engines.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>8,'question'=>'Which indexing scheme uses notation like A1, B2 for topics?','choices'=>json_encode(['Alpha-numeric','Faceted','Hierarchical','Thesaurus']),'answer'=>'Alpha-numeric','explanation'=>'Alpha-numeric schemes assign codes combining letters and numbers to subjects.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>8,'question'=>'What is the role of natural language processing in abstracting?','choices'=>json_encode(['Automated summary generation','Manual entry','Page numbering','Citation extraction']),'answer'=>'Automated summary generation','explanation'=>'NLP algorithms identify key points to draft automated abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>8,'question'=>'Which tool helps analyze index term co-occurrence networks?','choices'=>json_encode(['Network analysis software','OPAC','MARC editor','Barcode reader']),'answer'=>'Network analysis software','explanation'=>'These tools visualize and quantify relationships among index terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>8,'question'=>'Which abstract structure is mandated by many health journals?','choices'=>json_encode(['Background, Objective, Methods, Results, Conclusion','Free text','Critical commentary','Indicative summary']),'answer'=>'Background, Objective, Methods, Results, Conclusion','explanation'=>'Structured abstracts with these headings are standard in health sciences.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>8,'question'=>'What does topical indexing refer to?','choices'=>json_encode(['Indexing based on subject matter','Indexing by page','Abstract creation','Citation mapping']),'answer'=>'Indexing based on subject matter','explanation'=>'Topical indexing organizes entries by topics or themes.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>8,'question'=>'Which process uses machine learning to improve indexing over time?','choices'=>json_encode(['Adaptive indexing','Manual review','Citation chaining','Weeding']),'answer'=>'Adaptive indexing','explanation'=>'Adaptive systems learn from corrections to refine automatic indexing.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>8,'question'=>'Which part of an abstract communicates practical implications?','choices'=>json_encode(['Conclusion','Methods','Objective','Title']),'answer'=>'Conclusion','explanation'=>'The conclusion typically outlines implications and recommendations.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>8,'question'=>'Which metadata field in XML abstracts holds the summary text?','choices'=>json_encode(['<abstract> element','<title>','<author>','<date>']),'answer'=>'<abstract> element','explanation'=>'The `<abstract>` tag encloses the summary content in XML.', 'created_at'=>$now,'updated_at'=>$now],
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

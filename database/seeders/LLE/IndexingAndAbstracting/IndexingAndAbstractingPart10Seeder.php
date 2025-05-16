<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart10Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>10,'question'=>'Which index uses document vectors and cosine similarity to rank results?','choices'=>json_encode(['Vector space index','Subject index','Keyword index','Author index']),'answer'=>'Vector space index','explanation'=>'Vector space indexes represent documents as vectors for similarity comparisons.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>10,'question'=>'What is the main advantage of using inverted files?','choices'=>json_encode(['Fast full-text search','Detailed abstracts','Rich metadata','Automatic classification']),'answer'=>'Fast full-text search','explanation'=>'Inverted files map terms to document locations, enabling rapid searches.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>10,'question'=>'Which abstract type provides only factual information without interpretation?','choices'=>json_encode(['Descriptive abstract','Critical abstract','Informative abstract','Indicative abstract']),'answer'=>'Descriptive abstract','explanation'=>'Descriptive abstracts outline content without evaluation or detailed results.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>10,'question'=>'What does clustering in indexing achieve?','choices'=>json_encode(['Groups similar documents','Alphabetical ordering','Page numbering','Citation linking']),'answer'=>'Groups similar documents','explanation'=>'Clustering organizes documents by shared index term patterns.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>10,'question'=>'Which process refines abstracts by removing non-informative sentences?','choices'=>json_encode(['Sentence pruning','Manual editing','Indexing','Binding']),'answer'=>'Sentence pruning','explanation'=>'Pruning algorithms drop sentences with low information content.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>10,'question'=>'Which index component maps synonyms to preferred terms?','choices'=>json_encode(['Thesaurus','Stop list','Inverted file','Concordance']),'answer'=>'Thesaurus','explanation'=>'Thesauri define synonym relationships and preferred indexing terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>10,'question'=>'What is the function of term expansion in search?','choices'=>json_encode(['Include related terms','Compress index files','Count page hits','Generate abstracts']),'answer'=>'Include related terms','explanation'=>'Term expansion adds synonyms and variants to improve recall.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>10,'question'=>'Which abstracting service specializes in nursing and allied health?','choices'=>json_encode(['CINAHL','PubMed','ERIC','DBLP']),'answer'=>'CINAHL','explanation'=>'CINAHL provides abstracts for nursing and health literature.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>10,'question'=>'Which indexing technique uses ontologies to assign terms?','choices'=>json_encode(['Ontology-based indexing','Manual indexing','Statistical indexing','Faceted indexing']),'answer'=>'Ontology-based indexing','explanation'=>'Ontology-based indexing aligns content to formal concept hierarchies.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>10,'question'=>'What is the primary role of a stop-word removal process?','choices'=>json_encode(['Remove common low-value words','Extract key phrases','Normalize terms','Assign weights']),'answer'=>'Remove common low-value words','explanation'=>'Stop-word removal eliminates words that are too frequent to be useful.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>10,'question'=>'Which tool evaluates abstract coverage across multiple databases?','choices'=>json_encode(['Coverage analysis tool','MARC editor','RFID tracker','OPAC']),'answer'=>'Coverage analysis tool','explanation'=>'Coverage tools compare abstract presence in various indexing services.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>10,'question'=>'What is pseudo-relevance feedback in indexing?','choices'=>json_encode(['Automatically expanding query based on top results','User tagging','Manual thesaurus assignment','Stop list creation']),'answer'=>'Automatically expanding query based on top results','explanation'=>'Pseudo-relevance feedback uses initial search hits to suggest additional terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>10,'question'=>'Which abstract format is preferred for systematic reviews?','choices'=>json_encode(['Structured abstract','Indicative abstract','Descriptive abstract','Critical abstract']),'answer'=>'Structured abstract','explanation'=>'Systematic reviews require clear headings for objectives, methods, and conclusions.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>10,'question'=>'Which feature supports incremental updating of indexes?','choices'=>json_encode(['Delta indexing','Full re-indexing','Index pruning','Abstract trimming']),'answer'=>'Delta indexing','explanation'=>'Delta indexing processes only changed content, reducing update time.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>10,'question'=>'What is the role of term discrimination value in indexing?','choices'=>json_encode(['Assess term ability to differentiate documents','Count term frequency','Manage budgets','Generate page numbers']),'answer'=>'Assess term ability to differentiate documents','explanation'=>'Discrimination value measures how uniquely a term distinguishes documents.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>10,'question'=>'Which abstract section is optional in many journals?','choices'=>json_encode(['Background','Methods','Results','Conclusion']),'answer'=>'Background','explanation'=>'Some journals allow optional background sections if scope is clear.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>10,'question'=>'Which indexing structure supports proximity searches?','choices'=>json_encode(['Positional index','Subject index','Author index','Citation index']),'answer'=>'Positional index','explanation'=>'Positional indexes store term positions to enable proximity queries.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>10,'question'=>'Which component of indexing captures term frequency information?','choices'=>json_encode(['Term frequency index','Thesaurus','Stop list','Concordance']),'answer'=>'Term frequency index','explanation'=>'Term frequency indexes record how often terms appear for weighting.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>10,'question'=>'Which abstracting standard prescribes structured headings like IMRAD?','choices'=>json_encode(['ICMJE guidelines','ISO 999','MARC21','Dublin Core']),'answer'=>'ICMJE guidelines','explanation'=>'International Committee of Medical Journal Editors recommends IMRAD structure.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>10,'question'=>'What does query expansion achieve in retrieval?','choices'=>json_encode(['Enhance search by adding related terms','Limit search to exact terms','Remove stop words','Normalize cases']),'answer'=>'Enhance search by adding related terms','explanation'=>'Query expansion broadens result sets by including synonyms and related concepts.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart6Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>6,'question'=>'Which tool uses pattern matching to extract index terms automatically?','choices'=>json_encode(['Regular expression parser','Manual thesaurus','Citation tracker','RFID reader']),'answer'=>'Regular expression parser','explanation'=>'Regex parsers identify and extract terms based on defined patterns.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>6,'question'=>'What is the benefit of nesting subheadings in an index?','choices'=>json_encode(['Shows hierarchical relationships','Reduces index length','Automates abstracting','Improves binding']),'answer'=>'Shows hierarchical relationships','explanation'=>'Nested subheadings provide context and structure to main entries.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>6,'question'=>'Which abstract style uses bullet points for clarity?','choices'=>json_encode(['Structured abstract','Descriptive abstract','Informative abstract','Critical abstract']),'answer'=>'Structured abstract','explanation'=>'Structured abstracts use headings or bullet points for sections like methods.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>6,'question'=>'What does term co-occurrence analysis support in indexing?','choices'=>json_encode(['Identifying related concepts','Page numbering','Abstract summarization','Thesaurus editing']),'answer'=>'Identifying related concepts','explanation'=>'Co-occurrence analysis finds terms that frequently appear together, suggesting relationships.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>6,'question'=>'Which index feature improves recall by linking synonyms?','choices'=>json_encode(['See also references','Page numbers','Abstract text','Author list']),'answer'=>'See also references','explanation'=>'"See also" links direct users to synonymous or related terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>6,'question'=>'What is contextual indexing?','choices'=>json_encode(['Indexing terms with their surrounding context','Chronological indexing','Alphabetical indexing','Abstracting summaries']),'answer'=>'Indexing terms with their surrounding context','explanation'=>'Contextual indexing captures term context to enhance search relevance.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>6,'question'=>'Which abstracting method uses template-based generation?','choices'=>json_encode(['Parameterized abstracting','Free-text abstracting','Manual summarization','Citation extraction']),'answer'=>'Parameterized abstracting','explanation'=>'Parameterized abstracts fill predefined templates with document-specific information.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>6,'question'=>'What does a concordance index list?','choices'=>json_encode(['Word occurrences with context','Abstract summaries','Page numbers only','Bibliographic metadata']),'answer'=>'Word occurrences with context','explanation'=>'Concordances provide every appearance of a word with its textual context.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>6,'question'=>'Which process merges similar headings under a preferred term?','choices'=>json_encode(['Entry consolidation','Keyword expansion','Abstract trimming','Citation linking']),'answer'=>'Entry consolidation','explanation'=>'Consolidation groups synonymous headings into a single preferred entry.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>6,'question'=>'Which tool visualizes index term networks graphically?','choices'=>json_encode(['Index visualization software','OPAC search','MARC editor','Thesaurus file']),'answer'=>'Index visualization software','explanation'=>'Visualization tools display term relationships as interactive graphs.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>6,'question'=>'What is dynamic indexing?','choices'=>json_encode(['Realtime index updates','Static back-of-book index','Manual re-indexing','Abstract archiving']),'answer'=>'Realtime index updates','explanation'=>'Dynamic indexing updates index entries as content changes.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>6,'question'=>'Which abstracting practice ensures unbiased summaries?','choices'=>json_encode(['Blind abstracting','Selective abstracting','Automatic summarization','Citation chaining']),'answer'=>'Blind abstracting','explanation'=>'Blind abstracting omits author information to reduce bias.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>6,'question'=>'Which standard governs machine-readable indexing metadata?','choices'=>json_encode(['XML Index Exchange','Dublin Core','ISO 2709','PREMIS']),'answer'=>'XML Index Exchange','explanation'=>'XML formats like `<index>` tags support metadata exchange between systems.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>6,'question'=>'What is term weighting in indexing?','choices'=>json_encode(['Assigning importance values to terms','Sorting terms alphabetically','Counting page numbers','Generating abstracts']),'answer'=>'Assigning importance values to terms','explanation'=>'Weighting gives higher relevance to significant terms in retrieval.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>6,'question'=>'Which index entry shows cross-references to broader and narrower terms?','choices'=>json_encode(['See','See also','See instead','See beyond']),'answer'=>'See also','explanation'=>'"See also" entries guide users to related broader or narrower terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>6,'question'=>'Which abstract type highlights research limitations and future work?','choices'=>json_encode(['Critical abstract','Descriptive abstract','Informative abstract','Indicative abstract']),'answer'=>'Critical abstract','explanation'=>'Critical abstracts discuss weaknesses and suggest follow-up research.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>6,'question'=>'What is cross-terminology indexing?','choices'=>json_encode(['Mapping terms between vocabularies','Single-vocabulary indexing','Automatic abstracting','Citation indexing']),'answer'=>'Mapping terms between vocabularies','explanation'=>'Cross-terminology indexing aligns different controlled vocabularies for retrieval.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>6,'question'=>'Which process improves abstract coherence by reordering sentences?','choices'=>json_encode(['Abstract restructuring','Index reordering','Document binding','Page numbering']),'answer'=>'Abstract restructuring','explanation'=>'Restructuring refines flow by arranging sentences logically.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>6,'question'=>'Which tool performs lemmatization in automatic indexing?','choices'=>json_encode(['NLP lemmatizer','Barcode scanner','Link resolver','OPAC search']),'answer'=>'NLP lemmatizer','explanation'=>'Lemmatizers reduce words to their dictionary forms for consistent indexing.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>6,'question'=>'What is the role of indexing rules in manual indexing?','choices'=>json_encode(['Guide consistency and scope','Generate abstracts','Sort authors','Manage budgets']),'answer'=>'Guide consistency and scope','explanation'=>'Indexing rules direct indexers on term selection and entry structure.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

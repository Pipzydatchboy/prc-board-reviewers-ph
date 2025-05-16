<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart9Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>9,'question'=>'Which index type uses geographic coordinates as references?','choices'=>json_encode(['Spatial index','Chronological index','Subject index','Author index']),'answer'=>'Spatial index','explanation'=>'Spatial indexes map terms to geographic locations or coordinates.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>9,'question'=>'What is the primary function of an abstracting and indexing service?','choices'=>json_encode(['Enhance discoverability of literature','Bind periodicals','Manage budgets','Track user sessions']),'answer'=>'Enhance discoverability of literature','explanation'=>'Abstracting and indexing services summarize and organize literature for retrieval.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>9,'question'=>'Which protocol is standard for exchanging abstract metadata between systems?','choices'=>json_encode(['OAI-PMH','FTP','SMTP','HTTP']),'answer'=>'OAI-PMH','explanation'=>'OAI-PMH is widely used to harvest metadata including abstracts from repositories.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>9,'question'=>'Which index feature helps users navigate to topics beginning with certain letters?','choices'=>json_encode(['Alphabet bar','Page thumbnails','Abstract previews','Citation lists']),'answer'=>'Alphabet bar','explanation'=>'Alphabet bars let users jump to index entries by initial letter.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>9,'question'=>'What does sequential indexing refer to?','choices'=>json_encode(['Index entries in order of occurrence','Alphabetical entries','Thematic clusters','Hierarchical display']),'answer'=>'Index entries in order of occurrence','explanation'=>'Sequential indexing lists terms as they appear sequentially in the text.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>9,'question'=>'Which technique uses NLP to identify abstract key sentences?','choices'=>json_encode(['Extractive summarization','Manual annotation','Citation linking','Index consolidation']),'answer'=>'Extractive summarization','explanation'=>'Extractive summarization selects sentences based on linguistic features.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>9,'question'=>'Which index entry guides readers from non-preferred to preferred terms?','choices'=>json_encode(['See','See also','See instead','See beyond']),'answer'=>'See instead','explanation'=>'"See instead" directs from non-preferred terms to the preferred heading.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>9,'question'=>'Which abstract type provides only background and scope information?','choices'=>json_encode(['Indicative abstract','Informative abstract','Critical abstract','Structured abstract']),'answer'=>'Indicative abstract','explanation'=>'Indicative abstracts outline purpose and scope without results.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>9,'question'=>'What is the role of an abstractor in publishing?','choices'=>json_encode(['Write concise summaries of documents','Bind books','Manage circulation','Catalog volumes']),'answer'=>'Write concise summaries of documents','explanation'=>'Abstractors craft summaries that capture the essence of documents.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>9,'question'=>'Which index supports faceted browsing based on multiple attributes?','choices'=>json_encode(['Faceted index','Alphabetical index','Citation index','Chronological index']),'answer'=>'Faceted index','explanation'=>'Faceted indexes allow filtering by various attributes simultaneously.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>9,'question'=>'Which tool measures inter-annotator consistency in manual indexing?','choices'=>json_encode(['Kappa statistic','Page count','Citation tracker','RFID scanner']),'answer'=>'Kappa statistic','explanation'=>'Kappa statistics quantify agreement between indexers.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>9,'question'=>'Which process involves mapping index entries to ontology classes?','choices'=>json_encode(['Ontology-based indexing','Manual sorting','Abstract trimming','Binding']),'answer'=>'Ontology-based indexing','explanation'=>'Ontology-based indexing associates terms with formal ontological concepts.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>9,'question'=>'What is selective dissemination of information (SDI)?','choices'=>json_encode(['Sending users tailored abstracts','Weeding collections','Shelving books','Catalog maintenance']),'answer'=>'Sending users tailored abstracts','explanation'=>'SDI services deliver abstracts based on user profiles and interests.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>9,'question'=>'Which abstracting type includes evaluative judgments?','choices'=>json_encode(['Critical abstract','Indicative abstract','Informative abstract','Bibliographic abstract']),'answer'=>'Critical abstract','explanation'=>'Critical abstracts offer commentary and evaluation of content.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>9,'question'=>'Which index structure uses tree-like branching?','choices'=>json_encode(['Hierarchical index','Alphabetical index','Flat index','Citation index']),'answer'=>'Hierarchical index','explanation'=>'Hierarchical indexes show branching of broad to narrow terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>9,'question'=>'What is the difference between abstracting and summarization?','choices'=>json_encode(['Abstracts follow standards, summaries are free-form','Summaries follow standards, abstracts are free-form','They are identical','Neither are used in libraries']),'answer'=>'Abstracts follow standards, summaries are free-form','explanation'=>'Abstracts adhere to formal guidelines, while summaries may be informal.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>9,'question'=>'Which tool helps detect bias in automated abstracts?','choices'=>json_encode(['Bias detection algorithm','MARC editor','OPAC','RFID tracker']),'answer'=>'Bias detection algorithm','explanation'=>'Algorithms can flag subjective or biased language in abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>9,'question'=>'Which index type lists references in the order they appear?','choices'=>json_encode(['Sequential index','Subject index','Author index','Keyword index']),'answer'=>'Sequential index','explanation'=>'Sequential indexes reflect the original order of occurrence.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>9,'question'=>'What is the role of metadata enrichment in indexing?','choices'=>json_encode(['Enhance term context with external data','Bind materials','Weed collections','Track circulation']),'answer'=>'Enhance term context with external data','explanation'=>'Enrichment adds semantic context from external sources to terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>9,'question'=>'Which abstract field defines the study’s population or sample?','choices'=>json_encode(['Methods','Results','Conclusion','Title']),'answer'=>'Methods','explanation'=>'The Methods section often describes participants or sample characteristics.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

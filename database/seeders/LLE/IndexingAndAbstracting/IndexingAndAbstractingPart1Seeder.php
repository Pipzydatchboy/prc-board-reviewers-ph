<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart1Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>1,'question'=>'What is the primary purpose of indexing in information retrieval?','choices'=>json_encode(['Facilitate quick location of specific information','Provide full-text access','Manage acquisitions','Track circulation']),'answer'=>'Facilitate quick location of specific information','explanation'=>'Indexing creates organized access points to help users find information rapidly.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which type of index lists keywords alphabetically with page references?','choices'=>json_encode(['Subject index','Author index','Chronological index','Illustration index']),'answer'=>'Subject index','explanation'=>'Subject indexes arrange topics alphabetically with location references.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What does an abstract provide?','choices'=>json_encode(['Summary of the content','Full-text reproduction','Bibliographic metadata only','Statistical data']),'answer'=>'Summary of the content','explanation'=>'Abstracts concisely summarize essential elements of documents.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which abstracting database specializes in chemical literature?','choices'=>json_encode(['Chemical Abstracts Service','ERIC','PubMed','PsycINFO']),'answer'=>'Chemical Abstracts Service','explanation'=>'CAS provides abstracts and indexes chemical research publications.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'In indexing, what is the role of a controlled vocabulary?','choices'=>json_encode(['Ensure consistency of terms','Provide page numbers','Generate abstracts','Classify by publication date']),'answer'=>'Ensure consistency of terms','explanation'=>'Controlled vocabularies standardize terminology for accurate retrieval.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What is faceted indexing?','choices'=>json_encode(['Breaking subjects into multiple categories','Listing authors only','Indexing illustrations','Generating abstracts']),'answer'=>'Breaking subjects into multiple categories','explanation'=>'Faceted indexing assigns multiple attributes to allow refined searching.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which tool assists indexers by suggesting headings?','choices'=>json_encode(['Thesaurus','Indexing software','Citation generator','MARC editor']),'answer'=>'Indexing software','explanation'=>'Software analyzes text and recommends index terms to indexers.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which abstracting service covers educational research?','choices'=>json_encode(['ERIC','Scopus','Web of Science','JSTOR']),'answer'=>'ERIC','explanation'=>'ERIC provides abstracts and indexes for education-related literature.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What does back-of-book indexing refer to?','choices'=>json_encode(['Index at end of publication','Online index only','In-text listing','Front matter index']),'answer'=>'Index at end of publication','explanation'=>'Back-of-book indexes appear in the back matter of a text.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What is pre-coordinate indexing?','choices'=>json_encode(['Combining multiple terms into single entries','Assigning separate terms only','Automatic indexing','Hierarchical classification']),'answer'=>'Combining multiple terms into single entries','explanation'=>'Pre-coordinate indexing merges concepts into compound headings.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which process leaves terms separate for dynamic combination at search time?','choices'=>json_encode(['Post-coordinate indexing','Pre-coordinate indexing','Abstracting','Thesaurus development']),'answer'=>'Post-coordinate indexing','explanation'=>'Post-coordinate indexing stores terms separately and combines them upon retrieval.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What is structural analysis in abstracting?','choices'=>json_encode(['Analyzing document organization','Counting word occurrences','Binding methods','Page numbering']),'answer'=>'Analyzing document organization','explanation'=>'Structural analysis examines sections and headings to structure abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which abstract includes critical commentary on content?','choices'=>json_encode(['Critical abstract','Descriptive abstract','Informative abstract','Bibliographic abstract']),'answer'=>'Critical abstract','explanation'=>'Critical abstracts evaluate the significance and quality of work.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What is nested indexing?','choices'=>json_encode(['Providing hierarchical context','Listing only authors','Abstracting details','Assigning page numbers']),'answer'=>'Providing hierarchical context','explanation'=>'Nested indexes show parent-child relationships among headings.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which abstract lists only topics without evaluation?','choices'=>json_encode(['Descriptive abstract','Critical abstract','Evaluative abstract','Summary abstract']),'answer'=>'Descriptive abstract','explanation'=>'Descriptive abstracts outline topics covered without detailed analysis.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which organization issues standards for abstract quality?','choices'=>json_encode(['NISO','ISO','ANSI','IEEE']),'answer'=>'NISO','explanation'=>'NISO publishes guidelines for abstracting and indexing best practices.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What is the main drawback of automated indexing?','choices'=>json_encode(['Lacks contextual nuance','Too slow','High cost','Limited to print']),'answer'=>'Lacks contextual nuance','explanation'=>'Automated tools may misinterpret specialized terminology and context.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which element is crucial in an abstract for retrieval?','choices'=>json_encode(['Study objective','Author biography','Publisher location','Page count']),'answer'=>'Study objective','explanation'=>'Abstracts must state purpose or objective to support discovery.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'What does indexing depth measure?','choices'=>json_encode(['Level of detail in index entries','Volume count','Binding type','Publication year']),'answer'=>'Level of detail in index entries','explanation'=>'Depth indicates how granular the index terms are.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>52,'part'=>1,'question'=>'Which abstracting standard focuses on agricultural research?','choices'=>json_encode(['AGRIS','CAS','ERIC','PsycINFO']),'answer'=>'AGRIS','explanation'=>'AGRIS indexes global agricultural science documents.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

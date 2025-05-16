<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart4Seeder extends Seeder
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
        ['subject_id'=>52,'part'=>4,'question'=>'Which abstracting service specializes in pharmaceutical literature?','choices'=>json_encode(['EMBASE','ERIC','PubMed','CINAHL']),'answer'=>'EMBASE','explanation'=>'EMBASE indexes biomedical and pharmaceutical research abstracts.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>52,'part'=>4,'question'=>'What is the primary advantage of phrase indexing?','choices'=>json_encode(['Captures multi-word concepts','Simpler to implement','Requires no controlled vocabulary','Faster retrieval']),'answer'=>'Captures multi-word concepts','explanation'=>'Phrase indexing treats compound terms as single entries for precision.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>52,'part'=>4,'question'=>'Which tool supports semi-automatic abstract drafting?','choices'=>json_encode(['Smart summarizer','OPAC','MARC editor','RFID scanner']),'answer'=>'Smart summarizer','explanation'=>'Smart summarizers use algorithms to propose draft abstracts for review.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>52,'part'=>4,'question'=>'What does the term "see also" do in an index?','choices'=>json_encode(['Directs user to related terms','Creates subentries','Adds page numbers','Generates abstracts']),'answer'=>'Directs user to related terms','explanation'=>'"See also" points users from one heading to another relevant term.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>52,'part'=>4,'question'=>'Which standard specifies rules for index entry capitalization?','choices'=>json_encode(['ISO 999','MARC21','Dublin Core','PREMIS']),'answer'=>'ISO 999','explanation'=>'ISO 999 outlines guidelines including capitalization for indexes.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>52,'part'=>4,'question'=>'Which abstract type is used for technical reports to provide detailed results?','choices'=>json_encode(['Informative abstract','Indicative abstract','Bibliographic abstract','Critical abstract']),'answer'=>'Informative abstract','explanation'=>'Informative abstracts include data results, methods, and conclusions.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>52,'part'=>4,'question'=>'What is truncation in automatic indexing?','choices'=>json_encode(['Reducing words to root plus wildcard','Removing vowels','Segmenting sentences','Extracting keywords']),'answer'=>'Reducing words to root plus wildcard','explanation'=>'Truncation allows matching multiple word forms by using a wildcard.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>52,'part'=>4,'question'=>'Which index entry includes a subentry?','choices'=>json_encode(['Term > subterm','Page only','Author only','Keyword only']),'answer'=>'Term > subterm','explanation'=>'Subentries provide more granular references under a main term.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>52,'part'=>4,'question'=>'Which service provides structured abstracts in medical journals?','choices'=>json_encode(['PubMed Structured Abstracts','ERIC','DBLP','CINAHL']),'answer'=>'PubMed Structured Abstracts','explanation'=>'Many biomedical journals use structured abstracts indexed in PubMed.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>52,'part'=>4,'question'=>'What is the function of a scope note in a thesaurus?','choices'=>json_encode(['Clarify the use of a term','Provide page numbers','List related authors','Generate abstracts']),'answer'=>'Clarify the use of a term','explanation'=>'Scope notes define the intended meaning and usage rules of terms.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>52,'part'=>4,'question'=>'Which abstracting service focuses on social science literature?','choices'=>json_encode(['Sociological Abstracts','CINAHL','EMBASE','Chemical Abstracts Service']),'answer'=>'Sociological Abstracts','explanation'=>'Sociological Abstracts indexes abstracts from social science publications.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>52,'part'=>4,'question'=>'What does alpha-numeric indexing use?','choices'=>json_encode(['Numbers and letters to order entries','Only letters','Only numbers','Abstracts']),'answer'=>'Numbers and letters to order entries','explanation'=>'Alpha-numeric codes combine letters and numbers to organize topics.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>52,'part'=>4,'question'=>'Which practice ensures consistency in manual indexing across volumes?','choices'=>json_encode(['Periodic term reviews','Ignoring updates','Skipping entries','Automatic indexing']),'answer'=>'Periodic term reviews','explanation'=>'Regular review of terms maintains consistency among indexers.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>52,'part'=>4,'question'=>'Which abstraction process identifies relationships between concepts?','choices'=>json_encode(['Concept mapping','String matching','Binding','Weeding']),'answer'=>'Concept mapping','explanation'=>'Concept mapping visualizes key ideas and their interconnections.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>52,'part'=>4,'question'=>'Which index type lists authors with their works?','choices'=>json_encode(['Author index','Subject index','Keyword index','Illustration index']),'answer'=>'Author index','explanation'=>'Author indexes provide references based on author names.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>52,'part'=>4,'question'=>'What is the role of boundary indexing?','choices'=>json_encode(['Index terms occurring at document boundaries','Index within text only','Abstract creation','Citation chaining']),'answer'=>'Index terms occurring at document boundaries','explanation'=>'Boundary indexing notes terms at specific start or end positions.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>52,'part'=>4,'question'=>'Which abstract type is concise, limited to 100 words or less?','choices'=>json_encode(['Summary abstract','Descriptive abstract','Critical abstract','Indicative abstract']),'answer'=>'Summary abstract','explanation'=>'Summary abstracts are very brief, often under 100 words.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>52,'part'=>4,'question'=>'Which tool helps merge multiple index files?','choices'=>json_encode(['Index merge utility','OPAC','RFID scanner','MARC editor']),'answer'=>'Index merge utility','explanation'=>'Merge utilities combine separate index files into one cohesive index.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>52,'part'=>4,'question'=>'What is post-coordination in abstract retrieval?','choices'=>json_encode(['Combining separate index terms at search time','Pre-combining terms during indexing','Abstracting manually','Thesaurus building']),'answer'=>'Combining separate index terms at search time','explanation'=>'Post-coordination matches user queries by combining terms dynamically.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>52,'part'=>4,'question'=>'Which component of indexing software stores the controlled vocabulary?','choices'=>json_encode(['Term authority file','Page cache','User logs','Interface template']),'answer'=>'Term authority file','explanation'=>'Authority files maintain standardized terms for consistent indexing.', 'created_at'=>$now,'updated_at'=>$now],
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

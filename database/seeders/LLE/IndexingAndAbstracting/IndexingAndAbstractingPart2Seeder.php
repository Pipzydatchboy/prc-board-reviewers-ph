<?php

namespace Database\Seeders\LLE\IndexingAndAbstracting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IndexingAndAbstractingPart2Seeder extends Seeder
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
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which process involves assigning index terms based on frequency analysis?',
            'choices'     => json_encode(['Statistical indexing', 'Manual indexing', 'Faceted indexing', 'Semantic indexing']),
            'answer'      => 'Statistical indexing',
            'explanation' => 'Statistical indexing uses term frequency to select index entries.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 2
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'What is the main advantage of post-coordinate indexing?',
            'choices'     => json_encode(['Flexibility in combining terms', 'Simpler pre-coordination', 'Faster indexing', 'Reduced term ambiguity']),
            'answer'      => 'Flexibility in combining terms',
            'explanation' => 'Post-coordinate indexing allows dynamic combination of separate terms at retrieval.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 3
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which element is essential in an index entry to aid user navigation?',
            'choices'     => json_encode(['Lead-in term', 'ISSN', 'Publisher', 'Edition']),
            'answer'      => 'Lead-in term',
            'explanation' => 'Lead-in terms are the indexed words guiding users to references.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 4
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which indexing structure arranges terms in a hierarchy of broader and narrower concepts?',
            'choices'     => json_encode(['Hierarchical index', 'Alphabetical index', 'Subject index', 'Citation index']),
            'answer'      => 'Hierarchical index',
            'explanation' => 'Hierarchical indexes show relationships among terms by levels.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 5
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'What is selective abstracting?',
            'choices'     => json_encode(['Summarizing key points only', 'Full summarization', 'Statistical analysis', 'Index generation']),
            'answer'      => 'Summarizing key points only',
            'explanation' => 'Selective abstracts highlight the most important information only.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 6
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which standard defines abstract structure in scholarly publications?',
            'choices'     => json_encode(['ANSI/NISO Z39.14', 'MARC21', 'PREMIS', 'Dublin Core']),
            'answer'      => 'ANSI/NISO Z39.14',
            'explanation' => 'Z39.14 provides guidelines for abstracting and indexing services.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 7
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which tool maps subject terms to controlled vocabulary?','choices'=>json_encode(['Thesaurus','Indexing software','Citation tracker','Abstractor']),
            'answer'      => 'Thesaurus',
            'explanation' => 'Thesauri provide standardized terms and their relationships for indexers.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 8
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which abstract type provides quantitative data and results?',
            'choices'     => json_encode(['Informative abstract','Descriptive abstract','Critical abstract','Bibliographic abstract']),
            'answer'      => 'Informative abstract',
            'explanation' => 'Informative abstracts include methodology, results, and conclusions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 9
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'What is chain indexing?','choices'=>json_encode(['Creating index entries through linked terms','Single-term indexing','Automatic indexing','Faceted indexing']),
            'answer'      => 'Creating index entries through linked terms',
            'explanation' => 'Chain indexing links sequential terms to form compound headings.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 10
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which abstracting service is specific to engineering literature?',
            'choices'     => json_encode(['Ei Compendex','PubMed','ERIC','AGRIS']),
            'answer'      => 'Ei Compendex',
            'explanation' => 'Compendex provides abstracts for engineering and technical research.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 11
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'What is concordance in indexing?','choices'=>json_encode(['List of all occurrences of words','Abstract summary','Citation list','Hierarchical terms']),
            'answer'      => 'List of all occurrences of words',
            'explanation' => 'Concordances show every instance of a term in the text.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 12
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which aspect is evaluated in abstract quality assessment?','choices'=>json_encode(['Accuracy and completeness','Binding quality','Shelf arrangement','Publisher reputation']),
            'answer'      => 'Accuracy and completeness',
            'explanation' => 'Quality assessment checks if abstracts accurately represent the source.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 13
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which index type includes subject and author entries?','choices'=>json_encode(['Combined index','Separate indexes','Chronological index','Illustration index']),
            'answer'      => 'Combined index',
            'explanation' => 'Combined indexes merge author, subject, and other entries in one list.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 14
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'What is the function of a stop list in automatic indexing?','choices'=>json_encode(['Exclude common words','Include all words','Generate abstracts','Bind records']),
            'answer'      => 'Exclude common words',
            'explanation' => 'Stop lists prevent high-frequency but low-value words from indexing.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 15
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which abstract includes recommendations and evaluations?','choices'=>json_encode(['Critical abstract','Descriptive abstract','Informative abstract','Bibliographic abstract']),
            'answer'      => 'Critical abstract',
            'explanation' => 'Critical abstracts offer judgment and evaluative comments.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 16
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which method categorizes index terms into facets?',
            'choices'     => json_encode(['Faceted classification','Alphabetical sorting','Statistical indexing','Citation chaining']),
            'answer'      => 'Faceted classification',
            'explanation' => 'Faceted classification organizes concepts into multiple independent attributes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 17
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'What is the main challenge of manual indexing?','choices'=>json_encode(['Time-consuming nature','Automated errors','Low cost','Lack of nuance']),
            'answer'      => 'Time-consuming nature',
            'explanation' => 'Manual indexing requires thorough reading and term selection, which is slow.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 18
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which tool assists in creating abstracts by summarizing text?',
            'choices'     => json_encode(['Automatic summarizer','Indexing software','Thesaurus','OPAC']),
            'answer'      => 'Automatic summarizer',
            'explanation' => 'Summarizers use NLP to extract key sentences for abstracts.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 19
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which abstract element aids in retrieval by subject?','choices'=>json_encode(['Subject descriptors','Page numbers','Author photo','Publisher logo']),
            'answer'      => 'Subject descriptors',
            'explanation' => 'Descriptors highlight key topics, improving search discovery.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 20
        [
            'subject_id'  => 52,
            'part'        => 2,
            'question'    => 'Which aspect of indexing affects recall and precision?','choices'=>json_encode(['Term selection','Page layout','Binding quality','Publication date']),
            'answer'      => 'Term selection',
            'explanation' => 'Choosing appropriate terms determines retrieval effectiveness.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

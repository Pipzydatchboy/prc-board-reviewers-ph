<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart1Seeder extends Seeder
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
        [ // 1
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which of the following is the most authoritative source for broad subject overviews?',
            'choices'     => json_encode([
                'Encyclopedia',
                'Directory',
                'Dictionary',
                'Atlas'
            ]),
            'answer'      => 'Encyclopedia',
            'explanation' => 'Encyclopedias provide synthesized information on broad subjects, making them authoritative starting points.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What is the primary purpose of a bibliographic citation?',
            'choices'     => json_encode([
                'To provide detailed publication information for source retrieval',
                'To summarize content',
                'To evaluate the quality of a work',
                'To annotate the source'
            ]),
            'answer'      => 'To provide detailed publication information for source retrieval',
            'explanation' => 'Citations give essential details—author, title, publisher, date—to locate and verify sources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'In reference interviews, what technique helps clarify a user’s needs?',
            'choices'     => json_encode([
                'Active listening',
                'Keyword searching',
                'Browsing shelves',
                'Weeding'
            ]),
            'answer'      => 'Active listening',
            'explanation' => 'Active listening—paraphrasing and asking follow-up questions—ensures accurate understanding of user queries.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which tool is best for finding journal articles and conference papers?',
            'choices'     => json_encode([
                'Citation index',
                'Thesaurus',
                'Abstract database',
                'Bibliography'
            ]),
            'answer'      => 'Abstract database',
            'explanation' => 'Abstract databases index scholarly journals and proceedings with abstracts, aiding discovery of articles.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What does Boolean operator "NOT" do in a database search?',
            'choices'     => json_encode([
                'Excludes records containing the term',
                'Includes only records with both terms',
                'Includes records with either term',
                'Finds exact phrase'
            ]),
            'answer'      => 'Excludes records containing the term',
            'explanation' => '"NOT" removes unwanted terms, refining search results by exclusion.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which citation style is mandated by the Philippine Librarians Association for theses?',
            'choices'     => json_encode([
                'APA',
                'MLA',
                'Chicago',
                'Harvard'
            ]),
            'answer'      => 'APA',
            'explanation' => 'APA style is commonly adopted in Philippine academic libraries for consistency in theses and dissertations.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What is a user service policy?',
            'choices'     => json_encode([
                'A document outlining rights and responsibilities of patrons',
                'A bibliography of library holdings',
                'A schedule of library events',
                'A list of reference tools'
            ]),
            'answer'      => 'A document outlining rights and responsibilities of patrons',
            'explanation' => 'Service policies define acceptable use, borrowing limits, and user conduct guidelines.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which resource is ideal for identifying books published within a specific year?',
            'choices'     => json_encode([
                'National bibliography',
                'Subject encyclopedia',
                'Citation index',
                'User guide'
            ]),
            'answer'      => 'National bibliography',
            'explanation' => 'A national bibliography lists all publications of a country, organized by year and title.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'In user education, what method involves hands-on instruction?',
            'choices'     => json_encode([
                'Workshop',
                'Lecture',
                'Flyer distribution',
                'Signage'
            ]),
            'answer'      => 'Workshop',
            'explanation' => 'Workshops allow interactive, skill-based learning for database searching or reference tools.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which bibliographic format is used for MARC records?',
            'choices'     => json_encode([
                'MARC21',
                'Dublin Core',
                'HTML',
                'CSV'
            ]),
            'answer'      => 'MARC21',
            'explanation' => 'MARC21 is the most widely adopted format for machine-readable cataloging.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What does the acronym OAI-PMH stand for?',
            'choices'     => json_encode([
                'Open Archives Initiative Protocol for Metadata Harvesting',
                'Online Access Interface for Public Metadata',
                'Organizational Academic Information Protocol',
                'Open Access Indexing Method'
            ]),
            'answer'      => 'Open Archives Initiative Protocol for Metadata Harvesting',
            'explanation' => 'OAI-PMH is used for harvesting metadata records from repositories.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which tool helps users cite sources in various styles automatically?',
            'choices'     => json_encode([
                'Citation generator',
                'Reference queue',
                'Catalog editor',
                'Weeding tool'
            ]),
            'answer'      => 'Citation generator',
            'explanation' => 'Citation generators format bibliographic entries in different citation styles.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What is the function of an interlibrary loan form?',
            'choices'     => json_encode([
                'To request materials from another library',
                'To renew library cards',
                'To catalog new items',
                'To report missing books'
            ]),
            'answer'      => 'To request materials from another library',
            'explanation' => 'Interlibrary loan forms initiate borrowing requests across library networks.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which concept involves evaluating digital and print resources equally?',
            'choices'     => json_encode([
                'Resource neutrality',
                'Bibliographic equality',
                'Digital parity',
                'Collection balance'
            ]),
            'answer'      => 'Resource neutrality',
            'explanation' => 'Resource neutrality means not favoring format when selecting and evaluating materials.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What is the main goal of user needs assessment?',
            'choices'     => json_encode([
                'To determine what services and resources users require',
                'To track overdue books',
                'To catalog materials',
                'To organize events'
            ]),
            'answer'      => 'To determine what services and resources users require',
            'explanation' => 'User needs assessments identify gaps between existing services and user expectations.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which database type includes citations to dissertations and theses?',
            'choices'     => json_encode([
                'Dissertation abstracts database',
                'Citation index',
                'Abstract database',
                'Full-text database'
            ]),
            'answer'      => 'Dissertation abstracts database',
            'explanation' => 'Dissertation databases index theses and provide abstracts, often with full-text access.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What tool assists with managing bibliographic references in research?',
            'choices'     => json_encode([
                'Reference management software',
                'ILS module',
                'Barcode scanner',
                'Catalog editor'
            ]),
            'answer'      => 'Reference management software',
            'explanation' => 'Software like EndNote or Zotero organizes and formats citations and references.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which service helps users with research methodology questions?',
            'choices'     => json_encode([
                'Research consultation',
                'Circulation service',
                'Binding service',
                'Shelf reading'
            ]),
            'answer'      => 'Research consultation',
            'explanation' => 'Research consultations provide personalized support on methodology and information seeking.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'What does the acronym RDA stand for in cataloging?',
            'choices'     => json_encode([
                'Resource Description and Access',
                'Reference Data Administration',
                'Research Data Archive',
                'Remote Database Access'
            ]),
            'answer'      => 'Resource Description and Access',
            'explanation' => 'RDA is the current standard for descriptive cataloging guidelines.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 51,
            'part'        => 1,
            'question'    => 'Which strategy enhances discoverability by adding keywords and synonyms?',
            'choices'     => json_encode([
                'Thesaurus use',
                'Shelf reading',
                'Binding',
                'Weeding'
            ]),
            'answer'      => 'Thesaurus use',
            'explanation' => 'Thesauri provide controlled vocabulary, improving search precision and recall.',
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

<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart6Seeder extends Seeder
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
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What is the primary role of a classification system in a library?',
            'choices'     => json_encode([
                'To arrange books by size',
                'To provide a logical order for materials',
                'To track circulation statistics',
                'To determine acquisition budgets'
            ]),
            'answer'      => 'To provide a logical order for materials',
            'explanation' => 'Classification systems organize library materials so users can find them easily.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which classification scheme is most widely used in academic libraries worldwide?',
            'choices'     => json_encode([
                'Dewey Decimal Classification',
                'Library of Congress Classification',
                'Colon Classification',
                'Universal Decimal Classification'
            ]),
            'answer'      => 'Library of Congress Classification',
            'explanation' => 'The Library of Congress Classification is the standard in research and academic libraries.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'In the Dewey Decimal System, what general class is assigned to technology?',
            'choices'     => json_encode([
                '000 – Computer science, information & general works',
                '400 – Language',
                '600 – Technology',
                '800 – Literature'
            ]),
            'answer'      => '600 – Technology',
            'explanation' => 'The 600s in Dewey cover applied sciences and technology.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What practice involves adjusting the location of books to match updated classification numbers?',
            'choices'     => json_encode([
                'Reclassification',
                'Relabeling',
                'Shelving',
                'Binding'
            ]),
            'answer'      => 'Reclassification',
            'explanation' => 'Reclassification updates materials to new classification numbers, ensuring consistency.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which part of a call number indicates the specific work or author?',
            'choices'     => json_encode([
                'Class number',
                'Cutter number',
                'Publication date',
                'Library code'
            ]),
            'answer'      => 'Cutter number',
            'explanation' => 'The Cutter number represents the author or title for precise shelving order.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What is the purpose of an authority control file in cataloging?',
            'choices'     => json_encode([
                'To list all library patrons',
                'To standardize headings for names and subjects',
                'To track overdue materials',
                'To manage acquisition budgets'
            ]),
            'answer'      => 'To standardize headings for names and subjects',
            'explanation' => 'Authority control ensures consistency in catalog entries by using standardized headings.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which format is commonly used for exchanging bibliographic data between libraries?',
            'choices'     => json_encode([
                'MARC',
                'HTML',
                'PDF',
                'CSV'
            ]),
            'answer'      => 'MARC',
            'explanation' => 'MARC (Machine-Readable Cataloging) is the standard for bibliographic exchange.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What is the main function of a union catalog?',
            'choices'     => json_encode([
                'To manage internal budgeting',
                'To provide a combined list of holdings of multiple libraries',
                'To standardize cataloging rules',
                'To automate circulation'
            ]),
            'answer'      => 'To provide a combined list of holdings of multiple libraries',
            'explanation' => 'A union catalog aggregates holdings from several libraries into one searchable resource.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which standard governs the encoding of bibliographic information for online catalogs?',
            'choices'     => json_encode([
                'RDF',
                'Dublin Core',
                'MODS',
                'Z39.50'
            ]),
            'answer'      => 'Dublin Core',
            'explanation' => 'Dublin Core provides a simple, standardized set of metadata terms for cataloging.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'In cataloging, what does the acronym AACR stand for?',
            'choices'     => json_encode([
                'Anglo-American Cataloguing Rules',
                'Automated Archival Control Registry',
                'Association of Academic and Cataloging Records',
                'Analytical Access and Control Rules'
            ]),
            'answer'      => 'Anglo-American Cataloguing Rules',
            'explanation' => 'AACR are the standard rules for descriptive cataloging of library materials.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What tool assists librarians in subdividing subjects into more specific topics?',
            'choices'     => json_encode([
                'Thesaurus',
                'Index',
                'Bibliography',
                'Checklist'
            ]),
            'answer'      => 'Thesaurus',
            'explanation' => 'A thesaurus provides controlled vocabulary for consistent subject indexing.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which process involves creating metadata for digital objects?',
            'choices'     => json_encode([
                'Digital cataloging',
                'Digitization',
                'Metadata creation',
                'Data mining'
            ]),
            'answer'      => 'Metadata creation',
            'explanation' => 'Metadata creation adds descriptive information that aids discovery and management of digital resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What is the primary advantage of automated classification tools?',
            'choices'     => json_encode([
                'Lower acquisition costs',
                'Faster processing of materials',
                'Increased circulation',
                'Enhanced binding durability'
            ]),
            'answer'      => 'Faster processing of materials',
            'explanation' => 'Automation speeds up classification and cataloging workflows.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which element of MARC holds information about physical description?',
            'choices'     => json_encode([
                'Leader field',
                'Control field',
                'Variable field 300',
                'Fixed field'
            ]),
            'answer'      => 'Variable field 300',
            'explanation' => 'MARC tag 300 contains physical details like pagination and dimensions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which classification method uses notation that represents concepts hierarchically?',
            'choices'     => json_encode([
                'Enumerative',
                'Analytico-synthetic',
                'Faceted',
                'Literal'
            ]),
            'answer'      => 'Analytico-synthetic',
            'explanation' => 'Analytico-synthetic classification allows synthesis of notation for complex subjects.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What is the purpose of shelf lists in library management?',
            'choices'     => json_encode([
                'To record acquisitions',
                'To track physical arrangement on shelves',
                'To manage staff schedules',
                'To compile user statistics'
            ]),
            'answer'      => 'To track physical arrangement on shelves',
            'explanation' => 'Shelf lists document where each item is located within the library.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which concept ensures that changes in author names are updated across all catalog records?',
            'choices'     => json_encode([
                'Authority control',
                'Collection development',
                'Weeding',
                'Reclassification'
            ]),
            'answer'      => 'Authority control',
            'explanation' => 'Authority control maintains consistency in headings when names or subjects change.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'In a faceted classification system, what does a facet represent?',
            'choices'     => json_encode([
                'An individual dimension of a subject',
                'A physical shelf location',
                'A circulation status',
                'A metadata standard'
            ]),
            'answer'      => 'An individual dimension of a subject',
            'explanation' => 'Facets break down subjects into multiple characteristics that can be combined.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'Which software protocol is commonly used for searching and retrieving bibliographic records online?',
            'choices'     => json_encode([
                'FTP',
                'Z39.50',
                'SMTP',
                'HTTP'
            ]),
            'answer'      => 'Z39.50',
            'explanation' => 'Z39.50 is a client-server protocol for querying library catalogs and retrieving records.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 50,
            'part'        => 6,
            'question'    => 'What activity involves reviewing and removing outdated or damaged materials?',
            'choices'     => json_encode([
                'Binding',
                'Weeding',
                'Cataloging',
                'Circulation'
            ]),
            'answer'      => 'Weeding',
            'explanation' => 'Weeding ensures collection quality by removing items no longer useful or in poor condition.',
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

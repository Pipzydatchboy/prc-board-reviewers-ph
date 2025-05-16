<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart7Seeder extends Seeder
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
            'part'        => 7,
            'question'    => 'What is the primary purpose of an OPAC (Online Public Access Catalog)?',
            'choices'     => json_encode([
                'To monitor staff attendance',
                'To allow the public to search the library’s holdings online',
                'To generate purchase orders',
                'To track fines and fees'
            ]),
            'answer'      => 'To allow the public to search the library’s holdings online',
            'explanation' => 'OPACs let users find library materials via an online interface.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which protocol is commonly used for inter-library data harvesting?',
            'choices'     => json_encode([
                'Z39.50',
                'FTP',
                'HTTP',
                'SMTP'
            ]),
            'answer'      => 'Z39.50',
            'explanation' => 'Z39.50 is used for querying and retrieving records from remote catalogs.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What does RFID stand for in library technology?',
            'choices'     => json_encode([
                'Radio Frequency Identification',
                'Rapid File Indexing Device',
                'Remote File Information Data',
                'Reed-Frost Identification'
            ]),
            'answer'      => 'Radio Frequency Identification',
            'explanation' => 'RFID tags store information and facilitate contactless item tracking.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which system automates the process of book check-in and check-out?',
            'choices'     => json_encode([
                'ILS (Integrated Library System)',
                'CMS (Content Management System)',
                'ERP (Enterprise Resource Planning)',
                'DBMS (Database Management System)'
            ]),
            'answer'      => 'ILS (Integrated Library System)',
            'explanation' => 'An ILS manages circulation, cataloging, acquisitions, and more.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What is the MARC field tag for Main Entry—Personal Name?',
            'choices'     => json_encode([
                '100',
                '245',
                '300',
                '700'
            ]),
            'answer'      => '100',
            'explanation' => 'MARC tag 100 is used for personal name main entry in bibliographic records.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which metadata standard is popular for describing digital images?',
            'choices'     => json_encode([
                'Dublin Core',
                'MODS',
                'METS',
                'PREMIS'
            ]),
            'answer'      => 'METS',
            'explanation' => 'METS (Metadata Encoding and Transmission Standard) encodes descriptive, administrative, and structural metadata.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What technology uses barcodes in library circulation?',
            'choices'     => json_encode([
                'Barcode scanners',
                'RFID readers',
                'NFC tags',
                'QR code apps'
            ]),
            'answer'      => 'Barcode scanners',
            'explanation' => 'Barcode scanners read printed barcodes on book labels and patron cards.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which element of a URL identifies the server hosting the OPAC?',
            'choices'     => json_encode([
                'Hostname',
                'Path',
                'Query string',
                'Fragment identifier'
            ]),
            'answer'      => 'Hostname',
            'explanation' => 'The hostname (e.g., opac.examplelibrary.org) directs the request to the correct server.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What is the function of an institutional repository in academic libraries?',
            'choices'     => json_encode([
                'To store physical books',
                'To archive and provide open access to scholarly outputs',
                'To sell used textbooks',
                'To manage library staff'
            ]),
            'answer'      => 'To archive and provide open access to scholarly outputs',
            'explanation' => 'Institutional repositories preserve and disseminate research outputs of an institution.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which protocol supports simple metadata exchange via HTTP GET and POST?',
            'choices'     => json_encode([
                'OAI-PMH',
                'FTP',
                'SMTP',
                'SOAP'
            ]),
            'answer'      => 'OAI-PMH',
            'explanation' => 'OAI-PMH (Open Archives Initiative Protocol for Metadata Harvesting) uses HTTP requests to share metadata.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What does the term “shelflist” refer to in library operations?',
            'choices'     => json_encode([
                'A list of overdue items',
                'A record of items in physical order on the shelves',
                'A catalog of digital resources',
                'A bibliography of acquisitions'
            ]),
            'answer'      => 'A record of items in physical order on the shelves',
            'explanation' => 'A shelflist shows items in the sequence they appear on the shelves for inventory and retrieval.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which service allows libraries to share ebooks and audiobooks with patrons remotely?',
            'choices'     => json_encode([
                'Interlibrary Loan',
                'Digital Lending Platform',
                'Federated Search',
                'Link Resolver'
            ]),
            'answer'      => 'Digital Lending Platform',
            'explanation' => 'Platforms like OverDrive enable remote borrowing of digital materials.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'In library analytics, what metric measures how often an item is checked out?',
            'choices'     => json_encode([
                'Turnover rate',
                'Circulation ratio',
                'Usage index',
                'Patron engagement'
            ]),
            'answer'      => 'Turnover rate',
            'explanation' => 'Turnover rate shows the average number of times items circulate in a period.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which tool helps librarians manage and edit controlled vocabularies?',
            'choices'     => json_encode([
                'Vocabulary Management Tool',
                'Content Management System',
                'Integrated Library System',
                'Discovery Layer'
            ]),
            'answer'      => 'Vocabulary Management Tool',
            'explanation' => 'These tools maintain term relationships and hierarchies for indexing.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What is the purpose of a discovery layer in library systems?',
            'choices'     => json_encode([
                'To replace the ILS entirely',
                'To provide a user-friendly search interface across multiple resources',
                'To manage staff payroll',
                'To host digital exhibitions'
            ]),
            'answer'      => 'To provide a user-friendly search interface across multiple resources',
            'explanation' => 'Discovery layers aggregate catalogs, databases, and digital collections.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'In preservation, what does the term “deacidification” mean?',
            'choices'     => json_encode([
                'Removing acidic content from paper to prolong its life',
                'Assigning acidity ratings to books',
                'Cataloging rare materials',
                'Digitizing old newspapers'
            ]),
            'answer'      => 'Removing acidic content from paper to prolong its life',
            'explanation' => 'Deacidification neutralizes acids to prevent paper decay over time.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which open-source ILS software is widely adopted by academic libraries?',
            'choices'     => json_encode([
                'KOHA',
                'Sierra',
                'Millennium',
                'ALMA'
            ]),
            'answer'      => 'KOHA',
            'explanation' => 'Koha is a free, community-supported ILS used globally.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What term describes the process of converting print books into digital formats?',
            'choices'     => json_encode([
                'Digitization',
                'Cataloging',
                'Indexing',
                'Binding'
            ]),
            'answer'      => 'Digitization',
            'explanation' => 'Digitization produces digital copies for preservation and access.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'Which standard is used for representing bibliographic records in XML?',
            'choices'     => json_encode([
                'MARCXML',
                'Dublin Core XML',
                'JSON-LD',
                'EAD'
            ]),
            'answer'      => 'MARCXML',
            'explanation' => 'MARCXML encodes MARC data in an XML structure for interoperability.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 50,
            'part'        => 7,
            'question'    => 'What practice involves selecting and keeping only the most relevant items in a collection?',
            'choices'     => json_encode([
                'Weeding',
                'Binding',
                'Archiving',
                'Circulation'
            ]),
            'answer'      => 'Weeding',
            'explanation' => 'Weeding maintains collection quality by removing outdated or irrelevant materials.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

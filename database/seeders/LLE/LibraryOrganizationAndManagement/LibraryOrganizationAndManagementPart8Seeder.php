<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart8Seeder extends Seeder
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
            'part'        => 8,
            'question'    => 'What is the main goal of collection development in libraries?',
            'choices'     => json_encode([
                'To repair damaged books',
                'To acquire materials that meet community needs',
                'To organize events',
                'To track circulation statistics'
            ]),
            'answer'      => 'To acquire materials that meet community needs',
            'explanation' => 'Collection development focuses on selecting and acquiring resources relevant to the users.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which policy guides the acquisition and withdrawal of library materials?',
            'choices'     => json_encode([
                'Inventory policy',
                'Collection development policy',
                'Circulation policy',
                'Access policy'
            ]),
            'answer'      => 'Collection development policy',
            'explanation' => 'A collection development policy defines selection and deselection criteria.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What does the term “interlibrary loan” refer to?',
            'choices'     => json_encode([
                'Loaning books to staff',
                'Borrowing materials from other libraries',
                'Donating materials',
                'Archiving old books'
            ]),
            'answer'      => 'Borrowing materials from other libraries',
            'explanation' => 'Interlibrary loan allows lending and borrowing resources between institutions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which process ensures books are returned to the correct shelf position?',
            'choices'     => json_encode([
                'Shelf reading',
                'Weeding',
                'Cataloging',
                'Binding'
            ]),
            'answer'      => 'Shelf reading',
            'explanation' => 'Shelf reading verifies and corrects the physical order of items on shelves.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What is the purpose of a circulation desk?',
            'choices'     => json_encode([
                'Performing cataloging tasks',
                'Handling check-in and check-out of materials',
                'Developing collections',
                'Maintaining the building'
            ]),
            'answer'      => 'Handling check-in and check-out of materials',
            'explanation' => 'The circulation desk manages lending services and patron registrations.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which statistic indicates the proportion of circulation relative to collection size?',
            'choices'     => json_encode([
                'Occupancy rate',
                'Circulation turnover rate',
                'Acquisition rate',
                'Weeding rate'
            ]),
            'answer'      => 'Circulation turnover rate',
            'explanation' => 'Turnover rate measures how often items are circulated within a given time frame.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What does “patron registration” involve?',
            'choices'     => json_encode([
                'Creating catalog entries',
                'Signing up new library users',
                'Repairing damaged books',
                'Digitizing collections'
            ]),
            'answer'      => 'Signing up new library users',
            'explanation' => 'Patron registration enrolls users for library membership and services.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which tool is used to repair torn pages in library books?',
            'choices'     => json_encode([
                'Book press',
                'Book repair tape',
                'Magnetic strip',
                'Thermal laminator'
            ]),
            'answer'      => 'Book repair tape',
            'explanation' => 'Book repair tape reinforces and repairs torn or loose pages.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What is a patron self-check machine used for?',
            'choices'     => json_encode([
                'Self-service book checkout',
                'Automated cataloging',
                'Digital scanning',
                '3D printing'
            ]),
            'answer'      => 'Self-service book checkout',
            'explanation' => 'Self-check devices allow patrons to borrow and return items independently.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which service provides remote access to subscription databases?',
            'choices'     => json_encode([
                'Off-campus access',
                'Interlibrary loan',
                'Stack maintenance',
                'Bookmobile'
            ]),
            'answer'      => 'Off-campus access',
            'explanation' => 'Libraries set up off-campus authentication for users to access digital resources remotely.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What is the function of a bookmobile service?',
            'choices'     => json_encode([
                'Mobile library outreach',
                'Digitization of materials',
                'Bookbinding',
                'Archival processing'
            ]),
            'answer'      => 'Mobile library outreach',
            'explanation' => 'Bookmobiles deliver library services to communities without brick-and-mortar branches.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which preservation method protects books from insects and mold?',
            'choices'     => json_encode([
                'Freezing treatment',
                'Weeding',
                'MARC encoding',
                'Automation'
            ]),
            'answer'      => 'Freezing treatment',
            'explanation' => 'Freezing halts biological deterioration by killing pests and spores.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which report shows overdue items and fines owed?',
            'choices'     => json_encode([
                'Acquisition report',
                'Circulation report',
                'Inventory report',
                'Catalog report'
            ]),
            'answer'      => 'Circulation report',
            'explanation' => 'Circulation reports include data on loans, returns, overdue items, and fines.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What is the main purpose of library signage?',
            'choices'     => json_encode([
                'Decoration',
                'Guiding users to resources and services',
                'Advertising',
                'Security'
            ]),
            'answer'      => 'Guiding users to resources and services',
            'explanation' => 'Clear signage helps patrons navigate the library spaces and find materials.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which activity involves evaluating a collection to improve it?',
            'choices'     => json_encode([
                'Collection analysis',
                'Cataloging',
                'Binding',
                'Digitization'
            ]),
            'answer'      => 'Collection analysis',
            'explanation' => 'Collection analysis reviews strengths and weaknesses to guide development.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What is the purpose of a library’s FAQ page?',
            'choices'     => json_encode([
                'To display catalog records',
                'To answer common user questions about services and policies',
                'To host research articles',
                'To manage user accounts'
            ]),
            'answer'      => 'To answer common user questions about services and policies',
            'explanation' => 'FAQ pages help users find information on library services, rules, and procedures.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What does ERM stand for in library management?',
            'choices'     => json_encode([
                'Electronic Resource Management',
                'Enterprise Resource Module',
                'Electronic Records Maintenance',
                'External Resource Mapping'
            ]),
            'answer'      => 'Electronic Resource Management',
            'explanation' => 'ERM systems manage licensing, access, and usage of electronic resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What is federated search?',
            'choices'     => json_encode([
                'Combining search results from multiple databases in real time',
                'Searching within a single catalog',
                'A method for archiving materials',
                'A shelving system'
            ]),
            'answer'      => 'Combining search results from multiple databases in real time',
            'explanation' => 'Federated search allows users to query multiple sources simultaneously.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'Which classification approach uses user-generated tags?',
            'choices'     => json_encode([
                'Facet analysis',
                'Folksonomy',
                'Enumerative system',
                'Analytico-synthetic'
            ]),
            'answer'      => 'Folksonomy',
            'explanation' => 'Folksonomy relies on user-assigned keywords for organizing content.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 50,
            'part'        => 8,
            'question'    => 'What is the purpose of virtual reference services?',
            'choices'     => json_encode([
                'Providing online assistance to patrons',
                'Automating catalog updates',
                'Managing physical archives',
                'Processing acquisitions'
            ]),
            'answer'      => 'Providing online assistance to patrons',
            'explanation' => 'Virtual reference uses chat, email, or video to help users remotely.',
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

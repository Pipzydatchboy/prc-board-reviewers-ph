<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart9Seeder extends Seeder
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
            'part'        => 9,
            'question'    => 'What is the primary function of collection assessment?',
            'choices'     => json_encode([
                'To repair damaged items',
                'To evaluate collection strengths and gaps',
                'To update catalog software',
                'To train staff'
            ]),
            'answer'      => 'To evaluate collection strengths and gaps',
            'explanation' => 'Collection assessment helps librarians understand what resources are needed or underused.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which metric tracks user visits to the library?',
            'choices'     => json_encode([
                'Foot traffic count',
                'Circulation rate',
                'Turnover rate',
                'Acquisition count'
            ]),
            'answer'      => 'Foot traffic count',
            'explanation' => 'Foot traffic measures the number of users physically entering the library.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What is shelf maintenance?',
            'choices'     => json_encode([
                'Weeding materials',
                'Verifying the correct order of items on shelves',
                'Cataloging new acquisitions',
                'Repairing books'
            ]),
            'answer'      => 'Verifying the correct order of items on shelves',
            'explanation' => 'Shelf maintenance ensures items are properly shelved for easy retrieval.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which service provides customized research assistance?',
            'choices'     => json_encode([
                'Reference service',
                'Circulation desk',
                'Cataloging department',
                'Interlibrary loan'
            ]),
            'answer'      => 'Reference service',
            'explanation' => 'Reference services help patrons with queries and research guidance.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What is the purpose of library outreach programs?',
            'choices'     => json_encode([
                'To promote collections and services to the community',
                'To process interlibrary loans',
                'To repair books',
                'To digitize archives'
            ]),
            'answer'      => 'To promote collections and services to the community',
            'explanation' => 'Outreach programs engage users and increase awareness of library resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which technology enhances discovery by suggesting related materials?',
            'choices'     => json_encode([
                'Recommendation engine',
                'RFID system',
                'Barcode scanner',
                'Digitization software'
            ]),
            'answer'      => 'Recommendation engine',
            'explanation' => 'Recommendation engines analyze usage data to suggest relevant items.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What is the primary benefit of a discovery layer?',
            'choices'     => json_encode([
                'Single search across multiple platforms',
                'Physical shelving',
                'Book repair',
                'Staff scheduling'
            ]),
            'answer'      => 'Single search across multiple platforms',
            'explanation' => 'Discovery layers integrate different resources into one search interface.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What does DRM stand for in library e-resources?',
            'choices'     => json_encode([
                'Digital Rights Management',
                'Data Retrieval Method',
                'Digital Resource Module',
                'Document Reference Maker'
            ]),
            'answer'      => 'Digital Rights Management',
            'explanation' => 'DRM technologies control access and usage of digital content.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which policy covers acceptable use of library computers?',
            'choices'     => json_encode([
                'Computer use policy',
                'Collection development policy',
                'Privacy policy',
                'Access policy'
            ]),
            'answer'      => 'Computer use policy',
            'explanation' => 'Computer use policies set rules for accessing library technology. ',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What is the purpose of a data management plan (DMP)?',
            'choices'     => json_encode([
                'To outline how research data will be handled, stored, and shared',
                'To catalog books',
                'To plan staff schedules',
                'To manage budgets'
            ]),
            'answer'      => 'To outline how research data will be handled, stored, and shared',
            'explanation' => 'A DMP ensures data integrity and access throughout a project.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which system logs user interactions and searches?',
            'choices'     => json_encode([
                'Analytics system',
                'ILS',
                'MARC editor',
                'Binding machine'
            ]),
            'answer'      => 'Analytics system',
            'explanation' => 'Analytics track usage patterns to inform services and collections.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What does SSO stand for in library systems?',
            'choices'     => json_encode([
                'Single Sign-On',
                'Systematic Search Operation',
                'Secure Server Optimization',
                'Standardized Service Offering'
            ]),
            'answer'      => 'Single Sign-On',
            'explanation' => 'SSO allows users to access multiple systems with one login.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which tool is used to create digital exhibits?',
            'choices'     => json_encode([
                'Exhibit software',
                'ILS module',
                'Cataloging tool',
                'Weeding application'
            ]),
            'answer'      => 'Exhibit software',
            'explanation' => 'Digital exhibit platforms showcase special collections and exhibits online.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What is the main purpose of a reading program?',
            'choices'     => json_encode([
                'To encourage literacy and engagement',
                'To track fines',
                'To catalog new books',
                'To repair items'
            ]),
            'answer'      => 'To encourage literacy and engagement',
            'explanation' => 'Reading programs offer incentives and community events to promote reading.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which practice helps preserve fragile materials by creating backups?',
            'choices'     => json_encode([
                'Digitization',
                'Weeding',
                'Binding',
                'Shelf reading'
            ]),
            'answer'      => 'Digitization',
            'explanation' => 'Digitization creates digital copies to reduce handling of originals.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which tool manages electronic resource subscriptions?',
            'choices'     => json_encode([
                'ERM system',
                'Discovery layer',
                'OPAC',
                'MARC editor'
            ]),
            'answer'      => 'ERM system',
            'explanation' => 'ERM systems track licenses and usage of e-resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What is the benefit of mobile library apps?',
            'choices'     => json_encode([
                'Convenient access to catalog and accounts',
                'Automated shelving',
                'Bookbinding',
                'Interlibrary loan'
            ]),
            'answer'      => 'Convenient access to catalog and accounts',
            'explanation' => 'Mobile apps allow searching, renewing, and placing holds from smartphones.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which indicator measures digital resource usage?',
            'choices'     => json_encode([
                'Download counts',
                'Foot traffic',
                'Shelf reading',
                'Weeding rate'
            ]),
            'answer'      => 'Download counts',
            'explanation' => 'Download counts show how often digital files are accessed or downloaded.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'What is user experience (UX) design in library websites?',
            'choices'     => json_encode([
                'Designing interfaces for ease of use',
                'Cataloging materials',
                'Repairing books',
                'Scheduling staff'
            ]),
            'answer'      => 'Designing interfaces for ease of use',
            'explanation' => 'UX design ensures library websites are intuitive and accessible.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 50,
            'part'        => 9,
            'question'    => 'Which service helps patrons with technology training?',
            'choices'     => json_encode([
                'Digital literacy workshops',
                'Circulation desk',
                'Binding service',
                'OPAC maintenance'
            ]),
            'answer'      => 'Digital literacy workshops',
            'explanation' => 'Libraries offer workshops to teach users how to use digital tools and resources.',
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

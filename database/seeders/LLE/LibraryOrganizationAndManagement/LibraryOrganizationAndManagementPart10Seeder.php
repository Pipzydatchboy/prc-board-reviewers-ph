<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart10Seeder extends Seeder
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
            'part'        => 10,
            'question'    => 'What is the purpose of integrated library system (ILS) backups?',
            'choices'     => json_encode([
                'To restore system after data loss',
                'To upgrade software automatically',
                'To share data with patrons',
                'To update catalog records'
            ]),
            'answer'      => 'To restore system after data loss',
            'explanation' => 'Backups protect against hardware failure or accidental data deletion.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which standard is used for metadata in digital preservation?',
            'choices'     => json_encode([
                'PREMIS',
                'MARC',
                'Dublin Core',
                'MODS'
            ]),
            'answer'      => 'PREMIS',
            'explanation' => 'PREMIS defines preservation metadata for long-term digital preservation.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What does UTF-8 stand for in library systems?',
            'choices'     => json_encode([
                'Unicode Transformation Format – 8 bit',
                'Universal Text Format – 8',
                'Unified Transfer Function – 8',
                'User Text Form – 8'
            ]),
            'answer'      => 'Unicode Transformation Format – 8 bit',
            'explanation' => 'UTF-8 encodes characters for multilingual catalog and data exchange.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which protocol is commonly used for single sign-on in libraries?',
            'choices'     => json_encode([
                'SAML',
                'HTTP',
                'Z39.50',
                'FTP'
            ]),
            'answer'      => 'SAML',
            'explanation' => 'SAML (Security Assertion Markup Language) enables SSO between identity providers and services.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What tool is used to monitor server performance for an ILS?',
            'choices'     => json_encode([
                'Monitoring software',
                'Barcode scanner',
                'RFID reader',
                'OPAC interface'
            ]),
            'answer'      => 'Monitoring software',
            'explanation' => 'Monitoring tools track CPU, memory, and database performance.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which methodology assesses risk in library digital projects?',
            'choices'     => json_encode([
                'Risk assessment',
                'Cataloging',
                'Binding',
                'Shelf reading'
            ]),
            'answer'      => 'Risk assessment',
            'explanation' => 'Risk assessment identifies and mitigates potential threats to digital assets.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What is the role of APIs in library management?',
            'choices'     => json_encode([
                'To enable data exchange between systems',
                'To scan barcodes',
                'To bind books',
                'To digitize materials'
            ]),
            'answer'      => 'To enable data exchange between systems',
            'explanation' => 'APIs allow seamless integration with external services and applications.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which term refers to the physical layout of a library’s shelving?',
            'choices'     => json_encode([
                'Floor plan',
                'Signage',
                'Binding plan',
                'Dewey layout'
            ]),
            'answer'      => 'Floor plan',
            'explanation' => 'Floor plans show where collections and services are located.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What is the function of a license manager in e-resource systems?',
            'choices'     => json_encode([
                'To track and enforce licensing terms',
                'To catalog books',
                'To bind journals',
                'To manage shelves'
            ]),
            'answer'      => 'To track and enforce licensing terms',
            'explanation' => 'License managers ensure compliance with vendor agreements.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which practice ensures long-term readability of digital files?',
            'choices'     => json_encode([
                'Format migration',
                'Shelf reading',
                'Binding',
                'Weeding'
            ]),
            'answer'      => 'Format migration',
            'explanation' => 'Migrating file formats prevents obsolescence and preserves access.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What is the purpose of user training sessions in libraries?',
            'choices'     => json_encode([
                'To teach patrons how to use resources and tools',
                'To catalog new items',
                'To repair books',
                'To manage staff'
            ]),
            'answer'      => 'To teach patrons how to use resources and tools',
            'explanation' => 'Training improves user confidence and resource utilization.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which feature allows reservation of library equipment online?',
            'choices'     => json_encode([
                'Booking module',
                'OPAC search',
                'Shelf reading',
                'Weeding tool'
            ]),
            'answer'      => 'Booking module',
            'explanation' => 'Booking modules manage reservations for rooms, equipment, and events.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What is a digital signage system used for in libraries?',
            'choices'     => json_encode([
                'Displaying announcements and directions',
                'Cataloging items',
                'Binding journals',
                'Digitization'
            ]),
            'answer'      => 'Displaying announcements and directions',
            'explanation' => 'Digital signs inform patrons about events, hours, and locations.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which tool tracks usage stats for e-books and databases?',
            'choices'     => json_encode([
                'COUNTER reports',
                'Shelf reading logs',
                'Weeding reports',
                'Binding logs'
            ]),
            'answer'      => 'COUNTER reports',
            'explanation' => 'COUNTER provides standardized usage metrics for electronic resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What does VPN access allow for library patrons?',
            'choices'     => json_encode([
                'Secure off-campus resource access',
                'Catalog editing',
                'Bookbinding',
                'Shelf reading'
            ]),
            'answer'      => 'Secure off-campus resource access',
            'explanation' => 'VPNs encrypt connections so patrons can use library services remotely.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which plan outlines procedures for disaster recovery in libraries?',
            'choices'     => json_encode([
                'Disaster recovery plan',
                'Collection development policy',
                'Circulation policy',
                'Access policy'
            ]),
            'answer'      => 'Disaster recovery plan',
            'explanation' => 'This plan details steps to restore operations after emergencies.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What is linked data used for in library catalogs?',
            'choices'     => json_encode([
                'Connecting bibliographic data across the web',
                'Binding books',
                'Weeding records',
                'Shelf reading'
            ]),
            'answer'      => 'Connecting bibliographic data across the web',
            'explanation' => 'Linked data uses URIs and RDF to link and share data online.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which platform allows collaborative creation of library guides?',
            'choices'     => json_encode([
                'LibGuides',
                'MARC editor',
                'Weeding tool',
                'Binding machine'
            ]),
            'answer'      => 'LibGuides',
            'explanation' => 'LibGuides provides tools for building research guides and subject portals.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'What is the benefit of QR codes in library materials?',
            'choices'     => json_encode([
                'Quick access to online resources',
                'Binding stability',
                'Shelf reading accuracy',
                'Cataloging speed'
            ]),
            'answer'      => 'Quick access to online resources',
            'explanation' => 'QR codes link physical items to digital content like e-books or tutorials.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 50,
            'part'        => 10,
            'question'    => 'Which initiative supports open access publishing in libraries?',
            'choices'     => json_encode([
                'Institutional repository',
                'Automated cataloging',
                'Binding service',
                'Shelf reading'
            ]),
            'answer'      => 'Institutional repository',
            'explanation' => 'Repositories provide access to open access research and publications.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

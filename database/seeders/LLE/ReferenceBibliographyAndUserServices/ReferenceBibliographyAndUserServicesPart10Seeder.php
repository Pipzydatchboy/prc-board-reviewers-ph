<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart10Seeder extends Seeder
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
        ['subject_id'=>51,'part'=>10,'question'=>'Which service offers on-demand digital scanning of print materials?','choices'=>json_encode(['Digitization on demand','Bookmobile','Interlibrary loan','Weeding service']),'answer'=>'Digitization on demand','explanation'=>'Provides immediate digital copies of print items per user request.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'What is the function of an access control list (ACL) in library systems?','choices'=>json_encode(['Manage user permissions','Bind books','Catalog metadata','Generate reports']),'answer'=>'Manage user permissions','explanation'=>'ACLs define which users or roles can access specific resources.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which protocol secures data transfer in remote logins?','choices'=>json_encode(['SSH','HTTP','FTP','SMTP']),'answer'=>'SSH','explanation'=>'Secure Shell encrypts terminal sessions for secure remote administration.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which tool tracks digital repository ingest workflows?','choices'=>json_encode(['Workflow manager','MARC editor','OPAC','Discovery layer']),'answer'=>'Workflow manager','explanation'=>'Monitors steps for ingesting and processing digital collections.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'What does PII stand for in user data management?','choices'=>json_encode(['Personally Identifiable Information','Public Information Index','Preservation Ingest Interface','Privacy Impact Identifier']),'answer'=>'Personally Identifiable Information','explanation'=>'Refers to data that can identify an individual, requiring special handling.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which service automates journal package renewals?','choices'=>json_encode(['Licensing manager','OPAC','ILS','Catalog service']),'answer'=>'Licensing manager','explanation'=>'Manages e-resource subscriptions and contract renewals.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which standard ensures longevity of PDF files?','choices'=>json_encode(['PDF/A','MARC21','PREMIS','MODS']),'answer'=>'PDF/A','explanation'=>'PDF/A is an ISO-standardized version of PDF for long-term archiving.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'What is the purpose of a usage rules policy?','choices'=>json_encode(['Define fair use and restrictions','Manage staffing','Process acquisitions','Bind journals']),'answer'=>'Define fair use and restrictions','explanation'=>'Outlines acceptable actions and limits for accessing resources.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which tool assists in normalizing author name variations?','choices'=>json_encode(['Authority control file','Link resolver','Barcode scanner','MARC importer']),'answer'=>'Authority control file','explanation'=>'Ensures consistency by linking name variants to authorized form.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which platform provides integrated interlibrary loan and document delivery?','choices'=>json_encode(['ILLiad','WorldCat','LibGuides','Summon']),'answer'=>'ILLiad','explanation'=>'Comprehensive ILL management software supporting requests and delivery.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which metric shows percentage of electronic resource availability?','choices'=>json_encode(['Uptime percentage','Turnover rate','Foot traffic','Weeding rate']),'answer'=>'Uptime percentage','explanation'=>'Indicates proportion of time an e-resource is accessible to users.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'What does LDAP stand for?','choices'=>json_encode(['Lightweight Directory Access Protocol','Library Data Access Platform','Local Digital Archive Protocol','Linked Data Access Protocol']),'answer'=>'Lightweight Directory Access Protocol','explanation'=>'Protocol for accessing and maintaining distributed directory information services.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which tool provides batch export of item usage logs?','choices'=>json_encode(['Analytics exporter','Link resolver','OPAC','MARC editor']),'answer'=>'Analytics exporter','explanation'=>'Exports usage data in bulk for analysis and reporting.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which service offers real-time availability of group study rooms?','choices'=>json_encode(['Room scheduler','Catalog search','Circulation desk','Weeding report']),'answer'=>'Room scheduler','explanation'=>'Displays and books available study spaces dynamically.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'What is the role of OAuth in library applications?','choices'=>json_encode(['Authorize third-party access','Bind materials','Scan barcodes','Organize shelves']),'answer'=>'Authorize third-party access','explanation'=>'OAuth allows users to permit applications to access resources without sharing credentials.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which standard defines data exchange for statistical datasets?','choices'=>json_encode(['SDMX','MARC21','PREMIS','Dublin Core']),'answer'=>'SDMX','explanation'=>'Statistical Data and Metadata eXchange standard for sharing statistical information.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which feature in OPAC supports multilingual interfaces?','choices'=>json_encode(['Language selector','Bookmarking','Paging','Circulation report']),'answer'=>'Language selector','explanation'=>'Allows users to switch catalog interface language.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which tool supports OCR-enhanced search of scanned collections?','choices'=>json_encode(['Full-text indexer','Barcode scanner','Link resolver','MARC editor']),'answer'=>'Full-text indexer','explanation'=>'Indexes OCR output to enable searching within scanned documents.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'What is the purpose of a ticketing system in libraries?','choices'=>json_encode(['Manage support inquiries and tasks','Catalog items','Bind books','Weed collections']),'answer'=>'Manage support inquiries and tasks','explanation'=>'Tracks and resolves staff and patron requests efficiently.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>10,'question'=>'Which protocol enables secure SSO via federated identity?','choices'=>json_encode(['SAML','HTTP','FTP','SMTP']),'answer'=>'SAML','explanation'=>'Security Assertion Markup Language used for federated login.', 'created_at'=>$now,'updated_at'=>$now],
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

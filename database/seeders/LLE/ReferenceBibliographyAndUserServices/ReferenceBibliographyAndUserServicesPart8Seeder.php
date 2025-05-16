<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart8Seeder extends Seeder
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
        ['subject_id'=>51,'part'=>8,'question'=>'Which tool provides automated keyword suggestion when searching databases?','choices'=>json_encode(['Autocomplete','Spell check','Link resolver','Citation generator']),'answer'=>'Autocomplete','explanation'=>'Autocomplete suggests terms based on indexing and usage.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'What is the function of a knowledge graph in library systems?','choices'=>json_encode(['Visualize relationships between entities','Bind records','Print catalog cards','Monitor network']),'answer'=>'Visualize relationships between entities','explanation'=>'Knowledge graphs map connections among authors, works, and topics.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which standard is used for tagging web pages with metadata?','choices'=>json_encode(['Schema.org','MARC21','PREMIS','Dublin Core']),'answer'=>'Schema.org','explanation'=>'Schema.org provides vocabularies for structured data on the web.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which service offers personalized alerts for new acquisitions?','choices'=>json_encode(['New book alert','Weeding notice','Binding update','Catalog refresh']),'answer'=>'New book alert','explanation'=>'Alerts notify patrons when new items matching interests are added.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which protocol is commonly used for federated discovery in libraries?','choices'=>json_encode(['Z39.50','SMTP','FTP','HTTP']),'answer'=>'Z39.50','explanation'=>'Z39.50 supports querying multiple catalogs in real time.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'What is the purpose of a thesaurus in information retrieval?','choices'=>json_encode(['Control vocabulary and synonyms','Bind books','Repair records','Manage budgets']),'answer'=>'Control vocabulary and synonyms','explanation'=>'Thesauri ensure consistent subject indexing via preferred terms.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which feature allows saving and organizing favorite records in OPAC?','choices'=>json_encode(['Bookmarking','Tagging','Circulation','Weeding']),'answer'=>'Bookmarking','explanation'=>'Bookmarks let users mark and revisit specific records.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which tool is used to map and analyze citation networks?','choices'=>json_encode(['Bibliometric analysis software','Link resolver','OPAC','MARC editor']),'answer'=>'Bibliometric analysis software','explanation'=>'These tools visualize citation relationships and impact.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'What does the term “digital preservation” encompass?','choices'=>json_encode(['Maintaining digital content accessibility over time','Shelving digital files','Binding e-books','Cataloging computers']),'answer'=>'Maintaining digital content accessibility over time','explanation'=>'Digital preservation ensures long-term usability of digital objects.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which platform supports live chat with librarians during reference hours?','choices'=>json_encode(['LibChat','OPAC','ILS','MARC editor']),'answer'=>'LibChat','explanation'=>'LibChat integrates chat services into library websites.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which service aggregates news articles and journals into one interface?','choices'=>json_encode(['Current platforms','WorldCat','Call number directory','Bookmobile']),'answer'=>'Current platforms','explanation'=>'Current platforms provide consolidated access to news and periodicals.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which metadata element in Dublin Core describes the creator of a resource?','choices'=>json_encode(['dc:creator','dc:title','dc:date','dc:format']),'answer'=>'dc:creator','explanation'=>'dc:creator specifies the entity primarily responsible for resource creation.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which tool is best for cleaning and normalizing bibliographic data?','choices'=>json_encode(['OpenRefine','Link resolver','MARC editor','OPAC']),'answer'=>'OpenRefine','explanation'=>'OpenRefine cleans, transforms, and reconciles messy metadata.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'What is the role of API endpoints in library discovery tools?','choices'=>json_encode(['Provide data access for integration','Bind materials','Print catalog cards','Monitor circulation']),'answer'=>'Provide data access for integration','explanation'=>'Endpoints allow external systems to query and retrieve catalog data.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which approach helps in user experience (UX) testing of library interfaces?','choices'=>json_encode(['Usability testing','Cataloging','Binding','Weeding']),'answer'=>'Usability testing','explanation'=>'Usability tests evaluate how easily users interact with interfaces.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which tool supports automated backlog of patron requests?','choices'=>json_encode(['Ticketing system','MARC editor','RFID reader','OPAC']),'answer'=>'Ticketing system','explanation'=>'Ticketing keeps track of user inquiries and service requests.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'What does GDPR compliance affect in library user services?','choices'=>json_encode(['User data privacy and handling','Shelving order','Circulation stats','Binding policies']),'answer'=>'User data privacy and handling','explanation'=>'GDPR mandates protection and proper use of personal data.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which feature allows patron-driven acquisition?','choices'=>json_encode(['Approval plan integration','Weeding list','Shelf reading','Binding']),'answer'=>'Approval plan integration','explanation'=>'Patron-driven acquisition lets users trigger purchases based on usage.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'Which service provides mobile access to library catalogs and accounts?','choices'=>json_encode(['Mobile app','Bookmobile','RFID','OPAC']),'answer'=>'Mobile app','explanation'=>'Mobile apps give patrons seamless access on smartphones.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>8,'question'=>'What is the benefit of linked open data in libraries?','choices'=>json_encode(['Enhanced interoperability and discovery','Binding stability','Shelf order','Track fines']),'answer'=>'Enhanced interoperability and discovery','explanation'=>'LOD connects and shares library data across the web.', 'created_at'=>$now,'updated_at'=>$now],
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

<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart9Seeder extends Seeder
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
        ['subject_id'=>51,'part'=>9,'question'=>'Which index provides abstracts and citation data for psychology?','choices'=>json_encode(['PsycINFO','PubMed','ERIC','Scopus']),'answer'=>'PsycINFO','explanation'=>'PsycINFO indexes psychology literature with abstracts and citations.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which tool visualizes usage trends over time?','choices'=>json_encode(['Analytics dashboard','OPAC','MARC editor','RFID reader']),'answer'=>'Analytics dashboard','explanation'=>'Dashboards chart metrics like circulation and database sessions.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which tool visualizes usage trends over time?','choices'=>json_encode(['Analytics dashboard','OPAC','MARC editor','RFID reader']),'answer'=>'Analytics dashboard','explanation'=>'Dashboards chart metrics like circulation and database sessions.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which metadata standard is designed for geospatial data?','choices'=>json_encode(['ISO 19115','Dublin Core','PREMIS','MODS']),'answer'=>'ISO 19115','explanation'=>'ISO 19115 specifies metadata for geographic information.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'What does API stand for?','choices'=>json_encode(['Application Programming Interface','Automated Protocol Integration','Access Point Identifier','Archive Package Info']),'answer'=>'Application Programming Interface','explanation'=>'APIs allow software components to communicate.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which tool checks OCR accuracy and highlights probable errors?','choices'=>json_encode(['OCR quality checker','Link resolver','Citation exporter','Binding tool']),'answer'=>'OCR quality checker','explanation'=>'These tools flag low-confidence OCR for manual review.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which protocol is used to push notifications to library mobile apps?','choices'=>json_encode(['Push Notification Service','SMTP','FTP','HTTP']),'answer'=>'Push Notification Service','explanation'=>'Platforms like APNs or FCM deliver real-time mobile alerts.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which resource is specialized for educational literature?','choices'=>json_encode(['ERIC','PubMed','Scopus','Web of Science']),'answer'=>'ERIC','explanation'=>'ERIC is the premier database for education research.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'What is the main purpose of a digital exhibit?','choices'=>json_encode(['Showcase special collections online','Bind digital files','Catalog books','Weed collections']),'answer'=>'Showcase special collections online','explanation'=>'Digital exhibits provide thematic displays of digitized artifacts.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which feature allows patrons to renew loans online?','choices'=>json_encode(['Self-service renewal','Bibliographic instruction','Circulation report','Shelf map']),'answer'=>'Self-service renewal','explanation'=>'OPACs include renewal modules for user convenience.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which tool supports batch editing of MARC records?','choices'=>json_encode(['MARC editor with batch mode','Link resolver','OPAC search','Discovery layer']),'answer'=>'MARC editor with batch mode','explanation'=>'Batch editors allow simultaneous changes to multiple records.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'What is the function of a link rot monitoring service?','choices'=>json_encode(['Detect and report broken URLs','Generate citations','Repair bindings','Track fines']),'answer'=>'Detect and report broken URLs','explanation'=>'Monitoring services check for URL decay and report issues.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which concept refers to the longevity of digital formats?','choices'=>json_encode(['Digital preservation','Circulation rate','Shelf life','Binding durability']),'answer'=>'Digital preservation','explanation'=>'Preservation ensures long-term readability of digital files.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which service uses chatbots to answer FAQs automatically?','choices'=>json_encode(['FAQ chatbot','SDI service','Citation tracker','ILL request']),'answer'=>'FAQ chatbot','explanation'=>'Chatbots can be trained on knowledge base articles.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which standard defines rights statements for digital objects?','choices'=>json_encode(['RightsStatements.org','Dublin Core','PREMIS','MARC21']),'answer'=>'RightsStatements.org','explanation'=>'RightsStatements.org provides standard vocabulary for rights metadata.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'What does GUI stand for?','choices'=>json_encode(['Graphical User Interface','Global Usage Index','General Utility Integration','Gateway User Interaction']),'answer'=>'Graphical User Interface','explanation'=>'GUI refers to visual components for user interaction.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which tool provides citation metrics like h-index?','choices'=>json_encode(['Scopus Author Metrics','OPAC','MARC editor','Citation generator']),'answer'=>'Scopus Author Metrics','explanation'=>'Scopus offers author-level metrics including h-index and citations.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which protocol is used for full-text search across repositories?','choices'=>json_encode(['SRU/SRW','SMTP','FTP','HTTP']),'answer'=>'SRU/SRW','explanation'=>'Search/Retrieve via URL/Web is an HTTP-based search protocol.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which tool helps generate authority control reports?','choices'=>json_encode(['Authority control module in ILS','Link resolver','OPAC','RFID tracker']),'answer'=>'Authority control module in ILS','explanation'=>'ILS modules include authority control management tools.', 'created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>51,'part'=>9,'question'=>'Which service allows texting call numbers to patrons?','choices'=>json_encode(['SMS service','Email notice','OPAC message','Catalog SMS plugin']),'answer'=>'SMS service','explanation'=>'SMS plugins let libraries send shelf locations directly to phones.', 'created_at'=>$now,'updated_at'=>$now],
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

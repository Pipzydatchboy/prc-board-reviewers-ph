<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart4Seeder extends Seeder
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
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which service provides real-time chat assistance to remote users?','choices'=>json_encode(['Chat reference','Email reference','Telephone reference','Walk-in reference']),'answer'=>'Chat reference','explanation'=>'Chat reference enables librarians to assist users online in real time.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What is the primary purpose of a link resolver in library systems?','choices'=>json_encode(['Connect citations to full-text resources','Shorten URLs for social media','Improve search ranking','Check for broken links']),'answer'=>'Connect citations to full-text resources','explanation'=>'Link resolvers use OpenURL metadata to direct users to accessible full-text.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which platform delivers training modules via short video tutorials?','choices'=>json_encode(['Library tutorials portal','OPAC','ILS','MARC editor']),'answer'=>'Library tutorials portal','explanation'=>'Tutorial portals host micro-learning videos on library tools and services.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which method supports metadata enrichment by users?','choices'=>json_encode(['Tagging','Binding','Cataloging by staff','Weeding']),'answer'=>'Tagging','explanation'=>'User tagging allows crowdsourced keywords to improve resource discovery.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What is the purpose of a usage statistics report?','choices'=>json_encode(['Analyze resource access and inform collection decisions','Record book checkouts only','List library fines','Show event attendance']),'answer'=>'Analyze resource access and inform collection decisions','explanation'=>'Usage reports reveal which resources are most and least used for budgeting and selection.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which tool helps manage digital rights and licensing for e-resources?','choices'=>json_encode(['ERM system','OPAC','Chatbot','Link resolver']),'answer'=>'ERM system','explanation'=>'Electronic Resource Management systems handle license terms and access control.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which service offers personalized book recommendations based on borrowing history?','choices'=>json_encode(['Recommendation engine','Reference desk','Catalog search','Weeding service']),'answer'=>'Recommendation engine','explanation'=>'Recommendation systems use algorithms to suggest titles tailored to user preferences.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What is the function of an embargo period in open access publishing?','choices'=>json_encode(['Delay free public access to paywalled content','Make content immediately open','Archive print copies','Limit download counts']),'answer'=>'Delay free public access to paywalled content','explanation'=>'Embargoes protect publisher revenue by postponing open access for a set time.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which standard specifies guidelines for electronic resource authentication via Shibboleth?','choices'=>json_encode(['SAML','HTTP','FTP','Z39.50']),'answer'=>'SAML','explanation'=>'Security Assertion Markup Language underpins Shibboleth for federated login.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which service integrates chatbots for 24/7 user queries?','choices'=>json_encode(['Virtual reference service','Print reference','Audio reference','Video reference']),'answer'=>'Virtual reference service','explanation'=>'Virtual reference often uses chatbots to handle off-hours user questions.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What is the role of a librarian in digital scholarship services?','choices'=>json_encode(['Support research data management and digital tool use','Only shelve books','Process physical archives','Repair books']),'answer'=>'Support research data management and digital tool use','explanation'=>'Librarians guide scholars in data curation, digital publishing, and tool application.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which platform offers open textbook access to students?','choices'=>json_encode(['OER platform','OPAC','ILS','MARC editor']),'answer'=>'OER platform','explanation'=>'OER platforms provide free access to openly licensed textbooks and materials.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What service provides automatic citation downloads from library catalogs?','choices'=>json_encode(['Citation export feature','Weeding tool','Shelf reading report','Binding service']),'answer'=>'Citation export feature','explanation'=>'Export features allow users to download bibliographic records in citation formats.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which service tracks interlibrary loan fulfillment times?','choices'=>json_encode(['IL loan report','Circulation report','Acquisition report','Inventory report']),'answer'=>'IL loan report','explanation'=>'Interlibrary loan reports monitor request and delivery timelines for borrowed items.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which outreach service brings library materials to community locations?','choices'=>json_encode(['Bookmobile','Digital kiosk','Online repository','Study carrel']),'answer'=>'Bookmobile','explanation'=>'Bookmobiles extend library services to areas without branches.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What tool helps monitor database uptime and performance?','choices'=>json_encode(['Monitoring dashboard','Usage report','Weeding list','Binding schedule']),'answer'=>'Monitoring dashboard','explanation'=>'Dashboards display real-time system metrics for databases and servers.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which service provides personalized research guides created by librarians?','choices'=>json_encode(['LibGuides','OPAC','ILS','MARC editor']),'answer'=>'LibGuides','explanation'=>'LibGuides lets librarians curate subject guides and instructional materials.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What is the function of an accessibility audit in digital services?','choices'=>json_encode(['Evaluate compliance with accessibility standards','Weeding digital collections','Cataloging metadata','User survey']),'answer'=>'Evaluate compliance with accessibility standards','explanation'=>'Audits ensure digital interfaces meet WCAG guidelines for users with disabilities.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'Which privacy tool anonymizes user search logs?','choices'=>json_encode(['Log anonymizer','OPAC','ILS','MARC editor']),'answer'=>'Log anonymizer','explanation'=>'Anonymizers remove personally identifiable information from usage logs.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>4,'question'=>'What does the term “dark archive” refer to?','choices'=>json_encode(['Hidden preservation repository','Public digital archive','Open access repository','Binding storage']),'answer'=>'Hidden preservation repository','explanation'=>'Dark archives store content securely without public access for preservation purposes.','created_at'=>$now,'updated_at'=>$now ],
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

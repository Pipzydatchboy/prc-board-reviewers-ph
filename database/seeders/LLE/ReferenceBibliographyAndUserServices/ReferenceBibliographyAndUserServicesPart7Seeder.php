<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart7Seeder extends Seeder
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
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which reference tool provides curated links to open educational content?','choices'=>json_encode(['OpenCourseWare','MARC editor','Link resolver','PDF aggregator']),'answer'=>'OpenCourseWare','explanation'=>'OCW platforms offer free access to university course materials.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'What is the main benefit of ORCID for authors?','choices'=>json_encode(['Unique researcher identifier','Faster ILL requests','Improved cataloging','Better shelving']),'answer'=>'Unique researcher identifier','explanation'=>'ORCID provides a persistent digital identifier for individual researchers.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which platform is used for sharing academic presentations?','choices'=>json_encode(['SlideShare','JSTOR','WorldCat','Scopus']),'answer'=>'SlideShare','explanation'=>'SlideShare hosts slide decks and presentations for public sharing.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'What does DOI stand for?','choices'=>json_encode(['Digital Object Identifier','Data Object Index','Document Online Identifier','Digital Organiser Interface']),'answer'=>'Digital Object Identifier','explanation'=>'DOI is a persistent identifier for electronic documents.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which metadata schema supports preservation metadata?','choices'=>json_encode(['PREMIS','MARC21','Dublin Core','MODS']),'answer'=>'PREMIS','explanation'=>'PREMIS is the international standard for preservation metadata.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which citation style uses footnotes and bibliography?','choices'=>json_encode(['Chicago','APA','IEEE','Vancouver']),'answer'=>'Chicago','explanation'=>'Chicago style often employs footnotes and a bibliography.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'What is Zotero primarily used for?','choices'=>json_encode(['Reference management','Text editing','Data analysis','Image conversion']),'answer'=>'Reference management','explanation'=>'Zotero organizes and cites research sources.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which protocol is used for secure library catalog login?','choices'=>json_encode(['LDAP','FTP','SMTP','HTTP']),'answer'=>'LDAP','explanation'=>'LDAP enables centralized authentication for directory services.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which tool helps visually map subject terms?','choices'=>json_encode(['Vocab mapping tool','MARC editor','PDF viewer','OPAC']),'answer'=>'Vocab mapping tool','explanation'=>'Vocabulary mapping tools display relationships between terms graphically.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which resource is best for locating government statistical reports?','choices'=>json_encode(['GOVINFO','ERIC','PubMed','IEEE Xplore']),'answer'=>'GOVINFO','explanation'=>'GOVINFO provides access to official U.S. Government publications.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'What does FAIR stand for in data management?','choices'=>json_encode(['Findable, Accessible, Interoperable, Reusable','Fast, Active, Interactive, Reliable','Free, Archived, Indexed, Readable','Formatted, Annotated, Indexed, Reviewed']),'answer'=>'Findable, Accessible, Interoperable, Reusable','explanation'=>'FAIR principles guide good data stewardship.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which service provides digital exhibit creation?','choices'=>json_encode(['Omeka','WorldCat','MARC editor','Zotero']),'answer'=>'Omeka','explanation'=>'Omeka is a platform for building online digital exhibitions.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which tool is used for OCR correction and metadata entry?','choices'=>json_encode(['Metadata editor','Barcode scanner','Link checker','MARC importer']),'answer'=>'Metadata editor','explanation'=>'Editors allow manual correction of OCR outputs and metadata review.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which index provides citations in computer science?','choices'=>json_encode(['DBLP','Scopus','PubMed','ERIC']),'answer'=>'DBLP','explanation'=>'DBLP indexes computer science journals and conference proceedings.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which protocol is used for single sign-on in academic libraries?','choices'=>json_encode(['Shibboleth','FTP','SMTP','Z39.50']),'answer'=>'Shibboleth','explanation'=>'Shibboleth uses SAML for federated identity management.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'What is the purpose of a usage license dashboard?','choices'=>json_encode(['Monitor e-resource access and compliance','Bind materials','Catalog items','Weed collections']),'answer'=>'Monitor e-resource access and compliance','explanation'=>'Dashboards display license usage statistics and limits.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which standard defines bibliographic data exchange format?','choices'=>json_encode(['MARC21','Dublin Core','PREMIS','MODS']),'answer'=>'MARC21','explanation'=>'MARC21 is the de facto format for bibliographic record exchange.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which tool allows real-time collaborative note taking?','choices'=>json_encode(['Google Docs','MARC editor','OPAC','Discovery layer']),'answer'=>'Google Docs','explanation'=>'Google Docs supports synchronous document editing by multiple users.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'Which recommendation tool suggests articles based on content similarity?','choices'=>json_encode(['Content-based recommender','Citation index','Library catalog','Barcode scanner']),'answer'=>'Content-based recommender','explanation'=>'These systems analyze document features to suggest similar items.', 'created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>7,'question'=>'What service uses chatbots to triage reference requests?','choices'=>json_encode(['Virtual reference chatbot','Print reference desk','Catalog desk','Binding service']),'answer'=>'Virtual reference chatbot','explanation'=>'Chatbots help direct user queries to appropriate services or staff.', 'created_at'=>$now,'updated_at'=>$now ],
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

<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart6Seeder extends Seeder
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
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which database uses MeSH terms for indexing medical literature?','choices'=>json_encode(['PubMed','IEEE Xplore','ERIC','PsycINFO']),'answer'=>'PubMed','explanation'=>'PubMed uses Medical Subject Headings (MeSH) for precise indexing.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'What is the primary function of a citation tracker?','choices'=>json_encode(['Monitor citations of a work','Organize catalogs','Manage serials','Schedule events']),'answer'=>'Monitor citations of a work','explanation'=>'Citation trackers alert authors when their publications are cited.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which resource provides access to historical newspapers?','choices'=>json_encode(['ProQuest Historical Newspapers','LexisNexis','Westlaw','SciFinder']),'answer'=>'ProQuest Historical Newspapers','explanation'=>'This archive offers digitized issues of newspapers dating back centuries.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which protocol allows remote harvesting of metadata?','choices'=>json_encode(['OAI-PMH','Z39.50','FTP','SMTP']),'answer'=>'OAI-PMH','explanation'=>'The Open Archives Initiative Protocol for Metadata Harvesting is standard for repositories.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'What tool converts ISBNs into bibliographic records?','choices'=>json_encode(['ISBN lookup','DOI resolver','Link checker','OPAC search']),'answer'=>'ISBN lookup','explanation'=>'ISBN lookup services retrieve metadata from bibliographic databases by ISBN.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which classification scheme is used for legal materials?','choices'=>json_encode(['National Dewey','Library of Congress Class K','Colon Classification','UDC']),'answer'=>'Library of Congress Class K','explanation'=>'Class K in LCC covers law and legal subjects.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which index lists articles citing a specific journal?','choices'=>json_encode(['Web of Science','JSTOR','Google Scholar','ScienceDirect']),'answer'=>'Web of Science','explanation'=>'Web of Science provides citation indexing across journals.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'What is the role of an RSS aggregator?','choices'=>json_encode(['Collect and display RSS feeds','Generate MARC records','Encrypt data','Bind books']),'answer'=>'Collect and display RSS feeds','explanation'=>'Aggregators compile updates from multiple RSS sources in one view.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which service offers on-demand interlibrary loan delivery?','choices'=>json_encode(['ILLiad','WorldCat','LibGuides','Summon']),'answer'=>'ILLiad','explanation'=>'ILLiad is ILL management software for request tracking and delivery.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which digital standard defines packaging for preservation?','choices'=>json_encode(['BagIt','PDF/A','MARC21','HTML5']),'answer'=>'BagIt','explanation'=>'BagIt defines a packaging format for reliable file transfer and preservation.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which tool provides automated subject classification suggestions?','choices'=>json_encode(['Machine learning classifier','RFID reader','Barcode scanner','MARC editor']),'answer'=>'Machine learning classifier','explanation'=>'ML classifiers can suggest subject headings based on content analysis.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'What does LOCKSS stand for?','choices'=>json_encode(['Lots Of Copies Keep Stuff Safe','Library Of Congress Keep Safe','Local OAI Content Storage Service','Linked Open Content Keep Safe']),'answer'=>'Lots Of Copies Keep Stuff Safe','explanation'=>'LOCKSS is a digital preservation system ensuring multiple copies.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which metric measures the average age of a collection’s items?','choices'=>json_encode(['Turnover rate','Average age','Weeding rate','Circulation rate']),'answer'=>'Average age','explanation'=>'Average age indicates how recently materials were acquired.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which platform aggregates academic preprints?','choices'=>json_encode(['arXiv','EBSCOhost','Scopus','Gale']),'answer'=>'arXiv','explanation'=>'arXiv hosts preprints in fields like physics, math, and computer science.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'What is the purpose of a knowledge base in user services?','choices'=>json_encode(['Store FAQs and guides','Catalog books','Weed archives','Bind materials']),'answer'=>'Store FAQs and guides','explanation'=>'Knowledge bases centralize how-to content for users and staff.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which service uses OCR to index historical documents?','choices'=>json_encode(['Text recognition indexing','Barcode indexing','Link resolution','MARC cataloging']),'answer'=>'Text recognition indexing','explanation'=>'OCR-based indexing extracts text from images for searchability.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which standard governs metadata for statistical data?','choices'=>json_encode(['SDMX','Dublin Core','PREMIS','MARC']),'answer'=>'SDMX','explanation'=>'Statistical Data and Metadata eXchange is for statistical information.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which component of an OPAC displays cover images and summaries?','choices'=>json_encode(['Discovery interface','Catalog backend','ILS server','Link resolver']),'answer'=>'Discovery interface','explanation'=>'Discovery layers enhance OPACs with enriched record displays.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'What is the main goal of knowledge mobilization?','choices'=>json_encode(['Translate research into practice','Shelve books','Bind journals','Track fines']),'answer'=>'Translate research into practice','explanation'=>'Knowledge mobilization ensures research findings reach end users.','created_at'=>$now,'updated_at'=>$now ],
        [ 'subject_id'=>51,'part'=>6,'question'=>'Which tool supports digital signage of library events?','choices'=>json_encode(['Digital signage software','OPAC','ILS','MARC editor']),'answer'=>'Digital signage software','explanation'=>'Digital signage platforms display dynamic event information in-library.','created_at'=>$now,'updated_at'=>$now ],
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

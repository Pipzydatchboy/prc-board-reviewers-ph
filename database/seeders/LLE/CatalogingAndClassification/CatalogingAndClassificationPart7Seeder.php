<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart7Seeder extends Seeder
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
        // 1
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC field is used for local holdings?', 'choices' => json_encode(['852','866','500','050']), 'answer' => '852', 'explanation' => 'Field 852 contains location and call number information for local holdings.', 'created_at' => $now, 'updated_at' => $now],
        // 2
        ['subject_id' => 53, 'part' => 7, 'question' => 'What classification covers computer science in DDC?', 'choices' => json_encode(['000s','100s','600s','800s']), 'answer' => '000s', 'explanation' => 'DDC Class 000 covers computer science, information & general works.', 'created_at' => $now, 'updated_at' => $now],
        // 3
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC tag indicates system control number?', 'choices' => json_encode(['001','003','005','008']), 'answer' => '001', 'explanation' => 'Field 001 holds the record’s control number assigned by the creating system.', 'created_at' => $now, 'updated_at' => $now],
        // 4
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC field records key title?', 'choices' => json_encode(['130','245','246','210']), 'answer' => '130', 'explanation' => 'Field 130 is the uniform title heading used as a key title.', 'created_at' => $now, 'updated_at' => $now],
        // 5
        ['subject_id' => 53, 'part' => 7, 'question' => 'What element in RDA describes the carrier format?', 'choices' => json_encode(['Carrier type','Content type','Mode of issuance','Extent']), 'answer' => 'Carrier type', 'explanation' => 'Carrier type is an RDA element specifying physical or digital carrier.', 'created_at' => $now, 'updated_at' => $now],
        // 6
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which classification system arranges subjects by facets including thing, kind, and property?', 'choices' => json_encode(['Colon Classification','DDC','LCC','UDC']), 'answer' => 'Colon Classification', 'explanation' => 'Colon Classification by Ranganathan uses facets such as thing, kind, and property.', 'created_at' => $now, 'updated_at' => $now],
        // 7
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC field indicates cataloging source and classification scheme?', 'choices' => json_encode(['040','049','050','090']), 'answer' => '040', 'explanation' => 'Field 040 subfields b and c indicate original and modified cataloging agencies and classification sources.', 'created_at' => $now, 'updated_at' => $now],
        // 8
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC subfield in 100 indicates titles and other words associated with a name?', 'choices' => json_encode(['$c','$d','$a','$b']), 'answer' => '$c', 'explanation' => 'In field 100, subfield $c indicates titles and other words associated with a name.', 'created_at' => $now, 'updated_at' => $now],
        // 9
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC field is used for meeting name entries?', 'choices' => json_encode(['711','700','600','240']), 'answer' => '711', 'explanation' => 'Field 711 covers names of meetings, conferences, and events.', 'created_at' => $now, 'updated_at' => $now],
        // 10
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which control field gives the date of encoding?', 'choices' => json_encode(['005','008','006','007']), 'answer' => '005', 'explanation' => 'Field 005 records the timestamp of the last record transaction.', 'created_at' => $now, 'updated_at' => $now],
        // 11
        ['subject_id' => 53, 'part' => 7, 'question' => 'What does MARC field 590 record?', 'choices' => json_encode(['Local note','Subject heading','Classification number','Call number']), 'answer' => 'Local note', 'explanation' => 'Field 590 is used for local notes not defined by other fields.', 'created_at' => $now, 'updated_at' => $now],
        // 12
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which DDC schedule covers philosophy and psychology?', 'choices' => json_encode(['100s','200s','300s','400s']), 'answer' => '100s', 'explanation' => 'DDC Class 100 covers philosophy and psychology.', 'created_at' => $now, 'updated_at' => $now],
        // 13
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC field records original issue details for serials?', 'choices' => json_encode(['773','762','780','770']), 'answer' => '773', 'explanation' => 'Field 773 notes host item entries such as original issue details.', 'created_at' => $now, 'updated_at' => $now],
        // 14
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which element in RDA indicates version of work?', 'choices' => json_encode(['Version of work','Edition statement','Carrier type','Extent']), 'answer' => 'Version of work', 'explanation' => 'RDA element "version of work" identifies different versions of a work.', 'created_at' => $now, 'updated_at' => $now],
        // 15
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC field is used for translation note?', 'choices' => json_encode(['544','500','546','542']), 'answer' => '544', 'explanation' => 'Field 544 is used for translation notes.', 'created_at' => $now, 'updated_at' => $now],
        // 16
['subject_id' => 53, 'part' => 7, 'question' => 'Which classification facet in Colon Classification represents space or geography?', 'choices' => json_encode(['G','T','M','F']), 'answer' => 'G', 'explanation' => 'In Colon Classification, the facet G denotes space or geographical location.', 'created_at' => $now, 'updated_at' => $now ],
        // 17
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC subfield in 260 indicates printer?', 'choices' => json_encode(['$e','$a','$b','$c']), 'answer' => '$e', 'explanation' => 'In MARC 260, subfield $e records the printer.', 'created_at' => $now, 'updated_at' => $now],
        // 18
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC tag records music notation details?', 'choices' => json_encode(['340','300','382','500']), 'answer' => '340', 'explanation' => 'Field 340 holds physical medium and generation information including notation.', 'created_at' => $now, 'updated_at' => $now],
        // 19
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which field provides parent item linkage for multi-part works?', 'choices' => json_encode(['774','787','830','490']), 'answer' => '774', 'explanation' => 'Field 774 is used for parent or host item entries in related records.', 'created_at' => $now, 'updated_at' => $now],
        // 20
        ['subject_id' => 53, 'part' => 7, 'question' => 'Which MARC field is used for subscription note?', 'choices' => json_encode(['310','362','580','581']), 'answer' => '310', 'explanation' => 'Field 310 provides current subscription information for serials.', 'created_at' => $now, 'updated_at' => $now],
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

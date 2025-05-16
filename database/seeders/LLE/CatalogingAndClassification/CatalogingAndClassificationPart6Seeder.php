<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart6Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field is used for linkages between related bibliographic records?','choices'=>json_encode(['787','740','765','773']),'answer'=>'787','explanation'=>'Field 787 is used for linking entry relationships, such as analytical bibliographic records.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>6,'question'=>'What type of classification number is represented by EDN in LCC?','choices'=>json_encode(['Biography (E)','Education (L)','Business (HD)','Philosophy (B)']),'answer'=>'Education (L)','explanation'=>'In LCC, Class L covers Education.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field records added entry—meeting name?','choices'=>json_encode(['711','700','600','240']),'answer'=>'711','explanation'=>'Field 711 is used for added entry of conference or meeting name.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC subfield in 300 indicates accompanying material?','choices'=>json_encode(['$e','$b','$a','$c']),'answer'=>'$e','explanation'=>'In field 300, subfield $e identifies accompanying materials (e.g., maps).', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>6,'question'=>'What does the control field 005 represent?','choices'=>json_encode(['Date and time of latest transaction','Record status','Cataloging source','Character coding scheme']),'answer'=>'Date and time of latest transaction','explanation'=>'Field 005 records the timestamp of the last record transaction.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field is used for language of cataloging?','choices'=>json_encode(['040','041','246','040']),'answer'=>'040','explanation'=>'Field 040 indicates the original and romanized cataloging language.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>6,'question'=>'Which classification schedule covers philosophy?','choices'=>json_encode(['100s','200s','300s','400s']),'answer'=>'100s','explanation'=>'DDC Class 100 covers philosophy and psychology.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field contains data related to original call number?','choices'=>json_encode(['090','050','082','099']),'answer'=>'090','explanation'=>'Field 090 is used for locally assigned call numbers, often original.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field indicates series enumeration and chronology?','choices'=>json_encode(['830','490','440','490']),'answer'=>'830','explanation'=>'Field 830 provides uniform series entries with enumeration and chronology.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>6,'question'=>'Which RDA element records illustrator?','choices'=>json_encode(['Illustrator','Author','Publisher','Subject']),'answer'=>'Illustrator','explanation'=>'RDA includes specific elements for roles such as illustrators.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field provides source data found?','choices'=>json_encode(['SOURCE DATA FOUND','500','541','338']),'answer'=>'541','explanation'=>'Field 541 records source of acquisition, often used as source found.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>6,'question'=>'Which classification method uses notation with hyphens?','choices'=>json_encode(['UDC','DDC','LCC','Colon Classification']),'answer'=>'UDC','explanation'=>'Universal Decimal Classification uses hyphens in notation for subdivisions.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC subfield in 100 indicates dates associated with the name?','choices'=>json_encode(['$d','$a','$b','$c']),'answer'=>'$d','explanation'=>'In field100, subfield $d specifies dates associated with a personal name.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field is used for general note?','choices'=>json_encode(['500','520','546','588']),'answer'=>'500','explanation'=>'Field 500 contains general notes relevant to the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>6,'question'=>'Which classification covers geography and history in DDC?','choices'=>json_encode(['900s','300s','700s','800s']),'answer'=>'900s','explanation'=>'DDC Class 900 covers history and geography.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>6,'question'=>'What is the function of MARC field 650?','choices'=>json_encode(['Topical subject heading','Title','Author name','Publisher']),'answer'=>'Topical subject heading','explanation'=>'Field 650 is used for topical subject headings.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC tag indicates material type for RDA?','choices'=>json_encode(['336','337','338','340']),'answer'=>'337','explanation'=>'Field 337 specifies the carrier type in RDA-compliant records.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field is used for series statement?','choices'=>json_encode(['490','830','780','780']),'answer'=>'490','explanation'=>'Field 490 transcribes series statements as found on the source.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>6,'question'=>'Which DDC auxiliary table covers form divisions?','choices'=>json_encode(['Table 5','Table 1','Table 2','Table 3']),'answer'=>'Table 5','explanation'=>'DDC Table 5 lists form divisions like bibliographies.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>6,'question'=>'Which MARC field records call number classification part?','choices'=>json_encode(['050','082','090','099']),'answer'=>'050','explanation'=>'Field 050 is assigned for LC Classification numbers.', 'created_at'=>$now,'updated_at'=>$now],
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

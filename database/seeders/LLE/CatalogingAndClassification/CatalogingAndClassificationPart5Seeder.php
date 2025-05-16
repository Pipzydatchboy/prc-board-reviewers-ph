<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart5Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC field contains binding information?','choices'=>json_encode(['584','500','538','546']),'answer'=>'584','explanation'=>'Field 584 is used for binding information notes.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>5,'question'=>'What does field 546 in MARC record?','choices'=>json_encode(['Language note','Physical description','Subject heading','Series title']),'answer'=>'Language note','explanation'=>'Field 546 provides language information about the item.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC field records medium of performance for music?','choices'=>json_encode(['382','336','344','347']),'answer'=>'382','explanation'=>'Field 382 records medium of performance details in musical works.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>5,'question'=>'What is the main function of MARC field 520?','choices'=>json_encode(['Summary note','Subject heading','Classification number','Call number']),'answer'=>'Summary note','explanation'=>'Field 520 is used for abstracts and summary notes of the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>5,'question'=>'Which classification facet in Colon Classification denotes time?','choices'=>json_encode(['T','G','F','P']),'answer'=>'T','explanation'=>'In Colon Classification, T is the time facet.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC tag is used for notes on reproduction?','choices'=>json_encode(['533','500','520','588']),'answer'=>'533','explanation'=>'Field 533 provides reproduction and exhibition information notes.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>5,'question'=>'What does RDA element 2.13 cover?','choices'=>json_encode(['Scale and projection','Extent','Place','Language']),'answer'=>'Scale and projection','explanation'=>'RDA 2.13 specifies scale and projection details for cartographic materials.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC field contains series added entry—personal name?','choices'=>json_encode(['800','490','830','700']),'answer'=>'800','explanation'=>'Field 800 is used for personal name as series added entry.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>5,'question'=>'Which DDC schedule covers mathematics?','choices'=>json_encode(['500s','400s','600s','200s']),'answer'=>'500s','explanation'=>'DDC Class 500 covers natural sciences and mathematics.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC field holds dimensions of the item?','choices'=>json_encode(['300','500','245','260']),'answer'=>'300','explanation'=>'Field 300 contains physical description including dimensions.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>5,'question'=>'What does MARC field 588 record?','choices'=>json_encode(['Linking entry complexity note','Cataloger’s note','Subject heading','Call number']),'answer'=>'Linking entry complexity note','explanation'=>'Field 588 is used for linking entry complexity notes in bibliographic records.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>5,'question'=>'Which CCMC classification classifies medicine?','choices'=>json_encode(['R','G','H','Q']),'answer'=>'R','explanation'=>'In LCC, Class R covers medicine.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC subfield in 264 indicates publisher?','choices'=>json_encode(['$b','$a','$c','$e']),'answer'=>'$b','explanation'=>'In field 264, subfield $b specifies the name of the publisher.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>5,'question'=>'Which RDA element covers statement of responsibility?','choices'=>json_encode(['Statement of responsibility','Content type','Extent','Mode of issuance']),'answer'=>'Statement of responsibility','explanation'=>'RDA element covers who is responsible for creation of the content.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC field provides exhibition history?','choices'=>json_encode(['561','500','546','533']),'answer'=>'561','explanation'=>'Field 561 is used for ownership and custodial history notes.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>5,'question'=>'Which classification facet in CC represents matter?','choices'=>json_encode(['M','T','P','F']),'answer'=>'M','explanation'=>'In Colon Classification, M is the matter facet.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>5,'question'=>'What is the main advantage of authority control in cataloging?','choices'=>json_encode(['Consistency of headings','Faster circulation','Reduced shelving time','Lower cataloging cost']),'answer'=>'Consistency of headings','explanation'=>'Authority control ensures uniform use of names and subjects across records.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC field contains provenance note?','choices'=>json_encode(['561','500','588','524']),'answer'=>'561','explanation'=>'Field 561 can record provenance and acquisition history.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>5,'question'=>'Which DDC table provides language subdivisions?','choices'=>json_encode(['Table 3B','Table 1','Table 2','Table 4']),'answer'=>'Table 3B','explanation'=>'DDC Auxiliary Table 3B covers language subdivisions.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>5,'question'=>'Which MARC field holds technical specifications?','choices'=>json_encode(['538','300','500','546']),'answer'=>'538','explanation'=>'Field 538 provides system details note, such as technical specifications.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

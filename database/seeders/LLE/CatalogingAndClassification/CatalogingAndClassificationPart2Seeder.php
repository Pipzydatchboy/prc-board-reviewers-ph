<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart2Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>2,'question'=>'Which MARC subfield contains the International Standard Book Number?','choices'=>json_encode(['$a','$z','$c','$x']),'answer'=>'$a','explanation'=>'In field 020, subfield $a holds the ISBN.','created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>2,'question'=>'What is the main advantage of using RDA over AACR2?','choices'=>json_encode(['Greater international applicability','Lower cost','Simpler rules','Deprecated format']),'answer'=>'Greater international applicability','explanation'=>'RDA is designed for digital resources and international use.','created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>2,'question'=>'Which part of the call number indicates publication date?','choices'=>json_encode(['Date element','Cutter number','Class number','Item number']),'answer'=>'Date element','explanation'=>'In LCC and DDC call numbers, the date element reflects publication year.','created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>2,'question'=>'Which control field in MARC holds fixed-length data elements?','choices'=>json_encode(['008','001','245','300']),'answer'=>'008','explanation'=>'Field 008 contains fixed-length coded data elements such as dates and language.','created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>2,'question'=>'Which DDC schedule covers social sciences?','choices'=>json_encode(['300s','100s','500s','900s']),'answer'=>'300s','explanation'=>'DDC Class 300 covers social sciences.','created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>2,'question'=>'What does the MARC field 100 represent?','choices'=>json_encode(['Main entry—personal name','Added entry—corporate name','Series authority','Physical description']),'answer'=>'Main entry—personal name','explanation'=>'Field 100 contains the primary personal author heading.','created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>2,'question'=>'Which classification uses notation based on concepts of facets?','choices'=>json_encode(['Colon Classification','Dewey Decimal','LCC','UDC']),'answer'=>'Colon Classification','explanation'=>'Colon Classification by Ranganathan is faceted.','created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>2,'question'=>'Which MARC tag is used for subject added entries?','choices'=>json_encode(['650','245','100','888']),'answer'=>'650','explanation'=>'Field 650 contains topical subject headings.','created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>2,'question'=>'What is the function of the 300 field in MARC?','choices'=>json_encode(['Physical description','Bibliographic citation','Series title','Subject term']),'answer'=>'Physical description','explanation'=>'Field 300 contains pagination, dimensions, and other physical details.','created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>2,'question'=>'In LCC, what does Class Q represent?','choices'=>json_encode(['Science','History','Language','Philosophy']),'answer'=>'Science','explanation'=>'LCC Class Q covers Science.','created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>2,'question'=>'Which RDA element defines the relationship between creator and work?','choices'=>json_encode(['Relationship designator','Title proper','Edition statement','Extent']),'answer'=>'Relationship designator','explanation'=>'Relationship designators specify roles of entities in relation to the resource.','created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>2,'question'=>'Which MARC field indicates series title?','choices'=>json_encode(['490','264','260','500']),'answer'=>'490','explanation'=>'Field 490 contains series statements as found.','created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>2,'question'=>'What is the primary purpose of authority control?','choices'=>json_encode(['Ensure consistency of headings','Track circulation','Generate call numbers','Manage budgets']),'answer'=>'Ensure consistency of headings','explanation'=>'Authority control standardizes names and subjects for reliable retrieval.','created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>2,'question'=>'Which DDC auxiliary table provides geographic subdivisions?','choices'=>json_encode(['Table 2','Table 1','Table 5','Table 8']),'answer'=>'Table 2','explanation'=>'Auxiliary Table 2 covers geographic areas.','created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>2,'question'=>'Which MARC field provides publication information?','choices'=>json_encode(['264','245','020','300']),'answer'=>'264','explanation'=>'Field 264 contains production, publication, distribution, etc. statements.','created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>2,'question'=>'Which classification uses alphabetical notation?','choices'=>json_encode(['LCC','DDC','Colon Classification','UDC']),'answer'=>'LCC','explanation'=>'LCC uses letters for main classes and numbers for subdivisions.','created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>2,'question'=>'What does the MARC 020 field represent?','choices'=>json_encode(['ISBN','ISSN','LCCN','OCLC number']),'answer'=>'ISBN','explanation'=>'Field 020 holds the International Standard Book Number.','created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>2,'question'=>'Which element in RDA identifies the medium of performance in music?','choices'=>json_encode(['Medium of performance','Carrier type','Extent','Language']),'answer'=>'Medium of performance','explanation'=>'Medium of performance indicates instruments or voices.','created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>2,'question'=>'Which MARC field holds series enumeration and chronology?','choices'=>json_encode(['830','490','245','300']),'answer'=>'830','explanation'=>'Field 830 contains uniform series added entries with enumeration and chronology.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>2,'question'=>'What is the function of the MARC Leader bytes 05-07?','choices'=>json_encode(['Record length','Record status','Character coding scheme','Cataloging form']),'answer'=>'Record length','explanation'=>'Leader positions 00-04 hold record length, but byte 05-07 also reflect record length continuation.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

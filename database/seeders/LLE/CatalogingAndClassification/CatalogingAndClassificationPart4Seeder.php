<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart4Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field is used for series added entry—uniform title?','choices'=>json_encode(['830','490','880','700']),'answer'=>'830','explanation'=>'Field 830 contains uniform series parallel headings for series added entries.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>4,'question'=>'What classification number is assigned to music in Dewey Decimal?','choices'=>json_encode(['780','700','790','850']),'answer'=>'780','explanation'=>'DDC Class 780 covers music.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC tag is used for the abstract or summary?','choices'=>json_encode(['520','500','504','505']),'answer'=>'520','explanation'=>'Field 520 contains summary, etc., of the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>4,'question'=>'In LCC, what class covers psychology?','choices'=>json_encode(['BF','H','P','QA']),'answer'=>'BF','explanation'=>'LCC Class BF covers psychology.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field provides citation and bibliography note?','choices'=>json_encode(['524','300','500','511']),'answer'=>'524','explanation'=>'Field 524 holds preferred citation or bibliography notes.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>4,'question'=>'Which element in RDA record indicates resource medium (e.g., sound)?','choices'=>json_encode(['Carrier type','Content type','Mode of issuance','Extent']),'answer'=>'Carrier type','explanation'=>'RDA element carrier type identifies the carrier material or medium.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field records host item entry for electronic resource?','choices'=>json_encode(['773','776','787','880']),'answer'=>'773','explanation'=>'Field 773 provides host item entry for related works such as electronic reproductions.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>4,'question'=>'What is a shelfmark in library classification?','choices'=>json_encode(['Call number','ISBN','ISSN','MARC record']),'answer'=>'Call number','explanation'=>'Shelfmark or call number specifies the location of an item on library shelves.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field is used to record host item entry—parallel?','choices'=>json_encode(['880','773','020','245']),'answer'=>'880','explanation'=>'Field 880 is used for alternate graphic representation (e.g., non-Latin scripts).', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>4,'question'=>'Which DDC auxiliary table provides form subdivisions?','choices'=>json_encode(['Table 5','Table 2','Table 1','Table 3']),'answer'=>'Table 5','explanation'=>'Table 5 in DDC contains form subdivisions such as bibliographies, indexes.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field holds subject added entry—geographic name?','choices'=>json_encode(['651','600','650','653']),'answer'=>'651','explanation'=>'Field 651 is used for geographic subject headings.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>4,'question'=>'What does the MARC field 007 indicate?','choices'=>json_encode(['Physical characteristics of the item','Language code','Publication date','Call number']),'answer'=>'Physical characteristics of the item','explanation'=>'Field 007 contains codes describing the physical medium of an item.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>4,'question'=>'Which classification facet in Colon Classification represents personality?','choices'=>json_encode(['P','M','T','F']),'answer'=>'P','explanation'=>'In Colon Classification, P typically denotes personality/consciousness facet.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field is used for contents note with formatted list?','choices'=>json_encode(['505','500','520','300']),'answer'=>'505','explanation'=>'Field 505 provides formatted contents notes.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>4,'question'=>'Which RDA element records scale and projection for cartographic resources?','choices'=>json_encode(['Scale and projection','Extent','Carrier type','Language']),'answer'=>'Scale and projection','explanation'=>'RDA element scale and projection describes map characteristics.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC subfield in 260 provides publication place?','choices'=>json_encode(['$a','$b','$c','$e']),'answer'=>'$a','explanation'=>'In field 260, subfield $a records the place of publication.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>4,'question'=>'Which DDC schedule covers religion?','choices'=>json_encode(['200s','100s','300s','400s']),'answer'=>'200s','explanation'=>'DDC Class 200 covers religion.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field indicates summary holdings by library?','choices'=>json_encode(['852','866','863','853']),'answer'=>'866','explanation'=>'Field 866 in holdings displays summary holdings statements.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>4,'question'=>'Which classification system uses colon punctuation in notation?','choices'=>json_encode(['Colon Classification','Dewey Decimal','LCC','UDC']),'answer'=>'Colon Classification','explanation'=>'Colon Classification uses colons to separate facets in notation.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>4,'question'=>'Which MARC field is used for exhibition note?','choices'=>json_encode(['533','518','592','541']),'answer'=>'533','explanation'=>'Field 533 provides reproduction and exhibition information notes.', 'created_at'=>$now,'updated_at'=>$now],
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

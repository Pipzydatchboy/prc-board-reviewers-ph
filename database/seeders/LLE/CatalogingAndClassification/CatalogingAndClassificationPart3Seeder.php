<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart3Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>3,'question'=>'Which MARC subfield contains the edition statement?','choices'=>json_encode(['$b','$a','$e','$c']),'answer'=>'$b','explanation'=>'In field 250, subfield $b holds the edition statement.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>3,'question'=>'What does the MARC field 300 describe?','choices'=>json_encode(['Physical description','Subject headings','Series title','Bibliographic citation']),'answer'=>'Physical description','explanation'=>'Field 300 details pagination, dimensions, and accompanying material.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>3,'question'=>'Which classification schedule covers literature in Dewey Decimal?','choices'=>json_encode(['800s','600s','400s','000s']),'answer'=>'800s','explanation'=>'DDC Class 800 covers literature and rhetoric.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>3,'question'=>'Which MARC field identifies the language of the work?','choices'=>json_encode(['041','$041','245','008']),'answer'=>'041','explanation'=>'Field 041 specifies language codes used in the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>3,'question'=>'What is the purpose of the 3XX fields in MARC?','choices'=>json_encode(['Physical description and characteristics','Subject analysis','Author name','Series information']),'answer'=>'Physical description and characteristics','explanation'=>'The 300 fields cover physical, summary, and related item information.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>3,'question'=>'Which numeral in the MARC leader indicates record status?','choices'=>json_encode(['Position 05','Position 17','Position 06','Position 20']),'answer'=>'Position 05','explanation'=>'Leader byte 05 indicates status: new, corrected, or deleted.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>3,'question'=>'Which AACR2 rule covers publication statements?','choices'=>json_encode(['Rule 1.7','Rule 1.1','Rule 21.2','Rule 12.6']),'answer'=>'Rule 1.7','explanation'=>'AACR2 1.7 deals with publication, distribution, etc.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>3,'question'=>'Which classification facet in Colon Classification represents geography?','choices'=>json_encode(['G','T','F','M']),'answer'=>'G','explanation'=>'In CC, G typically denotes geographic facet.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>3,'question'=>'Which MARC fixed field holds encoding level?','choices'=>json_encode(['008','Leader','006','007']),'answer'=>'Leader','explanation'=>'In the leader, position 17 indicates encoding level.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>3,'question'=>'What does the MARC field 650 represent?','choices'=>json_encode(['Topical subject heading','Title','Author name','Physical description']),'answer'=>'Topical subject heading','explanation'=>'Field 650 contains uncontrolled or authorized subject headings.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>3,'question'=>'Which tool converts MARC to Dublin Core?','choices'=>json_encode(['XSLT stylesheet','MARC editor','PDF converter','OPAC']),'answer'=>'XSLT stylesheet','explanation'=>'XSLT transforms XML-encoded MARC to Dublin Core.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>3,'question'=>'Which DDC auxiliary table covers standard subdivisions?','choices'=>json_encode(['Table 1','Table 2','Table 3','Table 4']),'answer'=>'Table 1','explanation'=>'Auxiliary Table 1 provides standard subdivisions for any class.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>3,'question'=>'What is the MARC material designation code for electronic resource?','choices'=>json_encode(['|o','|b','|a','|j']),'answer'=>'|o','explanation'=>'In leader/008, code o indicates electronic resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>3,'question'=>'Which field contains notes about contents?',
         'choices'=>json_encode(['505','300','520','500']),
         'answer'=>'505','explanation'=>'Field 505 is the formatted contents note.',
         'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>3,'question'=>'Which MARC field records series statement after trace?','choices'=>json_encode(['490','800','246','700']),'answer'=>'490','explanation'=>'Field 490 notes series as printed for transcription.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>3,'question'=>'Which classification uses letters K-Z?','choices'=>json_encode(['LCC','DDC','UDC','Colon']),'answer'=>'LCC','explanation'=>'LCC main classes are A-Z, including K-Z for law and medicine.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>3,'question'=>'What does MARC field 020$z do?','choices'=>json_encode(['Provides canceled ISBN','Provides valid ISBN','Source of cataloger','Language code']),'answer'=>'Provides canceled ISBN','explanation'=>'In field 020, subfield $z holds canceled or invalid ISBNs.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>3,'question'=>'Which MARC tag indicates content type in RDA?','choices'=>json_encode(['336','245','300','007']),'answer'=>'336','explanation'=>'In MARC21 with RDA, field 336 defines content type.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>3,'question'=>'Which MARC tag indicates carrier type?','choices'=>json_encode(['337','007','245','300']),'answer'=>'337','explanation'=>'Field 337 specifies the carrier type (e.g., audio disc).', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>3,'question'=>'Which field records language of cataloging?','choices'=>json_encode(['040','041','044','082']),'answer'=>'040','explanation'=>'Field 040 includes subfields indicating language of cataloging.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

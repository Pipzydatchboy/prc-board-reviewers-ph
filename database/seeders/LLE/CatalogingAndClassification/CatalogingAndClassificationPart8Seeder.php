<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart8Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field is used for summary holdings?', 'choices'=>json_encode(['866','852','942','980']), 'answer'=>'866', 'explanation'=>'Field 866 provides summary holdings statements in the holdings format.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>8,'question'=>'What does the MARC field 880 record?', 'choices'=>json_encode(['Alternate script representation','Subject headings','Classification numbers','Call numbers']), 'answer'=>'Alternate script representation', 'explanation'=>'Field 880 is used for alternate graphic representations such as non-Latin scripts.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>8,'question'=>'Which DDC auxiliary table covers biography subdivisions?', 'choices'=>json_encode(['Table 3C','Table 1','Table 5','Table 6']), 'answer'=>'Table 3C', 'explanation'=>'Auxiliary Table 3C provides subdivisions for biography.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field contains form subdivision information?', 'choices'=>json_encode(['655','300','440','046']), 'answer'=>'655', 'explanation'=>'Field 655 contains genre/form terms, conforming to controlled vocabularies.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC control field indicates encoding level?', 'choices'=>json_encode(['Leader position 17','005','008','006']), 'answer'=>'Leader position 17', 'explanation'=>'Leader byte 17 specifies the encoding level of the bibliographic record.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field records summary, etc. note?', 'choices'=>json_encode(['520','500','548','588']), 'answer'=>'520', 'explanation'=>'Field 520 is used for summary notes or abstracts of the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>8,'question'=>'What does MARC field 546 record?', 'choices'=>json_encode(['Language note','Physical description','Subject heading','Series title']), 'answer'=>'Language note', 'explanation'=>'Field 546 provides notes on language content of the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field is for linking entry complexity note?', 'choices'=>json_encode(['588','500','520','590']), 'answer'=>'588', 'explanation'=>'Field 588 contains notes about linking entry complexity.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>8,'question'=>'Which classification facet covers time in Colon Classification?', 'choices'=>json_encode(['T','G','F','M']), 'answer'=>'T', 'explanation'=>'In Colon Classification, T denotes the time facet.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field indicates content type under RDA?', 'choices'=>json_encode(['336','337','338','340']), 'answer'=>'336', 'explanation'=>'Field 336 specifies content type in RDA-compliant MARC records.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field is used for tracking actions note?', 'choices'=>json_encode(['588','524','561','500']), 'answer'=>'561', 'explanation'=>'Field 561 is used for provenance and ownership history notes.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>8,'question'=>'What does the MARC field 7XX series of tags represent?', 'choices'=>json_encode(['Analytical and relationship entries','Classification numbers','Physical description','Subject headings']), 'answer'=>'Analytical and relationship entries', 'explanation'=>'Fields 700-787 represent added entries and relationships between records.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field contains census code for country?', 'choices'=>json_encode(['043','044','245','260']), 'answer'=>'044', 'explanation'=>'Field 044 provides country codes indicating geographic origin.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field is used for projection note in cartographic materials?', 'choices'=>json_encode(['255','265','260','$e']), 'answer'=>'255', 'explanation'=>'Field 255 is used for cartographic mathematical data including projection and coordinates.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>8,'question'=>'Which ancillary table in DDC provides standard subdivisions for standard subdivisions?', 'choices'=>json_encode(['Table 1','Table 2','Table 3','Table 4']), 'answer'=>'Table 1', 'explanation'=>'Table 1 provides standard subdivisions that apply across all classes.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC tag is used for summary statement note?', 'choices'=>json_encode(['540','520','538','536']), 'answer'=>'540', 'explanation'=>'Field 540 records terms of use and reproduction for the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field indicates target audience?', 'choices'=>json_encode(['521','522','523','524']), 'answer'=>'521', 'explanation'=>'Field 521 specifies the target audience or grade level for the resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field records program requirements note?', 'choices'=>json_encode(['527','028','041','655']), 'answer'=>'527', 'explanation'=>'Field 527 is used for program requirements notes such as machine requirements.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC tag provides coding source and record origin details?', 'choices'=>json_encode(['003','001','005','008']), 'answer'=>'003', 'explanation'=>'Field 003 indicates the organization or institution that created the record.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>8,'question'=>'Which MARC field is used for target reader note?', 'choices'=>json_encode(['521','500','546','520']), 'answer'=>'521', 'explanation'=>'Field 521 is used for target audience notes, describing intended readership.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

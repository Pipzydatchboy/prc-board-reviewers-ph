<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart9Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field is used for original language note?', 'choices'=>json_encode(['546','500','520','588']), 'answer'=>'546', 'explanation'=>'Field 546 contains language notes, including original language information.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>9,'question'=>'What does MARC field 254 record?', 'choices'=>json_encode(['Matrix production data','Binding information','Subject headings','Call number']), 'answer'=>'Matrix production data', 'explanation'=>'Field 254 is used for matrix production credits in audiovisual resources.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>9,'question'=>'Which classification schedule covers law in DDC?', 'choices'=>json_encode(['300s','400s','800s','900s']), 'answer'=>'300s', 'explanation'=>'DDC Class 300 covers social sciences including law.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field indicates note on original cataloging source?', 'choices'=>json_encode(['040','042','041','043']), 'answer'=>'042', 'explanation'=>'Field 042 records authentication and modification source codes.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field is used for patent note?', 'choices'=>json_encode(['536','500','533','542']), 'answer'=>'536', 'explanation'=>'Field 536 contains information about rights and reproduction under patent.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field holds biographical/historical note?', 'choices'=>json_encode(['545','540','542','545']), 'answer'=>'545', 'explanation'=>'Field 545 is used for biographical or historical notes.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>9,'question'=>'Which classification covers language in DDC?', 'choices'=>json_encode(['400s','500s','600s','700s']), 'answer'=>'400s', 'explanation'=>'DDC Class 400 covers language.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>9,'question'=>'What does MARC field 899 denote?', 'choices'=>json_encode(['Local field','Standard field','Classification number','Subject heading']), 'answer'=>'Local field', 'explanation'=>'Field 899 is often used for locally defined data.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field is used for linking to lib guides?', 'choices'=>json_encode(['856','500','538','530']), 'answer'=>'856', 'explanation'=>'Field 856 is used for electronic location and access, including LibGuides URLs.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>9,'question'=>'Which RDA element records place of performance?', 'choices'=>json_encode(['Place of performance','Publisher','Place of publication','Language']), 'answer'=>'Place of performance', 'explanation'=>'RDA includes place of performance for music and performances.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field records holdings enumeration by chronology?', 'choices'=>json_encode(['863','866','852','866']), 'answer'=>'863', 'explanation'=>'Field 863 indicates enumeration for specific holdings items.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>9,'question'=>'Which classification facet in UDC covers subdivisions for form?', 'choices'=>json_encode(['Table 5','Table 2','Table 1','Table 3']), 'answer'=>'Table 5', 'explanation'=>'UDC uses ancillary tables similar to DDC; form subdivisions are in Table 5.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC tag indicates cartographic projection note?', 'choices'=>json_encode(['255','345','255','246']), 'answer'=>'255', 'explanation'=>'Field 255 provides projection data for cartographic materials.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field holds host item entry for analytical bibliography?', 'choices'=>json_encode(['773','774','775','776']), 'answer'=>'773', 'explanation'=>'Field 773 is used for host item entry in analytical bibliographies.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>9,'question'=>'What does MARC 043 field specify?', 'choices'=>json_encode(['Geographic area code','Language code','Publisher code','Subject code']), 'answer'=>'Geographic area code', 'explanation'=>'Field 043 provides geographic area codes.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>9,'question'=>'Which DDC schedule covers philosophy?', 'choices'=>json_encode(['100s','200s','300s','400s']), 'answer'=>'100s', 'explanation'=>'DDC Class 100 covers philosophy.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field is used for circulation status note?', 'choices'=>json_encode(['590','583','594','580']), 'answer'=>'583', 'explanation'=>'Field 583 holds action notes such as withdrawal or conservation, often used for circulation status.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>9,'question'=>'Which RDA element records associated place?', 'choices'=>json_encode(['Associated place','Publisher','Place of publication','Distributor']), 'answer'=>'Associated place', 'explanation'=>'RDA element associated place identifies geography related to creators.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field contains linking to related material?', 'choices'=>json_encode(['787','773','780','580']), 'answer'=>'787', 'explanation'=>'Field 787 provides linking entry relationships for related material.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>9,'question'=>'Which MARC field is used for port note?', 'choices'=>json_encode(['512','340','500','530']), 'answer'=>'512', 'explanation'=>'Field 512 contains musical notation transcription note such as port clarity.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart10Seeder extends Seeder
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
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field is used for reproduction note?','choices'=>json_encode(['533','500','548','520']),'answer'=>'533','explanation'=>'Field 533 records information about reproductions and exhibitions of the resource.','created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field indicates source of acquisition?','choices'=>json_encode(['541','561','584','590']),'answer'=>'541','explanation'=>'Field 541 provides information about the source from which the item was acquired.','created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>53,'part'=>10,'question'=>'What does MARC field 852 subfield $h record?','choices'=>json_encode(['Classification part of call number','Shelving location','Item status','Barcode number']),'answer'=>'Classification part of call number','explanation'=>'Subfield $h in 852 holds the classification portion of the call number for local holdings.','created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>53,'part'=>10,'question'=>'Which RDA element describes statement of responsibility relating to content type?','choices'=>json_encode(['Statement of responsibility','Content type','Extent','Language']),'answer'=>'Statement of responsibility','explanation'=>'RDA element "statement of responsibility" identifies persons, families, or corporate bodies responsible for intellectual or artistic content.','created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field is used for frequency note?','choices'=>json_encode(['310','362','580','310']),'answer'=>'310','explanation'=>'Field 310 provides information about current subscription or frequency of serials.','created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>53,'part'=>10,'question'=>'Which classification covers agriculture in DDC?','choices'=>json_encode(['600s','700s','800s','500s']),'answer'=>'600s','explanation'=>'DDC Class 600 covers agricultural and related technologies.','created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field indicates project accession number?','choices'=>json_encode(['035','001','003','010']),'answer'=>'035','explanation'=>'Field 035 is used for system control numbers and accession numbers, including project-specific.','created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field records funder information?','choices'=>json_encode(['536','542','540','561']),'answer'=>'536','explanation'=>'Field 536 contains information about funding sources and conditions.','created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC subfield indicates specific physical form?','choices'=>json_encode(['$c','$a','$b','$e']),'answer'=>'$c','explanation'=>'In various fields, subfield $c often captures terms relating to physical characteristics or form.','created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>53,'part'=>10,'question'=>'Which classification uses hierarchical notation with Cutter numbers?','choices'=>json_encode(['LCC','DDC','Colon Classification','UDC']),'answer'=>'LCC','explanation'=>'Library of Congress Classification combines letters, numbers, and Cutter numbers to create hierarchical notation.','created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field is used for subject added entry—uniform title?','choices'=>json_encode(['730','130','240','246']),'answer'=>'730','explanation'=>'Field 730 is used for added entry—uniform title.','created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field records programming language note for software?','choices'=>json_encode(['546','540','541','382']),'answer'=>'546','explanation'=>'Field 546 often includes language notes, including programming language for software resources.','created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field indicates encoding level in human-readable form?','choices'=>json_encode(['040','008','005','006']),'answer'=>'008','explanation'=>'Field 008 contains encoded fixed-length data, including details on encoding level.','created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>53,'part'=>10,'question'=>'Which classification facet in Colon Classification denotes energy?','choices'=>json_encode(['E','T','G','M']),'answer'=>'E','explanation'=>'In Colon Classification, the facet E represents energy.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC tag is used for series added entry—title?','choices'=>json_encode(['490','830','800','440']),'answer'=>'490','explanation'=>'Field 490 contains series statements as found, used for series added entry—title.','created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field is used to record digital storage characteristics?','choices'=>json_encode(['007','008','034','300']),'answer'=>'007','explanation'=>'Field 007 contains codes for physical characteristics, including digital storage formats.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field captures destination service URIs?','choices'=>json_encode(['856','538','505','776']),'answer'=>'856','explanation'=>'Field 856 is used to encode electronic access information like URIs and URLs.','created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>53,'part'=>10,'question'=>'Which RDA element records statement of scale and projection?','choices'=>json_encode(['Scale and projection','Extent','Medium of performance','Content type']),'answer'=>'Scale and projection','explanation'=>'RDA element scale and projection describes how cartographic resources are scaled.','created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>53,'part'=>10,'question'=>'Which MARC field is used for note on original digital source?','choices'=>json_encode(['533','540','533','588']),'answer'=>'533','explanation'=>'Field 533 is used for reproductions and details of original digital sources.','created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>53,'part'=>10,'question'=>'Which classification uses single-digit notation for main classes?','choices'=>json_encode(['DDC','LCC','UDC','Colon Classification']),'answer'=>'DDC','explanation'=>'DDC employs single-digit notation for its ten main classes (000-900).','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

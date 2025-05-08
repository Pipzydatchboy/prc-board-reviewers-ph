<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];


$batch = [
    //1
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which hemoglobin variant migrates with HbA₂ on alkaline electrophoresis?',
        'choices'    => json_encode([
            'HbC',
            'HbS',
            'HbF',
            'HbE',
        ]),
        'answer'     => 'HbC',
        'explanation'=> 'HbC migrates to the same position as HbA₂ on alkaline electrophoresis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which automated parameter estimates circulating reticulocyte percentage?',
        'choices'    => json_encode([
            'RET%',
            'RDW',
            'MCV',
            'MPV',
        ]),
        'answer'     => 'RET%',
        'explanation'=> 'Automated analyzers report reticulocyte percentage (RET%) by RNA fluorescent staining.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which test measures platelet granule release by ATP secretion assay?',
        'choices'    => json_encode([
            'Luminescence assay',
            'Bleeding time',
            'PFA-100',
            'PT',
        ]),
        'answer'     => 'Luminescence assay',
        'explanation'=> 'ATP release from platelet dense granules is measured by luminescence.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which scoring system grades prothrombin time prolongation in trauma patients?',
        'choices'    => json_encode([
            'PT ratio (INR)',
            'DIC score',
            'ISTH overt DIC criteria',
            'SOFA score',
        ]),
        'answer'     => 'PT ratio (INR)',
        'explanation'=> 'INR standardizes PT prolongation across labs for clinical management.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which condition elevates soluble transferrin receptor levels?',
        'choices'    => json_encode([
            'Iron deficiency',
            'Hemochromatosis',
            'Thalassemia major',
            'Anemia of chronic disease',
        ]),
        'answer'     => 'Iron deficiency',
        'explanation'=> 'Soluble transferrin receptor increases in IDA and is unaffected by inflammation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which cell marker is positive in chronic lymphocytic leukemia (CLL)?',
        'choices'    => json_encode([
            'CD5',
            'CD10',
            'CD13',
            'CD33',
        ]),
        'answer'     => 'CD5',
        'explanation'=> 'CLL B cells aberrantly co-express CD5 along with CD19 and CD23.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which parameter indicates red cell mass relative to plasma volume?',
        'choices'    => json_encode([
            'Hematocrit',
            'Hemoglobin',
            'RBC count',
            'RDW',
        ]),
        'answer'     => 'Hematocrit',
        'explanation'=> 'Hct is the ratio of packed red cells to total blood volume.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which condition elevates D-dimer with normal PT and aPTT?',
        'choices'    => json_encode([
            'Unprovoked DVT',
            'Hemophilia A',
            'Vitamin K deficiency',
            'Von Willebrand disease',
        ]),
        'answer'     => 'Unprovoked DVT',
        'explanation'=> 'DVT causes fibrin formation and breakdown, raising D-dimer.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which smear feature is diagnostic for acute myelogenous leukemia (AML)?',
        'choices'    => json_encode([
            'Auer rods',
            'Dohle bodies',
            'Heinz bodies',
            'Basophilic stippling',
        ]),
        'answer'     => 'Auer rods',
        'explanation'=> 'Auer rods in myeloblasts are pathognomonic for AML, especially APL variant.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which erythrocyte sedimentation rate is affected by fibrinogen levels?',
        'choices'    => json_encode([
            'ESR',
            'PT',
            'aPTT',
            'D-dimer',
        ]),
        'answer'     => 'ESR',
        'explanation'=> 'Elevated fibrinogen increases rouleaux formation, raising ESR.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which parameter defines average mass of hemoglobin per RBC?',
        'choices'    => json_encode([
            'MCH',
            'MCV',
            'MCHC',
            'RDW',
        ]),
        'answer'     => 'MCH',
        'explanation'=> 'MCH = Hb/RBC count, expressed in picograms per cell.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which leukocyte alkaline phosphatase score is low in chronic myeloid leukemia (CML)?',
        'choices'    => json_encode([
            'LAP score',
            'ESR',
            'CRP',
            'D-dimer',
        ]),
        'answer'     => 'LAP score',
        'explanation'=> 'CML cells have low LAP, whereas leukemoid reactions show high LAP.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which test differentiates alpha from beta thalassemia by hemoglobin electrophoresis?',
        'choices'    => json_encode([
            'HbA₂ elevation',
            'HbF elevation',
            'HbA absence',
            'HbS presence',
        ]),
        'answer'     => 'HbA₂ elevation',
        'explanation'=> 'Beta thalassemia trait shows increased HbA₂ (>3.5%).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which component is decreased in hypercoagulable state leading to venous thrombosis?',
        'choices'    => json_encode([
            'Protein C',
            'Fibrinogen',
            'Factor VIII',
            'Von Willebrand factor',
        ]),
        'answer'     => 'Protein C',
        'explanation'=> 'Protein C deficiency leads to impaired anticoagulant pathway and thrombosis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which smear finding is pathognomonic for sideroblastic anemia?',
        'choices'    => json_encode([
            'Ringed sideroblasts',
            'Schistocytes',
            'Spherocytes',
            'Macro-ovalocytes',
        ]),
        'answer'     => 'Ringed sideroblasts',
        'explanation'=> 'Iron-laden mitochondria encircle nucleus of erythroblasts in sideroblastic anemia.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which reticulocyte index corrects for anemia severity by adjusting retic percentage?',
        'choices'    => json_encode([
            'Corrected retic index',
            'RDW',
            'MCV',
            'MPV',
        ]),
        'answer'     => 'Corrected retic index',
        'explanation'=> 'Adjusts retic% for hematocrit to reflect marrow response.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which anticoagulant influences mean platelet volume (MPV) if delayed analysis?',
        'choices'    => json_encode([
            'EDTA',
            'Sodium citrate',
            'Heparin',
            'Oxalate',
        ]),
        'answer'     => 'EDTA',
        'explanation'=> 'MPV increases over time in EDTA due to platelet swelling.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which test is most specific for diagnosing vitamin B12 deficiency?',
        'choices'    => json_encode([
            'Methylmalonic acid',
            'Homocysteine',
            'Serum B12 level',
            'Serum folate level',
        ]),
        'answer'     => 'Methylmalonic acid',
        'explanation'=> 'MMA accumulates specifically in B12 deficiency, distinguishing from folate deficiency.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which smear feature indicates intravascular hemolysis with RBC ghosts?',
        'choices'    => json_encode([
            'Ghost cells',
            'Heinz bodies',
            'Howell-Jolly bodies',
            'Basophilic stippling',
        ]),
        'answer'     => 'Ghost cells',
        'explanation'=> 'Lysed RBC membranes appear as pale ghost cells in intravascular hemolysis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 34,
        'part'       => 6,
        'question'   => 'Which coagulation factor assay uses factor-deficient plasma to measure individual factor activity?',
        'choices'    => json_encode([
            'One-stage clotting assays',
            'Chromogenic assays',
            'ELISA',
            'Turbidimetric assays',
        ]),
        'answer'     => 'One-stage clotting assays',
        'explanation'=> 'Mixing factor-deficient plasma with patient plasma and measuring clot time isolates factor activity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
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

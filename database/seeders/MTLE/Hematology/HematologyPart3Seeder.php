<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart3Seeder extends Seeder
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
        'part'       => 3,
        'question'   => 'Which anticoagulant is used for complete blood count (CBC)?',
        'choices'    => json_encode([
            'EDTA',
            'Sodium citrate',
            'Heparin',
            'Oxalate',
        ]),
        'answer'     => 'EDTA',
        'explanation'=> 'EDTA preserves cellular morphology and prevents clotting by chelating calcium.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'What parameter is calculated by (Hb x 10)/RBC count?',
        'choices'    => json_encode([
            'MCH',
            'MCV',
            'MCHC',
            'RDW',
        ]),
        'answer'     => 'MCH',
        'explanation'=> 'Mean corpuscular hemoglobin (MCH) equals hemoglobin mass divided by RBC number.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which condition prolongs both PT and aPTT?',
        'choices'    => json_encode([
            'DIC',
            'Hemophilia A',
            'vWD',
            'Vitamin K administration',
        ]),
        'answer'     => 'DIC',
        'explanation'=> 'DIC consumes clotting factors leading to prolonged PT and aPTT.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which cell count is increased in parasitic infections and allergic reactions?',
        'choices'    => json_encode([
            'Eosinophils',
            'Neutrophils',
            'Lymphocytes',
            'Monocytes',
        ]),
        'answer'     => 'Eosinophils',
        'explanation'=> 'Eosinophilia is characteristic of helminth infections and allergic conditions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'What is the normal range for mean platelet volume (MPV)?',
        'choices'    => json_encode([
            '7–11 fL',
            '5–9 fL',
            '10–14 fL',
            '3–7 fL',
        ]),
        'answer'     => '7–11 fL',
        'explanation'=> 'MPV reflects platelet size; normal adult range is 7–11 fL.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which test is used to diagnose paroxysmal nocturnal hemoglobinuria by detecting CD55/CD59 deficiency?',
        'choices'    => json_encode([
            'Flow cytometry',
            'Ham\'s test',
            'Wright stain',
            'Coombs test',
        ]),
        'answer'     => 'Flow cytometry',
        'explanation'=> 'Flow cytometry quantifies loss of GPI-anchored CD55 and CD59 on RBCs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which hemolysis indicator is elevated in intravascular hemolysis?',
        'choices'    => json_encode([
            'LDH',
            'Bilirubin',
            'Haptoglobin',
            'Albumin',
        ]),
        'answer'     => 'LDH',
        'explanation'=> 'Intravascular hemolysis releases LDH from RBCs; haptoglobin is decreased.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which platelet parameter reflects variation in platelet size?',
        'choices'    => json_encode([
            'PDW',
            'MPV',
            'PLT count',
            'RDW',
        ]),
        'answer'     => 'PDW',
        'explanation'=> 'Platelet distribution width measures variability in platelet size.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which smear feature suggests megaloblastic anemia?',
        'choices'    => json_encode([
            'Macro-ovalocytes and hypersegmented neutrophils',
            'Schistocytes',
            'Spherocytes',
            'Basophilic stippling',
        ]),
        'answer'     => 'Macro-ovalocytes and hypersegmented neutrophils',
        'explanation'=> 'Megaloblastic changes include large oval RBCs and >5 lobes neutrophils.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which assay measures antithrombin activity in plasma?',
        'choices'    => json_encode([
            'Chromogenic substrate assay',
            'PT test',
            'aPTT test',
            'D-dimer',
        ]),
        'answer'     => 'Chromogenic substrate assay',
        'explanation'=> 'Antithrombin cleaves a chromogenic thrombin substrate; rate reflects AT level.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which erythrocyte osmotic fragility test is positive in hereditary spherocytosis?',
        'choices'    => json_encode([
            'Increased fragility in hypotonic saline',
            'Decreased fragility',
            'Normal fragility',
            'Variable fragility',
        ]),
        'answer'     => 'Increased fragility in hypotonic saline',
        'explanation'=> 'Spherocytes lyse at higher saline concentrations due to reduced surface area-to-volume.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which white cell survival study uses radiolabeled chromium (51Cr)?',
        'choices'    => json_encode([
            '51Cr-labeling',
            'Selenium-75',
            'Technetium-99m',
            'Iodine-131',
        ]),
        'answer'     => '51Cr-labeling',
        'explanation'=> 'Neutrophils labeled with 51Cr track survival and distribution.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which plasma cell disorder shows rouleaux formation on peripheral smear?',
        'choices'    => json_encode([
            'Multiple myeloma',
            'Leukemia',
            'Polycythemia vera',
            'Hemochromatosis',
        ]),
        'answer'     => 'Multiple myeloma',
        'explanation'=> 'High immunoglobulins reduce zeta potential causing stacked RBCs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which cell count flag indicates possible nucleated RBCs interfering with WBC count?',
        'choices'    => json_encode([
            'WNR flag',
            'PLT flag',
            'HGB flag',
            'RET flag',
        ]),
        'answer'     => 'WNR flag',
        'explanation'=> 'WNR channel flags nRBC when nucleated RBCs are detected in WBC count.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which coagulation test is prolonged in von Willebrand disease due to decreased vWF?',
        'choices'    => json_encode([
            'aPTT',
            'PT',
            'Bleeding time',
            'Clot retraction',
        ]),
        'answer'     => 'aPTT',
        'explanation'=> 'vWD affects intrinsic pathway factor VIII stability, leading to prolonged aPTT.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which cell abnormality is seen in myelodysplastic syndrome?',
        'choices'    => json_encode([
            'Ringed sideroblasts',
            'Schistocytes',
            'Target cells',
            'Spherocytes',
        ]),
        'answer'     => 'Ringed sideroblasts',
        'explanation'=> 'Iron-laden mitochondria surround nucleus in erythroblasts in MDS.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which test screens for platelet function via platelet adhesion to collagen and ADP release?',
        'choices'    => json_encode([
            'Platelet function analyzer (PFA-100)',
            'Bleeding time',
            'Clot retraction',
            'Prothrombin time',
        ]),
        'answer'     => 'Platelet function analyzer (PFA-100)',
        'explanation'=> 'PFA-100 measures closure time reflecting platelet adhesion and aggregation under shear.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which parameter indicates reticulocytosis in anemia recovery?',
        'choices'    => json_encode([
            'Corrected retic count >2%',
            'RDW decreased',
            'MCV normal',
            'Platelets elevated',
        ]),
        'answer'     => 'Corrected retic count >2%',
        'explanation'=> 'Corrected retic adjusts for Hct indicating increased marrow response.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which hereditary condition shows Howell-Jolly bodies after splenectomy?',
        'choices'    => json_encode([
            'Sickle cell anemia',
            'Hereditary spherocytosis',
            'Thalassemia',
            'G6PD deficiency',
        ]),
        'answer'     => 'Sickle cell anemia',
        'explanation'=> 'Functional asplenia leads to nuclear remnants in RBCs (Howell-Jolly bodies).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 34,
        'part'       => 3,
        'question'   => 'Which clot-based assay measures fibrinolytic activity by clot lysis time?',
        'choices'    => json_encode([
            'Euglobulin lysis time',
            'D-dimer',
            'PT',
            'aPTT',
        ]),
        'answer'     => 'Euglobulin lysis time',
        'explanation'=> 'Measures time for clot formed from euglobulin fraction to lyse, reflecting plasmin activity.',
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

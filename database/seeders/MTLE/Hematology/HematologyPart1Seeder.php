<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart1Seeder extends Seeder
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
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'What is the reference range for adult male hemoglobin concentration?',
        'choices'     => json_encode([
            '13.5–17.5 g/dL',
            '12.0–15.5 g/dL',
            '11.0–13.0 g/dL',
            '10.5–14.0 g/dL',
        ]),
        'answer'      => '13.5–17.5 g/dL',
        'explanation' => 'Normal adult male hemoglobin ranges from 13.5 to 17.5 g/dL per PRC standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which cell lineage gives rise to neutrophils in the bone marrow?',
        'choices'     => json_encode([
            'Myeloblast series',
            'Lymphoblast series',
            'Monoblast series',
            'Erythroblast series',
        ]),
        'answer'      => 'Myeloblast series',
        'explanation' => 'Neutrophils derive from the myeloblast lineage through promyelocyte and myelocyte stages.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'What is the principle of the Coulter method for automated cell counting?',
        'choices'     => json_encode([
            'Electrical impedance',
            'Flow cytometric light scatter',
            'Optical density',
            'Spectrophotometry',
        ]),
        'answer'      => 'Electrical impedance',
        'explanation' => 'Coulter counters measure changes in electrical resistance as cells pass through an aperture.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which reagent is used in the manual reticulocyte count with supravital staining?',
        'choices'     => json_encode([
            'New methylene blue',
            'Wright stain',
            'Giemsa stain',
            'Leishman stain',
        ]),
        'answer'      => 'New methylene blue',
        'explanation' => 'New methylene blue binds residual RNA in reticulocytes, allowing their visualization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'What causes a shift to the left in the differential leukocyte count?',
        'choices'     => json_encode([
            'Increased band neutrophils',
            'Increased lymphocytes',
            'Increased eosinophils',
            'Increased monocytes',
        ]),
        'answer'      => 'Increased band neutrophils',
        'explanation' => 'A left shift indicates a rise in immature neutrophils (bands) typically during acute infection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which factor is necessary for vitamin B12 absorption in the terminal ileum?',
        'choices'     => json_encode([
            'Intrinsic factor',
            'Transcobalamin I',
            'Folic acid',
            'Gastrin',
        ]),
        'answer'      => 'Intrinsic factor',
        'explanation' => 'Intrinsic factor, secreted by gastric parietal cells, binds B12 for ileal absorption.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'What is the normal ESR (Westergren) range for adult females in mm/hr?',
        'choices'     => json_encode([
            '0–20 mm/hr',
            '0–15 mm/hr',
            '5–25 mm/hr',
            '10–30 mm/hr',
        ]),
        'answer'      => '0–20 mm/hr',
        'explanation' => 'The normal ESR for adult females is up to 20 mm/hr by Westergren method.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which cell is characterized by cytoplasmic Auer rods?',
        'choices'     => json_encode([
            'Myeloblast',
            'Monocyte',
            'Lymphocyte',
            'Basophil',
        ]),
        'answer'      => 'Myeloblast',
        'explanation' => 'Auer rods are fused primary granules seen in myeloblasts in acute myelogenous leukemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which hemoglobinopathy is diagnosed by presence of target cells and Hb electrophoresis showing HbS?',
        'choices'     => json_encode([
            'Sickle cell anemia',
            'Thalassemia trait',
            'Hemoglobin C disease',
            'Hereditary spherocytosis',
        ]),
        'answer'      => 'Sickle cell anemia',
        'explanation' => 'Sickle cell anemia shows target cells and HbS on electrophoresis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'What is the anticoagulant used for coagulation studies (PT, aPTT)?',
        'choices'     => json_encode([
            'Sodium citrate',
            'EDTA',
            'Heparin',
            'Oxalate',
        ]),
        'answer'      => 'Sodium citrate',
        'explanation' => '3.2% sodium citrate chelates calcium, preserving clotting factors for coagulation assays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which platelet function test uses optical aggregometry with ADP agonist?',
        'choices'     => json_encode([
            'Platelet aggregation test',
            'Bleeding time',
            'Clot retraction',
            'Thrombin time',
        ]),
        'answer'      => 'Platelet aggregation test',
        'explanation' => 'Optical aggregometry measures light transmission as platelets aggregate in response to ADP.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which morphology is seen in megaloblastic anemia peripheral smear?',
        'choices'     => json_encode([
            'Hypersegmented neutrophils',
            'Schistocytes',
            'Spherocytes',
            'Basophilic stippling',
        ]),
        'answer'      => 'Hypersegmented neutrophils',
        'explanation' => 'Megaloblastic anemia shows macro-ovalocytes and hypersegmented neutrophils.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which test measures fibrinogen concentration by Clauss method?',
        'choices'     => json_encode([
            'Clotting assay',
            'ELISA',
            'Chromogenic assay',
            'Turbidimetric assay',
        ]),
        'answer'      => 'Clotting assay',
        'explanation' => 'Clauss fibrinogen assay measures clotting time after high thrombin addition to diluted plasma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which screening test is used for von Willebrand disease by measuring Ristocetin cofactor activity?',
        'choices'     => json_encode([
            'Ristocetin cofactor assay',
            'Bleeding time',
            'PT',
            'aPTT',
        ]),
        'answer'      => 'Ristocetin cofactor assay',
        'explanation' => 'Ristocetin induces vWF-mediated platelet agglutination; activity reflects vWD severity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which variant cell is seen in iron deficiency anemia peripheral smear?',
        'choices'     => json_encode([
            'Microcytic, hypochromic RBCs',
            'Macrocytic RBCs',
            'Spherocytes',
            'Elliptocytes',
        ]),
        'answer'      => 'Microcytic, hypochromic RBCs',
        'explanation' => 'Iron deficiency leads to reduced hemoglobin synthesis producing small pale RBCs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'What is the principle of the D-dimer assay in suspected thromboembolism?',
        'choices'     => json_encode([
            'Immunoturbidimetric detection of fibrin degradation products',
            'Chromogenic substrate cleavage',
            'Clot formation time',
            'Platelet aggregation',
        ]),
        'answer'      => 'Immunoturbidimetric detection of fibrin degradation products',
        'explanation' => 'D-dimer assays detect cross-linked fibrin fragments by antibodies causing turbidity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which condition shows teardrop cells (dacrocytes) on peripheral smear?',
        'choices'     => json_encode([
            'Myelofibrosis',
            'Iron deficiency anemia',
            'Sickle cell anemia',
            'Hereditary spherocytosis',
        ]),
        'answer'      => 'Myelofibrosis',
        'explanation' => 'Bone marrow fibrosis distorts RBCs leading to teardrop shaped cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which assay measures natural anticoagulant protein C activity?',
        'choices'     => json_encode([
            'Chromogenic protein C assay',
            'PT test',
            'aPTT test',
            'D-dimer test',
        ]),
        'answer'      => 'Chromogenic protein C assay',
        'explanation' => 'Measures activated protein C cleavage of chromogenic substrate proportional to activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which cell feature is characteristic of hereditary spherocytosis on blood smear?',
        'choices'     => json_encode([
            'Spherocytes without central pallor',
            'Schistocytes',
            'Target cells',
            'Acanthocytes',
        ]),
        'answer'      => 'Spherocytes without central pallor',
        'explanation' => 'Membrane defects cause small dense RBCs lacking central pallor.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 34,
        'part'        => 1,
        'question'    => 'Which hematology instrument parameter measures RBC distribution width?',
        'choices'     => json_encode([
            'RDW',
            'MCV',
            'MCH',
            'MCHC',
        ]),
        'answer'      => 'RDW',
        'explanation' => 'RDW quantifies variation in RBC size, aiding in anemia classification.',
        'created_at'  => $now,
        'updated_at'  => $now,
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

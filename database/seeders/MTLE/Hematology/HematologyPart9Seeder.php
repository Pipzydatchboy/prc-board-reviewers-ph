<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Which assay measures factor VIII inhibitor levels in hemophilia patients?',
        'choices'     => json_encode([
            'Bethesda assay',
            'Mixing study',
            'PT/INR',
            'aPTT',
        ]),
        'answer'      => 'Bethesda assay',
        'explanation' => 'Quantifies inhibitor titer by residual factor activity after mixing patient plasma with normal plasma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which parameter indicates red cell distribution width reflecting anisocytosis?',
        'choices'     => json_encode([
            'RDW',
            'MCV',
            'MCH',
            'MCHC',
        ]),
        'answer'      => 'RDW',
        'explanation' => 'RDW measures variation in red cell size.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which condition causes neutrophilia with a left shift and toxic changes?',
        'choices'     => json_encode([
            'Severe bacterial infection',
            'Viral infection',
            'Allergic reaction',
            'Iron deficiency',
        ]),
        'answer'      => 'Severe bacterial infection',
        'explanation' => 'Infections stimulate neutrophil release, immature forms, and toxic granulation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which automated parameter signals possible WBC differential flags?',
        'choices'     => json_encode([
            'WBC differential flag',
            'Platelet flag',
            'RBC flag',
            'HGB flag',
        ]),
        'answer'      => 'WBC differential flag',
        'explanation' => 'Indicates abnormalities requiring manual WBC differential review.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which smear finding differentiates P.vivax from P.falciparum malaria?',
        'choices'     => json_encode([
            'Schuffner\'s stippling',
            'Maurer\'s clefts',
            'Multiple rings per RBC',
            'Banana-shaped gametocytes',
        ]),
        'answer'      => 'Schuffner\'s stippling',
        'explanation' => 'P.vivax/ovale show Schuffner stippling; P.falciparum shows Maurer\'s clefts and banana gametocytes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which test differentiates microcytic anemias by measuring iron stores?',
        'choices'     => json_encode([
            'Ferritin',
            'Transferrin',
            'D-dimer',
            'PT/INR',
        ]),
        'answer'      => 'Ferritin',
        'explanation' => 'Ferritin correlates with body iron stores; low in iron deficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which parameter assesses platelet adhesion to collagen and epinephrine under shear stress?',
        'choices'     => json_encode([
            'PFA-100 closure time',
            'Bleeding time',
            'Clot retraction',
            'PT',
        ]),
        'answer'      => 'PFA-100 closure time',
        'explanation' => 'Closure time indicates platelet function in primary hemostasis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which smear finding is pathognomonic for APL variant of AML?',
        'choices'     => json_encode([
            'Promyelocytes with Auer rods',
            'Schistocytes',
            'Macro-ovalocytes',
            'Heinz bodies',
        ]),
        'answer'      => 'Promyelocytes with Auer rods',
        'explanation' => 'APL shows numerous Auer rods in abnormal promyelocytes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which assay measures fibrinogen degradation products specifically during DIC?',
        'choices'     => json_encode([
            'D-dimer assay',
            'PT',
            'aPTT',
            'Bleeding time',
        ]),
        'answer'      => 'D-dimer assay',
        'explanation' => 'D-dimer reflects cross-linked fibrin breakdown in DIC and thrombotic events.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which parameter is most sensitive for detecting iron deficiency anemia?',
        'choices'     => json_encode([
            'Ferritin',
            'MCV',
            'RDW',
            'Serum iron',
        ]),
        'answer'      => 'Ferritin',
        'explanation' => 'Ferritin declines early in iron depletion before RBC indices change.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which cell count parameter indicates left shift by increased band neutrophils?',
        'choices'     => json_encode([
            'Band count',
            'Lymphocyte count',
            'Monocyte count',
            'Eosinophil count',
        ]),
        'answer'      => 'Band count',
        'explanation' => 'Elevated bands reflect marrow response in infection and inflammation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which smear finding is characteristic of megaloblastic anemia with tear drop cells?',
        'choices'     => json_encode([
            'Macro-ovalocytes',
            'Teardrop cells',
            'Elliptocytes',
            'Schistocytes',
        ]),
        'answer'      => 'Macro-ovalocytes',
        'explanation' => 'Large oval RBCs indicate impaired DNA synthesis; teardrops are MDS/myelofibrosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which assay measures antithrombin levels by inhibition of factor Xa?',
        'choices'     => json_encode([
            'Anti-Xa assay',
            'PT',
            'aPTT',
            'Bleeding time',
        ]),
        'answer'      => 'Anti-Xa assay',
        'explanation' => 'Measures residual Xa after AT-heparin neutralization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which smear finding indicates splenectomy by presence of Howell-Jolly bodies?',
        'choices'     => json_encode([
            'Howell-Jolly bodies',
            'Heinz bodies',
            'Basophilic stippling',
            'Pappenheimer bodies',
        ]),
        'answer'      => 'Howell-Jolly bodies',
        'explanation' => 'Nuclear remnants appear when splenic function is absent.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which condition is indicated by decreased LAP score with leukocytosis?',
        'choices'     => json_encode([
            'CML',
            'Leukemoid reaction',
            'Infection',
            'Inflammation',
        ]),
        'answer'      => 'CML',
        'explanation' => 'CML neutrophils have low alkaline phosphatase despite high counts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which smear finding is seen in hemolysis with bite cells and blister cells?',
        'choices'     => json_encode([
            'G6PD deficiency',
            'Sickle cell anemia',
            'Hereditary spherocytosis',
            'Thalassemia',
        ]),
        'answer'      => 'G6PD deficiency',
        'explanation' => 'Oxidative damage leads to Heinz bodies, bite and blister cells after splenic pitting.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which parameter is elevated in hereditary spherocytosis due to hemolysis markers?',
        'choices'     => json_encode([
            'LDH',
            'Platelets',
            'WBC count',
            'Albumin',
        ]),
        'answer'      => 'LDH',
        'explanation' => 'Increased LDH with reduced haptoglobin reflects hemolysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which test measures protein C activation by thrombin-thrombomodulin complex?',
        'choices'     => json_encode([
            'Protein C functional assay',
            'PT',
            'aPTT',
            'D-dimer',
        ]),
        'answer'      => 'Protein C functional assay',
        'explanation' => 'Assesses protein C anticoagulant pathway by substrate cleavage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which smear feature indicates myelofibrosis with teardrop cells?',
        'choices'     => json_encode([
            'Teardrop cells',
            'Spherocytes',
            'Schistocytes',
            'Elliptocytes',
        ]),
        'answer'      => 'Teardrop cells',
        'explanation' => 'Dacrocytes result from marrow fibrosis forcing RBC distortion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 34,
        'part'        => 9,
        'question'    => 'Which platelet function assay measures ADP-induced aggregation curves?',
        'choices'     => json_encode([
            'Light transmission aggregometry',
            'PFA-100',
            'Bleeding time',
            'Clot retraction',
        ]),
        'answer'      => 'Light transmission aggregometry',
        'explanation' => 'Measures % light transmission change as platelets aggregate in PRP with ADP.',
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

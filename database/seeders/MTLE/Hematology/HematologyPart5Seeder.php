<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which condition is characterized by decreased erythropoietin and normocytic anemia?',
        'choices'     => json_encode([
            'Anemia of chronic disease',
            'Iron deficiency anemia',
            'Megaloblastic anemia',
            'Sickle cell anemia',
        ]),
        'answer'      => 'Anemia of chronic disease',
        'explanation' => 'Chronic inflammation leads to hepcidin-mediated iron sequestration and reduced EPO production.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'What is the expected reticulocyte production index (RPI) in hemolytic anemia?',
        'choices'     => json_encode([
            '>2%',
            '<2%',
            '1%',
            '0.5%',
        ]),
        'answer'      => '>2%',
        'explanation' => 'Hemolysis stimulates marrow, leading to RPI greater than 2%.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which parameter classifies anemia as microcytic, normocytic, or macrocytic?',
        'choices'     => json_encode([
            'MCV',
            'MCH',
            'MCHC',
            'RDW',
        ]),
        'answer'      => 'MCV',
        'explanation' => 'Mean corpuscular volume indicates average RBC size and classifies anemia types.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which cell surface marker is positive in acute promyelocytic leukemia (APL)?',
        'choices'     => json_encode([
            'CD33+',
            'CD19+',
            'CD3+',
            'CD10+',
        ]),
        'answer'      => 'CD33+',
        'explanation' => 'APL cells express myeloid marker CD33 and have t(15;17) PML-RARA translocation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which test differentiates immune from non-immune hemolysis by detecting antibodies on RBCs?',
        'choices'     => json_encode([
            'Direct antiglobulin test',
            'Indirect antiglobulin test',
            'Ham\'s test',
            'Cold agglutinin titer',
        ]),
        'answer'      => 'Direct antiglobulin test',
        'explanation' => 'DAT (Coombs) detects antibodies or complement bound directly to patient RBCs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which nutritional deficiency causes pancytopenia with macrocytosis?',
        'choices'     => json_encode([
            'Folate deficiency',
            'Iron deficiency',
            'Vitamin B12 deficiency',
            'Vitamin C deficiency',
        ]),
        'answer'      => 'Folate deficiency',
        'explanation' => 'Folate deficiency leads to pancytopenia and macrocytosis due to impaired DNA synthesis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which lab finding is typical of iron deficiency anemia?',
        'choices'     => json_encode([
            'Low ferritin',
            'High ferritin',
            'Normal ferritin',
            'High transferrin saturation',
        ]),
        'answer'      => 'Low ferritin',
        'explanation' => 'Ferritin reflects iron stores and is low in iron deficiency anemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which RBC morphology is seen in primary myelofibrosis?',
        'choices'     => json_encode([
            'Teardrop cells',
            'Spherocytes',
            'Elliptocytes',
            'Macro-ovalocytes',
        ]),
        'answer'      => 'Teardrop cells',
        'explanation' => 'Bone marrow fibrosis distorts RBC shape resulting in dacrocytes (teardrop cells).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'What is the characteristic smear finding in hereditary spherocytosis?',
        'choices'     => json_encode([
            'Spherocytes',
            'Schistocytes',
            'Elliptocytes',
            'Macro-ovalocytes',
        ]),
        'answer'      => 'Spherocytes',
        'explanation' => 'Membrane protein defects cause loss of membrane surface and spherical RBCs lacking central pallor.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which bone marrow finding confirms aplastic anemia?',
        'choices'     => json_encode([
            'Hypocellular marrow with fatty infiltration',
            'Hypercellular marrow',
            'Myeloblast proliferation',
            'Fibrotic replacement',
        ]),
        'answer'      => 'Hypocellular marrow with fatty infiltration',
        'explanation' => 'Aplastic anemia shows marrow pancytopenia with adipose tissue replacing hematopoietic cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which parameter increases in megaloblastic anemia reflecting RBC size variation?',
        'choices'     => json_encode([
            'RDW',
            'MCV',
            'Hemoglobin',
            'Platelet count',
        ]),
        'answer'      => 'RDW',
        'explanation' => 'RDW increases as macro-ovalocytes coexist with normocytes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which assay measures fibrinogen concentration by clotting time?',
        'choices'     => json_encode([
            'Clauss assay',
            'ELISA',
            'Chromogenic assay',
            'Turbidimetric assay',
        ]),
        'answer'      => 'Clauss assay',
        'explanation' => 'Clauss fibrinogen assay measures clotting time after high thrombin addition to diluted plasma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which bone marrow finding indicates sideroblastic anemia?',
        'choices'     => json_encode([
            'Ringed sideroblasts',
            'Hypocellularity',
            'Auer rods',
            'Megakaryocytes',
        ]),
        'answer'      => 'Ringed sideroblasts',
        'explanation' => 'Iron-laden mitochondria around nucleus form ringed sideroblasts on Prussian blue stain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which RBC inclusion is typical in lead poisoning?',
        'choices'     => json_encode([
            'Basophilic stippling',
            'Howell-Jolly bodies',
            'Heinz bodies',
            'Pappenheimer bodies',
        ]),
        'answer'      => 'Basophilic stippling',
        'explanation' => 'Lead inhibits heme synthesis enzymes causing ribosomal precipitates as stippling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which platelet function test simulates vascular injury under shear conditions?',
        'choices'     => json_encode([
            'PFA-100 closure time',
            'Bleeding time',
            'Platelet aggregation test',
            'Clot retraction',
        ]),
        'answer'      => 'PFA-100 closure time',
        'explanation' => 'PFA-100 measures time for occlusion of aperture by platelet plug under flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which M-spike pattern on SPEP suggests monoclonal gammopathy?',
        'choices'     => json_encode([
            'Sharp spike in gamma region',
            'Broad-based increase',
            'Decreased albumin',
            'Increased alpha-1 globulin',
        ]),
        'answer'      => 'Sharp spike in gamma region',
        'explanation' => 'Monoclonal immunoglobulin produces a narrow peak (M-spike) on electrophoresis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which inclusion is detected by supravital stain in G6PD deficiency?',
        'choices'     => json_encode([
            'Heinz bodies',
            'Howell-Jolly bodies',
            'Basophilic stippling',
            'Pappenheimer bodies',
        ]),
        'answer'      => 'Heinz bodies',
        'explanation' => 'Precipitated hemoglobin in G6PD deficiency forms Heinz bodies visible with supravital stain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which test is used to detect lupus anticoagulant by prolongation of dRVVT?',
        'choices'     => json_encode([
            'Dilute Russell viper venom test',
            'PT',
            'aPTT',
            'Bleeding time',
        ]),
        'answer'      => 'Dilute Russell viper venom test',
        'explanation' => 'dRVVT is prolonged in presence of lupus anticoagulant that interferes with phospholipid-dependent reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which smear feature indicates extramedullary hematopoiesis with tear-drop cells and nucleated RBCs?',
        'choices'     => json_encode([
            'Leukoerythroblastic picture',
            'Spherocytes',
            'Basophilic stippling',
            'Schistocytes',
        ]),
        'answer'      => 'Leukoerythroblastic picture',
        'explanation' => 'Teardrop cells, nucleated RBCs, and immature WBCs reflect marrow stress and extramedullary hematopoiesis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 34,
        'part'        => 5,
        'question'    => 'Which laboratory finding suggests hemolysis with high LDH, low haptoglobin, and elevated indirect bilirubin?',
        'choices'     => json_encode([
            'Intravascular hemolysis markers',
            'Iron deficiency markers',
            'Liver failure markers',
            'Renal failure markers',
        ]),
        'answer'      => 'Intravascular hemolysis markers',
        'explanation' => 'Intravascular hemolysis releases LDH and Hb, consuming haptoglobin and raising indirect bilirubin.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

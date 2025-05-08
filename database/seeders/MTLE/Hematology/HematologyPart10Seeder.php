<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart10Seeder extends Seeder
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
        'part'       => 10,
        'question'   => 'Which mutation is characteristic of primary myelofibrosis detected by PCR?',
        'choices'    => json_encode([
            'JAK2 V617F',
            'BCR-ABL',
            'FLT3-ITD',
            'NPM1',
        ]),
        'answer'     => 'JAK2 V617F',
        'explanation'=> 'Present in ~50% of PMF cases, activating JAK-STAT pathway.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //2
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which parameter assesses erythrocyte osmotic fragility decrease in thalassemia trait?',
        'choices'    => json_encode([
            'Osmotic fragility test',
            'ESR',
            'PT',
            'aPTT',
        ]),
        'answer'     => 'Osmotic fragility test',
        'explanation'=> 'Thalassemia trait RBCs lyse at lower saline concentrations due to target cells.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //3
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which cell count flag indicates high WBC count above linearity limit?',
        'choices'    => json_encode([
            'HIL flag',
            'Auto dilute flag',
            'PLT flag',
            'RET flag',
        ]),
        'answer'     => 'Auto dilute flag',
        'explanation'=> 'Indicates auto dilution required for high WBC samples beyond analyzer range.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //4
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which smear finding is diagnostic of Waldenström macroglobulinemia?',
        'choices'    => json_encode([
            'Lymphoplasmacytic cells',
            'Auer rods',
            'Schistocytes',
            'Target cells',
        ]),
        'answer'     => 'Lymphoplasmacytic cells',
        'explanation'=> 'Bone marrow infiltration by lymphoplasmacytic cells producing IgM.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //5
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which test quantitates fibrin monomers in DIC?',
        'choices'    => json_encode([
            'Fibrin monomer assay',
            'D-dimer',
            'PT',
            'aPTT',
        ]),
        'answer'     => 'Fibrin monomer assay',
        'explanation'=> 'Directly measures soluble fibrin monomers elevated in DIC.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //6
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which immunophenotype is characteristic of AML M3 (APL)?',
        'choices'    => json_encode([
            'CD34-, CD117+, HLA-DR-',
            'CD34+, HLA-DR+',
            'CD14+, CD64+',
            'CD19+, CD10+',
        ]),
        'answer'     => 'CD34-, CD117+, HLA-DR-',
        'explanation'=> 'APL blasts lack CD34 and HLA-DR, express CD117.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //7
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which RBC inclusion is detected by supravital stain in G6PD deficiency hemolysis?',
        'choices'    => json_encode([
            'Heinz bodies',
            'Basophilic stippling',
            'Howell-Jolly bodies',
            'Pappenheimer bodies',
        ]),
        'answer'     => 'Heinz bodies',
        'explanation'=> 'Denatured hemoglobin precipitates forming Heinz bodies.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //8
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which platelet function test uses ristocetin-induced platelet aggregation to diagnose vWD?',
        'choices'    => json_encode([
            'Ristocetin cofactor assay',
            'ADP aggregation',
            'Collagen aggregation',
            'Epinephrine aggregation',
        ]),
        'answer'     => 'Ristocetin cofactor assay',
        'explanation'=> 'Assesses vWF-mediated agglutination in presence of ristocetin.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //9
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which parameter is decreased in iron deficiency anemia?',
        'choices'    => json_encode([
            'Ferritin',
            'Transferrin',
            'RDW',
            'MCV',
        ]),
        'answer'     => 'Ferritin',
        'explanation'=> 'Ferritin reflects iron stores and is low in iron deficiency.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //10
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which smears findings help diagnose babesiosis with Maltese cross formation?',
        'choices'    => json_encode([
            'Maltese cross',
            'Schistocytes',
            'Ring forms only',
            'Bite cells',
        ]),
        'answer'     => 'Maltese cross',
        'explanation'=> 'Babesia microti forms tetrads in RBCs called Maltese cross.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which analyte is measured by cyanmethemoglobin method in hemoglobinometry?',
        'choices'    => json_encode([
            'Total hemoglobin',
            'HbF',
            'HbA₂',
            'Carboxyhemoglobin',
        ]),
        'answer'     => 'Total hemoglobin',
        'explanation'=> 'All hemoglobin converted to cyanmethemoglobin for absorbance measurement.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which test differentiates cold vs warm AIHA by DAT specificity?',
        'choices'    => json_encode([
            'IgG vs C3d DAT',
            'IgM vs IgG DAT',
            'PT vs aPTT',
            'ESR vs CRP',
        ]),
        'answer'     => 'IgG vs C3d DAT',
        'explanation'=> 'Warm AIHA DAT positive for IgG, cold AIHA for complement (C3d).',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //13
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which smear finding indicates infection by Plasmodium falciparum with multiple ring forms per RBC?',
        'choices'    => json_encode([
            'Multiple ring forms',
            'Schuffner’s stippling',
            'Banana gametocytes',
            'Maltese cross',
        ]),
        'answer'     => 'Multiple ring forms',
        'explanation'=> 'P. falciparum infects multiple merozoites per RBC causing multiple rings.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which parameter decreases in microcytic hypochromic anemias?',
        'choices'    => json_encode([
            'MCHC',
            'RDW',
            'Platelet count',
            'WBC count',
        ]),
        'answer'     => 'MCHC',
        'explanation'=> 'Hypochromia reflects low hemoglobin concentration in RBCs, lowering MCHC.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which protein is decreased in nephrotic syndrome leading to hypercoagulable state?',
        'choices'    => json_encode([
            'Antithrombin III',
            'Fibrinogen',
            'Factor VIII',
            'vWF',
        ]),
        'answer'     => 'Antithrombin III',
        'explanation'=> 'Loss in urine decreases AT III, increasing thrombosis risk.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which assay measures fibrinogen by comparing clotting times of test and reference plasmas?',
        'choices'    => json_encode([
            'Clot-based assay',
            'ELISA',
            'Chromogenic assay',
            'Turbidimetric assay',
        ]),
        'answer'     => 'Clot-based assay',
        'explanation'=> 'Clauss method compares clot times to calibration curve of known fibrinogen concentrations.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which test screens for anti-platelet antibodies in ITP?',
        'choices'    => json_encode([
            'Platelet antibody immunoassay',
            'PT',
            'aPTT',
            'ESR',
        ]),
        'answer'     => 'Platelet antibody immunoassay',
        'explanation'=> 'Detects autoantibodies against platelet glycoproteins.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 34,
        'place'      => 10,
        'question'   => 'Which smear finding indicates chronic myelomonocytic leukemia with monocyte proliferation?',
        'choices'    => json_encode([
            'Monocytosis with dysplasia',
            'Auer rods',
            'Schistocytes',
            'Spherocytes',
        ]),
        'answer'     => 'Monocytosis with dysplasia',
        'explanation'=> 'CMML features elevated monocytes with dysplastic changes.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which test is used to measure erythropoietin levels in suspected PRCA?',
        'choices'    => json_encode([
            'Immunoassay',
            'PT',
            'aPTT',
            'D-dimer',
        ]),
        'answer'     => 'Immunoassay',
        'explanation'=> 'Quantitative immunoassays detect serum EPO levels.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 34,
        'part'       => 10,
        'question'   => 'Which coagulation pathway is assessed by Russell viper venom time (RVVT)?',
        'choices'    => json_encode([
            'Common pathway',
            'Intrinsic pathway',
            'Extrinsic pathway',
            'Platelet function',
        ]),
        'answer'     => 'Common pathway',
        'explanation'=> 'RVVT directly activates factor X, assessing the common pathway and detecting lupus anticoagulant.',
        'created_at' => $now,
        'updated_at' => $now
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

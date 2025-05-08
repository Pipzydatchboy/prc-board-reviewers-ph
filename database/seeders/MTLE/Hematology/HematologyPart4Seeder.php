<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which hemoglobin derivative is measured by pulse oximetry but not by co-oximetry?',
        'choices'     => json_encode([
            'Carboxyhemoglobin',
            'Oxyhemoglobin',
            'Methemoglobin',
            'Deoxyhemoglobin',
        ]),
        'answer'      => 'Carboxyhemoglobin',
        'explanation' => 'Pulse oximetry reads carboxyhemoglobin erroneously as oxyhemoglobin, while co-oximetry differentiates them.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'What is the principle of the benzidine test for occult blood detection?',
        'choices'     => json_encode([
            'Peroxidase activity of hemoglobin',
            'Oxidase reaction of myoglobin',
            'Spectrophotometric absorbance',
            'Immunochromatography',
        ]),
        'answer'      => 'Peroxidase activity of hemoglobin',
        'explanation' => 'Hemoglobin’s pseudo-peroxidase activity oxidizes benzidine producing a blue color in presence of H₂O₂.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which platelet aggregation agonist causes minimal response in Glanzmann thrombasthenia?',
        'choices'     => json_encode([
            'ADP',
            'Collagen',
            'Epinephrine',
            'Ristocetin',
        ]),
        'answer'      => 'ADP',
        'explanation' => 'Glanzmann defect lacks GPIIb/IIIa, impairing aggregation with ADP, collagen, and epinephrine but not with ristocetin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'What is the major toxic change observed in neutrophils during severe bacterial sepsis?',
        'choices'     => json_encode([
            'Toxic granulation',
            'Dohle bodies',
            'Vacuolization',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Toxic granules, Dohle bodies, and cytoplasmic vacuoles are markers of neutrophil activation in sepsis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which test evaluates von Willebrand factor function by measuring platelet agglutination in presence of ristocetin?',
        'choices'     => json_encode([
            'Ristocetin cofactor assay',
            'Factor VIII activity',
            'Bleeding time',
            'PT',
        ]),
        'answer'      => 'Ristocetin cofactor assay',
        'explanation' => 'Assesses vWF-mediated platelet agglutination; decreased in vWD.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which instrument parameter indicates presence of cold agglutinins?',
        'choices'     => json_encode([
            'Abnormal RBC histogram with spikes',
            'Low MCV',
            'High RDW',
            'High MPV',
        ]),
        'answer'      => 'Abnormal RBC histogram with spikes',
        'explanation' => 'Cold agglutinins cause RBC clumps altering impedance or optical histograms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which erythrocyte enzyme deficiency is diagnosed by fluorescent spot test?',
        'choices'     => json_encode([
            'G6PD deficiency',
            'Pyruvate kinase deficiency',
            'Hexokinase deficiency',
            'Glutathione synthetase deficiency',
        ]),
        'answer'      => 'G6PD deficiency',
        'explanation' => 'Fluorescent spot test detects NADPH generation from G6PD activity under UV light.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which parameter in automated hematology analyzers flags high levels of nucleated red blood cells?',
        'choices'     => json_encode([
            'NRBC count flag',
            'HGB flag',
            'PLT flag',
            'WBC flag',
        ]),
        'answer'      => 'NRBC count flag',
        'explanation' => 'Automated counters flag NRBCs in WBC channel to prompt manual review.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'What is the normal range for mean corpuscular hemoglobin concentration (MCHC)?',
        'choices'     => json_encode([
            '32–36 g/dL',
            '28–32 g/dL',
            '36–40 g/dL',
            '24–28 g/dL',
        ]),
        'answer'      => '32–36 g/dL',
        'explanation' => 'Normal MCHC ranges from 32 to 36 grams per deciliter reflecting RBC hemoglobin density.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which condition shows panhypogammaglobulinemia on serum protein electrophoresis?',
        'choices'     => json_encode([
            'Severe combined immunodeficiency',
            'Multiple myeloma',
            'Waldenström macroglobulinemia',
            'Chronic inflammation',
        ]),
        'answer'      => 'Severe combined immunodeficiency',
        'explanation' => 'SCID patients lack B-cell immunoglobulin production leading to reduced gamma globulins.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which peripheral smear finding is characteristic of hemolytic anemia with fragmented RBCs and polychromasia?',
        'choices'     => json_encode([
            'Schistocytes and polychromasia',
            'Spherocytes',
            'Macro-ovalocytes',
            'Basophilic stippling',
        ]),
        'answer'      => 'Schistocytes and polychromasia',
        'explanation' => 'Fragmented RBCs with increased reticulocytes indicate hemolysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which assay quantifies protein S levels in plasma?',
        'choices'     => json_encode([
            'Enzyme immunoassay',
            'Chromogenic assay',
            'Clot-based assay',
            'Immunoturbidimetric assay',
        ]),
        'answer'      => 'Enzyme immunoassay',
        'explanation' => 'Quantitative enzyme immunoassays measure total and free protein S concentrations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which test differentiates cold agglutinin disease by direct antiglobulin test positivity for C3d?',
        'choices'     => json_encode([
            'Direct antiglobulin test (C3d)',
            'Indirect antiglobulin test',
            'Coombs test for IgG',
            'Cold hemagglutinin titers',
        ]),
        'answer'      => 'Direct antiglobulin test (C3d)',
        'explanation' => 'Cold agglutinin disease shows complement (C3d) coating RBCs in DAT.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which smear finding is seen in megaloblastic anemia with hypersegmented neutrophils and macro-ovalocytes?',
        'choices'     => json_encode([
            'Macro-ovalocytes and hypersegmented neutrophils',
            'Schistocytes',
            'Target cells',
            'Acanthocytes',
        ]),
        'answer'      => 'Macro-ovalocytes and hypersegmented neutrophils',
        'explanation' => 'Impaired DNA synthesis causes enlarged RBCs and neutrophils with >5 lobes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which coagulation parameter is most sensitive to vitamin K deficiency?',
        'choices'     => json_encode([
            'PT',
            'aPTT',
            'Bleeding time',
            'Thrombin time',
        ]),
        'answer'      => 'PT',
        'explanation' => 'Factors II, VII, IX, X are vitamin K–dependent; factor VII has shortest half-life, prolonging PT first.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which RBC inclusion is characteristic of lead poisoning?',
        'choices'     => json_encode([
            'Basophilic stippling',
            'Howell-Jolly bodies',
            'Heinz bodies',
            'Pappenheimer bodies',
        ]),
        'answer'      => 'Basophilic stippling',
        'explanation' => 'Lead inhibits heme synthesis causing ribosomal precipitates visible as basophilic stippling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which test measures platelet adhesion via collagen and epinephrine/carbohydrate cartridges?',
        'choices'     => json_encode([
            'PFA-100 closure time',
            'Bleeding time',
            'Platelet aggregation',
            'Prothrombin time',
        ]),
        'answer'      => 'PFA-100 closure time',
        'explanation' => 'Simulates vessel injury under shear; closure time reflects platelet adhesion and aggregation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which plasma cell disorder shows an M-spike in the gamma region on SPEP with low other globulins?',
        'choices'     => json_encode([
            'Multiple myeloma',
            'Waldenström macroglobulinemia',
            'Chronic inflammation',
            'Nephrotic syndrome',
        ]),
        'answer'      => 'Multiple myeloma',
        'explanation' => 'Monoclonal immunoglobulin produces a sharp M-spike with suppression of other immunoglobulins.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which condition shows Heinz bodies on supravital stain of RBCs?',
        'choices'     => json_encode([
            'G6PD deficiency',
            'Hereditary spherocytosis',
            'Sickle cell anemia',
            'Iron deficiency anemia',
        ]),
        'answer'      => 'G6PD deficiency',
        'explanation' => 'Oxidative stress precipitates hemoglobin forming Heinz bodies visible with supravital stains.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 34,
        'part'        => 4,
        'question'    => 'Which test detects lupus anticoagulant by prolongation of clotting in dilute Russell viper venom test (dRVVT)?',
        'choices'     => json_encode([
            'Dilute Russell viper venom test',
            'PT',
            'aPTT',
            'Bleeding time',
        ]),
        'answer'      => 'Dilute Russell viper venom test',
        'explanation' => 'dRVVT is sensitive to lupus anticoagulant which interferes with phospholipid-dependent coagulation.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

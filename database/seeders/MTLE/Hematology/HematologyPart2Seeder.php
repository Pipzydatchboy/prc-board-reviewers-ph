<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'What is the mean corpuscular volume (MCV) if Hct is 45% and RBC count is 5 x10^12/L?',
        'choices'     => json_encode([
            '90 fL',
            '80 fL',
            '100 fL',
            '70 fL',
        ]),
        'answer'      => '90 fL',
        'explanation' => 'MCV = (Hct/RBC) x 10 = (45/5) x 10 = 90 fL.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which cell type increases in bacterial infections?',
        'choices'     => json_encode([
            'Neutrophils',
            'Lymphocytes',
            'Eosinophils',
            'Monocytes',
        ]),
        'answer'      => 'Neutrophils',
        'explanation' => 'Neutrophilia is typical in acute bacterial infections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which coagulation factor is measured by the prothrombin time (PT)?',
        'choices'     => json_encode([
            'Factor VII',
            'Factor VIII',
            'Factor V',
            'Factor X',
        ]),
        'answer'      => 'Factor VII',
        'explanation' => 'PT is sensitive to the extrinsic pathway, particularly factor VII.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'What is the normal range for platelet count in adults?',
        'choices'     => json_encode([
            '150,000–450,000/µL',
            '100,000–300,000/µL',
            '200,000–500,000/µL',
            '50,000–200,000/µL',
        ]),
        'answer'      => '150,000–450,000/µL',
        'explanation' => 'Normal adult platelet range is 150–450 x10^3/µL.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which white blood cell count parameter is flagged when cells are too large for impedance detection?',
        'choices'     => json_encode([
            'WBC histogram spike',
            'Basophil flag',
            'Platelet clumps',
            'RBC agglutination',
        ]),
        'answer'      => 'WBC histogram spike',
        'explanation' => 'Large cells cause abnormal spikes in the WBC size histogram.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which condition is indicated by schistocytes on a peripheral smear?',
        'choices'     => json_encode([
            'Microangiopathic hemolytic anemia',
            'Iron deficiency anemia',
            'Megaloblastic anemia',
            'Sickle cell anemia',
        ]),
        'answer'      => 'Microangiopathic hemolytic anemia',
        'explanation' => 'Schistocytes (RBC fragments) are seen in MAHA like DIC, TTP.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which parameter assesses variation in RBC size and is elevated in anisocytosis?',
        'choices'     => json_encode([
            'RDW',
            'MCV',
            'MCHC',
            'Hct',
        ]),
        'answer'      => 'RDW',
        'explanation' => 'RDW measures the degree of variability in RBC volumes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which factor deficiency prolongs the activated partial thromboplastin time (aPTT) but not PT?',
        'choices'     => json_encode([
            'Factor VIII',
            'Factor VII',
            'Factor V',
            'Factor X',
        ]),
        'answer'      => 'Factor VIII',
        'explanation' => 'aPTT measures intrinsic pathway; factor VIII deficiency (Hemophilia A) prolongs aPTT.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which stain is used for reticulocyte counting in automated analyzers?',
        'choices'     => json_encode([
            'Thiazole orange',
            'Wright stain',
            'New methylene blue',
            'Giemsa stain',
        ]),
        'answer'      => 'Thiazole orange',
        'explanation' => 'Thiazole orange binds RNA in reticulocytes causing fluorescence in flow cytometry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'What is the half-life of platelets in circulation?',
        'choices'     => json_encode([
            '8–10 days',
            '3–5 days',
            '1–2 weeks',
            '24–48 hours',
        ]),
        'answer'      => '8–10 days',
        'explanation' => 'Platelet survival is approximately 8–10 days in peripheral blood.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which method assesses erythrocyte sedimentation rate using citrate anticoagulation?',
        'choices'     => json_encode([
            'Westergren method',
            'Wintrobe method',
            'Zeta sedimentation rate',
            'Automated ESR',
        ]),
        'answer'      => 'Westergren method',
        'explanation' => 'Westergren uses diluted blood with sodium citrate in a vertical tube to measure ESR.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which cell shows Dohle bodies and toxic granulation?',
        'choices'     => json_encode([
            'Neutrophil',
            'Lymphocyte',
            'Monocyte',
            'Eosinophil',
        ]),
        'answer'      => 'Neutrophil',
        'explanation' => 'Toxic changes in neutrophils during severe infection include Dohle bodies and toxic granules.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which test measures fibrin degradation products and is elevated in DIC?',
        'choices'     => json_encode([
            'D-dimer assay',
            'PT test',
            'aPTT test',
            'Platelet count',
        ]),
        'answer'      => 'D-dimer assay',
        'explanation' => 'D-dimer reflects cross-linked fibrin breakdown, elevated in disseminated intravascular coagulation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which peripheral smear finding indicates uremia?',
        'choices'     => json_encode([
            'Burr cells',
            'Schistocytes',
            'Spherocytes',
            'Target cells',
        ]),
        'answer'      => 'Burr cells',
        'explanation' => 'Echinocytes (burr cells) appear in uremia due to RBC membrane changes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which condition shows basophilic stippling on RBCs?',
        'choices'     => json_encode([
            'Lead poisoning',
            'Iron deficiency',
            'Sickle cell anemia',
            'Hereditary spherocytosis',
        ]),
        'answer'      => 'Lead poisoning',
        'explanation' => 'Basophilic stippling arises from ribosomal precipitates seen in lead toxicity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which factor is deficient in Hemophilia B?',
        'choices'     => json_encode([
            'Factor IX',
            'Factor VIII',
            'Factor V',
            'Factor VII',
        ]),
        'answer'      => 'Factor IX',
        'explanation' => 'Hemophilia B (Christmas disease) is due to factor IX deficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which cell count parameter is typically elevated in viral infections?',
        'choices'     => json_encode([
            'Lymphocytes',
            'Neutrophils',
            'Eosinophils',
            'Basophils',
        ]),
        'answer'      => 'Lymphocytes',
        'explanation' => 'Lymphocytosis is common in viral infections such as infectious mononucleosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which assay measures von Willebrand factor antigen levels?',
        'choices'     => json_encode([
            'ELISA',
            'Ristocetin cofactor',
            'PT test',
            'aPTT test',
        ]),
        'answer'      => 'ELISA',
        'explanation' => 'Quantitative vWF antigen assays use ELISA techniques.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which morphological RBC feature is seen in vitamin B12 deficiency?',
        'choices'     => json_encode([
            'Macro-ovalocytes',
            'Schistocytes',
            'Spherocytes',
            'Target cells',
        ]),
        'answer'      => 'Macro-ovalocytes',
        'explanation' => 'Megaloblastic anemia shows large oval RBCs due to impaired DNA synthesis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 34,
        'part'        => 2,
        'question'    => 'Which instrument parameter indicates platelet clumping and may require manual review?',
        'choices'     => json_encode([
            'Platelet histogram abnormal peak',
            'RBC histogram',
            'WBC differential flag',
            'Hct/RBC ratio',
        ]),
        'answer'      => 'Platelet histogram abnormal peak',
        'explanation' => 'Clumps produce peaks at larger sizes in platelet histogram requiring smear review.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

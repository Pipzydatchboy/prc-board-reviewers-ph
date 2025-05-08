<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which marker is used to differentiate chronic myelogenous leukemia from a leukemoid reaction by high levels?',
        'choices'     => json_encode([
            'BCR-ABL kinase activity',
            'LAP score',
            'CRP levels',
            'ESR',
        ]),
        'answer'      => 'BCR-ABL kinase activity',
        'explanation' => 'CML cells harbor the BCR-ABL fusion; leukemoid reactions have elevated LAP score instead.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which parameter indicates platelet production in thrombocytopenia by measuring immature platelet fraction?',
        'choices'     => json_encode([
            'IPF%',
            'MPV',
            'PDW',
            'PLT count',
        ]),
        'answer'      => 'IPF%',
        'explanation' => 'Immature platelet fraction reflects residual RNA in young platelets, indicating marrow production.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which test is used to screen for paroxysmal nocturnal hemoglobinuria by acidified serum lysis?',
        'choices'     => json_encode([
            'Ham’s test',
            'Flow cytometry',
            'Coombs test',
            'Cold agglutinin test',
        ]),
        'answer'      => 'Ham’s test',
        'explanation' => 'Acidified serum causes complement-mediated lysis of PNH RBCs in Ham’s test.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which hemoglobin electrophoresis result is characteristic of beta thalassemia major?',
        'choices'     => json_encode([
            'High HbF, absent HbA',
            'High HbA₂, normal HbA',
            'HbS presence',
            'Elevated HbC',
        ]),
        'answer'      => 'High HbF, absent HbA',
        'explanation' => 'Beta thalassemia major shows virtually no HbA and elevated HbF.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which smear finding is pathognomonic for hereditary elliptocytosis?',
        'choices'     => json_encode([
            'Elliptocytes',
            'Spherocytes',
            'Schistocytes',
            'Target cells',
        ]),
        'answer'      => 'Elliptocytes',
        'explanation' => 'Defects in RBC membrane proteins yield elongated elliptical RBCs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which condition is indicated by increased plasma cell percentage in bone marrow aspirate?',
        'choices'     => json_encode([
            'Multiple myeloma',
            'Leukemia',
            'Iron deficiency',
            'Aplastic anemia',
        ]),
        'answer'      => 'Multiple myeloma',
        'explanation' => 'Clonal plasma cell proliferation >10% indicates multiple myeloma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which molecular test detects the JAK2 V617F mutation in myeloproliferative disorders?',
        'choices'     => json_encode([
            'Allele-specific PCR',
            'FISH',
            'Karyotyping',
            'Southern blot',
        ]),
        'answer'      => 'Allele-specific PCR',
        'explanation' => 'AS-PCR sensitively detects JAK2 V617F point mutation common in PV, ET, MF.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which automated parameter flags platelet clumps requiring smear review?',
        'choices'     => json_encode([
            'Platelet histogram peaks >50 fL',
            'RDW spikes',
            'MCV abnormal',
            'Hct flag',
        ]),
        'answer'      => 'Platelet histogram peaks >50 fL',
        'explanation' => 'Clumps appear in larger size channels, indicated by histogram peaks beyond normal platelet size.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which immunophenotype is characteristic of acute lymphoblastic leukemia (ALL)?',
        'choices'     => json_encode([
            'CD10+, CD19+',
            'CD33+, CD13+',
            'CD3+, CD2+',
            'CD20+, CD5+',
        ]),
        'answer'      => 'CD10+, CD19+',
        'explanation' => 'Common B-ALL expresses CD10 and CD19 markers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 34,
        'part'        => 7,
        'question'    => 'Which factor is measured by the Russell viper venom time (RVVT)?',
        'choices'     => json_encode([
            'Factor X activity',
            'Factor VIII activity',
            'Fibrinogen levels',
            'Prothrombin time',
        ]),
        'answer'      => 'Factor X activity',
        'explanation' => 'RVVT directly activates Factor X, bypassing intrinsic pathway, to assess lupus anticoagulant and X.' ,
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which smear inclusion is indicative of oxidative hemolysis in G6PD deficiency?',
        'choices'    => json_encode([
            'Heinz bodies',
            'Basophilic stippling',
            'Howell-Jolly bodies',
            'Pappenheimer bodies',
        ]),
        'answer'     => 'Heinz bodies',
        'explanation'=> 'Denatured hemoglobin appears as Heinz bodies inside RBCs with supravital stains.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which parameter reflects platelet size variation and is elevated in immune thrombocytopenia?',
        'choices'    => json_encode([
            'PDW',
            'MPV',
            'PLT count',
            'RDW',
        ]),
        'answer'     => 'MPV',
        'explanation'=> 'Platelet destruction with increased production yields larger platelets, raising MPV.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which test measures functional activity of antithrombin in plasma?',
        'choices'    => json_encode([
            'Chromogenic antithrombin assay',
            'PT test',
            'aPTT test',
            'D-dimer',
        ]),
        'answer'     => 'Chromogenic antithrombin assay',
        'explanation'=> 'Measures AT inhibition of thrombin by chromogenic substrate cleavage.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which smear finding is seen in hereditary stomatocytosis with mouth-shaped RBCs?',
        'choices'    => json_encode([
            'Stomatocytes',
            'Spherocytes',
            'Elliptocytes',
            'Schistocytes',
        ]),
        'answer'     => 'Stomatocytes',
        'explanation'=> 'Increased RBC permeability leads to mouth-shaped cells.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which assay quantifies beta-thalassemia minor by measuring HbA₂ levels?',
        'choices'    => json_encode([
            'Hemoglobin electrophoresis',
            'High-performance liquid chromatography',
            'Isoelectric focusing',
            'Mass spectrometry',
        ]),
        'answer'     => 'HPLC',
        'explanation'=> 'HPLC accurately quantifies Hb variants including HbA₂ in thalassemia trait.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which test measures factor XIII activity by clot solubility in 5 M urea?',
        'choices'    => json_encode([
            'Urea clot solubility test',
            'PT test',
            'aPTT test',
            'Bleeding time',
        ]),
        'answer'     => 'Urea clot solubility test',
        'explanation'=> 'Factor XIII stabilizes fibrin; deficiency yields clot lysis in 5M urea.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which plasma cell disorder shows IgM M-spike and hyperviscosity symptoms?',
        'choices'    => json_encode([
            'Waldenström macroglobulinemia',
            'Multiple myeloma',
            'MGUS',
            'Amyloidosis',
        ]),
        'answer'     => 'Waldenström macroglobulinemia',
        'explanation'=> 'IgM overproduction causes M-spike and clinical hyperviscosity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which test screens for platelet function defects detecting closure time with collagen/ADP cartridge?',
        'choices'    => json_encode([
            'PFA-100',
            'Bleeding time',
            'Platelet aggregation',
            'PT',
        ]),
        'answer'     => 'PFA-100',
        'explanation'=> 'Closure time reflects platelet adhesion under shear with specific agonists.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which bone marrow feature indicates myelofibrosis with collagen deposition?',
        'choices'    => json_encode([
            'Reticulin and collagen fibrosis',
            'Hypocellularity',
            'Granulocytic hyperplasia',
            'Erythroid hyperplasia',
        ]),
        'answer'     => 'Reticulin and collagen fibrosis',
        'explanation'=> 'Grade 2–3 reticulin and collagen fibrosis is diagnostic of primary myelofibrosis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 34,
        'part'       => 7,
        'question'   => 'Which assay quantifies protein C activity by measuring cleavage of chromogenic substrate after activation?',
        'choices'    => json_encode([
            'Chromogenic protein C assay',
            'PT test',
            'aPTT test',
            'D-dimer',
        ]),
        'answer'     => 'Chromogenic protein C assay',
        'explanation'=> 'Activated protein C cleaves substrate releasing chromophore proportional to activity.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

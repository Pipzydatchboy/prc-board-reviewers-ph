<?php

namespace Database\Seeders\MTLE\Hematology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HematologyPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which ratio differentiates neonatal from adult hemoglobin by HPLC?',
        'choices'     => json_encode([
            'HbF/HbA ratio',
            'HbA₂/HbA ratio',
            'HbS/HbA ratio',
            'HbC/HbA ratio',
        ]),
        'answer'      => 'HbF/HbA ratio',
        'explanation' => 'Newborns have high HbF; ratio drops after 6 months as HbA synthesis increases.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which smear finding indicates macroangiopathic hemolytic anemia, such as with prosthetic heart valves?',
        'choices'     => json_encode([
            'Schistocytes',
            'Spherocytes',
            'Elliptocytes',
            'Target cells',
        ]),
        'answer'      => 'Schistocytes',
        'explanation' => 'Mechanical destruction shears RBCs into fragments (schistocytes).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which plasma protein is increased in inflammatory states and elevates ESR?',
        'choices'     => json_encode([
            'Fibrinogen',
            'Albumin',
            'Transferrin',
            'Prealbumin',
        ]),
        'answer'      => 'Fibrinogen',
        'explanation' => 'Acute-phase reactant fibrinogen increases rouleaux formation, raising ESR.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which reagent is used in the heparin neutralization step of anti-Xa assay?',
        'choices'     => json_encode([
            'Protamine sulfate',
            'Warfarin',
            'EDTA',
            'Citrate',
        ]),
        'answer'      => 'Protamine sulfate',
        'explanation' => 'Protamine binds heparin, allowing measurement of residual Xa activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which cell morphology is seen in thrombotic thrombocytopenic purpura (TTP)?',
        'choices'     => json_encode([
            'Schistocytes',
            'Auer rods',
            'Hypersegmented neutrophils',
            'Spherocytes',
        ]),
        'answer'      => 'Schistocytes',
        'explanation' => 'Microthrombi shear RBCs yielding schistocytes in TTP.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which assay is used for therapeutic drug monitoring of warfarin?',
        'choices'     => json_encode([
            'PT/INR',
            'aPTT',
            'D-dimer',
            'Bleeding time',
        ]),
        'answer'      => 'PT/INR',
        'explanation' => 'INR standardizes PT for warfarin monitoring across labs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which marker is elevated in hemolytic anemia indicating increased cell turnover?',
        'choices'     => json_encode([
            'LDH',
            'Albumin',
            'Transferrin',
            'Ferritin',
        ]),
        'answer'      => 'LDH',
        'explanation' => 'LDH leaks from RBCs during hemolysis; serves as hemolysis marker.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which reagent is used for platelet function testing by light transmission aggregometry?',
        'choices'     => json_encode([
            'ADP, collagen, epinephrine',
            'Heparin',
            'EDTA',
            'Warfarin',
        ]),
        'answer'      => 'ADP, collagen, epinephrine',
        'explanation' => 'Various agonists induce aggregation measured by increased light transmission.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which electrophoresis technique separates hemoglobin variants based on isoelectric point?',
        'choices'     => json_encode([
            'Isoelectric focusing',
            'HPLC',
            'Alkaline electrophoresis',
            'Acid electrophoresis',
        ]),
        'answer'      => 'Isoelectric focusing',
        'explanation' => 'IEF provides high resolution of hemoglobin variants by pI differences.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which parameter measures variation in RBC size distribution?',
        'choices'     => json_encode([
            'RDW',
            'MCV',
            'MCH',
            'MCHC',
        ]),
        'answer'      => 'RDW',
        'explanation' => 'RDW indicates anisocytosis by quantifying RBC size variation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which smear finding is characteristic of malaria infection with infected RBCs?',
        'choices'     => json_encode([
            'Ring forms (trophozoites)',
            'Schuffner’s stippling',
            'Maurer’s clefts',
            'All of the above',
        ]),
        'answer'      => 'All of the above',
        'explanation' => 'Malaria shows rings, Schuffner stippling (P. vivax/ovale), and Maurer’s clefts (P. falciparum).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which condition prolongs bleeding time but normal platelet count and aggregation?',
        'choices'     => json_encode([
            'Von Willebrand disease',
            'Idiopathic thrombocytopenic purpura',
            'Bernard-Soulier syndrome',
            'Glanzmann thrombasthenia',
        ]),
        'answer'      => 'Von Willebrand disease',
        'explanation' => 'vWD affects platelet adhesion causing prolonged BT despite normal count and aggregation tests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which assay is used for specific diagnosis of heparin-induced thrombocytopenia (HIT)?',
        'choices'     => json_encode([
            'PF4-heparin ELISA',
            'Platelet aggregation',
            'PT/INR',
            'D-dimer',
        ]),
        'answer'      => 'PF4-heparin ELISA',
        'explanation' => 'Detects anti-PF4/heparin antibodies causing HIT.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which parameter is increased in megaloblastic anemia reflecting macrocytosis?',
        'choices'     => json_encode([
            'MCV',
            'RDW',
            'MCHC',
            'Platelet count',
        ]),
        'answer'      => 'MCV',
        'explanation' => 'MCV >100 fL indicates macrocytosis seen in megaloblastic anemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which smear finding is seen in lead poisoning with coarse stippling of RBCs?',
        'choices'     => json_encode([
            'Basophilic stippling',
            'Howell-Jolly bodies',
            'Heinz bodies',
            'Pappenheimer bodies',
        ]),
        'answer'      => 'Basophilic stippling',
        'explanation' => 'Ribosomal aggregates stain blue in lead toxicity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which test measures von Willebrand factor antigen levels quantitatively?',
        'choices'     => json_encode([
            'ELISA',
            'Ristocetin cofactor',
            'PT',
            'aPTT',
        ]),
        'answer'      => 'ELISA',
        'explanation' => 'Quantifies vWF antigen in plasma using specific antibodies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which smear finding is seen in cold agglutinin disease with RBC clumping at room temp?',
        'choices'     => json_encode([
            'RBC agglutination',
            'Schistocytes',
            'Spherocytes',
            'Elliptocytes',
        ]),
        'answer'      => 'RBC agglutination',
        'explanation' => 'Cold antibodies cause RBCs to clump on smear preparation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which parameter indicates increased red cell production in anemia?',
        'choices'     => json_encode([
            'Reticulocyte count',
            'RDW',
            'MCV',
            'Platelet count',
        ]),
        'answer'      => 'Reticulocyte count',
        'explanation' => 'Elevated retics reflect bone marrow response to anemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which test detects factor V Leiden mutation by PCR-based assay?',
        'choices'     => json_encode([
            'Allele-specific PCR',
            'PT test',
            'aPTT test',
            'D-dimer',
        ]),
        'answer'      => 'Allele-specific PCR',
        'explanation' => 'Detects G1691A mutation in factor V gene.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 34,
        'part'        => 8,
        'question'    => 'Which blood bank test detects unexpected antibodies in recipient plasma?',
        'choices'     => json_encode([
            'Antibody screen',
            'Crossmatch',
            'Coombs test',
            'ABO grouping',
        ]),
        'answer'      => 'Antibody screen',
        'explanation' => 'Uses reagent RBCs to detect irregular antibodies before transfusion.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

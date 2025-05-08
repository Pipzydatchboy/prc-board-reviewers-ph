<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart9Seeder extends Seeder
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
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which blood component is stored at -80°C to preserve factor activity for research purposes?',
        'choices'    => json_encode([
            'Cryoprecipitate',
            'FFP',
            'Platelet concentrates',
            'Packed red cells',
        ]),
        'answer'     => 'Cryoprecipitate',
        'explanation'=> 'Cryoprecipitate is often stored at -80°C for long-term preservation of labile clotting factors.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'What is the typical platelet yield from a single apheresis donor?',
        'choices'    => json_encode([
            '3 x 10^11 platelets',
            '1 x 10^10 platelets',
            '5 x 10^9 platelets',
            '1 x 10^12 platelets',
        ]),
        'answer'     => '3 x 10^11 platelets',
        'explanation'=> 'Apheresis typically yields at least 3 x 10^11 platelets per collection.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which antigen is destroyed by papain but preserved by ficin treatment?',
        'choices'    => json_encode([
            'Fya',
            'M',
            'N',
            'S',
        ]),
        'answer'     => 'M',
        'explanation'=> 'Papain cleaves M antigen while ficin preserves it, assisting in antigen differentiation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'What is therapeutic apheresis used for in autoimmune hemolytic anemia?',
        'choices'    => json_encode([
            'Remove pathogenic antibodies',
            'Replace RBCs',
            'Exchange plasma only',
            'Collect granulocytes',
        ]),
        'answer'     => 'Remove pathogenic antibodies',
        'explanation'=> 'Apheresis can remove circulating autoantibodies to reduce hemolysis in AIHA.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which test is most accurate for determining fetal-maternal hemorrhage volume?',
        'choices'    => json_encode([
            'Flow cytometry for HbF',
            'Kleihauer-Betke',
            'IAT',
            'Visual estimation',
        ]),
        'answer'     => 'Flow cytometry for HbF',
        'explanation'=> 'Flow cytometry provides precise quantification of fetal RBCs in maternal blood.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'What is the main benefit of pathogen-reduced platelets?',
        'choices'    => json_encode([
            'Lower bacterial risk',
            'Longer shelf life',
            'Improved hemostasis',
            'Reduced volume',
        ]),
        'answer'     => 'Lower bacterial risk',
        'explanation'=> 'Pathogen-reduction technologies inactivate bacteria to enhance platelet safety.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which test is indicated to monitor therapy in TTP patients?',
        'choices'    => json_encode([
            'ADAMTS13 activity assay',
            'DAT',
            'Platelet count only',
            'Bleeding time',
        ]),
        'answer'     => 'ADAMTS13 activity assay',
        'explanation'=> 'Measuring ADAMTS13 levels guides plasma exchange efficacy in TTP treatment.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which parameter is critical in assessing quality of thawed plasma?',
        'choices'    => json_encode([
            'Factor VIII level',
            'Hemoglobin concentration',
            'Platelet count',
            'Potassium level',
        ]),
        'answer'     => 'Factor VIII level',
        'explanation'=> 'Remaining Factor VIII indicates viability of thawed plasma for coagulation support.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'What is the standard volume of plasma in a single FFP unit?',
        'choices'    => json_encode([
            '200–300 mL',
            '50 mL',
            '500 mL',
            '100 mL',
        ]),
        'answer'     => '200–300 mL',
        'explanation'=> 'A unit of FFP typically contains about 200–300 mL of plasma.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which routine screen detects anti-HLA antibodies?',
        'choices'    => json_encode([
            'Flow PRA assay',
            'IAT',
            'DAT',
            'Major crossmatch',
        ]),
        'answer'     => 'Flow PRA assay',
        'explanation'=> 'Panel-reactive antibody testing by flow cytometry screens for anti-HLA antibodies.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which of the following is a contraindication for platelet transfusion?',
        'choices'    => json_encode([
            'Heparin-induced thrombocytopenia',
            'Severe thrombocytopenia with bleeding',
            'Bone marrow failure',
            'DIC with bleeding',
        ]),
        'answer'     => 'Heparin-induced thrombocytopenia',
        'explanation'=> 'Platelets are contraindicated in HIT to avoid exacerbating thrombosis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'What is the primary reason for irradiating blood products?',
        'choices'    => json_encode([
            'Prevent TA-GVHD',
            'Sterilize bacteria',
            'Preserve RBC function',
            'Reduce leukocytes',
        ]),
        'answer'     => 'Prevent TA-GVHD',
        'explanation'=> 'Irradiation inactivates donor lymphocytes to prevent graft-versus-host disease.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which factor is most labile in stored platelet concentrates?',
        'choices'    => json_encode([
            'vWF',
            'Fibrinogen',
            'Factor VIII',
            'Platelet factor 4',
        ]),
        'answer'     => 'vWF',
        'explanation'=> 'vWF multimers can degrade over storage time affecting platelet function.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which test is used to detect platelet activation marker P-selectin?',
        'choices'    => json_encode([
            'Flow cytometry',
            'ELISA',
            'Western blot',
            'IAT',
        ]),
        'answer'     => 'Flow cytometry',
        'explanation'=> 'Flow cytometry detects P-selectin on platelet surfaces indicating activation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which screening test is essential before granulocyte transfusion?',
        'choices'    => json_encode([
            'CMV serostatus',
            'ABO compatibility',
            'HIV antibody',
            'Malaria smear',
        ]),
        'answer'     => 'CMV serostatus',
        'explanation'=> 'CMV-negative patients require CMV-negative granulocyte units to prevent viral transmission.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'What is the role of additive solutions in cryopreservation of stem cells?',
        'choices'    => json_encode([
            'Provide cryoprotectants',
            'Act as anticoagulants',
            'Increase osmolarity',
            'Maintain pH only',
        ]),
        'answer'     => 'Provide cryoprotectants',
        'explanation'=> 'Cryoprotective additives like DMSO prevent ice-crystal formation damaging cells.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which practice reduces error in blood transfusion identification?',
        'choices'    => json_encode([
            'Two-person verification process',
            'Single nurse label check',
            'Automated labeling only',
            'No check required',
        ]),
        'answer'     => 'Two-person verification process',
        'explanation'=> 'Two-person check ensures correct patient and unit match by independent verification.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which parameter indicates cold storage lesion in platelets?',
        'choices'    => json_encode([
            'Increased CD62P expression',
            'Reduced glucose consumption',
            'Increased pH',
            'Reduced swirling',
        ]),
        'answer'     => 'Reduced swirling',
        'explanation'=> 'Cold storage reduces platelet shape change visible as loss of swirling effect.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'What is the gold standard for detecting red cell antigens at the molecular level?',
        'choices'    => json_encode([
            'PCR-SSP',
            'Tube agglutination',
            'IAT',
            'Gel card',
        ]),
        'answer'     => 'PCR-SSP',
        'explanation'=> 'PCR with sequence-specific primers accurately identifies blood group genotypes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 35,
        'part'       => 9,
        'question'   => 'Which measure is used to evaluate transfusion efficiency in massive hemorrhage?',
        'choices'    => json_encode([
            'Shock index normalization',
            'Platelet count only',
            'Hemoglobin increase alone',
            'Blood volume infused',
        ]),
        'answer'     => 'Shock index normalization',
        'explanation'=> 'Normalizing heart rate to blood pressure (shock index) reflects effective resuscitation.',
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

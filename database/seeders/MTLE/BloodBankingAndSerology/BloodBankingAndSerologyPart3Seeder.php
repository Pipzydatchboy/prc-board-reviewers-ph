<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart3Seeder extends Seeder
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
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the primary indication for therapeutic plasma exchange in transfusion medicine?',
        'choices'     => json_encode([
            'Thrombotic thrombocytopenic purpura',
            'Iron deficiency anemia',
            'Platelet refractoriness',
            'Hemophilia A',
        ]),
        'answer'      => 'Thrombotic thrombocytopenic purpura',
        'explanation' => 'Plasma exchange removes autoantibodies and replenishes ADAMTS13 in TTP patients.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which blood product is preferred for massive transfusion to maintain coagulation factors?',
        'choices'     => json_encode([
            'Fresh frozen plasma',
            'Packed red blood cells',
            'Cryoprecipitate',
            'Platelet concentrate',
        ]),
        'answer'      => 'Fresh frozen plasma',
        'explanation' => 'FFP provides all clotting factors and is used in massive transfusion protocols.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What parameter is used to assess adequacy of leukoreduction?',
        'choices'     => json_encode([
            'Residual WBC count <5x10^6 per unit',
            'Platelet count <1x10^3 per µL',
            'Hemoglobin >12 g/dL',
            'RBC viability >75%',
        ]),
        'answer'      => 'Residual WBC count <5x10^6 per unit',
        'explanation' => 'Standards require <5 million residual leukocytes per leukoreduced unit.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which parameter best predicts platelet transfusion efficacy?',
        'choices'     => json_encode([
            'Corrected count increment',
            'Hemoglobin increment',
            'PT/PTT normalization',
            'Fibrinogen level',
        ]),
        'answer'      => 'Corrected count increment',
        'explanation' => 'CCI measures post-transfusion platelet rise adjusted for body surface area.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the main risk of using uncrossmatched O-negative red cells?',
        'choices'     => json_encode([
            'Alloimmunization to minor antigens',
            'Immediate hemolysis',
            'Volume overload',
            'Hypocalcemia',
        ]),
        'answer'      => 'Alloimmunization to minor antigens',
        'explanation' => 'Even O-negative units may carry other antigens leading to alloimmunization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which additive solution extends red cell shelf life to 42 days?',
        'choices'     => json_encode([
            'AS-1',
            'CPD',
            'CPDA-1',
            'CPDA-2',
        ]),
        'answer'      => 'AS-1',
        'explanation' => 'Additive Solution-1 allows storage of RBCs up to 42 days by providing nutrients and buffering.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the purpose of irradiation of blood products?',
        'choices'     => json_encode([
            'Prevent transfusion-associated graft-versus-host disease',
            'Sterilize products of bacteria',
            'Reduce plasma volume',
            'Enhance RBC viability',
        ]),
        'answer'      => 'Prevent transfusion-associated graft-versus-host disease',
        'explanation' => 'Irradiation inactivates lymphocytes to prevent GVHD in immunocompromised recipients.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which pathogen reduction method is used for platelet concentrates?',
        'choices'     => json_encode([
            'UV light with psoralen',
            'Gamma irradiation',
            'Heat treatment',
            'Filtration',
        ]),
        'answer'      => 'UV light with psoralen',
        'explanation' => 'Psoralen intercalates nucleic acids and with UV light inactivates pathogens in platelets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the recommended component ratio in a massive transfusion protocol?',
        'choices'     => json_encode([
            '1:1:1 RBC:FFP:Platelets',
            '2:1:1 RBC:FFP:Platelets',
            '1:2:1 RBC:FFP:Platelets',
            '1:1:2 RBC:FFP:Platelets',
        ]),
        'answer'      => '1:1:1 RBC:FFP:Platelets',
        'explanation' => 'Balanced ratio of RBC, plasma, and platelets improves outcomes in massive hemorrhage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which test is used to monitor anticoagulant depletion before platelet transfusion?',
        'choices'     => json_encode([
            'PT',
            'APTT',
            'Fibrinogen level',
            'Bleeding time',
        ]),
        'answer'      => 'APTT',
        'explanation' => 'APTT assesses residual heparin or other anticoagulants before platelet transfusion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which leukocyte reduction filter specialty removes >99.9% of WBCs?',
        'choices'     => json_encode([
            'High-efficiency stacked filters',
            'Simple gravity filters',
            'Anion-exchange filters',
            'Microaggregate filters',
        ]),
        'answer'      => 'High-efficiency stacked filters',
        'explanation' => 'Stacked depth filters provide high leukoreduction efficiency for transfusion safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the purpose of washing red cells before transfusion?',
        'choices'     => json_encode([
            'Remove plasma proteins and antibodies',
            'Concentrate RBCs',
            'Add nutrients',
            'Irradiate cells',
        ]),
        'answer'      => 'Remove plasma proteins and antibodies',
        'explanation' => 'Washing eliminates residual plasma and antibodies to reduce allergic reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which parameter indicates in vitro RBC quality during storage?',
        'choices'     => json_encode([
            'Hemolysis <1% at end of shelf life',
            'pH >8.0',
            'Potassium <5 mEq/L',
            'ATP >50% baseline',
        ]),
        'answer'      => 'Hemolysis <1% at end of shelf life',
        'explanation' => 'Acceptable free hemoglobin due to RBC lysis must be <1% after storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which immunoglobulin subclass crosses the placenta most efficiently?',
        'choices'     => json_encode([
            'IgG1',
            'IgG2',
            'IgG3',
            'IgG4',
        ]),
        'answer'      => 'IgG1',
        'explanation' => 'IgG1 is the predominant subclass transferred across the placenta providing neonatal immunity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the typical centrifugation speed for separating platelet-rich plasma?',
        'choices'     => json_encode([
            '150 x g for 10 minutes',
            '1000 x g for 5 minutes',
            '3000 x g for 15 minutes',
            '500 x g for 2 minutes',
        ]),
        'answer'      => '150 x g for 10 minutes',
        'explanation' => 'Low-speed spin preserves platelets in plasma while pelleting heavier cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which complement component is most commonly evaluated in delayed hemolytic transfusion reactions?',
        'choices'     => json_encode([
            'C3d',
            'C5a',
            'C9',
            'C1q',
        ]),
        'answer'      => 'C3d',
        'explanation' => 'C3d remains bound to RBCs and indicates complement activation in DHTR.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the most appropriate action if a transfusion reaction is suspected?',
        'choices'     => json_encode([
            'Stop transfusion and notify physician',
            'Increase infusion rate',
            'Continue and monitor',
            'Switch to saline only',
        ]),
        'answer'      => 'Stop transfusion and notify physician',
        'explanation' => 'Immediate cessation and medical evaluation are required for suspected reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which method is used for extended antigen typing beyond ABO and Rh?',
        'choices'     => json_encode([
            'Molecular genotyping',
            'Tube agglutination only',
            'Visual hemolysis',
            'Erythrocyte sedimentation rate',
        ]),
        'answer'      => 'Molecular genotyping',
        'explanation' => 'Genotyping detects multiple blood group antigens accurately at the DNA level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'What is the most frequent cause of platelet transfusion refractoriness?',
        'choices'     => json_encode([
            'HLA alloimmunization',
            'Bacterial contamination',
            'Volume overload',
            'Hypothermia',
        ]),
        'answer'      => 'HLA alloimmunization',
        'explanation' => 'Recipient antibodies against donor HLA antigens can prevent platelet increments.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 35,
        'part'        => 3,
        'question'    => 'Which storage lesion marker correlates with reduced post-transfusion RBC survival?',
        'choices'     => json_encode([
            'Phosphatidylserine exposure',
            'Decreased potassium',
            'Increased pH',
            'Low sodium',
        ]),
        'answer'      => 'Phosphatidylserine exposure',
        'explanation' => 'Externalization of phosphatidylserine signals eryptosis and removal by macrophages.',
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

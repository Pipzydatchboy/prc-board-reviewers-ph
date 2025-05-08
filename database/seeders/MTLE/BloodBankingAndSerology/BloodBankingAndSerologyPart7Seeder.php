<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart7Seeder extends Seeder
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
        'part'       => 7,
        'question'   => 'Which blood component is indicated for reversal of warfarin anticoagulation in bleeding patients?',
        'choices'    => json_encode([
            'Fresh frozen plasma',
            'Packed red cells',
            'Cryoprecipitate',
            'Platelet concentrate',
        ]),
        'answer'     => 'Fresh frozen plasma',
        'explanation'=> 'FFP contains clotting factors II, VII, IX, and X needed to reverse warfarin effects.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'What is the shelf-life of leukoreduced red cell units stored in additive solution at 1–6°C?',
        'choices'    => json_encode([
            '42 days',
            '21 days',
            '35 days',
            '14 days',
        ]),
        'answer'     => '42 days',
        'explanation'=> 'Leukoreduced RBCs stored in additive solutions maintain viability for up to 42 days.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which test is most appropriate for detecting platelet-specific antibodies?',
        'choices'    => json_encode([
            'MAIPA',
            'IAT',
            'DAT',
            'Ham test',
        ]),
        'answer'     => 'MAIPA',
        'explanation'=> 'Monoclonal Antibody Immobilization of Platelet Antigens detects antibodies against platelet glycoproteins.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'What is the primary indication for administering cryoprecipitate?',
        'choices'    => json_encode([
            'Hypofibrinogenemia',
            'Thrombocytopenia',
            'Warfarin reversal',
            'Anemia',
        ]),
        'answer'     => 'Hypofibrinogenemia',
        'explanation'=> 'Cryoprecipitate is rich in fibrinogen and is used when fibrinogen levels are critically low.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which parameter is used to calculate the corrected count increment (CCI) after platelet transfusion?',
        'choices'    => json_encode([
            'Body surface area and platelet increment',
            'Patient weight and hemoglobin increment',
            'Blood volume and WBC count',
            'Hematocrit and RBC count',
        ]),
        'answer'     => 'Body surface area and platelet increment',
        'explanation'=> 'CCI adjusts platelet count rise for body surface area and number of platelets transfused.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'What is the recommended storage condition for thawed plasma awaiting transfusion?',
        'choices'    => json_encode([
            '2–6°C for up to 24 hours',
            'Room temperature for 6 hours',
            '-18°C until use',
            '37°C during transport',
        ]),
        'answer'     => '2–6°C for up to 24 hours',
        'explanation'=> 'Thawed plasma retains factor activity if stored at 2–6°C and used within 24 hours.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which enzyme treatment enhances detection of Kell system antibodies?',
        'choices'    => json_encode([
            'Papain',
            'Trypsin',
            'AET',
            'PEG',
        ]),
        'answer'     => 'Papain',
        'explanation'=> 'Papain treatment increases reactivity of antibodies against Kell antigens by modifying red cell membrane proteins.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which blood bank test uses microplate wells coated with red cell stroma?',
        'choices'    => json_encode([
            'Solid-phase red cell adherence',
            'Tube IAT',
            'Gel card',
            'Flow cytometry',
        ]),
        'answer'     => 'Solid-phase red cell adherence',
        'explanation'=> 'This method immobilizes red cell antigens in wells for antibody detection in patient serum.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which factor is critical to assess before apheresis platelet collection?',
        'choices'    => json_encode([
            'Platelet count >150x10^3/µL',
            'Hematocrit <30%',
            'WBC count >10x10^3/µL',
            'Hemoglobin >8 g/dL',
        ]),
        'answer'     => 'Platelet count >150x10^3/µL',
        'explanation'=> 'Adequate pre-donation platelet count ensures sufficient yield during apheresis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which component’s storage lesion is primarily marked by potassium leakage?',
        'choices'    => json_encode([
            'Red blood cells',
            'Platelets',
            'Plasma',
            'Cryoprecipitate',
        ]),
        'answer'     => 'Red blood cells',
        'explanation'=> 'Potassium leaks from RBCs over storage time due to membrane changes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'What is the principle of the monocyte monolayer assay for antibody detection?',
        'choices'    => json_encode([
            'Phagocytosis of sensitized RBCs by monocytes',
            'Agglutination in monolayer',
            'Complement fixation',
            'Fluorescent labeling',
        ]),
        'answer'     => 'Phagocytosis of sensitized RBCs by monocytes',
        'explanation'=> 'This assay measures monocyte uptake of antibody-coated RBCs to predict clinical significance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which additive solution contains adenine, dextrose, and saline?',
        'choices'    => json_encode([
            'AS-5',
            'AS-1',
            'CPDA-1',
            'CPD',
        ]),
        'answer'     => 'AS-5',
        'explanation'=> 'AS-5 formulation supports RBC metabolism with saline, adenine, and dextrose.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'What is the common cause of delayed hemolytic transfusion reactions?',
        'choices'    => json_encode([
            'Anamnestic antibody response',
            'Bacterial contamination',
            'Mechanical hemolysis',
            'High hematocrit',
        ]),
        'answer'     => 'Anamnestic antibody response',
        'explanation'=> 'Memory B cells produce antibodies upon re-exposure to antigens causing delayed hemolysis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which compatibility test phase uses low-ionic strength solution?',
        'choices'    => json_encode([
            'Antibody screening IAT',
            'Immediate spin crossmatch',
            'DAT',
            'Enzyme phase',
        ]),
        'answer'     => 'Antibody screening IAT',
        'explanation'=> 'LISS enhances antigen-antibody interactions in the IAT phase of compatibility testing.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'What is the primary cause of transfusion-associated graft-versus-host disease?',
        'choices'    => json_encode([
            'Donor lymphocyte engraftment',
            'Recipient leukocytes',
            'Bacterial contamination',
            'High transfusion volume',
        ]),
        'answer'     => 'Donor lymphocyte engraftment',
        'explanation'=> 'Viable donor T lymphocytes attack recipient tissues causing TA-GVHD in immunocompromised hosts.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 35,
        'part'       => 7,
        'question'   => 'Which parameter defines adequate plasma replacement in therapeutic plasma exchange?',
        'choices'    => json_encode([
            'Total plasma volume exchanged',
            'Duration of procedure',
            'Patient weight',
            'Hematocrit post-exchange',
        ]),
        'answer'     => 'Total plasma volume exchanged',
        'explanation'=> 'Exchange of 1–1.5 plasma volumes is standard to remove pathogenic substances effectively.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
        // Continue until 20 with similar structure
];

// Questions 17–20
$batch[] = [
    'subject_id' => 35,
    'part'       => 7,
    'question'   => 'Which method is gold standard for neonatal blood group determination?',
    'choices'    => json_encode([
        'Molecular genotyping',
        'Gel card ABO grouping',
        'Enzyme IAT',
        'Routine cell typing',
    ]),
    'answer'     => 'Molecular genotyping',
    'explanation'=> 'Genotyping provides definitive blood group typing unaffected by recent transfusion or maternal antibodies.',
    'created_at' => $now,
    'updated_at' => $now,
];
$batch[] = [
    'subject_id' => 35,
    'part'       => 7,
    'question'   => 'Which antigen is denatured by papain treatment making antibody detection difficult?',
    'choices'    => json_encode([
        'M antigen',
        'Rh D',
        'Kell',
        'Lewis',
    ]),
    'answer'     => 'M antigen',
    'explanation'=> 'Papain cleaves M and N antigens, thus antibodies against them may not be detected after treatment.',
    'created_at' => $now,
    'updated_at' => $now,
];
$batch[] = [
    'subject_id' => 35,
    'part'       => 7,
    'question'   => 'What is the preferred method to confirm weak D phenotype?',
    'choices'    => json_encode([
        'Indirect antiglobulin test with anti-D reagent',
        'Immediate spin crossmatch',
        'Gel column ABO grouping',
        'Flow cytometry',
    ]),
    'answer'     => 'Indirect antiglobulin test with anti-D reagent',
    'explanation'=> 'IAT with sensitive anti-D reagent detects weak expression of D antigen.',
    'created_at' => $now,
    'updated_at' => $now,
];
$batch[] = [
    'subject_id' => 35,
    'part'       => 7,
    'question'   => 'Which test is used to measure residual leukocyte count in leukoreduced products?',
    'choices'    => json_encode([
        'Flow cytometry',
        'Manual counting',
        'PCR',
        'Hemocytometer',
    ]),
    'answer'     => 'Flow cytometry',
    'explanation'=> 'Flow cytometry accurately quantifies residual WBCs in leukoreduced blood components.',
    'created_at' => $now,
    'updated_at' => $now,
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

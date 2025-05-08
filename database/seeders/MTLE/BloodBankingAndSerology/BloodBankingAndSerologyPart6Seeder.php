<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart6Seeder extends Seeder
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
        'part'       => 6,
        'question'   => 'Which anticoagulant is used in plateletpheresis collections?',
        'choices'    => json_encode([
            'ACD-A',
            'CPD',
            'Heparin',
            'EDTA',
        ]),
        'answer'     => 'ACD-A',
        'explanation'=> 'Acid citrate dextrose solution A is commonly used to prevent clotting during plateletpheresis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'What is the recommended storage temperature for frozen plasma?',
        'choices'    => json_encode([
            '-18°C or colder',
            '4°C',
            'Room temperature',
            '-80°C',
        ]),
        'answer'     => '-18°C or colder',
        'explanation'=> 'Frozen plasma should be stored at -18°C or colder to preserve clotting factor activity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which additive solution includes mannitol to reduce hemolysis?',
        'choices'    => json_encode([
            'AS-1',
            'AS-3',
            'CPDA-1',
            'CPD',
        ]),
        'answer'     => 'AS-3',
        'explanation'=> 'AS-3 contains mannitol which helps stabilize RBC membranes and reduce hemolysis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which laboratory parameter is elevated in transfusion-related acute lung injury (TRALI)?',
        'choices'    => json_encode([
            'Neutrophil activation markers',
            'BNP level',
            'Indirect bilirubin',
            'Platelet count',
        ]),
        'answer'     => 'Neutrophil activation markers',
        'explanation'=> 'TRALI involves neutrophil activation in the lungs leading to acute respiratory distress.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'What is the main antigen difference between fetal and maternal red cells in HDFN?',
        'choices'    => json_encode([
            'Rh D antigen',
            'ABO antigen',
            'Kell antigen',
            'Lewis antigen',
        ]),
        'answer'     => 'Rh D antigen',
        'explanation'=> 'Rh D incompatibility is a common cause of hemolytic disease of the fetus and newborn.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which test is used to quantify anti-D antibody levels in pregnancy?',
        'choices'    => json_encode([
            'Antibody titer by two-fold dilutions',
            'Flow cytometry',
            'ELISA',
            'Gel card DAT',
        ]),
        'answer'     => 'Antibody titer by two-fold dilutions',
        'explanation'=> 'Maternal anti-D titers are measured by serial two-fold dilutions to guide management.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which component provides the highest concentration of fibrinogen?',
        'choices'    => json_encode([
            'Cryoprecipitate',
            'FFP',
            'Cryosupernatant',
            'Platelet concentrate',
        ]),
        'answer'     => 'Cryoprecipitate',
        'explanation'=> 'Cryoprecipitate is rich in fibrinogen, factor VIII, and von Willebrand factor.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'What is the effect of prolonged storage on RBC 2,3-DPG levels?',
        'choices'    => json_encode([
            'Decreased levels',
            'Increased levels',
            'No change',
            'Variable change',
        ]),
        'answer'     => 'Decreased levels',
        'explanation'=> '2,3-DPG levels decline during storage reducing RBC oxygen release capability.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which method is used for routine compatibility testing in hospitals?',
        'choices'    => json_encode([
            'Gel column agglutination',
            'Solid-phase red cell adherence',
            'Flow cytometry',
            'Manual tube method',
        ]),
        'answer'     => 'Gel column agglutination',
        'explanation'=> 'Gel methods offer standardized, sensitive, and reproducible compatibility testing.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'What is the recommended rate for red cell transfusion in acute hemorrhage?',
        'choices'    => json_encode([
            '2 units over 2 hours',
            '1 unit over 60 minutes',
            'Rapid as tolerated',
            '4 units over 4 hours',
        ]),
        'answer'     => 'Rapid as tolerated',
        'explanation'=> 'In acute hemorrhage, red cells should be transfused as quickly as patient condition allows.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which constituent is most labile in cryoprecipitate?',
        'choices'    => json_encode([
            'Factor VIII',
            'Fibrinogen',
            'vWF',
            'Factor XIII',
        ]),
        'answer'     => 'Factor VIII',
        'explanation'=> 'Factor VIII activity declines if cryoprecipitate is not used promptly after thawing.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which blood product is leukoreduced to prevent CMV transmission?',
        'choices'    => json_encode([
            'Red cell units',
            'Platelet concentrates',
            'FFP',
            'CRYO',
        ]),
        'answer'     => 'Red cell units',
        'explanation'=> 'Leukoreduction removes WBCs, reducing CMV risk since virus resides in leukocytes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'What is the purpose of post-transfusion loops for quality control?',
        'choices'    => json_encode([
            'Verify correct unit delivery',
            'Check patient vitals',
            'Measure hemoglobin increment',
            'Assess storage time',
        ]),
        'answer'     => 'Verify correct unit delivery',
        'explanation'=> 'Post-transfusion loop checks ensure the right unit was transfused to the correct patient.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which factor is most sensitive to freeze-thaw damage in plasma?',
        'choices'    => json_encode([
            'Factor VIII',
            'Fibrinogen',
            'Albumin',
            'Electrolytes',
        ]),
        'answer'     => 'Factor VIII',
        'explanation'=> 'Factor VIII is heat- and freeze-sensitive and loses activity if plasma is thawed improperly.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which monitoring is essential during red cell washing?',
        'choices'    => json_encode([
            'Sterility check',
            'Hemoglobin concentration',
            'Leukocyte count',
            'Volume removed',
        ]),
        'answer'     => 'Sterility check',
        'explanation'=> 'Washed cells must be sterility tested to avoid bacterial contamination from wash steps.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'What is the effect of additive solution on RBC ATP levels during storage?',
        'choices'    => json_encode([
            'Maintains ATP levels',
            'Depletes ATP rapidly',
            'No effect',
            'Varies with temperature',
        ]),
        'answer'     => 'Maintains ATP levels',
        'explanation'=> 'Additive solutions supply substrates that help preserve ATP in stored RBCs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which test detects low-frequency antibodies not found in routine screens?',
        'choices'    => json_encode([
            'Enzyme-treated cell panel',
            'Routine IAT',
            'Direct antiglobulin test',
            'Saline agglutination',
        ]),
        'answer'     => 'Enzyme-treated cell panel',
        'explanation'=> 'Enzymes enhance or destroy antigens making low-frequency antibodies more detectable.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'What is the main advantage of apheresis-derived platelets over pooled platelets?',
        'choices'    => json_encode([
            'Single donor reduces alloimmunization risk',
            'Larger volume',
            'Lower cost',
            'Shorter prep time',
        ]),
        'answer'     => 'Single donor reduces alloimmunization risk',
        'explanation'=> 'Apheresis platelets from one donor minimize exposure to multiple donors and HLA antigens.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which factor is critical to monitor in CMV-negative blood products?',
        'choices'    => json_encode([
            'Leukoreduction efficacy',
            'Hemoglobin level',
            'Platelet function',
            'Cryoprecipitate fibrinogen',
        ]),
        'answer'     => 'Leukoreduction efficacy',
        'explanation'=> 'Ensuring effective leukoreduction is key to preventing CMV transmission in CMV-negative units.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 35,
        'part'       => 6,
        'question'   => 'Which monitoring step is essential after transfusion of irradiated blood products?',
        'choices'    => json_encode([
            'Check for hemolysis markers',
            'Monitor potassium levels',
            'Assess leukocyte count',
            'Measure fibrinogen',
        ]),
        'answer'     => 'Monitor potassium levels',
        'explanation'=> 'Irradiation increases RBC membrane permeability leading to potassium leakage; monitor levels.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

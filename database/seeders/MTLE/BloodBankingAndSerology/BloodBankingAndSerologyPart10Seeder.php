<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which test is used to detect paroxysmal nocturnal hemoglobinuria clones?',
        'choices'     => json_encode([
            'Flow cytometry for CD55/CD59',
            'DAT',
            'IAT',
            'Ham test',
        ]),
        'answer'      => 'Flow cytometry for CD55/CD59',
        'explanation' => 'Flow cytometry identifies absence of CD55/CD59 on RBCs, diagnostic for PNH.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'What is the most immunogenic antigen after ABO and Rh D?',
        'choices'     => json_encode([
            'Kell (K)',
            'Duffy (Fya)',
            'Kidd (Jka)',
            'MNS (S)',
        ]),
        'answer'      => 'Kell (K)',
        'explanation' => 'Kell antigen is highly immunogenic and commonly causes alloimmunization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which additive solution contains adenine, dextrose, and mannitol?',
        'choices'     => json_encode([
            'AS-1',
            'AS-3',
            'AS-5',
            'CPDA-1',
        ]),
        'answer'      => 'AS-1',
        'explanation' => 'AS-1 formulation includes adenine, dextrose, and mannitol for RBC storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which factor in plasma is measured by the Clauss method?',
        'choices'     => json_encode([
            'Fibrinogen',
            'Factor VIII',
            'Factor V',
            'Prothrombin',
        ]),
        'answer'      => 'Fibrinogen',
        'explanation' => 'Clauss assay quantitatively measures fibrinogen concentration in plasma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'What is the standard dose of IVIG for immune thrombocytopenia?',
        'choices'     => json_encode([
            '1 g/kg for 2 days',
            '0.4 g/kg single dose',
            '2 g/kg single dose',
            '0.1 g/kg daily',
        ]),
        'answer'      => '1 g/kg for 2 days',
        'explanation' => 'IVIG at 1 g/kg for two days is standard to rapidly increase platelet counts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which blood component is best for treating fibrinogen deficiency?',
        'choices'     => json_encode([
            'Cryoprecipitate',
            'FFP',
            'Platelets',
            'Packed RBCs',
        ]),
        'answer'      => 'Cryoprecipitate',
        'explanation' => 'Cryoprecipitate is rich in fibrinogen and used for hypofibrinogenemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which storage lesion is characterized by increased microvesicle formation?',
        'choices'     => json_encode([
            'RBC storage lesion',
            'Platelet lesion',
            'Plasma oxidation',
            'Cryo degradation',
        ]),
        'answer'      => 'RBC storage lesion',
        'explanation' => 'Stored RBCs shed microvesicles over time affecting cell function and immunogenicity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'What is the half-life of transfused platelets in the absence of refractoriness?',
        'choices'     => json_encode([
            '7–10 days',
            '1–2 days',
            '3–5 days',
            '12 hours',
        ]),
        'answer'      => '7–10 days',
        'explanation' => 'Normal platelets survive 7–10 days unless removed by immune or non-immune mechanisms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which antigen detection uses PCR followed by DNA sequencing?',
        'choices'     => json_encode([
            'Molecular genotyping',
            'Serologic panel',
            'IAT',
            'Flow cytometry',
        ]),
        'answer'      => 'Molecular genotyping',
        'explanation' => 'Genotyping sequences blood group genes for accurate antigen typing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which test is used to screen for weak D antigen?',
        'choices'     => json_encode([
            'Indirect antiglobulin test',
            'Immediate spin crossmatch',
            'Gel card ABO',
            'Saline agglutination',
        ]),
        'answer'      => 'Indirect antiglobulin test',
        'explanation' => 'IAT detects weak expression of D antigen not seen in immediate spin tests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'What is the maximum permissible hemolysis in a stored RBC unit at end of shelf life?',
        'choices'     => json_encode([
            '<1%',
            '<5%',
            '<10%',
            '<0.1%',
        ]),
        'answer'      => '<1%',
        'explanation' => 'Regulations require hemolysis to be <1% at expiration to ensure safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which test measures complement activation in vitro?',
        'choices'     => json_encode([
            'CH50 assay',
            'DAT',
            'IAT',
            'Flow cytometry',
        ]),
        'answer'      => 'CH50 assay',
        'explanation' => 'CH50 quantifies total complement activity by hemolysis of standardized RBCs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which procedure reduces leukocytes to <1x10^6 per unit?',
        'choices'     => json_encode([
            'High-efficiency leukoreduction filter',
            'Standard filter',
            'Sedimentation',
            'Centrifugation',
        ]),
        'answer'      => 'High-efficiency leukoreduction filter',
        'explanation' => 'These filters effectively remove ≥99.9% WBCs ensuring <1 million residual cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'What is the main advantage of pathogen reduction in plasma products?',
        'choices'     => json_encode([
            'Inactivates viruses and bacteria',
            'Extends shelf life',
            'Preserves factor VIII',
            'Reduces plasma proteins',
        ]),
        'answer'      => 'Inactivates viruses and bacteria',
        'explanation' => 'Pathogen reduction systems target nucleic acids of pathogens to enhance safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which anticoagulant is used in cryopreservation of stem cells?',
        'choices'     => json_encode([
            'DMSO',
            'EDTA',
            'Heparin',
            'CPDA-1',
        ]),
        'answer'      => 'DMSO',
        'explanation' => 'DMSO acts as cryoprotectant preventing ice crystal formation in stem cell freezing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which parameter is monitored to assess hemolysis in stored blood?',
        'choices'     => json_encode([
            'Plasma free hemoglobin',
            'LDH alone',
            'AST',
            'Bilirubin only',
        ]),
        'answer'      => 'Plasma free hemoglobin',
        'explanation' => 'Free hemoglobin in plasma directly reflects RBC lysis during storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which test is used to quantify residual leukocytes in platelet products?',
        'choices'     => json_encode([
            'Flow cytometry',
            'Hemocytometer count',
            'Gram stain',
            'PCR',
        ]),
        'answer'      => 'Flow cytometry',
        'explanation' => 'Flow cytometry provides accurate counts of residual WBCs in platelet concentrates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'What is the standard definition of a transfusion reaction rate?',
        'choices'     => json_encode([
            'Reactions per 1000 units transfused',
            'Reactions per 100 units transfused',
            'Reactions per 1000 patients',
            'Reactions per 100 patients',
        ]),
        'answer'      => 'Reactions per 1000 units transfused',
        'explanation' => 'Standard hemovigilance metric normalizes events to units transfused for benchmarking.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which test is used to quantify alloantibody strength?',
        'choices'     => json_encode([
            'Titer by two-fold serial dilution',
            'Flow PRA assay',
            'DAT',
            'Saline replacement test',
        ]),
        'answer'      => 'Titer by two-fold serial dilution',
        'explanation' => 'Serial dilution titers measure relative antibody concentration in serum.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 35,
        'part'        => 10,
        'question'    => 'Which measure improves safety in whole blood transfusion emergencies?',
        'choices'     => json_encode([
            'Use of O negative uncrossmatched units',
            'Rapid saline infusion only',
            'Use of group AB plasma',
            'Delayed administration',
        ]),
        'answer'      => 'Use of O negative uncrossmatched units',
        'explanation' => 'O negative uncrossmatched RBCs minimize alloimmunization and allow immediate transfusion.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

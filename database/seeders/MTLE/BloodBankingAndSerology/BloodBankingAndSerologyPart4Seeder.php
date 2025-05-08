<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which test differentiates between acute and delayed hemolytic transfusion reactions?',
        'choices'     => json_encode([
            'Timing of onset after transfusion',
            'Presence of antibodies on DAT',
            'Measurement of bilirubin level',
            'Detection of free hemoglobin',
        ]),
        'answer'      => 'Timing of onset after transfusion',
        'explanation' => 'Acute reactions occur within 24 hours; delayed reactions occur days to weeks post-transfusion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the standard shelf life for cryoprecipitate when stored at -18°C or below?',
        'choices'     => json_encode([
            '1 year',
            '3 months',
            '6 months',
            '2 years',
        ]),
        'answer'      => '1 year',
        'explanation' => 'Cryoprecipitate retains most clotting factor activity when stored up to 1 year at -18°C or colder.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which antigen frequency is highest in the general population?',
        'choices'     => json_encode([
            'E antigen',
            'C antigen',
            'Fya antigen',
            'K antigen',
        ]),
        'answer'      => 'E antigen',
        'explanation' => 'The Rh E antigen has the highest prevalence among major Rh antigens in most populations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which method is recommended for confirming IgM-mediated cold agglutinin disease?',
        'choices'     => json_encode([
            'Cold agglutinin titer at 4°C',
            'Indirect antiglobulin test at 37°C',
            'Direct antiglobulin test with anti-IgG',
            'Elution study of warm autoantibodies',
        ]),
        'answer'      => 'Cold agglutinin titer at 4°C',
        'explanation' => 'Cold agglutinin disease is diagnosed by high titer of IgM autoantibodies reacting at 4°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the effect of citrate toxicity in massive transfusion?',
        'choices'     => json_encode([
            'Hypocalcemia',
            'Hyperkalemia',
            'Metabolic acidosis',
            'Volume overload',
        ]),
        'answer'      => 'Hypocalcemia',
        'explanation' => 'Citrate binds calcium leading to transient hypocalcemia during large-volume transfusions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which preservative solution contains adenine to support ATP production?',
        'choices'     => json_encode([
            'AS-1',
            'CPD',
            'CPDA-2',
            'CPDA-1',
        ]),
        'answer'      => 'AS-1',
        'explanation' => 'AS-1 includes adenine, dextrose, and mannitol to maintain ATP and RBC viability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which clotting factor is most labile in fresh frozen plasma?',
        'choices'     => json_encode([
            'Factor V',
            'Factor VIII',
            'Fibrinogen',
            'Factor II',
        ]),
        'answer'      => 'Factor VIII',
        'explanation' => 'Factor VIII activity decreases rapidly if FFP is not frozen promptly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the primary risk when transfusing ABO-incompatible platelets?',
        'choices'     => json_encode([
            'Minor hemolytic reaction',
            'Major hemolytic reaction',
            'TRALI',
            'Septic reaction',
        ]),
        'answer'      => 'Minor hemolytic reaction',
        'explanation' => 'Plasma antibodies in platelets can cause minor hemolysis in the recipient.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which blood bag additive contains mannitol to reduce hemolysis?',
        'choices'     => json_encode([
            'AS-3',
            'AS-5',
            'CPD',
            'CPDA-1',
        ]),
        'answer'      => 'AS-3',
        'explanation' => 'AS-3 includes mannitol which stabilizes cell membranes reducing hemolysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the recommended leukocyte count in a leukoreduced red cell unit?',
        'choices'     => json_encode([
            '<5x10^6 residual leukocytes',
            '<1x10^6 residual leukocytes',
            '<10x10^6 residual leukocytes',
            '<0.5x10^6 residual leukocytes',
        ]),
        'answer'      => '<5x10^6 residual leukocytes',
        'explanation' => 'Quality standards require residual WBCs to be <5 million per leukoreduced unit.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which test is most sensitive for detecting low levels of antibodies in neonatal alloimmune thrombocytopenia?',
        'choices'     => json_encode([
            'Monoclonal antibody immobilization of platelet antigens (MAIPA)',
            'ELISA',
            'Flow cytometry',
            'Direct antiglobulin test',
        ]),
        'answer'      => 'Monoclonal antibody immobilization of platelet antigens (MAIPA)',
        'explanation' => 'MAIPA specifically detects platelet-specific antibodies causing neonatal thrombocytopenia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the clinical use of washed red cells?',
        'choices'     => json_encode([
            'Prevent allergic reactions in IgA-deficient patients',
            'Increase oxygen delivery',
            'Treat iron overload',
            'Replace coagulation factors',
        ]),
        'answer'      => 'Prevent allergic reactions in IgA-deficient patients',
        'explanation' => 'Washing removes plasma proteins including IgA to prevent anaphylaxis in deficient individuals.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which condition requires HLA-matched platelet transfusions?',
        'choices'     => json_encode([
            'Refractoriness due to HLA alloimmunization',
            'Thrombocytopenia from Aplastic anemia',
            'Von Willebrand disease',
            'Hemophilia A',
        ]),
        'answer'      => 'Refractoriness due to HLA alloimmunization',
        'explanation' => 'HLA antibodies require matching donor platelets to improve transfusion response.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which pathogen reduction technology uses riboflavin and UV light?',
        'choices'     => json_encode([
            'Mirasol',
            'INTERCEPT',
            'THERAFLEX',
            'S-303',
        ]),
        'answer'      => 'Mirasol',
        'explanation' => 'Mirasol system uses riboflavin and UV light to inactivate pathogens in blood products.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the typical plasma yield from a single apheresis procedure?',
        'choices'     => json_encode([
            '600–800 mL',
            '200–300 mL',
            '1000–1200 mL',
            '400–500 mL',
        ]),
        'answer'      => '600–800 mL',
        'explanation' => 'Apheresis can collect 600–800 mL plasma while returning cellular components.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which antibody class is primarily responsible for hemolysis in cold agglutinin disease?',
        'choices'     => json_encode([
            'IgM',
            'IgG',
            'IgA',
            'IgE',
        ]),
        'answer'      => 'IgM',
        'explanation' => 'Cold agglutinins are IgM antibodies that fix complement at lower temperatures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the recommended ratio of RBC to plasma in a neonatal exchange transfusion?',
        'choices'     => json_encode([
            '5:1',
            '2:1',
            '1:1',
            '3:1',
        ]),
        'answer'      => '5:1',
        'explanation' => 'A higher ratio of RBC to plasma reduces bilirubin load while providing oxygen-carrying capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which laboratory parameter best indicates ongoing hemolysis after transfusion?',
        'choices'     => json_encode([
            'Elevated LDH and indirect bilirubin',
            'Increased fibrinogen',
            'Decreased potassium',
            'Low AST',
        ]),
        'answer'      => 'Elevated LDH and indirect bilirubin',
        'explanation' => 'LDH and indirect bilirubin rise during hemolysis as RBCs break down.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'What is the role of fibronectin in blood storage solutions?',
        'choices'     => json_encode([
            'Reduce red cell aggregation',
            'Enhance clotting',
            'Stabilize leukocytes',
            'Act as anticoagulant',
        ]),
        'answer'      => 'Reduce red cell aggregation',
        'explanation' => 'Fibronectin prevents RBC aggregation improving flow and viability during storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 35,
        'part'        => 4,
        'question'    => 'Which factor is most critical to ensure platelet quality during storage?',
        'choices'     => json_encode([
            'Constant agitation',
            'Light protection',
            'High temperature',
            'Low humidity',
        ]),
        'answer'      => 'Constant agitation',
        'explanation' => 'Agitation maintains gas exchange and prevents platelet clumping during storage.',
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

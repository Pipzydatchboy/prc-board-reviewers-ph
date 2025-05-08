<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'Which blood group system is clinically most important due to its strong immunogenicity?',
        'choices'     => json_encode([
            'ABO',
            'Rh',
            'Kell',
            'Duffy',
        ]),
        'answer'      => 'ABO',
        'explanation' => 'The ABO system is the most immunogenic and clinically significant in transfusion medicine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which preservative-anticoagulant solution is most commonly used for storing red blood cells for up to 21 days?',
        'choices'     => json_encode([
            'CPDA-1',
            'CPD-A',
            'CPD',
            'CPDA-2',
        ]),
        'answer'      => 'CPD',
        'explanation' => 'CPD (citrate-phosphate-dextrose) is used for storage up to 21 days; CPDA-1 allows 35 days.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'What is the minimum hemoglobin level required for a donor to donate whole blood?',
        'choices'     => json_encode([
            '11.0 g/dL',
            '12.5 g/dL',
            '13.0 g/dL',
            '11.5 g/dL',
        ]),
        'answer'      => '12.5 g/dL',
        'explanation' => 'The minimum hemoglobin for blood donation is 12.5 g/dL to ensure donor safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which test is used to detect unexpected antibodies in recipient\'s serum?',
        'choices'     => json_encode([
            'Direct Antiglobulin Test',
            'Indirect Antiglobulin Test',
            'Kleihauer-Betke Test',
            'Ham test',
        ]),
        'answer'      => 'Indirect Antiglobulin Test',
        'explanation' => 'The Indirect Antiglobulin Test (IAT) screens for antibodies in patient serum against reagent red cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'In which blood component storage does bacterial contamination pose the highest risk?',
        'choices'     => json_encode([
            'Platelet concentrates',
            'Packed red blood cells',
            'Fresh frozen plasma',
            'Cryoprecipitate',
        ]),
        'answer'      => 'Platelet concentrates',
        'explanation' => 'Platelets are stored at room temperature, increasing the risk of bacterial growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'What is the most common cause of a hemolytic transfusion reaction in ABO-incompatible transfusion?',
        'choices'     => json_encode([
            'Antibody-mediated complement activation',
            'Mechanical hemolysis',
            'Contaminated blood',
            'Citrate toxicity',
        ]),
        'answer'      => 'Antibody-mediated complement activation',
        'explanation' => 'ABO incompatibility leads to IgM antibodies binding and complement-mediated intravascular hemolysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which antigen is associated with the Rh blood group system?',
        'choices'     => json_encode([
            'Kell',
            'D',
            'Fya',
            'M',
        ]),
        'answer'      => 'D',
        'explanation' => 'The D antigen is the most immunogenic antigen in the Rh system and defines Rh positivity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which procedure separates packed red cells from whole blood?',
        'choices'     => json_encode([
            'Centrifugation',
            'Apheresis',
            'Sedimentation',
            'Leukoreduction',
        ]),
        'answer'      => 'Centrifugation',
        'explanation' => 'Centrifugation spins whole blood to separate red cells from plasma and buffy coat.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'What is the shelf-life of platelet concentrates stored at 20–24°C with agitation?',
        'choices'     => json_encode([
            '5 days',
            '7 days',
            '3 days',
            '10 days',
        ]),
        'answer'      => '5 days',
        'explanation' => 'Platelet concentrates have a shelf-life of 5 days under standard storage conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which enzyme is measured to detect hemolysis in stored blood units?',
        'choices'     => json_encode([
            'Lactate dehydrogenase',
            'Alanine aminotransferase',
            'Alkaline phosphatase',
            'Creatine kinase',
        ]),
        'answer'      => 'Lactate dehydrogenase',
        'explanation' => 'LDH is released from red cells during hemolysis and indicates cell breakdown.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which blood component is indicated for treating hypofibrinogenemia?',
        'choices'     => json_encode([
            'Cryoprecipitate',
            'Fresh frozen plasma',
            'Platelet concentrate',
            'Packed red cells',
        ]),
        'answer'      => 'Cryoprecipitate',
        'explanation' => 'Cryoprecipitate is rich in fibrinogen and factor VIII, used to treat low fibrinogen levels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'What is the primary purpose of performing a crossmatch before transfusion?',
        'choices'     => json_encode([
            'To check compatibility between donor and recipient blood',
            'To determine donor\'s hemoglobin level',
            'To measure recipient\'s platelet count',
            'To assess donor\'s blood pressure',
        ]),
        'answer'      => 'To check compatibility between donor and recipient blood',
        'explanation' => 'Crossmatching tests for antigen-antibody compatibility to prevent transfusion reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which factor in stored blood decreases over time, requiring additive solutions?',
        'choices'     => json_encode([
            'pH',
            '2,3-DPG',
            'Potassium',
            'Sodium',
        ]),
        'answer'      => '2,3-DPG',
        'explanation' => '2,3-DPG levels drop during storage, affecting oxygen release; additive solutions help maintain levels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which cell separation technique reduces leukocytes to prevent febrile reactions?',
        'choices'     => json_encode([
            'Leukoreduction',
            'Sedimentation',
            'Plasma exchange',
            'Centrifugation',
        ]),
        'answer'      => 'Leukoreduction',
        'explanation' => 'Leukoreduction removes white cells to decrease alloimmunization and febrile non-hemolytic reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'What is the primary antigen in the Kell blood group system?',
        'choices'     => json_encode([
            'K',
            'k',
            'Kpᵃ',
            'Kpᵇ',
        ]),
        'answer'      => 'K',
        'explanation' => 'The K antigen is the most immunogenic in the Kell system and often tested in antibody panels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which test differentiates between IgG and IgM antibodies bound to red cells?',
        'choices'     => json_encode([
            'Enzyme treatment',
            'Cold agglutinin test',
            'Dithiothreitol (DTT) treatment',
            'Heat elution',
        ]),
        'answer'      => 'Dithiothreitol (DTT) treatment',
        'explanation' => 'DTT reduces IgM pentamers, allowing differentiation by their inability to agglutinate after treatment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which plasma component is most affected by repeated freeze-thaw cycles?',
        'choices'     => json_encode([
            'Factor VIII',
            'Albumin',
            'Fibrinogen',
            'Immunoglobulins',
        ]),
        'answer'      => 'Factor VIII',
        'explanation' => 'Factor VIII is labile and loses activity with multiple freeze-thaw cycles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which method is used to prepare fresh frozen plasma?',
        'choices'     => json_encode([
            'Freeze plasma within 8 hours of collection',
            'Centrifuge and store at 4°C',
            'Sediment whole blood overnight',
            'Apheresis collection only',
        ]),
        'answer'      => 'Freeze plasma within 8 hours of collection',
        'explanation' => 'Fresh frozen plasma is frozen within 8 hours of collection to preserve labile clotting factors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'What is the Rh phenotype of a person with genotype ccDee?',
        'choices'     => json_encode([
            'Ccddee',
            'ccDee',
            'ccdee',
            'CcDee',
        ]),
        'answer'      => 'ccDee',
        'explanation' => 'The genotype ccDee expresses c and D antigens; phenotype is Rh c positive and D positive.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 35,
        'part'        => 1,
        'question'    => 'Which incidental finding in donor screening requires permanent deferral?',
        'choices'     => json_encode([
            'Reactive hepatitis B surface antigen',
            'Low hemoglobin',
            'Recent tattoo (6 months ago)',
            'Mild pregnancy',
        ]),
        'answer'      => 'Reactive hepatitis B surface antigen',
        'explanation' => 'A reactive HBsAg indicates active hepatitis B infection and requires permanent deferral.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

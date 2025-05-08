<?php

namespace Database\Seeders\MTLE\BloodBankingAndSerology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BloodBankingAndSerologyPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which test is used to confirm suspected platelet refractoriness?',
        'choices'     => json_encode([
            'Corrected count increment',
            'Bleeding time',
            'Platelet aggregation assay',
            'Thromboelastography',
        ]),
        'answer'      => 'Corrected count increment',
        'explanation' => 'CCI measures the post-transfusion rise in platelet count adjusted for body surface area.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'What is the primary indication for granulocyte transfusion?',
        'choices'     => json_encode([
            'Severe neutropenia with infection',
            'Thrombocytopenia',
            'Anemia',
            'Coagulopathy',
        ]),
        'answer'      => 'Severe neutropenia with infection',
        'explanation' => 'Granulocyte transfusions are reserved for neutropenic patients with refractory infections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which component is indicated for treatment of thrombotic thrombocytopenic purpura?',
        'choices'     => json_encode([
            'Plasma exchange',
            'Platelet concentrate',
            'Cryoprecipitate',
            'Packed red cells',
        ]),
        'answer'      => 'Plasma exchange',
        'explanation' => 'Therapeutic plasma exchange removes autoantibodies and replenishes ADAMTS13 enzyme.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'What is the shelf life of whole blood stored in CPDA-1 solution?',
        'choices'     => json_encode([
            '35 days',
            '21 days',
            '42 days',
            '14 days',
        ]),
        'answer'      => '35 days',
        'explanation' => 'CPDA-1 allows whole blood storage up to 35 days by providing adenine to support ATP.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which test is performed to detect transfusion-associated circulatory overload risk?',
        'choices'     => json_encode([
            'BNP level',
            'ECG',
            'CBC',
            'Liver function test',
        ]),
        'answer'      => 'BNP level',
        'explanation' => 'Elevated BNP indicates cardiac strain seen in TACO after transfusion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which condition is an absolute contraindication to autologous blood donation?',
        'choices'     => json_encode([
            'Active infection',
            'Controlled hypertension',
            'Mild anemia',
            'Age over 65',
        ]),
        'answer'      => 'Active infection',
        'explanation' => 'Donor active infections risk contaminating autologous blood and patient safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which value indicates adequate red cell mass for apheresis donation?',
        'choices'     => json_encode([
            'Hematocrit >40%',
            'Hemoglobin >10 g/dL',
            'Hematocrit >30%',
            'Hemoglobin >12 g/dL',
        ]),
        'answer'      => 'Hematocrit >40%',
        'explanation' => 'Higher hematocrit ensures sufficient RBC collection without donor anemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which plasma substitute is commonly used in massive transfusion protocols?',
        'choices'     => json_encode([
            'Albumin',
            'Hextend',
            'Saline',
            'Gelatin',
        ]),
        'answer'      => 'Albumin',
        'explanation' => 'Albumin acts as a volume expander when plasma is not readily available.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'What is the main advantage of leukodepleted blood products?',
        'choices'     => json_encode([
            'Reduced febrile reactions',
            'Increased RBC shelf life',
            'Enhanced oxygen delivery',
            'Reduced bacterial contamination',
        ]),
        'answer'      => 'Reduced febrile reactions',
        'explanation' => 'Removal of donor leukocytes decreases cytokine-mediated febrile responses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which factor analysis is essential before plasma transfusion?',
        'choices'     => json_encode([
            'PT/PTT',
            'Hemoglobin',
            'Platelet count',
            'Blood culture',
        ]),
        'answer'      => 'PT/PTT',
        'explanation' => 'Coagulation tests PT/PTT guide the need and dose for plasma transfusion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'What is the typical volume of a single unit of packed red blood cells?',
        'choices'     => json_encode([
            '250 mL',
            '500 mL',
            '350 mL',
            '150 mL',
        ]),
        'answer'      => '250 mL',
        'explanation' => 'A standard packed RBC unit is approximately 250 mL of red cells with additive solution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which blood group antigen is associated with hemolytic disease of the fetus and newborn (HDFN) besides Rh D?',
        'choices'     => json_encode([
            'Kell',
            'Lewis',
            'MNS',
            'Duffy',
        ]),
        'answer'      => 'Kell',
        'explanation' => 'Anti-Kell antibodies can cause severe HDFN by suppressing erythropoiesis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which storage condition preserves factor VIII activity best in plasma?',
        'choices'     => json_encode([
            'Frozen within 8 hours at -30°C',
            'Refrigerated at 4°C',
            'Room temperature',
            'Frozen within 24 hours at -18°C',
        ]),
        'answer'      => 'Frozen within 8 hours at -30°C',
        'explanation' => 'Rapid freezing at lower temperatures preserves labile factor VIII activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'What is the most likely cause of platelet unit swirling loss?',
        'choices'     => json_encode([
            'Platelet activation or damage',
            'Bacterial contamination',
            'Low storage temperature',
            'High agitation rate',
        ]),
        'answer'      => 'Platelet activation or damage',
        'explanation' => 'Loss of swirling indicates platelet shape change and activation diminishing quality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which anticoagulant level is most critical to monitor during apheresis?',
        'choices'     => json_encode([
            'Citrate',
            'Heparin',
            'EDTA',
            'Oxalate',
        ]),
        'answer'      => 'Citrate',
        'explanation' => 'Citrate toxicity from large-volume apheresis can cause hypocalcemia; monitor citrate load.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which parameter is used to evaluate red cell ATP levels in stored blood?',
        'choices'     => json_encode([
            'Bioluminescence assay',
            'Colorimetric pH test',
            'Hemolysis assay',
            'Potassium leakage',
        ]),
        'answer'      => 'Bioluminescence assay',
        'explanation' => 'ATP quantification via luciferase-mediated bioluminescence indicates red cell energy status.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'What is the main reason for using additive solutions in RBC storage?',
        'choices'     => json_encode([
            'Maintain osmolarity and pH',
            'Prevent bacterial growth',
            'Increase viscosity',
            'Reduce ATP levels',
        ]),
        'answer'      => 'Maintain osmolarity and pH',
        'explanation' => 'Additives provide nutrients and buffering to preserve RBC function and viability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which monitoring is essential during plateletpheresis?',
        'choices'     => json_encode([
            'Calcium levels',
            'Glucose levels',
            'Blood pressure only',
            'Temperature only',
        ]),
        'answer'      => 'Calcium levels',
        'explanation' => 'Citrate used as anticoagulant chelates calcium; monitor to prevent hypocalcemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'Which factor contributes most to RBC storage lesion?',
        'choices'     => json_encode([
            'Oxidative damage',
            'Bacterial growth',
            'Mechanical shear',
            'UV exposure',
        ]),
        'answer'      => 'Oxidative damage',
        'explanation' => 'Reactive oxygen species accumulate in storage causing membrane damage and hemolysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 35,
        'part'        => 5,
        'question'    => 'What is the recommended action if a blood bag appears cloudy after storage?',
        'choices'     => json_encode([
            'Discard as bacterially contaminated',
            'Use after centrifugation',
            'Filter before transfusion',
            'Test for lipemia',
        ]),
        'answer'      => 'Discard as bacterially contaminated',
        'explanation' => 'Cloudiness indicates possible bacterial growth; such units must be discarded.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

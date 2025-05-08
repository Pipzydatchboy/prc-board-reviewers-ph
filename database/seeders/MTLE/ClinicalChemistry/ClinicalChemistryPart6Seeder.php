<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart6Seeder extends Seeder
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
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which method measures serum lactate using lactate oxidase?',
        'choices'     => json_encode([
            'LOX-PAP method',
            'Lactate dehydrogenase UV method',
            'Chromatographic assay',
            'Reflectance photometry',
        ]),
        'answer'      => 'LOX-PAP method',
        'explanation' => 'Lactate oxidase produces H₂O₂ from lactate, coupled to peroxidase for colorimetric detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte is quantified by the Nessler reaction in urine analysis?',
        'choices'     => json_encode([
            'Ammonia',
            'Glucose',
            'Protein',
            'Ketones',
        ]),
        'answer'      => 'Ammonia',
        'explanation' => 'Nessler reagent reacts with ammonia to yield a colored complex measured spectrophotometrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'What is the principle of the Zincon method for serum zinc?',
        'choices'     => json_encode([
            'Colorimetric complexation with Zincon forming blue complex',
            'Atomic absorption spectrometry',
            'Fluorescence emission',
            'Nephelometric scattering',
        ]),
        'answer'      => 'Colorimetric complexation with Zincon forming blue complex',
        'explanation' => 'Zincon binds zinc producing a chromophore measured at 620 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which sample additive chelates calcium and prevents clotting?',
        'choices'     => json_encode([
            'EDTA',
            'Heparin',
            'Citrate',
            'Oxalate',
        ]),
        'answer'      => 'Oxalate',
        'explanation' => 'Oxalate forms insoluble complexes with calcium, inhibiting coagulation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte requires measurement at 606 nm in the nitroprusside reaction for ketones?',
        'choices'     => json_encode([
            'Acetoacetate',
            'Acetone',
            'β-Hydroxybutyrate',
            'Total ketones',
        ]),
        'answer'      => 'Acetoacetate',
        'explanation' => 'The nitroprusside reaction specifically detects acetoacetate forming a purple complex measured at 606 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which method uses sulfonephthalein dyes for serum albumin measurement?',
        'choices'     => json_encode([
            'Bromocresol purple',
            'Bradford assay',
            'Biuret assay',
            'Bromophenol blue',
        ]),
        'answer'      => 'Bromocresol purple',
        'explanation' => 'Bromocresol purple forms a complex with albumin allowing specific quantification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte interference is minimized by using blank cuvettes in enzymatic assays?',
        'choices'     => json_encode([
            'Sample turbidity',
            'Reagent instability',
            'Temperature fluctuation',
            'Substrate depletion',
        ]),
        'answer'      => 'Sample turbidity',
        'explanation' => 'Blank cuvettes correct for initial turbidity before enzymatic reaction proceeds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte is measured by the enzymatic Urease-GlDH method at 340 nm?',
        'choices'     => json_encode([
            'Urea',
            'Creatinine',
            'Ammonia',
            'Bicarbonate',
        ]),
        'answer'      => 'Urea',
        'explanation' => 'Urease hydrolyzes urea to ammonia, which GLDH uses to consume NADH measured at 340 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which parameter is calculated using Friedewald formula?',
        'choices'     => json_encode([
            'LDL cholesterol',
            'VLDL cholesterol',
            'Total cholesterol',
            'HDL cholesterol',
        ]),
        'answer'      => 'LDL cholesterol',
        'explanation' => 'LDL = Total cholesterol - (HDL + Triglycerides/5), based on VLDL estimation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte measurement uses flame photometry?',
        'choices'     => json_encode([
            'Sodium and potassium',
            'Calcium and magnesium',
            'Iron and copper',
            'Phosphate and sulfate',
        ]),
        'answer'      => 'Sodium and potassium',
        'explanation' => 'Flame photometry measures emission intensities of Na⁺ and K⁺ in a flame.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte is quantified by the diazo-coupling method after fenton\'s reaction?',
        'choices'     => json_encode([
            'Bilirubin',
            'Glucose',
            'Uric acid',
            'Creatinine',
        ]),
        'answer'      => 'Bilirubin',
        'explanation' => 'Fenton\'s reaction oxidizes non-conjugated bilirubin for diazo coupling detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte interference is corrected by sample blank in end-point assays?',
        'choices'     => json_encode([
            'Lipemia',
            'Enzyme unit variation',
            'Substrate instability',
            'pH drift',
        ]),
        'answer'      => 'Lipemia',
        'explanation' => 'Blank corrects for turbidity caused by lipids before reaction starts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte is measured by the enzymatic hexokinase reaction?',
        'choices'     => json_encode([
            'Glucose',
            'Lactate',
            'Urea',
            'Cholesterol',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Hexokinase catalyzes glucose phosphorylation in reference method for blood glucose.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte requires calibration with matrix-matched standards?',
        'choices'     => json_encode([
            'Creatinine',
            'Glucose',
            'Urea',
            'Total protein',
        ]),
        'answer'      => 'Creatinine',
        'explanation' => 'IDMS-traceable creatinine assays need calibration with serum-based standards for accuracy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which reagent is used in the sulfosalicylic acid test for urinary protein?',
        'choices'     => json_encode([
            'Sulfosalicylic acid',
            'Trichloroacetic acid',
            'Bradford reagent',
            'Folin phenol reagent',
        ]),
        'answer'      => 'Sulfosalicylic acid',
        'explanation' => 'Sulfosalicylic acid precipitates proteins in urine samples for qualitative detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte is measured by the Bradford assay?',
        'choices'     => json_encode([
            'Total protein',
            'Albumin',
            'Globulin',
            'Enzyme activity',
        ]),
        'answer'      => 'Total protein',
        'explanation' => 'Coomassie Brilliant Blue binds to proteins, shifting absorbance and allowing quantification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte requires use of EDTA tubes to prevent coagulation and chelate metal ions?',
        'choices'     => json_encode([
            'Trace metals',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'      => 'Trace metals',
        'explanation' => 'EDTA chelates divalent metals, preserving native levels of trace elements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte is measured by ion chromatography in clinical labs?',
        'choices'     => json_encode([
            'Organic acids',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Organic acids',
        'explanation' => 'Ion chromatography separates and quantifies organic acids such as lactate and pyruvate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which analyte interference is minimized by indophenol blank in phenol-based assays?',
        'choices'     => json_encode([
            'Phenol contaminants',
            'Enzyme inhibitors',
            'pH variations',
            'Temperature shifts',
        ]),
        'answer'      => 'Phenol contaminants',
        'explanation' => 'Blanking corrects background absorbance from phenolic impurities before reaction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 6,
        'question'    => 'Which parameter is critical for quality control in enzymatic assays?',
        'choices'     => json_encode([
            'Control material within allowable ranges',
            'Single measurement only',
            'Using reagent past expiry date',
            'Skipping calibration',
        ]),
        'answer'      => 'Control material within allowable ranges',
        'explanation' => 'Quality control requires control results to fall within defined limits to ensure assay reliability.',
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

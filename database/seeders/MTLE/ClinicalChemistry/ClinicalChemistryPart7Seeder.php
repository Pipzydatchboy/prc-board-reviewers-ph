<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which enzyme oxidizes L-amino acids to keto acids with production of hydrogen peroxide?',
        'choices'     => json_encode([
            'L-Amino acid oxidase',
            'Glutamate dehydrogenase',
            'Lactate oxidase',
            'Hexokinase',
        ]),
        'answer'      => 'L-Amino acid oxidase',
        'explanation' => 'L-Amino acid oxidase catalyzes oxidative deamination of amino acids producing H₂O₂.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which substrate is used in the glucose-6-phosphate dehydrogenase assay?',
        'choices'     => json_encode([
            'Glucose-6-phosphate',
            'Glucose',
            'Fructose-6-phosphate',
            'Pyruvate',
        ]),
        'answer'      => 'Glucose-6-phosphate',
        'explanation' => 'G6PD catalyzes conversion of glucose-6-phosphate to 6-phosphogluconate with NADP+ reduction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which trace metal is measured by flame atomic absorption spectrophotometry?',
        'choices'     => json_encode([
            'Lead',
            'Glucose',
            'Urea',
            'Cholesterol',
        ]),
        'answer'      => 'Lead',
        'explanation' => 'Flame AAS quantifies trace metals like lead by measuring atomic absorption in a flame.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'What is the principle of the cobalamin (Vitamin B12) assay by chemiluminescence?',
        'choices'     => json_encode([
            'Antibody capture with chemiluminescent detection',
            'UV absorbance at 361 nm',
            'Fluorescence polarization',
            'Nephelometry',
        ]),
        'answer'      => 'Antibody capture with chemiluminescent detection',
        'explanation' => 'Chemiluminescent immunoassays use antibodies to capture analyte and trigger light emission.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which analyte is determined by ion chromatography coupled with suppressed conductivity?',
        'choices'     => json_encode([
            'Chloride',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Chloride',
        'explanation' => 'Ion chromatography with suppression enhances detection of ionic species like chloride.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which reagent is used in the Nessler reaction for ammonia detection?',
        'choices'     => json_encode([
            'Mercuric iodide in alkaline medium',
            'Phosphomolybdate reagent',
            '4-Aminoantipyrine',
            'Biuret reagent',
        ]),
        'answer'      => 'Mercuric iodide in alkaline medium',
        'explanation' => 'Nessler reagent is an alkaline solution of mercuric iodide forming colored complex with ammonia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which analyte is measured by a turbidimetric assay using polyethylene glycol?',
        'choices'     => json_encode([
            'C-Reactive protein',
            'Glucose',
            'Urea',
            'Cholesterol',
        ]),
        'answer'      => 'C-Reactive protein',
        'explanation' => 'CRP turbidimetry uses polyethylene glycol to enhance antibody-antigen complex formation and light scattering.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which compound interferes with creatinine Jaffe assay causing positive bias?',
        'choices'     => json_encode([
            'Ketones (acetoacetate)',
            'Glucose',
            'Ascorbic acid',
            'Urea',
        ]),
        'answer'      => 'Ketones (acetoacetate)',
        'explanation' => 'Acetoacetate reacts with picrate enhancing color, falsely elevating creatinine results.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which buffer is ideal for alkaline phosphatase assays?',
        'choices'     => json_encode([
            'Diethanolamine buffer',
            'Phosphate buffer',
            'Carbonate buffer',
            'Acetate buffer',
        ]),
        'answer'      => 'Diethanolamine buffer',
        'explanation' => 'Diethanolamine buffer at pH 9.8 optimizes ALP activity and stability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which method uses molybdopterin for xanthine oxidase activity measurement?',
        'choices'     => json_encode([
            'Molybdenum-based colorimetric assay',
            'Diazo coupling',
            'Reflectance photometry',
            'Nephelometry',
        ]),
        'answer'      => 'Molybdenum-based colorimetric assay',
        'explanation' => 'Xanthine oxidase assays use molybdenum cofactor-containing reagents to detect activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which analyte requires protection from light to prevent degradation?',
        'choices'     => json_encode([
            'Bilirubin',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Bilirubin',
        'explanation' => 'Bilirubin is photolabile and must be protected to maintain accurate levels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which assay principle is used in the measurement of serum cortisol by immunoassay?',
        'choices'     => json_encode([
            'Competitive binding with labeled antigen',
            'Sandwich assay',
            'Agglutination inhibition',
            'Direct fluorescence',
        ]),
        'answer'      => 'Competitive binding with labeled antigen',
        'explanation' => 'Cortisol immunoassays often use labeled cortisol competing with patient cortisol for antibody sites.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which reference method measures serum osmolality by freezing point depression?',
        'choices'     => json_encode([
            'Freezing point depression',
            'Vapor pressure osmometry',
            'Refractometry',
            'Cryoscopy',
        ]),
        'answer'      => 'Freezing point depression',
        'explanation' => 'Freezing point depression accurately measures osmolality by determining freezing temperature.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which analyte measurement uses reflectance photometry for bilirubin on dry slides?',
        'choices'     => json_encode([
            'Total bilirubin',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Total bilirubin',
        'explanation' => 'Dry slide assays use diazo chemistry and reflectance photometry for bilirubin quantification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which enzymatic method measures total cholesterol via CHOD-PAP?',
        'choices'     => json_encode([
            'Cholesterol esterase and oxidase with peroxidase',
            'Jendrassik method',
            'Folin-Wu method',
            'Beta-oxidation',
        ]),
        'answer'      => 'Cholesterol esterase and oxidase with peroxidase',
        'explanation' => 'CHOD-PAP uses esterase and oxidase to produce H₂O₂, which peroxidase converts to chromogen.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which parameter is calculated using the Friedewald equation for LDL?',
        'choices'     => json_encode([
            'LDL cholesterol',
            'HDL cholesterol',
            'Total cholesterol',
            'VLDL cholesterol',
        ]),
        'answer'      => 'LDL cholesterol',
        'explanation' => 'LDL = Total cholesterol - HDL - (Triglycerides/5), based on VLDL estimation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which analyte is measured by the acetone-based Rothera\'s test?',
        'choices'     => json_encode([
            'Ketones',
            'Glucose',
            'Urea',
            'Protein',
        ]),
        'answer'      => 'Ketones',
        'explanation' => 'Rothera’s test uses sodium nitroprusside in alkaline medium to detect ketone bodies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which enzyme catalyzes the reaction measured in the creatine kinase assay?',
        'choices'     => json_encode([
            'CK catalyzes conversion of creatine and ATP to phosphocreatine',
            'LDH catalyzes lactate to pyruvate',
            'AST catalyzes aspartate to oxaloacetate',
            'ALT catalyzes alanine to pyruvate',
        ]),
        'answer'      => 'CK catalyzes conversion of creatine and ATP to phosphocreatine',
        'explanation' => 'CK transfers phosphate from ATP to creatine, a key step detected in CK activity assays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which analyte is quantified by the diazo-coupling Jendrassik–Grof method?',
        'choices'     => json_encode([
            'Total bilirubin',
            'Albumin',
            'Glucose',
            'Uric acid',
        ]),
        'answer'      => 'Total bilirubin',
        'explanation' => 'Jendrassik–Grof diazo-coupling quantifies total bilirubin after solubilizing direct and indirect fractions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 7,
        'question'    => 'Which analyte measurement uses the urease-GLDH method at 340 nm?',
        'choices'     => json_encode([
            'Urea',
            'Glucose',
            'Cholesterol',
            'Creatinine',
        ]),
        'answer'      => 'Urea',
        'explanation' => 'Urease hydrolyzes urea to ammonia; GLDH converts ammonia and α-ketoglutarate to glutamate, consuming NADH detected at 340 nm.',
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

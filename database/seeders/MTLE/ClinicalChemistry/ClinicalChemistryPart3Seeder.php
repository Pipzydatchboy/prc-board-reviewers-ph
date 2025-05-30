<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'Which enzyme catalyzes the conversion of glucose to glucose-6-phosphate in the hexokinase method?',
        'choices'     => json_encode([
            'Hexokinase',
            'Glucokinase',
            'Glucose oxidase',
            'Phosphofructokinase',
        ]),
        'answer'      => 'Hexokinase',
        'explanation' => 'Hexokinase phosphorylates glucose as the first step in the hexokinase reference method for glucose.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'In the Jaffe creatinine assay, which substance causes a negative interference?',
        'choices'     => json_encode([
            'Ketones',
            'Glucose',
            'Ascorbic acid',
            'Urea',
        ]),
        'answer'      => 'Ketones',
        'explanation' => 'Ketones react with picrate less effectively, leading to lower apparent creatinine values.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which wavelength is typically monitored for NADH formation in enzymatic assays?',
        'choices'     => json_encode([
            '340 nm',
            '405 nm',
            '540 nm',
            '660 nm',
        ]),
        'answer'      => '340 nm',
        'explanation' => 'NADH absorbs strongly at 340 nm, making it the standard for coupled enzyme assays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which lipid fraction is measured by precipitation with phosphotungstic acid-Mg2+?',
        'choices'     => json_encode([
            'Triglycerides',
            'Low-density lipoprotein',
            'High-density lipoprotein',
            'Total cholesterol',
        ]),
        'answer'      => 'High-density lipoprotein',
        'explanation' => 'Phosphotungstic acid-Mg2+ precipitates non-HDL lipoproteins, allowing HDL cholesterol measurement in supernatant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'What specimen preparation step is essential before performing an ammonia assay?',
        'choices'     => json_encode([
            'Rapid separation of plasma and freezing',
            'Heating to 60°C',
            'Dilution with acidified saline',
            'Addition of EDTA only',
        ]),
        'answer'      => 'Rapid separation of plasma and freezing',
        'explanation' => 'Ammonia levels rise rapidly in vitro; immediate separation and freezing stabilize concentration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which reagent is used in the sulfosalicylic acid method for urine protein screening?',
        'choices'     => json_encode([
            'Sulfosalicylic acid',
            'Acetic acid',
            'Bradford reagent',
            'Biuret reagent',
        ]),
        'answer'      => 'Sulfosalicylic acid',
        'explanation' => 'Sulfosalicylic acid precipitates proteins in urine; turbidity indicates proteinuria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which analyte is measured by the Trinder reaction in cholesterol assays?',
        'choices'     => json_encode([
            'Hydrogen peroxide generated by cholesterol oxidase',
            'Cholesterol esters directly',
            'Free fatty acids',
            'Triglycerides',
        ]),
        'answer'      => 'Hydrogen peroxide generated by cholesterol oxidase',
        'explanation' => 'Cholesterol oxidase produces H₂O₂, which reacts in a Trinder reaction to yield a chromogen.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'What effect does lipemia have on spectrophotometric clinical chemistry tests?',
        'choices'     => json_encode([
            'Scattering of light causing falsely elevated absorbance',
            'Inhibition of enzyme activity',
            'Precipitation of proteins',
            'Formation of colored complexes',
        ]),
        'answer'      => 'Scattering of light causing falsely elevated absorbance',
        'explanation' => 'Lipemic samples scatter incident light, increasing baseline absorbance readings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which substance is the major intracellular buffer in erythrocytes?',
        'choices'     => json_encode([
            'Hemoglobin',
            'Bicarbonate',
            'Phosphate',
            'Proteins',
        ]),
        'answer'      => 'Hemoglobin',
        'explanation' => 'Hemoglobin binds protons and CO₂, serving as the principal intracellular buffer in red cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which analyte requires dark incubation to prevent photodegradation during assay?',
        'choices'     => json_encode([
            'Bilirubin',
            'Glucose',
            'Creatinine',
            'Urea',
        ]),
        'answer'      => 'Bilirubin',
        'explanation' => 'Bilirubin is light-sensitive and must be protected during sample handling and assay.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which method is reference standard for serum total protein?',
        'choices'     => json_encode([
            'Kjeldahl nitrogen determination',
            'Biuret assay',
            'Bradford assay',
            'Refractometry',
        ]),
        'answer'      => 'Kjeldahl nitrogen determination',
        'explanation' => 'Kjeldahl method quantifies total nitrogen, which correlates directly to protein content.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which enzyme assay uses 5,5’-dithiobis-(2-nitrobenzoic acid) as chromogen?',
        'choices'     => json_encode([
            'Glutathione reductase assay',
            'Creatine kinase assay',
            'Alkaline phosphatase assay',
            'LDH assay',
        ]),
        'answer'      => 'Glutathione reductase assay',
        'explanation' => 'DTNB reacts with reduced glutathione to form a yellow product monitored at 412 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'What is the primary buffer system in the Biuret total protein assay?',
        'choices'     => json_encode([
            'Sodium hydroxide and copper sulfate',
            'Phosphate buffer',
            'Acetate buffer',
            'Tris-HCl buffer',
        ]),
        'answer'      => 'Sodium hydroxide and copper sulfate',
        'explanation' => 'Biuret reagent contains copper ions in alkaline (NaOH) medium to react with peptide bonds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which analyte uses a dry-slide multilayer film technology for point-of-care testing?',
        'choices'     => json_encode([
            'Electrolytes',
            'Hemoglobin A1c',
            'Vitamin D',
            'Thyroid hormones',
        ]),
        'answer'      => 'Electrolytes',
        'explanation' => 'Dry-slide cartridges incorporate ion-selective layers read by reflectance photometry for electrolytes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which analyte measurement is affected by bilirubin interference in the creatinine Jaffe assay?',
        'choices'     => json_encode([
            'False decrease',
            'False increase',
            'No effect',
            'Improved specificity',
        ]),
        'answer'      => 'False decrease',
        'explanation' => 'Bilirubin competes with creatinine for picrate, leading to underestimation of creatinine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'What is the key advantage of the enzymatic creatininase assay over Jaffe reaction?',
        'choices'     => json_encode([
            'Higher specificity for creatinine',
            'Lower cost',
            'Faster turnaround',
            'No reagent requirement',
        ]),
        'answer'      => 'Higher specificity for creatinine',
        'explanation' => 'Enzymatic assays avoid most interferences common to the Jaffe method.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which parameter is calculated from sodium, potassium, chloride, and bicarbonate measurements?',
        'choices'     => json_encode([
            'Anion gap',
            'Osmolality',
            'Fractional excretion of sodium',
            'Serum osmolarity',
        ]),
        'answer'      => 'Anion gap',
        'explanation' => 'Anion gap = (Na+ + K+) - (Cl- + HCO3-), indicating unmeasured ions in plasma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which reagent is used for enzymatic measurement of cholesterol via CHOD-PAP method?',
        'choices'     => json_encode([
            'Ammonium sulphate-cholesterol esterase and oxidase',
            'Cholesterol reductase',
            'Cholesterol dehydrogenase',
            'Cholesterol kinase',
        ]),
        'answer'      => 'Ammonium sulphate-cholesterol esterase and oxidase',
        'explanation' => 'CHOD-PAP uses cholesterol esterase to hydrolyze esters and cholesterol oxidase to produce H2O2 for color development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'Which analyte interference requires sample ultracentrifugation prior to assay?',
        'choices'     => json_encode([
            'Lipemia',
            'Hemolysis',
            'Icterus',
            'Hyperproteinemia',
        ]),
        'answer'      => 'Lipemia',
        'explanation' => 'High lipid levels cause turbidity; ultracentrifugation clarifies sample for accurate measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 3,
        'question'    => 'What is the reference endpoint in the glucose hexokinase assay?',
        'choices'     => json_encode([
            'NADPH absorbance at 340 nm',
            'Color intensity at 540 nm',
            'Turbidity at 700 nm',
            'Fluorescence at 450 nm',
        ]),
        'answer'      => 'NADPH absorbance at 340 nm',
        'explanation' => 'Hexokinase assay measures NADPH formation which absorbs at 340 nm as the assay endpoint.',
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

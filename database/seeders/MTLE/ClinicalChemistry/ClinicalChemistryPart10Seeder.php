<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which analyte is measured by the enzymatic cholesterol oxidase method without a peroxidase step?',
        'choices'     => json_encode([
            'Cholesterol to cholest-4-en-3-one',
            'Triglycerides',
            'HDL cholesterol',
            'Free fatty acids',
        ]),
        'answer'      => 'Cholesterol to cholest-4-en-3-one',
        'explanation' => 'Cholesterol oxidase directly converts cholesterol to cholest-4-en-3-one and H₂O₂, which can be quantified.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which dye is used for serum albumin measurement by dye-binding in automated analyzers?',
        'choices'     => json_encode([
            'Bromocresol purple',
            'Coat Zero Red',
            'Pyrogallol red',
            'Bromophenol blue',
        ]),
        'answer'      => 'Bromocresol purple',
        'explanation' => 'Bromocresol purple binds selectively to albumin at pH 6.3, measured in automated systems.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is determined by the Berthelot reaction in clinical chemistry?',
        'choices'     => json_encode([
            'Ammonia',
            'Urea',
            'Lactate',
            'Glucose',
        ]),
        'answer'      => 'Ammonia',
        'explanation' => 'Berthelot reaction converts ammonia to indophenol blue measured at 630 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which reagent is used in the colorimetric method for serum iron by o-phenanthroline?',
        'choices'     => json_encode([
            'o-phenanthroline',
            'Ferrozine',
            'Nitroso-PSAP',
            'Bromopyrogallol red',
        ]),
        'answer'      => 'o-phenanthroline',
        'explanation' => 'o-Phenanthroline forms an orange complex with Fe²⁺ measured at 510 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is measured by nephelometry for complement C4 quantification?',
        'choices'     => json_encode([
            'Complement C4',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Complement C4',
        'explanation' => 'Nephelometry detects light scattering from antigen-antibody complexes specific to C4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses the Trinder reaction after galactose dehydrogenase in newborn screening?',
        'choices'     => json_encode([
            'Galactose',
            'Glucose',
            'Phenylalanine',
            'Lactate',
        ]),
        'answer'      => 'Galactose',
        'explanation' => 'GAOX produces H₂O₂ from galactose which reacts in a Trinder dye formation to quantify galactose.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is quantified by ion chromatography with pulsed amperometric detection?',
        'choices'     => json_encode([
            'Carbohydrates (e.g., glucose)',
            'Proteins',
            'Lipids',
            'Uric acid',
        ]),
        'answer'      => 'Carbohydrates (e.g., glucose)',
        'explanation' => 'PAD detects electroactive carbohydrates separated by IC without derivatization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte interference is minimized by sample blank subtraction in endpoint assays?',
        'choices'     => json_encode([
            'Sample turbidity',
            'Temperature variation',
            'pH fluctuation',
            'Reagent color change',
        ]),
        'answer'      => 'Sample turbidity',
        'explanation' => 'Blank subtraction corrects for initial turbidity before reaction begins.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses fluorometric detection after derivatization with o-phthalaldehyde?',
        'choices'     => json_encode([
            'Amino acids',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'      => 'Amino acids',
        'explanation' => 'OPA reacts with primary amines to form a fluorescent complex for amino acid analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is measured by the enzymatic SGOT/AST assay using NADH oxidation?',
        'choices'     => json_encode([
            'AST',
            'ALT',
            'ALP',
            'LDH',
        ]),
        'answer'      => 'AST',
        'explanation' => 'AST catalyzes transfer from aspartate to α-ketoglutarate; NADH decrease at 340 nm reflects activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses atomic fluorescence spectrometry for determination?',
        'choices'     => json_encode([
            'Mercury',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Mercury',
        'explanation' => 'AFS provides sensitive detection of mercury vapor after sample vaporization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte interference is corrected by using EDTA tubes in trace element analysis?',
        'choices'     => json_encode([
            'Metal contamination',
            'Glycolysis',
            'Coagulation',
            'Hemolysis',
        ]),
        'answer'      => 'Metal contamination',
        'explanation' => 'EDTA chelates metals; acid-washed EDTA tubes prevent external contaminant metals in samples.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses the kinetic Jaffe method for creatinine measurement?',
        'choices'     => json_encode([
            'Creatinine',
            'Urea',
            'Glucose',
            'Cholesterol',
        ]),
        'answer'      => 'Creatinine',
        'explanation' => 'Kinetic Jaffe measures rate of complex formation to reduce interference from noncreatinine chromogens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses amperometric detection in point-of-care glucose meters?',
        'choices'     => json_encode([
            'Glucose',
            'Cholesterol',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Amperometric POC meters measure electric current proportional to H₂O₂ generated by glucose oxidase.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte interference is minimized by using background read in rate assays?',
        'choices'     => json_encode([
            'Initial absorbance',
            'Temperature drift',
            'Reagent color instability',
            'pH changes',
        ]),
        'answer'      => 'Initial absorbance',
        'explanation' => 'Background read subtracts initial absorbance to account for sample/reagent color.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses dry slide reflectance for blood gas electrode calibration?',
        'choices'     => json_encode([
            'Electrolytes',
            'Blood gases',
            'Glucose',
            'Urea',
        ]),
        'answer'      => 'Blood gases',
        'explanation' => 'Dry slide cartridges contain buffered films for pH, pCO₂, and pO₂ calibration read by reflectance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses the Diazyme direct LDL assay without ultracentrifugation?',
        'choices'     => json_encode([
            'LDL cholesterol',
            'HDL cholesterol',
            'Total cholesterol',
            'Triglycerides',
        ]),
        'answer'      => 'LDL cholesterol',
        'explanation' => 'Direct LDL assays use detergents to selectively solubilize non-LDL, allowing LDL measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses chemi‑luminescent microparticle immunoassay (CMIA)?',
        'choices'     => json_encode([
            'Thyroid-stimulating hormone',
            'Glucose',
            'Urea',
            'Cholesterol',
        ]),
        'answer'      => 'Thyroid-stimulating hormone',
        'explanation' => 'CMIA uses magnetic microparticles coated with antibody and chemiluminescent tracer for TSH quantification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses tandem mass spectrometry for newborn metabolic screens?',
        'choices'     => json_encode([
            'Amino acid and acylcarnitine profiles',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'      => 'Amino acid and acylcarnitine profiles',
        'explanation' => 'MS/MS detects multiple analytes simultaneously by mass/charge separation in dried blood spots.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which parameter is essential for quality control in clinical chemistry analyzers?',
        'choices'     => json_encode([
            'Use of Levey-Jennings charts',
            'Single calibration per year',
            'No control checks',
            'Reagent reuse',
        ]),
        'answer'      => 'Use of Levey-Jennings charts',
        'explanation' => 'Levey-Jennings charts track control values over time to monitor assay performance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
];        $batch = [
    //1
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is measured by the enzymatic cholesterol oxidase method without a peroxidase step?',
        'choices'     => json_encode([
            'Cholesterol to cholest-4-en-3-one',
            'Triglycerides',
            'HDL cholesterol',
            'Free fatty acids',
        ]),
        'answer'      => 'Cholesterol to cholest-4-en-3-one',
        'explanation' => 'Cholesterol oxidase directly converts cholesterol to cholest-4-en-3-one and H₂O₂, which can be quantified.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which dye is used for serum albumin measurement by dye-binding in automated analyzers?',
        'choices'     => json_encode([
            'Bromocresol purple',
            'Coat Zero Red',
            'Pyrogallol red',
            'Bromophenol blue',
        ]),
        'answer'      => 'Bromocresol purple',
        'explanation' => 'Bromocresol purple binds selectively to albumin at pH 6.3, measured in automated systems.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is determined by the Berthelot reaction in clinical chemistry?',
        'choices'     => json_encode([
            'Ammonia',
            'Urea',
            'Lactate',
            'Glucose',
        ]),
        'answer'      => 'Ammonia',
        'explanation' => 'Berthelot reaction converts ammonia to indophenol blue measured at 630 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which reagent is used in the colorimetric method for serum iron by o-phenanthroline?',
        'choices'     => json_encode([
            'o-phenanthroline',
            'Ferrozine',
            'Nitroso-PSAP',
            'Bromopyrogallol red',
        ]),
        'answer'      => 'o-phenanthroline',
        'explanation' => 'o-Phenanthroline forms an orange complex with Fe²⁺ measured at 510 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is measured by nephelometry for complement C4 quantification?',
        'choices'     => json_encode([
            'Complement C4',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Complement C4',
        'explanation' => 'Nephelometry detects light scattering from antigen-antibody complexes specific to C4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses the Trinder reaction after galactose dehydrogenase in newborn screening?',
        'choices'     => json_encode([
            'Galactose',
            'Glucose',
            'Phenylalanine',
            'Lactate',
        ]),
        'answer'      => 'Galactose',
        'explanation' => 'GAOX produces H₂O₂ from galactose which reacts in a Trinder dye formation to quantify galactose.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is quantified by ion chromatography with pulsed amperometric detection?',
        'choices'     => json_encode([
            'Carbohydrates (e.g., glucose)',
            'Proteins',
            'Lipids',
            'Uric acid',
        ]),
        'answer'      => 'Carbohydrates (e.g., glucose)',
        'explanation' => 'PAD detects electroactive carbohydrates separated by IC without derivatization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte interference is minimized by sample blank subtraction in endpoint assays?',
        'choices'     => json_encode([
            'Sample turbidity',
            'Temperature variation',
            'pH fluctuation',
            'Reagent color change',
        ]),
        'answer'      => 'Sample turbidity',
        'explanation' => 'Blank subtraction corrects for initial turbidity before reaction begins.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses fluorometric detection after derivatization with o-phthalaldehyde?',
        'choices'     => json_encode([
            'Amino acids',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'      => 'Amino acids',
        'explanation' => 'OPA reacts with primary amines to form a fluorescent complex for amino acid analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte is measured by the enzymatic SGOT/AST assay using NADH oxidation?',
        'choices'     => json_encode([
            'AST',
            'ALT',
            'ALP',
            'LDH',
        ]),
        'answer'      => 'AST',
        'explanation' => 'AST catalyzes transfer from aspartate to α-ketoglutarate; NADH decrease at 340 nm reflects activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses atomic fluorescence spectrometry for determination?',
        'choices'     => json_encode([
            'Mercury',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Mercury',
        'explanation' => 'AFS provides sensitive detection of mercury vapor after sample vaporization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte interference is corrected by using EDTA tubes in trace element analysis?',
        'choices'     => json_encode([
            'Metal contamination',
            'Glycolysis',
            'Coagulation',
            'Hemolysis',
        ]),
        'answer'      => 'Metal contamination',
        'explanation' => 'EDTA chelates metals; acid-washed EDTA tubes prevent external contaminant metals in samples.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses the kinetic Jaffe method for creatinine measurement?',
        'choices'     => json_encode([
            'Creatinine',
            'Urea',
            'Glucose',
            'Cholesterol',
        ]),
        'answer'      => 'Creatinine',
        'explanation' => 'Kinetic Jaffe measures rate of complex formation to reduce interference from noncreatinine chromogens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses amperometric detection in point-of-care glucose meters?',
        'choices'     => json_encode([
            'Glucose',
            'Cholesterol',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Amperometric POC meters measure electric current proportional to H₂O₂ generated by glucose oxidase.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte interference is minimized by using background read in rate assays?',
        'choices'     => json_encode([
            'Initial absorbance',
            'Temperature drift',
            'Reagent color instability',
            'pH changes',
        ]),
        'answer'      => 'Initial absorbance',
        'explanation' => 'Background read subtracts initial absorbance to account for sample/reagent color.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses dry slide reflectance for blood gas electrode calibration?',
        'choices'     => json_encode([
            'Electrolytes',
            'Blood gases',
            'Glucose',
            'Urea',
        ]),
        'answer'      => 'Blood gases',
        'explanation' => 'Dry slide cartridges contain buffered films for pH, pCO₂, and pO₂ calibration read by reflectance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses the Diazyme direct LDL assay without ultracentrifugation?',
        'choices'     => json_encode([
            'LDL cholesterol',
            'HDL cholesterol',
            'Total cholesterol',
            'Triglycerides',
        ]),
        'answer'      => 'LDL cholesterol',
        'explanation' => 'Direct LDL assays use detergents to selectively solubilize non-LDL, allowing LDL measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses chemi‑luminescent microparticle immunoassay (CMIA)?',
        'choices'     => json_encode([
            'Thyroid-stimulating hormone',
            'Glucose',
            'Urea',
            'Cholesterol',
        ]),
        'answer'      => 'Thyroid-stimulating hormone',
        'explanation' => 'CMIA uses magnetic microparticles coated with antibody and chemiluminescent tracer for TSH quantification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which analyte uses tandem mass spectrometry for newborn metabolic screens?',
        'choices'     => json_encode([
            'Amino acid and acylcarnitine profiles',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'      => 'Amino acid and acylcarnitine profiles',
        'explanation' => 'MS/MS detects multiple analytes simultaneously by mass/charge separation in dried blood spots.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 10,
        'question'    => 'Which parameter is essential for quality control in clinical chemistry analyzers?',
        'choices'     => json_encode([
            'Use of Levey-Jennings charts',
            'Single calibration per year',
            'No control checks',
            'Reagent reuse',
        ]),
        'answer'      => 'Use of Levey-Jennings charts',
        'explanation' => 'Levey-Jennings charts track control values over time to monitor assay performance.',
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

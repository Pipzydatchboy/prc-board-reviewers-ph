<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'Which enzyme is most commonly used as a clinical marker for myocardial infarction?',
        'choices'     => json_encode([
            'Creatine kinase-MB (CK-MB)',
            'Lactate dehydrogenase-1 (LDH-1)',
            'Aspartate aminotransferase (AST)',
            'Alanine aminotransferase (ALT)',
        ]),
        'answer'      => 'Creatine kinase-MB (CK-MB)',
        'explanation' => 'CK-MB is more specific for cardiac muscle damage compared to other isoenzymes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which reagent is used in the Jaffe reaction for creatinine measurement?',
        'choices'     => json_encode([
            'Picric acid in alkaline solution',
            '2,4-Dinitrophenylhydrazine',
            'Benzidine',
            'Bromcresol green',
        ]),
        'answer'      => 'Picric acid in alkaline solution',
        'explanation' => 'The Jaffe method is based on creatinine forming a red-orange complex with picrate under alkaline conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'What is the principle of the glucose oxidase method for blood glucose estimation?',
        'choices'     => json_encode([
            'Oxidation of glucose by oxygen producing hydrogen peroxide',
            'Nonenzymatic glycosylation of hemoglobin',
            'Colorimetric cleavage of phenol red',
            'Enzymatic reduction of NAD+',
        ]),
        'answer'      => 'Oxidation of glucose by oxygen producing hydrogen peroxide',
        'explanation' => 'Glucose oxidase catalyzes conversion of glucose and oxygen to gluconic acid and H2O2, which is measured colorimetrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which lipoprotein fraction transports endogenous cholesterol from liver to peripheral tissues?',
        'choices'     => json_encode([
            'Low-density lipoprotein (LDL)',
            'High-density lipoprotein (HDL)',
            'Chylomicrons',
            'Very-low-density lipoprotein (VLDL)',
        ]),
        'answer'      => 'Low-density lipoprotein (LDL)',
        'explanation' => 'LDL carries cholesterol to peripheral cells and is termed the "bad" cholesterol due to atherogenic potential.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which analyte is measured by the bilirubin diazo reaction?',
        'choices'     => json_encode([
            'Total and direct bilirubin',
            'Unconjugated bilirubin only',
            'Conjugated bilirubin only',
            'Bile salts',
        ]),
        'answer'      => 'Total and direct bilirubin',
        'explanation' => 'The Diazo reaction allows measurement of direct bilirubin directly and total after addition of accelerator for unconjugated fraction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which substance is the major buffer in plasma extracellular fluid?',
        'choices'     => json_encode([
            'Bicarbonate',
            'Phosphate',
            'Proteins',
            'Hemoglobin',
        ]),
        'answer'      => 'Bicarbonate',
        'explanation' => 'Bicarbonate is the principal extracellular buffer system, maintaining blood pH.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'What is the function of uricase in serum uric acid assays?',
        'choices'     => json_encode([
            'Oxidizes uric acid to allantoin and hydrogen peroxide',
            'Reduces uric acid to xanthine',
            'Chelates uric acid',
            'Precipitates uric acid crystals',
        ]),
        'answer'      => 'Oxidizes uric acid to allantoin and hydrogen peroxide',
        'explanation' => 'Uricase converts uric acid, allowing quantification via generated H2O2.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which test principle uses ion-selective electrodes for measurement?',
        'choices'     => json_encode([
            'Electrolyte analysis (e.g., Na+, K+)',
            'Glucose oxidase method',
            'Bromcresol green albumin',
            'Enzymatic cholesterol assay',
        ]),
        'answer'      => 'Electrolyte analysis (e.g., Na+, K+)',
        'explanation' => 'Ion-selective electrodes measure specific ion activity directly in plasma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which enzyme assay is used to assess liver synthetic function?',
        'choices'     => json_encode([
            'Serum albumin measurement',
            'Alkaline phosphatase activity',
            'Gamma-glutamyl transferase activity',
            'Alanine aminotransferase activity',
        ]),
        'answer'      => 'Serum albumin measurement',
        'explanation' => 'Albumin reflects liver synthetic capacity; enzyme levels indicate hepatocellular injury.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which measure indicates glomerular filtration rate most accurately?',
        'choices'     => json_encode([
            'Creatinine clearance',
            'Serum urea concentration',
            'Serum uric acid',
            'Blood urea nitrogen/creatinine ratio',
        ]),
        'answer'      => 'Creatinine clearance',
        'explanation' => 'Creatinine clearance approximates GFR by measuring creatinine excreted over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which analyte interferes negatively with the Jaffe creatinine assay?',
        'choices'     => json_encode([
            'Glucose',
            'Urea',
            'Bilirubin',
            'Uric acid',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'High glucose can cause false elevation of creatinine in Jaffe reaction (positive interference).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which method is gold standard for serum protein separation?',
        'choices'     => json_encode([
            'Electrophoresis',
            'Nephelometry',
            'Immunoturbidimetry',
            'High-performance liquid chromatography',
        ]),
        'answer'      => 'Electrophoresis',
        'explanation' => 'Protein electrophoresis separates proteins by charge and size for diagnostic patterns.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which reagent is used for measurement of total protein by the Biuret method?',
        'choices'     => json_encode([
            'Copper sulfate in alkaline solution',
            'Pyrogallol red',
            'Coomassie blue',
            'Bromcresol purple',
        ]),
        'answer'      => 'Copper sulfate in alkaline solution',
        'explanation' => 'Proteins form violet complex with copper under alkaline conditions (Biuret reaction).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which plasma enzyme indicates bone isoform activity?',
        'choices'     => json_encode([
            'Alkaline phosphatase isoenzyme bone-specific',
            'Total alkaline phosphatase',
            'Gamma-glutamyl transferase',
            'Lactate dehydrogenase',
        ]),
        'answer'      => 'Alkaline phosphatase isoenzyme bone-specific',
        'explanation' => 'Bone ALP isoenzyme reflects osteoblastic activity and bone turnover.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which test principle uses enzymatic NADH oxidation measured at 340 nm?',
        'choices'     => json_encode([
            'Lactate dehydrogenase assay',
            'Glucose oxidase',
            'Cholesterol oxidase',
            'Urea urease',
        ]),
        'answer'      => 'Lactate dehydrogenase assay',
        'explanation' => 'LDH catalyzes conversion of lactate to pyruvate with NAD+ to NADH measured spectrophotometrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which analyte is measured by the uricase-peroxidase coupled method?',
        'choices'     => json_encode([
            'Uric acid',
            'Urea',
            'Creatinine',
            'Bilirubin',
        ]),
        'answer'      => 'Uric acid',
        'explanation' => 'Uricase converts uric acid to allantoin and H2O2, then peroxidase produces a chromogen measured colorimetrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which parameter is directly proportional to protein concentration in nephelometry?',
        'choices'     => json_encode([
            'Scattered light intensity',
            'Absorbance at 600 nm',
            'Fluorescence emission',
            'pH change',
        ]),
        'answer'      => 'Scattered light intensity',
        'explanation' => 'Nephelometry measures light scattered by antigen-antibody complexes as an indicator of concentration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which compound is measured by the urease-GLDH method?',
        'choices'     => json_encode([
            'Urea',
            'Ammonia',
            'Creatinine',
            'Uric acid',
        ]),
        'answer'      => 'Urea',
        'explanation' => 'Urease hydrolyzes urea to ammonium and CO₂; GLDH then converts α-ketoglutarate and NH₄⁺ to glutamate consuming NADH, measured at 340 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which analyte interferes negatively in enzymatic cholesterol assays?',
        'choices'     => json_encode([
            'Bilirubin',
            'Hemoglobin',
            'Lipemia',
            'Icterus',
        ]),
        'answer'      => 'Lipemia',
        'explanation' => 'High lipid levels scatter light and can cause falsely elevated readings in colorimetric assays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 1,
        'question'    => 'Which enzyme is measured to monitor muscle damage in rhabdomyolysis?',
        'choices'     => json_encode([
            'Creatine kinase (total CK)',
            'AST',
            'ALT',
            'LDH',
        ]),
        'answer'      => 'Creatine kinase (total CK)',
        'explanation' => 'Total CK rises significantly in skeletal muscle injury such as rhabdomyolysis.',
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

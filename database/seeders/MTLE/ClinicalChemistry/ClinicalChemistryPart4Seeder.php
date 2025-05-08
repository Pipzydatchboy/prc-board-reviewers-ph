<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which assay principle is used for measurement of serum urea by diacetyl monoxime?',
        'choices'     => json_encode([
            'Condensation of urea with diacetyl monoxime under acidic conditions',
            'Enzymatic hydrolysis by urease',
            'Colorimetric reaction with bromothymol blue',
            'Oxidation by urea oxidase',
        ]),
        'answer'      => 'Condensation of urea with diacetyl monoxime under acidic conditions',
        'explanation' => 'Diacetyl monoxime reacts with urea to form a colored complex measured spectrophotometrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which component in sample interferes with the Jendrassik–Grof bilirubin assay to cause positive bias?',
        'choices'     => json_encode([
            'Drugs forming azo-dyes',
            'Hemolysis',
            'High protein',
            'Lipemia',
        ]),
        'answer'      => 'Drugs forming azo-dyes',
        'explanation' => 'Certain medications produce colored metabolites that react with diazo reagents increasing measured bilirubin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which principle underlies the measurement of serum calcium by the o-cresolphthalein complexone method?',
        'choices'     => json_encode([
            'Formation of a purple complex with calcium at alkaline pH',
            'Enzymatic release of calcium ions',
            'Precipitation with oxalate',
            'Complexation with EDTA',
        ]),
        'answer'      => 'Formation of a purple complex with calcium at alkaline pH',
        'explanation' => 'o-Cresolphthalein reacts with calcium under alkaline conditions yielding a colored complex.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which analyte is determined by the Berthelot reaction?',
        'choices'     => json_encode([
            'Ammonia',
            'Creatinine',
            'Glucose',
            'Uric acid',
        ]),
        'answer'      => 'Ammonia',
        'explanation' => 'Berthelot reaction converts ammonia to indophenol blue measured spectrophotometrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'What is the function of urease in urinary urea analysis?',
        'choices'     => json_encode([
            'Hydrolyze urea to ammonia and CO₂',
            'Convert urea to allantoic acid',
            'Bind urea for precipitation',
            'Oxidize urea to nitrogen',
        ]),
        'answer'      => 'Hydrolyze urea to ammonia and CO₂',
        'explanation' => 'Urease catalyzes urea breakdown, allowing subsequent detection of produced ammonia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which test employs nephelometry for quantification in clinical chemistry?',
        'choices'     => json_encode([
            'Immunoglobulin quantitation',
            'Glucose measurement',
            'Bilirubin assay',
            'Creatinine clearance',
        ]),
        'answer'      => 'Immunoglobulin quantitation',
        'explanation' => 'Nephelometry measures light scattered by antigen-antibody complexes, commonly for immunoglobulins.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which dye-binding assay measures serum albumin specifically?',
        'choices'     => json_encode([
            'Bromocresol green',
            'Coomassie blue',
            'Biuret',
            'Bradford',
        ]),
        'answer'      => 'Bromocresol green',
        'explanation' => 'BCG binds selectively to albumin causing a color change measured spectrophotometrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'What is the principle of the ferrozine method for serum iron?',
        'choices'     => json_encode([
            'Formation of a colored complex between ferrous iron and ferrozine',
            'Oxidation of iron to ferricyanide',
            'Chelation by EDTA',
            'Enzymatic conversion to hemoglobin',
        ]),
        'answer'      => 'Formation of a colored complex between ferrous iron and ferrozine',
        'explanation' => 'Ferrozine reacts with Fe²⁺ yielding a magenta complex measured at 562 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which analyte assay uses gas chromatography in clinical chemistry labs?',
        'choices'     => json_encode([
            'Volatile fatty acids',
            'Glucose',
            'Urea',
            'Cholesterol',
        ]),
        'answer'      => 'Volatile fatty acids',
        'explanation' => 'Gas chromatography separates and quantifies volatile compounds like short-chain fatty acids.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which measure is used for assay of serum phenylalanine in newborn screening?',
        'choices'     => json_encode([
            'Fluorometric method',
            'Colorimetric Jaffe reaction',
            'Chromatographic immunoassay',
            'Nephelometry',
        ]),
        'answer'      => 'Fluorometric method',
        'explanation' => 'Fluorometric assays detect phenylalanine via specific reaction yielding fluorescent product.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which analyte interference is minimized by alkaline phosphatase heat inactivation?',
        'choices'     => json_encode([
            'Bone ALP',
            'Liver ALP',
            'Intestinal ALP',
            'Placental ALP',
        ]),
        'answer'      => 'Bone ALP',
        'explanation' => 'Bone ALP is heat labile and inactivated at 56°C, leaving hepatic isoenzyme activity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'What is the principle of the VLDL cholesterol estimation by ultracentrifugation?',
        'choices'     => json_encode([
            'Separation of lipoprotein fractions by density',
            'Precipitation of VLDL by dextran sulfate',
            'Enzymatic measurement of triglycerides only',
            'Electrophoresis mobility',
        ]),
        'answer'      => 'Separation of lipoprotein fractions by density',
        'explanation' => 'Ultracentrifugation isolates VLDL based on its specific density.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which reagent is used in the autoanalyzer cyanide-free method for thiocyanate determination?',
        'choices'     => json_encode([
            'Ferric nitrate and iron(III) chloride',
            'Cyanide and ferric ammonium sulfate',
            'Mercuric chloride',
            'Sodium azide',
        ]),
        'answer'      => 'Ferric nitrate and iron(III) chloride',
        'explanation' => 'These reagents react with thiocyanate to form colored complex measured without cyanide.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which compound interferes with creatinine enzymatic assays causing false elevation?',
        'choices'     => json_encode([
            'Bilirubin',
            'Glucose',
            'Triglycerides',
            'Urea',
        ]),
        'answer'      => 'Bilirubin',
        'explanation' => 'High bilirubin can absorb in assay wavelength and interfere with enzymatic methods.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'What is the main advantage of the enzymatic AGT-PAP method for cholesterol over CHOD-PAP?',
        'choices'     => json_encode([
            'No peroxidase-related interferences',
            'Lower cost',
            'Faster kinetics',
            'Higher sensitivity to esters',
        ]),
        'answer'      => 'No peroxidase-related interferences',
        'explanation' => 'AGT-PAP uses cholesterol esterase and glycerol-3-phosphate oxidase-purified protocols to avoid peroxidase inhibitors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which analyte is measured by enzymatic assay involving glutamate dehydrogenase (GLDH)?',
        'choices'     => json_encode([
            'Ammonia',
            'Glucose',
            'Urea',
            'Bilirubin',
        ]),
        'answer'      => 'Ammonia',
        'explanation' => 'GLDH catalyzes conversion of α-ketoglutarate and NH₄⁺ to glutamate, consuming NADH measured at 340 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which HPLC detection method is used for quantification of vitamin B12?',
        'choices'     => json_encode([
            'UV detection at 361 nm',
            'Fluorescence detection',
            'Electrochemical detection',
            'Refractive index detection',
        ]),
        'answer'      => 'UV detection at 361 nm',
        'explanation' => 'Vitamin B12 absorbs UV light strongly at 361 nm, allowing quantitative detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which analyte requires protective measures against pyruvate oxidation during analysis?',
        'choices'     => json_encode([
            'Pyruvate',
            'Glucose',
            'Lactate',
            'Acetate',
        ]),
        'answer'      => 'Pyruvate',
        'explanation' => 'Pyruvate is labile and requires cooling or acidification to prevent nonenzymatic decomposition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which substance stabilizes blood glucose in a gray-top tube?',
        'choices'     => json_encode([
            'Sodium fluoride',
            'EDTA',
            'Heparin',
            'Citrate',
        ]),
        'answer'      => 'Sodium fluoride',
        'explanation' => 'Sodium fluoride inhibits glycolysis, preserving glucose levels in collected specimens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 4,
        'question'    => 'Which analyte is measured by the colorimetric Trinder reaction in ketone testing?',
        'choices'     => json_encode([
            'Acetoacetate',
            'β-Hydroxybutyrate',
            'Acetone',
            'Acetyl-CoA',
        ]),
        'answer'      => 'Acetoacetate',
        'explanation' => 'Nitroprusside-based Trinder reaction detects acetoacetate forming a colored complex.',
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

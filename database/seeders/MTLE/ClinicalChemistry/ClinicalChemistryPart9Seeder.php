<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Which analyte uses the hexokinase/glucose-6-phosphate dehydrogenase coupled method for measurement?',
        'choices'     => json_encode([
            'Glucose',
            'Lactate',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Hexokinase phosphorylates glucose; G6PD oxidizes G6P, producing NADPH measured at 340 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which method measures serum galactose using galactose oxidase?',
        'choices'     => json_encode([
            'GAOX-PAP method',
            'Hexokinase method',
            'Chromatography',
            'Colorimetric diazo',
        ]),
        'answer'      => 'GAOX-PAP method',
        'explanation' => 'Galactose oxidase produces H₂O₂ from galactose, coupled with peroxidase to form a chromogen.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte is determined by the enzymatic creatininase assay?',
        'choices'     => json_encode([
            'Creatinine',
            'Urea',
            'Uric acid',
            'Bilirubin',
        ]),
        'answer'      => 'Creatinine',
        'explanation' => 'Creatininase hydrolyzes creatinine to creatine then to sarcosine, leading to detectable H₂O₂.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte uses the Trinder reaction in uric acid assays?',
        'choices'     => json_encode([
            'Hydrogen peroxide from uricase',
            'Uric acid directly',
            'Allantoin',
            'Xanthine',
        ]),
        'answer'      => 'Hydrogen peroxide from uricase',
        'explanation' => 'Uricase oxidizes uric acid to allantoin and H₂O₂, which reacts in a Trinder dye formation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which interference is removed by addition of catalase in bilirubin assays?',
        'choices'     => json_encode([
            'Peroxide',
            'Lipemia',
            'Hemolysis',
            'Protein',
        ]),
        'answer'      => 'Peroxide',
        'explanation' => 'Catalase decomposes H₂O₂, preventing interference in diazo bilirubin measurements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte is measured by the Nessler reaction in clinical chemistry?',
        'choices'     => json_encode([
            'Ammonia',
            'Urea',
            'Creatinine',
            'Glucose',
        ]),
        'answer'      => 'Ammonia',
        'explanation' => 'Nessler reagent reacts with ammonia to produce a colored mercuric amido-iodide complex.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte uses enzymatic galactose dehydrogenase with NADP+ detection?',
        'choices'     => json_encode([
            'Galactose',
            'Glucose',
            'Lactate',
            'Urea',
        ]),
        'answer'      => 'Galactose',
        'explanation' => 'Galactose dehydrogenase oxidizes galactose producing NADPH measured at 340 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte is measured by reflectance photometry on dipsticks for ketones?',
        'choices'     => json_encode([
            'Acetoacetate',
            'Beta-hydroxybutyrate',
            'Acetone',
            'Total ketones',
        ]),
        'answer'      => 'Acetoacetate',
        'explanation' => 'Dipsticks contain nitroprusside reagent reacting with acetoacetate to produce a color read by reflectance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte interference is minimized by using kinetic endpoint method?',
        'choices'     => json_encode([
            'Sample turbidity',
            'pH drift',
            'Temperature variation',
            'Reagent lot variation',
        ]),
        'answer'      => 'Sample turbidity',
        'explanation' => 'Kinetic endpoint measures change over time, reducing static turbidity interference.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte uses ferrozine in colorimetric assays?',
        'choices'     => json_encode([
            'Iron',
            'Magnesium',
            'Calcium',
            'Zinc',
        ]),
        'answer'      => 'Iron',
        'explanation' => 'Ferrozine forms a stable magenta complex with Fe2+ measured at 562 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte measurement requires acid-washed tubes?',
        'choices'     => json_encode([
            'Trace metals',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Trace metals',
        'explanation' => 'Acid-washed tubes prevent metal contamination for accurate trace element analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte is quantified by nephelometry in immunoassays?',
        'choices'     => json_encode([
            'Immunoglobulins',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'      => 'Immunoglobulins',
        'explanation' => 'Nephelometry measures light scatter from antigen-antibody complexes for protein quantification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte requires cooling and acidification to prevent glycolytic loss?',
        'choices'     => json_encode([
            'Glucose',
            'Urea',
            'Creatinine',
            'Cholesterol',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Cooling and fluoride/oxalate tubes inhibit glycolysis to preserve glucose concentration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte uses the salicylate method for protein measurement?',
        'choices'     => json_encode([
            'Albumin',
            'Total protein',
            'Globulin',
            'Enzymes',
        ]),
        'answer'      => 'Albumin',
        'explanation' => 'Bromocresol green is more common; salicylate method also measures albumin specifically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte uses dry reagent reflectance for point-of-care testing?',
        'choices'     => json_encode([
            'Glucose',
            'Cholesterol',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'POC glucose meters use dry reagent strips and reflectance photometry for rapid results.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte requires measurement at 700 nm to avoid hemoglobin interference?',
        'choices'     => json_encode([
            'Bilirubin',
            'Glucose',
            'Creatinine',
            'Urea',
        ]),
        'answer'      => 'Bilirubin',
        'explanation' => 'Measuring at a higher wavelength minimizes hemoglobin absorption overlap.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte uses atomic absorption spectroscopy in clinical labs?',
        'choices'     => json_encode([
            'Calcium',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Calcium',
        'explanation' => 'AAS measures metals like calcium by their characteristic absorption in a flame.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte interference is minimized by kinetic rate methods?',
        'choices'     => json_encode([
            'Static turbidity',
            'pH changes',
            'Temperature shifts',
            'Substrate depletion',
        ]),
        'answer'      => 'Static turbidity',
        'explanation' => 'Rate methods measure change over time, reducing impact of initial turbidity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which analyte uses a reference method based on isotope dilution mass spectrometry?',
        'choices'     => json_encode([
            'Creatinine',
            'Glucose',
            'Urea',
            'Cholesterol',
        ]),
        'answer'      => 'Creatinine',
        'explanation' => 'IDMS is the gold-standard reference for creatinine due to high specificity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 9,
        'question'    => 'Which parameter is critical for enzymatic assays to ensure linearity?',
        'choices'     => json_encode([
            'Substrate concentration',
            'Light path length',
            'Reagent color',
            'Buffer composition',
        ]),
        'answer'      => 'Substrate concentration',
        'explanation' => 'Ensuring excess substrate maintains linear initial rate proportional to enzyme activity.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart8Seeder extends Seeder
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
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte is measured by the enzymatic glucose dehydrogenase method using NAD⁺?',
        'choices'    => json_encode([
            'Glucose',
            'Fructose',
            'Galactose',
            'Lactate',
        ]),
        'answer'     => 'Glucose',
        'explanation'=> 'Glucose dehydrogenase specifically oxidizes glucose to gluconolactone with NAD⁺ reduction.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which reagent is used in the dipstick method for urinary protein screening?',
        'choices'    => json_encode([
            'Tetramethylbenzidine',
            'Bromothymol blue',
            'Methyl red',
            'Phenol red',
        ]),
        'answer'     => 'Tetramethylbenzidine',
        'explanation'=> 'TMB on dipsticks reacts with protein to yield a color change proportional to protein concentration.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which method quantifies serum osmolality by measuring freezing point depression?',
        'choices'    => json_encode([
            'Cryoscopic osmometry',
            'Vapor pressure osmometry',
            'Refractometry',
            'Freezing point elevation',
        ]),
        'answer'     => 'Cryoscopic osmometry',
        'explanation'=> 'Cryoscopic osmometry measures the freezing point depression of a solution for osmolality.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte is measured by the Biuret reaction?',
        'choices'    => json_encode([
            'Total protein',
            'Albumin',
            'Globulin',
            'Peptides',
        ]),
        'answer'     => 'Total protein',
        'explanation'=> 'Biuret reagent reacts with peptide bonds to form a violet complex proportional to total protein.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which enzyme is used in the enzymatic uric acid assay?',
        'choices'    => json_encode([
            'Uricase',
            'Urease',
            'Xanthine oxidase',
            'Peroxidase',
        ]),
        'answer'     => 'Uricase',
        'explanation'=> 'Uricase oxidizes uric acid to allantoin and H₂O₂, which is quantified colorimetrically.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which test principle uses ion-selective electrodes for sodium measurement?',
        'choices'    => json_encode([
            'Potentiometry',
            'Conductimetry',
            'Amperometry',
            'Photometry',
        ]),
        'answer'     => 'Potentiometry',
        'explanation'=> 'Ion-selective electrodes measure the potential difference created by selective ion membranes for sodium.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which interference is minimized by ultracentrifugation prior to chemistry assays?',
        'choices'    => json_encode([
            'Lipemia',
            'Hemolysis',
            'Icterus',
            'Turbidity',
        ]),
        'answer'     => 'Lipemia',
        'explanation'=> 'Ultracentrifugation removes lipid layer, reducing turbidity from lipemia before assays.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte is measured by the Jaffé reaction?',
        'choices'    => json_encode([
            'Creatinine',
            'Uric acid',
            'Urea',
            'Glucose',
        ]),
        'answer'     => 'Creatinine',
        'explanation'=> 'Creatinine forms a red-orange complex with picrate in alkaline medium (Jaffé reaction).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which reagent is used in the Trinder reaction for cholesterol testing?',
        'choices'    => json_encode([
            '4-Aminoantipyrine and phenol',
            'Phosphomolybdate',
            'Bromocresol green',
            'Benzidine',
        ]),
        'answer'     => '4-Aminoantipyrine and phenol',
        'explanation'=> 'Cholesterol oxidase produces H₂O₂, which participates in Trinder reaction to form quinoneimine dye.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte assay uses benzidine reagent historically but now replaced for safety reasons?',
        'choices'    => json_encode([
            'Glucose peroxidase test',
            'Protein electrophoresis',
            'Uric acid assay',
            'Chloride titration',
        ]),
        'answer'     => 'Glucose peroxidase test',
        'explanation'=> 'Benzidine was used for peroxide detection in glucose assays but replaced due to carcinogenicity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which enzyme is inhibited by fluoride in glycolysis inhibition tubes?',
        'choices'    => json_encode([
            'Enolase',
            'Hexokinase',
            'Phosphofructokinase',
            'Pyruvate kinase',
        ]),
        'answer'     => 'Enolase',
        'explanation'=> 'Fluoride inhibits enolase, halting glycolysis and preserving glucose in samples.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte is quantified by nephelometry in immunology panels?',
        'choices'    => json_encode([
            'Immunoglobulins',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'     => 'Immunoglobulins',
        'explanation'=> 'Nephelometry measures light scatter by antigen-antibody complexes, commonly for immunoglobulins.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte uses hexokinase and glucose-6-phosphate dehydrogenase sequentially for measurement?',
        'choices'    => json_encode([
            'Glucose',
            'Lactate',
            'Uric acid',
            'Creatinine',
        ]),
        'answer'     => 'Glucose',
        'explanation'=> 'Hexokinase converts glucose to G6P, then G6PD oxidizes G6P with NADPH production measured at 340 nm.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte measurement uses the Beckman Coulter au analyzer dry slide technology?',
        'choices'    => json_encode([
            'Bilirubin',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'     => 'Bilirubin',
        'explanation'=> 'Dry slide diazo method on AU analyzer measures bilirubin by reflectance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte interference is corrected by addition of uricase in creatinine assays?',
        'choices'    => json_encode([
            'Uric acid',
            'Glucose',
            'Lipids',
            'Proteins',
        ]),
        'answer'     => 'Uric acid',
        'explanation'=> 'Uricase removes uric acid, preventing interference in creatinine measurements.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte measurement uses the turbidimetric benzethonium chloride method?',
        'choices'    => json_encode([
            'Phosphate',
            'Chloride',
            'Calcium',
            'Magnesium',
        ]),
        'answer'     => 'Phosphate',
        'explanation'=> 'Benzethonium chloride precipitates phosphomolybdate complex for phosphate measurement by turbidity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte requires acid-washed tubes for trace element analysis?',
        'choices'    => json_encode([
            'Lead',
            'Glucose',
            'Cholesterol',
            'Urea',
        ]),
        'answer'     => 'Lead',
        'explanation'=> 'Acid-washed tubes remove metal contamination for accurate trace element analysis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte measurement uses enzymatic glycerol kinase and GPO for triglycerides?',
        'choices'    => json_encode([
            'Triglycerides',
            'Phospholipids',
            'Cholesterol esters',
            'Free fatty acids',
        ]),
        'answer'     => 'Triglycerides',
        'explanation'=> 'Glycerol kinase phosphorylates glycerol then GPO produces H₂O₂ for colorimetric detection of triglycerides.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which analyte is measured by the enzymatic diazotization method after nitration?',
        'choices'    => json_encode([
            'Nitrite in nitrite test',
            'Glucose',
            'Urea',
            'Cholesterol',
        ]),
        'answer'     => 'Nitrite in nitrite test',
        'explanation'=> 'Nitrite reacts with sulfanilic acid then couples with diaminobenzene to form azo dye measured colorimetrically.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 32,
        'part'       => 8,
        'question'   => 'Which parameter is critical for maintaining enzyme activity in assays?',
        'choices'    => json_encode([
            'Temperature control',
            'Light protection',
            'pH maintenance',
            'Reagent freshness',
        ]),
        'answer'     => 'Temperature control',
        'explanation'=> 'Maintaining optimal temperature ensures consistent enzyme kinetics and assay reproducibility.',
        'created_at' => $now,
        'updated_at' => $now,
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

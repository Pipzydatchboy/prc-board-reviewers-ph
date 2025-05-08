<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Which reagent is used in the Trinder reaction for glucose testing?',
        'choices'     => json_encode([
            '4-Aminoantipyrine and phenol',
            'Folin–Ciocalteu reagent',
            'Dinitrophenylhydrazine',
            'Bromocresol green',
        ]),
        'answer'      => '4-Aminoantipyrine and phenol',
        'explanation' => 'The Trinder reaction couples H₂O₂ from glucose oxidase with 4-AAP and phenol to form a quinoneimine dye.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which analyte is directly measured by the hexokinase method?',
        'choices'     => json_encode([
            'Glucose-6-phosphate',
            'Glucose',
            'Fructose-6-phosphate',
            'Pyruvate',
        ]),
        'answer'      => 'Glucose-6-phosphate',
        'explanation' => 'Hexokinase phosphorylates glucose to G6P, which is then oxidized producing NADPH measured at 340 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which substance competes with bilirubin in the diazo reaction leading to negative interference?',
        'choices'     => json_encode([
            'Ascorbic acid',
            'Hemoglobin',
            'Triglycerides',
            'Albumin',
        ]),
        'answer'      => 'Ascorbic acid',
        'explanation' => 'Ascorbic acid reduces the diazonium salt, diminishing color formation and underestimating bilirubin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'What is the principle of the alkaline phosphatase assay using p-NPP?',
        'choices'     => json_encode([
            'Hydrolysis of p-nitrophenyl phosphate to p-nitrophenol',
            'Oxidation of p-nitrophenol',
            'Reduction of p-nitrophenol',
            'Complex formation with ammonium molybdate',
        ]),
        'answer'      => 'Hydrolysis of p-nitrophenyl phosphate to p-nitrophenol',
        'explanation' => 'ALP catalyzes cleavage of p-NPP yielding yellow p-nitrophenol measured at 405 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which analyte is assessed by the Jendrassik–Grof method?',
        'choices'     => json_encode([
            'Total bilirubin',
            'Albumin',
            'Glucose',
            'Creatinine',
        ]),
        'answer'      => 'Total bilirubin',
        'explanation' => 'Jendrassik–Grof uses diazotized sulfanilic acid with accelerators for bilirubin measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which enzyme catalyzes the first reaction in the triglyceride GPO assay?',
        'choices'     => json_encode([
            'Lipase',
            'Glycerol kinase',
            'Glycerol phosphate oxidase',
            'Lipoprotein lipase',
        ]),
        'answer'      => 'Lipase',
        'explanation' => 'Lipase hydrolyzes triglycerides to glycerol and free fatty acids, initiating the GPO assay.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which buffer system is commonly used in HPLC amino acid analysis?',
        'choices'     => json_encode([
            'Sodium phosphate buffer',
            'Acetate buffer',
            'Tris-HCl buffer',
            'Glycine buffer',
        ]),
        'answer'      => 'Sodium phosphate buffer',
        'explanation' => 'Phosphate buffers maintain pH stability and compatibility with reversed-phase columns in amino acid analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'What is the principle of the urease-GLDH method for urea measurement?',
        'choices'     => json_encode([
            'Urease hydrolyzes urea; GLDH consumes NADH in ammonium detection',
            'Direct color formation with diacetyl monoxime',
            'Conductimetric measurement of ammonium',
            'Potentiometric measurement of bicarbonate',
        ]),
        'answer'      => 'Urease hydrolyzes urea; GLDH consumes NADH in ammonium detection',
        'explanation' => 'The coupled enzymatic reactions allow spectrophotometric quantification of urea.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which chromogen is used in the Nessler reaction for ammonia determination?',
        'choices'     => json_encode([
            'Iodo-mercuric compound forming a yellow complex',
            'Pink azo dye',
            'Blue copper complex',
            'Red ferricyanide complex',
        ]),
        'answer'      => 'Iodo-mercuric compound forming a yellow complex',
        'explanation' => 'Nessler reagent reacts with ammonia to yield a colored complex measured spectrophotometrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which assay measures nonesterified fatty acids (NEFA) in serum?',
        'choices'     => json_encode([
            'Acyl-CoA synthetase coupled method',
            'Triglyceride GPO method',
            'Total cholesterol colorimetric assay',
            'Phospholipid enzymatic assay',
        ]),
        'answer'      => 'Acyl-CoA synthetase coupled method',
        'explanation' => 'Acyl-CoA synthetase activates NEFA, leading to NADH production measurable spectrophotometrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'What is the principle of the Biuret reaction for total protein?',
        'choices'     => json_encode([
            'Copper ions form violet complexes with peptide bonds',
            'Copper reduces peptide bonds to generate color',
            'Proteins precipitate and scatter light',
            'Proteins react with biuret to form yellow complex',
        ]),
        'answer'      => 'Copper ions form violet complexes with peptide bonds',
        'explanation' => 'Biuret reaction is based on formation of colored complex between copper and peptide bonds at alkaline pH.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which isoenzyme assay is used to distinguish hepatic from bone alkaline phosphatase?',
        'choices'     => json_encode([
            'Heat inactivation test',
            'Electrophoresis',
            'ELISA',
            'Nephelometry',
        ]),
        'answer'      => 'Heat inactivation test',
        'explanation' => 'Bone ALP is heat labile; hepatic ALP retains activity, allowing differentiation by heating.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which method uses reflectance photometry on dry slides for electrolyte measurement?',
        'choices'     => json_encode([
            'Dry chemistry cartridge method',
            'Ion-selective electrode wet chemistry',
            'Spectrophotometric cuvette assay',
            'Turbidimetric assay',
        ]),
        'answer'      => 'Dry chemistry cartridge method',
        'explanation' => 'Dry slide assays use multilayer films that change color; reflectance photometry quantifies ionic concentration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which analyte is measured by the Salkowski test?',
        'choices'     => json_encode([
            'Total cholesterol',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Total cholesterol',
        'explanation' => 'Salkowski reaction uses acetic anhydride and sulfuric acid to form colored complex with cholesterol.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which IFCC reference method condition is critical for ALT assay?',
        'choices'     => json_encode([
            '37°C incubation and pyridoxal-5-phosphate activation',
            '25°C without cofactors',
            '45°C with EDTA',
            '15°C in presence of chloride',
        ]),
        'answer'      => '37°C incubation and pyridoxal-5-phosphate activation',
        'explanation' => 'IFCC standardizes ALT assay at 37°C with pyridoxal-5-phosphate as coenzyme for accurate results.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which interference affects the hexokinase glucose assay?',
        'choices'     => json_encode([
            'Hemolysis releasing NADH-consuming enzymes',
            'Lipemia causing turbidity',
            'Icterus causing spectral overlap',
            'High protein binding',
        ]),
        'answer'      => 'Hemolysis releasing NADH-consuming enzymes',
        'explanation' => 'Hemolysis releases G6PD and other enzymes that consume NADH, falsely lowering readings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which chromogenic substrate is used in the CK-MB immunoinhibition method?',
        'choices'     => json_encode([
            'N-acetyl-L-tyrosine ethyl ester (ATE)',
            'p-Nitrophenyl phosphate',
            '4-Aminoantipyrine',
            '5,5’-Dithiobis-(2-nitrobenzoic acid)',
        ]),
        'answer'      => 'N-acetyl-L-tyrosine ethyl ester (ATE)',
        'explanation' => 'ATE is selectively hydrolyzed by CK-MB after inhibition of other isoenzymes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which enzyme assay uses immunoturbidimetric method to quantify haptoglobin?',
        'choices'     => json_encode([
            'Haptoglobin immunoturbidimetry',
            'Haptoglobin precipitation with ammonium sulfate',
            'Haptoglobin enzymatic activity',
            'Haptoglobin electrophoresis',
        ]),
        'answer'      => 'Haptoglobin immunoturbidimetry',
        'explanation' => 'Immunoturbidimetry measures antigen-antibody complexes of haptoglobin as turbidity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'Which interference leads to false elevation of direct bilirubin in automated assays?',
        'choices'     => json_encode([
            'Lipemia',
            'Hemolysis',
            'Icterus',
            'Drugs forming azo-dyes',
        ]),
        'answer'      => 'Drugs forming azo-dyes',
        'explanation' => 'Certain drugs produce colored metabolites that react with diazo reagents, increasing apparent direct bilirubin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 2,
        'question'    => 'What is the reference method for serum creatinine measurement?',
        'choices'     => json_encode([
            'Isotope dilution mass spectrometry (IDMS)',
            'Jaffe reaction',
            'Enzymatic creatininase',
            'Gas chromatography',
        ]),
        'answer'      => 'Isotope dilution mass spectrometry (IDMS)',
        'explanation' => 'IDMS is the gold standard reference for creatinine due to high specificity and accuracy.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

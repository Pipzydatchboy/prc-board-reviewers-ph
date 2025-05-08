<?php

namespace Database\Seeders\MTLE\ClinicalChemistry;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalChemistryPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which enzymatic method measures serum triglycerides via glycerol-3-phosphate oxidase?',
        'choices'     => json_encode([
            'GPO-PAP method',
            'Beta-oxidation method',
            'Jendrassik method',
            'Folin-Wu method',
        ]),
        'answer'      => 'GPO-PAP method',
        'explanation' => 'GPO-PAP couples glycerol-3-phosphate oxidase/H₂O₂ with peroxidase for color development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which reagent is used in the Folin-Ciocalteu method for phenolic compound measurement?',
        'choices'     => json_encode([
            'Phosphomolybdate-phosphotungstate',
            'Ninhydrin',
            'Diazonium salt',
            'Coomassie blue',
        ]),
        'answer'      => 'Phosphomolybdate-phosphotungstate',
        'explanation' => 'Folin-Ciocalteu reagent reacts with phenols to yield blue complex measured at 750 nm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which method is gold standard for serum osmolality measurement?',
        'choices'     => json_encode([
            'Freezing point depression',
            'Vapor pressure osmometry',
            'Refractometry',
            'Cryoscopic method',
        ]),
        'answer'      => 'Freezing point depression',
        'explanation' => 'Freezing point depression accurately measures osmolality by lowering freezing temperature.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which assay principle measures serum iron with ferrozine?',
        'choices'     => json_encode([
            'Colorimetric ferrozine complexation',
            'Ion-selective electrode',
            'Enzymatic oxidation',
            'Nephelometry',
        ]),
        'answer'      => 'Colorimetric ferrozine complexation',
        'explanation' => 'Ferrozine forms magenta complex with Fe²⁺ measured at 562 nm for iron quantification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'What matrix is used in ion-selective electrodes for potassium measurement?',
        'choices'     => json_encode([
            'Valinomycin membrane',
            'Polyvinyl chloride film',
            'Glass membrane',
            'Mercuric sulfide layer',
        ]),
        'answer'      => 'Valinomycin membrane',
        'explanation' => 'Valinomycin provides high selectivity for K⁺ in ISE membranes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which method quantifies serum phosphate using ammonium molybdate?',
        'choices'     => json_encode([
            'Colorimetric molybdate method',
            'Enzymatic oxidation',
            'Ion chromatography',
            'Atomic absorption spectroscopy',
        ]),
        'answer'      => 'Colorimetric molybdate method',
        'explanation' => 'Phosphate reacts with ammonium molybdate under acidic conditions to form a blue complex.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which analyte requires acidification to prevent glycolysis in blood samples?',
        'choices'     => json_encode([
            'Glucose',
            'Urea',
            'Creatinine',
            'Cholesterol',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Acidification with fluoride tubes inhibits glycolysis, preserving glucose levels.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which enzyme is inhibited by fluoride in glucose sample tubes?',
        'choices'     => json_encode([
            'Enolase',
            'Hexokinase',
            'Glucose oxidase',
            'Phosphofructokinase',
        ]),
        'answer'      => 'Enolase',
        'explanation' => 'Fluoride inhibits enolase, blocking glycolysis pathway and preserving glucose.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which analyte interference is corrected by measuring blank in endpoint assays?',
        'choices'     => json_encode([
            'Sample turbidity',
            'Enzyme activity',
            'Ion concentration',
            'Buffer pH',
        ]),
        'answer'      => 'Sample turbidity',
        'explanation' => 'Blank correction accounts for nonspecific absorbance from turbidity before reaction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which reagent stabilizes bilirubin in collected samples?',
        'choices'     => json_encode([
            'Ascorbic acid',
            'Sodium fluoride',
            'EDTA',
            'Heparin',
        ]),
        'answer'      => 'Ascorbic acid',
        'explanation' => 'Ascorbic acid prevents oxidation of bilirubin in specimen tubes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which method is used to measure serum magnesium levels?',
        'choices'     => json_encode([
            'Calmagite colorimetric method',
            'Atomic absorption spectroscopy',
            'Enzymatic ATPase assay',
            'Ion-selective electrode',
        ]),
        'answer'      => 'Calmagite colorimetric method',
        'explanation' => 'Calmagite forms colored complex with magnesium at alkaline pH for spectrophotometric measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which analyte is measured by the deproteinization method with perchloric acid?',
        'choices'     => json_encode([
            'Lactate',
            'Glucose',
            'Urea',
            'Creatinine',
        ]),
        'answer'      => 'Lactate',
        'explanation' => 'Perchloric acid deproteinizes samples before enzymatic lactate measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which method is used for point-of-care glucose testing outside the lab?',
        'choices'     => json_encode([
            'Reflectance photometry with glucose oxidase strips',
            'Hexokinase reference method',
            'ITC titration',
            'Nephelometry',
        ]),
        'answer'      => 'Reflectance photometry with glucose oxidase strips',
        'explanation' => 'POC meters use reflectance photometry on enzyme-impregnated strips for rapid glucose readings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which analyte measurement uses tandem mass spectrometry in clinical chemistry?',
        'choices'     => json_encode([
            'Vitamin D metabolites',
            'Glucose',
            'Cholesterol',
            'Bilirubin',
        ]),
        'answer'      => 'Vitamin D metabolites',
        'explanation' => 'LC-MS/MS quantifies multiple vitamin D metabolites with high specificity and sensitivity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which buffer is used in immunoassays to reduce nonspecific binding?',
        'choices'     => json_encode([
            'PBS with Tween-20',
            'Tris-HCl only',
            'Glycine buffer',
            'Carbonate buffer',
        ]),
        'answer'      => 'PBS with Tween-20',
        'explanation' => 'Tween-20 reduces nonspecific protein interactions in immunoassays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which analyte requirement uses acid-washed tubes to prevent contamination?',
        'choices'     => json_encode([
            'Trace elements (e.g., copper)',
            'Glucose',
            'Creatinine',
            'LDH',
        ]),
        'answer'      => 'Trace elements (e.g., copper)',
        'explanation' => 'Acid-washed containers eliminate metal contamination in trace element analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which deproteinization agent is preferred for measurement of free fatty acids?',
        'choices'     => json_encode([
            'Perchloric acid',
            'Acetone',
            'Ethanol',
            'Ammonium sulfate',
        ]),
        'answer'      => 'Perchloric acid',
        'explanation' => 'Perchloric acid precipitates proteins effectively, allowing NEFA analysis in supernatant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which analyte is measured by the enzymatic hexokinase method in whole blood?',
        'choices'     => json_encode([
            'Glucose',
            'Cholesterol',
            'Uric acid',
            'Total protein',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Whole blood glucose meters utilize hexokinase-based strips or enzymes for accurate readings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which sample stability issue is prevented by prompt centrifugation?',
        'choices'     => json_encode([
            'Potassium release from cells',
            'Glucose decrease',
            'Hemoglobin oxidation',
            'Bilirubin degradation',
        ]),
        'answer'      => 'Potassium release from cells',
        'explanation' => 'Delayed centrifugation causes cell lysis and release of intracellular potassium, falsely elevating values.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 32,
        'part'        => 5,
        'question'    => 'Which analyte measurement uses nephelometry for complement C3 quantification?',
        'choices'     => json_encode([
            'Complement C3 levels',
            'Immunoglobulin G',
            'Glucose',
            'Serum iron',
        ]),
        'answer'      => 'Complement C3 levels',
        'explanation' => 'Nephelometry measures light scatter from antigen-antibody complexes for complement C3.',
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

<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart9Seeder extends Seeder
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
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which crystal is pathognomonic for cystinuria and shows a faint pale appearance?',
        'choices'    => json_encode([
            'Cystine',
            'Uric acid',
            'Calcium oxalate',
            'Struvite',
        ]),
        'answer'     => 'Cystine',
        'explanation'=> 'Cystine crystals are colorless, hexagonal plates and diagnostic of cystinuria.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which pad detects ketones using nitroprusside reaction and is specific for acetoacetate?',
        'choices'    => json_encode([
            'Ketone pad',
            'Glucose pad',
            'Protein pad',
            'Blood pad',
        ]),
        'answer'     => 'Ketone pad',
        'explanation'=> 'The nitroprusside reaction on the ketone pad detects acetoacetate, producing a purple color.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which technique is used to confirm hematuria versus myoglobinuria?',
        'choices'    => json_encode([
            'Centrifugation and examination of supernatant',
            'Dipstick nitrite test',
            'Refractometry',
            'Gram stain',
        ]),
        'answer'     => 'Centrifugation and examination of supernatant',
        'explanation'=> 'Hematuria clears on centrifugation, whereas myoglobinuria yields a colored supernatant.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which microscopic finding is characteristic of nephrotic syndrome?',
        'choices'    => json_encode([
            'Fatty casts',
            'Waxy casts',
            'RBC casts',
            'WBC casts',
        ]),
        'answer'     => 'Fatty casts',
        'explanation'=> 'Fatty casts are composed of lipid droplets and indicate heavy proteinuria in nephrotic syndrome.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which dipstick test pad uses tetrabromophenol blue to detect proteins?',
        'choices'    => json_encode([
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
            'Blood pad',
        ]),
        'answer'     => 'Protein pad',
        'explanation'=> 'Tetrabromophenol blue on the protein pad changes from yellow to green-blue in presence of albumin.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which technique identifies yeast forms in urine sediment?',
        'choices'    => json_encode([
            'Calcofluor white fluorescence',
            'Gram stain',
            'Papanicolaou stain',
            'Sternheimer-Malbin stain',
        ]),
        'answer'     => 'Calcofluor white fluorescence',
        'explanation'=> 'Calcofluor white binds fungal cell walls and fluoresces under UV, highlighting yeast in sediment.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which pad on dipstick detects leukocyte esterase by indoxyl ester hydrolysis?',
        'choices'    => json_encode([
            'Leukocyte esterase pad',
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
        ]),
        'answer'     => 'Leukocyte esterase pad',
        'explanation'=> 'Leukocyte esterase pad contains indoxyl esters that release a purple color when hydrolyzed by WBC esterases.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which crystal appears as envelope-shaped in acidic urine?',
        'choices'    => json_encode([
            'Calcium oxalate dihydrate',
            'Triple phosphate',
            'Cystine',
            'Uric acid',
        ]),
        'answer'     => 'Calcium oxalate dihydrate',
        'explanation'=> 'Envelope-shaped calcium oxalate dihydrate crystals occur in acidic to neutral urine.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which analyte is measured by urease-based conductivity method?',
        'choices'    => json_encode([
            'Urea',
            'Protein',
            'Glucose',
            'Ketones',
        ]),
        'answer'     => 'Urea',
        'explanation'=> 'Urease hydrolyzes urea into ammonium ions, altering conductivity for quantitation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which cast type indicates chronic renal failure with slow urine flow?',
        'choices'    => json_encode([
            'Waxy casts',
            'Fatty casts',
            'Hyaline casts',
            'RBC casts',
        ]),
        'answer'     => 'Waxy casts',
        'explanation'=> 'Waxy casts are highly refractile with sharp edges, indicative of chronic stasis in renal tubules.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which microscopic method is best for detecting crystal birefringence?',
        'choices'    => json_encode([
            'Polarized light microscopy',
            'Brightfield microscopy',
            'Phase-contrast microscopy',
            'Darkfield microscopy',
        ]),
        'answer'     => 'Polarized light microscopy',
        'explanation'=> 'Polarized light reveals birefringent crystals such as uric acid and lipids in urine sediment.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which pad uses a diazonium coupling reaction to detect bilirubin?',
        'choices'    => json_encode([
            'Bilirubin pad',
            'Protein pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'     => 'Bilirubin pad',
        'explanation'=> 'Bilirubin reacts with diazonium salt on the pad producing azobilirubin, a tan-purple color.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which pad is used for microalbumin detection for early diabetic nephropathy?',
        'choices'    => json_encode([
            'Microalbumin pad',
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
        ]),
        'answer'     => 'Microalbumin pad',
        'explanation'=> 'Microalbumin pads use immunochemical methods to detect albumin 30–300 mg/day.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which sediment finding is characteristic of acute tubular injury?',
        'choices'    => json_encode([
            'RTE casts',
            'Fatty casts',
            'WBC casts',
            'Struvite crystals',
        ]),
        'answer'     => 'RTE casts',
        'explanation'=> 'Renal tubular epithelial casts indicate acute tubular injury with sloughed cells.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which test differentiates glomerular from non-glomerular hematuria?',
        'choices'    => json_encode([
            'Evaluation of RBC morphology',
            'Dipstick protein test',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'     => 'Evaluation of RBC morphology',
        'explanation'=> 'Dysmorphic RBCs suggest glomerular hematuria; isomorphic RBCs suggest lower tract sources.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which pad can give false-negative glucose results in high ascorbic acid levels?',
        'choices'    => json_encode([
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'     => 'Glucose pad',
        'explanation'=> 'Ascorbic acid interferes with the glucose oxidase reaction causing false-negatives.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which sediment element indicates fungal infection beyond yeast forms?',
        'choices'    => json_encode([
            'Hyphal elements',
            'Bacterial rods',
            'WBC casts',
            'RBC casts',
        ]),
        'answer'     => 'Hyphal elements',
        'explanation'=> 'Hyphae in urine sediment indicate invasive fungal infection or contamination.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which indicator is used in protein pad that is most reactive to albumin?',
        'choices'    => json_encode([
            'Tetrabromophenol blue',
            'Bromothymol blue',
            'Nitroprusside',
            'Diazonium salt',
        ]),
        'answer'     => 'Tetrabromophenol blue',
        'explanation'=> 'Tetrabromophenol blue reagent pad reacts primarily with albumin for protein detection.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which microscopic characteristic differentiates hyaline versus granular casts?',
        'choices'    => json_encode([
            'Refractility and granule presence',
            'Color under polarized light',
            'Size of casts',
            'Cell inclusions',
        ]),
        'answer'     => 'Refractility and granule presence',
        'explanation'=> 'Hyaline casts are refractile and clear; granular casts show embedded granules.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 36,
        'part'       => 9,
        'question'   => 'Which pad uses sulfosalicylic acid to confirm protein precipitation?',
        'choices'    => json_encode([
            'SSA precipitation test',
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
        ]),
        'answer'     => 'SSA precipitation test',
        'explanation'=> 'SSA test visually confirms protein presence by precipitation independent of dipstick reaction.',
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

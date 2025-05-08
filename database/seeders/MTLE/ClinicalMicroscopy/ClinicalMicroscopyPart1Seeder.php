<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart1Seeder extends Seeder
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
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which crystal is commonly seen in acidic urine and is shaped like a coffin lid?',
        'choices'     => json_encode([
            'Calcium oxalate dihydrate',
            'Uric acid',
            'Triple phosphate',
            'Cystine',
        ]),
        'answer'      => 'Calcium oxalate dihydrate',
        'explanation' => 'Calcium oxalate dihydrate crystals are envelope- or coffin lid–shaped and occur in acidic to neutral urine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'What is the pH indicator used in Urinalysis reagent strips that changes color at pH around 6.0–7.6?',
        'choices'     => json_encode([
            'Bromothymol blue',
            'Phenol red',
            'Methyl orange',
            'Phenolphthalein',
        ]),
        'answer'      => 'Bromothymol blue',
        'explanation' => 'Bromothymol blue is used in pH pads and shifts from yellow (acid) to blue (alkaline) over the pH range 6.0–7.6.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which formed element in urine sediment indicates glomerular bleeding?',
        'choices'     => json_encode([
            'Dysmorphic red blood cells',
            'Hyaline casts',
            'Transitional epithelial cells',
            'Calcium phosphate crystals',
        ]),
        'answer'      => 'Dysmorphic red blood cells',
        'explanation' => 'Dysmorphic RBCs, often acanthocytes, suggest glomerular origin of hematuria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which urine protein test pad on reagent strip is most sensitive to albumin?',
        'choices'     => json_encode([
            'Protein pad (tetrabromophenol blue)',
            'Sulphosalicylic acid',
            'SSA cold precipitation',
            'Dipstick for globulins',
        ]),
        'answer'      => 'Protein pad (tetrabromophenol blue)',
        'explanation' => 'The dipstick protein pad uses tetrabromophenol blue which reacts primarily with albumin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which microscopic element is pathognomonic for acute pyelonephritis?',
        'choices'     => json_encode([
            'WBC casts',
            'RBC casts',
            'Epithelial casts',
            'Fatty casts',
        ]),
        'answer'      => 'WBC casts',
        'explanation' => 'White blood cell casts indicate renal parenchymal inflammation, as seen in pyelonephritis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'What reagent is used in reagent strips to detect nitrite in urine?',
        'choices'     => json_encode([
            'p-arsanilic acid + diazonium salt',
            'Nitroprusside',
            'Wesley tablet',
            'Bromocresol green',
        ]),
        'answer'      => 'p-arsanilic acid + diazonium salt',
        'explanation' => 'Nitrite pad uses p-arsanilic acid and a diazonium salt to form a pink azo dye in presence of nitrite.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which epithelial cell type in urine originates from the renal pelvis and calyces?',
        'choices'     => json_encode([
            'Transitional cells',
            'Squamous cells',
            'RPE cells',
            'Clue cells',
        ]),
        'answer'      => 'Transitional cells',
        'explanation' => 'Transitional epithelial cells line renal pelvis, ureters, bladder; occasional presence is normal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which cast is most specific for nephrotic syndrome?',
        'choices'     => json_encode([
            'Oval fat bodies',
            'Hyaline casts',
            'Waxy casts',
            'Granular casts',
        ]),
        'answer'      => 'Oval fat bodies',
        'explanation' => 'Oval fat bodies and fatty casts reflect lipiduria seen in nephrotic syndrome.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'What does a positive leukocyte esterase test on dipstick indicate?',
        'choices'     => json_encode([
            'Presence of pyuria',
            'Proteinuria',
            'Hematuria',
            'Glucosuria',
        ]),
        'answer'      => 'Presence of pyuria',
        'explanation' => 'Leukocyte esterase reflects WBC esterase activity, correlating with pyuria in infection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which chemical reagent is used for sulfosalicylic acid (SSA) protein precipitation test?',
        'choices'     => json_encode([
            '3% SSA solution',
            'Benedict’s solution',
            'Fehling’s solution',
            'Biuret reagent',
        ]),
        'answer'      => '3% SSA solution',
        'explanation' => 'SSA test uses 3% sulphosalicylic acid to precipitate all proteins for qualitative detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which tubular epithelial cell indicates acute tubular necrosis?',
        'choices'     => json_encode([
            'Renal tubular epithelial cells',
            'Transitional cells',
            'Squamous cells',
            'Leukocytes',
        ]),
        'answer'      => 'Renal tubular epithelial cells',
        'explanation' => 'RTE cells and casts indicate tubular damage as in acute tubular necrosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which sediment finding suggests urease-producing bacterial infection?',
        'choices'     => json_encode([
            'Triple phosphate crystals',
            'Calcium oxalate crystals',
            'Tyrosine crystals',
            'Cystine crystals',
        ]),
        'answer'      => 'Triple phosphate crystals',
        'explanation' => 'Triple phosphate (struvite) crystals form in alkaline urine from urease bacteria raising pH.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'What is the clinical significance of cylinduria (casts) in urine?',
        'choices'     => json_encode([
            'Renal tubular pathology',
            'Bladder outlet obstruction',
            'Prostatic hyperplasia',
            'Urethral stricture',
        ]),
        'answer'      => 'Renal tubular pathology',
        'explanation' => 'Casts form in renal tubules; their presence indicates intrarenal pathology.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which reagent strip test is prone to false positives with concentrated urine?',
        'choices'     => json_encode([
            'Protein',
            'Glucose',
            'Ketones',
            'Biliruмbin',
        ]),
        'answer'      => 'Protein',
        'explanation' => 'Highly concentrated urine can produce false-positive protein dipstick reactions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which urine sediment finding is characteristic of nephrolithiasis?',
        'choices'     => json_encode([
            'Crystals and RBCs',
            'WBC casts',
            'Bacteria only',
            'Mucus threads',
        ]),
        'answer'      => 'Crystals and RBCs',
        'explanation' => 'Urinary calculi often cause hematuria and crystal precipitation in sediment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'What color change on nitrite pad indicates a positive result?',
        'choices'     => json_encode([
            'White to pink',
            'Yellow to green',
            'Blue to yellow',
            'Orange to red',
        ]),
        'answer'      => 'White to pink',
        'explanation' => 'Nitrite pad turns pink when nitrite reacts with the pad reagents.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which crystal indicates ethylene glycol ingestion?',
        'choices'     => json_encode([
            'Calcium oxalate monohydrate',
            'Calcium phosphate',
            'Tyrosine',
            'Triple phosphate',
        ]),
        'answer'      => 'Calcium oxalate monohydrate',
        'explanation' => 'Monohydrate form in envelope or needle shape suggests oxalate load from ethylene glycol poisoning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which test on dipstick can detect hemoglobin and myoglobin equally?',
        'choices'     => json_encode([
            'Blood pad',
            'Protein pad',
            'Nitrite pad',
            'Leukocyte esterase',
        ]),
        'answer'      => 'Blood pad',
        'explanation' => 'The blood reagent pad detects peroxidase activity of hemoglobin and myoglobin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'What do glitter cells indicate in urine sediment?',
        'choices'     => json_encode([
            'Hypotonic urine',
            'Hypertonic urine',
            'Alkaline urine',
            'High proteinuria',
        ]),
        'answer'      => 'Hypotonic urine',
        'explanation' => 'Glitter cells are WBCs swollen in hypotonic urine showing Brownian movement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 36,
        'part'        => 1,
        'question'    => 'Which microscopic finding is indicative of renal glycosuria?',
        'choices'     => json_encode([
            'Glucose in urine without hyperglycemia',
            'Bacteria',
            'Epithelial cells',
            'Fat droplets',
        ]),
        'answer'      => 'Glucose in urine without hyperglycemia',
        'explanation' => 'Renal glycosuria presents with positive glucose dipstick but normal blood glucose levels.',
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

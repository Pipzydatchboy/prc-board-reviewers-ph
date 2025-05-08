<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart8Seeder extends Seeder
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
        'part'       => 8,
        'question'   => 'Which pad on the dipstick detects specific gravity through a polyelectrolyte?',
        'choices'    => json_encode([
            'SG pad (polyelectrolyte)',
            'pH pad',
            'Protein pad',
            'Nitrite pad',
        ]),
        'answer'     => 'SG pad (polyelectrolyte)',
        'explanation'=> 'The specific gravity pad contains a polyelectrolyte that changes pKa based on ion concentration, altering color.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which microscopic feature characterizes pyelonephritis?',
        'choices'    => json_encode([
            'WBC casts',
            'RBC casts',
            'Fatty casts',
            'Hyaline casts',
        ]),
        'answer'     => 'WBC casts',
        'explanation'=> 'White blood cell casts indicate inflammation within renal tubules, typical of pyelonephritis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which reagent strip test pad changes from yellow to green in alkaline urine?',
        'choices'    => json_encode([
            'pH pad',
            'Protein pad',
            'Glucose pad',
            'Ketone pad',
        ]),
        'answer'     => 'pH pad',
        'explanation'=> 'The pH pad uses double indicators that shift from yellow in acid to green in alkaline urine.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which microscopic element indicates distal tubular dysfunction when present?',
        'choices'    => json_encode([
            'Hyaline casts',
            'Waxy casts',
            'Broad casts',
            'Fatty casts',
        ]),
        'answer'     => 'Broad casts',
        'explanation'=> 'Broad casts form in dilated distal tubules and collecting ducts, indicating severe renal stasis/dysfunction.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which crystal is commonly seen in alkaline urine as “coffin lids”?',
        'choices'    => json_encode([
            'Triple phosphate',
            'Uric acid',
            'Cystine',
            'Calcium oxalate',
        ]),
        'answer'     => 'Triple phosphate',
        'explanation'=> 'Triple phosphate (struvite) crystals appear as coffin lid shapes in alkaline urine.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which pad uses diazotized sulfanilic acid for nitrite detection?',
        'choices'    => json_encode([
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
            'Blood pad',
        ]),
        'answer'     => 'Nitrite pad',
        'explanation'=> 'Nitrite pad contains diazotized sulfanilic acid that forms a pink azo dye with nitrite.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which microscopic finding indicates bile pigment in urine?',
        'choices'    => json_encode([
            'Yellow-brown granules',
            'Green crystals',
            'White casts',
            'Red blood cells',
        ]),
        'answer'     => 'Yellow-brown granules',
        'explanation'=> 'Bile pigment appears as yellow-brown granules in sediment and imparts greenish urine color.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which sediment component is pathognomonic of nephrotic syndrome?',
        'choices'    => json_encode([
            'Fatty casts',
            'RBC casts',
            'WBC casts',
            'Hyaline casts',
        ]),
        'answer'     => 'Fatty casts',
        'explanation'=> 'Fatty casts contain lipid droplets indicative of lipiduria in nephrotic syndrome.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which pad reacts with acetoacetate to form a purple color?',
        'choices'    => json_encode([
            'Ketone pad',
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
        ]),
        'answer'     => 'Ketone pad',
        'explanation'=> 'Ketone pad uses nitroprusside reaction with acetoacetate producing purple color.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which indicator is used in the bilirubin pad?',
        'choices'    => json_encode([
            'Diazonium salt',
            'Bromothymol blue',
            'Tetrabromophenol blue',
            'Nitroprusside',
        ]),
        'answer'     => 'Diazonium salt',
        'explanation'=> 'Bilirubin pad contains diazonium salt that couples with bilirubin to form colored azobilirubin.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which microscopy method enhances contrast for acellular casts?',
        'choices'    => json_encode([
            'Phase-contrast microscopy',
            'Darkfield microscopy',
            'Brightfield microscopy',
            'Polarized microscopy',
        ]),
        'answer'     => 'Phase-contrast microscopy',
        'explanation'=> 'Phase-contrast increases contrast of transparent structures like hyaline casts.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which component of urine is measured by enzymatic urease reaction?',
        'choices'    => json_encode([
            'Urea',
            'Protein',
            'Glucose',
            'Ketones',
        ]),
        'answer'     => 'Urea',
        'explanation'=> 'Urease hydrolyzes urea to ammonia, which is quantified by colorimetric or conductivity methods.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which pad differentiates albumin from other proteins?',
        'choices'    => json_encode([
            'Protein pad (tetrabromophenol blue)',
            'Urobilinogen pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'     => 'Protein pad (tetrabromophenol blue)',
        'explanation'=> 'Tetrabromophenol blue pad reacts primarily with albumin providing semi-quantitative protein measurement.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which sediment finding suggests heavy metal poisoning?',
        'choices'    => json_encode([
            'Dark pigmented granular casts',
            'Hyaline casts',
            'Fatty casts',
            'Waxy casts',
        ]),
        'answer'     => 'Dark pigmented granular casts',
        'explanation'=> 'Heavy metals can produce pigmented granular casts indicating tubular damage.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which pad uses glucose oxidase-peroxidase reaction?',
        'choices'    => json_encode([
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'     => 'Glucose pad',
        'explanation'=> 'Glucose pad uses glucose oxidase to produce hydrogen peroxide, then peroxidase-chromogen reaction.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which pad measures low-range albumin using immunochemical methods?',
        'choices'    => json_encode([
            'Microalbumin pad',
            'Protein pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'     => 'Microalbumin pad',
        'explanation'=> 'Microalbumin pad uses antibodies specific for albumin to detect small concentrations.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which analyzer uses laser-based scatter and fluorescence to identify cells?',
        'choices'    => json_encode([
            'UF-1000i',
            'Clinitek Atlas',
            'SediVue Dx',
            'Iris iQ200',
        ]),
        'answer'     => 'UF-1000i',
        'explanation'=> 'The UF-1000i uses laser scatter and fluorescence for rapid particle analysis in urine.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which microscopic feature indicates advanced chronic kidney disease?',
        'choices'    => json_encode([
            'Waxy casts',
            'RBC casts',
            'WBC casts',
            'Hyaline casts',
        ]),
        'answer'     => 'Waxy casts',
        'explanation'=> 'Waxy casts are rigid, refractile, and indicate prolonged urinary stasis in chronic kidney disease.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which pad can be interfered by high levels of ascorbic acid leading to false-negatives for multiple analytes?',
        'choices'    => json_encode([
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
            'Leukocyte esterase pad',
        ]),
        'answer'     => 'Nitrite pad',
        'explanation'=> 'Ascorbic acid reduces diazonium reactions causing false-negative nitrite pad readings.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 36,
        'part'       => 8,
        'question'   => 'Which sediment finding suggests glomerular hematuria rather than lower tract bleeding?',
        'choices'    => json_encode([
            'Dysmorphic RBCs',
            'Hyaline casts',
            'Leukocytes',
            'Squamous cells',
        ]),
        'answer'     => 'Dysmorphic RBCs',
        'explanation'=> 'Dysmorphic red blood cells indicate glomerular bleeding with mechanical damage to cells.',
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

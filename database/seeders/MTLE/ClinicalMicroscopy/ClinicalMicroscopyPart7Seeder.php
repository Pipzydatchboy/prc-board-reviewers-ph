<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart7Seeder extends Seeder
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
        'part'       => 7,
        'question'   => 'Which reagent pad detects urobilinogen via Ehrlich’s aldehyde reaction?',
        'choices'    => json_encode([
            'Urobilinogen pad',
            'Bilirubin pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'     => 'Urobilinogen pad',
        'explanation'=> 'Urobilinogen pad uses Ehrlich’s aldehyde reagent to form colored azodyes in presence of urobilinogen.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which cell type indicates bladder carcinoma when identified in urinary cytology?',
        'choices'    => json_encode([
            'Atypical urothelial cells',
            'Neutrophils',
            'Renal tubular epithelial cells',
            'Squamous cells',
        ]),
        'answer'     => 'Atypical urothelial cells',
        'explanation'=> 'Clusters of atypical urothelial cells with high N/C ratio are suggestive of bladder carcinoma.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which microscopic finding is diagnostic for acute tubular necrosis?',
        'choices'    => json_encode([
            'Renal tubular epithelial cell casts',
            'Hyaline casts',
            'WBC casts',
            'Fatty casts',
        ]),
        'answer'     => 'Renal tubular epithelial cell casts',
        'explanation'=> 'RTE cell casts indicate sloughing of tubular epithelial cells as seen in ATN.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which crystal type is found in patients with hereditary xanthinuria?',
        'choices'    => json_encode([
            'Xanthine crystals',
            'Calcium oxalate',
            'Uric acid',
            'Cystine',
        ]),
        'answer'     => 'Xanthine crystals',
        'explanation'=> 'Xanthine crystals are brownish and are seen in xanthinuria due to deficiency of xanthine oxidase.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which dipstick pad detects nitrite and indicates presence of gram-negative bacteria?',
        'choices'    => json_encode([
            'Nitrite pad',
            'Leukocyte esterase pad',
            'Protein pad',
            'Glucose pad',
        ]),
        'answer'     => 'Nitrite pad',
        'explanation'=> 'Nitrite pad detects conversion of nitrate to nitrite by gram-negative bacteria.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which cell type suggests contamination of the sample when abundant?',
        'choices'    => json_encode([
            'Squamous epithelial cells',
            'WBC casts',
            'RTE cells',
            'RBC casts',
        ]),
        'answer'     => 'Squamous epithelial cells',
        'explanation'=> 'High numbers of squamous cells indicate contamination from the urethra or skin.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which stain is optimal for differentiating fungal elements in urine sediment?',
        'choices'    => json_encode([
            'Calcofluor white',
            'Gram stain',
            'Wright stain',
            'Papanicolaou stain',
        ]),
        'answer'     => 'Calcofluor white',
        'explanation'=> 'Calcofluor white binds chitin in fungal cell walls, fluorescing under UV for detection.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which sediment appearance indicates prerenal azotemia due to dehydration?',
        'choices'    => json_encode([
            'Concentrated formed elements and increased specific gravity',
            'Dilute sediment and low specific gravity',
            'WBC casts',
            'Hyaline casts',
        ]),
        'answer'     => 'Concentrated formed elements and increased specific gravity',
        'explanation'=> 'Prerenal azotemia causes concentrated urine with high SG and increased sediment elements.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which dipstick parameter can be falsely elevated by chlorhexidine contamination?',
        'choices'    => json_encode([
            'Leukocyte esterase',
            'Protein',
            'Glucose',
            'Nitrite',
        ]),
        'answer'     => 'Leukocyte esterase',
        'explanation'=> 'Chlorhexidine has esterase activity that can cause false-positive leukocyte esterase results.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which analyte in urine is measured by conductivity after acidification?',
        'choices'    => json_encode([
            'Urea',
            'Protein',
            'Glucose',
            'Creatinine',
        ]),
        'answer'     => 'Urea',
        'explanation'=> 'Conductivity method measures ammonium ions after urease reaction with urea.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which phase-contrast microscopy feature enhances detection of hyaline casts?',
        'choices'    => json_encode([
            'Halo effect around casts',
            'Fluorescence',
            'Polar birefringence',
            'Dark background',
        ]),
        'answer'     => 'Halo effect around casts',
        'explanation'=> 'Phase-contrast creates halo effect improving contrast of nearly colorless hyaline casts.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which crystal is indicative of starvation or ketogenic diet?',
        'choices'    => json_encode([
            'Ketone bodies crystals',
            'Uric acid crystals',
            'Calcium oxalate crystals',
            'Tyrosine crystals',
        ]),
        'answer'     => 'Ketone bodies crystals',
        'explanation'=> 'Ketone crystals may form in starvation ketosis but are more typically detected by dipstick.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which pad is used for early detection of diabetic nephropathy?',
        'choices'    => json_encode([
            'Microalbumin pad',
            'Protein pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'     => 'Microalbumin pad',
        'explanation'=> 'Microalbumin pads detect low levels of albumin (30–300 mg/day) for early nephropathy diagnosis.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which sediment finding suggests interstitial nephritis?',
        'choices'    => json_encode([
            'Eosinophils',
            'RBC casts',
            'Fatty casts',
            'Tyrosine crystals',
        ]),
        'answer'     => 'Eosinophils',
        'explanation'=> 'Urinary eosinophils are seen in acute interstitial nephritis, often drug-induced.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which pad on dipstick uses sulfosalicylic acid to confirm proteinuria?',
        'choices'    => json_encode([
            'SSA confirmation test',
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
        ]),
        'answer'     => 'SSA confirmation test',
        'explanation'=> 'SSA precipitates proteins allowing visual confirmation of proteinuria independent of pH and SG.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which analyzer uses reflectance photometry for dipstick reading?',
        'choices'    => json_encode([
            'Clinitek Atlas',
            'UF-1000i',
            'SediVue Dx',
            'Iris iQ200',
        ]),
        'answer'     => 'Clinitek Atlas',
        'explanation'=> 'Clinitek Atlas uses reflectance photometry to read dipstick pads automatically.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which quality control measure ensures dipstick accuracy daily?',
        'choices'    => json_encode([
            'Use of control solutions',
            'Visual inspection only',
            'Weekly calibrations',
            'No control needed',
        ]),
        'answer'     => 'Use of control solutions',
        'explanation'=> 'Daily testing with positive and negative controls verifies dipstick reagent integrity.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which microscopic technique distinguishes lipid types in urine?',
        'choices'    => json_encode([
            'Polarized light microscopy',
            'Wright stain',
            'Phase-contrast',
            'Brightfield',
        ]),
        'answer'     => 'Polarized light microscopy',
        'explanation'=> 'Polarized light reveals birefringence of cholesterol vs triglyceride droplets (Maltese cross).',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which pad indicates positive bilirubin when it turns tan to purple?',
        'choices'    => json_encode([
            'Bilirubin pad',
            'Urobilinogen pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'     => 'Bilirubin pad',
        'explanation'=> 'Bilirubin pad turns tan to purple due to diazonium coupling reaction with bilirubin.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 36,
        'part'       => 7,
        'question'   => 'Which sediment finding indicates glomerular injury in nephritic syndrome?',
        'choices'    => json_encode([
            'Dysmorphic RBC and RBC casts',
            'Hyaline casts',
            'Granular casts',
            'Waxy casts',
        ]),
        'answer'     => 'Dysmorphic RBC and RBC casts',
        'explanation'=> 'Dysmorphic RBCs and RBC casts reflect glomerular basement membrane damage.',
        'created_at' => $now,
        'updated_at' => $now
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

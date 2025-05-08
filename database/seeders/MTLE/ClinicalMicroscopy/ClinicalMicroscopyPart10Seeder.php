<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which dipstick pad detects blood via pseudoperoxidase activity?',
        'choices'     => json_encode([
            'Blood pad',
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
        ]),
        'answer'      => 'Blood pad',
        'explanation' => 'Blood pad uses pseudoperoxidase activity of hemoglobin/myoglobin to oxidize a chromogen causing color change.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which microscopic element is indicative of lipiduria and nephrotic syndrome?',
        'choices'     => json_encode([
            'Oval fat bodies',
            'RBC casts',
            'WBC casts',
            'Hyaline casts',
        ]),
        'answer'      => 'Oval fat bodies',
        'explanation' => 'Oval fat bodies are renal tubular cells laden with lipid, characteristic of nephrotic syndrome.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which crystal type is seen in ethylene glycol poisoning and appears as envelope-shaped?',
        'choices'     => json_encode([
            'Calcium oxalate dihydrate',
            'Uric acid',
            'Cystine',
            'Struvite',
        ]),
        'answer'      => 'Calcium oxalate dihydrate',
        'explanation' => 'Envelope-shaped dihydrate oxalate crystals are diagnostic of ethylene glycol ingestion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad uses the Trinder reaction for glucose detection?',
        'choices'     => json_encode([
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'      => 'Glucose pad',
        'explanation' => 'Glucose pad employs the Trinder reaction, coupling hydrogen peroxide with chromogen via peroxidase.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which microscopic technique differentiates cholesterol from triglyceride droplets?',
        'choices'     => json_encode([
            'Polarized light microscopy',
            'Phase-contrast microscopy',
            'Brightfield microscopy',
            'Darkfield microscopy',
        ]),
        'answer'      => 'Polarized light microscopy',
        'explanation' => 'Under polarized light, cholesterol droplets show weaker birefringence than triglyceride-laden droplets (Maltese cross).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad is most specific for detecting albumin over other proteins?',
        'choices'     => json_encode([
            'Protein pad (tetrabromophenol blue)',
            'Nitrite pad',
            'Glucose pad',
            'Blood pad',
        ]),
        'answer'      => 'Protein pad (tetrabromophenol blue)',
        'explanation' => 'Tetrabromophenol blue reacts primarily with albumin, making it most specific among protein pads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which reagent strip test is affected by high levels of vitamin C causing false negatives?',
        'choices'     => json_encode([
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
            'Blood pad',
        ]),
        'answer'      => 'Nitrite pad',
        'explanation' => 'Ascorbic acid inhibits diazonium coupling reactions leading to false-negative nitrite tests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad uses a double indicator system for accurate pH measurement?',
        'choices'     => json_encode([
            'pH pad',
            'Protein pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'      => 'pH pad',
        'explanation' => 'The pH pad contains both methyl red and bromothymol blue to cover pH 5–9 range.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which sediment finding is indicative of prerenal azotemia?',
        'choices'     => json_encode([
            'Hyaline casts',
            'RBC casts',
            'WBC casts',
            'Fatty casts',
        ]),
        'answer'      => 'Hyaline casts',
        'explanation' => 'Hyaline casts form in concentrated urine in prerenal azotemia due to low flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad uses sulfosalicylic acid for protein confirmation?',
        'choices'     => json_encode([
            'SSA precipitation test',
            'Protein pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'      => 'SSA precipitation test',
        'explanation' => '3% SSA precipitates proteins enabling visual confirmation independent of dipstick.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which analyzer uses reflectance photometry to read dipstick pads?',
        'choices'     => json_encode([
            'Clinitek Atlas',
            'UF-1000i',
            'SediVue Dx',
            'Iris iQ200',
        ]),
        'answer'      => 'Clinitek Atlas',
        'explanation' => 'Clinitek Atlas employs reflectance photometry to quantify color changes on dipstick pads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which microscopic technique best highlights hyaline casts?',
        'choices'     => json_encode([
            'Phase-contrast microscopy',
            'Brightfield microscopy',
            'Darkfield microscopy',
            'Polarized microscopy',
        ]),
        'answer'      => 'Phase-contrast microscopy',
        'explanation' => 'Phase-contrast improves visualization of transparent structures like hyaline casts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad differentiates hemoglobin from myoglobin?',
        'choices'     => json_encode([
            'Ammonium sulfate precipitation prior to dipstick',
            'Direct dipstick read',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'      => 'Ammonium sulfate precipitation prior to dipstick',
        'explanation' => 'Precipitation removes hemoglobin, leaving myoglobin in supernatant detectable by dipstick.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which crystal forms rosette clusters in acidic urine?',
        'choices'     => json_encode([
            'Uric acid crystals',
            'Triple phosphate',
            'Cystine',
            'Calcium phosphate',
        ]),
        'answer'      => 'Uric acid crystals',
        'explanation' => 'Uric acid often appears as rhombic plates and rosettes in acidic urine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad uses diazirine coupling for bilirubin detection?',
        'choices'     => json_encode([
            'Bilirubin pad',
            'Urobilinogen pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'      => 'Bilirubin pad',
        'explanation' => 'Bilirubin couples with diazonium salts on pad to form colored azobilirubin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad reaction is altered by formaldehyde contamination causing false positives?',
        'choices'     => json_encode([
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
            'Ketone pad',
        ]),
        'answer'      => 'Nitrite pad',
        'explanation' => 'Formaldehyde can produce nitrite-like reactions on nitrite pad, causing false positives.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which sediment element indicates chronic tubular damage and stasis?',
        'choices'     => json_encode([
            'Waxy casts',
            'Fatty casts',
            'RBC casts',
            'Hyaline casts',
        ]),
        'answer'      => 'Waxy casts',
        'explanation' => 'Waxy casts are dense, non-refractile, and indicate severe chronic tubular stasis.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad uses glucosidase enzymes other than glucose oxidase?',
        'choices'     => json_encode([
            'None; glucose pad uses only glucose oxidase',
            'Hexokinase pad',
            'DIazyme pad',
            'Invertase pad',
        ]),
        'answer'      => 'None; glucose pad uses only glucose oxidase',
        'explanation' => 'Dipstick glucose pads rely exclusively on glucose oxidase; no alternative enzymes are used.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which microscopic finding suggests overflow proteinuria from multiple myeloma?',
        'choices'     => json_encode([
            'Bence Jones protein casts',
            'Hyaline casts',
            'RBC casts',
            'WBC casts',
        ]),
        'answer'      => 'Bence Jones protein casts',
        'explanation' => 'Light chain (Bence Jones) protein can form granular casts in multiple myeloma overflow proteinuria.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 36,
        'part'        => 10,
        'question'    => 'Which pad measures urinary creatinine using Jaffe reaction?',
        'choices'     => json_encode([
            'Creatinine pad',
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
        ]),
        'answer'      => 'Creatinine pad',
        'explanation' => 'Creatinine pad uses the Jaffe reaction (picrate) to semi-quantitatively detect creatinine.',
        'created_at'  => $now,
        'updated_at'  => $now
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

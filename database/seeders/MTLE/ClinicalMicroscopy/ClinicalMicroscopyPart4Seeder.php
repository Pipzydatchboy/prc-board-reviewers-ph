<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which reagent pad detects leukocyte esterase activity to screen for pyuria?',
        'choices'     => json_encode([
            'Leukocyte esterase pad',
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
        ]),
        'answer'      => 'Leukocyte esterase pad',
        'explanation' => 'Leukocyte esterase pad contains indoxyl esters that yield purple color in presence of WBCs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which crystal indicates advanced liver disease and appears as brown, dumbbell-shaped bodies?',
        'choices'     => json_encode([
            'Bilirubin crystals',
            'Tyrosine crystals',
            'Cystine crystals',
            'Calcium oxalate',
        ]),
        'answer'      => 'Bilirubin crystals',
        'explanation' => 'Bilirubin crystals are rare, brown, and indicate severe cholestasis or liver dysfunction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which component of the dipstick reacts with nitrite produced by Enterobacteriaceae?',
        'choices'     => json_encode([
            'Aromatic amines',
            'Diazonium salts',
            'Glucose oxidase',
            'Tetrabromophenol blue',
        ]),
        'answer'      => 'Diazonium salts',
        'explanation' => 'Nitrite pad contains an aromatic amine and diazonium salt forming pink azo dye when nitrite present.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which microscopic finding is pathognomonic for alkaline urine and urea-splitting organisms?',
        'choices'     => json_encode([
            'Ammonium biurate crystals',
            'Calcium oxalate',
            'Tyrosine crystals',
            'Uric acid crystals',
        ]),
        'answer'      => 'Ammonium biurate crystals',
        'explanation' => 'Ammonium biurate crystals appear as yellow-brown thorny apple–shaped structures in alkaline urine from urea-splitting bacteria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which stain enhances visualization of hyaline casts in sediment?',
        'choices'     => json_encode([
            'Sternheimer-Malbin stain',
            'Gram stain',
            'Papanicolaou stain',
            'Oil red O stain',
        ]),
        'answer'      => 'Sternheimer-Malbin stain',
        'explanation' => 'Sternheimer-Malbin stain colors casts and cells, improving visibility under microscopy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which dipstick pad uses a methyl red/bromothymol blue double indicator for pH measurement?',
        'choices'     => json_encode([
            'pH pad',
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
        ]),
        'answer'      => 'pH pad',
        'explanation' => 'pH pad contains double indicators to cover urinary pH range from 5 to 9.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which reagent strip test is specific for detection of bilirubin in urine?',
        'choices'     => json_encode([
            'Diazo reaction pad',
            'Folin-Ciocalteu pad',
            'Sulphosalicylic acid pad',
            'Nitroprusside pad',
        ]),
        'answer'      => 'Diazo reaction pad',
        'explanation' => 'Bilirubin pad contains diazonium salt that reacts with bilirubin to form azobilirubin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which crystal is commonly found in hyperuricemia and appears as rhombic plates?',
        'choices'     => json_encode([
            'Uric acid crystals',
            'Calcium phosphate',
            'Cystine',
            'Struvite',
        ]),
        'answer'      => 'Uric acid crystals',
        'explanation' => 'Uric acid crystals are yellow to red-brown rhombic or rosette shapes in acidic urine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which pad detects urine ketones using nitroprusside reaction?',
        'choices'     => json_encode([
            'Ketone pad',
            'Glucose pad',
            'Protein pad',
            'Blood pad',
        ]),
        'answer'      => 'Ketone pad',
        'explanation' => 'Nitroprusside reagents detect acetoacetate producing purple color on ketone pad.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which microscopic element indicates heavy metal poisoning and appears as dark brown granules in cells?',
        'choices'     => json_encode([
            'Granular casts',
            'Pigment casts',
            'Waxy casts',
            'Hyaline casts',
        ]),
        'answer'      => 'Pigment casts',
        'explanation' => 'Pigment casts may contain hemoglobin, myoglobin or heavy metal pigments indicating toxicity.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //11
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which cell type is identified by Wright stain in urine cytology for bladder cancer screening?',
        'choices'     => json_encode([
            'Atypical urothelial cells',
            'Neutrophils',
            'Transitional cells',
            'Squamous cells',
        ]),
        'answer'      => 'Atypical urothelial cells',
        'explanation' => 'Wright stain highlights nuclear features of atypical or malignant urothelial cells.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //12
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which dipstick pad detects glucose using glucose oxidase-peroxidase reaction?',
        'choices'     => json_encode([
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
            'Urobilinogen pad',
        ]),
        'answer'      => 'Glucose pad',
        'explanation' => 'Glucose oxidase produces H2O2 which reacts with chromogen via perioxidase to form color.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //13
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which crystal indicates ethylene glycol ingestion and appears as envelope-shaped dihydrate?',
        'choices'     => json_encode([
            'Calcium oxalate dihydrate',
            'Ammonium biurate',
            'Tyrosine',
            'Cystine',
        ]),
        'answer'      => 'Calcium oxalate dihydrate',
        'explanation' => 'Envelope-shaped dihydrate oxalate crystals are common in ethylene glycol poisoning.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //14
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which pad on dipstick detects albumin selectively over other proteins?',
        'choices'     => json_encode([
            'Protein pad (tetrabromophenol blue)',
            'Low-range protein pad',
            'Urobilinogen pad',
            'Nitrite pad',
        ]),
        'answer'      => 'Protein pad (tetrabromophenol blue)',
        'explanation' => 'Tetrabromophenol blue reacts primarily with albumin producing a green-blue color change.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //15
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which sediment element indicates myoglobinuria following rhabdomyolysis?',
        'choices'     => json_encode([
            'Pigment casts',
            'Fatty casts',
            'WBC casts',
            'Hyaline casts',
        ]),
        'answer'      => 'Pigment casts',
        'explanation' => 'Pigment casts containing myoglobin appear brown and granular in rhabdomyolysis.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which pad uses diazonium salt to detect positive nitrite?',
        'choices'     => json_encode([
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
            'Ketone pad',
        ]),
        'answer'      => 'Nitrite pad',
        'explanation' => 'The nitrite pad contains an aromatic amine and diazonium salt producing pink color when nitrite present.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which analyte is best measured by benzethonium chloride titration in urine?',
        'choices'     => json_encode([
            'Sulfosalicylic acid-reactive protein',
            'Glucose',
            'Ketones',
            'Nitrite',
        ]),
        'answer'      => 'Sulfosalicylic acid-reactive protein',
        'explanation' => 'SSA titration uses acid precipitation to quantify total protein concentration.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which microscopic finding suggests lipiduria beyond oval fat bodies?',
        'choices'     => json_encode([
            'Maltese cross formation',
            'WBC casts',
            'Hyaline casts',
            'Struvite crystals',
        ]),
        'answer'      => 'Maltese cross formation',
        'explanation' => 'Maltese cross under polarized light indicates cholesterol-rich lipiduria.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'Which bacteria are identified by the nitrite dipstick test?',
        'choices'     => json_encode([
            'Enterobacteriaceae',
            'Staphylococcus aureus',
            'Enterococcus faecalis',
            'Pseudomonas aeruginosa',
        ]),
        'answer'      => 'Enterobacteriaceae',
        'explanation' => 'Enterobacteriaceae reduce nitrate to nitrite, yielding positive nitrite pad.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 36,
        'part'        => 4,
        'question'    => 'What is the optimal centrifugation time to preserve casts in sediment?',
        'choices'     => json_encode([
            '5 minutes at 400 x g',
            '10 minutes at 1500 x g',
            '2 minutes at 100 x g',
            '15 minutes at 2000 x g',
        ]),
        'answer'      => '5 minutes at 400 x g',
        'explanation' => 'Gentle centrifugation concentrates elements without disrupting delicate casts.',
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

<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Which urine color indicates the presence of bile pigments?',
        'choices'     => json_encode([
            'Greenish',
            'Straw',
            'Pink',
            'Brown',
        ]),
        'answer'      => 'Greenish',
        'explanation' => 'Bilirubin in urine imparts a greenish or dark yellow color.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'What is the significance of a positive urobilinogen test?',
        'choices'     => json_encode([
            'Hemolytic disease',
            'Renal failure',
            'Liver insufficiency',
            'Normal finding',
        ]),
        'answer'      => 'Hemolytic disease',
        'explanation' => 'Increased urobilinogen suggests hemolysis or hepatic dysfunction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which sediment contains Maltese crosses under polarized light?',
        'choices'     => json_encode([
            'Oval fat bodies',
            'WBC casts',
            'Hyaline casts',
            'Struvite crystals',
        ]),
        'answer'      => 'Oval fat bodies',
        'explanation' => 'Lipid-laden tubular cells show Maltese cross pattern under polarized microscopy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which dipstick parameter is false-negative in presence of ascorbic acid?',
        'choices'     => json_encode([
            'Glucose',
            'Protein',
            'pH',
            'Nitrite',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'Ascorbate reduces sensitivity of glucose oxidase reaction leading to false negatives.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'What does the presence of bacteria and WBCs in urine indicate?',
        'choices'     => json_encode([
            'Urinary tract infection',
            'Glomerulonephritis',
            'Nephrotic syndrome',
            'Diabetes mellitus',
        ]),
        'answer'      => 'Urinary tract infection',
        'explanation' => 'Bacteriuria with pyuria is diagnostic of UTI.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which enzyme reaction pad detects nitrites produced by bacteria?',
        'choices'     => json_encode([
            'Griess reaction',
            'Peroxidase',
            'Hydrolase',
            'Oxidase',
        ]),
        'answer'      => 'Griess reaction',
        'explanation' => 'Nitrite pad uses Griess reaction (diazotization) to detect bacterial nitrite.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which crystal morphology is seen in ethylene glycol poisoning?',
        'choices'     => json_encode([
            'Envelope-shaped dihydrate oxalate',
            'Dumbbell-shaped monohydrate oxalate',
            'Needle-shaped uric acid',
            'Coffin lid struvite',
        ]),
        'answer'      => 'Dumbbell-shaped monohydrate oxalate',
        'explanation' => 'Monohydrate oxalate forms dumbbell or needle shapes in ethylene glycol toxicity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'What finding on refractometry correlates with urine specific gravity?',
        'choices'     => json_encode([
            'Refractive index',
            'Viscosity',
            'pH',
            'Conductivity',
        ]),
        'answer'      => 'Refractive index',
        'explanation' => 'Urine SG measured by refractometer via refractive index of solution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which urinary constituent produces a false-positive ketone result on dipstick?',
        'choices'     => json_encode([
            'Acetoacetate only',
            'Acetone',
            'Beta-hydroxybutyrate',
            'Glucose',
        ]),
        'answer'      => 'Acetoacetate only',
        'explanation' => 'Nitroprusside reaction dipstick detects acetoacetate (and to lesser extent acetone), not beta-hydroxybutyrate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which microscopic finding suggests contamination rather than infection?',
        'choices'     => json_encode([
            'Squamous epithelial cells',
            'WBC casts',
            'Bacteria',
            'RBC casts',
        ]),
        'answer'      => 'Squamous epithelial cells',
        'explanation' => 'Squamous cells from skin or genital tract indicate poor collection technique.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'What does a low specific gravity (<1.010) indicate?',
        'choices'     => json_encode([
            'Dilute urine',
            'Concentrated urine',
            'Alkaline urine',
            'Proteinuria',
        ]),
        'answer'      => 'Dilute urine',
        'explanation' => 'Low SG values correspond to dilute urine typically due to high fluid intake or DI.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which reagent strip test pad uses diazonium coupling?',
        'choices'     => json_encode([
            'Nitrite',
            'Glucose',
            'Protein',
            'Ketones',
        ]),
        'answer'      => 'Nitrite',
        'explanation' => 'Nitrite pad employs diazonium reaction to detect nitrite forming an azo dye.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which organism is most frequently isolated in community-acquired UTIs?',
        'choices'     => json_encode([
            'Escherichia coli',
            'Pseudomonas aeruginosa',
            'Staphylococcus saprophyticus',
            'Klebsiella pneumoniae',
        ]),
        'answer'      => 'Escherichia coli',
        'explanation' => 'E. coli is responsible for about 80% of community-acquired UTIs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which dipstick pad is susceptible to false-negative results from ascorbic acid?',
        'choices'     => json_encode([
            'Glucose',
            'Leukocyte esterase',
            'Nitrite',
            'Protein',
        ]),
        'answer'      => 'Glucose',
        'explanation' => 'High levels of vitamin C can reduce the oxidase reaction of the glucose pad.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which crystal is hexagonal and suggests cystinuria?',
        'choices'     => json_encode([
            'Cystine',
            'Calcium oxalate',
            'Uric acid',
            'Struvite',
        ]),
        'answer'      => 'Cystine',
        'explanation' => 'Cystine crystals are colorless hexagonal plates indicative of cystinuria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which dipstick pad uses a diazotized 2,4,6-trichloroanisole reagent?',
        'choices'     => json_encode([
            'Bilirubin',
            'Urobilinogen',
            'Ketones',
            'Blood',
        ]),
        'answer'      => 'Bilirubin',
        'explanation' => 'Bilirubin pad uses a diazo reaction with diazotized aniline derivates to produce a color change.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'What does the presence of WBC casts indicate?',
        'choices'     => json_encode([
            'Pyelonephritis',
            'Cystitis',
            'Urethritis',
            'Bladder infection',
        ]),
        'answer'      => 'Pyelonephritis',
        'explanation' => 'WBC casts signify inflammation in the renal tubules typical of pyelonephritis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which pad on dipstick measures pH by a double indicator system?',
        'choices'     => json_encode([
            'pH',
            'Protein',
            'Glucose',
            'Nitrite',
        ]),
        'answer'      => 'pH',
        'explanation' => 'pH pads utilize bromothymol blue and methyl red to cover the urinary pH range.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'Which testing method quantifies urinary protein more accurately than dipstick?',
        'choices'     => json_encode([
            'Turbidimetric assay',
            'Dipstick',
            'Specific gravity',
            'pH meter',
        ]),
        'answer'      => 'Turbidimetric assay',
        'explanation' => 'Turbidimetric or biuret assays provide quantitative protein measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 36,
        'part'        => 2,
        'question'    => 'What is the consequence of bacterial overgrowth in urine specimen left at room temperature?',
        'choices'     => json_encode([
            'Increased pH and nitrite',
            'Decreased specific gravity',
            'False-negative leukocyte esterase',
            'Decreased turbidity',
        ]),
        'answer'      => 'Increased pH and nitrite',
        'explanation' => 'Bacteria metabolize urea raising pH and reduce nitrate to nitrite, altering results.',
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

<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Which urinary marker is used to assess tubular proteinuria?',
        'choices'     => json_encode([
            'β2-microglobulin',
            'Albumin',
            'Uromodulin',
            'Creatinine',
        ]),
        'answer'      => 'β2-microglobulin',
        'explanation' => 'β2-microglobulin is reabsorbed by proximal tubules; its presence in urine indicates tubular dysfunction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which method is preferred for measuring low levels of urine albumin?',
        'choices'     => json_encode([
            'Immunoturbidimetry',
            'Dipstick',
            'Refractometry',
            'SSA test',
        ]),
        'answer'      => 'Immunoturbidimetry',
        'explanation' => 'Immunoturbidimetric assays provide sensitive quantitation of microalbuminuria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which automated analyzer uses digital flow imaging for cells and casts?',
        'choices'     => json_encode([
            'SediVue Dx',
            'UF-1000i',
            'Iris iQ200',
            'Clinitek Atlas',
        ]),
        'answer'      => 'Iris iQ200',
        'explanation' => 'Iris iQ200 uses digital imaging cytometry to classify formed elements in urine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which crystal is seen in patients with hyperparathyroidism and appears as small, radiating spheres?',
        'choices'     => json_encode([
            'Calcium phosphate',
            'Cystine',
            'Tyrosine',
            'Uric acid',
        ]),
        'answer'      => 'Calcium phosphate',
        'explanation' => 'Calcium phosphate crystals are often seen in alkaline urine of hyperparathyroid patients.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which dipstick parameter is measured by a diazotization-coupling reaction using sulfanilamide?',
        'choices'     => json_encode([
            'Nitrite',
            'Protein',
            'Glucose',
            'Ketone',
        ]),
        'answer'      => 'Nitrite',
        'explanation' => 'Nitrite detection uses sulfanilamide to form diazonium compound that couples to yield pink color.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which cells in urine sediment are identified by their pitted appearance after phase-contrast microscopy?',
        'choices'     => json_encode([
            'Oval fat bodies',
            'Squamous epithelial cells',
            'Leukocytes',
            'Renal tubular epithelial cells',
        ]),
        'answer'      => 'Oval fat bodies',
        'explanation' => 'Oval fat bodies exhibit ‘Maltese cross’ birefringence and pitted appearance under phase contrast.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which enzyme is used in dipstick glucose detection?',
        'choices'     => json_encode([
            'Glucose oxidase',
            'Hexokinase',
            'Amylase',
            'Invertase',
        ]),
        'answer'      => 'Glucose oxidase',
        'explanation' => 'Dipstick uses glucose oxidase to produce hydrogen peroxide, detected by peroxidase-chromogen reaction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which light source is used for polarized microscopy to identify crystals?',
        'choices'     => json_encode([
            'Crossed polarizers',
            'Darkfield',
            'Phase-contrast',
            'Brightfield',
        ]),
        'answer'      => 'Crossed polarizers',
        'explanation' => 'Polarized microscopy with crossed polarizers reveals birefringent crystals like uric acid and lipids.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which test pad is designed to detect low-range proteinuria (microalbumin)?',
        'choices'     => json_encode([
            'Microalbumin pad',
            'Protein pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'      => 'Microalbumin pad',
        'explanation' => 'Microalbumin pads use immunochemical detection of low concentrations of albumin.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which sediment finding is indicative of heavy metal poisoning like lead?',
        'choices'     => json_encode([
            'Granular casts containing pigment',
            'WBC casts',
            'Hyaline casts',
            'Calcium oxalate crystals',
        ]),
        'answer'      => 'Granular casts containing pigment',
        'explanation' => 'Heavy metals can produce pigmented granular casts in urine sediment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which indicator is used on the pH pad to detect alkaline urine?',
        'choices'     => json_encode([
            'Bromothymol blue',
            'Phenol red',
            'Methyl orange',
            'Methyl violet',
        ]),
        'answer'      => 'Bromothymol blue',
        'explanation' => 'Bromothymol blue shifts from yellow to blue in pH 6.0–7.6, detecting alkaline shifts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which crystal is associated with maple syrup urine disease detection?',
        'choices'     => json_encode([
            'Leucine crystals',
            'Cystine',
            'Tyrosine',
            'Ammonium biurate',
        ]),
        'answer'      => 'Leucine crystals',
        'explanation' => 'Leucine crystals are yellow-brown spheres with concentric layers seen in MSUD.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which pad reaction measures ketones via Gerhardt reaction?',
        'choices'     => json_encode([
            'Ketone pad',
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
        ]),
        'answer'      => 'Ketone pad',
        'explanation' => 'Gerhardt reaction involves nitroprusside reaction with acetoacetate producing purple color.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which dipstick pad is affected by high levels of vitamin C causing false-negative nitrite?',
        'choices'     => json_encode([
            'Nitrite pad',
            'Protein pad',
            'Glucose pad',
            'Leukocyte esterase pad',
        ]),
        'answer'      => 'Nitrite pad',
        'explanation' => 'Ascorbic acid inhibits diazonium coupling leading to false-negative nitrite reactions.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //15
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which automated urine analyzer uses transmission flow cytometry?',
        'choices'     => json_encode([
            'UF-1000i',
            'SediVue Dx',
            'Iris iQ200',
            'Clinitek Atlas',
        ]),
        'answer'      => 'UF-1000i',
        'explanation' => 'Sysmex UF-1000i uses transmission flow cytometry to quantify and classify urine particles.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which sediment finding is characteristic of acute glomerulonephritis?',
        'choices'     => json_encode([
            'RBC casts',
            'WBC casts',
            'Fatty casts',
            'Hyaline casts',
        ]),
        'answer'      => 'RBC casts',
        'explanation' => 'RBC casts reflect glomerular bleeding as seen in acute GN.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which test confirms myoglobinuria distinguishing from hemoglobinuria?',
        'choices'     => json_encode([
            'Ammonium sulfate precipitation',
            'Dipstick blood pad',
            'Nitrite pad',
            'Protein pad',
        ]),
        'answer'      => 'Ammonium sulfate precipitation',
        'explanation' => 'Myoglobin remains soluble in sulfate precipitation whereas hemoglobin precipitates.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which pad uses the sulfosalicylic acid method for protein detection?',
        'choices'     => json_encode([
            'SSA precipitation test',
            'Protein pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'      => 'SSA precipitation test',
        'explanation' => '3% SSA causes protein precipitation allowing visual or turbidimetric assessment.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which urinary analyte is quantified by enzymatic urease method?',
        'choices'     => json_encode([
            'Urea',
            'Protein',
            'Glucose',
            'Creatinine',
        ]),
        'answer'      => 'Urea',
        'explanation' => 'Urease hydrolyzes urea to ammonia measured by colorimetric or conductivity methods.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 36,
        'part'        => 6,
        'question'    => 'Which crystal is associated with chronic hemolysis and appears as refractile spheres?',
        'choices'     => json_encode([
            'Bilirubin crystals',
            'Calcium oxalate crystals',
            'Tyrosine crystals',
            'Cystine crystals',
        ]),
        'answer'      => 'Bilirubin crystals',
        'explanation' => 'Chronic hemolysis with elevated bilirubin can yield bilirubin crystals in urine sediment.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

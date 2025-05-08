<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'Which method is gold standard for urine cytology screening?',
        'choices'     => json_encode([
            'Papanicolaou stain',
            'Gram stain',
            'Wright stain',
            'Sternheimer-Malbin stain',
        ]),
        'answer'      => 'Papanicolaou stain',
        'explanation' => 'Papanicolaou stain highlights cellular detail for detection of malignant cells in urine cytology.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which urinary enzyme is elevated in tubular damage and measured by colorimetric assay?',
        'choices'     => json_encode([
            'N-acetyl-β-D-glucosaminidase (NAG)',
            'Alkaline phosphatase',
            'Lactate dehydrogenase',
            'Gamma-glutamyl transferase',
        ]),
        'answer'      => 'N-acetyl-β-D-glucosaminidase (NAG)',
        'explanation' => 'NAG is a lysosomal enzyme in proximal tubules; elevated in tubular injury and quantified colorimetrically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which marker in urine correlates with glomerular filtration rate decline?',
        'choices'     => json_encode([
            'Microalbumin',
            'Ketones',
            'Blood',
            'Nitrite',
        ]),
        'answer'      => 'Microalbumin',
        'explanation' => 'Increased microalbuminuria is an early sign of glomerular damage and GFR decline.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which automated urine analyzer uses digitized microscopy for sediment analysis?',
        'choices'     => json_encode([
            'SediVue',
            'UF-1000i',
            'Iris iQ',
            'Clinitek Status',
        ]),
        'answer'      => 'SediVue',
        'explanation' => 'SediVue uses digital imaging and AI to identify urinary formed elements automatically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which stain is used to identify eosinophils in urine for interstitial nephritis?',
        'choices'     => json_encode([
            'Hansel’s stain',
            'Gram stain',
            'Wright stain',
            'Hemacolor stain',
        ]),
        'answer'      => 'Hansel’s stain',
        'explanation' => 'Hansel’s stain highlights eosinophils in urine sediment, indicative of acute interstitial nephritis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which urinary biomarker indicates early acute kidney injury and is detected by immunoassay?',
        'choices'     => json_encode([
            'KIM-1',
            'Glucose',
            'Leukocyte esterase',
            'Nitrite',
        ]),
        'answer'      => 'KIM-1',
        'explanation' => 'Kidney Injury Molecule-1 (KIM-1) is a sensitive biomarker for early detection of AKI, measured by immunoassays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which sediment element is characteristic of viral urinary tract infection?',
        'choices'     => json_encode([
            'Decoy cells',
            'WBC casts',
            'RBC casts',
            'Bacteria',
        ]),
        'answer'      => 'Decoy cells',
        'explanation' => 'Decoy cells are viral-infected renal tubular cells commonly seen in BK virus infection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which test is used to detect urinary tract TB by microscopy?',
        'choices'     => json_encode([
            'Acid-fast bacilli stain',
            'Gram stain',
            'Giemsa stain',
            'Hansel’s stain',
        ]),
        'answer'      => 'Acid-fast bacilli stain',
        'explanation' => 'Ziehl-Neelsen or Auramine stains identify acid-fast Mycobacterium tuberculosis in urine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which urinary sediment finding suggests renal tubular epithelial necrosis?',
        'choices'     => json_encode([
            'RTE casts',
            'Hyaline casts',
            'WBC casts',
            'Fatty casts',
        ]),
        'answer'      => 'RTE casts',
        'explanation' => 'Renal tubular epithelial cell casts indicate tubular epithelial damage as in ATN.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which sediment crystal is associated with leucine and tyrosine disorders?',
        'choices'     => json_encode([
            'Tyrosine crystals',
            'Ammonium biurate',
            'Calcium phosphate',
            'Triple phosphate',
        ]),
        'answer'      => 'Tyrosine crystals',
        'explanation' => 'Tyrosine crystals (needle or rosette forms) appear in severe liver disease or tyrosinemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which urinary analyte is best measured by enzymatic spectrophotometry?',
        'choices'     => json_encode([
            'Urea',
            'Protein',
            'Leukocyte esterase',
            'Nitrite',
        ]),
        'answer'      => 'Urea',
        'explanation' => 'Urea is commonly quantified in urine by enzymatic urease-based spectrophotometric assays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which urinary biomarker reflects proximal tubular dysfunction and is detected by immunoassay?',
        'choices'     => json_encode([
            'β2-microglobulin',
            'Nitrite',
            'Protein',
            'Glucose',
        ]),
        'answer'      => 'β2-microglobulin',
        'explanation' => 'Urinary β2-microglobulin increases with proximal tubular damage; measured by immunoassays.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which centrifugation speed is optimal for sediment preparation?',
        'choices'     => json_encode([
            '400 x g for 5 minutes',
            '1500 x g for 10 minutes',
            '100 x g for 2 minutes',
            '2000 x g for 15 minutes',
        ]),
        'answer'      => '400 x g for 5 minutes',
        'explanation' => 'Low-speed centrifugation concentrates formed elements without damaging cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which urine component interferes with dipstick nitrite pad, causing false negatives?',
        'choices'     => json_encode([
            'High ascorbate',
            'High protein',
            'High ketones',
            'High bilirubin',
        ]),
        'answer'      => 'High ascorbate',
        'explanation' => 'Vitamin C reduces nitrite to nitric oxide preventing diazonium formation, leading to false negatives.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which test differentiates between hematuria and hemoglobinuria?',
        'choices'     => json_encode([
            'Centrifuge specimen and inspect supernatant',
            'Dipstick protein test',
            'Dipstick nitrite test',
            'Specific gravity',
        ]),
        'answer'      => 'Centrifuge specimen and inspect supernatant',
        'explanation' => 'Hematuria clears on centrifugation; hemoglobinuria remains uniformly colored.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which urinary sediment finding is pathognomonic for Fanconi syndrome?',
        'choices'     => json_encode([
            'RTE cells and glycosuria',
            'WBC casts',
            'Struvite crystals',
            'Hyaline casts',
        ]),
        'answer'      => 'RTE cells and glycosuria',
        'explanation' => 'Fanconi syndrome shows proximal tubular dysfunction: RTE cells, aminoaciduria, glycosuria.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which dipstick test pad uses the Gerhardt reaction?',
        'choices'     => json_encode([
            'Glucose',
            'Ketones',
            'Protein',
            'Blood',
        ]),
        'answer'      => 'Ketones',
        'explanation' => 'Ketone pad uses Gerhardt reaction (nitroprusside) that reacts with acetoacetate to give color.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which automated urine analyzer uses laser light scattering for particle detection?',
        'choices'     => json_encode([
            'UF-1000i',
            'SediVue',
            'Iris iQ200',
            'Clinitek Atlas',
        ]),
        'answer'      => 'UF-1000i',
        'explanation' => 'Sysmex UF-1000i employs flow cytometry with laser scattering to count and classify particles.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which sediment cast is seen in severe chronic renal failure?',
        'choices'     => json_encode([
            'Waxy casts',
            'RBC casts',
            'WBC casts',
            'Fatty casts',
        ]),
        'answer'      => 'Waxy casts',
        'explanation' => 'Waxy casts are rigid, highly refractile, indicating severe stasis in chronic renal failure.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 36,
        'part'        => 3,
        'question'    => 'Which parameter does refractometer measure directly correlating with solute concentration?',
        'choices'     => json_encode([
            'Refractive index',
            'Viscosity',
            'Conductivity',
            'Turbidity',
        ]),
        'answer'      => 'Refractive index',
        'explanation' => 'Refractometer measures refractive index, which is used to calculate specific gravity based on solute concentration.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

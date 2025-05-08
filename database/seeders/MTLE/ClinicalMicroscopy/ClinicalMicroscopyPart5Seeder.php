<?php

namespace Database\Seeders\MTLE\ClinicalMicroscopy;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClinicalMicroscopyPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which urine test pad utilizes the Jaffe reaction?',
        'choices'     => json_encode([
            'Creatinine pad',
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
        ]),
        'answer'      => 'Creatinine pad',
        'explanation' => 'The creatinine pad on some dipsticks uses the Jaffe reaction to detect creatinine via picrate binding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which microscopic element indicates chyluria?',
        'choices'     => json_encode([
            'Fat globules',
            'WBC casts',
            'Epithelial cells',
            'Calcium oxalate crystals',
        ]),
        'answer'      => 'Fat globules',
        'explanation' => 'Chyluria presents with fat globules and milky urine appearance due to lymphatic leakage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which reagent pad detects urobilinogen using Ehrlich’s reagent?',
        'choices'     => json_encode([
            'Urobilinogen pad',
            'Bilirubin pad',
            'Nitrite pad',
            'Leukocyte esterase pad',
        ]),
        'answer'      => 'Urobilinogen pad',
        'explanation' => 'The urobilinogen pad uses Ehrlich’s aldehyde reagent to form a pink azo dye in presence of urobilinogen.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which crystal is pathognomonic for cystinuria?',
        'choices'     => json_encode([
            'Cystine hexagonal plates',
            'Calcium phosphate',
            'Uric acid',
            'Triple phosphate',
        ]),
        'answer'      => 'Cystine hexagonal plates',
        'explanation' => 'Cystine crystals are colorless hexagonal plates and diagnostic of cystinuria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which pad on dipstick uses pyrrole amino acids to detect protein?',
        'choices'     => json_encode([
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
            'Leukocyte esterase pad',
        ]),
        'answer'      => 'Protein pad',
        'explanation' => 'The protein pad employs tetrabromophenol blue reacting with amino groups of proteins (especially albumin).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which urinary cell type suggests ureteral origin when seen in sediment?',
        'choices'     => json_encode([
            'Transitional epithelial cells',
            'Squamous cells',
            'RTE cells',
            'Leukocytes',
        ]),
        'answer'      => 'Transitional epithelial cells',
        'explanation' => 'Transitional cells derive from ureters, bladder, and renal pelvis and indicate upper urinary tract involvement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which crystal suggests ethambutol therapy when present in urine?',
        'choices'     => json_encode([
            'Calcium oxalate dihydrate',
            'Triple phosphate',
            'Tyrosine',
            'Cystine',
        ]),
        'answer'      => 'Triple phosphate',
        'explanation' => 'Ethambutol can cause alkaline urine and struvite (triple phosphate) crystal formation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which dipstick pad is susceptible to false-positive results with high urinary specific gravity?',
        'choices'     => json_encode([
            'Protein pad',
            'Glucose pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'      => 'Protein pad',
        'explanation' => 'Concentrated urine increases pad reaction resulting in false-positive protein readings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which automated analyzer employs digital imaging and artificial intelligence for urine microscopy?',
        'choices'     => json_encode([
            'SediVue Dx',
            'UF-1000i',
            'Iris iQ200',
            'Clinitek Atlas',
        ]),
        'answer'      => 'SediVue Dx',
        'explanation' => 'SediVue Dx uses digital imaging and AI algorithms to classify urine particles and casts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which sediment cast indicates slow urinary flow and stasis in tubules?',
        'choices'     => json_encode([
            'Waxy casts',
            'RBC casts',
            'WBC casts',
            'Hyaline casts',
        ]),
        'answer'      => 'Waxy casts',
        'explanation' => 'Waxy casts have sharp edges and indicate advanced renal failure with stasis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which dipstick pad can give false-negative results in vitamin C ingestion?',
        'choices'     => json_encode([
            'Blood pad',
            'Nitrite pad',
            'Protein pad',
            'Ketone pad',
        ]),
        'answer'      => 'Blood pad',
        'explanation' => 'High ascorbic acid can inhibit peroxidase activity leading to false-negative blood pad.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which crystal is characteristic of Castelman disease when seen in urine?',
        'choices'     => json_encode([
            'Tyrosine crystals',
            'Cystine',
            'Ammonium biurate',
            'Calcium oxalate',
        ]),
        'answer'      => 'Tyrosine crystals',
        'explanation' => 'Tyrosine crystals (fine needles or rosettes) occur in severe liver disease including Castleman-like pathology.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which pad uses the Trinder reaction to detect glucose?',
        'choices'     => json_encode([
            'Glucose pad',
            'Protein pad',
            'Nitrite pad',
            'Blood pad',
        ]),
        'answer'      => 'Glucose pad',
        'explanation' => 'The Trinder reaction couples oxidation of glucose to color formation via peroxidase and chromogen.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which microscopic finding suggests post-renal obstruction?',
        'choices'     => json_encode([
            'Broad waxy casts',
            'RTE cells',
            'WBC casts',
            'RBC casts',
        ]),
        'answer'      => 'Broad waxy casts',
        'explanation' => 'Broad waxy casts form in dilated, obstructed tubules as a sign of chronic obstruction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which dipstick test is most affected by high specific gravity causing false positives?',
        'choices'     => json_encode([
            'Protein pad',
            'Glucose pad',
            'Blood pad',
            'Ketone pad',
        ]),
        'answer'      => 'Protein pad',
        'explanation' => 'High SG concentrates protein pad reagents leading to false-positive protein results.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which automated urine analyzer uses sediment centrifugation followed by digital microscopy?',
        'choices'     => json_encode([
            'Iris iQ200',
            'UF-1000i',
            'SediVue Dx',
            'Clinitek Atlas',
        ]),
        'answer'      => 'Iris iQ200',
        'explanation' => 'Iris iQ200 centrifuges samples and uses digital imaging to identify particles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which sediment element indicates severe hyperlipidemia?',
        'choices'     => json_encode([
            'Maltese cross fat bodies',
            'Calcium phosphate',
            'WBC casts',
            'Hyaline casts',
        ]),
        'answer'      => 'Maltese cross fat bodies',
        'explanation' => 'Under polarized light, lipid droplets form Maltese cross indicating chylous or fatty urine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which dipstick pad reaction is inhibited by high ascorbic acid leading to false-negative results?',
        'choices'     => json_encode([
            'Blood pad',
            'Protein pad',
            'Nitrite pad',
            'Ketone pad',
        ]),
        'answer'      => 'Blood pad',
        'explanation' => 'Ascorbic acid inhibits the peroxidase reaction on the blood pad causing false-negatives.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which crystal indicates paracetamol overdose and appears as yellow-brown sheaves?',
        'choices'     => json_encode([
            'Tyrosine crystals',
            'Cystine crystals',
            'Uric acid crystals',
            'Calcium oxalate',
        ]),
        'answer'      => 'Tyrosine crystals',
        'explanation' => 'Massive hepatic injury from overdose leads to tyrosine crystal formation in urine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 36,
        'part'        => 5,
        'question'    => 'Which dipstick pad uses diazotized aniline to detect bilirubin?',
        'choices'     => json_encode([
            'Bilirubin pad',
            'Urobilinogen pad',
            'Nitrite pad',
            'Glucose pad',
        ]),
        'answer'      => 'Bilirubin pad',
        'explanation' => 'Bilirubin pad contains diazotized aniline (diazonium compound) reacting with bilirubin to give a tan-to-purple color.',
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

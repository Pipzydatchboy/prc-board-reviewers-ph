<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart4Seeder extends Seeder
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
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which stain is used to demonstrate basement membrane thickening in diabetic nephropathy?',
        'choices'    => json_encode([
            'Periodic acid–Schiff',
            'Masson’s trichrome',
            'Silver methenamine',
            'H&E',
        ]),
        'answer'     => 'Periodic acid–Schiff',
        'explanation'=> 'PAS accentuates polysaccharide-rich basement membranes, highlighting thickening.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which embedding medium requires polymerization at low temperature (60°C)?',
        'choices'    => json_encode([
            'Resin (e.g., epoxy)',
            'Paraffin wax',
            'O.C.T. compound',
            'Gelatin',
        ]),
        'answer'     => 'Resin (e.g., epoxy)',
        'explanation'=> 'Epoxy resins polymerize at 60°C, providing hard blocks for ultrathin sectioning.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which fixative is preferred for preserving glycogen in tissue specimens?',
        'choices'    => json_encode([
            'Cold ethanol',
            'Formalin',
            'Bouin’s solution',
            'Glutaraldehyde',
        ]),
        'answer'     => 'Cold ethanol',
        'explanation'=> 'Ethanol precipitates and preserves glycogen better than cross-linking fixatives.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which microtomy technique reduces chatter artifacts in hard tissues?',
        'choices'    => json_encode([
            'Disposable tungsten carbide blade',
            'Steel knife',
            'Glass knife',
            'Diamond knife',
        ]),
        'answer'     => 'Disposable tungsten carbide blade',
        'explanation'=> 'Carbide blades maintain sharpness in hard tissues, minimizing chatter.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which stain is used to detect Helicobacter pylori besides Warthin-Starry?',
        'choices'    => json_encode([
            'Giemsa stain',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Giemsa stain',
        'explanation'=> 'Giemsa stains H. pylori blue, providing a simpler alternative to silver methods.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which DOH order regulates accreditation of pathology laboratories?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2007-0027',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'AO 2013-0125 prescribes accreditation standards for pathology and clinical labs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which stain identifies Russell bodies in plasma cells?',
        'choices'    => json_encode([
            'Mott cell stain (H&E)',
            'PAS',
            'Congo red',
            'Trichrome',
        ]),
        'answer'     => 'Mott cell stain (H&E)',
        'explanation'=> 'Russell bodies appear as eosinophilic inclusions in plasma cells on H&E.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which clearing agent is used for resin sections?',
        'choices'    => json_encode([
            'Xylene',
            'Alcohol',
            'Formalin',
            'Water',
        ]),
        'answer'     => 'Xylene',
        'explanation'=> 'Xylene removes embedding resins similarly to paraffin, clearing sections for mounting.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which law requires the display of laboratory full-time staff profiles?',
        'choices'    => json_encode([
            'RA 4688',
            'RA 5941',
            'AO 2005-0024',
            'RA 10912',
        ]),
        'answer'     => 'RA 4688',
        'explanation'=> 'Clinical Laboratories Act requires posting credentials of full-time lab personnel.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which stain is used to differentiate Gram-positive versus Gram-negative bacteria?',
        'choices'    => json_encode([
            'Gram stain',
            'Ziehl–Neelsen',
            'H&E',
            'Silver stain',
        ]),
        'answer'     => 'Gram stain',
        'explanation'=> 'Gram stain uses crystal violet and safranin to distinguish bacterial cell wall properties.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which microtome maintenance step is crucial to prevent section chatter?',
        'choices'    => json_encode([
            'Regular blade replacement',
            'Oil lubrication',
            'Formalin disinfection',
            'Blade cooling',
        ]),
        'answer'     => 'Regular blade replacement',
        'explanation'=> 'Dull blades cause chatter; frequent blade changes ensure clean, consistent sections.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which fixative preserves enzyme histochemistry activity?',
        'choices'    => json_encode([
            'Acetone',
            'Formaldehyde',
            'Ethanol',
            'Bouin’s solution',
        ]),
        'answer'     => 'Acetone',
        'explanation'=> 'Acetone fixes while preserving certain enzyme activities for histochemical assays.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which special stain highlights neurological directionality of axons?',
        'choices'    => json_encode([
            'Luxol fast blue/Cresyl violet',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Luxol fast blue/Cresyl violet',
        'explanation'=> 'Combined LFB/CV demonstrates myelin and Nissl substance in neural tissues.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which stain is used to identify melanin in tissue sections?',
        'choices'    => json_encode([
            'Fontana-Masson',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Fontana-Masson',
        'explanation'=> 'Fontana-Masson argentaffin stain reveals melanin granules as black deposits.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which stabilization buffer is used for molecular assays post-fixation?',
        'choices'    => json_encode([
            'Formalin-free RNA stabilization buffer',
            'Citrate buffer',
            'PBS',
            'Tris buffer',
        ]),
        'answer'     => 'Formalin-free RNA stabilization buffer',
        'explanation'=> 'Special buffers preserve nucleic acids for PCR and sequencing after fixation.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which law requires reporting of laboratory-acquired infections?',
        'choices'    => json_encode([
            'AO No. 2005-0024',
            'RA 4688',
            'RA 10912',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2005-0024',
        'explanation'=> 'AO 2005-0024 mandates reporting of incidents and lab-acquired infections to DOH.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which instrument is used to measure section thickness on microtomes?',
        'choices'    => json_encode([
            'Micrometer',
            'Spectrophotometer',
            'Refractometer',
            'Thermometer',
        ]),
        'answer'     => 'Micrometer',
        'explanation'=> 'Micrometers gauge the distance of the knife advance to ensure correct section thickness.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which embedding medium is water-soluble and used for immunostaining?',
        'choices'    => json_encode([
            'Polyethylene glycol',
            'Paraffin wax',
            'Resin',
            'Gelatin',
        ]),
        'answer'     => 'Polyethylene glycol',
        'explanation'=> 'PEG embeds without clearing and is compatible with aqueous immunostaining protocols.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which code mandates professional indemnity insurance for labs?',
        'choices'    => json_encode([
            'None; not mandated',
            'RA 4688',
            'RA 5941',
            'RA 10912',
        ]),
        'answer'     => 'None; not mandated',
        'explanation'=> 'No Philippine law currently mandates lab indemnity insurance specifically.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 4,
        'question'   => 'Which quality control practice is essential before immunohistochemistry?',
        'choices'    => json_encode([
            'Use of positive and negative control tissues',
            'Staining with H&E only',
            'Skipping antigen retrieval',
            'Using expired reagents',
        ]),
        'answer'     => 'Use of positive and negative control tissues',
        'explanation'=> 'Controls validate specificity and sensitivity of IHC procedures for accurate interpretation.',
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

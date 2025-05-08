<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart7Seeder extends Seeder
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
        'part'       => 7,
        'question'   => 'Which stain is used for visualizing lipofuscin in liver biopsies?',
        'choices'    => json_encode([
            'Fontana-Masson',
            'H&E',
            'PAS',
            'Prussian blue',
        ]),
        'answer'     => 'Fontana-Masson',
        'explanation'=> 'Fontana-Masson argentaffin reaction highlights lipofuscin as black granules.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which fixative is recommended for electron microscopy of kidney tissue?',
        'choices'    => json_encode([
            'Glutaraldehyde',
            'Formalin',
            'Ethanol',
            'Bouin’s solution',
        ]),
        'answer'     => 'Glutaraldehyde',
        'explanation'=> '2.5% glutaraldehyde preserves ultrastructure by extensive protein cross-linking.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which DOH order specifies lab personnel qualifications for molecular diagnostics?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2007-0027',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'It outlines minimum qualifications and training for advanced lab services including molecular assays.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which stain demonstrates fungal organisms alongside GMS?',
        'choices'    => json_encode([
            'PAS',
            'H&E',
            'Congo red',
            'Trichrome',
        ]),
        'answer'     => 'PAS',
        'explanation'=> 'PAS stains fungal cell walls magenta, useful complement to GMS for fungi detection.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which microtome blade type is used for plastic sections in EM?',
        'choices'    => json_encode([
            'Diamond knife',
            'Steel blade',
            'Carbide blade',
            'Glass knife',
        ]),
        'answer'     => 'Diamond knife',
        'explanation'=> 'Diamond knives provide ultra-sharp edge necessary for ultrathin plastic sections (~70 nm).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which stain is used to identify amyloid besides Congo red and Thioflavin T?',
        'choices'    => json_encode([
            'Crystal violet',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Crystal violet',
        'explanation'=> 'Crystal violet stains amyloid purple, complementing other amyloid detection methods.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which buffer is used in TRIS-EDTA antigen retrieval at high temperature?',
        'choices'    => json_encode([
            'Tris-EDTA pH 9.0',
            'Citrate pH 6.0',
            'Glycine pH 3.5',
            'PBS pH 7.4',
        ]),
        'answer'     => 'Tris-EDTA pH 9.0',
        'explanation'=> 'High pH unmasking helps retrieval of specific antigens sensitive to alkaline conditions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which law requires labs to maintain CE logs for licensed personnel?',
        'choices'    => json_encode([
            'RA 10912',
            'RA 5941',
            'RA 4688',
            'RA 8504',
        ]),
        'answer'     => 'RA 10912',
        'explanation'=> 'CPD Act mandates documentation of continuing education units for license renewal.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which special stain is used to visualize fibrin in thrombi?',
        'choices'    => json_encode([
            'Martius scarlet blue',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Martius scarlet blue',
        'explanation'=> 'MSB trichrome stains fibrin bright red with accompanying yellow and blue fibers.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which administrative order governs laboratory accreditation under DOH?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2005-0024',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'It sets forth the guidelines and standards for accreditation of clinical labs.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which instrument measures refractive index of clearing agents?',
        'choices'    => json_encode([
            'Refractometer',
            'Spectrophotometer',
            'Micrometer',
            'Thermometer',
        ]),
        'answer'     => 'Refractometer',
        'explanation'=> 'Refractometers assess refractive index ensuring proper clearing and mounting.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which stain is used to detect basement membranes in renal pathology besides PAS?',
        'choices'    => json_encode([
            'Jones methenamine silver',
            'H&E',
            'Congo red',
            'Trichrome',
        ]),
        'answer'     => 'Jones methenamine silver',
        'explanation'=> 'JMS blackens basement membranes for detailed evaluation in kidney biopsies.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which DOH order covers lab safety incidents reporting?',
        'choices'    => json_encode([
            'AO No. 2005-0024',
            'AO No. 2013-0125',
            'RA 4688',
            'RA 10912',
        ]),
        'answer'     => 'AO No. 2005-0024',
        'explanation'=> 'It requires immediate reporting of laboratory accidents and exposures.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which stain highlights iron in liver biopsies besides Prussian blue?',
        'choices'    => json_encode([
            'Rhodanine',
            'PAS',
            'H&E',
            'Congo red',
        ]),
        'answer'     => 'Rhodanine',
        'explanation'=> 'Rhodanine stains copper and some iron, useful in Wilson disease workup.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which fixative preserves mitochondria for cytochemical studies?',
        'choices'    => json_encode([
            'Glutaraldehyde',
            'Formalin',
            'Ethanol',
            'Bouin’s solution',
        ]),
        'answer'     => 'Glutaraldehyde',
        'explanation'=> 'Strong cross-linking preserves organelle ultrastructure including mitochondria.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which reagent is used to quench endogenous peroxidase in IHC?',
        'choices'    => json_encode([
            'Hydrogen peroxide',
            'Formalin',
            'Xylene',
            'Ethanol',
        ]),
        'answer'     => 'Hydrogen peroxide',
        'explanation'=> '0.3% H2O2 in methanol blocks endogenous peroxidase activity to reduce background.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which method is used to dry slides before coverslipping?',
        'choices'    => json_encode([
            'Air drying or oven at 37°C',
            'Direct flame',
            'Microwave',
            'None',
        ]),
        'answer'     => 'Air drying or oven at 37°C',
        'explanation'=> 'Gentle drying prevents water trapping under coverslip and avoids tissue damage.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which legislation mandates safeguarding patient confidentiality in lab reports?',
        'choices'    => json_encode([
            'RA 10173 (Data Privacy Act)',
            'RA 4688',
            'RA 5941',
            'RA 10912',
        ]),
        'answer'     => 'RA 10173 (Data Privacy Act)',
        'explanation'=> 'It requires secure handling and confidentiality of patient health information.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which stain detects acid mucopolysaccharides besides Alcian blue?',
        'choices'    => json_encode([
            'Mucicarmine',
            'PAS',
            'H&E',
            'Trichrome',
        ]),
        'answer'     => 'Mucicarmine',
        'explanation'=> 'Mucicarmine stains epithelial mucins red, useful for mucopolysaccharide detection.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 7,
        'question'   => 'Which organization accredits laboratories internationally for quality standards?',
        'choices'    => json_encode([
            'ISO/IEC 17025',
            'FDA',
            'PRC',
            'DOH',
        ]),
        'answer'     => 'ISO/IEC 17025',
        'explanation'=> 'ISO/IEC 17025 sets general requirements for competence of testing and calibration labs globally.',
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

<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart5Seeder extends Seeder
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
        'part'       => 5,
        'question'   => 'Which reagent is used in routine decalcification for bone biopsy specimens?',
        'choices'    => json_encode([
            'Formic acid',
            'EDTA',
            'Xylene',
            'Alcohol',
        ]),
        'answer'     => 'Formic acid',
        'explanation'=> 'Formic acid decalcifies bone faster than EDTA but may affect antigenicity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which DOH order provides guidelines on laboratory physical facility requirements?',
        'choices'    => json_encode([
            'AO No. 2007-0027',
            'AO No. 2013-0125',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2007-0027',
        'explanation'=> 'AO 2007-0027 outlines biosafety and physical requirements for clinical labs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which stain is used to demonstrate carbohydrate-rich mucins in tissue?',
        'choices'    => json_encode([
            'Periodic acid–Schiff',
            'Masson’s trichrome',
            'Silver stain',
            'Oil red O',
        ]),
        'answer'     => 'Periodic acid–Schiff',
        'explanation'=> 'PAS oxidizes and stains carbohydrate components magenta, highlighting mucins.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which embedding medium is optimal for ultrastructural preservation in TEM?',
        'choices'    => json_encode([
            'Araldite resin',
            'Paraffin wax',
            'O.C.T. compound',
            'Gelatin',
        ]),
        'answer'     => 'Araldite resin',
        'explanation'=> 'Araldite provides rigid support and preserves ultrastructure for electron microscopy.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which special stain is used to identify lipids in frozen sections?',
        'choices'    => json_encode([
            'Oil red O',
            'H&E',
            'Silver stain',
            'PAS',
        ]),
        'answer'     => 'Oil red O',
        'explanation'=> 'Oil red O is a fat-soluble dye that stains neutral lipids red in cryosections.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which stain is used to detect carbohydrate-rich basement membranes besides PAS?',
        'choices'    => json_encode([
            'Jones silver stain',
            'Masson’s trichrome',
            'Congo red',
            'Alcian blue',
        ]),
        'answer'     => 'Jones silver stain',
        'explanation'=> 'Jones methenamine silver stains basement membranes black for renal pathology.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which law defines the scope of practice and penalties for medical laboratory technologists?',
        'choices'    => json_encode([
            'RA 5941',
            'RA 4688',
            'RA 10912',
            'RA 8504',
        ]),
        'answer'     => 'RA 5941',
        'explanation'=> 'RA 5941 regulates the practice, licensure, and penalties for medical technologists.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which regulatory body issues the Code of Ethics for medical technologists?',
        'choices'    => json_encode([
            'Department of Health',
            'PRC Board of Medical Technology',
            'DOH Administrative Order',
            'Philippine Medical Association',
        ]),
        'answer'     => 'DOH Administrative Order',
        'explanation'=> 'The DOH prescribes the Code of Ethics for allied health professionals via administrative orders.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which stain highlights fungi and Pneumocystis jirovecii in lung biopsies?',
        'choices'    => json_encode([
            'Gomori methenamine silver',
            'PAS',
            'H&E',
            'Trichrome',
        ]),
        'answer'     => 'Gomori methenamine silver',
        'explanation'=> 'GMS stains fungal cell walls black, useful for Pneumocystis detection.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which clearance agent is often used as a less toxic xylene substitute in routine histology?',
        'choices'    => json_encode([
            'Isopropanol',
            'Formalin',
            'Acetone',
            'Mineral oil',
        ]),
        'answer'     => 'Isopropanol',
        'explanation'=> 'Isopropanol can act as a clearing agent and is less toxic than xylene in some protocols.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which permit must laboratories secure annually to legally operate in the Philippines?',
        'choices'    => json_encode([
            'License to operate (LTO) from DOH',
            'PRC license renewal',
            'FDA product registration',
            'BSP clearance',
        ]),
        'answer'     => 'License to operate (LTO) from DOH',
        'explanation'=> 'Clinical laboratories must renew their LTO with the Department of Health yearly.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which technique is used to prepare sections for immunofluorescence?','choices'=>json_encode(['Cryosectioning','Paraffin embedding','Resin embedding','Gelatin embedding']),'answer'=>'Cryosectioning','explanation'=>'Cryosectioning preserves antigenicity and fluorescence by sectioning at low temperatures.','created_at'=>$now,'updated_at'=>$now],
    //13
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which stain is used to identify mast cells in tissue?',
        'choices'    => json_encode([
            'Toluidine blue',
            'H&E',
            'PAS',
            'Congo red',
        ]),
        'answer'     => 'Toluidine blue',
        'explanation'=> 'Toluidine blue metachromatically stains mast cell granules purple.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which administrative order sets proficiency testing requirements for clinical labs?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2005-0024',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'AO 2013-0125 includes provisions on proficiency testing for quality assurance.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which stain is used for demonstration of neurofibrillary tangles in Alzheimer disease?',
        'choices'    => json_encode([
            'Silver stain (Bielschowsky)',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Silver stain (Bielschowsky)',
        'explanation'=> 'Bielschowsky silver stain impregnates neurofibrillary tangles and plaques.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which biobank regulation mandates informed consent for tissue storage?',
        'choices'    => json_encode([
            'DOH Administrative Order on Biobanking',
            'RA 5941',
            'RA 10912',
            'RA 8504',
        ]),
        'answer'     => 'DOH Administrative Order on Biobanking',
        'explanation'=> 'DOH AO on Biobanking requires documented informed consent before storing human tissues.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which law requires that all laboratory personnel be registered and licensed?',
        'choices'    => json_encode([
            'RA 5941',
            'RA 4688',
            'RA 10912',
            'RA 8504',
        ]),
        'answer'     => 'RA 5941',
        'explanation'=> 'Medical Technology practitioners must be licensed per RA 5941 to work in clinical settings.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which special stain is used to detect iron in tissue?',
        'choices'    => json_encode([
            'Prussian blue',
            'PAS',
            'Masson’s trichrome',
            'Congo red',
        ]),
        'answer'     => 'Prussian blue',
        'explanation'=> 'Prussian blue reacts ferric iron to produce blue hemosiderin deposits.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which stain highlights reticulin fibers besides GMS?',
        'choices'    => json_encode([
            'Weigert’s iron hematoxylin',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Weigert’s iron hematoxylin',
        'explanation'=> 'Weigert’s stain impregnates reticulin fibers for visualization under light microscopy.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 5,
        'question'   => 'Which law mandates that lab test results be released within a specified turnaround time?',
        'choices'    => json_encode([
            'None explicitly',
            'RA 4688',
            'RA 5941',
            'RA 10912',
        ]),
        'answer'     => 'None explicitly',
        'explanation'=> 'No Philippine law specifies exact turnaround times; it is governed by institutional policy.',
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

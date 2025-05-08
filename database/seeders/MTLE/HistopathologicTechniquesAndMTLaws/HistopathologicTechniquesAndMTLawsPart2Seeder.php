<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart2Seeder extends Seeder
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
        'part'       => 2,
        'question'   => 'Which reagent is used to demonstrate acid-fast bacilli in histopathology specimens?',
        'choices'    => json_encode([
            'Ziehl–Neelsen stain',
            'Hematoxylin and eosin',
            'Masson’s trichrome',
            'Silver methenamine',
        ]),
        'answer'     => 'Ziehl–Neelsen stain',
        'explanation'=> 'Ziehl–Neelsen uses carbol-fuchsin and acid alcohol to identify mycobacteria as red rods on blue background.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'What is the function of alcohol in the tissue processing sequence?',
        'choices'    => json_encode([
            'Dehydrating agent to remove water',
            'Clearing agent to remove paraffin',
            'Fixative to preserve proteins',
            'Counterstain in special stains',
        ]),
        'answer'     => 'Dehydrating agent to remove water',
        'explanation'=> 'Graded alcohols remove water from tissues prior to clearing and infiltration.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which embedding medium is optimal for immunofluorescence on frozen sections?',
        'choices'    => json_encode([
            'O.C.T. compound',
            'Paraffin wax',
            'Resin',
            'Gelatin',
        ]),
        'answer'     => 'O.C.T. compound',
        'explanation'=> 'Optimal Cutting Temperature compound supports cryosectioning and preserves antigenicity for IF.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which stain is used to highlight basement membranes in kidney biopsies?',
        'choices'    => json_encode([
            'Periodic acid–Schiff',
            'Hematoxylin and eosin',
            'Masson’s trichrome',
            'Oil red O',
        ]),
        'answer'     => 'Periodic acid–Schiff',
        'explanation'=> 'PAS oxidizes carbohydrates to aldehydes, staining basement membranes magenta.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which fixative is preferred for immunohistochemistry to preserve both morphology and antigenicity?',
        'choices'    => json_encode([
            '10% neutral buffered formalin',
            'Mercuric chloride',
            'Bouin’s solution',
            'Ethanol',
        ]),
        'answer'     => '10% neutral buffered formalin',
        'explanation'=> 'Buffered formalin balances fixation speed and antigen preservation for IHC assays.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which legislation requires clinical laboratories to secure a license to operate from the DOH?',
        'choices'    => json_encode([
            'RA 4688 (Clinical Laboratories Act)',
            'RA 5941',
            'RA 10912',
            'RA 9502',
        ]),
        'answer'     => 'RA 4688 (Clinical Laboratories Act)',
        'explanation'=> 'RA 4688 mandates licensure and regulation of clinical labs by the DOH.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'What is the minimum number of Continuing Professional Development (CPD) units required for MT license renewal?',
        'choices'    => json_encode([
            '45 units per three-year period',
            '15 units per year',
            '60 units per five-year period',
            'No CPD required',
        ]),
        'answer'     => '45 units per three-year period',
        'explanation'=> 'RA 10912 requires 45 CPD units every three years for MT license renewal.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which stain is used for demonstration of collagen fibers in tissue sections?',
        'choices'    => json_encode([
            'Masson’s trichrome',
            'PAS',
            'H&E',
            'Silver stain',
        ]),
        'answer'     => 'Masson’s trichrome',
        'explanation'=> 'Masson’s trichrome stains collagen green or blue, muscle red, and nuclei black.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which clearing agent is less toxic than xylene but used similarly?',
        'choices'    => json_encode([
            'Citrus-based substitute',
            'Formalin',
            'Alcohol',
            'Paraffin oil',
        ]),
        'answer'     => 'Citrus-based substitute',
        'explanation'=> 'Citrus-based clearants (limonene) are safer alternatives to xylene for routine use.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which DOH order classifies and grades laboratory biosafety levels?',
        'choices'    => json_encode([
            'Administrative Order No. 2007-0027',
            'Administrative Order No. 2005-0024',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'Administrative Order No. 2007-0027',
        'explanation'=> 'AO 2007-0027 prescribes biosafety requirements and categorizes laboratories by risk.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which embedding medium is used for electron microscopy?',
        'choices'    => json_encode([
            'Epoxy resin',
            'Paraffin wax',
            'O.C.T. compound',
            'Gelatin',
        ]),
        'answer'     => 'Epoxy resin',
        'explanation'=> 'Epoxy resin provides ultrathin sectioning (50–100 nm) needed for TEM analysis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'What is the penalty for practicing medical technology without a valid PRC license?',
        'choices'    => json_encode([
            'Fine and imprisonment up to six years',
            'Warning letter',
            'Community service',
            'No penalty',
        ]),
        'answer'     => 'Fine and imprisonment up to six years',
        'explanation'=> 'RA 5941 prescribes a fine and up to six years imprisonment for unlicensed practice.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which stain is used to identify amyloid deposits in tissue?',
        'choices'    => json_encode([
            'Congo red',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Congo red',
        'explanation'=> 'Congo red binds amyloid and exhibits apple-green birefringence under polarized light.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which destaining solution is used when reusing H&E-stained slides for immunostaining?',
        'choices'    => json_encode([
            'Warm acid alcohol',
            'Xylene',
            'Ethanol',
            'Water',
        ]),
        'answer'     => 'Warm acid alcohol',
        'explanation'=> 'Acid alcohol effectively removes H&E stains while preserving tissue morphology for IHC.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which law defines scope of practice and penalties for license violations of medical technologists?',
        'choices'    => json_encode([
            'RA 5941',
            'RA 10912',
            'RA 4688',
            'RA 9502',
        ]),
        'answer'     => 'RA 5941',
        'explanation'=> 'RA 5941 outlines MT scope, licensure requirements, and sanctions for infractions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which special stain highlights myelin in nerve tissue?',
        'choices'    => json_encode([
            'Luxol fast blue',
            'Masson’s trichrome',
            'Congo red',
            'Silver stain',
        ]),
        'answer'     => 'Luxol fast blue',
        'explanation'=> 'Luxol fast blue stains myelin sheaths blue for neuropathologic evaluation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which DOH administrative order outlines lab safety and waste disposal?',
        'choices'    => json_encode([
            'AO 2005-0024',
            'AO 2007-0027',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO 2005-0024',
        'explanation'=> 'AO 2005-0024 sets guidelines for biosafety, waste segregation, and disposal in labs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which stain demonstrates reticulin fibers in connective tissue?',
        'choices'    => json_encode([
            'Silver stain (Gomori’s)',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Silver stain (Gomori’s)',
        'explanation'=> 'Gomori’s silver stain impregnates reticulin fibers, appearing black against pale background.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which law requires labs to report HIV/AIDS cases to the DOH?',
        'choices'    => json_encode([
            'RA 8504 (AIDS Prevention and Control Act)',
            'RA 4688',
            'RA 5941',
            'RA 10912',
        ]),
        'answer'     => 'RA 8504 (AIDS Prevention and Control Act)',
        'explanation'=> 'RA 8504 mandates reporting of HIV/AIDS to DOH for surveillance and control measures.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 2,
        'question'   => 'Which special stain is used to detect iron in tissue (hemosiderin)?',
        'choices'    => json_encode([
            'Prussian blue',
            'PAS',
            'Masson’s trichrome',
            'Congo red',
        ]),
        'answer'     => 'Prussian blue',
        'explanation'=> 'Prussian blue reacts ferric iron to form blue ferric ferrocyanide, indicating hemosiderin deposits.',
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

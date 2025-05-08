<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart3Seeder extends Seeder
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
        'part'       => 3,
        'question'   => 'Which antigen retrieval method uses high pH buffer to unmask epitopes?',
        'choices'    => json_encode([
            'Tris-EDTA buffer',
            'Citrate buffer',
            'Formic acid',
            'EDTA decalcification',
        ]),
        'answer'     => 'Tris-EDTA buffer',
        'explanation'=> 'High pH Tris-EDTA buffer (pH 9) breaks formalin-induced cross-links effectively for certain antigens.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which permit must laboratory sections obtain to import histological reagents?',
        'choices'    => json_encode([
            'FDA Certificate of Product Registration',
            'PRC STP',
            'DOH license to operate',
            'BSP clearance',
        ]),
        'answer'     => 'FDA Certificate of Product Registration',
        'explanation'=> 'Imported reagents require FDA registration certifying safety and efficacy before importation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which stain is used to detect fungal organisms in tissue sections?',
        'choices'    => json_encode([
            'Gomori methenamine silver',
            'H&E',
            'PAS only',
            'Congo red',
        ]),
        'answer'     => 'Gomori methenamine silver',
        'explanation'=> 'GMS stains fungal cell walls black against a pale green background for easy identification.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which law prohibits fee-splitting and kickbacks in clinical laboratory services?',
        'choices'    => json_encode([
            'RA 4688',
            'RA 5941',
            'RA 10912',
            'RA 8504',
        ]),
        'answer'     => 'RA 4688',
        'explanation'=> 'The Clinical Laboratories Act (RA 4688) bans unethical practices including fee-splitting among labs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which special stain highlights elastic fibers in connective tissue?',
        'choices'    => json_encode([
            'Verhoeff–Van Gieson',
            'Masson’s trichrome',
            'PAS',
            'Congo red',
        ]),
        'answer'     => 'Verhoeff–Van Gieson',
        'explanation'=> 'VVG stains elastic fibers black and differentiates collagen in red.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which clearance agent is used to remove resin from embedded sections?',
        'choices'    => json_encode([
            'Xylene',
            'Alcohol',
            'Formalin',
            'Water',
        ]),
        'answer'     => 'Xylene',
        'explanation'=> 'Xylene clears both paraffin and resin, making sections transparent for mounting.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which DOH administrative order regulates laboratory biohazard waste handling?',
        'choices'    => json_encode([
            'AO No. 2005-0024',
            'AO No. 2007-0027',
            'RA 4688',
            'BO No. 14',
        ]),
        'answer'     => 'AO No. 2005-0024',
        'explanation'=> 'AO 2005-0024 provides guidelines on biosafety and proper disposal of biohazardous waste.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which stain is preferred for detecting mucin in adenocarcinoma?',
        'choices'    => json_encode([
            'Mucicarmine',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Mucicarmine',
        'explanation'=> 'Mucicarmine specifically stains epithelial mucins in red, aiding adenocarcinoma identification.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which law requires labs to maintain patient records for a minimum of 5 years?',
        'choices'    => json_encode([
            'RA 4688',
            'RA 5941',
            'RA 10912',
            'RA 8504',
        ]),
        'answer'     => 'RA 4688',
        'explanation'=> 'RA 4688 mandates retention of lab records for at least five years for audit and quality purposes.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which embedding medium is used for histochemical enzyme assays?',
        'choices'    => json_encode([
            'Gelatin',
            'Paraffin',
            'Resin',
            'O.C.T.',
        ]),
        'answer'     => 'Freezing media like O.C.T.',
        'explanation'=> 'O.C.T. preserves enzyme activity by embedding at low temperatures for histochemical assays.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which stain detects calcium deposits in tissue sections?',
        'choices'    => json_encode([
            'Von Kossa',
            'Congo red',
            'PAS',
            'H&E',
        ]),
        'answer'     => 'Von Kossa',
        'explanation'=> 'Von Kossa silver method demonstrates phosphate of calcium as black deposits.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which process dehydrates sections before staining to remove excess water?',
        'choices'    => json_encode([
            'Deparaffinization',
            'Hydration',
            'Clearing',
            'Decalcification',
        ]),
        'answer'     => 'Deparaffinization',
        'explanation'=> 'Deparaffinization uses xylene and graded alcohols to remove paraffin and rehydrate tissue for staining.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which PRC-issued permit allows medical technologists to practice abroad temporarily?',
        'choices'    => json_encode([
            'Certificate of Good Standing',
            'STP',
            'Live birth certificate',
            'PRC Life License',
        ]),
        'answer'     => 'Certificate of Good Standing',
        'explanation'=> 'PRC issues Good Standing certificates for practitioners seeking employment or practice overseas.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which stain is used to demonstrate acid mucosubstances like glycosaminoglycans?',
        'choices'    => json_encode([
            'Alcian blue',
            'H&E',
            'Masson’s trichrome',
            'Congo red',
        ]),
        'answer'     => 'Alcian blue',
        'explanation'=> 'Alcian blue binds acidic mucopolysaccharides, staining them blue at pH 2.5.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which biosafety level is required for handling Mycobacterium tuberculosis cultures?',
        'choices'    => json_encode([
            'BSL-3',
            'BSL-2',
            'BSL-4',
            'BSL-1',
        ]),
        'answer'     => 'BSL-3',
        'explanation'=> 'M. tuberculosis requires BSL-3 containment to prevent aerosol transmission.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which special stain highlights basal membranes in liver biopsies?',
        'choices'    => json_encode([
            'Reticulin (Gomori’s silver)',
            'Masson’s trichrome',
            'H&E',
            'Congo red',
        ]),
        'answer'     => 'Reticulin (Gomori’s silver)',
        'explanation'=> 'Gomori’s silver reticulin stain highlights the fine network of reticulin around hepatocytes.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which law mandates proficiency testing participation for clinical labs?',
        'choices'    => json_encode([
            'RA 4688',
            'RA 10912',
            'RA 5941',
            'RA 8504',
        ]),
        'answer'     => 'RA 4688',
        'explanation'=> 'RA 4688 requires labs to engage in proficiency testing programs to ensure quality results.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which stain is used to identify Helicobacter pylori in gastric biopsies?',
        'choices'    => json_encode([
            'Warthin-Starry silver stain',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Warthin-Starry silver stain',
        'explanation'=> 'Warthin-Starry impregnates silver to visualize H. pylori as dark bacilli against yellow background.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which process follows embedding and precedes staining in slide preparation?',
        'choices'    => json_encode([
            'Microtomy',
            'Fixation',
            'Decalcification',
            'Antigen retrieval',
        ]),
        'answer'     => 'Microtomy',
        'explanation'=> 'Microtomy slices embedded blocks into thin sections for mounting and subsequent staining.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 3,
        'question'   => 'Which professional regulation mandates license display in clinical laboratories?',
        'choices'    => json_encode([
            'RA 4688',
            'RA 5941',
            'RA 10912',
            'DOH AO 2007-0027',
        ]),
        'answer'     => 'RA 4688',
        'explanation'=> 'RA 4688 requires lab licenses and technologist certificates to be posted conspicuously in the laboratory.',
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

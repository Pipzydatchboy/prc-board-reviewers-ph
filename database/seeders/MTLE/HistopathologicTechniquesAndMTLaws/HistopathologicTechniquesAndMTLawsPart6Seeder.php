<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart6Seeder extends Seeder
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
        'part'       => 6,
        'question'   => 'Which fixative is ideal for preserving lipids in frozen sections?',
        'choices'    => json_encode([
            'Osmium tetroxide',
            'Formalin',
            'Bouin’s solution',
            'Ethanol',
        ]),
        'answer'     => 'Osmium tetroxide',
        'explanation'=> 'Osmium tetroxide stabilizes and stains lipids black in ultra- and cryosections.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which stain is used to identify neuroendocrine cells by chromogranin affinity?',
        'choices'    => json_encode([
            'Chromogranin immunostain',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Chromogranin immunostain',
        'explanation'=> 'Chromogranin A antibodies highlight neuroendocrine granules in IHC.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which reagent removes paraffin from tissue sections before staining?',
        'choices'    => json_encode([
            'Xylene',
            'Alcohol',
            'Formalin',
            'Water',
        ]),
        'answer'     => 'Xylene',
        'explanation'=> 'Xylene clears paraffin, rendering sections accessible to aqueous stains.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which DOH order requires clinical labs to implement Quality Management Systems?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2005-0024',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'AO 2013-0125 mandates QMS elements including QC, QA, and proficiency testing.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which stain is used to demonstrate mast cell granules metachromatically?',
        'choices'    => json_encode([
            'Toluidine blue',
            'H&E',
            'PAS',
            'Congo red',
        ]),
        'answer'     => 'Toluidine blue',
        'explanation'=> 'Toluidine blue stains mast cell granules purple-red (metachromasia).',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which stain is used to detect neurofibrillary tangles besides Bielschowsky?',
        'choices'    => json_encode([
            'Gallyas silver stain',
            'H&E',
            'PAS',
            'Congo red',
        ]),
        'answer'     => 'Gallyas silver stain',
        'explanation'=> 'Gallyas method highlights neurofibrillary changes with high sensitivity.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which embedding temperature range preserves antigenicity for IHC?',
        'choices'    => json_encode([
            '56–58°C',
            '60–62°C',
            '65–70°C',
            '50–52°C',
        ]),
        'answer'     => '56–58°C',
        'explanation'=> 'Embedding at 56–58°C minimizes antigen denaturation while allowing infiltration.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which law requires calibration and maintenance records for lab equipment?',
        'choices'    => json_encode([
            'RA 4688',
            'RA 5941',
            'AO No. 2013-0125',
            'RA 10912',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'AO 2013-0125 mandates equipment maintenance logs for quality assurance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which stain is optimal for demonstrating amyloid besides Congo red?',
        'choices'    => json_encode([
            'Thioflavin T',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Thioflavin T',
        'explanation'=> 'Thioflavin T fluoresces bound amyloid green under UV, aiding detection.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which process is critical before antigen retrieval in IHC?',
        'choices'    => json_encode([
            'Deparaffinization and rehydration',
            'Decalcification',
            'Embedding',
            'Clearing only',
        ]),
        'answer'     => 'Deparaffinization and rehydration',
        'explanation'=> 'Removal of paraffin and rehydration are necessary for buffers to contact epitopes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which stain is used to detect muscle striations and fibers?',
        'choices'    => json_encode([
            'Masson’s trichrome',
            'H&E',
            'Silver stain',
            'PAS',
        ]),
        'answer'     => 'Masson’s trichrome',
        'explanation'=> 'Trichrome differentiates muscle (red) from collagen (blue/green) fibers.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which biosafety level is required for routine histopathology of formalin-fixed tissues?',
        'choices'    => json_encode([
            'BSL-2',
            'BSL-1',
            'BSL-3',
            'BSL-4',
        ]),
        'answer'     => 'BSL-2',
        'explanation'=> 'Formalin fixation reduces infectivity, but BSL-2 practices are recommended for tissue handling.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which instrument is used to control section thickness precisely?',
        'choices'    => json_encode([
            'Microtome micrometer',
            'Spectrophotometer',
            'Refractometer',
            'Thermometer',
        ]),
        'answer'     => 'Microtome micrometer',
        'explanation'=> 'The micrometer wheel on microtomes sets the exact advance per cut.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which foundation law mandates continuing professional education for technologists?',
        'choices'    => json_encode([
            'RA 10912',
            'RA 5941',
            'RA 4688',
            'RA 8504',
        ]),
        'answer'     => 'RA 10912',
        'explanation'=> 'RA 10912 requires CPD units as a prerequisite for license renewal.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which stain highlights collagen fibers besides trichrome?',
        'choices'    => json_encode([
            'Picrosirius red',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Picrosirius red',
        'explanation'=> 'Under polarized light, picrosirius red enhances birefringence of collagen.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which process is used to hydrate sections after xylene clearing?',
        'choices'    => json_encode([
            'Descending alcohol series',
            'Heating',
            'Direct water immersion',
            'Antigen retrieval',
        ]),
        'answer'     => 'Descending alcohol series',
        'explanation'=> 'Sections pass through decreasing alcohol concentrations to rehydrate before stains.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which DOH order covers occupational safety for lab personnel?',
        'choices'    => json_encode([
            'AO No. 2005-0024',
            'AO No. 2013-0125',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2005-0024',
        'explanation'=> 'AO 2005-0024 includes guidelines on PPE and safety procedures in labs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which stain is used to detect acid-fast organisms besides Ziehl–Neelsen?',
        'choices'    => json_encode([
            'Auramine-rhodamine',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Auramine-rhodamine',
        'explanation'=> 'Auramine-rhodamine fluorescent stain highlights mycobacteria under UV light.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which embedment is easiest to section at 1–2 µm for light microscopy?',
        'choices'    => json_encode([
            'Resin (e.g., glycol methacrylate)',
            'Paraffin wax',
            'O.C.T.',
            'Gelatin',
        ]),
        'answer'     => 'Resin (e.g., glycol methacrylate)',
        'explanation'=> 'Resins allow semithin sections with minimal compression for high-resolution LM.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 6,
        'question'   => 'Which law requires that only licensed technologists operate laboratory instruments?',
        'choices'    => json_encode([
            'RA 5941',
            'RA 4688',
            'RA 10912',
            'RA 8504',
        ]),
        'answer'     => 'RA 5941',
        'explanation'=> 'Only licensed medical technologists may perform and interpret lab procedures under RA 5941.',
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

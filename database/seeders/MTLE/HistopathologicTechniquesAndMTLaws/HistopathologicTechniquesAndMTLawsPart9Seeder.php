<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart9Seeder extends Seeder
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
        'part'       => 9,
        'question'   => 'Which stain is used to detect mycobacterial cell walls by fluorescence?',
        'choices'    => json_encode([
            'Auramine-O',
            'Ziehl–Neelsen',
            'GMS',
            'PAS',
        ]),
        'answer'     => 'Auramine-O',
        'explanation'=> 'Auramine-O fluorochrome binds mycolic acids and fluoresces yellow-green under UV.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which fixative is best for combined light and electron microscopy?',
        'choices'    => json_encode([
            'Paraformaldehyde-glutaraldehyde mix',
            'Formalin alone',
            'Carnoy’s solution',
            'Ethanol',
        ]),
        'answer'     => 'Paraformaldehyde-glutaraldehyde mix',
        'explanation'=> 'Combines good ultrastructure preservation with antigenicity for correlative studies.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which stain highlights Reed-Sternberg cells in Hodgkin lymphoma?',
        'choices'    => json_encode([
            'CD15 and CD30 IHC',
            'H&E',
            'PAS',
            'Giemsa',
        ]),
        'answer'     => 'CD15 and CD30 IHC',
        'explanation'=> 'Reed-Sternberg cells are positive for CD15 and CD30 on immunohistochemistry.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which DOH order mandates proficiency testing frequency for chemistry analytes?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'RA 4688',
            'AO No. 2005-0024',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'Specifies periodic participation in proficiency testing for various lab disciplines.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which antigen retrieval buffer is preferred for nuclear antigens?',
        'choices'    => json_encode([
            'Citrate pH 6.0',
            'Tris-EDTA pH 9.0',
            'Glycine pH 3.5',
            'PBS pH 7.4',
        ]),
        'answer'     => 'Citrate pH 6.0',
        'explanation'=> 'Gentler acidic retrieval preserves nuclear epitope integrity for many transcription factors.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which stain is used to visualize neurofilaments in neural tissue?',
        'choices'    => json_encode([
            'Immunostain for neurofilament protein',
            'H&E',
            'Silver stain',
            'Cresyl violet',
        ]),
        'answer'     => 'Immunostain for neurofilament protein',
        'explanation'=> 'IHC for neurofilament proteins highlights axons and neuronal processes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which legislation requires laboratories to participate in external quality assessment schemes?',
        'choices'    => json_encode([
            'RA 4688',
            'RA 5941',
            'AO No. 2013-0125',
            'RA 10912',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'Mandates EQA participation to ensure accuracy across laboratory networks.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which stain is used to detect mucins in colorectal adenocarcinoma?',
        'choices'    => json_encode([
            'Mucicarmine',
            'H&E',
            'PAS',
            'Alcian blue',
        ]),
        'answer'     => 'Alcian blue',
        'explanation'=> 'Stains acidic mucins in mucinous adenocarcinomas blue at pH 2.5.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which fixative is used for rapid intraoperative frozen section diagnosis?',
        'choices'    => json_encode([
            '10% formalin',
            'Carnoy’s solution',
            'Liquid nitrogen freezing',
            'Ethanol',
        ]),
        'answer'     => 'Liquid nitrogen freezing',
        'explanation'=> 'Snap-freezing preserves tissue for rapid cryostat sectioning without chemical fixation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which stain is optimal for detecting phospholipids in tissues?',
        'choices'    => json_encode([
            'Osmium tetroxide',
            'Oil red O',
            'Sudan black B',
            'PAS',
        ]),
        'answer'     => 'Osmium tetroxide',
        'explanation'=> 'Post-fixation with osmium tetroxide stains lipids black, including phospholipids.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which instrument monitors paraffin embedding temperature precisely?',
        'choices'    => json_encode([
            'Thermocouple or digital thermometer',
            'Refractometer',
            'Micrometer',
            'Spectrophotometer',
        ]),
        'answer'     => 'Thermocouple or digital thermometer',
        'explanation'=> 'Accurate temperature measurement ensures proper paraffin viscosity and infiltration.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which law governs the protection of laboratory employees against occupational hazards?',
        'choices'    => json_encode([
            'Occupational Safety and Health Standards (DOLE-OSH)',
            'RA 4688',
            'RA 5941',
            'AO No. 2013-0125',
        ]),
        'answer'     => 'Occupational Safety and Health Standards (DOLE-OSH)',
        'explanation'=> 'DOLE-OSH sets workplace safety standards including laboratory environments.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which embedding medium allows sectioning at -20°C for cryostat?',
        'choices'    => json_encode([
            'O.C.T. compound',
            'Paraffin wax',
            'Resin',
            'Gelatin',
        ]),
        'answer'     => 'O.C.T. compound',
        'explanation'=> 'Formulated for stability and cutting quality in cryostats at sub-zero temperatures.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which quality control measure verifies stain reagent performance daily?',
        'choices'    => json_encode([
            'Control tissue sections',
            'Checking expiration date',
            'Visual inspection of stains',
            'No control needed',
        ]),
        'answer'     => 'Control tissue sections',
        'explanation'=> 'Known positive and negative control tissues ensure consistency and accuracy of stains.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which fixative is used in chromatin immunoprecipitation assays on tissue sections?',
        'choices'    => json_encode([
            'Formaldehyde crosslinking',
            'Glutaraldehyde',
            'Ethanol',
            'Acetone',
        ]),
        'answer'     => 'Formaldehyde crosslinking',
        'explanation'=> '1% formaldehyde crosslinks DNA-protein complexes for subsequent ChIP analysis.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which stain is used for demonstrating basement membrane reduplication in membranous nephropathy?',
        'choices'    => json_encode([
            'Jones methenamine silver',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Jones methenamine silver',
        'explanation'=> 'JMS delineates fine basement membrane spikes and holes characteristic of MN.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which law requires submission of lab data for national surveillance programs?',
        'choices'    => json_encode([
            'RA 8504 (AIDS Prevention and Control Act)',
            'RA 4688',
            'RA 5941',
            'RA 10912',
        ]),
        'answer'     => 'RA 8504 (AIDS Prevention and Control Act)',
        'explanation'=> 'Mandates reporting of HIV/AIDS lab results to DOH for national tracking.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which stain is used to detect basement membranes in colon biopsies besides PAS?',
        'choices'    => json_encode([
            'Silver stain (Gomori’s)',
            'H&E',
            'Trichrome',
            'Congo red',
        ]),
        'answer'     => 'Silver stain (Gomori’s)',
        'explanation'=> 'Gomori’s silver reticulin highlights the muscularis mucosa and basement membranes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which fixative is used for rapid cytologic smears during surgery?',
        'choices'    => json_encode([
            '95% ethanol',
            'Formalin',
            'Carnoy’s solution',
            'Bouin’s solution',
        ]),
        'answer'     => '95% ethanol',
        'explanation'=> 'Ethanol fixes cytologic smears quickly while preserving cellular detail.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 9,
        'question'   => 'Which organization issues ISO 15189 accreditation for medical laboratories?',
        'choices'    => json_encode([
            'Accreditation bodies recognized by ISO/IEC',
            'FDA',
            'PRC',
            'DOH',
        ]),
        'answer'     => 'Accreditation bodies recognized by ISO/IEC',
        'explanation'=> 'National accrediting bodies under ISO guidelines grant ISO 15189 certifications.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

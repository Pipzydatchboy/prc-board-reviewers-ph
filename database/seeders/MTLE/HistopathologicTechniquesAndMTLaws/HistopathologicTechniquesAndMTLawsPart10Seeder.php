<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart10Seeder extends Seeder
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
        'part'       => 10,
        'question'   => 'Which stain is used to identify lymphatic vessels in tissue sections?',
        'choices'    => json_encode([
            'D2-40 (podoplanin) IHC',
            'CD31 IHC',
            'Masson’s trichrome',
            'H&E',
        ]),
        'answer'     => 'D2-40 (podoplanin) IHC',
        'explanation'=> 'D2-40 antibody selectively stains lymphatic endothelium, distinguishing lymphatics from blood vessels.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which fixative is recommended for preserving antigenicity in paraffin-embedded tissues for IHC?',
        'choices'    => json_encode([
            '10% neutral buffered formalin for 24 hours',
            'Bouin’s solution overnight',
            'Glutaraldehyde alone',
            'Carnoy’s solution',
        ]),
        'answer'     => '10% neutral buffered formalin for 24 hours',
        'explanation'=> 'Optimal fixation time preserves morphology while minimizing antigen masking for IHC.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain is used to detect hemosiderin in tissue besides Prussian blue?',
        'choices'    => json_encode([
            'Perl’s stain',
            'Masson’s trichrome',
            'Congo red',
            'Alizarin red',
        ]),
        'answer'     => 'Perl’s stain',
        'explanation'=> 'Perl’s Prussian blue reaction is the classic method to detect ferric iron in hemosiderin.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which DOH order outlines laboratory accreditation renewal procedures?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2007-0027',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'It specifies renewal requirements and periodic reassessment of accredited labs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain highlights elastic lamina in blood vessels?',
        'choices'    => json_encode([
            'Verhoeff–Van Gieson',
            'Masson’s trichrome',
            'PAS',
            'H&E',
        ]),
        'answer'     => 'Verhoeff–Van Gieson',
        'explanation'=> 'VVG stain prominent elastic fibers black and collagen red, useful in vascular pathology.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain is used to demonstrate basement membrane reduplication in diabetic microangiopathy?',
        'choices'    => json_encode([
            'Periodic acid–Schiff',
            'Masson’s trichrome',
            'Jones silver stain',
            'H&E',
        ]),
        'answer'     => 'Periodic acid–Schiff',
        'explanation'=> 'PAS accentuates laminated basement membranes typical of diabetic microangiopathy.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which fixative may be used for dual purpose light and electron microscopy?',
        'choices'    => json_encode([
            'Paraformaldehyde-glutaraldehyde mix',
            'Formalin alone',
            'Carnoy’s solution',
            'Bouin’s solution',
        ]),
        'answer'     => 'Paraformaldehyde-glutaraldehyde mix',
        'explanation'=> 'Combines adequate cross-linking for ultrastructure and preserves antigenicity.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain highlights neuronal Nissl substance in frozen sections?',
        'choices'    => json_encode([
            'Cresyl violet',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Cresyl violet',
        'explanation'=> 'Cresyl violet stains Nissl bodies in neuronal cytoplasm, aiding neurologic pathology.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which legislation mandates the confidentiality of genetic testing results in pathology labs?',
        'choices'    => json_encode([
            'RA 10173 (Data Privacy Act)',
            'RA 5941',
            'RA 4688',
            'RA 10912',
        ]),
        'answer'     => 'RA 10173 (Data Privacy Act)',
        'explanation'=> 'Ensures sensitive genetic information is secured and shared only with proper consent.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain is used to detect copper deposition in Wilson disease?',
        'choices'    => json_encode([
            'Rhodanine',
            'Prussian blue',
            'Congo red',
            'Masson’s trichrome',
        ]),
        'answer'     => 'Rhodanine',
        'explanation'=> 'Rhodanine stains copper-containing deposits red in liver tissue.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which instrument measures thickness of sections produced by a microtome?',
        'choices'    => json_encode([
            'Section thickness gauge (micrometer)',
            'Spectrophotometer',
            'Refractometer',
            'Thermometer',
        ]),
        'answer'     => 'Section thickness gauge (micrometer)',
        'explanation'=> 'Micrometers on microtomes ensure accurate and consistent section thickness.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain is used to demonstrate amyloid in the kidney besides Congo red?',
        'choices'    => json_encode([
            'Thioflavin S',
            'PAS',
            'H&E',
            'Silver stain',
        ]),
        'answer'     => 'Thioflavin S',
        'explanation'=> 'Thioflavin S fluoresces bound amyloid green under fluorescent microscopy.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which DOH order requires validation of new test methods before routine use?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2005-0024',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'Mandates method validation, verification, and documentation for new assays.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain is optimal for visualizing collagen cross-links in tissue?',
        'choices'    => json_encode([
            'Picrosirius red under polarized light',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Picrosirius red under polarized light',
        'explanation'=> 'Enhances birefringence of collagen fibers allowing assessment of cross-linking.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which fixative preserves cellular ultrastructure best for TEM?',
        'choices'    => json_encode([
            'Glutaraldehyde',
            'Formalin',
            'Ethanol',
            'Bouin’s solution',
        ]),
        'answer'     => 'Glutaraldehyde',
        'explanation'=> 'Cross-links proteins extensively, preserving fine ultrastructural details.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain is used to detect mucicarmine-positive adenocarcinomas?',
        'choices'    => json_encode([
            'Mucicarmine',
            'PAS',
            'Alcian blue',
            'H&E',
        ]),
        'answer'     => 'Mucicarmine',
        'explanation'=> 'Specifically stains epithelial mucins red in adenocarcinomas.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which process is critical before coverslipping to avoid bubble formation?',
        'choices'    => json_encode([
            'Proper mounting medium application',
            'Air drying without medium',
            'Direct flame',
            'Freezing slides',
        ]),
        'answer'     => 'Proper mounting medium application',
        'explanation'=> 'Ensures even spread and eliminates air bubbles under coverslip for clear imaging.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which stain highlights epidermal basement membrane zone in dermatopathology?',
        'choices'    => json_encode([
            'Periodic acid–Schiff',
            'H&E',
            'Masson’s trichrome',
            'Silver stain',
        ]),
        'answer'     => 'Periodic acid–Schiff',
        'explanation'=> 'PAS vividly outlines the dermal-epidermal junction by staining BM components.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which law requires laboratories to implement corrective and preventive actions for nonconformities?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'RA 4688',
            'RA 5941',
            'RA 10912',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'Quality management system requirements include CAPA processes for lab quality.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 10,
        'question'   => 'Which organization sets international standards for histopathology lab practices?',
        'choices'    => json_encode([
            'CLSI',
            'FDA',
            'PRC',
            'DOH',
        ]),
        'answer'     => 'CLSI',
        'explanation'=> 'Clinical and Laboratory Standards Institute publishes guidelines for lab quality and procedures.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

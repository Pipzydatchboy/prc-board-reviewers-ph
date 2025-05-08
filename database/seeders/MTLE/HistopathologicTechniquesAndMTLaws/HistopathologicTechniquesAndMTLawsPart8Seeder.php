<?php

namespace Database\Seeders\MTLE\HistopathologicTechniquesAndMTLaws;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistopathologicTechniquesAndMTLawsPart8Seeder extends Seeder
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
        'part'       => 8,
        'question'   => 'Which stain is used to demonstrate carbohydrate-rich fungal cell walls besides GMS and PAS?',
        'choices'    => json_encode([
            'Calcofluor white',
            'H&E',
            'Congo red',
            'Masson’s trichrome',
        ]),
        'answer'     => 'Calcofluor white',
        'explanation'=> 'Calcofluor binds chitin/glucan in fungal walls and fluoresces under UV light.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which fixative is preferred for cytogenetic studies in histopathology specimens?',
        'choices'    => json_encode([
            'Methanol-acetic acid',
            'Formalin',
            'Bouin’s solution',
            'Glutaraldehyde',
        ]),
        'answer'     => 'Methanol-acetic acid',
        'explanation'=> 'Methanol-acetic acid preserves chromosomes for karyotyping and FISH.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain highlights basement membranes in pulmonary pathology?',
        'choices'    => json_encode([
            'Reticulin silver stain',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Reticulin silver stain',
        'explanation'=> 'Silver reticulin stains type III collagen in alveolar walls and basement membranes.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which embedding medium allows immunohistochemical staining on paraffin sections without dewaxing artifacts?',
        'choices'    => json_encode([
            'Paraffin with low melting point',
            'O.C.T.',
            'Resin',
            'Gelatin',
        ]),
        'answer'     => 'Paraffin with low melting point',
        'explanation'=> 'Low melting-point paraffin reduces heat damage and improves antigen preservation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which DOH order mandates the establishment of a quality assurance officer in clinical labs?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2005-0024',
            'RA 4688',
            'RA 5941',
        ]),
        'answer'     => 'AO No. 2013-0125',
        'explanation'=> 'It requires assignment of QA/QC officers to monitor lab performance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain is used to detect Helicobacter in immunohistochemistry?',
        'choices'    => json_encode([
            'Anti-H. pylori antibody stain',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Anti-H. pylori antibody stain',
        'explanation'=> 'IHC using specific antibodies reliably identifies H. pylori in gastric biopsies.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which law requires submission of lab results to the National Reference Laboratories for TB?',
        'choices'    => json_encode([
            'RA 11319 (UHC Act)',
            'RA 4688',
            'RA 5941',
            'RA 8504',
        ]),
        'answer'     => 'RA 11319 (UHC Act)',
        'explanation'=> 'UHC Act mandates referral of TB specimens and results to reference labs.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain highlights melanin and argentaffin granules separately?',
        'choices'    => json_encode([
            'Fontana-Masson',
            'H&E',
            'PAS',
            'Trichrome',
        ]),
        'answer'     => 'Fontana-Masson',
        'explanation'=> 'It stains melanin and argentaffin granules black via argentaffin reaction.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which fixative is best for preserving mitochondrial enzymes in cytochemical staining?',
        'choices'    => json_encode([
            'Formalin-free Zamboni’s fixative',
            'Formalin',
            'Alcohol',
            'Bouin’s solution',
        ]),
        'answer'     => 'Formalin-free Zamboni’s fixative',
        'explanation'=> 'Zamboni’s fixative preserves enzyme activity and ultrastructure for cytochemistry.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain is used for detection of neutral lipids besides Oil red O?',
        'choices'    => json_encode([
            'Sudan black B',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Sudan black B',
        'explanation'=> 'Sudan black B stains neutral lipids black in frozen sections, complementing Oil Red O.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which process is critical to avoid antigen masking in immunofluorescence?',
        'choices'    => json_encode([
            'Fixation with cold acetone or alcohol',
            'Formalin fixation only',
            'Embedded in paraffin',
            'High-temperature antigen retrieval',
        ]),
        'answer'     => 'Fixation with cold acetone or alcohol',
        'explanation'=> 'Alcohol/acetone fixation preserves epitopes and avoids excessive cross-linking.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //12
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain is used to detect calcium besides Von Kossa?',
        'choices'    => json_encode([
            'Alizarin red',
            'PAS',
            'H&E',
            'Silver stain',
        ]),
        'answer'     => 'Alizarin red',
        'explanation'=> 'Alizarin red binds calcium ions, staining deposits orange-red in tissue sections.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which fixative is best for preserving glycogen and is used in PAS staining?',
        'choices'    => json_encode([
            'Carnoy’s solution',
            'Formalin',
            'Bouin’s solution',
            'Glutaraldehyde',
        ]),
        'answer'     => 'Carnoy’s solution',
        'explanation'=> 'Carnoy’s (ethanol-chloroform-acetic) preserves carbohydrates like glycogen for PAS.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which legislation mandates the standardization of histopathology laboratory protocols?',
        'choices'    => json_encode([
            'None explicit',
            'RA 4688',
            'RA 5941',
            'AO No. 2013-0125',
        ]),
        'answer'     => 'None explicit',
        'explanation'=> 'Protocol standardization is guided by DOH AOs and CLSI guidelines, not law.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //15
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain is used to demonstrate mucopolysaccharides in connective tissue?',
        'choices'    => json_encode([
            'Alcian blue',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Alcian blue',
        'explanation'=> 'Alcian blue stains acidic mucopolysaccharides blue at pH 2.5.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //16
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which fixative is used for preserving DNA quality for FISH assays?',
        'choices'    => json_encode([
            'Methacarn',
            'Formalin',
            'Bouin’s solution',
            'Glutaraldehyde',
        ]),
        'answer'     => 'Methacarn',
        'explanation'=> 'Methacarn (methanol–Carnoy’s) preserves nucleic acids for in situ hybridization.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //17
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain is used to identify keratin in epithelial tumors?',
        'choices'    => json_encode([
            'Cytokeratin immunostain',
            'H&E',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Cytokeratin immunostain',
        'explanation'=> 'IHC with anti-cytokeratin antibodies highlights epithelial-derived tumor cells.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which process prevents drying artifacts during slide storage?',
        'choices'    => json_encode([
            'Coverslipping with mounting medium',
            'Air-drying without cover',
            'Storing wet',
            'Freezing',
        ]),
        'answer'     => 'Coverslipping with mounting medium',
        'explanation'=> 'Mounting medium and coverslip seal tissue and prevent desiccation and artifact formation.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which DOH administrative order covers laboratory information system security?',
        'choices'    => json_encode([
            'AO No. 2013-0125',
            'AO No. 2005-0024',
            'RA 10173',
            'RA 5941',
        ]),
        'answer'     => 'RA 10173',
        'explanation'=> 'Data Privacy Act governs security of lab information systems and patient data.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 37,
        'part'       => 8,
        'question'   => 'Which stain is used to detect lipids in paraffin sections?',
        'choices'    => json_encode([
            'Osmium tetroxide post-fixation',
            'Oil red O',
            'PAS',
            'Silver stain',
        ]),
        'answer'     => 'Osmium tetroxide post-fixation',
        'explanation'=> 'Osmium tetroxide post-fixation stains lipids black in embedded paraffin sections.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

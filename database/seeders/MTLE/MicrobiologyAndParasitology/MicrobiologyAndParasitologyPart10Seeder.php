<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart10Seeder extends Seeder
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
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which bacterium is identified by green colonies on Hektoen enteric agar due to hydrogen sulfide production?',
        'choices'     => json_encode([
            'Salmonella enterica',
            'Shigella flexneri',
            'Escherichia coli',
            'Enterococcus faecalis',
        ]),
        'answer'      => 'Salmonella enterica',
        'explanation' => 'Salmonella reduces thiosulfate to H₂S, forming greenish-black colonies on HE agar.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which stain is used to detect Chlamydia trachomatis elementary bodies with fluorescent antibodies?',
        'choices'     => json_encode([
            'Fluorescent antibody stain',
            'Giemsa stain',
            'Gram stain',
            'Lactophenol cotton blue',
        ]),
        'answer'      => 'Fluorescent antibody stain',
        'explanation' => 'DFA uses FITC-labeled antibodies to detect Chlamydia elementary bodies in cells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which rapid test detects influenza A and B by immunochromatography in nasal swabs?',
        'choices'     => json_encode([
            'Lateral flow immunoassay',
            'PCR',
            'Culture',
            'ELISA',
        ]),
        'answer'      => 'Lateral flow immunoassay',
        'explanation' => 'Rapid immunochromatographic assays detect viral antigens giving results in minutes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which medium selects for Vibrio cholerae by alkaline pH and thiosulfate citrate bile salts?',
        'choices'     => json_encode([
            'TCBS agar',
            'MacConkey agar',
            'Blood agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'TCBS agar',
        'explanation' => 'TCBS pH 8.6 and bile salts inhibit non-vibrio; sucrose fermentation produces yellow colonies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which stain is used to visualize Pneumocystis jirovecii cysts by Calcofluor white?',
        'choices'     => json_encode([
            'Calcofluor white',
            'Giemsa stain',
            'Gram stain',
            'India ink',
        ]),
        'answer'      => 'Calcofluor white',
        'explanation' => 'Calcofluor binds to fungal cell wall chitin, fluorescing cysts under UV microscopy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which medium supports growth of Mycobacterium tuberculosis by mycobactin requirement?',
        'choices'     => json_encode([
            'Middlebrook 7H11 agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'      => 'Middlebrook 7H11 agar',
        'explanation' => 'Has supplements including oleic acid, albumin, dextrose, and mycobactin J for MTB growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which test differentiates Proteus species by phenylalanine deaminase activity?',
        'choices'     => json_encode([
            'Phenylalanine deaminase test',
            'Urease test',
            'Indole test',
            'Citrate test',
        ]),
        'answer'      => 'Phenylalanine deaminase test',
        'explanation' => 'Proteus spp. remove amino group from phenylalanine producing phenylpyruvic acid, detected by ferric chloride.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which molecular assay is used for detection of Mycobacterium avium complex in HIV patients?',
        'choices'     => json_encode([
            'PCR',
            'ELISA',
            'Culture',
            'Smear microscopy',
        ]),
        'answer'      => 'PCR',
        'explanation' => 'PCR targeting IS1245 and hsp65 genes rapidly identifies MAC in clinical specimens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which stain differentiates Rhizopus and Mucor species by broad non-septate hyphae in tissue?',
        'choices'     => json_encode([
            'Gomori methenamine silver',
            'Gram stain',
            'PAS stain',
            'India ink',
        ]),
        'answer'      => 'Gomori methenamine silver',
        'explanation' => 'GMS highlights broad ribbon-like hyphae without septa branching at wide angles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which medium is used to isolate Campylobacter jejuni by microaerophilic conditions and charcoal cephalothin medium?',
        'choices'     => json_encode([
            'CCDA',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'CCDA',
        'explanation' => 'Charcoal cefoperazone deoxycholate agar selects for Campylobacter spp. by antibiotics and charcoal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which rapid antigen test is used for detection of rotavirus by latex agglutination?',
        'choices'     => json_encode([
            'Latex agglutination',
            'PCR',
            'Culture',
            'Electron microscopy',
        ]),
        'answer'      => 'Latex agglutination',
        'explanation' => 'Detects rotavirus capsid antigens in stool samples quickly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which test differentiates Haemophilus influenzae type b by polyribosylribitol phosphate antigen detection?',
        'choices'     => json_encode([
            'Latex agglutination',
            'PCR',
            'Culture',
            'ELISA',
        ]),
        'answer'      => 'Latex agglutination',
        'explanation' => 'Detects PRP capsule antigen in CSF or serum for rapid Hib meningitis diagnosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which stain is used to visualize Cryptosporidium parvum oocysts by modified Ziehl-Neelsen?',
        'choices'     => json_encode([
            'Modified Ziehl-Neelsen',
            'Giemsa stain',
            'Trichrome stain',
            'India ink',
        ]),
        'answer'      => 'Modified Ziehl-Neelsen',
        'explanation' => 'Cryptosporidium oocysts stain bright red against a blue background.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which medium is used to isolate Staphylococcus aureus by mannitol fermentation on high salt agar?',
        'choices'     => json_encode([
            'Mannitol salt agar',
            'MacConkey agar',
            'Blood agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Mannitol salt agar',
        'explanation' => 'S. aureus ferments mannitol turning agar yellow, other staphylococci do not.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which test differentiates Candida albicans by chlamydospore formation on cornmeal agar?',
        'choices'     => json_encode([
            'Cornmeal agar chlamydospore test',
            'Germ tube test',
            'CHROMagar Candida',
            'India ink',
        ]),
        'answer'      => 'Cornmeal agar chlamydospore test',
        'explanation' => 'C. albicans produces terminal chlamydospores on cornmeal agar at 25°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which molecular assay quantifies HBV viral load by amplifying P gene regions?',
        'choices'     => json_encode([
            'Real-time PCR',
            'ELISA',
            'Culture',
            'Serology',
        ]),
        'answer'      => 'Real-time PCR',
        'explanation' => 'Quantifies HBV DNA to monitor treatment and disease progression.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which stain is used to visualize Actinomyces israelii sulfur granules in pus?',
        'choices'     => json_encode([
            'Gram stain',
            'Ziehl-Neelsen stain',
            'Giemsa stain',
            'India ink',
        ]),
        'answer'      => 'Gram stain',
        'explanation' => 'Gram-positive filamentous bacteria with yellow sulfur granules visible in pus.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which medium is used for isolation of Salmonella typhi by bile salt and brilliant green basil?',
        'choices'     => json_encode([
            'Brilliant green agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'      => 'Brilliant green agar',
        'explanation' => 'Selective for Salmonella by suppressing coliforms; typhi colonies appear red on green background.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which rapid antigen test detects Pneumocystis jirovecii in bronchoalveolar lavage by immunofluorescence?',
        'choices'     => json_encode([
            'DFA',
            'PCR',
            'Culture',
            'ELISA',
        ]),
        'answer'      => 'DFA',
        'explanation' => 'Direct fluorescent antibody assay labels PCP cysts for rapid detection in BAL fluid.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 10,
        'question'    => 'Which molecular assay detects HSV-2 by amplifying glycoprotein G gene sequences?',
        'choices'     => json_encode([
            'Type-specific PCR',
            'ELISA',
            'Culture',
            'Serology',
        ]),
        'answer'      => 'Type-specific PCR',
        'explanation' => 'PCR targeting gG2 differentiates HSV-2 from HSV-1 with high specificity.',
        'created_at'  => $now,
        'updated_at'  => $now
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

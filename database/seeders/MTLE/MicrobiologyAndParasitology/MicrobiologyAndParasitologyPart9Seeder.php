<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Which bacterium produces a rhizoid colony morphology and is oxidase-positive and indole-negative?',
        'choices'     => json_encode([
            'Aeromonas hydrophila',
            'Pseudomonas aeruginosa',
            'Vibrio cholerae',
            'Escherichia coli',
        ]),
        'answer'      => 'Aeromonas hydrophila',
        'explanation' => 'A. hydrophila forms rhizoid colonies, is oxidase-positive, and typically indole-negative.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which medium is used for detection of Clostridium perfringens by egg yolk lecithinase reaction?',
        'choices'     => json_encode([
            'Egg yolk agar',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Egg yolk agar',
        'explanation' => 'C. perfringens lecithinase activity on egg yolk agar produces an opaque precipitate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which stain is used to detect Mycobacterium leprae in skin smears by acid-fast positivity?',
        'choices'     => json_encode([
            'Fite-Faraco stain',
            'Gram stain',
            'Giemsa stain',
            'India ink',
        ]),
        'answer'      => 'Fite-Faraco stain',
        'explanation' => 'Fite-Faraco preserves mycolic acids for visualization of M. leprae in tissue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which rapid test identifies Streptococcus pneumoniae by membrane antigen detection in cerebrospinal fluid?',
        'choices'     => json_encode([
            'Latex agglutination',
            'PCR',
            'ELISA',
            'Culture',
        ]),
        'answer'      => 'Latex agglutination',
        'explanation' => 'Detects C-polysaccharide antigen of S. pneumoniae in CSF for rapid diagnosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which medium is used to culture Bordetella pertussis and contains hemin and nicotinamide?',
        'choices'     => json_encode([
            'Regan-Lowe agar',
            'MacConkey agar',
            'Blood agar',
            'CLED agar',
        ]),
        'answer'      => 'Regan-Lowe agar',
        'explanation' => 'Contains charcoal, blood, cephalexin, and supports B. pertussis growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which parasite egg is detected by Sheather’s sugar flotation technique in stool?',
        'choices'     => json_encode([
            'Ascaris lumbricoides',
            'Trichuris trichiura',
            'Schistosoma mansoni',
            'Enterobius vermicularis',
        ]),
        'answer'      => 'Ascaris lumbricoides',
        'explanation' => 'Ascaris eggs float in hypertonic sugar solution for microscopic detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which test differentiates Pseudomonas fluorescens by lack of growth at 42°C and production of fluorescent pigment at 25°C?',
        'choices'     => json_encode([
            'Temperature-dependent pigment production',
            'Oxidase test',
            'Catalase test',
            'Urease test',
        ]),
        'answer'      => 'Temperature-dependent pigment production',
        'explanation' => 'P. fluorescens grows at lower temperatures producing pigment, unlike P. aeruginosa.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which molecular assay is used for multiplex detection of respiratory viruses including RSV and influenza?',
        'choices'     => json_encode([
            'Multiplex RT-PCR',
            'Single-target PCR',
            'ELISA',
            'Culture',
        ]),
        'answer'      => 'Multiplex RT-PCR',
        'explanation' => 'Allows simultaneous amplification of multiple viral targets in one reaction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which stain is used to detect eosinophil granules and help diagnose parasitic infections in blood smears?',
        'choices'     => json_encode([
            'Wright-Giemsa stain',
            'Gram stain',
            'Ziehl-Neelsen',
            'India ink',
        ]),
        'answer'      => 'Wright-Giemsa stain',
        'explanation' => 'Stains eosinophil granules pink-orange, aiding in assessing parasitic infections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which medium selects for Staphylococcus aureus by mannitol fermentation and high salt concentration?',
        'choices'     => json_encode([
            'Mannitol salt agar',
            'MacConkey agar',
            'Blood agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Mannitol salt agar',
        'explanation' => '7.5% NaCl inhibits most bacteria; mannitol fermentation produces yellow zones around S. aureus colonies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which rapid antigen test is used for Group A Streptococcus detection in pharyngitis?',
        'choices'     => json_encode([
            'Rapid antigen detection test',
            'PCR',
            'ELISA',
            'Culture',
        ]),
        'answer'      => 'Rapid antigen detection test',
        'explanation' => 'Detects GAS carbohydrate antigen in throat swabs within minutes.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which test differentiates Klebsiella oxytoca by indole positivity and mucoid colonies?',
        'choices'     => json_encode([
            'Indole test',
            'Urease test',
            'Citrate test',
            'Motility test',
        ]),
        'answer'      => 'Indole test',
        'explanation' => 'K. oxytoca produces indole and has mucoid appearance due to capsule.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which medium is used for isolation of Haemophilus influenzae by requiring X and V factors?',
        'choices'     => json_encode([
            'Chocolate agar',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Chocolate agar',
        'explanation' => 'Lysed RBCs release hemin (X) and NAD (V) required for H. influenzae growth.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which test identifies Candida krusei by distinctive elongated pseudohyphae on cornmeal agar?',
        'choices'     => json_encode([
            'Cornmeal agar morphology',
            'Germ tube test',
            'CHROMagar Candida',
            'India ink',
        ]),
        'answer'      => 'Cornmeal agar morphology',
        'explanation' => 'C. krusei forms elongated pseudohyphae and chlamydospores on cornmeal agar.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which molecular assay is used for rapid detection of Clostridioides difficile toxin genes?',
        'choices'     => json_encode([
            'PCR for tcdA/tcdB genes',
            'EIA for toxins',
            'Culture on CCFA',
            'GDH antigen test',
        ]),
        'answer'      => 'PCR for tcdA/tcdB genes',
        'explanation' => 'NAATs targeting toxin genes provide high sensitivity and specificity for CDI diagnosis.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which stain is used to visualize microsporidia spores in clinical specimens by Calcofluor white?',
        'choices'     => json_encode([
            'Calcofluor white stain',
            'Gram stain',
            'Giemsa stain',
            'India ink',
        ]),
        'answer'      => 'Calcofluor white stain',
        'explanation' => 'CFW binds chitin in spore walls, fluorescing under UV for microsporidia detection.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which medium is used for isolation of Neisseria gonorrhoeae with selective antibiotics on chocolate base?',
        'choices'     => json_encode([
            'Modified Thayer-Martin agar',
            'MacConkey agar',
            'Blood agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Modified Thayer-Martin agar',
        'explanation' => 'Selective chocolate agar with vancomycin, colistin, nystatin inhibits contaminants.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which test differentiates Salmonella typhi by Vi capsular antigen agglutination?',
        'choices'     => json_encode([
            'Widal test',
            'Typhoid rapid test',
            'Blood culture',
            'ELISA',
        ]),
        'answer'      => 'Widal test',
        'explanation' => 'Agglutination of patient serum with Vi antigen indicates typhoid fever exposure.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which stain is used for detection of small round yeast cells of Histoplasma capsulatum within macrophages?',
        'choices'     => json_encode([
            'Giemsa stain',
            'Gram stain',
            'Methenamine silver',
            'India ink',
        ]),
        'answer'      => 'Giemsa stain',
        'explanation' => 'Giemsa highlights small yeasts inside macrophages in histoplasmosis.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 9,
        'question'    => 'Which rapid antigen test is used for detection of Dengue NS1 antigen in acute phase?',
        'choices'     => json_encode([
            'NS1 antigen lateral flow assay',
            'IgM ELISA',
            'PCR',
            'Virus isolation',
        ]),
        'answer'      => 'NS1 antigen lateral flow assay',
        'explanation' => 'Detects NS1 viral protein early in dengue infection via lateral flow immunochromatography.',
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

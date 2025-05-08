<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart8Seeder extends Seeder
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
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which bacterium is identified by volutin granules (metachromatic granules) on Neisser stain?',
        'choices'    => json_encode([
            'Corynebacterium diphtheriae',
            'Bacillus anthracis',
            'Listeria monocytogenes',
            'Clostridium tetani',
        ]),
        'answer'     => 'Corynebacterium diphtheriae',
        'explanation'=> 'C. diphtheriae shows volutin granules with metachromatic staining.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which medium differentiates Salmonella by black colonies on XLD agar due to H₂S production?',
        'choices'    => json_encode([
            'XLD agar',
            'MacConkey agar',
            'Manitol salt agar',
            'Blood agar',
        ]),
        'answer'     => 'XLD agar',
        'explanation'=> 'Salmonella ferments xylose, decarboxylates lysine, and produces H₂S black centers on XLD.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which stain is used to demonstrate spirochetes in primary syphilis lesions?',
        'choices'    => json_encode([
            'Dark-field microscopy',
            'Gram stain',
            'Ziehl-Neelsen stain',
            'Giemsa stain',
        ]),
        'answer'     => 'Dark-field microscopy',
        'explanation'=> 'Treponema pallidum is visualized by reflecting light in dark-field microscopy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which biochemical test differentiates Staphylococcus saprophyticus by nitrite reduction and novobiocin resistance?',
        'choices'    => json_encode([
            'Novobiocin susceptibility test',
            'Coagulase test',
            'Catalase test',
            'Oxidase test',
        ]),
        'answer'     => 'Novobiocin susceptibility test',
        'explanation'=> 'S. saprophyticus is novobiocin-resistant, unlike other coagulase-negative staphylococci.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which antigen detection test is used for Legionella pneumophila serogroup 1 in urine?',
        'choices'    => json_encode([
            'Urinary antigen immunoassay',
            'PCR',
            'Culture on BCYE',
            'DFA',
        ]),
        'answer'     => 'Urinary antigen immunoassay',
        'explanation'=> 'Detects soluble LPS antigen of L. pneumophila serogroup 1 rapidly in urine.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which molecular method detects Mycobacterium tuberculosis and rifampin resistance in one step?',
        'choices'    => json_encode([
            'Xpert MTB/RIF assay',
            'Culture on LJ medium',
            'Smear microscopy',
            'ELISA',
        ]),
        'answer'     => 'Xpert MTB/RIF assay',
        'explanation'=> 'Simultaneously amplifies MTB-specific targets and detects rpoB mutations for resistance.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which test differentiates Pseudomonas aeruginosa by production of fluorescence under UV light?',
        'choices'    => json_encode([
            'Pyoverdine fluorescence',
            'Oxidase test',
            'Catalase test',
            'Coagulase test',
        ]),
        'answer'     => 'Pyoverdine fluorescence',
        'explanation'=> 'P. aeruginosa produces fluorescent pigment pyoverdine visible under UV illumination.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which stain is used for detection of microsporidia in intestinal biopsies?',
        'choices'    => json_encode([
            'Modified trichrome stain',
            'Giemsa stain',
            'Gram stain',
            'India ink',
        ]),
        'answer'     => 'Modified trichrome stain',
        'explanation'=> 'Chromotrope-based stain highlights small spores of microsporidia in tissue.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which medium selects for Neisseria gonorrhoeae by antibiotics suppression and supports growth?',
        'choices'    => json_encode([
            'Modified Thayer-Martin agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'     => 'Modified Thayer-Martin agar',
        'explanation'=> 'Contains vancomycin, colistin, nystatin to inhibit contaminants while allowing N. gonorrhoeae growth.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which rapid diagnostic test detects influenza A and B antigens in respiratory specimens?',
        'choices'    => json_encode([
            'Rapid immunoassay',
            'PCR',
            'Culture',
            'ELISA',
        ]),
        'answer'     => 'Rapid immunoassay',
        'explanation'=> 'Lateral flow tests detect viral antigens quickly at point-of-care.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which stain is used to visualize Cryptococcus neoformans capsule by mucicarmine stain?',
        'choices'    => json_encode([
            'Mucicarmine',
            'Gram stain',
            'India ink',
            'GMS stain',
        ]),
        'answer'     => 'Mucicarmine',
        'explanation'=> 'Mucicarmine stains polysaccharide capsule of Cryptococcus red in tissue sections.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which molecular assay quantifies hepatitis B virus DNA in serum for treatment monitoring?',
        'choices'    => json_encode([
            'Real-time PCR',
            'ELISA',
            'Culture',
            'Immunoblot',
        ]),
        'answer'     => 'Real-time PCR',
        'explanation'=> 'Measures circulating HBV DNA levels precisely to guide antiviral therapy decisions.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which test identifies Candida species by carbohydrate assimilation patterns in API 20C AUX?',
        'choices'    => json_encode([
            'API 20C AUX',
            'Germ tube test',
            'Gram stain',
            'India ink',
        ]),
        'answer'     => 'API 20C AUX',
        'explanation'=> 'Auxanogram tests assimilation of sugars to differentiate Candida spp.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which medium isolates Clostridium difficile by taurocholate-cycloserine-cefoxitin agar?',
        'choices'    => json_encode([
            'CCFA agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'     => 'CCFA agar',
        'explanation'=> 'Selective media CCFA encourages C. difficile by antibiotic suppression and taurocholate for spore germination.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which test detects Streptococcus agalactiae colonization by CAMP enhancement on blood agar?',
        'choices'    => json_encode([
            'CAMP test',
            'Coagulase test',
            'Catalase test',
            'Oxidase test',
        ]),
        'answer'     => 'CAMP test',
        'explanation'=> 'Group B strep enhances hemolysis of S. aureus in CAMP test, forming arrowhead zones.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which stain is used to detect Leishmania amastigotes in bone marrow aspirate by Giemsa?',
        'choices'    => json_encode([
            'Giemsa stain',
            'Gram stain',
            'India ink',
            'Ziehl-Neelsen stain',
        ]),
        'answer'     => 'Giemsa stain',
        'explanation'=> 'Giemsa highlights oval amastigotes with kinetoplasts in macrophages.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which medium is used for chromatographic identification of bacterial volatile fatty acids by Gas Liquid Chromatography?',
        'choices'    => json_encode([
            'Anaerobic basal medium extracts',
            'Blood agar',
            'MacConkey agar',
            'Thioglycollate broth',
        ]),
        'answer'     => 'Anaerobic basal medium extracts',
        'explanation'=> 'Extracted metabolites analyzed by GLC identify anaerobic bacteria based on fatty acid profiles.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //18
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which rapid assay detects influenza virus by immunofluorescence in nasopharyngeal swabs?',
        'choices'    => json_encode([
            'DFA',
            'PCR',
            'ELISA',
            'Culture',
        ]),
        'answer'     => 'DFA',
        'explanation'=> 'Direct fluorescent antibody assay labels viral antigens in epithelial cells for visualization.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //19
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which stain is used for modified acid-fast detection of Cyclospora cayetanensis oocysts?',
        'choices'    => json_encode([
            'Modified Ziehl-Neelsen',
            'Giemsa stain',
            'Trichrome stain',
            'India ink',
        ]),
        'answer'     => 'Modified Ziehl-Neelsen',
        'explanation'=> 'Cyclospora oocysts are variably acid-fast, showing pink-stained oocysts on modified ZN.',
        'created_at' => $now,
        'updated_at' => $now
    ],
    //20
    [
        'subject_id' => 33,
        'part'       => 8,
        'question'   => 'Which test detects Chlamydia pneumoniae by PCR in respiratory specimens?',
        'choices'    => json_encode([
            'PCR',
            'ELISA',
            'Culture on McCoy cells',
            'Agarose gel electrophoresis',
        ]),
        'answer'     => 'PCR',
        'explanation'=> 'NAATs like PCR provide rapid and sensitive detection of C. pneumoniae.',
        'created_at' => $now,
        'updated_at' => $now,
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

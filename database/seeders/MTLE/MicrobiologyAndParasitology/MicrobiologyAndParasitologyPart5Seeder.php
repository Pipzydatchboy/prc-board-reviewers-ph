<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which test differentiates Shigella spp. by inability to ferment lactose and lack of H₂S production?',
        'choices'     => json_encode([
            'MacConkey agar and TSI agar',
            'Blood agar hemolysis',
            'Citrate utilization',
            'Urease test',
        ]),
        'answer'      => 'MacConkey agar and TSI agar',
        'explanation' => 'Shigella produces pale colonies on MacConkey and acid/acid in TSI without H₂S.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which parasite egg is operculated with a small knob and causes lung infection from crustacean consumption?',
        'choices'     => json_encode([
            'Paragonimus westermani',
            'Clonorchis sinensis',
            'Fasciola hepatica',
            'Schistosoma japonicum',
        ]),
        'answer'      => 'Paragonimus westermani',
        'explanation' => 'P. westermani eggs are oval, operculate with a small knob, cause paragonimiasis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which medium is used to culture dermatophytes such as Trichophyton rubrum?',
        'choices'     => json_encode([
            'Sabouraud dextrose agar with chloramphenicol and cycloheximide',
            'Blood agar',
            'MacConkey agar',
            'Chocolate agar',
        ]),
        'answer'      => 'Sabouraud dextrose agar with chloramphenicol and cycloheximide',
        'explanation' => 'Cycloheximide suppresses saprophytes while chloramphenicol inhibits bacteria, allowing dermatophyte growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which test detects Giardia lamblia cysts using immunofluorescence assay?',
        'choices'     => json_encode([
            'IFA with FITC-labeled antibodies',
            'Trichrome stain',
            'Wet mount',
            'Kinyoun stain',
        ]),
        'answer'      => 'IFA with FITC-labeled antibodies',
        'explanation' => 'Immunofluorescence provides high sensitivity and specificity for Giardia cyst detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which stain is used for detection of acid-fast oocysts of Cyclospora cayetanensis in stool?',
        'choices'     => json_encode([
            'Modified Ziehl-Neelsen',
            'Gram stain',
            'Trichrome stain',
            'India ink',
        ]),
        'answer'      => 'Modified Ziehl-Neelsen',
        'explanation' => 'Cyclospora oocysts are variably acid-fast, showing pink to red staining with modified ZN.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which rapid antigen test is used for detection of Streptococcus pneumoniae in cerebrospinal fluid?',
        'choices'     => json_encode([
            'Latex agglutination',
            'ELISA',
            'PCR',
            'Culture',
        ]),
        'answer'      => 'Latex agglutination',
        'explanation' => 'Latex particles coated with antibody agglutinate in presence of pneumococcal C-polysaccharide antigen in CSF.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which biochemical test differentiates Yersinia enterocolitica by urease positivity and cold enrichment?',
        'choices'     => json_encode([
            'Urease test',
            'Indole test',
            'Citrate utilization',
            'Motility test',
        ]),
        'answer'      => 'Urease test',
        'explanation' => 'Y. enterocolitica hydrolyzes urea rapidly and grows better at 4°C (cold enrichment).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which medium is used for detection of Listeria monocytogenes by cold enrichment and motility assays?',
        'choices'     => json_encode([
            'Listeria Oxford agar and motility medium',
            'Blood agar',
            'MacConkey agar',
            'Thayer-Martin agar',
        ]),
        'answer'      => 'Listeria Oxford agar and motility medium',
        'explanation' => 'Oxford agar contains selective agents for Listeria; SIS medium shows umbrella motility at 25°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which test identifies Aspergillus fumigatus by septate hyphae and acute angle branching?',
        'choices'     => json_encode([
            'Microscopic morphology on LPCB mount',
            'Gram stain',
            'India ink',
            'Acid-fast stain',
        ]),
        'answer'      => 'Microscopic morphology on LPCB mount',
        'explanation' => 'Lactophenol cotton blue mount reveals septate hyphae with 45° branching typical of Aspergillus.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which antigen detection method is used for rapid diagnosis of rotavirus in children?',
        'choices'     => json_encode([
            'ELISA',
            'PCR',
            'Culture',
            'Electron microscopy',
        ]),
        'answer'      => 'ELISA',
        'explanation' => 'ELISA kits detect rotavirus antigen VP6 in stool for rapid pediatric gastroenteritis diagnosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which parasite uses the Graham sticky-tape test for diagnosis of pinworm infection?',
        'choices'     => json_encode([
            'Enterobius vermicularis',
            'Ascaris lumbricoides',
            'Trichuris trichiura',
            'Ancylostoma duodenale',
        ]),
        'answer'      => 'Enterobius vermicularis',
        'explanation' => 'Perianal eggs are collected on adhesive tape for microscopic identification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which stain is used for visualization of microsporidia spores in stool or tissue?',
        'choices'     => json_encode([
            'Modified trichrome stain',
            'Gram stain',
            ' Acetone blue',
            'Giemsa stain',
        ]),
        'answer'      => 'Modified trichrome stain',
        'explanation' => 'Weber’s chromotrope stain highlights microsporidia spores red against blue background.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which medium is used for isolation of Helicobacter pylori from gastric biopsies?',
        'choices'     => json_encode([
            'Skirrow’s medium',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Skirrow’s medium',
        'explanation' => 'Contains antibiotics and blood to support H. pylori growth and suppress contaminants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which molecular assay is used for detection of Norovirus in stool samples?',
        'choices'     => json_encode([
            'RT-PCR',
            'ELISA',
            'Culture',
            'Electron microscopy',
        ]),
        'answer'      => 'RT-PCR',
        'explanation' => 'RT-PCR targets viral RNA for sensitive Norovirus detection in outbreaks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which test detects rapid Pseudomonas aeruginosa identification by oxidase positivity and grape-like odor?',
        'choices'     => json_encode([
            'Oxidase test and colony odor',
            'Gram stain',
            'Catalase test',
            'Lactose fermentation',
        ]),
        'answer'      => 'Oxidase test and colony odor',
        'explanation' => 'P. aeruginosa is oxidase-positive and produces a characteristic sweet grape-like odor.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which stain is used to identify Balamuthia mandrillaris in brain biopsy specimens?',
        'choices'     => json_encode([
            'H&E and immunofluorescence',
            'Gram stain',
            'PAS stain',
            'Giemsa stain',
        ]),
        'answer'      => 'H&E and immunofluorescence',
        'explanation' => 'Balamuthia trophozoites and cysts are seen on H&E; IFA confirms antigen presence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which medium is used for phenotypic identification of Candida glabrata by chromogenic differentiation?',
        'choices'     => json_encode([
            'CHROMagar Candida',
            'Sabouraud agar',
            'Blood agar',
            'MacConkey agar',
        ]),
        'answer'      => 'CHROMagar Candida',
        'explanation' => 'C. glabrata forms specific pink colonies distinct from other Candida spp. on chromogenic agar.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which test differentiates Mycoplasma pneumoniae by cold agglutinin formation?',
        'choices'     => json_encode([
            'Cold agglutinins test',
            'Urease test',
            'Gram stain',
            'Catalase test',
        ]),
        'answer'      => 'Cold agglutinins test',
        'explanation' => 'M. pneumoniae infections often elicit cold agglutinin antibodies detected at 4°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which stain is used to visualize Echinococcus granulosus hydatid cysts in tissue?',
        'choices'     => json_encode([
            'H&E',
            'Gram stain',
            'Gomori methenamine silver',
            'Ziehl-Neelsen',
        ]),
        'answer'      => 'H&E',
        'explanation' => 'H&E reveals laminated cyst wall and protoscoleces of Echinococcus in tissue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 5,
        'question'    => 'Which molecular test detects Chlamydia trachomatis in urogenital specimens?',
        'choices'     => json_encode([
            'NAAT (PCR)',
            'Culture on McCoy cells',
            'Giemsa stain',
            'ELISA',
        ]),
        'answer'      => 'NAAT (PCR)',
        'explanation' => 'Nucleic acid amplification tests are highly sensitive and specific for C. trachomatis detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
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

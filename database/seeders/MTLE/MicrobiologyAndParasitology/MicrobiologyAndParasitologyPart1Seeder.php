<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'Which Gram-positive cocci present in clusters and are catalase-positive?',
        'choices'     => json_encode([
            'Staphylococcus aureus',
            'Streptococcus pyogenes',
            'Enterococcus faecalis',
            'Neisseria meningitidis',
        ]),
        'answer'      => 'Staphylococcus aureus',
        'explanation' => 'Staphylococci are Gram-positive clusters and catalase-positive, distinguishing them from streptococci.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which parasite is diagnosed by finding ova with a thick shell and bipolar plugs in stool?',
        'choices'     => json_encode([
            'Trichuris trichiura',
            'Ascaris lumbricoides',
            'Enterobius vermicularis',
            'Taenia solium',
        ]),
        'answer'      => 'Trichuris trichiura',
        'explanation' => 'Whipworm eggs have characteristic bipolar plugs and thick shells.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which agar is selective and differential for Gram-negative enteric bacilli based on lactose fermentation?',
        'choices'     => json_encode([
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
            'Mannitol salt agar',
        ]),
        'answer'      => 'MacConkey agar',
        'explanation' => 'MacConkey contains bile salts and crystal violet to inhibit Gram-positives and lactose for differentiation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which acid-fast organism causes pulmonary disease and appears as red bacilli on Ziehl-Neelsen stain?',
        'choices'     => json_encode([
            'Mycobacterium tuberculosis',
            'Staphylococcus aureus',
            'Escherichia coli',
            'Clostridium difficile',
        ]),
        'answer'      => 'Mycobacterium tuberculosis',
        'explanation' => 'M. tuberculosis is acid-fast due to mycolic acids, retaining carbol fuchsin after decolorization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which protozoan causes malaria through infection of red blood cells?',
        'choices'     => json_encode([
            'Plasmodium falciparum',
            'Entamoeba histolytica',
            'Giardia lamblia',
            'Trichomonas vaginalis',
        ]),
        'answer'      => 'Plasmodium falciparum',
        'explanation' => 'P. falciparum infects erythrocytes and produces characteristic ring forms on blood smear.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which test is used to identify cryptococcal meningitis by detecting capsular antigen in CSF?',
        'choices'     => json_encode([
            'Cryptococcal antigen latex agglutination',
            'India ink preparation',
            'Gram stain',
            'Ziehl-Neelsen stain',
        ]),
        'answer'      => 'Cryptococcal antigen latex agglutination',
        'explanation' => 'Latex agglutination detects cryptococcal polysaccharide antigen in CSF or serum.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which fungal element is indicative of Candida albicans on germ tube test?',
        'choices'     => json_encode([
            'Germ tubes',
            'Spherules',
            'Septate hyphae with clamp connections',
            'Broad-based budding yeast',
        ]),
        'answer'      => 'Germ tubes',
        'explanation' => 'C. albicans produces germ tubes when incubated in serum at 37°C for 2–3 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which parasite causes amebic dysentery and is identified by trophozoites with erythrophagocytosis?',
        'choices'     => json_encode([
            'Entamoeba histolytica',
            'Giardia lamblia',
            'Balantidium coli',
            'Trichomonas hominis',
        ]),
        'answer'      => 'Entamoeba histolytica',
        'explanation' => 'E. histolytica trophozoites ingest RBCs, a key diagnostic feature on stool examination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which medium is used for selective culture of Neisseria gonorrhoeae?',
        'choices'     => json_encode([
            'Thayer-Martin agar',
            'MacConkey agar',
            'Sabouraud agar',
            'Blood agar',
        ]),
        'answer'      => 'Thayer-Martin agar',
        'explanation' => 'Modified chocolate agar with antibiotics inhibits contaminants and supports Neisseria growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which worm infection is diagnosed by the Charcot-Leyden crystals in stool?',
        'choices'     => json_encode([
            'Amebiasis',
            'Giardiasis',
            'Enterobiasis',
            'Hookworm',
        ]),
        'answer'      => 'Amebiasis',
        'explanation' => 'Charcot-Leyden crystals arise from eosinophil lysis in amebic colitis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which stain is used to visualize spirochetes in syphilis diagnosis?',
        'choices'     => json_encode([
            'Dark-field microscopy',
            'Gram stain',
            'Ziehl-Neelsen stain',
            'India ink',
        ]),
        'answer'      => 'Dark-field microscopy',
        'explanation' => 'Treponema pallidum is too thin for Gram stain but visible by dark-field illumination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which parasite is identified by corkscrew motility in wet mount preparation?',
        'choices'     => json_encode([
            'Trichomonas vaginalis',
            'Giardia lamblia',
            'Balantidium coli',
            'Entamoeba coli',
        ]),
        'answer'      => 'Trichomonas vaginalis',
        'explanation' => 'T. vaginalis shows characteristic jerky motility with flagella on wet mount.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which medium is appropriate for cultivation of anaerobic bacteria?',
        'choices'     => json_encode([
            'Thioglycollate broth',
            'MacConkey agar',
            'Nutrient agar',
            'TCBS agar',
        ]),
        'answer'      => 'Thioglycollate broth',
        'explanation' => 'Thioglycollate medium reduces oxygen allowing growth of obligate/facultative anaerobes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which parasite is diagnosed by finding motile trophozoites with tear-drop shape in stool?',
        'choices'     => json_encode([
            'Giardia lamblia',
            'Entamoeba histolytica',
            'Dientamoeba fragilis',
            'Endolimax nana',
        ]),
        'answer'      => 'Giardia lamblia',
        'explanation' => 'G. lamblia trophozoites have adhesive discs and fall-leaf motility on wet mount.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which test differentiates Candida albicans from non-albicans Candida spp by blastoconidia formation?',
        'choices'     => json_encode([
            'Germ tube test',
            'India ink',
            'KOH prep',
            'Gram stain',
        ]),
        'answer'      => 'Germ tube test',
        'explanation' => 'Only C. albicans forms germ tubes in serum at 37°C within 2–3 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which stain is used for detection of Pneumocystis jirovecii in respiratory specimens?',
        'choices'     => json_encode([
            'Gomori methenamine silver',
            'Gram stain',
            'Ziehl-Neelsen stain',
            'India ink',
        ]),
        'answer'      => 'Gomori methenamine silver',
        'explanation' => 'GMS stain highlights cyst walls of Pneumocystis as black against green background.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which parasite infection is diagnosed by the Knott’s concentration technique?',
        'choices'     => json_encode([
            'Filarial worms',
            'Schistosoma spp.',
            'Ascaris lumbricoides',
            'Taenia spp.',
        ]),
        'answer'      => 'Filarial worms',
        'explanation' => 'Knott’s technique concentrates microfilariae in blood for identification under microscopy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which agar is used for fungal culture and contains antibiotics to suppress bacterial growth?',
        'choices'     => json_encode([
            'Sabouraud dextrose agar',
            'Blood agar',
            'MacConkey agar',
            'Chocolate agar',
        ]),
        'answer'      => 'Sabouraud dextrose agar',
        'explanation' => 'SDA with chloramphenicol and gentamicin favors fungal growth by inhibiting bacteria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which method identifies viral cytopathic effects in cell culture?',
        'choices'     => json_encode([
            'Observation of plaques or CPEs',
            'Gram stain',
            'Acid-fast stain',
            'India ink',
        ]),
        'answer'      => 'Observation of plaques or CPEs',
        'explanation' => 'Viruses produce distinct CPEs or plaques in permissive cell lines used in culture.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 1,
        'question'    => 'Which antigen detection test is used for rapid diagnosis of rotavirus in stool?',
        'choices'     => json_encode([
            'ELISA',
            'PCR',
            'Culture',
            'Dark-field microscopy',
        ]),
        'answer'      => 'ELISA',
        'explanation' => 'ELISA kits detect rotavirus antigen VP6 in stool samples quickly and reliably.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

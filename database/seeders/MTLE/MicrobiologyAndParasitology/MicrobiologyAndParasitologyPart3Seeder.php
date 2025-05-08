<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart3Seeder extends Seeder
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
        'part'       => 3,
        'question'   => 'Which bacterium produces black colonies on bile esculin agar and hydrolyzes esculin?',
        'choices'    => json_encode([
            'Enterococcus faecalis',
            'Escherichia coli',
            'Streptococcus pyogenes',
            'Listeria monocytogenes',
        ]),
        'answer'     => 'Enterococcus faecalis',
        'explanation'=> 'Enterococci hydrolyze esculin in presence of bile, producing black precipitate.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //2
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which parasite is identified by motile trophozoites with tumbling motility on wet mount of stool?',
        'choices'    => json_encode([
            'Giardia lamblia',
            'Entamoeba histolytica',
            'Trichomonas vaginalis',
            'Dientamoeba fragilis',
        ]),
        'answer'     => 'Giardia lamblia',
        'explanation'=> 'G. lamblia trophozoites exhibit falling leaf motility and bilateral symmetry.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //3
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which medium is used to culture Bordetella pertussis and contains potato infusion and glycerol?',
        'choices'    => json_encode([
            'Bordet-Gengou agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'     => 'Bordet-Gengou agar',
        'explanation'=> 'Bordet-Gengou uses potato-based medium with glycerol and blood for pertussis isolation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //4
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which protozoan forms cysts with four nuclei and is associated with waterborne outbreaks?',
        'choices'    => json_encode([
            'Giardia lamblia',
            'Entamoeba coli',
            'Cryptosporidium parvum',
            'Cyclospora cayetanensis',
        ]),
        'answer'     => 'Giardia lamblia',
        'explanation'=> 'Giardia cysts are oval with four nuclei; outbreak linked to contaminated water.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //5
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which enzyme assay is used to detect Clostridium difficile toxins in stool by cytotoxicity?',
        'choices'    => json_encode([
            'Cytotoxin neutralization assay',
            'Tox A/B EIA',
            'PCR assay',
            'Culture on CCFA',
        ]),
        'answer'     => 'Cytotoxin neutralization assay',
        'explanation'=> 'Neutralization of toxin effect on cell lines confirms active C. difficile toxin presence.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //6
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which mycobacterium is identified by niacin accumulation and nitrate reduction?',
        'choices'    => json_encode([
            'Mycobacterium tuberculosis',
            'Mycobacterium leprae',
            'Mycobacterium avium',
            'Mycobacterium bovis',
        ]),
        'answer'     => 'Mycobacterium tuberculosis',
        'explanation'=> 'M. tuberculosis produces niacin and reduces nitrate, diagnostic biochemical traits.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //7
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which stain is used for detection of Helicobacter pylori in gastric biopsies?',
        'choices'    => json_encode([
            'Warthin-Starry silver stain',
            'Gram stain',
            'Giemsa stain',
            'PAS stain',
        ]),
        'answer'     => 'Warthin-Starry silver stain',
        'explanation'=> 'Silver impregnation highlights spiral H. pylori against tissue background.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //8
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which parasite egg is operculate with a small protuberance opposite the operculum and causes fascioliasis?',
        'choices'    => json_encode([
            'Fasciola hepatica',
            'Clonorchis sinensis',
            'Schistosoma haematobium',
            'Paragonimus westermani',
        ]),
        'answer'     => 'Fasciola hepatica',
        'explanation'=> 'F. hepatica eggs are large, operculate with shoulder and small knob on opposite side.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //9
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which antigen detection test is used for rapid dengue diagnosis?',
        'choices'    => json_encode([
            'NS1 antigen ELISA',
            'IgM antibody capture',
            'Viral culture',
            'PCR',
        ]),
        'answer'     => 'NS1 antigen ELISA',
        'explanation'=> 'NS1 ELISA detects viral antigen early in dengue infection before antibody production.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //10
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which medium is differential for Vibrio cholerae by sucrose fermentation?',
        'choices'    => json_encode([
            'TCBS agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'     => 'TCBS agar',
        'explanation'=> 'TCBS uses sucrose and pH indicators; V. cholerae ferments sucrose producing yellow colonies.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //11
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which stain is used to detect microfilariae in blood smears?',
        'choices'    => json_encode([
            'Giemsa stain',
            'Gram stain',
            'Ziehl-Neelsen',
            'India ink',
        ]),
        'answer'     => 'Giemsa stain',
        'explanation'=> 'Giemsa highlights microfilariae morphology in thick and thin blood smears.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //12
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which biochemical test differentiates Salmonella from Shigella by H₂S production?',
        'choices'    => json_encode([
            'Triple sugar iron agar',
            'MacConkey agar',
            'Citrate test',
            'Urease test',
        ]),
        'answer'     => 'Triple sugar iron agar',
        'explanation'=> 'TSI butt/slant reaction shows H₂S blackening for Salmonella, negative in Shigella.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //13
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which parasite causes African trypanosomiasis and is transmitted by the tsetse fly?',
        'choices'    => json_encode([
            'Trypanosoma brucei',
            'Trypanosoma cruzi',
            'Leishmania donovani',
            'Plasmodium falciparum',
        ]),
        'answer'     => 'Trypanosoma brucei',
        'explanation'=> 'T. brucei rhodesiense and gambiense cause sleeping sickness transmitted by Glossina spp.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //14
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which culture medium is selective for Candida species by chromogenic substrates?',
        'choices'    => json_encode([
            'CHROMagar Candida',
            'Sabouraud agar',
            'Blood agar',
            'MacConkey agar',
        ]),
        'answer'     => 'CHROMagar Candida',
        'explanation'=> 'CHROMagar differentiates Candida species by colony color based on chromogenic substrates.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //15
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which stain is used to identify Cryptococcus neoformans capsules in CSF?',
        'choices'    => json_encode([
            'India ink',
            'Gram stain',
            'Giemsa stain',
            'Ziehl-Neelsen',
        ]),
        'answer'     => 'India ink',
        'explanation'=> 'India ink shows clear halo representing polysaccharide capsule around yeasts.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //16
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which molecular test detects Mycobacterium tuberculosis complex using nucleic acid amplification?',
        'choices'    => json_encode([
            'PCR',
            'ELISA',
            'Culture on LJ medium',
            'Gram stain',
        ]),
        'answer'     => 'PCR',
        'explanation'=> 'PCR assays amplify MTB-specific targets for rapid detection in clinical specimens.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //17
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which parasite infection is diagnosed by the presence of Charcot-Leyden crystals and trophozoites in stool?',
        'choices'    => json_encode([
            'Entamoeba histolytica',
            'Giardia lamblia',
            'Balantidium coli',
            'Isospora belli',
        ]),
        'answer'     => 'Entamoeba histolytica',
        'explanation'=> 'E. histolytica infections show trophozoites with RBCs and Charcot-Leyden crystals.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //18
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which method is used to quantify viral load in HIV by measuring RNA copies?',
        'choices'    => json_encode([
            'Real-time PCR',
            'ELISA',
            'Western blot',
            'Culture',
        ]),
        'answer'     => 'Real-time PCR',
        'explanation'=> 'Quantitative RT-PCR measures HIV-1 RNA levels in plasma for monitoring therapy.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //19
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which medium is selective for Clostridium difficile by taurocholate-cefoxitin-cycloserine formulation?',
        'choices'    => json_encode([
            'CCFA',
            'TCBS',
            'MacConkey agar',
            'Blood agar',
        ]),
        'answer'     => 'CCFA',
        'explanation'=> 'Cycloserine-cefoxitin-fructose agar selects C. difficile by antibiotic suppression and fructose fermentation.',
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //20
    [
        'subject_id' => 33,
        'part'       => 3,
        'question'   => 'Which antigen detection test is used for rapid influenza diagnosis?',
        'choices'    => json_encode([
            'Rapid influenza antigen test',
            'PCR',
            'ELISA',
            'Culture',
        ]),
        'answer'     => 'Rapid influenza antigen test',
        'explanation'=> 'Lateral flow tests detect influenza nucleoprotein antigen in respiratory samples quickly.',
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

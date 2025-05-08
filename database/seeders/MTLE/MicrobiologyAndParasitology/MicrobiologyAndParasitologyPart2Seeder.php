<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Which organism demonstrates sausage-shaped trophozoites with multiple flagella in stool preparations?',
        'choices'     => json_encode([
            'Giardia lamblia',
            'Entamoeba histolytica',
            'Trichomonas vaginalis',
            'Balantidium coli',
        ]),
        'answer'      => 'Giardia lamblia',
        'explanation' => 'G. lamblia trophozoites are pear-shaped with bilateral flagella and adhesive discs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which staining method is specific for Mycobacterium leprae in skin biopsies?',
        'choices'     => json_encode([
            'Fite-Faraco stain',
            'Ziehl-Neelsen stain',
            'Warthin-Starry stain',
            'India ink',
        ]),
        'answer'      => 'Fite-Faraco stain',
        'explanation' => 'Fite-Faraco uses milder decolorization to preserve M. leprae acid-fast bacilli in tissues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which agar is selective for Salmonella and Shigella by production of hydrogen sulfide?',
        'choices'     => json_encode([
            'Hektoen enteric agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'      => 'Hektoen enteric agar',
        'explanation' => 'HE agar identifies H2S producers (black colonies) and differentiates lactose fermenters.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which parasite causes lymphatic filariasis and is detected by nocturnal peripheral blood smear?',
        'choices'     => json_encode([
            'Wuchereria bancrofti',
            'Onchocerca volvulus',
            'Loa loa',
            'Schistosoma mansoni',
        ]),
        'answer'      => 'Wuchereria bancrofti',
        'explanation' => 'Microfilariae circulate at night; thick blood films then reveal sheathed larvae.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which culture medium supports growth of use Mycoplasma pneumoniae?',
        'choices'     => json_encode([
            'PPLO agar with sterols',
            'MacConkey agar',
            'Blood agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'PPLO agar with sterols',
        'explanation' => 'PPLO medium contains cholesterol for Mycoplasma membrane growth, lacks cell wall.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which test differentiates Enterobacteriaceae based on indole production?',
        'choices'     => json_encode([
            'Indole test (Kovacs reagent)',
            'Citrate utilization test',
            'Urease test',
            'Motility test',
        ]),
        'answer'      => 'Indole test (Kovacs reagent)',
        'explanation' => 'Indole production from tryptophan is detected by red ring after adding Kovacs reagent.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which parasite egg has a striated brown shell and is operculate?',
        'choices'     => json_encode([
            'Fasciolopsis buski',
            'Ascaris lumbricoides',
            'Trichuris trichiura',
            'Enterobius vermicularis',
        ]),
        'answer'      => 'Fasciolopsis buski',
        'explanation' => 'F. buski eggs are large, operculate with brown striated shell from snail-transmitted trematodes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which rapid test detects Streptococcus pyogenes antigen from throat swab?',
        'choices'     => json_encode([
            'Rapid antigen detection test',
            'Latex agglutination',
            'PCR',
            'ELISA',
        ]),
        'answer'      => 'Rapid antigen detection test',
        'explanation' => 'RADT uses antibodies to detect GAS carbohydrate antigen in minutes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which stain highlights Giardia lamblia cysts by imparting yellow-green fluorescence?',
        'choices'     => json_encode([
            'Acridine orange',
            'Trichrome stain',
            'Iron hematoxylin',
            'Modified Ziehl-Neelsen',
        ]),
        'answer'      => 'Acridine orange',
        'explanation' => 'AO binds nucleic acids; G. lamblia cysts fluoresce under UV light.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which biochemical test differentiates Proteus mirabilis by swarming motility and urease positivity?',
        'choices'     => json_encode([
            'Urease test',
            'Catalase test',
            'Oxidase test',
            'Coagulase test',
        ]),
        'answer'      => 'Urease test',
        'explanation' => 'Proteus species hydrolyze urea producing ammonia, raising pH and changing from yellow to pink.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which test detects Clostridium difficile toxin in fecal specimens?',
        'choices'     => json_encode([
            'EIA for toxins A and B',
            'Gram stain',
            'Culture on MacConkey',
            'PCR for toxin genes',
        ]),
        'answer'      => 'EIA for toxins A and B',
        'explanation' => 'Enzyme immunoassays detect toxin presence; PCR offers genotypic detection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which medium supports growth of Legionella pneumophila?',
        'choices'     => json_encode([
            'Buffered charcoal yeast extract agar',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Buffered charcoal yeast extract agar',
        'explanation' => 'BCYE agar contains cysteine and iron needed by Legionella species.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which parasite causes visceral leishmaniasis and is identified by amastigotes in macrophages?',
        'choices'     => json_encode([
            'Leishmania donovani',
            'Trypanosoma cruzi',
            'Plasmodium vivax',
            'Toxoplasma gondii',
        ]),
        'answer'      => 'Leishmania donovani',
        'explanation' => 'Leishmania amastigotes (Leishman-Donovan bodies) are seen in macrophages in visceral cases.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which biochemical test differentiates Klebsiella pneumoniae by lactose fermentation and mucoid colonies?',
        'choices'     => json_encode([
            'MacConkey lactose fermentation',
            'Citrate utilization',
            'Urease test',
            'Indole test',
        ]),
        'answer'      => 'MacConkey lactose fermentation',
        'explanation' => 'K. pneumoniae produces pink mucoid colonies on MacConkey agar due to lactose fermentation and capsule.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which stain is used to visualize Pneumocystis jirovecii cysts in lung tissue?',
        'choices'     => json_encode([
            'Gomori methenamine silver stain',
            'Gram stain',
            'Ziehl-Neelsen',
            'India ink',
        ]),
        'answer'      => 'Gomori methenamine silver stain',
        'explanation' => 'GMS highlights Pneumocystis cyst walls in black against green background.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which parasite egg has an operculum at one pole and is found in fish-borne trematodes?',
        'choices'     => json_encode([
            'Clonorchis sinensis',
            'Fasciolopsis buski',
            'Trichuris trichiura',
            'Taenia saginata',
        ]),
        'answer'      => 'Clonorchis sinensis',
        'explanation' => 'Chinese liver fluke eggs have prominent operculum and residual knob at opposite end.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which test identifies Streptococcus pneumoniae by optochin sensitivity?',
        'choices'     => json_encode([
            'Optochin disk test',
            'Bile solubility test',
            'Catalase test',
            'Coagulase test',
        ]),
        'answer'      => 'Optochin disk test',
        'explanation' => 'S. pneumoniae is optochin-sensitive, showing zone of inhibition around P disk.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which parasite is diagnosed by acid-fast oocysts in stool, modified Ziehl-Neelsen stain?',
        'choices'     => json_encode([
            'Cryptosporidium parvum',
            'Giardia lamblia',
            'Entamoeba histolytica',
            'Cyclospora cayetanensis',
        ]),
        'answer'      => 'Cryptosporidium parvum',
        'explanation' => 'Cryptosporidium oocysts stain red on modified Ziehl-Neelsen due to acid-fast walls.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which culture medium is used for Bordetella pertussis isolation?',
        'choices'     => json_encode([
            'Bordet-Gengou agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'      => 'Bordet-Gengou agar',
        'explanation' => 'B-G agar contains potato infusion, glycerol, blood; selective for Bordetella pertussis.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 2,
        'question'    => 'Which method is gold standard for malaria diagnosis in reference labs?',
        'choices'     => json_encode([
            'Thick and thin blood smear microscopy',
            'Rapid diagnostic tests',
            'PCR',
            'Serology',
        ]),
        'answer'      => 'Thick and thin blood smear microscopy',
        'explanation' => 'Microscopy allows species identification and parasitemia quantification.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

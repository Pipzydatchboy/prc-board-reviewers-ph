<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Which bacterium is identified by greenish metallic sheen on EMB agar?',
        'choices'     => json_encode([
            'Escherichia coli',
            'Salmonella enterica',
            'Enterobacter aerogenes',
            'Shigella flexneri',
        ]),
        'answer'      => 'Escherichia coli',
        'explanation' => 'E. coli produces strong lactose fermentation resulting in metallic green sheen on EMB.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which test differentiates Pseudomonas aeruginosa by production of pyocyanin pigment?',
        'choices'     => json_encode([
            'Pyocyanin production on Mueller-Hinton agar',
            'Oxidase test',
            'Citrate utilization',
            'Urease test',
        ]),
        'answer'      => 'Pyocyanin production on Mueller-Hinton agar',
        'explanation' => 'P. aeruginosa produces blue-green pyocyanin pigment visible on MH agar.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which parasite causes visceral leishmaniasis and is identified by splenic aspirate showing Leishman-Donovan bodies?',
        'choices'     => json_encode([
            'Leishmania donovani',
            'Trypanosoma cruzi',
            'Plasmodium vivax',
            'Toxoplasma gondii',
        ]),
        'answer'      => 'Leishmania donovani',
        'explanation' => 'LD bodies are amastigotes seen inside macrophages from spleen aspirates in kala-azar.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which agar is used for Salmonella enrichment by selective broth followed by plating on XLD agar?',
        'choices'     => json_encode([
            'XLD agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'      => 'XLD agar',
        'explanation' => 'XLD fermenters and H2S producers show red colonies with black centers for Salmonella.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which rapid antigen test is used for detection of rotavirus VP6 antigen?',
        'choices'     => json_encode([
            'ELISA',
            'PCR',
            'Culture',
            'Electron microscopy',
        ]),
        'answer'      => 'ELISA',
        'explanation' => 'ELISA for VP6 antigen is standard for rotavirus detection in stool.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which stain is used to detect Pneumocystis jirovecii cysts in respiratory specimens?',
        'choices'     => json_encode([
            'Gomori methenamine silver',
            'Gram stain',
            'Ziehl-Neelsen',
            'India ink',
        ]),
        'answer'      => 'Gomori methenamine silver',
        'explanation' => 'GMS stains cyst walls of P. jirovecii black for clear visualization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which test detects Legionella pneumophila antigen in urine samples?',
        'choices'     => json_encode([
            'Urinary antigen EIA',
            'Culture on BCYE',
            'PCR',
            'Gram stain',
        ]),
        'answer'      => 'Urinary antigen EIA',
        'explanation' => 'Detects serogroup 1 antigen, enabling rapid diagnosis of Legionnaires’ disease.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which biochemical test differentiates Enterobacter aerogenes by Voges-Proskauer positivity?',
        'choices'     => json_encode([
            'Voges-Proskauer test',
            'Indole test',
            'Citrate test',
            'Urease test',
        ]),
        'answer'      => 'Voges-Proskauer test',
        'explanation' => 'VP-positive organisms like Enterobacter produce acetoin, detected by VP reagents.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which parasite egg has a birefringent shell under polarized light and causes schistosomiasis?',
        'choices'     => json_encode([
            'Schistosoma mansoni',
            'Ascaris lumbricoides',
            'Trichuris trichiura',
            'Enterobius vermicularis',
        ]),
        'answer'      => 'Schistosoma mansoni',
        'explanation' => 'S. mansoni eggs have a lateral spine and birefringent shell visible with polarized microscopy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which medium supports growth of Mycoplasma genitalium by requiring cholesterol?',
        'choices'     => json_encode([
            'SP-4 medium',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'SP-4 medium',
        'explanation' => 'SP-4 contains serum and cholesterol for Mycoplasma species growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which rapid molecular test detects methicillin resistance in Staphylococcus aureus?',
        'choices'     => json_encode([
            'PCR for mecA',
            'Coagulase test',
            'Catalase test',
            'Gram stain',
        ]),
        'answer'      => 'PCR for mecA',
        'explanation' => 'Detects mecA gene encoding PBP2a, conferring MRSA phenotype.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which stain is used to visualize Microsporidia spores in stool specimens?',
        'choices'     => json_encode([
            'Modified trichrome stain',
            'Gram stain',
            'Acid-fast stain',
            'India ink',
        ]),
        'answer'      => 'Modified trichrome stain',
        'explanation' => 'Weber’s modified trichrome stain highlights spores as small pink bodies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which test differentiates Vibrio cholerae by oxidase positivity and growth on TCBS agar?',
        'choices'     => json_encode([
            'Oxidase test and TCBS growth',
            'MacConkey lactose fermentation',
            'Urease test',
            'Indole test',
        ]),
        'answer'      => 'Oxidase test and TCBS growth',
        'explanation' => 'V. cholerae is oxidase-positive and forms yellow colonies on TCBS due to sucrose fermentation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which rapid antigen test is used for detection of Streptococcus pyogenes in throat swabs?',
        'choices'     => json_encode([
            'RADT for GAS antigen',
            'Latex agglutination',
            'PCR',
            'ELISA',
        ]),
        'answer'      => 'RADT for GAS antigen',
        'explanation' => 'RADT detects group A carbohydrate antigen for quick strep diagnosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which biochemical test differentiates Proteus vulgaris by indole positivity?',
        'choices'     => json_encode([
            'Indole test',
            'Urease test',
            'Citrate test',
            'Motility test',
        ]),
        'answer'      => 'Indole test',
        'explanation' => 'P. vulgaris produces indole, unlike P. mirabilis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which medium is selective for Campylobacter jejuni by high temperature and antibiotic supplements?',
        'choices'     => json_encode([
            'Skirrow’s or Campy agar at 42°C',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Skirrow’s or Campy agar at 42°C',
        'explanation' => 'Campy media contain antibiotics and require microaerophilic conditions at 42°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which molecular assay detects Chlamydia trachomatis in urogenital specimens?',
        'choices'     => json_encode([
            'NAAT (PCR)',
            'Culture on McCoy cells',
            'Giemsa stain',
            'ELISA',
        ]),
        'answer'      => 'NAAT (PCR)',
        'explanation' => 'NAATs are the gold standard for C. trachomatis detection due to high sensitivity.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which stain is used to identify amoebic trophozoites in brain abscess specimens?',
        'choices'     => json_encode([
            'Giemsa stain',
            'Gram stain',
            'India ink',
            'Ziehl-Neelsen',
        ]),
        'answer'      => 'Giemsa stain',
        'explanation' => 'Giemsa shows Acanthamoeba or Naegleria trophozoites in tissue or CSF.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which test detects Enterovirus in stool by cell culture CPE?',
        'choices'     => json_encode([
            'Cell culture on RD or MRC-5 cells',
            'PCR',
            'ELISA',
            'Gram stain',
        ]),
        'answer'      => 'Cell culture on RD or MRC-5 cells',
        'explanation' => 'Enteroviruses produce CPE in specific cell lines used for virus isolation.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 6,
        'question'    => 'Which antigen detection test is used for rapid RSV diagnosis in infants?',
        'choices'     => json_encode([
            'Rapid immunofluorescence assay',
            'PCR',
            'ELISA',
            'Culture',
        ]),
        'answer'      => 'Rapid immunofluorescence assay',
        'explanation' => 'DFA detects RSV antigen in nasal washings within hours.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

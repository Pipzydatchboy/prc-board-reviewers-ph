<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which rapid test detects HIV infection by antibodies against gp120 and gp41?',
        'choices'     => json_encode([
            'ELISA',
            'PCR',
            'Culture',
            'Western blot',
        ]),
        'answer'      => 'ELISA',
        'explanation' => 'ELISA screening detects anti-HIV antibodies; confirmatory by Western blot for gp120/41.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which assay quantifies viral load in HIV by measuring RNA copies per mL?',
        'choices'     => json_encode([
            'Real-time PCR',
            'ELISA',
            'Western blot',
            'Culture',
        ]),
        'answer'      => 'Real-time PCR',
        'explanation' => 'Quantitative PCR measures HIV-1 RNA for monitoring antiretroviral therapy efficacy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which medium differentiates Mycobacterium tuberculosis by growth on Lowenstein-Jensen medium?',
        'choices'     => json_encode([
            'Lowenstein-Jensen',
            'Middlebrook 7H10',
            'Blood agar',
            'MacConkey agar',
        ]),
        'answer'      => 'Lowenstein-Jensen',
        'explanation' => 'Egg-based LJ medium supports MTB growth with characteristic buff-colored colonies.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which biochemical test differentiates Staphylococcus aureus by coagulase positivity?',
        'choices'     => json_encode([
            'Coagulase test',
            'Catalase test',
            'Oxidase test',
            'Urease test',
        ]),
        'answer'      => 'Coagulase test',
        'explanation' => 'S. aureus produces coagulase to clot plasma, differentiating from other staphylococci.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which test identifies Streptococcus pneumoniae by optochin sensitivity and bile solubility?',
        'choices'     => json_encode([
            'Optochin disk and bile solubility',
            'Catalase test',
            'Coagulase test',
            'Oxidase test',
        ]),
        'answer'      => 'Optochin disk and bile solubility',
        'explanation' => 'Pneumococci are optochin-sensitive and autolyse in bile, distinguishing from viridans streptococci.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which medium is used for Neisseria meningitidis culture and contains chocolate agar with antibiotics?',
        'choices'     => json_encode([
            'Thayer-Martin agar',
            'MacConkey agar',
            'Blood agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Thayer-Martin agar',
        'explanation' => 'Selective chocolate agar with antibiotics allows N. meningitidis growth while inhibiting contaminants.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which stain is used to detect Rabies virus in brain tissue by immunofluorescence?',
        'choices'     => json_encode([
            'DFA for Negri bodies',
            'Gram stain',
            'Giemsa stain',
            'India ink',
        ]),
        'answer'      => 'DFA for Negri bodies',
        'explanation' => 'Direct fluorescent antibody test highlights rabies antigen in neuronal tissue inclusions.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which test differentiates Candida albicans by germ tube formation in human serum?',
        'choices'     => json_encode([
            'Germ tube test',
            'CHROMagar Candida',
            'Cornmeal agar',
            'India ink',
        ]),
        'answer'      => 'Germ tube test',
        'explanation' => 'C. albicans forms germ tubes within 2-3 hours in serum at 37°C.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which medium is used for isolation of Bordetella pertussis by charcoal, blood, and antibiotic supplements?',
        'choices'     => json_encode([
            'Regan-Lowe agar',
            'Blood agar',
            'MacConkey agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Regan-Lowe agar',
        'explanation' => 'Charcoal blood agar with cephalexin supports B. pertussis growth with minimal contaminants.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which test identifies Clostridium perfringens by Nagler reaction and lecithinase activity?',
        'choices'     => json_encode([
            'Nagler reaction',
            'Gram stain',
            'Oxidase test',
            'Catalase test',
        ]),
        'answer'      => 'Nagler reaction',
        'explanation' => 'Egg yolk agar shows lecithinase zones inhibited by anti-alpha toxin in Nagler plate.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which stain is used to detect Cryptosporidium oocysts by fluorescent microscopy?',
        'choices'     => json_encode([
            'Auramine-O',
            'Giemsa stain',
            'Trichrome stain',
            'Gram stain',
        ]),
        'answer'      => 'Auramine-O',
        'explanation' => 'Auramine-O fluorescent stain binds acid-fast oocysts, showing bright yellow bodies under UV.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which medium is selective for Salmonella and Shigella by thiosulfate and ferric citrate?',
        'choices'     => json_encode([
            'XLD agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'      => 'XLD agar',
        'explanation' => 'XLD contains thiosulfate and ferric ammonium citrate to detect H₂S producing Salmonella.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which test differentiates Neisseria meningitidis by maltose and glucose fermentation?',
        'choices'     => json_encode([
            'Carbohydrate utilization tests',
            'Coagulase test',
            'Catalase test',
            'Oxidase test',
        ]),
        'answer'      => 'Carbohydrate utilization tests',
        'explanation' => 'N. meningitidis ferments glucose and maltose; N. gonorrhoeae ferments only glucose.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which assay detects HSV DNA by real-time PCR in CSF for encephalitis diagnosis?',
        'choices'     => json_encode([
            'Real-time PCR',
            'ELISA',
            'Culture',
            'IF assay',
        ]),
        'answer'      => 'Real-time PCR',
        'explanation' => 'PCR provides rapid, sensitive detection of HSV-1 DNA in CSF for timely treatment.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which medium is used for isolation of Mycobacterium leprae?',
        'choices'     => json_encode([
            'Cannot be cultured on artificial media',
            'Lowenstein-Jensen',
            'Middlebrook 7H10',
            'Blood agar',
        ]),
        'answer'      => 'Cannot be cultured on artificial media',
        'explanation' => 'M. leprae grows only in animal models; no artificial culture medium supports it.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which biochemical test differentiates Proteus mirabilis by urease positivity and swarming motility?',
        'choices'     => json_encode([
            'Urease test and motility',
            'Catalase test',
            'Oxidase test',
            'Indole test',
        ]),
        'answer'      => 'Urease test and motility',
        'explanation' => 'P. mirabilis shows rapid urease activity and characteristic concentric swarming on agar.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which test is used to detect Rotavirus antigen in stool by immunochromatography?',
        'choices'     => json_encode([
            'Rapid immunochromatographic test',
            'ELISA',
            'PCR',
            'Culture',
        ]),
        'answer'      => 'Rapid immunochromatographic test',
        'explanation' => 'Lateral flow assays detect VP6 antigen for quick rotavirus diagnosis.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which stain is used to visualize microsporidia spores in tissue by electron microscopy?',
        'choices'     => json_encode([
            'TEM identification of polar tubule',
            'Gram stain',
            'Acid-fast stain',
            'Giemsa stain',
        ]),
        'answer'      => 'TEM identification of polar tubule',
        'explanation' => 'Microsporidia identified by unique polar tubule structure under TEM.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which molecular assay detects tuberculosis resistance mutations in rpoB gene?',
        'choices'     => json_encode([
            'Line probe assay',
            'PCR',
            'ELISA',
            'Culture',
        ]),
        'answer'      => 'Line probe assay',
        'explanation' => 'LPA identifies rifampin resistance by detecting rpoB mutations in MTB complex.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 7,
        'question'    => 'Which test detects Norovirus using real-time RT-PCR in outbreak investigations?',
        'choices'     => json_encode([
            'Real-time RT-PCR',
            'ELISA',
            'Culture',
            'Electron microscopy',
        ]),
        'answer'      => 'Real-time RT-PCR',
        'explanation' => 'RT-PCR offers sensitive, rapid detection of Norovirus RNA in epidemiological studies.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

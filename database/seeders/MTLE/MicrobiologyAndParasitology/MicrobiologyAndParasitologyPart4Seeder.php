<?php

namespace Database\Seeders\MTLE\MicrobiologyAndParasitology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MicrobiologyAndParasitologyPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which Gram-negative diplococcus is oxidase-positive and fermentative of glucose only?',
        'choices'     => json_encode([
            'Neisseria gonorrhoeae',
            'Moraxella catarrhalis',
            'Neisseria meningitidis',
            'Escherichia coli',
        ]),
        'answer'      => 'Neisseria gonorrhoeae',
        'explanation' => 'N. gonorrhoeae ferments glucose but not maltose, unlike N. meningitidis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which stain is used to detect the cyst form of Toxoplasma gondii in tissue?',
        'choices'     => json_encode([
            'Giemsa stain',
            'Ziehl-Neelsen',
            'India ink',
            'Lactophenol cotton blue',
        ]),
        'answer'      => 'Giemsa stain',
        'explanation' => 'Giemsa highlights tissue cysts and tachyzoites of T. gondii in biopsies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which medium is selective for Vibrio species by high pH and NaCl content?',
        'choices'     => json_encode([
            'Alkaline peptone water',
            'MacConkey agar',
            'Blood agar',
            'Sabouraud agar',
        ]),
        'answer'      => 'Alkaline peptone water',
        'explanation' => 'APW enriches Vibrio by high pH (8.5) and 1% NaCl, inhibiting most other flora.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which test differentiates Salmonella enterica by H₂S positivity on TSI slant?',
        'choices'     => json_encode([
            'Triple sugar iron agar',
            'MacConkey agar',
            'Urease test',
            'Indole test',
        ]),
        'answer'      => 'Triple sugar iron agar',
        'explanation' => 'Salmonella produces H₂S blackening the butt of TSI agar.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which parasite is diagnosed by the presence of motile trophozoites with undulating membrane in CSF?',
        'choices'     => json_encode([
            'Trypanosoma brucei',
            'Naegleria fowleri',
            'Entamoeba histolytica',
            'Acanthamoeba spp.',
        ]),
        'answer'      => 'Naegleria fowleri',
        'explanation' => 'N. fowleri causes PAM; trophozoites show amoeboid movement with emerging flagella.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which test identifies Enterobacter cloacae by positive ornithine decarboxylase reaction?',
        'choices'     => json_encode([
            'Ornithine decarboxylase test',
            'Citrate utilization test',
            'Urease test',
            'Lactose fermentation',
        ]),
        'answer'      => 'Ornithine decarboxylase test',
        'explanation' => 'E. cloacae decarboxylates ornithine producing alkaline pH change indicated in specific medium.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which fungal infection is diagnosed by spherules containing endospores in lung tissue?',
        'choices'     => json_encode([
            'Coccidioides immitis',
            'Histoplasma capsulatum',
            'Blastomyces dermatitidis',
            'Aspergillus fumigatus',
        ]),
        'answer'      => 'Coccidioides immitis',
        'explanation' => 'C. immitis forms large spherules with endospores detectable in tissue specimens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which rapid molecular test detects Mycobacterium tuberculosis and rifampin resistance?',
        'choices'     => json_encode([
            'Xpert MTB/RIF assay',
            'PCR IS6110 assay',
            'Line probe assay',
            'Smear microscopy',
        ]),
        'answer'      => 'Xpert MTB/RIF assay',
        'explanation' => 'Xpert uses hemi-nested PCR to detect MTB DNA and rpoB mutations for rifampin resistance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which antigen detection assay is used for Histoplasma capsulatum in urine?',
        'choices'     => json_encode([
            'Histoplasma urinary antigen EIA',
            'KOH prep',
            'Culture on SDA',
            'PCR',
        ]),
        'answer'      => 'Histoplasma urinary antigen EIA',
        'explanation' => 'EIA detects polysaccharide antigen in disseminated histoplasmosis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which parasite is diagnosed by Pentatrichomonas hominis in stool wet mount?',
        'choices'     => json_encode([
            'Dientamoeba fragilis',
            'Pentatrichomonas hominis',
            'Giardia lamblia',
            'Entamoeba histolytica',
        ]),
        'answer'      => 'Pentatrichomonas hominis',
        'explanation' => 'P. hominis has five anterior flagella and undulating membrane motility in wet mount.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which test differentiates Klebsiella pneumoniae by mucoid colony and indole negativity?',
        'choices'     => json_encode([
            'Indole test',
            'Urease test',
            'Citrate test',
            'Motility test',
        ]),
        'answer'      => 'Indole test',
        'explanation' => 'K. pneumoniae is indole-negative and forms mucoid colonies on MacConkey agar.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which bacterial pathogen produces club-shaped projections (Chinese letters) on Gram stain?',
        'choices'     => json_encode([
            'Corynebacterium diphtheriae',
            'Bacillus anthracis',
            'Staphylococcus aureus',
            'Listeria monocytogenes',
        ]),
        'answer'      => 'Corynebacterium diphtheriae',
        'explanation' => 'C. diphtheriae appears as pleomorphic rods arranged in palisades and Chinese-letter formations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which medium is used for selective isolation of Salmonella spp. with brilliant green and bile salts?',
        'choices'     => json_encode([
            'Brilliant green agar',
            'MacConkey agar',
            'Blood agar',
            'Chocolate agar',
        ]),
        'answer'      => 'Brilliant green agar',
        'explanation' => 'BGA inhibits most Gram-negatives except Salmonella, which forms red colonies on green background.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which parasite egg has striated shell and is associated with fish-borne trematodes?',
        'choices'     => json_encode([
            'Metagonimus yokogawai',
            'Fasciolopsis buski',
            'Clonorchis sinensis',
            'Paragonimus westermani',
        ]),
        'answer'      => 'Clonorchis sinensis',
        'explanation' => 'Chinese liver fluke eggs are operculate with a distinct shoulder and small knob.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which rapid antigen test is used for Streptococcus pneumoniae detection in urine?',
        'choices'     => json_encode([
            'BinaxNOW pneumococcal urine antigen test',
            'Latex agglutination',
            'PCR',
            'ELISA',
        ]),
        'answer'      => 'BinaxNOW pneumococcal urine antigen test',
        'explanation' => 'BinaxNOW detects C-polysaccharide antigen of S. pneumoniae in urine specimens.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //16
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which stain is used to visualize Aspergillus hyphae in tissue sections?',
        'choices'     => json_encode([
            'Gomori methenamine silver stain',
            'Gram stain',
            'Ziehl-Neelsen',
            'India ink',
        ]),
        'answer'      => 'Gomori methenamine silver stain',
        'explanation' => 'GMS highlights septate hyphae with acute-angle branching characteristic of Aspergillus spp.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //17
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which rapid test detects Legionella pneumophila antigen in urine?',
        'choices'     => json_encode([
            'Urinary antigen test',
            'Culture on BCYE',
            'PCR',
            'ELISA',
        ]),
        'answer'      => 'Urinary antigen test',
        'explanation' => 'Detects L. pneumophila serogroup 1 antigen common in community-acquired pneumonia.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //18
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which biochemical test differentiates Serratia marcescens by prodigiosin pigment production at room temperature?',
        'choices'     => json_encode([
            'Pigment production at 25°C',
            'Indole test',
            'Urease test',
            'Citrate utilization',
        ]),
        'answer'      => 'Pigment production at 25°C',
        'explanation' => 'S. marcescens produces red pigment (prodigiosin) below 30°C, absent at 37°C.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //19
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which test identifies Bacillus anthracis by nonhemolytic colonies and lack of motility?',
        'choices'     => json_encode([
            'Motility test',
            'Catalase test',
            'Oxidase test',
            'Indole test',
        ]),
        'answer'      => 'Motility test',
        'explanation' => 'B. anthracis is nonmotile and nonhemolytic, differentiating it from B. cereus.',
        'created_at'  => $now,
        'updated_at'  => $now
    ],
    //20
    [
        'subject_id'  => 33,
        'part'        => 4,
        'question'    => 'Which molecular assay detects Zika virus RNA in serum or urine?',
        'choices'     => json_encode([
            'Real-time RT-PCR',
            'ELISA',
            'Culture',
            'IFA',
        ]),
        'answer'      => 'Real-time RT-PCR',
        'explanation' => 'RT-PCR amplifies Zika RNA for early diagnosis before antibody response develops.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

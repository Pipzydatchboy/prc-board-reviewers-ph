<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

       // Part 2 – Question 21
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'In a monohybrid cross of two heterozygotes (Aa × Aa), what phenotypic ratio is expected in the offspring?',
           'choices'      => json_encode([
               '3:1',
               '1:1',
               '9:3:3:1',
               '1:2:1',
           ]),
           'answer'       => '3:1',
           'explanation'  => "A monohybrid cross between Aa parents yields three dominant to one recessive phenotype.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 22
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which enzyme synthesizes the RNA primer during DNA replication?',
           'choices'      => json_encode([
               'DNA polymerase I',
               'Helicase',
               'Primase',
               'Ligase',
           ]),
           'answer'       => 'Primase',
           'explanation'  => "Primase lays down RNA primers for DNA polymerase to initiate synthesis.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 23
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'During transcription, which RNA polymerase is responsible for synthesizing mRNA in eukaryotes?',
           'choices'      => json_encode([
               'RNA polymerase I',
               'RNA polymerase II',
               'RNA polymerase III',
               'DNA polymerase',
           ]),
           'answer'       => 'RNA polymerase II',
           'explanation'  => "RNA polymerase II transcribes pre-mRNA in eukaryotic nuclei.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 24
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which genetic principle states that allele frequencies remain constant in a population absent evolutionary forces?',
           'choices'      => json_encode([
               'Hardy–Weinberg equilibrium',
               'Central dogma',
               'Law of segregation',
               'Law of independent assortment',
           ]),
           'answer'       => 'Hardy–Weinberg equilibrium',
           'explanation'  => "Hardy–Weinberg describes a non-evolving population with stable allele frequencies.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 25
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which type of mutation results in a single base substitution that does not change the amino acid sequence?',
           'choices'      => json_encode([
               'Missense',
               'Nonsense',
               'Silent',
               'Frameshift',
           ]),
           'answer'       => 'Silent',
           'explanation'  => "A silent mutation alters the codon without changing the encoded amino acid.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 26
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which process increases species diversity by formation of new species?',
           'choices'      => json_encode([
               'Genetic drift',
               'Gene flow',
               'Speciation',
               'Bottleneck effect',
           ]),
           'answer'       => 'Speciation',
           'explanation'  => "Speciation is the evolutionary process by which new species arise.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 27
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'In an ecosystem, which level of ecological organization includes both biotic and abiotic factors?',
           'choices'      => json_encode([
               'Population',
               'Community',
               'Ecosystem',
               'Biome',
           ]),
           'answer'       => 'Ecosystem',
           'explanation'  => "An ecosystem comprises organisms and their physical environment.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 28
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which cycle describes the movement of nitrogen through the biosphere?',
           'choices'      => json_encode([
               'Water cycle',
               'Carbon cycle',
               'Nitrogen cycle',
               'Phosphorus cycle',
           ]),
           'answer'       => 'Nitrogen cycle',
           'explanation'  => "The nitrogen cycle involves fixation, nitrification, and denitrification.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 29
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which model describes population growth that levels off at carrying capacity?',
           'choices'      => json_encode([
               'Exponential growth',
               'Logistic growth',
               'Linear growth',
               'Oscillating growth',
           ]),
           'answer'       => 'Logistic growth',
           'explanation'  => "Logistic growth incorporates a carrying capacity that limits population size.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 30
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which interaction benefits one species and neither harms nor helps the other?',
           'choices'      => json_encode([
               'Mutualism',
               'Parasitism',
               'Commensalism',
               'Competition',
           ]),
           'answer'       => 'Commensalism',
           'explanation'  => "Commensalism benefits one species without affecting the other.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 31
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which phylum includes animals with segmented bodies and jointed appendages?',
           'choices'      => json_encode([
               'Arthropoda',
               'Chordata',
               'Mollusca',
               'Annelida',
           ]),
           'answer'       => 'Arthropoda',
           'explanation'  => "Arthropods have segmented bodies, exoskeletons, and jointed limbs.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 32
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'What is the major carbohydrate storage form in plants?',
           'choices'      => json_encode([
               'Starch',
               'Glycogen',
               'Cellulose',
               'Chitin',
           ]),
           'answer'       => 'Starch',
           'explanation'  => "Plants store glucose as starch in plastids such as chloroplasts.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 33
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which cell junction allows direct cytoplasmic communication between adjacent plant cells?',
           'choices'      => json_encode([
               'Plasmodesmata',
               'Tight junctions',
               'Gap junctions',
               'Desmosomes',
           ]),
           'answer'       => 'Plasmodesmata',
           'explanation'  => "Plasmodesmata are channels that connect plant cell cytoplasms.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 34
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which structure in roots increases surface area for water absorption?',
           'choices'      => json_encode([
               'Root hairs',
               'Lateral roots',
               'Pericycle',
               'Root cap',
           ]),
           'answer'       => 'Root hairs',
           'explanation'  => "Root hairs are tiny extensions that enhance water and mineral uptake.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 35
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which immune cell type presents antigens to naive T cells?',
           'choices'      => json_encode([
               'Macrophages',
               'Neutrophils',
               'B cells',
               'Dendritic cells',
           ]),
           'answer'       => 'Dendritic cells',
           'explanation'  => "Dendritic cells capture antigens and activate naive T cells in lymph nodes.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 36
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which hormone regulates water balance by increasing water reabsorption in the kidney’s collecting ducts?',
           'choices'      => json_encode([
               'Aldosterone',
               'ADH',
               'Renin',
               'ANP',
           ]),
           'answer'       => 'ADH',
           'explanation'  => "Antidiuretic hormone increases water permeability in collecting ducts.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 37
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which organ synthesizes bile necessary for lipid digestion?',
           'choices'      => json_encode([
               'Pancreas',
               'Liver',
               'Stomach',
               'Small intestine',
           ]),
           'answer'       => 'Liver',
           'explanation'  => "The liver produces bile which emulsifies fats for digestion.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 38
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which process transports solutes against a concentration gradient using ATP?',
           'choices'      => json_encode([
               'Facilitated diffusion',
               'Active transport',
               'Simple diffusion',
               'Endocytosis',
           ]),
           'answer'       => 'Active transport',
           'explanation'  => "Active transport uses ATP to move substances against gradients.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 39
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which biome features grasses and scattered trees with distinct wet and dry seasons?',
           'choices'      => json_encode([
               'Tropical rainforest',
               'Savanna',
               'Taiga',
               'Temperate forest',
           ]),
           'answer'       => 'Savanna',
           'explanation'  => "Savannas have seasonal rainfall and mixed grass-tree landscapes.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 40
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 2,
           'question'     => 'Which pigment is the primary light-absorbing molecule in photosynthesis?',
           'choices'      => json_encode([
               'Carotene',
               'Chlorophyll a',
               'Xanthophyll',
               'Phycobilin',
           ]),
           'answer'       => 'Chlorophyll a',
           'explanation'  => "Chlorophyll a absorbs light energy and initiates the light reactions.",
           'created_at'   => $now,
           'updated_at'   => $now,
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

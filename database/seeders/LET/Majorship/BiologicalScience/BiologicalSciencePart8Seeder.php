<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart8Seeder extends Seeder
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

       // Part 8 – Question 141
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'What process removes introns from pre-mRNA to produce mature mRNA?',
           'choices'      => json_encode([
               'Capping',
               'Polyadenylation',
               'Splicing',
               'Translation',
           ]),
           'answer'       => 'Splicing',
           'explanation'  => "Splicing excises introns and joins exons to form mature mRNA.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 142
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which organ system includes the pancreas, liver, and gallbladder?',
           'choices'      => json_encode([
               'Circulatory system',
               'Digestive system',
               'Endocrine system',
               'Respiratory system',
           ]),
           'answer'       => 'Digestive system',
           'explanation'  => "The digestive system comprises organs that process food and absorb nutrients.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 143
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which sterilization method uses ultraviolet light to kill microorganisms on surfaces?',
           'choices'      => json_encode([
               'Autoclaving',
               'UV irradiation',
               'Filtration',
               'Pasteurization',
           ]),
           'answer'       => 'UV irradiation',
           'explanation'  => "Ultraviolet radiation disrupts microbial DNA, preventing replication.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 144
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which cytoskeletal component forms the mitotic spindle during cell division?',
           'choices'      => json_encode([
               'Microtubules',
               'Microfilaments',
               'Intermediate filaments',
               'Centrioles',
           ]),
           'answer'       => 'Microtubules',
           'explanation'  => "Microtubules assemble into the spindle apparatus to segregate chromosomes.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 145
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which plasma protein is converted to fibrin during blood clotting?',
           'choices'      => json_encode([
               'Albumin',
               'Fibrinogen',
               'Globulin',
               'Prothrombin',
           ]),
           'answer'       => 'Fibrinogen',
           'explanation'  => "Thrombin cleaves fibrinogen to fibrin, forming a blood clot meshwork.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 146
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which fat-soluble vitamin is essential for vision and found in carrots?',
           'choices'      => json_encode([
               'Vitamin A',
               'Vitamin C',
               'Vitamin D',
               'Vitamin K',
           ]),
           'answer'       => 'Vitamin A',
           'explanation'  => "Vitamin A (retinol) forms retinal, a component of rhodopsin in the eye.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 147
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'What type of symbiotic relationship benefits both interacting species?',
           'choices'      => json_encode([
               'Parasitism',
               'Commensalism',
               'Mutualism',
               'Competition',
           ]),
           'answer'       => 'Mutualism',
           'explanation'  => "Mutualism provides mutual benefits, such as pollinators and flowering plants.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 148
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which enzyme converts hydrogen peroxide to water and oxygen?',
           'choices'      => json_encode([
               'Catalase',
               'Peroxidase',
               'Superoxide dismutase',
               'Oxidase',
           ]),
           'answer'       => 'Catalase',
           'explanation'  => "Catalase decomposes H₂O₂, protecting cells from oxidative damage.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 149
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which domain of life lacks peptidoglycan in its cell walls?',
           'choices'      => json_encode([
               'Bacteria',
               'Archaea',
               'Eukarya',
               'Protista',
           ]),
           'answer'       => 'Archaea',
           'explanation'  => "Archaeal cell walls contain pseudopeptidoglycan or other polymers, not true peptidoglycan.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 150
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'In anaerobic respiration using nitrate, which molecule serves as the final electron acceptor?',
           'choices'      => json_encode([
               'Oxygen',
               'Nitrite',
               'Nitrate',
               'Sulphate',
           ]),
           'answer'       => 'Nitrate',
           'explanation'  => "Nitrate (NO₃⁻) is reduced to nitrite or nitrogenous gases in anaerobic respiration.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 151
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which cell type synthesizes the organic components of bone matrix?',
           'choices'      => json_encode([
               'Osteoblast',
               'Osteoclast',
               'Osteocyte',
               'Chondrocyte',
           ]),
           'answer'       => 'Osteoblast',
           'explanation'  => "Osteoblasts produce collagen and ground substance of bone.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 152
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which hormone from the anterior pituitary stimulates milk production?',
           'choices'      => json_encode([
               'Oxytocin',
               'Prolactin',
               'Growth hormone',
               'ACTH',
           ]),
           'answer'       => 'Prolactin',
           'explanation'  => "Prolactin induces lactation by mammary glands.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 153
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which vitamin can be synthesized in the skin following UV exposure?',
           'choices'      => json_encode([
               'Vitamin A',
               'Vitamin B12',
               'Vitamin C',
               'Vitamin D',
           ]),
           'answer'       => 'Vitamin D',
           'explanation'  => "Cholesterol in the skin is converted to vitamin D3 upon UVB exposure.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 154
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which region of a neuron is primarily responsible for initiating action potentials?',
           'choices'      => json_encode([
               'Dendrites',
               'Axon hillock',
               'Node of Ranvier',
               'Axon terminal',
           ]),
           'answer'       => 'Axon hillock',
           'explanation'  => "The axon hillock has a high density of voltage-gated channels to trigger action potentials.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 155
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Movement of alleles between populations is termed what?',
           'choices'      => json_encode([
               'Genetic drift',
               'Mutation',
               'Natural selection',
               'Gene flow',
           ]),
           'answer'       => 'Gene flow',
           'explanation'  => "Gene flow occurs when individuals migrate and exchange alleles among populations.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 156
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which lobe of the human brain is primarily responsible for visual processing?',
           'choices'      => json_encode([
               'Frontal lobe',
               'Parietal lobe',
               'Temporal lobe',
               'Occipital lobe',
           ]),
           'answer'       => 'Occipital lobe',
           'explanation'  => "The occipital lobe contains the primary visual cortex for interpreting visual stimuli.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 157
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which organ releases erythropoietin in response to low oxygen levels?',
           'choices'      => json_encode([
               'Liver',
               'Kidney',
               'Heart',
               'Spleen',
           ]),
           'answer'       => 'Kidney',
           'explanation'  => "The kidney detects hypoxia and secretes erythropoietin to stimulate RBC production.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 158
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'What is the main storage form of glucose in animal cells?',
           'choices'      => json_encode([
               'Starch',
               'Sucrose',
               'Glycogen',
               'Cellulose',
           ]),
           'answer'       => 'Glycogen',
           'explanation'  => "Glycogen is a branched polymer of glucose stored in liver and muscle cells.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 159
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'Which plant hormone regulates fruit ripening and leaf abscission?',
           'choices'      => json_encode([
               'Auxin',
               'Cytokinin',
               'Gibberellin',
               'Ethylene',
           ]),
           'answer'       => 'Ethylene',
           'explanation'  => "Ethylene gas promotes ripening and programmed shedding of plant organs (abscission).",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 160
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 8,
           'question'     => 'What is the primary structural component of bacterial cell walls?',
           'choices'      => json_encode([
               'Chitin',
               'Peptidoglycan',
               'Cellulose',
               'Lignin',
           ]),
           'answer'       => 'Peptidoglycan',
           'explanation'  => "Peptidoglycan forms a mesh-like layer providing strength to bacterial cell walls.",
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

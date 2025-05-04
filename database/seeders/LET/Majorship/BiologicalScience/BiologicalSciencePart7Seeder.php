<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart7Seeder extends Seeder
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

       // Part 7 – Question 121
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which organelle is the primary site for protein modification and sorting in eukaryotic cells?',
           'choices'      => json_encode([
               'Mitochondrion',
               'Endoplasmic reticulum',
               'Golgi apparatus',
               'Lysosome',
           ]),
           'answer'       => 'Golgi apparatus',
           'explanation'  => "The Golgi apparatus modifies, sorts, and packages proteins for secretion or targeting.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 122
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'The enzyme hexokinase catalyzes the phosphorylation of glucose to form which compound?',
           'choices'      => json_encode([
               'Glucose-6-phosphate',
               'Fructose-1,6-bisphosphate',
               'Pyruvate',
               'Glucose-1-phosphate',
           ]),
           'answer'       => 'Glucose-6-phosphate',
           'explanation'  => "Hexokinase transfers a phosphate from ATP to glucose, yielding glucose-6-phosphate.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 123
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'During meiosis I, which phase involves separation of homologous chromosomes?',
           'choices'      => json_encode([
               'Metaphase I',
               'Anaphase I',
               'Telophase I',
               'Prophase I',
           ]),
           'answer'       => 'Anaphase I',
           'explanation'  => "In Anaphase I, homologous chromosomes are pulled to opposite poles by spindle fibers.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 124
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which immunoglobulin is secreted in breast milk and confers passive immunity to infants?',
           'choices'      => json_encode([
               'IgG',
               'IgM',
               'IgA',
               'IgE',
           ]),
           'answer'       => 'IgA',
           'explanation'  => "Secretory IgA is found in mucosal secretions, including breast milk, protecting neonates.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 125
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which nephron segment is primarily responsible for concentrating urine via countercurrent multiplication?',
           'choices'      => json_encode([
               'Proximal tubule',
               'Loop of Henle',
               'Distal tubule',
               'Collecting duct',
           ]),
           'answer'       => 'Loop of Henle',
           'explanation'  => "The loop of Henle establishes an osmotic gradient that concentrates urine.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 126
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which hormone increases blood calcium levels by stimulating osteoclast activity?',
           'choices'      => json_encode([
               'Calcitonin',
               'Parathyroid hormone',
               'Vitamin D',
               'Calcitriol',
           ]),
           'answer'       => 'Parathyroid hormone',
           'explanation'  => "PTH increases Ca²⁺ by promoting bone resorption and renal reabsorption of calcium.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 127
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which vitamin deficiency leads to pernicious anemia due to lack of intrinsic factor?',
           'choices'      => json_encode([
               'Vitamin B6',
               'Vitamin B12',
               'Vitamin C',
               'Folate',
           ]),
           'answer'       => 'Vitamin B12',
           'explanation'  => "Intrinsic factor is required for B12 absorption; deficiency causes megaloblastic anemia.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 128
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'In the Calvin cycle, which three-carbon compound is exported to form glucose?',
           'choices'      => json_encode([
               '3-Phosphoglycerate',
               'Triose phosphate',
               'Ribulose-1,5-bisphosphate',
               'Fructose-6-phosphate',
           ]),
           'answer'       => 'Triose phosphate',
           'explanation'  => "Triose phosphate (G3P) exits the cycle and contributes to carbohydrate synthesis.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 129
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which leaf tissue contains the majority of chloroplasts for photosynthesis?',
           'choices'      => json_encode([
               'Epidermis',
               'Vascular bundle',
               'Spongy mesophyll',
               'Palisade mesophyll',
           ]),
           'answer'       => 'Palisade mesophyll',
           'explanation'  => "Palisade mesophyll has densely packed chloroplasts for efficient light capture.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 130
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which class of lipids is the major structural component of biological membranes?',
           'choices'      => json_encode([
               'Triglycerides',
               'Steroids',
               'Phospholipids',
               'Glycolipids',
           ]),
           'answer'       => 'Phospholipids',
           'explanation'  => "Phospholipids form bilayers providing membrane fluidity and barrier functions.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 131
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which biome exhibits the highest net primary productivity?',
           'choices'      => json_encode([
               'Tundra',
               'Desert',
               'Tropical rainforest',
               'Taiga',
           ]),
           'answer'       => 'Tropical rainforest',
           'explanation'  => "Tropical rainforests produce high biomass due to year-round warmth and moisture.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 132
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which bacterial structure mediates DNA transfer during conjugation?',
           'choices'      => json_encode([
               'Flagellum',
               'Pilus',
               'Capsule',
               'Plasmid',
           ]),
           'answer'       => 'Pilus',
           'explanation'  => "The pilus establishes contact and transfers plasmid DNA between bacteria.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 133
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which macromolecule is the primary component of extracellular matrix in animals?',
           'choices'      => json_encode([
               'Proteins',
               'Polysaccharides',
               'Lipids',
               'Nucleic acids',
           ]),
           'answer'       => 'Polysaccharides',
           'explanation'  => "Glycosaminoglycans and proteoglycans form the hydrated matrix supporting cells.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 134
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'In the Krebs cycle, which enzyme catalyzes the oxidation of succinate to fumarate?',
           'choices'      => json_encode([
               'Succinate dehydrogenase',
               'Malate dehydrogenase',
               'Citrate synthase',
               'Isocitrate dehydrogenase',
           ]),
           'answer'       => 'Succinate dehydrogenase',
           'explanation'  => "Succinate dehydrogenase oxidizes succinate, reducing FAD to FADH₂.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 135
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which organelle stores calcium ions in muscle cells?',
           'choices'      => json_encode([
               'Mitochondrion',
               'Sarcoplasmic reticulum',
               'Cytoskeleton',
               'Golgi apparatus',
           ]),
           'answer'       => 'Sarcoplasmic reticulum',
           'explanation'  => "The sarcoplasmic reticulum releases and sequesters Ca²⁺ for muscle contraction.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 136
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which term describes arterial blood pressure during ventricular contraction?',
           'choices'      => json_encode([
               'Diastolic pressure',
               'Mean arterial pressure',
               'Systolic pressure',
               'Pulse pressure',
           ]),
           'answer'       => 'Systolic pressure',
           'explanation'  => "Systolic pressure is the peak pressure during ventricular systole.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 137
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'A drop in blood pH below 7.35 is referred to as what condition?',
           'choices'      => json_encode([
               'Alkalosis',
               'Acidosis',
               'Hypoxia',
               'Hypercapnia',
           ]),
           'answer'       => 'Acidosis',
           'explanation'  => "Acidosis is a condition where blood pH falls below normal range.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 138
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which enzyme secreted by the pancreas digests proteins in the small intestine?',
           'choices'      => json_encode([
               'Amylase',
               'Lipase',
               'Trypsin',
               'Lactase',
           ]),
           'answer'       => 'Trypsin',
           'explanation'  => "Trypsinogen is activated to trypsin which cleaves peptide bonds in proteins.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 139
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which second messenger triggers release of Ca²⁺ from the endoplasmic reticulum?',
           'choices'      => json_encode([
               'cAMP',
               'IP3',
               'DAG',
               'cGMP',
           ]),
           'answer'       => 'IP3',
           'explanation'  => "Inositol trisphosphate binds ER receptors causing Ca²⁺ release.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 140
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 7,
           'question'     => 'Which structure produces cerebrospinal fluid in the brain?',
           'choices'      => json_encode([
               'Choroid plexus',
               'Pineal gland',
               'Hypothalamus',
               'Pituitary gland',
           ]),
           'answer'       => 'Choroid plexus',
           'explanation'  => "The choroid plexus in ventricles secretes and maintains cerebrospinal fluid.",
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

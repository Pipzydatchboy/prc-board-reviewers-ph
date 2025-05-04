<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart6Seeder extends Seeder
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


       // Part 6 – Question 101
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which enzyme initiates base excision repair by removing damaged bases from DNA?',
           'choices'      => json_encode([
               'DNA ligase',
               'DNA glycosylase',
               'DNA helicase',
               'DNA polymerase',
           ]),
           'answer'       => 'DNA glycosylase',
           'explanation'  => "DNA glycosylase recognizes and removes damaged or inappropriate bases in base excision repair.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 102
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which epigenetic modification involves the addition of methyl groups to cytosine residues in DNA?',
           'choices'      => json_encode([
               'Histone acetylation',
               'DNA methylation',
               'RNA interference',
               'Ubiquitination',
           ]),
           'answer'       => 'DNA methylation',
           'explanation'  => "DNA methylation commonly occurs at CpG sites, regulating gene expression without changing sequence.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 103
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which second messenger is produced by adenylyl cyclase in response to G protein activation?',
           'choices'      => json_encode([
               'cGMP',
               'IP3',
               'cAMP',
               'DAG',
           ]),
           'answer'       => 'cAMP',
           'explanation'  => "cAMP is synthesized from ATP by adenylyl cyclase and transduces signals downstream.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 104
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'During plant growth, which phase follows cell division and is characterized by rapid cell elongation?',
           'choices'      => json_encode([
               'Meristematic phase',
               'Elongation phase',
               'Maturation phase',
               'Germination phase',
           ]),
           'answer'       => 'Elongation phase',
           'explanation'  => "After division in meristems, cells elongate rapidly to contribute to plant growth.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 105
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which vitamin is a cofactor required for proline hydroxylation in collagen synthesis?',
           'choices'      => json_encode([
               'Vitamin A',
               'Vitamin B6',
               'Vitamin C',
               'Vitamin D',
           ]),
           'answer'       => 'Vitamin C',
           'explanation'  => "Vitamin C is essential for prolyl and lysyl hydroxylases that stabilize collagen triple helix.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 106
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which heart valve prevents backflow of blood into the left ventricle during diastole?',
           'choices'      => json_encode([
               'Mitral valve',
               'Tricuspid valve',
               'Aortic valve',
               'Pulmonary valve',
           ]),
           'answer'       => 'Aortic valve',
           'explanation'  => "The aortic valve closes during diastole to prevent regurgitation into the left ventricle.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 107
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which immunoglobulin is the first antibody produced in a primary immune response?',
           'choices'      => json_encode([
               'IgA',
               'IgE',
               'IgM',
               'IgG',
           ]),
           'answer'       => 'IgM',
           'explanation'  => "IgM is produced first by B cells and forms pentamers for strong initial response.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 108
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'What term describes the ability of a single genotype to produce different phenotypes in varying environments?',
           'choices'      => json_encode([
               'Pleiotropy',
               'Genetic drift',
               'Phenotypic plasticity',
               'Polygenic inheritance',
           ]),
           'answer'       => 'Phenotypic plasticity',
           'explanation'  => "Phenotypic plasticity enables organisms to adapt morphology or physiology to environment.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 109
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which structure in skeletal muscle fibers transmits action potentials into the cell interior?',
           'choices'      => json_encode([
               'Sarcolemma',
               'T-tubules',
               'Sarcoplasmic reticulum',
               'Myofibrils',
           ]),
           'answer'       => 'T-tubules',
           'explanation'  => "T-tubules are invaginations of the sarcolemma that propagate action potentials deep into muscle fibers.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 110
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which part of a neuron primarily receives synaptic input from other cells?',
           'choices'      => json_encode([
               'Axon hillock',
               'Dendrites',
               'Axon terminal',
               'Myelin sheath',
           ]),
           'answer'       => 'Dendrites',
           'explanation'  => "Dendrites contain receptors and receive synaptic signals from presynaptic neurons.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 111
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which process in B cells shuffles gene segments to generate diverse antigen receptors?',
           'choices'      => json_encode([
               'Somatic hypermutation',
               'Class switch recombination',
               'V(D)J recombination',
               'Affinity maturation',
           ]),
           'answer'       => 'V(D)J recombination',
           'explanation'  => "V(D)J recombination assembles variable, diversity, and joining gene segments for receptor diversity.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 112
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which organ stores and concentrates bile produced by the liver?',
           'choices'      => json_encode([
               'Pancreas',
               'Gallbladder',
               'Stomach',
               'Small intestine',
           ]),
           'answer'       => 'Gallbladder',
           'explanation'  => "The gallbladder stores bile and releases it into the duodenum during digestion.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 113
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'What drives diffusion of oxygen and carbon dioxide across alveolar membranes?',
           'choices'      => json_encode([
               'Blood flow',
               'Partial pressure gradient',
               'Active transport',
               'Temperature difference',
           ]),
           'answer'       => 'Partial pressure gradient',
           'explanation'  => "Gas exchange occurs down partial pressure gradients between alveolar air and blood." ,
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 114
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which hormone secreted by the adrenal cortex increases sodium reabsorption in the kidney?',
           'choices'      => json_encode([
               'Aldosterone',
               'Cortisol',
               'ADH',
               'Renin',
           ]),
           'answer'       => 'Aldosterone',
           'explanation'  => "Aldosterone promotes Na+ reabsorption and K+ secretion in distal tubules and collecting ducts.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 115
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which term describes programmed cell death essential for development and homeostasis?',
           'choices'      => json_encode([
               'Necrosis',
               'Autophagy',
               'Apoptosis',
               'Pyroptosis',
           ]),
           'answer'       => 'Apoptosis',
           'explanation'  => "Apoptosis is a regulated process of cell suicide that avoids inflammation.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 116
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which plant tissue conducts water and dissolved minerals upwards from roots?',
           'choices'      => json_encode([
               'Phloem',
               'Xylem',
               'Cambium',
               'Epidermis',
           ]),
           'answer'       => 'Xylem',
           'explanation'  => "Xylem vessels are specialized for water transport from roots to shoots.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 117
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which structure in legumes houses nitrogen-fixing bacteria?',
           'choices'      => json_encode([
               'Root nodule',
               'Root hair',
               'Nodule cortex',
               'Rhizosphere',
           ]),
           'answer'       => 'Root nodule',
           'explanation'  => "Root nodules contain symbiotic bacteria that fix atmospheric nitrogen." ,
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 118
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which enzyme catalyzes the conversion of ATP to cyclic AMP (cAMP)?',
           'choices'      => json_encode([
               'Phospholipase C',
               'Adenylyl cyclase',
               'Protein kinase A',
               'Guanylyl cyclase',
           ]),
           'answer'       => 'Adenylyl cyclase',
           'explanation'  => "Adenylyl cyclase synthesizes cAMP from ATP as a second messenger.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 119
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'Which organelle contains ribosomes and plays a key role in protein folding?',
           'choices'      => json_encode([
               'Rough endoplasmic reticulum',
               'Smooth endoplasmic reticulum',
               'Golgi apparatus',
               'Mitochondrion',
           ]),
           'answer'       => 'Rough endoplasmic reticulum',
           'explanation'  => "The rough ER is studded with ribosomes and facilitates nascent protein folding.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 120
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 6,
           'question'     => 'What is the primary function of the Golgi apparatus in eukaryotic cells?',
           'choices'      => json_encode([
               'ATP production',
               'Protein synthesis',
               'Protein modification and packaging',
               'Lipid synthesis',
           ]),
           'answer'       => 'Protein modification and packaging',
           'explanation'  => "The Golgi modifies, sorts, and packages proteins for secretion or lysosomal targeting.",
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

<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart1Seeder extends Seeder
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

       // 1
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which organelle is the primary site of ATP production in eukaryotic cells?',
           'choices'      => json_encode([
               'Mitochondrion',
               'Chloroplast',
               'Ribosome',
               'Golgi apparatus',
           ]),
           'answer'       => 'Mitochondrion',
           'explanation'  => "Mitochondria generate ATP through oxidative phosphorylation.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 2
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'The fluid mosaic model describes the structure of the:',
           'choices'      => json_encode([
               'Endoplasmic reticulum',
               'Cell membrane',
               'Nuclear envelope',
               'Cytoskeleton',
           ]),
           'answer'       => 'Cell membrane',
           'explanation'  => "The fluid mosaic model depicts a phospholipid bilayer with embedded proteins.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 3
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'In which organelle do the light-dependent reactions of photosynthesis occur?',
           'choices'      => json_encode([
               'Mitochondrion',
               'Chloroplast',
               'Lysosome',
               'Peroxisome',
           ]),
           'answer'       => 'Chloroplast',
           'explanation'  => "Light-dependent reactions take place in the thylakoid membranes of chloroplasts.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 4
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which nitrogenous base is found in DNA but not in RNA?',
           'choices'      => json_encode([
               'Adenine',
               'Guanine',
               'Thymine',
               'Cytosine',
           ]),
           'answer'       => 'Thymine',
           'explanation'  => "Thymine in DNA is replaced by uracil in RNA.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 5
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'During which phase of mitosis do sister chromatids separate?',
           'choices'      => json_encode([
               'Metaphase',
               'Anaphase',
               'Telophase',
               'Prophase',
           ]),
           'answer'       => 'Anaphase',
           'explanation'  => "In anaphase, spindle fibers pull sister chromatids toward opposite poles.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 6
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which process produces two genetically identical daughter cells?',
           'choices'      => json_encode([
               'Binary fission',
               'Meiosis',
               'Mitosis',
               'Budding',
           ]),
           'answer'       => 'Mitosis',
           'explanation'  => "Mitosis divides one cell into two identical daughter cells.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 7
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which specific region of an enzyme binds to its substrate?',
           'choices'      => json_encode([
               'Allosteric site',
               'Active site',
               'Catalytic core',
               'Binding pocket',
           ]),
           'answer'       => 'Active site',
           'explanation'  => "The active site is the region where substrate molecules bind and undergo a chemical reaction.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 8
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which type of bond links amino acids together in a protein?',
           'choices'      => json_encode([
               'Hydrogen bond',
               'Ionic bond',
               'Peptide bond',
               'Disulfide bond',
           ]),
           'answer'       => 'Peptide bond',
           'explanation'  => "Peptide bonds form between amino and carboxyl groups of adjacent amino acids.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 9
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Enzymes belong to which class of macromolecules?',
           'choices'      => json_encode([
               'Carbohydrates',
               'Lipids',
               'Proteins',
               'Nucleic acids',
           ]),
           'answer'       => 'Proteins',
           'explanation'  => "Enzymes are proteins that catalyze biochemical reactions.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 10
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which process involves the passive movement of water across a membrane?',
           'choices'      => json_encode([
               'Diffusion',
               'Osmosis',
               'Facilitated diffusion',
               'Active transport',
           ]),
           'answer'       => 'Osmosis',
           'explanation'  => "Osmosis is the diffusion of water through a semipermeable membrane.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 11
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which RNA molecule transfers specific amino acids to ribosomes?',
           'choices'      => json_encode([
               'mRNA',
               'rRNA',
               'tRNA',
               'snRNA',
           ]),
           'answer'       => 'tRNA',
           'explanation'  => "tRNA carries amino acids and matches its anticodon with mRNA codons during translation.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 12
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'What is the correct order of phases in the cell cycle?',
           'choices'      => json_encode([
               'G1 → S → G2 → M',
               'S → G2 → M → G1',
               'M → G1 → S → G2',
               'G2 → M → G1 → S',
           ]),
           'answer'       => 'G1 → S → G2 → M',
           'explanation'  => "Cells progress from growth (G1) to DNA synthesis (S), preparation (G2), and mitosis (M).",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 13
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which structure surrounds and protects the nucleus?',
           'choices'      => json_encode([
               'Cell membrane',
               'Nuclear envelope',
               'Endoplasmic reticulum',
               'Nucleolus',
           ]),
           'answer'       => 'Nuclear envelope',
           'explanation'  => "The nuclear envelope is a double membrane that encloses the nucleus.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 14
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which cytoskeletal filament is composed of actin?',
           'choices'      => json_encode([
               'Microtubules',
               'Intermediate filaments',
               'Microfilaments',
               'Myosin filaments',
           ]),
           'answer'       => 'Microfilaments',
           'explanation'  => "Microfilaments (actin filaments) support cell shape and enable movement.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 15
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'What is the basic monomer unit of nucleic acids?',
           'choices'      => json_encode([
               'Amino acid',
               'Nucleotide',
               'Monosaccharide',
               'Fatty acid',
           ]),
           'answer'       => 'Nucleotide',
           'explanation'  => "Nucleotides consist of a sugar, phosphate, and nitrogenous base.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 16
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which sugar is present in RNA but not in DNA?',
           'choices'      => json_encode([
               'Deoxyribose',
               'Ribose',
               'Glucose',
               'Fructose',
           ]),
           'answer'       => 'Ribose',
           'explanation'  => "RNA contains ribose sugar, whereas DNA contains deoxyribose.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 17
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which enzyme unwinds the DNA double helix during replication?',
           'choices'      => json_encode([
               'DNA polymerase',
               'DNA ligase',
               'Helicase',
               'Primase',
           ]),
           'answer'       => 'Helicase',
           'explanation'  => "Helicase breaks hydrogen bonds to unwind the DNA helix.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 18
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'In which part of the cell does glycolysis occur?',
           'choices'      => json_encode([
               'Mitochondrial matrix',
               'Cytosol',
               'Chloroplast stroma',
               'Endoplasmic reticulum',
           ]),
           'answer'       => 'Cytosol',
           'explanation'  => "Glycolysis takes place in the cytosol, outside the mitochondria.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 19
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which metabolic process yields the highest amount of ATP per glucose?',
           'choices'      => json_encode([
               'Glycolysis',
               'Krebs cycle',
               'Fermentation',
               'Oxidative phosphorylation',
           ]),
           'answer'       => 'Oxidative phosphorylation',
           'explanation'  => "Oxidative phosphorylation produces the most ATP via the electron transport chain.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // 20
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 1,
           'question'     => 'Which structure within the chloroplast contains chlorophyll?',
           'choices'      => json_encode([
               'Stroma',
               'Thylakoid membrane',
               'Granum',
               'Lamella',
           ]),
           'answer'       => 'Thylakoid membrane',
           'explanation'  => "Chlorophyll is embedded in the thylakoid membranes of chloroplasts.",
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

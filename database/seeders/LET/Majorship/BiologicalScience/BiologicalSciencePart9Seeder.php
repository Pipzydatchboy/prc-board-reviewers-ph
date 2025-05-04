<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart9Seeder extends Seeder
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
       $part  = 9;

       // Part 9 – Question 161
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which region of an antibody determines its specific antigen-binding ability?',
           'choices'      => json_encode([
               'Variable region',
               'Constant region',
               'Hinge region',
               'Fc region',
           ]),
           'answer'       => 'Variable region',
           'explanation'  => "The variable region contains unique amino acid sequences that bind specific antigens.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 162
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which coat protein is involved in receptor-mediated endocytosis?',
           'choices'      => json_encode([
               'Clathrin',
               'COPI',
               'COPII',
               'Caveolin',
           ]),
           'answer'       => 'Clathrin',
           'explanation'  => "Clathrin-coated pits mediate internalization of receptor-bound ligands.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 163
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'At which checkpoint is DNA integrity assessed before DNA replication?',
           'choices'      => json_encode([
               'G0 checkpoint',
               'G1/S checkpoint',
               'G2/M checkpoint',
               'Spindle checkpoint',
           ]),
           'answer'       => 'G1/S checkpoint',
           'explanation'  => "The G1/S checkpoint prevents damaged DNA from entering S phase.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 164
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which signaling pathway utilizes the JAK-STAT mechanism?',
           'choices'      => json_encode([
               'Insulin signaling',
               'Notch signaling',
               'JAK-STAT signaling',
               'TGF-beta signaling',
           ]),
           'answer'       => 'JAK-STAT signaling',
           'explanation'  => "Cytokines and growth factors activate receptors that signal through JAK-STAT.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 165
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'In PCR, what occurs during the annealing step?',
           'choices'      => json_encode([
               'DNA denaturation',
               'Primer binding',
               'DNA synthesis',
               'Template degradation',
           ]),
           'answer'       => 'Primer binding',
           'explanation'  => "During annealing, primers hybridize to complementary sequences on the template.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 166
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'EcoRI is a restriction enzyme that recognizes which DNA sequence?',
           'choices'      => json_encode([
               'GAATTC',
               'GGTACC',
               'AAGCTT',
               'CCATGG',
           ]),
           'answer'       => 'GAATTC',
           'explanation'  => "EcoRI cleaves DNA at the palindromic sequence 5'-GAATTC-3'.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 167
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which plant hormone promotes cell division in shoot apical meristems?',
           'choices'      => json_encode([
               'Auxin',
               'Gibberellin',
               'Cytokinin',
               'Ethylene',
           ]),
           'answer'       => 'Cytokinin',
           'explanation'  => "Cytokinins stimulate cell division and shoot initiation in plant tissues.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 168
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which snRNA particle recognizes the 5\' splice site during mRNA processing?',
           'choices'      => json_encode([
               'U1 snRNA',
               'U2 snRNA',
               'U4 snRNA',
               'U6 snRNA',
           ]),
           'answer'       => 'U1 snRNA',
           'explanation'  => "U1 snRNA base-pairs with the 5' splice site to initiate splicing.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 169
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which chromatin form is less condensed and transcriptionally active?',
           'choices'      => json_encode([
               'Heterochromatin',
               'Euchromatin',
               'Constitutive heterochromatin',
               'Facultative heterochromatin',
           ]),
           'answer'       => 'Euchromatin',
           'explanation'  => "Euchromatin is accessible to transcription machinery, allowing gene expression.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 170
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'What is the main polysaccharide found in fungal cell walls?',
           'choices'      => json_encode([
               'Cellulose',
               'Chitin',
               'Peptidoglycan',
               'Glycogen',
           ]),
           'answer'       => 'Chitin',
           'explanation'  => "Chitin forms strong microfibrils providing structural support in fungi.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 171
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'In a test cross, an organism of unknown genotype is crossed with which genotype to determine its genotype?',
           'choices'      => json_encode([
               'Heterozygote',
               'Homozygous dominant',
               'Homozygous recessive',
               'Wild type',
           ]),
           'answer'       => 'Homozygous recessive',
           'explanation'  => "Crossing with a homozygous recessive reveals the unknown genotype by offspring phenotypes.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 172
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which chloroplast compartment hosts the Calvin cycle?',
           'choices'      => json_encode([
               'Thylakoid lumen',
               'Stroma',
               'Intermembrane space',
               'Matrix',
           ]),
           'answer'       => 'Stroma',
           'explanation'  => "Enzymes of the Calvin cycle are located in the stroma surrounding thylakoids.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 173
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Deficiency of which vitamin causes rickets in children?',
           'choices'      => json_encode([
               'Vitamin A',
               'Vitamin D',
               'Vitamin C',
               'Vitamin K',
           ]),
           'answer'       => 'Vitamin D',
           'explanation'  => "Vitamin D promotes calcium absorption; its deficiency impairs bone mineralization.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 174
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'What structure connects a mammalian embryo to the placenta?',
           'choices'      => json_encode([
               'Amnion',
               'Yolk sac',
               'Umbilical cord',
               'Allantois',
           ]),
           'answer'       => 'Umbilical cord',
           'explanation'  => "The umbilical cord contains blood vessels linking embryo and placenta.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 175
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'In the lac operon, the repressor protein binds to which region to inhibit transcription?',
           'choices'      => json_encode([
               'Promoter',
               'Operator',
               'Enhancer',
               'Terminator',
           ]),
           'answer'       => 'Operator',
           'explanation'  => "The lac repressor binds the operator, blocking RNA polymerase access to the promoter.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 176
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which enzyme catalyzes the reduction of nitrogen gas to ammonia in nitrogen-fixing bacteria?',
           'choices'      => json_encode([
               'Nitrogenase',
               'Nitrase',
               'Nitrate reductase',
               'Nitrite reductase',
           ]),
           'answer'       => 'Nitrogenase',
           'explanation'  => "Nitrogenase performs the energetically demanding conversion of N₂ to NH₃.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 177
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which sterilization method is suitable for heat-sensitive fluids?',
           'choices'      => json_encode([
               'Autoclaving',
               'Filtration',
               'UV irradiation',
               'Pasteurization',
           ]),
           'answer'       => 'Filtration',
           'explanation'  => "Membrane filtration removes microbes without heat damage to solutions.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 178
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which checkpoint ensures all chromosomes are attached to the spindle before anaphase?',
           'choices'      => json_encode([
               'G1/S checkpoint',
               'G2/M checkpoint',
               'Spindle checkpoint',
               'DNA damage checkpoint',
           ]),
           'answer'       => 'Spindle checkpoint',
           'explanation'  => "The spindle checkpoint prevents segregation errors by ensuring proper attachment.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 179
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which histone modification is commonly associated with active transcription?',
           'choices'      => json_encode([
               'Methylation',
               'Acetylation',
               'Ubiquitination',
               'Sumoylation',
           ]),
           'answer'       => 'Acetylation',
           'explanation'  => "Histone acetylation loosens chromatin, facilitating transcription factor access.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 180
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 9,
           'question'     => 'Which muscle fiber type is rich in mitochondria and fatigue-resistant?',
           'choices'      => json_encode([
               'Type I (slow-twitch)',
               'Type IIa (fast oxidative)',
               'Type IIb (fast glycolytic)',
               'Type IIx (intermediate)',
           ]),
           'answer'       => 'Type I (slow-twitch)',
           'explanation'  => "Type I fibers generate ATP via oxidative phosphorylation and resist fatigue.",
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

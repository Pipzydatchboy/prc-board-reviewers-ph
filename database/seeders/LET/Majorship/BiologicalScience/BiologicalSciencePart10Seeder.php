<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart10Seeder extends Seeder
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

       // Part 10 – Question 181
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'In the CRISPR/Cas9 system, which molecule guides Cas9 to the target DNA sequence?',
           'choices'      => json_encode([
               'crRNA',
               'tracrRNA',
               'single guide RNA (sgRNA)',
               'Cas9 mRNA',
           ]),
           'answer'       => 'single guide RNA (sgRNA)',
           'explanation'  => "The engineered sgRNA combines crRNA and tracrRNA functions to direct Cas9 to specific DNA sites.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 182
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Which enzyme is most commonly used for DNA strand extension during PCR?',
           'choices'      => json_encode([
               'DNA ligase',
               'Taq DNA polymerase',
               'RNA polymerase',
               'Reverse transcriptase',
           ]),
           'answer'       => 'Taq DNA polymerase',
           'explanation'  => "Taq polymerase is heat-stable and synthesizes new DNA strands at high denaturation temperatures.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 183
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'The proteasome degrades proteins tagged with which small protein?',
           'choices'      => json_encode([
               'SUMO',
               'Ubiquitin',
               'Phosphate',
               'Acetyl group',
           ]),
           'answer'       => 'Ubiquitin',
           'explanation'  => "Ubiquitin tags damaged or misfolded proteins for degradation by the proteasome.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 184
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'In an energy pyramid, approximately what percentage of energy is transferred from one trophic level to the next?',
           'choices'      => json_encode([
               '1%',
               '10%',
               '50%',
               '90%',
           ]),
           'answer'       => '10%',
           'explanation'  => "On average, only about 10% of energy is passed to the next trophic level.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 185
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Heterozygotes for the sickle cell allele have increased resistance to which disease?',
           'choices'      => json_encode([
               'Tuberculosis',
               'Malaria',
               'Cholera',
               'Influenza',
           ]),
           'answer'       => 'Malaria',
           'explanation'  => "Carriers of the sickle cell trait are less susceptible to severe malaria infection.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 186
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'MHC class I molecules present antigenic peptides to which T cell subset?',
           'choices'      => json_encode([
               'CD4+ T cells',
               'CD8+ T cells',
               'B cells',
               'Natural killer cells',
           ]),
           'answer'       => 'CD8+ T cells',
           'explanation'  => "MHC I complexes display endogenous peptides to cytotoxic CD8+ T lymphocytes.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 187
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Phototropism in plants is mediated by which blue-light photoreceptor?',
           'choices'      => json_encode([
               'Phytochrome',
               'Cryptochrome',
               'Phototropin',
               'UVR8',
           ]),
           'answer'       => 'Phototropin',
           'explanation'  => "Phototropins sense blue light and direct plant growth toward light sources.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 188
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Which epithelial tissue type lines the alveoli and facilitates gas exchange?',
           'choices'      => json_encode([
               'Simple squamous epithelium',
               'Stratified squamous epithelium',
               'Pseudostratified columnar epithelium',
               'Simple cuboidal epithelium',
           ]),
           'answer'       => 'Simple squamous epithelium',
           'explanation'  => "Thin, single-layered squamous cells allow efficient diffusion of gases.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 189
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'In the peripheral nervous system, which glial cells form myelin sheaths?',
           'choices'      => json_encode([
               'Oligodendrocytes',
               'Schwann cells',
               'Astrocytes',
               'Microglia',
           ]),
           'answer'       => 'Schwann cells',
           'explanation'  => "Schwann cells wrap around axons in the PNS to provide myelination.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 190
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'During embryonic development, a hollow ball of cells formed after cleavage is called the:',
           'choices'      => json_encode([
               'Morula',
               'Blastula',
               'Gastrula',
               'Neurula',
           ]),
           'answer'       => 'Blastula',
           'explanation'  => "The blastula consists of blastomeres surrounding a fluid-filled blastocoel.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 191
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Bacterial transformation involves uptake of what from the environment?',
           'choices'      => json_encode([
               'Proteins',
               'Lipids',
               'DNA',
               'RNA',
           ]),
           'answer'       => 'DNA',
           'explanation'  => "Transformation is the uptake and incorporation of free DNA by bacteria.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 192
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'The Michaelis constant (Km) represents the substrate concentration at which reaction rate is:',
           'choices'      => json_encode([
               'Equal to Vmax',
               'Half of Vmax',
               'Double Vmax',
               'Zero',
           ]),
           'answer'       => 'Half of Vmax',
           'explanation'  => "Km is the substrate concentration where the enzyme operates at half its maximum velocity.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 193
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'The Bohr effect describes hemoglobin behavior under conditions of:',
           'choices'      => json_encode([
               'High pH and low CO2',
               'Low pH and high CO2',
               'Low pH and low CO2',
               'High pH and high CO2',
           ]),
           'answer'       => 'Low pH and high CO2',
           'explanation'  => "In acidic, CO2-rich tissues, hemoglobin releases oxygen more readily.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 194
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'A keystone species is one that:',
           'choices'      => json_encode([
               'Has the greatest biomass',
               'Is most abundant',
               'Disproportionately influences its ecosystem',
               'Is at the top of the food chain',
           ]),
           'answer'       => 'Disproportionately influences its ecosystem',
           'explanation'  => "Keystone species maintain ecosystem structure despite their relatively low abundance.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 195
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Epistasis refers to the phenomenon where:',
           'choices'      => json_encode([
               'Multiple genes affect one trait',
               'One gene masks the effect of another',
               'Environment alters gene expression',
               'Genes assort independently',
           ]),
           'answer'       => 'One gene masks the effect of another',
           'explanation'  => "In epistasis, the phenotypic expression of one locus depends on another locus.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 196
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Gap junction channels are formed by proteins known as:',
           'choices'      => json_encode([
               'Claudins',
               'Connexins',
               'Cadherins',
               'Integrins',
           ]),
           'answer'       => 'Connexins',
           'explanation'  => "Connexins assemble into connexons to enable direct cytoplasmic exchange between cells.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 197
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'The absolute refractory period ensures:',
           'choices'      => json_encode([
               'Action potentials can summate',
               'Unidirectional propagation of impulses',
               'Increased action potential amplitude',
               'Longer duration of action potentials',
           ]),
           'answer'       => 'Unidirectional propagation of impulses',
           'explanation'  => "During the absolute refractory period, a neuron cannot fire again, preventing reverse impulse spread.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 198
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Double fertilization in angiosperms results in the formation of:',
           'choices'      => json_encode([
               'Zygote and endosperm',
               'Embryo and seed coat',
               'Pollen tube and zygote',
               'Endosperm and seed coat',
           ]),
           'answer'       => 'Zygote and endosperm',
           'explanation'  => "One sperm fertilizes the egg, forming the zygote, and the other fuses with polar nuclei to form endosperm.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 199
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Western blotting is used to detect:',
           'choices'      => json_encode([
               'DNA fragments',
               'RNA transcripts',
               'Proteins',
               'Lipids',
           ]),
           'answer'       => 'Proteins',
           'explanation'  => "Proteins separated by gel electrophoresis are transferred to a membrane and probed with antibodies.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 200
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 10,
           'question'     => 'Southern blotting is a technique used to detect:',
           'choices'      => json_encode([
               'DNA',
               'RNA',
               'Proteins',
               'Carbohydrates',
           ]),
           'answer'       => 'DNA',
           'explanation'  => "After gel separation, DNA fragments are transferred to a membrane and hybridized with labeled probes.",
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

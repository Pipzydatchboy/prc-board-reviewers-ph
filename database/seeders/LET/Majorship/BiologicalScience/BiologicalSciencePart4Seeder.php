<?php

namespace Database\Seeders\LET\Majorship\BiologicalScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BiologicalSciencePart4Seeder extends Seeder
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

       // Part 4 – Question 61
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which cell junction forms an impermeable barrier between epithelial cells?',
           'choices'      => json_encode([
               'Desmosomes',
               'Gap junctions',
               'Tight junctions',
               'Hemidesmosomes',
           ]),
           'answer'       => 'Tight junctions',
           'explanation'  => "Tight junctions seal adjacent epithelial cells to prevent passage of molecules.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 62
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which organelle contains the enzyme catalase and oxidizes fatty acids?',
           'choices'      => json_encode([
               'Lysosome',
               'Peroxisome',
               'Mitochondrion',
               'Golgi apparatus',
           ]),
           'answer'       => 'Peroxisome',
           'explanation'  => "Peroxisomes contain catalase and are involved in β-oxidation of fatty acids.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 63
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'What is the end product of lactic acid fermentation in human muscle cells?',
           'choices'      => json_encode([
               'Ethanol',
               'Lactate',
               'Acetate',
               'Pyruvate',
           ]),
           'answer'       => 'Lactate',
           'explanation'  => "Lactic acid fermentation converts pyruvate into lactate to regenerate NAD+.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 64
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which cells in the pancreas secrete insulin?',
           'choices'      => json_encode([
               'Alpha cells',
               'Beta cells',
               'Delta cells',
               'PP cells',
           ]),
           'answer'       => 'Beta cells',
           'explanation'  => "Pancreatic beta cells produce and release insulin in response to high blood glucose.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 65
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'What is the functional unit of the kidney where blood filtration occurs?',
           'choices'      => json_encode([
               'Nephron',
               'Glomerulus',
               'Collecting duct',
               'Bowman’s capsule',
           ]),
           'answer'       => 'Nephron',
           'explanation'  => "The nephron, including Bowman's capsule and renal tubules, is the kidney's functional unit.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 66
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which part of the small intestine is primarily responsible for absorption of vitamin B12?',
           'choices'      => json_encode([
               'Duodenum',
               'Jejunum',
               'Ileum',
               'Colon',
           ]),
           'answer'       => 'Ileum',
           'explanation'  => "The ileum absorbs vitamin B12 and bile salts.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 67
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which immune cell produces histamine during allergic responses?',
           'choices'      => json_encode([
               'Mast cells',
               'Neutrophils',
               'Eosinophils',
               'Macrophages',
           ]),
           'answer'       => 'Mast cells',
           'explanation'  => "Mast cells release histamine to increase vascular permeability in allergies.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 68
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which glial cell in the central nervous system produces myelin?',
           'choices'      => json_encode([
               'Schwann cells',
               'Oligodendrocytes',
               'Astrocytes',
               'Microglia',
           ]),
           'answer'       => 'Oligodendrocytes',
           'explanation'  => "Oligodendrocytes myelinate CNS axons; Schwann cells do so in the PNS.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 69
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'What does the term pleiotropy describe in genetics?',
           'choices'      => json_encode([
               'Multiple genes affecting one trait',
               'One gene affecting multiple traits',
               'Independent assortment',
               'Gene linkage',
           ]),
           'answer'       => 'One gene affecting multiple traits',
           'explanation'  => "Pleiotropy occurs when a single gene influences multiple phenotypic traits.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 70
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which example illustrates codominance?',
           'choices'      => json_encode([
               'Blood type AB',
               'Blood type O',
               'Blood type A',
               'Blood type B',
           ]),
           'answer'       => 'Blood type AB',
           'explanation'  => "In AB blood, both A and B alleles are fully expressed (codominance).",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 71
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which reproductive strategy is characteristic of r-selected species?',
           'choices'      => json_encode([
               'Few offspring, high parental care',
               'Many offspring, low parental care',
               'Internal fertilization',
               'Viviparity',
           ]),
           'answer'       => 'Many offspring, low parental care',
           'explanation'  => "r-selected species produce many offspring with minimal parental investment.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 72
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which enzyme catalyzes the first step of carbon fixation in the Calvin cycle?',
           'choices'      => json_encode([
               'RuBisCO',
               'ATP synthase',
               'Hexokinase',
               'PEP carboxylase',
           ]),
           'answer'       => 'RuBisCO',
           'explanation'  => "Ribulose-1,5-bisphosphate carboxylase/oxygenase (RuBisCO) catalyzes CO₂ fixation.",
           'created_at'    => $now,
           'updated_at'    => $now,
       ];

       // Part 4 – Question 73
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'What brain region functions as the primary circadian pacemaker?',
           'choices'      => json_encode([
               'Thalamus',
               'Suprachiasmatic nucleus',
               'Hypothalamus',
               'Pineal gland',
           ]),
           'answer'       => 'Suprachiasmatic nucleus',
           'explanation'  => "The SCN in the hypothalamus regulates circadian rhythms.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 74
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which receptor family recognizes pathogen-associated molecular patterns in innate immunity?',
           'choices'      => json_encode([
               'Cytokine receptors',
               'Toll-like receptors',
               'G protein–coupled receptors',
               'Tyrosine kinase receptors',
           ]),
           'answer'       => 'Toll-like receptors',
           'explanation'  => "TLRs detect microbial molecules and activate innate immune responses.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 75
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which antibiotic inhibits bacterial DNA gyrase?',
           'choices'      => json_encode([
               'Penicillin',
               'Tetracycline',
               'Ciprofloxacin',
               'Streptomycin',
           ]),
           'answer'       => 'Ciprofloxacin',
           'explanation'  => "Ciprofloxacin is a fluoroquinolone that inhibits DNA gyrase and topoisomerase IV.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 76
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which vacuole type is responsible for turgor pressure in plant cells?',
           'choices'      => json_encode([
               'Contractile vacuole',
               'Food vacuole',
               'Central vacuole',
               'Lysosomal vacuole',
           ]),
           'answer'       => 'Central vacuole',
           'explanation'  => "The central vacuole stores water and solutes, maintaining cell turgor.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 77
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which transcription factor is activated by stress and inflammatory signals?',
           'choices'      => json_encode([
               'NF-κB',
               'p53',
               'Oct4',
               'CREB',
           ]),
           'answer'       => 'NF-κB',
           'explanation'  => "NF-κB is a key regulator of genes involved in immune and stress responses.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 78
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which root system is typical of monocots?',
           'choices'      => json_encode([
               'Taproot system',
               'Fibrous root system',
               'Adventitious roots',
               'Prop roots',
           ]),
           'answer'       => 'Fibrous root system',
           'explanation'  => "Monocots have a fibrous root system without a main taproot.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 79
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Chemoautotrophs obtain energy from which source?',
           'choices'      => json_encode([
               'Sunlight',
               'Organic compounds',
               'Inorganic chemicals',
               'Heat',
           ]),
           'answer'       => 'Inorganic chemicals',
           'explanation'  => "Chemoautotrophs oxidize inorganic substances like H₂S or Fe²⁺ for energy.",
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 80
       $batch[] = [
           'subject_id'   => 20,
           'part'         => 4,
           'question'     => 'Which force drives the ascent of xylem sap in plants?',
           'choices'      => json_encode([
               'Root pressure',
               'Transpiration pull',
               'Capillary action',
               'Cohesion-tension',
           ]),
           'answer'       => 'Cohesion-tension',
           'explanation'  => "The cohesion-tension mechanism combines water cohesion and transpiration pull to transport xylem sap.",
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

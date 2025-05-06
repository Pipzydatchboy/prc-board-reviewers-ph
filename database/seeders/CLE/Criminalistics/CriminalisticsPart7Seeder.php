<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart7Seeder extends Seeder
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

// 1
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which instrument is most commonly used to measure blood alcohol concentration in forensic laboratories?',
  'choices'     => json_encode([
    'Gas Chromatograph',
    'Mass Spectrometer',
    'UV-Vis Spectrophotometer',
    'Infrared Spectrometer',
  ]),
  'answer'      => 'Gas Chromatograph',
  'explanation' => 'Gas chromatography is the gold standard for precise quantification of ethanol in blood samples.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'The Widmark equation is used to estimate which of the following?',
  'choices'     => json_encode([
    'Blood alcohol concentration',
    'Drug half‑life',
    'Toxicant lethal dose',
    'Organophosphate dose',
  ]),
  'answer'      => 'Blood alcohol concentration',
  'explanation' => 'The Widmark formula relates the amount of ethanol consumed to the resulting BAC in the body.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which of the following is a Phase I metabolic reaction for xenobiotics?',
  'choices'     => json_encode([
    'Oxidation',
    'Glucuronidation',
    'Acetylation',
    'Methylation',
  ]),
  'answer'      => 'Oxidation',
  'explanation' => 'Phase I reactions introduce or expose functional groups (e.g., via oxidation) to increase polarity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which Phase II metabolic process involves conjugating a xenobiotic with glucuronic acid?',
  'choices'     => json_encode([
    'Glucuronidation',
    'Oxidation',
    'Reduction',
    'Hydrolysis',
  ]),
  'answer'      => 'Glucuronidation',
  'explanation' => 'Glucuronidation is a common Phase II pathway that makes compounds more water‑soluble for excretion.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Immunoassay drug screening relies on which fundamental principle?',
  'choices'     => json_encode([
    'Antigen–antibody binding',
    'Gas–liquid partition',
    'Liquid–liquid extraction',
    'Mass fragmentation',
  ]),
  'answer'      => 'Antigen–antibody binding',
  'explanation' => 'Immunoassays use antibodies specific to target drugs or metabolites to detect their presence.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'What color change does the Marquis reagent produce in presence of opiates?',
  'choices'     => json_encode([
    'Purple',
    'Orange',
    'Green',
    'Blue',
  ]),
  'answer'      => 'Purple',
  'explanation' => 'The Marquis test turns purple in the presence of opiates like morphine and codeine.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which classical test is used for detection of arsenic in biological samples?',
  'choices'     => json_encode([
    'Marsh Test',
    'Reinsch Test',
    'Simon Test',
    'Fehling’s Test',
  ]),
  'answer'      => 'Marsh Test',
  'explanation' => 'The Marsh test generates a garlic‑smelling arsine gas that confirms arsenic presence.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which technique is best for quantifying trace metals in blood samples?',
  'choices'     => json_encode([
    'Atomic Absorption Spectroscopy',
    'Gas Chromatography',
    'High‑Performance Liquid Chromatography',
    'Thin‑Layer Chromatography',
  ]),
  'answer'      => 'Atomic Absorption Spectroscopy',
  'explanation' => 'AAS is highly sensitive for detecting and quantifying metals at trace levels.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'LD₅₀ refers to the dose that is lethal to what percentage of a test population?',
  'choices'     => json_encode([
    '50%',
    '5%',
    '95%',
    '25%',
  ]),
  'answer'      => '50%',
  'explanation' => 'LD₅₀ is defined as the dose required to kill 50% of a test group under specified conditions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Carbon monoxide poisoning is confirmed by measuring levels of which hemoglobin derivative?',
  'choices'     => json_encode([
    'Carboxyhemoglobin',
    'Methemoglobin',
    'Oxyhemoglobin',
    'Deoxyhemoglobin',
  ]),
  'answer'      => 'Carboxyhemoglobin',
  'explanation' => 'CO binds hemoglobin to form carboxyhemoglobin, which impairs oxygen transport.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which metabolite is most often measured to confirm cyanide exposure?',
  'choices'     => json_encode([
    'Thiocyanate',
    'Cyanate',
    'Formate',
    'Oxalate',
  ]),
  'answer'      => 'Thiocyanate',
  'explanation' => 'Thiocyanate is a primary stable metabolite of cyanide detoxification.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which extraction technique uses pH adjustment to separate analytes from biological matrices?',
  'choices'     => json_encode([
    'Liquid–Liquid Extraction',
    'Solid‑Phase Extraction',
    'Supercritical Fluid Extraction',
    'Microwave Extraction',
  ]),
  'answer'      => 'Liquid–Liquid Extraction',
  'explanation' => 'LLE employs partitioning between aqueous and organic solvents after pH changes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which organ is the primary site of first‑pass metabolism for many drugs?',
  'choices'     => json_encode([
    'Liver',
    'Kidney',
    'Lung',
    'Heart',
  ]),
  'answer'      => 'Liver',
  'explanation' => 'The liver contains enzymes (e.g., CYP450) that metabolize drugs before systemic distribution.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'What is the typical blood–to–breath partition ratio of ethanol used in breath‑testing devices?',
  'choices'     => json_encode([
    '2100 : 1',
    '1000 : 1',
    '500 : 1',
    '3400 : 1',
  ]),
  'answer'      => '2100 : 1',
  'explanation' => 'A 2100:1 ratio means 2100 mL of blood has the same alcohol content as 1 mL of breath.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'The term "therapeutic level" refers to drug concentration in plasma that is:',
  'choices'     => json_encode([
    'Effective without toxicity',
    'Potentially lethal',
    'Below detection limits',
    'Causing adverse reactions',
  ]),
  'answer'      => 'Effective without toxicity',
  'explanation' => 'Therapeutic range is the plasma concentration where a drug is effective yet safe.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Drug half‑life (t₁/₂) is defined as the time needed for its plasma concentration to:',
  'choices'     => json_encode([
    'Decrease by 50%',
    'Increase by 50%',
    'Reach peak level',
    'Be fully eliminated',
  ]),
  'answer'      => 'Decrease by 50%',
  'explanation' => 'Half‑life is the period for the drug’s concentration to fall to half its initial value.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which antidote is indicated for organophosphate pesticide poisoning?',
  'choices'     => json_encode([
    'Atropine',
    'Naloxone',
    'N-acetylcysteine',
    'Flumazenil',
  ]),
  'answer'      => 'Atropine',
  'explanation' => 'Atropine blocks muscarinic effects of accumulated acetylcholine in organophosphate toxicity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which term describes the phenomenon where postmortem drug levels in central blood differ from antemortem levels?',
  'choices'     => json_encode([
    'Postmortem redistribution',
    'First-pass effect',
    'Bioaccumulation',
    'Pharmacodynamic tolerance',
  ]),
  'answer'      => 'Postmortem redistribution',
  'explanation' => 'After death, drugs can move between tissues and blood, altering measured concentrations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Which technique separates drugs and metabolites by exploiting differences in volatility?',
  'choices'     => json_encode([
    'Gas Chromatography',
    'Liquid Chromatography',
    'Capillary Electrophoresis',
    'Micellar Electrokinetic Chromatography',
  ]),
  'answer'      => 'Gas Chromatography',
  'explanation' => 'GC separates compounds based on volatility and interaction with the stationary phase.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 24,
  'part'        => 7,
  'question'    => 'Thin-layer chromatography in toxicology is primarily used for:',
  'choices'     => json_encode([
    'Preliminary drug screening',
    'Quantitative analysis',
    'Heavy metal detection',
    'DNA profiling',
  ]),
  'answer'      => 'Preliminary drug screening',
  'explanation' => 'TLC provides a quick, visual check for the presence of certain drugs or metabolites.',
  'created_at'  => $now,
  'updated_at'  => $now,
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

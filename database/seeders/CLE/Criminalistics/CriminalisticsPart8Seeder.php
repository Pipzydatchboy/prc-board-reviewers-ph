<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart8Seeder extends Seeder
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
  'part'        => 8,
  'question'    => 'Which reagent is used in the Kastle–Meyer test to presumptively detect blood?',
  'choices'     => json_encode([
    'Phenolphthalein',
    'Benzidine',
    'Luminol',
    'Tetrahydrofuran',
  ]),
  'answer'      => 'Phenolphthalein',
  'explanation' => 'Kastle–Meyer employs phenolphthalein, which turns pink in the presence of hemoglobin peroxidase activity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'What does PCR stand for in DNA analysis?',
  'choices'     => json_encode([
    'Polymerase Chain Reaction',
    'Protein Capture Reagent',
    'Peptide Cleavage Reaction',
    'Phase Contrast Radiography',
  ]),
  'answer'      => 'Polymerase Chain Reaction',
  'explanation' => 'PCR amplifies minute amounts of DNA by repeated thermal cycling and enzyme‑mediated replication.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which fingerprint pattern has ridges that enter from one side, recurve, and exit on the same side?',
  'choices'     => json_encode([
    'Loop',
    'Whorl',
    'Arch',
    'Composite',
  ]),
  'answer'      => 'Loop',
  'explanation' => 'Loop patterns recur on themselves and exit on the same side they enter.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which chemical is commonly used to develop latent fingerprints on porous surfaces?',
  'choices'     => json_encode([
    'Ninhydrin',
    'Cyanoacrylate',
    'Silver nitrate',
    'Gentian violet',
  ]),
  'answer'      => 'Ninhydrin',
  'explanation' => 'Ninhydrin reacts with amino acids in sweat to produce a purple coloration on paper and other porous materials.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which instrument is essential for comparing two bullets side‑by‑side?',
  'choices'     => json_encode([
    'Comparison Microscope',
    'Stereomicroscope',
    'Polarizing Microscope',
    'Electron Microscope',
  ]),
  'answer'      => 'Comparison Microscope',
  'explanation' => 'A comparison microscope allows simultaneous viewing of two samples, ideal for matching ballistic striations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Bloodstain pattern analysis focuses on determining which of the following?',
  'choices'     => json_encode([
    'Area of origin',
    'Blood type',
    'DNA profile',
    'Hemoglobin structure',
  ]),
  'answer'      => 'Area of origin',
  'explanation' => 'By tracing trajectories of stains, analysts approximate the three‑dimensional point from which blood originated.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Trace evidence analysis typically includes examination of:',
  'choices'     => json_encode([
    'Hair and fibers',
    'Ballistic trajectories',
    'Blood chemistry',
    'Digital encryption',
  ]),
  'answer'      => 'Hair and fibers',
  'explanation' => 'Trace analysis covers microscopic materials transferred during a crime, such as hairs, fibers, and paint chips.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which chromatography technique is often used to separate ink components?',
  'choices'     => json_encode([
    'Thin‑Layer Chromatography',
    'Gas Chromatography',
    'Ion‑Exchange Chromatography',
    'Size‑Exclusion Chromatography',
  ]),
  'answer'      => 'Thin‑Layer Chromatography',
  'explanation' => 'TLC separates compounds based on polarity and capillary action on a coated plate, useful for ink dyes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which device is used to reveal indented writing on questioned documents?',
  'choices'     => json_encode([
    'Electrostatic Detection Apparatus',
    'Video Spectral Comparator',
    'Forensic Light Source',
    'Microspectrophotometer',
  ]),
  'answer'      => 'Electrostatic Detection Apparatus',
  'explanation' => 'ESDA uses electrostatic charge to lift indentations onto a thin film for visualization and photography.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'What does AFIS stand for?',
  'choices'     => json_encode([
    'Automated Fingerprint Identification System',
    'Analytical Forensic Imaging Scanner',
    'Advanced Forensic Indexing Software',
    'Automated Forensic Investigation Suite',
  ]),
  'answer'      => 'Automated Fingerprint Identification System',
  'explanation' => 'AFIS electronically stores, compares, and matches fingerprint data from crime scenes and databases.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which stain is used for presumptive identification of spermatozoa?',
  'choices'     => json_encode([
    'Acid Phosphatase Test',
    'Wright’s Stain',
    'Gram Stain',
    'Ziehl–Neelsen Stain',
  ]),
  'answer'      => 'Acid Phosphatase Test',
  'explanation' => 'Acid phosphatase produced by sperm turns purple when acted upon by a specific reagent.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which powder technique uses magnetic powder for latent fingerprints?',
  'choices'     => json_encode([
    'Iron Oxide Powder',
    'Aluminum Powder',
    'Graphite Powder',
    'Fluorescent Powder',
  ]),
  'answer'      => 'Iron Oxide Powder',
  'explanation' => 'Magnetic iron oxide powder is lifted with a magnet, reducing surface damage and background staining.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'What material is commonly used to cast three‑dimensional footwear impressions?',
  'choices'     => json_encode([
    'Dental Stone',
    'Plaster of Paris',
    'Silicone Rubber',
    'Alginate',
  ]),
  'answer'      => 'Dental Stone',
  'explanation' => 'Dental stone produces durable casts with fine detail reproduction of shoe tread patterns.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'A fingerprint ridge that ends abruptly is called a:',
  'choices'     => json_encode([
    'Ridge Ending',
    'Bifurcation',
    'Island',
    'Delta',
  ]),
  'answer'      => 'Ridge Ending',
  'explanation' => 'Ridge endings are basic minutiae points where a ridge ceases without joining another ridge.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which chemical spray is used to visualize old or cleaned bloodstains by chemiluminescence?',
  'choices'     => json_encode([
    'Luminol',
    'Amido Black',
    'Coomassie Blue',
    'Leuco Crystal Violet',
  ]),
  'answer'      => 'Luminol',
  'explanation' => 'Luminol emits a blue glow when it reacts with hemoglobin in trace amounts of blood.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'What type of fingerprint is formed when a finger coated with a substance touches a surface?',
  'choices'     => json_encode([
    'Patent Print',
    'Latent Print',
    'Plastic Print',
    'Impression Print',
  ]),
  'answer'      => 'Patent Print',
  'explanation' => 'Patent prints are visible deposits of blood, ink, or other materials left on a surface.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which tool is commonly used for creating a forensic image of a computer hard drive?',
  'choices'     => json_encode([
    'FTK Imager',
    'Helix3 Pro',
    'EnCase Portable',
    'Digital Safe',
  ]),
  'answer'      => 'FTK Imager',
  'explanation' => 'FTK Imager produces bit‑for‑bit copies of drives without altering original data for analysis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Microspectrophotometry in fiber analysis is used to determine:',
  'choices'     => json_encode([
    'Dye composition',
    'Fiber diameter',
    'Tensile strength',
    'Melting point',
  ]),
  'answer'      => 'Dye composition',
  'explanation' => 'Microspectrophotometry measures absorbance spectra of individual fibers to identify dye formulation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which method is used to visualize latent prints on non‐porous surfaces with fumes?',
  'choices'     => json_encode([
    'Cyanoacrylate Fuming',
    'Ninhydrin Spraying',
    'Silver Nitrate Dipping',
    'Iodine Fuming',
  ]),
  'answer'      => 'Cyanoacrylate Fuming',
  'explanation' => 'Superglue vapors polymerize on fingerprint residues, creating a white polymer that can be photographed.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 24,
  'part'        => 8,
  'question'    => 'Which comparison technique uses polarized light to examine crystalline drug evidence?',
  'choices'     => json_encode([
    'Polarizing Microscope',
    'Comparison Microscope',
    'Phase Contrast Microscope',
    'Fluorescence Microscope',
  ]),
  'answer'      => 'Polarizing Microscope',
  'explanation' => 'Polarizing microscopy exploits birefringence of crystalline substances to identify materials like drugs.',
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

<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart1Seeder extends Seeder
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

//1
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which foundational principle underlies fingerprint identification by stating that no two individuals have identical ridge patterns?',
    'choices'     => json_encode([
        'Principle of individuality',
        'Principle of ridge flow',
        'Principle of permanence',
        'Principle of class characteristics',
    ]),
    'answer'      => 'Principle of individuality',
    'explanation' => 'The individuality principle asserts that each person’s fingerprints are unique and can distinguish one individual from another.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'In the Henry fingerprint classification system, which pattern type receives the numerical value of 16 in the primary classification?',
    'choices'     => json_encode([
        'Double loop',
        'Plain whorl',
        'Central pocket loop',
        'Accidental whorl',
    ]),
    'answer'      => 'Plain whorl',
    'explanation' => 'Henry’s primary classification assigns value 16 to plain whorls in the numerator calculation of the primary fraction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which step in the ACE–V methodology involves a detailed examination of friction ridge details to establish correspondences?',
    'choices'     => json_encode([
        'Verification',
        'Analysis',
        'Comparison',
        'Evaluation',
    ]),
    'answer'      => 'Comparison',
    'explanation' => 'Comparison is the stage where examiners juxtapose the latent and exemplar prints to identify matching ridge details.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which chemical fuming method is commonly used to visualize latent prints on non-porous surfaces by polymerizing superglue vapors?',
    'choices'     => json_encode([
        'Cyanoacrylate fuming',
        'Iodine fuming',
        'Ninhydrin spray',
        'Silver nitrate solution',
    ]),
    'answer'      => 'Cyanoacrylate fuming',
    'explanation' => 'Cyanoacrylate (superglue) fuming adheres polymerized resin to the ridges, rendering latent prints visible on non-porous items.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which reagent reacts with amino acids in latent prints on porous surfaces, producing a purple color?',
    'choices'     => json_encode([
        'Ninhydrin',
        'Iodine',
        'Silver nitrate',
        'Phloxine B',
    ]),
    'answer'      => 'Ninhydrin',
    'explanation' => 'Ninhydrin chemically binds with amino acids in sweat residue, yielding a visible purple reaction product on paper and other porous media.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which lifting technique uses a gelatin-based material to collect latent prints from textured surfaces?',
    'choices'     => json_encode([
        'Gelatin lifter',
        'Adhesive tape lift',
        'Magnetic powder lift',
        'Photographic lift',
    ]),
    'answer'      => 'Gelatin lifter',
    'explanation' => 'Gelatin lifters conform to textured surfaces and capture latent prints in a gelatin matrix for preservation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'In dactyloscopy, what is the significance of Level 3 details?',
    'choices'     => json_encode([
        'Ridge edge shapes and pore structure',
        'Overall ridge flow',
        'Pattern type classification',
        'Minutiae count only',
    ]),
    'answer'      => 'Ridge edge shapes and pore structure',
    'explanation' => 'Level 3 detail describes micro-features such as ridge shapes and pores, critical for individualization.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which alternative light source wavelength is optimal for visualizing blood prints treated with amido black?',
    'choices'     => json_encode([
        'Infrared',
        'Ultraviolet',
        'Blue-green',
        'Yellow',
    ]),
    'answer'      => 'Infrared',
    'explanation' => 'Infrared light enhances contrast of amido black-treated blood prints against red backgrounds.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which process captures a digital exemplar print using an electronic scanner instead of ink and paper?',
    'choices'     => json_encode([
        'Live scan',
        'Ink & roll',
        'Photographic capture',
        'Video imaging',
    ]),
    'answer'      => 'Live scan',
    'explanation' => 'Live scan devices electronically record friction ridge detail without the need for traditional ink impressions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which forensic odontological method compares ante‑ and post‑mortem dental radiographs for human identification?',
    'choices'     => json_encode([
        'Radiographic overlay analysis',
        'Palatal rugae mapping',
        'Bite mark overlay',
        'Tooth enamel thickness profiling',
    ]),
    'answer'      => 'Radiographic overlay analysis',
    'explanation' => 'Overlaying ante‑mortem and post‑mortem X-rays allows matching of dental restorations and structures.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'What type of minutiae refers to where a single ridge bifurcates into two ridges?',
    'choices'     => json_encode([
        'Bifurcation',
        'Ridge ending',
        'Island',
        'Lake',
    ]),
    'answer'      => 'Bifurcation',
    'explanation' => 'A bifurcation is a point where one ridge splits into two, a key minutiae feature.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which chemical enhancement technique is best for visualizing latent prints on wet porous surfaces?',
    'choices'     => json_encode([
        'Physical developer',
        'Iodine fuming',
        'Cyanoacrylate fuming',
        'Powder dusting',
    ]),
    'answer'      => 'Physical developer',
    'explanation' => 'Physical developer uses silver-based reagents to develop prints on wet porous surfaces.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'In ACE–V, during which phase does the examiner decide whether the prints are from the same source?',
    'choices'     => json_encode([
        'Evaluation',
        'Analysis',
        'Comparison',
        'Verification',
    ]),
    'answer'      => 'Evaluation',
    'explanation' => 'Evaluation is where the examiner concludes identification, exclusion, or inconclusive based on comparison results.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which substance is used to dust latent prints on oily non-porous surfaces and adheres magnetically?',
    'choices'     => json_encode([
        'Magnetic powder',
        'Aluminum powder',
        'Fluorescent powder',
        'Carbon black powder',
    ]),
    'answer'      => 'Magnetic powder',
    'explanation' => 'Magnetic powders are applied with a magnetic applicator and cause less damage to the print.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which photographic technique uses oblique lighting to enhance surface detail of friction ridge impressions?',
    'choices'     => json_encode([
        'Raking light photography',
        'Overhead flash photography',
        'UV fluorescence photography',
        'Infrared photography',
    ]),
    'answer'      => 'Raking light photography',
    'explanation' => 'Raking light casts shadows across surface ridges, highlighting three-dimensional features.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which preservation method involves photographing latent prints before any chemical treatment?',
    'choices'     => json_encode([
        'Pre-treatment documentation',
        'Post-treatment imaging',
        'Tape lift',
        'Gel lifter',
    ]),
    'answer'      => 'Pre-treatment documentation',
    'explanation' => 'Capturing prints before treatment ensures documentation of their original condition.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which ridge characteristic describes a short ridge segment not connected to other ridges?',
    'choices'     => json_encode([
        'Ridge island',
        'Bifurcation',
        'Ending ridge',
        'Dot minutiae',
    ]),
    'answer'      => 'Ridge island',
    'explanation' => 'A ridge island (or dot) is a small isolated ridge, useful for detailed comparisons.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which method employs ninhydrin and then physical developer sequentially on porous items?',
    'choices'     => json_encode([
        'Sequential chemical enhancement',
        'Dual powder application',
        'Infrared chemical fuming',
        'UV-visible microscopy',
    ]),
    'answer'      => 'Sequential chemical enhancement',
    'explanation' => 'Applying ninhydrin followed by physical developer enhances prints with amino acids and lipids sequentially.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which anatomical feature is primarily examined in forensic odontology to establish age estimation?',
    'choices'     => json_encode([
        'Dental eruption patterns',
        'Nasolabial folds',
        'Ear cartilage ossification',
        'Epiphyseal fusion',
    ]),
    'answer'      => 'Dental eruption patterns',
    'explanation' => 'Patterns of tooth eruption and development correlate with age, useful for estimating an individual’s age.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 24,
    'part'        => 1,
    'question'    => 'Which term describes the lines connecting corresponding minutiae points during fingerprint comparison?',
    'choices'     => json_encode([
        'Linkage lines',
        'Comparison grids',
        'Ridge flow maps',
        'Overlay traces',
    ]),
    'answer'      => 'Linkage lines',
    'explanation' => 'Linkage lines graphically depict correspondences between matched minutiae in two prints.',
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

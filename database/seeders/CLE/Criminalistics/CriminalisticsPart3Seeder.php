<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart3Seeder extends Seeder
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
    'part'        => 3,
    'question'    => 'Which type of forensic test provides an initial indication of the presence of a substance before definitive analysis?',
    'choices'     => json_encode([
        'Presumptive test',
        'Confirmatory test',
        'Quantitative test',
        'Qualitative test',
    ]),
    'answer'      => 'Presumptive test',
    'explanation' => 'Presumptive tests quickly indicate possible presence, requiring confirmatory analysis for specificity.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which reagent is used in the Kastle–Meyer test to detect blood at a crime scene?',
    'choices'     => json_encode([
        'Phenolphthalein',
        'Ninhydrin',
        'Leuco crystal violet',
        'Iodine fuming',
    ]),
    'answer'      => 'Phenolphthalein',
    'explanation' => 'Phenolphthalein reacts with hemoglobin to produce a pink color in the Kastle–Meyer blood test.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which presumptive test for blood produces chemiluminescence under dark conditions?',
    'choices'     => json_encode([
        'Luminol test',
        'Leuco crystal violet',
        'Cobalt thiocyanate',
        'Scott test',
    ]),
    'answer'      => 'Luminol test',
    'explanation' => 'Luminol reacts with iron in hemoglobin, emitting a blue glow visible in darkened environments.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which confirmatory technique separates and identifies volatile compounds based on mass-to-charge ratios?',
    'choices'     => json_encode([
        'Gas chromatography–mass spectrometry (GC–MS)',
        'Infrared spectroscopy',
        'Ultraviolet–visible spectroscopy',
        'Thin-layer chromatography',
    ]),
    'answer'      => 'Gas chromatography–mass spectrometry (GC–MS)',
    'explanation' => 'GC–MS combines separation and mass analysis to unequivocally identify volatile and semi-volatile substances.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which color test is commonly used as a presumptive screen for cocaine at a crime scene?',
    'choices'     => json_encode([
        'Scott test',
        'Marquis test',
        'Duquenois–Levine test',
        'Zimmermann test',
    ]),
    'answer'      => 'Scott test',
    'explanation' => 'The Scott test yields a blue color with cocaine, indicating its possible presence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which reagent is used in the Duquenois–Levine test to presumptively identify cannabinoids?',
    'choices'     => json_encode([
        'Duquenois reagent and chloroform',
        'Marquis reagent',
        'Nitric acid',
        'Potassium permanganate',
    ]),
    'answer'      => 'Duquenois reagent and chloroform',
    'explanation' => 'Duquenois–Levine uses vanillin and acetaldehyde then chloroform extraction to produce purple color for cannabinoids.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which technique quantifies ethanol in blood samples by separating compounds based on boiling point differences?',
    'choices'     => json_encode([
        'Gas chromatography',
        'Colorimetric assay',
        'Enzyme immunoassay',
        'Liquid chromatography',
    ]),
    'answer'      => 'Gas chromatography',
    'explanation' => 'Gas chromatography accurately quantifies blood alcohol concentration by separating volatile components.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which headspace sampling method is used to analyze volatile organic compounds in a sealed vial?',
    'choices'     => json_encode([
        'Headspace gas sampling',
        'Solid-phase extraction',
        'Liquid–liquid extraction',
        'Solid-phase microextraction (SPME)',
    ]),
    'answer'      => 'Solid-phase microextraction (SPME)',
    'explanation' => 'SPME fibers concentrate volatiles from the headspace for subsequent GC analysis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which toxicological parameter denotes the lowest concentration of analyte that can be reliably measured?',
    'choices'     => json_encode([
        'Limit of quantitation (LOQ)',
        'Limit of detection (LOD)',
        'Calibration range',
        'Dynamic range',
    ]),
    'answer'      => 'Limit of quantitation (LOQ)',
    'explanation' => 'LOQ is the lowest concentration that can be quantified with acceptable precision and accuracy.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which sample preservation method is recommended for post-mortem toxicology to prevent degradation?',
    'choices'     => json_encode([
        'Refrigeration at 4°C with preservatives',
        'Freezing at -20°C without additives',
        'Room temperature storage',
        'Heated drying',
    ]),
    'answer'      => 'Refrigeration at 4°C with preservatives',
    'explanation' => 'Cold storage with preservatives inhibits enzymatic activity and preserves analytes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which enzyme-based assay is commonly used for rapid ethanol screening in forensic labs?',
    'choices'     => json_encode([
        'Alcohol dehydrogenase assay',
        'Luminol assay',
        'Scott test',
        'Kastle–Meyer test',
    ]),
    'answer'      => 'Alcohol dehydrogenase assay',
    'explanation' => 'Alcohol dehydrogenase catalyzes oxidation of ethanol, measured spectrophotometrically for BAC screening.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which forensic chemistry technique uses light absorption to identify functional groups in organic compounds?',
    'choices'     => json_encode([
        'Infrared spectroscopy (IR)',
        'Ultraviolet–visible spectroscopy (UV–Vis)',
        'Nuclear magnetic resonance (NMR)',
        'Mass spectrometry',
    ]),
    'answer'      => 'Infrared spectroscopy (IR)',
    'explanation' => 'IR spectroscopy detects molecular vibrations, identifying characteristic functional groups.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which type of trace evidence includes hairs, fibers, and paint chips recovered from a crime scene?',
    'choices'     => json_encode([
        'Physical evidence',
        'Biological evidence',
        'Chemical evidence',
        'Trace evidence',
    ]),
    'answer'      => 'Trace evidence',
    'explanation' => 'Trace evidence consists of small transferred materials like hairs and fibers linking people or objects.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which poison is an organophosphate commonly investigated in forensic toxicology due to pesticide exposure?',
    'choices'     => json_encode([
        'Malathion',
        'Arsenic trioxide',
        'Cyanide',
        'Strychnine',
    ]),
    'answer'      => 'Malathion',
    'explanation' => 'Malathion inhibits acetylcholinesterase and is detected in poisoning cases involving organophosphates.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which antidote is administered for organophosphate poisoning to reactivate acetylcholinesterase?',
    'choices'     => json_encode([
        'Atropine and pralidoxime',
        'Naloxone',
        'Deferoxamine',
        'Vitamin K',
    ]),
    'answer'      => 'Atropine and pralidoxime',
    'explanation' => 'Atropine blocks muscarinic effects; pralidoxime regenerates acetylcholinesterase inhibited by organophosphates.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which solvent extraction method separates organic poisons from aqueous samples by selective solubility?',
    'choices'     => json_encode([
        'Liquid–liquid extraction',
        'Solid-phase extraction',
        'Headspace analysis',
        'Distillation',
    ]),
    'answer'      => 'Liquid–liquid extraction',
    'explanation' => 'Liquid–liquid extraction partitions analytes between immiscible solvents based on solubility differences.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which analytical parameter describes the linear relationship between analyte concentration and instrument response?',
    'choices'     => json_encode([
        'Calibration curve',
        'Limit of detection',
        'Dynamic range',
        'Retention time',
    ]),
    'answer'      => 'Calibration curve',
    'explanation' => 'A calibration curve plots known concentrations versus responses to quantify unknown samples.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which temperature-controlled technique preserves enzymatic activity in biological samples for toxicology analysis?',
    'choices'     => json_encode([
        'Freezer storage at -20°C',
        'Room temperature drying',
        'Heating at 60°C',
        'Oven drying',
    ]),
    'answer'      => 'Freezer storage at -20°C',
    'explanation' => 'Storing samples at -20°C slows enzymatic degradation, preserving analyte integrity for analysis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which legal requirement governs chain-of-custody documentation for toxicological specimens?',
    'choices'     => json_encode([
        'Detailed transfer logs with signatures and dates',
        'Verbal handover only',
        'Single signoff at collection',
        'No documentation required',
    ]),
    'answer'      => 'Detailed transfer logs with signatures and dates',
    'explanation' => 'Comprehensive logs ensure traceability and admissibility of toxicology evidence in court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 24,
    'part'        => 3,
    'question'    => 'Which section of a toxicology report summarizes methods, results, and interpretation of findings?',
    'choices'     => json_encode([
        'Summary and conclusions',
        'Introduction',
        'Materials and methods',
        'References',
    ]),
    'answer'      => 'Summary and conclusions',
    'explanation' => 'This section distills analytical procedures, quantitative results, and expert interpretations.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart10Seeder extends Seeder
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
  'part'        => 10,
  'question'    => 'Which method is used to estimate time of death by measuring potassium levels in the vitreous humor?',
  'choices'     => json_encode([
    'Vitreous potassium analysis',
    'Gas chromatography',
    'UV–Vis spectrophotometry',
    'Mass spectrometry',
  ]),
  'answer'      => 'Vitreous potassium analysis',
  'explanation' => 'Postmortem rise of potassium in the eye’s vitreous humor correlates with time since death.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which instrument is commonly used to map crime‑scene evidence positions accurately?',
  'choices'     => json_encode([
    'Total station',
    'Laser ablation system',
    'Electrostatic detection device',
    'Comparison microscope',
  ]),
  'answer'      => 'Total station',
  'explanation' => 'A total station combines electronic distance measurement and angular data to chart precise coordinates.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Chain of custody primarily refers to:',
  'choices'     => json_encode([
    'Documentation of evidence handling',
    'Standard laboratory accreditation',
    'Expert witness qualifications',
    'Autopsy procedural steps',
  ]),
  'answer'      => 'Documentation of evidence handling',
  'explanation' => 'Chain of custody records every transfer of evidence to maintain integrity for court.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Forensic odontology is primarily used to:',
  'choices'     => json_encode([
    'Identify persons by dental records',
    'Analyze blood spatter patterns',
    'Sequence mitochondrial DNA',
    'Measure bone fracture angles',
  ]),
  'answer'      => 'Identify persons by dental records',
  'explanation' => 'Dental restorations and tooth morphology are matched to records for identification.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which accrediting body is known for forensic laboratory accreditation in the United States?',
  'choices'     => json_encode([
    'ASCLD/LAB',
    'ISO 9001',
    'FDA',
    'CDC',
  ]),
  'answer'      => 'ASCLD/LAB',
  'explanation' => 'The American Society of Crime Laboratory Directors/Laboratory Accreditation Board sets forensic lab standards.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which lividity pattern is most characteristic of carbon monoxide poisoning at autopsy?',
  'choices'     => json_encode([
    'Cherry‑red lividity',
    'Greenish‑black lividity',
    'Pale yellow lividity',
    'Deep purple lividity',
  ]),
  'answer'      => 'Cherry‑red lividity',
  'explanation' => 'CO binds hemoglobin to form carboxyhemoglobin, producing bright red discoloration of tissues.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which imaging modality is most sensitive for detecting metallic foreign bodies in tissue?',
  'choices'     => json_encode([
    'X‑ray',
    'MRI',
    'Ultrasound',
    'Thermography',
  ]),
  'answer'      => 'X‑ray',
  'explanation' => 'X‑rays readily visualize radiopaque metals within the body.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'The Locard’s Exchange Principle states that:',
  'choices'     => json_encode([
    'Perpetrators always leave and take evidence',
    'Evidence must be secured by law enforcement',
    'Laboratories must follow ISO standards',
    'Suspects are innocent until proven guilty',
  ]),
  'answer'      => 'Perpetrators always leave and take evidence',
  'explanation' => 'Every contact between two surfaces results in mutual transfer of material.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which preservative is added to blood collection tubes for toxicology analysis?',
  'choices'     => json_encode([
    'Sodium fluoride',
    'EDTA',
    'Heparin',
    'Potassium oxalate',
  ]),
  'answer'      => 'Sodium fluoride',
  'explanation' => 'Sodium fluoride inhibits glycolysis, preserving blood alcohol levels for analysis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'What is the term for postmortem CT scanning in forensic medicine?',
  'choices'     => json_encode([
    'Virtopsy',
    'Neuroimaging',
    'Radiopsy',
    'Sonoautopsy',
  ]),
  'answer'      => 'Virtopsy',
  'explanation' => 'Virtopsy is a noninvasive imaging autopsy using CT (and often MRI) technologies.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which forensic discipline uses human factors and behavior to understand crime scenes?',
  'choices'     => json_encode([
    'Forensic psychology',
    'Forensic entomology',
    'Forensic geology',
    'Forensic linguistics',
  ]),
  'answer'      => 'Forensic psychology',
  'explanation' => 'Forensic psychologists assess behavior, eyewitness memory, and offender profiling.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Quality assurance in a forensic laboratory most directly involves:',
  'choices'     => json_encode([
    'Regular equipment calibration',
    'Evidence packaging',
    'Courtroom testimony',
    'Crime‑scene photography',
  ]),
  'answer'      => 'Regular equipment calibration',
  'explanation' => 'Calibration checks ensure instruments produce accurate, reproducible results.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which light source is commonly used in Alternate Light Source (ALS) examinations?',
  'choices'     => json_encode([
    'Forensic light source with variable wavelength',
    'Standard LED flashlight',
    'Infrared sauna lamp',
    'UV blacklight nail dryer',
  ]),
  'answer'      => 'Forensic light source with variable wavelength',
  'explanation' => 'Variable‑wavelength ALS units can fluoresce different evidence types effectively.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Forensic botany can be used to:',
  'choices'     => json_encode([
    'Estimate postmortem interval using plant growth',
    'Detect gunshot residue',
    'Analyze blood spatter geometry',
    'Sequence human DNA',
  ]),
  'answer'      => 'Estimate postmortem interval using plant growth',
  'explanation' => 'Growth rates of plants and algae on remains can indicate time since deposition.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which device measures sound levels at a crime scene?',
  'choices'     => json_encode([
    'Sound level meter',
    'Seismograph',
    'Photometer',
    'Geiger counter',
  ]),
  'answer'      => 'Sound level meter',
  'explanation' => 'Sound level meters record decibel levels of environmental noise for acoustic analysis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'RFID tags on evidence packaging are used to:',
  'choices'     => json_encode([
    'Track and prevent misplacement of items',
    'Provide GPS location',
    'Encrypt data on the tag',
    'Measure environmental conditions',
  ]),
  'answer'      => 'Track and prevent misplacement of items',
  'explanation' => 'RFID provides rapid, non‑contact inventory checks of evidence storage.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which control sample ensures no false positives in a DNA amplification assay?',
  'choices'     => json_encode([
    'Negative control',
    'Positive control',
    'Internal standard',
    'Extraction blank',
  ]),
  'answer'      => 'Negative control',
  'explanation' => 'A negative control contains no template DNA to confirm reagent purity and no contamination.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Sero‑sanguineous fluid indicates a mixture of:',
  'choices'     => json_encode([
    'Serum and blood',
    'Pus and serum',
    'Blood and urine',
    'Serum and lymph',
  ]),
  'answer'      => 'Serum and blood',
  'explanation' => 'Sero‑sanguineous refers to a fluid combining clear serum with red blood cells.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which epiphyseal fusion center typically closes first in long bones?',
  'choices'     => json_encode([
    'Elbow',
    'Iliac crest',
    'Medial clavicle',
    'Proximal humerus',
  ]),
  'answer'      => 'Elbow',
  'explanation' => 'Elbow (distal humerus) fuses earlier in adolescence compared to other centers.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 24,
  'part'        => 10,
  'question'    => 'Which forensic procedure documents the exact location of evidence in 3D space?',
  'choices'     => json_encode([
    'Total station surveying',
    'Tape measure mapping',
    'Sketch pad drawing',
    'Photographic triangulation',
  ]),
  'answer'      => 'Total station surveying',
  'explanation' => 'Total stations record precise 3D coordinates of each evidence item at a scene.',
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

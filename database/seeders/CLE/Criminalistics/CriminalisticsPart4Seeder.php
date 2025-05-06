<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart4Seeder extends Seeder
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
    'part'        => 4,
    'question'    => 'Which instrument uses ultraviolet and infrared wavelengths to detect alterations and obliterations on documents?',
    'choices'     => json_encode([
        'Video Spectral Comparator (VSC)',
        'Electrostatic Detection Apparatus (ESDA)',
        'Thin-Layer Chromatography (TLC)',
        'Scanning Electron Microscope (SEM)',
    ]),
    'answer'      => 'Video Spectral Comparator (VSC)',
    'explanation' => 'VSC employs multiple light sources and filters to reveal differences in inks and detect document tampering.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which technique is most appropriate for visualizing indented writing on a sheet of paper?',
    'choices'     => json_encode([
        'Electrostatic Detection Apparatus (ESDA)',
        'Video Spectral Comparator (VSC)',
        'Infrared Spectroscopy',
        'Raman Spectroscopy',
    ]),
    'answer'      => 'Electrostatic Detection Apparatus (ESDA)',
    'explanation' => 'ESDA lifts indented impressions from a document surface by electrostatically adhering toner particles.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which method is used to compare the chemical composition of two ink samples for possible common origin?',
    'choices'     => json_encode([
        'Thin-Layer Chromatography (TLC)',
        'Gas Chromatography–Mass Spectrometry (GC–MS)',
        'Infrared Spectroscopy (IR)',
        'Ultraviolet–Visible Spectroscopy (UV–Vis)',
    ]),
    'answer'      => 'Thin-Layer Chromatography (TLC)',
    'explanation' => 'TLC separates ink components on a stationary phase, allowing visual comparison of chromatographic profiles.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which characteristic of handwriting is considered an individual characteristic rather than a class characteristic?',
    'choices'     => json_encode([
        'Unique letter formations',
        'Right-handed slant',
        'Baseline alignment',
        'Pressure zone',
    ]),
    'answer'      => 'Unique letter formations',
    'explanation' => 'Individual characteristics are specific to a person, such as unique ways of forming certain letters.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which procedure would best reveal document alterations made with a different pen on the same sheet?',
    'choices'     => json_encode([
        'Infrared reflectance imaging',
        'Raman microscopy',
        'Thermal imaging',
        'X-ray fluorescence',
    ]),
    'answer'      => 'Infrared reflectance imaging',
    'explanation' => 'Infrared light penetrates certain inks differently, highlighting variations between pen strokes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which writing instrument produces class characteristics identifiable by striation patterns on document edges?',
    'choices'     => json_encode([
        'Ballpoint pen',
        'Fountain pen',
        'Marker',
        'Pencil',
    ]),
    'answer'      => 'Ballpoint pen',
    'explanation' => 'Ballpoint pens leave characteristic striations and ink distribution unique to each pen tip.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which feature would you examine to distinguish a document printed by a laser printer from one printed by an inkjet printer?',
    'choices'     => json_encode([
        'Dot matrix pattern uniformity',
        'Raised toner particles',
        'Liquid ink bleed',
        'Embossed characters',
    ]),
    'answer'      => 'Raised toner particles',
    'explanation' => 'Laser printers fuse toner onto paper, producing a slightly raised texture, unlike liquid ink.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which apparatus is used to transfer indented writing impressions onto a sheet of thermal-toner coated film?',
    'choices'     => json_encode([
        'Electrostatic Detection Apparatus (ESDA)',
        'Video Spectral Comparator (VSC)',
        'Infrared Reflectance Imaging',
        'Raman Spectrometer',
    ]),
    'answer'      => 'Electrostatic Detection Apparatus (ESDA)',
    'explanation' => 'ESDA uses an electrostatic charge and toner-coated film to reveal indentations from writing above.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which characteristic is evaluated by comparing letter spacing, word spacing, and line spacing in handwriting analysis?',
    'choices'     => json_encode([
        'Spatial characteristics',
        'Lateral pressure',
        'Stroke formation',
        'Pen lifts',
    ]),
    'answer'      => 'Spatial characteristics',
    'explanation' => 'Spatial characteristics include spacing patterns that can be distinctive to an individual’s writing style.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which alteration detection technique uses violet laser light to reveal latent writings invisible to the naked eye?',
    'choices'     => json_encode([
        'Forensic light source (FLS)',
        'Infrared photography',
        'Ultraviolet photography',
        'Scattered light analysis',
    ]),
    'answer'      => 'Forensic light source (FLS)',
    'explanation' => 'FLS provides variable wavelengths to reveal hidden inks and erased writing under specific light.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which technique helps differentiate paper types by visualizing watermark patterns?',
    'choices'     => json_encode([
        'Transmitted light examination',
        'Reflected light microscopy',
        'Polarized light',
        'UV fluorescence',
    ]),
    'answer'      => 'Transmitted light examination',
    'explanation' => 'Backlighting paper reveals watermark designs embedded during manufacturing.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which category of questioned document includes passports, visas, and identity cards?',
    'choices'     => json_encode([
        'Official documents',
        'Commercial documents',
        'Personal correspondence',
        'Mechanical logs',
    ]),
    'answer'      => 'Official documents',
    'explanation' => 'Official documents are issued by governments and require high scrutiny for authenticity.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which phenomenon occurs when an erasure is made on a document, and the underlying marks are exposed under oblique light?',
    'choices'     => json_encode([
        'Erasures scintillation',
        'Indented writing',
        'Obliteration recovery',
        'Transmitted imaging',
    ]),
    'answer'      => 'Obliteration recovery',
    'explanation' => 'Under raking light or chemical treatments, obliterated text can reappear for analysis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which evaluation considers the overall writing movement, fluency, and pen lifts in handwriting comparison?',
    'choices'     => json_encode([
        'Dynamic handwriting characteristics',
        'Static handwriting characteristics',
        'Spatial characteristics',
        'Temporal characteristics',
    ]),
    'answer'      => 'Dynamic handwriting characteristics',
    'explanation' => 'Dynamic traits relate to writing execution, such as speed, rhythm, and pen-lift patterns.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which ink dating method compares the degradation of solvent components over time using chromatography?',
    'choices'     => json_encode([
        'Chrono-chromatic analysis',
        'Ink migration dating',
        'Isotope ratio mass spectrometry',
        'Paper fiber aging',
    ]),
    'answer'      => 'Ink migration dating',
    'explanation' => 'Ink migration dating tracks changes in solvent front movement on chromatography media over time.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which document examination procedure involves comparing security features like holograms and microprint?',
    'choices'     => json_encode([
        'Counterfeit detection',
        'Ink analysis',
        'Indentation analysis',
        'Paper aging',
    ]),
    'answer'      => 'Counterfeit detection',
    'explanation' => 'Counterfeit detection verifies features designed to prevent fraudulent reproduction of official documents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which microscope mode enhances contrast of surface relief such as indentations and erasures?',
    'choices'     => json_encode([
        'Oblique lighting microscopy',
        'Brightfield microscopy',
        'Fluorescence microscopy',
        'Polarized light microscopy',
    ]),
    'answer'      => 'Oblique lighting microscopy',
    'explanation' => 'Oblique lighting casts shadows that accentuate surface relief from indentations or abrasions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which writing medium analysis identifies the presence of gum arabic, additives, and pigments in inks?',
    'choices'     => json_encode([
        'Fourier-transform infrared spectroscopy (FTIR)',
        'Gas chromatography',
        'UV–Vis spectroscopy',
        'Mass spectrometry',
    ]),
    'answer'      => 'Fourier-transform infrared spectroscopy (FTIR)',
    'explanation' => 'FTIR characterizes organic components in ink, distinguishing binder and pigment composition.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which characteristic is most reliable for differentiating individual handwriting samples?',
    'choices'     => json_encode([
        'Consistent microscopic stroke details',
        'Use of cursive vs print',
        'Page layout format',
        'Ink color',
    ]),
    'answer'      => 'Consistent microscopic stroke details',
    'explanation' => 'Microscopic stroke details like pen direction changes are highly individualized and reproducible.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 24,
    'part'        => 4,
    'question'    => 'Which apparatus combines multiple light sources and high-resolution imaging for detailed document examination?',
    'choices'     => json_encode([
        'Forensic Light Source (FLS) with digital camera',
        'Electrostatic Detection Apparatus (ESDA)',
        'Thin-Layer Chromatography (TLC)',
        'Video Microscope',
    ]),
    'answer'      => 'Forensic Light Source (FLS) with digital camera',
    'explanation' => 'FLS units paired with cameras allow examination at various wavelengths to reveal hidden features and capture images.',
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

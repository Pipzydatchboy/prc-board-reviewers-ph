<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart9Seeder extends Seeder
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
  'part'        => 9,
  'question'    => 'Which anatomical feature of the pubic symphysis is analyzed in the Suchey–Brooks method to estimate age-at-death?',
  'choices'     => json_encode([
    'Ventral arc',
    'Preauricular sulcus',
    'Sciatic notch',
    'Pubic tubercle',
  ]),
  'answer'      => 'Ventral arc',
  'explanation' => 'The Suchey–Brooks system assesses changes in the ventral arc morphology to estimate adult age.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which skeletal element exhibits the greatest sexual dimorphism in adults?',
  'choices'     => json_encode([
    'Pelvis',
    'Femur',
    'Skull',
    'Humerus',
  ]),
  'answer'      => 'Pelvis',
  'explanation' => 'The human pelvis shows the most reliable differences between male and female morphology.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which measurement of the femur is most commonly used to estimate stature?',
  'choices'     => json_encode([
    'Maximum length',
    'Head diameter',
    'Shaft circumference',
    'Neck length',
  ]),
  'answer'      => 'Maximum length',
  'explanation' => 'Maximum femur length correlates strongly with overall living stature in forensic formulas.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which insect family is typically the first to colonize a fresh corpse in temperate climates?',
  'choices'     => json_encode([
    'Calliphoridae (blowflies)',
    'Coleoptera (beetles)',
    'Diptera (houseflies)',
    'Dermestidae (skin beetles)',
  ]),
  'answer'      => 'Calliphoridae (blowflies)',
  'explanation' => 'Blowflies are attracted immediately to carrion and lay eggs within hours of death.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which group of insects is most associated with the late stages of decomposition?',
  'choices'     => json_encode([
    'Coleoptera (beetles)',
    'Calliphoridae (blowflies)',
    'Formicidae (ants)',
    'Muscidae (houseflies)',
  ]),
  'answer'      => 'Coleoptera (beetles)',
  'explanation' => 'Beetles such as dermestids arrive later to consume drier tissues in advanced decay.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'What concept in forensic entomology uses accumulated temperature to estimate postmortem interval?',
  'choices'     => json_encode([
    'Accumulated degree-days',
    'Vapor pressure deficit',
    'Diurnal temperature range',
    'Photoperiodism',
  ]),
  'answer'      => 'Accumulated degree-days',
  'explanation' => 'Degree-days sum the thermal units insect larvae require to develop through stages.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which dental tissue is the most durable and thus most useful for identification?',
  'choices'     => json_encode([
    'Enamel',
    'Dentin',
    'Cementum',
    'Pulp',
  ]),
  'answer'      => 'Enamel',
  'explanation' => 'Enamel is the hardest tissue in the body and resists postmortem degradation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'In bite‑mark analysis, what technique overlays suspect dentition outlines onto the injury?',
  'choices'     => json_encode([
    'Photographic superimposition',
    'Digital subtraction',
    'Panoramic radiography',
    '3D laser scanning',
  ]),
  'answer'      => 'Photographic superimposition',
  'explanation' => 'Superimposing dental patterns on the mark helps assess correspondence of tooth alignment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'What does forensic palynology study?',
  'choices'     => json_encode([
    'Pollen and spores',
    'Paint chips',
    'Glass fragments',
    'Soil composition',
  ]),
  'answer'      => 'Pollen and spores',
  'explanation' => 'Palynology analyzes microscopic pollen and spore assemblages to link objects or persons to places.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Dendrochronology in forensics uses which feature to date wooden objects?',
  'choices'     => json_encode([
    'Annual growth rings',
    'Wood density',
    'Resin channel patterns',
    'Xylem vessel size',
  ]),
  'answer'      => 'Annual growth rings',
  'explanation' => 'Matching ring-width patterns between samples and reference chronologies establishes age.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which imaging modality produces cross‑sectional views for detecting skeletal trauma?',
  'choices'     => json_encode([
    'Computed Tomography (CT)',
    'Magnetic Resonance Imaging (MRI)',
    'Ultrasound',
    'Plain radiography',
  ]),
  'answer'      => 'Computed Tomography (CT)',
  'explanation' => 'CT scans provide detailed 3D-like cross-sections ideal for complex fracture assessment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which histological stain is most commonly used to examine tissue structure and cellular detail?',
  'choices'     => json_encode([
    'Hematoxylin and eosin',
    'Gram stain',
    'Masson’s trichrome',
    'Silver stain',
  ]),
  'answer'      => 'Hematoxylin and eosin',
  'explanation' => 'H&E stain highlights nuclei (blue) and cytoplasm/extracellular matrix (pink) in tissue sections.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'In digital forensics, what device prevents write operations to the original media?',
  'choices'     => json_encode([
    'Write blocker',
    'Disk duplicator',
    'Port replicator',
    'Data extractor',
  ]),
  'answer'      => 'Write blocker',
  'explanation' => 'Write blockers allow read-only access to storage devices, preserving original evidence integrity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which hashing algorithm has historically been used to verify the integrity of forensic disk images?',
  'choices'     => json_encode([
    'MD5',
    'SHA-256',
    'CRC32',
    'Base64',
  ]),
  'answer'      => 'MD5',
  'explanation' => 'MD5 produces a 128-bit hash widely used in forensic imaging, though newer standards prefer SHA algorithms.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'What is the typical file signature (magic number) for a JPEG image?',
  'choices'     => json_encode([
    'FF D8 FF E0',
    '89 50 4E 47',
    '25 50 44 46',
    '42 4D 46 46',
  ]),
  'answer'      => 'FF D8 FF E0',
  'explanation' => 'JPEG files begin with the byte sequence FF D8 FF E0 to identify the format before decoding.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which type of lens is preferred for close‑up forensic photography of trace evidence?',
  'choices'     => json_encode([
    'Macro lens',
    'Fish-eye lens',
    'Telephoto lens',
    'Wide-angle lens',
  ]),
  'answer'      => 'Macro lens',
  'explanation' => 'Macro lenses allow high-magnification, low-distortion images of small evidence items.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Cheiloscopy in forensic science examines:',
  'choices'     => json_encode([
    'Lip prints',
    'Blood spatter',
    'Footprints',
    'Fingerprints',
  ]),
  'answer'      => 'Lip prints',
  'explanation' => 'Cheiloscopy studies the unique patterns of wrinkles and grooves on the human lips.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'In audio forensic analysis, a spectrogram plots which two parameters?',
  'choices'     => json_encode([
    'Frequency vs. time',
    'Amplitude vs. distance',
    'Phase vs. temperature',
    'Wavelength vs. speed',
  ]),
  'answer'      => 'Frequency vs. time',
  'explanation' => 'Spectrograms visualize how frequency content of a signal changes over time.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which part of a seed is most often used for forensic botanical species identification?',
  'choices'     => json_encode([
    'Testa (seed coat)',
    'Endosperm',
    'Cotyledon',
    'Embryo',
  ]),
  'answer'      => 'Testa (seed coat)',
  'explanation' => 'The seed coat has distinctive surface patterns and thickness used in microscopic comparisons.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 24,
  'part'        => 9,
  'question'    => 'Which epiphyseal fusion center typically closes last in the human skeleton?',
  'choices'     => json_encode([
    'Medial clavicle',
    'Distal radius',
    'Iliac crest',
    'Proximal humerus',
  ]),
  'answer'      => 'Medial clavicle',
  'explanation' => 'The medial clavicular epiphysis fuses around age 23–25, later than most other centers.',
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

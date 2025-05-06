<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart2Seeder extends Seeder
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
    'part'        => 2,
    'question'    => 'Which law of light describes that illumination is inversely proportional to the square of the distance from the light source to the subject?',
    'choices'     => json_encode([
        'Inverse square law',
        'Snell’s law',
        'Law of reflection',
        'Law of refraction',
    ]),
    'answer'      => 'Inverse square law',
    'explanation' => 'The inverse square law states that light intensity diminishes with the square of the distance from its source.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'In the exposure triangle, which setting controls the size of the aperture opening and affects depth of field?',
    'choices'     => json_encode([
        'Aperture (f-stop)',
        'Shutter speed',
        'ISO sensitivity',
        'White balance',
    ]),
    'answer'      => 'Aperture (f-stop)',
    'explanation' => 'Aperture (f-stop) adjusts the lens opening, influencing depth of field and light admission.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which shutter speed would best freeze fast-moving evidence details without blur?',
    'choices'     => json_encode([
        '1/1000 second',
        '1 second',
        '1/30 second',
        '2 seconds',
    ]),
    'answer'      => '1/1000 second',
    'explanation' => 'A fast shutter speed (1/1000 s) captures quick motions sharply, minimizing motion blur.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Increasing which ISO setting makes the camera sensor more sensitive to light but may introduce noise?',
    'choices'     => json_encode([
        'ISO sensitivity',
        'Aperture',
        'Shutter speed',
        'Focal length',
    ]),
    'answer'      => 'ISO sensitivity',
    'explanation' => 'Higher ISO increases sensor sensitivity in low light but can add digital noise to images.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which element of the exposure triangle is adjusted as aperture narrows (higher f-stop)?',
    'choices'     => json_encode([
        'Less light enters, increasing depth of field',
        'More light enters, decreasing depth of field',
        'Sensor sensitivity decreases',
        'Motion blur increases',
    ]),
    'answer'      => 'Less light enters, increasing depth of field',
    'explanation' => 'A higher f-number means a smaller aperture opening, allowing less light but greater focus range.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which crime scene photography practice ensures scale and orientation are documented in close-up shots?',
    'choices'     => json_encode([
        'Include a forensic scale and north arrow in the frame',
        'Overexpose the background',
        'Use wide-angle lens only',
        'Suppress shadows entirely',
    ]),
    'answer'      => 'Include a forensic scale and north arrow in the frame',
    'explanation' => 'A scale and north arrow provide dimensional and directional context for evidence images.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'What is the correct sequence for photographing a crime scene?',
    'choices'     => json_encode([
        'Overall, midrange, then close-up',
        'Close-up, midrange, then overall',
        'Midrange, close-up, then overall',
        'Random order',
    ]),
    'answer'      => 'Overall, midrange, then close-up',
    'explanation' => 'Photographing from general to specific ensures context before detailed views.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which flash technique reduces harsh shadows when photographing evidence close to surfaces?',
    'choices'     => json_encode([
        'Bounce flash',
        'Rear curtain sync',
        'Fill flash',
        'High-speed sync',
    ]),
    'answer'      => 'Bounce flash',
    'explanation' => 'Bounce flash directs light to a ceiling or wall, creating soft, diffused illumination.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which camera part controls the amount of light reaching the sensor by adjusting sensitivity and exposure?',
    'choices'     => json_encode([
        'Shutter',
        'Aperture',
        'Viewfinder',
        'Mirror',
    ]),
    'answer'      => 'Shutter',
    'explanation' => 'The shutter opens for a set time (shutter speed) to admit light for image capture.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which lens type has a focal length shorter than the sensor diagonal, offering a wider field of view?',
    'choices'     => json_encode([
        'Wide-angle lens',
        'Telephoto lens',
        'Standard lens',
        'Macro lens',
    ]),
    'answer'      => 'Wide-angle lens',
    'explanation' => 'Wide-angle lenses (<35mm) capture broader scenes, useful for overall crime scene views.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which feature differentiates digital photography from analogue in forensic documentation?',
    'choices'     => json_encode([
        'Metadata recording (EXIF)',
        'Film grain texture',
        'Chemical development',
        'Darkroom processing only',
    ]),
    'answer'      => 'Metadata recording (EXIF)',
    'explanation' => 'Digital images embed EXIF metadata (date, time, settings) critical for forensic audits.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which white balance setting corrects color casts under tungsten lighting?',
    'choices'     => json_encode([
        'Tungsten/Incandescent',
        'Daylight',
        'Shade',
        'Fluorescent',
    ]),
    'answer'      => 'Tungsten/Incandescent',
    'explanation' => 'Tungsten setting compensates for the warm (orange) color temperature of incandescent bulbs.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which tripod characteristic is most critical for long exposure crime scene photos?',
    'choices'     => json_encode([
        'Stability and load capacity',
        'Portability',
        'Color of legs',
        'Number of sections',
    ]),
    'answer'      => 'Stability and load capacity',
    'explanation' => 'A sturdy tripod prevents camera shake during extended exposures for low-light documentation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which manual camera setting ensures precise control over image exposure regardless of scene lighting?',
    'choices'     => json_encode([
        'Manual mode (M)',
        'Program mode (P)',
        'Aperture priority (A/Av)',
        'Shutter priority (S/Tv)',
    ]),
    'answer'      => 'Manual mode (M)',
    'explanation' => 'Manual mode lets the operator set aperture, shutter speed, and ISO for consistent results.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which sensor size provides better low-light performance and depth of field control?',
    'choices'     => json_encode([
        'Full-frame sensor',
        '1/2.3" compact sensor',
        'Micro four thirds',
        '1" sensor',
    ]),
    'answer'      => 'Full-frame sensor',
    'explanation' => 'Full-frame sensors have larger photosites, improving noise performance and dynamic range.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which maintenance practice is essential for forensic cameras to ensure image accuracy in the field?',
    'choices'     => json_encode([
        'Regular lens and sensor cleaning',
        'Firmware upgrades only',
        'Color filter changes',
        'Battery terminal painting',
    ]),
    'answer'      => 'Regular lens and sensor cleaning',
    'explanation' => 'Clean optics prevent artifacts and ensure the integrity of crime scene imagery.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which flash synchronization mode fires the flash at the end of the exposure to freeze subject movement?',
    'choices'     => json_encode([
        'Rear curtain sync',
        'Front curtain sync',
        'High-speed sync',
        'Red-eye reduction',
    ]),
    'answer'      => 'Rear curtain sync',
    'explanation' => 'Rear curtain sync triggers the flash just before the shutter closes, freezing motion at the end.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which imaging format preserves the widest dynamic range and allows non-destructive post-processing?',
    'choices'     => json_encode([
        'RAW',
        'JPEG',
        'TIFF',
        'BMP',
    ]),
    'answer'      => 'RAW',
    'explanation' => 'RAW files retain full sensor data without in-camera processing, ideal for forensic accuracy.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which crime scene photography angle minimizes perspective distortion when documenting walls and floors?',
    'choices'     => json_encode([
        'Parallel to the surface',
        'Oblique at 45°',
        'Extreme low angle',
        'High overhead',
    ]),
    'answer'      => 'Parallel to the surface',
    'explanation' => 'Keeping the camera plane parallel prevents angular distortion of planar surfaces.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 24,
    'part'        => 2,
    'question'    => 'Which light modifier attaches to the flash to soften its output and reduce specular highlights?',
    'choices'     => json_encode([
        'Diffuser dome',
        'Grid spot',
        'Gobo',
        'Barn doors',
    ]),
    'answer'      => 'Diffuser dome',
    'explanation' => 'A diffuser dome scatters flash output, creating even illumination and reducing harsh reflections.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

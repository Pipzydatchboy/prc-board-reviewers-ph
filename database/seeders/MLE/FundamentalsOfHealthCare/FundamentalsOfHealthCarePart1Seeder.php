<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart1Seeder extends Seeder
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
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'What is the correct order of the basic steps in a physical examination?',
  'choices'     => json_encode([
    'Inspection, palpation, percussion, auscultation',
    'Auscultation, palpation, inspection, percussion',
    'Palpation, inspection, auscultation, percussion',
    'Percussion, inspection, palpation, auscultation',
  ]),
  'answer'      => 'Inspection, palpation, percussion, auscultation',
  'explanation' => 'The standard sequence is inspection first, followed by palpation, percussion, then auscultation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which instrument is most appropriate for measuring blood pressure?',
  'choices'     => json_encode([
    'Sphygmomanometer and stethoscope',
    'Thermometer',
    'Pulse oximeter',
    'Otoscope',
  ]),
  'answer'      => 'Sphygmomanometer and stethoscope',
  'explanation' => 'Blood pressure is measured using a cuff (sphygmomanometer) and stethoscope to auscultate Korotkoff sounds.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'How long should you count to measure an accurate respiratory rate?',
  'choices'     => json_encode([
    '60 seconds',
    '15 seconds and multiply by four',
    '30 seconds and multiply by two',
    '10 seconds and multiply by six',
  ]),
  'answer'      => '60 seconds',
  'explanation' => 'Counting respirations over 60 seconds yields the most accurate respiratory rate, as rates can vary.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which palpation technique assesses the size and consistency of organs?',
  'choices'     => json_encode([
    'Deep palpation',
    'Light palpation',
    'Bimanual palpation',
    'Ballottement',
  ]),
  'answer'      => 'Deep palpation',
  'explanation' => 'Deep palpation applies pressure with the fingers to evaluate the size, shape, and consistency of internal organs.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'What does the tympanic percussion note indicate when heard over the abdomen?',
  'choices'     => json_encode([
    'Presence of air in the stomach',
    'Solid mass under examination',
    'Fluid collection',
    'Normal lung resonance',
  ]),
  'answer'      => 'Presence of air in the stomach',
  'explanation' => 'Tympany is a hollow sound produced by air-filled structures, such as the stomach or intestines.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which area is examined first during head-to-toe assessment?',
  'choices'     => json_encode([
    'Vital signs',
    'Abdomen',
    'Feet and lower extremities',
    'Oral cavity',
  ]),
  'answer'      => 'Vital signs',
  'explanation' => 'Vital signs are checked first to identify any immediate life-threatening issues.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'What normal range for adult oral temperature is?',
  'choices'     => json_encode([
    '36.5–37.5°C',
    '35.0–36.0°C',
    '37.5–38.5°C',
    '38.0–39.0°C',
  ]),
  'answer'      => '36.5–37.5°C',
  'explanation' => 'Normal oral temperature in adults typically ranges between 36.5 and 37.5 °C.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'During auscultation of lung fields, which sound is indicative of fluid in alveoli?',
  'choices'     => json_encode([
    'Crackles (rales)',
    'Wheezes',
    'Pleural friction rub',
    'Bronchial breath sounds',
  ]),
  'answer'      => 'Crackles (rales)',
  'explanation' => 'Crackles are discontinuous sounds heard when air opens fluid-filled alveoli.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which pulse site is used to assess circulation to the lower extremities?',
  'choices'     => json_encode([
    'Dorsalis pedis',
    'Radial',
    'Carotid',
    'Brachial',
  ]),
  'answer'      => 'Dorsalis pedis',
  'explanation' => 'The dorsalis pedis pulse on the foot reflects arterial blood flow to the lower extremity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Inspecting the oral mucosa can provide information about which system?',
  'choices'     => json_encode([
    'Hematologic',
    'Respiratory',
    'Musculoskeletal',
    'Renal',
  ]),
  'answer'      => 'Hematologic',
  'explanation' => 'Pale or cyanotic mucosa can indicate anemia or impaired oxygenation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which tool is used for otoscopic examination?',
  'choices'     => json_encode([
    'Otoscope',
    'Ophthalmoscope',
    'Laryngoscope',
    'Speculum',
  ]),
  'answer'      => 'Otoscope',
  'explanation' => 'An otoscope illuminates and magnifies the external auditory canal and tympanic membrane.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which percussion note is heard over healthy lung tissue?',
  'choices'     => json_encode([
    'Resonance',
    'Dullness',
    'Flatness',
    'Tympany',
  ]),
  'answer'      => 'Resonance',
  'explanation' => 'Resonant percussion notes indicate air-filled healthy lung tissue.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'What technique helps expand the chest wall for better lung auscultation?',
  'choices'     => json_encode([
    'Ask the patient to take deep breaths through mouth',
    'Inspect for symmetry only',
    'Palpate for lumps',
    'Percuss the abdomen first',
  ]),
  'answer'      => 'Ask the patient to take deep breaths through mouth',
  'explanation' => 'Deep mouth breaths help assess lung sounds and detect adventitious sounds.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 14
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which sign is assessed by asking the patient to shrug shoulders against resistance?',
  'choices'     => json_encode([
    'Accessory nerve function',
    'Facial nerve function',
    'Trigeminal nerve function',
    'Hypoglossal nerve function',
  ]),
  'answer'      => 'Accessory nerve function',
  'explanation' => 'The spinal accessory nerve (CN XI) innervates sternocleidomastoid and trapezius muscles, tested by shoulder shrug.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 15
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which area is palpated to assess for hepatomegaly?',
  'choices'     => json_encode([
    'Right upper quadrant',
    'Left upper quadrant',
    'Epigastric region',
    'Left lower quadrant',
  ]),
  'answer'      => 'Right upper quadrant',
  'explanation' => 'The liver is in the RUQ; palpation below the costal margin detects enlargement.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 16
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which pulse deficit indicates possible atrial fibrillation?',
  'choices'     => json_encode([
    'Difference between apical and radial pulse rates',
    'Difference between carotid and femoral pulse',
    'Difference between brachial and dorsalis pedis pulse',
    'Difference between ear and visual pulse',
  ]),
  'answer'      => 'Difference between apical and radial pulse rates',
  'explanation' => 'A pulse deficit (apical > radial) suggests ineffective ventricular contractions as in atrial fibrillation.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 17
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which position best auscultates the apex of the heart?',
  'choices'     => json_encode([
    'Left lateral decubitus',
    'Supine',
    'Prone',
    'Right lateral decubitus',
  ]),
  'answer'      => 'Left lateral decubitus',
  'explanation' => 'This position brings the left ventricle closer to the chest wall, enhancing apex sounds.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 18
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'What is the normal capillary refill time in adults?',
  'choices'     => json_encode([
    'Less than 2 seconds',
    '2–3 seconds',
    '5–7 seconds',
    'Greater than 7 seconds',
  ]),
  'answer'      => 'Less than 2 seconds',
  'explanation' => 'Quick refill (<2s) indicates adequate peripheral perfusion.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 19
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which sign is assessed by having the patient extend the tongue and say “ah”?',
  'choices'     => json_encode([
    'Glossopharyngeal and vagus nerve function',
    'Facial nerve function',
    'Accessory nerve function',
    'Olfactory nerve function',
  ]),
  'answer'      => 'Glossopharyngeal and vagus nerve function',
  'explanation' => 'Uvula and soft palate elevation test the glossopharyngeal (IX) and vagus (X) nerves.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 20
$batch[] = [
  'subject_id'  => 28,
  'part'        => 1,
  'question'    => 'Which method is used to assess for pitting edema in the lower extremities?',
  'choices'     => json_encode([
    'Apply firm pressure over the shin and observe indentation',
    'Measure calf circumference',
    'Check capillary refill',
    'Perform Homan’s sign',
  ]),
  'answer'      => 'Apply firm pressure over the shin and observe indentation',
  'explanation' => 'Pitting edema is identified by pressing and noting a residual pit in the skin.',
  'created_at'  => $now,
  'updated_at'  => $now
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

<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart9Seeder extends Seeder
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
$batch = [
    //1
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Airborne precautions require the patient to be placed in which type of room?",
        'choices'     => json_encode([
            'Positive pressure room',
            'Negative pressure room',
            'Standard private room',
            'Open ward',
        ]),
        'answer'      => 'Negative pressure room',
        'explanation' => 'Negative pressure rooms prevent airborne pathogens from escaping into the hallway.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Which mask is required when caring for a patient under airborne precautions?",
        'choices'     => json_encode([
            'Surgical mask',
            'N95 respirator',
            'Cloth mask',
            'Face shield only',
        ]),
        'answer'      => 'N95 respirator',
        'explanation' => 'N95 respirators filter airborne particles effectively for airborne isolation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Droplet precautions require maintaining what minimum distance from the patient?",
        'choices'     => json_encode([
            '1 foot',
            '3 feet',
            '6 feet',
            '10 feet',
        ]),
        'answer'      => '3 feet',
        'explanation' => 'Droplet particles travel up to 3 feet and require a surgical mask within that range.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Contact precautions include the use of: ",
        'choices'     => json_encode([
            'Eye protection only',
            'Gown and gloves',
            'N95 respirator',
            'Powered air-purifying respirator',
        ]),
        'answer'      => 'Gown and gloves',
        'explanation' => 'Gown and gloves prevent transmission via direct or indirect contact.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Autoclave sterilization typically operates at which temperature and pressure?",
        'choices'     => json_encode([
            '121°C at 15 psi',
            '100°C at 10 psi',
            '180°C at 20 psi',
            '90°C at 5 psi',
        ]),
        'answer'      => '121°C at 15 psi',
        'explanation' => 'Standard autoclave cycles sterilize at 121°C under 15 psi for at least 15 minutes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Which solution is hypotonic?",
        'choices'     => json_encode([
            '0.45% NaCl',
            '0.9% NaCl',
            'Lactated Ringer’s',
            'D5W in NS',
        ]),
        'answer'      => '0.45% NaCl',
        'explanation' => '0.45% saline has lower osmolarity than plasma and is hypotonic.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Which solution is hypertonic?",
        'choices'     => json_encode([
            '0.45% NaCl',
            '3% NaCl',
            '0.9% NaCl',
            'Lactated Ringer’s',
        ]),
        'answer'      => '3% NaCl',
        'explanation' => '3% saline has higher osmolarity than plasma, drawing fluid into the vascular space.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Specimens for culture should be labeled at the: ",
        'choices'     => json_encode([
            'Laboratory',
            'Bedside immediately after collection',
            'Nurse’s station later',
            'Patient’s room after transport',
        ]),
        'answer'      => 'Bedside immediately after collection',
        'explanation' => 'Immediate labeling prevents misidentification and contamination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Needles and sharps must be disposed of in: ",
        'choices'     => json_encode([
            'Regular trash',
            'Biohazard bag only',
            'Puncture-resistant sharps container',
            'Recycle bin',
        ]),
        'answer'      => 'Puncture-resistant sharps container',
        'explanation' => 'Sharps containers prevent needlestick injuries and proper disposal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "An incident report is used to document:",
        'choices'     => json_encode([
            'Routine care provided',
            'Unusual events such as falls or errors',
            'Patient’s daily fluid intake',
            'Medication administration times',
        ]),
        'answer'      => 'Unusual events such as falls or errors',
        'explanation' => 'Incident reports track occurrences that are not part of routine care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Verbal orders must be signed by the provider within:",
        'choices'     => json_encode([
            '24 hours',
            '48 hours',
            'At next visit',
            'One week',
        ]),
        'answer'      => '24 hours',
        'explanation' => 'Provider must co-sign verbal orders within 24 hours to ensure accuracy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "A late entry in the medical record should include:",
        'choices'     => json_encode([
            'Time, date, and reason for entry',
            'Only the new information',
            'Time and provider’s name',
            'Reason and nurse’s initials only',
        ]),
        'answer'      => 'Time, date, and reason for entry',
        'explanation' => 'Complete late entries ensure clear audit trails and documentation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "The priority nursing action for an organ donation request is to:",
        'choices'     => json_encode([
            'Contact the organ procurement team',
            'Honor patient’s family wishes immediately',
            'Discuss donation options with the family',
            'Document refusal in chart',
        ]),
        'answer'      => 'Contact the organ procurement team',
        'explanation' => 'Specialized teams handle organ donation logistics promptly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Spiritual care for patients often includes:",
        'choices'     => json_encode([
            'Medical diagnosis only',
            'Active listening and presence',
            'Prescribing medication',
            'Dietary instructions',
        ]),
        'answer'      => 'Active listening and presence',
        'explanation' => 'Spiritual care involves support, listening, and presence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Which activity assesses a patient’s ability to perform ADLs?",
        'choices'     => json_encode([
            'Brushing teeth',
            'Reading a book',
            'Watching TV',
            'Attending a lecture',
        ]),
        'answer'      => 'Brushing teeth',
        'explanation' => 'ADLs include self-care tasks like bathing, dressing, and grooming.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Proper documentation of pain includes:",
        'choices'     => json_encode([
            'Location, intensity, duration',
            'Physician’s opinion only',
            'Family’s perception',
            'Nurse’s intuition',
        ]),
        'answer'      => 'Location, intensity, duration',
        'explanation' => 'Comprehensive pain documentation includes subjective and objective data.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "The best method to obtain a clean-catch urine specimen is to:",
        'choices'     => json_encode([
            'Collect midstream after cleansing perineum',
            'Collect first void of morning without cleaning',
            'Collect post catheterization',
            'Collect directly from bag',
        ]),
        'answer'      => 'Collect midstream after cleansing perineum',
        'explanation' => 'Cleansing and midstream capture reduce contamination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Which intervention reduces risk of catheter-associated urinary tract infections?",
        'choices'     => json_encode([
            'Routine catheter changes every 24 hours',
            'Maintaining a closed drainage system',
            'Irrigating catheter daily',
            'Positioning bag above bladder level',
        ]),
        'answer'      => 'Maintaining a closed drainage system',
        'explanation' => 'Closed systems prevent introduction of pathogens into the catheter.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "Correct limb lead placement for ECG lead II is:",
        'choices'     => json_encode([
            'RA to LL',
            'LA to RL',
            'RL to LL',
            'V1 to V6',
        ]),
        'answer'      => 'RA to LL',
        'explanation' => 'Lead II measures potential between right arm and left leg electrodes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 9,
        'question'    => "When transferring a patient using a gait belt, the nurse should:",
        'choices'     => json_encode([
            'Hold belt at patient’s hips and assist standing',
            'Hold belt at patient’s shoulders only',
            'Tie belt firmly around bed rail',
            'Use belt for restraint purposes',
        ]),
        'answer'      => 'Hold belt at patient’s hips and assist standing',
        'explanation' => 'Proper gait belt use provides safe support during transfers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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

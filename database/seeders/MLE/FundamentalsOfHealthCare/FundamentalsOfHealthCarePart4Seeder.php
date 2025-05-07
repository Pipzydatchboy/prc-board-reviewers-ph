<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => "At what angle should a subcutaneous injection be administered?",
        'choices'     => json_encode([
            '15 degrees',
            '45 degrees',
            '90 degrees',
            '180 degrees',
        ]),
        'answer'      => '45 degrees',
        'explanation' => 'Subcutaneous injections are typically given at a 45-degree angle to ensure proper placement in the fatty tissue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Which of the following is considered part of a patient's vital signs?",
        'choices'     => json_encode([
            'Pupil reaction',
            'Blood pressure',
            'Reflex response',
            'Skin turgor',
        ]),
        'answer'      => 'Blood pressure',
        'explanation' => 'Vital signs include temperature, pulse, respiration, and blood pressure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "A clear liquid diet may include all EXCEPT:",
        'choices'     => json_encode([
            'Apple juice',
            'Chicken broth',
            'Gelatin',
            'Cream soup',
        ]),
        'answer'      => 'Cream soup',
        'explanation' => 'Clear liquid diets allow only transparent, liquid foods; cream soups are opaque.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "What is the primary purpose of charting intake and output?",
        'choices'     => json_encode([
            'Monitor fluid balance',
            'Record nutritional intake',
            'Track medication doses',
            'Document vital signs',
        ]),
        'answer'      => 'Monitor fluid balance',
        'explanation' => 'Intake and output records help assess a patient’s hydration status and kidney function.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Before administering oral medications, the nurse should always check:",
        'choices'     => json_encode([
            'Patient\'s weight',
            'Patient\'s identification band',
            'Patient\'s vital signs',
            'Patient\'s room temperature',
        ]),
        'answer'      => 'Patient\'s identification band',
        'explanation' => 'Verifying the patient’s identity prevents medication errors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "How should a midstream urine specimen be collected?",
        'choices'     => json_encode([
            'Collect the first urine in the morning',
            'Collect urine at end of voiding',
            'Collect midstream urine in sterile container',
            'Collect urine after cleansing with soap',
        ]),
        'answer'      => 'Collect midstream urine in sterile container',
        'explanation' => 'Midstream collection reduces contamination risk and uses a sterile container.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Passive range-of-motion exercises are performed to:",
        'choices'     => json_encode([
            'Increase muscle strength',
            'Maintain joint flexibility',
            'Improve cardiovascular endurance',
            'Enhance respiratory function',
        ]),
        'answer'      => 'Maintain joint flexibility',
        'explanation' => 'Passive ROM exercises prevent contractures and maintain joint mobility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Which of these actions is correct for using an incentive spirometer?",
        'choices'     => json_encode([
            'Exhale forcefully into the device',
            'Seal lips tightly around mouthpiece and inhale slowly',
            'Shake the device before use',
            'Use only after meals',
        ]),
        'answer'      => 'Seal lips tightly around mouthpiece and inhale slowly',
        'explanation' => 'Slow inhalation through the device promotes lung expansion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "What is the normal adult body temperature range (oral)?",
        'choices'     => json_encode([
            '35.5° to 36.5°C',
            '36.5° to 37.5°C',
            '37.5° to 38.5°C',
            '38.5° to 39.5°C',
        ]),
        'answer'      => '36.5° to 37.5°C',
        'explanation' => 'The standard oral temperature range for adults is 36.5° to 37.5°C.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Which document records a patient’s advance directives?",
        'choices'     => json_encode([
            'Admission form',
            'Progress notes',
            'Living will',
            'Flow sheet',
        ]),
        'answer'      => 'Living will',
        'explanation' => 'A living will specifies patient preferences for end-of-life care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "How should a nasal cannula be secured?",
        'choices'     => json_encode([
            'Looped behind the ears and under the chin',
            'Taped across the forehead',
            'Tied to the bed frame',
            'Clipped to the patient’s clothing',
        ]),
        'answer'      => 'Looped behind the ears and under the chin',
        'explanation' => 'Properly securing the cannula loops behind ears and rests under chin to maintain placement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "The correct sequence for removing personal protective equipment (PPE) is:",
        'choices'     => json_encode([
            'Gloves, gown, goggles, mask',
            'Goggles, mask, gown, gloves',
            'Mask, gloves, gown, goggles',
            'Gown, gloves, goggles, mask',
        ]),
        'answer'      => 'Gown, gloves, goggles, mask',
        'explanation' => 'PPE removal follows gown, gloves, goggles, then mask to prevent contamination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "How often should oxygen saturation (SpO2) be monitored for a stable patient?",
        'choices'     => json_encode([
            'Every hour',
            'Every 2 hours',
            'Every 4 hours',
            'Continuously',
        ]),
        'answer'      => 'Every 4 hours',
        'explanation' => 'Stable patients typically require SpO2 monitoring every 4 hours to ensure adequate oxygenation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "The recommended site for measuring core body temperature with a tympanic thermometer is:",
        'choices'     => json_encode([
            'Axilla',
            'Oral cavity',
            'Ear canal',
            'Rectum',
        ]),
        'answer'      => 'Ear canal',
        'explanation' => 'The ear canal closely reflects core temperature and is ideal for tympanic measurements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "What is the PASS acronym related to?",
        'choices'     => json_encode([
            'Fire extinguisher use',
            'CPR steps',
            'Hand hygiene moments',
            'Patient admission protocol',
        ]),
        'answer'      => 'Fire extinguisher use',
        'explanation' => 'PASS stands for Pull, Aim, Squeeze, Sweep when using a fire extinguisher.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Which of these is a WHO 'Five Moments for Hand Hygiene' moment?",
        'choices'     => json_encode([
            'Before touching a patient',
            'After eating',
            'After charting',
            'Before leaving work',
        ]),
        'answer'      => 'Before touching a patient',
        'explanation' => 'One of the WHO five moments is before touching a patient to prevent infection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "What is the first step in moving a patient from bed to wheelchair?",
        'choices'     => json_encode([
            'Lock the wheelchair brakes',
            'Place the wheelchair far from the bed',
            'Tell the patient to stand up quickly',
            'Remove the bed railings',
        ]),
        'answer'      => 'Lock the wheelchair brakes',
        'explanation' => 'Locking brakes stabilizes the wheelchair to prevent movement during transfer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Proper suctioning of a patient’s airway requires:",
        'choices'     => json_encode([
            'Applying suction while inserting catheter',
            'Rotating catheter during withdrawal',
            'Suctioning for at least 30 seconds',
            'Increasing suction if resistance met',
        ]),
        'answer'      => 'Rotating catheter during withdrawal',
        'explanation' => 'Gently rotating the catheter while withdrawing prevents mucosal damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Therapeutic communication includes:",
        'choices'     => json_encode([
            'Judging patient statements',
            'Offering false reassurance',
            'Using open-ended questions',
            'Giving advice unsolicited',
        ]),
        'answer'      => 'Using open-ended questions',
        'explanation' => 'Open-ended questions encourage patients to express feelings and provide detailed information.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 4,
        'question'    => "Why is maintaining patient privacy important?",
        'choices'     => json_encode([
            'To speed up care delivery',
            'To comply with legal and ethical standards',
            'To reduce documentation',
            'To limit family involvement',
        ]),
        'answer'      => 'To comply with legal and ethical standards',
        'explanation' => 'Maintaining privacy respects patient dignity and meets confidentiality requirements.',
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

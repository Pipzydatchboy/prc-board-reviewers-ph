<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => "A patient in the ward develops a pressure ulcer on the sacral area. Which of the following actions should the nurse take first?",
        'choices'     => json_encode([
            'Apply a hydrocolloid dressing',
            'Reposition the patient every two hours',
            'Massage around the wound edges',
            'Cleanse the area with normal saline',
        ]),
        'answer'      => 'Reposition the patient every two hours',
        'explanation' => 'Frequent repositioning relieves pressure and is the priority to prevent further tissue damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "Standard precautions in infection control include all EXCEPT:",
        'choices'     => json_encode([
            'Hand hygiene before and after patient contact',
            'Use of gloves when touching blood or body fluids',
            'Wearing a gown if clothing may be soiled',
            'Sterile technique when inserting an IV catheter',
        ]),
        'answer'      => 'Sterile technique when inserting an IV catheter',
        'explanation' => 'Sterile technique is a critical practice but falls under aseptic technique, not standard precautions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "A patient’s blood pressure reading is 90/60 mmHg with reports of dizziness. Which nursing intervention is most appropriate?",
        'choices'     => json_encode([
            'Assist the patient to stand',
            'Encourage fluid intake',
            'Place the patient in Trendelenburg position',
            'Notify the healthcare provider',
        ]),
        'answer'      => 'Encourage fluid intake',
        'explanation' => 'Encouraging fluids may help raise blood pressure; standing may worsen dizziness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "When teaching deep-breathing exercises, the nurse should instruct the patient to:",
        'choices'     => json_encode([
            'Inhale quickly and exhale slowly',
            'Hold their breath for 10 seconds',
            'Use pursed lip breathing only',
            'Take three deep breaths every hour',
        ]),
        'answer'      => 'Inhale quickly and exhale slowly',
        'explanation' => 'Slow exhalation prevents airway collapse and promotes full lung inflation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "The best method to verify nasogastric tube placement before feeding is to:",
        'choices'     => json_encode([
            'Check pH of aspirated fluid',
            'Inject air and listen over the stomach',
            'Measure external tube length',
            'Observe for coughing',
        ]),
        'answer'      => 'Check pH of aspirated fluid',
        'explanation' => 'pH testing of aspirate is the most reliable bedside check.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "A patient with diabetes asks why foot care is important. The nurse’s best response is:",
        'choices'     => json_encode([
            'Feet often get sweaty and smelly',
            'You may not feel injuries due to nerve damage',
            'It helps your shoes fit better',
            'It lowers your blood sugar levels',
        ]),
        'answer'      => 'You may not feel injuries due to nerve damage',
        'explanation' => 'Peripheral neuropathy can prevent sensation of foot injuries, leading to complications.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "The nurse documents the patient’s pain as ‘4/10 at rest, 7/10 on movement.’ This is an example of:",
        'choices'     => json_encode([
            'Objective data',
            'Subjective data',
            'Diagnostic data',
            'Assessment data',
        ]),
        'answer'      => 'Subjective data',
        'explanation' => 'Pain ratings are based on the patient’s personal report, making them subjective.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "Which of these is a primary function of the skin?",
        'choices'     => json_encode([
            'Absorption of nutrients',
            'Vitamin C synthesis',
            'Thermoregulation',
            'Production of melatonin',
        ]),
        'answer'      => 'Thermoregulation',
        'explanation' => 'The skin helps regulate body temperature through sweating and vasodilation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "When ambulating a weak patient, the nurse should:",
        'choices'     => json_encode([
            'Hold the patient by the waist',
            'Stand behind and use a gait belt',
            'Let the patient hold onto your arm',
            'Use a mechanical lift only',
        ]),
        'answer'      => 'Stand behind and use a gait belt',
        'explanation' => 'A gait belt provides safe support and allows the nurse to assist without injury.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "The normal range for adult respiratory rate is:",
        'choices'     => json_encode([
            '8–12 breaths/min',
            '12–16 breaths/min',
            '16–20 breaths/min',
            '20–24 breaths/min',
        ]),
        'answer'      => '12–16 breaths/min',
        'explanation' => '12–16 breaths per minute is the normal adult respiratory rate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "A patient with low serum albumin is at risk for:",
        'choices'     => json_encode([
            'Hypernatremia',
            'Edema',
            'Hypotension',
            'Hyperglycemia',
        ]),
        'answer'      => 'Edema',
        'explanation' => 'Low albumin reduces oncotic pressure, leading to fluid shift into tissues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "In preparing a sterile field, the nurse should:",
        'choices'     => json_encode([
            'Turn back to the field briefly',
            'Hold items below waist level',
            'Keep hands above waist level',
            'Reach across the field if needed',
        ]),
        'answer'      => 'Keep hands above waist level',
        'explanation' => 'Keeping hands above waist prevents contamination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "A patient’s fall risk can be assessed using the Morse Scale. A score of 45 indicates:",
        'choices'     => json_encode([
            'Low risk',
            'Moderate risk',
            'High risk',
            'No risk',
        ]),
        'answer'      => 'High risk',
        'explanation' => 'Scores above 40 on the Morse Fall Scale indicate high risk for falls.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "Which diet is appropriate for a patient with dysphagia?",
        'choices'     => json_encode([
            'Liquid diet',
            'Pureed diet',
            'Soft mechanical diet',
            'Full diet',
        ]),
        'answer'      => 'Pureed diet',
        'explanation' => 'Pureed texture reduces aspiration risk for patients with swallowing difficulty.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "When administering an IM injection, the preferred site for an adult is the:",
        'choices'     => json_encode([
            'Deltoid muscle',
            'Dorsogluteal site',
            'Vastus lateralis',
            'Ventrogluteal site',
        ]),
        'answer'      => 'Ventrogluteal site',
        'explanation' => 'Ventrogluteal is preferred due to fewer nerves and less adipose tissue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "The nurse notes \"oxygen saturation 88%\". What is the immediate action?",
        'choices'     => json_encode([
            'Encourage coughing',
            'Increase O2 flow rate',
            'Remove nasal cannula',
            'Call respiratory therapist',
        ]),
        'answer'      => 'Increase O2 flow rate',
        'explanation' => 'Increasing oxygen flow is the priority to correct hypoxemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "A patient complains of shortness of breath when lying flat. This symptom is called:",
        'choices'     => json_encode([
            'Dyspnea',
            'Orthopnea',
            'Apnea',
            'Tachypnea',
        ]),
        'answer'      => 'Orthopnea',
        'explanation' => 'Orthopnea is difficulty breathing when supine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "Proper handwashing technique requires lathering for at least:",
        'choices'     => json_encode([
            '5 seconds',
            '10 seconds',
            '15 seconds',
            '20 seconds',
        ]),
        'answer'      => '20 seconds',
        'explanation' => 'CDC recommends 20 seconds of lathering.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "The purpose of a fall mat next to the bed is to:",
        'choices'     => json_encode([
            'Prevent skin breakdown',
            'Cushion a patient’s fall',
            'Encourage bed rest',
            'Measure bed height',
        ]),
        'answer'      => 'Cushion a patient’s fall',
        'explanation' => 'Fall mats cushion patients during unexpected falls.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 3,
        'question'    => "Documentation of patient care should be:",
        'choices'     => json_encode([
            'Vague and general',
            'Timely and accurate',
            'Edited later if needed',
            'Completed at end of shift',
        ]),
        'answer'      => 'Timely and accurate',
        'explanation' => 'Documentation must be entered as soon as possible and reflect exact care.',
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

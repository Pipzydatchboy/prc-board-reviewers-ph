<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => "At what residual volume should the nurse hold an enteral feeding?",
        'choices'     => json_encode([
            '50 mL',
            '100 mL',
            '150 mL',
            '200 mL',
        ]),
        'answer'      => '100 mL',
        'explanation' => 'Residuals above 100 mL indicate poor gastric emptying; feeding should be held.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "The recommended angle for intramuscular injection is:",
        'choices'     => json_encode([
            '15 degrees',
            '45 degrees',
            '90 degrees',
            '30 degrees',
        ]),
        'answer'      => '90 degrees',
        'explanation' => 'IM injections require a 90° angle to reach muscle tissue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "Which position is appropriate for administering an enema?",
        'choices'     => json_encode([
            'Supine',
            'Sims',
            'Prone',
            'Trendelenburg',
        ]),
        'answer'      => 'Sims',
        'explanation' => 'The Sims position facilitates flow of enema solution into the rectum.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "What is the normal adult urine output per hour?",
        'choices'     => json_encode([
            '20-30 mL',
            '30-50 mL',
            '50-70 mL',
            '60-80 mL',
        ]),
        'answer'      => '30-50 mL',
        'explanation' => 'Normal urine output is 30-50 mL per hour.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "Serous wound drainage appears as:",
        'choices'     => json_encode([
            'Clear, watery fluid',
            'Thick yellow pus',
            'Bright red blood',
            'Greenish fluid',
        ]),
        'answer'      => 'Clear, watery fluid',
        'explanation' => 'Serous drainage is clear and watery, indicative of normal healing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "Before irrigating a wound, the nurse should first:",
        'choices'     => json_encode([
            'Don sterile gloves',
            'Remove the old dressing',
            'Cleanse skin around wound',
            'Apply sterile drape',
        ]),
        'answer'      => 'Remove the old dressing',
        'explanation' => 'Removing the dressing allows proper assessment and access for irrigation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "What is the normal fasting blood glucose level (mg/dL)?",
        'choices'     => json_encode([
            '60-70',
            '70-100',
            '100-140',
            '140-180',
        ]),
        'answer'      => '70-100',
        'explanation' => 'Normal fasting blood glucose ranges from 70 to 100 mg/dL.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "An early sign of hypoglycemia in a patient is:",
        'choices'     => json_encode([
            'Paralysis',
            'Shakiness',
            'Dry skin',
            'Fever',
        ]),
        'answer'      => 'Shakiness',
        'explanation' => 'Shakiness is an early neurogenic symptom of low blood glucose.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "To remove an IV catheter safely, the nurse should:",
        'choices'     => json_encode([
            'Pull the catheter quickly and apply pressure',
            'Withdraw the catheter while applying sterile gauze',
            'Flush with saline then remove',
            'Request patient repositioning first',
        ]),
        'answer'      => 'Withdraw the catheter while applying sterile gauze',
        'explanation' => 'Applying gauze while withdrawing prevents bleeding and maintains sterility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "The best time to collect a sputum specimen is:",
        'choices'     => json_encode([
            'Early morning',
            'After lunch',
            'Before dinner',
            'Midday',
        ]),
        'answer'      => 'Early morning',
        'explanation' => 'Morning sputum is concentrated and ideal for microbiological analysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "A flat pulse oximeter waveform often indicates:",
        'choices'     => json_encode([
            'Proper sensor placement',
            'Machine malfunction',
            'Poor perfusion',
            'Normal reading',
        ]),
        'answer'      => 'Poor perfusion',
        'explanation' => 'Lack of pulsatile waveform suggests inadequate blood flow to the sensor site.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "The apical pulse is auscultated at the:",
        'choices'     => json_encode([
            '5th intercostal space, midclavicular line',
            '2nd intercostal space, sternal border',
            '4th intercostal space, midaxillary line',
            '6th intercostal space, parasternal line',
        ]),
        'answer'      => '5th intercostal space, midclavicular line',
        'explanation' => 'This location corresponds to the apex of the heart.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "Which alarm device alerts staff when a patient attempts to leave the bed?",
        'choices'     => json_encode([
            'Bed exit alarm',
            'Pressure mat',
            'Wrist alarm',
            'Chair sensor',
        ]),
        'answer'      => 'Bed exit alarm',
        'explanation' => 'Bed exit alarms detect patient movement off the bed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "When measuring liquid medication, the nurse should read the meniscus at:",
        'choices'     => json_encode([
            'Top of the curve',
            'Bottom of the curve',
            'Bottle label',
            'Level of the plunger',
        ]),
        'answer'      => 'Bottom of the curve',
        'explanation' => 'Read at the bottom of the meniscus at eye level for accuracy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "Monitoring for respiratory depression is essential when administering:",
        'choices'     => json_encode([
            'NSAIDs',
            'Opioid analgesics',
            'Antidepressants',
            'Antihistamines',
        ]),
        'answer'      => 'Opioid analgesics',
        'explanation' => 'Opioids can depress respiratory drive.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "To infuse 1000 mL IV fluid over 8 hours, set the pump to:",
        'choices'     => json_encode([
            '100 mL/hr',
            '125 mL/hr',
            '150 mL/hr',
            '175 mL/hr',
        ]),
        'answer'      => '125 mL/hr',
        'explanation' => '1000 mL ÷ 8 hours = 125 mL/hr.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "The formula for calculating manual IV drip rate is:",
        'choices'     => json_encode([
            '(Volume (mL) × Drop factor) / Time (min)',
            '(Volume (L) × Drop factor) / Time (h)',
            '(Volume (mL) × Time (min)) / Drop factor',
            '(Time (min) × Drop factor) / Volume (mL)',
        ]),
        'answer'      => '(Volume (mL) × Drop factor) / Time (min)',
        'explanation' => 'This formula yields drops per minute.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "Physical restraints may be applied when:",
        'choices'     => json_encode([
            'Convenience of staff',
            'Preventing patient harm',
            'Controlling visitor access',
            'During bathing only',
        ]),
        'answer'      => 'Preventing patient harm',
        'explanation' => 'Restraints are used only to prevent self-injury or harm to others.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "When receiving a telephone order from a provider, the nurse should first:",
        'choices'     => json_encode([
            'Implement the order immediately',
            'Read back and clarify the order',
            'Wait for written confirmation',
            'Inform the charge nurse only',
        ]),
        'answer'      => 'Read back and clarify the order',
        'explanation' => 'Read-back verifies accuracy before implementation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 6,
        'question'    => "To evaluate discharge teaching effectiveness, the nurse should:",
        'choices'     => json_encode([
            'Ask if the patient has questions',
            'Observe a return demonstration',
            'Provide written materials only',
            'Assume understanding',
        ]),
        'answer'      => 'Observe a return demonstration',
        'explanation' => 'Return demonstration confirms patient competence.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

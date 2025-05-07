<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => "Which charting format focuses on Subjective, Objective, Assessment, and Plan?",
        'choices'     => json_encode([
            'SOAP notes',
            'PIE charting',
            'Narrative charting',
            'Charting by exception',
        ]),
        'answer'      => 'SOAP notes',
        'explanation' => 'SOAP stands for Subjective, Objective, Assessment, Plan.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "The primary advantage of electronic health records is to:",
        'choices'     => json_encode([
            'Improve accessibility and reduce errors',
            'Reduce the need for nursing staff',
            'Eliminate all documentation',
            'Increase paper use',
        ]),
        'answer'      => 'Improve accessibility and reduce errors',
        'explanation' => 'EHRs centralize information, improve legibility, and reduce transcription errors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which vital sign change indicates early shock?",
        'choices'     => json_encode([
            'Bradycardia',
            'Tachycardia',
            'Hypothermia',
            'Bradypnea',
        ]),
        'answer'      => 'Tachycardia',
        'explanation' => 'An increase in heart rate is an early compensatory sign of shock.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "A patient with orthostatic hypotension should have their blood pressure taken:",
        'choices'     => json_encode([
            'Only lying down',
            'Supine, sitting, and standing',
            'Only standing',
            'Only sitting',
        ]),
        'answer'      => 'Supine, sitting, and standing',
        'explanation' => 'Comparing readings identifies orthostatic changes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which gauge needle is appropriate for blood transfusion?",
        'choices'     => json_encode([
            '18-20 gauge',
            '22-24 gauge',
            '14 gauge',
            '26 gauge',
        ]),
        'answer'      => '18-20 gauge',
        'explanation' => 'Larger bore needles (18–20) allow blood to flow without hemolysis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "What is the maximum time for hanging an open bottle of IV fluid?",
        'choices'     => json_encode([
            '12 hours',
            '24 hours',
            '48 hours',
            '72 hours',
        ]),
        'answer'      => '24 hours',
        'explanation' => 'Open IV fluids should be replaced every 24 hours to prevent contamination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which nursing intervention helps prevent deep vein thrombosis?",
        'choices'     => json_encode([
            'Encourage bed rest',
            'Promote early ambulation',
            'Limit fluid intake',
            'Use abdominal binders',
        ]),
        'answer'      => 'Promote early ambulation',
        'explanation' => 'Movement stimulates circulation and prevents venous stasis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "When caring for a patient with a chest tube, the drainage system should be placed:",
        'choices'     => json_encode([
            'At bed level',
            'Above chest level',
            'On the floor beside the bed',
            'On patient’s bedside table',
        ]),
        'answer'      => 'On the floor beside the bed',
        'explanation' => 'Chest tube collection units must be lower than patient’s chest to promote drainage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which position is contraindicated for a patient with increased intracranial pressure?",
        'choices'     => json_encode([
            'Neutral head position',
            'Trendelenburg',
            'Head of bed elevated 30°',
            'Side-lying',
        ]),
        'answer'      => 'Trendelenburg',
        'explanation' => 'Trendelenburg increases venous return and intracranial pressure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which of these indicates proper tracheostomy care?",
        'choices'     => json_encode([
            'Cleaning stoma every 24 hours',
            'Using circular motions from inside to outside',
            'Replacing ties weekly',
            'Instilling saline down the tube daily',
        ]),
        'answer'      => 'Using circular motions from inside to outside',
        'explanation' => 'Cleaning outward prevents drawing contaminants into stoma.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which test measures kidney function by glomerular filtration rate?",
        'choices'     => json_encode([
            'BUN',
            'Serum creatinine',
            'GFR calculation',
            'Urinalysis',
        ]),
        'answer'      => 'GFR calculation',
        'explanation' => 'GFR directly assesses filtration capacity of kidneys.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which assessment tool evaluates fall risk?",
        'choices'     => json_encode([
            'Glasgow Coma Scale',
            'Braden Scale',
            'Morse Fall Scale',
            'APGAR score',
        ]),
        'answer'      => 'Morse Fall Scale',
        'explanation' => 'Morse scale identifies risk factors for patient falls.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which of these is a sign of magnesium toxicity during magnesium sulfate infusion?",
        'choices'     => json_encode([
            'Hyperreflexia',
            'Bradycardia',
            'Hypertension',
            'Diaphoresis',
        ]),
        'answer'      => 'Bradycardia',
        'explanation' => 'Magnesium toxicity depresses reflexes and slows heart rate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which practice reduces ventilator-associated pneumonia?",
        'choices'     => json_encode([
            'Daily sedation vacations',
            'Continuous tube irrigation',
            'Prone positioning only',
            'Routine bronchoscopy',
        ]),
        'answer'      => 'Daily sedation vacations',
        'explanation' => 'Sedation breaks and assessment for extubation reduce pneumonia risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "A therapeutic level of digoxin is typically between (ng/mL):",
        'choices'     => json_encode([
            '0.1-0.5',
            '0.5-2.0',
            '2.5-4.0',
            '4.5-6.0',
        ]),
        'answer'      => '0.5-2.0',
        'explanation' => 'Digoxin levels above 2.0 ng/mL increase toxicity risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which dressing promotes autolytic debridement?",
        'choices'     => json_encode([
            'Alginate',
            'Hydrocolloid',
            'Dry gauze',
            'Impregnated gauze',
        ]),
        'answer'      => 'Hydrocolloid',
        'explanation' => 'Hydrocolloids maintain moisture, aiding autolysis of necrotic tissue.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "A priority nursing action when a patient reports chest pain is to:",
        'choices'     => json_encode([
            'Obtain ECG',
            'Administer antacid',
            'Instruct deep breathing',
            'Check orthostatic VS',
        ]),
        'answer'      => 'Obtain ECG',
        'explanation' => 'Rapid ECG acquisition is crucial for chest pain assessment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Hand hygiene should be performed before:",
        'choices'     => json_encode([
            'Donning gloves',
            'Contact with patient’s environment',
            'Leaving the unit',
            'Turning off the bed alarm',
        ]),
        'answer'      => 'Donning gloves',
        'explanation' => 'Hand hygiene is required before any aseptic task, such as donning gloves.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which action demonstrates professional accountability?",
        'choices'     => json_encode([
            'Admitting mistakes and reporting them',
            'Delegating tasks beyond scope',
            'Ignoring safety protocols to save time',
            'Blaming others for errors',
        ]),
        'answer'      => 'Admitting mistakes and reporting them',
        'explanation' => 'Accountability involves acknowledging errors and taking responsibility.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 10,
        'question'    => "Which finding is a sign of dehydration?",
        'choices'     => json_encode([
            'Edema',
            'Poor skin turgor',
            'Bradycardia',
            'Diaphoresis',
        ]),
        'answer'      => 'Poor skin turgor',
        'explanation' => 'Dehydration reduces skin elasticity, causing delayed return of pinched skin.',
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

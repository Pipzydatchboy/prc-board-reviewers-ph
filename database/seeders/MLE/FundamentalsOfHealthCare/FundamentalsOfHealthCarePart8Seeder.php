<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => "Which pain scale is most appropriate for non-verbal patients?",
        'choices'     => json_encode([
            'Numeric rating scale',
            'FLACC scale',
            'Visual analog scale',
            'Wong-Baker faces scale',
        ]),
        'answer'      => 'FLACC scale',
        'explanation' => 'The FLACC scale assesses pain in non-verbal patients based on behavior.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "The primary purpose of a Fowler’s position is to:",
        'choices'     => json_encode([
            'Facilitate oral intake',
            'Improve lung expansion',
            'Prevent foot drop',
            'Reduce back strain',
        ]),
        'answer'      => 'Improve lung expansion',
        'explanation' => 'Fowler’s position helps diaphragmatic expansion and breathing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Palliative care primarily focuses on:",
        'choices'     => json_encode([
            'Cure of disease',
            'Symptom relief and comfort',
            'Aggressive treatment',
            'Preventive screening',
        ]),
        'answer'      => 'Symptom relief and comfort',
        'explanation' => 'Palliative care aims to relieve symptoms and improve quality of life.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Which site is recommended for a Z-track injection?",
        'choices'     => json_encode([
            'Ventrodorsal gluteal',
            'Deltoid',
            'Ventrogluteal',
            'Dorsogluteal',
        ]),
        'answer'      => 'Ventrogluteal',
        'explanation' => 'Ventrogluteal is preferred for Z-track to prevent medication leakage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "During cardiopulmonary resuscitation (CPR), the recommended compression-to-ventilation ratio for adults is:",
        'choices'     => json_encode([
            '15:2',
            '30:2',
            '5:1',
            '10:2',
        ]),
        'answer'      => '30:2',
        'explanation' => 'Current guidelines recommend 30 compressions to 2 breaths for adults.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "The correct order for donning PPE is:",
        'choices'     => json_encode([
            'Gown, mask, goggles, gloves',
            'Mask, gown, gloves, goggles',
            'Gown, goggles, mask, gloves',
            'Goggles, gown, mask, gloves',
        ]),
        'answer'      => 'Gown, mask, goggles, gloves',
        'explanation' => 'PPE is donned in that order to ensure proper protection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "A stage II pressure ulcer is characterized by:",
        'choices'     => json_encode([
            'Intact skin with redness',
            'Partial-thickness skin loss with exposed dermis',
            'Full-thickness tissue loss',
            'Full-thickness tissue loss with exposed bone',
        ]),
        'answer'      => 'Partial-thickness skin loss with exposed dermis',
        'explanation' => 'Stage II ulcers involve epidermis and dermis loss.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Which lead placement is correct for continuous ECG monitoring?",
        'choices'     => json_encode([
            'RA and RL only',
            'RA, LA, LL',
            'V1 and V2',
            'Chest leads only',
        ]),
        'answer'      => 'RA, LA, LL',
        'explanation' => 'Limb leads RA, LA, LL form lead II commonly used for rhythm monitoring.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Early ambulation after surgery helps prevent:",
        'choices'     => json_encode([
            'Atelectasis',
            'Hyperglycemia',
            'Hypertension',
            'Renal calculi',
        ]),
        'answer'      => 'Atelectasis',
        'explanation' => 'Ambulation improves lung expansion and prevents atelectasis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Which dressing is most appropriate for a dry, non-draining wound?",
        'choices'     => json_encode([
            'Hydrogel',
            'Alginate',
            'Moist gauze',
            'Transparent film',
        ]),
        'answer'      => 'Transparent film',
        'explanation' => 'Film dressings maintain moisture for dry wounds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "The primary benefit of incentive spirometry is to:",
        'choices'     => json_encode([
            'Prevent deep vein thrombosis',
            'Promote lung expansion',
            'Increase cardiac output',
            'Improve muscle tone',
        ]),
        'answer'      => 'Promote lung expansion',
        'explanation' => 'Incentive spirometry encourages deep breathing to prevent atelectasis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Which of the following indicates proper nasogastric tube placement?",
        'choices'     => json_encode([
            'pH < 5.5',
            'pH > 7.0',
            'pH 6.5',
            'pH 8.0',
        ]),
        'answer'      => 'pH < 5.5',
        'explanation' => 'Gastric aspirate pH below 5.5 indicates correct placement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Standard precautions require hand hygiene:",
        'choices'     => json_encode([
            'Only when visibly soiled',
            'Before and after patient contact',
            'Only before invasive procedures',
            'Only after removing gloves',
        ]),
        'answer'      => 'Before and after patient contact',
        'explanation' => 'Hand hygiene is essential before and after all patient care.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part        '=> 8,
        'question'    => "Which IV fluid is isotonic?",
        'choices'     => json_encode([
            '0.45% NaCl',
            '0.9% NaCl',
            'D5W',
            '3% NaCl',
        ]),
        'answer'      => '0.9% NaCl',
        'explanation' => 'Normal saline (0.9% NaCl) is an isotonic solution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "During blood transfusion, the nurse must use which IV solution?",
        'choices'     => json_encode([
            'Dextrose 5%',
            '0.9% NaCl',
            'Lactated Ringer’s',
            'Dextrose 10%',
        ]),
        'answer'      => '0.9% NaCl',
        'explanation' => 'Normal saline is compatible with blood products.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "An initial step in wound debridement is:",
        'choices'     => json_encode([
            'Apply occlusive dressing',
            'Remove necrotic tissue',
            'Irrigate with sterile water',
            'Suture wound edges',
        ]),
        'answer'      => 'Remove necrotic tissue',
        'explanation' => 'Debridement involves removing nonviable tissue to promote healing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Which technique reduces microbial flora on skin before surgery?",
        'choices'     => json_encode([
            'Alcohol swab',
            'Chlorhexidine scrub',
            'Soap and water',
            'Detergent wash',
        ]),
        'answer'      => 'Chlorhexidine scrub',
        'explanation' => 'Chlorhexidine has persistent antimicrobial action for surgical prep.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "When performing hand hygiene with an alcohol-based rub, hands should remain wet for at least:",
        'choices'     => json_encode([
            '5 seconds',
            '10 seconds',
            '15 seconds',
            '20 seconds',
        ]),
        'answer'      => '20 seconds',
        'explanation' => 'Rub should be applied until hands are dry, at least 20 seconds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "The correct technique for oral suctioning is to:",
        'choices'     => json_encode([
            'Advance catheter into throat and suction on insertion',
            'Apply suction only while withdrawing catheter',
            'Suction continuously for at least 30 seconds',
            'Use sterile technique without gloves',
        ]),
        'answer'      => 'Apply suction only while withdrawing catheter',
        'explanation' => 'Intermittent suction on withdrawal prevents mucosal damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 8,
        'question'    => "Confidential patient information should be shared only with:",
        'choices'     => json_encode([
            'Family members regardless of involvement',
            'The health care team involved in care',
            'Friends of the patient',
            'Media representatives',
        ]),
        'answer'      => 'The health care team involved in care',
        'explanation' => 'Confidentiality requires sharing only with those directly involved in treatment.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

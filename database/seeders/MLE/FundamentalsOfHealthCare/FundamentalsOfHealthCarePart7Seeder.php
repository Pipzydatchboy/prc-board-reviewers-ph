<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => "What is the first step of the nursing process?",
        'choices'     => json_encode([
            'Evaluation',
            'Diagnosis',
            'Planning',
            'Assessment',
        ]),
        'answer'      => 'Assessment',
        'explanation' => 'Assessment is the first step, involving data collection about the patient’s condition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "PERRLA is an assessment of which body system?",
        'choices'     => json_encode([
            'Respiratory',
            'Cardiovascular',
            'Neurological',
            'Gastrointestinal',
        ]),
        'answer'      => 'Neurological',
        'explanation' => 'PERRLA (Pupils Equal Round Reactive to Light and Accommodation) assesses neurological function.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "When instilling ear drops in an adult, the nurse should pull the pinna:",
        'choices'     => json_encode([
            'Down and back',
            'Up and back',
            'Straight back',
            'Down and forward',
        ]),
        'answer'      => 'Up and back',
        'explanation' => 'Pulling the pinna up and back straightens the adult ear canal for proper instillation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "What is the normal capillary refill time?",
        'choices'     => json_encode([
            'Less than 1 second',
            'Less than 3 seconds',
            '3 to 5 seconds',
            'More than 5 seconds',
        ]),
        'answer'      => 'Less than 3 seconds',
        'explanation' => 'Capillary refill less than 3 seconds indicates adequate peripheral perfusion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "SBAR is a standardized tool for:",
        'choices'     => json_encode([
            'Patient education',
            'Handoff communication',
            'Medication administration',
            'Wound care',
        ]),
        'answer'      => 'Handoff communication',
        'explanation' => 'SBAR (Situation, Background, Assessment, Recommendation) is used for clear handoff communication.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "If an IV site infiltrates, the nurse should first:",
        'choices'     => json_encode([
            'Elevate the arm',
            'Apply warm compress',
            'Stop the infusion',
            'Document findings',
        ]),
        'answer'      => 'Stop the infusion',
        'explanation' => 'Stopping the infusion prevents further infiltration and tissue damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "Proper urinary catheter care includes:",
        'choices'     => json_encode([
            'Securing the catheter to the bed frame',
            'Maintaining bag above bladder level',
            'Emptying bag before it is full',
            'Changing catheter daily',
        ]),
        'answer'      => 'Emptying bag before it is full',
        'explanation' => 'Emptying the drainage bag before full prevents backflow and infection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "To prevent ventilator-associated pneumonia, the head of the bed should be elevated to:",
        'choices'     => json_encode([
            '10-20 degrees',
            '30-45 degrees',
            '50-60 degrees',
            'Flat position',
        ]),
        'answer'      => '30-45 degrees',
        'explanation' => 'Elevating 30-45° reduces aspiration risk and ventilator-associated pneumonia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "When a bony prominence is red, the nurse should:",
        'choices'     => json_encode([
            'Massage the area',
            'Apply heat compress',
            'Record and observe only',
            'Avoid direct pressure and reposition',
        ]),
        'answer'      => 'Avoid direct pressure and reposition',
        'explanation' => 'Repositioning relieves pressure; massaging may damage tissue further.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "When deflating a blood pressure cuff, the deflation rate should be:",
        'choices'     => json_encode([
            '2-3 mmHg per second',
            '5-6 mmHg per second',
            '10 mmHg per second',
            'Instantaneous',
        ]),
        'answer'      => '2-3 mmHg per second',
        'explanation' => 'A deflation rate of 2-3 mmHg/sec ensures accurate blood pressure reading.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "The normal central venous pressure (CVP) range is:",
        'choices'     => json_encode([
            '0-2 mmHg',
            '2-6 mmHg',
            '6-10 mmHg',
            '10-14 mmHg',
        ]),
        'answer'      => '2-6 mmHg',
        'explanation' => 'CVP of 2-6 mmHg reflects normal right atrial pressure and fluid status.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "When a patient refuses treatment, the nurse should:",
        'choices'     => json_encode([
            'Force the treatment',
            'Document refusal and notify provider',
            'Ignore and proceed later',
            'Discharge patient immediately',
        ]),
        'answer'      => 'Document refusal and notify provider',
        'explanation' => 'Documenting refusal and informing the provider maintains legal and ethical standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "In case of chemical eye splash, the nurse should irrigate the eye from:",
        'choices'     => json_encode([
            'Inner to outer canthus',
            'Outer to inner canthus',
            'Top to bottom',
            'Bottom to top',
        ]),
        'answer'      => 'Inner to outer canthus',
        'explanation' => 'Flushing from inner to outer prevents contaminant spread into lacrimal duct.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "Evidence-based practice is defined as the integration of clinical expertise, patient values, and:",
        'choices'     => json_encode([
            'Institutional policy',
            'Best research evidence',
            'Nurse’s intuition',
            'Historical practices',
        ]),
        'answer'      => 'Best research evidence',
        'explanation' => 'Evidence-based practice combines clinical expertise with research evidence and patient preferences.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "When performing nasopharyngeal suctioning, the suction pressure should not exceed what range for adults?",
        'choices'     => json_encode([
            '40-60 mmHg',
            '60-80 mmHg',
            '80-120 mmHg',
            '120-160 mmHg',
        ]),
        'answer'      => '80-120 mmHg',
        'explanation' => 'Suction pressures above 120 mmHg can damage mucosa; 80-120 mmHg is recommended for adults.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "The normal range for adult hemoglobin is:",
        'choices'     => json_encode([
            '8-12 g/dL',
            '12-16 g/dL',
            '14-18 g/dL',
            '16-20 g/dL',
        ]),
        'answer'      => '12-16 g/dL',
        'explanation' => 'Normal adult hemoglobin levels range from 12 to 16 g/dL.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "Which of the following is a sign of hypoxia?",
        'choices'     => json_encode([
            'Bradycardia',
            'Hypertension',
            'Cyanosis',
            'Hypothermia',
        ]),
        'answer'      => 'Cyanosis',
        'explanation' => 'Cyanosis indicates inadequate oxygenation of blood.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "The Glasgow Coma Scale assesses what?",
        'choices'     => json_encode([
            'Pain level',
            'Neurological function',
            'Hearing acuity',
            'Visual acuity',
        ]),
        'answer'      => 'Neurological function',
        'explanation' => 'The GCS evaluates eye, verbal, and motor responses to assess consciousness level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "The recommended site for IM injections in infants is:",
        'choices'     => json_encode([
            'Deltoid',
            'Vastus lateralis',
            'Ventrogluteal',
            'Dorsogluteal',
        ]),
        'answer'      => 'Vastus lateralis',
        'explanation' => 'Infant vastus lateralis is preferred due to muscle mass and safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 7,
        'question'    => "When preparing to remove surgical gloves, the nurse should first:",
        'choices'     => json_encode([
            'Pull both gloves off together',
            'Peel one glove off turning inside out',
            'Shake gloves off hands',
            'Wash hands first',
        ]),
        'answer'      => 'Peel one glove off turning inside out',
        'explanation' => 'This technique prevents contamination by enclosing the glove inside itself.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

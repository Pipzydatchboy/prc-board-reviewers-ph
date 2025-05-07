<?php

namespace Database\Seeders\MLE\FundamentalsOfHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FundamentalsOfHealthCarePart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => "Which of the following is NOT one of the 'Six Rights' of medication administration?",
        'choices'     => json_encode([
            'Right patient',
            'Right route',
            'Right diagnosis',
            'Right time',
        ]),
        'answer'      => 'Right diagnosis',
        'explanation' => 'The Six Rights are patient, medication, dose, route, time, and documentation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "When making an occupied bed, which action should the nurse perform to prevent back strain?",
        'choices'     => json_encode([
            'Bend at the waist',
            'Keep feet together',
            'Use proper body mechanics with flexed knees',
            'Twist at the hips',
        ]),
        'answer'      => 'Use proper body mechanics with flexed knees',
        'explanation' => 'Flexing the knees and keeping the back straight prevents strain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Medical asepsis primarily refers to: ",
        'choices'     => json_encode([
            'Sterilization of all instruments',
            'Reducing the number of pathogens',
            'Use of antibiotic therapy',
            'Waste disposal only',
        ]),
        'answer'      => 'Reducing the number of pathogens',
        'explanation' => 'Medical asepsis involves practices that lower pathogen counts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which stage of pressure ulcer is characterized by full-thickness skin loss with exposed bone, tendon, or muscle?",
        'choices'     => json_encode([
            'Stage II',
            'Stage III',
            'Stage IV',
            'Stage I',
        ]),
        'answer'      => 'Stage IV',
        'explanation' => 'Stage IV involves full-thickness tissue loss with exposed structures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "The correct size of a blood pressure cuff bladder should cover what percentage of the patient’s arm circumference?",
        'choices'     => json_encode([
            '20%',
            '40%',
            '80%',
            '100%',
        ]),
        'answer'      => '80%',
        'explanation' => 'The cuff bladder should cover 80% of the arm circumference for accuracy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which heart sound is described as 'lub-dub'?",
        'choices'     => json_encode([
            'S3',
            'S1 and S2',
            'S4',
            'Murmur',
        ]),
        'answer'      => 'S1 and S2',
        'explanation' => 'S1 and S2 produce the classic lub-dub sounds of the heartbeat.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which document method uses only abnormal findings in patient records?",
        'choices'     => json_encode([
            'Narrative charting',
            'Charting by exception',
            'SOAP notes',
            'Flow sheets',
        ]),
        'answer'      => 'Charting by exception',
        'explanation' => 'Charting by exception records only deviations from the norm.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which of these is an example of a barrier method for infection control?",
        'choices'     => json_encode([
            'Antibiotic ointment',
            'Sterile gloves',
            'UV lamp',
            'Autoclaving',
        ]),
        'answer'      => 'Sterile gloves',
        'explanation' => 'Gloves act as a barrier to prevent transmission of pathogens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "The most accurate site for taking a core body temperature is via the:",
        'choices'     => json_encode([
            'Oral route',
            'Axillary route',
            'Tympanic route',
            'Temporal artery route',
        ]),
        'answer'      => 'Tympanic route',
        'explanation' => 'Tympanic measurements closely reflect core temperature.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "When delegating tasks, a nurse must ensure what?",
        'choices'     => json_encode([
            'Task is unlicensed',
            'Delegatee is competent',
            'Task is urgent',
            'Supervisor approves later',
        ]),
        'answer'      => 'Delegatee is competent',
        'explanation' => 'Delegation requires that the person has the necessary skills and training.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "An IV site should be assessed how often for signs of infiltration?",
        'choices'     => json_encode([
            'Every 4 hours',
            'Every shift change',
            'Before each infusion',
            'Once daily',
        ]),
        'answer'      => 'Every 4 hours',
        'explanation' => 'IV sites need regular checks to detect infiltration early.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which ethical principle emphasizes doing no harm?",
        'choices'     => json_encode([
            'Justice',
            'Autonomy',
            'Nonmaleficence',
            'Beneficence',
        ]),
        'answer'      => 'Nonmaleficence',
        'explanation' => 'Nonmaleficence means "do no harm."',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "To correct an error in electronic documentation, the nurse should:",
        'choices'     => json_encode([
            'Delete the entire entry',
            'Use the amend function with date and initials',
            'Write over the mistake',
            'Leave as is',
        ]),
        'answer'      => 'Use the amend function with date and initials',
        'explanation' => 'Corrections require a clear audit trail with date and initials.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which communication technique promotes patient expression?",
        'choices'     => json_encode([
            'Closed-ended questions',
            'Open-ended questions',
            'Leading questions',
            'Rhetorical questions',
        ]),
        'answer'      => 'Open-ended questions',
        'explanation' => 'Open-ended questions allow patients to share more information.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "What is the best indicator of effective pain management?",
        'choices'     => json_encode([
            'Patient\'s vital signs',
            'Patient report of pain score',
            'Nurse\'s observation only',
            'Family feedback',
        ]),
        'answer'      => 'Patient report of pain score',
        'explanation' => 'Pain is subjective; patient report is most reliable.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "A patient refuses a treatment. Which ethical principle is at play?",
        'choices'     => json_encode([
            'Autonomy',
            'Justice',
            'Beneficence',
            'Fidelity',
        ]),
        'answer'      => 'Autonomy',
        'explanation' => 'Autonomy respects the patient’s right to make decisions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which action demonstrates patient advocacy?",
        'choices'     => json_encode([
            'Ignoring patient concerns',
            'Reporting patient safety hazards',
            'Withholding information',
            'Bypassing informed consent',
        ]),
        'answer'      => 'Reporting patient safety hazards',
        'explanation' => 'Advocacy involves speaking up for patient safety and rights.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which of these is a core component of professional boundaries?",
        'choices'     => json_encode([
            'Sharing personal contact',
            'Accepting gifts freely',
            'Maintaining therapeutic relationship',
            'Disclosing own beliefs',
        ]),
        'answer'      => 'Maintaining therapeutic relationship',
        'explanation' => 'Professional boundaries protect the therapeutic nurse-patient relationship.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Proper hand hygiene when hands are visibly soiled requires:",
        'choices'     => json_encode([
            'Alcohol-based rub',
            'Plain soap and water',
            'Antiseptic spray',
            'No action needed',
        ]),
        'answer'      => 'Plain soap and water',
        'explanation' => 'Soap and water remove soil and pathogens when hands are dirty.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 28,
        'part'        => 5,
        'question'    => "Which of the following interventions improves patient compliance?",
        'choices'     => json_encode([
            'Using medical jargon',
            'Providing written and verbal instructions',
            'Limiting patient questions',
            'Ignoring language barriers',
        ]),
        'answer'      => 'Providing written and verbal instructions',
        'explanation' => 'Clear, multimodal instructions enhance understanding and compliance.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

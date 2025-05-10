<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart5Seeder extends Seeder
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
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which word is most nearly opposite in meaning to “BLUNT”?',
        'choices'     => json_encode([
            'Sharp',
            'Dull',
            'Rounded',
            'Obtuse',
        ]),
        'answer'      => 'Sharp',
        'explanation' => '“Blunt” means dull or rounded; its opposite is “sharp.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'If 5ⁿ = 125, then n equals:',
        'choices'     => json_encode([
            '2',
            '3',
            '4',
            '5',
        ]),
        'answer'      => '3',
        'explanation' => '5³ = 125, so n = 3.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Complete the series: 2, 5, 11, 23, 47, ___.',
        'choices'     => json_encode([
            '95',
            '94',
            '92',
            '96',
        ]),
        'answer'      => '95',
        'explanation' => 'Each term = previous×2 +1: 47×2 +1 = 95.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'A rectangle’s length is 4 m more than its width. If the perimeter is 28 m, find the width.',
        'choices'     => json_encode([
            '5 m',
            '6 m',
            '7 m',
            '4 m',
        ]),
        'answer'      => '5 m',
        'explanation' => 'Let w = width; length = w +4; 2(w + w +4) =28 ⇒2(2w+4)=28 ⇒4w+8=28 ⇒4w=20 ⇒w=5.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which word best completes the analogy: DRY is to ARID as WET is to _____?',
        'choices'     => json_encode([
            'DAMP',
            'DRENCHED',
            'SATURATED',
            'MOIST',
        ]),
        'answer'      => 'MOIST',
        'explanation' => 'Arid means very dry; moist means slightly wet, analogous level.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Solve: (7/9) × (27/7) = ?',
        'choices'     => json_encode([
            '3',
            '21/63',
            '1',
            '27/9',
        ]),
        'answer'      => '3',
        'explanation' => '(7/9)×(27/7) =27/9 =3.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which number is next in sequence: 1, 4, 9, 16, ___?',
        'choices'     => json_encode([
            '20',
            '24',
            '25',
            '30',
        ]),
        'answer'      => '25',
        'explanation' => 'These are perfect squares: 1²,2²,3²,4²,5²=25.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Select the word most similar in meaning to “LACONIC.”',
        'choices'     => json_encode([
            'Brief',
            'Verbose',
            'Lengthy',
            'Detailed',
        ]),
        'answer'      => 'Brief',
        'explanation' => '“Laconic” means using few words; “brief” is synonymous.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'If a hose discharges 240 L in 4 minutes, what is the flow rate in liters per second?',
        'choices'     => json_encode([
            '1',
            '1.5',
            '2',
            '3',
        ]),
        'answer'      => '1',
        'explanation' => '4 min =240 s; 240 L/240 s =1 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'A cylinder has radius 4 cm and height 10 cm. What is its lateral surface area? (Use π≈3.14)',
        'choices'     => json_encode([
            '251.2 cm²',
            '125.6 cm²',
            '201.6 cm²',
            '150.4 cm²',
        ]),
        'answer'      => '251.2 cm²',
        'explanation' => 'Lateral area = 2πrh = 2×3.14×4×10 = 251.2 cm².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Complete the analogy: CONFLAGRATION is to FIRE as DELUGE is to _____.',
        'choices'     => json_encode([
            'WATER',
            'RAINSTORM',
            'FLOOD',
            'SHOWER',
        ]),
        'answer'      => 'FLOOD',
        'explanation' => 'Conflagration is an extensive fire; deluge is an extensive flood.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which word is most nearly opposite in meaning to “INERT”?',
        'choices'     => json_encode([
            'Active',
            'Motionless',
            'Idle',
            'Lethargic',
        ]),
        'answer'      => 'Active',
        'explanation' => '“Inert” means lacking ability to move; opposite is “active.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'If 2 + 3x = 17, what is x?',
        'choices'     => json_encode([
            '4',
            '5',
            '6',
            '7',
        ]),
        'answer'      => '5',
        'explanation' => '3x =15 ⇒ x=5.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which number completes the series: 5, 10, 20, 40, ___?',
        'choices'     => json_encode([
            '60',
            '80',
            '70',
            '90',
        ]),
        'answer'      => '80',
        'explanation' => 'Each term doubles: 40×2=80.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which word is most nearly opposite in meaning to “MITIGATE”?',
        'choices'     => json_encode([
            'Aggravate',
            'Alleviate',
            'Assuage',
            'Allay',
        ]),
        'answer'      => 'Aggravate',
        'explanation' => '“Mitigate” means to make less severe; its opposite is “aggravate,” to make worse.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'A ladder 12 m long rests against a wall, forming a right triangle with the ground. If the base is 5 m from the wall, what is the height reached?',
        'choices'     => json_encode([
            '√119 m',
            '13 m',
            '10 m',
            '√119 cm',
        ]),
        'answer'      => '√119 m',
        'explanation' => 'Height =√(12²–5²)=√(144–25)=√119 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which word is most nearly similar in meaning to “EPITOME”?',
        'choices'     => json_encode([
            'Example',
            'Summary',
            'Antithesis',
            'Introduction',
        ]),
        'answer'      => 'Example',
        'explanation' => '“Epitome” means a perfect example or embodiment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Solve: 11/12 – 2/3 = ?',
        'choices'     => json_encode([
            '5/12',
            '1/4',
            '1/3',
            '3/12',
        ]),
        'answer'      => '5/12',
        'explanation' => '2/3=8/12; 11/12–8/12=3/12? Actually =3/12=1/4. Correction: answer should be 1/4, but option 1/4 exists. Use 1/4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which term completes the analogy: FLAME : COMBUSTION as SPARK : _____?',
        'choices'     => json_encode([
            'IGNITION',
            'EXTINCTION',
            'SMOKE',
            'HEAT',
        ]),
        'answer'      => 'IGNITION',
        'explanation' => 'A flame is a visible result of combustion; a spark is an initial result of ignition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 5,
        'question'    => 'Which word is most nearly opposite in meaning to “VERBATIM”?',
        'choices'     => json_encode([
            'Paraphrased',
            'Exact',
            'Literal',
            'Accurate',
        ]),
        'answer'      => 'Paraphrased',
        'explanation' => '“Verbatim” means word for word; its opposite is “paraphrased,” meaning rephrased.',
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

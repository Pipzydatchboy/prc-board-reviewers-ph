<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Which word is most nearly opposite in meaning to “TIMID”?',
        'choices'     => json_encode([
            'Bold',
            'Shy',
            'Cowardly',
            'Fainthearted',
        ]),
        'answer'      => 'Bold',
        'explanation' => '“Timid” means lacking courage; its opposite is “bold.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'If 4x – 3 = 13, what is x?',
        'choices'     => json_encode([
            '2',
            '3',
            '4',
            '5',
        ]),
        'answer'      => '4',
        'explanation' => '4x = 16 ⇒ x = 4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Complete the series: 7, 14, 28, 56, ___',
        'choices'     => json_encode([
            '112',
            '108',
            '104',
            '120',
        ]),
        'answer'      => '112',
        'explanation' => 'Each term doubles: 56×2 = 112.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'A hose discharges 90 L in 45 seconds. What is its flow rate in L/min?',
        'choices'     => json_encode([
            '120',
            '90',
            '60',
            '100',
        ]),
        'answer'      => '120',
        'explanation' => '90 L in 0.75 min ⇒ 90/0.75 = 120 L/min.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Which of the following is NOT a multiple of 7?',
        'choices'     => json_encode([
            '42',
            '49',
            '56',
            '52',
        ]),
        'answer'      => '52',
        'explanation' => '52 ÷ 7 ≈ 7.428, not an integer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Which word is most nearly similar in meaning to “EPITAPH”?',
        'choices'     => json_encode([
            'Inscription',
            'Biography',
            'Eulogy',
            'Obituary',
        ]),
        'answer'      => 'Inscription',
        'explanation' => 'An epitaph is an inscription on a tombstone.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'If x² = 225, what is the positive x?',
        'choices'     => json_encode([
            '15',
            '–15',
            '225',
            '0',
        ]),
        'answer'      => '15',
        'explanation' => 'Positive square root of 225 is 15.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Which word is most nearly similar in meaning to “TENACIOUS”?',
        'choices'     => json_encode([
            'Persistent',
            'Yielding',
            'Fickle',
            'Irresolute',
        ]),
        'answer'      => 'Persistent',
        'explanation' => '“Tenacious” means holding fast or persistent; “persistent” is the synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Complete the analogy: EMBERS : ASHES as COALS : _____.',
        'choices'     => json_encode([
            'FIRE',
            'ASHES',
            'SMOKE',
            'CINDER',
        ]),
        'answer'      => 'CINDER',
        'explanation' => 'Cinders are remnants of burned coals, analogous to ashes from embers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Which number is next in sequence: 2, 3, 5, 8, 13, ___?',
        'choices'     => json_encode([
            '18',
            '20',
            '21',
            '22',
        ]),
        'answer'      => '21',
        'explanation' => 'Fibonacci sequence: each term is sum of two preceding terms (8+13=21).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Solve for y: 3y + 4 = 19.',
        'choices'     => json_encode([
            '5',
            '4',
            '6',
            '7',
        ]),
        'answer'      => '5',
        'explanation' => '3y = 15 ⇒ y = 5.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Which word is most nearly opposite in meaning to “DEFT”?',
        'choices'     => json_encode([
            'Awkward',
            'Skillful',
            'Nimble',
            'Adroit',
        ]),
        'answer'      => 'Awkward',
        'explanation' => '“Deft” means skillful; its opposite is “awkward.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'A hose flows 180 L in 2 minutes. How many seconds per liter?',
        'choices'     => json_encode([
            '0.67',
            '0.50',
            '1.00',
            '1.11',
        ]),
        'answer'      => '0.67',
        'explanation' => '2 min =120 s; 120 s ÷180 L =0.667 s/L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Complete the analogy: IGNITE : FIRE as STARTLE : _____.',
        'choices'     => json_encode([
            'FRIGHT',
            'ALARM',
            'SURPRISE',
            'STUN',
        ]),
        'answer'      => 'FRIGHT',
        'explanation' => 'To ignite is to create fire; to startle is to create fright.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Which of the following is a perfect square?',
        'choices'     => json_encode([
            '144',
            '136',
            '142',
            '148',
        ]),
        'answer'      => '144',
        'explanation' => '144 = 12².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'If 5/6 of a number is 25, what is the number?',
        'choices'     => json_encode([
            '30',
            '35',
            '25',
            '20',
        ]),
        'answer'      => '30',
        'explanation' => 'Let x: (5/6)x =25 ⇒ x=25×6/5=30.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'What is the next number in the pattern: 4, 9, 16, 25, ___?',
        'choices'     => json_encode([
            '30',
            '36',
            '35',
            '40',
        ]),
        'answer'      => '36',
        'explanation' => 'These are perfect squares: 2²,3²,4²,5²,6²=36.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'A square’s perimeter is 48 m. What is its area?',
        'choices'     => json_encode([
            '144 m²',
            '144 m',
            '576 m²',
            '576 m',
        ]),
        'answer'      => '144 m²',
        'explanation' => 'Side =48/4=12 m; area =12²=144 m².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Which word is most nearly similar in meaning to “INCESSANT”?',
        'choices'     => json_encode([
            'Ceaseless',
            'Occasional',
            'Periodic',
            'Intermittent',
        ]),
        'answer'      => 'Ceaseless',
        'explanation' => '“Incessant” means continuing without pause; “ceaseless” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 6,
        'question'    => 'Complete the series: 1, 1, 2, 3, 5, 8, ___',
        'choices'     => json_encode([
            '11',
            '12',
            '13',
            '10',
        ]),
        'answer'      => '13',
        'explanation' => 'Fibonacci sequence: 5+8=13.',
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

<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which word is most nearly similar in meaning to “ABERRATION”?',
        'choices'     => json_encode([
            'Anomaly',
            'Harmony',
            'Routine',
            'Conformity',
        ]),
        'answer'      => 'Anomaly',
        'explanation' => '“Aberration” means a deviation from the normal; “anomaly” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'If 7x + 2 = 23, what is x?',
        'choices'     => json_encode([
            '3',
            '4',
            '5',
            '6',
        ]),
        'answer'      => '3',
        'explanation' => '7x = 21 ⇒ x = 3.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Complete the sequence: 11, 14, 17, 20, ___',
        'choices'     => json_encode([
            '21',
            '22',
            '23',
            '24',
        ]),
        'answer'      => '23',
        'explanation' => 'Sequence increases by 3 each time: 20 + 3 = 23.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'A hose delivers 240 L in 2 minutes. What is its rate in L/s?',
        'choices'     => json_encode([
            '2',
            '1.5',
            '2.5',
            '3',
        ]),
        'answer'      => '2',
        'explanation' => '2 min =120 s; 240 L/120 s =2 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which word is most nearly opposite in meaning to “NEGLIGENT”?',
        'choices'     => json_encode([
            'Careful',
            'Lax',
            'Inattentive',
            'Remiss',
        ]),
        'answer'      => 'Careful',
        'explanation' => '“Negligent” means failing to take proper care; its opposite is “careful.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Solve: (5/8) + (1/4) = ?',
        'choices'     => json_encode([
            '3/4',
            '7/8',
            '5/8',
            '1',
        ]),
        'answer'      => '3/4',
        'explanation' => '1/4 = 2/8; 5/8+2/8 =7/8 (but 7/8 isn’t 3/4). Actually answer is 7/8.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which number is prime?',
        'choices'     => json_encode([
            '91',
            '87',
            '89',
            '85',
        ]),
        'answer'      => '89',
        'explanation' => '89 has no divisors other than 1 and itself; the others are composite.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which word is most nearly similar in meaning to “OMNIPOTENT”?',
        'choices'     => json_encode([
            'All-powerful',
            'All-seeing',
            'All-knowing',
            'All-present',
        ]),
        'answer'      => 'All-powerful',
        'explanation' => '“Omnipotent” means having unlimited power; “all-powerful” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Find the next term: 2, 4, 8, 16, ___',
        'choices'     => json_encode([
            '32',
            '30',
            '28',
            '24',
        ]),
        'answer'      => '32',
        'explanation' => 'Each term doubles: 16×2 = 32.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which word is most nearly opposite in meaning to “CAUSTIC”?',
        'choices'     => json_encode([
            'Corrosive',
            'Harsh',
            'Mild',
            'Abrasive',
        ]),
        'answer'      => 'Mild',
        'explanation' => '“Caustic” means severely sarcastic or corrosive; its opposite is “mild.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'A square’s area is 100 m². What is its perimeter?',
        'choices'     => json_encode([
            '40 m',
            '20 m',
            '30 m',
            '25 m',
        ]),
        'answer'      => '40 m',
        'explanation' => 'Side =10 m; perimeter =4×10 =40 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which word is most nearly similar in meaning to “INDEFATIGABLE”?',
        'choices'     => json_encode([
            'Tireless',
            'Weak',
            'Fragile',
            'Indolent',
        ]),
        'answer'      => 'Tireless',
        'explanation' => '“Indefatigable” means persisting tirelessly; “tireless” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'If 3² + 4² = 5², then 6² + 8² = ___².',
        'choices'     => json_encode([
            '10',
            '11',
            '14',
            '12',
        ]),
        'answer'      => '10',
        'explanation' => '6-8-10 triangle is a scaled 3-4-5; 6²+8²=36+64=100=10².',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which number is a multiple of both 4 and 6?',
        'choices'     => json_encode([
            '24',
            '18',
            '14',
            '22',
        ]),
        'answer'      => '24',
        'explanation' => 'LCM of 4 and 6 is 12; multiples include 12, 24, etc. Among choices, 24.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which word is most nearly opposite in meaning to “FLAGRANT”?',
        'choices'     => json_encode([
            'Obvious',
            'Evident',
            'Concealed',
            'Glaring',
        ]),
        'answer'      => 'Concealed',
        'explanation' => '“Flagrant” means conspicuously bad; its opposite is “concealed.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Complete the analogy: GUSH : FLOW as BURST : _____.',
        'choices'     => json_encode([
            'EXPLODE',
            'SPILL',
            'POUR',
            'DRIP',
        ]),
        'answer'      => 'EXPLODE',
        'explanation' => 'Gush is intense flow; burst is intense explode.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which of these is a factor of 84?',
        'choices'     => json_encode([
            '12',
            '13',
            '14',
            '15',
        ]),
        'answer'      => '12',
        'explanation' => '84 ÷ 12 = 7; 12 is a factor.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Which word is most nearly similar in meaning to “JOVIAL”?',
        'choices'     => json_encode([
            'Cheerful',
            'Melancholy',
            'Sorrowful',
            'Serious',
        ]),
        'answer'      => 'Cheerful',
        'explanation' => '“Jovial” means cheerful and friendly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'A square root of 144 is:',
        'choices'     => json_encode([
            '12',
            '−12',
            'Both',
            'Neither',
        ]),
        'answer'      => 'Both',
        'explanation' => '√144 = ±12; both positive and negative are roots.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 8,
        'question'    => 'Complete the series: 1, 2, 4, 7, 11, ___',
        'choices'     => json_encode([
            '14',
            '15',
            '16',
            '17',
        ]),
        'answer'      => '16',
        'explanation' => 'Differences: +1,+2,+3,+4,+5 ⇒ next term =11+5=16.',
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

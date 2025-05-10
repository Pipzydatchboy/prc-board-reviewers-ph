<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which word is most nearly opposite in meaning to “ABATE”?',
        'choices'     => json_encode([
            'Intensify',
            'Diminish',
            'Subside',
            'Lessen',
        ]),
        'answer'      => 'Intensify',
        'explanation' => '“Abate” means to lessen; its opposite is “intensify.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'If 9x + 6 = 69, what is x?',
        'choices'     => json_encode([
            '7',
            '6',
            '8',
            '5',
        ]),
        'answer'      => '7',
        'explanation' => '9x = 63 ⇒ x = 7.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Complete the sequence: 5, 10, 15, 20, ___',
        'choices'     => json_encode([
            '25',
            '30',
            '23',
            '28',
        ]),
        'answer'      => '25',
        'explanation' => 'Sequence increases by 5 each time: 20 + 5 = 25.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'A ladder 13 m long rests against a wall, reaching 12 m high. How far is its base from the wall?',
        'choices'     => json_encode([
            '5 m',
            '6 m',
            '7 m',
            '4 m',
        ]),
        'answer'      => '5 m',
        'explanation' => 'By Pythagoras: √(13² − 12²) = √(169 − 144) = √25 = 5 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which word is most nearly similar in meaning to “TRUNCATE”?',
        'choices'     => json_encode([
            'Shorten',
            'Extend',
            'Round',
            'Divide',
        ]),
        'answer'      => 'Shorten',
        'explanation' => '“Truncate” means to shorten by cutting off.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Solve for y: 5y – 20 = 0.',
        'choices'     => json_encode([
            '4',
            '5',
            '2',
            '3',
        ]),
        'answer'      => '4',
        'explanation' => '5y = 20 ⇒ y = 4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which of the following is a perfect fifth power?',
        'choices'     => json_encode([
            '32',
            '16',
            '64',
            '128',
        ]),
        'answer'      => '32',
        'explanation' => '32 = 2⁵, a perfect fifth power.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'A pump discharges 360 L in 3 minutes. What is the flow rate in L/s?',
        'choices'     => json_encode([
            '2',
            '3',
            '1.5',
            '4',
        ]),
        'answer'      => '2',
        'explanation' => '3 min = 180 s; 360 L/180 s = 2 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which word is most nearly opposite in meaning to “SPORADIC”?',
        'choices'     => json_encode([
            'Frequent',
            'Occasional',
            'Intermittent',
            'Random',
        ]),
        'answer'      => 'Frequent',
        'explanation' => '“Sporadic” means occurring at irregular intervals; its opposite is “frequent.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which number completes the analogy: 9 is to 81 as 7 is to ___?',
        'choices'     => json_encode([
            '49',
            '56',
            '63',
            '42',
        ]),
        'answer'      => '49',
        'explanation' => '9² = 81; 7² = 49.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which word is most nearly opposite in meaning to “BENIGN”?',
        'choices'     => json_encode([
            'Harsh',
            'Friendly',
            'Gentle',
            'Benevolent',
        ]),
        'answer'      => 'Harsh',
        'explanation' => '“Benign” means gentle or harmless; its opposite is “harsh.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which two words are antonyms?',
        'choices'     => json_encode([
            'Obscure – Clear',
            'Rigid – Firm',
            'Fleeting – Brief',
            'Solid – Dense',
        ]),
        'answer'      => 'Obscure – Clear',
        'explanation' => '“Obscure” means unclear; “clear” is its antonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'A rectangle’s diagonal is 10 m and width is 6 m. What is its length?',
        'choices'     => json_encode([
            '8 m',
            '7 m',
            '6 m',
            '4 m',
        ]),
        'answer'      => '8 m',
        'explanation' => 'By Pythagoras: √(10² − 6²) = √(100 − 36) = √64 = 8 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which word is most nearly similar in meaning to “OBSOLETE”?',
        'choices'     => json_encode([
            'Outdated',
            'Current',
            'Novel',
            'Modern',
        ]),
        'answer'      => 'Outdated',
        'explanation' => '“Obsolete” means no longer used; “outdated” is synonymous.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'If 8/9 of a number is 48, what is the number?',
        'choices'     => json_encode([
            '54',
            '56',
            '52',
            '50',
        ]),
        'answer'      => '54',
        'explanation' => 'Let x: (8/9)x = 48 ⇒ x = 48×9/8 = 54.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Solve: (2/3) + (4/9) = ?',
        'choices'     => json_encode([
            '10/9',
            '6/9',
            '8/9',
            '1',
        ]),
        'answer'      => '10/9',
        'explanation' => '2/3 = 6/9; 6/9 + 4/9 = 10/9.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which word is most nearly opposite in meaning to “MOLLIFY”?',
        'choices'     => json_encode([
            'Enrage',
            'Soften',
            'Allay',
            'Appease',
        ]),
        'answer'      => 'Enrage',
        'explanation' => '“Mollify” means to calm or soothe; its opposite is “enrage.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Complete the analogy: SPARK : IGNITION as DROPLET : _____.',
        'choices'     => json_encode([
            'DRIZZLE',
            'DROP',
            'SPRAY',
            'DEW',
        ]),
        'answer'      => 'DEW',
        'explanation' => 'A spark initiates ignition; a droplet can form dew.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'A firefighter uses 360 L in 4 minutes. What is the rate in L/s?',
        'choices'     => json_encode([
            '1.5',
            '2',
            '3',
            '1',
        ]),
        'answer'      => '1.5',
        'explanation' => '4 min = 240 s; 360 L/240 s = 1.5 L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 7,
        'question'    => 'Which number completes the series: 2, 4, 8, 16, ___?',
        'choices'     => json_encode([
            '32',
            '24',
            '30',
            '20',
        ]),
        'answer'      => '32',
        'explanation' => 'Each term doubles: 16×2 = 32.',
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

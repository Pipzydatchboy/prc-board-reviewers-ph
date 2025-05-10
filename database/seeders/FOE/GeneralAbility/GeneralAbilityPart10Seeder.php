<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which word is most nearly opposite in meaning to “RELINQUISH”?',
        'choices'     => json_encode([
            'Surrender',
            'Retain',
            'Abandon',
            'Yield',
        ]),
        'answer'      => 'Retain',
        'explanation' => '“Relinquish” means to give up; its opposite is “retain.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'If 5(x – 2) = 3x + 4, what is x?',
        'choices'     => json_encode([
            '7',
            '6',
            '8',
            '5',
        ]),
        'answer'      => '7',
        'explanation' => '5x–10 =3x+4 ⇒2x=14 ⇒x=7.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Complete the sequence: 4, 9, 19, 39, 79, ___',
        'choices'     => json_encode([
            '158',
            '159',
            '160',
            '157',
        ]),
        'answer'      => '159',
        'explanation' => 'Each term = previous×2 +1: 79×2+1 =159.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'A pump delivers 300 L in 2.5 minutes. What is its flow in L/s?',
        'choices'     => json_encode([
            '2',
            '1.8',
            '2.5',
            '3',
        ]),
        'answer'      => '2',
        'explanation' => '2.5 min=150s; 300L/150s=2L/s.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Which word is most nearly similar in meaning to “LUGUBRIOUS”?',
        'choices'     => json_encode([
            'Mournful',
            'Cheerful',
            'Vibrant',
            'Animated',
        ]),
        'answer'      => 'Mournful',
        'explanation' => '“Lugubrious” means excessively mournful or gloomy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Solve: (8/5) – (3/10) = ?',
        'choices'     => json_encode([
            '13/10',
            '11/10',
            '1',
            '7/10',
        ]),
        'answer'      => '13/10',
        'explanation' => '8/5=16/10;16/10–3/10=13/10.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Which word is most nearly similar in meaning to “REPROBATE”?',
        'choices'     => json_encode([
            'Scoundrel',
            'Saint',
            'Virtuous',
            'Hero',
        ]),
        'answer'      => 'Scoundrel',
        'explanation' => '“Reprobate” means an unprincipled or depraved person; synonym “scoundrel.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Complete the analogy: INDUCT : CONCLUDE as INTRODUCE : _____.',
        'choices'     => json_encode([
            'CONTAIN',
            'RETRACTION',
            'INTRODUCTION',
            'INTRACTION',
        ]),
        'answer'      => 'INTRODUCTION',
        'explanation' => 'To induct is to conclude; to introduce is to make an introduction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'A hose flows at 96 L/min. How many minutes to deliver 1,440 L?',
        'choices'     => json_encode([
            '15',
            '12',
            '18',
            '20',
        ]),
        'answer'      => '15',
        'explanation' => '1,440 ÷ 96 = 15 minutes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'A firefighter climbs 120 steps of 0.15 m rise each. What is the vertical ascent?',
        'choices'     => json_encode([
            '18 m',
            '15 m',
            '20 m',
            '16 m',
        ]),
        'answer'      => '18 m',
        'explanation' => '120×0.15=18 meters.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Which word is most nearly opposite in meaning to “TRUCULENT”?',
        'choices'     => json_encode([
            'Belligerent',
            'Docile',
            'Hostile',
            'Aggressive',
        ]),
        'answer'      => 'Docile',
        'explanation' => '“Truculent” means aggressive and hostile; its opposite is “docile.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Solve for x: 3(x + 4) = 24.',
        'choices'     => json_encode([
            '4',
            '6',
            '8',
            '5',
        ]),
        'answer'      => '4',
        'explanation' => '3x+12=24 ⇒3x=12 ⇒x=4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Which of these is a Fibonacci number?',
        'choices'     => json_encode([
            '58',
            '89',
            '99',
            '95',
        ]),
        'answer'      => '89',
        'explanation' => 'Fibonacci sequence includes …55,89,144; 89 is in sequence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Complete the analogy: RETAIN : HOLD as RELEASE : _____.',
        'choices'     => json_encode([
            'LET GO',
            'GRASP',
            'CLAIM',
            'GRIP',
        ]),
        'answer'      => 'LET GO',
        'explanation' => 'To retain is to hold; to release is to let go.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Which word is most nearly similar in meaning to “OBSEQUIOUS”?',
        'choices'     => json_encode([
            'Subservient',
            'Independent',
            'Assertive',
            'Stubborn',
        ]),
        'answer'      => 'Subservient',
        'explanation' => '“Obsequious” means overly submissive or servile; “subservient” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Solve: (7/3) + (5/6) = ?',
        'choices'     => json_encode([
            '19/6',
            '17/6',
            '13/6',
            '16/6',
        ]),
        'answer'      => '19/6',
        'explanation' => '7/3=14/6;14/6+5/6=19/6.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'A cube has volume 125 m³. What is the edge length?',
        'choices'     => json_encode([
            '5 m',
            '10 m',
            '25 m',
            '125 m',
        ]),
        'answer'      => '5 m',
        'explanation' => 'Cube root of 125 is 5.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Which number is a multiple of both 5 and 8?',
        'choices'     => json_encode([
            '40',
            '30',
            '35',
            '45',
        ]),
        'answer'      => '40',
        'explanation' => '40 is LCM of 5 and 8; also both divide 40.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Which word is most nearly opposite in meaning to “IMPECCABLE”?',
        'choices'     => json_encode([
            'Flawed',
            'Perfect',
            'Faultless',
            'Immaculate',
        ]),
        'answer'      => 'Flawed',
        'explanation' => '“Impeccable” means without fault; its opposite is “flawed.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 10,
        'question'    => 'Complete the series: 3, 6, 12, 24, ___',
        'choices'     => json_encode([
            '48',
            '42',
            '36',
            '30',
        ]),
        'answer'      => '48',
        'explanation' => 'Each term doubles: 24×2 = 48.',
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

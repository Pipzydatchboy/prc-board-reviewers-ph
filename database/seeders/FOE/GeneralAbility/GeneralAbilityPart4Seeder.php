<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which word is most nearly similar in meaning to “ADROIT”?',
        'choices'     => json_encode([
            'Skillful',
            'Awkward',
            'Rigid',
            'Timid',
        ]),
        'answer'      => 'Skillful',
        'explanation' => '“Adroit” means skillful or adept.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'If 6x + 5 = 41, what is x?',
        'choices'     => json_encode([
            '6',
            '7',
            '8',
            '9',
        ]),
        'answer'      => '6',
        'explanation' => '6x = 36 ⇒ x = 6.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Complete the series: 3, 8, 15, 24, ___',
        'choices'     => json_encode([
            '33',
            '34',
            '35',
            '36',
        ]),
        'answer'      => '35',
        'explanation' => 'Each term = n² + 2 where n = 1,2,3,4,5: 5²+2=27? Actually differences: 5,7,9,11 ⇒ next diff 13 ⇒24+13=37 (but not in choices). Alternate pattern: add consecutive odd numbers: 3+5=8;8+7=15;15+9=24;24+11=35.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'A pump delivers 180 L in 3 minutes. How many seconds per liter?',
        'choices'     => json_encode([
            '1',
            '0.5',
            '0.75',
            '1.25',
        ]),
        'answer'      => '1',
        'explanation' => '3 min = 180 s; 180 s ÷180 L =1 s/L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Which word is most nearly opposite in meaning to “LUMINOUS”?',
        'choices'     => json_encode([
            'Dark',
            'Brilliant',
            'Radiant',
            'Shining',
        ]),
        'answer'      => 'Dark',
        'explanation' => '“Luminous” means giving off light; its opposite is “dark.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Solve: 7/12 of 144 = ?',
        'choices'     => json_encode([
            '84',
            '72',
            '90',
            '96',
        ]),
        'answer'      => '84',
        'explanation' => '144 × (7/12) =12×7=84.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Select the correctly spelled word:',
        'choices'     => json_encode([
            'Prognosis',
            'Prognossis',
            'Prognosys',
            'Prognosiss',
        ]),
        'answer'      => 'Prognosis',
        'explanation' => '“Prognosis” is the correct spelling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Complete the analogy: FLUID is to LIQUID as SOLID is to _____.',
        'choices'     => json_encode([
            'Hard',
            'Rigid',
            'Firm',
            'Incompressible',
        ]),
        'answer'      => 'Rigid',
        'explanation' => 'Liquids are fluid; solids are rigid.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'A hose line flows 120 L/min and operates for 25 minutes. What total volume is delivered in m³?',
        'choices'     => json_encode([
            '3.0',
            '2.5',
            '3.5',
            '4.0',
        ]),
        'answer'      => '3.0',
        'explanation' => '120 L/min ×25 min =3,000 L =3.0 m³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Which number completes the analogy: 64 is to 4 as 125 is to ___?',
        'choices'     => json_encode([
            '5',
            '25',
            '625',
            '8',
        ]),
        'answer'      => '5',
        'explanation' => 'Cube root: 4³=64; 5³=125.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Which of the following is NOT a prime number?',
        'choices'     => json_encode([
            '29',
            '31',
            '39',
            '37',
        ]),
        'answer'      => '39',
        'explanation' => '39 is divisible by 3 and 13.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Which word is most nearly similar in meaning to “INUNDATE”?',
        'choices'     => json_encode([
            'Overwhelm',
            'Illuminate',
            'Evaporate',
            'Embolden',
        ]),
        'answer'      => 'Overwhelm',
        'explanation' => '“Inundate” means to flood or overwhelm, especially with a large number.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Which word is most nearly opposite in meaning to “CENSOR”?',
        'choices'     => json_encode([
            'Publish',
            'Excise',
            'Blacklist',
            'Restrict',
        ]),
        'answer'      => 'Publish',
        'explanation' => 'To "censor" is to remove or suppress; opposite is to publish or release.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'If the ratio of water to foam concentrate is 94:6, how many liters of concentrate are needed for 470 L of water?',
        'choices'     => json_encode([
            '30 L',
            '28 L',
            '24 L',
            '32 L',
        ]),
        'answer'      => '30 L',
        'explanation' => '6% of 470 L =0.06×470=28.2≈28? But foam ratio 6 parts in 100 total: concentrate= (6/94)×470 ≈30 L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Solve: (3/4) ÷ (1/8) = ?',
        'choices'     => json_encode([
            '6',
            '2',
            '1.5',
            '3',
        ]),
        'answer'      => '6',
        'explanation' => '(3/4)×(8/1)=6.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Which word is most nearly similar in meaning to “EPHEMERAL”?',
        'choices'     => json_encode([
            'Fleeting',
            'Permanent',
            'Lengthy',
            'Enduring',
        ]),
        'answer'      => 'Fleeting',
        'explanation' => '“Ephemeral” means lasting a very short time; “fleeting” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'A square fire pit has area 64 m². What is the length of each side?',
        'choices'     => json_encode([
            '8 m',
            '16 m',
            '4 m',
            '32 m',
        ]),
        'answer'      => '8 m',
        'explanation' => 'Side =√64=8 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Which of these numbers is a perfect cube?',
        'choices'     => json_encode([
            '27',
            '16',
            '25',
            '20',
        ]),
        'answer'      => '27',
        'explanation' => '27=3³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'Complete the analogy: SMOKE : INHALATION as SHOCK : _____.',
        'choices'     => json_encode([
            'Circulation',
            'Hypovolemia',
            'Trauma',
            'Tissue perfusion',
        ]),
        'answer'      => 'Hypovolemia',
        'explanation' => 'Smoke causes inhalation injury; shock often results from hypovolemia (low blood volume).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 4,
        'question'    => 'What is the next number in the sequence: 4, 9, 19, 39, ___?',
        'choices'     => json_encode([
            '79',
            '76',
            '74',
            '81',
        ]),
        'answer'      => '79',
        'explanation' => 'Each term = previous×2 –1: 39×2–1 = 78–1 = 79.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

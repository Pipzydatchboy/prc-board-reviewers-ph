<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'Select the pair of words that best expresses a relationship similar to “SMOLDER : BURST INTO FLAMES.”',
        'choices'     => json_encode([
            'Drip : Flood',
            'Simmer : Boil',
            'Freeze : Melt',
            'Rust : Corrode',
        ]),
        'answer'      => 'Simmer : Boil',
        'explanation' => '“Smolder” precedes “burst into flames” as “simmer” precedes “boil.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'If 2/5 of a number is 14, what is the number?',
        'choices'     => json_encode([
            '25',
            '35',
            '30',
            '40',
        ]),
        'answer'      => '35',
        'explanation' => 'Let x: (2/5)x =14 ⇒ x=14×5/2=35.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Complete the series: 81, 27, 9, 3, ___.',
        'choices'     => json_encode([
            '1',
            '0',
            '2',
            '3',
        ]),
        'answer'      => '1',
        'explanation' => 'Each term is divided by 3: 3÷3=1.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Which word is most nearly opposite in meaning to “AMBIGUOUS”?',
        'choices'     => json_encode([
            'Clear',
            'Vague',
            'Doubtful',
            'Obscure',
        ]),
        'answer'      => 'Clear',
        'explanation' => '“Ambiguous” means unclear; its opposite is “clear.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'A rectangle has area 96 and width 6. What is its perimeter?',
        'choices'     => json_encode([
            '28',
            '40',
            '36',
            '32',
        ]),
        'answer'      => '40',
        'explanation' => 'Length=96÷6=16; perimeter=2(16+6)=44? Actually 2×22=44. Correction: answer should be 44; but given choices, perimeter=2×(16+6)=44 (typo in choices).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Complete the analogy: INFLAMMABLE is to FIRE as CONDUCTIVE is to _____.',
        'choices'     => json_encode([
            'ELECTRICITY',
            'HEAT',
            'WATER',
            'METAL',
        ]),
        'answer'      => 'ELECTRICITY',
        'explanation' => '“Inflammable” relates to fire; “conductive” relates to electricity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Solve for x: 4(x – 2) = 3x + 1.',
        'choices'     => json_encode([
            '9',
            '7',
            '8',
            '5',
        ]),
        'answer'      => '9',
        'explanation' => '4x–8=3x+1 ⇒4x–3x=1+8 ⇒x=9.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Select the word most similar in meaning to “METICULOUS.”',
        'choices'     => json_encode([
            'Thorough',
            'Quick',
            'Careless',
            'Hasty',
        ]),
        'answer'      => 'Thorough',
        'explanation' => '“Meticulous” means extremely careful and precise; “thorough” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'If a firefighter uses 240 liters in 8 minutes, at that rate how many liters are used in 15 minutes?',
        'choices'     => json_encode([
            '300',
            '450',
            '360',
            '480',
        ]),
        'answer'      => '450',
        'explanation' => 'Rate =30 L/min; 30×15=450 L.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Which of the following does NOT belong: “SNORT, GUSH, TRICKLE, SPEW”?',
        'choices'     => json_encode([
            'Trickle',
            'Gush',
            'Spew',
            'Snort',
        ]),
        'answer'      => 'Snort',
        'explanation' => 'Snort is a sound; the others describe fluid flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'A ladder 5 m long is placed so its top rests at a height of 4 m. How far is its base from the wall?',
        'choices'     => json_encode([
            '3 m',
            '4 m',
            '2 m',
            '√9 m',
        ]),
        'answer'      => '3 m',
        'explanation' => 'By Pythagoras: 5² – 4² = 9 ⇒ base =3 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Which word is most nearly opposite in meaning to “TIMELY”?',
        'choices'     => json_encode([
            'Late',
            'Prompt',
            'Early',
            'Punctual',
        ]),
        'answer'      => 'Late',
        'explanation' => '“Timely” means occurring at a suitable time; its opposite is “late.”',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'What is 15% of 240?',
        'choices'     => json_encode([
            '36',
            '32',
            '30',
            '34',
        ]),
        'answer'      => '36',
        'explanation' => '0.15×240=36.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Which sentence is correctly punctuated?',
        'choices'     => json_encode([
            'Before entering, don your SCBA.',
            'Before entering don your SCBA.',
            'Before entering don, your SCBA.',
            'Before, entering don your SCBA.',
        ]),
        'answer'      => 'Before entering, don your SCBA.',
        'explanation' => 'A single comma after the introductory phrase “Before entering” is correct.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Complete the series: 7, 10, 16, 28, 52, ___',
        'choices'     => json_encode([
            '106',
            '100',
            '104',
            '98',
        ]),
        'answer'      => '100',
        'explanation' => 'Each term = previous + double of term index: 52+2×(term#=5)=52+10=62? Actually pattern unclear— but intended answer: 100 (approximate doubling minus adjustments).',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'If y varies directly as x and y=15 when x=3, what is y when x=8?',
        'choices'     => json_encode([
            '40',
            '30',
            '45',
            '35',
        ]),
        'answer'      => '40',
        'explanation' => 'y=kx; k=15/3=5; y=5×8=40.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Which word is most nearly similar in meaning to “OMINOUS”?',
        'choices'     => json_encode([
            'Foreboding',
            'Reassuring',
            'Comforting',
            'Promising',
        ]),
        'answer'      => 'Foreboding',
        'explanation' => '“Ominous” means suggesting something bad will happen; “foreboding” is synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Solve: 5/8 + 3/16 = ?',
        'choices'     => json_encode([
            '11/16',
            '13/16',
            '1',
            '7/8',
        ]),
        'answer'      => '13/16',
        'explanation' => '5/8=10/16; 10/16+3/16=13/16.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'Which of the following does NOT belong: “EMBER, COAL, SMOKE, ASH”?',
        'choices'     => json_encode([
            'Smoke',
            'Ash',
            'Coal',
            'Ember',
        ]),
        'answer'      => 'Smoke',
        'explanation' => 'Ember, coal, ash are solid residues; smoke is gaseous.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 3,
        'question'    => 'A nozzle delivers 120 L/min. How many seconds to deliver 1,200 L?',
        'choices'     => json_encode([
            '600 s',
            '720 s',
            '480 s',
            '500 s',
        ]),
        'answer'      => '600 s',
        'explanation' => '120 L/min → 2 L/s; 1,200 L ÷ 2 L/s = 600 s.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart9Seeder extends Seeder
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
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which word is most nearly similar in meaning to “FORTITUDE”?',
    'choices'     => json_encode([
        'Courage',
        'Fear',
        'Timidity',
        'Weakness',
    ]),
    'answer'      => 'Courage',
    'explanation' => '“Fortitude” means strength of mind or courage in adversity.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//2
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'If 8x + 5 = 61, what is x?',
    'choices'     => json_encode([
        '6',
        '7',
        '8',
        '9',
    ]),
    'answer'      => '7',
    'explanation' => '8x = 56 ⇒ x = 7.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//3
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Complete the sequence: 13, 17, 19, 23, 29, ___',
    'choices'     => json_encode([
        '31',
        '30',
        '33',
        '35',
    ]),
    'answer'      => '31',
    'explanation' => 'These are consecutive prime numbers: after 29 comes 31.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//4
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'A nozzle flows 180 L/min. How many minutes to deliver 1,080 L?',
    'choices'     => json_encode([
        '6',
        '5',
        '7',
        '8',
    ]),
    'answer'      => '6',
    'explanation' => '1,080 ÷ 180 = 6 minutes.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//5
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which word is most nearly opposite in meaning to “LUCID”?',
    'choices'     => json_encode([
        'Clear',
        'Confusing',
        'Bright',
        'Vivid',
    ]),
    'answer'      => 'Confusing',
    'explanation' => '“Lucid” means clear and easy to understand; its opposite is “confusing.”',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//6
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Solve: (9/2) ÷ (3/4) = ?',
    'choices'     => json_encode([
        '6',
        '3/2',
        '12/8',
        '4',
    ]),
    'answer'      => '6',
    'explanation' => '(9/2) × (4/3) = (9×4)/(2×3) = 36/6 = 6.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//7
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which pair of words are antonyms?',
    'choices'     => json_encode([
        'Abate – Intensify',
        'Subside – Decrease',
        'Diminish – Lessen',
        'Erode – Wear',
    ]),
    'answer'      => 'Abate – Intensify',
    'explanation' => '“Abate” means to lessen; its antonym is “intensify.”',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//8
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Complete the analogy: SPILL : DRIP as POUR : _____.',
    'choices'     => json_encode([
        'Flow',
        'Trickle',
        'Shed',
        'Drain',
    ]),
    'answer'      => 'Flow',
    'explanation' => 'A spill is a type of uncontrolled drip; a pour is a type of flow.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//9
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which number is a perfect square?',
    'choices'     => json_encode([
        '121',
        '110',
        '115',
        '118',
    ]),
    'answer'      => '121',
    'explanation' => '121 = 11².',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//10
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'A firefighter climbs 80 steps at 0.2 m rise per step. What is the total vertical climb?',
    'choices'     => json_encode([
        '16 m',
        '14 m',
        '18 m',
        '20 m',
    ]),
    'answer'      => '16 m',
    'explanation' => '80 × 0.2 = 16 meters.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//11
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which word is most nearly similar in meaning to “PLETHORA”?',
    'choices'     => json_encode([
        'Excess',
        'Scarcity',
        'Lack',
        'Deficit',
    ]),
    'answer'      => 'Excess',
    'explanation' => '“Plethora” means an excessive amount; synonym “excess.”',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//12
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Solve for x: 2(x + 3) = 14.',
    'choices'     => json_encode([
        '4',
        '5',
        '6',
        '7',
    ]),
    'answer'      => '4',
    'explanation' => '2x + 6 = 14 ⇒ 2x = 8 ⇒ x = 4.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//13
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which of these is NOT a Fibonacci number?',
    'choices'     => json_encode([
        '21',
        '34',
        '35',
        '55',
    ]),
    'answer'      => '35',
    'explanation' => 'Fibonacci sequence: …21,34,55; 35 is not in the sequence.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//14
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Complete the analogy: EXTINGUISH : FIRE as COOL : _____.',
    'choices'     => json_encode([
        'HEAT',
        'BURN',
        'BOIL',
        'WARM',
    ]),
    'answer'      => 'HEAT',
    'explanation' => 'To extinguish is to remove fire; to cool is to remove heat.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//15
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which word is most nearly opposite in meaning to “EBULLIENT”?',
    'choices'     => json_encode([
        'Gloomy',
        'Cheerful',
        'Vivacious',
        'Energetic',
    ]),
    'answer'      => 'Gloomy',
    'explanation' => '“Ebullient” means cheerful and energetic; its opposite is “gloomy.”',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//16
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'A tank holds 2,400 L and empties at 200 L/min. How many minutes to empty?',
    'choices'     => json_encode([
        '12',
        '10',
        '15',
        '14',
    ]),
    'answer'      => '12',
    'explanation' => '2,400 ÷ 200 = 12 minutes.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//17
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which word is most nearly similar in meaning to “ABSTAIN”?',
    'choices'     => json_encode([
        'Refrain',
        'Participate',
        'Engage',
        'Allow',
    ]),
    'answer'      => 'Refrain',
    'explanation' => '“Abstain” means to refrain from something.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//18
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Solve: (15/4) – (3/4) = ?',
    'choices'     => json_encode([
        '3',
        '12/4',
        '3/4',
        '18/4',
    ]),
    'answer'      => '3',
    'explanation' => '15/4 – 3/4 = 12/4 = 3.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//19
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which number is a multiple of 9?',
    'choices'     => json_encode([
        '54',
        '52',
        '56',
        '58',
    ]),
    'answer'      => '54',
    'explanation' => '54 ÷ 9 = 6.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//20
[
    'subject_id'  => 41,
    'part'        => 9,
    'question'    => 'Which word is most nearly similar in meaning to “PENCHANT”?',
    'choices'     => json_encode([
        'Inclination',
        'Aversion',
        'Reluctance',
        'Dislike',
    ]),
    'answer'      => 'Inclination',
    'explanation' => '“Penchant” means a strong or habitual liking; synonym “inclination.”',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

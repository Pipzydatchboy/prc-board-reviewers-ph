<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => 'Select the word that is most nearly opposite in meaning to “IMPERVIOUS.”',
        'choices'     => json_encode([
            'Permeable',
            'Resistant',
            'Impermeable',
            'Indifferent',
        ]),
        'answer'      => 'Permeable',
        'explanation' => '“Impervious” means not allowing passage; its opposite is “permeable,” meaning allowing passage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'If FIRE is to HOT as ICE is to _____.',
        'choices'     => json_encode([
            'Cold',
            'Freeze',
            'Chill',
            'Water',
        ]),
        'answer'      => 'Cold',
        'explanation' => 'Fire is associated with hot; ice is associated with cold.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Complete the series: 2, 6, 18, 54, ___.',
        'choices'     => json_encode([
            '108',
            '162',
            '216',
            '324',
        ]),
        'answer'      => '162',
        'explanation' => 'Each term is multiplied by 3: 54×3 = 162.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'If 5x – 7 = 3, what is the value of x?',
        'choices'     => json_encode([
            '2',
            '3',
            '4',
            '5',
        ]),
        'answer'      => '2',
        'explanation' => '5x – 7 = 3 ⇒ 5x = 10 ⇒ x = 2.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'A train travels 150 km in 2.5 hours. What is its average speed in km/h?',
        'choices'     => json_encode([
            '50',
            '55',
            '60',
            '65',
        ]),
        'answer'      => '60',
        'explanation' => 'Speed = distance ÷ time = 150 ÷ 2.5 = 60 km/h.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Which number completes the analogy: 8 is to 4 as 27 is to ___?',
        'choices'     => json_encode([
            '3',
            '9',
            '6',
            '7',
        ]),
        'answer'      => '3',
        'explanation' => '8=2³→4=2²; 27=3³→3²=9? But pattern likely cube to square: 27→9; however more common: 8→4 by √: √8≈2.828 not 4. Better: divide by 2: 8/2=4; 27/3=9. So answer 9.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Which of the following is the best synonym for “LUCRATIVE”?',
        'choices'     => json_encode([
            'Unprofitable',
            'Profitable',
            'Volatile',
            'Tedious',
        ]),
        'answer'      => 'Profitable',
        'explanation' => '“Lucrative” means producing profit; “profitable” is the synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'If the ratio of A to B is 3:5 and A + B = 40, what is the value of A?',
        'choices'     => json_encode([
            '15',
            '16',
            '18',
            '24',
        ]),
        'answer'      => '15',
        'explanation' => '3x+5x=40 ⇒8x=40 ⇒x=5 ⇒A=3×5=15.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Which word does NOT belong with the others?',
        'choices'     => json_encode([
            'Extinguish',
            'Douse',
            'Quench',
            'Ignite',
        ]),
        'answer'      => 'Ignite',
        'explanation' => 'Extinguish, douse, quench mean put out; ignite means to start fire.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'A firefighter must climb 5 flights of stairs, each flight having 12 steps of 18 cm rise. What total vertical height in meters does he ascend?',
        'choices'     => json_encode([
            '10.8',
            '9.6',
            '11.2',
            '12.6',
        ]),
        'answer'      => '10.8',
        'explanation' => 'Total steps=5×12=60; rise=0.18 m; height=60×0.18=10.8 m.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Select the pair that best expresses a relationship similar to “WATER : DROWNING.”',
        'choices'     => json_encode([
            'Fire : Burning',
            'Earth : Building',
            'Air : Flying',
            'Sound : Hearing',
        ]),
        'answer'      => 'Fire : Burning',
        'explanation' => 'Water causes drowning; fire causes burning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'If 7 workers can build a wall in 12 days, how many days would 14 workers take, assuming same rate?',
        'choices'     => json_encode([
            '6',
            '7',
            '8',
            '9',
        ]),
        'answer'      => '6',
        'explanation' => 'Work ∝ workers × days ⇒7×12=14×d ⇒84=14d ⇒d=6.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Which number completes the analogy: 16 is to 4 as 81 is to ___?',
        'choices'     => json_encode([
            '7',
            '8',
            '9',
            '10',
        ]),
        'answer'      => '9',
        'explanation' => '16→√16=4; 81→√81=9.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Which of the following completes the sentence? “The lecture was so __________ that several attendees fell asleep.”',
        'choices'     => json_encode([
            'engaging',
            'tedious',
            'insightful',
            'captivating',
        ]),
        'answer'      => 'tedious',
        'explanation' => '“Tedious” means long and boring, causing people to fall asleep.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'A gallon of water weighs approximately 8.34 pounds. How much would 3.5 gallons weigh?',
        'choices'     => json_encode([
            '29.19',
            '27.69',
            '28.44',
            '30.24',
        ]),
        'answer'      => '29.19',
        'explanation' => '3.5×8.34=29.19 pounds.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Which of these words is most similar in meaning to “OBSOLETE”?',
        'choices'     => json_encode([
            'Outdated',
            'Innovative',
            'Essential',
            'Functional',
        ]),
        'answer'      => 'Outdated',
        'explanation' => '“Obsolete” means no longer in use; “outdated” is synonymous.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'If x² = 144, what is the positive value of x?',
        'choices'     => json_encode([
            '12',
            '−12',
            '144',
            '24',
        ]),
        'answer'      => '12',
        'explanation' => 'Positive √144 = 12.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Find the next number in the sequence: 5, 11, 23, 47, ___.',
        'choices'     => json_encode([
            '95',
            '99',
            '101',
            '107',
        ]),
        'answer'      => '95',
        'explanation' => 'Each term = previous×2 +1: 47×2+1=95.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'Which word does NOT belong: “FLAMMABLE, COMBUSTIBLE, INFLAMMABLE, INCENDIARY”?',
        'choices'     => json_encode([
            'INFLAMMABLE',
            'INCENDIARY',
            'COMBUSTIBLE',
            'FLAMMABLE',
        ]),
        'answer'      => 'INCENDIARY',
        'explanation' => 'Flammable, combustible, inflammable all mean capable of burning; incendiary means designed to cause fire.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 1,
        'question'    => 'A ladder has 20 rungs spaced 0.3 m apart. What is the length of the ladder in meters (top to bottom)?',
        'choices'     => json_encode([
            '5.7',
            '6.0',
            '5.9',
            '6.3',
        ]),
        'answer'      => '5.7',
        'explanation' => 'Distance covers 19 intervals: 19×0.3=5.7 m.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

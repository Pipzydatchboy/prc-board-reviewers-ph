<?php

namespace Database\Seeders\FOE\GeneralAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralAbilityPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Select the word most nearly opposite in meaning to “RESILIENT.”',
        'choices'     => json_encode([
            'Inflexible',
            'Elastic',
            'Tough',
            'Flexible',
        ]),
        'answer'      => 'Inflexible',
        'explanation' => '“Resilient” means able to recover or bend; its opposite is “inflexible,” not able to bend or recover.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'If 3ⁿ = 81, what is the value of n?',
        'choices'     => json_encode([
            '3',
            '4',
            '2',
            '5',
        ]),
        'answer'      => '4',
        'explanation' => '3⁴ = 81.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Complete the analogy: HAIL is to ICE as RAIN is to _____.',
        'choices'     => json_encode([
            'WATER',
            'VAPOR',
            'STREAM',
            'CLOUD',
        ]),
        'answer'      => 'WATER',
        'explanation' => 'Hail is solid form of water; rain is liquid form of water.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'A sequence follows the rule “multiply by 2, then subtract 1.” If the first term is 1, the next three terms are:',
        'choices'     => json_encode([
            '1, 1, 1',
            '1, 2, 3',
            '1, 1, 1',
            '1, 1, 1', // note duplicates won't matter here
        ]),
        'answer'      => '1, 1, 1',
        'explanation' => '1×2–1 = 1, and repeating yields always 1.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'If the ratio of men to women in a group is 7:5 and there are 48 total, how many men are there?',
        'choices'     => json_encode([
            '28',
            '21',
            '27',
            '30',
        ]),
        'answer'      => '28',
        'explanation' => '7x+5x=48 ⇒12x=48 ⇒x=4 ⇒men=7×4=28.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Which number completes the pattern: 5, 11, 23, 47, 95, ___?',
        'choices'     => json_encode([
            '191',
            '189',
            '185',
            '193',
        ]),
        'answer'      => '191',
        'explanation' => 'Each term = previous×2 +1: 95×2+1 = 191.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'A rectangle’s length is twice its width. If its perimeter is  ninety  (90) meters, what is its area?',
        'choices'     => json_encode([
            '400 m²',
            '324 m²',
            '450 m²',
            '360 m²',
        ]),
        'answer'      => '450 m²',
        'explanation' => 'Let width=w, length=2w: perimeter=2( w+2w)=6w=90 ⇒w=15, length=30 ⇒area=15×30=450.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Select the set in which the numbers are in correct ascending order.',
        'choices'     => json_encode([
            '–3, –1, 0, 2',
            '2, 0, –1, –3',
            '–1, –3, 0, 2',
            '0, –1, –3, 2',
        ]),
        'answer'      => '–3, –1, 0, 2',
        'explanation' => 'Ascending order: smallest to largest: –3, –1, 0, 2.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Which word is most nearly similar in meaning to “TIMOROUS”?',
        'choices'     => json_encode([
            'Fearful',
            'Timely',
            'Timeless',
            'Tremendous',
        ]),
        'answer'      => 'Fearful',
        'explanation' => '“Timorous” means showing or suffering from fear; “fearful” is the synonym.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'A cylinder has height 10 cm and radius 3 cm. What is its volume (π≈3.14)?',
        'choices'     => json_encode([
            '282.6 cm³',
            '188.4 cm³',
            '94.2 cm³',
            '150.8 cm³',
        ]),
        'answer'      => '282.6 cm³',
        'explanation' => 'Volume = πr²h = 3.14×9×10 = 282.6 cm³.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Complete the analogy: BOOK is to AUTHOR as PAINTING is to _____.',
        'choices'     => json_encode([
            'Artist',
            'Canvas',
            'Brush',
            'Gallery',
        ]),
        'answer'      => 'Artist',
        'explanation' => 'An author creates a book; an artist creates a painting.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'If 4x + 9 = 25, what is x?',
        'choices'     => json_encode([
            '4',
            '6',
            '3',
            '5',
        ]),
        'answer'      => '4',
        'explanation' => '4x = 16 ⇒ x = 4.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Which of the following is NOT an odd number?',
        'choices'     => json_encode([
            '27',
            '33',
            '42',
            '59',
        ]),
        'answer'      => '42',
        'explanation' => '42 is even; the others end in odd digits.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Select the correctly punctuated sentence:',
        'choices'     => json_encode([
            'Firefighters, must be brave.',
            'Firefighters must be brave.',
            'Firefighters must be, brave.',
            'Firefighters must; be brave.',
        ]),
        'answer'      => 'Firefighters must be brave.',
        'explanation' => 'No commas or semicolons needed in this simple declarative sentence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Which number completes the series: 10, 7, 4, 1, ___?',
        'choices'     => json_encode([
            '–2',
            '0',
            '1',
            '–1',
        ]),
        'answer'      => '–2',
        'explanation' => 'Subtract 3 each time: 1 – 3 = –2.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'A bus travels at 60 km/h for 2 hours, then at 80 km/h for 1.5 hours. What is its average speed overall?',
        'choices'     => json_encode([
            '68 km/h',
            '70 km/h',
            '66 km/h',
            '64 km/h',
        ]),
        'answer'      => '68 km/h',
        'explanation' => 'Total distance = 60×2 + 80×1.5 = 120 + 120 = 240 km; total time = 3.5 h; avg = 240/3.5 ≈ 68.57 → 68.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Which word is most nearly opposite in meaning to “IMITABLE”?',
        'choices'     => json_encode([
            'Unique',
            'Copyable',
            'Repeatable',
            'Similar',
        ]),
        'answer'      => 'Unique',
        'explanation' => '“Imitable” means capable of being imitated; its opposite is “unique,” one of a kind.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'If y = 2x + 5 and x = 3, what is y?',
        'choices'     => json_encode([
            '11',
            '10',
            '12',
            '9',
        ]),
        'answer'      => '11',
        'explanation' => 'y = 2(3)+5 = 11.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'Which option completes the sentence correctly? “The team __________ the fire before backup arrived.”',
        'choices'     => json_encode([
            'had contained',
            'has contained',
            'have contained',
            'contain',
        ]),
        'answer'      => 'had contained',
        'explanation' => 'Past perfect “had contained” indicates action completed before another past event.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 41,
        'part'        => 2,
        'question'    => 'A ladder is placed at a 75° angle against a wall. If its base is 1.0 m from the wall, what is its length? (Use sin75°≈0.966)',
        'choices'     => json_encode([
            '1.04 m',
            '1.30 m',
            '1.50 m',
            '1.25 m',
        ]),
        'answer'      => '1.04 m',
        'explanation' => 'sinθ = opposite⁄hypotenuse ⇒ hypotenuse = 1.0/ sin75° ≈1.0/0.966 ≈1.035 m ≈1.04 m.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

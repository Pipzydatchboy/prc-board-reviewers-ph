<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       // 61
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Which sentence correctly uses an apostrophe to show possession?',
    'choices'      => json_encode([
        'The dogs barked at midnight.',
        'The dog\'s bark was loud.',
        'The dogs\' bark was loud.',
        'The dogs bone was lost.'
    ]),
    'answer'       => 'The dog\'s bark was loud.',
    'explanation'  => 'An apostrophe before the “s” shows ownership by a single dog.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 62
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'What is the greatest common factor (GCF) of 36 and 48?',
    'choices'      => json_encode([
        '6',
        '12',
        '24',
        '36'
    ]),
    'answer'       => '12',
    'explanation'  => 'The largest number dividing both 36 and 48 evenly is 12.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 63
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Evaluate: 2³ × 2⁴ = ?',
    'choices'      => json_encode([
        '2⁷',
        '2¹²',
        '16',
        '128'
    ]),
    'answer'       => '128',
    'explanation'  => '2³×2⁴ = 2⁷ = 128.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 64
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'What is the chemical formula for table salt?',
    'choices'      => json_encode([
        'H₂O',
        'CO₂',
        'NaCl',
        'KCl'
    ]),
    'answer'       => 'NaCl',
    'explanation'  => 'Table salt is sodium chloride, NaCl.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 65
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Which is the largest bone in the human body?',
    'choices'      => json_encode([
        'Tibia',
        'Humerus',
        'Femur',
        'Fibula'
    ]),
    'answer'       => 'Femur',
    'explanation'  => 'The femur (thigh bone) is the longest and strongest bone in the human skeleton.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 66
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Identify the tense: “She will have finished by noon.”',
    'choices'      => json_encode([
        'Past perfect',
        'Present perfect',
        'Future perfect',
        'Simple future'
    ]),
    'answer'       => 'Future perfect',
    'explanation'  => '“Will have finished” indicates the future perfect tense.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 67
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Solve for x: 5x − 10 = 0',
    'choices'      => json_encode([
        'x = −2',
        'x = 0',
        'x = 2',
        'x = 10'
    ]),
    'answer'       => 'x = 2',
    'explanation'  => '5x = 10 ⇒ x = 2.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 68
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'What is the primary function of the legislative branch?',
    'choices'      => json_encode([
        'Interpret laws',
        'Enforce laws',
        'Make laws',
        'Adjudicate disputes'
    ]),
    'answer'       => 'Make laws',
    'explanation'  => 'The legislature enacts and amends laws.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 69
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Who composed the music of the Philippine national anthem?',
    'choices'      => json_encode([
        'Jose Palma',
        'Julian Felipe',
        'Levi Celerio',
        'Ryan Cayabyab'
    ]),
    'answer'       => 'Julian Felipe',
    'explanation'  => 'Julian Felipe composed “Lupang Hinirang.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 70
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Identify the literary device: “The wind whispered through the trees.”',
    'choices'      => json_encode([
        'Metaphor',
        'Simile',
        'Personification',
        'Hyperbole'
    ]),
    'answer'       => 'Personification',
    'explanation'  => 'Attributing human action (“whispered”) to the wind is personification.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 71
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Compute: ¾ + ²/₅ = ?',
    'choices'      => json_encode([
        '23/20',
        '11/20',
        '9/20',
        '1/20'
    ]),
    'answer'       => '23/20',
    'explanation'  => '¾=15/20, ²/₅=8/20, sum=23/20.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 72
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Which is an example of a democracy?',
    'choices'      => json_encode([
        'Direct election of leaders',
        'Hereditary monarchy',
        'Military dictatorship',
        'Absolute monarchy'
    ]),
    'answer'       => 'Direct election of leaders',
    'explanation'  => 'Democracies elect officials by popular vote.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 73
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Atoms that gain electrons become:',
    'choices'      => json_encode([
        'Cations',
        'Anions',
        'Isotopes',
        'Molecules'
    ]),
    'answer'       => 'Anions',
    'explanation'  => 'Gaining electrons gives a negative charge (anions).',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 74
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Identify the pronoun in: “They brought their books to class.”',
    'choices'      => json_encode([
        'They',
        'Brought',
        'Books',
        'Class'
    ]),
    'answer'       => 'They',
    'explanation'  => '“They” replaces the subject and is a pronoun.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 75
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'What is the perimeter of a rectangle with length 8 cm and width 3 cm?',
    'choices'      => json_encode([
        '11 cm',
        '22 cm',
        '24 cm',
        '48 cm'
    ]),
    'answer'       => '22 cm',
    'explanation'  => 'Perimeter P=2(l+w)=2(8+3)=22 cm.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 76
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Which galaxy is Earth located in?',
    'choices'      => json_encode([
        'Andromeda',
        'Whirlpool',
        'Sombrero',
        'Milky Way'
    ]),
    'answer'       => 'Milky Way',
    'explanation'  => 'Our solar system resides in the Milky Way galaxy.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 77
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Translate to English: “Mahal kita.”',
    'choices'      => json_encode([
        'I miss you',
        'I love you',
        'I hate you',
        'I see you'
    ]),
    'answer'       => 'I love you',
    'explanation'  => '“Mahal kita” means “I love you.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 78
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Who is known as the “Father of Filipino Nationalism”?',
    'choices'      => json_encode([
        'Andres Bonifacio',
        'Emilio Aguinaldo',
        'Jose Rizal',
        'Apolinario Mabini'
    ]),
    'answer'       => 'Jose Rizal',
    'explanation'  => 'Rizal’s writings inspired the nationalist movement.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 79
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'What is the comparative form of “good”?',
    'choices'      => json_encode([
        'More good',
        'Better',
        'Gooder',
        'Best'
    ]),
    'answer'       => 'Better',
    'explanation'  => '“Better” is the correct comparative form of “good.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 80
$batch[] = [
    'subject_id'   => 7,
    'part'         => 4,
    'question'     => 'Fill in the blank: “If I ____ the answer, I would tell you.”',
    'choices'      => json_encode([
        'know',
        'knew',
        'known',
        'knowing'
    ]),
    'answer'       => 'knew',
    'explanation'  => 'The correct conditional form uses past tense “knew.”',
    'created_at'   => $now,
    'updated_at'   => $now,
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

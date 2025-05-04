<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart10Seeder extends Seeder
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
       // 181
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Identify the subordinate clause in the sentence: “When she arrived, the meeting had already started.”',
    'choices'      => json_encode([
        'When she arrived',
        'the meeting',
        'had already started',
        'she arrived'
    ]),
    'answer'       => 'When she arrived',
    'explanation'  => 'A subordinate (dependent) clause cannot stand alone and begins with “when.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 182
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Choose the sentence with correct use of “who” or “whom.”',
    'choices'      => json_encode([
        'Whom do you think will win?',
        'Who did you give the book to?',
        'Who did you speak with?',
        'Whom is calling?'
    ]),
    'answer'       => 'Whom do you think will win?',
    'explanation'  => '“Whom” is the object of “do you think,” making this choice grammatically correct.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 183
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Fill in the blank: “She insisted ___ paying for the meal.”',
    'choices'      => json_encode([
        'in',
        'on',
        'at',
        'for'
    ]),
    'answer'       => 'on',
    'explanation'  => 'The correct phrasal verb is “insisted on.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 184
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Select the synonym for “enigmatic.”',
    'choices'      => json_encode([
        'Transparent',
        'Mysterious',
        'Simple',
        'Obvious'
    ]),
    'answer'       => 'Mysterious',
    'explanation'  => '“Enigmatic” means puzzling or mysterious.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 185
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Simplify the expression: (x³)(x²) = ?',
    'choices'      => json_encode([
        'x³⁺²',
        'x⁶',
        'x⁵',
        'x⁻¹'
    ]),
    'answer'       => 'x⁵',
    'explanation'  => 'When multiplying exponents with the same base, add the exponents: 3 + 2 = 5.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 186
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'For the quadratic equation x² − 5x + 6 = 0, what is the sum of its roots?',
    'choices'      => json_encode([
        '−6',
        '5',
        '6',
        '−5'
    ]),
    'answer'       => '5',
    'explanation'  => 'Sum of roots = −(−5)/1 = 5 according to Vieta’s formulas.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 187
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Solve for x: (x − 2)² = 16.',
    'choices'      => json_encode([
        'x = 6 or x = −2',
        'x = 4 or x = 0',
        'x = 2 or x = −2',
        'x = 8 or x = −4'
    ]),
    'answer'       => 'x = 6 or x = −2',
    'explanation'  => 'x − 2 = ±4 ⇒ x = 2 ± 4 ⇒ x = 6 or x = −2.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 188
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'What is the area of a circle with radius 14 cm? (Use A = πr²)',
    'choices'      => json_encode([
        '196π cm²',
        '28π cm²',
        '49π cm²',
        '392π cm²'
    ]),
    'answer'       => '196π cm²',
    'explanation'  => 'A = π(14)² = 196π cm².',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 189
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Convert the fraction 3/8 to a decimal.',
    'choices'      => json_encode([
        '0.375',
        '0.45',
        '0.38',
        '0.635'
    ]),
    'answer'       => '0.375',
    'explanation'  => '3 ÷ 8 = 0.375.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 190
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Which gas is a major greenhouse gas contributing to global warming?',
    'choices'      => json_encode([
        'Oxygen',
        'Nitrogen',
        'Carbon dioxide',
        'Argon'
    ]),
    'answer'       => 'Carbon dioxide',
    'explanation'  => 'CO₂ traps heat in the atmosphere, driving the greenhouse effect.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 191
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Which organelle contains genetic material and controls cell activities?',
    'choices'      => json_encode([
        'Mitochondrion',
        'Nucleus',
        'Ribosome',
        'Golgi apparatus'
    ]),
    'answer'       => 'Nucleus',
    'explanation'  => 'The nucleus houses DNA and regulates gene expression.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 192
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'What is the chemical symbol for gold?',
    'choices'      => json_encode([
        'Ag',
        'Au',
        'Gd',
        'Go'
    ]),
    'answer'       => 'Au',
    'explanation'  => 'Gold’s symbol “Au” comes from the Latin “aurum.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 193
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Which type of chemical bond involves the sharing of electron pairs?',
    'choices'      => json_encode([
        'Ionic bond',
        'Covalent bond',
        'Hydrogen bond',
        'Metallic bond'
    ]),
    'answer'       => 'Covalent bond',
    'explanation'  => 'Covalent bonds share electrons between atoms.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 194
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Who wrote the lyrics of the Philippine national anthem “Lupang Hinirang”?',
    'choices'      => json_encode([
        'Julian Felipe',
        'Jose Palma',
        'Jose Rizal',
        'Levi Celerio'
    ]),
    'answer'       => 'Jose Palma',
    'explanation'  => 'Jose Palma wrote the Spanish lyrics in 1899, later translated to Filipino.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 195
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Which island is the largest by land area in the Philippines?',
    'choices'      => json_encode([
        'Mindanao',
        'Luzon',
        'Visayas',
        'Palawan'
    ]),
    'answer'       => 'Luzon',
    'explanation'  => 'Luzon is the largest island in the Philippines by area.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 196
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Choose the correct antonym of “loquacious.”',
    'choices'      => json_encode([
        'Talkative',
        'Verbose',
        'Taciturn',
        'Chatty'
    ]),
    'answer'       => 'Taciturn',
    'explanation'  => '“Taciturn” means habitually silent or uncommunicative, opposite of “loquacious.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 197
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Which ocean borders the eastern coast of the Philippines?',
    'choices'      => json_encode([
        'Atlantic Ocean',
        'Indian Ocean',
        'Arctic Ocean',
        'Pacific Ocean'
    ]),
    'answer'       => 'Pacific Ocean',
    'explanation'  => 'The Pacific Ocean lies to the east of the Philippine archipelago.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 198
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Which system in the human body is responsible for transporting oxygen and nutrients?',
    'choices'      => json_encode([
        'Respiratory system',
        'Nervous system',
        'Circulatory system',
        'Digestive system'
    ]),
    'answer'       => 'Circulatory system',
    'explanation'  => 'The circulatory (cardiovascular) system carries blood with oxygen and nutrients.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 199
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Which branch of the Philippine government interprets laws?',
    'choices'      => json_encode([
        'Legislative',
        'Executive',
        'Judicial',
        'Administrative'
    ]),
    'answer'       => 'Judicial',
    'explanation'  => 'The judiciary interprets and applies the law in legal cases.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 200
$batch[] = [
    'subject_id'   => 7,
    'part'         => 10,
    'question'     => 'Select the correct past perfect form: “By the time we arrived, they ____ dinner.”',
    'choices'      => json_encode([
        'have had',
        'had had',
        'has had',
        'having had'
    ]),
    'answer'       => 'had had',
    'explanation'  => 'Past perfect uses “had” + past participle: “had had.”',
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

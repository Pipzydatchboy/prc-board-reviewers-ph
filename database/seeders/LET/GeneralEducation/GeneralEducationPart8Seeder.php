<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart8Seeder extends Seeder
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
       // 141
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Which sentence is in the active voice?',
    'choices'      => json_encode([
        'The novel was read by Maria.',
        'Maria read the novel.',
        'The novel had been read.',
        'The novel is being read.'
    ]),
    'answer'       => 'Maria read the novel.',
    'explanation'  => 'The subject “Maria” performs the action directly.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 142
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Solve for y: 4y + 5 = 21.',
    'choices'      => json_encode([
        'y = 2',
        'y = 3',
        'y = 4',
        'y = 5'
    ]),
    'answer'       => 'y = 4',
    'explanation'  => '4y = 16 ⇒ y = 4.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 143
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Which organ pumps blood throughout the body?',
    'choices'      => json_encode([
        'Lungs',
        'Liver',
        'Heart',
        'Kidneys'
    ]),
    'answer'       => 'Heart',
    'explanation'  => 'The heart circulates blood via its chambers and valves.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 144
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'What is the highest mountain in the Philippines?',
    'choices'      => json_encode([
        'Mount Pinatubo',
        'Mount Mayon',
        'Mount Apo',
        'Mount Pulag'
    ]),
    'answer'       => 'Mount Apo',
    'explanation'  => 'Mount Apo in Mindanao stands at 2,954 meters.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 145
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'What does PEMDAS stand for in order of operations?',
    'choices'      => json_encode([
        'Parentheses, Exponents, Multiplication, Division, Addition, Subtraction',
        'Please Excuse My Dear Aunt Sally',
        'Parentheses, Exponents, Multiplication, Division, Subtraction, Addition',
        'Both A and B'
    ]),
    'answer'       => 'Both A and B',
    'explanation'  => 'PEMDAS is an acronym and mnemonic for the same sequence.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 146
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Identify the figurative device: “Time is a thief.”',
    'choices'      => json_encode([
        'Simile',
        'Metaphor',
        'Personification',
        'Hyperbole'
    ]),
    'answer'       => 'Metaphor',
    'explanation'  => 'It directly equates time with a thief.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 147
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Simplify: √49 + ²√16 = ?',
    'choices'      => json_encode([
        '7 + 4',
        '7 + 2',
        '√(49+16)',
        '13'
    ]),
    'answer'       => '7 + 4',
    'explanation'  => '√49 = 7 and ²√16 = 4.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 148
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Which planet is known as the Red Planet?',
    'choices'      => json_encode([
        'Venus',
        'Mars',
        'Jupiter',
        'Saturn'
    ]),
    'answer'       => 'Mars',
    'explanation'  => 'Mars appears red due to iron oxide on its surface.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 149
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Piliin ang wastong panlapi sa “nag-aaral.”',
    'choices'      => json_encode([
        'nag- + aral + -in',
        'um- + aral',
        'nag- + aral + -an',
        'mag- + aral'
    ]),
    'answer'       => 'mag- + aral',
    'explanation'  => '“Mag-aaral” is future tense; “nag-aaral” uses mag- root form.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 150
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Fill in the blank: “Mahalaga ang ____ ng edukasyon.”',
    'choices'      => json_encode([
        'kahulugan',
        'kahalagahan',
        'kaalaman',
        'kalusugan'
    ]),
    'answer'       => 'kahalagahan',
    'explanation'  => '“Kahalagahan” means importance.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 151
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Identify the complement: “She became a teacher.”',
    'choices'      => json_encode([
        'She',
        'became',
        'a teacher',
        'None'
    ]),
    'answer'       => 'a teacher',
    'explanation'  => '“A teacher” completes the meaning of the linking verb.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 152
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Solve the system: x + y = 5, x − y = 1.',
    'choices'      => json_encode([
        'x=3,y=2',
        'x=2,y=3',
        'x=5,y=0',
        'x=1,y=4'
    ]),
    'answer'       => 'x=3,y=2',
    'explanation'  => 'Add: 2x = 6 ⇒ x=3; then y=2.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 153
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'What is the chemical symbol for iron?',
    'choices'      => json_encode([
        'Fe',
        'Ir',
        'In',
        'I'
    ]),
    'answer'       => 'Fe',
    'explanation'  => 'Iron’s symbol Fe comes from Latin “ferrum.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 154
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'What is the capital of Bohol province?',
    'choices'      => json_encode([
        'Tagbilaran',
        'Dauis',
        'Cortes',
        'Antequera'
    ]),
    'answer'       => 'Tagbilaran',
    'explanation'  => 'Tagbilaran City is the provincial capital of Bohol.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 155
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'In physics, velocity is defined as:',
    'choices'      => json_encode([
        'Speed in a given direction',
        'Rate of temperature change',
        'Distance divided by time',
        'Force per unit mass'
    ]),
    'answer'       => 'Speed in a given direction',
    'explanation'  => 'Velocity includes both magnitude and direction.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 156
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Which word in “He quickly finished the test.” is an adverb?',
    'choices'      => json_encode([
        'He',
        'quickly',
        'finished',
        'test'
    ]),
    'answer'       => 'quickly',
    'explanation'  => '“Quickly” modifies the verb “finished.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 157
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Which measures total market value of goods and services in a year?',
    'choices'      => json_encode([
        'GDP',
        'CPI',
        'GNP',
        'HDI'
    ]),
    'answer'       => 'GDP',
    'explanation'  => 'Gross Domestic Product measures domestic output.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 158
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Which term describes living and nonliving components of an ecosystem?',
    'choices'      => json_encode([
        'Biotic and abiotic',
        'Producers and consumers',
        'Herbivores and carnivores',
        'Flora and fauna'
    ]),
    'answer'       => 'Biotic and abiotic',
    'explanation'  => 'Biotic means living; abiotic means nonliving.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 159
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Identify the pronoun type of “this” in “This is important.”',
    'choices'      => json_encode([
        'Personal pronoun',
        'Demonstrative pronoun',
        'Relative pronoun',
        'Interrogative pronoun'
    ]),
    'answer'       => 'Demonstrative pronoun',
    'explanation'  => '“This” points to a specific thing.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 160
$batch[] = [
    'subject_id'   => 7,
    'part'         => 8,
    'question'     => 'Which law is the Philippine Solid Waste Management Act?',
    'choices'      => json_encode([
        'RA 9003',
        'RA 9275',
        'RA 8749',
        'RA 7160'
    ]),
    'answer'       => 'RA 9003',
    'explanation'  => 'RA 9003, enacted in 2001, addresses solid waste management.',
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

<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart3Seeder extends Seeder
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
       // 41
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Fill in the blank: “Despite __________, she finished the project on time.”',
    'choices'      => json_encode([
        'adversity',
        'adversary',
        'advertise',
        'advisable'
    ]),
    'answer'       => 'adversity',
    'explanation'  => '“Adversity” means difficulties or misfortune, fitting the contrasting clause.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 42
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Which sentence contains a simile?',
    'choices'      => json_encode([
        'He is as brave as a lion.',
        'He fought with lion-like courage.',
        'He was the lion of the team.',
        'He roared like a lioness.'
    ]),
    'answer'       => 'He is as brave as a lion.',
    'explanation'  => 'A simile directly compares using “as” or “like.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 43
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Simplify the expression: 2(x + 3) − 4x.',
    'choices'      => json_encode([
        '-2x + 6',
        '2x + 6',
        '6x − 4',
        '−2x − 6'
    ]),
    'answer'       => '-2x + 6',
    'explanation'  => 'Distribute: 2x + 6 − 4x = −2x + 6.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 44
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'What is the sum of the interior angles of a pentagon?',
    'choices'      => json_encode([
        '540°',
        '360°',
        '720°',
        '180°'
    ]),
    'answer'       => '540°',
    'explanation'  => 'Sum = (n−2)×180° = 3×180° = 540° for n=5.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 45
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'In which organelle does photosynthesis occur?',
    'choices'      => json_encode([
        'Chloroplast',
        'Mitochondrion',
        'Nucleus',
        'Endoplasmic reticulum'
    ]),
    'answer'       => 'Chloroplast',
    'explanation'  => 'Chloroplasts contain chlorophyll for photosynthesis in plant cells.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 46
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'What is the pH of a neutral aqueous solution at 25°C?',
    'choices'      => json_encode([
        '7',
        '1',
        '14',
        '0'
    ]),
    'answer'       => '7',
    'explanation'  => 'pH 7 is neutral; below 7 is acidic, above 7 is basic.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 47
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Which statement best describes Newton’s Third Law?',
    'choices'      => json_encode([
        'For every action there is an equal and opposite reaction.',
        'Objects in motion stay in motion unless acted upon.',
        'Force equals mass times acceleration.',
        'Energy cannot be created or destroyed.'
    ]),
    'answer'       => 'For every action there is an equal and opposite reaction.',
    'explanation'  => 'That is the definition of Newton’s Third Law of Motion.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 48
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Who was the first President of the Philippines?',
    'choices'      => json_encode([
        'Emilio Aguinaldo',
        'Manuel Quezon',
        'Jose P. Laurel',
        'Sergio Osmeña'
    ]),
    'answer'       => 'Emilio Aguinaldo',
    'explanation'  => 'Aguinaldo served as president of the First Philippine Republic (1899–1901).',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 49
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Which article of the 1987 Constitution establishes separation of powers?',
    'choices'      => json_encode([
        'Article VI',
        'Article III',
        'Article II',
        'Article IV'
    ]),
    'answer'       => 'Article VI',
    'explanation'  => 'Article VI deals with the Legislative Department, part of the separation of powers.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 50
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Which Philippine region is home to the Chocolate Hills?',
    'choices'      => json_encode([
        'Central Visayas',
        'Cordillera Administrative',
        'Davao Region',
        'Calabarzon'
    ]),
    'answer'       => 'Central Visayas',
    'explanation'  => 'The Chocolate Hills are located in Bohol, part of Central Visayas.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 51
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Inflation is best defined as:',
    'choices'      => json_encode([
        'General increase in prices',
        'Decrease in money supply',
        'Stable purchasing power',
        'Fixed interest rates'
    ]),
    'answer'       => 'General increase in prices',
    'explanation'  => 'Inflation means the overall price level of goods and services rises.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 52
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'At what minimum age does a Filipino citizen gain the right to vote?',
    'choices'      => json_encode([
        '18',
        '16',
        '21',
        '20'
    ]),
    'answer'       => '18',
    'explanation'  => 'The Philippine Constitution grants suffrage at age 18.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 53
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Choose the correct indefinite article: “_____ honor.”',
    'choices'      => json_encode([
        'An honor',
        'A honor',
        'The honor',
        'Some honor'
    ]),
    'answer'       => 'An honor',
    'explanation'  => '“Honor” begins with a vowel sound, so use “an.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 54
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Ano ang kasingkahulugan ng “masigla”?',
    'choices'      => json_encode([
        'Masaya',
        'Matamlay',
        'Malungkot',
        'Mabagal'
    ]),
    'answer'       => 'Masaya',
    'explanation'  => '“Masigla” ay nangangahulugang malakas ang enerhiya o buhay na buhay, katulad ng “masaya.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 55
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Piliin ang uri ng pananalita ng salitang “nakakatawa.”',
    'choices'      => json_encode([
        'Pang-uri',
        'Pandiwa',
        'Pang-abay',
        'Pangngalan'
    ]),
    'answer'       => 'Pang-uri',
    'explanation'  => '“Nakakatawa” ay naglalarawan ng bagay na nakapagpapatawa, kaya pang-uri.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 56
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Piliin ang wastong gamit ng “daw” at “raw” sa pangungusap.',
    'choices'      => json_encode([
        'Gagamitin ang “daw” kapag sumusunod ang panghalip na paunang tunog',
        'Parehong gamit lamang ang “daw” at “raw”',
        '“Raw” kapag ang naunang salita ay nagtatapos sa katinig na “w”',
        '“Daw” kapag nagsasalita ang unang panauhan'
    ]),
    'answer'       => 'Gagamitin ang “daw” kapag sumusunod ang panghalip na paunang tunog',
    'explanation'  => '“Daw” ay ginagamit kung ang katagang sinusundan ay nag-uumpisa sa patinig o tunog na malambot.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 57
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Which trophic level do herbivores occupy in a food chain?',
    'choices'      => json_encode([
        'Primary consumers',
        'Producers',
        'Secondary consumers',
        'Tertiary consumers'
    ]),
    'answer'       => 'Primary consumers',
    'explanation'  => 'Herbivores eat producers and are the first consumers in a food chain.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 58
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'If a map scale is 1:100,000, 1 cm on the map represents how many kilometers on the ground?',
    'choices'      => json_encode([
        '1 km',
        '10 km',
        '100 km',
        '0.1 km'
    ]),
    'answer'       => '1 km',
    'explanation'  => '1 cm = 100,000 cm = 1 km in real distance.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 59
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'If P(A) = 0.3, what is P(not A)?',
    'choices'      => json_encode([
        '0.7',
        '0.3',
        '1.3',
        '0'
    ]),
    'answer'       => '0.7',
    'explanation'  => 'P(not A) = 1 − P(A) = 1 − 0.3 = 0.7.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 60
$batch[] = [
    'subject_id'   => 7,
    'part'         => 3,
    'question'     => 'Choose the correct article: “_____ university is prestigious.”',
    'choices'      => json_encode([
        'A university',
        'An university',
        'The university',
        'Some university'
    ]),
    'answer'       => 'A university',
    'explanation'  => '“University” begins with a consonant sound (“yoo”), so use “a.”',
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

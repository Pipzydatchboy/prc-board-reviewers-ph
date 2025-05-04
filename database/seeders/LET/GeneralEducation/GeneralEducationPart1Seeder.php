<?php

namespace Database\Seeders\LET\GeneralEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneralEducationPart1Seeder extends Seeder
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
       // 1
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Identify the part of speech of the word “quickly” in the sentence: “She ran quickly to catch the bus.”',
    'choices'      => json_encode([
        'Noun',
        'Verb',
        'Adverb',
        'Adjective'
    ]),
    'answer'       => 'Adverb',
    'explanation'  => '“Quickly” modifies the verb “ran,” making it an adverb.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 2
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Choose the sentence with correct subject–verb agreement.',
    'choices'      => json_encode([
        'The group of students are excited.',
        'The list of items are on the desk.',
        'The teacher and the principal is arriving soon.',
        'The team of researchers is publishing its findings.'
    ]),
    'answer'       => 'The team of researchers is publishing its findings.',
    'explanation'  => '“Team” is a singular collective noun, so “is publishing” is correct.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 3
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'What is the meaning of the word “mitigate”?',
    'choices'      => json_encode([
        'To aggravate',
        'To alleviate',
        'To ignore',
        'To celebrate'
    ]),
    'answer'       => 'To alleviate',
    'explanation'  => '“Mitigate” means to make less severe or alleviate.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 4
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Which is the antonym of “ubiquitous”?',
    'choices'      => json_encode([
        'Omnipresent',
        'Rare',
        'Common',
        'Widespread'
    ]),
    'answer'       => 'Rare',
    'explanation'  => '“Ubiquitous” means present everywhere; its antonym is “rare.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 5
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Fill in the blank: “She ____ to the store yesterday.”',
    'choices'      => json_encode([
        'goes',
        'gone',
        'went',
        'going'
    ]),
    'answer'       => 'went',
    'explanation'  => '“Went” is the simple past tense of “go,” matching “yesterday.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 6
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Identify the direct object in: “The teacher praised the student.”',
    'choices'      => json_encode([
        'The teacher',
        'Praised',
        'The student',
        'None'
    ]),
    'answer'       => 'The student',
    'explanation'  => '“The student” receives the action of the verb “praised.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 7
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Which sentence is in the passive voice?',
    'choices'      => json_encode([
        'The cat chased the mouse.',
        'The mouse was chased by the cat.',
        'The cat is chasing the mouse.',
        'The cat will chase the mouse.'
    ]),
    'answer'       => 'The mouse was chased by the cat.',
    'explanation'  => 'Subject “mouse” receives the action, forming passive voice.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 8
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Choose the correctly punctuated dialogue:',
    'choices'      => json_encode([
        '“I’m coming,” she said.',
        '“I’m coming” she said.',
        '“I’m coming.” she said.',
        'I’m coming, she said.'
    ]),
    'answer'       => '“I’m coming,” she said.',
    'explanation'  => 'Comma goes inside the quotation before the dialogue tag.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 9
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Which is a synonym of “candid”?',
    'choices'      => json_encode([
        'Reserved',
        'Honest',
        'Deceptive',
        'Timid'
    ]),
    'answer'       => 'Honest',
    'explanation'  => '“Candid” means frank or honest.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 10
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Select the sentence with correct parallel structure:',
    'choices'      => json_encode([
        'She likes reading, to write, and jogs daily.',
        'She likes to read, writing, and jogging.',
        'She likes reading, writing, and jogging.',
        'She likes reading, writing, and to jog.'
    ]),
    'answer'       => 'She likes reading, writing, and jogging.',
    'explanation'  => 'All three gerunds follow the same form.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 11
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Ano ang kasingkahulugan ng “malugod”?',
    'choices'      => json_encode([
        'Masaya',
        'Mabagal',
        'Malungkot',
        'Tama'
    ]),
    'answer'       => 'Masaya',
    'explanation'  => '“Malugod” ay nangangahulugang masaya o maligaya.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 12
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Piliin ang wastong gamit: “Ang bata _____ lumalaro sa labas.”',
    'choices'      => json_encode([
        'ay',
        'ya',
        'a',
        'nga'
    ]),
    'answer'       => 'ay',
    'explanation'  => 'Gagamitin ang “ay” sa pormal na panaguri: “Ang bata ay lumalaro…”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 13
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Ano ang bahagi ng pananalita ng salitang “kaibigan”?',
    'choices'      => json_encode([
        'Panghalip',
        'Pangngalan',
        'Pandiwa',
        'Pang-uri'
    ]),
    'answer'       => 'Pangngalan',
    'explanation'  => '“Kaibigan” ay tumutukoy sa tao, kaya pangngalan ito.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 14
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Tukuyin ang uri ng pangungusap: “Huwag kang malungkot.”',
    'choices'      => json_encode([
        'Patakaran',
        'Pautos',
        'Paturol',
        'Padamdam'
    ]),
    'answer'       => 'Pautos',
    'explanation'  => 'Nagbibigay ng utos o pakiusap ang pangungusap, kaya patautos.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 15
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Piliin ang wastong bantas: “Umuwi siya    ”',
    'choices'      => json_encode([
        '.',
        ',',
        '!',
        '?'
    ]),
    'answer'       => '.',
    'explanation'  => 'Tuwirang pahayag ang “Umuwi siya.” kaya tuldok.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 16
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Ano ang kasingkasalungat ng “magaan”?',
    'choices'      => json_encode([
        'Mabigat',
        'Maliwanag',
        'Madulas',
        'Mabagal'
    ]),
    'answer'       => 'Mabigat',
    'explanation'  => '“Mabigat” ang kabaligtaran ng “magaan.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 17
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Piliin ang pangungusap na may tamang ayos ng salita:',
    'choices'      => json_encode([
        'Sa parke naglalaro ang mga bata.',
        'Naglalaro sa parke ang mga bata.',
        'Ang mga bata naglalaro sa parke.',
        'Naglalaro ang mga bata sa parke.'
    ]),
    'answer'       => 'Naglalaro sa parke ang mga bata.',
    'explanation'  => 'Ang pandiwa ay dapat unahin, saka ang panimbang na pang-uri, saka ang simuno.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 18
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Ano ang uri ng panghalip sa pangungusap: “Ito ang aking aklat.”',
    'choices'      => json_encode([
        'Panao',
        'Panlunan',
        'Panaklaw',
        'Pamatlig'
    ]),
    'answer'       => 'Pamatlig',
    'explanation'  => '“Ito” ay tumutukoy sa bagay na malapit, kaya pamatlig.',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 19
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Piliin ang wastong pagbigkas para sa “isipan.”',
    'choices'      => json_encode([
        'i-si-pán',
        'i-si-pàn',
        'i-sí-pan',
        'í-si-pan'
    ]),
    'answer'       => 'i-si-pán',
    'explanation'  => 'Ang wastong diin ay nasa huling pantig, kaya “i-si-pán.”',
    'created_at'   => $now,
    'updated_at'   => $now,
];

// 20
$batch[] = [
    'subject_id'   => 7,
    'part'         => 1,
    'question'     => 'Ano ang pokus ng pandiwang “ginawa” sa pangungusap: “Ginawa niya ang proyekto kahapon.”',
    'choices'      => json_encode([
        'Tagaganap',
        'Layon',
        'Gamitan',
        'Ganapan'
    ]),
    'answer'       => 'Layon',
    'explanation'  => 'Ang pokus-layon ay nakatuon sa layon o tinitingnang bagay, dito “ang proyekto.”',
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

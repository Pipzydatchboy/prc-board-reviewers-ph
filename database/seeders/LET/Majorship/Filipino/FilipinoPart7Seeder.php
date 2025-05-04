<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart7Seeder extends Seeder
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
       $batch = [];

// 121
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang Skopos Theory sa pagsasalin?",
    'choices'     => json_encode([
        'Pagtutuon sa layunin ng salin',
        'Pagsunod sa estrakturang pang-gramatika',
        'Panuntunan sa pantig at tugma',
        'Pamamaraan ng malikhaing pagsulat',
    ]),
    'answer'      => 'Pagtutuon sa layunin ng salin',
    'explanation' => 'Ang Skopos Theory ay nakatuon sa layunin (purpose) ng pagsasalin ayon sa target audience.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 122
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang ibig sabihin ng foreignization sa pagsasalin?",
    'choices'     => json_encode([
        'Pagpapanatili ng kulturang pinagmulan',
        'Pag-domesticate ng teksto',
        'Pagpapalit ng genre',
        'Pagtatanggal ng footnote',
    ]),
    'answer'      => 'Pagpapanatili ng kulturang pinagmulan',
    'explanation' => 'Ang foreignization ay pagpapanatili ng cultural markers ng original na teksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 123
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Sino ang may akda ng 'Romeo and Juliet' na isinalin sa Filipino bilang 'Romeo at Juliet'?",
    'choices'     => json_encode([
        'William Shakespeare',
        'Christopher Marlowe',
        'John Milton',
        'Charles Dickens',
    ]),
    'answer'      => 'William Shakespeare',
    'explanation' => 'Si Shakespeare ang sumulat ng tragedy na "Romeo and Juliet" noong ika-16 na siglo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 124
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Sino ang sumulat ng 'The Odyssey'?",
    'choices'     => json_encode([
        'Homer',
        'Virgil',
        'Ovid',
        'Sophocles',
    ]),
    'answer'      => 'Homer',
    'explanation' => 'Ang "The Odyssey" ay epikong Griyego na iginagalang kay Homer.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 125
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Sino ang may akda ng 'The Metamorphosis'?",
    'choices'     => json_encode([
        'Franz Kafka',
        'Albert Camus',
        'Marcel Proust',
        'James Joyce',
    ]),
    'answer'      => 'Franz Kafka',
    'explanation' => 'Si Kafka ang sumulat ng maikling kuwentong "The Metamorphosis".',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 126
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang dynamic equivalence sa teorya ng pagsasalin?",
    'choices'     => json_encode([
        'Pagkamit ng parehong epekto sa mambabasa',
        'Literal na direktang pagsasalin',
        'Pagbabago ng tono ng orihinal',
        'Pagbawas ng footnotes',
    ]),
    'answer'      => 'Pagkamit ng parehong epekto sa mambabasa',
    'explanation' => 'Ang dynamic equivalence ay pagtuon sa epekto o response na gaganapin sa target audience.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 127
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang literal translation?",
    'choices'     => json_encode([
        'Pagsasalin ng salita-sa-salitang kahulugan',
        'Pagsasalin na malaya ang estilo',
        'Pagsusuri ng orihinal na teksto',
        'Pagbabahagi ng footnotes',
    ]),
    'answer'      => 'Pagsasalin ng salita-sa-salitang kahulugan',
    'explanation' => 'Literal translation ay salin sa pinakamalapit na salita ng source language.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 128
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang interpretive translation?",
    'choices'     => json_encode([
        'Pagpapaliwanag para sa kakulangan sa konteksto',
        'Literal na pagsasalin',
        'Vertical na pagsasalin',
        'Pagbabawas ng buod',
    ]),
    'answer'      => 'Pagpapaliwanag para sa kakulangan sa konteksto',
    'explanation' => 'Interpretive translation ay nagdaragdag ng paliwanag upang matiyak ang ibig sabihin.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 129
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Sino ang may-akda ng 'Don Quixote'?",
    'choices'     => json_encode([
        'Miguel de Cervantes',
        'Gabriel García Márquez',
        'Pablo Neruda',
        'Fernando Pessoa',
    ]),
    'answer'      => 'Miguel de Cervantes',
    'explanation' => 'Ang "Don Quixote" ay nobelang Espanyol ni Cervantes noong ika-17 siglo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 130
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang functional approach sa pagsasalin?",
    'choices'     => json_encode([
        'Pagtuon sa function at gamit ng teksto',
        'Literal na salita-sa-salita',
        'Pagtuon sa footnotes',
        'Pagbabawas ng sukat',
    ]),
    'answer'      => 'Pagtuon sa function at gamit ng teksto',
    'explanation' => 'Functional approach ay nakatuon sa gamit ng teksto sa target na konteksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 131
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Sino ang may akda ng 'One Hundred Years of Solitude'?",
    'choices'     => json_encode([
        'Gabriel García Márquez',
        'Carlos Fuentes',
        'Jorge Luis Borges',
        'Pablo Neruda',
    ]),
    'answer'      => 'Gabriel García Márquez',
    'explanation' => 'Ang nobelang ito ay isinulat ni Gabo, kilala ring magical realism.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 132
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang hamon sa pagsasalin ng tula?",
    'choices'     => json_encode([
        'Pagpapanatili ng ritmo at tugma',
        'Pagbasa ng buo',
        'Pag-alis ng footnotes',
        'Pagsusulat ng sanaysay',
    ]),
    'answer'      => 'Pagpapanatili ng ritmo at tugma',
    'explanation' => 'Mahirap panatilihin ang original na sukat, tugma, at estilong pampanitikan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 133
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang kahalagahan ng kulturang source at target sa pagsasalin?",
    'choices'     => json_encode([
        'Nagbibigay ng tamang interpretasyon at konteksto',
        'Walang epekto',
        'Pormalidad lamang',
        'Grammar rules lang',
    ]),
    'answer'      => 'Nagbibigay ng tamang interpretasyon at konteksto',
    'explanation' => 'Mahalaga ang kulturang kultural sa pagpapakahulugan ng teksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 134
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang back-translation?",
    'choices'     => json_encode([
        'Pagsasalin pabalik sa source language para i-verify',
        'Pagbabawas ng teksto',
        'Pagsusulit sa klase',
        'Silent reading',
    ]),
    'answer'      => 'Pagsasalin pabalik sa source language para i-verify',
    'explanation' => 'Back-translation ay technique para i-validate ang katumpakan ng salin.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 135
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang CAT tools sa pagsasalin?",
    'choices'     => json_encode([
        'Computer-Assisted Translation software',
        'Manual na diction',
        'Silent reading tools',
        'Solely machine translation',
    ]),
    'answer'      => 'Computer-Assisted Translation software',
    'explanation' => 'CAT tools ay software na tumutulong sa memory, terminolohiya, at workflow.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 136
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang machine translation?",
    'choices'     => json_encode([
        'Awtomatikong pagsasalin gamit ang AI at algorithms',
        'Translation memory only',
        'Manual na pag-eedit',
        'Human translation',
    ]),
    'answer'      => 'Awtomatikong pagsasalin gamit ang AI at algorithms',
    'explanation' => 'Machine translation ay awtomatikong pagsasalin manggagaling sa computer.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 137
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang translator's invisibility?",
    'choices'     => json_encode([
        'Teoryang nagsasabing dapat hindi halata ang salin',
        'Pagtakip sa footnotes',
        'Paglikha ng bagong akda',
        'Silent reading approach',
    ]),
    'answer'      => 'Teoryang nagsasabing dapat hindi halata ang salin',
    'explanation' => 'Ayon kay Venuti, ang salin dapat lihim na magmukhang orihinal na akda.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 138
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang equivalence of form vs equivalence of meaning?",
    'choices'     => json_encode([
        'Porma vs kahulugan sa pagsasalin',
        'Pagsusuri ng estilo',
        'Pagliit ng teksto',
        'Pagdagdag ng footnotes',
    ]),
    'answer'      => 'Porma vs kahulugan sa pagsasalin',
    'explanation' => 'Estilong pamporma ay pagsunod sa istruktura; pampakahulugan ay sa diwa.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 139
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Sino ang sumulat ng 'The Little Prince'?",
    'choices'     => json_encode([
        'Antoine de Saint-Exupéry',
        'Victor Hugo',
        'Jules Verne',
        'Mark Twain',
    ]),
    'answer'      => 'Antoine de Saint-Exupéry',
    'explanation' => 'Ang "The Little Prince" ay isinulat ni Saint-Exupéry noong 1943.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 140
$batch[] = [
    'subject_id'  => 11,
    'part'        => 7,
    'question'    => "Ano ang layunin ng literary translation?",
    'choices'     => json_encode([
        'Panatilihin ang estilong pampanitikan ng orihinal',
        'Baguhin ang tema',
        'Tanggalin ang cultural markers',
        'Isalin nang literal lang',
    ]),
    'answer'      => 'Panatilihin ang estilong pampanitikan ng orihinal',
    'explanation' => 'Nilalayon ng literary translation na mapanatili ang literary aesthetic ng original.',
    'created_at'  => $now,
    'updated_at'  => $now,
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

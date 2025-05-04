<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart6Seeder extends Seeder
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

// 101
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang epikong 'Biag ni Lam-ang'?",
    'choices'     => json_encode([
        'Tuluy-tuloy na kwentong-bayan ng Ilokano',
        'Maikling kuwentong Batangas',
        'Tulang panudyo ng Tagalog',
        'Sanaysay ni Rizal',
    ]),
    'answer'      => 'Tuluy-tuloy na kwentong-bayan ng Ilokano',
    'explanation' => 'Ang Biag ni Lam-ang ay kilalang epikong Ilokano na naitala noong panahon ng Espanyol.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 102
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang ibig sabihin ng 'salawikain'?",
    'choices'     => json_encode([
        'Pahayag na naglalahad ng karunungan o payo',
        'Maikling bugtong',
        'Tulang pasalaysay',
        'Dulang pampelikula',
    ]),
    'answer'      => 'Pahayag na naglalahad ng karunungan o payo',
    'explanation' => 'Ang salawikain ay matalinhagang kasabihan na nagbibigay-aral o payo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 103
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang 'Ibong Adarna'?",
    'choices'     => json_encode([
        'Korido na may mahiwagang ibon',
        'Epikong Ilokano',
        'Salawikain',
        'Sanaysay',
    ]),
    'answer'      => 'Korido na may mahiwagang ibon',
    'explanation' => "Ang Ibong Adarna ay koridong Tagalog tungkol sa diwata't ibon na naglunas ng karamdaman.",
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 104
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang 'Dalit'?",
    'choices'     => json_encode([
        'Tulang panrelihiyon o pagpuri',
        'Maikling kuwento',
        'Sanaysay pulitikal',
        'Balagtasan',
    ]),
    'answer'      => 'Tulang panrelihiyon o pagpuri',
    'explanation' => 'Dalit ay klasikal na tulang awit ng pagpupuri o debosyon.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 105
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang balagtasan?",
    'choices'     => json_encode([
        'Pagtatalo sa anyo ng tula',
        'Korido',
        'Epiko',
        'Dulang makabayang-politikal',
    ]),
    'answer'      => 'Pagtatalo sa anyo ng tula',
    'explanation' => 'Ang balagtasan ay debate na may tugmang pancorido na ipinangalan kay Francisco Balagtas.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 106
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang Moro-moro?",
    'choices'     => json_encode([
        'Dulang may labanang Kristiyano at Moro',
        'Tulang panrelihiyon',
        'Sanaysay-pampanitikan',
        'Korido',
    ]),
    'answer'      => 'Dulang may labanang Kristiyano at Moro',
    'explanation' => 'Ang Moro-moro ay barok na dulang may labanan sa pagitan ng Kristiyano at Moro.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 107
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang hipon sa kulturang Pilipino?",
    'choices'     => json_encode([
        'Bugtong tungkol sa hayop',
        'Tulang pasalaysay',
        'Koridong Tagalog',
        'Dulang panrelihiyon',
    ]),
    'answer'      => 'Bugtong tungkol sa hayop',
    'explanation' => 'Hipon ay uri ng bugtong na may tanong at sagot na inihahalintulad sa hayop o bagay.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 108
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Sino ang nagsulat ng 'Noli Me Tangere'?",
    'choices'     => json_encode([
        'Jose Rizal',
        'Nick Joaquin',
        'Lualhati Bautista',
        'Carlos Bulosan',
    ]),
    'answer'      => 'Jose Rizal',
    'explanation' => 'Si Jose Rizal ang sumulat ng Noli Me Tangere bilang kritika sa kolonyal na pamamahala.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 109
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang pangunahing tema ng 'El Filibusterismo'?",
    'choices'     => json_encode([
        'Korapsyon at paghihiganti',
        'Pag-ibig sa bayan',
        'Kalayaan',
        'Pagmamahal sa wika',
    ]),
    'answer'      => 'Korapsyon at paghihiganti',
    'explanation' => 'Ang El Filibusterismo ay tumatalakay sa katiwalian at paghihiganti ni Simoun.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 110
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Sino ang kilalang makata na si Jose Corazon de Jesus, kilala rin bilang?",
    'choices'     => json_encode([
        'Huseng Batute',
        'Balagtas',
        'Florentino',
        'Taga-ilog',
    ]),
    'answer'      => 'Huseng Batute',
    'explanation' => 'Si Jose Corazon de Jesus ay tanyag na makatang tinaguriang Huseng Batute.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 111
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Alin ang akdang sinulat ni Nick Joaquin?",
    'choices'     => json_encode([
        'May Day Eve',
        'Noli Me Tangere',
        'Biag ni Lam-ang',
        'Ibong Adarna',
    ]),
    'answer'      => 'May Day Eve',
    'explanation' => 'Si Nick Joaquin ay sumulat ng koleksyon ng maiikling kuwentong "May Day Eve".',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 112
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => 'Sino ang sumulat ng "Dekada \'70"?',
    'choices'     => json_encode([
        'Lualhati Bautista',
        'Maria Orosa',
        'Carlos Bulosan',
        'Genoveva Edroza-Matute',
    ]),
    'answer'      => 'Lualhati Bautista',
    'explanation' => 'Ang nobelang "Dekada \'70" ay isinulat ni Lualhati Bautista.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 113
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang istilo ni Rio Alma?",
    'choices'     => json_encode([
        'Makabagong tula tungkol sa Pilipino at Ingles',
        'Epikong Ilokano',
        'Korido',
        'Balagtasan',
    ]),
    'answer'      => 'Makabagong tula tungkol sa Pilipino at Ingles',
    'explanation' => 'Si Rio Alma ay kilalang modernistang makata na gumagamit ng Filipino at Ingles.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 114
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Sino ang sumulat ng 'America Is in the Heart'?",
    'choices'     => json_encode([
        'Carlos Bulosan',
        'Jose Rizal',
        'Nick Joaquin',
        'Lualhati Bautista',
    ]),
    'answer'      => 'Carlos Bulosan',
    'explanation' => 'Ang "America Is in the Heart" ay memoir ni Carlos Bulosan ukol sa karanasan ng OFW sa US.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 115
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang tema ng mga akda ni Genoveva Edroza-Matute?",
    'choices'     => json_encode([
        'Karanasan ng kababaihan',
        'Paglalakbay sa dagat',
        'Bugtong-bugtong',
        'Korido at epiko',
    ]),
    'answer'      => 'Karanasan ng kababaihan',
    'explanation' => 'Si Matute ay kilala sa mga sanaysay at maikling kuwento tungkol sa buhay babae.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 116
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang kontribusyon ni Lazaro Francisco sa panitikang Pilipino?",
    'choices'     => json_encode([
        'Pagsulat ng nobelang may tema ng lipunan',
        'Pagbuo ng balagtasan',
        'Paglikom ng epiko',
        'Pagbuo ng salawikain',
    ]),
    'answer'      => 'Pagsulat ng nobelang may tema ng lipunan',
    'explanation' => 'Si Lazaro Francisco ay kilala sa pagsusuri ng isyung panlipunan sa kaniyang mga nobela.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 117
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Sino ang kilalang manunulat na si Liwayway Arceo?",
    'choices'     => json_encode([
        'May-akda ng maikling kuwento at nobela tungkol sa buhay Pilipino',
        'Epikong Bisaya',
        'Makabagong dramatista',
        'Tula only',
    ]),
    'answer'      => 'May-akda ng maikling kuwento at nobela tungkol sa buhay Pilipino',
    'explanation' => 'Si Arceo ay naging tanyag sa kaniyang mga maikling kuwento at nobela para sa kababaihan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 118
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang istilong paggamit ni Rogelio G. Mangahas?",
    'choices'     => json_encode([
        'Makabagong tula na may matinding imahe',
        'Korido',
        'Epiko',
        'Balagtasan',
    ]),
    'answer'      => 'Makabagong tula na may matinding imahe',
    'explanation' => 'Si Mangahas ay kilala sa kaniyang matapang at modernong anyo ng tula.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 119
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Sino ang nagsulat ng 'Mga Ibong Mandaragit'?",
    'choices'     => json_encode([
        'Amado V. Hernandez',
        'Carlos Bulosan',
        'Jose Rizal',
        'Nick Joaquin',
    ]),
    'answer'      => 'Amado V. Hernandez',
    'explanation' => 'Ang "Mga Ibong Mandaragit" ay nobela ni Amado V. Hernandez tungkol sa lipunang Pilipino.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 120
$batch[] = [
    'subject_id'  => 11,
    'part'        => 6,
    'question'    => "Ano ang tema ng mga akda ni Liwayway Arceo?",
    'choices'     => json_encode([
        'Pamilya at kababaihan',
        'Epiko at korido',
        'Bugtong',
        'Salawikain',
    ]),
    'answer'      => 'Pamilya at kababaihan',
    'explanation' => 'Kadalasang pumapaksa sa buhay at isyu ng pamilya at kababaihan ang kaniyang akda.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart5Seeder extends Seeder
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

// 81
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang ibig sabihin ng talinghaga sa tula?",
    'choices'     => json_encode([
        'Paggamit ng matalinghagang pananalita',
        'Paglalarawan ng tauhan',
        'Pag-uulit ng salita',
        'Pagtukoy sa sukat',
    ]),
    'answer'      => 'Paggamit ng matalinghagang pananalita',
    'explanation' => 'Talinghaga ang simbolikong paglalarawan upang maging makulay ang tula.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 82
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Alin ang salarin ng taludtod sa isang saknong?",
    'choices'     => json_encode([
        'Mga linya ng tula',
        'Bilang ng pantig',
        'Uri ng sukat',
        'Tema ng tula',
    ]),
    'answer'      => 'Mga linya ng tula',
    'explanation' => 'Ang taludtod ay bawat linya ng isang tula na bumubuo sa saknong.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 83
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang layunin ng panuluyan sa maikling kuwento?",
    'choices'     => json_encode([
        'Magbigay ng konteksto o tagpuan',
        'Itala ang tauhan',
        'Ipakita ang tugma',
        'Ituro ang moral',
    ]),
    'answer'      => 'Magbigay ng konteksto o tagpuan',
    'explanation' => 'Tinatawag na panuluyan ang paglalarawan ng lugar at panahon sa kuwentong bayan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 84
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang katangian ng tauhang flat sa nobela?",
    'choices'     => json_encode([
        'Simpleng personalidad at iilang aspekto lamang',
        'Malalim na karakter at pagbabago',
        'Komplikadong bisyo',
        'Protagonista',
    ]),
    'answer'      => 'Simpleng personalidad at iilang aspekto lamang',
    'explanation' => 'Ang flat character ay hindi nabibigyan ng masalimuot na paglalarawan o pagbabago.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 85
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang pagsasadula sa isang dula?",
    'choices'     => json_encode([
        'Pagganap ng mga tauhan sa entablado',
        'Pagsisinungaling ng aktor',
        'Pagbabasa ng nobela',
        'Pagsulat ng sanaysay',
    ]),
    'answer'      => 'Pagganap ng mga tauhan sa entablado',
    'explanation' => 'Ang dula ay sining ng pagsasadula sa entablado kung saan aktor ang kumikilos.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 86
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang tema ng sanaysay ni Jose Rizal na 'Sa Aking Mga Kabata'?",
    'choices'     => json_encode([
        'Pagmamahal sa sariling wika',
        'Pag-ibig sa bayan',
        'Kalayaan',
        'Walang saysay',
    ]),
    'answer'      => 'Pagmamahal sa sariling wika',
    'explanation' => 'Ipinapakita sa sanaysay ang kahalagahan ng pagmamahal sa sariling wika.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 87
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang saglit na kasiglahan sa isang kuwento?",
    'choices'     => json_encode([
        'Punta ng kasiglahan bago ang suliranin lumalim',
        'Simula ng kuwento',
        'Wakas',
        'Tagpuan',
    ]),
    'answer'      => 'Punta ng kasiglahan bago ang suliranin lumalim',
    'explanation' => 'Tinatawag ding climax ang saglit na kasiglahan kung saan tumitindi ang banghay.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 88
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang tungkulin ng persona sa sanaysay o tula?",
    'choices'     => json_encode([
        'Nagsasalaysay o naglalahad ng karanasan',
        'Tumutulay sa panuluyan',
        'Tagapagsalita lamang',
        'Walang silbi',
    ]),
    'answer'      => 'Nagsasalaysay o naglalahad ng karanasan',
    'explanation' => 'Ang persona ang tinig na nagpapahayag ng damdamin o kaisipan sa akda.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 89
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang epyakto ng talinghaga sa pagtula?",
    'choices'     => json_encode([
        'Nagdudulot ng malalim na imahinasyon',
        'Nagpapabagal ng daloy',
        'Nagbibigay ng sukat',
        'Nagwawakas ng sanaysay',
    ]),
    'answer'      => 'Nagdudulot ng malalim na imahinasyon',
    'explanation' => 'Talinghaga ay nagbibigay-aral at nag-aanyaya sa mambabasa na mag-isip.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 90
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang berso sa dula?",
    'choices'     => json_encode([
        'Mga linya o diyalogo ng mga tauhan',
        'Yugto ng banghay',
        'Tema',
        'Panuluyan',
    ]),
    'answer'      => 'Mga linya o diyalogo ng mga tauhan',
    'explanation' => 'Ang verso ay binubuo ng mga sinasabi ng tauhan sa dula.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 91
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang padron sa tula?",
    'choices'     => json_encode([
        'Pagkakasunod-sunod ng sukat at tugma',
        'Istruktura ng nobela',
        'Banghay ng dula',
        'Dinamikong prose',
    ]),
    'answer'      => 'Pagkakasunod-sunod ng sukat at tugma',
    'explanation' => 'Padron ang pattern ng pagtugma at sukat sa isang tula.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 92
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang kuwento ng bayan?",
    'choices'     => json_encode([
        'Mga salaysay na nagmula sa pamahiin at alamat',
        'Makabagong nobela',
        'Repleksiyon',
        'Sanaysay',
    ]),
    'answer'      => 'Mga salaysay na nagmula sa pamahiin at alamat',
    'explanation' => 'Ito ay mga tradisyunal na kuwento na ipinamana ng matatanda.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 93
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang uri ng sanaysay na personal at malaya ang estilo?",
    'choices'     => json_encode([
        'Sanaysay na malikhain',
        'Tula',
        'Nobela',
        'Bugtong',
    ]),
    'answer'      => 'Sanaysay na malikhain',
    'explanation' => 'Malikhain ang anyo ng sanaysay na ito, naglalahad ng saloobin nang malaya.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 94
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang sukat sa tradisyunal na tula?",
    'choices'     => json_encode([
        'Bilang ng pantig sa taludtod',
        'Bilog na hugis',
        'Uri ng papel',
        'Pamahiin',
    ]),
    'answer'      => 'Bilang ng pantig sa taludtod',
    'explanation' => 'Sukat ang bilang ng pantig na sinusunod sa taludtod ng tula.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 95
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang tugma sa tula?",
    'choices'     => json_encode([
        'Pagkakatunog ng huling pantig ng taludtod',
        'Pagkakatugma ng sukat',
        'Pagkakasunod ng saknong',
        'Uri ng tulang pasalaysay',
    ]),
    'answer'      => 'Pagkakatunog ng huling pantig ng taludtod',
    'explanation' => 'Tugma ang pag-uulit ng tunog sa hulihan ng taludtod.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 96
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang protang tauhan sa maikling kuwento?",
    'choices'     => json_encode([
        'Unang tauhang tinutuon sa kuwento',
        'Karakter na palaging kasama',
        'Kuwentong bayan lamang',
        'Sanaysay na teknikal',
    ]),
    'answer'      => 'Unang tauhang tinutuon sa kuwento',
    'explanation' => 'Protagonista ang pangunahing tauhan sa kwento.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 97
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang antagonist sa dula?",
    'choices'     => json_encode([
        'Kalaban o salungat sa pangunahing tauhan',
        'Pangunahing bida',
        'Manonood',
        'Tagapagtanghal',
    ]),
    'answer'      => 'Kalaban o salungat sa pangunahing tauhan',
    'explanation' => 'Ang antagonist ay puwedeng isang tauhan o puwersa na humahadlang sa bida.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 98
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang banghay-diagram?",
    'choices'     => json_encode([
        'Biswal na representasyon ng estruktura ng kuwento',
        'Uri ng sukat',
        'Talikala ng tauhan',
        'Uri ng tula',
    ]),
    'answer'      => 'Biswal na representasyon ng estruktura ng kuwento',
    'explanation' => 'Ipinapakita nito ang sequence at relasyon ng mga pangyayari.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 99
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang sanaysay pampanitikan?",
    'choices'     => json_encode([
        'Sanaysay na naglalayong magbigay ng aral o magpahayag ng damdamin',
        'Teknikal na manwal',
        'Dula',
        'Nobela',
    ]),
    'answer'      => 'Sanaysay na naglalayong magbigay ng aral o magpahayag ng damdamin',
    'explanation' => 'Pampanitikan ang sanaysay na ito dahil gumagamit ng malikhaing estilo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 100
$batch[] = [
    'subject_id'  => 11,
    'part'        => 5,
    'question'    => "Ano ang purpose ng pagpapakapikto (emotive function) sa tula?",
    'choices'     => json_encode([
        'Magpahayag ng damdamin at emosyon',
        'Maglarawan ng lipunan',
        'Magbigay ng impormasyon',
        'Magturo ng balarila',
    ]),
    'answer'      => 'Magpahayag ng damdamin at emosyon',
    'explanation' => 'Emotive function ay nakatuon sa damdamin ng nagsasalita.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

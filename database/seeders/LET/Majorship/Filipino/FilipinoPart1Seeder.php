<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart1Seeder extends Seeder
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

// 1
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tawag sa pinakamaliit na makabuluhang yunit ng wika?",
    'choices'     => json_encode([
        'Ponema',
        'Morpema',
        'Sintaks',
        'Semantika',
    ]),
    'answer'      => 'Morpema',
    'explanation' => 'Ang morpema ang pinakamaliit na yunit ng salita na may kahulugan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 2
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tawag sa pinakamaliit na yunit ng tunog sa isang wika?",
    'choices'     => json_encode([
        'Ponema',
        'Morpema',
        'Sintaks',
        'Semantika',
    ]),
    'answer'      => 'Ponema',
    'explanation' => 'Ang ponema ang pinakamaliit na yunit ng tunog na nakapagbibigay ng pagkakaiba sa kahulugan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 3
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin sa mga sumusunod ang sangay ng linggwistika na pinag-aaralan ang estruktura ng pangungusap?",
    'choices'     => json_encode([
        'Sintaks',
        'Morpolohiya',
        'Ponolohiya',
        'Semantika',
    ]),
    'answer'      => 'Sintaks',
    'explanation' => 'Ang sintaks ang pag-aaral ng kaayusan at estruktura ng mga salita sa pangungusap.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 4
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tinutukoy ng semantika bilang sangay ng linggwistika?",
    'choices'     => json_encode([
        'Kahulugan ng salita at pangungusap',
        'Estruktura ng tunog',
        'Pagbuo ng salita',
        'Istruktura ng pangungusap',
    ]),
    'answer'      => 'Kahulugan ng salita at pangungusap',
    'explanation' => 'Ang semantika ang pag-aaral ng kahulugan sa wika.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 5
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tawag sa pag-aaral ng wika sa iisang takdang panahon nang hindi kinokonsidera ang kasaysayan nito?",
    'choices'     => json_encode([
        'Sinkronikong linggwistika',
        'Diakronikong linggwistika',
        'Sosyolinggwistika',
        'Teoryang Bilingguwalismo',
    ]),
    'answer'      => 'Sinkronikong linggwistika',
    'explanation' => 'Ang sinkronikong linggwistika ay pag-aaral ng wika sa isang tiyak na panahon.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 6
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Saan nakatuon ang sosyolinggwistika?",
    'choices'     => json_encode([
        'Ugnayan ng wika at lipunan',
        'Pagbuo ng pangungusap',
        'Kahulugan ng salita',
        'Teknikal na bokabularyo',
    ]),
    'answer'      => 'Ugnayan ng wika at lipunan',
    'explanation' => 'Sinusuri ng sosyolinggwistika kung paano nakakaapekto ang lipunan sa wika.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 7
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tawag sa salitang sapilitang paglilipat sa pagitan ng Ingles at Filipino sa isang pangungusap?",
    'choices'     => json_encode([
        'Kondisyong Pang-linggwistiko',
        'Code-switching',
        'Diglosya',
        'Pagsasalin',
    ]),
    'answer'      => 'Code-switching',
    'explanation' => 'Ang code-switching ay ang paglipat sa pagitan ng dalawang wika sa isang usapan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 8
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin sa antas ng wika ang karaniwang ginagamit sa impormal na usapan sa kalye?",
    'choices'     => json_encode([
        'Pormal',
        'Kolokyal',
        'Panlalawiganin',
        'Balbal',
    ]),
    'answer'      => 'Balbal',
    'explanation' => 'Ang balbal ang impormal na antas ng wika na karaniwang slang.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 9
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tawag sa bahagi ng pangungusap na tumutukoy sa paksa o simuno?",
    'choices'     => json_encode([
        'Panaguri',
        'Simuno',
        'Pandiwa',
        'Pang-uri',
    ]),
    'answer'      => 'Simuno',
    'explanation' => 'Ang simuno ang bahagi ng pangungusap na paksa.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 10
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tinatawag na bahagi ng pangungusap na nagsasaad ng kilos o katangian ng simuno?",
    'choices'     => json_encode([
        'Simuno',
        'Panaguri',
        'Pang-abay',
        'Pangngalan',
    ]),
    'answer'      => 'Panaguri',
    'explanation' => 'Ang panaguri ang nagsasaad ng kilos, katangian, o kalagayan ng simuno.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 11
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin sa mga sumusunod ang bahagi ng pananalita na nagpapahayag ng kilos o estado?",
    'choices'     => json_encode([
        'Pangngalan',
        'Pandiwa',
        'Pang-uri',
        'Pang-abay',
    ]),
    'answer'      => 'Pandiwa',
    'explanation' => 'Ang pandiwa ang salitang nagpapahayag ng kilos o estado.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 12
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin ang bahagi ng pananalita na nagbibigay-turing sa pangngalan?",
    'choices'     => json_encode([
        'Pandiwa',
        'Pang-uri',
        'Pang-abay',
        'Panghalip',
    ]),
    'answer'      => 'Pang-uri',
    'explanation' => 'Ang pang-uri ang nagsisilbing adjective sa Filipino.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 13
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin ang anyo ng pandiwa na nagpapakita ng kilos na nagaganap pa lamang (imperpektibo)?",
    'choices'     => json_encode([
        'Perpektibo',
        'Imperpektibo',
        'Kontemplatibo',
        'Palipat',
    ]),
    'answer'      => 'Imperpektibo',
    'explanation' => 'Ang imperpektibo ay naglalarawan ng kilos na kasalukuyang nagaganap.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 14
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tawag sa proseso ng pagdaragdag ng unlapi, gitlapi, o hulapi sa salitang-ugat?",
    'choices'     => json_encode([
        'Paglapi',
        'Pagbabawas',
        'Pagpapalit',
        'Pag-uulit',
    ]),
    'answer'      => 'Paglapi',
    'explanation' => 'Ang paglapi ay ang pagdaragdag ng panlapi upang makabuo ng bagong salita.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 15
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin sa mga sumusunod ang sangay ng linggwistikang pantunog na naghihiwalay sa mga tunog batay sa sistema?",
    'choices'     => json_encode([
        'Semantika',
        'Morpolohiya',
        'Ponolohiya',
        'Sintaks',
    ]),
    'answer'      => 'Ponolohiya',
    'explanation' => 'Ang ponolohiya ang pag-aaral ng sistema at pattern ng tunog.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 16
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang bahagi ng pananalita na tumutukoy sa tao, bagay, lugar, o pangyayari?",
    'choices'     => json_encode([
        'Pang-uri',
        'Pandiwa',
        'Pangngalan',
        'Pang-abay',
    ]),
    'answer'      => 'Pangngalan',
    'explanation' => 'Ang pangngalan ang bahagi ng pananalita na pangngalan ng bagay.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 17
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin ang bahagi ng pananalita na humahalili sa pangngalan?",
    'choices'     => json_encode([
        'Panghalip',
        'Pang-abay',
        'Pang-uri',
        'Pandiwa',
    ]),
    'answer'      => 'Panghalip',
    'explanation' => 'Ang panghalip ang humahalili sa pangngalan upang maiwasan ang pag-uulit.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 18
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Alin ang bahagi ng pananalita na naglalarawan sa pandiwa, pang-uri, o kapwa pang-abay?",
    'choices'     => json_encode([
        'Pang-abay',
        'Pang-uri',
        'Panghalip',
        'Pandiwa',
    ]),
    'answer'      => 'Pang-abay',
    'explanation' => 'Ang pang-abay ang bahagi ng pananalita na nagbibigay-turing sa pandiwa at iba pa.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 19
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang tawag sa mga salitang nag-uugnay sa mga salita, parirala, o sugnay?",
    'choices'     => json_encode([
        'Pangatnig',
        'Pang-ukol',
        'Pang-uri',
        'Pang-abay',
    ]),
    'answer'      => 'Pangatnig',
    'explanation' => 'Ang pangatnig ang conjunction sa Filipino na nag-uugnay ng mga parirala.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 20
$batch[] = [
    'subject_id'  => 11,
    'part'        => 1,
    'question'    => "Ano ang bahagi ng pananalita na nagpapakita ng relasyon ng pangngalan sa iba pang salita?",
    'choices'     => json_encode([
        'Pang-uri',
        'Pang-abay',
        'Pang-ukol',
        'Panghalip',
    ]),
    'answer'      => 'Pang-ukol',
    'explanation' => 'Ang pang-ukol ang preposition sa Filipino na nagpapakita ng kaugnayan.',
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

<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart2Seeder extends Seeder
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

       // 21
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang ibig sabihin ng diglosya?",
           'choices'     => json_encode([
               'Pagkakaroon ng pormal at impormal na estilo ng wika',
               'Pag-aaral ng ponema',
               'Kasaysayan ng wika',
               'Bilang ng salita sa isang wika',
           ]),
           'answer'      => 'Pagkakaroon ng pormal at impormal na estilo ng wika',
           'explanation' => 'Sa diglosya, may dalawang uri ng wika: mataas para sa pormal, at mababa para sa impormal.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 22
       $batch[] = [
        'subject_id'  => 11,
        'part'        => 2,
        'question'    => "Ano ang sosyolinggwistika?",
        'choices'     => json_encode([
            'Pag-aaral ng wika sa lipunan',
            'Pagbabago ng kahulugan ng salita',
            'Pagbuo ng pangungusap',
            'Pag-aaral ng ponolohiya',
        ]),
        'answer'      => 'Pag-aaral ng wika sa lipunan',
        'explanation' => "Sinusuri nito kung paano ginagamit ang wika sa iba't ibang grupo at sitwasyon sa lipunan.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 23
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Alin sa sumusunod ang halimbawa ng code-switching?",
           'choices'     => json_encode([
               'Pasok kayo, children',
               'Magandang gabi sa inyong lahat',
               'Kumain ka na ba',
               'Nakakita ako ng kotse',
           ]),
           'answer'      => 'Pasok kayo, children',
           'explanation' => 'Ang code-switching ay ang paglipat sa pagitan ng Filipino at Ingles sa isang pangungusap.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 24
       $batch[] = [
        'subject_id'  => 11,
        'part'        => 2,
        'question'    => "Ano ang lingua franca?",
        'choices'     => json_encode([
            'Pambansang wika',
            "Wikang pantulong para sa komunikasyon ng iba't ibang grupo",
            'Wikang kolonyal',
            'Wikang rehiyunal lamang',
        ]),
        'answer'      => "Wikang pantulong para sa komunikasyon ng iba't ibang grupo",
        'explanation' => "Lingua franca ay wika na ginagamit upang magkaintindihan ang magkakaibang grupo.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 25
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Paano nakakaapekto ang urbanisasyon sa wika?",
           'choices'     => json_encode([
               'Pagbabago ng bokabularyo at istilo',
               'Pagtigil sa pag-aaral ng wika',
               'Pagkawala ng balarila',
               'Pag-unlad ng sinaunang salita',
           ]),
           'answer'      => 'Pagbabago ng bokabularyo at istilo',
           'explanation' => 'Nag-iintroduce ang urbanisasyon ng bagong salita at ekspresyon sa wikang Filipino.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 26
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang tungkulin ng Komisyon sa Wikang Filipino?",
           'choices'     => json_encode([
               'Pagsasalin ng banyagang teksto',
               'Paglinang at pangangalaga sa wikang pambansa',
               'Pagtuturo ng matematika',
               'Paglikha ng bagong batas',
           ]),
           'answer'      => 'Paglinang at pangangalaga sa wikang pambansa',
           'explanation' => 'KWF ang ahensyang nag-aalaga at nagpapalaganap ng Filipino bilang pambansang wika.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 27
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang bilingguwalismo?",
           'choices'     => json_encode([
               'Paggamit ng dalawang wika sa pang-araw-araw na buhay',
               'Pag-aaral ng dalawang asignatura',
               'Pagkakaroon ng dalawang pangungusap',
               'Pagsasalin ng teksto',
           ]),
           'answer'      => 'Paggamit ng dalawang wika sa pang-araw-araw na buhay',
           'explanation' => 'Bilingguwalismo ay kapag umiikot ang araw-araw na komunikasyon sa dalawang wika.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 28
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang kognitibong linggwistika?",
           'choices'     => json_encode([
               'Pag-aaral kung paano naiintindihan ang wika sa isip',
               'Pag-aaral ng ponema',
               'Pag-aaral ng kasaysayan ng wika',
               'Pag-aaral ng sintaks',
           ]),
           'answer'      => 'Pag-aaral kung paano naiintindihan ang wika sa isip',
           'explanation' => 'Sinusuri ng kognitibong linggwistika ang mental na proseso sa paggamit ng wika.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 29
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang language shift?",
           'choices'     => json_encode([
               'Paglipat ng paggamit mula sa isang wika patungo sa iba',
               'Pag-aaral ng bagong bokabularyo',
               'Pagbago ng kahulugan ng salita',
               'Pagbuo ng pangungusap',
           ]),
           'answer'      => 'Paglipat ng paggamit mula sa isang wika patungo sa iba',
           'explanation' => 'Nangyayari ito kapag higit na ginagamit ang isang wika kaysa sa iba.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 30
  $batch[] = [
    'subject_id'  => 11,
    'part'        => 2,
    'question'    => "Ano ang epekto ng migrasyon sa wika?",
    'choices'     => json_encode([
        'Paghalo-halo ng mga wika at ekspresyon',
        'Pagkawala ng wika',
        'Pagtigil ng paggamit ng Filipino',
        'Pagbabalik sa lumang bokabularyo',
    ]),
    'answer'      => 'Paghalo-halo ng mga wika at ekspresyon',
    'explanation' => "Dahil sa migrasyon, nagkakaroon ng interaksyon at pag-uugnayan ng iba't ibang wika.",
    'created_at'  => $now,
    'updated_at'  => $now,
];
       
       // 31
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang ibig sabihin ng register?",
           'choices'     => json_encode([
               'Uri ng bokabularyo na naaangkop sa konteksto',
               'Grammar rules',
               'Ponema',
               'Sintaks',
           ]),
           'answer'      => 'Uri ng bokabularyo na naaangkop sa konteksto',
           'explanation' => 'Ang register ay pumipili ng wika ayon sa sitwasyon at tagapakinig.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 32
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang layunin ng language policy?",
           'choices'     => json_encode([
               'Pagpapaunlad at regulasyon sa paggamit ng wika',
               'Paglilista ng salita',
               'Pagtanggal ng banyagang salita',
               'Pagsasalin ng literatura',
           ]),
           'answer'      => 'Pagpapaunlad at regulasyon sa paggamit ng wika',
           'explanation' => 'Language policy ang nagtatakda ng opisyal na wika at medium ng pagtuturo.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 33
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Paano tumutulong ang social media sa wika?",
           'choices'     => json_encode([
               'Pagpapalaganap ng bagong bokabularyo',
               'Pagbawas ng paggamit ng wika',
               'Pag-alis ng kolokyal na salita',
               'Pagpigil sa pagbabago ng wika',
           ]),
           'answer'      => 'Pagpapalaganap ng bagong bokabularyo',
           'explanation' => 'Sa social media mabilis na naibabahagi ang mga bagong salita at ekspresyon.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 34
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang ibig sabihin ng linguistic nationalism?",
           'choices'     => json_encode([
               'Pagsusulong sa sariling wika bilang simbolo ng bansa',
               'Pag-aaral ng banyagang wika',
               'Pagtuturo ng Filipino sa ibang bansa',
               'Pagbabago ng gramatika',
           ]),
           'answer'      => 'Pagsusulong sa sariling wika bilang simbolo ng bansa',
           'explanation' => 'Tinutukoy nito ang pagpapaigting ng Filipino bilang batayan ng identidad.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 35
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang vernacular medium sa edukasyon?",
           'choices'     => json_encode([
               'Katutubong wika bilang panturo',
               'Ingles na panturo',
               'Latin na panturo',
               'Espanyol na panturo',
           ]),
           'answer'      => 'Katutubong wika bilang panturo',
           'explanation' => 'Vernacular medium ang paggamit ng unang wika sa pagtuturo sa elementarya.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 36
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang epekto ng globalization sa wika?",
           'choices'     => json_encode([
               'Paglaganap ng banyagang salita',
               'Paglakas ng wikang katutubo lamang',
               'Pag-alis ng Ingles sa edukasyon',
               'Pagbawas ng bokabularyo',
           ]),
           'answer'      => 'Paglaganap ng banyagang salita',
           'explanation' => 'Dahil sa globalization, maraming bagong salitang banyaga ang nakapasok sa Filipino.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 37
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang tawag sa prosesong pagbuo ng salita mula sa salitang-ugat gamit ang mga panlapi?",
           'choices'     => json_encode([
               'Paglapi',
               'Pagbabawas',
               'Pagpapalit',
               'Pag-uulit',
           ]),
           'answer'      => 'Paglapi',
           'explanation' => 'Sa paglapi, idinadagdag ang unlapi, gitlapi, o hulapi sa salitang-ugat.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 38
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang ibig sabihin ng language endangerment?",
           'choices'     => json_encode([
               'Panganib na mawala ang isang wika',
               'Pag-aaral ng bagong wika',
               'Pagbago ng bokabularyo',
               'Pag-alis ng balarila',
           ]),
           'answer'      => 'Panganib na mawala ang isang wika',
           'explanation' => 'Kapag ang wikang ginagamit ay humihina at posibleng mawala, tinatawag itong endangered.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 39
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Ano ang tungkulin ng mother tongue-based education?",
           'choices'     => json_encode([
               'Gamitin ang unang wika sa pagtuturo at pagkatuto',
               'Ituro lamang ang Ingles',
               'Pagtanggal sa Filipino sa silid-aralan',
               'Pagsasalin ng banyagang literature',
           ]),
           'answer'      => 'Gamitin ang unang wika sa pagtuturo at pagkatuto',
           'explanation' => 'Itinuturo sa unang baitang gamit ang wikang katutubo para mas madali matutuhan ng mag-aaral.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 40
       $batch[] = [
           'subject_id'  => 11,
           'part'        => 2,
           'question'    => "Paano nakatutulong ang intercultural competence sa pagtuturo ng wika?",
           'choices'     => json_encode([
               'Pinapabuti ang pag-unawa sa kultura at konteksto',
               'Pinipigilan ang code-switching',
               'Pinapadali ang gramatika',
               'Pinapababa ang bokabularyo',
           ]),
           'answer'      => 'Pinapabuti ang pag-unawa sa kultura at konteksto',
           'explanation' => 'Nakakatulong ito sa mabisang komunikasyon at pag-unawa sa magkakaibang kultura.',
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

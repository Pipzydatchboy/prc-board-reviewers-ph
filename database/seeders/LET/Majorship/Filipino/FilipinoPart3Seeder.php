<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart3Seeder extends Seeder
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

// 41
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang skimming?",
    'choices'     => json_encode([
        'Mabilis na pagbabasa para sa pangkalahatang ideya',
        'Pagbasa para sa malalim na detalye',
        'Pagbasa nang malakas',
        'Silent reading',
    ]),
    'answer'      => 'Mabilis na pagbabasa para sa pangkalahatang ideya',
    'explanation' => 'Skimming ay mabilis na pagbabasa upang makuha ang pangunahing diwa.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 42
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang scanning?",
    'choices'     => json_encode([
        'Mabilis na paghahanap ng partikular na impormasyon',
        'Pagbasa para sa pangkalahatang tema',
        'Pagsulat ng buod',
        'Close reading',
    ]),
    'answer'      => 'Mabilis na paghahanap ng partikular na impormasyon',
    'explanation' => 'Scanning ay mabilis na paghahanap ng partikular na detalye sa teksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 43
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang layunin ng SQ3R method?",
    'choices'     => json_encode([
        'Paunlarin ang sistematikong pag-unawa sa teksto',
        'Pagsasanay sa grammar',
        'Paggawa ng sanaysay',
        'Pagpapaunlad ng bokabularyo lamang',
    ]),
    'answer'      => 'Paunlarin ang sistematikong pag-unawa sa teksto',
    'explanation' => 'SQ3R (Survey, Question, Read, Recite, Review) ay gabay para sa mas malalim na comprehension.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 44
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Alin ang halimbawa ng kritikal na pagbasa?",
    'choices'     => json_encode([
        'Pagsusuri sa estruktura at argumento ng teksto',
        'Pagkuha ng pangunahing ideya lamang',
        'Pagbasa nang malakas',
        'Pagbasa para sa detalye lamang',
    ]),
    'answer'      => 'Pagsusuri sa estruktura at argumento ng teksto',
    'explanation' => 'Kritikal na pagbasa ay pagsusuri at pagbibigay-husga sa nilalaman at istruktura ng teksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 45
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang aktibong pagbasa?",
    'choices'     => json_encode([
        'Pagsusulat ng margin notes at tanong habang nagbabasa',
        'Silent reading',
        'Pagbasa nang malakas',
        'Pagbulalas ng teksto',
    ]),
    'answer'      => 'Pagsusulat ng margin notes at tanong habang nagbabasa',
    'explanation' => 'Aktibong pagbasa ay pakikilahok sa teksto sa pamamagitan ng pagsusuri at pagtatanong.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 46
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Sa proseso ng pagsulat, ano ang unang hakbang?",
    'choices'     => json_encode([
        'Pagpaplano (prewriting)',
        'Drafting',
        'Pagsusuri (revising)',
        'Pagwawasto (editing)',
    ]),
    'answer'      => 'Pagpaplano (prewriting)',
    'explanation' => 'Prewriting ay yugto ng pagbuo ng ideya at balangkas bago magsulat.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 47
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang free writing?",
    'choices'     => json_encode([
        'Pagsulat nang tuloy-tuloy nang walang paghinto',
        'Pagsulat ng pormal na liham',
        'Pagsusulat ng sanaysay lamang',
        'Pag-eedit ng teksto',
    ]),
    'answer'      => 'Pagsulat nang tuloy-tuloy nang walang paghinto',
    'explanation' => 'Free writing ay pagsulat nang malaya upang mapukaw ang ideya.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 48
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang brainstorming?",
    'choices'     => json_encode([
        'Pagbuo ng maraming ideya sa mabilisang paraan',
        'Pagwawasto ng grammar',
        'Pagsusuri ng teksto',
        'Pagdadrag and buod',
    ]),
    'answer'      => 'Pagbuo ng maraming ideya sa mabilisang paraan',
    'explanation' => 'Brainstorming ay teknik sa paglikom ng ideya bago isulat ang draft.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 49
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang drafting?",
    'choices'     => json_encode([
        'Pagsulat ng unang bersyon ng teksto',
        'Pagpapalathala ng teksto',
        'Pagwawasto ng grammar',
        'Pagmementor sa iba',
    ]),
    'answer'      => 'Pagsulat ng unang bersyon ng teksto',
    'explanation' => 'Drafting ay yugto ng pagsulat ng paunang kopya batay sa plano.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 50
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang revising?",
    'choices'     => json_encode([
        'Pagbabago at pagpapabuti ng draft',
        'Pagbabahagi ng teksto',
        'Pagwawasto ng typo lamang',
        'Brainstorming muli',
    ]),
    'answer'      => 'Pagbabago at pagpapabuti ng draft',
    'explanation' => 'Revising ay pag-edit ng nilalaman at istruktura upang mapabuti ang kalidad.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 51
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang editing?",
    'choices'     => json_encode([
        'Pagwawasto ng grammar at punctuation',
        'Pagsulat ng draft',
        'Brainstorming',
        'Pagbabahagi ng teksto',
    ]),
    'answer'      => 'Pagwawasto ng grammar at punctuation',
    'explanation' => 'Editing ay huling paghahanda sa teksto bago ipublish.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 52
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang publishing?",
    'choices'     => json_encode([
        'Pagpapalathala at pagbabahagi ng teksto',
        'Pagkuha ng ideya',
        'Pagsulat ng introduction lamang',
        'Pag-eedit ng draft lamang',
    ]),
    'answer'      => 'Pagpapalathala at pagbabahagi ng teksto',
    'explanation' => 'Publishing ay paggawa at pagbabahagi ng pinal na bersyon ng teksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 53
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang tula?",
    'choices'     => json_encode([
        'Any height ng panitikan na may sukat at tugma',
        'Sanaysay',
        'Nobela',
        'Maikling kuwento',
    ]),
    'answer'      => 'Any height ng panitikan na may sukat at tugma',
    'explanation' => 'Tula ay panitikan na naglalaman ng ritmo, sukat, at tugma.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 54
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang sanaysay?",
    'choices'     => json_encode([
        'Panitikang prosa na nagpapahayag ng saloobin o opinyon',
        'Tula',
        'Nobela',
        'Bugtong',
    ]),
    'answer'      => 'Panitikang prosa na nagpapahayag ng saloobin o opinyon',
    'explanation' => 'Sanaysay ay maikling komposisyon na naglalahad ng kuro-kuro.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 55
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang kwento?",
    'choices'     => json_encode([
        'Panitikang prosa na may banghay at tauhan',
        'Tula',
        'Sanaysay',
        'Toy story',
    ]),
    'answer'      => 'Panitikang prosa na may banghay at tauhan',
    'explanation' => 'Kwento ay anyo ng prosa na may simula, gitna, at wakas.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 56
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang banghay?",
    'choices'     => json_encode([
        'Maayos na pagkakasunod-sunod ng pangyayari',
        'Karakter',
        'Tagpuan',
        'Tema',
    ]),
    'answer'      => 'Maayos na pagkakasunod-sunod ng pangyayari',
    'explanation' => 'Banghay ang istruktura ng mga pangyayari sa isang kwento.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 57
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang tauhan?",
    'choices'     => json_encode([
        'Karakter sa kwento',
        'Banghay',
        'Tagpuan',
        'Tema',
    ]),
    'answer'      => 'Karakter sa kwento',
    'explanation' => 'Tauhan ang mga personahe na gumaganap sa kwento.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 58
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang tagpuan?",
    'choices'     => json_encode([
        'Panahon at lugar ng kwento',
        'Karakter',
        'Banghay',
        'Tema',
    ]),
    'answer'      => 'Panahon at lugar ng kwento',
    'explanation' => 'Tagpuan ang setting kung saan nagaganap ang kwento.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 59
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang tema?",
    'choices'     => json_encode([
        'Pangunahing kaisipan ng kwento',
        'Banghay',
        'Tauhan',
        'Tagpuan',
    ]),
    'answer'      => 'Pangunahing kaisipan ng kwento',
    'explanation' => 'Tema ang sentral na ideya o mensahe ng isang akda.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 60
$batch[] = [
    'subject_id'  => 11,
    'part'        => 3,
    'question'    => "Ano ang tinatawag na free verse?",
    'choices'     => json_encode([
        'Tula na walang sukat at tugma',
        'Tula na may sukat lamang',
        'Tula na may tugma lamang',
        'Sanaysay',
    ]),
    'answer'      => 'Tula na walang sukat at tugma',
    'explanation' => 'Free verse ay tula na malaya sa pormal na sukat at tugma.',
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

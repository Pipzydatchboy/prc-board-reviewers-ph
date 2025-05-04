<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart4Seeder extends Seeder
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

// 61
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang pangunahing layunin ng Communicative Language Teaching?",
    'choices'     => json_encode([
        'Paunlarin ang kakayahang makipagkomunika nang epektibo',
        'Pagtuturo ng grammar nang detalyado',
        'Paggamit ng sariling wika lamang',
        'Pag-aaral ng literatura',
    ]),
    'answer'      => 'Paunlarin ang kakayahang makipagkomunika nang epektibo',
    'explanation' => 'Ang CLT ay nakatuon sa paggamit ng wika sa tunay na sitwasyon.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 62
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Alin sa sumusunod ang tradisyunal na pamamaraan sa pagtuturo?",
    'choices'     => json_encode([
        'Lecture method',
        'Role-play activities',
        'Project-based learning',
        'Cooperative learning',
    ]),
    'answer'      => 'Lecture method',
    'explanation' => 'Teacher-centered ang lecture method, diin sa tagapagturo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 63
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang Total Physical Response?",
    'choices'     => json_encode([
        'Pamamaraan na gumagamit ng kilos at aksyon',
        'Pagsusulit sa grammar',
        'Pagbasa nang malakas',
        'Pagsulat ng sanaysay',
    ]),
    'answer'      => 'Pamamaraan na gumagamit ng kilos at aksyon',
    'explanation' => 'Nakakatulong ito sa pagkatuto sa pamamagitan ng pisikal na pagsunod sa utos.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 64
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang ibig sabihin ng Project-Based Learning?",
    'choices'     => json_encode([
        'Pagkatuto sa pamamagitan ng paggawa ng proyekto',
        'Pagsusulit sa klase',
        'Lecture lang sa klase',
        'Silent reading',
    ]),
    'answer'      => 'Pagkatuto sa pamamagitan ng paggawa ng proyekto',
    'explanation' => 'Natututo ang mag-aaral sa aktwal na paggawa ng proyekto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 65
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang flipped classroom?",
    'choices'     => json_encode([
        'Pagsusuri sa aralin sa bahay, aktibidad sa klase',
        'Lecture sa klase, takdang-aralin sa bahay',
        'Walang aralin sa bahay',
        'Online na pagsusulit lamang',
    ]),
    'answer'      => 'Pagsusuri sa aralin sa bahay, aktibidad sa klase',
    'explanation' => 'Tinututukan ang aktibong pagkatuto sa loob ng klase habang aralin sa bahay ang pag-review.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 66
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang Cooperative Learning?",
    'choices'     => json_encode([
        'Pagkatuto sa pamamagitan ng interaktibong pangkat',
        'Indibidwal na pagsasanay',
        'Lecture lamang',
        'Silent reading',
    ]),
    'answer'      => 'Pagkatuto sa pamamagitan ng interaktibong pangkat',
    'explanation' => 'Nagtutulungan ang mag-aaral upang matuto at makamit ang layunin.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 67
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang Direct Method?",
    'choices'     => json_encode([
        'Pagtuturo gamit ang target na wika lamang',
        'Pagtuturo sa pamamagitan ng pagsasalin',
        'Pag-aaral ng grammar sa sariling wika',
        'Lecture lamang sa Ingles',
    ]),
    'answer'      => 'Pagtuturo gamit ang target na wika lamang',
    'explanation' => 'Hindi ginagamit ang pagsasalin; natural ang pagkatuto sa konteksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 68
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang Audiolingual Method?",
    'choices'     => json_encode([
        'Pamamaraan na nakatuon sa drills at pag-uulit',
        'Silent reading',
        'Project-based learning',
        'Role-play lamang',
    ]),
    'answer'      => 'Pamamaraan na nakatuon sa drills at pag-uulit',
    'explanation' => 'Nagpapalakas ng kasanayan sa pamamagitan ng paulit-ulit na pattern.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 69
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang tungkulin ng guro sa student-centered learning?",
    'choices'     => json_encode([
        'Facilitator',
        'Tagapagturo lamang',
        'Tagasuri ng standardized exams',
        'Tagapagbuo ng tanong',
    ]),
    'answer'      => 'Facilitator',
    'explanation' => 'Pinapadali niya ang pagkatuto ngunit hindi siya pokus ng klase.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 70
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang thematic teaching?",
    'choices'     => json_encode([
        'Pagtuturo na nakaayos sa tema at integrasyon ng asignatura',
        'Lecture sa bawat aralin',
        'Pagsusulit kada araw',
        'Silent reading lamang',
    ]),
    'answer'      => 'Pagtuturo na nakaayos sa tema at integrasyon ng asignatura',
    'explanation' => "Pinagsasama ang iba't ibang asignatura sa iisang tema upang maging makahulugan.",
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 71
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang blended learning?",
    'choices'     => json_encode([
        'Pagsasama ng online at face-to-face na pagtuturo',
        'Lecture lamang',
        'Silent reading lamang',
        'Laboratory work lang',
    ]),
    'answer'      => 'Pagsasama ng online at face-to-face na pagtuturo',
    'explanation' => 'Pinag-uugnay ang teknolohiya at tradisyunal na klase para sa mas maraming oportunidad.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 72
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang differentiated instruction?",
    'choices'     => json_encode([
        'Pag-angkop ng pamamaraan ayon sa kakayahan ng mag-aaral',
        'Lecture para sa lahat',
        'Pagsusulit na pareho ang tanong',
        'Silent reading lamang',
    ]),
    'answer'      => 'Pag-angkop ng pamamaraan ayon sa kakayahan ng mag-aaral',
    'explanation' => 'Iba-iba ang gawain nang naaayon sa antas at paraan ng pagkatuto ng bawat isa.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 73
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang scaffolding sa pagtuturo?",
    'choices'     => json_encode([
        'Pagsuporta sa mag-aaral hanggang matuto nang mag-isa',
        'Silent reading',
        'Lecture method',
        'Pagwawasto nang walang paliwanag',
    ]),
    'answer'      => 'Pagsuporta sa mag-aaral hanggang matuto nang mag-isa',
    'explanation' => 'Dahan-dahan binabawasan ang tulong habang lumalakas ang kakayahan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 74
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang constructivist approach?",
    'choices'     => json_encode([
        'Paghuhubog ng kaalaman batay sa karanasan ng mag-aaral',
        'Lecture lamang',
        'Pagsusulit sa klase',
        'Silent reading',
    ]),
    'answer'      => 'Paghuhubog ng kaalaman batay sa karanasan ng mag-aaral',
    'explanation' => 'Pinahahalagahan ang aktibong pagbuo ng kahulugan at karanasan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 75
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang reflective teaching?",
    'choices'     => json_encode([
        'Pagninilay at pagsusuri sa sariling pamamaraan ng pagtuturo',
        'Lecture lamang',
        'Silent reading',
        'Pagsusulit sa klase',
    ]),
    'answer'      => 'Pagninilay at pagsusuri sa sariling pamamaraan ng pagtuturo',
    'explanation' => 'Mahalaga ang kritikal na pag-aayos para sa patuloy na pag-unlad.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 76
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang benepisyo ng audiovisual aids?",
    'choices'     => json_encode([
        'Nagpapalawak ng visual at auditory na pagkatuto',
        'Nagpapabagal sa aralin',
        'Hindi angkop sa malaking klase',
        'Pumapalit sa guro',
    ]),
    'answer'      => 'Nagpapalawak ng visual at auditory na pagkatuto',
    'explanation' => "Natutulungan nito ang iba't ibang estilo ng pagkatuto.",
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 77
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang layunin ng Task-Based Learning?",
    'choices'     => json_encode([
        'Paunlarin ang praktikal na paggamit ng wika sa mga gawain',
        'Pagtuturo ng grammar rules',
        'Pagsulat ng sanaysay lamang',
        'Lecture lamang',
    ]),
    'answer'      => 'Paunlarin ang praktikal na paggamit ng wika sa mga gawain',
    'explanation' => 'Nakatuon ang TBL sa makabuluhang tasks upang gamitin ang paksang wika.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 78
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang learner autonomy?",
    'choices'     => json_encode([
        'Kakayahan ng mag-aaral na mag-aral nang mag-isa',
        'Lecture lamang',
        'Pag-aaral sa guro',
        'Silent reading',
    ]),
    'answer'      => 'Kakayahan ng mag-aaral na mag-aral nang mag-isa',
    'explanation' => 'Pinapahintulutan ang mag-aaral na pamahalaan ang sariling pagkatuto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 79
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang gampanin ng formative assessment sa pagtuturo?",
    'choices'     => json_encode([
        'Magbigay ng feedback para mapabuti ang pagkatuto',
        'Assignments ng final grade lamang',
        'Silent reading',
        'Lecture lamang',
    ]),
    'answer'      => 'Magbigay ng feedback para mapabuti ang pagkatuto',
    'explanation' => 'Tinutulungan ng formative assessment ang guro at mag-aaral sa patuloy na pag-unlad.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 80
$batch[] = [
    'subject_id'  => 11,
    'part'        => 4,
    'question'    => "Ano ang papel ng teknolohiya sa modernong pagtuturo?",
    'choices'     => json_encode([
        'Palawakin ang access at interaksyon sa pagkatuto',
        'Pigilan ang komunikasyon',
        'Palitan ang guro',
        'Iwasan ang pagkatulungan',
    ]),
    'answer'      => 'Palawakin ang access at interaksyon sa pagkatuto',
    'explanation' => 'Ang teknolohiya ay nagtataguyod ng mas dinamiko at mas inclusive na pagkatuto.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

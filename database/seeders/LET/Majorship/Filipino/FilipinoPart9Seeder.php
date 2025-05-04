<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart9Seeder extends Seeder
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

// 161
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang backward design sa pagsulat ng kurikulum?",
    'choices'     => json_encode([
        'Pagtukoy muna sa nais na resulta bago planuhin ang aralin',
        'Pagsisimula sa aktibidad bago layunin',
        'Paggamit ng pabalik na pagsusulit',
        'Pagwawasto matapos ang pagtuturo',
    ]),
    'answer'      => 'Pagtukoy muna sa nais na resulta bago planuhin ang aralin',
    'explanation' => 'Sa backward design, unang tinutukoy ang learning outcomes bago ang mga aktibidad.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 162
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang silabus?",
    'choices'     => json_encode([
        'Detalye ng nilalaman, layunin, at pamamaraan ng isang kurso',
        'Listahan ng asignatura sa kolehiyo',
        'Takdang aralin sa bahay',
        'Talahanayan ng marka',
    ]),
    'answer'      => 'Detalye ng nilalaman, layunin, at pamamaraan ng isang kurso',
    'explanation' => 'Ang silabus ay dokumento na naglalahad ng course outline at instruction plan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 163
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang unit plan?",
    'choices'     => json_encode([
        'Detalyadong plano para sa isang yunit ng aralin',
        'Overview ng buong kurikulum',
        'Pangkalahatang layunin ng paaralan',
        'Balangkas ng tesis',
    ]),
    'answer'      => 'Detalyadong plano para sa isang yunit ng aralin',
    'explanation' => 'Naglalarawan ito ng objectives, activities, at assessment ng isang unit.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 164
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang lesson plan?",
    'choices'     => json_encode([
        'Gabayan na plano para sa isang sesyon ng pagtuturo',
        'Silabus ng buong taon',
        'Ulat sa mag-aaral',
        'Pagtatasa ng guro',
    ]),
    'answer'      => 'Gabayan na plano para sa isang sesyon ng pagtuturo',
    'explanation' => 'Lesson plan ay detalyadong gabay sa objectives, procedures, at evaluation ng isang klase.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 165
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang spiral curriculum?",
    'choices'     => json_encode([
        'Pag-uulit ng konsepto sa mas mataas na antas',
        'Isang beses lamang tinalakay',
        'Pagwawasto sa bahay',
        'Paksa ng kolehiyo',
    ]),
    'answer'      => 'Pag-uulit ng konsepto sa mas mataas na antas',
    'explanation' => 'Sa spiral curriculum, paulit-ulit na tinatalakay ang paksa nang laliman ang antas.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 166
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang thematic approach sa silabus?",
    'choices'     => json_encode([
        'Pag-organisa ng aralin batay sa tema',
        'Pag-aaral ng bawat asignatura nang hiwalay',
        'Pagsulat ng tema sa dula',
        'Pagbasa ng tula lamang',
    ]),
    'answer'      => 'Pag-organisa ng aralin batay sa tema',
    'explanation' => 'Ang thematic approach ay pagbubuklod ng mga konsepto sa iisang sentrong tema.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 167
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang competency-based curriculum?",
    'choices'     => json_encode([
        'Nakatuon sa paglinang ng tiyak na kasanayan at kaalaman',
        'Nakabatay sa oras ng klase',
        'Paksa sa proyekto lamang',
        'Bilang ng grade lang',
    ]),
    'answer'      => 'Nakatuon sa paglinang ng tiyak na kasanayan at kaalaman',
    'explanation' => 'Ang CBC ay naglalayong maabot ng mag-aaral ang specified competencies.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 168
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang lesson study?",
    'choices'     => json_encode([
        'Collaborative na pagbuo at pagsusuri ng lesson plan ng guro',
        'Paggawa ng individual quiz',
        'Lecture ng sit-in',
        'Online quiz lamang',
    ]),
    'answer'      => 'Collaborative na pagbuo at pagsusuri ng lesson plan ng guro',
    'explanation' => 'Lesson study ay siklo ng pagpaplano, pag-obserba, at pagrebisa ng aralin kasama ang kaklase.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 169
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang integrated curriculum?",
    'choices'     => json_encode([
        "Pagpapaloob ng iba't ibang asignatura sa isang yunit",
        'Pagkahati ng aralin kada araw',
        'Silabus lang sa Filipino',
        'Pagsusulit sa bahay',
    ]),
    'answer'      => "Pagpapaloob ng iba't ibang asignatura sa isang yunit",
    'explanation' => "Integrated curriculum ay pinagsasama ang aralin mula sa iba't ibang disiplina.",
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 170
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang differentiated instruction sa silabus?",
    'choices'     => json_encode([
        'Pag-angkop ng aralin ayon sa pangangailangan ng mag-aaral',
        'Pare-parehong aralin para sa lahat',
        'Lecture lamang',
        'Reading log',
    ]),
    'answer'      => 'Pag-angkop ng aralin ayon sa pangangailangan ng mag-aaral',
    'explanation' => 'Itinutukoy nito ang pagkakaiba-iba ng gawain batay sa kakayahan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 171
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang alignment sa kurikulum?",
    'choices'     => json_encode([
        'Pagkakatugma ng objectives, instruction, at assessment',
        'Pagkakasunod-sunod ng sukat at tugma',
        'Pag-uulit ng quiz kada linggo',
        'Lecture ng teacher-centered',
    ]),
    'answer'      => 'Pagkakatugma ng objectives, instruction, at assessment',
    'explanation' => 'Ang alignment ay mahalaga upang maging coherent ang kurikulum.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 172
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang pacing guide?",
    'choices'     => json_encode([
        'Gabay sa daloy at bilis ng pagtuturo ng aralin',
        'Oras ng recess',
        'Grade filing system',
        'Assessment only',
    ]),
    'answer'      => 'Gabay sa daloy at bilis ng pagtuturo ng aralin',
    'explanation' => 'Pacing guide ang nagpapakita kung kailan tatalakayin ang bawat bahagi ng silabus.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 173
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang rudimentary syllabus?",
    'choices'     => json_encode([
        'Simpleng outline ng pangunahing paksa',
        'Komprehensibong document',
        'Legacy curriculum',
        'Detailed lesson plan',
    ]),
    'answer'      => 'Simpleng outline ng pangunahing paksa',
    'explanation' => 'Ito ang basic na balangkas ng silabus na hindi detalyado.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 174
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang compacted curriculum?",
    'choices'     => json_encode([
        'Pagbawas ng duplicate o overlapping na paksa',
        'Pagdagdag ng maraming paksa',
        'Lecture only',
        'Reading assignment',
    ]),
    'answer'      => 'Pagbawas ng duplicate o overlapping na paksa',
    'explanation' => 'Ang compacted curriculum ay nagsisiguro na walang pag-uulit ng content.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 175
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang spiral scope?",
    'choices'     => json_encode([
        'Saklaw ng paksa habang inuulit sa mas mataas na lebel',
        'Range ng quiz questions',
        'Lecture only',
        'Reading module',
    ]),
    'answer'      => 'Saklaw ng paksa habang inuulit sa mas mataas na lebel',
    'explanation' => 'Spiral scope ang bahagi ng spiral curriculum na nagtatakda ng coverage.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 176
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang curriculum mapping?",
    'choices'     => json_encode([
        'Pagdodokumento ng alignment ng content across grade levels',
        'Pagmomodelo ng silweta',
        'Reading log only',
        'Quiz schedule',
    ]),
    'answer'      => 'Pagdodokumento ng alignment ng content across grade levels',
    'explanation' => 'Curriculum mapping ay nagbibigay ng overview ng content distribution.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 177
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang essential questions sa silabus?",
    'choices'     => json_encode([
        'Mahalagang tanong na gumagabay sa pagkatuto',
        'Multiple-choice items',
        'Oral recitation only',
        'Reading log',
    ]),
    'answer'      => 'Mahalagang tanong na gumagabay sa pagkatuto',
    'explanation' => 'Essential questions ang nagtutulak sa malalim na pag-aaral at diskusyon.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 178
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang performance indicators sa silabus?",
    'choices'     => json_encode([
        'Mga konkretong ebidensya na nagpapakita ng pagkatuto',
        'Quiz scores lamang',
        'Attendance record',
        'Reading list',
    ]),
    'answer'      => 'Mga konkretong ebidensya na nagpapakita ng pagkatuto',
    'explanation' => 'Performance indicators ay naglalarawan ng observable outcomes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 179
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang curriculum review?",
    'choices'     => json_encode([
        'Pagsusuri at pag-update ng kurikulum batay sa feedback',
        'Lecture planning',
        'Grading exams',
        'Reading assignment',
    ]),
    'answer'      => 'Pagsusuri at pag-update ng kurikulum batay sa feedback',
    'explanation' => 'Curriculum review ay proseso ng pag-evaluate at rebisyon ng kurikulum.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 180
$batch[] = [
    'subject_id'  => 11,
    'part'        => 9,
    'question'    => "Ano ang stakeholder involvement sa pagbuo ng kurikulum?",
    'choices'     => json_encode([
        'Pakikipag-ugnayan sa guro, magulang, at komunidad',
        'Lecture lamang',
        'Quiz preparation',
        'Reading logs',
    ]),
    'answer'      => 'Pakikipag-ugnayan sa guro, magulang, at komunidad',
    'explanation' => 'Mahalaga ang input ng lahat ng stakeholder para sa relevant na kurikulum.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

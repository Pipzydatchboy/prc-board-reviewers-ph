<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart10Seeder extends Seeder
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

// 181
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang tungkulin ng Professional Regulatory Board of Teachers?",
    'choices'     => json_encode([
        'Pagpaparehistro at regulasyon ng mga propesyonal na guro',
        'Pagtuturo ng kurikulum sa kolehiyo',
        'Pagbuo ng mga manuel sa klase',
        'Pag-aaral ng pantig at sukat',
    ]),
    'answer'      => 'Pagpaparehistro at regulasyon ng mga propesyonal na guro',
    'explanation' => 'Ang PRBPT ang nagtitiyak na sumusunod ang guro sa pamantayan ng propesyon.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 182
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang layunin ng Code of Ethics for Professional Teachers?",
    'choices'     => json_encode([
        'Itaguyod ang mataas na antas ng propesyonalismo at integridad',
        'Ipatupad ang mga batas pambansa',
        'Mag-aral ng panitikan lang',
        'Magturo nang walang syllabus',
    ]),
    'answer'      => 'Itaguyod ang mataas na antas ng propesyonalismo at integridad',
    'explanation' => 'Ang Code of Ethics ay gabay sa tamang asal at tungkulin ng guro.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 183
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang Continuing Professional Development (CPD)?",
    'choices'     => json_encode([
        'Patuloy na pag-aaral at pagsasanay ng mga guro',
        'Pamamahagi ng grade slips',
        'Pagtataya sa mag-aaral',
        'Pagsusulit sa pagtatapos',
    ]),
    'answer'      => 'Patuloy na pag-aaral at pagsasanay ng mga guro',
    'explanation' => 'Ang CPD ay nagpapaunlad sa kaalaman at kasanayan ng guro sa buong karera.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 184
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang kahalagahan ng reflective practice para sa guro?",
    'choices'     => json_encode([
        'Pagtatasa sa sariling pagtuturo upang mapabuti',
        'Pagbibigay ng final grade',
        'Pagpaplano ng syllabus',
        'Pagtuturo ng balarila lamang',
    ]),
    'answer'      => 'Pagtatasa sa sariling pagtuturo upang mapabuti',
    'explanation' => 'Sa reflective practice, sinusuri ng guro ang sarili niyang pamamaraan at epekto sa mag-aaral.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 185
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang collaborative action research?",
    'choices'     => json_encode([
        'Pag-uugnay ng guro at kasamahan para sa pananaliksik sa klase',
        'Indibidwal na thesis sa unibersidad',
        'Aksyon saturdays ng mag-aaral',
        'Pagbasa ng tula nang sabay-sabay',
    ]),
    'answer'      => 'Pag-uugnay ng guro at kasamahan para sa pananaliksik sa klase',
    'explanation' => 'Ang collaborative action research ay hakbang-hakbang na pag-aaral ng guro kasama ng kapwa guro upang mapabuti ang pagtuturo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 186
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang behavior management sa silid-aralan?",
    'choices'     => json_encode([
        'Mga estratehiya upang mapanatili ang disiplina at positibong ugnayan',
        'Pagbibigay ng marka batay sa ugali',
        'Pagtuturo nang tahimik',
        'Pagbasa ng kwento lamang',
    ]),
    'answer'      => 'Mga estratehiya upang mapanatili ang disiplina at positibong ugnayan',
    'explanation' => 'Behavior management ay pamamaraan upang epektibong pamahalaan ang asal at interaksyon ng mag-aaral.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 187
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang inclusive education?",
    'choices'     => json_encode([
        'Pagtuturo na tumatanggap at sumusuporta sa lahat ng mag-aaral',
        'Pagsasalin ng dokumento',
        'Lectures para sa piling mag-aaral',
        'Pagbibigay ng supplementary materials lamang',
    ]),
    'answer'      => 'Pagtuturo na tumatanggap at sumusuporta sa lahat ng mag-aaral',
    'explanation' => 'Inclusive education ay naglalaan ng pantay na oportunidad upang matuto ang lahat ng nagkakaibang kakayahan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 188
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang ICT integration sa pagtuturo?",
    'choices'     => json_encode([
        'Pagsasama ng teknolohiya sa mga aktibidad sa klase',
        'Programming ng computer',
        'Pagbabasa ng printed materials',
        'Pagtuturo ng dictionary skills',
    ]),
    'answer'      => 'Pagsasama ng teknolohiya sa mga aktibidad sa klase',
    'explanation' => 'ICT integration ay paggamit ng digital tools upang mapayaman ang karanasan sa pagkatuto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 189
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang gender sensitivity sa silid-aralan?",
    'choices'     => json_encode([
        'Pagrespeto at pagkilala sa pagkakaiba ng kasarian',
        'Pagtuturo ng mga gender roles',
        'Lecture ng lalaki lang',
        'Pagbibigay ng uniporme',
    ]),
    'answer'      => 'Pagrespeto at pagkilala sa pagkakaiba ng kasarian',
    'explanation' => 'Gender sensitivity ay pagkakaroon ng malay at respeto sa pantay na karapatan at oportunidad ng lahat ng kasarian.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 190
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang Disaster Risk Reduction and Management (DRRM) sa paaralan?",
    'choices'     => json_encode([
        'Paghahanda at tugon sa sakuna upang matiyak ang kaligtasan ng mag-aaral',
        'Pagbabasa ng tula pag may lindol',
        'Pagbibigay ng grade para sa rescue drills',
        'Lecture lamang tungkol sa kalikasan',
    ]),
    'answer'      => 'Paghahanda at tugon sa sakuna upang matiyak ang kaligtasan ng mag-aaral',
    'explanation' => 'DRRM ay sistema ng pagplano at aksyon upang mabawasan ang panganib at epekto ng sakuna sa paaralan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 191
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang Child Protection Policy sa paaralan?",
    'choices'     => json_encode([
        'Patakaran para sa kaligtasan at karapatan ng bata',
        'Listahan ng bata sa attendance',
        'Patakaran sa pagsusulit',
        'Dress code policy',
    ]),
    'answer'      => 'Patakaran para sa kaligtasan at karapatan ng bata',
    'explanation' => 'Child Protection Policy ay naglalayong protektahan ang bata laban sa pang-aabuso at kapahamakan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 192
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang peer mentoring sa professional development?",
    'choices'     => json_encode([
        'Suporta at gabay mula sa kapwa guro',
        'Lecture ng eksperto',
        'Online course lamang',
        'Self-study',
    ]),
    'answer'      => 'Suporta at gabay mula sa kapwa guro',
    'explanation' => 'Peer mentoring ay proseso kung saan nagtutulungan ang mga guro upang mapabuti ang kanilang kasanayan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 193
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang classroom observation bilang bahagi ng ebalwasyon?",
    'choices'     => json_encode([
        'Pagmamasid sa guro habang nagtuturo upang suriin ang teknik',
        'Pananood ng pelikula sa klase',
        'Attendance check',
        'Quiz delivery only',
    ]),
    'answer'      => 'Pagmamasid sa guro habang nagtuturo upang suriin ang teknik',
    'explanation' => 'Classroom observation ay ginagamit upang bigyan ng feedback ang guro sa kanyang praktika.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 194
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang teacher appraisal?",
    'choices'     => json_encode([
        'Pormal na pagtataya sa pagganap ng guro',
        'Student feedback lamang',
        'Quiz sa teacher',
        'Pagsusulit sa mag-aaral',
    ]),
    'answer'      => 'Pormal na pagtataya sa pagganap ng guro',
    'explanation' => 'Teacher appraisal ay sistematikong proseso ng pagsusuri sa kahusayan ng pagtuturo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 195
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang school-based management (SBM)?",
    'choices'     => json_encode([
        'Desentralisadong pamamahala kung saan nakikibahagi ang komunidad',
        'Pamahalaan ng DepEd lamang',
        'Lecture ng principal',
        'Quiz sa alumni',
    ]),
    'answer'      => 'Desentralisadong pamamahala kung saan nakikibahagi ang komunidad',
    'explanation' => 'SBM ay sistema kung saan ang paaralan at komunidad ay magkatuwang sa pagpaplano at paggamit ng resources.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 196
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang home-school partnership?",
    'choices'     => json_encode([
        'Pakikipag-ugnayan at pagtutulungan ng magulang at guro',
        'Lecture sa bahay',
        'Online quiz sa magulang',
        'Pagsusulit sa bahay',
    ]),
    'answer'      => 'Pakikipag-ugnayan at pagtutulungan ng magulang at guro',
    'explanation' => 'Home-school partnership ay kolaborasyon upang suportahan ang pagkatuto ng bata.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 197
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang values education?",
    'choices'     => json_encode([
        'Pagtuturo ng moral at etika sa mag-aaral',
        'Pag-aaral ng tula',
        'Lecture sa wika lamang',
        'Reading quiz',
    ]),
    'answer'      => 'Pagtuturo ng moral at etika sa mag-aaral',
    'explanation' => 'Values education ay nagpapalaganap ng tamang pagpapahalaga at pag-uugali.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 198
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang environmental education sa silid-aralan?",
    'choices'     => json_encode([
        'Pagtuturo ukol sa pangangalaga ng kalikasan',
        'Pag-aaral ng epiko',
        'Lecture ng principal',
        'Quiz sa chemistry',
    ]),
    'answer'      => 'Pagtuturo ukol sa pangangalaga ng kalikasan',
    'explanation' => 'Environmental education ay nag-uudyok sa mag-aaral na maging responsable sa kalikasan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 199
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang differentiated instruction sa mixed-ability class?",
    'choices'     => json_encode([
        'Pag-aayon ng gawain ayon sa antas at estilo ng pagkatuto',
        'Lecture lamang sa iisang paraan',
        'Pagsusulit sa lahat ng magkapareho',
        'Silent reading',
    ]),
    'answer'      => 'Pag-aayon ng gawain ayon sa antas at estilo ng pagkatuto',
    'explanation' => 'Sa mixed-ability class, mahalaga ang pagkakaiba-iba ng aktibidad upang matugunan ang pangangailangan ng bawat mag-aaral.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 200
$batch[] = [
    'subject_id'  => 11,
    'part'        => 10,
    'question'    => "Ano ang academic integrity sa pananaliksik?",
    'choices'     => json_encode([
        'Pagsunod sa etikal na pamantayan tulad ng plagiarism avoidance',
        'Mag-copy-paste ng sources',
        'Ignore citations',
        'Borrowing tests',
    ]),
    'answer'      => 'Pagsunod sa etikal na pamantayan tulad ng plagiarism avoidance',
    'explanation' => 'Academic integrity ay mahalaga sa paggawa ng orihinal at etikal na pananaliksik.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

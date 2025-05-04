<?php

namespace Database\Seeders\LET\Majorship\Filipino;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilipinoPart8Seeder extends Seeder
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

// 141
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang pangunahing layunin ng formative assessment?",
    'choices'     => json_encode([
        'Magbigay ng agarang feedback para sa pag-unlad ng mag-aaral',
        'Pagbibigay ng pangwakas na grado',
        'Pagtukoy sa kumpetisyon ng klase',
        'Pagsusuri sa kurikulum lamang',
    ]),
    'answer'      => 'Magbigay ng agarang feedback para sa pag-unlad ng mag-aaral',
    'explanation' => 'Ang formative assessment ay ginagamit upang tuklasin ang pangangailangan at gabayan ang pagtuturo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 142
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang summative assessment?",
    'choices'     => json_encode([
        'Pagsusuri sa pagkatuto pagkatapos ng aralin o kurso',
        'Patuloy na feedback habang nag-aaral',
        'Diagnostic na pagsusuri bago magsimula',
        'Peer assessment lang',
    ]),
    'answer'      => 'Pagsusuri sa pagkatuto pagkatapos ng aralin o kurso',
    'explanation' => 'Ang summative assessment ay panghuling pagtaya sa nakamit na pagkatuto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 143
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang diagnostic assessment?",
    'choices'     => json_encode([
        'Pagtukoy sa lakas at kahinaan bago simulan ang pagtuturo',
        'Pagtataya sa gitna ng kurso',
        'Pagbibigay ng marka sa tapos na gawain',
        'Peer feedback session',
    ]),
    'answer'      => 'Pagtukoy sa lakas at kahinaan bago simulan ang pagtuturo',
    'explanation' => 'Nagbibigay daan ito sa pagkakaroon ng angkop na plano para sa aralin.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 144
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang reliability ng isang pagsusulit?",
    'choices'     => json_encode([
        'Pagkakapareho ng resulta kapag inuulit ang pagsusulit',
        'Kahusayan sa pagsusulat ng tanong',
        "Pagganap sa iba't ibang klase",
        'Bilang ng tamang sagot lamang',
    ]),
    'answer'      => 'Pagkakapareho ng resulta kapag inuulit ang pagsusulit',
    'explanation' => "Sinusukat ang consistency ng instrumento sa iba't ibang pagkakataon.",
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 145
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang validity ng isang assessment?",
    'choices'     => json_encode([
        'Saklaw at antas kung ano ang sinusukat nito',
        'Bilang ng tanong lamang',
        'Dali ng pagwawasto',
        'Tagal ng pagsusulit',
    ]),
    'answer'      => 'Saklaw at antas kung ano ang sinusukat nito',
    'explanation' => 'Validity ang tumutukoy sa kung ang pagsusulit ay sumusukat sa layunin nito.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 146
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang washback effect ng pagsusulit?",
    'choices'     => json_encode([
        'Epekto ng pagsusulit sa pagtuturo at pagkatuto',
        'Antas ng kahirapan ng tanong',
        'Bilang ng estudyanteng pumasa',
        'Dali ng pag-translate',
    ]),
    'answer'      => 'Epekto ng pagsusulit sa pagtuturo at pagkatuto',
    'explanation' => 'Tinitingnan nito kung paano naaapektuhan ang aralin dahil sa pagsusulit.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 147
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Anong uri ng assessment ang rubrics-based?",
    'choices'     => json_encode([
        'Pagtataya gamit ang pamantayan at antas ng performance',
        'Multiple-choice quiz',
        'Oral recitation lamang',
        'True/False test',
    ]),
    'answer'      => 'Pagtataya gamit ang pamantayan at antas ng performance',
    'explanation' => 'Nagbibigay ang rubrics ng malinaw na criteria para sa marka.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 148
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Anong assessment ang cloze test?",
    'choices'     => json_encode([
        'Pagpuno ng nawawalang salita sa teksto',
        'Pagtataya sa pagsasalita',
        'Pagbasa nang malakas',
        'Pagsulat ng sanaysay',
    ]),
    'answer'      => 'Pagpuno ng nawawalang salita sa teksto',
    'explanation' => 'Sinusuri nito ang kakayahan sa pag-unawa sa konteksto.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 149
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang pagkakaiba ng peer assessment at self-assessment?",
    'choices'     => json_encode([
        'Peer: kapwa estudyante ang nagtataya; Self: sarili ang nagtataya',
        'Pareho silang guro ang nagtataya',
        'Pareho silang multiple-choice test',
        'Self-assessment ay hindi ginagamit',
    ]),
    'answer'      => 'Peer: kapwa estudyante ang nagtataya; Self: sarili ang nagtataya',
    'explanation' => 'Magkakaiba ang tagapagtaya ayon sa uri ng assessment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 150
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang performance assessment?",
    'choices'     => json_encode([
        'Pagtataya sa kakayahan sa aktwal na gawain o presentasyon',
        'Multiple-choice lamang',
        'True/False quiz',
        'Oral recital lang',
    ]),
    'answer'      => 'Pagtataya sa kakayahan sa aktwal na gawain o presentasyon',
    'explanation' => 'Sinusuri nito ang praktikal na paggamit ng kasanayan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 151
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang standardized test?",
    'choices'     => json_encode([
        'Pagsusulit na pare-pareho at sinusuri sa maraming grupo',
        'Test sa klase lang',
        'Oral exam lamang',
        'Performance task',
    ]),
    'answer'      => 'Pagsusulit na pare-pareho at sinusuri sa maraming grupo',
    'explanation' => 'Ginagamit ito para sa paghahambing ng performance nang malawak.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 152
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang diagnostic writing test?",
    'choices'     => json_encode([
        'Pagtukoy sa kakayanan sa pagsulat bago magsimula ang kurso',
        'Final writing exam',
        'Quiz sa grammar',
        'Reading comprehension only',
    ]),
    'answer'      => 'Pagtukoy sa kakayanan sa pagsulat bago magsimula ang kurso',
    'explanation' => 'Tinutulungan nitong malaman ang remedial o suporta na kailangan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 153
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang portfolio assessment?",
    'choices'     => json_encode([
        "Pagkolekta ng iba't ibang gawain ng mag-aaral sa loob ng panahon",
        'Single test lamang',
        'Quiz bawat linggo',
        'Oral quiz alone',
    ]),
    'answer'      => "Pagkolekta ng iba't ibang gawain ng mag-aaral sa loob ng panahon",
    'explanation' => 'Ipinapakita nito ang progreso at saklaw ng kakayahan sa paglipas ng panahon.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 154
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang rubrics?",
    'choices'     => json_encode([
        'Panuntunan na naglalarawan ng antas ng performance',
        'Set ng multiple-choice questions',
        'Checklist para sa attendance',
        'Reading log only',
    ]),
    'answer'      => 'Panuntunan na naglalarawan ng antas ng performance',
    'explanation' => 'Ang rubrics ay tool para sa malinaw na pagmamarka batay sa criteria.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 155
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang norm-referenced test?",
    'choices'     => json_encode([
        'Paghahambing ng mag-aaral sa isa’t isa',
        'Paghahambing sa pamantayan lang',
        'Performance task lamang',
        'Diagnostic quiz',
    ]),
    'answer'      => 'Paghahambing ng mag-aaral sa isa’t isa',
    'explanation' => 'Tinutukoy nito ang ranggo ng bawat mag-aaral kumpara sa grupo.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 156
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang criterion-referenced test?",
    'choices'     => json_encode([
        'Pagtataya laban sa itinakdang pamantayan',
        'Paghahambing sa kapwa mag-aaral',
        'Performance task',
        'Young learner test',
    ]),
    'answer'      => 'Pagtataya laban sa itinakdang pamantayan',
    'explanation' => 'Sinusuri nito kung natamo ng mag-aaral ang partikular na layunin.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 157
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang construct validity?",
    'choices'     => json_encode([
        'Pagsusuri kung sinusukat ng test ang teoretikal na konsepto',
        'Bilang ng tanong',
        'Tagal ng quiz',
        'Pambansang pagsusulit',
    ]),
    'answer'      => 'Pagsusuri kung sinusukat ng test ang teoretikal na konsepto',
    'explanation' => 'Tinitiyak nito na tugma ang test sa teoryang sinusuportahan.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 158
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang face validity?",
    'choices'     => json_encode([
        'Ang date ang hitsura na tama at makatuwiran ang pagsusulit',
        'Ang relihiyon ang nilalaman ng quiz',
        'Multilateral evaluation',
        'Hindi ginagamit',
    ]),
    'answer'      => 'Ang date ang hitsura na tama at makatuwiran ang pagsusulit',
    'explanation' => 'Itinuturo nito kung mukhang wasto at angkop ang pagsusulit sa mambabasa.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 159
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang inter-rater reliability?",
    'choices'     => json_encode([
        "Pagkakapareho ng markang ibinibigay ng iba't ibang tagapagtaya",
        'Marka ng mag-aaral sa sarili',
        'Multiple-choice only',
        'Quiz sa laboratory',
    ]),
    'answer'      => "Pagkakapareho ng markang ibinibigay ng iba't ibang tagapagtaya",
    'explanation' => "Sinusukat nito kung magkakasundo ang iba't ibang evaluator sa marka.",
    'created_at'  => $now,
    'updated_at'  => $now,
];

// 160
$batch[] = [
    'subject_id'  => 11,
    'part'        => 8,
    'question'    => "Ano ang test-retest reliability?",
    'choices'     => json_encode([
        'Pagkakapareho ng resulta kapag inuulit ang parehong test',
        'Single administration lamang',
        'Peer evaluation',
        'Group testing',
    ]),
    'answer'      => 'Pagkakapareho ng resulta kapag inuulit ang parehong test',
    'explanation' => 'Tinitingnan nito kung matatag ang resulta sa magkatulad na pagkakataon.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

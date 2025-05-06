<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

//1
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which document must accompany seized property when it is inventoried by law enforcement?',
    'choices'     => json_encode([
        'Inventory receipt',
        'Search warrant',
        'Subpoena duces tecum',
        'Information',
    ]),
    'answer'      => 'Inventory receipt',
    'explanation' => 'An inventory receipt documents items seized and is required under the Rules of Court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which motion is filed to exclude prejudicial evidence before trial proper?',
    'choices'     => json_encode([
        'Motion in limine',
        'Demurrer to evidence',
        'Bill of exceptions',
        'Motion to quash',
    ]),
    'answer'      => 'Motion in limine',
    'explanation' => 'A motion in limine requests exclusion of evidence deemed prejudicial prior to trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which pleading challenges the sufficiency of evidence after the prosecution rests?',
    'choices'     => json_encode([
        'Demurrer to evidence',
        'Motion for new trial',
        'Motion to quash',
        'Bill of particulars',
    ]),
    'answer'      => 'Demurrer to evidence',
    'explanation' => 'Demurrer to evidence asserts that the evidence is insufficient to warrant a conviction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which pleading attacks the legal sufficiency of the information before trial?',
    'choices'     => json_encode([
        'Demurrer to information',
        'Bill of exceptions',
        'Motion in limine',
        'Motion for bail',
    ]),
    'answer'      => 'Demurrer to information',
    'explanation' => 'A demurrer to information challenges the form or substance of the charges before trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which device is used to preserve witness testimony through sworn statements before trial?',
    'choices'     => json_encode([
        'Deposition',
        'Bill of particulars',
        'Competency hearing',
        'Pre-trial conference',
    ]),
    'answer'      => 'Deposition',
    'explanation' => 'Depositions are taken under oath to preserve testimony for trial when witnesses may be unavailable.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which action seeks more detailed facts from the prosecution to aid the defense?',
    'choices'     => json_encode([
        'Bill of particulars',
        'Motion to dismiss',
        'Motion in limine',
        'Demurrer to evidence',
    ]),
    'answer'      => 'Bill of particulars',
    'explanation' => 'A bill of particulars compels the prosecution to state additional factual details of the charges.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which principle prevents an appellate court from imposing a harsher penalty on an appellant?',
    'choices'     => json_encode([
        'Reformatio in peius',
        'Lex mitior',
        'Ex post facto',
        'Double jeopardy',
    ]),
    'answer'      => 'Reformatio in peius',
    'explanation' => 'Reformatio in peius bars worsening an appellant’s situation upon appeal.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which remedy is proper to correct acts of a tribunal without jurisdiction or in grave abuse of discretion?',
    'choices'     => json_encode([
        'Certiorari',
        'Mandamus',
        'Prohibition',
        'Habeas data',
    ]),
    'answer'      => 'Certiorari',
    'explanation' => 'Certiorari addresses situations where a tribunal exceeds its jurisdiction or abuses its discretion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which sentencing program allows offenders to serve sentences outside prison under supervision?',
    'choices'     => json_encode([
        'Probation',
        'Parole',
        'Pardon',
        'Suspension of sentence',
    ]),
    'answer'      => 'Probation',
    'explanation' => 'Probation permits offenders to serve sentences in the community under set conditions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'What executive act reduces the severity of a sentence without granting complete pardon?',
    'choices'     => json_encode([
        'Commutation',
        'Pardon',
        'Amnesty',
        'Remission',
    ]),
    'answer'      => 'Commutation',
    'explanation' => 'Commutation substitutes a lighter penalty for the one originally imposed without absolving guilt.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which release program requires service of at least one-half of the sentence before application?',
    'choices'     => json_encode([
        'Suspension of sentence',
        'Parole',
        'Probation',
        'Amnesty',
    ]),
    'answer'      => 'Suspension of sentence',
    'explanation' => 'Suspension of sentence may be granted after serving at least half the term and good conduct.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which judicial body promulgates the Rules of Court governing criminal procedure?',
    'choices'     => json_encode([
        'Supreme Court',
        'Congress',
        'Department of Justice',
        'Sandiganbayan',
    ]),
    'answer'      => 'Supreme Court',
    'explanation' => 'The Supreme Court has authority to promulgate procedural rules for all Philippine courts.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'In venue determination, where should prosecution be filed if offense occurs partly in two provinces?',
    'choices'     => json_encode([
        'Either province',
        'Province of first act',
        'Province of last act',
        'National capital region',
    ]),
    'answer'      => 'Either province',
    'explanation' => 'Venue may be laid in any of the provinces where any element of the crime was committed.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which court has original jurisdiction over crimes punishable by imprisonment of six months and one day to six years?',
    'choices'     => json_encode([
        'Municipal Trial Court',
        'Regional Trial Court',
        'Municipal Circuit Trial Court',
        'Municipal Trial Court in Cities',
    ]),
    'answer'      => 'Municipal Trial Court',
    'explanation' => 'MTC handles offenses with penalties exceeding six months up to six years.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which court hears appeals from decisions of the Municipal Trial Court in criminal cases?',
    'choices'     => json_encode([
        'Regional Trial Court',
        'Court of Appeals',
        'Sandiganbayan',
        'Supreme Court',
    ]),
    'answer'      => 'Regional Trial Court',
    'explanation' => 'The RTC exercises appellate jurisdiction over MTC decisions in criminal cases.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which principle requires that trials be conducted openly and publicly?',
    'choices'     => json_encode([
        'Open court principle',
        'Due process',
        'Double jeopardy',
        'Presumption of innocence',
    ]),
    'answer'      => 'Open court principle',
    'explanation' => 'The open court principle ensures transparency by mandating public trials.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which defense admits the act but relies on lack of mental capacity at the time of commission?',
    'choices'     => json_encode([
        'Insanity defense',
        'Alibi',
        'Self-defense',
        'Duress',
    ]),
    'answer'      => 'Insanity defense',
    'explanation' => 'Insanity defense is affirmative and requires proof that the accused was legally insane during the crime.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which evidence rule requires the original document when its contents are contested?',
    'choices'     => json_encode([
        'Best evidence rule',
        'Hearsay rule',
        'Parol evidence rule',
        'Chain of custody',
    ]),
    'answer'      => 'Best evidence rule',
    'explanation' => 'The best evidence rule mandates production of the original document to prove its contents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        =>
7,
    'question'    => 'Which principle places the burden of proof on the prosecution to establish guilt beyond reasonable doubt?',
    'choices'     => json_encode([
        'Presumption of innocence',
        'Res ipsa loquitur',
        'Ex dolo malo non oritur actio',
        'Lex mitior',
    ]),
    'answer'      => 'Presumption of innocence',
    'explanation' => 'Presumption of innocence requires the prosecution to prove guilt beyond a reasonable doubt.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 7,
    'question'    => 'Which writ allows the accused to challenge illegal arrest and detention mechanisms?',
    'choices'     => json_encode([
        'Habeas corpus',
        'Amparo',
        'Mandamus',
        'Certiorari',
    ]),
    'answer'      => 'Habeas corpus',
    'explanation' => 'Habeas corpus is the remedy against unlawful or unauthorised restraint of liberty.',
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

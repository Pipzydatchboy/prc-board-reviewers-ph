<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart4Seeder extends Seeder
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
    'part'        => 4,
    'question'    => 'Which action is required for a valid inquest proceeding?',
    'choices'     => json_encode([
        'Sworn statement of victim',
        'Issuance of information',
        'Subpoena of witness',
        'Judicial warrant',
    ]),
    'answer'      => 'Sworn statement of victim',
    'explanation' => 'Inquest may proceed on the basis of a sworn statement by the complainant or victim.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which doctrine allows admission of dying declaration in evidence?',
    'choices'     => json_encode([
        'Excited utterance',
        'Hearsay exception',
        'Business record exception',
        'Res gestae',
    ]),
    'answer'      => 'Hearsay exception',
    'explanation' => 'Dying declarations are admissible under a recognized exception to the hearsay rule.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'What writ compels a lower court to send records for review?',
    'choices'     => json_encode([
        'Certiorari',
        'Mandamus',
        'Prohibition',
        'Amparo',
    ]),
    'answer'      => 'Certiorari',
    'explanation' => 'Certiorari calls for the records to review jurisdictional or grave abuse errors.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which stage involves the actual perpetration of the criminal intent?',
    'choices'     => json_encode([
        'Attempt',
        'Preparation',
        'Conspiracy',
        'Discussion',
    ]),
    'answer'      => 'Attempt',
    'explanation' => 'Attempt is the execution of an act showing criminal intent, but failing to consummate the crime.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which requirement is NOT necessary for admission of a business record exception?',
    'choices'     => json_encode([
        'Regular course of business',
        'Personal knowledge of recorder',
        'Made at or near time of event',
        'Record kept by custodian',
    ]),
    'answer'      => 'Personal knowledge of recorder',
    'explanation' => 'Business records need not be made by the declarant with personal knowledge if kept in regular course.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which right may be waived by voluntary and intelligent choice?',
    'choices'     => json_encode([
        'Right to remain silent',
        'Right to speed trial',
        'Presumption of innocence',
        'Right against double jeopardy',
    ]),
    'answer'      => 'Right to speed trial',
    'explanation' => 'Defendants may waive the right to a speedy trial, subject to court acceptance.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'In criminal procedure, who may file a motion to quash the information?',
    'choices'     => json_encode([
        'Accused',
        'Judge',
        'Prosecutor',
        'Defense counsel',
    ]),
    'answer'      => 'Accused',
    'explanation' => 'The accused challenges legal sufficiency by moving to quash an information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which principle prohibits retroactive application of harsher penal laws?',
    'choices'     => json_encode([
        'Lex mitior',
        'Ex post facto',
        'Lex specialis',
        'Nullum crimen nulla poena sine lege',
    ]),
    'answer'      => 'Ex post facto',
    'explanation' => 'Ex post facto laws imposing harsher penalties are prohibited by the Constitution.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'What remedy addresses unreasonable delay in the disposition of cases?',
    'choices'     => json_encode([
        'Mandamus',
        'Certiorari',
        'Prohibition',
        'Amparo',
    ]),
    'answer'      => 'Mandamus',
    'explanation' => 'Mandamus can compel public officers or courts to perform their duty without undue delay.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which exception to admissibility allows statements describing physical condition?',
    'choices'     => json_encode([
        'Medical records exception',
        'Excited utterance',
        'Dying declaration',
        'Admissions by party-opponent',
    ]),
    'answer'      => 'Dying declaration',
    'explanation' => 'Statements describing bodily condition are admissible as dying declarations under certain conditions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which action suspends criminal proceedings for mental incapacity?',
    'choices'     => json_encode([
        'Interlocutory appeal',
        'Competency hearing',
        'Deposition',
        'Bill of exceptions',
    ]),
    'answer'      => 'Competency hearing',
    'explanation' => 'A competency hearing assesses and may suspend proceedings when the accused is mentally unfit.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which theory determines criminal liability when multiple persons collaborate?',
    'choices'     => json_encode([
        'Conspiracy theory',
        'Accomplice liability theory',
        'Agency theory',
        'Vicarious liability theory',
    ]),
    'answer'      => 'Agency theory',
    'explanation' => 'Under agency theory, principals are liable for acts of agents acting within scope of conspiracy.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which stage ends liability when the crime is completed?',
    'choices'     => json_encode([
        'Consummation',
        'Attempt',
        'Preparation',
        'Conspiracy',
    ]),
    'answer'      => 'Consummation',
    'explanation' => 'Consummation is the completion of all elements of the offense, ending the stages of commission.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which rule governs admissibility of computer-generated evidence?',
    'choices'     => json_encode([
        'Best evidence rule',
        'Authentication rule',
        'Hearsay rule',
        'Chain of custody rule',
    ]),
    'answer'      => 'Authentication rule',
    'explanation' => 'Digital evidence must be authenticated to establish its reliability before admission.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which remedy challenges illegal administrative acts affecting criminal cases?',
    'choices'     => json_encode([
        'Writ of amparo',
        'Writ of certiorari',
        'Writ of habeas corpus',
        'Writ of prohibition',
    ]),
    'answer'      => 'Writ of prohibition',
    'explanation' => 'Prohibition stops lower tribunals or bodies from acting beyond their jurisdiction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which concept grants immunity to witnesses in exchange for testimony?',
    'choices'     => json_encode([
        'Plea bargaining',
        'Immunity agreement',
        'Exculpatory evidence',
        'Prosecutorial discretion',
    ]),
    'answer'      => 'Immunity agreement',
    'explanation' => 'Witnesses may receive immunity to compel cooperation without self-incrimination.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which penalty accessory involves deprivation of political rights?',
    'choices'     => json_encode([
        'Auxiliary penalty',
        'Principal penalty',
        'Ancillary penalty',
        'Afflictive penalty',
    ]),
    'answer'      => 'Ancillary penalty',
    'explanation' => 'Ancillary penalties include deprivation of rights, accessories to principal penalties.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'What is required for a valid confession under the Rules of Court?',
    'choices'     => json_encode([
        'Voluntary and spontaneous',
        'Recorded by police',
        'Made in open court',
        'Repeated consistently',
    ]),
    'answer'      => 'Voluntary and spontaneous',
    'explanation' => 'Confessions must be voluntary, without promise or coercion, to be admissible.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which period defines when a criminal case prescribes after commission?',
    'choices'     => json_encode([
        'Prescription period',
        'Statute of limitations',
        'Period of laches',
        'Term of years',
    ]),
    'answer'      => 'Prescription period',
    'explanation' => 'The prescription period or statute of limitations determines when prosecution is barred.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 4,
    'question'    => 'Which rule requires immediate presentation of arrested persons before a judge?',
    'choices'     => json_encode([
        'Amparo rule',
        'Habeas corpus rule',
        'Judicial inquiry rule',
        'First judicial hearing rule',
    ]),
    'answer'      => 'Right to counsel',
    'explanation' => 'The Constitution mandates arrested persons be brought before a judge within 36 hours and informed of their rights, including counsel.',
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

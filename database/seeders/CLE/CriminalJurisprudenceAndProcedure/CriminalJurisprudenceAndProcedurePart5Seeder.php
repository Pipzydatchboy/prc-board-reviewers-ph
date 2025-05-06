<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart5Seeder extends Seeder
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
    'part'        => 5,
    'question'    => 'What is the prescriptive period for crimes punishable by reclusion perpetua or higher penalties?',
    'choices'     => json_encode([
        '20 years',
        '30 years',
        '40 years',
        '50 years',
    ]),
    'answer'      => '30 years',
    'explanation' => 'Penalties of reclusion perpetua and above prescribe after 30 years under the Revised Penal Code.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which court has exclusive original jurisdiction over violations of special laws penalizing money laundering?',
    'choices'     => json_encode([
        'Sandiganbayan',
        'Regional Trial Court',
        'Court of Appeals',
        'Municipal Trial Court',
    ]),
    'answer'      => 'Sandiganbayan',
    'explanation' => 'The Sandiganbayan handles cases under RA 9160 (Anti-Money Laundering Act) prosecuted against public officers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Under the Rules of Court, within how many days must a motion for reconsideration be filed after a decision in criminal cases?',
    'choices'     => json_encode([
        '15 days',
        '10 days',
        '5 days',
        '20 days',
    ]),
    'answer'      => '15 days',
    'explanation' => 'A motion for reconsideration must be filed within 15 days from receipt of the decision under Rule 118.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'What is the effect of filing a timely motion for reconsideration on the perfection of an appeal?',
    'choices'     => json_encode([
        'Suspends the appeal period',
        'Extinguishes the right to appeal',
        'Accelerates appeal filing',
        'Has no effect',
    ]),
    'answer'      => 'Suspends the appeal period',
    'explanation' => 'Filing a motion for reconsideration suspends the period to appeal until resolution of the motion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which remedy is proper to challenge detention on invalid warrants before any trial?',
    'choices'     => json_encode([
        'Writ of habeas corpus',
        'Writ of mandamus',
        'Writ of certiorari',
        'Writ of prohibition',
    ]),
    'answer'      => 'Writ of habeas corpus',
    'explanation' => 'Habeas corpus addresses unlawful or invalid detention regardless of trial status.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'What is the unique feature of a bill of exceptions in criminal cases?',
    'choices'     => json_encode([
        'It does not require new evidence',
        'It suspends the sentence',
        'It replaces appeal',
        'It is filed before arraignment',
    ]),
    'answer'      => 'It does not require new evidence',
    'explanation' => 'A bill of exceptions raises errors apparent on record without presenting new evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which act amends the Rules of Court governing search and seizure procedures?',
    'choices'     => json_encode([
        'RA 10591',
        'RA 9165',
        'RA 7438',
        'RA 6981',
    ]),
    'answer'      => 'RA 10591',
    'explanation' => 'RA 10591 (Comprehensive Firearms and Ammunition Regulation Act) amended certain seizure provisions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which provision requires police officers to inform arrestees of their Miranda rights?',
    'choices'     => json_encode([
        'Rule 113, Rules of Court',
        'Rule 110, Rules of Court',
        'Rule 112, Rules of Court',
        'Rule 119, Rules of Court',
    ]),
    'answer'      => 'Rule 113, Rules of Court',
    'explanation' => 'Rule 113 details custodial investigation and necessitates cautioning the accused.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which principle mandates that evidence be contemporaneously recorded during interrogation?',
    'choices'     => json_encode([
        'Best evidence rule',
        'Recording requirement',
        'Chain of custody',
        'Admissibility rule',
    ]),
    'answer'      => 'Recording requirement',
    'explanation' => 'Interrogations must be recorded as required by Rule 113 to ensure voluntariness.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which action terminates criminal proceedings by compromise between offended party and accused?',
    'choices'     => json_encode([
        'Expungement',
        'Restorative justice',
        'Judicial pardon',
        'Dismissal by compromise',
    ]),
    'answer'      => 'Dismissal by compromise',
    'explanation' => 'Certain offenses may be dismissed via compromise under special laws and jurisprudence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which demand seeks additional particulars of evidentiary facts in the prosecution’s case?',
    'choices'     => json_encode([
        'Demurrer to evidence',
        'Bill of particulars',
        'Motion to quash',
        'Motion in limine',
    ]),
    'answer'      => 'Bill of particulars',
    'explanation' => 'A bill of particulars allows the accused to obtain detailed facts necessary for defense.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which rule allows the introduction of prior inconsistent statements for impeachment?',
    'choices'     => json_encode([
        'Impeachment rule',
        'Best evidence rule',
        'Hearsay rule',
        'Evidence of habit',
    ]),
    'answer'      => 'Impeachment rule',
    'explanation' => 'Prior inconsistent statements may be used to impeach witness credibility.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which special civil action addresses rights to information and data privacy?',
    'choices'     => json_encode([
        'Habeas data',
        'Habeas corpus',
        'Certiorari',
        'Prohibition',
    ]),
    'answer'      => 'Habeas data',
    'explanation' => 'Habeas data protects the right to privacy and information access under the Constitution.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which doctrine admits business entries as evidence though hearsay?',
    'choices'     => json_encode([
        'Business record exception',
        'Excited utterance',
        'Dying declaration',
        'State of mind exception',
    ]),
    'answer'      => 'Business record exception',
    'explanation' => 'Records maintained in regular course of business are admissible despite being hearsay.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which remedy prevents trial from continuing on errors not correctable by appeal?',
    'choices'     => json_encode([
        'Certiorari',
        'Mandamus',
        'Prohibition',
        'Habeas corpus',
    ]),
    'answer'      => 'Certiorari',
    'explanation' => 'Certiorari corrects jurisdictional errors and grave abuse, not remedied by appeal.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which provision requires corroboration of accused’s confession in court?',
    'choices'     => json_encode([
        'Rule 118',
        'Rule 119',
        'Rule 116',
        'Rule 115',
    ]),
    'answer'      => 'Rule 119',
    'explanation' => 'Rule 119 mandates that confession must be corroborated by other evidence to convict.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which action raises issues of fact or law after trial for Supreme Court review?',
    'choices'     => json_encode([
        'Appeal',
        'Certiorari',
        'Habeas corpus',
        'Prohibition',
    ]),
    'answer'      => 'Appeal',
    'explanation' => 'An appeal raises questions decided by lower courts for a higher court’s review.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'What is the effect of a grant of bail on the pending criminal charge?',
    'choices'     => json_encode([
        'Suspends detention pending trial',
        'Dismisses the case',
        'Convicts the accused',
        'Nullifies evidence',
    ]),
    'answer'      => 'Suspends detention pending trial',
    'explanation' => 'Bail releases the accused from jail while ensuring appearance at trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which stage involves examination of witnesses and presentation of evidence?',
    'choices'     => json_encode([
        'Trial proper',
        'Pre-trial',
        'Preliminary investigation',
        'Arraignment',
    ]),
    'answer'      => 'Trial proper',
    'explanation' => 'Trial proper is the part where evidence is presented and witnesses are examined.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 5,
    'question'    => 'Which principle mandates that the accused must be informed of charges in language they understand?',
    'choices'     => json_encode([
        'Confrontation clause',
        'Due process',
        'Right to counsel',
        'Right to speedy trial',
    ]),
    'answer'      => 'Due process',
    'explanation' => 'Due process requires that charges and rights be explained in understandable terms.',
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

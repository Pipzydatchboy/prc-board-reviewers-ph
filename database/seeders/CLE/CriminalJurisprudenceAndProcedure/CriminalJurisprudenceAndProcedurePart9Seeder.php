<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart9Seeder extends Seeder
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
    'part'        => 9,
    'question'    => 'Which plea admits the facts of the offense but maintains innocence by reason of lack of intent?',
    'choices'     => json_encode([
        'Alford plea',
        'Not guilty plea',
        'Guilty plea',
        'Plea of confession and avoidance',
    ]),
    'answer'      => 'Alford plea',
    'explanation' => 'An Alford plea allows the defendant to plead guilty while asserting innocence, acknowledging sufficient evidence for conviction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'What is required for a valid search under the doctrine of hot pursuit?',
    'choices'     => json_encode([
        'Immediate chase after a fleeing felon',
        'Written consent from owner',
        'Judicial warrant',
        'Notice to prosecutor',
    ]),
    'answer'      => 'Immediate chase after a fleeing felon',
    'explanation' => 'Hot pursuit allows warrantless entry when police are actively chasing a suspect who flees into a private place.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which form of evidence includes physical objects presented for inspection in court?',
    'choices'     => json_encode([
        'Real evidence',
        'Documentary evidence',
        'Testimonial evidence',
        'Circumstantial evidence',
    ]),
    'answer'      => 'Real evidence',
    'explanation' => 'Real evidence consists of tangible items connected to the crime and offered for demonstration.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which rule governs admissibility of reports from forensic laboratories?',
    'choices'     => json_encode([
        'Business record exception',
        'Expert testimony rule',
        'Best evidence rule',
        'Hearsay rule',
    ]),
    'answer'      => 'Business record exception',
    'explanation' => 'Laboratory reports kept in regular course of business are admissible under the business records exception.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which writ is used to challenge a public officer’s failure to perform a ministerial duty in criminal cases?',
    'choices'     => json_encode([
        'Mandamus',
        'Certiorari',
        'Prohibition',
        'Habeas corpus',
    ]),
    'answer'      => 'Mandamus',
    'explanation' => 'Mandamus compels an officer to perform a mandatory duty, such as timely disposition of cases.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'What is the legal effect of nolle prosequi in a criminal case?',
    'choices'     => json_encode([
        'Dismisses charges without prejudice',
        'Convicts the accused',
        'Grants bail',
        'Quashes evidence',
    ]),
    'answer'      => 'Dismisses charges without prejudice',
    'explanation' => 'Nolle prosequi signifies the prosecutor declines prosecution, dismissing charges but allowing refiling.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which proceeding takes place after arraignment and before trial proper?',
    'choices'     => json_encode([
        'Pre-trial conference',
        'Inquest proceedings',
        'Suppression hearing',
        'Sentence hearing',
    ]),
    'answer'      => 'Pre-trial conference',
    'explanation' => 'A pre-trial conference simplifies issues, settles plea bargaining, and plans the trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which notice must law enforcement provide before conducting a wiretap?',
    'choices'     => json_encode([
        'Judicial warrant',
        'Oral warning',
        'Public announcement',
        'Inspector general’s order',
    ]),
    'answer'      => 'Judicial warrant',
    'explanation' => 'Wiretaps require a judge-issued warrant based on probable cause.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which concept refers to giving the accused time to prepare a defense without undue delay?',
    'choices'     => json_encode([
        'Speedy trial right',
        'Due process',
        'Open court',
        'Double jeopardy',
    ]),
    'answer'      => 'Due process',
    'explanation' => 'Due process ensures fair legal proceedings, including sufficient preparation time for defense.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'What is the prescriptive period for crimes punishable by prision correccional (minor penalties)?',
    'choices'     => json_encode([
        '5 years',
        '10 years',
        '15 years',
        '20 years',
    ]),
    'answer'      => '10 years',
    'explanation' => 'Prision correccional offenses prescribe after 10 years under the Revised Penal Code.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which judicial act commutes a sentence to a less severe penalty?',
    'choices'     => json_encode([
        'Commutation',
        'Pardon',
        'Amnesty',
        'Rehabilitation',
    ]),
    'answer'      => 'Commutation',
    'explanation' => 'Commutation reduces the severity of a sentence without absolving the offender of guilt.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which is an example of an expert witness’s work product admissible in court?',
    'choices'     => json_encode([
        'Expert’s report',
        'Lay witness testimony',
        'Police blotter',
        'Victim’s statement',
    ]),
    'answer'      => 'Expert’s report',
    'explanation' => 'Expert reports are admissible as expert testimony under rules allowing scientific evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which theory attributes liability to principals for acts of their accomplices?',
    'choices'     => json_encode([
        'Participatory theory',
        'Agency theory',
        'Vicarious liability',
        'Conspiracy theory',
    ]),
    'answer'      => 'Participatory theory',
    'explanation' => 'Participatory theory holds all who aid or abet are equally liable as principals.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which exception allows admission of statements describing existing physical condition?',
    'choices'     => json_encode([
        'State of mind exception',
        'Business record exception',
        'Excited utterance',
        'Dying declaration',
    ]),
    'answer'      => 'State of mind exception',
    'explanation' => 'Statements reflecting physical or mental condition at the time are admissible under state of mind exception.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which remedy addresses undue delay by the prosecution in filing charges after preliminary investigation?',
    'choices'     => json_encode([
        'Writ of mandamus',
        'Habeas corpus',
        'Certiorari',
        'Prohibition',
    ]),
    'answer'      => 'Writ of mandamus',
    'explanation' => 'Mandamus can compel the prosecutor to decide and file information within statutory period.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which action admits guilt and waives trial, allowing immediate sentencing?',
    'choices'     => json_encode([
        'Guilty plea',
        'No contest plea',
        'Alford plea',
        'Plea of confession and avoidance',
    ]),
    'answer'      => 'Guilty plea',
    'explanation' => 'A guilty plea admits all elements of the offense and leads directly to sentencing.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which venue rule applies if the crime is committed on the high seas?',
    'choices'     => json_encode([
        'By offender’s nationality',
        'Where arrested',
        'Where crime discovered',
        'Any Philippine court',
    ]),
    'answer'      => 'Any Philippine court',
    'explanation' => 'Offenses committed at sea may be tried in any Philippine court under special jurisdictional rules.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which plea must be entered by the accused at arraignment?',
    'choices'     => json_encode([
        'Pleas of guilt or not guilt',
        'Plea for bail',
        'Plea to civil liability',
        'Plea of insanity',
    ]),
    'answer'      => 'Pleas of guilt or not guilt',
    'explanation' => 'At arraignment, the accused must plead either guilty or not guilty to the charge.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which process allows the court to inspect real property as evidence?',
    'choices'     => json_encode([
        'Judicial inspection',
        'Search warrant',
        'Subpoena duces tecum',
        'Inventory report',
    ]),
    'answer'      => 'Judicial inspection',
    'explanation' => 'Judicial inspection authorizes the court to examine property connected to the case.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 9,
    'question'    => 'Which presumption applies when a public document is properly executed?',
    'choices'     => json_encode([
        'Presumption of regularity',
        'Presumption of innocence',
        'Presumption of continuity',
        'Presumption of death',
    ]),
    'answer'      => 'Presumption of regularity',
    'explanation' => 'Properly executed public documents are presumed regular and authentic.',
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

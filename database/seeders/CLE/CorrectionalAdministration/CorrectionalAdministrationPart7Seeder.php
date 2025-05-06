<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart7Seeder extends Seeder
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

// 1
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'What is preventive imprisonment?',
  'choices'     => json_encode([
    'Detention before trial',
    'House arrest after conviction',
    'Community service',
    'Parole supervision',
  ]),
  'answer'      => 'Detention before trial',
  'explanation' => 'Preventive imprisonment holds accused persons in custody until their case is resolved.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Under the Rules of Court, what is the maximum period for preventive imprisonment?',
  'choices'     => json_encode([
    'Six months for misdemeanor',
    'One year for felony',
    'Two years for heinous crimes',
    'No limit specified',
  ]),
  'answer'      => 'Six months for misdemeanor',
  'explanation' => 'Preventive imprisonment for misdemeanors is limited to six months by Rule 114, Sec. 29.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which document may secure release from preventive imprisonment?',
  'choices'     => json_encode([
    'Bail bond',
    'Commitment order',
    'Pardon grant',
    'Suspension order',
  ]),
  'answer'      => 'Bail bond',
  'explanation' => 'Posting a bail bond secures a detainee’s temporary release pending trial.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Who sets the amount of bail in the Philippines?',
  'choices'     => json_encode([
    'Presiding judge',
    'Jail warden',
    'Prosecutor',
    'Public defender',
  ]),
  'answer'      => 'Presiding judge',
  'explanation' => 'The judge fixing bail considers crime gravity, evidence, and flight risk.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'What is recognizance?',
  'choices'     => json_encode([
    'Release on personal pledge',
    'Formal conviction',
    'Work release program',
    'Medical furlough',
  ]),
  'answer'      => 'Release on personal pledge',
  'explanation' => 'Recognizance allows release without bond, based on the accused’s promise to appear.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which time allowance applies for good conduct beyond GCTA?',
  'choices'     => json_encode([
    'Special loyalty time',
    'Mandatory parole',
    'Automatic pardon',
    'Rehabilitation credit',
  ]),
  'answer'      => 'Special loyalty time',
  'explanation' => 'Special loyalty time rewards exemplary behavior beyond standard good conduct allowance.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which law governs special loyalty time allowances?',
  'choices'     => json_encode([
    'R.A. 10592',
    'R.A. 10707',
    'R.A. 9169',
    'R.A. 9344',
  ]),
  'answer'      => 'R.A. 10592',
  'explanation' => 'R.A. 10592 amended the GCTA law to include special loyalty time provisions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'What is the effect of time allowances on sentence duration?',
  'choices'     => json_encode([
    'Reduces actual time served',
    'Extends parole period',
    'Cancels good conduct credit',
    'Mandates solitary confinement',
  ]),
  'answer'      => 'Reduces actual time served',
  'explanation' => 'Time allowances shorten the period an inmate must remain incarcerated.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which prisoner is eligible for special loyalty time?',
  'choices'     => json_encode([
    'Those who saved a life',
    'First‐time offenders',
    'Parole violators',
    'Juvenile detainees',
  ]),
  'answer'      => 'Those who saved a life',
  'explanation' => 'Acts of heroism or extreme good conduct may earn special loyalty credits.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which system tracks earned time allowances?',
  'choices'     => json_encode([
    'Sentence computation log',
    'Visitation register',
    'Classification manual',
    'Medical record',
  ]),
  'answer'      => 'Sentence computation log',
  'explanation' => 'This log records and applies all credits toward final release date.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Preventive imprisonment credit is applied under which rule?',
  'choices'     => json_encode([
    'Rule 114',
    'Rule 119',
    'Rule 102',
    'Rule 110',
  ]),
  'answer'      => 'Rule 114',
  'explanation' => 'Rule 114, Sec. 29 provides that pre‐trial detention may be credited upon conviction.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which authority approves crediting of preventive detention?',
  'choices'     => json_encode([
    'Court of conviction',
    'Jail warden',
    'Prosecutor',
    'Philippine National Police',
  ]),
  'answer'      => 'Court of conviction',
  'explanation' => 'The sentencing court orders crediting of pre‐trial detention against the sentence.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which form must be filed to claim preventive detention credit?',
  'choices'     => json_encode([
    'Motion to credit',
    'Petition for parole',
    'Application for pardon',
    'Writ of habeas corpus',
  ]),
  'answer'      => 'Motion to credit',
  'explanation' => 'A formal motion to credit is filed with the trial court post‐conviction.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which allowance is NOT recognized under current law?',
  'choices'     => json_encode([
    'Good conduct time',
    'Special loyalty time',
    'School attendance credit',
    'Preventive detention credit',
  ]),
  'answer'      => 'School attendance credit',
  'explanation' => 'No statutory provision grants time credits for schooling within the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which agency implements credit computations?',
  'choices'     => json_encode([
    'Bureau of Corrections',
    'BJMP',
    'Parole Board',
    'DOJ',
  ]),
  'answer'      => 'Bureau of Corrections',
  'explanation' => 'BUCOR’s computation unit calculates and applies all sentence credits.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which international guideline addresses pre‐trial detention standards?',
  'choices'     => json_encode([
    'Bangkok Rules',
    'Tokyo Rules',
    'Mandela Rules',
    'Riyadh Guidelines',
  ]),
  'answer'      => 'Tokyo Rules',
  'explanation' => 'The Tokyo Rules cover non‐custodial measures and treatment of detainees.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'What does R.A. 9344 (Juvenile Justice Law) say about preventive detention of minors?',
  'choices'     => json_encode([
    'Prohibited except in exceptional cases',
    'Allowed without limit',
    'Automatic bail',
    'Mandatory solitary confinement',
  ]),
  'answer'      => 'Prohibited except in exceptional cases',
  'explanation' => 'R.A. 9344 generally bans juvenile preventive detention with few exceptions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which form of release does NOT require monetary bond?',
  'choices'     => json_encode([
    'Recognizance',
    'Cash bond',
    'Property bond',
    'Surety bond',
  ]),
  'answer'      => 'Recognizance',
  'explanation' => 'Recognizance releases detainees on their own pledge without money or surety.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which judicial remedy challenges unlawful preventive detention?',
  'choices'     => json_encode([
    'Habeas corpus',
    'Certiorari',
    'Mandamus',
    'Prohibition',
  ]),
  'answer'      => 'Habeas corpus',
  'explanation' => 'Habeas corpus petitions seek release from unlawful or excessive detention.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 7,
  'question'    => 'Which core right applies to all detainees, including those in preventive imprisonment?',
  'choices'     => json_encode([
    'Right to humane treatment',
    'Right to vote',
    'Right to work outside',
    'Right to full citizenship',
  ]),
  'answer'      => 'Right to humane treatment',
  'explanation' => 'All detainees retain the right to be treated with dignity and basic human standards.',
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

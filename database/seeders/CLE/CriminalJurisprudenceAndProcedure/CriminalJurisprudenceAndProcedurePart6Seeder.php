<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart6Seeder extends Seeder
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
    'part'        => 6,
    'question'    => 'Which remedy challenges the legality of a court\'s interlocutory order during trial?',
    'choices'     => json_encode([
        'Interlocutory appeal',
        'Certiorari',
        'Prohibition',
        'Mandamus',
    ]),
    'answer'      => 'Interlocutory appeal',
    'explanation' => 'An interlocutory appeal may be filed to challenge certain orders before final judgment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which doctrine prevents use of illegally obtained evidence in trial?',
    'choices'     => json_encode([
        'Exclusionary rule',
        'Best evidence rule',
        'Fruit of the poisonous tree',
        'Doctrine of exhaustion',
    ]),
    'answer'      => 'Exclusionary rule',
    'explanation' => 'The exclusionary rule bars admission of evidence procured in violation of constitutional rights.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'What type of bail involves personal recognizance without deposit?',
    'choices'     => json_encode([
        'Unsecured bail',
        'Cash bail',
        'Surety bond',
        'Property bond',
    ]),
    'answer'      => 'Unsecured bail',
    'explanation' => 'Unsecured bail or recognizance is release on one’s own recognizance without cash deposit.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which status describes when a criminal case is dismissed for lack of prosecution?',
    'choices'     => json_encode([
        'Nolle prosequi',
        'Dismissal with prejudice',
        'Dismissal without prejudice',
        'Acquittal',
    ]),
    'answer'      => 'Dismissal without prejudice',
    'explanation' => 'Dismissal without prejudice allows the State to refile charges later.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which proceeding determines the admissibility of confessions?',
    'choices'     => json_encode([
        'Suppression hearing',
        'Competency hearing',
        'Preliminary investigation',
        'Pre-trial conference',
    ]),
    'answer'      => 'Suppression hearing',
    'explanation' => 'A suppression hearing determines whether a confession or evidence should be excluded.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which writ protects against unlawful search and seizure by executive agents?',
    'choices'     => json_encode([
        'Amparo',
        'Habeas corpus',
        'Certiorari',
        'Prohibition',
    ]),
    'answer'      => 'Amparo',
    'explanation' => 'Writ of amparo safeguards against violations of constitutional rights, including security of person and privacy.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which action terminates probation and leads to imposition of original sentence?',
    'choices'     => json_encode([
        'Revocation of probation',
        'Parole revocation',
        'Certiorari',
        'Exclusionary rule motion',
    ]),
    'answer'      => 'Revocation of probation',
    'explanation' => 'Probation may be revoked for violation of conditions, reinstating the original penalty.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'What is the effect of a plea bargain approved by the court?',
    'choices'     => json_encode([
        'Modifies penalty',
        'Dismisses the complaint',
        'Increases penalty',
        'Removes civil liability',
    ]),
    'answer'      => 'Modifies penalty',
    'explanation' => 'Plea bargaining results in agreed modification of charge or penalty, approved by court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which corrective remedy is available post-conviction for errors apparent on the face of the record?',
    'choices'     => json_encode([
        'Motion for new trial',
        'Petition for review on certiorari',
        'Bill of exceptions',
        'Habeas corpus',
    ]),
    'answer'      => 'Motion for new trial',
    'explanation' => 'A motion for new trial challenges verdict based on errors during trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which condition is NOT required for valid custodial interrogation recordings?',
    'choices'     => json_encode([
        'Clear audio',
        'Presence of counsel',
        'Date and time stamp',
        'Uninterrupted recording',
    ]),
    'answer'      => 'Presence of counsel',
    'explanation' => 'While counsel presence is required, Rule 113 mandates recording quality and continuity, not timestamp.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which doctrine allows admission of dying declarations in criminal trials?',
    'choices'     => json_encode([
        'Res gestae',
        'Hearsay exception',
        'Best evidence rule',
        'Doctrine of fairness',
    ]),
    'answer'      => 'Hearsay exception',
    'explanation' => 'Dying declarations are admissible under recognized hearsay exceptions in criminal trials.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'What principle mandates prompt arraignment of arrested individuals?',
    'choices'     => json_encode([
        'First judicial hearing rule',
        'Right to counsel',
        'Speedy trial right',
        'Judicial inquiry rule',
    ]),
    'answer'      => 'First judicial hearing rule',
    'explanation' => 'The Constitution requires arrested persons to be presented to a judge within 36 hours for arraignment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which civil action seeks compensation for damages caused by wrongful prosecution?',
    'choices'     => json_encode([
        'Civil indemnity',
        'Reparation civil',
        'Damages claim',
        'Injunction',
    ]),
    'answer'      => 'Civil indemnity',
    'explanation' => 'Civil indemnity allows recovery for miscarriage of justice or wrongful conviction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which remedy compels a public officer to perform a ministerial duty related to criminal justice?',
    'choices'     => json_encode([
        'Mandamus',
        'Certiorari',
        'Prohibition',
        'Habeas corpus',
    ]),
    'answer'      => 'Mandamus',
    'explanation' => 'Mandamus corrects omission of ministerial duties by public officers, including timely case handling.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which period prescribes an offense punishable by arresto menor (very light imprisonment)?',
    'choices'     => json_encode([
        '6 months',
        '1 year',
        '2 years',
        '3 years',
    ]),
    'answer'      => '6 months',
    'explanation' => 'Arresto menor offenses prescribe after six months under the Revised Penal Code.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which law prescribes custodial investigation guidelines by police officers?',
    'choices'     => json_encode([
        'RA 7438',
        'RA 10591',
        'RA 9165',
        'RA 10353',
    ]),
    'answer'      => 'RA 7438',
    'explanation' => 'RA 7438 enumerates rights of persons arrested, detained, or under custodial investigation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which plea admits guilt but asserts circumstances to reduce liability?',
    'choices'     => json_encode([
        'Alford plea',
        'Plea of confession and avoidance',
        'Guilty plea',
        'No contest plea',
    ]),
    'answer'      => 'Plea of confession and avoidance',
    'explanation' => 'This plea admits facts of wrongdoing but offers justifications or excuses to mitigate penalty.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which accessory after the fact may incur criminal liability?',
    'choices'     => json_encode([
        'Harboring a fugitive',
        'Solicitation',
        'Attempt',
        'Conspiracy',
    ]),
    'answer'      => 'Harboring a fugitive',
    'explanation' => 'Harboring a fugitive who has committed a crime constitutes accessory after the fact.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which theory imputes liability for acts of co-conspirators?',
    'choices'     => json_encode([
        'Co-conspirator liability',
        'Agency theory',
        'Vicarious liability',
        'Participatory theory',
    ]),
    'answer'      => 'Co-conspirator liability',
    'explanation' => 'Under co-conspirator liability, conspirators are liable for acts committed in furtherance of the conspiracy.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 6,
    'question'    => 'Which document initiates criminal action against a juvenile offender?',
    'choices'     => json_encode([
        'Petition',
        'Information',
        'Complaint',
        'Summons',
    ]),
    'answer'      => 'Petition',
    'explanation' => 'Juvenile cases are initiated by filing a petition under the Juvenile Justice and Welfare Act.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

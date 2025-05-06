<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart2Seeder extends Seeder
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
  'part'        => 2,
  'question'    => 'What form of clemency fully restores civil and political rights?',
  'choices'     => json_encode([
    'Pardon',
    'Commutation',
    'Reprieve',
    'Amnesty',
  ]),
  'answer'      => 'Pardon',
  'explanation' => 'A pardon forgives the offense and fully restores the recipient’s rights.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which clemency power reduces the severity of a sentence without absolving guilt?',
  'choices'     => json_encode([
    'Pardon',
    'Commutation',
    'Reprieve',
    'Amnesty',
  ]),
  'answer'      => 'Commutation',
  'explanation' => 'A commutation lowers the punishment but leaves the conviction intact.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which form of clemency is typically granted to a group of offenders by legislative act?',
  'choices'     => json_encode([
    'Pardon',
    'Commutation',
    'Reprieve',
    'Amnesty',
  ]),
  'answer'      => 'Amnesty',
  'explanation' => 'An amnesty is a collective pardon, often granted by the legislature.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which clemency form postpones the execution of a sentence temporarily?',
  'choices'     => json_encode([
    'Pardon',
    'Commutation',
    'Reprieve',
    'Amnesty',
  ]),
  'answer'      => 'Reprieve',
  'explanation' => 'A reprieve delays the enforcement of a punishment for a limited time.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Who holds the authority to grant executive clemency in the Philippines?',
  'choices'     => json_encode([
    'The Supreme Court',
    'The President',
    'The Senate',
    'The Department of Justice',
  ]),
  'answer'      => 'The President',
  'explanation' => 'Executive clemency powers—pardon, commutation, reprieve—are exercised by the President.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which document initiates the probation process in the courts?',
  'choices'     => json_encode([
    'Petition for probation',
    'Warrant of arrest',
    'Commitment order',
    'Information',
  ]),
  'answer'      => 'Petition for probation',
  'explanation' => 'Probation begins when a qualified offender files a petition and is granted probation by the court.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which agency administers the probation system in the Philippines?',
  'choices'     => json_encode([
    'BJMP',
    'BUCOR',
    'Probation and Parole Administration',
    'PNP',
  ]),
  'answer'      => 'Probation and Parole Administration',
  'explanation' => 'The Probation and Parole Administration oversees probationers under R.A. 10707.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'What is the main objective of probation?',
  'choices'     => json_encode([
    'Retribution',
    'Rehabilitation',
    'Deterrence',
    'Restitution',
  ]),
  'answer'      => 'Rehabilitation',
  'explanation' => 'Probation emphasizes rehabilitation and community reintegration over incarceration.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which condition is commonly imposed on probationers?',
  'choices'     => json_encode([
    'Periodic reporting to a probation officer',
    'House arrest',
    'Mandatory jail time',
    'Automatic parole',
  ]),
  'answer'      => 'Periodic reporting to a probation officer',
  'explanation' => 'Regular check‑ins help ensure compliance with court‑ordered terms.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'What is the term for ending probation due to violation of its conditions?',
  'choices'     => json_encode([
    'Completion',
    'Revocation',
    'Expiration',
    'Suspension',
  ]),
  'answer'      => 'Revocation',
  'explanation' => 'Probation revocation returns the offender to court for possible incarceration.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Parole is best defined as:',
  'choices'     => json_encode([
    'Immediate release without supervision',
    'Conditional release before sentence completion',
    'Early commutation of sentence',
    'Community service order',
  ]),
  'answer'      => 'Conditional release before sentence completion',
  'explanation' => 'Parole allows inmates to serve part of their sentence in the community under conditions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Who decides on parole eligibility and release in the Philippines?',
  'choices'     => json_encode([
    'Supreme Court',
    'President',
    'Board of Pardons and Parole',
    'Department of Justice',
  ]),
  'answer'      => 'Board of Pardons and Parole',
  'explanation' => 'The Board of Pardons and Parole evaluates inmates for conditional release.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which Republic Act created the Probation and Parole Administration?',
  'choices'     => json_encode([
    'R.A. 9169',
    'R.A. 10575',
    'R.A. 10707',
    'R.A. 10375',
  ]),
  'answer'      => 'R.A. 10707',
  'explanation' => 'R.A. 10707 reorganized and strengthened the Probation and Parole Administration.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Before applying for parole, an inmate must have:',
  'choices'     => json_encode([
    'No prior convictions',
    'Served the minimum portion of the sentence',
    'Completed rehabilitation programs',
    'Paid all fines',
  ]),
  'answer'      => 'Served the minimum portion of the sentence',
  'explanation' => 'Parole applicants must satisfy minimum time‑served requirements.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Good conduct time allowance allows an inmate to:',
  'choices'     => json_encode([
    'Reduce sentence length for good behavior',
    'Obtain a full pardon',
    'Serve sentence at home',
    'Avoid parole hearing',
  ]),
  'answer'      => 'Reduce sentence length for good behavior',
  'explanation' => 'GCTA credits time off an inmate’s sentence for maintaining good conduct.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Meritorious service time allowance is granted for:',
  'choices'     => json_encode([
    'Attending school programs',
    'Implementing successful programs or inventions',
    'Reporting late for work',
    'Requesting transfer',
  ]),
  'answer'      => 'Implementing successful programs or inventions',
  'explanation' => 'MSTA rewards exceptional acts or innovations that benefit the institution or inmates.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which legal concept extinguishes criminal liability after a set period?',
  'choices'     => json_encode([
    'Res judicata',
    'Prescription',
    'Stay of execution',
    'Collateral estoppel',
  ]),
  'answer'      => 'Prescription',
  'explanation' => 'Prescription bars prosecution once the statutory period has elapsed.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which of these is NOT a form of non‑institutional corrections?',
  'choices'     => json_encode([
    'Probation',
    'Parole',
    'Clemency',
    'Imprisonment',
  ]),
  'answer'      => 'Imprisonment',
  'explanation' => 'Imprisonment is an institutional correction, not a community‑based measure.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Who supervises parolees in the community?',
  'choices'     => json_encode([
    'BJMP',
    'Probation and Parole Administration',
    'BUCOR',
    'PNP',
  ]),
  'answer'      => 'Probation and Parole Administration',
  'explanation' => 'The Probation and Parole Administration also supervises parolees under R.A. 10707.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 2,
  'question'    => 'Which body has the power to grant amnesty?',
  'choices'     => json_encode([
    'The President',
    'The Supreme Court',
    'The Congress',
    'The Department of Justice',
  ]),
  'answer'      => 'The Congress',
  'explanation' => 'Amnesty is a legislative act passed by Congress.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart10Seeder extends Seeder
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
  'part'        => 10,
  'question'    => 'What does GCTA stand for in the Philippine corrections context?',
  'choices'     => json_encode([
    'Good Conduct Time Allowance',
    'General Custody and Treatment Act',
    'Government Correctional Training Act',
    'Guidelines for Care, Treatment, and Assistance',
  ]),
  'answer'      => 'Good Conduct Time Allowance',
  'explanation' => 'GCTA awards inmates credits for maintaining good behavior, reducing their sentence duration.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Under RA 10592, who computes and applies GCTA credits?',
  'choices'     => json_encode([
    'BUCOR computation unit',
    'Probation Officer',
    'Jail warden',
    'Board of Pardons and Parole',
  ]),
  'answer'      => 'BUCOR computation unit',
  'explanation' => 'BUCOR’s sentence computation unit calculates and applies all time allowances under RA 10592.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which additional credit rewards inmates for exceptional acts benefiting the institution?',
  'choices'     => json_encode([
    'Special Loyalty Time',
    'Meritorious Service Time',
    'Extra Rehabilitation Credit',
    'Institutional Service Allowance',
  ]),
  'answer'      => 'Meritorious Service Time',
  'explanation' => 'Meritorious Service Time credits are granted for distinguished service or inventions aiding the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Special Loyalty Time is granted for:',
  'choices'     => json_encode([
    'Exemplary loyalty and good conduct beyond GCTA',
    'Attendance in school programs',
    'Participation in vocational training',
    'Visitation compliance',
  ]),
  'answer'      => 'Exemplary loyalty and good conduct beyond GCTA',
  'explanation' => 'Special Loyalty Time rewards sustained, exceptional behavior beyond regular GCTA credits.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which rule allows credit for pretrial detention against the final sentence?',
  'choices'     => json_encode([
    'Rule 114, Sec. 29',
    'Rule 102, Sec. 15',
    'Rule 119, Sec. 5',
    'Rule 110, Sec. 2',
  ]),
  'answer'      => 'Rule 114, Sec. 29',
  'explanation' => 'Rule 114, Section 29 of the Rules of Court provides for crediting preventive imprisonment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'What is extinction of criminal liability by prescription?',
  'choices'     => json_encode([
    'Bar to prosecution after lapse of statutory period',
    'Erasure of criminal record',
    'Commutation of sentence',
    'Immediate release',
  ]),
  'answer'      => 'Bar to prosecution after lapse of statutory period',
  'explanation' => 'Prescription extinguishes the State’s right to prosecute once the prescribed time has passed.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Under the RPC, prescription for crimes punishable by imprisonment over 12 years is:',
  'choices'     => json_encode([
    '20 years from commission',
    '15 years from commission',
    '10 years from commission',
    'No prescription',
  ]),
  'answer'      => '20 years from commission',
  'explanation' => 'Crimes punishable by reclusion perpetua or life imprisonment prescribe after 20 years under Article 90.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which crime prescribes in 10 years?',
  'choices'     => json_encode([
    'Reclusion perpetua',
    'Prision mayor',
    'Arresto mayor',
    'Manslaughter',
  ]),
  'answer'      => 'Prision mayor',
  'explanation' => 'Prision mayor (6 – 12 years) prescribes in 10 years from the date of the offense.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which crime prescribes in 6 years?',
  'choices'     => json_encode([
    'Prision correccional',
    'Reclusion perpetua',
    'Arson with homicide',
    'Forgery',
  ]),
  'answer'      => 'Prision correccional',
  'explanation' => 'Prision correccional (6 – 8 years) prescribes in 6 years under Article 90.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which crime prescribes in 3 years?',
  'choices'     => json_encode([
    'Arresto mayor',
    'Reclusion temporal',
    'Murder',
    'Rape',
  ]),
  'answer'      => 'Arresto mayor',
  'explanation' => 'Arresto mayor (1 – 6 months to 6 months – 1 year) prescribes in 3 years.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Prescription of crime interrupts when:',
  'choices'     => json_encode([
    'Prosecution is instituted',
    'Sentence is served',
    'Pardon is granted',
    'Accused absconds',
  ]),
  'answer'      => 'Prosecution is instituted',
  'explanation' => 'Prescription is interrupted upon valid judicial proceedings like filing of information.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Double jeopardy (ne bis in idem) means:',
  'choices'     => json_encode([
    'No person may be tried twice for the same offense',
    'Sentence must be doubled',
    'Charge transfers to higher court',
    'Accused must be pardoned',
  ]),
  'answer'      => 'No person may be tried twice for the same offense',
  'explanation' => 'The Constitution forbids multiple prosecutions or punishments for the same act.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which of the following does NOT interrupt prescription?',
  'choices'     => json_encode([
    'Grant of pardon',
    'Institution of prosecution',
    'Judicial acknowledgement of guilt',
    'Escaping from detention',
  ]),
  'answer'      => 'Grant of pardon',
  'explanation' => 'A pardon does not affect the prescription period of the crime itself.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which legal proceeding bars further criminal action upon final judgment?',
  'choices'     => json_encode([
    'Res judicata',
    'Habeas corpus',
    'Certiorari',
    'Mandamus',
  ]),
  'answer'      => 'Res judicata',
  'explanation' => 'Res judicata prevents re‑litigation of issues already finally adjudicated.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which punishment outcome extinguishes criminal liability?',
  'choices'     => json_encode([
    'Execution of sentence',
    'Grant of conditional pardon',
    'Commutation',
    'Payment of fine',
  ]),
  'answer'      => 'Execution of sentence',
  'explanation' => 'Serving the full sentence extinguishes the State’s right to impose further punishment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which act extinguishes criminal liability but not civil liability?',
  'choices'     => json_encode([
    'Conditional pardon',
    'Expungement',
    'Clearing of police record',
    'Probation grant',
  ]),
  'answer'      => 'Conditional pardon',
  'explanation' => 'A conditional pardon forgives the crime but may leave civil obligations intact.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which remedy challenges unlawful preventive detention?',
  'choices'     => json_encode([
    'Habeas corpus',
    'Certiorari',
    'Prohibition',
    'Mandamus',
  ]),
  'answer'      => 'Habeas corpus',
  'explanation' => 'Habeas corpus petitions seek release from unlawful or excessive detention.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which provision in the Constitution protects against cruel punishment but does not bar prescription?',
  'choices'     => json_encode([
    'Due process clause',
    'Equal protection clause',
    'Free speech clause',
    'Right to privacy',
  ]),
  'answer'      => 'Due process clause',
  'explanation' => 'Due process safeguards fair treatment but does not affect prescription periods.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which is an example of extinction of criminal liability by prescription of penalty?',
  'choices'     => json_encode([
    'Time elapsed after final judgment',
    'Grant of absolute pardon',
    'Service of half the sentence',
    'Commutation',
  ]),
  'answer'      => 'Time elapsed after final judgment',
  'explanation' => 'Prescription of the penalty bars enforcement once the statutory period after judgment passes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 10,
  'question'    => 'Which document orders crediting of pretrial detention?',
  'choices'     => json_encode([
    'Writ of execution',
    'Commitment order',
    'Motion to credit',
    'Release order',
  ]),
  'answer'      => 'Motion to credit',
  'explanation' => 'A motion to credit filed in court secures recognition of pretrial detention credits.',
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

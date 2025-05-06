<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart3Seeder extends Seeder
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
    'part'        => 3,
    'question'    => 'In criminal law, who is primarily liable for the execution of the criminal act?',
    'choices'     => json_encode([
        'Principal by direct participation',
        'Accomplice',
        'Accessory after the fact',
        'Accessory before the fact',
    ]),
    'answer'      => 'Principal by direct participation',
    'explanation' => 'The principal by direct participation actually performs the criminal act and is mainly liable.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which of the following is NOT a form of bail under Philippine law?',
    'choices'     => json_encode([
        'Surety bond',
        'Recognizance',
        'Cash deposit',
        'Deferred adjudication',
    ]),
    'answer'      => 'Deferred adjudication',
    'explanation' => 'Deferred adjudication is not a bail form; bail includes cash deposit, surety, and recognizance.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which action best embodies the right against self-incrimination?',
    'choices'     => json_encode([
        'Refusal to testify against oneself',
        'Volunteering information',
        'Submitting to lineup identification',
        'Signing a search waiver',
    ]),
    'answer'      => 'Refusal to testify against oneself',
    'explanation' => 'The right against self-incrimination allows an accused to refuse to testify or admit guilt.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which mode of extinguishing criminal liability involves executive clemency granted before conviction?',
    'choices'     => json_encode([
        'Pardon',
        'Amnesty',
        'Rehabilitation',
        'Probation',
    ]),
    'answer'      => 'Amnesty',
    'explanation' => 'Amnesty is granted by the legislature or executive to groups for political offenses before conviction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'What is the primary purpose of a preliminary investigation in criminal proceedings?',
    'choices'     => json_encode([
        'To determine probable cause',
        'To punish the accused',
        'To decide on bail amounts',
        'To set trial dates',
    ]),
    'answer'      => 'To determine probable cause',
    'explanation' => 'Preliminary investigation by the prosecutor determines if evidence warrants filing charges.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Under the Rules of Court, who may perform a private person\'s warrantless arrest?',
    'choices'     => json_encode([
        'Any citizen',
        'Police officer',
        'Public prosecutor',
        'Barangay captain',
    ]),
    'answer'      => 'Any citizen',
    'explanation' => 'A private person may arrest without warrant when a crime is committed in their presence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which doctrine renders evidence obtained from an illegal search inadmissible?',
    'choices'     => json_encode([
        'Fruit of the poisonous tree',
        'Best evidence rule',
        'Hearsay exception',
        'Doctrine of laches',
    ]),
    'answer'      => 'Fruit of the poisonous tree',
    'explanation' => 'Evidence from unlawful search is excluded as fruit of the poisonous tree under the exclusionary rule.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which penalty is imposed for crimes resulting from reckless imprudence?',
    'choices'     => json_encode([
        'Afflictive penalty',
        'Correctional penalty',
        'Capital punishment',
        'Ancillary penalty',
    ]),
    'answer'      => 'Correctional penalty',
    'explanation' => 'Crimes by imprudence are penalized with correctional penalties under the RPC.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which part of a police report contains the factual narrative and evidence summary?',
    'choices'     => json_encode([
        'Narrative report',
        'Blotter entry',
        'Charge sheet',
        'Wanted poster',
    ]),
    'answer'      => 'Narrative report',
    'explanation' => 'The narrative report details facts, witness statements, and evidence collected.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which arrest requires no warrant when the offender is caught in the act of committing a crime?',
    'choices'     => json_encode([
        'In flagrante delicto',
        'Hot pursuit',
        'Preventive detention',
        'Citizen\'s arrest',
    ]),
    'answer'      => 'In flagrante delicto',
    'explanation' => 'In flagrante delicto refers to arrest without warrant when the crime is witnessed as it occurs.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which of these is an ancillary penalty under the Revised Penal Code?',
    'choices'     => json_encode([
        'Suspension of rights',
        'Reclusion perpetua',
        'Destierro',
        'Afflictive penalty',
    ]),
    'answer'      => 'Suspension of rights',
    'explanation' => 'Suspension of civil and political rights is an ancillary penalty accompanying certain penalties.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which writ challenges acts of a tribunal acting without jurisdiction or in grave abuse of discretion?',
    'choices'     => json_encode([
        'Habeas corpus',
        'Certiorari',
        'Mandamus',
        'Prohibition',
    ]),
    'answer'      => 'Certiorari',
    'explanation' => 'Certiorari is the proper remedy against acts of tribunals that exceed their jurisdiction or show grave abuse of discretion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which phase follows arraignment in criminal procedure?',
    'choices'     => json_encode([
        'Trial',
        'Pre-trial',
        'Sentencing',
        'Investigation',
    ]),
    'answer'      => 'Pre-trial',
    'explanation' => 'The pre-trial conference occurs after arraignment to simplify issues and discuss plea bargaining.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'What process preserves witness testimony outside of court to prevent memory loss?',
    'choices'     => json_encode([
        'Deposition',
        'Inquest',
        'Arraignment',
        'Hearing',
    ]),
    'answer'      => 'Deposition',
    'explanation' => 'Depositions are sworn statements taken before trial to preserve testimony.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which court promulgates the Rules of Court in the Philippines?',
    'choices'     => json_encode([
        'Supreme Court',
        'Court of Appeals',
        'Regional Trial Court',
        'Sandiganbayan',
    ]),
    'answer'      => 'Supreme Court',
    'explanation' => 'The Supreme Court has the authority to promulgate procedural rules for all courts.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which exception to the hearsay rule allows spontaneous statements made under stress?',
    'choices'     => json_encode([
        'Excited utterance',
        'Dying declaration',
        'Business record',
        'Admission by party-opponent',
    ]),
    'answer'      => 'Excited utterance',
    'explanation' => 'Excited utterances are considered reliable and thus admissible despite being hearsay.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which rule requires production of the original document when its contents are contested?',
    'choices'     => json_encode([
        'Best evidence rule',
        'Parol evidence rule',
        'Hearsay rule',
        'Chain of custody',
    ]),
    'answer'      => 'Best evidence rule',
    'explanation' => 'The best evidence rule mandates the original document be produced to prove its contents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'Which document requests the prosecution to detail facts and charges more precisely?',
    'choices'     => json_encode([
        'Bill of particulars',
        'Bill of exceptions',
        'Demurrer',
        'Motion to dismiss',
    ]),
    'answer'      => 'Bill of particulars',
    'explanation' => 'A bill of particulars demands greater detail on charges to enable proper defense preparation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'What is the prescriptive period for crimes punishable by arresto mayor (light offenses)?',
    'choices'     => json_encode([
        '1 year',
        '2 years',
        '3 years',
        '5 years',
    ]),
    'answer'      => '1 year',
    'explanation' => 'Under the Revised Penal Code, light offenses prescribed in 1 year from the date of commission.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 3,
    'question'    => 'What is the prescriptive period for crimes punishable by reclusion temporal (medium penalties)?',
    'choices'     => json_encode([
        '10 years',
        '15 years',
        '20 years',
        '25 years',
    ]),
    'answer'      => '15 years',
    'explanation' => 'Medium penalties under the RPC prescribe in 15 years from the date of commission.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart1Seeder extends Seeder
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
    'part'        => 1,
    'question'    => 'Under the Revised Penal Code, which of the following is the correct definition of a felony?',
    'choices'     => json_encode([
        'An act or omission punishable by law',
        'A civil wrong causing damage',
        'A breach of contract',
        'An administrative infraction',
    ]),
    'answer'      => 'An act or omission punishable by law',
    'explanation' => 'A felony under the RPC is any act or omission for which the law imposes a penalty.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which element is NOT part of the general definition of a criminal offense?',
    'choices'     => json_encode([
        'Lawful act or omission',
        'Criminal intent (mens rea)',
        'Penalty',
        'Motive',
    ]),
    'answer'      => 'Motive',
    'explanation' => 'Motive is not an essential element; it may influence mitigation but is not required to constitute the offense.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which of the following describes a justifying circumstance under criminal law?',
    'choices'     => json_encode([
        'Imprudence, negligence, or lack of skill',
        'Self-defense',
        'Voluntary confession',
        'Remorse of the offender',
    ]),
    'answer'      => 'Self-defense',
    'explanation' => 'Self-defense fully justifies the act, excluding criminal liability under the RPC.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'In criminal procedure, the inquest proceedings are conducted by which official?',
    'choices'     => json_encode([
        'Judge of the Regional Trial Court',
        'Municipal or city prosecutor',
        'Officer in charge of the barangay',
        'Public Attorney\'s Office',
    ]),
    'answer'      => 'Municipal or city prosecutor',
    'explanation' => 'Inquest proceedings are preliminary investigations by the prosecutor before formal charges are filed.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which remedy corrects an error apparent on the face of the record after conviction?',
    'choices'     => json_encode([
        'Motion for new trial',
        'Petition for certiorari',
        'Bill of Exceptions',
        'Pardon',
    ]),
    'answer'      => 'Bill of Exceptions',
    'explanation' => 'A bill of exceptions raises errors during trial that do not require further evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which presumption in evidence law places the burden on the accused to prove personal or factual circumstances?',
    'choices'     => json_encode([
        'Presumption of regularity of official duties',
        'Presumption of innocence',
        'Presumption of malice',
        'Presumption of sanity',
    ]),
    'answer'      => 'Presumption of malice',
    'explanation' => 'Certain circumstances rebut the presumption of innocence by presuming malice, requiring proof otherwise.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which of the following is NOT a stage in the commission of a crime?',
    'choices'     => json_encode([
        'Conspiracy',
        'Attempt',
        'Consumption',
        'Preparation',
    ]),
    'answer'      => 'Consumption',
    'explanation' => 'The stages include conspiracy, preparation, and execution (attempt and consummation), not consumption.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Under the Revised Penal Code, which circumstance exempts a person from criminal liability?',
    'choices'     => json_encode([
        'Excessive voluntary intoxication',
        'Emotional disturbance',
        'Accident',
        'Sudden passion or obfuscation',
    ]),
    'answer'      => 'Accident',
    'explanation' => 'Accident is an exempting circumstance where the act is not deliberate or voluntary.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'What constitutional safeguard protects individuals from unreasonable searches and seizures?',
    'choices'     => json_encode([
        'Right to remain silent',
        'Right to counsel',
        'Fourth Amendment equivalent',
        'Privilege against self-incrimination',
    ]),
    'answer'      => 'Fourth Amendment equivalent',
    'explanation' => 'The Philippine Constitution protects against unreasonable searches and seizures through warrant and probable cause requirements.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which type of evidence consists of written or printed documents?',
    'choices'     => json_encode([
        'Real evidence',
        'Testimonial evidence',
        'Documentary evidence',
        'Circumstantial evidence',
    ]),
    'answer'      => 'Documentary evidence',
    'explanation' => 'Documentary evidence refers to documents presented for proof in court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which prescribes the detailed steps from arraignment to judgment in criminal cases?',
    'choices'     => json_encode([
        'Revised Penal Code',
        'Rules of Court',
        'Evidence Code',
        'Local Government Code',
    ]),
    'answer'      => 'Rules of Court',
    'explanation' => 'The Rules of Court govern procedure, including arraignment, trial, and appeals.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which doctrine bars reprosecution after a final judgment?',
    'choices'     => json_encode([
        'Collateral estoppel',
        'Double jeopardy',
        'Res judicata',
        'Habeas corpus',
    ]),
    'answer'      => 'Believe jeopardy',
    'explanation' => 'Double jeopardy prevents a person from being tried twice for the same offense once final judgment is rendered.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which writ is used to challenge unlawful detention?',
    'choices'     => json_encode([
        'Writ of certiorari',
        'Writ of habeas corpus',
        'Writ of mandamus',
        'Writ of amparo',
    ]),
    'answer'      => 'Writ of habeas corpus',
    'explanation' => 'Habeas corpus safeguards personal liberty by challenging unlawful restraint or detention.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which of the following compels the production of documents or objects for inspection?',
    'choices'     => json_encode([
        'Subpoena ad testificandum',
        'Subpoena duces tecum',
        'Witness summons',
        'Search warrant',
    ]),
    'answer'      => 'Subpoena duces tecum',
    'explanation' => 'A subpoena duces tecum orders a person to produce designated documents or things for court inspection.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which offense involves making false statements under oath in court proceedings?',
    'choices'     => json_encode([
        'Perjury',
        'Subornation of perjury',
        'False testimony',
        'Contempt of court',
    ]),
    'answer'      => 'Perjury',
    'explanation' => 'Perjury is the act of knowingly making false statements under oath in judicial proceedings.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'What procedural document formally charges a person with a crime, initiating prosecution?',
    'choices'     => json_encode([
        'Complaint',
        'Subpoena',
        'Information',
        'Arrest warrant',
    ]),
    'answer'      => 'Information',
    'explanation' => 'An information is the written accusation filed by the prosecutor to formally charge a person with a crime.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Who bears the burden of proving guilt beyond reasonable doubt in a criminal proceeding?',
    'choices'     => json_encode([
        'Prosecution',
        'Defense',
        'Judge',
        'Accused',
    ]),
    'answer'      => 'Prosecution',
    'explanation' => 'The prosecution must prove the accused’s guilt beyond reasonable doubt under the presumption of innocence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which rule requires that tangible evidence be preserved and accounted for from collection to presentation in court?',
    'choices'     => json_encode([
        'Best evidence rule',
        'Hearsay rule',
        'Chain of custody',
        'Parol evidence rule',
    ]),
    'answer'      => 'Chain of custody',
    'explanation' => 'The chain of custody ensures evidence integrity by tracking it from collection through trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'Which special civil action corrects acts of a tribunal acting without jurisdiction or in grave abuse of discretion?',
    'choices'     => json_encode([
        'Habeas corpus',
        'Certiorari',
        'Mandamus',
        'Prohibition',
    ]),
    'answer'      => 'Certiorari',
    'explanation' => 'A petition for certiorari challenges actions of tribunals or public officers in excess of jurisdiction or grave abuse of discretion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 1,
    'question'    => 'What is the maximum period for the prosecution to file an information after an inquest proceeding?',
    'choices'     => json_encode([
        '30 days',
        '60 days',
        '90 days',
        '120 days',
    ]),
    'answer'      => '60 days',
    'explanation' => 'Under the Rules of Court, the prosecutor must decide and file an information within 60 days after an inquest.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

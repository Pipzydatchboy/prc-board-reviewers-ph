<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart2Seeder extends Seeder
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
    'part'        => 2,
    'question'    => 'Which stage of crime does the act of planning take place?',
    'choices'     => json_encode([
        'Conspiracy',
        'Preparation',
        'Attempt',
        'Consummation',
    ]),
    'answer'      => 'Preparation',
    'explanation' => 'Preparation is the second stage after conspiracy where equipment or means are readied.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which violation is punished under special penal laws and not the Revised Penal Code?',
    'choices'     => json_encode([
        'Carnapping',
        'Murder',
        'Larceny',
        'Frustrated homicide',
    ]),
    'answer'      => 'Carnapping',
    'explanation' => 'Carnapping is defined and penalized by Republic Act 6539, a special law.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'What is the effect of an acquittal without express declaration of innocence?',
    'choices'     => json_encode([
        'Double jeopardy applies',
        'Acquittal is void',
        'New trial is allowed',
        'Prosecution continues',
    ]),
    'answer'      => 'Double jeopardy applies',
    'explanation' => 'Once acquitted, the accused cannot be tried again for the same offense.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which principle allows turning a civil action into a criminal prosecution?',
    'choices'     => json_encode([
        'Locus standi',
        'Action accrual',
        'Civil action pending criminal',
        'Insolvency of offender',
    ]),
    'answer'      => 'Civil action pending criminal',
    'explanation' => 'Civil liabilities may be enforced after criminal prosecution concludes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which document initiates trial in the Regional Trial Court?',
    'choices'     => json_encode([
        'Information',
        'Complaint',
        'Citation',
        'Summons',
    ]),
    'answer'      => 'Information',
    'explanation' => 'An information filed by the prosecutor initiates criminal action in RTC.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'What is required for a valid search warrant?',
    'choices'     => json_encode([
        'Verbal consent',
        'Judicial approval with probable cause',
        'Police discretion',
        'Victim’s request',
    ]),
    'answer'      => 'Judicial approval with probable cause',
    'explanation' => 'Search warrants must be issued by a judge upon sworn application showing probable cause.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which remedy challenges the validity of a law not yet applied?',
    'choices'     => json_encode([
        'Certiorari',
        'Prohibition',
        'Injunction',
        'Habeas data',
    ]),
    'answer'      => 'Injunction',
    'explanation' => 'An injunction may restrain unlawful application of statutes, though rare in criminal law.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which concept states that laws do not operate retroactively unless beneficial to the accused?',
    'choices'     => json_encode([
        'Lex commissa',
        'Lex mitior',
        'Lex specialis',
        'Lex talionis',
    ]),
    'answer'      => 'Lex mitior',
    'explanation' => 'The more lenient law (lex mitior) applies when laws change after commission.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which excuse involves acting under unreasonable belief of facts?',
    'choices'     => json_encode([
        'Mistake of law',
        'Mistake of fact',
        'Insanity',
        'Duress',
    ]),
    'answer'      => 'Mistake of fact',
    'explanation' => 'Mistake of fact may negate criminal intent if honest and reasonable.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which is a circumstance that mitigates but does not remove liability?',
    'choices'     => json_encode([
        'Recidivism',
        'Voluntary surrender',
        'Justifying circumstance',
        'Exempting circumstance',
    ]),
    'answer'      => 'Voluntary surrender',
    'explanation' => 'Voluntary surrender mitigates penalty under the Rules of Court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'What is the period within which appeal must be perfected in criminal cases in Supreme Court?',
    'choices'     => json_encode([
        '10 days',
        '15 days',
        '30 days',
        '60 days',
    ]),
    'answer'      => '15 days',
    'explanation' => 'Under the Rules of Court, appeals to the SC in criminal cases must be perfected within 15 days.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which evidence is based on inference rather than direct observation?',
    'choices'     => json_encode([
        'Direct evidence',
        'Circumstantial evidence',
        'Documentary evidence',
        'Real evidence',
    ]),
    'answer'      => 'Circumstantial evidence',
    'explanation' => 'Circumstantial evidence requires inference to connect it to a fact in issue.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Who has the authority to quash an information for insufficiency of evidence?',
    'choices'     => json_encode([
        'Judge of first instance',
        'Prosecutor',
        'Court of Appeals',
        'Supreme Court',
    ]),
    'answer'      => 'Judge of first instance',
    'explanation' => 'The trial court may dismiss or quash an information if evidence is insufficient.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which error involves misjoinder of causes of action in one complaint?',
    'choices'     => json_encode([
        'Bill of exceptions',
        'Demurrer to evidence',
        'Bill of particulars',
        'Demurrer to information',
    ]),
    'answer'      => 'Demurrer to information',
    'explanation' => 'A demurrer to information challenges the legal sufficiency of the charges.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which rule governs the impeachment of testimony to affect credibility?',
    'choices'     => json_encode([
        'Rehabilitation rule',
        'Impeachment rule',
        'Hearsay rule',
        'Best evidence rule',
    ]),
    'answer'      => 'Impeachment rule',
    'explanation' => 'The impeachment rule allows attacking witness credibility by prior inconsistent statements.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'What writ protects against violations of the right to information in government records?',
    'choices'     => json_encode([
        'Habeas data',
        'Habeas corpus',
        'Certiorari',
        'Prohibition',
    ]),
    'answer'      => 'Habeas data',
    'explanation' => 'Habeas data allows access to and correction of personal data held by the state.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which plea admits commission of existence of facts but denies criminal liability?',
    'choices'     => json_encode([
        'Guilty plea',
        'Plea of confession and avoidance',
        'Alford plea',
        'Not guilty plea',
    ]),
    'answer'      => 'Plea of confession and avoidance',
    'explanation' => 'A plea of confession and avoidance admits facts but justifies or excuses the act.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which proceeding determines fitness for trial due to mental condition?',
    'choices'     => json_encode([
        'Inquest proceedings',
        'Preliminary examination',
        'Competency hearing',
        'Rehabilitation hearing',
    ]),
    'answer'      => 'Competency hearing',
    'explanation' => 'A competency hearing assesses mental capacity to stand trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'Which power allows the court to impose bail or recognizance conditions?',
    'choices'     => json_encode([
        'Admiralty power',
        'Police power',
        'Equitable power',
        'Judicial power',
    ]),
    'answer'      => 'Judicial power',
    'explanation' => 'The Judiciary’s power includes setting conditions of bail under the Constitution.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 2,
    'question'    => 'What is the legal effect of a plea of double jeopardy?',
    'choices'     => json_encode([
        'Admits guilt',
        'Dismisses complaint',
        'Transfers venue',
        'Motions for bail',
    ]),
    'answer'      => 'Dismisses complaint',
    'explanation' => 'Pleading double jeopardy results in dismissal of further prosecution for the same offense.',
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

<?php

namespace Database\Seeders\CLE\CriminalJurisprudenceAndProcedure;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalJurisprudenceandProcedurePart8Seeder extends Seeder
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
    'part'        => 8,
    'question'    => 'Which document is issued by a judge to secure the presence of a witness at trial?',
    'choices'     => json_encode([
        'Subpoena ad testificandum',
        'Subpoena duces tecum',
        'Summons',
        'Writ of amparo',
    ]),
    'answer'      => 'Subpoena ad testificandum',
    'explanation' => 'A subpoena ad testificandum compels a witness to testify at trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which remedy addresses refusal to admit privileged communications in court?',
    'choices'     => json_encode([
        'Certiorari',
        'Habeas data',
        'Prohibition',
        'Mandamus',
    ]),
    'answer'      => 'Mandamus',
    'explanation' => 'Mandamus compels performance of ministerial duties, including admitting privileged evidence when required by law.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'What is the maximum penalty for refusal to testify before a commission on human rights?',
    'choices'     => json_encode([
        'Imprisonment for 2 years',
        'Afflictive penalty',
        'Arresto mayor',
        'Suspension of rights',
    ]),
    'answer'      => 'Imprisonment for 2 years',
    'explanation' => 'Refusal to testify before the CHR is punishable by imprisonment of 1 month to 6 months under its charter, but serious contempt can reach 2 years.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which action is an example of indirect contempt in a criminal trial?',
    'choices'     => json_encode([
        'Disrupting court proceedings',
        'Disobeying a subpoena',
        'Assaulting a witness outside court',
        'Publishing prejudicial articles',
    ]),
    'answer'      => 'Publishing prejudicial articles',
    'explanation' => 'Indirect contempt includes acts outside court that obstruct justice, such as prejudicial publications.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which concept prohibits officers from detaining persons without prompt judicial determination?',
    'choices'     => json_encode([
        'Role of writ of amparo',
        'Habeas corpus rule',
        'Prohibition rule',
        'Double jeopardy',
    ]),
    'answer'      => 'Habeas corpus rule',
    'explanation' => 'The habeas corpus rule requires detained persons be brought before a judge to determine legality of detention.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which penalty accessory extinguishes civil liability arising from a crime?',
    'choices'     => json_encode([
        'Destierro',
        'Restitution order',
        'Civil indemnity',
        'Annulment of marriage',
    ]),
    'answer'      => 'Civil indemnity',
    'explanation' => 'Civil indemnity compensates damages, extinguishing civil liability after criminal conviction.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'What is the purpose of a bill of particulars in criminal cases?',
    'choices'     => json_encode([
        'To obtain more precise factual details',
        'To contest venue',
        'To dismiss the information',
        'To quash evidence',
    ]),
    'answer'      => 'To obtain more precise factual details',
    'explanation' => 'A bill of particulars requests detailed factual allegations for better preparation of defense.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which court reviews petitions for certiorari in criminal cases?',
    'choices'     => json_encode([
        'Court of Appeals',
        'Regional Trial Court',
        'Sandiganbayan',
        'Supreme Court',
    ]),
    'answer'      => 'Supreme Court',
    'explanation' => 'The Supreme Court has original and appellate jurisdiction over petitions for certiorari in criminal matters.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which principle bars application of laws with retroactive, harsher penalties?',
    'choices'     => json_encode([
        'Nullum crimen nulla poena sine lege',
        'Lex mitior',
        'No ex post facto',
        'Double jeopardy',
    ]),
    'answer'      => 'No ex post facto',
    'explanation' => 'The ex post facto clause forbids retroactive application of laws imposing harsher penalties.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'What action may the court take when evidence is not preserved under the chain of custody?',
    'choices'     => json_encode([
        'Exclude the evidence',
        'Permit hearsay',
        'Allow summary',
        'Grant mistrial',
    ]),
    'answer'      => 'Exclude the evidence',
    'explanation' => 'Failure to maintain chain of custody can render evidence inadmissible in court.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which defense is characterized by the absence of criminal intent due to mistake of law?',
    'choices'     => json_encode([
        'Ignorantia legis neminem excusat',
        'Mistake of fact',
        'Insanity defense',
        'Duress',
    ]),
    'answer'      => 'Ignorantia legis neminem excusat',
    'explanation' => 'Mistake of law generally does not excuse liability; ignorance of law is no defense.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which writ is available to enforce the right to information access under the Constitution?',
    'choices'     => json_encode([
        'Habeas data',
        'Habeas corpus',
        'Certiorari',
        'Prohibition',
    ]),
    'answer'      => 'Habeas data',
    'explanation' => 'Habeas data ensures access and correction of personal data held by the state.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which plea reserves certain defenses while admitting other facts of the offense?',
    'choices'     => json_encode([
        'Alford plea',
        'Guilty plea',
        'Plea of confession and avoidance',
        'Plea of no contest',
    ]),
    'answer'      => 'Plea of confession and avoidance',
    'explanation' => 'This plea admits the facts but asserts justifications or excuses to mitigate liability.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which hearing determines whether an accused is mentally fit to stand trial?',
    'choices'     => json_encode([
        'Competency hearing',
        'Suppression hearing',
        'Pre-trial conference',
        'Arraignment',
    ]),
    'answer'      => 'Competency hearing',
    'explanation' => 'A competency hearing assesses the accused’s mental capacity to participate in trial.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which principle ensures that criminal trials are conducted without undue delay?',
    'choices'     => json_encode([
        'Speedy trial right',
        'Double jeopardy',
        'Open court',
        'Due process',
    ]),
    'answer'      => 'Speedy trial right',
    'explanation' => 'The right to a speedy trial prevents oppressive pretrial incarceration and public suspicion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which remedy is appropriate for illegal administrative suspension of a prison official affecting inmates’ rights?',
    'choices'     => json_encode([
        'Certiorari',
        'Mandamus',
        'Habeas corpus',
        'Prohibition',
    ]),
    'answer'      => 'Certiorari',
    'explanation' => 'Certiorari can correct grave abuse by administrative bodies affecting judicial processes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which provision governs the use of electronic documents as evidence?',
    'choices'     => json_encode([
        'Electronic Commerce Act',
        'Rules of Court',
        'Evidence Code',
        'Data Privacy Act',
    ]),
    'answer'      => 'Electronic Commerce Act',
    'explanation' => 'The E-Commerce Act provides for the admissibility of electronic documents in evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which action vacates a judgment upon discovery of fraud or collusion?',
    'choices'     => json_encode([
        'Petition for relief from judgment',
        'Motion for new trial',
        'Certiorari',
        'Bill of exceptions',
    ]),
    'answer'      => 'Motion for new trial',
    'explanation' => 'A motion for new trial may be granted for fraud, accident, mistake, or excusable negligence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which remedy provides civil action for damages due to wrongful conviction?',
    'choices'     => json_encode([
        'Civil indemnity',
        'Petition for certiorari',
        'Damages suit',
        'Bill of particulars',
    ]),
    'answer'      => 'Civil indemnity',
    'explanation' => 'Civil indemnity allows recovery of damages for wrongful conviction or imprisonment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 21,
    'part'        => 8,
    'question'    => 'Which type of evidence is considered conclusive and not subject to rebuttal?',
    'choices'     => json_encode([
        'Official records',
        'Expert testimony',
        'Testimonial evidence',
        'Circumstantial evidence',
    ]),
    'answer'      => 'Official records',
    'explanation' => 'Official records are self-authenticating and conclusive if properly kept and proved.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

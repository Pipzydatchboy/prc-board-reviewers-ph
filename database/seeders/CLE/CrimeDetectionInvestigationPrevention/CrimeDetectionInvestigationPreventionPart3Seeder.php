<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart3Seeder extends Seeder
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
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which interview model emphasizes planning, engage and explain, account, closure, and evaluation?',
    'choices'     => json_encode([
        'PEACE model',
        'Reid technique',
        'Kinesic interview',
        'Cognitive interview',
    ]),
    'answer'      => 'PEACE model',
    'explanation' => 'The PEACE model structures interviews into phases: Planning, Engage & Explain, Account, Closure, Evaluation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Under Philippine law, which requirement makes a confession inadmissible in court?',
    'choices'     => json_encode([
        'Obtained through threat or promise',
        'Made in open court',
        'Given in writing',
        'Volunteered without questioning',
    ]),
    'answer'      => 'Obtained through threat or promise',
    'explanation' => 'Confessions coerced by threats or promises are inadmissible under the Constitution\'s self-incrimination clause.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which element must exist for a statement to qualify as a dying declaration?',
    'choices'     => json_encode([
        'Belief of imminent death',
        'Formal oath administered',
        'Presence of counsel',
        'Recorded by law enforcement',
    ]),
    'answer'      => 'Belief of imminent death',
    'explanation' => 'The declarant must believe death is imminent, and the statement must relate to its cause or circumstances.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which interrogation approach involves accusing the suspect of the crime at the outset and seeking confession?',
    'choices'     => json_encode([
        'Reid technique',
        'PEACE model',
        'Cognitive interview',
        'Information-gathering approach',
    ]),
    'answer'      => 'Reid technique',
    'explanation' => 'The Reid technique is accusatory, aiming to elicit confession through confrontation and psychological tactics.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which principle prohibits the use of leading questions during witness interviews?',
    'choices'     => json_encode([
        'Non-contamination principle',
        'Right against self-incrimination',
        'Search warrant requirement',
        'Promptness principle',
    ]),
    'answer'      => 'Non-contamination principle',
    'explanation' => 'Avoiding leading questions prevents influencing witness recollection and maintains evidence integrity.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which law defines the crime of theft and its elements in the Philippines?',
    'choices'     => json_encode([
        'Revised Penal Code, Article 310',
        'RA 8353',
        'RA 9165',
        'Anti-Violence Against Women Act',
    ]),
    'answer'      => 'Revised Penal Code, Article 310',
    'explanation' => 'RPC Article 310 outlines theft as the taking of personal property with intent to gain.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which interview technique builds rapport by mirroring body language and tone?',
    'choices'     => json_encode([
        'Active listening',
        'Confrontational questioning',
        'Rapid-fire interrogation',
        'Polygraph-style approach',
    ]),
    'answer'      => 'Active listening',
    'explanation' => 'Active listening involves empathy and mirroring to establish trust and elicit information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'What differentiates robbery from theft under Philippine law?',
    'choices'     => json_encode([
        'Use of violence or intimidation',
        'Higher monetary value',
        'Use of firearm only',
        'Involving government employees',
    ]),
    'answer'      => 'Use of violence or intimidation',
    'explanation' => 'Robbery (RPC Article 293) adds force or intimidation to the elements of theft.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which interview document records the exact words of a suspect\'s statement under oath?',
    'choices'     => json_encode([
        'Affidavit',
        'Incident report',
        'Blotter entry',
        'Charge sheet',
    ]),
    'answer'      => 'Affidavit',
    'explanation' => 'Affidavits are sworn statements transcribed verbatim for evidentiary use.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Under RA 9208, what constitutes the recrui­tment element of human trafficking?',
    'choices'     => json_encode([
        'Recruitment through coercion, abduction, fraud',
        'Possession of illegal drugs',
        'Unauthorized entry at airport',
        'Non-payment of wages',
    ]),
    'answer'      => 'Recruitment through coercion, abduction, fraud',
    'explanation' => 'RA 9208 defines trafficking to include unlawful recruitment by coercion, abduction, or fraud.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which method is essential to interview a minor victim of sexual exploitation?',
    'choices'     => json_encode([
        'Child-friendly interview room',
        'Standard interrogation room',
        'Public lobby',
        'Police station cell',
    ]),
    'answer'      => 'Child-friendly interview room',
    'explanation' => 'RA 7610 mandates a child-friendly environment to minimize trauma during interviews.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which offense involves prejudice in handling economic fraud like estafa?',
    'choices'     => json_encode([
        'Estafa',
        'Robbery',
        'Homicide',
        'Illegal detention',
    ]),
    'answer'      => 'Estafa',
    'explanation' => 'Estafa (RPC Article 315) involves lasciviousness and fraudulent schemes causing damage to another.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which legal concept allows the admission of spontaneous statements made during the commission of a crime?',
    'choices'     => json_encode([
        'Res gestae',
        'Exclusionary rule',
        'Hearsay rule',
        'Fruit of the poisonous tree',
    ]),
    'answer'      => 'Res gestae',
    'explanation' => 'Res gestae admits spontaneous utterances closely related to an event as exceptions to hearsay.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which RA governs anti-money laundering procedures in criminal investigations?',
    'choices'     => json_encode([
        'RA 9160',
        'RA 9165',
        'RA 10175',
        'RA 7610',
    ]),
    'answer'      => 'RA 9160',
    'explanation' => 'RA 9160, the Anti-Money Laundering Act, prescribes reporting and investigation of illicit funds.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which interview principle requires the establishment of trust and empathy with the interviewee?',
    'choices'     => json_encode([
        'Building rapport',
        'Direct confrontation',
        'Rapid questioning',
        'Use of threats',
    ]),
    'answer'      => 'Building rapport',
    'explanation' => 'Building rapport encourages cooperation and truthful disclosure during interviews.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which approach during interrogation avoids violating the right against self-incrimination?',
    'choices'     => json_encode([
        'Informing suspect of rights',
        'Physical coercion',
        'Deprivation of food',
        'Threat of harm',
    ]),
    'answer'      => 'Informing suspect of rights',
    'explanation' => 'Advising suspects of their constitutional rights protects against coerced confessions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which directive requires investigators to keep detailed records of all interviews and interrogations?',
    'choices'     => json_encode([
        'Internal rules of the PNP',
        'Anti-Wiretapping Law',
        'Data Privacy Act',
        'Budget Circular',
    ]),
    'answer'      => 'Internal rules of the PNP',
    'explanation' => 'PNP Internal Rules mandate documentation of interview dates, persons present, and summaries.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which type of evidence is strengthened by consistent statements across multiple interviews?',
    'choices'     => json_encode([
        'Corroborative evidence',
        'Direct evidence',
        'Circumstantial evidence',
        'Hearsay evidence',
    ]),
    'answer'      => 'Corroborative evidence',
    'explanation' => 'Consistent accounts from different sources support the reliability of evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which practice ensures that interview notes remain unaltered and authentic?',
    'choices'     => json_encode([
        'Initialing and dating entries',
        'Erasing errors',
        'Altering text for brevity',
        'Allowing multiple versions',
    ]),
    'answer'      => 'Initialing and dating entries',
    'explanation' => 'Initialing and dating secures the integrity and chronology of official records.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 3,
    'question'    => 'Which legal provision protects the identity of confidential informants?',
    'choices'     => json_encode([
        'Witness Protection Act',
        'Anti-Wiretapping Law',
        'Data Privacy Act',
        'Anti-Terrorism Act',
    ]),
    'answer'      => 'Witness Protection Act',
    'explanation' => 'RA 6981 safeguards witnesses and informants from threats and disclosure.',
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

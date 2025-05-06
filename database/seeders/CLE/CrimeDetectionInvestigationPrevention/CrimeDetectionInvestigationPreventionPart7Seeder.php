<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart7Seeder extends Seeder
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
    'part'        => 7,
    'question'    => 'Which document initiates a police investigation and records the initial facts as reported by the complainant?',
    'choices'     => json_encode([
        'Complaint sheet',
        'Spot report',
        'Final report',
        'Progress report',
    ]),
    'answer'      => 'Complaint sheet',
    'explanation' => 'The complaint sheet is the formal record of a filed complaint, used to start an investigation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'What type of police report provides a chronological account of events from the start of an incident to its resolution?',
    'choices'     => json_encode([
        'Progress report',
        'Spot report',
        'Affidavit',
        'Complaint sheet',
    ]),
    'answer'      => 'Progress report',
    'explanation' => 'A progress report updates superiors on ongoing investigation status and developments.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which section of a police blotter entry typically contains details of the complainant’s narrative?',
    'choices'     => json_encode([
        'Narrative section',
        'Header section',
        'Disposition section',
        'Reference section',
    ]),
    'answer'      => 'Narrative section',
    'explanation' => 'The narrative section captures the descriptive account of the incident as told by the complainant.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'What is the purpose of a spot report in police operations?',
    'choices'     => json_encode([
        'To convey urgent, initial observations from a crime scene',
        'To record administrative orders',
        'To summarize completed investigations',
        'To file charges in court',
    ]),
    'answer'      => 'To convey urgent, initial observations from a crime scene',
    'explanation' => 'Spot reports are immediate, concise communications detailing critical first observations.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which technical writing principle emphasizes clarity and brevity in official forms?',
    'choices'     => json_encode([
        'Conciseness',
        'Redundancy',
        'Complexity',
        'Ambiguity',
    ]),
    'answer'      => 'Conciseness',
    'explanation' => 'Conciseness ensures that writing is clear and to the point, avoiding unnecessary words.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which form is used to document the transfer of custody of evidence from the scene to the evidence room?',
    'choices'     => json_encode([
        'Evidence custody transfer form',
        'Blotter entry',
        'Spot report',
        'Complaint sheet',
    ]),
    'answer'      => 'Evidence custody transfer form',
    'explanation' => 'This form records each handover to maintain the chain of custody for evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'What is the main characteristic of an executive summary in a final investigative report?',
    'choices'     => json_encode([
        'Summarizes key findings and recommendations',
        'Lists all witness names in detail',
        'Includes raw data logs',
        'Describes methodology step-by-step',
    ]),
    'answer'      => 'Summarizes key findings and recommendations',
    'explanation' => 'An executive summary provides a high-level overview for decision-makers without details.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which element ensures uniformity across various police forms and reports?',
    'choices'     => json_encode([
        'Standardized templates',
        'Personalized formats',
        'Ad hoc layouts',
        'Narrative styles',
    ]),
    'answer'      => 'Standardized templates',
    'explanation' => 'Using standardized templates ensures consistency and completeness of information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which part of a final report documents the legal basis for charges filed?',
    'choices'     => json_encode([
        'Legal attachment',
        'Narrative section',
        'Scene description',
        'Appendix',
    ]),
    'answer'      => 'Legal attachment',
    'explanation' => 'Legal attachment cites statutes, case laws, and jurisdictional elements for filing charges.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which report type is prepared after the conclusion of an investigation, detailing all actions taken?',
    'choices'     => json_encode([
        'Final report',
        'Spot report',
        'Complaint sheet',
        'Progress report',
    ]),
    'answer'      => 'Final report',
    'explanation' => 'The final report summarizes the full course, findings, and recommendations at case completion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which guideline dictates the use of active voice in police report writing?',
    'choices'     => json_encode([
        'Agency writing manual',
        'Criminal Procedure Code',
        'Evidence Code',
        'Traffic Code',
    ]),
    'answer'      => 'Agency writing manual',
    'explanation' => 'The agency writing manual prescribes active voice for clarity and directness in reports.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'What section of the police blotter records the officer’s actions and disposition of the complaint?',
    'choices'     => json_encode([
        'Action taken and disposition',
        'Complainant details',
        'Time and date',
        'Incident type',
    ]),
    'answer'      => 'Action taken and disposition',
    'explanation' => 'This section details how the complaint was addressed and its outcome.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which writing element ensures that reports can be easily searched and indexed?',
    'choices'     => json_encode([
        'Keywords and headings',
        'Watermarks',
        'Embedded videos',
        'Footnotes',
    ]),
    'answer'      => 'Keywords and headings',
    'explanation' => 'Using keywords and headings improves navigation and retrieval of report information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which part of a spot report includes GPS coordinates or landmarks of the scene?',
    'choices'     => json_encode([
        'Location details',
        'Witness statements',
        'Narrative',
        'Recommendations',
    ]),
    'answer'      => 'Location details',
    'explanation' => 'Location details provide the exact position of the scene for responders and records.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which administrative issuance details proper procedures for filing police reports?',
    'choices'     => json_encode([
        'Standard operating procedure (SOP)',
        'Board resolution',
        'Executive order',
        'Memorandum of agreement',
    ]),
    'answer'      => 'Standard operating procedure (SOP)',
    'explanation' => 'SOPs specify step-by-step processes for preparing and submitting reports.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'What is the standard file format for submitting digital police reports to the records unit?',
    'choices'     => json_encode([
        'PDF',
        'DOCX',
        'TXT',
        'JPEG',
    ]),
    'answer'      => 'PDF',
    'explanation' => 'PDF format preserves layout and prevents unauthorized edits to official documents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which quality control measure ensures accuracy of entries in police forms?',
    'choices'     => json_encode([
        'Review and verification by supervisor',
        'Automatic spellcheck',
        'Use of shorthand',
        'Color coding',
    ]),
    'answer'      => 'Review and verification by supervisor',
    'explanation' => 'Supervisor review verifies factual accuracy and completeness before filing.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'What element distinguishes a blotter entry from an investigative report?',
    'choices'     => json_encode([
        'Blotter is a daily log; investigative report is detailed analysis',
        'Blotter is confidential; report is public',
        'Blotter is written by supervisor; report by patrolman',
        'Blotter includes forensic data; report does not',
    ]),
    'answer'      => 'Blotter is a daily log; investigative report is detailed analysis',
    'explanation' => 'Blotters chronologically record daily incidents; reports analyze and conclude investigations.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'Which practice ensures confidentiality of sensitive information in police reports?',
    'choices'     => json_encode([
        'Redacting personal identifiers',
        'Publishing online directly',
        'Distributing to all units indiscriminately',
        'Leaving annotations in margins',
    ]),
    'answer'      => 'Redacting personal identifiers',
    'explanation' => 'Redaction removes private data to protect privacy and comply with data policies.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 7,
    'question'    => 'What is the recommended font size and style for official police reports?',
    'choices'     => json_encode([
        '12-point Arial',
        '10-point Times New Roman',
        '14-point Courier',
        '11-point Comic Sans',
    ]),
    'answer'      => '12-point Arial',
    'explanation' => '12-point Arial is clear and uniform, meeting readability standards in official documents.',
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

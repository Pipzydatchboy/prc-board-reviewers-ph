<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart9Seeder extends Seeder
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
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which paradigm focuses on how economic and social inequalities lead to crime?',
  'choices'     => json_encode([
    'Conflict theory',
    'Strain theory',
    'Social learning theory',
    'Routine activity theory',
  ]),
  'answer'      => 'Conflict theory',
  'explanation' => 'Conflict theory views crime as resulting from power struggles and inequalities in society.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is crime displacement?',
  'choices'     => json_encode([
    'Shift of crime to new locations',
    'Increase in overall crime',
    'Reduction of one crime type',
    'Stickiness of crime hotspots',
  ]),
  'answer'      => 'Shift of crime to new locations',
  'explanation' => 'Crime displacement occurs when crime is moved to different areas due to prevention efforts.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which approach aims to reduce opportunities for crime by modifying environments and behaviors?',
  'choices'     => json_encode([
    'Situational crime prevention',
    'Restorative justice',
    'Rehabilitative model',
    'Punitive model',
  ]),
  'answer'      => 'Situational crime prevention',
  'explanation' => 'Situational crime prevention focuses on reducing crime opportunities through practical measures.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What does CPTED stand for in crime prevention?',
  'choices'     => json_encode([
    'Crime Prevention Through Environmental Design',
    'Community Policing Through Efficient Deployment',
    'Corrections Planning and Training for Effective Deterrence',
    'Criminal Procedure and Trial Evidence Doctrine',
  ]),
  'answer'      => 'Crime Prevention Through Environmental Design',
  'explanation' => 'CPTED uses design and management of environments to reduce crime and fear of crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which element of CPTED emphasizes natural observation of public spaces?',
  'choices'     => json_encode([
    'Natural surveillance',
    'Access control',
    'Territorial reinforcement',
    'Maintenance',
  ]),
  'answer'      => 'Natural surveillance',
  'explanation' => 'Natural surveillance designs spaces to maximize visibility and deter offenders.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which UN instrument sets minimum standards for the treatment of prisoners?',
  'choices'     => json_encode([
    'Nelson Mandela Rules',
    'Tokyo Rules',
    'Bangkok Rules',
    'Riyadh Guidelines',
  ]),
  'answer'      => 'Nelson Mandela Rules',
  'explanation' => 'The Mandela Rules provide guidelines on humane treatment and conditions for prisoners.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which UN rules address the rights of women prisoners and detainees?',
  'choices'     => json_encode([
    'Bangkok Rules',
    'Tokyo Rules',
    'Nelson Mandela Rules',
    'Beijing Declaration',
  ]),
  'answer'      => 'Bangkok Rules',
  'explanation' => 'The Bangkok Rules focus on gender‑specific needs of women in prison and beyond.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is spatial displacement?',
  'choices'     => json_encode([
    'Crime shifts location',
    'Crime shifts time',
    'Crime shifts type',
    'Crime shifts target',
  ]),
  'answer'      => 'Crime shifts location',
  'explanation' => 'Spatial displacement occurs when crime moves to different physical areas.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is temporal displacement?',
  'choices'     => json_encode([
    'Crime occurs at different times',
    'Crime occurs in different places',
    'Crime targets different victims',
    'Crime uses different methods',
  ]),
  'answer'      => 'Crime occurs at different times',
  'explanation' => 'Temporal displacement is when offenders change the timing of criminal acts.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which law governs cybercrime in the Philippines?',
  'choices'     => json_encode([
    'RA 10175 Cybercrime Prevention Act',
    'RA 9165 Dangerous Drugs Act',
    'RA 9344 Juvenile Justice Act',
    'RA 9262 Anti-Violence Against Women Act',
  ]),
  'answer'      => 'RA 10175 Cybercrime Prevention Act',
  'explanation' => 'RA 10175 defines and penalizes computer-related offenses and cybercrimes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is phishing?',
  'choices'     => json_encode([
    'Fraudulent emails to steal information',
    'Unauthorized system access',
    'Malicious software installation',
    'High-frequency trading',
  ]),
  'answer'      => 'Fraudulent emails to steal information',
  'explanation' => 'Phishing uses deceptive communications to trick individuals into revealing sensitive data.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which term refers to malicious software designed to harm computer systems?',
  'choices'     => json_encode([
    'Malware',
    'Phishing',
    'Spamming',
    'Spoofing',
  ]),
  'answer'      => 'Malware',
  'explanation' => 'Malware includes viruses, worms, and ransomware that damage or exploit systems.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is identity theft?',
  'choices'     => json_encode([
    'Stealing personal information for fraud',
    'Unauthorized entry into buildings',
    'Physical assault in public',
    'Vandalism of property',
  ]),
  'answer'      => 'Stealing personal information for fraud',
  'explanation' => 'Identity theft involves using someone’s personal data without consent for illicit gain.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which law covers data privacy and protection in the Philippines?',
  'choices'     => json_encode([
    'RA 10173 Data Privacy Act',
    'RA 10175 Cybercrime Act',
    'RA 10168 Terrorism Financing Act',
    'RA 9165 Dangerous Drugs Act',
  ]),
  'answer'      => 'RA 10173 Data Privacy Act',
  'explanation' => 'RA 10173 regulates processing of personal data to protect privacy rights.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is digital forensics?',
  'choices'     => json_encode([
    'Recovery and investigation of digital evidence',
    'Encryption of files',
    'Network monitoring',
    'Software development',
  ]),
  'answer'      => 'Recovery and investigation of digital evidence',
  'explanation' => 'Digital forensics involves collecting and analyzing data from electronic devices for legal cases.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is chain of custody in evidentiary procedures?',
  'choices'     => json_encode([
    'Documented handling history of evidence',
    'Sequence of police patrols',
    'Timeline of criminal acts',
    'Schedule of court hearings',
  ]),
  'answer'      => 'Documented handling history of evidence',
  'explanation' => 'Chain of custody tracks every person who handled evidence to ensure integrity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which test assesses the significance of association between two categorical variables?',
  'choices'     => json_encode([
    'Chi-square test',
    'T-test',
    'ANOVA',
    'Correlation',
  ]),
  'answer'      => 'Chi-square test',
  'explanation' => 'Chi-square evaluates whether observed categorical distributions differ from expectations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'What is logistic regression commonly used for in criminology research?',
  'choices'     => json_encode([
    'Modeling binary outcomes such as recidivism',
    'Measuring crime rates',
    'Mapping hotspot locations',
    'Analyzing qualitative interviews',
  ]),
  'answer'      => 'Modeling binary outcomes such as recidivism',
  'explanation' => 'Logistic regression predicts dichotomous dependent variables based on independent factors.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which term describes a sample that does not accurately reflect the target population?',
  'choices'     => json_encode([
    'Sampling bias',
    'Random error',
    'Measurement error',
    'Nonresponse error',
  ]),
  'answer'      => 'Sampling bias',
  'explanation' => 'Sampling bias occurs when some members of a population are less likely to be included.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 9,
  'question'    => 'Which index weights offenses to produce a composite indicator of crime severity?',
  'choices'     => json_encode([
    'Crime severity index',
    'Recidivism index',
    'Crime rate',
    'Clearance rate',
  ]),
  'answer'      => 'Crime severity index',
  'explanation' => 'A crime severity index assigns weights indicating seriousness to various crimes.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

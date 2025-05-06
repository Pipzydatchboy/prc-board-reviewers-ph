<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart4Seeder extends Seeder
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
  'part'        => 4,
  'question'    => 'Under RA 9344, what age range defines a Child in Conflict with the Law (CICL)?',
  'choices'     => json_encode([
    '10 to below 18 years',
    'Below 15 years',
    '15 to 21 years',
    'Below 10 years',
  ]),
  'answer'      => '10 to below 18 years',
  'explanation' => 'RA 9344 covers children from 10 up to but not including 18 who commit offenses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'What is the official title of RA 9344?',
  'choices'     => json_encode([
    'Juvenile Justice and Welfare Act of 2006',
    'Child Protection Act of 2006',
    'Anti‑Juvenile Delinquency Act',
    'Youth Rehabilitation Act',
  ]),
  'answer'      => 'Juvenile Justice and Welfare Act of 2006',
  'explanation' => 'RA 9344 is the Juvenile Justice and Welfare Act enacted in 2006.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which process under RA 9344 diverts minor offenses away from formal judicial proceedings?',
  'choices'     => json_encode([
    'Diversion',
    'Detention',
    'Deportation',
    'Disqualification',
  ]),
  'answer'      => 'Diversion',
  'explanation' => 'Diversion refers to alternative measures preventing formal court processes for CICL.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'What does the acronym “CICL” stand for?',
  'choices'     => json_encode([
    'Children in Conflict with the Law',
    'Courts in Charge of Juvenile Litigation',
    'Council for Investigation of Child Larceny',
    'Care and Intervention for Criminal Lives',
  ]),
  'answer'      => 'Children in Conflict with the Law',
  'explanation' => 'CICL refers to children aged 10–17 who have committed an offense.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which body heads the Juvenile Justice and Welfare Council?',
  'choices'     => json_encode([
    'Secretary of DSWD',
    'Chief Justice of the Supreme Court',
    'Director General of PNP',
    'Secretary of Education',
  ]),
  'answer'      => 'Secretary of DSWD',
  'explanation' => 'The DSWD Secretary serves as chairperson of the JJWC under RA 9344.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'What minimum age is absolutely exempt from criminal liability under Philippine law?',
  'choices'     => json_encode([
    'Below 9 years',
    'Below 12 years',
    'Below 15 years',
    'Below 10 years',
  ]),
  'answer'      => 'Below 9 years',
  'explanation' => 'Children below 9 years old cannot be held criminally liable under the Revised Penal Code.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Under RA 9344, what is the maximum age up to which a juvenile may be kept in custody to complete rehabilitation?',
  'choices'     => json_encode([
    'Up to 21 years',
    'Up to 20 years',
    'Up to 19 years',
    'Up to 18 years',
  ]),
  'answer'      => 'Up to 21 years',
  'explanation' => 'RA 9344 allows detention for rehabilitation up to age 21 for those adjudged delinquent.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which local council is mandated to handle CICL at the barangay level?',
  'choices'     => json_encode([
    'Barangay Council for the Protection of Children',
    'Barangay Peacekeeping Committee',
    'Barangay Health Council',
    'Barangay Youth Development Council',
  ]),
  'answer'      => 'Barangay Council for the Protection of Children',
  'explanation' => 'Each barangay must establish a council to prevent and address CICL cases locally.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which penalty applies under RA 9344 for a child adjudged delinquent?',
  'choices'     => json_encode([
    'Indeterminate sentence of rehabilitation',
    'Life imprisonment',
    'Capital punishment',
    'Fixed‑term imprisonment',
  ]),
  'answer'      => 'Indeterminate sentence of rehabilitation',
  'explanation' => 'Children are given rehabilitation, not punitive sentences, under an indeterminate model.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which national agency is primarily responsible for implementing juvenile welfare programs?',
  'choices'     => json_encode([
    'Department of Social Welfare and Development',
    'Department of Justice',
    'PNP Juvenile Affairs Division',
    'Supreme Court',
  ]),
  'answer'      => 'Department of Social Welfare and Development',
  'explanation' => 'DSWD leads in providing social services and rehabilitation for CICL.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'What is the primary objective of diversion programs for CICL?',
  'choices'     => json_encode([
    'Rehabilitate children without formal trial',
    'Punish children swiftly',
    'Isolate children from families',
    'Increase case backlog',
  ]),
  'answer'      => 'Rehabilitate children without formal trial',
  'explanation' => 'Diversion seeks to rehabilitate children through community‑based measures instead of formal proceedings.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which program offers temporary shelter and care for unaccompanied CICL?',
  'choices'     => json_encode([
    'Child Care Center',
    'Youth Detention Center',
    'Residential Jail',
    'Juvenile Court Facility',
  ]),
  'answer'      => 'Child Care Center',
  'explanation' => 'CCCs provide short‑term care, protective services, and assessment for CICL.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which international treaty guides Philippine juvenile justice standards?',
  'choices'     => json_encode([
    'UN Convention on the Rights of the Child',
    'Geneva Convention III',
    'Rome Statute',
    'UN Convention Against Torture',
  ]),
  'answer'      => 'UN Convention on the Rights of the Child',
  'explanation' => 'The CRC sets global standards on child rights, including justice and care provisions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Under RA 9344, who must be immediately notified when a child is apprehended?',
  'choices'     => json_encode([
    'Parents or guardian',
    'Barangay captain',
    'School principal',
    'Juvenile judge',
  ]),
  'answer'      => 'Parents or guardian',
  'explanation' => 'Police must notify the child’s parents or guardian and ensure their presence.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'What does the “best interest of the child” principle require?',
  'choices'     => json_encode([
    'Decisions prioritizing child welfare',
    'Punitive sentences',
    'Mandatory confinement',
    'Adult trial procedures',
  ]),
  'answer'      => 'Decisions prioritizing child welfare',
  'explanation' => 'All actions regarding CICL must consider and prioritize their welfare and rights.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which local council develops action plans against juvenile delinquency?',
  'choices'     => json_encode([
    'Local Council for the Protection of Children',
    'Barangay Health Committee',
    'City Youth Parliament',
    'Municipal Tourism Board',
  ]),
  'answer'      => 'Local Council for the Protection of Children',
  'explanation' => 'LCPCs coordinate multi‑sectoral strategies to prevent and respond to CICL.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which document must be filed to formalize diversion for a CICL?',
  'choices'     => json_encode([
    'Diversion Agreement',
    'Information',
    'Warrant of Arrest',
    'Petition for Review',
  ]),
  'answer'      => 'Diversion Agreement',
  'explanation' => 'A written agreement detailing conditions is executed between stakeholders and the child.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which rehabilitative measure is mandated for first‑time non‑violent CICL?',
  'choices'     => json_encode([
    'Community Service',
    'Incarceration',
    'Heavy fine',
    'Corporal punishment',
  ]),
  'answer'      => 'Community Service',
  'explanation' => 'Non‑custodial measures like community service are preferred for minor offenses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'What role does the court play in juvenile proceedings?',
  'choices'     => json_encode([
    'Ensure welfare and impose protective measures',
    'Set adult sentencing guidelines',
    'Determine immigration status',
    'Conduct legislative hearings',
  ]),
  'answer'      => 'Ensure welfare and impose protective measures',
  'explanation' => 'Juvenile courts focus on care and rehabilitation rather than punishment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 4,
  'question'    => 'Which principle prohibits labeling CICL as criminals and stigmatizing them?',
  'choices'     => json_encode([
    'Non‑stigmatization',
    'Zero tolerance',
    'Strict liability',
    'Mandatory sentencing',
  ]),
  'answer'      => 'Non‑stigmatization',
  'explanation' => 'RA 9344 mandates that children not be stigmatized or treated as hardened criminals.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

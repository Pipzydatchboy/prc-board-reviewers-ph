<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart1Seeder extends Seeder
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
  'part'        => 1,
  'question'    => 'What is the primary goal of punishment according to the utilitarian theory of penology?',
  'choices'     => json_encode([
    'Deterrence',
    'Retribution',
    'Rehabilitation',
    'Restitution',
  ]),
  'answer'      => 'Deterrence',
  'explanation' => 'Utilitarian theory emphasizes punishment as a means to prevent future crimes by deterring offenders and others.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which principle asserts that punishment must be proportionate to the offense?',
  'choices'     => json_encode([
    'Lex Talionis',
    'Due Process',
    'Utilitarianism',
    'Rehabilitation',
  ]),
  'answer'      => 'Lex Talionis',
  'explanation' => 'Lex Talionis, or the law of retaliation, holds that the severity of punishment should match the severity of the crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which constitutional provision prohibits cruel, degrading, or inhuman punishment?',
  'choices'     => json_encode([
    'Bill of Rights, Art. III §19',
    'Separation of Powers, Art. VI',
    'Due Process Clause, Art. III §1',
    'Victims’ Rights, Art. III §12',
  ]),
  'answer'      => 'Bill of Rights, Art. III §19',
  'explanation' => 'Article III §19 of the 1987 Philippine Constitution forbids cruel, degrading, or inhuman punishment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which UN instrument establishes minimum standards for the treatment of prisoners?',
  'choices'     => json_encode([
    'Tokyo Rules',
    'Nelson Mandela Rules',
    'Bangkok Rules',
    'Riyadh Guidelines',
  ]),
  'answer'      => 'Nelson Mandela Rules',
  'explanation' => 'The UN Standard Minimum Rules for the Treatment of Prisoners are known as the Nelson Mandela Rules.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'In BJMP provincial jail administration, who oversees overall facility operations?',
  'choices'     => json_encode([
    'Provincial Jail Warden',
    'Regional Director',
    'Jail Inspector',
    'City Mayor',
  ]),
  'answer'      => 'Provincial Jail Warden',
  'explanation' => 'The Provincial Jail Warden is directly responsible for the management and security of a provincial jail.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'What does BUCOR stand for?',
  'choices'     => json_encode([
    'Bureau of Corrections',
    'Bureau of Criminal Investigation',
    'Bureau of Community Relations',
    'Bureau of Court Orders',
  ]),
  'answer'      => 'Bureau of Corrections',
  'explanation' => 'BUCOR is the agency tasked with the safekeeping and rehabilitation of national penitentiaries.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which officer is primarily responsible for supervising daily inmate activities?',
  'choices'     => json_encode([
    'Correctional Officer I',
    'Correctional Inspector',
    'Correctional Superintendent',
    'Correctional Administrator',
  ]),
  'answer'      => 'Correctional Officer I',
  'explanation' => 'Correctional Officer I handles the direct supervision and custody of persons deprived of liberty.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'The process of assessing a new inmate’s security level and needs is called:',
  'choices'     => json_encode([
    'Intake Assessment',
    'Release Planning',
    'Case Management',
    'Behavioral Screening',
  ]),
  'answer'      => 'Intake Assessment',
  'explanation' => 'Intake Assessment evaluates risks and identifies programs to meet each inmate’s needs.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which document formally commits a person to a correctional facility?',
  'choices'     => json_encode([
    'Warrant of Commitment',
    'Arrest Warrant',
    'Search Warrant',
    'Release Order',
  ]),
  'answer'      => 'Warrant of Commitment',
  'explanation' => 'A Warrant of Commitment orders that a sentenced person be delivered to a correctional institution.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which procedure governs the escort of inmates to and from court?',
  'choices'     => json_encode([
    'Custody Escort',
    'Visitation Protocol',
    'Release Procedure',
    'Medical Transfer',
  ]),
  'answer'      => 'Custody Escort',
  'explanation' => 'Custody Escort outlines security measures when inmates are transported outside the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Under standard visitation rules, who may petition for inmate visitation rights?',
  'choices'     => json_encode([
    'Immediate Family',
    'Fellow Inmates',
    'Community Volunteers',
    'Media Representatives',
  ]),
  'answer'      => 'Immediate Family',
  'explanation' => 'Immediate family members are granted visitation subject to security clearance and schedules.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'In case of a fire, what is the first action required by correctional staff?',
  'choices'     => json_encode([
    'Sound the Alarm',
    'Evacuate the Facility',
    'Fight the Fire',
    'Notify the Mayor',
  ]),
  'answer'      => 'Sound the Alarm',
  'explanation' => 'Activating the fire alarm alerts all occupants and emergency responders immediately.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which plan details steps to handle and prevent inmate escapes?',
  'choices'     => json_encode([
    'Escape Contingency Plan',
    'Rehabilitation Plan',
    'Medical Response Plan',
    'Intake Plan',
  ]),
  'answer'      => 'Escape Contingency Plan',
  'explanation' => 'An Escape Contingency Plan outlines procedures for immediate response and apprehension.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Hostage situations in jails are typically managed by which unit?',
  'choices'     => json_encode([
    'Crisis Negotiation Team',
    'Counter-Terrorism Unit',
    'Internal Security Unit',
    'Search and Rescue Team',
  ]),
  'answer'      => 'Crisis Negotiation Team',
  'explanation' => 'Crisis Negotiation Teams specialize in dialogue strategies to secure safe release.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which method is primary for detecting contraband during cell inspections?',
  'choices'     => json_encode([
    'Cell Inspection',
    'Perimeter Search',
    'Random Pat-Down',
    'K9 Detection',
  ]),
  'answer'      => 'Cell Inspection',
  'explanation' => 'Regular cell inspections help uncover hidden contraband in inmate living areas.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which body adjudicates minor inmate infractions within the facility?',
  'choices'     => json_encode([
    'Disciplinary Committee',
    'Warden’s Office',
    'Security Department',
    'Regional Director',
  ]),
  'answer'      => 'Disciplinary Committee',
  'explanation' => 'The Disciplinary Committee conducts hearings and imposes sanctions for rule violations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which model of punishment emphasizes reform through therapeutic programs?',
  'choices'     => json_encode([
    'Behavioral Therapy',
    'Restorative Justice',
    'Deterrent Punishment',
    'Retributive Model',
  ]),
  'answer'      => 'Behavioral Therapy',
  'explanation' => 'Behavioral therapy focuses on modifying offender behavior through structured interventions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which constitutional right guarantees inmates access to legal counsel?',
  'choices'     => json_encode([
    'Right to Counsel',
    'Right to Bail',
    'Right to Privacy',
    'Right to Information',
  ]),
  'answer'      => 'Right to Counsel',
  'explanation' => 'The right to counsel ensures fair representation and due process for persons deprived of liberty.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'Which sentencing model allows for individualized treatment and parole eligibility?',
  'choices'     => json_encode([
    'Indeterminate Sentencing',
    'Mandatory Sentencing',
    'Fixed Sentencing',
    'Capital Sentencing',
  ]),
  'answer'      => 'Indeterminate Sentencing',
  'explanation' => 'Indeterminate sentencing provides a range of punishment and focuses on rehabilitation for parole.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 1,
  'question'    => 'What is the main purpose of inmate classification systems?',
  'choices'     => json_encode([
    'Determine Security Level',
    'Calculate Sentence Length',
    'Assign Parole Dates',
    'Evaluate Rehabilitation Progress',
  ]),
  'answer'      => 'Determine Security Level',
  'explanation' => 'Classification systems assess risk and assign inmates to appropriate custody levels.',
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

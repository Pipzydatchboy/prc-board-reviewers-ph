<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart4Seeder extends Seeder
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
  'part'        => 4,
  'question'    => 'What term describes the initial recording of an inmate’s personal details and criminal history?',
  'choices'     => json_encode([
    'Booking',
    'Classification',
    'Reception',
    'Orientation',
  ]),
  'answer'      => 'Booking',
  'explanation' => 'Booking is the process of entering an arrestee’s identity, offense, and history into the system.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which document formally authorizes entry of an inmate into a correctional facility?',
  'choices'     => json_encode([
    'Warrant of Commitment',
    'Release Order',
    'Visitation Permit',
    'Transfer Order',
  ]),
  'answer'      => 'Warrant of Commitment',
  'explanation' => 'The Warrant of Commitment directs law enforcement to deliver a sentenced person to the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Who is responsible for conducting the medical examination upon inmate admission?',
  'choices'     => json_encode([
    'Medical Officer',
    'Correctional Officer I',
    'Warden',
    'Probation Officer',
  ]),
  'answer'      => 'Medical Officer',
  'explanation' => 'A qualified Medical Officer evaluates the inmate’s health status before placement.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'What process classifies inmates by security risk and program needs?',
  'choices'     => json_encode([
    'Intake Assessment',
    'Booking',
    'Visitation Screening',
    'Disciplinary Hearing',
  ]),
  'answer'      => 'Intake Assessment',
  'explanation' => 'Intake assessment evaluates security level, health, and rehabilitative needs for housing.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which order authorizes the movement of an inmate from one cellblock to another?',
  'choices'     => json_encode([
    'Movement Order',
    'Transfer Warrant',
    'Escort Directive',
    'Release Permit',
  ]),
  'answer'      => 'Movement Order',
  'explanation' => 'A Movement Order schedules and authorizes intra‑facility transfers under supervision.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'How often must headcounts be conducted in a correctional facility?',
  'choices'     => json_encode([
    'At every shift change',
    'Once daily',
    'Every hour',
    'Only at lockdown',
  ]),
  'answer'      => 'At every shift change',
  'explanation' => 'Headcounts at shift changes ensure all inmates are accounted for before and after duty.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which procedure governs an inmate’s appearance at court proceedings?',
  'choices'     => json_encode([
    'Court Escort',
    'Movement Order',
    'Visitation Protocol',
    'Release Procedure',
  ]),
  'answer'      => 'Court Escort',
  'explanation' => 'Court Escort outlines security and transport measures when moving inmates to court.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'What mechanism is used to prevent contraband during inmate movement?',
  'choices'     => json_encode([
    'Pat Search',
    'Body Cavity Search',
    'Random Cell Inspection',
    'Visitation Screening',
  ]),
  'answer'      => 'Pat Search',
  'explanation' => 'Pat searches check inmates for hidden items before any movement or activity.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Under which circumstance may visitation be denied?',
  'choices'     => json_encode([
    'Security risk',
    'Family relationship',
    'Scheduled visit day',
    'Valid ID check',
  ]),
  'answer'      => 'Security risk',
  'explanation' => 'Visits can be refused if they pose a threat to order or safety within the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Who approves special temporary release for court appearances?',
  'choices'     => json_encode([
    'Warden',
    'Regional Director',
    'Probation Officer',
    'Board of Pardons',
  ]),
  'answer'      => 'Warden',
  'explanation' => 'The Warden authorizes temporary releases for legal or medical purposes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which log records every inmate movement and escort?',
  'choices'     => json_encode([
    'Movement Log',
    'Disciplinary Log',
    'Visitation Log',
    'Classification Log',
  ]),
  'answer'      => 'Movement Log',
  'explanation' => 'Movement Logs track escorts, transfers, and all inmate relocations in the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'What is the minimum notice required for inmate court appearances?',
  'choices'     => json_encode([
    '24 hours',
    '2 hours',
    '48 hours',
    '1 week',
  ]),
  'answer'      => '24 hours',
  'explanation' => 'Advance notice allows staff to prepare secure transport and documentation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which sanction involves removal of privileges such as recreation?',
  'choices'     => json_encode([
    'Privilege Restriction',
    'Solitary Confinement',
    'Work Detail',
    'Written Warning',
  ]),
  'answer'      => 'Privilege Restriction',
  'explanation' => 'Privilege restrictions remove non‑essential rights like recreation or commissary access.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'What term describes isolation of an inmate as a disciplinary measure?',
  'choices'     => json_encode([
    'Solitary Confinement',
    'House Arrest',
    'Work Detail',
    'Parole Revocation',
  ]),
  'answer'      => 'Solitary Confinement',
  'explanation' => 'Solitary confinement separates inmates for safety or punishment purposes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which committee hears appeals of disciplinary actions?',
  'choices'     => json_encode([
    'Disciplinary Appeals Board',
    'Classification Committee',
    'Visitation Committee',
    'Medical Review Board',
  ]),
  'answer'      => 'Disciplinary Appeals Board',
  'explanation' => 'This board reviews and rules on inmates’ appeals of imposed sanctions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which form documents an inmate’s disciplinary infraction?',
  'choices'     => json_encode([
    'Incident Report',
    'Movement Order',
    'Classification Form',
    'Visitation Permit',
  ]),
  'answer'      => 'Incident Report',
  'explanation' => 'Incident Reports record details of rule violations and evidence for hearings.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which procedure must staff follow before placing an inmate in segregation?',
  'choices'     => json_encode([
    'Due Process Hearing',
    'Medical Examination',
    'Classification Update',
    'Visitation Screening',
  ]),
  'answer'      => 'Due Process Hearing',
  'explanation' => 'Inmates are entitled to a hearing to contest segregation under facility rules.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'What is required before removing an inmate from population for isolation?',
  'choices'     => json_encode([
    'Warden’s Order',
    'Inmate Consent',
    'Family Notification',
    'Court Approval',
  ]),
  'answer'      => 'Warden’s Order',
  'explanation' => 'Only the Warden can order isolation for safety or disciplinary reasons.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Which log must record release of an inmate from segregation?',
  'choices'     => json_encode([
    'Segregation Log',
    'Movement Log',
    'Medical Log',
    'Visitation Log',
  ]),
  'answer'      => 'Segregation Log',
  'explanation' => 'Segregation Logs track entries and exits from isolation cells.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 4,
  'question'    => 'Who oversees the final release procedures for an inmate completing sentence?',
  'choices'     => json_encode([
    'Release Officer',
    'Warden',
    'Probation Officer',
    'Medical Officer',
  ]),
  'answer'      => 'Release Officer',
  'explanation' => 'The Release Officer manages documentation and clearance for discharged inmates.',
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

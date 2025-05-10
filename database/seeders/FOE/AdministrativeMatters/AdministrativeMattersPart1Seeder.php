<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart1Seeder extends Seeder
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

$batch = [
    // 1
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which document establishes the fire station’s annual goals and objectives?',
        'choices'     => json_encode([
            'Strategic plan',
            'Incident report',
            'Training record',
            'Equipment log',
        ]),
        'answer'      => 'Strategic plan',
        'explanation' => 'The strategic plan outlines long-range goals, objectives, and performance measures for the year.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'What is the PRIMARY purpose of an after-action review (AAR)?',
        'choices'     => json_encode([
            'Identify lessons learned and improve future operations',
            'Assign disciplinary action',
            'Document attendance only',
            'Publish media releases',
        ]),
        'answer'      => 'Identify lessons learned and improve future operations',
        'explanation' => 'AARs analyze performance, highlight successes, and pinpoint areas for improvement in future incidents.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which record tracks individual firefighter training completions?',
        'choices'     => json_encode([
            'Training roster',
            'Equipment maintenance log',
            'Purchasing ledger',
            'Daily activity log',
        ]),
        'answer'      => 'Training roster',
        'explanation' => 'The training roster lists courses attended and certifications earned by each firefighter.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which procedure ensures confidentiality of personnel records? ',
        'choices'     => json_encode([
            'Store in locked file cabinets with restricted access',
            'Post in common areas',
            'Email to all staff',
            'File with routine station paperwork',
        ]),
        'answer'      => 'Store in locked file cabinets with restricted access',
        'explanation' => 'Sensitive personnel files must be secured to prevent unauthorized viewing or tampering.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which financial document summarizes all department expenditures to date?',
        'choices'     => json_encode([
            'Budget variance report',
            'Incident cost report',
            'Training schedule',
            'Equipment roster',
        ]),
        'answer'      => 'Budget variance report',
        'explanation' => 'The budget variance report compares actual spending against the approved budget.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'What is the required frequency for submitting vehicle maintenance reports?',
        'choices'     => json_encode([
            'Monthly',
            'Daily',
            'Biennial',
            'Only when a fault occurs',
        ]),
        'answer'      => 'Monthly',
        'explanation' => 'Monthly maintenance reports ensure fleet readiness and early identification of issues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which policy governs acceptable use of department computers and networks?',
        'choices'     => json_encode([
            'IT acceptable use policy',
            'Uniform policy',
            'PPE policy',
            'Vehicle operations policy',
        ]),
        'answer'      => 'IT acceptable use policy',
        'explanation' => 'This policy defines guidelines for proper, secure, and authorized use of IT resources.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which form must be completed after each training exercise?',
        'choices'     => json_encode([
            'Training evaluation form',
            'Incident report form',
            'Maintenance request form',
            'Overtime request form',
        ]),
        'answer'      => 'Training evaluation form',
        'explanation' => 'The evaluation form captures participant feedback, attendance, and performance metrics.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which ledger records all purchases and invoices for the station?',
        'choices'     => json_encode([
            'Station procurement ledger',
            'Training roster',
            'Equipment log',
            'Incident cost report',
        ]),
        'answer'      => 'Station procurement ledger',
        'explanation' => 'The procurement ledger tracks purchase orders, receipts, and payments for accountability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'What is the purpose of a memorandum of understanding (MOU)?',
        'choices'     => json_encode([
            'Define cooperative agreements between agencies',
            'Document disciplinary actions',
            'Schedule leave',
            'Log maintenance work',
        ]),
        'answer'      => 'Define cooperative agreements between agencies',
        'explanation' => 'An MOU formalizes roles, responsibilities, and resource sharing between organizations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which report must be filed with the Civil Service Commission annually?',
        'choices'     => json_encode([
            'Personal services inventory',
            'Incident report',
            'Training record',
            'Equipment log',
        ]),
        'answer'      => 'Personal services inventory',
        'explanation' => 'This inventory details staffing levels and is required by Civil Service regulations each year.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which procedure governs handling of citizen complaint letters?',
        'choices'     => json_encode([
            'Administrative grievance procedure',
            'Training evaluation process',
            'Maintenance request process',
            'Leave approval process',
        ]),
        'answer'      => 'Administrative grievance procedure',
        'explanation' => 'Citizen complaints are processed under the prescribed grievance mechanism for resolution.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which schedule outlines shift rotations and duty assignments?',
        'choices'     => json_encode([
            'Station duty roster',
            'Training schedule',
            'Maintenance calendar',
            'Budget calendar',
        ]),
        'answer'      => 'Station duty roster',
        'explanation' => 'The duty roster specifies which personnel are assigned to which shifts and responsibilities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which instrument is used to certify weights and measures of rescue equipment?',
        'choices'     => json_encode([
            'Calibration certificate',
            'Incident report',
            'Training roster',
            'Budget variance report',
        ]),
        'answer'      => 'Calibration certificate',
        'explanation' => 'Calibration certificates verify that measuring devices meet required accuracy standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which policy sets guidelines for overtime and comp time?',
        'choices'     => json_encode([
            'Time and attendance policy',
            'Uniform policy',
            'Incident operations policy',
            'Maintenance policy',
        ]),
        'answer'      => 'Time and attendance policy',
        'explanation' => 'This policy defines eligibility, approval, and tracking of overtime and compensatory time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which report summarizes all responses and workloads in a given month?',
        'choices'     => json_encode([
            'Monthly activity report',
            'Annual strategic plan',
            'Daily log',
            'Training roster',
        ]),
        'answer'      => 'Monthly activity report',
        'explanation' => 'The monthly report compiles incident counts, training hours, inspections, and other metrics.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which record must be updated when a new firefighter is hired?',
        'choices'     => json_encode([
            'Personnel roster',
            'Equipment log',
            'Budget variance report',
            'Incident cost report',
        ]),
        'answer'      => 'Personnel roster',
        'explanation' => 'The roster lists all active personnel and is revised with every hire or separation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which form is required to request station supplies?',
        'choices'     => json_encode([
            'Requisition form',
            'Incident report form',
            'Training evaluation form',
            'Maintenance request form',
        ]),
        'answer'      => 'Requisition form',
        'explanation' => 'Supply orders are initiated through a requisition form detailing items and quantities needed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which policy addresses use of department vehicles for personal errands?',
        'choices'     => json_encode([
            'Vehicle operations policy',
            'Uniform policy',
            'Training policy',
            'IT acceptable use policy',
        ]),
        'answer'      => 'Vehicle operations policy',
        'explanation' => 'This policy outlines authorized uses, restrictions, and safety requirements for vehicles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 1,
        'question'    => 'Which meeting minutes document attendance, decisions, and action items?',
        'choices'     => json_encode([
            'Station command meeting minutes',
            'Maintenance log',
            'Training roster',
            'Incident report',
        ]),
        'answer'      => 'Station command meeting minutes',
        'explanation' => 'Official minutes record who was present, topics covered, decisions made, and assigned tasks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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

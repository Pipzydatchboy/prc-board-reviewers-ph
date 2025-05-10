<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Which form is used to document vehicular accidents involving department apparatus?',
        'choices'     => json_encode([
            'Motor vehicle accident report',
            'Incident report form',
            'Maintenance request form',
            'Expense voucher',
        ]),
        'answer'      => 'Motor vehicle accident report',
        'explanation' => 'This report captures details of collisions, damages, and any injuries for investigations and insurance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'What is the MINIMUM frequency for inspecting personal protective equipment (PPE)?',
        'choices'     => json_encode([
            'Monthly',
            'Weekly',
            'Annually',
            'Daily',
        ]),
        'answer'      => 'Monthly',
        'explanation' => 'Monthly inspections verify PPE integrity and readiness, per NFPA guidelines.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which ledger records all departmental grant awards and balances?',
        'choices'     => json_encode([
            'Grant accounting ledger',
            'Budget variance report',
            'Procurement ledger',
            'Training roster',
        ]),
        'answer'      => 'Grant accounting ledger',
        'explanation' => 'This ledger tracks awarded funds, expenditures, and remaining balances for each grant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which policy governs acceptance of donations from private entities?',
        'choices'     => json_encode([
            'Donations acceptance policy',
            'Procurement policy',
            'Uniform policy',
            'Training policy',
        ]),
        'answer'      => 'Donations acceptance policy',
        'explanation' => 'This policy sets criteria and oversight for charitable contributions to ensure transparency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which report tracks firefighter exposure incidents (e.g., chemical, biological)?',
        'choices'     => json_encode([
            'Exposure incident log',
            'Incident report',
            'Health screening report',
            'Training roster',
        ]),
        'answer'      => 'Exposure incident log',
        'explanation' => 'This log documents date, type of exposure, protective measures used, and medical follow-up.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which document must be updated when there is a change in station commander?',
        'choices'     => json_encode([
            'Station organizational chart',
            'Personnel roster',
            'Duty roster',
            'Budget variance report',
        ]),
        'answer'      => 'Station organizational chart',
        'explanation' => 'The chart reflects command structure and must list the current station commander immediately.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which form is required to request specialty training outside the department?',
        'choices'     => json_encode([
            'External training request form',
            'Training evaluation form',
            'Requisition form',
            'Budget adjustment request',
        ]),
        'answer'      => 'External training request form',
        'explanation' => 'This form captures course details, justification, and funding sources for outside training.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'What record tracks promotions and rank changes within the department?',
        'choices'     => json_encode([
            'Promotion and personnel action log',
            'Incident report',
            'Training roster',
            'Equipment log',
        ]),
        'answer'      => 'Promotion and personnel action log',
        'explanation' => 'The log notes effective dates, positions, and authorizations for all rank changes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which policy defines guidelines for use of department credit cards?',
        'choices'     => json_encode([
            'Credit card use policy',
            'Procurement policy',
            'Travel policy',
            'Expense voucher policy',
        ]),
        'answer'      => 'Credit card use policy',
        'explanation' => 'This policy specifies purchase limits, authorized items, and reconciliation procedures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which record must be updated following completion of annual hydrant inspections?',
        'choices'     => json_encode([
            'Fire hydrant maintenance log',
            'Fleet operations log',
            'Incident report',
            'Training roster',
        ]),
        'answer'      => 'Fire hydrant maintenance log',
        'explanation' => 'This log records inspection dates, findings, and any corrective actions for each hydrant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which document authorizes mutual aid into the jurisdiction?',
        'choices'     => json_encode([
            'Mutual aid agreement',
            'MOU',
            'Budget adjustment request',
            'Requisition form',
        ]),
        'answer'      => 'Mutual aid agreement',
        'explanation' => 'Formal agreements between jurisdictions establish terms, responsibilities, and reimbursement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which ledger tracks periodic calibration of station gas detectors?',
        'choices'     => json_encode([
            'Equipment calibration log',
            'Maintenance log',
            'Fleet operations log',
            'Training roster',
        ]),
        'answer'      => 'Equipment calibration log',
        'explanation' => 'This log details calibration dates, technician, and results for gas detection equipment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which form initiates the process to decommission obsolete apparatus?',
        'choices'     => json_encode([
            'Apparatus decommissioning request',
            'Maintenance request form',
            'Requisition form',
            'Disciplinary action form',
        ]),
        'answer'      => 'Apparatus decommissioning request',
        'explanation' => 'This request outlines justification and steps to retire and dispose of old vehicles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which policy governs locker and personal storage assignments?',
        'choices'     => json_encode([
            'Station locker assignment policy',
            'Uniform policy',
            'PPE policy',
            'IT policy',
        ]),
        'answer'      => 'Station locker assignment policy',
        'explanation' => 'This policy defines criteria, duration, and management of personal storage facilities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which report summarizes fire prevention inspection results for the district?',
        'choices'     => json_encode([
            'Fire prevention inspection summary',
            'Incident report',
            'Training roster',
            'Maintenance log',
        ]),
        'answer'      => 'Fire prevention inspection summary',
        'explanation' => 'This summary aggregates inspection counts, violations, and compliance rates for oversight.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which form is used to request changes to station facility layout?',
        'choices'     => json_encode([
            'Facility alteration request form',
            'Requisition form',
            'Budget adjustment request',
            'MOU',
        ]),
        'answer'      => 'Facility alteration request form',
        'explanation' => 'This form details proposed facility modifications and justifications for approval.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which process ensures secure disposal of expired electronic media?',
        'choices'     => json_encode([
            'Media destruction procedure',
            'Shredding procedure',
            'Recycling policy',
            'Regular trash disposal',
        ]),
        'answer'      => 'Media destruction procedure',
        'explanation' => 'This procedure dictates methods (e.g., degaussing, shredding) to render data unrecoverable.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which ledger tracks completion of mandatory bloodborne pathogen training?',
        'choices'     => json_encode([
            'Training compliance ledger',
            'Exposure incident log',
            'Incident report',
            'Equipment log',
        ]),
        'answer'      => 'Training compliance ledger',
        'explanation' => 'The ledger records who has completed required safety trainings and when renewals are due.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which calendar sets deadlines for submitting budget requests for next fiscal year?',
        'choices'     => json_encode([
            'Budget development calendar',
            'Grant calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Budget development calendar',
        'explanation' => 'This calendar outlines submission dates and review periods for the upcoming fiscal budget.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 6,
        'question'    => 'Which form documents emergency contact information for all personnel?',
        'choices'     => json_encode([
            'Emergency contact form',
            'Personnel roster',
            'Incident report',
            'Training roster',
        ]),
        'answer'      => 'Emergency contact form',
        'explanation' => 'This form captures names, relationships, and phone numbers for notification during emergencies.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

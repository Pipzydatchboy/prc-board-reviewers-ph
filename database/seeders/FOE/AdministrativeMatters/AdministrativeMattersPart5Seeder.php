<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which form is required to document lost or damaged department property?',
        'choices'     => json_encode([
            'Property loss report',
            'Incident report form',
            'Maintenance request',
            'Expense voucher',
        ]),
        'answer'      => 'Property loss report',
        'explanation' => 'This form records details, value, and circumstances of lost or damaged assets for accountability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'What is the minimum frequency for conducting a full audit of department finances?',
        'choices'     => json_encode([
            'Annually',
            'Quarterly',
            'Semi-annually',
            'Biennially',
        ]),
        'answer'      => 'Annually',
        'explanation' => 'An annual financial audit ensures review of budgets, expenditures, and compliance over the fiscal year.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which policy outlines guidelines for employee performance bonuses?',
        'choices'     => json_encode([
            'Incentive compensation policy',
            'Overtime policy',
            'Leave policy',
            'Uniform policy',
        ]),
        'answer'      => 'Incentive compensation policy',
        'explanation' => 'This policy sets eligibility, metrics, and approval for granting performance-based bonuses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which ledger records petty cash disbursements and remaining balance?',
        'choices'     => json_encode([
            'Petty cash log',
            'Procurement ledger',
            'Fleet operations log',
            'Training roster',
        ]),
        'answer'      => 'Petty cash log',
        'explanation' => 'The petty cash log tracks vouchers, amounts issued, and box balance after each transaction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which form initiates the process for disciplinary counseling rather than administrative action?',
        'choices'     => json_encode([
            'Counseling referral form',
            'Disciplinary action form',
            'Grievance form',
            'Training request form',
        ]),
        'answer'      => 'Counseling referral form',
        'explanation' => 'This form is used to provide informal guidance and document counseling sessions before formal discipline.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which schedule specifies deadlines for submitting accreditation renewal documentation?',
        'choices'     => json_encode([
            'Accreditation calendar',
            'Policy management calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Accreditation calendar',
        'explanation' => 'The accreditation calendar tracks due dates for standards compliance reports and site visits.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which record documents annual physical fitness test results for personnel?',
        'choices'     => json_encode([
            'Fitness test log',
            'Training roster',
            'Incident report',
            'Equipment log',
        ]),
        'answer'      => 'Fitness test log',
        'explanation' => 'This log records individual performance on physical assessments to meet departmental fitness standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which procedure governs handling of FOI appeals when initial requests are denied?',
        'choices'     => json_encode([
            'FOI appeals procedure',
            'Grievance procedure',
            'Whistleblower procedure',
            'Procurement appeals process',
        ]),
        'answer'      => 'FOI appeals procedure',
        'explanation' => 'This procedure outlines review steps and timelines for challenging decisions on public records requests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which form requests extension of temporary disability leave?',
        'choices'     => json_encode([
            'Leave extension form',
            'Medical leave application',
            'Overtime request',
            'Requisition form',
        ]),
        'answer'      => 'Leave extension form',
        'explanation' => 'This form documents medical updates and approval to continue disability leave beyond original dates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which report tracks compliance with mandated health screenings (e.g., TB tests)?',
        'choices'     => json_encode([
            'Health screening compliance report',
            'Training roster',
            'Fitness test log',
            'Incident report',
        ]),
        'answer'      => 'Health screening compliance report',
        'explanation' => 'This report ensures all personnel receive and document required medical evaluations on schedule.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which policy governs reimbursement for professional development conference attendance?',
        'choices'     => json_encode([
            'Professional development expense policy',
            'Travel policy',
            'Expense voucher policy',
            'Training policy',
        ]),
        'answer'      => 'Professional development expense policy',
        'explanation' => 'This policy sets criteria, allowable expenses, and documentation required for PD reimbursements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which ledger monitors expiration and renewal of apparatus certifications?',
        'choices'     => json_encode([
            'Apparatus certification log',
            'Fleet operations log',
            'Asset register',
            'Maintenance log',
        ]),
        'answer'      => 'Apparatus certification log',
        'explanation' => 'This log tracks compliance with NFPA equipment inspection and certification schedules.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which document initiates formation of a special task force or committee?',
        'choices'     => json_encode([
            'Committee formation order',
            'Assignment order',
            'Requisition form',
            'MOA',
        ]),
        'answer'      => 'Committee formation order',
        'explanation' => 'This order defines purpose, membership, and authority for ad hoc committees or task forces.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which form records volunteer firefighter time and activities?',
        'choices'     => json_encode([
            'Volunteer activity log',
            'Duty roster',
            'Incident report',
            'Training roster',
        ]),
        'answer'      => 'Volunteer activity log',
        'explanation' => 'This log captures hours, tasks performed, and training for volunteer personnel accountability.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which policy addresses use of body-worn cameras by investigators?',
        'choices'     => json_encode([
            'Body-worn camera policy',
            'Privacy policy',
            'Uniform policy',
            'IT policy',
        ]),
        'answer'      => 'Body-worn camera policy',
        'explanation' => 'This policy sets guidelines for recording, retention, and access to video evidence captured in the field.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which calendar tracks scheduled inspections of fire station facilities?',
        'choices'     => json_encode([
            'Facilities inspection calendar',
            'Equipment maintenance schedule',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Facilities inspection calendar',
        'explanation' => 'This calendar ensures regular checks of building systems, alarms, and life-safety features.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which report evaluates departmental compliance with diversity and inclusion goals?',
        'choices'     => json_encode([
            'Diversity and inclusion report',
            'Personnel roster',
            'Training roster',
            'Incident report',
        ]),
        'answer'      => 'Diversity and inclusion report',
        'explanation' => 'This report measures hiring, promotion, and inclusion metrics against established benchmarks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which form documents completion of annual emergency operations plan review?',
        'choices'     => json_encode([
            'EOP review certification form',
            'Incident report',
            'Training evaluation',
            'Duty roster',
        ]),
        'answer'      => 'EOP review certification form',
        'explanation' => 'This form certifies that the emergency plan has been reviewed, tested, and updated as required.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which ledger tracks reimbursements for employee uniform allowances?',
        'choices'     => json_encode([
            'Uniform allowance ledger',
            'Expense voucher log',
            'Procurement ledger',
            'Petty cash log',
        ]),
        'answer'      => 'Uniform allowance ledger',
        'explanation' => 'This ledger records issued allowances, purchased items, and remaining entitlements per employee.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 5,
        'question'    => 'Which policy outlines acceptable criteria for awarding commendations and medals?',
        'choices'     => json_encode([
            'Awards and honors policy',
            'Disciplinary policy',
            'Training policy',
            'Uniform policy',
        ]),
        'answer'      => 'Awards and honors policy',
        'explanation' => 'This policy defines nomination procedures, evaluation criteria, and approval for official recognition.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Which form is used to document adjustments to personnel salaries outside of the annual budget?',
        'choices'     => json_encode([
            'Salary adjustment form',
            'Leave authorization form',
            'Overtime authorization form',
            'Expense voucher',
        ]),
        'answer'      => 'Salary adjustment form',
        'explanation' => 'This form approves pay changes such as promotions or market adjustments outside the normal cycle.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which policy governs the handling of confidential medical records for personnel?',
        'choices'     => json_encode([
            'Medical privacy policy',
            'Records retention policy',
            'Disciplinary policy',
            'Leave policy',
        ]),
        'answer'      => 'Medical privacy policy',
        'explanation' => 'This policy ensures protected health information is stored and shared in compliance with privacy laws.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which ledger logs all reimbursements to personnel for uniform maintenance and cleaning?',
        'choices'     => json_encode([
            'Uniform maintenance log',
            'Petty cash log',
            'Expense voucher log',
            'Procurement ledger',
        ]),
        'answer'      => 'Uniform maintenance log',
        'explanation' => 'This log tracks requests and payments made for cleaning and repair of uniforms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which schedule outlines deadlines for renewing department liability insurance?',
        'choices'     => json_encode([
            'Insurance renewal calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Insurance renewal calendar',
        'explanation' => 'This calendar tracks end dates of all policies and sets reminders for renewal processes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which form is required to appeal a disciplinary action decision?',
        'choices'     => json_encode([
            'Disciplinary appeal form',
            'Grievance form',
            'Counseling referral form',
            'Incident report',
        ]),
        'answer'      => 'Disciplinary appeal form',
        'explanation' => 'This form initiates the formal appeals process for contested disciplinary outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which log tracks vendor performance and contract compliance?',
        'choices'     => json_encode([
            'Vendor performance log',
            'Procurement ledger',
            'Maintenance log',
            'Grant accounting ledger',
        ]),
        'answer'      => 'Vendor performance log',
        'explanation' => 'This log records delivery timeliness, quality issues, and compliance metrics for each vendor.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which policy defines acceptable criteria for awarding overtime on holidays?',
        'choices'     => json_encode([
            'Holiday overtime policy',
            'Time and attendance policy',
            'Leave policy',
            'Uniform policy',
        ]),
        'answer'      => 'Holiday overtime policy',
        'explanation' => 'This policy specifies eligibility, rates, and approval requirements for holiday work.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which report summarizes the status of open corrective actions from audits and inspections?',
        'choices'     => json_encode([
            'Corrective actions status report',
            'Incident cost report',
            'Monthly activity report',
            'Training evaluation report',
        ]),
        'answer'      => 'Corrective actions status report',
        'explanation' => 'This report tracks outstanding audit recommendations and their current resolution status.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which form is used to request temporary authority to act in a higher rank?',
        'choices'     => json_encode([
            'Acting rank authorization form',
            'Assignment order',
            'Overtime authorization form',
            'Requisition form',
        ]),
        'answer'      => 'Acting rank authorization form',
        'explanation' => 'This form grants an individual the authority and pay of a higher rank on a temporary basis.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which ledger tracks certifications and expiration dates for land and water rescue qualifications?',
        'choices'     => json_encode([
            'Rescue certification log',
            'Training roster',
            'Asset register',
            'Compliance report',
        ]),
        'answer'      => 'Rescue certification log',
        'explanation' => 'This log ensures specialized rescue credentials are current and flags upcoming expirations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which policy sets guidelines for the use of departmental credit cards by officers?',
        'choices'     => json_encode([
            'Officer credit card policy',
            'Credit card use policy',
            'Expense voucher policy',
            'Procurement policy',
        ]),
        'answer'      => 'Officer credit card policy',
        'explanation' => 'This policy establishes officer-specific controls, limits, and reconciliation procedures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which report details utilization rates of emergency apparatus over a month?',
        'choices'     => json_encode([
            'Apparatus utilization report',
            'Fleet operations report',
            'Incident cost report',
            'Monthly activity report',
        ]),
        'answer'      => 'Apparatus utilization report',
        'explanation' => 'This report analyzes hours in service, responses, and downtime for each vehicle.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which procedure governs the review and approval of mutual aid deployment?',
        'choices'     => json_encode([
            'Mutual aid deployment procedure',
            'Assignment order',
            'Dispatch procedure',
            'Grant procedure',
        ]),
        'answer'      => 'Mutual aid deployment procedure',
        'explanation' => 'This procedure defines authority, notification, and cost recovery for mutual aid events.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which form initiates a request for ergonomic assessment of workstations?',
        'choices'     => json_encode([
            'Ergonomic assessment request',
            'Maintenance request',
            'Training request',
            'Requisition form',
        ]),
        'answer'      => 'Ergonomic assessment request',
        'explanation' => 'This form requests evaluation of workstations to prevent musculoskeletal injuries.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which log tracks fuel card usage and reconciliation for each apparatus?',
        'choices'     => json_encode([
            'Fuel card log',
            'Fuel consumption log',
            'Fleet operations log',
            'Procurement ledger',
        ]),
        'answer'      => 'Fuel card log',
        'explanation' => 'This log records transactions charged to fuel cards and is reconciled against actual mileage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which policy governs procedures for internal audits of training programs?',
        'choices'     => json_encode([
            'Training audit policy',
            'SOP development procedure',
            'Budget policy',
            'Performance policy',
        ]),
        'answer'      => 'Training audit policy',
        'explanation' => 'This policy outlines frequency, scope, and reporting requirements for training audits.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which record must document clearance testing of station emergency generators?',
        'choices'     => json_encode([
            'Generator test log',
            'Maintenance log',
            'Incident report',
            'Electrical log',
        ]),
        'answer'      => 'Generator test log',
        'explanation' => 'This log records start-up times, load tests, and any maintenance notes for generators.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which form is required to request participation in external professional conferences?',
        'choices'     => json_encode([
            'Conference approval form',
            'Training request form',
            'Requisition form',
            'Expense voucher',
        ]),
        'answer'      => 'Conference approval form',
        'explanation' => 'This form captures conference details, benefits, and budget for supervisory approval.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which ledger tracks the condition and replacement schedule of station SCBAs?',
        'choices'     => json_encode([
            'SCBA maintenance log',
            'PPE maintenance log',
            'Asset register',
            'Fleet operations log',
        ]),
        'answer'      => 'SCBA maintenance log',
        'explanation' => 'This log records inspections, hydrostatic tests, and replacement dates for breathing apparatus.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 9,
        'question'    => 'Which calendar tracks deadlines for station facility safety drills?',
        'choices'     => json_encode([
            'Safety drill calendar',
            'Training schedule',
            'Duty roster',
            'Budget calendar',
        ]),
        'answer'      => 'Safety drill calendar',
        'explanation' => 'This calendar ensures scheduled fire, earthquake, and active-shooter drills occur on time.',
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

<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which plan outlines strategies to improve community risk reduction over five years?',
        'choices'     => json_encode([
            'Community risk reduction strategy',
            'Annual operational plan',
            'Incident response plan',
            'Training development plan',
        ]),
        'answer'      => 'Community risk reduction strategy',
        'explanation' => 'A CRR strategy identifies long-term goals and actions to mitigate risks in the community.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which record must track compliance with vehicle preventive maintenance schedules?',
        'choices'     => json_encode([
            'Preventive maintenance log',
            'Fleet operations report',
            'Incident cost report',
            'Equipment calibration log',
        ]),
        'answer'      => 'Preventive maintenance log',
        'explanation' => 'The preventive maintenance log documents Dates, services performed, and mileage for each apparatus.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'What is the PRIMARY objective of a risk management program?',
        'choices'     => json_encode([
            'Identify and mitigate organizational hazards',
            'Document incidents only',
            'Schedule training sessions',
            'Track equipment inventory',
        ]),
        'answer'      => 'Identify and mitigate organizational hazards',
        'explanation' => 'Risk management aims to proactively address exposures that could harm personnel or assets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which policy governs use of social media for official fire department communications?',
        'choices'     => json_encode([
            'Social media use policy',
            'Uniform policy',
            'IT acceptable use policy',
            'Public information policy',
        ]),
        'answer'      => 'Social media use policy',
        'explanation' => 'This policy prescribes guidelines for official posts, tone, and approval workflows.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which ledger logs expenditures and balances for grant-funded programs?',
        'choices'     => json_encode([
            'Grant management ledger',
            'Budget variance report',
            'Procurement ledger',
            'Petty cash log',
        ]),
        'answer'      => 'Grant management ledger',
        'explanation' => 'The grant ledger tracks award amounts, draws, expenditures, and remaining balances.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which form initiates request for additional staffing resources during peak season?',
        'choices'     => json_encode([
            'Staff augmentation request',
            'Assignment order',
            'Requisition form',
            'Overtime authorization form',
        ]),
        'answer'      => 'Staff augmentation request',
        'explanation' => 'This form details justification, duration, and number of additional personnel needed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which process ensures internal controls over cash receipts at fire stations?',
        'choices'     => json_encode([
            'Dual custody and daily reconciliation',
            'Single-person handling',
            'Monthly audit only',
            'Annual financial audit',
        ]),
        'answer'      => 'Dual custody and daily reconciliation',
        'explanation' => 'Having two persons count and reconcile cash daily prevents theft and errors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which schedule sets deadlines for submitting performance improvement action plans?',
        'choices'     => json_encode([
            'Performance improvement calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Performance improvement calendar',
        'explanation' => 'This calendar coordinates timelines for completing and reviewing action plans.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which record must document chain of approval for capital equipment purchases?',
        'choices'     => json_encode([
            'Purchase approval log',
            'Procurement ledger',
            'Requisition form',
            'Equipment register',
        ]),
        'answer'      => 'Purchase approval log',
        'explanation' => 'The log captures names, dates, and authorities that approved each purchase.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which policy outlines standards for firefighter wellness and mental health?',
        'choices'     => json_encode([
            'Wellness and mental health policy',
            'Occupational safety policy',
            'Disciplinary policy',
            'PPE policy',
        ]),
        'answer'      => 'Wellness and mental health policy',
        'explanation' => 'This policy defines programs and resources for physical and psychological well-being.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which tool tracks training needs assessments across all ranks?',
        'choices'     => json_encode([
            'Training needs assessment matrix',
            'Training roster',
            'Incident report',
            'Equipment log',
        ]),
        'answer'      => 'Training needs assessment matrix',
        'explanation' => 'A matrix maps required competencies to personnel and highlights gaps for targeted training.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which procedure governs vendor selection for professional services?',
        'choices'     => json_encode([
            'Vendor procurement procedure',
            'Emergency purchase procedure',
            'Requisition procedure',
            'Asset disposal procedure',
        ]),
        'answer'      => 'Vendor procurement procedure',
        'explanation' => 'This procedure outlines solicitation, evaluation, and award criteria for service contracts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which calendar schedules interagency emergency exercises and drills?',
        'choices'     => json_encode([
            'Interagency exercise calendar',
            'Training schedule',
            'Duty roster',
            'Budget calendar',
        ]),
        'answer'      => 'Interagency exercise calendar',
        'explanation' => 'This calendar coordinates dates and participants for multi-agency training events.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which record tracks requests and delivery of uniform items to personnel?',
        'choices'     => json_encode([
            'Uniform issuance log',
            'Petty cash log',
            'Procurement ledger',
            'Incident report',
        ]),
        'answer'      => 'Uniform issuance log',
        'explanation' => 'The log records sizes, quantities, and dates each uniform item was issued.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which policy defines acceptable use of personally owned vehicles for department business?',
        'choices'     => json_encode([
            'Personal vehicle use policy',
            'Vehicle operations policy',
            'Travel policy',
            'Expense voucher policy',
        ]),
        'answer'      => 'Personal vehicle use policy',
        'explanation' => 'It outlines insurance, mileage reimbursement, and safety requirements for POV usage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which report analyzes incident response data to identify deployment inefficiencies?',
        'choices'     => json_encode([
            'Response analysis report',
            'Incident cost report',
            'Monthly activity report',
            'Training evaluation report',
        ]),
        'answer'      => 'Response analysis report',
        'explanation' => 'This report uses metrics (times, locations) to optimize resource allocation and deployment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which ledger tracks maintenance history and expenses for station facilities?',
        'choices'     => json_encode([
            'Facility maintenance log',
            'Fleet operations log',
            'Equipment calibration log',
            'Procurement ledger',
        ]),
        'answer'      => 'Facility maintenance log',
        'explanation' => 'This log records repairs, inspections, and costs for building systems and structures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which form initiates a request for station facility security upgrades?',
        'choices'     => json_encode([
            'Security improvement request',
            'Maintenance request',
            'Requisition form',
            'Budget adjustment request',
        ]),
        'answer'      => 'Security improvement request',
        'explanation' => 'This form details scope, justification, and estimated costs for security enhancements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which policy outlines standards for departmental signage and wayfinding?',
        'choices'     => json_encode([
            'Signage and wayfinding policy',
            'Uniform policy',
            'Vehicle operations policy',
            'IT policy',
        ]),
        'answer'      => 'Signage and wayfinding policy',
        'explanation' => 'This policy establishes design, placement, and maintenance standards for all signs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 7,
        'question'    => 'Which calendar schedules annual review of departmental bylaws and charters?',
        'choices'     => json_encode([
            'Governance review calendar',
            'Budget calendar',
            'Duty roster',
            'Training schedule',
        ]),
        'answer'      => 'Governance review calendar',
        'explanation' => 'This calendar ensures bylaws, charters, and governance documents are reviewed regularly.',
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

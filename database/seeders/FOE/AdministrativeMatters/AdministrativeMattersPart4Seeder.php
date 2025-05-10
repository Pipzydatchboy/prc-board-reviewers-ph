<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart4Seeder extends Seeder
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
        'part'        => 4,
        'question'    => 'Which report details monthly fuel and maintenance costs for each apparatus?',
        'choices'     => json_encode([
            'Fleet operations report',
            'Budget variance report',
            'Incident cost report',
            'Training evaluation report',
        ]),
        'answer'      => 'Fleet operations report',
        'explanation' => 'The fleet report aggregates operating expenses—fuel, repairs, and inspections—for each vehicle.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which policy sets guidelines for use and storage of confidential case files?',
        'choices'     => json_encode([
            'Records retention policy',
            'Social media use policy',
            'Uniform policy',
            'Leave authorization policy',
        ]),
        'answer'      => 'Records retention policy',
        'explanation' => 'This policy defines classification, retention periods, and secure storage for sensitive documents.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'What form initiates a request to extend a project deadline?',
        'choices'     => json_encode([
            'Deadline extension request',
            'Budget adjustment request',
            'Requisition form',
            'Assignment order',
        ]),
        'answer'      => 'Deadline extension request',
        'explanation' => 'This form documents justification and new timelines for projects that require more time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which ledger logs all station supply inventory and usage?',
        'choices'     => json_encode([
            'Inventory control ledger',
            'Asset register',
            'Procurement ledger',
            'Fleet operations log',
        ]),
        'answer'      => 'Inventory control ledger',
        'explanation' => 'The inventory ledger tracks quantities received, used, and on hand for supplies and consumables.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which procedure governs the review and approval of new standard operating procedures?',
        'choices'     => json_encode([
            'SOP development procedure',
            'Incident report procedure',
            'Training request procedure',
            'Leave authorization procedure',
        ]),
        'answer'      => 'SOP development procedure',
        'explanation' => 'This procedure outlines steps—from drafting, review, approval, to publication—of all SOPs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'What is the minimum documentation required when transferring property between stations?',
        'choices'     => json_encode([
            'Property transfer form',
            'Expense voucher',
            'Incident report',
            'Training roster',
        ]),
        'answer'      => 'Property transfer form',
        'explanation' => 'Transfers of equipment or assets must be recorded on a formal transfer form noting parties and condition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which calendar outlines deadlines for submitting grant reimbursement requests?',
        'choices'     => json_encode([
            'Grant reimbursement calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Grant reimbursement calendar',
        'explanation' => 'This calendar tracks grant billing cycles and due dates for expense submissions and reimbursements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which log must be maintained to track dispatch center staffing levels?',
        'choices'     => json_encode([
            'Dispatch staffing log',
            'Station duty roster',
            'Training roster',
            'Incident log',
        ]),
        'answer'      => 'Dispatch staffing log',
        'explanation' => 'This log records date, shift, and personnel assigned to dispatch to ensure adequate coverage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which form documents approval of mutual aid resource requests?',
        'choices'     => json_encode([
            'Mutual aid request form',
            'Requisition form',
            'Purchase order',
            'Assignment order',
        ]),
        'answer'      => 'Mutual aid request form',
        'explanation' => 'Requests for aid from neighboring agencies are formalized on this standardized form.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which policy addresses use of department credit cards?',
        'choices'     => json_encode([
            'Credit card use policy',
            'Travel policy',
            'Expense voucher policy',
            'Procurement policy',
        ]),
        'answer'      => 'Credit card use policy',
        'explanation' => 'This policy defines authorized purchases, approval thresholds, and reconciliation requirements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which schedule governs quarterly performance review meetings?',
        'choices'     => json_encode([
            'Performance review calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Performance review calendar',
        'explanation' => 'This calendar sets dates for scheduled check-ins between supervisors and personnel every quarter.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which ledger tracks revenue from fire safety permits and inspections?',
        'choices'     => json_encode([
            'Permits and fees ledger',
            'Incident cost report',
            'Budget variance report',
            'Fleet operations log',
        ]),
        'answer'      => 'Permits and fees ledger',
        'explanation' => 'Revenue generated through permit fees and inspection charges is recorded in this ledger.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which form initiates disciplinary action for policy violations?',
        'choices'     => json_encode([
            'Disciplinary action form',
            'Incident report',
            'Training evaluation form',
            'Overtime authorization form',
        ]),
        'answer'      => 'Disciplinary action form',
        'explanation' => 'This form begins the formal process of documenting and adjudicating misconduct.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which procedure ensures secure disposal of expired confidential records?',
        'choices'     => json_encode([
            'Shredding and disposal procedure',
            'Regular trash pickup',
            'Archival procedure',
            'Recycling policy',
        ]),
        'answer'      => 'Shredding and disposal procedure',
        'explanation' => 'Expired sensitive records must be shredded per policy before discarding to protect privacy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which log tracks IT system outages and resolution times?',
        'choices'     => json_encode([
            'IT incident log',
            'Maintenance log',
            'Incident report',
            'Equipment log',
        ]),
        'answer'      => 'IT incident log',
        'explanation' => 'All technology failures and repairs—including dispatch systems—are recorded in the IT log.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which form documents approval of travel and per diem expenses?',
        'choices'     => json_encode([
            'Travel authorization form',
            'Requisition form',
            'Expense voucher',
            'Overtime authorization form',
        ]),
        'answer'      => 'Travel authorization form',
        'explanation' => 'This form pre-approves travel, estimated costs, and per diem allowances before departure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which schedule sets deadlines for submitting hazard mitigation grant reports?',
        'choices'     => json_encode([
            'Grant reporting calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Grant reporting calendar',
        'explanation' => 'This calendar tracks due dates for interim and final reports required by grantors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which policy governs use of video surveillance in fire facilities?',
        'choices'     => json_encode([
            'Surveillance and privacy policy',
            'IT acceptable use policy',
            'Personnel policy',
            'Uniform policy',
        ]),
        'answer'      => 'Surveillance and privacy policy',
        'explanation' => 'It balances security needs with privacy rights, outlining camera use, retention, and access.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which record must be retained to support future audit of recruitment processes?',
        'choices'     => json_encode([
            'Selection panel scoring sheets',
            'Incident report',
            'Training roster',
            'Maintenance log',
        ]),
        'answer'      => 'Selection panel scoring sheets',
        'explanation' => 'These sheets document candidate evaluations and ensure transparency in hiring decisions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 4,
        'question'    => 'Which procedure requires periodic verification of vendor certifications?',
        'choices'     => json_encode([
            'Vendor management procedure',
            'Procurement policy',
            'Maintenance procedure',
            'Training procedure',
        ]),
        'answer'      => 'Vendor management procedure',
        'explanation' => 'This procedure mandates checking that contractors and suppliers maintain valid licenses and insurance.',
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

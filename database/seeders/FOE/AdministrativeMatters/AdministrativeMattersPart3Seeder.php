<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'Which document outlines the process for internal discipline proceedings?',
        'choices'     => json_encode([
            'Disciplinary policy',
            'Incident report form',
            'Training roster',
            'Equipment log',
        ]),
        'answer'      => 'Disciplinary policy',
        'explanation' => 'The disciplinary policy prescribes steps and due-process requirements for personnel actions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'What is the MINIMUM frequency for reviewing and updating standard operating procedures?',
        'choices'     => json_encode([
            'Annually',
            'Biennially',
            'Every 5 years',
            'Only when an incident occurs',
        ]),
        'answer'      => 'Annually',
        'explanation' => 'SOPs should be reviewed at least once a year to remain current with best practices and regulations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which form initiates a request to change a department regulation?',
        'choices'     => json_encode([
            'Policy change proposal form',
            'Requisition form',
            'Training request form',
            'Overtime authorization form',
        ]),
        'answer'      => 'Policy change proposal form',
        'explanation' => 'This form captures justification and details for amendments to existing regulations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which procedure governs the handling of whistleblower complaints?',
        'choices'     => json_encode([
            'Whistleblower protection procedure',
            'Public inquiries log',
            'Incident costing procedure',
            'Maintenance request process',
        ]),
        'answer'      => 'Whistleblower protection procedure',
        'explanation' => 'This procedure ensures confidentiality and protection for personnel reporting wrongdoing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which schedule establishes deadlines for submitting grant applications?',
        'choices'     => json_encode([
            'Grant submission calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Grant submission calendar',
        'explanation' => 'A dedicated calendar tracks funding cycles and deadlines for external grant opportunities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which ledger records all fixed assets owned by the department?',
        'choices'     => json_encode([
            'Asset register',
            'Procurement ledger',
            'Fleet operations log',
            'Incident report log',
        ]),
        'answer'      => 'Asset register',
        'explanation' => 'The asset register lists acquisition dates, values, and locations of long-term assets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'What form must be completed to request personal leave for medical reasons?',
        'choices'     => json_encode([
            'Medical leave application',
            'Overtime authorization form',
            'Training request form',
            'Requisition form',
        ]),
        'answer'      => 'Medical leave application',
        'explanation' => 'This application documents medical justification and duration for approved leave.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which policy specifies acceptable behavior on social media by department members?',
        'choices'     => json_encode([
            'Social media use policy',
            'Uniform policy',
            'IT acceptable use policy',
            'Disciplinary policy',
        ]),
        'answer'      => 'Social media use policy',
        'explanation' => 'This policy sets guidelines for conduct, confidentiality, and official statements online.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which instrument tracks monthly utility expenditures at each station?',
        'choices'     => json_encode([
            'Utilities expense report',
            'Incident cost report',
            'Budget variance report',
            'Training roster',
        ]),
        'answer'      => 'Utilities expense report',
        'explanation' => 'This report aggregates electricity, water, and gas expenses for budget monitoring.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which record documents staff participation in community outreach events?',
        'choices'     => json_encode([
            'Community engagement log',
            'Training roster',
            'Incident report',
            'Equipment log',
        ]),
        'answer'      => 'Community engagement log',
        'explanation' => 'This log captures dates, attendees, and outcomes of public education and outreach activities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which document authorizes expenditure of petty cash funds?',
        'choices'     => json_encode([
            'Petty cash voucher',
            'Requisition form',
            'Purchase order',
            'Expense voucher',
        ]),
        'answer'      => 'Petty cash voucher',
        'explanation' => 'Vouchers record small purchases and provide receipts for reconciliation of petty cash.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which ledger tracks the life-cycle maintenance of personal protective equipment?',
        'choices'     => json_encode([
            'PPE maintenance log',
            'Fleet operations log',
            'Asset register',
            'Training roster',
        ]),
        'answer'      => 'PPE maintenance log',
        'explanation' => 'This log records inspections, repairs, and replacements of protective gear over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which procedure governs emergency procurement outside normal budget cycles?',
        'choices'     => json_encode([
            'Emergency purchase procedure',
            'Budget adjustment request',
            'Routine requisition form',
            'Incident report',
        ]),
        'answer'      => 'Emergency purchase procedure',
        'explanation' => 'This outlines expedited steps and approvals when rapid acquisition of critical items is needed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which record must be updated when SOPs are amended?',
        'choices'     => json_encode([
            'SOP revision log',
            'Incident report log',
            'Training roster',
            'Duty roster',
        ]),
        'answer'      => 'SOP revision log',
        'explanation' => 'The log tracks version number, revision date, and author for each SOP update.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which form is required to report workplace injuries to HR?',
        'choices'     => json_encode([
            'Incident injury report',
            'Training evaluation form',
            'Maintenance request form',
            'Overtime authorization form',
        ]),
        'answer'      => 'Incident injury report',
        'explanation' => 'This documents nature of injury, circumstances, and witness statements for HR and WC claims.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which schedule outlines mandatory audit cycles for financial practices?',
        'choices'     => json_encode([
            'Financial audit calendar',
            'Training schedule',
            'Incident report log',
            'Budget calendar',
        ]),
        'answer'      => 'Financial audit calendar',
        'explanation' => 'This calendar sets periodic reviews of accounting, procurement, and expense controls.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which policy governs the use of personal mobile devices on duty?',
        'choices'     => json_encode([
            'Personal devices policy',
            'Uniform policy',
            'IT acceptable use policy',
            'Vehicle operations policy',
        ]),
        'answer'      => 'Personal devices policy',
        'explanation' => 'This policy sets boundaries for phone calls, messaging, and data security during shifts.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which report measures response times against departmental benchmarks?',
        'choices'     => json_encode([
            'Response time performance report',
            'Incident cost report',
            'Training roster',
            'Equipment log',
        ]),
        'answer'      => 'Response time performance report',
        'explanation' => 'This report analyzes dispatch, turnout, travel, and on-scene times for quality metrics.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which form must be retained permanently according to records retention schedules?',
        'choices'     => json_encode([
            'Strategic plan',
            'Daily activity log',
            'Requisition forms',
            'Training evaluation forms',
        ]),
        'answer'      => 'Strategic plan',
        'explanation' => 'Long-term planning documents are often designated for permanent archival.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 3,
        'question'    => 'Which process ensures electronic records are backed up securely?',
        'choices'     => json_encode([
            'Automated off-site backup schedule',
            'Manual USB copy weekly',
            'Email to personal accounts',
            'Printing hard copies',
        ]),
        'answer'      => 'Automated off-site backup schedule',
        'explanation' => 'Regular encrypted backups to off-site servers protect data from loss or cyberattack.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

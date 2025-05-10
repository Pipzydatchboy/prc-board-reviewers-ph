<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => 'Which document outlines the department’s business continuity plan?',
        'choices'     => json_encode([
            'Continuity of Operations Plan (COOP)',
            'Strategic plan',
            'Incident action plan',
            'Training manual',
        ]),
        'answer'      => 'Continuity of Operations Plan (COOP)',
        'explanation' => 'The COOP defines how essential functions will continue during disruptions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which policy sets the standards for records disposal and archival?',
        'choices'     => json_encode([
            'Records retention and disposal policy',
            'Data backup policy',
            'Uniform policy',
            'Procurement policy',
        ]),
        'answer'      => 'Records retention and disposal policy',
        'explanation' => 'This policy defines retention periods and methods for secure disposal of records.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which log tracks safety incidents and corrective actions for station facilities?',
        'choices'     => json_encode([
            'Facilities safety incident log',
            'Maintenance log',
            'Incident report',
            'Equipment log',
        ]),
        'answer'      => 'Facilities safety incident log',
        'explanation' => 'It records hazards, incidents, and steps taken to remediate facility safety issues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which calendar schedules the department’s budget planning cycle?',
        'choices'     => json_encode([
            'Budget planning calendar',
            'Performance calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Budget planning calendar',
        'explanation' => 'This calendar sets submission and review dates for drafting the next fiscal budget.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which form documents the official handover when shift commanders change?',
        'choices'     => json_encode([
            'Shift turnover form',
            'Duty roster',
            'Incident report',
            'Training roster',
        ]),
        'answer'      => 'Shift turnover form',
        'explanation' => 'This form ensures critical information is passed between outgoing and incoming commanders.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which policy governs the use of unmanned aerial systems (drones) by the department?',
        'choices'     => json_encode([
            'UAS operations policy',
            'Aircraft policy',
            'IT acceptable use policy',
            'Public information policy',
        ]),
        'answer'      => 'UAS operations policy',
        'explanation' => 'It sets requirements for drone deployment, pilot certification, and data handling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which document must be filed when initiating a department-wide reorganization?',
        'choices'     => json_encode([
            'Organizational change notice',
            'Assignment order',
            'Budget adjustment request',
            'Incident report',
        ]),
        'answer'      => 'Organizational change notice',
        'explanation' => 'This notice communicates structure changes, reporting lines, and effective dates.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which ledger tracks community engagement activities and outcomes?',
        'choices'     => json_encode([
            'Community engagement ledger',
            'Incident cost report',
            'Training roster',
            'Equipment log',
        ]),
        'answer'      => 'Community engagement ledger',
        'explanation' => 'It logs outreach events, participation numbers, and impact metrics for public education.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which form initiates a request for outside legal counsel?',
        'choices'     => json_encode([
            'Legal services request form',
            'Purchase order',
            'MOU',
            'Requisition form',
        ]),
        'answer'      => 'Legal services request form',
        'explanation' => 'This form secures authorization and funding to engage external attorneys or firms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which policy outlines acceptable criteria for awarding department scholarships?',
        'choices'     => json_encode([
            'Scholarship award policy',
            'Training policy',
            'Expense policy',
            'Procurement policy',
        ]),
        'answer'      => 'Scholarship award policy',
        'explanation' => 'It defines eligibility, selection process, and award administration for educational scholarships.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which document must be updated when the department’s fiscal year changes?',
        'choices'     => json_encode([
            'Fiscal year change proclamation',
            'Budget variance report',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Fiscal year change proclamation',
        'explanation' => 'An official proclamation resets budgeting timelines and reporting periods to the new fiscal year.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which form captures requests for department policy exceptions?',
        'choices'     => json_encode([
            'Policy exception request form',
            'Grievance form',
            'Assignment order',
            'Incident report',
        ]),
        'answer'      => 'Policy exception request form',
        'explanation' => 'This form documents justification and approval for temporary deviations from policy.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which log tracks the status of open FOI requests and response deadlines?',
        'choices'     => json_encode([
            'FOI request tracking log',
            'Public inquiries log',
            'Incident log',
            'Training roster',
        ]),
        'answer'      => 'FOI request tracking log',
        'explanation' => 'It records receipt dates, due dates, and completion status of all FOI requests.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which policy sets guidelines for department-sponsored research activities?',
        'choices'     => json_encode([
            'Research governance policy',
            'Training policy',
            'Uniform policy',
            'Expense policy',
        ]),
        'answer'      => 'Research governance policy',
        'explanation' => 'It defines oversight, ethical review, and data management for internal research projects.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which schedule tracks deadlines for external audit submissions?',
        'choices'     => json_encode([
            'External audit calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'External audit calendar',
        'explanation' => 'This calendar ensures timely submission of financial and compliance documents to external auditors.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which ledger tracks departmental memberships in professional associations?',
        'choices'     => json_encode([
            'Professional memberships ledger',
            'Training roster',
            'Equipment log',
            'Procurement ledger',
        ]),
        'answer'      => 'Professional memberships ledger',
        'explanation' => 'It records dues, renewal dates, and member names for associations and societies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which form initiates a request for station facility preventative upgrades?',
        'choices'     => json_encode([
            'Preventative upgrade request form',
            'Maintenance request form',
            'Requisition form',
            'Budget adjustment request',
        ]),
        'answer'      => 'Preventative upgrade request form',
        'explanation' => 'This form outlines recommended improvements to prevent future facility issues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which policy governs issuance and management of department credit cards?',
        'choices'     => json_encode([
            'Credit card use policy',
            'Expense policy',
            'Procurement policy',
            'Travel policy',
        ]),
        'answer'      => 'Credit card use policy',
        'explanation' => 'This policy specifies eligibility, limits, and reconciliation procedures for department cards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which document outlines the department’s strategic information technology roadmap?',
        'choices'     => json_encode([
            'IT strategic plan',
            'Training plan',
            'Budget plan',
            'Procurement plan',
        ]),
        'answer'      => 'IT strategic plan',
        'explanation' => 'The IT plan details technology initiatives, timelines, and resource requirements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 10,
        'question'    => 'Which calendar tracks scheduled updates to the department’s standard forms?',
        'choices'     => json_encode([
            'Form revision calendar',
            'Policy management calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Form revision calendar',
        'explanation' => 'This calendar ensures regular review and updating of all official departmental templates and forms.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

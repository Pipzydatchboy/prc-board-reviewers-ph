<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'Which form is used to request approval for unbudgeted expenditures?',
        'choices'     => json_encode([
            'Budget adjustment request',
            'Purchase order',
            'Requisition form',
            'Expense voucher',
        ]),
        'answer'      => 'Budget adjustment request',
        'explanation' => 'This form secures authorization to move funds for items not originally in the approved budget.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'What document must accompany a payroll submission for overtime hours?',
        'choices'     => json_encode([
            'Overtime authorization form',
            'Training roster',
            'Maintenance log',
            'Incident report',
        ]),
        'answer'      => 'Overtime authorization form',
        'explanation' => 'Supervisory approval documented on the form justifies and records all overtime worked.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which schedule dictates submission deadlines for the annual performance evaluations?',
        'choices'     => json_encode([
            'Personnel appraisal calendar',
            'Budget variance report',
            'Training schedule',
            'Station duty roster',
        ]),
        'answer'      => 'Personnel appraisal calendar',
        'explanation' => 'The appraisal calendar provides fixed dates for supervisors to complete evaluations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which log tracks all citizen inquiries and their resolution?',
        'choices'     => json_encode([
            'Public inquiries log',
            'Incident cost report',
            'Equipment log',
            'Training roster',
        ]),
        'answer'      => 'Public inquiries log',
        'explanation' => 'This log ensures questions or complaints from the public are recorded and addressed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which policy outlines acceptable conduct during inter-agency meetings?',
        'choices'     => json_encode([
            'Interagency coordination policy',
            'PPE policy',
            'Uniform policy',
            'Vehicle operations policy',
        ]),
        'answer'      => 'Interagency coordination policy',
        'explanation' => 'It establishes guidelines for professionalism, information sharing, and confidentiality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'What is the retention period for official incident reports under Civil Service rules?',
        'choices'     => json_encode([
            '5 years',
            '1 year',
            '10 years',
            'Permanent',
        ]),
        'answer'      => '5 years',
        'explanation' => 'Incident reports are typically retained for five years unless flagged for longer legal review.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which document authorizes temporary reassignment of personnel?',
        'choices'     => json_encode([
            'Assignment order',
            'Requisition form',
            'Training evaluation form',
            'Purchase order',
        ]),
        'answer'      => 'Assignment order',
        'explanation' => 'An assignment order officially directs personnel to new duties or locations for a set period.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which log monitors expiration dates of certifications and licenses?',
        'choices'     => json_encode([
            'Certification tracking log',
            'Training roster',
            'Budget variance report',
            'Equipment maintenance log',
        ]),
        'answer'      => 'Certification tracking log',
        'explanation' => 'This log ensures that all required credentials remain current and alerts before expiry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which process handles formal requests for public records?',
        'choices'     => json_encode([
            'Freedom of Information request',
            'Training request',
            'Purchase request',
            'Maintenance request',
        ]),
        'answer'      => 'Freedom of Information request',
        'explanation' => 'FOI procedures govern how written public records requests are submitted and fulfilled.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'What is the primary benefit of a document version control system?',
        'choices'     => json_encode([
            'Track changes and prevent conflicting edits',
            'Reduce file size',
            'Encrypt all documents',
            'Automatically print reports',
        ]),
        'answer'      => 'Track changes and prevent conflicting edits',
        'explanation' => 'Version control ensures authorship history and avoids multiple users overwriting each other.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which report summarizes compliance with departmental SOPs?',
        'choices'     => json_encode([
            'Standard Operating Procedures audit report',
            'Incident cost report',
            'Training evaluation',
            'Daily activity log',
        ]),
        'answer'      => 'Standard Operating Procedures audit report',
        'explanation' => 'SOP audits assess adherence to written procedures and identify gaps for corrective action.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which form initiates a request for new emergency equipment?',
        'choices'     => json_encode([
            'Equipment requisition form',
            'Budget adjustment request',
            'Training request form',
            'Maintenance request form',
        ]),
        'answer'      => 'Equipment requisition form',
        'explanation' => 'This form details specifications and justification for purchasing new tools or vehicles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which document outlines acceptable dress and grooming standards?',
        'choices'     => json_encode([
            'Uniform and appearance policy',
            'PPE policy',
            'IT acceptable use policy',
            'Vehicle operations policy',
        ]),
        'answer'      => 'Uniform and appearance policy',
        'explanation' => 'This policy prescribes standards for uniform wear, grooming, and insignia display.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which ledger tracks fuel usage and mileage of each department vehicle?',
        'choices'     => json_encode([
            'Fleet operations log',
            'Budget variance report',
            'Station duty roster',
            'Training roster',
        ]),
        'answer'      => 'Fleet operations log',
        'explanation' => 'The log records odometer readings, fuel fills, and maintenance triggers by mileage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which procedure governs processing of employee leave requests?',
        'choices'     => json_encode([
            'Leave authorization procedure',
            'Overtime request procedure',
            'Training request procedure',
            'MOU procedure',
        ]),
        'answer'      => 'Leave authorization procedure',
        'explanation' => 'This procedure outlines how leave types are requested, approved, and tracked in payroll.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which record is required to justify continued funding for a grant-funded position?',
        'choices'     => json_encode([
            'Grant activity and performance report',
            'Incident report',
            'Training roster',
            'Equipment log',
        ]),
        'answer'      => 'Grant activity and performance report',
        'explanation' => 'These reports demonstrate how position objectives were met under the grant’s terms.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which schedule establishes deadlines for annual policy reviews?',
        'choices'     => json_encode([
            'Policy management calendar',
            'Training schedule',
            'Budget calendar',
            'Duty roster',
        ]),
        'answer'      => 'Policy management calendar',
        'explanation' => 'This calendar ensures policies are reviewed, revised, and approved on a regular cycle.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which form captures exit interview feedback when a firefighter separates?',
        'choices'     => json_encode([
            'Exit interview form',
            'Incident report form',
            'Training evaluation form',
            'Overtime request form',
        ]),
        'answer'      => 'Exit interview form',
        'explanation' => 'This form records insights on retention, morale, and areas for departmental improvement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which audit examines compliance with procurement regulations?',
        'choices'     => json_encode([
            'Purchasing compliance audit',
            'Training audit',
            'Fleet audit',
            'Payroll audit',
        ]),
        'answer'      => 'Purchasing compliance audit',
        'explanation' => 'This audit reviews purchase orders, vendor selections, and contract adherence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 2,
        'question'    => 'Which log tracks completion and renewal dates of mandatory safety meetings?',
        'choices'     => json_encode([
            'Safety meeting attendance log',
            'Training roster',
            'Incident report',
            'Equipment log',
        ]),
        'answer'      => 'Safety meeting attendance log',
        'explanation' => 'This log records who attended required safety briefings and when refreshers are due.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

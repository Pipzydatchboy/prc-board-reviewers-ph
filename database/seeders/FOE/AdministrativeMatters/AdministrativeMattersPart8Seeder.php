<?php

namespace Database\Seeders\FOE\AdministrativeMatters;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdministrativeMattersPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which policy governs the use of departmental email for official communications?',
        'choices'     => json_encode([
            'Email usage policy',
            'IT acceptable use policy',
            'Social media use policy',
            'Uniform policy',
        ]),
        'answer'      => 'Email usage policy',
        'explanation' => 'The email usage policy defines proper use, security, and retention requirements for official email correspondence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which ledger tracks station utility meter readings and costs?',
        'choices'     => json_encode([
            'Utility consumption log',
            'Fleet operations log',
            'Incident cost report',
            'Equipment log',
        ]),
        'answer'      => 'Utility consumption log',
        'explanation' => 'This log records monthly meter readings for electricity, water, and gas to monitor and budget utility expenses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'What is the required retention period for completed training rosters under civil service rules?',
        'choices'     => json_encode([
            '3 years',
            '1 year',
            '5 years',
            'Permanent',
        ]),
        'answer'      => '3 years',
        'explanation' => 'Completed training records are typically retained for three years for audit and compliance purposes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which form initiates a request for IT system access for new personnel?',
        'choices'     => json_encode([
            'Access request form',
            'Requisition form',
            'Assignment order',
            'Incident report',
        ]),
        'answer'      => 'Access request form',
        'explanation' => 'The access request form captures user details and required permissions to grant system access securely.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which policy defines guidelines for official travel expense reimbursement?',
        'choices'     => json_encode([
            'Travel reimbursement policy',
            'Credit card use policy',
            'Expense voucher policy',
            'Procurement policy',
        ]),
        'answer'      => 'Travel reimbursement policy',
        'explanation' => 'This policy sets allowable expenses, per diem rates, and documentation requirements for travel reimbursement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which log records the results of annual pump testing on fire apparatus?',
        'choices'     => json_encode([
            'Pump test log',
            'Maintenance log',
            'Fleet operations log',
            'Equipment calibration log',
        ]),
        'answer'      => 'Pump test log',
        'explanation' => 'The pump test log details pressures, flow rates, and any maintenance actions resulting from the annual test.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which procedure governs emergency notification of department personnel?',
        'choices'     => json_encode([
            'Mass notification procedure',
            'Incident dispatch procedure',
            'Maintenance notification process',
            'Training notification process',
        ]),
        'answer'      => 'Mass notification procedure',
        'explanation' => 'This procedure defines how to rapidly alert all personnel via phone, SMS, or email during emergencies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which calendar tracks deadlines for submitting public performance reports?',
        'choices'     => json_encode([
            'Public reporting calendar',
            'Budget calendar',
            'Training schedule',
            'Duty roster',
        ]),
        'answer'      => 'Public reporting calendar',
        'explanation' => 'This calendar ensures timely publication of mandated performance metrics to the public.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which form is used to log and track safety incidents during training exercises?',
        'choices'     => json_encode([
            'Training incident log',
            'Incident report',
            'Maintenance log',
            'Training evaluation form',
        ]),
        'answer'      => 'Training incident log',
        'explanation' => 'The training incident log records any injuries, near misses, or safety issues occurring during drills.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which policy outlines standards for press releases and media interactions?',
        'choices'     => json_encode([
            'Public information policy',
            'Social media use policy',
            'IT acceptable use policy',
            'Uniform policy',
        ]),
        'answer'      => 'Public information policy',
        'explanation' => 'This policy prescribes how the department communicates with media, including approval workflows and messaging standards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which ledger monitors subscription renewals for department software?',
        'choices'     => json_encode([
            'Software subscription log',
            'Equipment calibration log',
            'Maintenance log',
            'Fleet operations log',
        ]),
        'answer'      => 'Software subscription log',
        'explanation' => 'This log tracks expiration and renewal dates for all mission-critical software subscriptions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which form initiates a request for facility utility upgrades (e.g., HVAC)?',
        'choices'     => json_encode([
            'Facility upgrade request',
            'Maintenance request form',
            'Requisition form',
            'Budget adjustment request',
        ]),
        'answer'      => 'Facility upgrade request',
        'explanation' => 'This form specifies the scope and justification for major building system improvements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which policy governs retirement benefits and procedures for department personnel?',
        'choices'     => json_encode([
            'Retirement policy',
            'Leave policy',
            'Payroll policy',
            'Uniform policy',
        ]),
        'answer'      => 'Retirement policy',
        'explanation' => 'The retirement policy outlines eligibility, benefits calculation, and application processes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which record must document volunteer background checks before assignment?',
        'choices'     => json_encode([
            'Volunteer screening log',
            'Personnel roster',
            'Incident report',
            'Training roster',
        ]),
        'answer'      => 'Volunteer screening log',
        'explanation' => 'This log records fingerprinting, reference checks, and clearances for each volunteer recruit.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which ledger tracks departmental insurance policies and renewal dates?',
        'choices'     => json_encode([
            'Insurance policy log',
            'Fleet operations log',
            'Asset register',
            'Equipment log',
        ]),
        'answer'      => 'Insurance policy log',
        'explanation' => 'This log ensures all insurance coverages—vehicle, liability, property—are current and renewed on time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which procedure outlines steps for handling subpoenas and legal requests?',
        'choices'     => json_encode([
            'Legal request handling procedure',
            'Incident report procedure',
            'Training request procedure',
            'Maintenance request procedure',
        ]),
        'answer'      => 'Legal request handling procedure',
        'explanation' => 'This procedure ensures proper receipt, review, and response to legal documents such as subpoenas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which calendar tracks seasonal hazard mitigation campaigns (e.g., wildfire season)?',
        'choices'     => json_encode([
            'Hazard mitigation calendar',
            'Training schedule',
            'Duty roster',
            'Budget calendar',
        ]),
        'answer'      => 'Hazard mitigation calendar',
        'explanation' => 'This calendar schedules public education and inspection activities timed to local seasonal risks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which form documents loss or compromise of department IT credentials?',
        'choices'     => json_encode([
            'Security incident report form',
            'Incident injury report',
            'Training evaluation form',
            'Maintenance request form',
        ]),
        'answer'      => 'Security incident report form',
        'explanation' => 'This form captures details of cybersecurity events, including credential theft or misuse.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which policy outlines guidelines for FOI request fees and waivers?',
        'choices'     => json_encode([
            'FOI fee schedule policy',
            'FOI appeals policy',
            'Privacy policy',
            'Procurement policy',
        ]),
        'answer'      => 'FOI fee schedule policy',
        'explanation' => 'This policy sets the cost structure and waiver criteria for public records requests fees.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 45,
        'part'        => 8,
        'question'    => 'Which ledger tracks annual wellness screening outcomes for personnel?',
        'choices'     => json_encode([
            'Wellness screening log',
            'Fitness test log',
            'Health screening compliance report',
            'Personnel roster',
        ]),
        'answer'      => 'Wellness screening log',
        'explanation' => 'This log records dates and results of physical and mental health screenings required annually.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

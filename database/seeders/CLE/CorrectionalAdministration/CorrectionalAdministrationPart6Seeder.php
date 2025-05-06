<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart6Seeder extends Seeder
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

// 1
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'What is the primary responsibility of a jail warden?',
  'choices'     => json_encode([
    'Overall facility management',
    'Inmate food preparation',
    'Medical treatment',
    'Probation supervision',
  ]),
  'answer'      => 'Overall facility management',
  'explanation' => 'The warden oversees all operations, security, and administration of the facility.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which officer conducts inspections and ensures compliance with regulations?',
  'choices'     => json_encode([
    'Correctional Inspector',
    'Chief Medical Officer',
    'Probation Officer',
    'Classification Officer',
  ]),
  'answer'      => 'Correctional Inspector',
  'explanation' => 'Correctional Inspectors audit operations and enforce standards in jails and prisons.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'What is the purpose of a facility’s annual operations plan?',
  'choices'     => json_encode([
    'Guide daily activities and resource allocation',
    'Schedule inmate visits',
    'Record medical treatments',
    'List volunteer organizations',
  ]),
  'answer'      => 'Guide daily activities and resource allocation',
  'explanation' => 'Annual operations plans set goals, budgets, and schedules for facility management.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which document defines job duties of correctional staff?',
  'choices'     => json_encode([
    'Position Description',
    'Incident Report',
    'Visitation Log',
    'Intake Form',
  ]),
  'answer'      => 'Position Description',
  'explanation' => 'Position Descriptions outline roles, responsibilities, and qualifications for each post.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'What is the first step in developing standard operating procedures (SOPs)?',
  'choices'     => json_encode([
    'Process mapping',
    'Staff training',
    'Budget approval',
    'Incident review',
  ]),
  'answer'      => 'Process mapping',
  'explanation' => 'Identifying and documenting each step of a procedure is essential before writing SOPs.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which metric is commonly used to assess staffing adequacy?',
  'choices'     => json_encode([
    'Inmate‑to‑staff ratio',
    'Recidivism rate',
    'Visitation count',
    'Number of incident reports',
  ]),
  'answer'      => 'Inmate‑to‑staff ratio',
  'explanation' => 'The inmate‑to‑staff ratio helps determine if there are enough officers for safe operations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Who is responsible for scheduling and approving staff leave?',
  'choices'     => json_encode([
    'Human Resources Officer',
    'Medical Officer',
    'Classroom Instructor',
    'Probation Officer',
  ]),
  'answer'      => 'Human Resources Officer',
  'explanation' => 'The HR Officer manages staffing schedules, leave requests, and personnel records.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which training program focuses on crisis response for correctional staff?',
  'choices'     => json_encode([
    'Crisis Management Training',
    'First Aid Certification',
    'Culinary Skills Course',
    'Language Proficiency Class',
  ]),
  'answer'      => 'Crisis Management Training',
  'explanation' => 'This training prepares staff to handle emergencies such as riots and escapes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'What is the key purpose of a performance appraisal?',
  'choices'     => json_encode([
    'Evaluate staff effectiveness',
    'Inmate classification',
    'Menu planning',
    'Facility maintenance',
  ]),
  'answer'      => 'Evaluate staff effectiveness',
  'explanation' => 'Performance appraisals assess job performance and identify areas for development.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which body reviews and adjudicates staff disciplinary cases?',
  'choices'     => json_encode([
    'Disciplinary Committee',
    'Medical Board',
    'Classification Panel',
    'Budget Office',
  ]),
  'answer'      => 'Disciplinary Committee',
  'explanation' => 'This committee holds hearings and imposes sanctions on staff for policy violations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Why are periodic security audits important?',
  'choices'     => json_encode([
    'Detect vulnerabilities',
    'Plan recreational activities',
    'Approve overtime pay',
    'Schedule maintenance',
  ]),
  'answer'      => 'Detect vulnerabilities',
  'explanation' => 'Audits identify gaps in security procedures and recommend improvements.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'What is the role of a staff development officer?',
  'choices'     => json_encode([
    'Coordinate training and professional growth',
    'Manage inmate classifications',
    'Process visitor applications',
    'Oversee facility maintenance',
  ]),
  'answer'      => 'Coordinate training and professional growth',
  'explanation' => 'They plan and implement staff education, training, and career development programs.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which tool helps forecast future staffing needs?',
  'choices'     => json_encode([
    'Workforce planning model',
    'Incident report form',
    'Visitation log',
    'Booking register',
  ]),
  'answer'      => 'Workforce planning model',
  'explanation' => 'This model uses trends and data to predict staffing requirements over time.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'What does “accountability” of correctional staff refer to?',
  'choices'     => json_encode([
    'Being answerable for actions',
    'Inmate admissions',
    'Medical treatment',
    'Visitation scheduling',
  ]),
  'answer'      => 'Being answerable for actions',
  'explanation' => 'Staff must justify conduct and decisions to supervisors and oversight bodies.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which policy defines acceptable behavior for correctional personnel?',
  'choices'     => json_encode([
    'Code of Conduct',
    'Classification Manual',
    'Visitation Rules',
    'Maintenance Protocol',
  ]),
  'answer'      => 'Code of Conduct',
  'explanation' => 'A Code of Conduct sets ethical standards and disciplinary expectations for staff.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Why is staff rostering critical in correctional facilities?',
  'choices'     => json_encode([
    'Ensure proper coverage and reduce fatigue',
    'Record inmate movements',
    'Plan inmate meals',
    'Track medical supplies',
  ]),
  'answer'      => 'Ensure proper coverage and reduce fatigue',
  'explanation' => 'Effective rostering balances workloads and maintains continuous security operations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'What type of training addresses officer stress and mental health?',
  'choices'     => json_encode([
    'Wellness and resilience training',
    'Weapon handling course',
    'Fire safety drill',
    'Report writing workshop',
  ]),
  'answer'      => 'Wellness and resilience training',
  'explanation' => 'These programs promote coping strategies and support for staff well-being.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which analysis helps identify gaps in staff skills?',
  'choices'     => json_encode([
    'Training needs assessment',
    'Risk assessment',
    'Visitor survey',
    'Inmate feedback',
  ]),
  'answer'      => 'Training needs assessment',
  'explanation' => 'This assessment evaluates competencies and determines areas for targeted training.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Who approves the facility’s budget for staff salaries?',
  'choices'     => json_encode([
    'Regional Director',
    'Warden',
    'Finance Officer',
    'Probation Officer',
  ]),
  'answer'      => 'Regional Director',
  'explanation' => 'The Regional Director allocates funds and approves budgets for subordinate facilities.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 6,
  'question'    => 'Which reporting system logs staff misconduct allegations?',
  'choices'     => json_encode([
    'Disciplinary incident log',
    'Visitation register',
    'Medical record',
    'Maintenance ticket',
  ]),
  'answer'      => 'Disciplinary incident log',
  'explanation' => 'This log tracks allegations, investigations, and outcomes of staff misconduct.',
  'created_at'  => $now,
  'updated_at'  => $now,
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

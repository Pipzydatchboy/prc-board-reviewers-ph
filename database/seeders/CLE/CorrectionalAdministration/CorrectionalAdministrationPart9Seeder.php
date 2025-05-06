<?php

namespace Database\Seeders\CLE\CorrectionalAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CorrectionalAdministrationPart9Seeder extends Seeder
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
  'part'        => 9,
  'question'    => 'What is the most common indicator used to evaluate the success of a reintegration program?',
  'choices'     => json_encode([
    'Recidivism rate',
    'Visitor count',
    'Average sentence length',
    'Staff turnover',
  ]),
  'answer'      => 'Recidivism rate',
  'explanation' => 'Recidivism rate—how many former PDLs reoffend—is the key measure of reintegration effectiveness.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which tool assesses individual risk and needs to tailor reintegration services?',
  'choices'     => json_encode([
    'Case needs assessment',
    'Incident report',
    'Booking register',
    'Movement log',
  ]),
  'answer'      => 'Case needs assessment',
  'explanation' => 'A case needs assessment identifies each PDL’s criminogenic risks and support requirements.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which metric tracks employment outcomes for former PDLs?',
  'choices'     => json_encode([
    'Job placement rate',
    'Headcount variance',
    'Staff promotion rate',
    'Visitation frequency',
  ]),
  'answer'      => 'Job placement rate',
  'explanation' => 'Job placement rate measures the proportion of ex‑PDLs who secure and retain employment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'The Therapeutic Community Model Program (TCMP) is evaluated primarily by:',
  'choices'     => json_encode([
    'Changes in behavior and recidivism',
    'Daily visitor logs',
    'Length of incarceration',
    'Frequency of headcounts',
  ]),
  'answer'      => 'Changes in behavior and recidivism',
  'explanation' => 'TCMP success is judged by behavioral improvements and reduction in reoffending.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which community indicator helps evaluate social integration?',
  'choices'     => json_encode([
    'Stable housing rate',
    'Number of infractions',
    'Facility lockdowns',
    'Medical screenings',
  ]),
  'answer'      => 'Stable housing rate',
  'explanation' => 'Stable housing rate indicates how many ex‑PDLs maintain consistent housing post‑release.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which survey tool captures former PDLs’ satisfaction with reintegration services?',
  'choices'     => json_encode([
    'Client satisfaction survey',
    'Visitation register',
    'Shift report',
    'Incident log',
  ]),
  'answer'      => 'Client satisfaction survey',
  'explanation' => 'Surveys ask ex‑PDLs to rate and comment on the support they received.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which law prohibits employment discrimination against former PDLs?',
  'choices'     => json_encode([
    'Anti‑Discrimination Act',
    'Juvenile Justice Law',
    'Probation Law',
    'Clemency Law',
  ]),
  'answer'      => 'Anti‑Discrimination Act',
  'explanation' => 'Anti‑Discrimination legislation protects ex‑PDLs from unfair hiring practices.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which community policy supports ex-PDLs in obtaining identification documents?',
  'choices'     => json_encode([
    'ID reissuance program',
    'Routine headcount',
    'Fire drill protocol',
    'Movement order',
  ]),
  'answer'      => 'ID reissuance program',
  'explanation' => 'ID programs help ex‑PDLs regain official identification needed for services.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which indicator measures ex-PDLs’ compliance with parole conditions?',
  'choices'     => json_encode([
    'Parole violation rate',
    'Inmate counts',
    'Incident reports',
    'Medical logs',
  ]),
  'answer'      => 'Parole violation rate',
  'explanation' => 'Violation rate tracks how often ex‑PDLs breach their parole terms.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which committee evaluates community partnership outcomes?',
  'choices'     => json_encode([
    'Community Advisory Board',
    'Visitation Committee',
    'Security Committee',
    'Medical Board',
  ]),
  'answer'      => 'Community Advisory Board',
  'explanation' => 'Advisory boards review and guide collaborations with local organizations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which data source tracks ex-PDL recidivism over time?',
  'choices'     => json_encode([
    'National criminal registry',
    'Visitation logs',
    'Maintenance tickets',
    'Shift rosters',
  ]),
  'answer'      => 'National criminal registry',
  'explanation' => 'Registries record repeat offenses and convictions for analysis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which evaluation addresses the cost‑effectiveness of reintegration programs?',
  'choices'     => json_encode([
    'Cost‑benefit analysis',
    'Incident review',
    'Booking audit',
    'Movement log',
  ]),
  'answer'      => 'Cost‑benefit analysis',
  'explanation' => 'Cost‑benefit studies compare program costs against savings from reduced reoffending.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which community‑based sanction requires ex‑PDLs to report for unpaid work?',
  'choices'     => json_encode([
    'Community service order',
    'House arrest',
    'Parole',
    'Probation',
  ]),
  'answer'      => 'Community service order',
  'explanation' => 'Community service engages ex‑PDLs in supervised public‑benefit work.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which report reviews program compliance with human‑rights standards?',
  'choices'     => json_encode([
    'Human‑Rights Compliance Report',
    'Fire safety drill report',
    'Headcount report',
    'Visitation report',
  ]),
  'answer'      => 'Human‑Rights Compliance Report',
  'explanation' => 'These reports ensure reintegration respects ex‑PDLs’ dignity and legal rights.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which policy provides legal aid to indigent ex‑PDLs?',
  'choices'     => json_encode([
    'Legal assistance program',
    'Parole guidelines',
    'Fire safety plan',
    'Incident protocol',
  ]),
  'answer'      => 'Legal assistance program',
  'explanation' => 'Legal aid programs help ex‑PDLs with documentation, appeals, and civil matters.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which survey measures community attitudes toward ex‑PDLs?',
  'choices'     => json_encode([
    'Community perception survey',
    'Incident log',
    'Visitation log',
    'Booking register',
  ]),
  'answer'      => 'Community perception survey',
  'explanation' => 'Surveys gauge public support or stigma affecting reintegration success.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which indicator reflects ex‑PDLs’ access to health services?',
  'choices'     => json_encode([
    'Health service utilization rate',
    'Headcount accuracy',
    'Visitor frequency',
    'Security incident rate',
  ]),
  'answer'      => 'Health service utilization rate',
  'explanation' => 'Tracking medical visits shows how well ex‑PDLs obtain healthcare post‑release.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which community policy offers housing support to vulnerable ex‑PDLs?',
  'choices'     => json_encode([
    'Transitional housing program',
    'Mandatory shelter',
    'Work release',
    'Routine lockup',
  ]),
  'answer'      => 'Transitional housing program',
  'explanation' => 'Housing programs provide temporary accommodation and support services.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Evaluation of reintegration programs typically occurs at what interval?',
  'choices'     => json_encode([
    'Annually',
    'Daily',
    'Per headcount',
    'Real‑time',
  ]),
  'answer'      => 'Annually',
  'explanation' => 'Annual reviews allow sufficient time to measure outcomes and implement improvements.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 25,
  'part'        => 9,
  'question'    => 'Which report documents lessons learned and best practices from reintegration?',
  'choices'     => json_encode([
    'After‑action review',
    'Booking sheet',
    'Visitation register',
    'Movement log',
  ]),
  'answer'      => 'After‑action review',
  'explanation' => 'After‑action reviews capture successes, challenges, and recommendations for future programs.',
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

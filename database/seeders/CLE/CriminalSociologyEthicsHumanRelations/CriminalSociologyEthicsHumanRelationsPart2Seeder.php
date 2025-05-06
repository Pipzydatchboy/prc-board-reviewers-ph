<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart2Seeder extends Seeder
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
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which branch of the Philippine criminal justice system is responsible for interpreting laws?',
  'choices'     => json_encode([
    'Judiciary',
    'Executive',
    'Legislature',
    'Prosecution',
  ]),
  'answer'      => 'Judiciary',
  'explanation' => 'The judiciary interprets and applies the law through the courts.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which agency conducts preliminary investigations and prosecutes criminal cases?',
  'choices'     => json_encode([
    'Department of Justice',
    'Philippine National Police',
    'Supreme Court',
    'Public Attorney’s Office',
  ]),
  'answer'      => 'Department of Justice',
  'explanation' => 'The DOJ oversees prosecution and conducts preliminary investigations via its prosecutors.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'What is the primary law‐enforcement agency in the Philippines?',
  'choices'     => json_encode([
    'Philippine National Police',
    'National Bureau of Investigation',
    'Coast Guard',
    'Bureau of Corrections',
  ]),
  'answer'      => 'Philippine National Police',
  'explanation' => 'The PNP is the national police force responsible for law enforcement and public safety.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which office provides free legal assistance to indigent criminal defendants?',
  'choices'     => json_encode([
    'Public Attorney’s Office',
    'Department of Justice',
    'Ombudsman',
    'Philippine Bar Association',
  ]),
  'answer'      => 'Public Attorney’s Office',
  'explanation' => 'The PAO offers free legal representation to qualified indigent clients in criminal cases.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which court has original jurisdiction over crimes punishable by reclusion perpetua?',
  'choices'     => json_encode([
    'Regional Trial Court',
    'Municipal Trial Court',
    'Court of Appeals',
    'Supreme Court',
  ]),
  'answer'      => 'Regional Trial Court',
  'explanation' => 'RTCs handle serious crimes punishable by reclusion perpetua and higher penalties.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which court handles cases with penalties of imprisonment of six years or below?',
  'choices'     => json_encode([
    'Municipal Trial Court',
    'Regional Trial Court',
    'Court of Appeals',
    'Sandiganbayan',
  ]),
  'answer'      => 'Municipal Trial Court',
  'explanation' => 'MTCs have jurisdiction over offenses with lighter penalties and violations of municipal ordinances.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'The Criminal Justice process begins with which stage?',
  'choices'     => json_encode([
    'Investigation',
    'Trial',
    'Sentencing',
    'Rehabilitation',
  ]),
  'answer'      => 'Investigation',
  'explanation' => 'Investigation by law enforcement gathers evidence before charges are filed.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'After investigation, the next formal step in the criminal process is:',
  'choices'     => json_encode([
    'Prosecution',
    'Arrest',
    'Rehabilitation',
    'Release',
  ]),
  'answer'      => 'Prosecution',
  'explanation' => 'Prosecution involves filing charges and conducting preliminary investigation leading to trial.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which stage of the criminal justice process involves the imposition of penalties?',
  'choices'     => json_encode([
    'Adjudication',
    'Investigation',
    'Prosecution',
    'Correction',
  ]),
  'answer'      => 'Adjudication',
  'explanation' => 'Adjudication covers the trial and sentencing phases where guilt is determined and penalties imposed.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which component of the justice system handles incarceration and rehabilitation?',
  'choices'     => json_encode([
    'Corrections',
    'Police',
    'Prosecution',
    'Courts',
  ]),
  'answer'      => 'Corrections',
  'explanation' => 'Corrections manage confinement, rehabilitation programs, and reintegration of offenders.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which body formulates national crime prevention policies?',
  'choices'     => json_encode([
    'Philippine National Police',
    'Department of Justice',
    'Senate Committee on Justice',
    'National Police Commission',
  ]),
  'answer'      => 'Department of Justice',
  'explanation' => 'The DOJ develops and coordinates national crime prevention and justice policies.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which institution reviews decisions of the Regional Trial Courts?',
  'choices'     => json_encode([
    'Court of Appeals',
    'Supreme Court',
    'Sandiganbayan',
    'Ombudsman',
  ]),
  'answer'      => 'Court of Appeals',
  'explanation' => 'The Court of Appeals handles appeals from RTC decisions in criminal and civil cases.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which body is tasked with investigating corruption and official misconduct?',
  'choices'     => json_encode([
    'Office of the Ombudsman',
    'Department of Justice',
    'Philippine National Police',
    'Sandiganbayan',
  ]),
  'answer'      => 'Office of the Ombudsman',
  'explanation' => 'The Ombudsman investigates and prosecutes public officials for graft and corruption.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'What current trend emphasizes building partnerships between police and communities?',
  'choices'     => json_encode([
    'Community policing',
    'Hotspot policing',
    'Zero tolerance policing',
    'Predictive policing',
  ]),
  'answer'      => 'Community policing',
  'explanation' => 'Community policing focuses on collaboration with citizens to prevent crime and improve trust.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which strategy uses data on crime locations to allocate police resources?',
  'choices'     => json_encode([
    'Hotspot policing',
    'Community service',
    'Judicial mediation',
    'Victim‐offender dialogue',
  ]),
  'answer'      => 'Hotspot policing',
  'explanation' => 'Hotspot policing targets areas with high crime concentration using data analysis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which term describes diversion of minor offenders away from formal processing?',
  'choices'     => json_encode([
    'Pre‑trial diversion',
    'Post‑conviction appeal',
    'Mandatory sentencing',
    'Electronic monitoring',
  ]),
  'answer'      => 'Pre‑trial diversion',
  'explanation' => 'Pre‑trial diversion programs refer minor offenders to treatment or community service instead of trial.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which role do probation officers perform in the justice system?',
  'choices'     => json_encode([
    'Supervise conditional release',
    'Adjudicate appeals',
    'Investigate crimes',
    'Operate jails',
  ]),
  'answer'      => 'Supervise conditional release',
  'explanation' => 'Probation officers monitor and assist offenders granted probation in the community.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which process occurs when an offender serves sentence under supervision outside prison?',
  'choices'     => json_encode([
    'Parole',
    'Preliminary investigation',
    'Trial',
    'Booking',
  ]),
  'answer'      => 'Parole',
  'explanation' => 'Parole allows conditional release of prisoners before completing their full sentence.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which emerging trend uses predictive analytics to prevent crime?',
  'choices'     => json_encode([
    'Predictive policing',
    'Community service',
    'Victim‐offender mediation',
    'Mandatory reporting',
  ]),
  'answer'      => 'Predictive policing',
  'explanation' => 'Predictive policing analyzes data patterns to anticipate and prevent future crimes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 2,
  'question'    => 'Which agency oversees policy and standards for the Philippine National Police?',
  'choices'     => json_encode([
    'National Police Commission',
    'Department of Justice',
    'Department of the Interior and Local Government',
    'Office of the Ombudsman',
  ]),
  'answer'      => 'National Police Commission',
  'explanation' => 'The NPC sets policies, rules, and standards and exercises administrative control over the PNP.',
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

<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart3Seeder extends Seeder
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
  'part'        => 3,
  'question'    => 'Which value requires criminologists to act fairly and without bias toward all individuals?',
  'choices'     => json_encode([
    'Neutrality',
    'Loyalty',
    'Zeal',
    'Authority',
  ]),
  'answer'      => 'Neutrality',
  'explanation' => 'Neutrality obliges practitioners to treat everyone impartially, without favoritism or prejudice.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'The Law Enforcement Code of Conduct was promulgated by which body?',
  'choices'     => json_encode([
    'Philippine National Police',
    'Department of the Interior and Local Government',
    'Supreme Court',
    'Department of Justice',
  ]),
  'answer'      => 'Philippine National Police',
  'explanation' => 'The PNP issued its Code of Conduct to guide police ethics and professional behavior.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which article of the PNP Code of Conduct prohibits cruel, degrading, or inhuman treatment of suspects?',
  'choices'     => json_encode([
    'Article XI',
    'Article V',
    'Article I',
    'Article VIII',
  ]),
  'answer'      => 'Article XI',
  'explanation' => 'Article XI mandates respect for human rights and prohibits any form of cruel or inhuman treatment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which ethical principle requires practitioners to keep sensitive information confidential?',
  'choices'     => json_encode([
    'Discretion',
    'Transparency',
    'Accountability',
    'Equity',
  ]),
  'answer'      => 'Discretion',
  'explanation' => 'Discretion involves safeguarding private or sensitive data obtained in the course of duty.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'The Oath of Office for criminologists includes a pledge to uphold:',
  'choices'     => json_encode([
    'The Constitution and laws of the Republic',
    'Personal interests',
    'Departmental orders only',
    'International conventions exclusively',
  ]),
  'answer'      => 'The Constitution and laws of the Republic',
  'explanation' => 'Criminologists swear to abide by the national Constitution and applicable laws in practice.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which human‑right instrument specifically guides law‑enforcement use of force?',
  'choices'     => json_encode([
    'UN Code of Conduct for Law Enforcement Officials',
    'Geneva Convention I',
    'Universal Declaration of Human Rights',
    'Tokyo Rules',
  ]),
  'answer'      => 'UN Code of Conduct for Law Enforcement Officials',
  'explanation' => 'This UN code outlines rules on use of force, arrest, and detention by law‑enforcement.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Community relations in policing primarily aim to:',
  'choices'     => json_encode([
    'Build trust and cooperation with citizens',
    'Increase arrest quotas',
    'Expand jurisdictional boundaries',
    'Reduce officer training',
  ]),
  'answer'      => 'Build trust and cooperation with citizens',
  'explanation' => 'Effective community relations foster public support and collaborative crime prevention.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which concept obliges criminologists to account for their decisions and actions?',
  'choices'     => json_encode([
    'Accountability',
    'Power',
    'Discretion',
    'Impunity',
  ]),
  'answer'      => 'Accountability',
  'explanation' => 'Accountability means being answerable to stakeholders for professional conduct and outcomes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which article of the Criminologist\'s Oath requires respect for dignity of persons?',
  'choices'     => json_encode([
    'Article III',
    'Article V',
    'Article II',
    'Article IV',
  ]),
  'answer'      => 'Article II',
  'explanation' => 'Article II of the Oath mandates respect for human dignity and rights of all individuals.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Ethical policing requires honesty in all official reports and statements. This exemplifies:',
  'choices'     => json_encode([
    'Integrity',
    'Neutrality',
    'Zeal',
    'Obedience',
  ]),
  'answer'      => 'Integrity',
  'explanation' => 'Integrity involves truthfulness and consistency between one’s values and actions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which practice helps prevent conflicts of interest in criminal investigations?',
  'choices'     => json_encode([
    'Disclosure of personal ties',
    'Assigning friends as witnesses',
    'Withholding evidence',
    'Selective enforcement',
  ]),
  'answer'      => 'Disclosure of personal ties',
  'explanation' => 'Revealing relationships or interests allows reassignment to maintain impartiality.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which ethic demands that no person be subjected to torture or cruel punishment?',
  'choices'     => json_encode([
    'Human rights',
    'Professionalism',
    'Efficiency',
    'Obedience',
  ]),
  'answer'      => 'Human rights',
  'explanation' => 'Respect for human rights forbids any form of torture or inhuman treatment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which guideline requires that use of force be proportional to the threat encountered?',
  'choices'     => json_encode([
    'Principle of proportionality',
    'Principle of legality',
    'Principle of prevention',
    'Principle of punishment',
  ]),
  'answer'      => 'Principle of proportionality',
  'explanation' => 'Proportionality ensures force is no more than necessary to address the threat.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which principle emphasizes that law enforcement must act under authority of law?',
  'choices'     => json_encode([
    'Legality',
    'Discretion',
    'Confidentiality',
    'Solidarity',
  ]),
  'answer'      => 'Legality',
  'explanation' => 'Legality mandates all actions be authorized by law, safeguarding against arbitrary conduct.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which value encourages officers to place community welfare above personal gain?',
  'choices'     => json_encode([
    'Public service',
    'Security',
    'Strength',
    'Discipline',
  ]),
  'answer'      => 'Public service',
  'explanation' => 'Public service underscores prioritizing the common good over self‑interest.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Internal affairs units primarily handle:',
  'choices'     => json_encode([
    'Allegations of officer misconduct',
    'Budget planning',
    'Crime prevention programs',
    'Community outreach',
  ]),
  'answer'      => 'Allegations of officer misconduct',
  'explanation' => 'Internal affairs investigate breaches of ethics and discipline within the force.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which concept obliges officers to report observed wrongdoing by colleagues?',
  'choices'     => json_encode([
    'Duty to report',
    'Duty to conceal',
    'Duty to command',
    'Duty to obey',
  ]),
  'answer'      => 'Duty to report',
  'explanation' => 'Duty to report ensures accountability and integrity by exposing misconduct.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which ethical issue arises when officers use their position for personal benefit?',
  'choices'     => json_encode([
    'Abuse of authority',
    'Community engagement',
    'Humanitarian aid',
    'Professional development',
  ]),
  'answer'      => 'Abuse of authority',
  'explanation' => 'Using one’s official power for private gain constitutes abuse of authority.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which practice fosters transparency and public oversight of law enforcement?',
  'choices'     => json_encode([
    'Regular public reporting',
    'Secret operations only',
    'Unilateral decision‑making',
    'Closed‑door hearings',
  ]),
  'answer'      => 'Regular public reporting',
  'explanation' => 'Openly publishing performance and incident reports builds community trust.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 3,
  'question'    => 'Which concept requires continuous learning and improvement in professional practice?',
  'choices'     => json_encode([
    'Professional development',
    'Operational secrecy',
    'Hierarchical obedience',
    'Rigid protocol',
  ]),
  'answer'      => 'Professional development',
  'explanation' => 'Ongoing training and education uphold competence and ethical standards.',
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

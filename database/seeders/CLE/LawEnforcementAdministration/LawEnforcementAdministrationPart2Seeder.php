<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart2Seeder extends Seeder
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

//1
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which law is known as the Private Security Agency Law in the Philippines?',
    'choices'     => json_encode([
        'Republic Act 5487',
        'Republic Act 6975',
        'Republic Act 9263',
        'Republic Act 10071',
    ]),
    'answer'      => 'Republic Act 5487',
    'explanation' => 'RA 5487, enacted in 1969, regulates the organization and operation of private security agencies.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'What is the primary purpose of perimeter barriers in industrial security?',
    'choices'     => json_encode([
        'To delay and deter unauthorized access',
        'To provide lighting for surveillance',
        'To deliver alarms remotely',
        'To log visitor entry and exit',
    ]),
    'answer'      => 'To delay and deter unauthorized access',
    'explanation' => 'Perimeter barriers such as fences and walls slow down intruders and signal trespass.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which type of alarm system detects unauthorized entry by broken circuits?',
    'choices'     => json_encode([
        'Magnetic contact alarm',
        'Motion sensor alarm',
        'Glass break alarm',
        'Heat detector alarm',
    ]),
    'answer'      => 'Magnetic contact alarm',
    'explanation' => 'Magnetic contacts on doors or windows open the circuit when tampered with, triggering the alarm.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'What is the function of a master key in key control systems?',
    'choices'     => json_encode([
        'To open multiple locks with one key',
        'To change lock combinations electronically',
        'To audit usage of individual keys',
        'To disable lost keys remotely',
    ]),
    'answer'      => 'To open multiple locks with one key',
    'explanation' => 'A master key operates a hierarchical key system, allowing access while maintaining individual sub-keys.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which guard system places officers at fixed locations to monitor activities?',
    'choices'     => json_encode([
        'Static guard',
        'Mobile patrol',
        'Escort service',
        'Decoy deployment',
    ]),
    'answer'      => 'Static guard',
    'explanation' => 'Static guards remain at specific posts, providing continuous observation and deterrence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'What type of security survey involves a systematic examination of a facility\'s vulnerabilities?',
    'choices'     => json_encode([
        'Risk assessment',
        'Access control audit',
        'Surveillance test',
        'Personnel screening',
    ]),
    'answer'      => 'Risk assessment',
    'explanation' => 'Risk assessment identifies and analyzes threats, vulnerabilities, and potential impacts.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which document classification level is used for the most sensitive information?',
    'choices'     => json_encode([
        'Top secret',
        'Confidential',
        'Restricted',
        'Unclassified',
    ]),
    'answer'      => 'Top secret',
    'explanation' => 'Top secret is the highest level, disclosure of which could cause exceptionally grave damage.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which personnel security measure involves background investigations of applicants?',
    'choices'     => json_encode([
        'Pre-employment screening',
        'Random drug testing',
        'Probationary training',
        'Exit interview',
    ]),
    'answer'      => 'Pre-employment screening',
    'explanation' => 'Background checks verify criminal, financial, and employment histories before hiring.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which technique is used to test alarm response and guard readiness without their knowledge?',
    'choices'     => json_encode([
        'Force protection test',
        'Red teaming',
        'Security briefing',
        'Routine inspection',
    ]),
    'answer'      => 'Red teaming',
    'explanation' => 'Red teaming simulates adversary actions to evaluate security systems and protocols.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'What is the primary goal of document security?',
    'choices'     => json_encode([
        'Prevent unauthorized viewing or copying',
        'Increase document accessibility',
        'Simplify filing systems',
        'Reduce printing costs',
    ]),
    'answer'      => 'Prevent unauthorized viewing or copying',
    'explanation' => 'Document security ensures confidentiality of sensitive information.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which risk analysis method uses both qualitative and quantitative approaches?',
    'choices'     => json_encode([
        'Semi-quantitative analysis',
        'Qualitative analysis',
        'Quantitative analysis',
        'Benchmark analysis',
    ]),
    'answer'      => 'Semi-quantitative analysis',
    'explanation' => 'Semi-quantitative combines numerical scales and descriptive assessments to rank risk.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which hazard identification technique involves walk-through inspections and interviews?',
    'choices'     => json_encode([
        'Preliminary hazard analysis',
        'Task analysis',
        'Job safety analysis',
        'Root cause analysis',
    ]),
    'answer'      => 'Job safety analysis',
    'explanation' => 'JSA breaks down tasks to identify hazards at each step through observation and discussion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which electronic access control device uses biometric verification?',
    'choices'     => json_encode([
        'Fingerprint scanner',
        'Magnetic swipe card',
        'PIN keypad',
        'Proximity token',
    ]),
    'answer'      => 'Fingerprint scanner',
    'explanation' => 'Biometric devices like fingerprint scanners verify identity based on unique physical traits.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which physical security measure deters unauthorized access by restricting entry points?',
    'choices'     => json_encode([
        'Turnstiles',
        'Alarm systems',
        'Security lighting',
        'Video surveillance',
    ]),
    'answer'      => 'Turnstiles',
    'explanation' => 'Turnstiles allow controlled single-person entry and prevent tailgating.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which form of security survey focuses on evaluating technological systems rather than personnel?',
    'choices'     => json_encode([
        'Technical security survey',
        'Administrative security survey',
        'Operational security survey',
        'Combined survey',
    ]),
    'answer'      => 'Technical security survey',
    'explanation' => 'Technical surveys assess hardware, software, and electronic controls in security infrastructure.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which training program aims to educate security personnel on ethical standards and conduct?',
    'choices'     => json_encode([
        'Code of conduct workshop',
        'Firearms training',
        'Physical fitness program',
        'Alarm response drill',
    ]),
    'answer'      => 'Code of conduct workshop',
    'explanation' => 'Workshops on ethics and conduct reinforce professionalism and accountability among security staff.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which security measure protects information by transforming it into unreadable format?',
    'choices'     => json_encode([
        'Encryption',
        'Classification',
        'Shredding',
        'Authentication',
    ]),
    'answer'      => 'Encryption',
    'explanation' => 'Encryption encodes data so that only authorized parties can read it, ensuring confidentiality.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which investigative technique involves covert information gathering through informants?',
    'choices'     => json_encode([
        'Human intelligence collection',
        'Open-source research',
        'Technical surveillance',
        'Forensic analysis',
    ]),
    'answer'      => 'Human intelligence collection',
    'explanation' => 'HUMINT uses informants or undercover agents to gather information not publicly available.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which process involves systematic review of past incidents to improve security measures?',
    'choices'     => json_encode([
        'Post-incident analysis',
        'Incident reporting',
        'Routine inspection',
        'Preventive maintenance',
    ]),
    'answer'      => 'Post-incident analysis',
    'explanation' => 'Post-incident analysis examines security breaches to identify lessons and prevent recurrence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 2,
    'question'    => 'Which key concept refers to the probability of a security threat exploiting a vulnerability?',
    'choices'     => json_encode([
        'Risk',
        'Threat',
        'Hazard',
        'Exposure',
    ]),
    'answer'      => 'Risk',
    'explanation' => 'Risk is the potential for loss when a threat exploits a vulnerability.',
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

<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart9Seeder extends Seeder
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
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which crime prevention theory focuses on altering the physical environment to reduce crime opportunities?',
    'choices'     => json_encode([
        'Crime Prevention Through Environmental Design (CPTED)',
        'Social Disorganization Theory',
        'Strain Theory',
        'Routine Activities Theory',
    ]),
    'answer'      => 'Crime Prevention Through Environmental Design (CPTED)',
    'explanation' => 'CPTED uses design and management of the built environment to deter criminal behavior.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Who is considered the primary originator of Situational Crime Prevention principles?',
    'choices'     => json_encode([
        'Ronald V. Clarke',
        'Cesare Beccaria',
        'Travis Hirschi',
        'James Q. Wilson',
    ]),
    'answer'      => 'Ronald V. Clarke',
    'explanation' => 'Clarke formalized SCP principles like increasing effort and risk to deter crime.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which CPTED principle involves fostering a sense of ownership and territorial responsibility among residents?',
    'choices'     => json_encode([
        'Territoriality',
        'Natural surveillance',
        'Access control',
        'Maintenance',
    ]),
    'answer'      => 'Territoriality',
    'explanation' => 'Territoriality uses physical design and cues to express ownership and control of space.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'What does the “SARA” model stand for in problem-oriented policing?',
    'choices'     => json_encode([
        'Scanning, Analysis, Response, Assessment',
        'Strategy, Action, Review, Adapt',
        'Search, Arrest, Record, Analyze',
        'Safety, Access, Response, Accountability',
    ]),
    'answer'      => 'Scanning, Analysis, Response, Assessment',
    'explanation' => 'The SARA model guides systematic problem-solving in policing environments.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which situational prevention strategy aims to increase the perceived effort required to commit a crime?',
    'choices'     => json_encode([
        'Target hardening',
        'Decoy operations',
        'Community engagement',
        'Social intervention',
    ]),
    'answer'      => 'Target hardening',
    'explanation' => 'Target hardening makes access more difficult, such as strengthened locks and barriers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which community program mobilizes local residents to patrol and report suspicious activity?',
    'choices'     => json_encode([
        'Neighborhood watch',
        'Citizens patrol',
        'Community patrol',
        'Safety coalition',
    ]),
    'answer'      => 'Neighborhood watch',
    'explanation' => 'Neighborhood watch encourages residents to work with police to monitor their area.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which policing strategy deploys resources to geographic areas where crime is statistically concentrated?',
    'choices'     => json_encode([
        'Hotspot policing',
        'Random patrol',
        'Community policing',
        'Zero tolerance policing',
    ]),
    'answer'      => 'Hotspot policing',
    'explanation' => 'Hotspot policing focuses on small areas with high crime rates for efficient resource use.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which theory suggests that visible signs of disorder lead to more serious crime if unchecked?',
    'choices'     => json_encode([
        'Broken windows theory',
        'Routine activities theory',
        'Strain theory',
        'Control theory',
    ]),
    'answer'      => 'Broken windows theory',
    'explanation' => 'Broken windows posits that maintaining order prevents escalation to serious crimes.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which term describes measures designed to detect offenders through surveillance, alarms, and guards?',
    'choices'     => json_encode([
        'Detection techniques',
        'Target removal',
        'Environmental maintenance',
        'Social development',
    ]),
    'answer'      => 'Detection techniques',
    'explanation' => 'Detection techniques use electronic and human surveillance to identify criminal acts.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which principle of CPTED emphasizes the need for clear lines of sight to observe potential offenders?',
    'choices'     => json_encode([
        'Natural surveillance',
        'Territorial reinforcement',
        'Access control',
        'Maintenance',
    ]),
    'answer'      => 'Natural surveillance',
    'explanation' => 'Natural surveillance maximizes visibility to deter crime and increase detection.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which concept advocates layering multiple security controls like lighting and cameras?',
    'choices'     => json_encode([
        'Defense in depth',
        'Single point enforcement',
        'Rapid deployment',
        'Total isolation',
    ]),
    'answer'      => 'Defense in depth',
    'explanation' => 'Defense in depth uses several overlapping security measures to deter or detect offenders.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which level of crime prevention targets interventions at at-risk individuals before illegal behavior?',
    'choices'     => json_encode([
        'Primary prevention',
        'Secondary prevention',
        'Tertiary prevention',
        'Quaternary prevention',
    ]),
    'answer'      => 'Primary prevention',
    'explanation' => 'Primary prevention addresses root causes and risk factors to stop crime before it occurs.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which initiative involves training community members in surveillance and reporting techniques?',
    'choices'     => json_encode([
        'Community watch training',
        'SWAT training',
        'Firearm proficiency course',
        'Negotiation workshop',
    ]),
    'answer'      => 'Community watch training',
    'explanation' => 'Training programs teach civilians to recognize and report suspicious behavior effectively.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which statistical method evaluates the impact of prevention programs by comparing crime rates before and after implementation?',
    'choices'     => json_encode([
        'Before-and-after analysis',
        'Cross-sectional study',
        'Longitudinal cohort',
        'Case-control study',
    ]),
    'answer'      => 'Before-and-after analysis',
    'explanation' => 'This method measures changes in crime metrics to assess program effectiveness.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'What is the primary goal of situational crime prevention strategies?',
    'choices'     => json_encode([
        'Reduce opportunities for crime',
        'Increase police numbers',
        'Rehabilitate offenders',
        'Provide social services',
    ]),
    'answer'      => 'Reduce opportunities for crime',
    'explanation' => 'Situational strategies focus on making crimes harder to commit or gain from.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which concept is central to the Routine Activities Theory of crime prevention?',
    'choices'     => json_encode([
        'Presence of a motivated offender, a suitable target, and absence of a capable guardian',
        'Social strain leads to crime',
        'Broken windows cause crime',
        'Neighborhood cohesion reduces crime',
    ]),
    'answer'      => 'Presence of a motivated offender, a suitable target, and absence of a capable guardian',
    'explanation' => 'Routine Activities Theory posits crime occurs when these three elements converge.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which technology uses closed-circuit cameras and monitors public areas to deter and detect crime?',
    'choices'     => json_encode([
        'CCTV system',
        'Automatic License Plate Recognition',
        'Body-worn cameras',
        'Drones',
    ]),
    'answer'      => 'CCTV system',
    'explanation' => 'CCTV provides real-time video surveillance to enhance detection and evidence collection.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which community-based approach to crime prevention emphasizes collaboration between police and local organizations?',
    'choices'     => json_encode([
        'Community policing',
        'Hotspot policing',
        'Zero tolerance policing',
        'Paramilitary policing',
    ]),
    'answer'      => 'Community policing',
    'explanation' => 'Community policing builds partnerships to identify and solve community problems collaboratively.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which prevention measure involves securing windows and doors to limit unauthorized entry?',
    'choices'     => json_encode([
        'Physical security measures',
        'Social programs',
        'Legal reforms',
        'Educational campaigns',
    ]),
    'answer'      => 'Physical security measures',
    'explanation' => 'Physical measures include locks, bars, and reinforced materials to prevent burglary.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 9,
    'question'    => 'Which evaluation design randomly allocates intervention and control groups to assess program impact?',
    'choices'     => json_encode([
        'Randomized controlled trial',
        'Before-and-after study',
        'Cross-sectional survey',
        'Case study',
    ]),
    'answer'      => 'Randomized controlled trial',
    'explanation' => 'RCTs provide rigorous evidence by minimizing biases through randomization.',
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

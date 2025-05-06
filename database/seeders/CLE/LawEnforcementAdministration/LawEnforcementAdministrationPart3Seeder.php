<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart3Seeder extends Seeder
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
    'part'        => 3,
    'question'    => 'What is the primary objective of police patrol operations?',
    'choices'     => json_encode([
        'Crime prevention through visible presence',
        'Investigation of all crimes',
        'Processing administrative forms',
        'Training new recruits',
    ]),
    'answer'      => 'Crime prevention through visible presence',
    'explanation' => 'A primary objective of patrol is to deter crime by maintaining a visible police presence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which patrol method involves officers walking assigned areas to engage with the community?',
    'choices'     => json_encode([
        'Foot patrol',
        'Vehicle patrol',
        'Motorcycle patrol',
        'Aerial patrol',
    ]),
    'answer'      => 'Foot patrol',
    'explanation' => 'Foot patrol allows officers to interact closely with residents and businesses in their beats.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What is an advantage of vehicle patrol over foot patrol?',
    'choices'     => json_encode([
        'Greater coverage area in less time',
        'Closer community interaction',
        'Easier response to community complaints',
        'Lower operational cost',
    ]),
    'answer'      => 'Greater coverage area in less time',
    'explanation' => 'Vehicle patrol enables officers to cover larger areas more quickly than foot patrol.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which patrol method is most effective for navigating congested urban areas quickly?',
    'choices'     => json_encode([
        'Motorcycle patrol',
        'Foot patrol',
        'Marine patrol',
        'Decoy patrol',
    ]),
    'answer'      => 'Motorcycle patrol',
    'explanation' => 'Motorcycle patrol units can circumvent traffic and reach locations faster in congested areas.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What is the key role of canine patrol units?',
    'choices'     => json_encode([
        'Tracking and detecting contraband',
        'Traffic direction',
        'Undercover surveillance',
        'Aerial reconnaissance',
    ]),
    'answer'      => 'Tracking and detecting contraband',
    'explanation' => 'Canine units are trained to track suspects and detect drugs, explosives, and other contraband.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which patrol method is most suitable for littoral and coastal security operations?',
    'choices'     => json_encode([
        'Marine patrol',
        'Aerial patrol',
        'Vehicle patrol',
        'Foot patrol',
    ]),
    'answer'      => 'Marine patrol',
    'explanation' => 'Marine patrol units operate on waterways to enforce maritime laws and ensure coastal security.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What advantage does aerial patrol provide over other methods?',
    'choices'     => json_encode([
        'Wide-area surveillance from above',
        'Enhanced community engagement',
        'Low operational cost',
        'Better undercover capacity',
    ]),
    'answer'      => 'Wide-area surveillance from above',
    'explanation' => 'Aerial patrol allows monitoring of large or inaccessible areas not easily reached by ground units.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which tactic involves officers wearing plain clothes to identify crimes in progress?',
    'choices'     => json_encode([
        'Decoy patrol',
        'Foot patrol',
        'Canine patrol',
        'Marine patrol',
    ]),
    'answer'      => 'Decoy patrol',
    'explanation' => 'Decoy patrol uses undercover officers to deter and apprehend offenders by blending into the public.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What is the focus of directed patrol tactics?',
    'choices'     => json_encode([
        'Targeting specific high-crime areas',
        'Random beat assignments',
        'Administrative tasks',
        'Traffic control only',
    ]),
    'answer'      => 'Targeting specific high-crime areas',
    'explanation' => 'Directed patrol concentrates resources where crime is most prevalent to increase effectiveness.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What does split‑force patrol involve?',
    'choices'     => json_encode([
        'Dividing units to handle calls and proactive patrol separately',
        'Two officers patrolling the same beat',
        'Overlapping shifts for coverage',
        'Combining foot and vehicle patrol simultaneously',
    ]),
    'answer'      => 'Dividing units to handle calls and proactive patrol separately',
    'explanation' => 'Split‑force separates reactive and proactive patrol tasks to optimize resource use.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which patrol model emphasizes problem identification and solving through collaboration?',
    'choices'     => json_encode([
        'Problem-Oriented Policing',
        'High visibility patrol',
        'Reactive patrol',
        'Decoy patrol',
    ]),
    'answer'      => 'Problem-Oriented Policing',
    'explanation' => 'Problem-Oriented Policing focuses on underlying conditions that give rise to incidents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What is a key principle of Community-Oriented Policing?',
    'choices'     => json_encode([
        'Partnerships with community members',
        'Strict enforcement only',
        'Isolated operations',
        'Minimal public interaction',
    ]),
    'answer'      => 'Partnerships with community members',
    'explanation' => 'Community policing builds trust through collaboration with residents and stakeholders.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which integrated patrol system combines traditional patrol with crime analysis to allocate resources?',
    'choices'     => json_encode([
        'CompStat',
        'Hotspot policing',
        'Decoy strategy',
        'Community beat',
    ]),
    'answer'      => 'CompStat',
    'explanation' => 'CompStat uses data-driven analysis to deploy patrol resources to high-impact areas.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'In patrol scheduling, what does the term "beat" refer to?',
    'choices'     => json_encode([
        'Assigned area of responsibility for an officer',
        'Type of patrol vehicle used',
        'Shift timing',
        'Number of officers on duty',
    ]),
    'answer'      => 'Assigned area of responsibility for an officer',
    'explanation' => 'A beat is the geographic area an officer patrols during a shift.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which communication system backbone is commonly used in patrol operations?',
    'choices'     => json_encode([
        'Two-way radio',
        'Public address systems',
        'Cellular messaging',
        'Paper dispatch',
    ]),
    'answer'      => 'Two-way radio',
    'explanation' => 'Two-way radios provide reliable voice communication between dispatch and patrol units.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What is the purpose of a radio repeater in police communications?',
    'choices'     => json_encode([
        'Extend radio range over large areas',
        'Encrypt radio transmissions',
        'Record radio traffic',
        'Translate languages',
    ]),
    'answer'      => 'Extend radio range over large areas',
    'explanation' => 'Repeaters amplify and retransmit signals to cover areas beyond direct radio reach.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which digital radio standard provides encrypted voice and data services for modern police forces?',
    'choices'     => json_encode([
        'TETRA',
        '2G GSM',
        'Analog FM',
        'HF radio',
    ]),
    'answer'      => 'TETRA',
    'explanation' => 'TETRA is a trunked digital radio standard offering encryption and data alongside voice.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'What is the primary function of a Mobile Data Terminal (MDT) in police vehicles?',
    'choices'     => json_encode([
        'Provide real-time dispatch and record lookup',
        'Monitor vehicle fuel usage',
        'Control siren and lights',
        'Encrypt radio communications',
    ]),
    'answer'      => 'Provide real-time dispatch and record lookup',
    'explanation' => 'MDTs allow officers to receive dispatches and access databases while on patrol.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which communication protocol standard ensures interoperability among different agency radio systems?',
    'choices'     => json_encode([
        'P25',
        'TETRA',
        'Analog FM',
        'DMR',
    ]),
    'answer'      => 'P25',
    'explanation' => 'Project 25 (P25) is a suite of standards enabling interoperability between agencies.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 3,
    'question'    => 'Which technology uses GPS and cellular networks to locate and track patrol units?',
    'choices'     => json_encode([
        'Automatic Vehicle Location (AVL)',
        'Closed-Circuit Television (CCTV)',
        'Automatic Number Plate Recognition (ANPR)',
        'Geographic Information System (GIS)',
    ]),
    'answer'      => 'Automatic Vehicle Location (AVL)',
    'explanation' => 'AVL uses GPS and networks to monitor the real-time location of vehicles.',
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

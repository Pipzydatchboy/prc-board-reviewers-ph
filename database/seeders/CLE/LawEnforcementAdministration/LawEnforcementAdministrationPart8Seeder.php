<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart8Seeder extends Seeder
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
    'part'        => 8,
    'question'    => 'What does CAD stand for in police communication systems?',
    'choices'     => json_encode([
        'Computer-Aided Dispatch',
        'Critical Access Database',
        'Channel Allocation Device',
        'Central Alarm Database',
    ]),
    'answer'      => 'Computer-Aided Dispatch',
    'explanation' => 'CAD refers to software that assists dispatchers in handling calls and deploying units.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which system describes a radio network that dynamically allocates channels among multiple users?',
    'choices'     => json_encode([
        'Trunked radio system',
        'Simplex radio system',
        'Peer-to-peer network',
        'Mesh radio network',
    ]),
    'answer'      => 'Trunked radio system',
    'explanation' => 'Trunked systems use a control channel to assign frequencies to users as needed.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'In digital radio, what is a talkgroup?',
    'choices'     => json_encode([
        'Logical group of users sharing a channel',
        'Physical antenna array',
        'Encryption key set',
        'Signal repeater configuration',
    ]),
    'answer'      => 'Logical group of users sharing a channel',
    'explanation' => 'Talkgroups allow segmented communication among subsets of radio users.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'What frequency band is typically used for police VHF radio communications?',
    'choices'     => json_encode([
        '136-174 MHz',
        '450-512 MHz',
        '806-869 MHz',
        '2.4-2.5 GHz',
    ]),
    'answer'      => '136-174 MHz',
    'explanation' => 'VHF band for public safety spans roughly 136 to 174 MHz.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which device extends radio range by receiving and retransmitting signals?',
    'choices'     => json_encode([
        'Repeater',
        'Combiner',
        'Duplexer',
        'Transceiver',
    ]),
    'answer'      => 'Repeater',
    'explanation' => 'Repeaters amplify and forward incoming signals to expand coverage area.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'In radio terminology, what does PTT stand for?',
    'choices'     => json_encode([
        'Push-To-Talk',
        'Point-To-Point',
        'Power-Transmit-Tune',
        'Packet-Tone-Transfer',
    ]),
    'answer'      => 'Push-To-Talk',
    'explanation' => 'PTT is the button used to start transmission on two-way radios.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which term describes a communication where transmission and reception cannot occur simultaneously?',
    'choices'     => json_encode([
        'Half-duplex',
        'Full-duplex',
        'Analog',
        'Digital',
    ]),
    'answer'      => 'Half-duplex',
    'explanation' => 'Half-duplex allows two-way communication but only one direction at a time.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'What is COMSEC in police communications?',
    'choices'     => json_encode([
        'Communications Security',
        'Command Section',
        'Combined Security',
        'Community Section',
    ]),
    'answer'      => 'Communications Security',
    'explanation' => 'COMSEC refers to measures to secure transmissions against interception.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which standard provides digital trunked radio services with encryption for public safety?',
    'choices'     => json_encode([
        'TETRA',
        'LTE',
        'GSM',
        'Wi-Fi',
    ]),
    'answer'      => 'TETRA',
    'explanation' => 'TETRA is a trunked digital radio standard offering secure voice and data.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'What technology uses GPS and network data to trace patrol vehicles in real time?',
    'choices'     => json_encode([
        'Automatic Vehicle Location',
        'Computer-Aided Dispatch',
        'Automatic Number Plate Recognition',
        'Closed-Circuit Television',
    ]),
    'answer'      => 'Automatic Vehicle Location',
    'explanation' => 'AVL tracks vehicle positions using GPS and transmits data to dispatch centers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which communication protocol is designed for interoperable public safety radio in North America?',
    'choices'     => json_encode([
        'Project 25 (P25)',
        'D-STAR',
        'DMR',
        'MOTOTRBO',
    ]),
    'answer'      => 'Project 25 (P25)',
    'explanation' => 'P25 standards ensure interoperability among agencies using digital radio.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'What is the function of a Mobile Data Terminal (MDT) in a patrol vehicle?',
    'choices'     => json_encode([
        'Real-time dispatch and database access',
        'Recording audio communications',
        'Remote door unlocking',
        'Vehicle diagnostics',
    ]),
    'answer'      => 'Real-time dispatch and database access',
    'explanation' => 'MDTs enable officers to receive calls and query records while in the field.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which term refers to the central center that manages emergency calls?',
    'choices'     => json_encode([
        'Public Safety Answering Point',
        'Police Operations Room',
        'Command and Control Center',
        'Dispatch Relay Station',
    ]),
    'answer'      => 'Public Safety Answering Point',
    'explanation' => 'PSAPs receive 911 calls and dispatch appropriate emergency services.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'What does GIS integration provide in patrol operations?',
    'choices'     => json_encode([
        'Mapping of incidents and unit locations',
        'Automated radio encryption',
        'Biometric verification',
        'Video analytics',
    ]),
    'answer'      => 'Mapping of incidents and unit locations',
    'explanation' => 'GIS displays spatial data, helping dispatchers and officers visualize incidents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which feature allows radios to operate on multiple frequency bands?',
    'choices'     => json_encode([
        'Dual-band capability',
        'Trunking',
        'Repeater chaining',
        'Modulation shifting',
    ]),
    'answer'      => 'Dual-band capability',
    'explanation' => 'Dual-band radios can switch between VHF and UHF bands.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which equipment mitigates signal reflections and ensures clearer radio reception?',
    'choices'     => json_encode([
        'Omni-directional antenna',
        'Directional antenna',
        'Diplexer',
        'Combiner',
    ]),
    'answer'      => 'Directional antenna',
    'explanation' => 'Directional antennas focus signals in one direction, improving clarity and range.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which system provides video monitoring integration with dispatch consoles?',
    'choices'     => json_encode([
        'CCTV integration',
        'AVL mapping',
        'MDT software',
        'PSAP array',
    ]),
    'answer'      => 'CCTV integration',
    'explanation' => 'CCTV feeds can be displayed on dispatch screens to enhance situational awareness.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which maintenance activity is essential for portable radio reliability?',
    'choices'     => json_encode([
        'Battery inspection and replacement',
        'Antenna repainting',
        'Speaker cleaning',
        'Microphone shielding',
    ]),
    'answer'      => 'Battery inspection and replacement',
    'explanation' => 'Ensuring batteries are charged and replaced prevents radio downtime.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which encryption standard is commonly used for securing digital radio channels?',
    'choices'     => json_encode([
        'AES-256',
        'DES',
        'WEP',
        'HTTP',
    ]),
    'answer'      => 'AES-256',
    'explanation' => 'AES-256 offers strong symmetric encryption suitable for radio communications.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 8,
    'question'    => 'Which concept ensures interoperability during multi-agency responses?',
    'choices'     => json_encode([
        'Common radio nomenclature and channels',
        'Separate encrypted talkgroups',
        'Dedicated mobile data networks',
        'Individual agency frequencies',
    ]),
    'answer'      => 'Common radio nomenclature and channels',
    'explanation' => 'Using agreed channels and codes enables different agencies to communicate effectively.',
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

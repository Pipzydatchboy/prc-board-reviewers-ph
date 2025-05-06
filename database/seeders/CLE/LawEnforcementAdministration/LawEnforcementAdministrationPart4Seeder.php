<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart4Seeder extends Seeder
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
    'part'        => 4,
    'question'    => 'Which phase of the intelligence cycle involves defining what information is needed to address a problem?',
    'choices'     => json_encode([
        'Direction',
        'Collection',
        'Analysis',
        'Dissemination',
    ]),
    'answer'      => 'Direction',
    'explanation' => 'Direction sets priorities and requirements for the intelligence process.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which method of intelligence collection involves embedded undercover operations?',
    'choices'     => json_encode([
        'Overt surveillance',
        'Covert operations',
        'Signal interception',
        'Document exploitation',
    ]),
    'answer'      => 'Covert operations',
    'explanation' => 'Covert operations conceal the identity and purpose of operatives.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'What is the primary purpose of counter-intelligence activities?',
    'choices'     => json_encode([
        'Prevent espionage and deception',
        'Collect enemy order of battle',
        'Assess crime trends',
        'Manage human sources',
    ]),
    'answer'      => 'Prevent espionage and deception',
    'explanation' => 'Counter-intelligence aims to thwart adversary intelligence gathering against one’s own agency.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which cryptographic technique scrambles plaintext using a fixed substitution scheme?',
    'choices'     => json_encode([
        'Caesar cipher',
        'AES encryption',
        'RSA algorithm',
        'One-time pad',
    ]),
    'answer'      => 'Caesar cipher',
    'explanation' => 'A Caesar cipher shifts letters by a fixed number in the alphabet.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'What is the final phase of the intelligence cycle where reports are delivered to decision makers?',
    'choices'     => json_encode([
        'Dissemination',
        'Analysis',
        'Collection',
        'Direction',
    ]),
    'answer'      => 'Dissemination',
    'explanation' => 'Dissemination distributes processed intelligence to users.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which type of surveillance uses electronic sensors to detect activity?',
    'choices'     => json_encode([
        'Technical surveillance',
        'Human intelligence',
        'Document exploitation',
        'Media monitoring',
    ]),
    'answer'      => 'Technical surveillance',
    'explanation' => 'Technical surveillance employs cameras, bugs, and sensors.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which security measure protects intelligence agents from compromise?',
    'choices'     => json_encode([
        'Counter-surveillance',
        'Open-source monitoring',
        'Data mining',
        'Profiling',
    ]),
    'answer'      => 'Counter-surveillance',
    'explanation' => 'Counter-surveillance detects and prevents adversary observation of agents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'What is the key output of the analysis phase?',
    'choices'     => json_encode([
        'Intelligence report',
        'Raw data collection',
        'Operational order',
        'Technical blueprint',
    ]),
    'answer'      => 'Intelligence report',
    'explanation' => 'Analysis transforms data into actionable intelligence reports.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which principle governs the lawful collection of foreign intelligence in the Philippines?',
    'choices'     => json_encode([
        'Respect for sovereignty',
        'Open-source priority',
        'Market-based collection',
        'Decentralization',
    ]),
    'answer'      => 'Respect for sovereignty',
    'explanation' => 'Foreign intelligence must comply with international law and Philippine jurisprudence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which is an example of open-source intelligence (OSINT)?',
    'choices'     => json_encode([
        'Newspaper articles',
        'Intercepted communications',
        'Undercover agent reports',
        'Encrypted messages',
    ]),
    'answer'      => 'Newspaper articles',
    'explanation' => 'OSINT uses publicly available information like media and online sources.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'What is a primary risk when using human intelligence (HUMINT)?',
    'choices'     => json_encode([
        'Agent compromise',
        'Circuit failure',
        'Data corruption',
        'Analysis bias',
    ]),
    'answer'      => 'Agent compromise',
    'explanation' => 'HUMINT carries the risk of operatives being detected or turned.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which tool supports secure dissemination of intelligence products?',
    'choices'     => json_encode([
        'Encrypted email',
        'Public website',
        'Unsecured fax',
        'Social media',
    ]),
    'answer'      => 'Encrypted email',
    'explanation' => 'Encrypted channels ensure confidentiality during dissemination.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'What activity best exemplifies counter-intelligence screening?',
    'choices'     => json_encode([
        'Background check on sensitive post applicants',
        'Traffic stop checkpoint',
        'K-9 explosive sweep',
        'Community meeting',
    ]),
    'answer'      => 'Background check on sensitive post applicants',
    'explanation' => 'Screening identifies insiders who might pose threats to information security.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which cryptography concept uses large prime numbers for secure key exchange?',
    'choices'     => json_encode([
        'Public key cryptography',
        'Block cipher',
        'Frequency analysis',
        'Steganography',
    ]),
    'answer'      => 'Public key cryptography',
    'explanation' => 'Algorithms like RSA use prime factorization for secure key exchange.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which concept refers to the unauthorized use of classified intelligence by foreign actors?',
    'choices'     => json_encode([
        'Espionage',
        'Sabotage',
        'Subversion',
        'Propaganda',
    ]),
    'answer'      => 'Espionage',
    'explanation' => 'Espionage is clandestine acquisition of sensitive information for an adversary.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'What is the purpose of an intelligence brief to executives?',
    'choices'     => json_encode([
        'Inform decision-making with actionable insights',
        'Archive raw data',
        'Train new analysts',
        'Coordinate patrol schedules',
    ]),
    'answer'      => 'Inform decision-making with actionable insights',
    'explanation' => 'Briefs synthesize findings into recommendations for leaders.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which agency is the national central office for INTERPOL in the Philippines?',
    'choices'     => json_encode([
        'PNP-INTERPOL National Central Bureau',
        'NBI Legal Affairs Division',
        'DILG Intelligence Unit',
        'AFP Intelligence Service',
    ]),
    'answer'      => 'PNP-INTERPOL National Central Bureau',
    'explanation' => 'The PNP hosts the Philippines\' INTERPOL liaison office.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18

$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which security measure thwarts foreign signals intelligence collection?',
    'choices'     => json_encode([
        'Communications encryption',
        'Traffic stops',
        'Evidence logging',
        'Chain-of-custody',
    ]),
    'answer'      => 'Communications encryption',
    'explanation' => 'Encrypting transmissions prevents interception and decryption by adversaries.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19

$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'What is the first step in conducting a covert surveillance operation?',
    'choices'     => json_encode([
        'Site survey and planning',
        'Execution of arrest',
        'Analysis of raw data',
        'Dissemination of report',
    ]),
    'answer'      => 'Site survey and planning',
    'explanation' => 'Surveying the target area ensures operational feasibility and concealment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 4,
    'question'    => 'Which action is essential for maintaining credibility of intelligence reports?',
    'choices'     => json_encode([
        'Source validation and corroboration',
        'Graphic enhancement',
        'Public dissemination',
        'Data encryption',
    ]),
    'answer'      => 'Source validation and corroboration',
    'explanation' => 'Verifying and cross-checking sources ensures accuracy and reliability.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

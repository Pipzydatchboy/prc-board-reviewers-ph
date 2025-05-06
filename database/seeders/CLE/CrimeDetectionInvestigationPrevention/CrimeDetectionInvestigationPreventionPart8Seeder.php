<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart8Seeder extends Seeder
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
    'part'        => 8,
    'question'    => 'Which offense under the Cybercrime Prevention Act (RA 10175) involves unauthorized access to a computer system?',
    'choices'     => json_encode([
        'Illegal access',
        'Data interference',
        'System interference',
        'Misuse of device',
    ]),
    'answer'      => 'Illegal access',
    'explanation' => 'Illegal access (Article 4) penalizes unauthorized intrusion into computer systems.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Under RA 10175, what is the term for the violation that alters or damages computer data or programs without authorization?',
    'choices'     => json_encode([
        'Data interference',
        'Illegal interception',
        'Cyber libel',
        'Electronic forgery',
    ]),
    'answer'      => 'Data interference',
    'explanation' => 'Data interference (Article 6) penalizes unauthorized alteration or deletion of data.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which RA 10175 provision penalizes the interception of non-public transmissions of computer data?',
    'choices'     => json_encode([
        'Illegal interception',
        'Misuse of device',
        'Cybersex',
        'Identity theft',
    ]),
    'answer'      => 'Illegal interception',
    'explanation' => 'Illegal interception (Article 5) covers wiretapping or eavesdropping on data transmissions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which offense under the Cybercrime Prevention Act involves impairing a system\'s functionality by inputting large amounts of data?',
    'choices'     => json_encode([
        'System interference',
        'Identity theft',
        'Cybersex',
        'Phishing',
    ]),
    'answer'      => 'System interference',
    'explanation' => 'System interference (Article 7) penalizes hindering the normal operations of computer systems.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Under RA 10175, which offense covers the unauthorized use or possession of devices for committing cybercrimes?',
    'choices'     => json_encode([
        'Misuse of device',
        'Data interference',
        'Espionage',
        'Harassment',
    ]),
    'answer'      => 'Misuse of device',
    'explanation' => 'Misuse of device (Article 8) penalizes use of tools to commit cyber offenses.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which Cybercrime Act provision addresses online libel by publishing defamatory statements via a computer system?',
    'choices'     => json_encode([
        'Cyber libel',
        'Forgery',
        'Spam',
        'Cyber squatting',
    ]),
    'answer'      => 'Cyber libel',
    'explanation' => 'Cyber libel (Article 4(c)(4)) extends traditional libel to online publications.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which RA 10175 offense prohibits the production or distribution of sexual content involving minors online?',
    'choices'     => json_encode([
        'Child pornography',
        'Cybersex',
        'Identity theft',
        'Scam',
    ]),
    'answer'      => 'Child pornography',
    'explanation' => 'Child pornography (Article 11) criminalizes online sexual content involving minors.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which offense under RA 10175 involves registering, trafficking, or using a domain name similar to an existing brand?',
    'choices'     => json_encode([
        'Cybersquatting',
        'Phishing',
        'Spam',
        'Scam',
    ]),
    'answer'      => 'Cybersquatting',
    'explanation' => 'Cybersquatting (Article 29) penalizes acquiring domain names to profit from established trademarks.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which principle of the Data Privacy Act (RA 10173) mandates collection of personal data only for specified, legitimate purposes?',
    'choices'     => json_encode([
        'Purpose limitation',
        'Transparency',
        'Accuracy',
        'Security',
    ]),
    'answer'      => 'Purpose limitation',
    'explanation' => 'Purpose limitation restricts data processing to declared, lawful objectives.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Under the Data Privacy Act, which data subject right allows an individual to view personal information collected about them?',
    'choices'     => json_encode([
        'Right to access',
        'Right to erasure',
        'Right to object',
        'Right to data portability',
    ]),
    'answer'      => 'Right to access',
    'explanation' => 'The right to access allows data subjects to obtain confirmation and view personal data held about them.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which provision requires organizations to notify the National Privacy Commission and affected individuals of a data breach within 72 hours?',
    'choices'     => json_encode([
        'RA 10173 Data Breach Notification',
        'RA 10175 Cybercrime Act',
        'RA 9165 Drug Act',
        'RA 8749 Clean Air Act',
    ]),
    'answer'      => 'RA 10173 Data Breach Notification',
    'explanation' => 'The Data Privacy Act mandates breach notification within 72 hours under NPC guidelines.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which agency enforces compliance with the Data Privacy Act in the Philippines?',
    'choices'     => json_encode([
        'National Privacy Commission',
        'Philippine National Police',
        'Department of Justice',
        'Department of Information and Communications Technology',
    ]),
    'answer'      => 'National Privacy Commission',
    'explanation' => 'The NPC monitors and enforces the Data Privacy Act and issues implementing rules.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which Republic Act provides for the prevention, control, and abatement of air pollution?',
    'choices'     => json_encode([
        'RA 8749 Clean Air Act',
        'RA 9275 Clean Water Act',
        'RA 9147 Wildlife Act',
        'RA 8550 Fisheries Code',
    ]),
    'answer'      => 'RA 8749 Clean Air Act',
    'explanation' => 'RA 8749 addresses air quality standards, emissions monitoring, and pollution control.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Under the Clean Water Act (RA 9275), what is required before discharging wastewater into Philippine waters?',
    'choices'     => json_encode([
        'Wastewater discharge permit',
        'Environmental compliance certificate',
        'Building permit',
        'Health inspection certificate',
    ]),
    'answer'      => 'Wastewater discharge permit',
    'explanation' => 'RA 9275 mandates permits for point-source discharges to protect water quality.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which law protects endangered species and regulates wildlife conservation in the Philippines?',
    'choices'     => json_encode([
        'RA 9147 Wildlife Act',
        'RA 8749 Clean Air Act',
        'RA 9275 Clean Water Act',
        'RA 8550 Fisheries Code',
    ]),
    'answer'      => 'RA 9147 Wildlife Act',
    'explanation' => 'RA 9147 prohibits hunting, trading, and possession of protected wildlife species.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Under the Fisheries Code (RA 8550), which practice is considered destructive fishing?',
    'choices'     => json_encode([
        'Blast fishing',
        'Gill netting',
        'Longlining',
        'Fish culture',
    ]),
    'answer'      => 'Blast fishing',
    'explanation' => 'RA 8550 bans blast fishing as it destroys marine habitats and fish stocks.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which tool is essential for preserving the integrity of a hard drive during digital forensics?',
    'choices'     => json_encode([
        'Write-blocker',
        'Disk defragmenter',
        'Antivirus scanner',
        'Disk cleaner',
    ]),
    'answer'      => 'Write-blocker',
    'explanation' => 'Write-blockers prevent any data from being written to the drive, maintaining original evidence.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which method is used to verify the integrity of digital evidence files?',
    'choices'     => json_encode([
        'Hash value comparison',
        'File size check',
        'Filename inspection',
        'Date modified check',
    ]),
    'answer'      => 'Hash value comparison',
    'explanation' => 'Generating MD5 or SHA hashes confirms that files remain unchanged.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which RA provides the framework for data privacy impact assessment before new data processing systems are deployed?',
    'choices'     => json_encode([
        'RA 10173 Data Privacy Act',
        'RA 10175 Cybercrime Act',
        'RA 8749 Clean Air Act',
        'RA 9275 Clean Water Act',
    ]),
    'answer'      => 'RA 10173 Data Privacy Act',
    'explanation' => 'The Data Privacy Act requires impact assessments to identify and mitigate privacy risks.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 8,
    'question'    => 'Which measure should be taken when seizing a suspect’s mobile phone to prevent remote wiping?',
    'choices'     => json_encode([
        'Place in Faraday bag',
        'Turn off airplane mode',
        'Remove SIM card only',
        'Leave device powered on',
    ]),
    'answer'      => 'Place in Faraday bag',
    'explanation' => 'A Faraday bag blocks network signals, preventing remote commands or data wiping.',
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

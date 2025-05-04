<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

       // Part 3 – Introduction to ICT – Question 1
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which key combination is used to copy selected text in most word processors?',
           'choices'      => json_encode([
               'Ctrl+C',
               'Ctrl+V',
               'Ctrl+X',
               'Ctrl+Z',
           ]),
           'answer'       => 'Ctrl+C',
           'explanation'  => 'Ctrl+C copies the highlighted selection to the clipboard.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 2
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'What does CPU stand for in computer hardware?',
           'choices'      => json_encode([
               'Central Processing Unit',
               'Computer Personal Unit',
               'Central Performance Unit',
               'Core Processing Unit',
           ]),
           'answer'       => 'Central Processing Unit',
           'explanation'  => 'The CPU executes instructions and processes data in computers.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 3
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which component provides temporary storage for data and instructions currently in use by the CPU?',
           'choices'      => json_encode([
               'Random Access Memory (RAM)',
               'Read-Only Memory (ROM)',
               'Hard Disk Drive (HDD)',
               'Graphics Processing Unit (GPU)',
           ]),
           'answer'       => 'Random Access Memory (RAM)',
           'explanation'  => 'RAM stores data and instructions that the CPU needs in real time.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 4
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which device is used to input handwritten or drawn data into a computer?',
           'choices'      => json_encode([
               'Graphics tablet',
               'Scanner',
               'Printer',
               'Monitor',
           ]),
           'answer'       => 'Graphics tablet',
           'explanation'  => 'A graphics tablet allows drawing or handwriting input via a stylus.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 5
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'What file extension is typically associated with Microsoft Word documents?',
           'choices'      => json_encode([
               '.docx',
               '.xlsx',
               '.pptx',
               '.pdf',
           ]),
           'answer'       => '.docx',
           'explanation'  => 'Microsoft Word uses the .docx extension for documents in modern versions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 6
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which software manages computer hardware and provides services for applications?',
           'choices'      => json_encode([
               'Operating System',
               'Database',
               'Spreadsheet',
               'Browser',
           ]),
           'answer'       => 'Operating System',
           'explanation'  => 'The operating system controls hardware and runs application software.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 7
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'What does URL stand for in internet terminology?',
           'choices'      => json_encode([
               'Uniform Resource Locator',
               'User Resource Link',
               'Uniform Reference Language',
               'Universal Resource Link',
           ]),
           'answer'       => 'Uniform Resource Locator',
           'explanation'  => 'A URL specifies the address of resources on the Internet.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 8
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which protocol is used to securely transmit web pages over HTTPS?',
           'choices'      => json_encode([
               'TLS/SSL',
               'FTP',
               'SMTP',
               'TCP',
           ]),
           'answer'       => 'TLS/SSL',
           'explanation'  => 'TLS/SSL encrypts data between web servers and browsers over HTTPS.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 9
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which device connects multiple computers on a local network and directs data packets?',
           'choices'      => json_encode([
               'Router',
               'Modem',
               'Switch',
               'Repeater',
           ]),
           'answer'       => 'Router',
           'explanation'  => 'Routers forward data packets between different networks and direct traffic.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 10
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'What is phishing in cybersecurity?',
           'choices'      => json_encode([
               'Fraudulent attempt to obtain sensitive information',
               'Scanning network ports',
               'Malware installation',
               'Denial of service attack',
           ]),
           'answer'       => 'Fraudulent attempt to obtain sensitive information',
           'explanation'  => 'Phishing uses deceptive emails or websites to steal credentials.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 11
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which application is used for creating and editing presentations?',
           'choices'      => json_encode([
               'Microsoft PowerPoint',
               'Microsoft Word',
               'Microsoft Excel',
               'Microsoft Outlook',
           ]),
           'answer'       => 'Microsoft PowerPoint',
           'explanation'  => 'PowerPoint is designed for creating slideshow presentations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 12
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which menu in most software programs allows you to save a document under a new name?',
           'choices'      => json_encode([
               'Save As',
               'Save',
               'Open',
               'Export',
           ]),
           'answer'       => 'Save As',
           'explanation'  => '‘Save As’ prompts for a new filename or location when saving a file.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 13
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'In spreadsheet software, what symbol is used to start a formula?',
           'choices'      => json_encode([
               '=',
               '+',
               '-',
               '$',
           ]),
           'answer'       => '=',
           'explanation'  => 'Formulas in spreadsheets begin with the equals sign (=).',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 14
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which file format is typically used for compressed archives?',
           'choices'      => json_encode([
               '.zip',
               '.txt',
               '.exe',
               '.jpg',
           ]),
           'answer'       => '.zip',
           'explanation'  => 'ZIP files bundle and compress multiple files in a single archive.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 15
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which term describes unauthorized access to or use of computer data and systems?',
           'choices'      => json_encode([
               'Hacking',
               'Phishing',
               'Caching',
               'Spoofing',
           ]),
           'answer'       => 'Hacking',
           'explanation'  => 'Hacking refers to exploiting vulnerabilities to gain unauthorized system access.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 16
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which device converts digital signals to analog for transmission over telephone lines?',
           'choices'      => json_encode([
               'Modem',
               'Router',
               'Switch',
               'Bridge',
           ]),
           'answer'       => 'Modem',
           'explanation'  => 'Modems modulate and demodulate signals for data transmission over analog networks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 17
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'What is the primary advantage of cloud computing services?',
           'choices'      => json_encode([
               'Scalability and on-demand resources',
               'Local hardware control',
               'One-time costs',
               'Manual software updates',
           ]),
           'answer'       => 'Scalability and on-demand resources',
           'explanation'  => 'Cloud services allow dynamic resource allocation based on user needs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 18
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which social media platform is primarily used for professional networking?',
           'choices'      => json_encode([
               'LinkedIn',
               'Facebook',
               'Instagram',
               'Snapchat',
           ]),
           'answer'       => 'LinkedIn',
           'explanation'  => 'LinkedIn focuses on career and business networking.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 19
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which protocol is used for sending email between servers?',
           'choices'      => json_encode([
               'SMTP',
               'IMAP',
               'HTTP',
               'FTP',
           ]),
           'answer'       => 'SMTP',
           'explanation'  => 'SMTP is the Simple Mail Transfer Protocol for sending email messages.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Introduction to ICT – Question 20
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 3,
           'question'     => 'Which measure enhances online security by using two authentication factors?',
           'choices'      => json_encode([
               'Two-factor authentication (2FA)',
               'Password complexity',
               'Firewall installation',
               'Antivirus software',
           ]),
           'answer'       => 'Two-factor authentication (2FA)',
           'explanation'  => '2FA requires two methods of verifying user identity for added security.',
           'created_at'   => $now,
           'updated_at'   => $now,
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

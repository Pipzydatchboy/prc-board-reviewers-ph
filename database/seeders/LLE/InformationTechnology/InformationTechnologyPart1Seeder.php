<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart1Seeder extends Seeder
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

       $batch = [
        // 1
        ['subject_id'=>55,'part'=>1,'question'=>'Which layer of the OSI model is responsible for data encryption and compression?','choices'=>json_encode(['Presentation','Application','Session','Data Link']),'answer'=>'Presentation','explanation'=>'The Presentation layer handles data formatting, encryption, and compression.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>1,'question'=>'What does DNS stand for in networking?','choices'=>json_encode(['Domain Name System','Dynamic Network Service','Data Node Switch','Digital Name Service']),'answer'=>'Domain Name System','explanation'=>'DNS translates human-readable domain names into IP addresses.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>1,'question'=>'Which device forwards data packets based on MAC addresses?','choices'=>json_encode(['Switch','Router','Bridge','Modem']),'answer'=>'Switch','explanation'=>'Network switches operate at Layer 2, forwarding frames based on MAC addresses.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>1,'question'=>'What is the primary function of a firewall?','choices'=>json_encode(['Filter network traffic','Store user credentials','Manage domain names','Provide DHCP services']),'answer'=>'Filter network traffic','explanation'=>'Firewalls inspect and filter incoming and outgoing network traffic based on security rules.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>1,'question'=>'Which protocol is used to securely browse the web?','choices'=>json_encode(['HTTPS','HTTP','FTP','SMTP']),'answer'=>'HTTPS','explanation'=>'HTTPS uses TLS/SSL to encrypt HTTP traffic for secure web browsing.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>1,'question'=>'In SQL, which command is used to remove all records from a table without deleting the table structure?','choices'=>json_encode(['TRUNCATE','DELETE','DROP','REMOVE']),'answer'=>'TRUNCATE','explanation'=>'TRUNCATE TABLE deletes all rows efficiently while preserving table structure.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>1,'question'=>'What is RAID 1 primarily used for?','choices'=>json_encode(['Data mirroring','Striping','Parity','Caching']),'answer'=>'Data mirroring','explanation'=>'RAID 1 duplicates data across drives to provide redundancy.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>1,'question'=>'Which cloud service model provides hardware and infrastructure over the internet?','choices'=>json_encode(['IaaS','PaaS','SaaS','DaaS']),'answer'=>'IaaS','explanation'=>'Infrastructure as a Service (IaaS) offers virtualized computing resources online.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>1,'question'=>'What does HTTP status code 404 indicate?','choices'=>json_encode(['Not Found','OK','Forbidden','Internal Server Error']),'answer'=>'Not Found','explanation'=>'404 means the server cannot find the requested resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>1,'question'=>'Which addressing type supports multiple networks within the same broadcast domain?','choices'=>json_encode(['VLAN','LAN','WAN','PAN']),'answer'=>'VLAN','explanation'=>'Virtual LANs segment a physical network into multiple broadcast domains.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>1,'question'=>'What is the role of DHCP in a network?','choices'=>json_encode(['Assign IP addresses dynamically','Encrypt data','Manage DNS records','Filter packets']),'answer'=>'Assign IP addresses dynamically','explanation'=>'DHCP automatically assigns IP addresses and network parameters to clients.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>1,'question'=>'Which type of attack involves overwhelming a system with traffic?','choices'=>json_encode(['Denial of Service','Phishing','Man-in-the-Middle','SQL Injection']),'answer'=>'Denial of Service','explanation'=>'DoS attacks flood a target with traffic, making services unavailable.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>1,'question'=>'In HTML, which tag is used to create a hyperlink?','choices'=>json_encode(['<a>','<link>','<href>','<url>']),'answer'=>'<a>','explanation'=>'The <a> tag defines a hyperlink and uses the href attribute for the URL.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>1,'question'=>'Which programming paradigm focuses on objects and their interactions?','choices'=>json_encode(['Object-Oriented','Procedural','Functional','Logic']),'answer'=>'Object-Oriented','explanation'=>'OOP organizes code into objects that encapsulate data and behaviors.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>1,'question'=>'What does VPN stand for?','choices'=>json_encode(['Virtual Private Network','Verified Public Node','Virtual Proxy Network','Variable Packet Node']),'answer'=>'Virtual Private Network','explanation'=>'VPN creates a secure tunnel over the internet for private network access.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>1,'question'=>'Which protocol is used to send email between mail servers?','choices'=>json_encode(['SMTP','POP3','IMAP','HTTP']),'answer'=>'SMTP','explanation'=>'Simple Mail Transfer Protocol (SMTP) handles sending email between servers.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>1,'question'=>'In database normalization, which normal form eliminates transitive dependencies?','choices'=>json_encode(['3NF','1NF','2NF','BCNF']),'answer'=>'3NF','explanation'=>'Third Normal Form removes transitive dependencies ensuring non-key attributes depend only on primary key.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>1,'question'=>'Which tool is commonly used for version control?','choices'=>json_encode(['Git','SVN','FTP','SSH']),'answer'=>'Git','explanation'=>'Git is a distributed version control system widely used for source code management.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>1,'question'=>'What is two-factor authentication?','choices'=>json_encode(['A security process requiring two different forms of identification','Using two passwords','Encrypting data twice','Logging in from two devices']),'answer'=>'A security process requiring two different forms of identification','explanation'=>'2FA enhances security by combining something you know with something you have or are.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>1,'question'=>'Which DNS record type maps a domain name to an IP address?','choices'=>json_encode(['A','MX','CNAME','TXT']),'answer'=>'A','explanation'=>'An A record translates a hostname to an IPv4 address.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

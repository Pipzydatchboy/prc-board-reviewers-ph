<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart2Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>2,'question'=>'Which protocol provides encrypted remote shell access?','choices'=>json_encode(['SSH','Telnet','RDP','FTP']),'answer'=>'SSH','explanation'=>'Secure Shell (SSH) encrypts terminal sessions for secure remote login.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>2,'question'=>'In computer hardware, what does GPU stand for?','choices'=>json_encode(['Graphics Processing Unit','General Purpose Unit','Global Processing Utility','Graphical Performance Unit']),'answer'=>'Graphics Processing Unit','explanation'=>'GPUs accelerate rendering of images and graphics computations.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>2,'question'=>'Which malware disguises itself as legitimate software?','choices'=>json_encode(['Trojan','Worm','Virus','Spyware']),'answer'=>'Trojan','explanation'=>'Trojans appear harmless but execute malicious payloads when run.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>2,'question'=>'What is the maximum cable length for a standard Cat5e Ethernet cable?','choices'=>json_encode(['100 meters','10 meters','500 meters','1000 meters']),'answer'=>'100 meters','explanation'=>'Cat5e specifications limit runs to 100 meters to maintain signal integrity.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>2,'question'=>'Which cloud deployment model uses resources exclusively for one organization?','choices'=>json_encode(['Private cloud','Public cloud','Hybrid cloud','Community cloud']),'answer'=>'Private cloud','explanation'=>'Private clouds are dedicated to a single organization, offering greater control.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>2,'question'=>'Which type of memory is non-volatile and retains data without power?','choices'=>json_encode(['ROM','RAM','Cache','Registers']),'answer'=>'ROM','explanation'=>'Read-Only Memory (ROM) stores firmware and remains intact when powered off.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>2,'question'=>'What is the role of a proxy server?','choices'=>json_encode(['Intermediary for client requests','Primary DNS resolver','Hardware firewall','Network switch']),'answer'=>'Intermediary for client requests','explanation'=>'Proxies forward client requests to servers and can cache or filter traffic.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>2,'question'=>'In Agile methodology, what does "Sprint" refer to?','choices'=>json_encode(['Short development iteration','Budget cycle','Testing phase','Deployment stage']),'answer'=>'Short development iteration','explanation'=>'Sprints are fixed-length periods to complete specific work in Agile.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>2,'question'=>'Which utility detects and restores corrupted system files in Windows?','choices'=>json_encode(['SFC','CHKDSK','DISKPART','MSCONFIG']),'answer'=>'SFC','explanation'=>'System File Checker (SFC) scans and repairs protected system files.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>2,'question'=>'Which language is primarily used for scripting in web browsers?','choices'=>json_encode(['JavaScript','Python','Java','C#']),'answer'=>'JavaScript','explanation'=>'JavaScript runs client-side logic and interactivity in web pages.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>2,'question'=>'What is virtualization?','choices'=>json_encode(['Creating multiple virtual machines on one physical host','Encrypting data at rest','Compressing files','Partitioning a hard drive']),'answer'=>'Creating multiple virtual machines on one physical host','explanation'=>'Virtualization abstracts physical hardware to run multiple OS instances.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>2,'question'=>'Which SQL clause sorts query results?','choices'=>json_encode(['ORDER BY','GROUP BY','WHERE','HAVING']),'answer'=>'ORDER BY','explanation'=>'ORDER BY specifies the sort order of the returned rows in SQL.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>2,'question'=>'Which HTTP method is idempotent?','choices'=>json_encode(['GET','POST','DELETE','OPTIONS']),'answer'=>'GET','explanation'=>'GET is idempotent because it can be called multiple times without changing server state.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>2,'question'=>'Which topology uses a central hub where all nodes connect?','choices'=>json_encode(['Star','Ring','Bus','Mesh']),'answer'=>'Star','explanation'=>'In a star topology, each node connects directly to a hub or switch.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>2,'question'=>'What is checksum used for?','choices'=>json_encode(['Verify data integrity','Encrypt data','Scale network traffic','Balance load']),'answer'=>'Verify data integrity','explanation'=>'Checksums detect errors by comparing computed values before and after transmission.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>2,'question'=>'Which Windows feature allows rollback to previous system state?','choices'=>json_encode(['System Restore','Safe Mode','Control Panel','Task Manager']),'answer'=>'System Restore','explanation'=>'System Restore creates restore points to revert system files and settings.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>2,'question'=>'Which command-line tool displays active network connections on Windows?','choices'=>json_encode(['netstat','ipconfig','ping','tracert']),'answer'=>'netstat','explanation'=>'netstat shows current connections, ports, and protocol statistics.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>2,'question'=>'What is a DMZ in network security used for?','choices'=>json_encode(['Isolating public-facing servers','Encrypting data','Managing user authentication','Storing logs']),'answer'=>'Isolating public-facing servers','explanation'=>'A DMZ (Demilitarized Zone) hosts servers accessible from the internet while protecting the internal network.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>2,'question'=>'Which OS is open-source and Unix-like?','choices'=>json_encode(['Linux','Windows','macOS','DOS']),'answer'=>'Linux','explanation'=>'Linux is a free, open-source OS with Unix-like architecture.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>2,'question'=>'What does SSL/TLS certificate authenticate?','choices'=>json_encode(['Server identity','User credentials','Network topology','Database connection']),'answer'=>'Server identity','explanation'=>'Certificates verify a server’s authenticity and enable encrypted connections.', 'created_at'=>$now,'updated_at'=>$now],
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

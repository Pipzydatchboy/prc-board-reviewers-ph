<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart5Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>5,'question'=>'Which authentication protocol uses tickets to allow nodes to prove their identity?','choices'=>json_encode(['Kerberos','OAuth','SAML','RADIUS']),'answer'=>'Kerberos','explanation'=>'Kerberos issues time-stamped tickets to authenticate users and services.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>5,'question'=>'In CSS, which property controls the space between lines of text?','choices'=>json_encode(['line-height','letter-spacing','word-spacing','text-indent']),'answer'=>'line-height','explanation'=>'The line-height property sets the height of lines in text.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>5,'question'=>'Which Windows PowerShell cmdlet retrieves event log entries?','choices'=>json_encode(['Get-EventLog','Get-Process','Get-Service','Get-Item']),'answer'=>'Get-EventLog','explanation'=>'Get-EventLog reads entries from Windows event logs.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>5,'question'=>'Which sorting algorithm has average-case time complexity of O(n log n)?','choices'=>json_encode(['Merge Sort','Bubble Sort','Insertion Sort','Selection Sort']),'answer'=>'Merge Sort','explanation'=>'Merge Sort divides and conquers to achieve O(n log n) complexity.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>5,'question'=>'What is the default schema name in PostgreSQL?','choices'=>json_encode(['public','default','pg_catalog','information_schema']),'answer'=>'public','explanation'=>'PostgreSQL uses "public" as the default schema for objects.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>5,'question'=>'Which command in Git reverts a commit by creating a new commit?','choices'=>json_encode(['git revert','git reset','git checkout','git rm']),'answer'=>'git revert','explanation'=>'git revert undoes changes by making a new commit, preserving history.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>5,'question'=>'Which HTTP status code indicates unauthorized access requiring authentication?','choices'=>json_encode(['401','403','404','400']),'answer'=>'401','explanation'=>'401 Unauthorized indicates authentication is required and has failed or not been provided.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>5,'question'=>'What is the purpose of DNS TTL?','choices'=>json_encode(['Control DNS record caching duration','Encrypt DNS responses','Validate domain ownership','Balance DNS load']),'answer'=>'Control DNS record caching duration','explanation'=>'TTL defines how long a DNS record is cached by DNS resolvers.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>5,'question'=>'Which tool is used for infrastructure as code with AWS?','choices'=>json_encode(['CloudFormation','Terraform','Ansible','Chef']),'answer'=>'CloudFormation','explanation'=>'CloudFormation templates define and provision AWS infrastructure.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>5,'question'=>'In JavaScript, which keyword is used to declare a constant?','choices'=>json_encode(['const','let','var','static']),'answer'=>'const','explanation'=>'const declares block-scoped constants whose values cannot be changed.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>5,'question'=>'Which scheduling algorithm gives each process a slice of CPU time in rotation?','choices'=>json_encode(['Round Robin','First-Come, First-Served','Shortest Job Next','Priority Scheduling']),'answer'=>'Round Robin','explanation'=>'Round Robin assigns time slices in equal portions and in circular order.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>5,'question'=>'Which protocol is used for email retrieval with folders support?','choices'=>json_encode(['IMAP','POP3','SMTP','MIME']),'answer'=>'IMAP','explanation'=>'IMAP supports folders, server-side message management, and multiple device sync.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>5,'question'=>'What is the function of a load balancer\'s health check?','choices'=>json_encode(['Monitor server health and route traffic accordingly','Encrypt data between nodes','Serve as DNS resolver','Manage firewall rules']),'answer'=>'Monitor server health and route traffic accordingly','explanation'=>'Health checks ensure traffic is sent only to healthy backend servers.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>5,'question'=>'Which AWS service provides object storage?','choices'=>json_encode(['S3','EBS','EC2','RDS']),'answer'=>'S3','explanation'=>'Amazon S3 offers scalable object storage for data and backups.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>5,'question'=>'In Python, which data type is immutable?','choices'=>json_encode(['tuple','list','dict','set']),'answer'=>'tuple','explanation'=>'Tuples cannot be changed after creation, unlike lists or dicts.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>5,'question'=>'Which command lists all Docker containers?','choices'=>json_encode(['docker ps -a','docker run','docker images','docker rm']),'answer'=>'docker ps -a','explanation'=>'docker ps -a shows all containers, including stopped ones.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>5,'question'=>'What is the purpose of OAuth?','choices'=>json_encode(['Authorize third-party applications without sharing passwords','Encrypt web traffic','Monitor network usage','Manage DNS records']),'answer'=>'Authorize third-party applications without sharing passwords','explanation'=>'OAuth provides token-based authorization for third-party apps.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>5,'question'=>'Which LINQ method filters collections in C#?','choices'=>json_encode(['Where','Select','OrderBy','Join']),'answer'=>'Where','explanation'=>'Where applies a predicate to filter elements in a collection.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>5,'question'=>'Which Windows utility manages disk partitions?','choices'=>json_encode(['Disk Management','Task Manager','Event Viewer','Registry Editor']),'answer'=>'Disk Management','explanation'=>'Disk Management creates, deletes, and formats partitions.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>5,'question'=>'Which technology allows devices to connect and communicate over short distances?','choices'=>json_encode(['Bluetooth','Wi-Fi','Ethernet','NFC']),'answer'=>'Bluetooth','explanation'=>'Bluetooth enables short-range wireless communication between devices.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

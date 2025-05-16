<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart10Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>10,'question'=>'Which protocol is used to map network drives in Windows?','choices'=>json_encode(['WebDAV','SMB','NFS','FTP']),'answer'=>'WebDAV','explanation'=>'WebDAV extends HTTP to allow clients to perform remote Web content authoring operations.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>10,'question'=>'What does SSL/TLS cipher suite specify?','choices'=>json_encode(['Algorithms for key exchange, encryption, and hashing','Network ports','Server names','Client types']),'answer'=>'Algorithms for key exchange, encryption, and hashing','explanation'=>'Cipher suites define cryptographic algorithms used to secure connections.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>10,'question'=>'Which Linux init system replaced SysV init in many distributions?','choices'=>json_encode(['systemd','upstart','OpenRC','runit']),'answer'=>'systemd','explanation'=>'systemd is a modern init system adopted by many Linux distributions.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>10,'question'=>'Which HTTP header instructs browsers to use only HTTPS?','choices'=>json_encode(['Strict-Transport-Security','X-Frame-Options','Content-Security-Policy','Refresh']),'answer'=>'Strict-Transport-Security','explanation'=>'HSTS header specifies that browsers should only use secure connections for the domain.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>10,'question'=>'Which technology allows host and client to share memory?','choices'=>json_encode(['Shared memory in IPC','TCP','UDP','HTTP']),'answer'=>'Shared memory in IPC','explanation'=>'Inter-process communication shared memory permits processes to access common memory.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>10,'question'=>'Which SQL construct combines rows from two tables based on a related column?','choices'=>json_encode(['JOIN','UNION','LIKE','GROUP BY']),'answer'=>'JOIN','explanation'=>'JOIN operations combine columns from related tables in relational databases.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>10,'question'=>'Which command checks and repairs Linux filesystems?','choices'=>json_encode(['fsck','chkdsk','diskpart','mkdir']),'answer'=>'fsck','explanation'=>'fsck scans filesystems for errors and attempts to repair them.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>10,'question'=>'Which web server uses event-driven architecture for high concurrency?','choices'=>json_encode(['Nginx','Apache','IIS','Tomcat']),'answer'=>'Nginx','explanation'=>'Nginx uses an event-driven, asynchronous architecture to handle many connections.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>10,'question'=>'What does OAuth 2.0 protocol provide?','choices'=>json_encode(['Authorization','Authentication','Encryption','Data storage']),'answer'=>'Authorization','explanation'=>'OAuth 2.0 delegates authorization to third-party applications without exposing credentials.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>10,'question'=>'Which IPv6 address type is not routable beyond a single network segment?','choices'=>json_encode(['Link-local','Global unicast','Unique local','Multicast']),'answer'=>'Link-local','explanation'=>'Link-local addresses (fe80::/10) are valid only on the local network segment.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>10,'question'=>'Which Linux tool monitors real-time disk I/O statistics?','choices'=>json_encode(['iostat','top','vmstat','netstat']),'answer'=>'iostat','explanation'=>'iostat reports CPU and I/O statistics for devices and partitions.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>10,'question'=>'Which HTTP status code indicates the request has been accepted but not yet processed?','choices'=>json_encode(['202','200','404','500']),'answer'=>'202','explanation'=>'202 Accepted means the request is valid but asynchronous processing continues.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>10,'question'=>'Which database lock type allows multiple concurrent readers but no writers?','choices'=>json_encode(['Shared lock','Exclusive lock','Update lock','Intent lock']),'answer'=>'Shared lock','explanation'=>'Shared locks permit multiple transactions to read data but block modifications.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>10,'question'=>'Which command-line tool downloads files over HTTP and FTP?','choices'=>json_encode(['wget','curl','scp','ftp']),'answer'=>'wget','explanation'=>'wget retrieves files from web servers via HTTP, HTTPS, and FTP.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>10,'question'=>'Which cloud service automates container orchestration?','choices'=>json_encode(['EKS','EC2','Lambda','S3']),'answer'=>'EKS','explanation'=>'Amazon EKS is a managed Kubernetes service for container orchestration.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>10,'question'=>'Which mechanism secures JSON Web Tokens (JWT)?','choices'=>json_encode(['Signing and encryption','Compression','Base64 encoding','Hashing only']),'answer'=>'Signing and encryption','explanation'=>'JWTs can be signed (JWS) and optionally encrypted (JWE) to ensure integrity and confidentiality.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>10,'question'=>'Which HTTP header can mitigate Cross-Site Scripting (XSS)?','choices'=>json_encode(['Content-Security-Policy','Server','Date','Connection']),'answer'=>'Content-Security-Policy','explanation'=>'CSP restricts sources for scripts and resources to prevent XSS attacks.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>10,'question'=>'Which protocol uses port 3389 for remote desktop?','choices'=>json_encode(['RDP','SSH','VNC','Telnet']),'answer'=>'RDP','explanation'=>'Remote Desktop Protocol uses TCP port 3389 for Windows remote control.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>10,'question'=>'Which tool provides real-time log aggregation and search?','choices'=>json_encode(['ELK Stack','Nagios','Zabbix','Prometheus']),'answer'=>'ELK Stack','explanation'=>'Elasticsearch, Logstash, and Kibana collect, index, and visualize logs.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>10,'question'=>'Which algorithm does Secure Shell (SSH) use for key exchange by default?','choices'=>json_encode(['ECDH','DH','RSA','AES']),'answer'=>'ECDH','explanation'=>'Elliptic Curve Diffie-Hellman (ECDH) is common for SSH key exchange.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

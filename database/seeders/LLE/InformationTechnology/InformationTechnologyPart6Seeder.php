<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart6Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>6,'question'=>'Which port does DNS use for queries over UDP?','choices'=>json_encode(['53','80','443','25']),'answer'=>'53','explanation'=>'DNS uses UDP port 53 for standard name resolution queries.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>6,'question'=>'What is the primary purpose of a reverse proxy?','choices'=>json_encode(['Distribute load and hide internal servers','Encrypt data at rest','Manage DNS records','Act as a mail server']),'answer'=>'Distribute load and hide internal servers','explanation'=>'Reverse proxies load-balance requests and mask internal infrastructure.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>6,'question'=>'Which RAID level provides fault tolerance with dedicated parity drive?','choices'=>json_encode(['RAID 3','RAID 0','RAID 1','RAID 5']),'answer'=>'RAID 3','explanation'=>'RAID 3 uses byte-level striping with a dedicated parity disk for error recovery.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>6,'question'=>'Which tool is commonly used for network packet capture?','choices'=>json_encode(['tcpdump','fdisk','grep','curl']),'answer'=>'tcpdump','explanation'=>'tcpdump captures and analyzes network packets at the command line.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>6,'question'=>'In RESTful APIs, which status code indicates resource creation?','choices'=>json_encode(['201','200','204','400']),'answer'=>'201','explanation'=>'HTTP 201 Created indicates that a new resource has been successfully created.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>6,'question'=>'What does MQTT commonly use for message distribution?','choices'=>json_encode(['Publish/Subscribe','Peer-to-peer','Client/Server','Broadcast']),'answer'=>'Publish/Subscribe','explanation'=>'MQTT uses a publish/subscribe model to distribute messages via a broker.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>6,'question'=>'Which encryption algorithm is asymmetric?','choices'=>json_encode(['RSA','AES','Blowfish','3DES']),'answer'=>'RSA','explanation'=>'RSA uses a pair of public and private keys for encryption and decryption.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>6,'question'=>'What is the function of RAID 0?','choices'=>json_encode(['Striping for performance','Mirroring for redundancy','Parity for fault tolerance','Caching for speed']),'answer'=>'Striping for performance','explanation'=>'RAID 0 stripes data across drives to increase performance, with no redundancy.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>6,'question'=>'Which HTTP header prevents clickjacking by disallowing framing?','choices'=>json_encode(['X-Frame-Options','Content-Security-Policy','Strict-Transport-Security','X-Content-Type-Options']),'answer'=>'X-Frame-Options','explanation'=>'X-Frame-Options can deny or allow framing of content to prevent clickjacking.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>6,'question'=>'Which Linux command changes file ownership?','choices'=>json_encode(['chown','chmod','chgrp','chattr']),'answer'=>'chown','explanation'=>'chown modifies the user and/or group ownership of a file or directory.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>6,'question'=>'What IPv6 feature embeds an IPv4 address within an IPv6 address?','choices'=>json_encode(['IPv4-mapped IPv6 address','Link-Local address','Global unicast','Multicast']),'answer'=>'IPv4-mapped IPv6 address','explanation'=>'IPv4-mapped addresses allow IPv6 applications to communicate with IPv4 hosts.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>6,'question'=>'Which database recovery model logs all transactions for point-in-time restore?','choices'=>json_encode(['Full recovery','Simple recovery','Bulk-logged','Massive recovery']),'answer'=>'Full recovery','explanation'=>'Full recovery model logs all transactions, enabling restores to any point in time.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>6,'question'=>'Which file system is journaled and native to Windows?','choices'=>json_encode(['NTFS','ext4','FAT32','HFS+']),'answer'=>'NTFS','explanation'=>'NTFS supports journaling, permissions, and large file sizes.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>6,'question'=>'In Kubernetes, which component schedules pods onto nodes?','choices'=>json_encode(['kube-scheduler','kube-proxy','etcd','kubelet']),'answer'=>'kube-scheduler','explanation'=>'The kube-scheduler assigns newly created pods to available cluster nodes.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>6,'question'=>'Which HTTP method is safe and should not modify server state?','choices'=>json_encode(['GET','POST','PUT','DELETE']),'answer'=>'GET','explanation'=>'GET is considered safe and should only retrieve data, not change server state.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>6,'question'=>'Which Linux user ID number is reserved for the root user?','choices'=>json_encode(['0','1','1000','500']),'answer'=>'0','explanation'=>'UID 0 is the superuser, or root, on Unix and Linux systems.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>6,'question'=>'Which HTTP header indicates TLS is required?','choices'=>json_encode(['Strict-Transport-Security','Content-Security-Policy','X-Powered-By','Server']),'answer'=>'Strict-Transport-Security','explanation'=>'HSTS instructs browsers to only access the site over HTTPS.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>6,'question'=>'What does the acronym ACID represent in database systems?','choices'=>json_encode(['Atomicity, Consistency, Isolation, Durability','Availability, Consistency, Integrity, Durability','Access, Control, Integrity, Data','Atomicity, Cache, Index, Data']),'answer'=>'Atomicity, Consistency, Isolation, Durability','explanation'=>'ACID properties ensure reliable transaction processing.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>6,'question'=>'Which wireless standard operates in the 5 GHz band and supports up to 1.3 Gbps?','choices'=>json_encode(['802.11ac','802.11n','802.11g','802.11b']),'answer'=>'802.11ac','explanation'=>'802.11ac, also known as Wi-Fi 5, uses 5 GHz spectrum for high throughput.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>6,'question'=>'Which tool automates container orchestration?','choices'=>json_encode(['Kubernetes','Docker Compose','Vagrant','Ansible']),'answer'=>'Kubernetes','explanation'=>'Kubernetes manages deployment, scaling, and operations of containerized applications.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

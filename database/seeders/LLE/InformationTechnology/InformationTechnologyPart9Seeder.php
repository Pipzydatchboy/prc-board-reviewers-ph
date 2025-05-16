<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart9Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>9,'question'=>'Which protocol enables secure VPN tunnels over the internet?','choices'=>json_encode(['IPsec','DNS','SMTP','FTP']),'answer'=>'IPsec','explanation'=>'IPsec provides secure network communications by authenticating and encrypting each IP packet.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>9,'question'=>'What does SNMP monitor?','choices'=>json_encode(['Network devices and performance','Disk usage','CPU temperature','Memory allocation']),'answer'=>'Network devices and performance','explanation'=>'Simple Network Management Protocol collects and organizes information about managed devices on IP networks.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>9,'question'=>'Which AWS service is used for content delivery?','choices'=>json_encode(['CloudFront','Lambda','EC2','S3']),'answer'=>'CloudFront','explanation'=>'Amazon CloudFront is a CDN that delivers data, videos, applications, and APIs globally with low latency.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>9,'question'=>'Which type of NAT maps multiple private addresses to a single public IP?','choices'=>json_encode(['PAT','SNAT','DNAT','NPT']),'answer'=>'PAT','explanation'=>'Port Address Translation allows many internal hosts to share a single public IP address using port numbers.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>9,'question'=>'Which Linux filesystem mounts network shares via SMB?','choices'=>json_encode(['cifs','nfs','ext4','xfs']),'answer'=>'cifs','explanation'=>'The Common Internet File System driver (cifs) mounts SMB/CIFS shares on Linux.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>9,'question'=>'Which HTTP method requests only the headers of a resource?','choices'=>json_encode(['HEAD','GET','POST','OPTIONS']),'answer'=>'HEAD','explanation'=>'HEAD retrieves headers without the response body, useful for metadata checks.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>9,'question'=>'What is the purpose of RAID 10?','choices'=>json_encode(['Mirroring and striping','Parity only','Mirroring only','Striping only']),'answer'=>'Mirroring and striping','explanation'=>'RAID 10 combines mirroring and striping to provide both performance and redundancy.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>9,'question'=>'Which command resets network interfaces on Windows?','choices'=>json_encode(['netsh int ip reset','ipconfig /flushdns','netstat -rn','ping localhost']),'answer'=>'netsh int ip reset','explanation'=>'The netsh int ip reset command rewrites TCP/IP registry keys to default state, resetting interfaces.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>9,'question'=>'In CSS Flexbox, which property defines the direction of flex items?','choices'=>json_encode(['flex-direction','justify-content','align-items','flex-wrap']),'answer'=>'flex-direction','explanation'=>'flex-direction sets the main axis orientation (row, column, etc.) for flex items.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>9,'question'=>'Which tool helps manage container lifecycle in Kubernetes?','choices'=>json_encode(['kubectl','docker','vagrant','ansible']),'answer'=>'kubectl','explanation'=>'kubectl is the command-line tool to run commands against Kubernetes clusters.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>9,'question'=>'Which cloud model combines on-premises and public cloud resources?','choices'=>json_encode(['Hybrid cloud','Public cloud','Private cloud','Community cloud']),'answer'=>'Hybrid cloud','explanation'=>'Hybrid cloud integrates private and public clouds to allow data and applications to move between environments.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>9,'question'=>'Which HTTP header indicates the request came via a proxy?','choices'=>json_encode(['Via','Host','User-Agent','X-Forwarded-For']),'answer'=>'Via','explanation'=>'The Via header shows intermediate protocols and recipients between user agent and server.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>9,'question'=>'Which NoSQL database is optimized for wide-column storage?','choices'=>json_encode(['Cassandra','MongoDB','Redis','Neo4j']),'answer'=>'Cassandra','explanation'=>'Apache Cassandra is designed for handling large amounts of structured data across many commodity servers.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>9,'question'=>'What is the default subnet mask for a /24 network?','choices'=>json_encode(['255.255.255.0','255.255.0.0','255.0.0.0','255.255.255.128']),'answer'=>'255.255.255.0','explanation'=>'A /24 prefix length corresponds to a 255.255.255.0 subnet mask.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>9,'question'=>'Which service discovery protocol is native to Kubernetes?','choices'=>json_encode(['DNS','mDNS','UPnP','SSDP']),'answer'=>'DNS','explanation'=>'Kubernetes uses CoreDNS or kube-dns for service discovery inside clusters.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>9,'question'=>'Which Linux tool automates package updates?','choices'=>json_encode(['yum-cron','apt-get','rpm','dpkg']),'answer'=>'yum-cron','explanation'=>'yum-cron schedules and applies automated package updates on RHEL-based systems.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>9,'question'=>'Which JavaScript feature enables asynchronous operations?','choices'=>json_encode(['Promises','Callbacks','setTimeout','All of the above']),'answer'=>'All of the above','explanation'=>'Promises, callbacks, and setTimeout all facilitate asynchronous code execution in JS.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>9,'question'=>'Which AWS database service is serverless and supports SQL?','choices'=>json_encode(['Aurora Serverless','DynamoDB','RDS MySQL','Redshift']),'answer'=>'Aurora Serverless','explanation'=>'Amazon Aurora Serverless automatically starts up, shuts down, and scales capacity based on application needs.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>9,'question'=>'Which command in Linux shows disk usage by directory?','choices'=>json_encode(['du -h','df -h','ls -l','cat']),'answer'=>'du -h','explanation'=>'du -h summarizes disk usage of files and directories in human-readable format.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>9,'question'=>'Which HTTP status code indicates a client must authenticate again?','choices'=>json_encode(['401','403','307','200']),'answer'=>'401','explanation'=>'401 Unauthorized signals that authentication is required or has failed.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

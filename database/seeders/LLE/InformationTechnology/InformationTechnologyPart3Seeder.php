<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart3Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>3,'question'=>'Which protocol is used for secure file transfer over SSH?','choices'=>json_encode(['SFTP','FTP','FTPS','TFTP']),'answer'=>'SFTP','explanation'=>'SFTP uses SSH to securely transfer files.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>3,'question'=>'What does RAID 5 provide?','choices'=>json_encode(['Striping with parity','Data mirroring','Pure striping','Dedicated hot spare']),'answer'=>'Striping with parity','explanation'=>'RAID 5 stripes data with distributed parity for fault tolerance.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>3,'question'=>'Which command-line utility traces the path packets take to a network host?','choices'=>json_encode(['traceroute','ping','nslookup','netstat']),'answer'=>'traceroute','explanation'=>'Traceroute shows the route and transit delays of packets.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>3,'question'=>'What type of address is 192.168.0.1?','choices'=>json_encode(['Private IPv4','Public IPv4','IPv6','Loopback']),'answer'=>'Private IPv4','explanation'=>'192.168.0.1 is reserved for private network use.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>3,'question'=>'Which DNS record type is used for aliasing one name to another?','choices'=>json_encode(['CNAME','A','MX','PTR']),'answer'=>'CNAME','explanation'=>'CNAME records map an alias to the canonical name.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>3,'question'=>'What is the function of TLS in email?','choices'=>json_encode(['Encrypt SMTP sessions','Store mailboxes','Route email','Scan for spam']),'answer'=>'Encrypt SMTP sessions','explanation'=>'TLS secures email transmission between servers and clients.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>3,'question'=>'Which database index type is optimal for full-text search?','choices'=>json_encode(['Inverted index','B-tree','Hash','Bitmap']),'answer'=>'Inverted index','explanation'=>'Inverted indexes map terms to their locations in documents.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>3,'question'=>'What does SSH port forwarding achieve?','choices'=>json_encode(['Tunnel TCP connections','Block SSH access','Accelerate SSH login','Compress SSH packets']),'answer'=>'Tunnel TCP connections','explanation'=>'Port forwarding directs traffic through an encrypted SSH tunnel.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>3,'question'=>'Which tool is used for performance monitoring in Linux?','choices'=>json_encode(['top','Task Manager','Activity Monitor','Performance Monitor']),'answer'=>'top','explanation'=>'The top command displays real-time system resource usage.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>3,'question'=>'What is the purpose of a virtual switch in virtualization?','choices'=>json_encode(['Connect VMs within a host','Filter malware','Store VM disk images','Manage host memory']),'answer'=>'Connect VMs within a host','explanation'=>'Virtual switches enable network connectivity between virtual machines.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>3,'question'=>'Which encryption algorithm is symmetric?','choices'=>json_encode(['AES','RSA','ECC','DSA']),'answer'=>'AES','explanation'=>'AES uses the same key for encryption and decryption.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>3,'question'=>'In HTML5, which element is used for embedding video?','choices'=>json_encode(['<video>','<media>','<embed>','<object>']),'answer'=>'<video>','explanation'=>'The <video> tag provides native video embedding capabilities.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>3,'question'=>'Which Python framework is commonly used for web development?','choices'=>json_encode(['Django','TensorFlow','NumPy','Pandas']),'answer'=>'Django','explanation'=>'Django is a high-level Python web framework.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>3,'question'=>'What is the role of a load balancer?','choices'=>json_encode(['Distribute traffic across servers','Secure network traffic','Store backups','Route emails']),'answer'=>'Distribute traffic across servers','explanation'=>'Load balancers improve availability and scalability by distributing requests.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>3,'question'=>'Which HTTP status code indicates permanent redirection?','choices'=>json_encode(['301','302','404','500']),'answer'=>'301','explanation'=>'301 Moved Permanently indicates the resource has a new URL.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>3,'question'=>'Which NoSQL database uses documents as its data model?','choices'=>json_encode(['MongoDB','Cassandra','Redis','Neo4j']),'answer'=>'MongoDB','explanation'=>'MongoDB stores data in flexible, JSON-like documents.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>3,'question'=>'What does API throttling limit?','choices'=>json_encode(['Number of API calls per time period','Dataset size','Payload encryption','Latency']),'answer'=>'Number of API calls per time period','explanation'=>'Throttling controls usage and prevents overload by limiting calls.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>3,'question'=>'Which command recreates the Windows boot configuration data?','choices'=>json_encode(['bcdboot','bootrec','format','chkdsk']),'answer'=>'bcdboot','explanation'=>'bcdboot initializes system files for boot configuration.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>3,'question'=>'In network segmentation, what is the purpose of ACLs?','choices'=>json_encode(['Control traffic flow by filter rules','Encrypt VLANs','Balance load','Monitor traffic']),'answer'=>'Control traffic flow by filter rules','explanation'=>'Access Control Lists permit or deny packets based on defined criteria.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>3,'question'=>'Which continuous integration tool integrates well with GitHub?','choices'=>json_encode(['Travis CI','Jenkins','CircleCI','All of the above']),'answer'=>'All of the above','explanation'=>'Travis CI, Jenkins, and CircleCI offer strong GitHub integration.', 'created_at'=>$now,'updated_at'=>$now],
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

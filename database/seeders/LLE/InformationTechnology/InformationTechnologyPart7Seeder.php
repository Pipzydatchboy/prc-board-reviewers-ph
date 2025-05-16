<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart7Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>7,'question'=>'Which protocol is used to securely synchronize files between hosts?','choices'=>json_encode(['rsync over SSH','FTP','HTTP','SMTP']),'answer'=>'rsync over SSH','explanation'=>'Rsync over SSH encrypts file synchronization between systems.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>7,'question'=>'What does CIDR notation allow?','choices'=>json_encode(['Flexible IP subnetting','Secure DNS lookups','Encrypted HTTP','Fault-tolerant routing']),'answer'=>'Flexible IP subnetting','explanation'=>'CIDR notation defines variable-length network prefixes for IP addresses.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>7,'question'=>'Which tool automates container builds with Dockerfiles?','choices'=>json_encode(['docker build','docker run','docker-compose','kubectl']),'answer'=>'docker build','explanation'=>'docker build processes a Dockerfile to create a container image.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>7,'question'=>'Which encryption mode provides confidentiality but not integrity?','choices'=>json_encode(['CBC','GCM','CCM','XTS']),'answer'=>'CBC','explanation'=>'Cipher Block Chaining provides confidentiality; integrity requires a MAC.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>7,'question'=>'What is the purpose of PTR DNS records?','choices'=>json_encode(['Reverse lookup of IP to hostname','Mail exchange routing','Alias mapping','Name server delegation']),'answer'=>'Reverse lookup of IP to hostname','explanation'=>'PTR records map IP addresses back to domain names for reverse DNS.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>7,'question'=>'Which technology isolates applications at the OS level using cgroups and namespaces?','choices'=>json_encode(['Containers','Virtual machines','Hypervisors','Bare metal']),'answer'=>'Containers','explanation'=>'Containers use Linux cgroups and namespaces to isolate processes.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>7,'question'=>'Which HTTP header controls content sniffing by browsers?','choices'=>json_encode(['X-Content-Type-Options','Cache-Control','Content-Type','Referrer-Policy']),'answer'=>'X-Content-Type-Options','explanation'=>'X-Content-Type-Options: nosniff prevents browsers from MIME-sniffing.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>7,'question'=>'Which IPv6 prefix is used for link-local addresses?','choices'=>json_encode(['fe80::/10','2000::/3','fc00::/7','ff00::/8']),'answer'=>'fe80::/10','explanation'=>'fe80::/10 identifies IPv6 link-local addresses confined to one link.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>7,'question'=>'What is the command to display the current Kubernetes context?','choices'=>json_encode(['kubectl config current-context','kubectl get context','kubectl show context','kubectl describe config']),'answer'=>'kubectl config current-context','explanation'=>'This command shows the active cluster/user context in kubectl configuration.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>7,'question'=>'Which algorithm is used for Diffie-Hellman key exchange?','choices'=>json_encode(['Discrete logarithm','RSA','AES','SHA-256']),'answer'=>'Discrete logarithm','explanation'=>'Diffie-Hellman relies on the discrete logarithm problem for secure key exchange.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>7,'question'=>'Which Linux command sets file immutable attribute?','choices'=>json_encode(['chattr +i','chmod +i','chown +i','lsattr']),'answer'=>'chattr +i','explanation'=>'chattr +i makes a file immutable, preventing modifications even by root.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>7,'question'=>'In HTTP/2, what feature improves performance?','choices'=>json_encode(['Multiplexing','Plain text headers','Separate TCP connection per request','No TLS']),'answer'=>'Multiplexing','explanation'=>'HTTP/2 multiplexes multiple streams over a single connection for efficiency.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>7,'question'=>'Which tool manages infrastructure provisioning using code independent of cloud provider?','choices'=>json_encode(['Terraform','CloudFormation','ZEN','CLI']),'answer'=>'Terraform','explanation'=>'Terraform uses provider-agnostic configuration to provision resources.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>7,'question'=>'Which SQL injection defense uses parameterized queries?','choices'=>json_encode(['Prepared statements','Escaping inputs','Stored procedures','Input validation']),'answer'=>'Prepared statements','explanation'=>'Prepared statements separate code from data to prevent injection attacks.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>7,'question'=>'Which AWS service provides serverless compute?','choices'=>json_encode(['Lambda','EC2','ECS','EKS']),'answer'=>'Lambda','explanation'=>'AWS Lambda runs code without provisioning servers, on-demand.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>7,'question'=>'What does the "piggybacking" term refer to in network security?','choices'=>json_encode(['Unauthorized use of an open network','Data encryption','Packet multiplexing','Secure tunneling']),'answer'=>'Unauthorized use of an open network','explanation'=>'Piggybacking is accessing a network through another user’s session without consent.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>7,'question'=>'Which load balancing algorithm selects the server with the fewest active connections?','choices'=>json_encode(['Least Connections','Round Robin','IP Hash','Weighted Random']),'answer'=>'Least Connections','explanation'=>'Least Connections routes new requests to the server with the fewest current connections.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>7,'question'=>'Which file format is binary and used for serialized Java objects?','choices'=>json_encode(['.class','.jar','.java','.json']),'answer'=>'.class','explanation'=>'.class files contain Java bytecode produced from .java source.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>7,'question'=>'Which X.509 certificate field specifies the certificate issuer?','choices'=>json_encode(['Issuer','Subject','Public Key','Serial Number']),'answer'=>'Issuer','explanation'=>'The Issuer field contains information about the CA that signed the certificate.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>7,'question'=>'Which HTTP header enables cross-origin resource sharing (CORS)?','choices'=>json_encode(['Access-Control-Allow-Origin','Content-Type','Accept','Origin']),'answer'=>'Access-Control-Allow-Origin','explanation'=>'This response header indicates which origins are allowed to access the resource.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

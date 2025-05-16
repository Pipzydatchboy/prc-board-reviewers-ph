<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart8Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>8,'question'=>'Which protocol uses UDP port 123 for time synchronization?','choices'=>json_encode(['NTP','SNMP','DNS','LDAP']),'answer'=>'NTP','explanation'=>'Network Time Protocol uses UDP port 123 to synchronize clocks across networks.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>8,'question'=>'What is the default file permission numeric mode for rwxr-xr-x?','choices'=>json_encode(['755','644','700','666']),'answer'=>'755','explanation'=>'755 grants full permissions to owner and read/execute to group and others.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>8,'question'=>'Which header in HTTP requests specifies the media types accepted?','choices'=>json_encode(['Accept','User-Agent','Host','Cookie']),'answer'=>'Accept','explanation'=>'The Accept header informs the server of the MIME types the client can process.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>8,'question'=>'In relational databases, what does ACID ensure?','choices'=>json_encode(['Reliable transactions','High availability','Fast reads','Scalability']),'answer'=>'Reliable transactions','explanation'=>'ACID properties guarantee safe and consistent transaction processing.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>8,'question'=>'Which command shows listening TCP ports on Linux?','choices'=>json_encode(['netstat -tln','ps aux','top','df -h']),'answer'=>'netstat -tln','explanation'=>'The -tln options list TCP (-t), listening (-l), numeric (-n) ports.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>8,'question'=>'Which device operates at Layer 3 of the OSI model?','choices'=>json_encode(['Router','Switch','Hub','Repeater']),'answer'=>'Router','explanation'=>'Routers forward packets based on IP addresses at the network layer.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>8,'question'=>'Which protocol is used for file and printer sharing in Windows networks?','choices'=>json_encode(['SMB','NFS','FTP','HTTP']),'answer'=>'SMB','explanation'=>'SMB (Server Message Block) is the protocol for sharing files and printers on Windows networks.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>8,'question'=>'Which algorithm is used for public key cryptography based on elliptic curves?','choices'=>json_encode(['ECC','RSA','AES','DES']),'answer'=>'ECC','explanation'=>'Elliptic Curve Cryptography provides security with smaller key sizes.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>8,'question'=>'Which HTTP status code indicates too many requests?','choices'=>json_encode(['429','503','404','200']),'answer'=>'429','explanation'=>'429 Too Many Requests signals rate limiting by the server.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>8,'question'=>'In CSS, which selector targets elements by class?','choices'=>json_encode(['.classname','#idname','element','*']),'answer'=>'.classname','explanation'=>'A dot prefix selects elements with the specified class.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>8,'question'=>'Which SQL keyword is used to remove duplicate rows?','choices'=>json_encode(['DISTINCT','UNIQUE','GROUP BY','HAVING']),'answer'=>'DISTINCT','explanation'=>'DISTINCT filters out duplicate records in query results.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>8,'question'=>'What is the use of the "tail -f" command?','choices'=>json_encode(['Monitor file changes','Copy files','Delete lines','Edit files']),'answer'=>'Monitor file changes','explanation'=>'tail -f follows a file and displays new lines as they are added.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>8,'question'=>'Which JS function parses a JSON string into an object?','choices'=>json_encode(['JSON.parse','JSON.stringify','eval','parseJSON']),'answer'=>'JSON.parse','explanation'=>'JSON.parse converts JSON text into a JavaScript object.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>8,'question'=>'Which HTTP header protects against MIME type sniffing?','choices'=>json_encode(['X-Content-Type-Options','Content-Type','X-XSS-Protection','Cross-Origin-Resource-Policy']),'answer'=>'X-Content-Type-Options','explanation'=>'Specifying "nosniff" blocks browsers from MIME-sniffing responses.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>8,'question'=>'Which virtualization type uses hardware-assisted virtualization?','choices'=>json_encode(['Type 1 hypervisor','Container','Type 2 hypervisor','Bare metal']),'answer'=>'Type 1 hypervisor','explanation'=>'Type 1 runs directly on hardware using CPU virtualization extensions.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>8,'question'=>'Which tool checks disk health via SMART attributes?','choices'=>json_encode(['smartctl','fsck','dd','mkfs']),'answer'=>'smartctl','explanation'=>'smartctl from smartmontools reads SMART data to assess drive health.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>8,'question'=>'Which command in SQL adds more columns to an existing table?','choices'=>json_encode(['ALTER TABLE','UPDATE','CREATE TABLE','INSERT']),'answer'=>'ALTER TABLE','explanation'=>'ALTER TABLE modifies table schema, including adding columns.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>8,'question'=>'What is the primary advantage of SSD caches in hybrid storage?','choices'=>json_encode(['Accelerated I/O performance','Increased capacity','Lower cost','Simplified management']),'answer'=>'Accelerated I/O performance','explanation'=>'SSDs cache hot data for faster read/write operations in hybrid arrays.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>8,'question'=>'Which protocol secures email retrieval using encryption?','choices'=>json_encode(['IMAPS','POP3S','SMTP','FTP']),'answer'=>'IMAPS','explanation'=>'IMAPS uses SSL/TLS to encrypt IMAP communication on port 993.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>8,'question'=>'Which HTTP method can partially update a resource?','choices'=>json_encode(['PATCH','PUT','POST','GET']),'answer'=>'PATCH','explanation'=>'PATCH applies partial modifications to a resource.', 'created_at'=>$now,'updated_at'=>$now],
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

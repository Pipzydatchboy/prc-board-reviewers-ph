<?php

namespace Database\Seeders\LLE\InformationTechnology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformationTechnologyPart4Seeder extends Seeder
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
        ['subject_id'=>55,'part'=>4,'question'=>'Which IPv6 address type is global and routable on the internet?','choices'=>json_encode(['Global unicast','Link-local','Multicast','Loopback']),'answer'=>'Global unicast','explanation'=>'Global unicast addresses are unique and globally routable.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>55,'part'=>4,'question'=>'What does the HTTP header "User-Agent" convey?','choices'=>json_encode(['Client software details','Server version','Cache directives','Content encoding']),'answer'=>'Client software details','explanation'=>'User-Agent identifies the client browser, version, and OS.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>55,'part'=>4,'question'=>'Which Linux permission allows file execution?','choices'=>json_encode(['x','r','w','m']),'answer'=>'x','explanation'=>'The execute permission (x) allows a file to be run as a program.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>55,'part'=>4,'question'=>'Which NoSQL database model organizes data as key-value pairs?','choices'=>json_encode(['Redis','MongoDB','Neo4j','Cassandra']),'answer'=>'Redis','explanation'=>'Redis is a key-value store optimized for speed and simplicity.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>55,'part'=>4,'question'=>'What is the default port for HTTPS traffic?','choices'=>json_encode(['443','80','21','22']),'answer'=>'443','explanation'=>'Port 443 is the standard port for secure HTTP over TLS.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>55,'part'=>4,'question'=>'Which programming language is primarily used for statistical analysis and graphics?','choices'=>json_encode(['R','Java','C++','PHP']),'answer'=>'R','explanation'=>'R is specialized for statistical computing and graphical representation.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>55,'part'=>4,'question'=>'In virtualization, what is a hypervisor?','choices'=>json_encode(['Software layer managing virtual machines','Network router','Storage array controller','Security appliance']),'answer'=>'Software layer managing virtual machines','explanation'=>'Hypervisors create and manage virtual machine instances on hosts.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>55,'part'=>4,'question'=>'Which command deletes a branch in Git?','choices'=>json_encode(['git branch -d','git branch -a','git branch -m','git branch -r']),'answer'=>'git branch -d','explanation'=>'The -d option removes a local branch when it is fully merged.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>55,'part'=>4,'question'=>'Which SSL/TLS version is considered insecure and deprecated?','choices'=>json_encode(['SSLv3','TLSv1.2','TLSv1.3','TLSv1.1']),'answer'=>'SSLv3','explanation'=>'SSLv3 is vulnerable to POODLE attacks and should not be used.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>55,'part'=>4,'question'=>'What is the purpose of a cron job?','choices'=>json_encode(['Schedule recurring tasks on Unix systems','Manage DNS records','Encrypt disk partitions','Capture network packets']),'answer'=>'Schedule recurring tasks on Unix systems','explanation'=>'Cron automates execution of specified commands at set intervals.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>55,'part'=>4,'question'=>'Which JSON method converts an object to a JSON string in JavaScript?','choices'=>json_encode(['JSON.stringify','JSON.parse','toJSON','toString']),'answer'=>'JSON.stringify','explanation'=>'JSON.stringify serializes a JavaScript object to a JSON string.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>55,'part'=>4,'question'=>'Which tool is used to automate configuration management?','choices'=>json_encode(['Ansible','Vim','Chrome','Photoshop']),'answer'=>'Ansible','explanation'=>'Ansible automates application deployment, configuration management, and orchestration.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>55,'part'=>4,'question'=>'Which HTTP method is typically used to update a resource?','choices'=>json_encode(['PUT','GET','DELETE','HEAD']),'answer'=>'PUT','explanation'=>'PUT sends data to the server to update or create a resource.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>55,'part'=>4,'question'=>'What is a buffer overflow?','choices'=>json_encode(['Writing more data than memory buffer can hold','Encrypting data buffer','Routing issue in networks','Cache miss']),'answer'=>'Writing more data than memory buffer can hold','explanation'=>'Buffer overflows overwrite adjacent memory, leading to crashes or exploits.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>55,'part'=>4,'question'=>'Which data structure uses FIFO (First In, First Out)?','choices'=>json_encode(['Queue','Stack','Tree','Graph']),'answer'=>'Queue','explanation'=>'Queues process items in the order they were added, following FIFO.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>55,'part'=>4,'question'=>'Which port is used by default for MySQL?','choices'=>json_encode(['3306','5432','1521','1433']),'answer'=>'3306','explanation'=>'MySQL listens on TCP port 3306 by default.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>55,'part'=>4,'question'=>'What does the term "hotfix" refer to?','choices'=>json_encode(['A quick patch for software issues','A full software release','Hardware upgrade','Network reconfiguration']),'answer'=>'A quick patch for software issues','explanation'=>'Hotfixes address specific bugs or security issues between major releases.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>55,'part'=>4,'question'=>'Which Linux distribution uses dnf as its package manager?','choices'=>json_encode(['Fedora','Ubuntu','Debian','Arch Linux']),'answer'=>'Fedora','explanation'=>'Fedora uses dnf (Dandified Yum) for package management.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>55,'part'=>4,'question'=>'What is the primary advantage of SSDs over HDDs?','choices'=>json_encode(['Faster access times','Higher storage capacity','Lower cost','Easier to repair']),'answer'=>'Faster access times','explanation'=>'SSDs use flash memory, providing much lower latency than HDDs.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>55,'part'=>4,'question'=>'Which tool captures and analyzes network traffic?','choices'=>json_encode(['Wireshark','Notepad','VS Code','Excel']),'answer'=>'Wireshark','explanation'=>'Wireshark is a network protocol analyzer for capturing and inspecting packets.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

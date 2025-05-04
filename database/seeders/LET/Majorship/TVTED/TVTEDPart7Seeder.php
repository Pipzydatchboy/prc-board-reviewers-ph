<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart7Seeder extends Seeder
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

        // Part 7: Emerging Technologies in Technical & Vocational Education

        //1
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which technology is used to fabricate three-dimensional objects layer by layer?',
            'choices'     => json_encode([
                '3D printing',
                'Laser cutting',
                'CNC milling',
                'Injection molding',
            ]),
            'answer'      => '3D printing',
            'explanation' => '3D printing, or additive manufacturing, builds objects layer by layer based on digital models.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //2
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'What does IoT stand for in the context of smart workshops?',
            'choices'     => json_encode([
                'Internet of Things',
                'Integration of Tools',
                'Interface of Technology',
                'Internet of Tools',
            ]),
            'answer'      => 'Internet of Things',
            'explanation' => 'IoT connects physical devices to the internet, enabling data exchange and remote control.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //3
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which application of VR can simulate hands-on technical training?',
            'choices'     => json_encode([
                'Immersive simulation environments',
                'Spreadsheet management',
                'Document editing',
                'Email communication',
            ]),
            'answer'      => 'Immersive simulation environments',
            'explanation' => 'VR creates realistic simulations for technical skill practice without physical risk.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //4
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which technology enables overlaying digital information onto the physical world?',
            'choices'     => json_encode([
                'Augmented Reality (AR)',
                'Machine Learning',
                'Cloud Computing',
                'Blockchain',
            ]),
            'answer'      => 'Augmented Reality (AR)',
            'explanation' => 'AR superimposes computer-generated content onto the user’s view of the real world.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //5
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which advanced manufacturing process uses computer-controlled machines?',
            'choices'     => json_encode([
                'CNC machining',
                'Screen printing',
                'Hand crafting',
                'Manual assembly',
            ]),
            'answer'      => 'CNC machining',
            'explanation' => 'Computer Numerical Control (CNC) machining automates manufacturing through precise digital instructions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //6
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which term describes a network of interconnected machinery and sensors in a factory?',
            'choices'     => json_encode([
                'Smart factory',
                'Lean manufacturing',
                'Batch processing',
                'Manual workshop',
            ]),
            'answer'      => 'Smart factory',
            'explanation' => 'Smart factories integrate IoT, AI, and automation to optimize manufacturing processes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //7
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which technology uses algorithms to identify patterns and make decisions in TVET systems?',
            'choices'     => json_encode([
                'Machine Learning',
                'Solid-state electronics',
                'Thermography',
                'Hydraulic modeling',
            ]),
            'answer'      => 'Machine Learning',
            'explanation' => 'Machine Learning analyzes data to improve processes and predict outcomes without explicit programming.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //8
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'What role does blockchain play in vocational education credentials?',
            'choices'     => json_encode([
                'Secure digital credential verification',
                '3D modeling',
                'Video streaming',
                'Network cabling',
            ]),
            'answer'      => 'Secure digital credential verification',
            'explanation' => 'Blockchain ensures tamper-proof records of certificates and qualifications.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //9
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which device is commonly used for precision laser-based cutting in workshops?',
            'choices'     => json_encode([
                'Laser cutter',
                'Band saw',
                'Drill press',
                'Lathe',
            ]),
            'answer'      => 'Laser cutter',
            'explanation' => 'Laser cutters use focused laser beams to cut or engrave materials with high precision.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //10
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which emerging tech uses wearable sensors to monitor worker ergonomics?',
            'choices'     => json_encode([
                'Wearable IoT devices',
                'Desktop computers',
                'Analog gauges',
                'Paper logbooks',
            ]),
            'answer'      => 'Wearable IoT devices',
            'explanation' => 'Wearable devices track posture and movement to improve safety and ergonomics.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //11
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which remote technology allows hands-on operation of lab equipment via the internet?',
            'choices'     => json_encode([
                'Remote labs',
                'Local servers',
                'Offline workshops',
                'Manual experiments',
            ]),
            'answer'      => 'Remote labs',
            'explanation' => 'Remote labs enable students to conduct experiments in real equipment from anywhere online.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //12
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which digital approach uses badges to recognize skill achievements?',
            'choices'     => json_encode([
                'Digital badging',
                'Gamification',
                'Podcasts',
                'E-books',
            ]),
            'answer'      => 'Digital badging',
            'explanation' => 'Digital badges are visual tokens awarded to learners for skill mastery and achievements.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //13
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'What is the maker movement in vocational education?',
            'choices'     => json_encode([
                'Hands-on creating and prototyping culture',
                'Standardized testing culture',
                'Theory-only instruction',
                'Mass production focus',
            ]),
            'answer'      => 'Hands-on creating and prototyping culture',
            'explanation' => 'The maker movement encourages learners to design, build, and iterate physical projects.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //14
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which analytics approach helps personalize TVET learning pathways?',
            'choices'     => json_encode([
                'Learning analytics',
                'Financial analytics',
                'Supply chain analytics',
                'Marketing analytics',
            ]),
            'answer'      => 'Learning analytics',
            'explanation' => 'Learning analytics uses data to understand and improve learner experiences and outcomes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //15
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which drone application is emerging in vocational training?',
            'choices'     => json_encode([
                'Aerial surveying and inspection',
                'Voice recognition',
                'Text analysis',
                'Barcode scanning',
            ]),
            'answer'      => 'Aerial surveying and inspection',
            'explanation' => 'Drones provide hands-on training for mapping, surveying, and equipment inspection.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //16
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which cybersecurity measure is critical for protecting connected devices?',
            'choices'     => json_encode([
                'Network encryption',
                'Physical locks',
                'Paper records',
                'Manual backups',
            ]),
            'answer'      => 'Network encryption',
            'explanation' => 'Encrypting data in transit helps secure IoT devices and sensitive information.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //17
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which mobile technology supports on-the-go skill tutorials?',
            'choices'     => json_encode([
                'Mobile learning apps',
                'Desktop IDEs',
                'Server clusters',
                'LAN parties',
            ]),
            'answer'      => 'Mobile learning apps',
            'explanation' => 'Mobile learning apps deliver tutorials and microlearning modules accessible anywhere.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //18
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which platform is widely used for video-based technical skill courses?',
            'choices'     => json_encode([
                'YouTube',
                'GitHub',
                'Slack',
                'Skype',
            ]),
            'answer'      => 'YouTube',
            'explanation' => 'YouTube hosts countless tutorials and demonstrations for technical and vocational skills.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //19
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which edge computing benefit is valuable for real-time workshop monitoring?',
            'choices'     => json_encode([
                'Reduced latency',
                'Higher power usage',
                'Centralized processing only',
                'Offline data loss',
            ]),
            'answer'      => 'Reduced latency',
            'explanation' => 'Edge computing processes data closer to its source, ensuring faster response times.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ];

        //20
        $batch[] = [
            'subject_id'  => 17,
            'part'        => 7,
            'question'    => 'Which social media feature can enhance peer learning and collaboration?',
            'choices'     => json_encode([
                'Discussion groups',
                'Broadcast TV',
                'Print newsletters',
                'Fax machines',
            ]),
            'answer'      => 'Discussion groups',
            'explanation' => 'Online discussion groups foster sharing of resources, ideas, and peer feedback.',
            'created_at'  => $now,
            'updated_at'  => $now,
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

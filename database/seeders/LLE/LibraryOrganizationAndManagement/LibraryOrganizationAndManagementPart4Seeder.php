<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart4Seeder extends Seeder
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
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which key performance indicator measures the percentage of requested items fulfilled within a target timeframe?',
            'choices'     => json_encode([
                'Fill rate',
                'Turnaround time',
                'Circulation turnover',
                'Shelf availability'
            ]),
            'answer'      => 'Fill rate',
            'explanation' => 'Fill rate is the proportion of user requests satisfied within the designated service standard.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 2
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'In library marketing, which strategy leverages social media to engage patrons and promote services?',
            'choices'     => json_encode([
                'Print advertising',
                'Social media campaign',
                'Radio spots',
                'Billboard ads'
            ]),
            'answer'      => 'Social media campaign',
            'explanation' => 'Social media campaigns use platforms like Facebook and Twitter to reach and interact with users.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 3
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which method ensures staff have skills to operate new integrated library systems?',
            'choices'     => json_encode([
                'Vendor-led training',
                'On-the-job training',
                'Peer mentoring',
                'All of the above'
            ]),
            'answer'      => 'All of the above',
            'explanation' => 'Combining vendor, on-the-job, and peer mentoring provides comprehensive system training.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 4
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which financial document shows expected income and expenditures for a future period?',
            'choices'     => json_encode([
                'Budget proposal',
                'Balance sheet',
                'Income statement',
                'Cash flow statement'
            ]),
            'answer'      => 'Budget proposal',
            'explanation' => 'Budget proposals project anticipated revenues and expenses for planning purposes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 5
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'What management approach focuses on eliminating non-value-added activities in workflows?',
            'choices'     => json_encode([
                'Lean management',
                'Agile management',
                'Waterfall management',
                'PMBOK'
            ]),
            'answer'      => 'Lean management',
            'explanation' => 'Lean management seeks to reduce waste and improve process efficiency.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 6
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which scheduling approach allocates resources to tasks to minimize idle time?',
            'choices'     => json_encode([
                'Resource leveling',
                'Critical path method',
                'PERT analysis',
                'SWOT analysis'
            ]),
            'answer'      => 'Resource leveling',
            'explanation' => 'Resource leveling smooths resource usage by delaying tasks within project constraints.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 7
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which organizational change strategy involves piloting new procedures in a small area before full implementation?',
            'choices'     => json_encode([
                'Pilot testing',
                'Rapid rollout',
                'Top-down mandate',
                'Benchmarking'
            ]),
            'answer'      => 'Pilot testing',
            'explanation' => 'Pilot tests allow evaluation of new processes on a small scale before broad adoption.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 8
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which device enhances physical security by monitoring entry to restricted areas?',
            'choices'     => json_encode([
                'RFID gate',
                'Barcode scanner',
                'OPAC terminal',
                'Fire extinguisher'
            ]),
            'answer'      => 'RFID gate',
            'explanation' => 'RFID gates detect tags on items and alert staff to unauthorized removals.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 9
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which leadership competency involves emotional awareness and regulation?',
            'choices'     => json_encode([
                'Technical skills',
                'Emotional intelligence',
                'Budgeting skills',
                'Cataloging expertise'
            ]),
            'answer'      => 'Emotional intelligence',
            'explanation' => 'Emotional intelligence allows leaders to understand and manage emotions in themselves and others.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 10
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'What is the role of a liaison librarian in organizational management?',
            'choices'     => json_encode([
                'Manages the reference desk',
                'Connects library services to academic departments',
                'Oversees cataloging operations',
                'Handles interlibrary loans'
            ]),
            'answer'      => 'Connects library services to academic departments',
            'explanation' => 'Liaison librarians collaborate with departments to tailor services and collections.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 11
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which facility feature improves comfort and productivity for staff and patrons?',
            'choices'     => json_encode([
                'Ergonomic furniture',
                'Decorative plants',
                'Artwork display',
                'Filing cabinets'
            ]),
            'answer'      => 'Ergonomic furniture',
            'explanation' => 'Ergonomic furniture reduces strain and enhances user comfort during prolonged use.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 12
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which evaluation tool measures patron perceptions of library services?',
            'choices'     => json_encode([
                'Satisfaction survey',
                'Gap analysis',
                'Benchmark report',
                'SWOT matrix'
            ]),
            'answer'      => 'Satisfaction survey',
            'explanation' => 'Surveys collect patron feedback on service quality and satisfaction levels.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 13
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'What practice ensures continuity of leadership during planned absences?',
            'choices'     => json_encode([
                'Delegation planning', 
                'Weeding', 
                'Collection development', 
                'Staff recruitment'
            ]),
            'answer'      => 'Delegation planning',
            'explanation' => 'Delegation plans assign temporary responsibilities to ensure operations continue.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 14
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which analysis identifies user traffic patterns and informs space planning?', 
            'choices'     => json_encode([
                'Space needs assessment', 
                'Budget analysis', 
                'Collection analysis', 
                'Reference analysis'
            ]),
            'answer'      => 'Space needs assessment',
            'explanation' => 'Space needs assessments use usage data to plan facility layouts.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 15
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which report helps allocate budgets across departments based on usage statistics?', 
            'choices'     => json_encode([
                'Circulation statistics report', 
                'Collection policy', 
                'Reference desk log', 
                'Acquisition agenda'
            ]),
            'answer'      => 'Circulation statistics report',
            'explanation' => 'Circulation data informs decisions about fund allocation for high-demand areas.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 16
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which inventory control technique uses RFID for real-time tracking of materials?', 
            'choices'     => json_encode([
                'RFID tagging', 
                'Manual counting', 
                'Fixed asset tagging', 
                'Shelf reading'
            ]),
            'answer'      => 'RFID tagging',
            'explanation' => 'RFID systems automate inventory checks by detecting tags on items.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 17
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'What practice minimizes energy consumption in library facilities during off-hours?', 
            'choices'     => json_encode([
                'Automatic lighting controls', 
                'Manual switch-off', 
                'Decorative lighting', 
                'Emergency lighting'
            ]),
            'answer'      => 'Automatic lighting controls',
            'explanation' => 'Sensor or timer-based lighting reduces usage when spaces are unoccupied.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 18
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which meeting technique allocates fixed time slots to agenda items?', 
            'choices'     => json_encode([
                'Round-robin', 
                'Brainstorming', 
                'Timeboxing', 
                'SWOT session'
            ]),
            'answer'      => 'Timeboxing',
            'explanation' => 'Timeboxing enforces time limits to keep discussions focused.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 19
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'Which compliance standard addresses user data privacy in libraries?', 
            'choices'     => json_encode([
                'GDPR', 
                'ISO 9001', 
                'OHSAS 18001', 
                'PCI-DSS'
            ]),
            'answer'      => 'GDPR',
            'explanation' => 'GDPR sets regulations for collection and processing of personal data.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 20
        [
            'subject_id'  => 50,
            'part'        => 4,
            'question'    => 'What is the final step in a seeder class after inserting the batch?', 
            'choices'     => json_encode([
                'Closing DB connection', 
                'Calling $this->command->info()', 
                'Clearing $batch', 
                'Exiting script'
            ]),
            'answer'      => 'Calling $this->command->info()',
            'explanation' => 'Seeders log completion via $this->command->info() after insertion.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
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

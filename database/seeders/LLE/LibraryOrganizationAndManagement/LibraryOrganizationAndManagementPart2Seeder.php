<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart2Seeder extends Seeder
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
            'part'        => 2,
            'question'    => 'Which workflow chart illustrates the sequence of tasks from acquisition to shelf placement of new materials?',
            'choices'     => json_encode([
                'Service blueprint',
                'Process flowchart',
                'Organizational chart',
                'Gantt chart'
            ]),
            'answer'      => 'Process flowchart',
            'explanation' => 'Process flowcharts map sequential tasks involved in workflows, such as acquisitions through shelf placement.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 2
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'In staffing models, what approach matches staff levels to peaks in user demand, such as evenings and weekends?',
            'choices'     => json_encode([
                'Fixed staffing',
                'Flexible staffing',
                'Matrix staffing',
                'Functional staffing'
            ]),
            'answer'      => 'Flexible staffing',
            'explanation' => 'Flexible staffing adjusts employee schedules to align with fluctuating service demands.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 3
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which performance metric evaluates the ratio of items checked out to the number of registered users?',
            'choices'     => json_encode([
                'Circulation turnover',
                'User satisfaction',
                'Shelf availability',
                'Budget utilization'
            ]),
            'answer'      => 'Circulation turnover',
            'explanation' => 'Circulation turnover measures use of the collection relative to the user base.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 4
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'What is the primary purpose of a disaster preparedness plan in library management?',
            'choices'     => json_encode([
                'Ensure uninterrupted budget approval',
                'Protect staff schedules',
                'Safeguard collections and services during emergencies',
                'Increase patron numbers'
            ]),
            'answer'      => 'Safeguard collections and services during emergencies',
            'explanation' => 'Disaster plans aim to protect collections and maintain critical services when incidents occur.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 5
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which budgeting strategy ties resource allocation directly to intended outcomes and goals?',
            'choices'     => json_encode([
                'Line-item budgeting',
                'Performance-based budgeting',
                'Incremental budgeting',
                'Zero-based budgeting'
            ]),
            'answer'      => 'Performance-based budgeting',
            'explanation' => 'Performance-based budgeting allocates funds based on achieving specific objectives.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 6
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'What tool assists managers in identifying internal strengths and areas for improvement in library operations?',
            'choices'     => json_encode([
                'SWOT analysis',
                'PERT chart',
                'Balance sheet',
                'Circulation report'
            ]),
            'answer'      => 'SWOT analysis',
            'explanation' => 'SWOT analysis evaluates internal strengths and weaknesses and external opportunities and threats.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 7
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which staffing role typically handles cataloging, classification, and metadata creation?',
            'choices'     => json_encode([
                'Public services librarian',
                'Technical services librarian',
                'Circulation assistant',
                'Reference librarian'
            ]),
            'answer'      => 'Technical services librarian',
            'explanation' => 'Technical services librarians manage behind-the-scenes processing like cataloging and classification.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 8
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'In facilities management, which factor is critical for ensuring accessibility for patrons with disabilities?',
            'choices'     => json_encode([
                'Collections size',
                'ADA compliance',
                'Staff qualifications',
                'Budget flexibility'
            ]),
            'answer'      => 'ADA compliance',
            'explanation' => 'Meeting Americans with Disabilities Act standards ensures facilities are accessible to all patrons.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 9
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'What is the function of a strategic plan in library management?',
            'choices'     => json_encode([
                'Set long-term goals and direction',
                'Process book checkouts',
                'Organize staff schedules',
                'Maintain software licenses'
            ]),
            'answer'      => 'Set long-term goals and direction',
            'explanation' => 'Strategic planning defines the library’s vision, goals, and strategies over a multi-year horizon.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 10
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which leadership behavior involves mentoring staff and fostering professional development?',
            'choices'     => json_encode([
                'Directive leadership',
                'Transactional leadership',
                'Transformational leadership',
                'Laissez-faire leadership'
            ]),
            'answer'      => 'Transformational leadership',
            'explanation' => 'Transformational leaders inspire and empower staff through mentorship and development opportunities.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 11
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'What document outlines protocols for emergency evacuations and collection salvage?',
            'choices'     => json_encode([
                'Disaster preparedness plan',
                'Collection policy',
                'Marketing plan',
                'Annual report'
            ]),
            'answer'      => 'Disaster preparedness plan',
            'explanation' => 'Disaster plans include evacuation, salvage procedures, and recovery protocols.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 12
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which metric helps assess the efficiency of technical services operations?',
            'choices'     => json_encode([
                'Average cataloging time per item',
                'Reference desk traffic',
                'Program attendance',
                'Gate count'
            ]),
            'answer'      => 'Average cataloging time per item',
            'explanation' => 'Measuring time per cataloging task evaluates technical workflow efficiency.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 13
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'In budget reviews, what does a variance report compare?',
            'choices'     => json_encode([
                'Expenditures vs. revenues',
                'Actual spending vs. budgeted amounts',
                'Staffing vs. circulation',
                'Collection size vs. user population'
            ]),
            'answer'      => 'Actual spending vs. budgeted amounts',
            'explanation' => 'Variance reports highlight differences between planned budget and actual expenditures.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 14
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which analysis tool examines political, economic, social, and technological factors affecting libraries?',
            'choices'     => json_encode([
                'SWOT analysis',
                'PEST analysis',
                'Gap analysis',
                'Risk analysis'
            ]),
            'answer'      => 'PEST analysis',
            'explanation' => 'PEST analysis evaluates external macro-environmental factors impacting organizations.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 15
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'What is the benefit of cross-training staff in multiple library functions?',
            'choices'     => json_encode([
                'Increases specialization',
                'Enhances staffing flexibility',
                'Reduces budget',
                'Limits staff roles'
            ]),
            'answer'      => 'Enhances staffing flexibility',
            'explanation' => 'Cross-training allows staff to cover diverse roles and adapt to changing demands.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 16
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which report summarizes facility usage and space utilization metrics?',
            'choices'     => json_encode([
                'Space utilization report',
                'Circulation report',
                'Reference report',
                'Acquisition report'
            ]),
            'answer'      => 'Space utilization report',
            'explanation' => 'Space utilization reports track how library spaces are used by patrons and programs.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 17
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which leadership model emphasizes servant leadership and prioritizing staff needs?',
            'choices'     => json_encode([
                'Transformational',
                'Servant',
                'Autocratic',
                'Transactional'
            ]),
            'answer'      => 'Servant',
            'explanation' => 'Servant leadership focuses on supporting and empowering team members.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 18
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'A library’s organizational chart should be updated whenever:',
            'choices'     => json_encode([
                'A new book is added',
                'Staff roles or reporting lines change',
                'Circulation increases',
                'Budget is adjusted'
            ]),
            'answer'      => 'Staff roles or reporting lines change',
            'explanation' => 'Organizational charts reflect current staff structure and should be updated with any changes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 19
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'Which facility feature enhances security for rare and special collections?',
            'choices'     => json_encode([
                'Open stacks',
                'Restricted access rooms',
                'Automatic doors',
                'Self-check machines'
            ]),
            'answer'      => 'Restricted access rooms',
            'explanation' => 'Rare materials are often housed in controlled-access environments to prevent damage and theft.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 20
        [
            'subject_id'  => 50,
            'part'        => 2,
            'question'    => 'In budget scenario planning, which scenario examines reduced funding and its impacts?',
            'choices'     => json_encode([
                'Best-case scenario',
                'Worst-case scenario',
                'Status quo scenario',
                'Break-even scenario'
            ]),
            'answer'      => 'Worst-case scenario',
            'explanation' => 'Worst-case planning evaluates implications of budget cuts and resource constraints.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

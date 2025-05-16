<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart1Seeder extends Seeder
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
            'part'        => 1,
            'question'    => 'Which organizational structure divides library functions into departments such as Technical Services, Public Services, and Administration?',
            'choices'     => json_encode([
                'Matrix structure',
                'Functional structure',
                'Divisional structure',
                'Flat structure'
            ]),
            'answer'      => 'Functional structure',
            'explanation' => 'A functional structure groups activities by function or department, such as Technical Services, Public Services, and Administration.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 2
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'In strategic planning, which document outlines the library’s mission, vision, and core values?',
            'choices'     => json_encode([
                'Collection development policy',
                'Mission statement',
                'Service level agreement',
                'Annual report'
            ]),
            'answer'      => 'Mission statement',
            'explanation' => 'A mission statement articulates the library’s purpose, vision, and core values as part of strategic planning.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 3
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Which budgeting method allocates funds based on previous year’s expenditure plus an inflation factor?',
            'choices'     => json_encode([
                'Zero-based budgeting',
                'Performance-based budgeting',
                'Incremental budgeting',
                'Program planning budgeting'
            ]),
            'answer'      => 'Incremental budgeting',
            'explanation' => 'Incremental budgeting adjusts the prior year’s budget by adding an inflation factor or incremental changes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 4
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Under human resource management, which process involves assessing staff performance against established objectives?',
            'choices'     => json_encode([
                'Recruitment',
                'Training needs analysis',
                'Performance appraisal',
                'Succession planning'
            ]),
            'answer'      => 'Performance appraisal',
            'explanation' => 'Performance appraisal evaluates employee performance against objectives to inform promotions, training, or corrective action.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 5
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Which quality measure assesses how quickly librarians respond to reference inquiries?',
            'choices'     => json_encode([
                'Turnaround time',
                'Circulation turnover',
                'Shelf read rate',
                'Interlibrary loan fill rate'
            ]),
            'answer'      => 'Turnaround time',
            'explanation' => 'Turnaround time measures the speed of service delivery, such as response time to reference inquiries.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 6
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'What is the term for the practice of removing outdated or unused materials from the collection?',
            'choices'     => json_encode([
                'Weeding',
                'Weaving',
                'Winnowing',
                'Binding'
            ]),
            'answer'      => 'Weeding',
            'explanation' => 'Weeding is the process of removing materials that no longer meet selection criteria or are in poor condition.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 7
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Which leadership style is characterized by shared decision-making and collaborative problem-solving?',
            'choices'     => json_encode([
                'Autocratic',
                'Laissez-faire',
                'Democratic',
                'Transactional'
            ]),
            'answer'      => 'Democratic',
            'explanation' => 'Democratic leadership involves team participation in decision-making and fosters collaboration.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 8
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Which planning tool maps out tasks, timelines, and responsible persons for a library project?',
            'choices'     => json_encode([
                'Gantt chart',
                'Flowchart',
                'SWOT analysis',
                'PERT diagram'
            ]),
            'answer'      => 'Gantt chart',
            'explanation' => 'A Gantt chart visually represents project schedules, tasks, durations, and responsibilities.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 9
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'In library marketing, what does the acronym SWOT stand for?',
            'choices'     => json_encode([
                'Strengths, Weaknesses, Opportunities, Threats',
                'Services, Workflows, Objectives, Tactics',
                'Systems, Work, Outputs, Testing',
                'Staff, Workflow, Operations, Tools'
            ]),
            'answer'      => 'Strengths, Weaknesses, Opportunities, Threats',
            'explanation' => 'SWOT analysis evaluates internal strengths/weaknesses and external opportunities/threats.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 10
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Which policy document defines criteria for adding new materials to the collection?',
            'choices'     => json_encode([
                'Collection development policy',
                'Circulation policy',
                'Reference policy',
                'Acquisition policy'
            ]),
            'answer'      => 'Collection development policy',
            'explanation' => 'The collection development policy outlines selection criteria, scope, and priorities for new acquisitions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 11
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'What method involves evaluating service quality by soliciting user feedback through surveys?',
            'choices'     => json_encode([
                'Benchmarking',
                'User satisfaction survey',
                'Focus group study',
                'Market analysis'
            ]),
            'answer'      => 'User satisfaction survey',
            'explanation' => 'User satisfaction surveys gather feedback directly from patrons to assess service quality.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 12
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'In cost-benefit analysis, what does the "benefit" represent for a library service?',
            'choices'     => json_encode([
                'Financial profit',
                'Patron satisfaction and outcomes',
                'Number of items circulated',
                'Staff workload'
            ]),
            'answer'      => 'Patron satisfaction and outcomes',
            'explanation' => 'Benefits include qualitative outcomes like patron satisfaction and learning, not just financial metrics.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 13
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Which term describes the formal arrangement of services and furniture to maximize patron comfort and accessibility?',
            'choices'     => json_encode([
                'Interior design',
                'Space planning',
                'Ergonomics',
                'Facility management'
            ]),
            'answer'      => 'Space planning',
            'explanation' => 'Space planning arranges library layouts for efficient workflows and patron accessibility.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 14
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'What is the primary goal of succession planning in library management?',
            'choices'     => json_encode([
                'Reducing staff numbers',
                'Identifying and developing future leaders',
                'Improving cataloging efficiency',
                'Enhancing reference services'
            ]),
            'answer'      => 'Identifying and developing future leaders',
            'explanation' => 'Succession planning prepares employees to assume key leadership roles in the future.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 15
        [
            'subject_id'  => 50,
            'part'        => 1,
            'question'    => 'Which financial report shows actual expenditures against budgeted amounts?',
            'choices'     => json_encode([
                'Balance sheet',
                'Income statement',
                'Variance report',
                'Cash flow statement'
            ]),
            'answer'      => 'Variance report',
            'explanation' => 'Variance reports compare actual spending to budgeted figures to identify discrepancies.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 16
        [
            'subject_id'   => 50,
            'part'         => 1,
            'question'     => 'Which term refers to the continuous review and improvement of library workflows and procedures?',
            'choices'      => json_encode([
                'Total Quality Management',
                'Project Management',
                'Risk Management',
                'Change Management'
            ]),
            'answer'       => 'Total Quality Management',
            'explanation'  => 'TQM focuses on ongoing improvement of processes to enhance service quality.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ],
        // 17
        [
            'subject_id'   => 50,
            'part'         => 1,
            'question'     => 'What is the key purpose of a library board of trustees?',
            'choices'      => json_encode([
                'Day-to-day operations',
                'Policy formulation and oversight',
                'Cataloging and classification',
                'Reference services'
            ]),
            'answer'       => 'Policy formulation and oversight',
            'explanation'  => 'Boards set policy and provide governance, not daily management.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ],
        // 18
        [
            'subject_id'   => 50,
            'part'         => 1,
            'question'     => 'Which document specifies staffing levels, materials budget, and equipment needs for the fiscal year?',
            'choices'      => json_encode([
                'Strategic plan',
                'Facilities plan',
                'Budget proposal',
                'Marketing plan'
            ]),
            'answer'       => 'Budget proposal',
            'explanation'  => 'A budget proposal details resource requirements for the upcoming year.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ],
        // 19
        [
            'subject_id'   => 50,
            'part'         => 1,
            'question'     => 'Which analysis assesses internal strengths and weaknesses as well as external opportunities and threats?',
            'choices'      => json_encode([
                'PEST analysis',
                'SWOT analysis',
                'Gap analysis',
                'Stakeholder analysis'
            ]),
            'answer'       => 'SWOT analysis',
            'explanation'  => 'SWOT examines strengths, weaknesses, opportunities, and threats for strategic planning.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ],
        // 20
        [
            'subject_id'   => 50,
            'part'         => 1,
            'question'     => 'In disaster planning, what is the first step to protect library collections?',
            'choices'      => json_encode([
                'Conduct risk assessment',
                'Acquire emergency supplies',
                'Train staff',
                'Develop salvage procedures'
            ]),
            'answer'       => 'Conduct risk assessment',
            'explanation'  => 'Identifying potential hazards through risk assessment is the initial step in disaster planning.',
            'created_at'   => $now,
            'updated_at'   => $now,
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

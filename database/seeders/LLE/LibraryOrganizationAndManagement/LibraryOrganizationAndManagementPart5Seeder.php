<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart5Seeder extends Seeder
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
            'part'        => 5,
            'question'    => 'Which budgeting method starts from zero and builds each expense justification anew?',
            'choices'     => json_encode([
                'Incremental budgeting',
                'Performance-based budgeting',
                'Zero-based budgeting',
                'Line-item budgeting'
            ]),
            'answer'      => 'Zero-based budgeting',
            'explanation' => 'Zero-based budgeting requires every expense to be justified from scratch each period.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 2
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'What is the purpose of a staff orientation program?',
            'choices'     => json_encode([
                'To orient patrons to the library',
                'To introduce new staff to policies, procedures, and culture',
                'To train staff in cataloging rules',
                'To schedule meetings'
            ]),
            'answer'      => 'To introduce new staff to policies, procedures, and culture',
            'explanation' => 'Staff orientation familiarizes new hires with organizational norms and workflows.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 3
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'Which analysis tool plots a cause-and-effect relationship to identify root causes of process issues?',
            'choices'     => json_encode([
                'Flowchart',
                'SWOT matrix',
                'Fishbone (Ishikawa) diagram',
                'Gantt chart'
            ]),
            'answer'      => 'Fishbone (Ishikawa) diagram',
            'explanation' => 'Fishbone diagrams visually map contributing factors to a problem.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 4
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'What report provides comparative data against peer libraries for key metrics?',
            'choices'     => json_encode([
                'Benchmarking report',
                'Variance report',
                'Annual report',
                'Operational plan'
            ]),
            'answer'      => 'Benchmarking report',
            'explanation' => 'Benchmarking reports compare performance indicators with similar institutions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 5
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'In HR management, what process identifies future staffing needs and gaps?',
            'choices'     => json_encode([
                'Succession planning',
                'Recruitment',
                'Performance appraisal',
                'Workforce planning'
            ]),
            'answer'      => 'Workforce planning',
            'explanation' => 'Workforce planning forecasts staffing requirements to meet organizational objectives.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 6
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'Which staffing model uses subject specialists embedded within academic departments?',
            'choices'     => json_encode([
                'Decentralized model',
                'Centralized model',
                'Matrix model',
                'Functional model'
            ]),
            'answer'      => 'Decentralized model',
            'explanation' => 'Decentralized staffing places librarians directly within departments for tailored support.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 7
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'Which financial process ensures commitment control by recording obligations before expenditure?',
            'choices'     => json_encode([
                'Encumbrance accounting',
                'Accrual accounting',
                'Cash accounting',
                'Program budgeting'
            ]),
            'answer'      => 'Encumbrance accounting',
            'explanation' => 'Encumbrance accounting tracks purchase orders as commitments against budget before payment.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 8
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'What policy governs the ethical use of social media by library staff and patrons?',
            'choices'     => json_encode([
                'Social media policy',
                'User conduct policy',
                'Acceptable use policy',
                'Collection policy'
            ]),
            'answer'      => 'Social media policy',
            'explanation' => 'Social media policies outline appropriate online behaviors and responsibilities.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 9
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'Which capital planning tool assesses long-term facility needs and replacement cycles?',
            'choices'     => json_encode([
                'Capital asset management plan',
                'Strategic plan',
                'Collection development policy',
                'Annual report'
            ]),
            'answer'      => 'Capital asset management plan',
            'explanation' => 'Capital asset plans schedule maintenance and replacements for physical assets over time.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 10
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'Which organizational development activity involves cross-departmental teams solving specific problems?',
            'choices'     => json_encode([
                'Task force',
                'Orientation',
                'Weeding',
                'Cataloging'
            ]),
            'answer'      => 'Task force',
            'explanation' => 'Task forces bring together diverse expertise to address focused projects or issues.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 11
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'Which risk response strategy involves reducing the likelihood or impact of a risk?',
            'choices'     => json_encode([
                'Risk avoidance',
                'Risk mitigation',
                'Risk transfer',
                'Risk acceptance'
            ]),
            'answer'      => 'Risk mitigation',
            'explanation' => 'Risk mitigation implements controls to lessen risk impact or probability.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 12
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'What process evaluates cost and benefits of potential new services before implementation?',
            'choices'     => json_encode([
                'Cost-benefit analysis',
                'SWOT analysis',
                'Gap analysis',
                'Force field analysis'
            ]),
            'answer'      => 'Cost-benefit analysis',
            'explanation' => 'Cost-benefit analysis compares projected costs and expected benefits for informed decisions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 13
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'Which tool tracks project milestones and visualizes progress over time?',
            'choices'     => json_encode([
                'Gantt chart',
                'Fishbone diagram',
                'SWOT matrix',
                'PERT chart'
            ]),
            'answer'      => 'Gantt chart',
            'explanation' => 'Gantt charts display task durations and milestones on a timeline.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 14
        [
            'subject_id'  => 50,
            'part'        => 5,
            'question'    => 'What management style balances direction with staff autonomy and feedback?',
            'choices'     => json_encode([
                'Autocratic',
                'Laissez-faire',
                'Participative',
                'Transactional'
            ]),
            'answer'      => 'Participative',
            'explanation' => 'Participative management involves staff input in decision-making while providing guidance.',
            'created_at'=> $now,'updated_at'=> $now],
        // 15
        [
            'subject_id'=>50,'part'=>5,'question'=>'Which emergency plan component lists critical services to restore first?',
            'choices'=>json_encode(['Recovery priority list','Risk register','Staff roster','Inventory list']),
            'answer'=>'Recovery priority list','explanation'=>'Prioritizes essential functions for rapid restoration after disruption.','created_at'=>$now,'updated_at'=>$now],
        // 16
        [
            'subject_id'=>50,'part'=>5,'question'=>'What analysis evaluates external technological trends that could impact library operations?',
            'choices'=>json_encode(['PEST analysis','SWOT analysis','Gap analysis','Root cause analysis']),
            'answer'=>'PEST analysis','explanation'=>'Assesses Political, Economic, Social, and Technological factors externally.','created_at'=>$now,'updated_at'=>$now],
        // 17
        [
            'subject_id'=>50,'part'=>5,'question'=>'Which measure tracks staff training hours against target requirements?',
            'choices'=>json_encode(['Training compliance rate','Turnover rate','Circulation rate','Budget variance']),
            'answer'=>'Training compliance rate','explanation'=>'Monitors completion of required training hours by staff.','created_at'=>$now,'updated_at'=>$now],
        // 18
        [
            'subject_id'=>50,'part'=>5,'question'=>'Which tool helps visualize budget allocations across departments as slices of a pie?',
            'choices'=>json_encode(['Pie chart','Bar graph','Line chart','Scatter plot']),
            'answer'=>'Pie chart','explanation'=>'Pie charts display proportional budget distributions visually.','created_at'=>$now,'updated_at'=>$now],
        // 19
        [
            'subject_id'=>50,'part'=>5,'question'=>'Which leadership competency focuses on motivating and inspiring staff toward a shared vision?',
            'choices'=>json_encode(['Transactional leadership','Transformational leadership','Laissez-faire leadership','Directive leadership']),
            'answer'=>'Transformational leadership','explanation'=>'Transformational leaders inspire and engage staff toward common goals.','created_at'=>$now,'updated_at'=>$now],
        // 20
        [
            'subject_id'=>50,'part'=>5,'question'=>'What is the final step in a risk management cycle after planning and response?',
            'choices'=>json_encode(['Evaluation and review','Risk identification','Risk acceptance','Communication']),
            'answer'=>'Evaluation and review','explanation'=>'Monitoring the effectiveness of risk responses completes the cycle.',
            'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

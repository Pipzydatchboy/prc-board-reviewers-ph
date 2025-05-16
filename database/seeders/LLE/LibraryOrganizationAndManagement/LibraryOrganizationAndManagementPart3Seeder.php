<?php

namespace Database\Seeders\LLE\LibraryOrganizationAndManagement;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LibraryOrganizationAndManagementPart3Seeder extends Seeder
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
            'part'        => 3,
            'question'    => 'Which planning technique identifies tasks that must precede others and computes the critical path?',
            'choices'     => json_encode([
                'Gantt chart',
                'PERT diagram',
                'SWOT matrix',
                'Fishbone diagram'
            ]),
            'answer'      => 'PERT diagram',
            'explanation' => 'PERT diagrams map task dependencies and calculate the critical path for project completion.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 2
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'In change management, which step involves communicating changes to stakeholders and staff?',
            'choices'     => json_encode([
                'Assessment',
                'Planning',
                'Implementation',
                'Communication'
            ]),
            'answer'      => 'Communication',
            'explanation' => 'Effective change management requires clear communication of upcoming changes to all stakeholders.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 3
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which financial ratio measures the percentage of budget spent on personnel?',
            'choices'     => json_encode([
                'Personnel cost ratio',
                'Operating margin',
                'Debt service ratio',
                'Circulation ratio'
            ]),
            'answer'      => 'Personnel cost ratio',
            'explanation' => 'Personnel cost ratio is calculated as total personnel expense divided by total operating budget.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 4
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'What is the purpose of benchmarking in library management?',
            'choices'     => json_encode([
                'To set collection policies',
                'To compare performance against peers',
                'To train staff',
                'To schedule programs'
            ]),
            'answer'      => 'To compare performance against peers',
            'explanation' => 'Benchmarking involves comparing metrics with similar institutions to identify areas for improvement.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 5
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which document outlines acceptable and prohibited behaviors for library patrons?',
            'choices'     => json_encode([
                'Circulation policy',
                'Acceptable use policy',
                'Collection development policy',
                'Reference policy'
            ]),
            'answer'      => 'Acceptable use policy',
            'explanation' => 'Acceptable use policies define patron conduct regarding library facilities and resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 6
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'What type of organizational culture emphasizes innovation, creativity, and risk-taking?',
            'choices'     => json_encode([
                'Hierarchy culture',
                'Adhocracy culture',
                'Clan culture',
                'Market culture'
            ]),
            'answer'      => 'Adhocracy culture',
            'explanation' => 'Adhocracy cultures foster innovation and risk-taking, often found in dynamic organizations.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 7
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'In stakeholder analysis, which group consists of individuals or entities directly impacted by library decisions?',
            'choices'     => json_encode([
                'Primary stakeholders',
                'Secondary stakeholders',
                'Tertiary stakeholders',
                'Passive stakeholders'
            ]),
            'answer'      => 'Primary stakeholders',
            'explanation' => 'Primary stakeholders are those most directly affected by decisions and outcomes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 8
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which risk management strategy involves transferring risk to an external party, such as insurance?',
            'choices'     => json_encode([
                'Risk avoidance',
                'Risk transfer',
                'Risk mitigation',
                'Risk acceptance'
            ]),
            'answer'      => 'Risk transfer',
            'explanation' => 'Risk transfer shifts financial consequences to insurers or contractors.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 9
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which model focuses on continuous improvement through Plan-Do-Check-Act cycles?',
            'choices'     => json_encode([
                'PDCA model',
                'Waterfall model',
                'Agile model',
                'Lean model'
            ]),
            'answer'      => 'PDCA model',
            'explanation' => 'The PDCA cycle is a structured method for process improvement in management.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 10
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'What is a balanced scorecard used for in library management?',
            'choices'     => json_encode([
                'Revenue tracking',
                'Performance measurement across multiple perspectives',
                'Catalog maintenance',
                'Weeding collections'
            ]),
            'answer'      => 'Performance measurement across multiple perspectives',
            'explanation' => 'Balanced scorecards track financial, customer, internal process, and learning metrics.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 11
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'What is the significance of vendor management in Acquisition workflows?',
            'choices'     => json_encode([
                'Determining shelf arrangement',
                'Maintaining relationships and negotiating contracts',
                'Designing catalogs',
                'Training staff'
            ]),
            'answer'      => 'Maintaining relationships and negotiating contracts',
            'explanation' => 'Vendor management involves contract negotiation and performance monitoring for acquisitions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 12
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which document outlines procedures for requesting and approving staff professional development?',
            'choices'     => json_encode([
                'Training plan',
                'HR policy manual',
                'Collection policy',
                'Facilities plan'
            ]),
            'answer'      => 'HR policy manual',
            'explanation' => 'HR manuals define policies for training requests and approvals.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 13
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'What analysis identifies gaps between current performance and desired goals?',
            'choices'     => json_encode([
                'SWOT analysis',
                'Gap analysis',
                'Risk analysis',
                'PEST analysis'
            ]),
            'answer'      => 'Gap analysis',
            'explanation' => 'Gap analysis compares actual performance against targets to highlight improvement needs.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 14
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which scheduling method is optimal for recurring library events like storytime?',
            'choices'     => json_encode([
                'Calendar scheduling',
                'Project scheduling',
                'Dynamic scheduling',
                'Monte Carlo scheduling'
            ]),
            'answer'      => 'Calendar scheduling',
            'explanation' => 'Calendar scheduling plans recurring events based on dates and times in a calendar system.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 15
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'What practice involves allocating resources to projects based on strategic priorities?',
            'choices'     => json_encode([
                'Resource leveling',
                'Resource smoothing',
                'Portfolio management',
                'Capacity planning'
            ]),
            'answer'      => 'Portfolio management',
            'explanation' => 'Portfolio management aligns project and program investments with strategic goals.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 16
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which system feature automates overdue notice generation and distribution?',
            'choices'     => json_encode([
                'Circulation module',
                'Acquisition module',
                'OPAC module',
                'Cataloging module'
            ]),
            'answer'      => 'Circulation module',
            'explanation' => 'The circulation module manages checkouts, returns, and automated notices.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 17
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'In succession planning, which tool identifies potential internal candidates for leadership roles?',
            'choices'     => json_encode([
                'Talent matrix',
                'Org chart',
                'Strategic plan',
                'Budget report'
            ]),
            'answer'      => 'Talent matrix',
            'explanation' => 'Talent matrices map employee skills and readiness for future roles.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 18
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which term refers to the systematic tracking of key performance indicators (KPIs)?',
            'choices'     => json_encode([
                'Performance monitoring',
                'Goal setting',
                'Benchmarking',
                'Risk assessment'
            ]),
            'answer'      => 'Performance monitoring',
            'explanation' => 'Performance monitoring tracks KPIs to evaluate ongoing operations.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 19
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'Which leadership style is most effective when swift decisions are critical?',
            'choices'     => json_encode([
                'Democratic',
                'Autocratic',
                'Laissez-faire',
                'Servant'
            ]),
            'answer'      => 'Autocratic',
            'explanation' => 'Autocratic leaders make quick decisions without extensive consultation.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 20
        [
            'subject_id'  => 50,
            'part'        => 3,
            'question'    => 'What risk management activity involves regular review of identified risks and mitigation plans?',
            'choices'     => json_encode([
                'Risk monitoring',
                'Risk identification',
                'Risk response planning',
                'Risk analysis'
            ]),
            'answer'      => 'Risk monitoring',
            'explanation' => 'Risk monitoring tracks risk status and effectiveness of mitigation over time.',
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

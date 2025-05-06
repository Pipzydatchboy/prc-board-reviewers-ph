<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

//1
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which organizational principle refers to the clear delineation of duties among units and personnel?',
    'choices'     => json_encode([
        'Division of labor',
        'Unity of command',
        'Span of control',
        'Chain of command',
    ]),
    'answer'      => 'Division of labor',
    'explanation' => 'Division of labor groups tasks by function, increasing specialization and efficiency.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Under RA 6975, how many members constitute the NAPOLCOM Chairman’s Advisory Board?',
    'choices'     => json_encode([
        '11',
        '9',
        '7',
        '5',
    ]),
    'answer'      => '11',
    'explanation' => 'NAPOLCOM’s Advisory Board comprises 11 members including the DILG Secretary as Chair.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which stage of the police management cycle establishes performance standards and benchmarks?',
    'choices'     => json_encode([
        'Planning',
        'Organizing',
        'Directing',
        'Controlling',
    ]),
    'answer'      => 'Planning',
    'explanation' => 'Planning sets goals and performance criteria before implementing actions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'What is the term for the maximum number of direct reports a supervisor can effectively manage?',
    'choices'     => json_encode([
        'Span of control',
        'Unity of command',
        'Hierarchy',
        'Environmental scanning',
    ]),
    'answer'      => 'Span of control',
    'explanation' => 'Span of control limits direct reports to maintain supervision quality.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which budgeting approach starts from zero each cycle, justifying all expenses?',
    'choices'     => json_encode([
        'Zero-based budgeting',
        'Incremental budgeting',
        'Performance budgeting',
        'Program budgeting',
    ]),
    'answer'      => 'Zero-based budgeting',
    'explanation' => 'Zero-based budgeting requires justification of all costs each period, rather than basing on prior budgets.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which police management function involves matching individuals to job requirements?',
    'choices'     => json_encode([
        'Staffing',
        'Organizing',
        'Coordinating',
        'Directing',
    ]),
    'answer'      => 'Staffing',
    'explanation' => 'Staffing includes recruitment, selection, placement, and training to fill positions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which analytical tool assesses external factors that impact police planning: political, economic, social, technological?',
    'choices'     => json_encode([
        'PEST analysis',
        'SWOT analysis',
        'Gap analysis',
        'Cost-benefit analysis',
    ]),
    'answer'      => 'PEST analysis',
    'explanation' => 'PEST analysis evaluates external macro-environmental factors for strategic planning.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which principle ensures that each police member reports to a single supervisor?',
    'choices'     => json_encode([
        'Unity of command',
        'Span of control',
        'Division of labor',
        'Specialization',
    ]),
    'answer'      => 'Unity of command',
    'explanation' => 'Unity of command avoids conflicting instructions by assigning one superior per subordinate.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which component of plan formulation defines steps, timelines, and resource allocation?',
    'choices'     => json_encode([
        'Operational plan',
        'Strategic vision',
        'Policy directive',
        'Organizational chart',
    ]),
    'answer'      => 'Operational plan',
    'explanation' => 'Operational plans detail actions, schedules, and resources for implementation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'What is the name of the Philippine department that provides administrative supervision but not operational control over the PNP?',
    'choices'     => json_encode([
        'Department of the Interior and Local Government',
        'Department of National Defense',
        'Department of Justice',
        'Department of the Interior',
    ]),
    'answer'      => 'Department of the Interior and Local Government',
    'explanation' => 'DILG has administrative supervision of PNP, while NAPOLCOM holds operational control.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which planning level addresses long-term goals and broad policies for police force development?',
    'choices'     => json_encode([
        'Strategic planning',
        'Tactical planning',
        'Operational planning',
        'Contingency planning',
    ]),
    'answer'      => 'Strategic planning',
    'explanation' => 'Strategic planning sets vision, mission, and long-range objectives.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which document outlines the structure, functions, and relationships within the PNP?',
    'choices'     => json_encode([
        'PNP organizational manual',
        'Budget report',
        'Standard operating procedure',
        'Training syllabus',
    ]),
    'answer'      => 'PNP organizational manual',
    'explanation' => 'The organizational manual describes hierarchy, units, and responsibilities.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which tool measures deviations between planned and actual performance in police operations?',
    'choices'     => json_encode([
        'Variance analysis',
        'Trend analysis',
        'Trend forecasting',
        'Process mapping',
    ]),
    'answer'      => 'Variance analysis',
    'explanation' => 'Variance analysis identifies gaps by comparing expected versus actual results.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which financial document specifies estimated revenues and expenditures for police activities?',
    'choices'     => json_encode([
        'Annual budget',
        'Strategic plan',
        'Organizational chart',
        'Deployment schedule',
    ]),
    'answer'      => 'Annual budget',
    'explanation' => 'The annual budget allocates funding to programs, personnel, and equipment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which committee within the PNP reviews and endorses annual plans and budgets to NAPOLCOM?',
    'choices'     => json_encode([
        'PPMC (Police Plans and Management Committee)',
        'SGOC (Staff Group Officer in Charge)',
        'AIDU (Administrative and Intelligence Development Unit)',
        'DPDC (Drug Prevention and Control Committee)',
    ]),
    'answer'      => 'PPMC (Police Plans and Management Committee)',
    'explanation' => 'PPMC coordinates planning and management functions before submission to NAPOLCOM.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which analysis technique identifies critical incidents requiring contingency plans?',
    'choices'     => json_encode([
        'Scenario analysis',
        'SWOT analysis',
        'PEST analysis',
        'Cost-benefit analysis',
    ]),
    'answer'      => 'Scenario analysis',
    'explanation' => 'Scenario analysis explores potential future events for preparedness and contingency planning.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which concept ensures that plans remain relevant by regularly reviewing and adjusting objectives?',
    'choices'     => json_encode([
        'Feedback loop',
        'Unity of command',
        'Span of control',
        'Division of labor',
    ]),
    'answer'      => 'Feedback loop',
    'explanation' => 'Feedback loops allow adjustments based on performance monitoring and control.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which strategic policing plan focuses on reducing crime through analysis, response, and assessment?',
    'choices'     => json_encode([
        'SARA model',
        'Community policing',
        'Zero tolerance policing',
        'Random patrol model',
    ]),
    'answer'      => 'SARA model',
    'explanation' => 'The SARA (Scanning, Analysis, Response, Assessment) model is used in problem-oriented policing.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'Which planning document identifies potential resource shortfalls and proposes mitigation measures?',
    'choices'     => json_encode([
        'Resource gap analysis',
        'Organizational chart',
        'Policy directive',
        'Training plan',
    ]),
    'answer'      => 'Resource gap analysis',
    'explanation' => 'Resource gap analysis highlights deficiencies in staffing, equipment, and funding for action.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 7,
    'question'    => 'What tool automates tracking of budget execution and program performance in PNP?',
    'choices'     => json_encode([
        'Management Information System (MIS)',
        'Radio repeater network',
        'Field training manual',
        'Recruitment portal',
    ]),
    'answer'      => 'Management Information System (MIS)',
    'explanation' => 'MIS platforms support real-time monitoring of financial and operational data.',
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

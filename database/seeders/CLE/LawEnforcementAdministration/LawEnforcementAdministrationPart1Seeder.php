<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart1Seeder extends Seeder
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
    'part'        => 1,
    'question'    => 'Which year was the Philippine National Police (PNP) formally established under Republic Act 6975?',
    'choices'     => json_encode([
        '1990',
        '1991',
        '1992',
        '1993',
    ]),
    'answer'      => '1991',
    'explanation' => 'RA 6975, signed in December 1990, took effect January 29, 1991, formally creating the PNP.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Under RA 6975, which government department has administrative supervision over the PNP?',
    'choices'     => json_encode([
        'Department of Interior and Local Government',
        'Department of National Defense',
        'Department of Justice',
        'Department of Public Works and Highways',
    ]),
    'answer'      => 'Department of Interior and Local Government',
    'explanation' => 'RA 6975 placed the PNP under the administrative supervision of the DILG.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'What is the highest policy-making body for the PNP as created by RA 6975?',
    'choices'     => json_encode([
        'National Police Commission (NAPOLCOM)',
        'PNP Director General’s Office',
        'Civil Service Commission',
        'Philippine Public Safety Academy Board',
    ]),
    'answer'      => 'National Police Commission (NAPOLCOM)',
    'explanation' => 'NAPOLCOM has policy-making, administrative and operational control over the PNP under RA 6975.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which principle asserts that each member should report to one superior only?',
    'choices'     => json_encode([
        'Unity of command',
        'Span of control',
        'Division of labor',
        'Authority and responsibility',
    ]),
    'answer'      => 'Unity of command',
    'explanation' => 'Unity of command ensures that subordinates receive orders from only one superior to avoid confusion.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'In the police management cycle, which stage involves allocating resources and assigning tasks to personnel?',
    'choices'     => json_encode([
        'Organizing',
        'Planning',
        'Staffing',
        'Controlling',
    ]),
    'answer'      => 'Organizing',
    'explanation' => 'Organizing arranges resources and tasks to implement the plan effectively.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which stage of the police planning process involves setting objectives and determining actions to achieve them?',
    'choices'     => json_encode([
        'Planning',
        'Directing',
        'Controlling',
        'Coordinating',
    ]),
    'answer'      => 'Planning',
    'explanation' => 'Planning defines goals and the means to achieve them before action.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which function of police management evaluates performance and ensures plans are executed as intended?',
    'choices'     => json_encode([
        'Controlling',
        'Staffing',
        'Directing',
        'Planning',
    ]),
    'answer'      => 'Controlling',
    'explanation' => 'Controlling compares actual performance against standards and makes corrections.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Under RA 6975, who serves as the ex officio Chairman of NAPOLCOM?',
    'choices'     => json_encode([
        'Secretary of the Interior and Local Government',
        'Chief of PNP',
        'Attorney General',
        'Chief Justice',
    ]),
    'answer'      => 'Secretary of the Interior and Local Government',
    'explanation' => 'The DILG Secretary serves as ex officio Chairman of NAPOLCOM under RA 6975.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which phase in police planning ensures cooperation among units and external agencies?',
    'choices'     => json_encode([
        'Coordinating',
        'Budgeting',
        'Directing',
        'Staffing',
    ]),
    'answer'      => 'Coordinating',
    'explanation' => 'Coordinating aligns activities of different units and stakeholders toward common goals.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'In budgeting for police operations, what is the primary purpose of preparing an annual budget?',
    'choices'     => json_encode([
        'Allocate financial resources to meet objectives',
        'Recruit new personnel',
        'Train officers in planning',
        'Coordinate with other agencies',
    ]),
    'answer'      => 'Allocate financial resources to meet objectives',
    'explanation' => 'Budgeting allocates funds to programs and activities to achieve organizational goals.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which historical model influenced the modern Philippine police organization prior to 1935?',
    'choices'     => json_encode([
        'American colonial constabulary',
        'Spanish municipal guardia',
        'Japanese Kempeitai',
        'British metropolitan police',
    ]),
    'answer'      => 'American colonial constabulary',
    'explanation' => 'The Philippine Constabulary was established under American rule in 1901 as a national police force.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which organizational concept emphasizes specialization and task grouping in police units?',
    'choices'     => json_encode([
        'Division of labor',
        'Unity of command',
        'Span of control',
        'Chain of command',
    ]),
    'answer'      => 'Division of labor',
    'explanation' => 'Division of labor groups tasks by function or specialization for efficiency.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which plan would a police chief formulate for controlling large public rallies?',
    'choices'     => json_encode([
        'Crowd control plan',
        'VIP protection plan',
        'Raid operations plan',
        'Disaster response plan',
    ]),
    'answer'      => 'Crowd control plan',
    'explanation' => 'Crowd control plans address strategies and resources for safely managing large gatherings.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'In planning for VIP security, which factor is most critical to assess first?',
    'choices'     => json_encode([
        'Threat assessment',
        'Media coverage',
        'Venue sanitation',
        'Traffic flow',
    ]),
    'answer'      => 'Threat assessment',
    'explanation' => 'Threat assessment identifies potential risks to the VIP, guiding security measures.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which component of staffing ensures that qualified individuals fill police positions?',
    'choices'     => json_encode([
        'Selection',
        'Training',
        'Orientation',
        'Evaluation',
    ]),
    'answer'      => 'Selection',
    'explanation' => 'Selection uses tests and interviews to choose candidates who meet position requirements.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which authority does a city mayor exercise as deputy of NAPOLCOM in police administration?',
    'choices'     => json_encode([
        'Approve PNP plans locally',
        'Conduct police operations',
        'Arrest suspects',
        'Issue ordinances',
    ]),
    'answer'      => 'Approve PNP plans locally',
    'explanation' => 'Mayors review and endorse local police plans under their role as NAPOLCOM deputies.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which function in the police cycle involves issuing orders and directives to personnel?',
    'choices'     => json_encode([
        'Directing',
        'Staffing',
        'Coordinating',
        'Budgeting',
    ]),
    'answer'      => 'Directing',
    'explanation' => 'Directing guides and supervises personnel to ensure plans are carried out.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which budgeting technique allocates funds based on past performance and projections?',
    'choices'     => json_encode([
        'Incremental budgeting',
        'Zero-based budgeting',
        'Performance budgeting',
        'Program budgeting',
    ]),
    'answer'      => 'Incremental budgeting',
    'explanation' => 'Incremental budgeting adjusts previous budgets by a percentage to determine new allocations.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which planning output defines specific tasks, resources, and timelines for police operations?',
    'choices'     => json_encode([
        'Operational plan',
        'Strategic plan',
        'Budget estimate',
        'Policy guideline',
    ]),
    'answer'      => 'Operational plan',
    'explanation' => 'Operational plans translate strategic objectives into actionable tasks with schedules.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 1,
    'question'    => 'Which organizational principle limits the number of subordinates a commander can effectively supervise?',
    'choices'     => json_encode([
        'Span of control',
        'Unity of command',
        'Division of labor',
        'Chain of command',
    ]),
    'answer'      => 'Span of control',
    'explanation' => 'Span of control defines the optimal number of direct reports to maintain effective supervision.',
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

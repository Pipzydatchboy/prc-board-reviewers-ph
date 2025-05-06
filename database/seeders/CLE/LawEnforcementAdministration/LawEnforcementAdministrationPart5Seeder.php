<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart5Seeder extends Seeder
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
    'part'        => 5,
    'question'    => 'What is the primary purpose of the recruitment function in police personnel management?',
    'choices'     => json_encode([
        'To attract qualified candidates',
        'To discipline officers',
        'To schedule training',
        'To manage retirements',
    ]),
    'answer'      => 'To attract qualified candidates',
    'explanation' => 'Recruitment seeks to draw capable individuals to fill vacancies in the police force.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which activity involves defining the duties and responsibilities of a police position?',
    'choices'     => json_encode([
        'Job analysis',
        'Performance evaluation',
        'Background investigation',
        'Compensation review',
    ]),
    'answer'      => 'Job analysis',
    'explanation' => 'Job analysis breaks down tasks and responsibilities to develop job descriptions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'What document specifies the qualifications required for a police position?',
    'choices'     => json_encode([
        'Job specification',
        'Job description',
        'Appointment order',
        'Training plan',
    ]),
    'answer'      => 'Job specification',
    'explanation' => 'Job specifications list the skills, education, and experience needed for a position.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which selection tool is commonly used to assess applicants’ knowledge of police procedures?',
    'choices'     => json_encode([
        'Written examination',
        'Medical test',
        'Physical agility test',
        'Oral presentation',
    ]),
    'answer'      => 'Written examination',
    'explanation' => 'Written exams evaluate candidates’ theoretical understanding and decision-making skills.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'What process verifies the integrity and background of police candidates?',
    'choices'     => json_encode([
        'Background investigation',
        'Performance review',
        'Compensation audit',
        'Training needs assessment',
    ]),
    'answer'      => 'Background investigation',
    'explanation' => 'Background checks confirm candidates’ history, character, and suitability for service.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which examination assesses the physical fitness of police recruits?',
    'choices'     => json_encode([
        'Physical agility test',
        'Written examination',
        'Medical clearance',
        'Polygraph test',
    ]),
    'answer'      => 'Physical agility test',
    'explanation' => 'Physical agility tests measure strength, endurance, and coordination for policing tasks.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which official document formally places an individual into a police position?',
    'choices'     => json_encode([
        'Appointment order',
        'Job description',
        'Performance report',
        'Resignation letter',
    ]),
    'answer'      => 'Appointment order',
    'explanation' => 'Appointment orders are official instruments issued by the appointing authority.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which system is used to evaluate police officers’ work performance periodically?',
    'choices'     => json_encode([
        'Performance evaluation system',
        'Recruitment system',
        'Compensation system',
        'Retirement system',
    ]),
    'answer'      => 'Performance evaluation system',
    'explanation' => 'Performance evaluations measure officers’ effectiveness against set standards.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'What is the primary purpose of a compensation program in police administration?',
    'choices'     => json_encode([
        'Provide fair and equitable pay',
        'Discipline underperforming officers',
        'Manage training schedules',
        'Organize personnel records',
    ]),
    'answer'      => 'Provide fair and equitable pay',
    'explanation' => 'Compensation programs ensure officers receive remuneration aligned with duties and responsibilities.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which allowance compensates officers for performing especially dangerous tasks?',
    'choices'     => json_encode([
        'Hazard pay',
        'Longevity pay',
        'Clothing allowance',
        'Meal allowance',
    ]),
    'answer'      => 'Hazard pay',
    'explanation' => 'Hazard pay is granted for duties involving significant risk to safety.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which process prepares officers for higher responsibilities through training and education?',
    'choices'     => json_encode([
        'Career development',
        'Performance appraisal',
        'Recruitment',
        'Background investigation',
    ]),
    'answer'      => 'Career development',
    'explanation' => 'Career development includes programs for promotion readiness and skill enhancement.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which action advances an officer to a higher rank based on merit and vacancy?',
    'choices'     => json_encode([
        'Promotion',
        'Appointment',
        'Assignment',
        'Evaluation',
    ]),
    'answer'      => 'Promotion',
    'explanation' => 'Promotions are granted according to rules of seniority, merit, and available positions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which system addresses misconduct and imposes penalties within the police force?',
    'choices'     => json_encode([
        'Disciplinary action system',
        'Recruitment system',
        'Compensation system',
        'Recordkeeping system',
    ]),
    'answer'      => 'Disciplinary action system',
    'explanation' => 'Disciplinary systems manage complaints, investigations, and sanctions for infractions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which penalty involves temporary removal from duty without pay?',
    'choices'     => json_encode([
        'Suspension',
        'Demotion',
        'Reprimand',
        'Dismissal',
    ]),
    'answer'      => 'Suspension',
    'explanation' => 'Suspension bars officers from duty and pay for a specified period for infractions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which penalty permanently removes an officer from service?',
    'choices'     => json_encode([
        'Dismissal',
        'Suspension',
        'Reprimand',
        'Depromotion',
    ]),
    'answer'      => 'Dismissal',
    'explanation' => 'Dismissal is the most severe administrative penalty, terminating employment.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which separation occurs when an officer reaches the mandatory retirement age?',
    'choices'     => json_encode([
        'Retirement',
        'Resignation',
        'Dismissal',
        'Transfer',
    ]),
    'answer'      => 'Retirement',
    'explanation' => 'Retirement is separation from service upon reaching prescribed age or length of service.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which separation is initiated by an officer\'s voluntary request to leave service?',
    'choices'     => json_encode([
        'Resignation',
        'Retirement',
        'Suspension',
        'Dismissal',
    ]),
    'answer'      => 'Resignation',
    'explanation' => 'Resignation is voluntary separation when an officer opts to leave service.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which personnel document contains an officer’s entire service record, including assignments and evaluations?',
    'choices'     => json_encode([
        'Personal service record',
        'Training file',
        'Medical record',
        'Duty roster',
    ]),
    'answer'      => 'Personal service record',
    'explanation' => 'Personal service records detail postings, performance, and disciplinary history.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'Which unit is primarily responsible for maintaining personnel files and records?',
    'choices'     => json_encode([
        'Personnel Records Unit',
        'Operations Unit',
        'Intelligence Unit',
        'Budget Unit',
    ]),
    'answer'      => 'Personnel Records Unit',
    'explanation' => 'The Personnel Records Unit organizes and safeguards all service-related documents.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 5,
    'question'    => 'What is the main benefit of effective police personnel records management?',
    'choices'     => json_encode([
        'Accurate tracking of officer history and credentials',
        'Faster response times',
        'Lower training costs',
        'Increased patrol coverage',
    ]),
    'answer'      => 'Accurate tracking of officer history and credentials',
    'explanation' => 'Well-maintained records ensure reliable information for personnel decisions and accountability.',
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

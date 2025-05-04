<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart9Seeder extends Seeder
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

       // Part 9: Arts Leadership & Program Management

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which document outlines the strategic direction and goals of an arts organization?',
           'choices'    => json_encode([
               'Strategic plan',
               'Financial report',
               'Marketing brochure',
               'Operational manual',
           ]),
           'answer'     => 'Strategic plan',
           'explanation'=> 'A strategic plan defines vision, mission, objectives, and action steps for an organization.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What is the primary purpose of a grant proposal in arts management?',
           'choices'    => json_encode([
               'To secure funding by articulating project objectives and budget',
               'To advertise a performance to the public',
               'To document rehearsal schedules',
               'To report attendance figures post-event',
           ]),
           'answer'     => 'To secure funding by articulating project objectives and budget',
           'explanation'=> 'Grant proposals persuade funders by presenting need, plan, and financial details.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which budgeting method estimates costs based on projected activities and expenses?',
           'choices'    => json_encode([
               'Activity-based budgeting',
               'Zero-based budgeting',
               'Incremental budgeting',
               'Historical budgeting',
           ]),
           'answer'     => 'Activity-based budgeting',
           'explanation'=> 'Activity-based budgeting ties resources to specific projects and tasks.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What role does an arts manager play in stakeholder engagement?',
           'choices'    => json_encode([
               'Building relationships and partnerships with funders, audiences, and artists',
               'Designing costumes for productions',
               'Conducting voice lessons for performers',
               'Operating lighting equipment',
           ]),
           'answer'     => 'Building relationships and partnerships with funders, audiences, and artists',
           'explanation'=> 'Stakeholder engagement involves networking, communication, and collaboration.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which leadership style involves collaborative decision-making and shared authority?',
           'choices'    => json_encode([
               'Participative leadership',
               'Autocratic leadership',
               'Transactional leadership',
               'Laissez-faire leadership',
           ]),
           'answer'     => 'Participative leadership',
           'explanation'=> 'Participative leaders involve team members in planning and decisions.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What is a program evaluation in arts management?',
           'choices'    => json_encode([
               'Systematic assessment of project outcomes against objectives',
               'Printing of event programs',
               'Financial reconciliation of ticket sales',
               'Recruitment of volunteers',
           ]),
           'answer'     => 'Systematic assessment of project outcomes against objectives',
           'explanation'=> 'Program evaluations measure effectiveness and inform future planning.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which fundraising strategy involves ongoing small donations from a broad base of supporters?',
           'choices'    => json_encode([
               'Micropatronage',
               'Major gifts',
               'Corporate sponsorship',
               'Foundations grants',
           ]),
           'answer'     => 'Micropatronage',
           'explanation'=> 'Micropatronage leverages many small contributions, often online.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What is risk management in the context of arts events?',
           'choices'    => json_encode([
               'Identifying and mitigating potential hazards and liabilities',
               'Marketing new shows',
               'Catering services',
               'Stage lighting design',
           ]),
           'answer'     => 'Identifying and mitigating potential hazards and liabilities',
           'explanation'=> 'Risk management ensures safety and legal compliance for participants and audiences.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which tool helps organizers track attendance, sales, and audience demographics?',
           'choices'    => json_encode([
               'Event management software',
               'Handwritten registers',
               'Social media posts',
               'Printed flyers',
           ]),
           'answer'     => 'Event management software',
           'explanation'=> 'Software like Ticketing platforms provides analytics on audiences and sales.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What is the purpose of a post-mortem debrief after an arts project?',
           'choices'    => json_encode([
               'Discuss successes and areas for improvement',
               'Finalize financial accounts only',
               'Distribute programs to audience',
               'Recruit performers for next season',
           ]),
           'answer'     => 'Discuss successes and areas for improvement',
           'explanation'=> 'Debriefs help teams learn and refine future project execution.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which metric assesses the financial viability of an arts program?',
           'choices'    => json_encode([
               'Return on investment (ROI)',
               'Critic reviews',
               'Artistic quality',
               'Number of rehearsals',
           ]),
           'answer'     => 'Return on investment (ROI)',
           'explanation'=> 'ROI compares net benefits to costs to evaluate financial performance.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What does stakeholder analysis involve?',
           'choices'    => json_encode([
               'Identifying and prioritizing individuals or groups impacted by a project',
               'Casting performers',
               'Designing sets',
               'Programming lighting cues',
           ]),
           'answer'     => 'Identifying and prioritizing individuals or groups impacted by a project',
           'explanation'=> 'Stakeholder analysis informs engagement and communication strategies.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which governance structure includes a board of directors overseeing an arts organization?',
           'choices'    => json_encode([
               'Nonprofit board governance',
               'Sole proprietorship',
               'Franchise model',
               'Informal collective',
           ]),
           'answer'     => 'Nonprofit board governance',
           'explanation'=> 'Boards provide oversight, fiduciary responsibility, and strategic guidance.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What is program sustainability in arts management?',
           'choices'    => json_encode([
               'Ability to maintain program quality and funding over time',
               'Holding programs for one season only',
               'Rapid expansion without planning',
               'Short-term project focus',
           ]),
           'answer'     => 'Ability to maintain program quality and funding over time',
           'explanation'=> 'Sustainability ensures ongoing resources, audience support, and impact.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which funding source provides unrestricted support for an organization’s general operations?',
           'choices'    => json_encode([
               'Operating grants',
               'Project grants',
               'Event sponsorships',
               'Ticket sales',
           ]),
           'answer'     => 'Operating grants',
           'explanation'=> 'Operating grants cover core functions rather than specific projects.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What is the main goal of audience development?',
           'choices'    => json_encode([
               'Expanding and diversifying an organization’s audience base',
               'Reducing marketing costs',
               'Limiting access to performances',
               'Increasing rehearsal times',
           ]),
           'answer'     => 'Expanding and diversifying an organization’s audience base',
           'explanation'=> 'Audience development strategies target new demographics and enhance engagement.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which evaluation report summarizes lessons learned and recommendations post-project?',
           'choices'    => json_encode([
               'After-action report',
               'Promotional brochure',
               'Financial prospectus',
               'Staff roster',
           ]),
           'answer'     => 'After-action report',
           'explanation'=> 'After-action reports capture insights and guidance for future initiatives.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'What risk mitigation strategy reduces reliance on a single funding source?',
           'choices'    => json_encode([
               'Diversifying revenue streams',
               'Increasing ticket prices only',
               'Eliminating community partnerships',
               'Focusing solely on donations',
           ]),
           'answer'     => 'Diversifying revenue streams',
           'explanation'=> 'Multiple income sources enhance financial stability and reduce vulnerability.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which policy governs ethical guidelines and responsibilities of an arts nonprofit board?',
           'choices'    => json_encode([
               'Board governance policy',
               'Safety manual',
               'Technical rider',
               'Marketing plan',
           ]),
           'answer'     => 'Board governance policy',
           'explanation'=> 'Governance policies outline roles, duties, and ethical standards for board members.',
           'created_at' => $now,
           'updated_at' => $now,
       ];
       
       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 9,
           'question'   => 'Which component of a grant budget details personnel, materials, and overhead costs?',
           'choices'    => json_encode([
               'Line-item budget',
               'Narrative summary',
               'Timeline',
               'Curriculum outline',
           ]),
           'answer'     => 'Line-item budget',
           'explanation'=> 'A line-item budget provides a detailed breakdown of projected expenses.',
           'created_at' => $now,
           'updated_at' => $now,
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart10Seeder extends Seeder
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

       // Part 10: Industry Linkages and Stakeholder Engagement in TVET

       //1
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'What is the primary purpose of industry linkages in TVET?',
           'choices'     => json_encode([
               'Align training with workforce needs',
               'Reduce tuition fees',
               'Limit student enrollment',
               'Standardize teaching methods',
           ]),
           'answer'      => 'Align training with workforce needs',
           'explanation' => 'Industry partnerships ensure graduates possess skills in demand by employers.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which stakeholder typically provides internship opportunities?',
           'choices'     => json_encode([
               'Industry employers',
               'Parents',
               'Alumni associations',
               'Local communities',
           ]),
           'answer'      => 'Industry employers',
           'explanation' => 'Employers host interns to develop workplace experience and evaluate potential hires.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'What is an apprenticeship?',
           'choices'     => json_encode([
               'Structured on-the-job training with theoretical instruction',
               'Short-term workshop',
               'Online course only',
               'Field trip analysis',
           ]),
           'answer'      => 'Structured on-the-job training with theoretical instruction',
           'explanation' => 'Apprentices combine hands-on work experience with classroom learning.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which document formalizes partnership between a TVET institute and industry?',
           'choices'     => json_encode([
               'Memorandum of Understanding (MoU)',
               'Course syllabus',
               'Training manual',
               'Student handbook',
           ]),
           'answer'      => 'Memorandum of Understanding (MoU)',
           'explanation' => 'An MoU outlines roles, responsibilities, and terms of collaboration.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which committee advises on curriculum relevance to industry trends?',
           'choices'     => json_encode([
               'Industry Advisory Board',
               'Student Council',
               'Library Committee',
               'Alumni Network',
           ]),
           'answer'      => 'Industry Advisory Board',
           'explanation' => 'Advisory boards include industry experts to guide curriculum development.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'What is the role of labor market information in TVET planning?',
           'choices'     => json_encode([
               'Identify skills in high demand',
               'Set admission quotas',
               'Calculate tuition fees',
               'Organize student events',
           ]),
           'answer'      => 'Identify skills in high demand',
           'explanation' => 'Labor market data informs which competencies are needed by employers.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which engagement involves employer input on training content?',
           'choices'     => json_encode([
               'Stakeholder consultation',
               'Student orientation',
               'Library orientation',
               'Sports festival',
           ]),
           'answer'      => 'Stakeholder consultation',
           'explanation' => 'Consultations gather feedback from employers on curriculum and skill gaps.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which partnership model shares resources between institute and industry?',
           'choices'     => json_encode([
               'Public-Private Partnership (PPP)',
               'Joint venture',
               'Franchise model',
               'Trade fair',
           ]),
           'answer'      => 'Public-Private Partnership (PPP)',
           'explanation' => 'PPPs combine public institute and private sector resources for training programs.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'What is tracer study used for in TVET?',
           'choices'     => json_encode([
               'Track graduate employment outcomes',
               'Record attendance',
               'Manage course materials',
               'Plan field trips',
           ]),
           'answer'      => 'Track graduate employment outcomes',
           'explanation' => 'Tracer studies follow graduates to assess program effectiveness and employment rates.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which mechanism ensures continuous feedback from employers?',
           'choices'     => json_encode([
               'Employer satisfaction surveys',
               'Sports tournaments',
               'Book fairs',
               'Alumni reunions',
           ]),
           'answer'      => 'Employer satisfaction surveys',
           'explanation' => 'Surveys collect employer views on graduate preparedness and program quality.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which event connects students with potential employers?',
           'choices'     => json_encode([
               'Job fair',
               'Science fair',
               'Music festival',
               'Sports gala',
           ]),
           'answer'      => 'Job fair',
           'explanation' => 'Job fairs allow students to explore employment and networking opportunities.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'What is dual training system?',
           'choices'     => json_encode([
               'Integrated workplace and classroom training',
               'Online training only',
               'Weekend workshops',
               'Field trips only',
           ]),
           'answer'      => 'Integrated workplace and classroom training',
           'explanation' => 'Dual systems alternate practical training at a company with academic instruction.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which platform supports online stakeholder collaboration?',
           'choices'     => json_encode([
               'Industry collaboration portal',
               'Social media feed',
               'Email only',
               'Printed newsletter',
           ]),
           'answer'      => 'Industry collaboration portal',
           'explanation' => 'Portals facilitate document sharing and feedback between institutes and partners.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which policy supports formal recognition of industry qualifications?',
           'choices'     => json_encode([
               'Qualification Recognition Framework',
               'Attendance Policy',
               'Examination Code',
               'Health and Safety Guide',
           ]),
           'answer'      => 'Qualification Recognition Framework',
           'explanation' => 'This framework aligns industry credentials with academic qualifications.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'What is the benefit of community engagement for TVET institutions?',
           'choices'     => json_encode([
               'Strengthened local partnerships and support',
               'Reduced student fees',
               'Less administrative work',
               'Shorter term programs',
           ]),
           'answer'      => 'Strengthened local partnerships and support',
           'explanation' => 'Community ties promote resource sharing and program relevance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which mechanism tracks graduate career progression?',
           'choices'     => json_encode([
               'Alumni tracking system',
               'Course catalog',
               'Library inventory',
               'Sports roster',
           ]),
           'answer'      => 'Alumni tracking system',
           'explanation' => 'It records employment and further study data of graduates.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which report analyzes industry partnership effectiveness?',
           'choices'     => json_encode([
               'Partnership performance report',
               'Financial audit',
               'Library usage study',
               'Sports performance review',
           ]),
           'answer'      => 'Partnership performance report',
           'explanation' => 'This report evaluates outcomes and areas for improvement in collaborations.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which stakeholder reviews graduate competencies for relevance?',
           'choices'     => json_encode([
               'Employer review panel',
               'Sports coach',
               'Librarian board',
               'Student dance troupe',
           ]),
           'answer'      => 'Employer review panel',
           'explanation' => 'Panels of employers assess whether skills match workplace requirements.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'What is the role of MoUs in continuing professional development?',
           'choices'     => json_encode([
               'Facilitate joint training programs with industry',
               'Set student grading policies',
               'Manage campus facilities',
               'Organize sports events',
           ]),
           'answer'      => 'Facilitate joint training programs with industry',
           'explanation' => 'MoUs enable collaborative workshops and skill-up sessions for staff.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 17,
           'part'        => 10,
           'question'    => 'Which system documents resource contributions from partners?',
           'choices'     => json_encode([
               'Partnership management system',
               'Online learning platform',
               'Student records database',
               'Library catalog',
           ]),
           'answer'      => 'Partnership management system',
           'explanation' => 'This system logs equipment, funds, and expertise provided by stakeholders.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

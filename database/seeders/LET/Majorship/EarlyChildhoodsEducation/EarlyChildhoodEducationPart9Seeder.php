<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart9Seeder extends Seeder
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

                // 161
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'What is the main purpose of licensing standards for early childhood centers?',
                    'choices'      => json_encode(['Ensure safety and quality','Promote enrollment','Reduce program costs','Standardize testing']),
                    'answer'       => 'Ensure safety and quality',
                    'explanation'  => 'Licensing standards protect children by establishing minimum safety, health, and educational requirements.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 162
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Which Philippine law institutionalized early childhood care and development at the national level?',
                    'choices'      => json_encode(['RA 6972','RA 7610','RA 10410','RA 10928']),
                    'answer'       => 'RA 10410',
                    'explanation'  => 'RA 10410, enacted in 2013, established the Early Years Act to support ECCD.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 163
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'NAEYC accreditation for early childhood programs focuses on:',
                    'choices'      => json_encode(['Test scores only','Health, safety, curriculum, and staff qualifications','Facility aesthetics','Teacher salaries']),
                    'answer'       => 'Health, safety, curriculum, and staff qualifications',
                    'explanation'  => 'NAEYC standards cover comprehensive program quality areas including health and education practices.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 164
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'The Professional Standards for Teachers in the Philippines were adopted by which agency?',
                    'choices'      => json_encode(['DepEd','PRC','CHED','TESDA']),
                    'answer'       => 'DepEd',
                    'explanation'  => 'DepEd issued the Professional Standards for Teachers to guide educator competencies.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 165
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'A Family Advisory Council in ECE primarily allows families to:',
                    'choices'      => json_encode(['Design curriculum exclusively','Provide input on program planning','Manage classroom budgets','Discipline children']),
                    'answer'       => 'Provide input on program planning',
                    'explanation'  => 'Advisory councils engage families in decisions affecting curriculum and activities.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 166
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Quality Rating and Improvement Systems (QRIS) are used to:',
                    'choices'      => json_encode(['Evaluate and improve program quality','Standardize curriculum','Limit enrollment','Reduce staff training']),
                    'answer'       => 'Evaluate and improve program quality',
                    'explanation'  => 'QRIS assigns ratings and supports programs to enhance early learning quality.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 167
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Which communication tool supports ongoing teacher-family interaction?',
                    'choices'      => json_encode(['Paper bulletins','ClassDojo','Annual reports only','Standardized tests']),
                    'answer'       => 'ClassDojo',
                    'explanation'  => 'ClassDojo facilitates daily updates and messaging between teachers and families.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 168
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'An example of photo documentation in ECE is:',
                    'choices'      => json_encode(['Noting test scores','Creating albums with captions linking to children’s narratives','Scheduling meetings','Listing daily menus']),
                    'answer'       => 'Creating albums with captions linking to children’s narratives',
                    'explanation'  => 'Photo documentation captures learning processes and children’s voices alongside images.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 169
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'The Early Learning Development Standards (ELDS) in the Philippines are published by:',
                    'choices'      => json_encode(['DepEd','UNICEF','WHO','UNESCO']),
                    'answer'       => 'DepEd',
                    'explanation'  => 'DepEd developed the ELDS to guide curriculum and assessment for young learners.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 170
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Which cycle outlines steps for continuous program improvement?',
                    'choices'      => json_encode(['PDCA cycle','SWOT analysis','Maslow’s hierarchy','Kolb’s cycle']),
                    'answer'       => 'PDCA cycle',
                    'explanation'  => 'The Plan-Do-Check-Act cycle guides systematic improvements in program practices.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 171
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Distributed leadership in ECE involves:',
                    'choices'      => json_encode(['Single leader decision-making','Shared roles and responsibilities among staff','Parental governance','External audits only']),
                    'answer'       => 'Shared roles and responsibilities among staff',
                    'explanation'  => 'Distributed leadership empowers multiple staff members to contribute to decision-making.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 172
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Reflective supervision typically includes:',
                    'choices'      => json_encode(['One-way directives','Collaborative reflection between supervisor and teacher','Only written feedback','Standardized tests']),
                    'answer'       => 'Collaborative reflection between supervisor and teacher',
                    'explanation'  => 'Reflective supervision fosters growth through two-way dialogue and reflection.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 173
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Which community service supports dental health education for children?',
                    'choices'      => json_encode(['Local dentist visits','Library programs','Sports events','Art exhibits']),
                    'answer'       => 'Local dentist visits',
                    'explanation'  => 'Dentist visits educate children on oral hygiene and cavity prevention.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 174
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Program evaluations should be conducted:',
                    'choices'      => json_encode(['Only at program start','Regularly and systematically','Never','Only at program end']),
                    'answer'       => 'Regularly and systematically',
                    'explanation'  => 'Ongoing evaluations inform continuous improvement and accountability.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 175
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Professional development plans for ECE teachers should be based on:',
                    'choices'      => json_encode(['Teacher interests only','Assessment data and reflective practice','Family preferences','Random selection']),
                    'answer'       => 'Assessment data and reflective practice',
                    'explanation'  => 'Data-driven insights and self-reflection guide targeted professional growth.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 176
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Action research in ECE involves teachers:',
                    'choices'      => json_encode(['Conducting standardized tests','Investigating and improving their practice','Focusing solely on theory','Replacing supervision']),
                    'answer'       => 'Investigating and improving their practice',
                    'explanation'  => 'Action research empowers teachers to study and enhance classroom strategies.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 177
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Ethical practice in ECE includes all EXCEPT:',
                    'choices'      => json_encode(['Maintaining confidentiality','Engaging families','Sharing photos without consent','Advocating for children']),
                    'answer'       => 'Sharing photos without consent',
                    'explanation'  => 'Ethical guidelines require consent before sharing children’s images.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 178
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'A program’s sustainability plan should address:',
                    'choices'      => json_encode(['Funding and staffing','Community partnerships','Staff turnover','All of the above']),
                    'answer'       => 'All of the above',
                    'explanation'  => 'Sustainability involves resources, partnerships, and staffing continuity.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 179
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'Which stakeholder group is most vital for advocacy in ECE funding?',
                    'choices'      => json_encode(['Parents','Local businesses','Hospital staff','Sports teams']),
                    'answer'       => 'Parents',
                    'explanation'  => 'Parents play a critical role in advocating for resources and policy support.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 180
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 9,
                    'question'     => 'The role of an ECE teacher at the community level includes:',
                    'choices'      => json_encode(['Designing national policy','Collaborating with community agencies','Ignoring local culture','Focusing only on academics']),
                    'answer'       => 'Collaborating with community agencies',
                    'explanation'  => 'Teachers extend learning by partnering with agencies to support child development beyond the classroom.',
                    'created_at'   => $now,
                    'updated_at'   => $now
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

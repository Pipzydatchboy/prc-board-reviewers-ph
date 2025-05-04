<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart5Seeder extends Seeder
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

                // 81
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Parent-teacher conferences are primarily used to:',
                    'choices'      => json_encode(['Evaluate standardized test scores','Collaboratively plan child learning goals','Discipline children remotely','Administer academic assessments']),
                    'answer'       => 'Collaboratively plan child learning goals',
                    'explanation'  => 'Conferences engage families and teachers in setting and reviewing child development goals.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 82
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Home visits by educators help to:',
                    'choices'      => json_encode(['Replace classroom assessment','Understand family context','Test children in home environment','Increase administrative paperwork']),
                    'answer'       => 'Understand family context',
                    'explanation'  => 'Home visits provide insight into the child’s home environment, strengths, and needs.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 83
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Parent questionnaires and interviews are used to:',
                    'choices'      => json_encode(['Assess only academic skills','Gather family perspectives on child development','Exclude non-English speakers','Standardize assessment data']),
                    'answer'       => 'Gather family perspectives on child development',
                    'explanation'  => 'These tools elicit valuable information about the child’s routines, interests, and cultural background.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 84
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Family literacy programs in preschools aim to:',
                    'choices'      => json_encode(['Separate parents from children','Promote shared reading experiences at home','Test parental literacy levels','Teach only academic content']),
                    'answer'       => 'Promote shared reading experiences at home',
                    'explanation'  => 'These programs encourage families to engage in reading activities together, supporting early literacy.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 85
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Culturally responsive teaching requires educators to:',
                    'choices'      => json_encode(['Ignore cultural differences','Integrate students’ cultural backgrounds into learning','Standardize all teaching materials','Teach only in the dominant language']),
                    'answer'       => 'Integrate students’ cultural backgrounds into learning',
                    'explanation'  => 'Inclusion of children’s cultures fosters respect and engagement in the classroom.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 86
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Partnerships with community health services support:',
                    'choices'      => json_encode(['Only academic needs','Child health screenings and referrals','Replacement of teacher roles','Reduction of playtime']),
                    'answer'       => 'Child health screenings and referrals',
                    'explanation'  => 'Collaboration with health services ensures timely check-ups and interventions for children.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 87
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Field trips to community resources enhance:',
                    'choices'      => json_encode(['Classroom isolation','Real-world learning and community connection','Standardized test scores','Administrative tasks']),
                    'answer'       => 'Real-world learning and community connection',
                    'explanation'  => 'Visits to local sites help children apply learning in authentic settings.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 88
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Inviting guest speakers from the community promotes:',
                    'choices'      => json_encode(['Passive listening','Exposure to diverse roles and expertise','Academic drills only','Standardized testing']),
                    'answer'       => 'Exposure to diverse roles and expertise',
                    'explanation'  => 'Guest speakers enrich learning by sharing real-life professions and experiences.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 89
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Referral to social services is indicated when:',
                    'choices'      => json_encode(['Children meet all developmental milestones','Serious family or child welfare concerns exist','Only academic delays are observed','No observations are made']),
                    'answer'       => 'Serious family or child welfare concerns exist',
                    'explanation'  => 'Serious issues like neglect or unsafe conditions warrant professional social support.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 90
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Organizing parent workshops helps families to:',
                    'choices'      => json_encode(['Learn strategies to support learning at home','Assess children formally','Replace classroom instruction','Punish non-compliant parents']),
                    'answer'       => 'Learn strategies to support learning at home',
                    'explanation'  => 'Workshops equip parents with techniques to reinforce early learning outside school.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 91
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Child protection policies in ECE programs ensure:',
                    'choices'      => json_encode(['Unrestricted access to children','Safeguarding from abuse and neglect','Only academic focus','Ignoring safety regulations']),
                    'answer'       => 'Safeguarding from abuse and neglect',
                    'explanation'  => 'Policies mandate practices and reporting procedures to protect children’s well-being.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 92
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Mandated reporting requires educators to report:',
                    'choices'      => json_encode(['Academic failures','Suspicions of child abuse or neglect','Low attendance','Classroom management issues']),
                    'answer'       => 'Suspicions of child abuse or neglect',
                    'explanation'  => 'Legal obligations compel educators to report any signs of maltreatment.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 93
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Maintaining confidentiality in family communication protects:',
                    'choices'      => json_encode(['Teacher reputation','Child and family privacy','Standardized testing integrity','Classroom attendance']),
                    'answer'       => 'Child and family privacy',
                    'explanation'  => 'Confidentiality respects personal information and builds trust with families.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 94
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Assessment workshops for parents focus on:',
                    'choices'      => json_encode(['Teaching test-taking strategies','Understanding child assessment data and next steps','Only administering tests','Replacing teacher reports']),
                    'answer'       => 'Understanding child assessment data and next steps',
                    'explanation'  => 'Workshops help families interpret results and support learning goals.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 95
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Borrowing books from local libraries supports:',
                    'choices'      => json_encode(['Administrative tasks','Early literacy and family reading time','Academic testing only','Teacher planning exclusively']),
                    'answer'       => 'Early literacy and family reading time',
                    'explanation'  => 'Library resources encourage reading and literacy engagement outside school.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 96
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Engaging families in goal-setting meetings promotes:',
                    'choices'      => json_encode(['Teacher-only decision making','Shared responsibility for child learning','Standardized report cards','Exclusion of non-participants']),
                    'answer'       => 'Shared responsibility for child learning',
                    'explanation'  => 'Collaborative planning ensures alignment between home and school support.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 97
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Advocating for funding in early childhood programs helps to:',
                    'choices'      => json_encode(['Limit program reach','Enhance resources and quality','Reduce family involvement','Standardize all curricula']),
                    'answer'       => 'Enhance resources and quality',
                    'explanation'  => 'Advocacy efforts aim to secure funding that improves facilities, materials, and staffing.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 98
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'A professional code of ethics in ECE outlines:',
                    'choices'      => json_encode(['Assessment scores','Standards of conduct and responsibilities','Play schedules','Classroom decorations']),
                    'answer'       => 'Standards of conduct and responsibilities',
                    'explanation'  => 'Ethical codes guide educators in professional behavior, confidentiality, and child well-being.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 99
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Reflective practice journals help teachers to:',
                    'choices'      => json_encode(['Ignore their actions','Critically examine and improve their teaching','Replace family feedback','Eliminate play-based learning']),
                    'answer'       => 'Critically examine and improve their teaching',
                    'explanation'  => 'Journals foster self-reflection, leading to enhanced instructional practices.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 100
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 5,
                    'question'     => 'Continuing professional development for ECE teachers ensures:',
                    'choices'      => json_encode(['Stagnant teaching methods','Ongoing skill enhancement and updated practices','Reduced collaboration','Exclusive focus on tests']),
                    'answer'       => 'Ongoing skill enhancement and updated practices',
                    'explanation'  => 'Professional development keeps educators informed about best practices and research.',
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

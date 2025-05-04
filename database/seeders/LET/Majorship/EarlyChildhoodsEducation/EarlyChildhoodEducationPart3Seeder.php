<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart3Seeder extends Seeder
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

                    // 41
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'According to Skinner’s operant conditioning, positive reinforcement is used to:',
            'choices'      => json_encode(['Increase desired behavior','Punish undesired behavior','Ignore the child’s actions','Reward only academic work']),
            'answer'       => 'Increase desired behavior',
            'explanation'  => 'Positive reinforcement strengthens a behavior by presenting a favorable stimulus after the behavior.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 42
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Piaget’s preoperational stage spans which age range?',
            'choices'      => json_encode(['Birth to 2 years','2 to 7 years','7 to 11 years','11 to 15 years']),
            'answer'       => '2 to 7 years',
            'explanation'  => 'The preoperational stage occurs approximately between ages 2 and 7.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 43
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Bandura’s social learning theory emphasizes learning through:',
            'choices'      => json_encode(['Observing and imitating others','Reinforcement schedules','Innate biological maturation','Cognitive equilibrium']),
            'answer'       => 'Observing and imitating others',
            'explanation'  => 'Social learning theory posits that people learn behaviors by observing and copying models.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 44
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'In Maslow’s hierarchy, which need must be met first?',
            'choices'      => json_encode(['Self-actualization','Esteem','Safety','Physiological']),
            'answer'       => 'Physiological',
            'explanation'  => 'Physiological needs (food, water, shelter) are the most basic and must be satisfied first.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 45
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Developmentally appropriate guidance often uses which technique?',
            'choices'      => json_encode(['Corporal punishment','Redirection of attention','Shaming the child','Isolating the child']),
            'answer'       => 'Redirection of attention',
            'explanation'  => 'Redirection gently shifts children from problem behaviors to positive activities.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 46
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'An anti-bias curriculum primarily seeks to:',
            'choices'      => json_encode(['Promote equity and respect for diversity','Teach children to be competitive','Maintain cultural stereotypes','Ignore cultural differences']),
            'answer'       => 'Promote equity and respect for diversity',
            'explanation'  => 'Anti-bias curricula challenge stereotypes and foster inclusion and respect.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 47
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Vygotsky’s concept of scaffolding refers to:',
            'choices'      => json_encode(['Supporting learning just beyond independent ability','Teaching only through lectures','Testing without feedback','Continuous free play']),
            'answer'       => 'Supporting learning just beyond independent ability',
            'explanation'  => 'Scaffolding provides structured support to help learners accomplish tasks they cannot do alone.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 48
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Howard Gardner’s theory of multiple intelligences includes all EXCEPT:',
            'choices'      => json_encode(['Musical intelligence','Spatial intelligence','Linguistic intelligence','Academic intelligence']),
            'answer'       => 'Academic intelligence',
            'explanation'  => 'Gardner proposed intelligences like musical and spatial, not a general "academic" intelligence.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 49
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'A token economy in early childhood settings is an example of:',
            'choices'      => json_encode(['Constructivist learning','Behaviorist reinforcement','Social-emotional assessment','Motor development activity']),
            'answer'       => 'Behaviorist reinforcement',
            'explanation'  => 'Tokens act as positive reinforcers to increase desired behaviors under behaviorism.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 50
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'In a constructivist classroom, the teacher acts primarily as a:',
            'choices'      => json_encode(['Director','Facilitator','Proctor','Drill instructor']),
            'answer'       => 'Facilitator',
            'explanation'  => 'Constructivist teachers guide and support learners rather than direct all activities.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 51
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'The Zone of Proximal Development is defined as the difference between what a child can do independently and:',
            'choices'      => json_encode(['What a peer can do alone','Tasks a child refuses','What a child can do with assistance','Play activities']),
            'answer'       => 'What a child can do with assistance',
            'explanation'  => 'ZPD is the zone where learning is possible through adult or peer support.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 52
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'In Bloom’s taxonomy, which is the highest cognitive domain?',
            'choices'      => json_encode(['Analyzing','Evaluating','Creating','Applying']),
            'answer'       => 'Creating',
            'explanation'  => 'Creating is the top level, involving generating new ideas or products.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 53
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Kolb’s experiential learning cycle includes all of the following stages EXCEPT:',
            'choices'      => json_encode(['Concrete experience','Reflective observation','Abstract conceptualization','Standardized testing']),
            'answer'       => 'Standardized testing',
            'explanation'  => 'Kolb’s cycle involves experience, reflection, conceptualization, and experimentation, not testing.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 54
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Anecdotal records in ECE refer to which assessment type?',
            'choices'      => json_encode(['Formal tests','Narrative observational notes','Standardized checklists','Multiple-choice quizzes']),
            'answer'       => 'Narrative observational notes',
            'explanation'  => 'Anecdotal records are brief narrative descriptions of specific child behaviors.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 55
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Portfolios as an assessment strategy primarily showcase:',
            'choices'      => json_encode(['Daily attendance','Child artifacts and progress over time','Single test results','Teacher lesson plans']),
            'answer'       => 'Child artifacts and progress over time',
            'explanation'  => 'Portfolios compile children’s work to demonstrate growth and learning.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 56
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Time sampling in observation involves:',
            'choices'      => json_encode(['Recording every behavior continuously','Observing specific behaviors at set intervals','Using random checklists','Asking children to self-report']),
            'answer'       => 'Observing specific behaviors at set intervals',
            'explanation'  => 'Time sampling records occurrences of behaviors during fixed time periods.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 57
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Event sampling as an observation method focuses on:',
            'choices'      => json_encode(['Random events','Specific targeted behaviors whenever they occur','Time-bound checks','Group interactions only']),
            'answer'       => 'Specific targeted behaviors whenever they occur',
            'explanation'  => 'Event sampling records each occurrence of predefined behaviors.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 58
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Checklist assessments are best described as:',
            'choices'      => json_encode(['Narrative stories','Yes/no indicators of observed skills','Open-ended questions','Performance tasks']),
            'answer'       => 'Yes/no indicators of observed skills',
            'explanation'  => 'Checklists list skills or behaviors and indicate presence or absence.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 59
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Family-teacher conferences are important for:',
            'choices'      => json_encode(['Isolating family issues','Collaborative planning of child goals','Testing children at home','Enforcing rules']),
            'answer'       => 'Collaborative planning of child goals',
            'explanation'  => 'Conferences engage families in discussions about development and next steps.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 60
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 3,
            'question'     => 'Mandated reporters in ECE must report:',
            'choices'      => json_encode(['Child academic performance','Suspected abuse or neglect','Teacher absences','Playtime preferences']),
            'answer'       => 'Suspected abuse or neglect',
            'explanation'  => 'Mandated reporters are legally required to report any suspicion of child maltreatment.',
            'created_at'   => $now,
            'updated_at'   => $now,
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

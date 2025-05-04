<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart2Seeder extends Seeder
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
            // 21
              $batch[] = [
                'subject_id'   => 8,
                'part'         => 2,
                'question'     => 'What is the primary purpose of learning centers in early childhood classrooms?',
                'choices'      => json_encode(['To segregate children by ability','To provide focused areas for exploration and skill development','To administer tests','To limit play to one type']),
                'answer'       => 'To provide focused areas for exploration and skill development',
                'explanation'  => 'Learning centers allow children to engage in targeted activities that support various developmental domains.',
                'created_at'   => $now,
                'updated_at'   => $now,
            ];

        // 22
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Which curriculum model emphasizes hands-on, child-directed exploration in a prepared environment?',
            'choices'      => json_encode(['Montessori','HighScope','Bank Street','Reggio Emilia']),
            'answer'       => 'Montessori',
            'explanation'  => 'The Montessori model uses a prepared environment where children choose activities independently, fostering self-directed learning.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 23
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'In HighScope curriculum, "plan-do-review" sequence refers to:',
            'choices'      => json_encode(['Child planning activities, carrying them out, then reflecting','Teacher-driven lessons followed by tests','Free play only without reflection','One-time projects']),
            'answer'       => 'Child planning activities, carrying them out, then reflecting',
            'explanation'  => 'HighScope\'s active participatory learning follows planning, doing, and reviewing to reinforce learning.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 24
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Reggio Emilia approach views the environment as:',
            'choices'      => json_encode(['A passive backdrop','The "third teacher"','Strictly academic','Loud and busy']),
            'answer'       => 'The "third teacher"',
            'explanation'  => 'Reggio Emilia considers space and materials as active participants in children\'s learning.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 25
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Bank Street College’s curriculum emphasizes:',
            'choices'      => json_encode(['Academic drills','Child interaction with social studies materials','Teacher-centered lectures','Standardized testing']),
            'answer'       => 'Child interaction with social studies materials',
            'explanation'  => 'Bank Street integrates social studies with experiential learning in a developmental-contextual approach.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 26
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Which is a developmentally appropriate classroom material for early literacy?',
            'choices'      => json_encode(['Complex chapter books','Alphabet puzzles','College-level textbooks','Advanced grammar worksheets']),
            'answer'       => 'Alphabet puzzles',
            'explanation'  => 'Alphabet puzzles support letter recognition through hands-on interaction.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 27
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'A learning center for dramatic play should include:',
            'choices'      => json_encode(['Puppets, costumes, props','Math worksheets','Science labs','Quiet reading nooks']),
            'answer'       => 'Puppets, costumes, props',
            'explanation'  => 'Dramatic play areas need role-play materials that support imaginative social interaction.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 28
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Visual schedules help young children by:',
            'choices'      => json_encode(['Increasing confusion','Providing routine predictability','Adding unnecessary complexity','Limiting exploration']),
            'answer'       => 'Providing routine predictability',
            'explanation'  => 'Visual schedules give children clear cues about daily activities, reducing anxiety.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 29
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Which strategy supports inclusion of children with diverse needs?',
            'choices'      => json_encode(['Separate special programs','Co-teaching and differentiated tasks','Ignoring individual differences','Labeling children by ability']),
            'answer'       => 'Co-teaching and differentiated tasks',
            'explanation'  => 'Inclusive classrooms adapt instruction and collaborate among specialists to meet all learners.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 30
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Circle time in preschool primarily promotes:',
            'choices'      => json_encode(['Individual isolation','Group socialization and language development','Unstructured free play','Test-taking skills']),
            'answer'       => 'Group socialization and language development',
            'explanation'  => 'Circle time fosters listening, speaking, and community-building through group interaction.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 31
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Transition songs and cues help minimize:',
            'choices'      => json_encode(['Scheduled activities','Transition anxiety','Play opportunities','Artistic expression']),
            'answer'       => 'Transition anxiety',
            'explanation'  => 'Using consistent songs or signals helps children shift activities smoothly.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 32
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'In a developmentally appropriate classroom, teacher roles include all EXCEPT:',
            'choices'      => json_encode(['Observer','Facilitator','Director of all play','Co-learner']),
            'answer'       => 'Director of all play',
            'explanation'  => 'Teachers guide and scaffold rather than control every aspect of play.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 33
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Block area activities primarily support:',
            'choices'      => json_encode(['Gross motor skills','Spatial reasoning and collaboration','Quiet reflection','Music appreciation']),
            'answer'       => 'Spatial reasoning and collaboration',
            'explanation'  => 'Building with blocks strengthens math thinking and cooperative play.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 34
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Teacher reflection journals are used to:',
            'choices'      => json_encode(['Document child birthdays','Analyze and improve teaching practices','Record attendance only','Store lesson plans privately']),
            'answer'       => 'Analyze and improve teaching practices',
            'explanation'  => 'Reflective journals help educators assess effectiveness and plan improvements.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 35
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Family bulletin boards in classrooms support:',
            'choices'      => json_encode(['Privacy','Parent engagement','Child isolation','Standardized testing']),
            'answer'       => 'Parent engagement',
            'explanation'  => 'Bulletin boards keep families informed and involved in classroom life.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 36
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Which principle is central to play-based learning?',
            'choices'      => json_encode(['Adult-led instruction','Child agency and choice','Rigid curriculum sequences','Testing after play']),
            'answer'       => 'Child agency and choice',
            'explanation'  => 'Play-based learning values children\'s interests and decision-making in learning.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 37
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Inclusive education aims to:',
            'choices'      => json_encode(['Segregate children by ability','Provide equitable learning opportunities','Standardize all learners','Exclude children with disabilities']),
            'answer'       => 'Provide equitable learning opportunities',
            'explanation'  => 'Inclusive practice adapts to meet diverse needs so all children can participate.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 38
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'Choice time in ECE classrooms allows children to:',
            'choices'      => json_encode(['Follow a strict teacher timetable','Select activities based on interests','Remain seated quietly','Take standardized tests']),
            'answer'       => 'Select activities based on interests',
            'explanation'  => 'Choice time empowers children to pursue preferred learning centers and develop autonomy.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 39
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'A learning center for sensory exploration should include:',
            'choices'      => json_encode(['Dry worksheets','Water tables, sand, tactile materials','Art easels','Block kits only']),
            'answer'       => 'Water tables, sand, tactile materials',
            'explanation'  => 'Sensory centers offer varied textures and materials for exploration.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 40
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 2,
            'question'     => 'The role of a co-teacher in inclusive classrooms is to:',
            'choices'      => json_encode(['Observe only','Support differentiation and small-group instruction','Lead all large-group lessons','Manage behavior problems exclusively']),
            'answer'       => 'Support differentiation and small-group instruction',
            'explanation'  => 'Co-teachers collaborate to adapt instruction and provide targeted support.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

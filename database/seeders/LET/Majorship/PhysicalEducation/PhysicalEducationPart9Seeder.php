<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart9Seeder extends Seeder
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

       // Part 9: Adapted Physical Education (inclusion, modified activities for special needs)

       //1
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What does IEP stand for in adapted physical education?',
           'choices'    => json_encode([
               'Individualized Education Program',
               'Inclusive Exercise Plan',
               'Individual Exercise Procedure',
               'Integrated Education Plan',
           ]),
           'answer'     => 'Individualized Education Program',
           'explanation'=> 'An IEP outlines personalized goals and accommodations for students with disabilities.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which federal law mandates free and appropriate public education for students with disabilities?',
           'choices'    => json_encode([
               'IDEA',
               'ADA',
               'FERPA',
               'ESSA',
           ]),
           'answer'     => 'IDEA',
           'explanation'=> 'The Individuals with Disabilities Education Act ensures special education services, including APE.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What is the primary goal of adapted physical education?',
           'choices'    => json_encode([
               'To provide equitable access to physical activity',
               'To segregate students by ability',
               'To focus only on competitive sports',
               'To reduce curriculum content',
           ]),
           'answer'     => 'To provide equitable access to physical activity',
           'explanation'=> 'APE ensures students with disabilities participate meaningfully in PE settings.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which concept involves modifying tasks to suit diverse learner needs?',
           'choices'    => json_encode([
               'Task analysis',
               'Task decomposition',
               'Task adaptation',
               'Task avoidance',
           ]),
           'answer'     => 'Task adaptation',
           'explanation'=> 'Task adaptation changes rules, equipment, or environment to facilitate participation.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What type of disability primarily affects movement and muscle control?',
           'choices'    => json_encode([
               'Orthopedic impairment',
               'Visual impairment',
               'Hearing impairment',
               'Emotional disturbance',
           ]),
           'answer'     => 'Orthopedic impairment',
           'explanation'=> 'Orthopedic impairments impact mobility; APE addresses these students’ physical needs.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which strategy uses peer mentors to support students with disabilities?',
           'choices'    => json_encode([
               'Peer tutoring',
               'Direct instruction',
               'Task avoidance',
               'Silent observation',
           ]),
           'answer'     => 'Peer tutoring',
           'explanation'=> 'Peer tutoring pairs peers to model skills and facilitate social integration.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What does UDL stand for in inclusive education?',
           'choices'    => json_encode([
               'Universal Design for Learning',
               'Unique Developmental Limits',
               'Universal Disability Legislation',
               'Unified Disability Learning',
           ]),
           'answer'     => 'Universal Design for Learning',
           'explanation'=> 'UDL provides multiple means of engagement, representation, and expression.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which adaptation involves changing the equipment size or weight?',
           'choices'    => json_encode([
               'Equipment modification',
               'Environmental modification',
               'Instructional modification',
               'Assessment modification',
           ]),
           'answer'     => 'Equipment modification',
           'explanation'=> 'Equipment changes (e.g., larger ball, lighter bat) aid accessibility and success.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which assessment tool records functional motor skills in children with disabilities?',
           'choices'    => json_encode([
               'TGMD (Test of Gross Motor Development)',
               'BMI chart',
               'Push-up test',
               'VO2 max test',
           ]),
           'answer'     => 'TGMD (Test of Gross Motor Development)',
           'explanation'=> 'TGMD measures locomotor and object control skills for adapted PE planning.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What term describes the support provided to promote on-task behavior?',
           'choices'    => json_encode([
               'Behavioral support',
               'Physical support',
               'Nutritional support',
               'Peer support',
           ]),
           'answer'     => 'Behavioral support',
           'explanation'=> 'Behavioral supports (e.g., visual cues) help students remain focused and safe.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which environment adaptation ensures accessibility in PE settings?',
           'choices'    => json_encode([
               'Ramped entry to gym',
               'Loud music',
               'Dim lighting',
               'High benches',
           ]),
           'answer'     => 'Ramped entry to gym',
           'explanation'=> 'Physical access modifications like ramps facilitate safe entry and movement.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What is an example of an instructional modification?',
           'choices'    => json_encode([
               'Using simplified language',
               'Increasing field size',
               'Lowering the net',
               'Changing the ball weight',
           ]),
           'answer'     => 'Using simplified language',
           'explanation'=> 'Instructional modifications adjust communication methods to student needs.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which concept involves teaching skills in progressively complex steps?',
           'choices'    => json_encode([
               'Task sequencing',
               'Task avoidance',
               'Task replacement',
               'Task suppression',
           ]),
           'answer'     => 'Task sequencing',
           'explanation'=> 'Sequencing breaks skills into manageable steps to build confidence and mastery.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which adaptive sport allows individuals with mobility impairments to compete in track events?',
           'choices'    => json_encode([
               'Wheelchair racing',
               'Para-swimming',
               'Goalball',
               'Sitting volleyball',
           ]),
           'answer'     => 'Wheelchair racing',
           'explanation'=> 'Wheelchair racing uses specially designed chairs for track competition.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which technique helps students with visual impairments participate in PE?',
           'choices'    => json_encode([
               'Use of auditory cues',
               'Colorful cones',
               'Visual charts',
               'Silent signals',
           ]),
           'answer'     => 'Use of auditory cues',
           'explanation'=> 'Sounds (e.g., bells, verbal instructions) support orientation and participation.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What is the role of an aide in adapted PE?',
           'choices'    => json_encode([
               'Provide individualized support and assistance',
               'Design the entire curriculum',
               'Conduct assessments alone',
               'Lead large group drills only',
           ]),
           'answer'     => 'Provide individualized support and assistance',
           'explanation'=> 'Aides help implement modifications and ensure safety for students one-on-one.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which behavior intervention plan component outlines strategies to reduce challenging behaviors?',
           'choices'    => json_encode([
               'Positive behavior supports',
               'Equipment list',
               'Lesson objectives',
               'Assessment rubric',
           ]),
           'answer'     => 'Positive behavior supports',
           'explanation'=> 'Behavior supports teach and reinforce appropriate behaviors in PE settings.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which modification helps students with hearing impairments in PE?',
           'choices'    => json_encode([
               'Use of visual demonstrations',
               'Louder music',
               'Verbal-only instructions',
               'Colors on balls',
           ]),
           'answer'     => 'Use of visual demonstrations',
           'explanation'=> 'Demonstrations and sign language improve comprehension for hearing-impaired students.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'What does RTI stand for in the context of student support?',
           'choices'    => json_encode([
               'Response to Intervention',
               'Regular Teaching Initiative',
               'Rehabilitation Through Inclusion',
               'Response Through Instruction',
           ]),
           'answer'     => 'Response to Intervention',
           'explanation'=> 'RTI provides tiered support to address academic and behavioral needs early.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 18,
           'part'       => 9,
           'question'   => 'Which collaborative role involves coordinating accommodations between PE and classroom teachers?',
           'choices'    => json_encode([
               'Case manager',
               'Referee',
               'Athletic director',
               'Health aide',
           ]),
           'answer'     => 'Case manager',
           'explanation'=> 'Case managers ensure communication and implementation of IEP accommodations across settings.',
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

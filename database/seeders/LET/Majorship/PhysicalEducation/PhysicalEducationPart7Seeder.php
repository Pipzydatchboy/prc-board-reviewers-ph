<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart7Seeder extends Seeder
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

       // Part 7: Sports Psychology & Motor Learning (motivation, skill acquisition, feedback)

       //1
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which theory of motivation emphasizes autonomy, competence, and relatedness as key needs?',
           'choices'     => json_encode([
               'Self-Determination Theory',
               'Drive Reduction Theory',
               'Achievement Goal Theory',
               'Expectancy-Value Theory',
           ]),
           'answer'      => 'Self-Determination Theory',
           'explanation' => 'SDT posits that fulfilling autonomy, competence, and relatedness fosters intrinsic motivation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What type of augmented feedback provides information about the outcome of a movement?',
           'choices'     => json_encode([
               'Knowledge of Results (KR)',
               'Knowledge of Performance (KP)',
               'Intrinsic Feedback',
               'Concurrent Feedback',
           ]),
           'answer'      => 'Knowledge of Results (KR)',
           'explanation' => 'KR informs the learner about the success of the action relative to the goal.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which feedback type gives information about movement patterns during execution?',
           'choices'     => json_encode([
               'Knowledge of Performance (KP)',
               'Knowledge of Results (KR)',
               'Delayed Feedback',
               'Terminal Feedback',
           ]),
           'answer'      => 'Knowledge of Performance (KP)',
           'explanation' => 'KP provides kinematic or biomechanical information about movement quality.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What practice schedule involves random ordering of different skills?',
           'choices'     => json_encode([
               'Random practice',
               'Blocked practice',
               'Serial practice',
               'Massed practice',
           ]),
           'answer'      => 'Random practice',
           'explanation' => 'Random practice interleaves different tasks, enhancing retention and transfer.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which practice schedule repeats the same skill continuously before moving to the next?',
           'choices'     => json_encode([
               'Blocked practice',
               'Random practice',
               'Variable practice',
               'Distributed practice',
           ]),
           'answer'      => 'Blocked practice',
           'explanation' => 'Blocked practice focuses on one skill at a time, improving initial performance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What are the three stages of motor learning as described by Fitts and Posner?',
           'choices'     => json_encode([
               'Cognitive, Associative, Autonomous',
               'Verbal, Motor, Automatic',
               'Initial, Intermediate, Final',
               'Acquisition, Retention, Transfer',
           ]),
           'answer'      => 'Cognitive, Associative, Autonomous',
           'explanation' => 'Learners progress from understanding tasks to refining skills and finally automatic performance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which concept refers to an individual’s belief in their ability to succeed?',
           'choices'     => json_encode([
               'Self-efficacy',
               'Self-esteem',
               'Motivational climate',
               'Self-concept',
           ]),
           'answer'      => 'Self-efficacy',
           'explanation' => 'Self-efficacy influences motivation, persistence, and performance in tasks.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What attentional focus directs attention to movement effects on the environment?',
           'choices'     => json_encode([
               'External focus',
               'Internal focus',
               'Broad focus',
               'Narrow focus',
           ]),
           'answer'      => 'External focus',
           'explanation' => 'Focusing on the effect of movement (e.g., trajectory of ball) enhances performance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which theory suggests movements are generalized by parameters stored in memory?',
           'choices'     => json_encode([
               'Schema Theory',
               'Stages of Learning',
               'Constraint-led Approach',
               'Dynamic Systems Theory',
           ]),
           'answer'      => 'Schema Theory',
           'explanation' => 'Schmidt’s Schema Theory posits recall and recognition schemas guide novel movements.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What type of motivation comes from external rewards or pressures?',
           'choices'     => json_encode([
               'Extrinsic motivation',
               'Intrinsic motivation',
               'Amotivation',
               'Integrated regulation',
           ]),
           'answer'      => 'Extrinsic motivation',
           'explanation' => 'Extrinsic motivation is driven by rewards or avoidance of punishment rather than enjoyment.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which feedback timing provides information after a delay following task completion?',
           'choices'     => json_encode([
               'Terminal feedback',
               'Concurrent feedback',
               'Immediate feedback',
               'Delayed feedback',
           ]),
           'answer'      => 'Terminal feedback',
           'explanation' => 'Terminal feedback is given after the movement execution and can be delayed.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which practice schedule spaces practice trials with rest intervals?',
           'choices'     => json_encode([
               'Distributed practice',
               'Massed practice',
               'Random practice',
               'Blocked practice',
           ]),
           'answer'      => 'Distributed practice',
           'explanation' => 'Distributed practice includes breaks, improving skill retention and reducing fatigue.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which reinforcement increases the likelihood of a behavior by adding a pleasant stimulus?',
           'choices'     => json_encode([
               'Positive reinforcement',
               'Negative reinforcement',
               'Punishment',
               'Extinction',
           ]),
           'answer'      => 'Positive reinforcement',
           'explanation' => 'Adding a reward after desired behavior encourages its recurrence.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What is mental imagery in sports performance?',
           'choices'     => json_encode([
               'Cognitive rehearsal of skill without movement',
               'Physical practice with guidance',
               'Group discussion of tactics',
               'Video analysis only',
           ]),
           'answer'      => 'Cognitive rehearsal of skill without movement',
           'explanation' => 'Imagery involves visualizing performance to enhance skill execution.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which observational learning process involves copying someone’s technique?',
           'choices'     => json_encode([
               'Modeling',
               'Trial-and-error',
               'Discovery learning',
               'Self-exploration',
           ]),
           'answer'      => 'Modeling',
           'explanation' => 'Athletes learn by observing and imitating skilled performers.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which motivational climate emphasizes mastery and personal improvement?',
           'choices'     => json_encode([
               'Task-involving climate',
               'Ego-involving climate',
               'Outcome climate',
               'Performance climate',
           ]),
           'answer'      => 'Task-involving climate',
           'explanation' => 'A task climate focuses on effort, skill development, and personal progress.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What is the benefit of variable practice conditions?',
           'choices'     => json_encode([
               'Enhances skill adaptability',
               'Increases initial performance only',
               'Causes skill decay',
               'Reduces retention',
           ]),
           'answer'      => 'Enhances skill adaptability',
           'explanation' => 'Variable practice prepares learners for changing conditions and improves transfer.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which term describes performance testing after a delay without practice?',
           'choices'     => json_encode([
               'Retention test',
               'Transfer test',
               'Criterion test',
               'Acquisition test',
           ]),
           'answer'      => 'Retention test',
           'explanation' => 'Retention tests assess permanence of learning over time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'What does a transfer test evaluate?',
           'choices'     => json_encode([
               'Ability to apply skills to new contexts',
               'Immediate performance gains',
               'Physical strength only',
               'Feedback effectiveness',
           ]),
           'answer'      => 'Ability to apply skills to new contexts',
           'explanation' => 'Transfer tests measure adaptability of learned skills to novel situations.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 7,
           'question'    => 'Which practice method uses small, consistent increments of change?',
           'choices'     => json_encode([
               'Progressive practice',
               'Random practice',
               'Rapid practice',
               'Guided practice',
           ]),
           'answer'      => 'Progressive practice',
           'explanation' => 'Progressive practice gradually increases difficulty to facilitate learning.',
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

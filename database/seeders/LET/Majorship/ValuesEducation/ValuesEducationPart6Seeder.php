<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart6Seeder extends Seeder
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

       // Part 6 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which approach in Values Education involves guiding students to clarify their own values through structured reflection?',
           'choices'      => json_encode([
               'Values clarification',
               'Moral recovery',
               'Service learning',
               'Role playing',
           ]),
           'answer'       => 'Values clarification',
           'explanation'  => 'Values clarification uses self-reflection activities to help learners articulate and affirm personal values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which strategy integrates community service with instructional goals to enhance moral and civic values?',
           'choices'      => json_encode([
               'Service learning',
               'Peer mentoring',
               'Cooperative learning',
               'Case study',
           ]),
           'answer'       => 'Service learning',
           'explanation'  => 'Service learning combines community service with academic content to foster civic responsibility and values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which method uses enactment of scenarios to help students understand and practice moral behavior?',
           'choices'      => json_encode([
               'Debate',
               'Role playing',
               'Brainstorming',
               'Lecturing',
           ]),
           'answer'       => 'Role playing',
           'explanation'  => 'Role playing engages learners in acting out situations to explore values and ethical decisions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which pedagogical approach focuses on cognitive processes underlying moral development, based on Piaget and Kohlberg?',
           'choices'      => json_encode([
               'Behavioral approach',
               'Cognitive developmental approach',
               'Humanistic approach',
               'Psychoanalytic approach',
           ]),
           'answer'       => 'Cognitive developmental approach',
           'explanation'  => 'This approach emphasizes stages of moral reasoning as described by Piaget and Kohlberg.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which strategy provides students with exemplars who model desirable values and behaviors?',
           'choices'      => json_encode([
               'Case study',
               'Role modeling',
               'Values clarification',
               'Group discussion',
           ]),
           'answer'       => 'Role modeling',
           'explanation'  => 'Role modeling presents individuals who exemplify values, encouraging learners to emulate their behavior.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which technique uses reflective writing to deepen students’ understanding of their value experiences?',
           'choices'      => json_encode([
               'Reflection journals',
               'Mind mapping',
               'Quizzes',
               'Lectures',
           ]),
           'answer'       => 'Reflection journals',
           'explanation'  => 'Reflection journals encourage learners to write about personal values experiences and lessons learned.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which model integrates emotional awareness and value embodiment through arts and storytelling?',
           'choices'      => json_encode([
               'Behavioral model',
               'Cognitive model',
               'Affective model',
               'Social model',
           ]),
           'answer'       => 'Affective model',
           'explanation'  => 'The affective model engages emotions and values through artistic and narrative experiences.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which collaborative strategy encourages peer support in exploring values and ethical dilemmas?',
           'choices'      => json_encode([
               'Cooperative learning',
               'Individual study',
               'Competitive debate',
               'Direct instruction',
           ]),
           'answer'       => 'Cooperative learning',
           'explanation'  => 'Cooperative learning structures group tasks to foster shared responsibility and discussion of values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which approach uses real-life moral dilemmas to stimulate critical ethical reasoning?',
           'choices'      => json_encode([
               'Lecture',
               'Moral dilemma discussion',
               'Role play',
               'Worksheets',
           ]),
           'answer'       => 'Moral dilemma discussion',
           'explanation'  => 'Discussing moral dilemmas helps learners apply moral reasoning to complex situations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which strategy employs systematic reflection on significant events to derive value lessons?',
           'choices'      => json_encode([
               'Critical incident technique',
               'Role playing',
               'Peer teaching',
               'Brainstorming',
           ]),
           'answer'       => 'Critical incident technique',
           'explanation'  => 'The critical incident technique uses impactful experiences to analyze and internalize values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which method uses structured group discussions to analyze values and viewpoints?',
           'choices'      => json_encode([
               'Panel discussion',
               'Group discussion',
               'Lecture',
               'Case study',
           ]),
           'answer'       => 'Group discussion',
           'explanation'  => 'Group discussions allow learners to share perspectives and deepen understanding of values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which hands-on approach immerses learners in real environments to observe value expressions?',
           'choices'      => json_encode([
               'Field trips',
               'Simulations',
               'Virtual reality',
               'Guest lectures',
           ]),
           'answer'       => 'Field trips',
           'explanation'  => 'Field trips expose students to authentic contexts where values are practiced.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which tool uses guided worksheets to help students examine and apply personal values?',
           'choices'      => json_encode([
               'Values analysis worksheets',
               'Math worksheets',
               'Grammar worksheets',
               'Logic puzzles',
           ]),
           'answer'       => 'Values analysis worksheets',
           'explanation'  => 'Values analysis worksheets guide reflection and application of specific values to scenarios.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which multimedia strategy uses videos and stories to illustrate moral lessons?',
           'choices'      => json_encode([
               'Role play',
               'Storytelling and multimedia',
               'Chalkboard lecture',
               'Written exams',
           ]),
           'answer'       => 'Storytelling and multimedia',
           'explanation'  => 'Multimedia presentations engage learners emotionally and cognitively through narratives.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which approach employs mindfulness exercises to cultivate self-awareness and ethical reflection?',
           'choices'      => json_encode([
               'Mindfulness-based approach',
               'Cognitive restructuring',
               'Behavioral training',
               'Psychoanalysis',
           ]),
           'answer'       => 'Mindfulness-based approach',
           'explanation'  => 'Mindfulness exercises enhance awareness of values and moral impulses.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which project-based learning strategy engages students in complex tasks grounded in real-world values issues?',
           'choices'      => json_encode([
               'Project-based learning',
               'Predict-and-test',
               'Routine exercises',
               'Memorization drills',
           ]),
           'answer'       => 'Project-based learning',
           'explanation'  => 'Project-based learning involves sustained inquiry into real-world challenges, integrating values exploration.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which debriefing technique follows experiential activities to consolidate values learning?',
           'choices'      => json_encode([
               'Reflection debriefing',
               'Quiz debriefing',
               'Lecture recap',
               'Silent reading',
           ]),
           'answer'       => 'Reflection debriefing',
           'explanation'  => 'Reflection debriefing uses guided questions post-activity to deepen value insights.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which instructional strategy uses moral exemplars’ biographies to illustrate virtues?',
           'choices'      => json_encode([
               'Biographical study',
               'Technical report',
               'Mathematical modeling',
               'Scientific method',
           ]),
           'answer'       => 'Biographical study',
           'explanation'  => 'Studying biographies of virtuous individuals provides role models and context for virtues.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which strategy leverages peer teaching to reinforce students’ understanding of values?',
           'choices'      => json_encode([
               'Peer teaching',
               'Independent study',
               'Lecture',
               'Test review',
           ]),
           'answer'       => 'Peer teaching',
           'explanation'  => 'Peer teaching allows learners to explain values concepts to each other, enhancing comprehension.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 6,
           'question'     => 'Which evaluative tool assesses students’ value attitudes and behaviors over time?',
           'choices'      => json_encode([
               'Values attitude inventory',
               'Multiple-choice test',
               'Math assessment',
               'Spelling quiz',
           ]),
           'answer'       => 'Values attitude inventory',
           'explanation'  => 'A values attitude inventory measures changes in students’ value preferences and dispositions.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

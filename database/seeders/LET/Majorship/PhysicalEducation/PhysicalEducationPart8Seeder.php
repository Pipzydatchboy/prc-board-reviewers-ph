<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart8Seeder extends Seeder
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

       // Part 8: Coaching Methods & Leadership (lesson planning, communication, team management)

       //1
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'In lesson planning, what does the acronym SMART stand for regarding objectives?',
           'choices'     => json_encode([
               'Specific, Measurable, Achievable, Relevant, Time-bound',
               'Simple, Meaningful, Applicable, Realistic, Timely',
               'Strategic, Motivational, Actionable, Reasonable, Timed',
               'Systematic, Measured, Attainable, Resourceful, Trackable',
           ]),
           'answer'      => 'Specific, Measurable, Achievable, Relevant, Time-bound',
           'explanation' => 'SMART objectives clarify the aim and criteria for success within a lesson plan.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which coaching approach emphasizes demonstration, imitation, and practice?',
           'choices'     => json_encode([
               'Direct Instruction',
               'Guided Discovery',
               'Problem Solving',
               'Peer Teaching',
           ]),
           'answer'      => 'Direct Instruction',
           'explanation' => 'Direct instruction features clear demonstration followed by athlete practice and correction.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What is the primary purpose of a needs analysis in coaching?',
           'choices'     => json_encode([
               'Identify athletes’ strengths and areas for improvement',
               'Plan competition schedule',
               'Determine coaching fees',
               'Select team uniforms',
           ]),
           'answer'      => 'Identify athletes’ strengths and areas for improvement',
           'explanation' => 'Needs analysis assesses current abilities to tailor training goals and methods.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which element in a session plan outlines how performance will be assessed?',
           'choices'     => json_encode([
               'Evaluation criteria',
               'Warm-up activities',
               'Equipment list',
               'Cool-down routines',
           ]),
           'answer'      => 'Evaluation criteria',
           'explanation' => 'Evaluation criteria define the standards and methods for measuring athlete progress.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which communication style involves giving learners choices and encouraging input?',
           'choices'     => json_encode([
               'Democratic',
               'Autocratic',
               'Laissez-faire',
               'Directive',
           ]),
           'answer'      => 'Democratic',
           'explanation' => 'Democratic coaching fosters collaboration and athlete ownership of learning.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What is the feedback sandwich technique in coaching?',
           'choices'     => json_encode([
               'Positive feedback, constructive critique, positive feedback',
               'Critique, technical instruction, critique',
               'Question, explanation, demonstration',
               'Praise, rest, punishment',
           ]),
           'answer'      => 'Positive feedback, constructive critique, positive feedback',
           'explanation' => 'The sandwich technique cushions critical feedback between positive remarks to maintain motivation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which leadership style involves minimal coach intervention, allowing athletes freedom?',
           'choices'     => json_encode([
               'Laissez-faire',
               'Autocratic',
               'Democratic',
               'Transactional',
           ]),
           'answer'      => 'Laissez-faire',
           'explanation' => 'Laissez-faire coaches offer little guidance, promoting self-directed athlete learning.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What concept refers to the unity and sense of belonging among team members?',
           'choices'     => json_encode([
               'Team cohesion',
               'Team conflict',
               'Team stratification',
               'Team isolation',
           ]),
           'answer'      => 'Team cohesion',
           'explanation' => 'Cohesion reflects how well team members bond and work toward common goals.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which conflict resolution strategy involves both parties giving up something to reach agreement?',
           'choices'     => json_encode([
               'Compromise',
               'Avoidance',
               'Accommodation',
               'Competition',
           ]),
           'answer'      => 'Compromise',
           'explanation' => 'Compromise requires mutual concessions to resolve disagreements.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What is the purpose of a debriefing session after training?',
           'choices'     => json_encode([
               'Reflect on performance and identify improvements',
               'Punish errors publicly',
               'Rest without discussion',
               'Increase workload',
           ]),
           'answer'      => 'Reflect on performance and identify improvements',
           'explanation' => 'Debriefing encourages reflection and planning for skill refinement.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which planning document outlines lesson structure, timing, and resources?',
           'choices'     => json_encode([
               'Session plan',
               'Training logbook',
               'Attendance sheet',
               'Inventory list',
           ]),
           'answer'      => 'Session plan',
           'explanation' => 'A session plan details objectives, activities, timings, and equipment needed.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which listening skill involves summarizing and restating what an athlete said?',
           'choices'     => json_encode([
               'Reflective listening',
               'Passive listening',
               'Selective listening',
               'Critical listening',
           ]),
           'answer'      => 'Reflective listening',
           'explanation' => 'Reflective listening confirms understanding by paraphrasing the speaker’s message.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What is transformational leadership in coaching?',
           'choices'     => json_encode([
               'Inspiring athletes to exceed expectations',
               'Emphasizing strict rules and discipline',
               'Focusing solely on physical training',
               'Delegating all decisions',
           ]),
           'answer'      => 'Inspiring athletes to exceed expectations',
           'explanation' => 'Transformational coaches motivate and empower athletes toward higher performance.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which tool helps coaches track athlete performance and progress over time?',
           'choices'     => json_encode([
               'Performance logbook',
               'Strategy board',
               'Whistle',
               'Stopwatch',
           ]),
           'answer'      => 'Performance logbook',
           'explanation' => 'Logbooks record metrics, observations, and outcomes for ongoing evaluation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What does the term rapport refer to in coach-athlete relationships?',
           'choices'     => json_encode([
               'Mutual trust and understanding',
               'Strict hierarchy',
               'Professional distance',
               'Technical critique',
           ]),
           'answer'      => 'Mutual trust and understanding',
           'explanation' => 'Rapport builds positive communication and athlete confidence.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which conflict management style prioritizes satisfying one’s own needs over others’?',
           'choices'     => json_encode([
               'Competition',
               'Avoidance',
               'Accommodation',
               'Collaboration',
           ]),
           'answer'      => 'Competition',
           'explanation' => 'Competition focuses on winning at the expense of others’ interests.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What is the 5 Cs model of communication in coaching?',
           'choices'     => json_encode([
               'Clear, Concise, Concrete, Correct, Courteous',
               'Competent, Consistent, Continual, Collaborative, Creative',
               'Careful, Caring, Clever, Charming, Calm',
               'Critical, Cautious, Complete, Complex, Coherent',
           ]),
           'answer'      => 'Clear, Concise, Concrete, Correct, Courteous',
           'explanation' => 'The 5 Cs ensure messages are effective and well-received by athletes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which situational leadership approach adapts style based on athlete readiness?',
           'choices'     => json_encode([
               'Situational Leadership Model',
               'Trait Theory',
               'Transactional Leadership',
               'Autocratic Leadership',
           ]),
           'answer'      => 'Situational Leadership Model',
           'explanation' => 'The model proposes adjusting directive and supportive behaviors to athlete competence and commitment.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'What strategy fosters athlete autonomy and engagement in planning?',
           'choices'     => json_encode([
               'Athlete-centered coaching',
               'Coach-centered coaching',
               'Directive teaching',
               'Preset drills only',
           ]),
           'answer'      => 'Athlete-centered coaching',
           'explanation' => 'In athlete-centered approaches, individuals participate in goal-setting and decision-making.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 18,
           'part'        => 8,
           'question'    => 'Which review method evaluates overall effectiveness of a training program?',
           'choices'     => json_encode([
               'Program evaluation',
               'Peer review',
               'Instant feedback',
               'Self-monitoring',
           ]),
           'answer'      => 'Program evaluation',
           'explanation' => 'Program evaluation analyzes outcomes, processes, and impacts to inform improvements.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

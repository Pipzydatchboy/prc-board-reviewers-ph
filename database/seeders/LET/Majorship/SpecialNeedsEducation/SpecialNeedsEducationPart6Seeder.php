<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart6Seeder extends Seeder
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

       // 101
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Universal Design for Learning (UDL) emphasizes:',
           'choices'      => json_encode([
               'Multiple means of representation, expression, and engagement',
               'Uniform teaching methods for all students',
               'Strict lecturing without supports',
               'Standardized testing only'
           ]),
           'answer'       => 'Multiple means of representation, expression, and engagement',
           'explanation'  => 'UDL frameworks provide diverse ways to teach and assess to reach all learners.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 102
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Differentiated instruction involves:',
           'choices'      => json_encode([
               'Adjusting content, process, and product based on student needs',
               'Teaching only grade-level content to everyone',
               'Grouping students by age exclusively',
               'Ignoring learning profiles'
           ]),
           'answer'       => 'Adjusting content, process, and product based on student needs',
           'explanation'  => 'Differentiation tailors aspects of teaching to diverse learner readiness, interest, and profile.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 103
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'A social story intervention is best used for:',
           'choices'      => json_encode([
               'Teaching social norms and appropriate behavior',
               'Assessing reading comprehension',
               'Measuring fine motor skills',
               'Standardized math tests'
           ]),
           'answer'       => 'Teaching social norms and appropriate behavior',
           'explanation'  => 'Social stories describe social situations to improve understanding and responses.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 104
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Task analysis is most useful for:',
           'choices'      => json_encode([
               'Breaking complex skills into smaller steps',
               'Grouping students by ability',
               'Evaluating emotional states',
               'Designing the school building'
           ]),
           'answer'       => 'Breaking complex skills into smaller steps',
           'explanation'  => 'Task analysis sequences behaviors to teach every component of a skill.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 105
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Errorless learning aims to:',
           'choices'      => json_encode([
               'Prevent mistakes during skill acquisition',
               'Allow students to learn from errors',
               'Ignore correct responses',
               'Focus solely on group work'
           ]),
           'answer'       => 'Prevent mistakes during skill acquisition',
           'explanation'  => 'Errorless learning provides prompts to minimize errors and build confidence.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 106
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'An example of a visual schedule is:',
           'choices'      => json_encode([
               'Icons representing daily activities in sequence',
               'Text-only lesson plan',
               'Audio instructions without visuals',
               'Teacher lecture notes'
           ]),
           'answer'       => 'Icons representing daily activities in sequence',
           'explanation'  => 'Visual schedules help students anticipate activities and transitions.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 107
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Peer-mediated instruction leverages:',
           'choices'      => json_encode([
               'Peers to model and prompt desired behaviors',
               'Only adult-led interventions',
               'Individual silent work',
               'Exclusive technology use'
           ]),
           'answer'       => 'Peers to model and prompt desired behaviors',
           'explanation'  => 'Peer-mediated strategies use classmates to support social and academic skills.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 108
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Self-monitoring procedures help students to:',
           'choices'      => json_encode([
               'Track and record their own target behaviors',
               'Ignore teacher feedback',
               'Depend solely on peers',
               'Avoid academic tasks'
           ]),
           'answer'       => 'Track and record their own target behaviors',
           'explanation'  => 'Self-monitoring promotes independence and awareness of behavior change.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 109
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Scaffolding in instruction refers to:',
           'choices'      => json_encode([
               'Providing support structures that are gradually removed',
               'Giving full prompts indefinitely',
               'Teaching unrelated content',
               'Grouping all students together'
           ]),
           'answer'       => 'Providing support structures that are gradually removed',
           'explanation'  => 'Scaffolding assists learners until they can perform independently.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 110
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'A content enhancement routine is designed to:',
           'choices'      => json_encode([
               'Organize and emphasize key information',
               'Replace all curriculum materials',
               'Reduce instructional time',
               'Eliminate assessments'
           ]),
           'answer'       => 'Organize and emphasize key information',
           'explanation'  => 'Content enhancement uses organizers like charts to highlight essential concepts.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 111
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Direct instruction models emphasize:',
           'choices'      => json_encode([
               'Explicit teaching with clear, scripted lessons',
               'Student-led discovery only',
               'Unstructured free play',
               'Purely group work'
           ]),
           'answer'       => 'Explicit teaching with clear, scripted lessons',
           'explanation'  => 'Direct instruction relies on systematic, teacher-led presentations and practice.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 112
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Cueing systems are used to:',
           'choices'      => json_encode([
               'Prompt correct responses through hints',
               'Deliver punishment',
               'Assess fine motor skills',
               'Schedule daily routines'
           ]),
           'answer'       => 'Prompt correct responses through hints',
           'explanation'  => 'Cueing provides varying levels of assistance to facilitate desired responses.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 113
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'A token economy system primarily uses:',
           'choices'      => json_encode([
               'Symbols or tokens exchanged for reinforcers',
               'Physical restraints',
               'Written exams',
               'Audio recordings'
           ]),
           'answer'       => 'Symbols or tokens exchanged for reinforcers',
           'explanation'  => 'Token economies reward behaviors with tokens that can be traded for larger rewards.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 114
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Peer tutoring strategies are effective because they:',
           'choices'      => json_encode([
               'Provide models and practice through classmates',
               'Require technology only',
               'Replace teacher instruction entirely',
               'Limit student interaction'
           ]),
           'answer'       => 'Provide models and practice through classmates',
           'explanation'  => 'Peer tutoring engages students in teaching and learning from each other.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 115
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Naturalistic teaching approaches use:',
           'choices'      => json_encode([
               'Child-initiated interactions in everyday contexts',
               'Only discrete trials',
               'Standardized worksheets exclusively',
               'Teacher lectures constantly'
           ]),
           'answer'       => 'Child-initiated interactions in everyday contexts',
           'explanation'  => 'Naturalistic interventions embed learning opportunities into routine activities.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 116
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Multi-sensory instruction benefits learners by:',
           'choices'      => json_encode([
               'Engaging visual, auditory, and kinesthetic modalities',
               'Focusing on one sense only',
               'Reducing engagement',
               'Limiting comprehension'
           ]),
           'answer'       => 'Engaging visual, auditory, and kinesthetic modalities',
           'explanation'  => 'Multi-sensory teaching supports memory and understanding by involving multiple senses.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 117
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Error correction procedures are used to:',
           'choices'      => json_encode([
               'Prompt and guide correct responses after errors',
               'Ignore incorrect answers',
               'Increase test anxiety',
               'Reduce instructional time'
           ]),
           'answer'       => 'Prompt and guide correct responses after errors',
           'explanation'  => 'Effective correction helps learners replace errors with correct responses.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 118
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Video modeling interventions involve:',
           'choices'      => json_encode([
               'Watching recordings of desired behaviors prior to performance',
               'Audio-only instructions',
               'Written manuals only',
               'Group lectures'
           ]),
           'answer'       => 'Watching recordings of desired behaviors prior to performance',
           'explanation'  => 'Video modeling shows examples to facilitate learning of new skills.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 119
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Inclusive classroom strategies include all EXCEPT:',
           'choices'      => json_encode([
               'Flexible grouping',
               'Differentiated supports',
               'Rigid, one-size-fits-all instruction',
               'Use of peer supports'
           ]),
           'answer'       => 'Rigid, one-size-fits-all instruction',
           'explanation'  => 'Inclusion requires adaptable instruction rather than a single method.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 120
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 6,
           'question'     => 'Functional life skills instruction focuses on:',
           'choices'      => json_encode([
               'Everyday tasks necessary for independence',
               'Advanced calculus only',
               'Theoretical physics',
               'Gymnastics'
           ]),
           'answer'       => 'Everyday tasks necessary for independence',
           'explanation'  => 'Functional life skills teach practical abilities like money management and self-care.',
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

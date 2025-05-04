<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart9Seeder extends Seeder
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

       // 161
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Differential Reinforcement of Alternate behavior (DRA) focuses on:',
           'choices'      => json_encode([
               'Reinforcing a desired alternative behavior',
               'Delivering reinforcement for the problem behavior',
               'Removing reinforcement for the alternative behavior',
               'Punishing the problem behavior'
           ]),
           'answer'       => 'Reinforcing a desired alternative behavior',
           'explanation'  => 'DRA strengthens a more appropriate behavior instead of the problem behavior.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 162
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Differential Reinforcement of Other behavior (DRO) provides reinforcement when:',
           'choices'      => json_encode([
               'The problem behavior is absent for a specified interval',
               'Any behavior occurs',
               'Only alternative behaviors occur',
               'The problem behavior occurs'
           ]),
           'answer'       => 'The problem behavior is absent for a specified interval',
           'explanation'  => 'DRO reinforces periods without the targeted behavior.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 163
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Differential Reinforcement of Incompatible behavior (DRI) teaches:',
           'choices'      => json_encode([
               'A behavior that cannot occur simultaneously with the problem behavior',
               'Only punishment for the problem behavior',
               'Extinction of all behaviors',
               'Reinforcing the problem behavior at a lower rate'
           ]),
           'answer'       => 'A behavior that cannot occur simultaneously with the problem behavior',
           'explanation'  => 'DRI promotes an alternative that is physically incompatible with the undesirable behavior.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 164
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'A fixed interval schedule delivers reinforcement:',
           'choices'      => json_encode([
               'After the first response following a fixed time period',
               'After every response',
               'After a variable number of responses',
               'Only after session ends'
           ]),
           'answer'       => 'After the first response following a fixed time period',
           'explanation'  => 'Fixed interval schedules reinforce the first response after set intervals, yielding scalloped patterns.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 165
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'A variable ratio schedule provides reinforcement:',
           'choices'      => json_encode([
               'After an unpredictable number of responses',
               'After every response',
               'At fixed time intervals',
               'When the learner requests it'
           ]),
           'answer'       => 'After an unpredictable number of responses',
           'explanation'  => 'Variable ratio schedules produce high, steady response rates with strong resistance to extinction.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 166
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Extinction in behavior analysis involves:',
           'choices'      => json_encode([
               'Withholding the maintaining reinforcer for the problem behavior',
               'Applying punishment each time the behavior occurs',
               'Reinforcing all behaviors equally',
               'Providing free reinforcers periodically'
           ]),
           'answer'       => 'Withholding the maintaining reinforcer for the problem behavior',
           'explanation'  => 'Extinction reduces behavior by no longer delivering the reinforcer that maintains it.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 167
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'An extinction burst refers to:',
           'choices'      => json_encode([
               'A temporary increase in the behavior’s intensity or frequency',
               'Immediate disappearance of the behavior',
               'Generalization of behavior',
               'Punishment of behavior'
           ]),
           'answer'       => 'A temporary increase in the behavior’s intensity or frequency',
           'explanation'  => 'Behavior often escalates briefly when the reinforcer is removed before decreasing.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 168
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Shaping is a process that:',
           'choices'      => json_encode([
               'Reinforces successive approximations toward a target behavior',
               'Punishes all incorrect responses',
               'Extinguishes all behaviors',
               'Delays reinforcement indefinitely'
           ]),
           'answer'       => 'Reinforces successive approximations toward a target behavior',
           'explanation'  => 'Shaping builds complex behaviors by reinforcing closer and closer steps.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 169
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Chaining is used to teach complex tasks by:',
           'choices'      => json_encode([
               'Linking individual steps into a sequence',
               'Punishing errors in the sequence',
               'Reinforcing single-step behaviors only',
               'Using free reinforcers randomly'
           ]),
           'answer'       => 'Linking individual steps into a sequence',
           'explanation'  => 'Chaining breaks tasks into component skills taught in order to form a complete behavior.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 170
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Forward chaining starts by teaching:',
           'choices'      => json_encode([
               'The first step only, adding subsequent steps later',
               'The last step first',
               'All steps simultaneously',
               'No steps at all'
           ]),
           'answer'       => 'The first step only, adding subsequent steps later',
           'explanation'  => 'Forward chaining builds the behavior from beginning to end one step at a time.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 171
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Backward chaining begins by teaching:',
           'choices'      => json_encode([
               'The final step first, then preceding steps',
               'The first step first',
               'All steps out of order',
               'No steps at all'
           ]),
           'answer'       => 'The final step first, then preceding steps',
           'explanation'  => 'Backward chaining ensures the learner completes the task and experience success immediately.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 172
       $batch[] = [
        'subject_id'   => 9,
        'part'         => 9,
        'question'     => 'Maintenance in behavior analysis refers to:',
        'choices'      => json_encode([
            'Continuing a behavior over time after the intervention ends',
            'Increasing the rate of a behavior',
            'Generalizing to new contexts',
            'Extinguishing unwanted behaviors'
        ]),
        'answer'       => 'Continuing a behavior over time after the intervention ends',
        'explanation'  => 'Maintenance ensures that learned behaviors persist after teaching and reinforcement stop.',
        'created_at'   => $now,
        'updated_at'   => $now
    ];

       // 173
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Stimulus generalization ensures that:',
           'choices'      => json_encode([
               'Behavior spreads to similar stimuli or contexts',
               'Behavior remains only in the training context',
               'Behavior is punished everywhere',
               'All behaviors cease'
           ]),
           'answer'       => 'Behavior spreads to similar stimuli or contexts',
           'explanation'  => 'Generalization promotes the use of skills across multiple settings and situations.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 174
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Response generalization occurs when:',
           'choices'      => json_encode([
               'Different but functionally equivalent responses emerge',
               'Only the trained response occurs',
               'All responses are eliminated',
               'Punishment is the primary change agent'
           ]),
           'answer'       => 'Different but functionally equivalent responses emerge',
           'explanation'  => 'Learners use new behaviors that achieve the same outcome as the original.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 175
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'A token economy system involves:',
           'choices'      => json_encode([
               'Earning tokens exchanged for backup reinforcers',
               'Punishing noncompliance only',
               'Withholding all reinforcement',
               'Immediate food reinforcement'
           ]),
           'answer'       => 'Earning tokens exchanged for backup reinforcers',
           'explanation'  => 'Token economies use conditioned reinforcers (tokens) to motivate target behaviors.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 176
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Time-out from positive reinforcement involves:',
           'choices'      => json_encode([
               'Removing access to reinforcers after problem behavior',
               'Delivering extra reinforcement',
               'Teaching alternative behaviors',
               'Providing no consequences'
           ]),
           'answer'       => 'Removing access to reinforcers after problem behavior',
           'explanation'  => 'Time-out reduces undesirable behavior by temporarily suspending reinforcement.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 177
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Non-exclusionary time-out requires the learner to:',
           'choices'      => json_encode([
               'Remain in the setting without access to reinforcement',
               'Be removed from the setting entirely',
               'Receive social praise only',
               'Perform corrective tasks'
           ]),
           'answer'       => 'Remain in the setting without access to reinforcement',
           'explanation'  => 'Learners stay in place but lose access to positive stimuli for a brief period.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 178
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Overcorrection procedures involve:',
           'choices'      => json_encode([
               'Restitution and repeated practice of the correct behavior',
               'Delivering time-out only',
               'Implementing full physical restraint',
               'Ignoring the behavior'
           ]),
           'answer'       => 'Restitution and repeated practice of the correct behavior',
           'explanation'  => 'Overcorrection requires repairing any damage and practicing the appropriate response multiple times.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 179
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Behavior momentum strategy uses:',
           'choices'      => json_encode([
               'High-probability request sequences followed by low-probability requests',
               'Random punishment',
               'Only low-probability requests',
               'No instructions at all'
           ]),
           'answer'       => 'High-probability request sequences followed by low-probability requests',
           'explanation'  => 'Behavior momentum builds compliance by starting with easy tasks.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 180
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 9,
           'question'     => 'Noncontingent reinforcement (NCR) provides:',
           'choices'      => json_encode([
               'Reinforcers on a fixed-time schedule independent of behavior',
               'No reinforcement at any time',
               'Reinforcement only after problem behavior',
               'Punishment for all behaviors'
           ]),
           'answer'       => 'Reinforcers on a fixed-time schedule independent of behavior',
           'explanation'  => 'NCR reduces problem behavior by freely providing reinforcers, decreasing motivation for the problem behavior.',
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

<?php

namespace Database\Seeders\LET\Majorship\SpecialNeedsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpecialNeedsEducationPart10Seeder extends Seeder
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

       // 181
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Implementation fidelity refers to:',
           'choices'      => json_encode([
               'Degree to which an intervention is delivered as intended',
               'Variability in student responses',
               'Number of staff members trained',
               'Duration of staff meetings'
           ]),
           'answer'       => 'Degree to which an intervention is delivered as intended',
           'explanation'  => 'Fidelity measures ensure programs are enacted accurately for valid outcomes.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 182
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'A needs assessment in SNEd primarily identifies:',
           'choices'      => json_encode([
               'Gaps between current and desired program outcomes',
               'Individual student test scores',
               'Only staff opinions',
               'Budget allocations'
           ]),
           'answer'       => 'Gaps between current and desired program outcomes',
           'explanation'  => 'Needs assessments inform planning by highlighting areas for improvement.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 183
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Professional development effectiveness is often evaluated by:',
           'choices'      => json_encode([
               'Observing staff implementation of strategies',
               'Counting training hours only',
               'Measuring student IQ scores',
               'Assessing building maintenance'
           ]),
           'answer'       => 'Observing staff implementation of strategies',
           'explanation'  => 'Effective PD translates into changed practices, not just attendance.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 184
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Multi-tiered systems of support (MTSS) integrate:',
           'choices'      => json_encode([
               'Academic and behavioral interventions across tiers',
               'Only special education services',
               'General education with no supports',
               'Discipline policies only'
           ]),
           'answer'       => 'Academic and behavioral interventions across tiers',
           'explanation'  => 'MTSS provides graduated supports to meet diverse learner needs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 185
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Data-driven decision making in SNEd involves:',
           'choices'      => json_encode([
               'Using objective data to guide instruction and interventions',
               'Relying solely on intuition',
               'Ignoring assessment results',
               'Basing plans on historical practices'
           ]),
           'answer'       => 'Using objective data to guide instruction and interventions',
           'explanation'  => 'Data informs adjustments to improve student outcomes effectively.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 186
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Functional behavior support plans should include:',
           'choices'      => json_encode([
               'Antecedent modifications, teaching strategies, and consequence systems',
               'Only punishment procedures',
               'General classroom rules',
               'Medical diagnoses'
           ]),
           'answer'       => 'Antecedent modifications, teaching strategies, and consequence systems',
           'explanation'  => 'Effective FBSPs address triggers, teach alternative skills, and outline responses.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 187
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Assistive technology assessments evaluate:',
           'choices'      => json_encode([
               'Student capabilities and task demands to match devices',
               'Only cost of devices',
               'General technology trends',
               'Staff preferences'
           ]),
           'answer'       => 'Student capabilities and task demands to match devices',
           'explanation'  => 'AT assessments ensure devices support specific student needs effectively.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 188
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Family satisfaction surveys are valuable because they:',
           'choices'      => json_encode([
               'Provide feedback on program effectiveness and family needs',
               'Evaluate only student behavior',
               'Measure teacher salaries',
               'Assess facility cleanliness'
           ]),
           'answer'       => 'Provide feedback on program effectiveness and family needs',
           'explanation'  => 'Family input guides improvements and ensures services are relevant.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 189
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'A collaboration log documents:',
           'choices'      => json_encode([
               'Meetings, decisions, and action steps among team members',
               'Only student grades',
               'Building maintenance requests',
               'Staff personal notes'
           ]),
           'answer'       => 'Meetings, decisions, and action steps among team members',
           'explanation'  => 'Logs track collaborative processes and ensure accountability for plans.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 190
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Program evaluation should measure:',
           'choices'      => json_encode([
               'Student outcomes, fidelity, and stakeholder satisfaction',
               'Only attendance rates',
               'Solely budget figures',
               'Only teacher qualifications'
           ]),
           'answer'       => 'Student outcomes, fidelity, and stakeholder satisfaction',
           'explanation'  => 'Comprehensive evaluation assesses multiple dimensions to guide program improvement.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 191
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Implementation science in SNEd explores:',
           'choices'      => json_encode([
               'Factors affecting the adoption and sustainability of practices',
               'Student academic content only',
               'Historical teaching methods',
               'Personal staff opinions unrelated to data'
           ]),
           'answer'       => 'Factors affecting the adoption and sustainability of practices',
           'explanation'  => 'Implementation science studies how to effectively integrate evidence-based approaches.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 192
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Sustainability planning ensures that:',
           'choices'      => json_encode([
               'Effective interventions continue beyond initial funding',
               'Programs end immediately after pilot',
               'Only new staff receive training',
               'Services are provided ad hoc'
           ]),
           'answer'       => 'Effective interventions continue beyond initial funding',
           'explanation'  => 'Sustainability plans address resources, training, and policies to maintain programs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 193
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'An implementation team is responsible for:',
           'choices'      => json_encode([
               'Overseeing rollout and monitoring of new practices',
               'Teaching all classrooms single-handedly',
               'Only budget approvals',
               'Performing only assessments'
           ]),
           'answer'       => 'Overseeing rollout and monitoring of new practices',
           'explanation'  => 'Teams coordinate training, resources, and data collection for implementation.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 194
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Continuous quality improvement (CQI) cycles include:',
           'choices'      => json_encode([
               'Plan, Do, Study, Act steps',
               'Static training modules',
               'One-time program launch',
               'Budget-only reviews'
           ]),
           'answer'       => 'Plan, Do, Study, Act steps',
           'explanation'  => 'CQI uses iterative cycles to refine interventions based on data.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 195
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Peer coaching for educators involves:',
           'choices'      => json_encode([
               'Teachers observing and providing feedback to each other',
               'Administrators lecturing staff only',
               'Isolated independent study',
               'Student-led instruction'
           ]),
           'answer'       => 'Teachers observing and providing feedback to each other',
           'explanation'  => 'Peer coaching builds capacity through collaborative reflection and support.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 196
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Stakeholder engagement ensures that programs are:',
           'choices'      => json_encode([
               'Relevant, supported, and responsive to community needs',
               'Developed in isolation by staff',
               'Focused only on national objectives',
               'Excluding family input'
           ]),
           'answer'       => 'Relevant, supported, and responsive to community needs',
           'explanation'  => 'Engaging stakeholders fosters buy-in and program alignment.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 197
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'A logic model visually represents:',
           'choices'      => json_encode([
               'Program inputs, activities, outputs, and outcomes connections',
               'Only budget allocations',
               'Daily lesson plans',
               'Staff schedules'
           ]),
           'answer'       => 'Program inputs, activities, outputs, and outcomes connections',
           'explanation'  => 'Logic models clarify how resources lead to intended results.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 198
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Cost-benefit analysis in program evaluation compares:',
           'choices'      => json_encode([
               'Program costs relative to outcomes and benefits',
               'Staff salaries only',
               'Student behaviors only',
               'Number of interventions delivered'
           ]),
           'answer'       => 'Program costs relative to outcomes and benefits',
           'explanation'  => 'Economic evaluations assess value and efficiency of programs.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 199
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Implementation barriers commonly include:',
           'choices'      => json_encode([
               'Lack of resources, training, and leadership support',
               'Excessive staff collaboration',
               'Overabundant funding',
               'Perfect fidelity'
           ]),
           'answer'       => 'Lack of resources, training, and leadership support',
           'explanation'  => 'Identifying barriers helps to plan strategies for effective implementation.',
           'created_at'   => $now,
           'updated_at'   => $now
       ];

       // 200
       $batch[] = [
           'subject_id'   => 9,
           'part'         => 10,
           'question'     => 'Successful dissemination of practices involves:',
           'choices'      => json_encode([
               'Sharing evidence-based methods through training and materials',
               'Keeping practices confidential',
               'Random informal conversations only',
               'No documentation'
           ]),
           'answer'       => 'Sharing evidence-based methods through training and materials',
           'explanation'  => 'Dissemination ensures broader uptake of effective interventions.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

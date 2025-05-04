<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart8Seeder extends Seeder
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

                        // 141
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Which strategy best supports transitions for toddlers between activities?',
            'choices'      => json_encode(['Using loud verbal cues','Introducing a transitional object','Allowing sudden changes','Extended free play without structure']),
            'answer'       => 'Introducing a transitional object',
            'explanation'  => 'Transitional objects like a small toy or blanket provide comfort and ease transitions.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 142
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'How often should emergency evacuation drills be conducted in ECE centers?',
            'choices'      => json_encode(['Monthly','Quarterly','Annually','Biannually']),
            'answer'       => 'Monthly',
            'explanation'  => 'Monthly drills ensure children and staff practice safe evacuation procedures regularly.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 143
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'What is the recommended teacher-child ratio for infants (0–12 months)?',
            'choices'      => json_encode(['1:3','1:5','1:8','1:10']),
            'answer'       => '1:3',
            'explanation'  => 'A 1:3 ratio ensures close supervision and responsive care for infants.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 144
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Which maximum group size is developmentally appropriate for 3- to 4-year-olds?',
            'choices'      => json_encode(['10','15','20','25']),
            'answer'       => '20',
            'explanation'  => 'Groups of up to 20 allow interaction while maintaining safety and engagement.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 145
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Reflective supervision sessions primarily aim to:',
            'choices'      => json_encode(['Enforce compliance','Encourage reflective practice','Assign performance grades','Eliminate feedback']),
            'answer'       => 'Encourage reflective practice',
            'explanation'  => 'Reflective supervision supports teacher growth through guided reflection and feedback.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 146
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Before conducting assessments, educators must obtain:',
            'choices'      => json_encode(['Verbal consent only','Written informed consent','No consent needed','Administrative approval only']),
            'answer'       => 'Written informed consent',
            'explanation'  => 'Written consent ensures families understand and agree to assessment activities.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 147
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Sleep or rest areas in ECE settings should be:',
            'choices'      => json_encode(['Bright and noisy','Calm and supervised','Shared with play spaces','Unrestricted access']),
            'answer'       => 'Calm and supervised',
            'explanation'  => 'Quiet, supervised rest areas ensure safe and restful naptime for children.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 148
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Learning stories as documentation primarily highlight:',
            'choices'      => json_encode(['Test scores','Process and context of learning','Daily attendance','Lesson plans']),
            'answer'       => 'Process and context of learning',
            'explanation'  => 'Learning stories capture narrative reflections on children’s experiences and learning processes.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 149
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Ensuring developmentally appropriate practice (DAP) requires educators to:',
            'choices'      => json_encode(['Follow a rigid curriculum','Assess and respond to individual children','Use only same-age comparisons','Ignore cultural context']),
            'answer'       => 'Assess and respond to individual children',
            'explanation'  => 'DAP involves ongoing assessment and tailored responses to each child’s needs.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 150
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Partnerships with community feeding programs support:',
            'choices'      => json_encode(['Only academic outcomes','Nutrition and health needs of children','Testing schedules','Administrative tasks']),
            'answer'       => 'Nutrition and health needs of children',
            'explanation'  => 'Collaborating with feeding programs ensures children receive adequate nutrition.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 151
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Supporting dual language learners effectively includes:',
            'choices'      => json_encode(['Discouraging home language','Integrating home language and English','Testing only in English','Isolating learners']),
            'answer'       => 'Integrating home language and English',
            'explanation'  => 'Valuing home language alongside English promotes confidence and learning.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 152
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'A positive behavior support plan in ECE focuses on:',
            'choices'      => json_encode(['Punishment','Teaching replacement behaviors','Ignoring misbehavior','Immediate exclusion']),
            'answer'       => 'Teaching replacement behaviors',
            'explanation'  => 'Positive behavior support emphasizes teaching appropriate behaviors to replace challenging ones.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 153
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'In the IEP process, ECE teachers typically:',
            'choices'      => json_encode(['Lead all therapy sessions','Collaborate with specialists and families','Exclude families from planning','Write legal documents']),
            'answer'       => 'Collaborate with specialists and families',
            'explanation'  => 'Teachers participate with specialists and families to develop individualized goals and supports.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 154
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Maintaining confidentiality in observations and records ensures:',
            'choices'      => json_encode(['Public posting of scores','Trust with families and legal compliance','Easy sharing of all data','Anonymous teacher evaluation']),
            'answer'       => 'Trust with families and legal compliance',
            'explanation'  => 'Confidentiality protects children\'s privacy and meets ethical and legal standards.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 155
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Anti-bias book selection in libraries helps children to:',
            'choices'      => json_encode(['Reinforce stereotypes','See diverse perspectives','Limit reading options','Focus only on local culture']),
            'answer'       => 'See diverse perspectives',
            'explanation'  => 'Books reflecting multiple cultures and identities foster respect and empathy.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // 156
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'A transitional object commonly used by toddlers is a:',
            'choices'      => json_encode(['Blanket','Building block','Art easel','Science kit']),
            'answer'       => 'Blanket',
            'explanation'  => 'Comfort items like blankets or soft toys serve as transitional objects for emotional security.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 157
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Handwashing in ECE should occur:',
            'choices'      => json_encode(['Only at the start of day','Before meals and after toileting','Never','Only when visibly dirty']),
            'answer'       => 'Before meals and after toileting',
            'explanation'  => 'Handwashing before meals and after toileting prevents the spread of germs among children.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 158
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'What is the recommended teacher-child ratio for 4-year-olds?',
            'choices'      => json_encode(['1:6','1:8','1:10','1:12']),
            'answer'       => '1:10',
            'explanation'  => 'A 1:10 ratio ensures manageable group sizes to provide proper supervision and interaction for 4-year-olds.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 159
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Which outdoor equipment best promotes sensory exploration?',
            'choices'      => json_encode(['Coloring books','Sand and water tables','Math manipulatives','Textbooks']),
            'answer'       => 'Sand and water tables',
            'explanation'  => 'Sand and water tables offer tactile and sensory experiences that support exploration and motor skills.',
            'created_at'   => $now,
            'updated_at'   => $now
        ];

        // 160
        $batch[] = [
            'subject_id'   => 8,
            'part'         => 8,
            'question'     => 'Which policy is essential for ensuring safety during field trips?',
            'choices'      => json_encode(['Standardized testing policy','Consent forms and risk assessments','Art and craft policy','Quiet time policy']),
            'answer'       => 'Consent forms and risk assessments',
            'explanation'  => 'Obtaining consent and conducting risk assessments protects children and ensures safety outside the classroom.',
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

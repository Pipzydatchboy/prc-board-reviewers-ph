<?php

namespace Database\Seeders\LET\Majorship\EarlyChildhoodEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EarlyChildhoodEducationPart7Seeder extends Seeder
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

                // 121
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'What is the primary benefit of a print-rich environment in an early childhood classroom?',
                    'choices'      => json_encode(['Enhances rote memorization','Promotes emergent literacy and vocabulary','Limits creative expression','Focuses solely on letters']),
                    'answer'       => 'Promotes emergent literacy and vocabulary',
                    'explanation'  => 'A print-rich environment exposes children to written language, supporting reading and vocabulary development.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 122
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which practice exemplifies developmentally appropriate limit setting?',
                    'choices'      => json_encode(['Verbally reprimanding loudly','Providing clear, consistent guidelines','Allowing unrestricted behavior','Ignoring rule violations']),
                    'answer'       => 'Providing clear, consistent guidelines',
                    'explanation'  => 'Appropriate limit setting involves clear, consistent rules that children can understand and follow.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 123
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'An appropriate teacher-child ratio for 3-year-olds in a group setting is typically:',
                    'choices'      => json_encode(['1:3','1:6','1:10','1:20']),
                    'answer'       => '1:6',
                    'explanation'  => 'A 1:6 ratio provides adequate supervision and interaction for 3-year-olds.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 124
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'How often should high-touch surfaces and shared toys be sanitized in ECE settings?',
                    'choices'      => json_encode(['Once a week','Twice a day','Daily or as needed','Never']),
                    'answer'       => 'Daily or as needed',
                    'explanation'  => 'Sanitizing daily and after illnesses helps prevent disease transmission.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 125
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which fine motor material supports early writing skills?',
                    'choices'      => json_encode(['Large playdough balls','Alphabet tracing cards','Full-scale furniture','Auditory CDs']),
                    'answer'       => 'Alphabet tracing cards',
                    'explanation'  => 'Tracing cards strengthen hand muscles and letter formation skills.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 126
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Inclusive classrooms often use visual aids to support:',
                    'choices'      => json_encode(['Only verbal learners','Multiple learning styles and diverse needs','Assessment scores','Discipline procedures']),
                    'answer'       => 'Multiple learning styles and diverse needs',
                    'explanation'  => 'Visual aids help children with different abilities and learning preferences access content.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 127
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Culturally relevant materials in the classroom promote:',
                    'choices'      => json_encode(['Cultural stereotyping','Engagement and respect for diverse backgrounds','Exclusion of minority cultures','Standardized content only']),
                    'answer'       => 'Engagement and respect for diverse backgrounds',
                    'explanation'  => 'Materials that reflect children’s cultures foster inclusivity and identity.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 128
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which seating arrangement best supports collaborative learning in ECE?',
                    'choices'      => json_encode(['Rows facing the teacher','Clusters of small tables','Individual desks','Adults only circle']),
                    'answer'       => 'Clusters of small tables',
                    'explanation'  => 'Small clusters facilitate group interactions and cooperative play.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 129
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which question type encourages critical thinking during read-aloud sessions?',
                    'choices'      => json_encode(['Closed yes/no questions','Open-ended “why” and “how” questions','Lecturing only','Silent reading']),
                    'answer'       => 'Open-ended “why” and “how” questions',
                    'explanation'  => 'Open-ended questions prompt children to think deeply and articulate reasoning.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 130
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'A thematic curriculum integrates content around a:',
                    'choices'      => json_encode(['Random activity','Central theme or topic','Strict subject separation','Test preparation']),
                    'answer'       => 'Central theme or topic',
                    'explanation'  => 'Themes connect learning across domains and engage children’s interests.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 131
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which practice reflects emergent curriculum?',
                    'choices'      => json_encode(['Predefined lesson plans regardless of interest','Child interests guiding project development','Skilled instruction only','Standardized pacing guide']),
                    'answer'       => 'Child interests guiding project development',
                    'explanation'  => 'Emergent curriculum adapts to children’s curiosities and choices.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 132
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Effective scaffolding in small-group activities involves:',
                    'choices'      => json_encode(['Leaving children completely alone','Providing hints and support as needed','Dictating every step','Testing instead of guiding']),
                    'answer'       => 'Providing hints and support as needed',
                    'explanation'  => 'Scaffolding adjusts support to children’s current level to foster independence over time.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 133
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Incorporating music and movement supports development in:',
                    'choices'      => json_encode(['Only physical skills','Multiple domains including motor, language, and social','Mathematical concepts only','Assessment procedures']),
                    'answer'       => 'Multiple domains including motor, language, and social',
                    'explanation'  => 'Music and movement activities engage children physically, linguistically, and socially.',
                    'created_at'   => $now,
                    'updated_at'   => $now,
                ];
        
                // 134
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Use of technology in ECE should be:',
                    'choices'      => json_encode(['Unrestricted and unsupervised','Limited, interactive, and educational','Focused on adult entertainment','Excluded entirely']),
                    'answer'       => 'Limited, interactive, and educational',
                    'explanation'  => 'Appropriate technology use involves short, guided activities that enhance learning.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 135
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which data is most useful for planning differentiated instruction?',
                    'choices'      => json_encode(['Family income','Observation and assessment results','Teacher moods','Building maintenance records']),
                    'answer'       => 'Observation and assessment results',
                    'explanation'  => 'Assessment data informs tailored strategies to meet individual child needs.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 136
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which art activity best sparks creativity and fine motor skills?',
                    'choices'      => json_encode(['Coloring within lines','Free painting with varied materials','Copying fixed shapes','Tracing worksheets']),
                    'answer'       => 'Free painting with varied materials',
                    'explanation'  => 'Open-ended art encourages exploration and fine motor development.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 137
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Outdoor play contributes most to:',
                    'choices'      => json_encode(['Creative writing only','Gross motor development and health','Academic test scores','Reduced social skills']),
                    'answer'       => 'Gross motor development and health',
                    'explanation'  => 'Outdoor activities strengthen muscles, coordination, and cardiovascular health.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 138
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'How do teachers use assessment data to plan curriculum?',
                    'choices'      => json_encode(['Ignore assessment findings','Tailor lessons to children’s skill levels','Standardize all activities','Eliminate play time']),
                    'answer'       => 'Tailor lessons to children’s skill levels',
                    'explanation'  => 'Data-driven planning ensures instruction meets current developmental needs.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 139
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Regular reflective supervision sessions support teacher growth by:',
                    'choices'      => json_encode(['Enforcing compliance','Encouraging reflection on practice and improvement','Focusing solely on mistakes','Replacing professional development']),
                    'answer'       => 'Encouraging reflection on practice and improvement',
                    'explanation'  => 'Reflective supervision fosters self-awareness and ongoing pedagogical growth.',
                    'created_at'   => $now,
                    'updated_at'   => $now
                ];
        
                // 140
                $batch[] = [
                    'subject_id'   => 8,
                    'part'         => 7,
                    'question'     => 'Which collaboration model involves co-planning and co-teaching with specialists?',
                    'choices'      => json_encode(['Consultation','Parallel teaching','Transactional analysis','Directive instruction']),
                    'answer'       => 'Parallel teaching',
                    'explanation'  => 'Parallel teaching is a co-teaching model where two teachers share planning and instruction responsibilities.',
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

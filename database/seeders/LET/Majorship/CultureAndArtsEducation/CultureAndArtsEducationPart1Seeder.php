<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart1Seeder extends Seeder
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

       // Part 1: Foundations of Culture & Arts Education

       //1
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'According to CHED program standards, what is a primary goal of Culture and Arts Education?',
           'choices'     => json_encode([
               'Develop cultural literacy and aesthetic sensitivity',
               'Prepare students for standardized testing',
               'Promote only technical skills',
               'Focus solely on recreational activities',
           ]),
           'answer'      => 'Develop cultural literacy and aesthetic sensitivity',
           'explanation' => 'CHED emphasizes fostering students’ understanding of cultural heritage and aesthetic awareness.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //2
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which learning philosophy emphasizes active engagement and experiential learning in arts and culture?',
           'choices'     => json_encode([
               'Constructivism',
               'Behaviorism',
               'Essentialism',
               'Perennialism',
           ]),
           'answer'      => 'Constructivism',
           'explanation' => 'Constructivism holds that learners build knowledge through active exploration and reflection.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //3
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which curriculum model focuses on four disciplines: art production, art history, art criticism, and aesthetics?',
           'choices'     => json_encode([
               'Discipline-Based Art Education (DBAE)',
               'Integrated Arts Model',
               'Performance-Based Model',
               'Cultural Studies Approach',
           ]),
           'answer'      => 'Discipline-Based Art Education (DBAE)',
           'explanation' => 'DBAE structures art instruction around these four interconnected areas.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //4
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What UNESCO Convention aims to safeguard intangible cultural heritage?',
           'choices'     => json_encode([
               '2003 Convention',
               '1972 World Heritage Convention',
               '2005 Convention',
               '1995 Convention',
           ]),
           'answer'      => '2003 Convention',
           'explanation' => 'The 2003 Convention focuses on protecting intangible cultural expressions worldwide.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //5
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which Philippine body is primarily responsible for preserving and promoting cultural heritage?',
           'choices'     => json_encode([
               'National Commission for Culture and the Arts (NCCA)',
               'Department of Education (DepEd)',
               'Cultural Center of the Philippines (CCP)',
               'National Museum',
           ]),
           'answer'      => 'National Commission for Culture and the Arts (NCCA)',
           'explanation' => 'The NCCA formulates policies and programs for preserving Philippine arts and culture.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //6
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What is cultural transmission in the context of arts education?',
           'choices'     => json_encode([
               'Passing on values and traditions to future generations',
               'Teaching technical skills only',
               'Focusing on commercial arts',
               'Isolating art from society',
           ]),
           'answer'      => 'Passing on values and traditions to future generations',
           'explanation' => 'Cultural transmission ensures continuity of cultural identity and heritage.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //7
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which indigenous Philippine weaving recognized by UNESCO is notable for its Tboli heritage?',
           'choices'     => json_encode([
               'T’nalak weaving',
               'Banig weaving',
               'Inabel weaving',
               'Malong weaving',
           ]),
           'answer'      => 'T’nalak weaving',
           'explanation' => 'T’nalak is a traditional cloth of the Tboli people, inscribed as UNESCO intangible heritage.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //8
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which pedagogical strategy uses local museums and communities to enrich learning?',
           'choices'     => json_encode([
               'Community-based learning',
               'Lecture-discussion',
               'Drill and practice',
               'Online modules',
           ]),
           'answer'      => 'Community-based learning',
           'explanation' => 'Community-based learning leverages local resources for experiential cultural education.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //9
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What does authentic assessment in arts education typically involve?',
           'choices'     => json_encode([
               'Portfolios and performance tasks',
               'Multiple-choice tests',
               'True/false quizzes',
               'Matching activities',
           ]),
           'answer'      => 'Portfolios and performance tasks',
           'explanation' => 'Authentic assessments capture real-world artistry and creative process.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //10
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which interdisciplinary approach integrates arts with STEM disciplines?',
           'choices'     => json_encode([
               'STEAM',
               'STEM',
               'STREAM',
               'STEMM',
           ]),
           'answer'      => 'STEAM',
           'explanation' => 'STEAM adds arts to STEM, fostering creativity alongside scientific inquiry.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //11
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What ethical consideration is crucial when teaching indigenous art forms?',
           'choices'     => json_encode([
               'Avoiding cultural appropriation',
               'Maximizing profits',
               'Standardizing the art',
               'Teaching only technique',
           ]),
           'answer'      => 'Avoiding cultural appropriation',
           'explanation' => 'Respectful representation and collaboration with cultural bearers is essential.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //12
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which element of culture encompasses shared beliefs and values?',
           'choices'     => json_encode([
               'Ideology',
               'Artifacts',
               'Institutions',
               'Customs',
           ]),
           'answer'      => 'Ideology',
           'explanation' => 'Ideology refers to the collective belief systems that guide social behavior.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //13
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What reflective practice deepens learning in arts education?',
           'choices'     => json_encode([
               'Metacognition',
               'Memorization',
               'Imitation',
               'Repetition',
           ]),
           'answer'      => 'Metacognition',
           'explanation' => 'Metacognitive reflection helps students analyze their creative process and outcomes.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //14
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which theory by Paulo Freire influences critical cultural pedagogy?',
           'choices'     => json_encode([
               'Critical pedagogy',
               'Behaviorism',
               'Essentialism',
               'Constructivism',
           ]),
           'answer'      => 'Critical pedagogy',
           'explanation' => 'Freire’s approach critiques power structures and promotes learner agency.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //15
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What role do festivals and traditional celebrations play in arts education?',
           'choices'     => json_encode([
               'Engaging learners in cultural practices',
               'Testing technical skills only',
               'Limiting creativity',
               'Isolating art from society',
           ]),
           'answer'      => 'Engaging learners in cultural practices',
           'explanation' => 'Festivals provide contextual and communal learning experiences.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //16
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What does iterative learning involve in the creative process?',
           'choices'     => json_encode([
               'Repeated refinement through cycles of feedback',
               'Single attempt execution',
               'Avoiding feedback',
               'Memorizing final products',
           ]),
           'answer'      => 'Repeated refinement through cycles of feedback',
           'explanation' => 'Iterative learning engages creators in revising and improving their work over time.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //17
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which assessment method empowers students to critique their own artwork?',
           'choices'     => json_encode([
               'Self-assessment',
               'Peer assessment',
               'Teacher assessment',
               'Standardized testing',
           ]),
           'answer'      => 'Self-assessment',
           'explanation' => 'Self-assessment promotes metacognition and personal goal setting in arts learning.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //18
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What is holistic integration in culture and arts education?',
           'choices'     => json_encode([
               'Connecting arts disciplines with other curricular areas',
               'Isolating art from academic subjects',
               'Focusing only on skill mastery',
               'Teaching art techniques in isolation',
           ]),
           'answer'      => 'Connecting arts disciplines with other curricular areas',
           'explanation' => 'Holistic integration uses the arts to enrich learning across multiple subjects.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //19
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'Which tool can be used to document students’ progress in arts education?',
           'choices'     => json_encode([
               'Digital portfolio',
               'Chalkboard',
               'Overhead projector',
               'Attendance list',
           ]),
           'answer'      => 'Digital portfolio',
           'explanation' => 'Digital portfolios allow ongoing curation of student artworks and reflections.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];

       //20
       $batch[] = [
           'subject_id'  => 19,
           'part'        => 1,
           'question'    => 'What strategy supports differentiation in culture and arts classrooms?',
           'choices'     => json_encode([
               'Tiered assignments',
               'Uniform tasks',
               'Single-level instruction',
               'Fixed group roles',
           ]),
           'answer'      => 'Tiered assignments',
           'explanation' => 'Tiered assignments offer varying complexity to meet diverse student needs.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

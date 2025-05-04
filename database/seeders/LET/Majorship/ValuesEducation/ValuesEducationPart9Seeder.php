<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart9Seeder extends Seeder
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

       // Part 9 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which assessment method uses student-generated portfolios to demonstrate growth in values?',
           'choices'      => json_encode([
               'Standardized test',
               'Portfolio assessment',
               'Oral exam',
               'Multiple-choice quiz',
           ]),
           'answer'       => 'Portfolio assessment',
           'explanation'  => 'Portfolios compile student work over time, showing progression in values expression.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which strategy involves students writing reflective exit slips on value lessons learned?',
           'choices'      => json_encode([
               'Exit slips',
               'Lesson plans',
               'Role plays',
               'Proctored exams',
           ]),
           'answer'       => 'Exit slips',
           'explanation'  => 'Exit slips are brief written reflections completed at end of class to assess understanding and values integration.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which collaborative activity uses a fishbowl format to discuss moral dilemmas?',
           'choices'      => json_encode([
               'Socratic seminar',
               'Fishbowl discussion',
               'Debate',
               'Lecture',
           ]),
           'answer'       => 'Fishbowl discussion',
           'explanation'  => 'Fishbowl discussion places participants in inner and outer circles to analyze dilemmas collaboratively.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which method uses moral story completion to assess students’ value reasoning?',
           'choices'      => json_encode([
               'Story completion',
               'True-false test',
               'Class polling',
               'Oral recitation',
           ]),
           'answer'       => 'Story completion',
           'explanation'  => 'Story completion asks students to conclude a narrative, revealing their moral decision-making processes.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which technique engages students in examining case studies of ethical dilemmas?',
           'choices'      => json_encode([
               'Case study analysis',
               'Silent reading',
               'Math drill',
               'Grammar exercise',
           ]),
           'answer'       => 'Case study analysis',
           'explanation'  => 'Case study analysis encourages critical thinking on real-world ethical issues.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which instructional strategy uses service-oriented projects to assess civic values?',
           'choices'      => json_encode([
               'Community service projects',
               'Dictation tests',
               'Timed essays',
               'Flashcard drills',
           ]),
           'answer'       => 'Community service projects',
           'explanation'  => 'Service projects allow learners to apply civic values in real-life contexts and demonstrate commitment.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which tool employs rubrics to evaluate values-based student performance?',
           'choices'      => json_encode([
               'Rubric assessment',
               'True-false quiz',
               'Oral quiz',
               'Multiple-choice test',
           ]),
           'answer'       => 'Rubric assessment',
           'explanation'  => 'Rubrics provide clear criteria for evaluating the quality of values-related behaviors and artifacts.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which evaluation method uses peer feedback to strengthen values learning?',
           'choices'      => json_encode([
               'Peer assessment',
               'Standardized testing',
               'Instructor-only grading',
               'Self-paced quiz',
           ]),
           'answer'       => 'Peer assessment',
           'explanation'  => 'Peer assessment engages students in giving constructive feedback on each other’s values expressions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which strategy uses reflective dialogue in small circles to explore personal values?',
           'choices'      => json_encode([
               'Reflective circles',
               'Silent meditation',
               'Dictation',
               'Writing code',
           ]),
           'answer'       => 'Reflective circles',
           'explanation'  => 'Reflective circles foster deep discussion and sharing of personal value insights in intimate groups.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which practice encourages students to write letters to their future selves about value commitments?',
           'choices'      => json_encode([
               'Letters to future selves',
               'Flashcards',
               'Memorization',
               'Online quizzes',
           ]),
           'answer'       => 'Letters to future selves',
           'explanation'  => 'Writing letters to future selves helps students articulate and reaffirm their value goals over time.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which method uses values contracts to establish classroom behavior agreements?',
           'choices'      => json_encode([
               'Values contracts',
               'Open-ended tests',
               'Multiple-choice quizzes',
               'Timed drills',
           ]),
           'answer'       => 'Values contracts',
           'explanation'  => 'Values contracts are agreements outlining expected behaviors grounded in shared values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which approach integrates mentorship programs to reinforce value transmission?',
           'choices'      => json_encode([
               'Mentorship programs',
               'Standard lectures',
               'Competitive exams',
               'Routine exercises',
           ]),
           'answer'       => 'Mentorship programs',
           'explanation'  => 'Mentorship pairs students with mentors to model and guide value-based decision-making.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which evaluative technique uses reflective self-assessment questionnaires?',
           'choices'      => json_encode([
               'Self-assessment questionnaire',
               'Group recital',
               'In-class polls',
               'Textbook quizzes',
           ]),
           'answer'       => 'Self-assessment questionnaire',
           'explanation'  => 'Self-assessment questionnaires prompt learners to evaluate their own value attitudes and behaviors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which approach uses ethical board games to engage students in value dilemmas?',
           'choices'      => json_encode([
               'Ethical board games',
               'Rote memorization',
               'Silent reading',
               'Chalk-and-talk',
           ]),
           'answer'       => 'Ethical board games',
           'explanation'  => 'Ethical board games simulate dilemmas and decision-making in a playful, engaging format.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which reflective exercise prompts students to identify value strengths and weaknesses?',
           'choices'      => json_encode([
               'SWOT analysis of values',
               'True-false quizzes',
               'Math drills',
               'Lecture summaries',
           ]),
           'answer'       => 'SWOT analysis of values',
           'explanation'  => 'A SWOT analysis helps students assess their values’ strengths, weaknesses, opportunities, and threats.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which community-based approach immerses students in local value practices?',
           'choices'      => json_encode([
               'Community immersion',
               'Textbook study',
               'Online seminars',
               'Virtual tours',
           ]),
           'answer'       => 'Community immersion',
           'explanation'  => 'Community immersion places learners in local settings to experience and participate in cultural values firsthand.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which strategy involves organizing moral leadership camps for students?',
           'choices'      => json_encode([
               'Leadership camps',
               'Timed quizzes',
               'Role drills',
               'Lecture series',
           ]),
           'answer'       => 'Leadership camps',
           'explanation'  => 'Leadership camps provide intensive experiences focused on developing moral and civic leadership skills.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which method uses action research projects to enact values in school communities?',
           'choices'      => json_encode([
               'Action research',
               'Standardized testing',
               'Essay writing',
               'Fill-in-the-blank',
           ]),
           'answer'       => 'Action research',
           'explanation'  => 'Action research engages teachers and students in studying and improving value implementation in their context.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which instructional design integrates values into every subject rather than a standalone class?',
           'choices'      => json_encode([
               'Values infusion',
               'Subject compartmentalization',
               'Extracurricular focus',
               'Intensive workshops',
           ]),
           'answer'       => 'Values infusion',
           'explanation'  => 'Values infusion embeds moral and civic values across various subjects and activities in the curriculum.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 9 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 9,
           'question'     => 'Which reflective tool asks students to keep a moral diary or journal?',
           'choices'      => json_encode([
               'Moral diary',
               'Timed essay test',
               'Peer quiz',
               'Group presentation',
           ]),
           'answer'       => 'Moral diary',
           'explanation'  => 'A moral diary prompts regular journaling of ethical reflections and personal value experiences.',
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

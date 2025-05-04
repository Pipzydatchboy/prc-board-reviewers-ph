<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart5Seeder extends Seeder
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

       // Part 5 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal of Values Education emphasizes the learner’s ability to make moral decisions independently?',
           'choices'      => json_encode([
               'Moral sensitivity',
               'Moral autonomy',
               'Moral action',
               'Moral recovery',
           ]),
           'answer'       => 'Moral autonomy',
           'explanation'  => 'Moral autonomy refers to the capacity to choose and justify moral actions based on one’s own reasoning.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which Values Education goal focuses on recognizing and interpreting moral issues?',
           'choices'      => json_encode([
               'Moral action',
               'Moral sensitivity',
               'Moral integrity',
               'Moral leadership',
           ]),
           'answer'       => 'Moral sensitivity',
           'explanation'  => 'Moral sensitivity involves awareness of ethical dilemmas and understanding their implications.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Developing the ability to reason through ethical dilemmas is known as what Values Education goal?',
           'choices'      => json_encode([
               'Moral reasoning',
               'Moral empathy',
               'Moral discourse',
               'Moral conservation',
           ]),
           'answer'       => 'Moral reasoning',
           'explanation'  => 'Moral reasoning is the process of making sense of and resolving ethical issues through structured thinking.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal ensures that learners act in accordance with their moral judgments?',
           'choices'      => json_encode([
               'Moral reflection',
               'Moral judgment',
               'Moral action',
               'Moral support',
           ]),
           'answer'       => 'Moral action',
           'explanation'  => 'Moral action translates values and judgments into concrete, ethical behavior.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal of Values Education builds the courage to uphold values under pressure?',
           'choices'      => json_encode([
               'Moral courage',
               'Moral conformity',
               'Moral apathy',
               'Moral ease',
           ]),
           'answer'       => 'Moral courage',
           'explanation'  => 'Moral courage is the willingness to act ethically despite possible negative consequences.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which Values Education goal fosters empathy and concern for others?',
           'choices'      => json_encode([
               'Moral reasoning',
               'Moral empathy',
               'Moral autonomy',
               'Moral regulation',
           ]),
           'answer'       => 'Moral empathy',
           'explanation'  => 'Moral empathy involves understanding and sharing the feelings of others to guide moral response.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal promotes fairness and equity in interpersonal relationships?',
           'choices'      => json_encode([
               'Moral conformity',
               'Moral justice',
               'Moral relativism',
               'Moral tolerance',
           ]),
           'answer'       => 'Moral justice',
           'explanation'  => 'Moral justice emphasizes impartial treatment and respect for rights in all interactions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal underscores responsibility towards community welfare?',
           'choices'      => json_encode([
               'Social responsibility',
               'Personal autonomy',
               'Individualism',
               'Moral absolutism',
           ]),
           'answer'       => 'Social responsibility',
           'explanation'  => 'Social responsibility refers to acting for the benefit of society and the common good.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal of Values Education aims to nurture a sense of national pride and love of country?',
           'choices'      => json_encode([
               'Global citizenship',
               'Patriotism',
               'Cultural relativism',
               'Ethical skepticism',
           ]),
           'answer'       => 'Patriotism',
           'explanation'  => 'Patriotism involves a deep respect and love for one’s nation and its heritage.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which Values Education goal cultivates care for the environment and sustainable living?',
           'choices'      => json_encode([
               'Environmental stewardship',
               'Consumerism',
               'Industrial growth',
               'Technological adoption',
           ]),
           'answer'       => 'Environmental stewardship',
           'explanation'  => 'Environmental stewardship emphasizes responsible use and protection of natural resources.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal focuses on preparing learners to resolve conflicts peacefully?',
           'choices'      => json_encode([
               'Moral aggression',
               'Peace education',
               'Moral conquest',
               'Conflict avoidance',
           ]),
           'answer'       => 'Peace education',
           'explanation'  => 'Peace education teaches skills for nonviolent communication and reconciliation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which Values Education goal develops moral leadership qualities in learners?',
           'choices'      => json_encode([
               'Moral authority',
               'Moral autonomy',
               'Moral leadership',
               'Moral compliance',
           ]),
           'answer'       => 'Moral leadership',
           'explanation'  => 'Moral leadership involves guiding others through ethical example and decision-making.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal strengthens personal integrity and honesty?',
           'choices'      => json_encode([
               'Integrity cultivation',
               'Integrity avoidance',
               'Integrity relativism',
               'Integrity ambiguity',
           ]),
           'answer'       => 'Integrity cultivation',
           'explanation'  => 'Integrity cultivation refers to developing consistency between one’s values and actions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal encourages continuous moral growth throughout life?',
           'choices'      => json_encode([
               'Moral stagnation',
               'Lifelong moral learning',
               'Moral avoidance',
               'Moral rigidity',
           ]),
           'answer'       => 'Lifelong moral learning',
           'explanation'  => 'Lifelong moral learning promotes ongoing reflection and refinement of one’s values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal fosters respect for cultural diversity and inclusion?',
           'choices'      => json_encode([
               'Cultural privilege',
               'Cultural inclusion',
               'Cultural exclusion',
               'Cultural uniformity',
           ]),
           'answer'       => 'Cultural inclusion',
           'explanation'  => 'Cultural inclusion involves valuing and respecting diverse traditions and practices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal promotes students’ ability to reflect critically on their values and beliefs?',
           'choices'      => json_encode([
               'Critical reflection',
               'Critical suppression',
               'Critical avoidance',
               'Critical compliance',
           ]),
           'answer'       => 'Critical reflection',
           'explanation'  => 'Critical reflection encourages analysis of one’s own value system to foster growth.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal addresses the ethical use of technology in a digital society?',
           'choices'      => json_encode([
               'Digital consumption',
               'Digital ethics',
               'Digital distraction',
               'Digital conformity',
           ]),
           'answer'       => 'Digital ethics',
           'explanation'  => 'Digital ethics concerns responsible and principled behavior in online environments.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal encourages resilience when facing moral challenges?',
           'choices'      => json_encode([
               'Moral resilience',
               'Moral retreat',
               'Moral abdication',
               'Moral avoidance',
           ]),
           'answer'       => 'Moral resilience',
           'explanation'  => 'Moral resilience is the capacity to sustain or restore moral integrity under stress.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which Values Education goal fosters active citizenship and democratic participation?',
           'choices'      => json_encode([
               'Civic empowerment',
               'Civic avoidance',
               'Civic elitism',
               'Civic isolation',
           ]),
           'answer'       => 'Civic empowerment',
           'explanation'  => 'Civic empowerment equips learners with knowledge and skills to engage responsibly in society.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 5,
           'question'     => 'Which goal of Values Education emphasizes accountability for one’s actions?',
           'choices'      => json_encode([
               'Accountable conduct',
               'Accountable ignorance',
               'Accountable avoidance',
               'Accountable silence',
           ]),
           'answer'       => 'Accountable conduct',
           'explanation'  => 'Accountable conduct refers to taking responsibility for decisions and their consequences.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

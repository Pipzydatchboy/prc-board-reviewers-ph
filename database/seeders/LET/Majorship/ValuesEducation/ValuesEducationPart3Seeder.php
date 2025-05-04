<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart3Seeder extends Seeder
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

       // Part 3 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which of the following is a primary goal of Values Education in the Philippine context?',
           'choices'      => json_encode([
               'Promote memorization of religious texts',
               'Develop moral autonomy and critical conscience',
               'Increase standardized test scores',
               'Train for athletic competition',
           ]),
           'answer'       => 'Develop moral autonomy and critical conscience',
           'explanation'  => 'Values Education aims primarily to develop students\' ability to think ethically and make responsible moral choices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Values Education seeks to foster which dimension of learner development alongside cognitive skills?',
           'choices'      => json_encode([
               'Affective and behavioral domains',
               'Only physical domain',
               'Test-taking strategies',
               'Mathematical proficiency',
           ]),
           'answer'       => 'Affective and behavioral domains',
           'explanation'  => 'It integrates affective (values, attitudes) and behavioral (actions) with cognitive learning.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'A key goal of Philippine Values Education is to cultivate a "makataong Pilipino". This ideal emphasizes:',
           'choices'      => json_encode([
               'Material success above all',
               'Holistic human development rooted in Filipino values',
               'Blind adherence to authority',
               'Competitive individualism',
           ]),
           'answer'       => 'Holistic human development rooted in Filipino values',
           'explanation'  => '"Makataong Pilipino" refers to a Filipino who integrates national values in personal and social life.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'One of the goals of Values Education is to promote social responsibility, which involves:',
           'choices'      => json_encode([
               'Prioritizing self-interest exclusively',
               'Contributing to the common good and community welfare',
               'Avoiding community engagement',
               'Focusing solely on academic performance',
           ]),
           'answer'       => 'Contributing to the common good and community welfare',
           'explanation'  => 'Social responsibility refers to caring for others and acting for societal benefit.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal of Values Education focuses on deepening students’ awareness of their spiritual dimension?',
           'choices'      => json_encode([
               'Civic participation',
               'Spiritual awareness and respect for the divine',
               'Technological skills',
               'Fiscal literacy',
           ]),
           'answer'       => 'Spiritual awareness and respect for the divine',
           'explanation'  => 'Values Education in PH includes nurturing students\' spiritual growth and reverence.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Environmental stewardship is a goal of Values Education. Which behavior aligns with this objective?',
           'choices'      => json_encode([
               'Indiscriminate littering',
               'Planting trees and conserving resources',
               'Ignoring environmental issues',
               'Prioritizing convenience over sustainability',
           ]),
           'answer'       => 'Planting trees and conserving resources',
           'explanation'  => 'Stewardship involves caring for creation through sustainable practices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'A goal of Values Education is to develop students’ sense of justice. This means:',
           'choices'      => json_encode([
               'Allowing discrimination',
               'Promoting fairness and equity in treatment of others',
               'Encouraging favoritism',
               'Ignoring human rights',
           ]),
           'answer'       => 'Promoting fairness and equity in treatment of others',
           'explanation'  => 'Justice entails impartial and fair treatment for all individuals.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal emphasizes fostering empathy and compassion among learners?',
           'choices'      => json_encode([
               'Technological innovation',
               'Empathy and compassionate action',
               'Competitive rivalry',
               'Unquestioning obedience',
           ]),
           'answer'       => 'Empathy and compassionate action',
           'explanation'  => 'Values Education seeks to develop caring attitudes toward others in need.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Values Education aims to build ethical leadership. An ethical leader should:',
           'choices'      => json_encode([
               'Exploit subordinates',
               'Demonstrate integrity and serve the common good',
               'Prioritize personal gain',
               'Avoid accountability',
           ]),
           'answer'       => 'Demonstrate integrity and serve the common good',
           'explanation'  => 'Ethical leadership involves moral example and community service.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'A curricular goal is to instill discipline. Which student行为 reflects this goal?',
           'choices'      => json_encode([
               'Consistently arriving late',
               'Following classroom rules and meeting deadlines',
               'Disrupting classmates',
               'Ignoring responsibilities',
           ]),
           'answer'       => 'Following classroom rules and meeting deadlines',
           'explanation'  => 'Discipline is shown by adherence to rules and responsibilities.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Values Education includes fostering civic participation. Which action demonstrates this?',
           'choices'      => json_encode([
               'Volunteering in community clean-ups',
               'Avoiding community issues',
               'Moving away from one’s community',
               'Focusing only on personal interests',
           ]),
           'answer'       => 'Volunteering in community clean-ups',
           'explanation'  => 'Civic participation involves active involvement in community improvement initiatives.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal seeks to cultivate resilience in learners?',
           'choices'      => json_encode([
               'Avoiding challenges',
               'Developing the ability to cope with and learn from setbacks',
               'Giving up easily',
               'Ignoring personal growth',
           ]),
           'answer'       => 'Developing the ability to cope with and learn from setbacks',
           'explanation'  => 'Resilience is the capacity to recover and grow after difficulties.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Promoting respect for human rights is a goal of Values Education. Which principle aligns with this?',
           'choices'      => json_encode([
               'Tolerance and dignity for all persons',
               'Supremacy of power',
               'Exclusion of minorities',
               'Indifference to others',
           ]),
           'answer'       => 'Tolerance and dignity for all persons',
           'explanation'  => 'Human rights education fosters attitudes of respect and equality for everyone.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Values Education aims to support holistic development. This includes nurturing:',
           'choices'      => json_encode([
               'Only intellectual skills',
               'Physical, emotional, social, and spiritual dimensions',
               'Solely academic achievement',
               'Exclusive focus on technology skills',
           ]),
           'answer'       => 'Physical, emotional, social, and spiritual dimensions',
           'explanation'  => 'Holistic development addresses all aspects of a person’s well-being.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal of Values Education encourages lifelong moral learning?',
           'choices'      => json_encode([
               'Ceasing moral reflection after graduation',
               'Commitment to continuous values refinement through life',
               'Ignoring moral challenges',
               'Rigid adherence to outdated norms',
           ]),
           'answer'       => 'Commitment to continuous values refinement through life',
           'explanation'  => 'Lifelong moral learning involves ongoing self-evaluation and values growth.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'A behavioral objective in Values Education is for students to:',
           'choices'      => json_encode([
               'Recite definitions only',
               'Demonstrate honesty in daily actions',
               'Memorize philosophical terms',
               'Focus solely on academic tests',
           ]),
           'answer'       => 'Demonstrate honesty in daily actions',
           'explanation'  => 'Behavioral objectives specify observable actions like honesty in behavior.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal highlights integrating values into decision-making processes?',
           'choices'      => json_encode([
               'Separating values from choices',
               'Applying ethical criteria when making decisions',
               'Making decisions arbitrarily',
               'Ignoring moral implications',
           ]),
           'answer'       => 'Applying ethical criteria when making decisions',
           'explanation'  => 'Values Education trains learners to use values as a compass in choices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal of Values Education addresses promoting peace and conflict resolution?',
           'choices'      => json_encode([
               'Encouraging violence',
               'Fostering peace-making and reconciliation skills',
               'Instilling fear',
               'Promoting aggression',
           ]),
           'answer'       => 'Fostering peace-making and reconciliation skills',
           'explanation'  => 'Peace education is a component to equip learners to resolve conflicts nonviolently.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal encourages students to respect cultural diversity?',
           'choices'      => json_encode([
               'Cultural assimilation only',
               'Tolerance and appreciation of diverse traditions',
               'Rejection of all cultures except one’s own',
               'Uniformity in cultural expression',
           ]),
           'answer'       => 'Tolerance and appreciation of diverse traditions',
           'explanation'  => 'Values Education promotes respect for cultural pluralism and diversity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 3 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 3,
           'question'     => 'Which goal of Values Education is essential in an IT-driven society?',
           'choices'      => json_encode([
               'Uncritical acceptance of online information',
               'Digital ethics and responsible use of technology',
               'Ignoring digital footprint',
               'Prioritizing entertainment over ethics',
           ]),
           'answer'       => 'Digital ethics and responsible use of technology',
           'explanation'  => 'In a digital age, teaching responsible and ethical technology use is vital.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart1Seeder extends Seeder
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

        // Part 1 – Question 1
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which philosophical theory holds that moral principles are based on objective, universal truths independent of human opinion?',
            'choices'      => json_encode([
                'Moral relativism',
                'Moral realism',
                'Subjectivism',
                'Nihilism',
            ]),
            'answer'       => 'Moral realism',
            'explanation'  => 'Moral realism asserts that moral facts exist objectively and are discoverable, not mere social constructs.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 2
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Who is considered the father of virtue ethics, advocating the golden mean?',
            'choices'      => json_encode([
                'Immanuel Kant',
                'Aristotle',
                'John Stuart Mill',
                'Thomas Hobbes',
            ]),
            'answer'       => 'Aristotle',
            'explanation'  => 'Aristotle proposed virtue ethics and the golden mean as the desirable middle between two extremes.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 3
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which natural law philosopher emphasized that human laws must conform to moral order discerned by reason?',
            'choices'      => json_encode([
                'Thomas Aquinas',
                'David Hume',
                'John Locke',
                'Jean-Jacques Rousseau',
            ]),
            'answer'       => 'Thomas Aquinas',
            'explanation'  => 'Aquinas taught that natural law is part of eternal law accessible through human reason and guides moral behavior.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 4
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which ethical theory judges the morality of an action by its consequences, aiming for the greatest good?',
            'choices'      => json_encode([
                'Deontology',
                'Virtue ethics',
                'Utilitarianism',
                'Divine command theory',
            ]),
            'answer'       => 'Utilitarianism',
            'explanation'  => 'Utilitarianism, associated with Bentham and Mill, holds that actions are right if they maximize overall happiness.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 5
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Deontological ethics focus primarily on which aspect of moral action?',
            'choices'      => json_encode([
                'Consequences',
                'Character traits',
                'Duty and rules',
                'Social contract',
            ]),
            'answer'       => 'Duty and rules',
            'explanation'  => 'Deontology, notably Kantian ethics, emphasizes adherence to moral duties and universal principles regardless of outcomes.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 6
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which concept refers to the habitual practice of morally good actions leading to a virtuous character?',
            'choices'      => json_encode([
                'Value clarification',
                'Habitualization',
                'Moral recovery',
                'Social conditioning',
            ]),
            'answer'       => 'Habitualization',
            'explanation'  => 'Habitualization is the process whereby repeated moral actions form stable virtues in an individual.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 7
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Who proposed the theory of cognitive development stages applied to moral judgment?',
            'choices'      => json_encode([
                'Lawrence Kohlberg',
                'Jean Piaget',
                'Carol Gilligan',
                'John Dewey',
            ]),
            'answer'       => 'Lawrence Kohlberg',
            'explanation'  => 'Kohlberg outlined stages of moral development based on how individuals reason about ethical dilemmas.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 8
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which value refers to the inner sense of what is right and wrong guiding personal conduct?',
            'choices'      => json_encode([
                'Culture',
                'Conscience',
                'Custom',
                'Convention',
            ]),
            'answer'       => 'Conscience',
            'explanation'  => 'Conscience is the faculty that makes moral judgments and motivates adherence to moral norms.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 9
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which term describes values that serve as end goals of existence, such as truth, beauty, and justice?',
            'choices'      => json_encode([
                'Instrumental values',
                'Terminal values',
                'Cultural values',
                'Personal values',
            ]),
            'answer'       => 'Terminal values',
            'explanation'  => 'Terminal values are ultimate desired states or goals, as defined in social psychology.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 10
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which scholar distinguished between values as desirable goals and virtues as habitual dispositions to achieve them?',
            'choices'      => json_encode([
                'Milton Rokeach',
                'Max Scheler',
                'St. Thomas Aquinas',
                'Alasdair MacIntyre',
            ]),
            'answer'       => 'Max Scheler',
            'explanation'  => 'Scheler differentiated values (essences) from virtues (character traits realized through action).',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 11
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which term refers to the capacity to make free moral choices and be responsible for them?',
            'choices'      => json_encode([
                'Autonomy',
                'Liberty',
                'Independence',
                'Sovereignty',
            ]),
            'answer'       => 'Autonomy',
            'explanation'  => 'Autonomy in ethics is the ability to govern oneself according to moral laws one endorses.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 12
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which approach emphasizes critical reflection and dialogue for value clarification?',
            'choices'      => json_encode([
                'Values education',
                'Values clarification',
                'Moral recovery',
                'Service learning',
            ]),
            'answer'       => 'Values clarification',
            'explanation'  => 'Values clarification involves self-reflection to identify and affirm personal values through discussion.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 13
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which philosopher proposed the categorical imperative as a test for moral maxims?',
            'choices'      => json_encode([
                'John Stuart Mill',
                'Immanuel Kant',
                'Friedrich Nietzsche',
                'David Hume',
            ]),
            'answer'       => 'Immanuel Kant',
            'explanation'  => 'Kant’s categorical imperative demands that one act only according to maxims that could be universal laws.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 14
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which value type guides decision-making and action, such as honesty, respect, and compassion?',
            'choices'      => json_encode([
                'Terminal values',
                'Instrumental values',
                'Social values',
                'Personal values',
            ]),
            'answer'       => 'Instrumental values',
            'explanation'  => 'Instrumental values are modes of conduct or means to achieve terminal values.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 15
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which moral philosopher argued that the good life is achieving eudaimonia through virtuous activity?',
            'choices'      => json_encode([
                'Aristotle',
                'Thomas Hobbes',
                'John Rawls',
                'Jean-Paul Sartre',
            ]),
            'answer'       => 'Aristotle',
            'explanation'  => 'Aristotle held that eudaimonia (flourishing) is attained by practicing virtues habitually.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 16
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which concept involves aligning one’s actions with recognized moral duties, regardless of personal desires?',
            'choices'      => json_encode([
                'Virtue ethics',
                'Consequentialism',
                'Deontology',
                'Hedonism',
            ]),
            'answer'       => 'Deontology',
            'explanation'  => 'Deontology focuses on duty and rule-following as the basis for moral action.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 17
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which faculty integrates intellect and will to choose values and commit to them?',
            'choices'      => json_encode([
                'Conscience',
                'Character',
                'Freedom',
                'Virtue',
            ]),
            'answer'       => 'Conscience',
            'explanation'  => 'Conscience enables moral awareness, judgment, and decision-making based on values.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 18
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which term refers to the set of ideals and principles cherished by a culture or society?',
            'choices'      => json_encode([
                'Ethics',
                'Morals',
                'Culture',
                'Values system',
            ]),
            'answer'       => 'Values system',
            'explanation'  => 'A values system encompasses collective ideals influencing societal norms and behaviors.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 19
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'Which value formation stage involves evaluating options and choosing the most appropriate action?',
            'choices'      => json_encode([
                'Awareness',
                'Judgment',
                'Action',
                'Habitualization',
            ]),
            'answer'       => 'Judgment',
            'explanation'  => 'In judgment, individuals weigh values and options to decide on a moral choice.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 1 – Question 20
        $batch[] = [
            'subject_id'   => 15,
            'part'         => 1,
            'question'     => 'What distinguishes values education from mere moral instruction?',
            'choices'      => json_encode([
                'Focus on rules',
                'Encourages critical reflection and choice',
                'Emphasizes punitive measures',
                'Is purely theoretical',
            ]),
            'answer'       => 'Encourages critical reflection and choice',
            'explanation'  => 'Values education fosters personal reflection, informed choice, and commitment rather than rote rule-following.',
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

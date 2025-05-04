<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart9Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts Here...
$batch = [];

// 161
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Bird is to feather as fish is to ____.',
    'choices'    => json_encode(['Gill', 'Fin', 'Scale', 'Tail']),
    'answer'     => 'Scale',
    'explanation'=> 'Just as feathers cover birds, scales cover fish.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 162
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Which word is a palindrome?',
    'choices'    => json_encode(['Radar', 'Radio', 'Meter', 'Rotor']),
    'answer'     => 'Rotor',
    'explanation'=> '“Rotor” reads the same backward and forward.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 163
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Choose the correct analogy: Brave is to cowardly as generous is to ____.',
    'choices'    => json_encode(['Selfish', 'Powerful', 'Miserly', 'Bold']),
    'answer'     => 'Miserly',
    'explanation'=> '“Miserly” is the opposite of “generous,” just as “cowardly” is the opposite of “brave.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 164
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Identify the suffix in the word “happiness.”',
    'choices'    => json_encode(['-ness', '-hap', 'hap-', 'ness-']),
    'answer'     => '-ness',
    'explanation'=> '“-ness” turns an adjective into a noun indicating a state.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 165
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Which of the following is a homograph?',
    'choices'    => json_encode(['Lead (to guide) and lead (metal)', 'Read (present) and red (color)', 'Bass (fish) and bass (voice)', 'Tear (rip) and tier (level)']),
    'answer'     => 'Lead (to guide) and lead (metal)',
    'explanation'=> 'Homographs share spelling but differ in meaning and sometimes pronunciation.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 166
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Pick the sentence with correct subject-verb agreement for a collective noun.',
    'choices'    => json_encode(['The team is winning.', 'The team are winning.', 'The teams is winning.', 'The team scores were high.']),
    'answer'     => 'The team is winning.',
    'explanation'=> 'Collective noun “team” takes singular verb “is.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 167
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Select the sentence in active voice.',
    'choices'    => json_encode(['The cake was baked by Mary.', 'Mary baked the cake.', 'The cake is being baked by Mary.', 'The cake has been baked by Mary.']),
    'answer'     => 'Mary baked the cake.',
    'explanation'=> 'Active voice has the subject performing the action.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 168
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Which sentence uses a semicolon correctly?',
    'choices'    => json_encode(['I have a big test tomorrow; I can’t go out tonight.', 'I have a big test tomorrow, I can’t go out tonight.', 'I have a big test tomorrow: I can’t go out tonight.', 'I have a big test tomorrow. I can’t go out tonight.']),
    'answer'     => 'I have a big test tomorrow; I can’t go out tonight.',
    'explanation'=> 'A semicolon joins related independent clauses without a conjunction.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 169
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Identify the error in this sentence: “Running quickly, the finish line was crossed.”',
    'choices'    => json_encode(['Dangling modifier', 'Subject-verb disagreement', 'Misplaced comma', 'Incorrect verb tense']),
    'answer'     => 'Dangling modifier',
    'explanation'=> 'The modifier “Running quickly” lacks a clear subject.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 170
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Complete the analogy: Stone is to rock as puddle is to ____.',
    'choices'    => json_encode(['Water', 'Mud', 'Lake', 'Rain']),
    'answer'     => 'Water',
    'explanation'=> 'A puddle is a small collection of water, just as a stone is a small rock.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 171
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'What does the word “candid” mean? ',
    'choices'    => json_encode(['Honest', 'Careful', 'Hidden', 'Angry']),
    'answer'     => 'Honest',
    'explanation'=> '“Candid” means frank and sincere.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 172
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Which prefix means “among” or “between”?',
    'choices'    => json_encode(['Inter-', 'Intra-', 'Trans-', 'Sub-']),
    'answer'     => 'Inter-',
    'explanation'=> '“Inter-” indicates between or among, as in “international.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 173
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Select the correctly punctuated sentence.',
    'choices'    => json_encode([
        'He said, “Meet me at noon.”',
        'He said “Meet me at noon”.',
        'He said, “Meet me at noon”.',
        'He said “Meet me at noon.”'
    ]),
    'answer'     => 'He said, “Meet me at noon.”',
    'explanation'=> 'Commas and periods are placed inside quotation marks in American English.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 174
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Identify the meaning of the idiom “hit the sack.”',
    'choices'    => json_encode(['Go to sleep', 'Begin working', 'Start eating', 'Take a break']),
    'answer'     => 'Go to sleep',
    'explanation'=> '“Hit the sack” means to go to bed or sleep.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 175
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Which of the following words is an antonym of “scarcity”?',
    'choices'    => json_encode(['Abundance', 'Shortage', 'Rarity', 'Lack']),
    'answer'     => 'Abundance',
    'explanation'=> '“Abundance” is the opposite of “scarcity.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 176
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Complete the sentence with the correct relative pronoun: “The book ____ I borrowed was fascinating.”',
    'choices'    => json_encode(['That', 'Who', 'Whom', 'Which']),
    'answer'     => 'That',
    'explanation'=> '“That” is used for essential clauses referring to things.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 177
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Identify the adverb in this sentence: “She whispered softly in the ear.”',
    'choices'    => json_encode(['Softly', 'Whispered', 'Ear', 'She']),
    'answer'     => 'Softly',
    'explanation'=> '“Softly” modifies the verb “whispered,” indicating how.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 178
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Choose the word that best completes the sentence: “His argument was ___ by the evidence.”',
    'choices'    => json_encode(['Supported', 'Refuted', 'Ignored', 'Confused']),
    'answer'     => 'Supported',
    'explanation'=> '“Supported” means backed up or confirmed by evidence.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 179
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Which of the following is a correct use of a colon?',
    'choices'    => json_encode([
        'You need: eggs, milk, and flour.',
        'You need; eggs, milk, and flour.',
        'You need, eggs, milk, and flour.',
        'You need eggs: milk and flour.'
    ]),
    'answer'     => 'You need: eggs, milk, and flour.',
    'explanation'=> 'A colon introduces a list following an independent clause.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 180
$batch[] = [
    'subject_id' => 4,
    'part'       => 9,
    'question'   => 'Select the correct form of the verb: “Neither of the answers ___ correct.”',
    'choices'    => json_encode(['is', 'are', 'were', 'be']),
    'answer'     => 'is',
    'explanation'=> '“Neither” is singular and takes “is.”',
    'created_at' => $now,
    'updated_at' => $now,
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

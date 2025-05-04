<?php

namespace Database\Seeders\CSE\VerbalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VerbalAbilityPart4Seeder extends Seeder
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

// 61
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'The audience was very ______ by the speaker’s eloquence.',
    'choices'    => json_encode(['Moved', 'Tired', 'Distracted', 'Surprised']),
    'answer'     => 'Moved',
    'explanation'=> '“Moved” conveys the strong emotional impact of the speaker’s eloquence.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 62
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which sentence uses the correct comparative form?',
    'choices'    => json_encode([
        'She is more taller than her sister.',
        'She is taller than her sister.',
        'She is tall than her sister.',
        'She tall than her sister.'
    ]),
    'answer'     => 'She is taller than her sister.',
    'explanation'=> 'The proper comparative of “tall” is “taller.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 63
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'What does the root “bio” mean?',
    'choices'    => json_encode(['Life', 'Light', 'Sound', 'Heat']),
    'answer'     => 'Life',
    'explanation'=> '“Bio” is a Greek root meaning “life.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 64
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'What is the antonym of “scarce”?',
    'choices'    => json_encode(['Abundant', 'Rare', 'Empty', 'Limited']),
    'answer'     => 'Abundant',
    'explanation'=> '“Abundant” is the opposite of “scarce.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 65
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which word is a homophone of “air”?',
    'choices'    => json_encode(['Heir', 'Hair', 'Are', 'Err']),
    'answer'     => 'Heir',
    'explanation'=> '“Heir” (one who inherits) sounds like “air.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 66
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which sentence is written in passive voice?',
    'choices'    => json_encode([
        'The cake was eaten by the child.',
        'The child ate the cake.',
        'The child is eating the cake.',
        'The cake eats the child.'
    ]),
    'answer'     => 'The cake was eaten by the child.',
    'explanation'=> 'Passive voice places the object before the verb with “was eaten.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 67
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which prefix means “half”?',
    'choices'    => json_encode(['Semi-', 'Uni-', 'Bi-', 'Tri-']),
    'answer'     => 'Semi-',
    'explanation'=> '“Semi-” is a Latin prefix meaning “half.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 68
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Select the synonym of “astonished”.',
    'choices'    => json_encode(['Amazed', 'Bored', 'Angry', 'Confused']),
    'answer'     => 'Amazed',
    'explanation'=> '“Amazed” and “astonished” share similar meanings.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 69
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which sentence correctly uses a semicolon?',
    'choices'    => json_encode([
        'She likes apples; he prefers oranges.',
        'She likes apples, he prefers oranges.',
        'She likes apples: he prefers oranges.',
        'She likes apples he prefers oranges.'
    ]),
    'answer'     => 'She likes apples; he prefers oranges.',
    'explanation'=> 'A semicolon correctly separates two independent clauses without a conjunction.',
    'created_at' => $now,
    'updated_at' => $now,
];


// 70
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Identify the part of speech of the underlined word: “She quickly finished her work.”',
    'choices'    => json_encode(['Adverb', 'Noun', 'Adjective', 'Verb']),
    'answer'     => 'Adverb',
    'explanation'=> '“Quickly” modifies the verb “finished,” so it is an adverb.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 71
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Complete the idiom: “Bite the ___.”',
    'choices'    => json_encode(['Bullet', 'Button', 'Piece', 'Hand']),
    'answer'     => 'Bullet',
    'explanation'=> '“Bite the bullet” means to endure something difficult.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 72
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Choose the correct plural form of “analysis”.',
    'choices'    => json_encode(['Analyses', 'Analysises', 'Analysies', 'Analysisen']),
    'answer'     => 'Analyses',
    'explanation'=> '“Analyses” is the irregular plural of “analysis.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 73
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'What does “ubiquitous” mean? ',
    'choices'    => json_encode(['Found everywhere', 'Rare', 'Invisible', 'Damaged']),
    'answer'     => 'Found everywhere',
    'explanation'=> '“Ubiquitous” describes something that is found everywhere.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 74
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which sentence contains a dangling modifier? ',
    'choices'    => json_encode([
        'Walking down the street, the trees looked beautiful.',
        'Walking down the street, I noticed the trees looked beautiful.',
        'I noticed the trees looked beautiful walking down the street.',
        'The trees looked beautiful, and they were walking down the street.'
    ]),
    'answer'     => 'Walking down the street, I noticed the trees looked beautiful.',
    'explanation'=> 'The modifier correctly attaches to the subject “I.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 75
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which word best completes the sentence: “The experiment yielded ______ results.”',
    'choices'    => json_encode(['Conclusive', 'Inconclusive', 'Concluding', 'Conclusively']),
    'answer'     => 'Conclusive',
    'explanation'=> '“Conclusive” means decisive or convincing, fitting the context.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 76
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'What is the antonym of “flourish”?',
    'choices'    => json_encode(['Decay', 'Grow', 'Thrive', 'Bloom']),
    'answer'     => 'Decay',
    'explanation'=> '“Decay” is the opposite of “flourish.”',
    'created_at' => $now,
    'updated_at' => $now,
];

// 77
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Choose the correct possessive: “The cat licked ___ paw.”',
    'choices'    => json_encode(['its', 'it’s', 'his', 'her']),
    'answer'     => 'its',
    'explanation'=> '“Its” indicates possession; “it’s” is a contraction.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 78
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Which sentence is a simile?',
    'choices'    => json_encode([
        'He was as brave as a lion.',
        'He was a brave lion.',
        'He was brave lion-like.',
        'He was brave than a lion.'
    ]),
    'answer'     => 'He was as brave as a lion.',
    'explanation'=> 'A simile uses “as” or “like” to compare.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 79
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Pick the correct conjunction: “She wanted to go, ____ it was raining.”',
    'choices'    => json_encode(['but', 'and', 'or', 'so']),
    'answer'     => 'but',
    'explanation'=> '“But” introduces a contrast between wanting and raining.',
    'created_at' => $now,
    'updated_at' => $now,
];

// 80
$batch[] = [
    'subject_id' => 4,
    'part'       => 4,
    'question'   => 'Choose the word that completes the sentence: “His behavior was ___ to the rules.”',
    'choices'    => json_encode(['conformant', 'conforming', 'congruent', 'congruous']),
    'answer'     => 'congruent',
    'explanation'=> '“Congruent” means in agreement or harmony with the rules.',
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
         $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
     }

     // 3) Abort seeding if duplicates found or insufficient items
     if (!empty($dupes) || $batchCount < 20) {
         $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
         return;
     }

     // 4) Insert all questions if checks pass
     DB::table('questions')->insert($batch);
     $this->command->info("{$batchCount} question(s) seeded for part 4.");
 }
}

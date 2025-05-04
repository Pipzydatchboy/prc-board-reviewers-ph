<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart2Seeder extends Seeder
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
        // Part 2: Clerical Ability (Questions 21–40)

// 21
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Which name is filed first alphabetically?",
    'choices' => json_encode(['Lao, Miguel A.', 'Lao, Miguel', 'Lao, Miguel D.', 'Lao, Miguel de la']),
    'answer' => 'Lao, Miguel',
    'explanation' => "Names without a middle initial or suffix come before those with one.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 22
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Spot the error in: \"The manager recieve the report.\"",
    'choices' => json_encode(['receive', 'recieve', 'recievee', 'recive']),
    'answer' => 'receive',
    'explanation' => "The correct spelling is 'receive' (i before e except after c).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 23
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Find the next number in the series: 3, 6, 12, 24, __?",
    'choices' => json_encode(['36', '48', '40', '30']),
    'answer' => '48',
    'explanation' => "Each term doubles the previous one: 24 × 2 = 48.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 24
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "What is 20% of ₱600?",
    'choices' => json_encode(['₱120', '₱100', '₱140', '₱80']),
    'answer' => '₱120',
    'explanation' => "20% of 600 = 0.20 × 600 = ₱120.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 25
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Convert 11:30 PM to 24-hour time format.",
    'choices' => json_encode(['23:30', '11:30', '21:30', '13:30']),
    'answer' => '23:30',
    'explanation' => "11 PM is 23:00; add 30 minutes → 23:30.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 26
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "What does the abbreviation CEO stand for?",
    'choices' => json_encode(['Chief Executive Officer', 'Corporate Executive Officer', 'Chief Equity Officer', 'Chief Entry Officer']),
    'answer' => 'Chief Executive Officer',
    'explanation' => "CEO stands for Chief Executive Officer.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 27
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "In mail processing, which step comes first?",
    'choices' => json_encode(['Stamp', 'Open', 'Sort', 'Distribute']),
    'answer' => 'Stamp',
    'explanation' => "The incoming mail is first stamped before opening or sorting.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 28
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "How should numeric data (e.g., currency) be aligned in a spreadsheet?",
    'choices' => json_encode(['Right-aligned', 'Left-aligned', 'Center-aligned', 'Justified']),
    'answer' => 'Right-aligned',
    'explanation' => "Numbers and currency values are typically right-aligned for readability.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 29
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Which address format is correct for a business letter?",
    'choices' => json_encode([
        '123 Main St., Makati City, Philippines',
        '123 Main St Makati City Philippines',
        '123 Main St; Makati City; Philippines',
        '123 Main St - Makati City - Philippines'
    ]),
    'answer' => '123 Main St., Makati City, Philippines',
    'explanation' => "Commas separate street, city, and country in a standard business address.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 30
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "How are numbers filed in an alphanumeric system?",
    'choices' => json_encode(['1, 2, 10, 20', '1, 10, 2, 20', '10, 1, 2, 20', '2, 1, 10, 20']),
    'answer' => '1, 2, 10, 20',
    'explanation' => "Numbers are sorted by their numeric value in ascending order.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 31
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Which spelling is correct?",
    'choices' => json_encode(['occurrence', 'occurence', 'ocurrence', 'occurrrence']),
    'answer' => 'occurrence',
    'explanation' => "'Occurrence' has two 'c's and two 'r's.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 32
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "What is the proper order of headings in a memo?",
    'choices' => json_encode(['To, From, Date, Subject', 'From, To, Date, Subject', 'To, Date, From, Subject', 'Subject, To, From, Date']),
    'answer' => 'To, From, Date, Subject',
    'explanation' => "Standard memo headers follow: To, From, Date, then Subject.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 33
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Which punctuation mark ends an imperative sentence?",
    'choices' => json_encode(['Period', 'Question mark', 'Exclamation point', 'Comma']),
    'answer' => 'Period',
    'explanation' => "Imperative sentences typically end with a period.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 34
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "What paper size is most commonly used for official letters?",
    'choices' => json_encode(['A4', 'Letter', 'Legal', 'A3']),
    'answer' => 'A4',
    'explanation' => "A4 is the standard paper size for business correspondence in the Philippines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 35
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Identify the error: \"He don't know the answer.\"",
    'choices' => json_encode(['doesn\'t', 'don\'t', 'didn\'t', 'does']),
    'answer' => 'doesn\'t',
    'explanation' => "The correct contraction for 'he' is 'doesn't' (he does not).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 36
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Find the next letter in the pattern: Z, X, V, T, __?",
    'choices' => json_encode(['R', 'S', 'U', 'Q']),
    'answer' => 'R',
    'explanation' => "The sequence goes backwards by two letters: T → R.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 37
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Which key combination copies selected text?",
    'choices' => json_encode(['Ctrl + C', 'Ctrl + V', 'Ctrl + X', 'Ctrl + Z']),
    'answer' => 'Ctrl + C',
    'explanation' => "Ctrl + C is the standard shortcut for copy.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 38
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "If a product costs ₱450 and VAT is 12%, how much is the VAT amount?",
    'choices' => json_encode(['₱54', '₱48', '₱58', '₱60']),
    'answer' => '₱54',
    'explanation' => "VAT = 0.12 × 450 = ₱54.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 39
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "Which of the following is a valid email address format?",
    'choices' => json_encode(['john.doe@example.com', 'john.doe@.example.com', 'john.doeexample.com', 'john@doe@example.com']),
    'answer' => 'john.doe@example.com',
    'explanation' => "A valid email has one '@' and a domain name after it.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 40
$batch[] = [
    'subject_id' => 5,
    'part' => 2,
    'question' => "What is the last step in incoming mail processing?",
    'choices' => json_encode(['Distribute', 'Stamp', 'Open', 'Sort']),
    'answer' => 'Distribute',
    'explanation' => "After sorting, mail is distributed to the intended recipients.",
    'created_at' => now(),
    'updated_at' => now(),
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart7Seeder extends Seeder
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
       // Part 7: Clerical Ability (Questions 121–140)

// 121
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "What is the standard margin setting for a formal business letter?",
    'choices' => json_encode(['1 inch', '0.5 inch', '1.5 inch', '2 inches']),
    'answer' => '1 inch',
    'explanation' => "A 1-inch margin on all sides is standard for formal business letters.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 122
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Spot the error: \"All participants has been notified.\"",
    'choices' => json_encode(['have', 'has', 'had', 'having']),
    'answer' => 'have',
    'explanation' => "With plural subject 'participants,' the correct verb is 'have been notified.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 123
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Find the next number: 7, 14, 28, 56, __?",
    'choices' => json_encode(['112', '98', '84', '64']),
    'answer' => '112',
    'explanation' => "Each term doubles: 56 × 2 = 112.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 124
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "What is 18% of ₱250?",
    'choices' => json_encode(['₱45', '₱40', '₱50', '₱55']),
    'answer' => '₱45',
    'explanation' => "0.18 × 250 = ₱45.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 125
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Convert 3:20 AM to 24-hour format.",
    'choices' => json_encode(['03:20', '15:20', '13:20', '23:20']),
    'answer' => '03:20',
    'explanation' => "3:20 AM is 03:20 in 24-hour clock.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 126
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Which Excel formula returns the highest value in range A1:A10?",
    'choices' => json_encode(['=MAX(A1:A10)', '=HIGH(A1:A10)', '=TOP(A1:A10)', '=LARGEST(A1:A10)']),
    'answer' => '=MAX(A1:A10)',
    'explanation' => "The MAX() function returns the largest number in a range.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 127
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "In an email, which action sends your reply to all original recipients?",
    'choices' => json_encode(['Reply All', 'Forward', 'Reply', 'CC']),
    'answer' => 'Reply All',
    'explanation' => "'Reply All' sends the message to everyone on the original To and CC lines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 128
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "What heading follows 'Date:' in a standard memo?",
    'choices' => json_encode(['Subject:', 'To:', 'From:', 'Attachments:']),
    'answer' => 'Subject:',
    'explanation' => "Standard memo order: To, From, Date, then Subject.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 129
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "What is the default font and size in Microsoft Word 2016?",
    'choices' => json_encode(['Calibri 11', 'Times New Roman 12', 'Arial 10', 'Calibri 12']),
    'answer' => 'Calibri 11',
    'explanation' => "Microsoft Word 2016 uses Calibri font at size 11 by default.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 130
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Which address block is correctly formatted for a formal letter?",
    'choices' => json_encode([
        '123 Rizal St., Quezon City 1100',
        '123 Rizal St Quezon City, 1100',
        '123 Rizal St., 1100 Quezon City',
        '123, Rizal St., Quezon City 1100'
    ]),
    'answer' => '123 Rizal St., Quezon City 1100',
    'explanation' => "Proper format: street, city, then postal code.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 131
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Which proofreading mark indicates transpose of two letters?",
    'choices' => json_encode(['∞', '¶', '↑', '↔']),
    'answer' => '∞',
    'explanation' => "The transpose mark (∞) signals that two letters should be switched.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 132
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "What does 'EOM' mean when typed at the end of an email subject?",
    'choices' => json_encode(['End Of Message', 'End Of Mail', 'Email On Mail', 'End Of Month']),
    'answer' => 'End Of Message',
    'explanation' => "EOM indicates that the entire message is in the subject line.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 133
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Find the next letter: B, E, H, K, __?",
    'choices' => json_encode(['N', 'M', 'O', 'L']),
    'answer' => 'N',
    'explanation' => "Pattern adds 3 positions: K + 3 = N.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 134
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Which keyboard shortcut makes selected text bold?",
    'choices' => json_encode(['Ctrl + B', 'Ctrl + I', 'Ctrl + U', 'Ctrl + L']),
    'answer' => 'Ctrl + B',
    'explanation' => "Ctrl + B toggles bold formatting in most applications.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 135
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "What is the unit of storage equal to 1,024 bytes?",
    'choices' => json_encode(['Kilobyte', 'Megabyte', 'Gigabyte', 'Byte']),
    'answer' => 'Kilobyte',
    'explanation' => "A kilobyte (KB) is 1,024 bytes in computing.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 136
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Spot the error: \"Please completed the form.\"",
    'choices' => json_encode(['complete', 'completed', 'completing', 'completion']),
    'answer' => 'complete',
    'explanation' => "The verb should be 'complete the form,' not 'completed.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 137
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Which command saves and closes a Word document using the keyboard?",
    'choices' => json_encode(['Alt + F, X', 'Ctrl + Q', 'Ctrl + W', 'Alt + S']),
    'answer' => 'Alt + F, X',
    'explanation' => "In Word, Alt + F opens File menu, X selects Exit (save & close).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 138
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Which of these is NOT an email header field?",
    'choices' => json_encode(['Signature', 'To', 'From', 'Subject']),
    'answer' => 'Signature',
    'explanation' => "Signature is part of the body, not a header field.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 139
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Find the error: \"There is less people in the room.\"",
    'choices' => json_encode(['fewer', 'less', 'few', 'little']),
    'answer' => 'fewer',
    'explanation' => "Use 'fewer' for countable nouns like people.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 140
$batch[] = [
    'subject_id' => 5,
    'part' => 7,
    'question' => "Which title is appropriate for a female teacher with a Ph.D.?",
    'choices' => json_encode(['Dr.', 'Ms.', 'Mrs.', 'Prof.']),
    'answer' => 'Dr.',
    'explanation' => "Holder of a doctoral degree is addressed as 'Dr.'",
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

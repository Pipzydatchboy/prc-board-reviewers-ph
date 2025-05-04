<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart4Seeder extends Seeder
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
       // Part 4: Clerical Ability (Questions 61–80)

// 61
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which date is the earliest?",
    'choices' => json_encode([
        'January 1, 2025',
        'January 2, 2025',
        'January 10, 2025',
        'January 12, 2025'
    ]),
    'answer' => 'January 1, 2025',
    'explanation' => "January 1, 2025 comes before January 2, 10, and 12 in chronological order.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 62
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which filename is invalid in Windows?",
    'choices' => json_encode([
        'report2025.doc',
        'report_2025.doc',
        'CON.txt',
        'report-2025.doc'
    ]),
    'answer' => 'CON.txt',
    'explanation' => "CON is a reserved device name in Windows and cannot be used as a filename.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 63
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Spot the error: \"He will attends the meeting.\"",
    'choices' => json_encode([
        'attends',
        'attend',
        'will attend',
        'attending'
    ]),
    'answer' => 'attend',
    'explanation' => "The correct form is \"will attend,\" not \"will attends.\"",
    'created_at' => now(),
    'updated_at' => now(),
];

// 64
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Find the next number: 2, 4, 8, 14, 22, __?",
    'choices' => json_encode([
        '30',
        '32',
        '36',
        '28'
    ]),
    'answer' => '32',
    'explanation' => "Add even numbers increasing by 2: +2, +4, +6, +8, +10 → 22 + 10 = 32.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 65
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "What is 7.5% of ₱800?",
    'choices' => json_encode([
        '₱60',
        '₱75',
        '₱80',
        '₱65'
    ]),
    'answer' => '₱60',
    'explanation' => "0.075 × 800 = ₱60.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 66
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Convert 00:15 to 12-hour format.",
    'choices' => json_encode([
        '12:15 AM',
        '12:15 PM',
        '00:15 AM',
        '00:15 PM'
    ]),
    'answer' => '12:15 AM',
    'explanation' => "00:15 in 24-hour clock is 12:15 AM.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 67
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which shortcut UNDOES the last action?",
    'choices' => json_encode([
        'Ctrl + Z',
        'Ctrl + Y',
        'Ctrl + X',
        'Ctrl + C'
    ]),
    'answer' => 'Ctrl + Z',
    'explanation' => "Ctrl + Z is the standard keyboard shortcut for Undo.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 68
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which character makes a Windows filename invalid?",
    'choices' => json_encode([
        '<',
        '_',
        '-',
        '.'
    ]),
    'answer' => '<',
    'explanation' => "Special characters like '<' are not allowed in Windows filenames.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 69
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "In a memo, which heading comes directly after 'From:'?",
    'choices' => json_encode([
        'Date:',
        'To:',
        'Subject:',
        'Attn:'
    ]),
    'answer' => 'Date:',
    'explanation' => "Standard memo order is To, From, Date, then Subject.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 70
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which proofreading mark indicates change to uppercase?",
    'choices' => json_encode([
        'Three underlines',
        'Caret',
        'Circle',
        'Stroke'
    ]),
    'answer' => 'Three underlines',
    'explanation' => "Three underlines under a letter signal change to uppercase.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 71
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Arrange these alphanumeric entries correctly: A1, A10, A2, A11",
    'choices' => json_encode([
        'A1, A2, A10, A11',
        'A1, A10, A11, A2',
        'A10, A11, A1, A2',
        'A1, A11, A2, A10'
    ]),
    'answer' => 'A1, A2, A10, A11',
    'explanation' => "Entries are sorted by numeric value after the letter.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 72
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which email header field appears first?",
    'choices' => json_encode([
        'From:',
        'To:',
        'Subject:',
        'Date:'
    ]),
    'answer' => 'From:',
    'explanation' => "In most email clients, 'From:' appears before 'To:' and 'Subject:'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 73
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which Excel function totals a range of cells?",
    'choices' => json_encode([
        'SUM()',
        'TOTAL()',
        'ADD()',
        'CSUM()'
    ]),
    'answer' => 'SUM()',
    'explanation' => "SUM() is the standard function to add up cell values.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 74
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "In office terms, what does PTO stand for?",
    'choices' => json_encode([
        'Paid Time Off',
        'Personal Task Order',
        'Permission to Operate',
        'Print to Office'
    ]),
    'answer' => 'Paid Time Off',
    'explanation' => "PTO commonly means Paid Time Off in HR contexts.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 75
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "In email etiquette, what does BCC mean?",
    'choices' => json_encode([
        'Blind Carbon Copy',
        'Binary Copy Code',
        'Branch Copy Copy',
        'Basic Copy Copy'
    ]),
    'answer' => 'Blind Carbon Copy',
    'explanation' => "BCC allows sending a copy without revealing recipients to each other.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 76
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which proofreading mark signals deletion of text?",
    'choices' => json_encode([
        'Line through text',
        'Caret',
        'Circle',
        'Underline'
    ]),
    'answer' => 'Line through text',
    'explanation' => "A single line through text indicates it should be deleted.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 77
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which alignment is best for document titles?",
    'choices' => json_encode([
        'Center-aligned',
        'Left-aligned',
        'Right-aligned',
        'Justified'
    ]),
    'answer' => 'Center-aligned',
    'explanation' => "Titles are typically centered for emphasis.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 78
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "What is next: 100, 95, 90, 85, __?",
    'choices' => json_encode([
        '80',
        '75',
        '82',
        '70'
    ]),
    'answer' => '80',
    'explanation' => "The pattern subtracts 5 each time: 85 – 5 = 80.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 79
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "How long between 8:20 AM and 1:45 PM?",
    'choices' => json_encode([
        '5 hours 25 minutes',
        '4 hours 35 minutes',
        '6 hours 15 minutes',
        '5 hours 15 minutes'
    ]),
    'answer' => '5 hours 25 minutes',
    'explanation' => "From 8:20 AM to 1:45 PM is 5 hours and 25 minutes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 80
$batch[] = [
    'subject_id' => 5,
    'part' => 4,
    'question' => "Which is the standard closing for a formal letter?",
    'choices' => json_encode([
        'Sincerely,',
        'Best,',
        'Thanks,',
        'See you,'
    ]),
    'answer' => 'Sincerely,',
    'explanation' => "“Sincerely,” is the customary closing for formal correspondence.",
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

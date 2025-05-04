<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart8Seeder extends Seeder
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
       // Part 8: Clerical Ability (Questions 141–160)

// 141
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Given these entries—Green, Daisy C.; Green, Daisy; Green, Daisy A.; Green, Daisy Sr.—which appears first in alphabetical order?",
    'choices' => json_encode([
        'Green, Daisy',
        'Green, Daisy A.',
        'Green, Daisy C.',
        'Green, Daisy Sr.'
    ]),
    'answer' => 'Green, Daisy',
    'explanation' => "Entries without a middle initial or suffix come before those with one.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 142
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "What does the abbreviation 'TBD' stand for in office communication?",
    'choices' => json_encode([
        'To Be Determined',
        'To Be Discussed',
        'Technical Business Document',
        'Temporary Business Date'
    ]),
    'answer' => 'To Be Determined',
    'explanation' => "'TBD' is shorthand for 'To Be Determined.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 143
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Spot the typo: \"All files have been uploaded succesfully.\"",
    'choices' => json_encode([
        'successfully',
        'succesfully',
        'succesfully',
        'succesfully'
    ]),
    'answer' => 'successfully',
    'explanation' => "The correct spelling is 'successfully' with two 'l's.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 144
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "What is the next number in the series: 5, 10, 16, 23, __?",
    'choices' => json_encode([
        '31',
        '30',
        '32',
        '29'
    ]),
    'answer' => '31',
    'explanation' => "Differences increase by 1: +5, +6, +7, +8 → 23 + 8 = 31.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 145
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Convert 00:00 hours (24-hour clock) to 12-hour format.",
    'choices' => json_encode([
        '12:00 AM',
        '12:00 PM',
        '00:00 AM',
        '00:00 PM'
    ]),
    'answer' => '12:00 AM',
    'explanation' => "Midnight (00:00) is 12:00 AM in 12-hour format.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 146
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which salutation is appropriate when the recipient’s name is unknown?",
    'choices' => json_encode([
        'To Whom It May Concern,',
        'Dear Sir/Madam,',
        'Hello,',
        'Hi there,'
    ]),
    'answer' => 'To Whom It May Concern,',
    'explanation' => "Use 'To Whom It May Concern,' when you don’t know the recipient’s name.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 147
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "What is the standard page orientation for a business letter?",
    'choices' => json_encode([
        'Portrait',
        'Landscape',
        'Legal landscape',
        'Legal portrait'
    ]),
    'answer' => 'Portrait',
    'explanation' => "Business letters are typically formatted in portrait orientation.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 148
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which keyboard shortcut inserts the current date in Excel?",
    'choices' => json_encode([
        'Ctrl + ;',
        'Ctrl + ,',
        'Ctrl + Shift + D',
        'Alt + D'
    ]),
    'answer' => 'Ctrl + ;',
    'explanation' => "In Excel, Ctrl + ; inserts today’s date into a cell.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 149
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "How should negative numbers typically be displayed in financial reports?",
    'choices' => json_encode([
        'In parentheses',
        'With a minus sign',
        'In red font',
        'All of the above'
    ]),
    'answer' => 'In parentheses',
    'explanation' => "Accounting convention often uses parentheses to denote negatives.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 150
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which file extension indicates a RAR archive?",
    'choices' => json_encode([
        '.rar',
        '.zip',
        '.tar',
        '.7z'
    ]),
    'answer' => '.rar',
    'explanation' => "RAR files use the .rar extension.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 151
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "If a total of ₱336 includes 12% VAT, what is the price before VAT?",
    'choices' => json_encode([
        '₱300.00',
        '₱320.00',
        '₱330.00',
        '₱298.00'
    ]),
    'answer' => '₱300.00',
    'explanation' => "Price before VAT = 336 ÷ 1.12 = ₱300.00.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 152
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which heading in a memo is optional?",
    'choices' => json_encode([
        'Attachments:',
        'To:',
        'From:',
        'Date:'
    ]),
    'answer' => 'Attachments:',
    'explanation' => "'Attachments:' is used only if there are enclosures to include.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 153
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which key moves the cursor down one page in a document?",
    'choices' => json_encode([
        'Page Down',
        'Page Up',
        'End',
        'Home'
    ]),
    'answer' => 'Page Down',
    'explanation' => "Page Down scrolls down by one screen/page.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 154
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which URL below indicates a secure website?",
    'choices' => json_encode([
        'https://secure.example.com',
        'http://secure.example.com',
        'ftp://secure.example.com',
        'mailto:secure@example.com'
    ]),
    'answer' => 'https://secure.example.com',
    'explanation' => "HTTPS indicates a secure (encrypted) connection.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 155
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "In Excel, which reference selects all cells in row 3?",
    'choices' => json_encode([
        '3:3',
        'A3:D3',
        '3:A',
        'Row3'
    ]),
    'answer' => '3:3',
    'explanation' => "The '3:3' notation refers to the entire third row.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 156
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which shortcut opens a new document in most applications?",
    'choices' => json_encode([
        'Ctrl + N',
        'Ctrl + O',
        'Ctrl + D',
        'Ctrl + Shift + N'
    ]),
    'answer' => 'Ctrl + N',
    'explanation' => "Ctrl + N is the standard shortcut for creating a new document.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 157
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Where is the date line placed in a standard business letter?",
    'choices' => json_encode([
        'Above the recipient address',
        'Below the closing',
        'Above the signature',
        'At the bottom of the page'
    ]),
    'answer' => 'Above the recipient address',
    'explanation' => "The date appears at the top, before the inside address.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 158
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Find the missing letter in the series: C, E, H, L, Q, __?",
    'choices' => json_encode([
        'S',
        'W',
        'U',
        'T'
    ]),
    'answer' => 'W',
    'explanation' => "Differences increase by 2,3,4,5,6 → Q + 6 = W.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 159
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which symbol is commonly used to mark a mandatory form field?",
    'choices' => json_encode([
        '*',
        '#',
        '~',
        '^'
    ]),
    'answer' => '*',
    'explanation' => "An asterisk (*) indicates a required field on forms.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 160
$batch[] = [
    'subject_id' => 5,
    'part' => 8,
    'question' => "Which section of a report typically follows the Conclusion?",
    'choices' => json_encode([
        'References',
        'Abstract',
        'Introduction',
        'Table of Contents'
    ]),
    'answer' => 'References',
    'explanation' => "After the conclusion, a report usually lists its references or bibliography.",
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart3Seeder extends Seeder
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
       // Part 3: Clerical Ability (Questions 41–60)

// 41
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which name comes first in alphabetical filing?",
    'choices' => json_encode(['Cruz, Ana Maria', 'Cruz, Ana M.', 'Cruz, Ana', 'Cruz, Ana B.']),
    'answer' => 'Cruz, Ana',
    'explanation' => "Names without middle initial or name are filed before those with one.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 42
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Spot the error in: \"Its a fine day.\"",
    'choices' => json_encode(['It is', 'Its', 'It\'s', 'I\'ts']),
    'answer' => 'It\'s',
    'explanation' => "The contraction for 'it is' is spelled 'It’s' with an apostrophe.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 43
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "What letter comes next in the pattern: A, D, G, J, __?",
    'choices' => json_encode(['L', 'M', 'K', 'N']),
    'answer' => 'M',
    'explanation' => "Letters increase by 3 positions: J → M.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 44
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "What is 12.5% of ₱400?",
    'choices' => json_encode(['₱50', '₱40', '₱45', '₱55']),
    'answer' => '₱50',
    'explanation' => "12.5% (1/8) of 400 is 400 ÷ 8 = 50.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 45
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Convert 7:45 AM to 24-hour time format.",
    'choices' => json_encode(['07:45', '19:45', '17:45', '07:15']),
    'answer' => '07:45',
    'explanation' => "7:45 AM in 24-hour clock is 07:45.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 46
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which of the following is a valid email format?",
    'choices' => json_encode(['name@domain.com', 'name@domain@com', 'name.domain.com', '@domain.com']),
    'answer' => 'name@domain.com',
    'explanation' => "A valid email has one '@' symbol separating user and domain.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 47
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which of the following filenames is invalid in Windows?",
    'choices' => json_encode(['report_final.docx', 'report:final.docx', 'report-final.docx', 'report_final1.docx']),
    'answer' => 'report:final.docx',
    'explanation' => "Windows filenames cannot contain the ':' character.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 48
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "In office abbreviation, what does EOD mean?",
    'choices' => json_encode(['End Of Day', 'Each On Date', 'Entry Of Document', 'End Of Document']),
    'answer' => 'End Of Day',
    'explanation' => "EOD stands for End Of Day, commonly used for deadlines.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 49
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which keyboard shortcut saves the current document?",
    'choices' => json_encode(['Ctrl + S', 'Ctrl + P', 'Ctrl + Z', 'Ctrl + Q']),
    'answer' => 'Ctrl + S',
    'explanation' => "Ctrl + S is the common shortcut for saving files.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 50
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "What is the next number in the pattern: 2, 5, 10, 17, __?",
    'choices' => json_encode(['24', '26', '25', '27']),
    'answer' => '26',
    'explanation' => "Pattern adds odd numbers increasing by 2: +3, +5, +7, +9 (17 + 9 = 26).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 51
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which proofreading mark indicates a new paragraph?",
    'choices' => json_encode(['¶', '^', '~', '•']),
    'answer' => '¶',
    'explanation' => "The pilcrow (¶) marks the start of a new paragraph.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 52
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which of the following is NOT a standard proofreading mark?",
    'choices' => json_encode(['^', '¶', '%', '~']),
    'answer' => '%',
    'explanation' => "The percent sign (%) is not used as a proofreading mark.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 53
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "What is the correct order of address lines on an envelope?",
    'choices' => json_encode([
        'Name, Street, City, Zip Code',
        'Street, Name, City, Zip Code',
        'Name, City, Street, Zip Code',
        'Name, Street, Zip Code, City'
    ]),
    'answer' => 'Name, Street, City, Zip Code',
    'explanation' => "Envelope addresses list recipient name, street, then city and zip code in order.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 54
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "In a memo, what does the abbreviation 'Enc.' stand for?",
    'choices' => json_encode(['Enclosure', 'Encoded', 'Enclosed Copy', 'Enquire']),
    'answer' => 'Enclosure',
    'explanation' => "'Enc.' indicates that there is an enclosure attached to the memo.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 55
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which is the correct cell reference for column B, row 10 in a spreadsheet?",
    'choices' => json_encode(['B10', '10B', 'R10C2', 'C2R10']),
    'answer' => 'B10',
    'explanation' => "Spreadsheet cell references list column letter then row number, e.g., B10.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 56
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "What is the sum of 125, 250, and 375?",
    'choices' => json_encode(['750', '650', '700', '800']),
    'answer' => '750',
    'explanation' => "125 + 250 + 375 = 750.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 57
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which word correctly refers to the head of a school?",
    'choices' => json_encode(['Principal', 'Principle', 'Principel', 'Principlle']),
    'answer' => 'Principal',
    'explanation' => "'Principal' refers to the head of a school; 'principle' means a fundamental truth.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 58
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "Which of the following is a valid web URL?",
    'choices' => json_encode([
        'https://www.example.com/page.html',
        'htp://example.com',
        'www.example.com/page.html',
        'https//example.com'
    ]),
    'answer' => 'https://www.example.com/page.html',
    'explanation' => "A valid URL includes 'http://' or 'https://', followed by domain name.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 59
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "What is the missing number in the series: 102, 99, 96, 93, __?",
    'choices' => json_encode(['90', '91', '89', '88']),
    'answer' => '90',
    'explanation' => "The series decreases by 3 each time: 93 - 3 = 90.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 60
$batch[] = [
    'subject_id' => 5,
    'part' => 3,
    'question' => "In email or letters, what does 'CC' stand for?",
    'choices' => json_encode(['Carbon Copy', 'Courtesy Copy', 'Copying Carbone', 'Confirmed Copy']),
    'answer' => 'Carbon Copy',
    'explanation' => "'CC' stands for Carbon Copy, indicating additional recipients.",
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

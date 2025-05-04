<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart10Seeder extends Seeder
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
       // Part 10: Clerical Ability (Questions 181–200)

// 181
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What is the next number in the series: 10, 8, 6, 4, __?",
    'choices' => json_encode(['2', '0', '1', '3']),
    'answer' => '2',
    'explanation' => "The series decreases by 2 each time: 4 – 2 = 2.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 182
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What is 15% of ₱240?",
    'choices' => json_encode(['₱36', '₱30', '₱34', '₱38']),
    'answer' => '₱36',
    'explanation' => "0.15 × 240 = 36.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 183
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Convert 0.75 hours to minutes.",
    'choices' => json_encode(['45 minutes', '60 minutes', '30 minutes', '75 minutes']),
    'answer' => '45 minutes',
    'explanation' => "0.75 × 60 = 45 minutes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 184
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What does the abbreviation 'NDA' stand for?",
    'choices' => json_encode(['Non-Disclosure Agreement', 'National Data Archive', 'New Document Attached', 'Notarized Document Acknowledged']),
    'answer' => 'Non-Disclosure Agreement',
    'explanation' => "NDA is shorthand for Non-Disclosure Agreement.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 185
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which symbol indicates multiplication in a spreadsheet formula?",
    'choices' => json_encode(['*', '×', '·', 'x']),
    'answer' => '*',
    'explanation' => "The asterisk (*) is used for multiplication in spreadsheet formulas.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 186
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which key refreshes the current webpage in most browsers?",
    'choices' => json_encode(['F5', 'F1', 'F3', 'F11']),
    'answer' => 'F5',
    'explanation' => "Pressing F5 reloads or refreshes a webpage in common web browsers.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 187
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which keyboard shortcut locks a Windows computer immediately?",
    'choices' => json_encode(['Windows + L', 'Ctrl + L', 'Alt + L', 'Shift + L']),
    'answer' => 'Windows + L',
    'explanation' => "Pressing the Windows key + L locks the PC on Windows systems.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 188
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which chart type displays values as segments of a circle?",
    'choices' => json_encode(['Pie chart', 'Bar chart', 'Line chart', 'Scatter plot']),
    'answer' => 'Pie chart',
    'explanation' => "A pie chart shows each category’s proportion as a slice of a circle.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 189
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which file extension is used for plain text files?",
    'choices' => json_encode(['.txt', '.docx', '.xlsx', '.pdf']),
    'answer' => '.txt',
    'explanation' => "The .txt extension denotes a plain text file.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 190
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What does CSV stand for?",
    'choices' => json_encode(['Comma-Separated Values', 'Character-Separated Values', 'Comma-Synced Variables', 'Column-Separated Variables']),
    'answer' => 'Comma-Separated Values',
    'explanation' => "CSV files use commas to separate individual values.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 191
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which key moves the cursor to the beginning of a document?",
    'choices' => json_encode(['Ctrl + Home', 'Ctrl + End', 'Alt + Home', 'Alt + End']),
    'answer' => 'Ctrl + Home',
    'explanation' => "Ctrl + Home jumps to the start of the document in most editors.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 192
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which shortcut copies formatting in Microsoft Word?",
    'choices' => json_encode(['Ctrl + Shift + C', 'Ctrl + Alt + C', 'Ctrl + C', 'Ctrl + F']),
    'answer' => 'Ctrl + Shift + C',
    'explanation' => "Ctrl + Shift + C copies formatting with the Format Painter in Word.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 193
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "In email etiquette, what does 'FW' indicate?",
    'choices' => json_encode(['Forward', 'File Write', 'Follow-Up', 'First Write']),
    'answer' => 'Forward',
    'explanation' => "‘FW’ in a subject line signals that the email is being forwarded.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 194
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which of the following dates is in ISO format?",
    'choices' => json_encode(['2025-12-31', '31/12/2025', '12/31/2025', '31-12-2025']),
    'answer' => '2025-12-31',
    'explanation' => "ISO 8601 date format uses YYYY-MM-DD.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 195
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What is the default view when you open a new Excel workbook?",
    'choices' => json_encode(['Normal view', 'Page Layout', 'Page Break', 'Full Screen']),
    'answer' => 'Normal view',
    'explanation' => "Excel opens in Normal view by default.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 196
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What is the default line spacing in Microsoft Word 2016?",
    'choices' => json_encode(['1.15', '1.0', '1.5', '2.0']),
    'answer' => '1.15',
    'explanation' => "Word 2016 uses 1.15 line spacing by default.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 197
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which symbol is used to mark a second footnote after an asterisk?",
    'choices' => json_encode(['†', '‡', '§', '¶']),
    'answer' => '†',
    'explanation' => "The dagger (†) often marks the second footnote entry.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 198
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "Which Excel function returns the current date?",
    'choices' => json_encode(['TODAY()', 'NOW()', 'DATE()', 'CURRENT()']),
    'answer' => 'TODAY()',
    'explanation' => "TODAY() inserts the current date without time.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 199
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What is the next prime number after 19?",
    'choices' => json_encode(['23', '21', '22', '25']),
    'answer' => '23',
    'explanation' => "The primes after 19 are 23 (21 and 22 are not prime).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 200
$batch[] = [
    'subject_id' => 5,
    'part' => 10,
    'question' => "What is the result of 7 × (5 + 2)?",
    'choices' => json_encode(['49', '54', '35', '21']),
    'answer' => '49',
    'explanation' => "First calculate inside parentheses: 5 + 2 = 7; then 7 × 7 = 49.",
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

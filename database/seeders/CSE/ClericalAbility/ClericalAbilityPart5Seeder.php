<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart5Seeder extends Seeder
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
       // Part 5: Clerical Ability (Questions 81–100)

// 81
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Find the next number in the series: 3, 9, 27, 81, __?",
    'choices' => json_encode(['162', '243', '324', '108']),
    'answer' => '243',
    'explanation' => "The sequence multiplies by 3 each time: 81 × 3 = 243.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 82
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "In alphabetical filing, which name is filed first?",
    'choices' => json_encode([
        'Santos, Jose Jr.',
        'Santos, Jose',
        'Santos, Jose Sr.',
        'Santos, Jose A.'
    ]),
    'answer' => 'Santos, Jose',
    'explanation' => "Names without suffix or middle initial come before those with one.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 83
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Spot the error: \"Please advice me on this matter.\"",
    'choices' => json_encode(['advise', 'advice', 'adviced', 'advised']),
    'answer' => 'advise',
    'explanation' => "The verb form is 'advise'; 'advice' is a noun.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 84
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "What does 'PFA' mean in an email?",
    'choices' => json_encode([
        'Please Find Attached',
        'Please Find Attachment',
        'Provide Further Assistance',
        'Proofread For Accuracy'
    ]),
    'answer' => 'Please Find Attached',
    'explanation' => "'PFA' is shorthand for 'Please Find Attached.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 85
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which keyboard shortcut pastes copied text?",
    'choices' => json_encode(['Ctrl + V', 'Ctrl + C', 'Ctrl + X', 'Ctrl + P']),
    'answer' => 'Ctrl + V',
    'explanation' => "Ctrl + V is the standard shortcut for Paste.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 86
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which of the following is the ISO date format?",
    'choices' => json_encode([
        '2025-04-29',
        '29/04/2025',
        '04-29-2025',
        '29-04-2025'
    ]),
    'answer' => '2025-04-29',
    'explanation' => "ISO uses YYYY-MM-DD format.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 87
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which Excel formula calculates the average of B1 to B5?",
    'choices' => json_encode([
        '=AVERAGE(B1:B5)',
        '=AVG(B1,B5)',
        '=MEAN(B1:B5)',
        '=SUM(B1:B5)/5'
    ]),
    'answer' => '=AVERAGE(B1:B5)',
    'explanation' => "AVERAGE() is the built-in function for mean.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 88
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "What is the price after 10% discount on ₱500?",
    'choices' => json_encode(['₱450', '₱400', '₱475', '₱425']),
    'answer' => '₱450',
    'explanation' => "10% of 500 = 50; 500 – 50 = 450.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 89
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "On a form, what does 'N/A' mean?",
    'choices' => json_encode([
        'Not Applicable',
        'No Answer',
        'Not Available',
        'New Applicant'
    ]),
    'answer' => 'Not Applicable',
    'explanation' => "'N/A' indicates the field does not apply.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 90
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which is a reserved filename in Windows?",
    'choices' => json_encode(['NUL', 'NULL', 'NONE', 'NA']),
    'answer' => 'NUL',
    'explanation' => "NUL is a reserved device name and cannot be used as a file.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 91
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which file extension is used for Excel workbooks?",
    'choices' => json_encode(['.xlsx', '.docx', '.pptx', '.pdf']),
    'answer' => '.xlsx',
    'explanation' => ".xlsx is the standard extension for Excel files.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 92
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which city appears first alphabetically?",
    'choices' => json_encode([
        'Cebu',
        'Davao',
        'Manila',
        'Baguio'
    ]),
    'answer' => 'Baguio',
    'explanation' => "Alphabetical order: Baguio → Cebu → Davao → Manila.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 93
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which symbol is used for a footnote in documents?",
    'choices' => json_encode(['*', '#', '†', '§']),
    'answer' => '*',
    'explanation' => "An asterisk (*) commonly marks footnotes.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 94
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "In a memo header, what does 'Attn.' mean?",
    'choices' => json_encode([
        'Attention',
        'Attached',
        'Attended',
        'Attendence'
    ]),
    'answer' => 'Attention',
    'explanation' => "'Attn.' directs the memo to someone's attention.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 95
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Spot the error: \"Their going to the meeting.\"",
    'choices' => json_encode(['They\'re', 'Their', 'There', 'Theirs']),
    'answer' => 'They\'re',
    'explanation' => "'They're' is the contraction for 'they are.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 96
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "In an email address, what separates the local part from the domain?",
    'choices' => json_encode(['@', '.', '/', ':']),
    'answer' => '@',
    'explanation' => "The '@' symbol separates user name and domain.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 97
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which file extension indicates a PDF document?",
    'choices' => json_encode(['.pdf', '.doc', '.txt', '.xls']),
    'answer' => '.pdf',
    'explanation' => ".pdf is the extension for Portable Document Format.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 98
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "What is the standard alignment for body text in reports?",
    'choices' => json_encode([
        'Justified',
        'Left-aligned',
        'Center-aligned',
        'Right-aligned'
    ]),
    'answer' => 'Justified',
    'explanation' => "Justified alignment gives a clean look with straight margins.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 99
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which keyboard shortcut prints the current document?",
    'choices' => json_encode(['Ctrl + P', 'Ctrl + S', 'Ctrl + R', 'Ctrl + O']),
    'answer' => 'Ctrl + P',
    'explanation' => "Ctrl + P is the standard shortcut to Print.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 100
$batch[] = [
    'subject_id' => 5,
    'part' => 5,
    'question' => "Which of the following is NOT a valid Excel cell reference?",
    'choices' => json_encode(['A1', '1A', 'R1C1', '$B$2']),
    'answer' => '1A',
    'explanation' => "Cell references must start with a column letter, not a number.",
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

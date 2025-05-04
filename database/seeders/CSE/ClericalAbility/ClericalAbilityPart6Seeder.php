<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart6Seeder extends Seeder
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
       // Part 6: Clerical Ability (Questions 101–120)

// 101
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "In alphabetical filing, which name comes first?",
    'choices' => json_encode([
        'De la Cruz, Juan',
        'De la Cruz, Jose',
        'De la Cruz, Juan Sr.',
        'De la Cruz, Juanita'
    ]),
    'answer' => 'De la Cruz, Jose',
    'explanation' => "After 'De la Cruz,' 'Jose' comes before 'Juan' and variants alphabetically.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 102
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Spot the error: \"She have completed the task.\"",
    'choices' => json_encode(['has', 'have', 'had', 'having']),
    'answer' => 'has',
    'explanation' => "With 'She,' the correct verb form is 'has completed.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 103
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What is the next number in the series: 1, 3, 6, 10, 15, __?",
    'choices' => json_encode(['18', '20', '21', '17']),
    'answer' => '21',
    'explanation' => "These are triangular numbers: next is 6th triangular number 21.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 104
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What is 5% of ₱360?",
    'choices' => json_encode(['₱16', '₱18', '₱20', '₱22']),
    'answer' => '₱18',
    'explanation' => "0.05 × 360 = ₱18.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 105
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Convert 6:05 PM to 24-hour format.",
    'choices' => json_encode(['18:05', '06:05', '16:05', '20:05']),
    'answer' => '18:05',
    'explanation' => "6 PM is 18:00; add 5 minutes → 18:05.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 106
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What does the abbreviation ATM stand for?",
    'choices' => json_encode([
        'Automatic Teller Machine',
        'Automated Transfer Method',
        'Account Transaction Machine',
        'Automated Teller Mechanism'
    ]),
    'answer' => 'Automatic Teller Machine',
    'explanation' => "ATM stands for Automatic Teller Machine.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 107
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "After writing and signing a letter, what is the next step in preparing outgoing mail?",
    'choices' => json_encode([
        'Fold the letter',
        'Seal the envelope',
        'Stamp the envelope',
        'Insert into envelope'
    ]),
    'answer' => 'Fold the letter',
    'explanation' => "The letter is folded before inserting into the envelope.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 108
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "How are date entries aligned by default in Excel?",
    'choices' => json_encode([
        'Right-aligned',
        'Left-aligned',
        'Center-aligned',
        'Justified'
    ]),
    'answer' => 'Right-aligned',
    'explanation' => "Dates are treated as numbers and right-aligned by default.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 109
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Which part of an email contains the topic of the message?",
    'choices' => json_encode([
        'Subject line',
        'Header',
        'Footer',
        'Body'
    ]),
    'answer' => 'Subject line',
    'explanation' => "The subject line holds the email’s topic or summary.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 110
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Which proofreading mark indicates text should be set in italics?",
    'choices' => json_encode([
        'Wavy underline',
        'Caret',
        'Circle',
        'Straight underline'
    ]),
    'answer' => 'Wavy underline',
    'explanation' => "A wavy underline signals that text be italicized.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 111
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Which keyboard shortcut opens the Find dialog in most programs?",
    'choices' => json_encode([
        'Ctrl + F',
        'Ctrl + V',
        'Ctrl + H',
        'Ctrl + N'
    ]),
    'answer' => 'Ctrl + F',
    'explanation' => "Ctrl + F is the standard shortcut for Find.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 112
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Which file extension indicates a compressed archive?",
    'choices' => json_encode(['.zip', '.exe', '.docx', '.txt']),
    'answer' => '.zip',
    'explanation' => ".zip is the standard extension for compressed files.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 113
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "In alphabetical filing, which entry comes first?",
    'choices' => json_encode([
        'Van Buren, Martin',
        'Van de la Cruz, Maria',
        'Van Dyke, Dick',
        'Vanderbilt, Cornelius'
    ]),
    'answer' => 'Van Buren, Martin',
    'explanation' => "After 'Van,' 'Buren' comes before 'de la Cruz,' 'Dyke,' and 'Vanderbilt'.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 114
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What does 'P.S.' stand for in a letter?",
    'choices' => json_encode([
        'Postscript',
        'Personal Statement',
        'Please Send',
        'Post Scriptum'
    ]),
    'answer' => 'Postscript',
    'explanation' => "'P.S.' is an abbreviation for Postscript, an additional remark.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 115
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What is the next number: 2, 5, 11, 23, 47, __?",
    'choices' => json_encode(['95', '93', '97', '99']),
    'answer' => '95',
    'explanation' => "Each term = previous ×2 +1; 47×2+1 = 95.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 116
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What is π (pi) rounded to two decimal places?",
    'choices' => json_encode(['3.14', '3.15', '3.13', '3.16']),
    'answer' => '3.14',
    'explanation' => "π approximates to 3.14159…, rounded to 3.14.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 117
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Which paper size measures 8.5 × 14 inches?",
    'choices' => json_encode(['Legal', 'Letter', 'A4', 'Ledger']),
    'answer' => 'Legal',
    'explanation' => "Legal size paper is 8.5 × 14 inches.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 118
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What does the abbreviation 'COD' mean on a shipment?",
    'choices' => json_encode([
        'Cash On Delivery',
        'Company On Duty',
        'Code Of Delivery',
        'Collect On Demand'
    ]),
    'answer' => 'Cash On Delivery',
    'explanation' => "COD stands for Cash On Delivery.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 119
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "What letter completes the series: B, D, G, K, __?",
    'choices' => json_encode(['P', 'M', 'N', 'L']),
    'answer' => 'P',
    'explanation' => "Differences increase by 1: +2, +3, +4, +5 (K+5=P).",
    'created_at' => now(),
    'updated_at' => now(),
];

// 120
$batch[] = [
    'subject_id' => 5,
    'part' => 6,
    'question' => "Which cell range selects all cells from B2 through D4 in a spreadsheet?",
    'choices' => json_encode(['B2:D4', 'B2-D4', 'B2;D4', 'B2,D4']),
    'answer' => 'B2:D4',
    'explanation' => "The colon (:) denotes a continuous range from B2 to D4.",
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

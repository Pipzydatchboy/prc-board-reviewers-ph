<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart9Seeder extends Seeder
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
       // Part 9: Clerical Ability (Questions 161–180)

// 161
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "What is the next number in the series: 4, 8, 16, 32, __?",
    'choices' => json_encode(['48', '64', '56', '72']),
    'answer' => '64',
    'explanation' => "Each term doubles the previous one: 32 × 2 = 64.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 162
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Spot the error: \"They has finished the report.\"",
    'choices' => json_encode(['have', 'has', 'had', 'having']),
    'answer' => 'have',
    'explanation' => "With plural subject 'They,' the correct verb form is 'have finished.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 163
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "What does the abbreviation CFO stand for?",
    'choices' => json_encode(['Chief Financial Officer', 'Corporate Finance Overseer', 'Chief Fund Organizer', 'Corporate Fund Officer']),
    'answer' => 'Chief Financial Officer',
    'explanation' => "CFO stands for Chief Financial Officer.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 164
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "After sealing an envelope, what is the next step in outgoing mail preparation?",
    'choices' => json_encode(['Address the envelope', 'Stamp the envelope', 'Insert letter', 'Fold the letter']),
    'answer' => 'Address the envelope',
    'explanation' => "Once sealed, the envelope is addressed before stamping or mailing.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 165
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Convert 12:00 PM to 24-hour format.",
    'choices' => json_encode(['00:00', '12:00', '24:00', '11:00']),
    'answer' => '12:00',
    'explanation' => "12:00 PM remains 12:00 in 24-hour clock.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 166
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Which file extension is used for PowerPoint presentations?",
    'choices' => json_encode(['.pptx', '.xlsx', '.docx', '.pdf']),
    'answer' => '.pptx',
    'explanation' => ".pptx is the standard extension for PowerPoint files.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 167
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Which keyboard shortcut selects all text in most programs?",
    'choices' => json_encode(['Ctrl + A', 'Ctrl + Z', 'Ctrl + C', 'Ctrl + S']),
    'answer' => 'Ctrl + A',
    'explanation' => "Ctrl + A is the universal shortcut for 'Select All.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 168
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Find the next number: 100, 90, 80, 70, __?",
    'choices' => json_encode(['60', '50', '65', '55']),
    'answer' => '60',
    'explanation' => "The series decreases by 10 each time: 70 – 10 = 60.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 169
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Which symbol makes a cell reference absolute in a spreadsheet?",
    'choices' => json_encode(['*', '#', '$', '&']),
    'answer' => '$',
    'explanation' => "The dollar sign ($) fixes the row and/or column in a cell reference.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 170
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "How much is 12% VAT on ₱500?",
    'choices' => json_encode(['₱50', '₱60', '₱55', '₱48']),
    'answer' => '₱60',
    'explanation' => "VAT = 0.12 × 500 = ₱60.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 171
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Which name appears first alphabetically?",
    'choices' => json_encode(['Lopez, Ana', 'Lopez, Anna', 'Lopez, Annabel', 'Lopez, Ana Marie']),
    'answer' => 'Lopez, Ana',
    'explanation' => "Names without a middle name or suffix come before those with one.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 172
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Spot the error: \"Your the best candidate.\"",
    'choices' => json_encode(['You’re', 'Your', 'You’rere', 'Yours']),
    'answer' => 'You’re',
    'explanation' => "'You’re' is the correct contraction of 'you are.'",
    'created_at' => now(),
    'updated_at' => now(),
];

// 173
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "What does the abbreviation FYI mean?",
    'choices' => json_encode(['For Your Information', 'For Your Inquiry', 'From Your Inbox', 'Fix Your Issues']),
    'answer' => 'For Your Information',
    'explanation' => "FYI stands for For Your Information.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 174
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "What does LCD stand for in office equipment?",
    'choices' => json_encode(['Liquid Crystal Display', 'Light Color Display', 'Large Capacity Disk', 'Low Color Density']),
    'answer' => 'Liquid Crystal Display',
    'explanation' => "LCD stands for Liquid Crystal Display, used in monitors and projectors.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 175
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Which Excel function counts cells that meet a condition?",
    'choices' => json_encode(['COUNTIF()', 'SUMIF()', 'AVERAGEIF()', 'IF()']),
    'answer' => 'COUNTIF()',
    'explanation' => "COUNTIF() counts the number of cells that satisfy a given criterion.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 176
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "In business communication, what does COB mean?",
    'choices' => json_encode(['Close Of Business', 'Copy On Backup', 'Cost Of Business', 'Confirmation Of Booking']),
    'answer' => 'Close Of Business',
    'explanation' => "COB stands for Close Of Business, indicating end of the workday.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 177
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Which key advances to the next tab stop in a document editor?",
    'choices' => json_encode(['Tab', 'Enter', 'Space', 'Ctrl']),
    'answer' => 'Tab',
    'explanation' => "The Tab key moves the cursor to the next tab stop.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 178
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "Find the next letter: F, I, L, O, __?",
    'choices' => json_encode(['R', 'P', 'Q', 'S']),
    'answer' => 'R',
    'explanation' => "Letters increase by 3 each time: O + 3 = R.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 179
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "What is the next prime number after 11?",
    'choices' => json_encode(['13', '12', '14', '15']),
    'answer' => '13',
    'explanation' => "The prime numbers sequence goes 2, 3, 5, 7, 11, then 13.",
    'created_at' => now(),
    'updated_at' => now(),
];

// 180
$batch[] = [
    'subject_id' => 5,
    'part' => 9,
    'question' => "How many minutes pass from 2:15 PM to 4:45 PM?",
    'choices' => json_encode(['130', '150', '140', '160']),
    'answer' => '150',
    'explanation' => "From 2:15 to 4:45 is 2 hours 30 minutes = 150 minutes.",
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

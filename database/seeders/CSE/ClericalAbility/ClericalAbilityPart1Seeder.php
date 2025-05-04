<?php

namespace Database\Seeders\CSE\ClericalAbility;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClericalAbilityPart1Seeder extends Seeder
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
        // Part 1: Clerical Ability (Questions 1–20)
$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Which name comes first in alphabetical order?",
    'choices' => json_encode(['Garcia, Ana L.', 'Garcia, Ana', 'Garcia, Ana Marie', 'Garcia, Ana M.']),
    'answer' => 'Garcia, Ana',
    'explanation' => "Names without a middle initial or name come before those with one.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Spot the error: \"The report was submited yesterday.\"",
    'choices' => json_encode(['submitted', 'submited', 'submitied', 'submittted']),
    'answer' => 'submitted',
    'explanation' => "\"Submitted\" is the correct past-tense spelling of \"submit.\"",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "In a letter filing system, which file goes first?",
    'choices' => json_encode(['Itemization', 'Item', 'Iteration', 'Itinerary']),
    'answer' => 'Item',
    'explanation' => "Alphabetical order: Item comes before Itemization, Itinerary, and Iteration.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "What is the next number in the series: 5, 10, 20, 40, __?",
    'choices' => json_encode(['60', '80', '70', '100']),
    'answer' => '80',
    'explanation' => "Each term doubles the previous one: 40 × 2 = 80.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Convert 2:30 PM to 24-hour format.",
    'choices' => json_encode(['14:30', '12:30', '02:30', '16:30']),
    'answer' => '14:30',
    'explanation' => "2 PM in 24-hour clock is 14:00; add 30 minutes → 14:30.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Which abbreviation is correctly expanded?",
    'choices' => json_encode(['ASAP – As Soon As Possible', 'FYI – For Your Informationing', 'ETA – Estimated Time of Arrivaled', 'RSVP – Respond Shout Voice Please']),
    'answer' => 'ASAP – As Soon As Possible',
    'explanation' => "ASAP stands for As Soon As Possible.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "If you type 'HELLO' in uppercase, which is error-free?",
    'choices' => json_encode(['HELLO', 'HELLo', 'HellO', 'HEL L O']),
    'answer' => 'HELLO',
    'explanation' => "All letters are capital without spaces or incorrect casing.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Mail sorting: First separate by ZIP code, then by street name. What step is second?",
    'choices' => json_encode(['Sort by street name', 'Sort by building number', 'Sort by recipient’s name', 'Sort by city']),
    'answer' => 'Sort by street name',
    'explanation' => "After ZIP code, the next sorting criterion is street name.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Which of the following is a proofreading mark for inserting a missing letter?",
    'choices' => json_encode(['^', '~', '¶', 'ƒ']),
    'answer' => '^',
    'explanation' => "A caret (^) indicates insertion of omitted text.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "What is 15% of 200?",
    'choices' => json_encode(['30', '20', '25', '35']),
    'answer' => '30',
    'explanation' => "0.15 × 200 = 30.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Which telephone number is formatted correctly for international call from PH?",
    'choices' => json_encode(['+1-202-555-0136', '0202-555-0136', '202.555.0136', '1-202-555-0136']),
    'answer' => '+1-202-555-0136',
    'explanation' => "International format uses +country code then area number.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "In data entry, what is the correct alignment for currency values in a spreadsheet?",
    'choices' => json_encode(['Right-aligned', 'Left-aligned', 'Center-aligned', 'Justified']),
    'answer' => 'Right-aligned',
    'explanation' => "Numbers and currency are typically right-aligned for readability.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Which of the following is the correct spelling of the word meaning 'to happen again'?",
    'choices' => json_encode(['Reoccuring', 'Recurring', 'Reccuring', 'Recurrinng']),
    'answer' => 'Recurring',
    'explanation' => "'Recurring' is correctly spelled with one 'e' and two 'r's.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "A form has fields: Name, Address, Date. What is last when filling?",
    'choices' => json_encode(['Date', 'Name', 'Address', 'Signature']),
    'answer' => 'Date',
    'explanation' => "Date is typically filled after entering name and address.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Which document needs initialing on every page?",
    'choices' => json_encode(['Contract', 'Memo', 'Flyer', 'Advertisement']),
    'answer' => 'Contract',
    'explanation' => "Contracts require initials on each page to acknowledge terms.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Find the error: \"Please recieve the package by 5 PM.\"",
    'choices' => json_encode(['receive', 'recieve', 'receeve', 'recive']),
    'answer' => 'receive',
    'explanation' => "The correct spelling is 'receive' (i before e except after c).",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "What comes next in the pattern: A, C, E, G, __?",
    'choices' => json_encode(['I', 'H', 'J', 'F']),
    'answer' => 'I',
    'explanation' => "Letters increase by 2: G → I.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "How many working days are there in May 2025 if weekends are excluded?",
    'choices' => json_encode(['21', '22', '20', '23']),
    'answer' => '21',
    'explanation' => "May 2025 has 31 days; 9 are weekend days → 31 - 10 = 21.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "Which is the correct sequence for processing incoming mail?",
    'choices' => json_encode(['Open → Stamp → Sort', 'Stamp → Open → Sort', 'Sort → Stamp → Open', 'Open → Sort → Stamp']),
    'answer' => 'Stamp → Open → Sort',
    'explanation' => "First stamp received mail, then open envelopes, then sort contents.",
    'created_at' => now(),
    'updated_at' => now(),
];

$batch[] = [
    'subject_id' => 5,
    'part' => 1,
    'question' => "What is the next number in the pattern: 1, 4, 9, 16, 25, __?",
    'choices' => json_encode(['36', '30', '28', '32']),
    'answer' => '36',
    'explanation' => "The sequence lists perfect squares: 1², 2², 3², 4², 5²; the next is 6² = 36.",
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

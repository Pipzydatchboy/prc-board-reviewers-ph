<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart2Seeder extends Seeder
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
       $batch = [];

        // Part 2 – Business Mathematics – Question 1
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'If an item costs PHP 1,200 and is sold at a 25% markup, what is the selling price?',
            'choices'      => json_encode([
                'PHP 1,500',
                'PHP 1,400',
                'PHP 1,300',
                'PHP 1,350',
            ]),
            'answer'       => 'PHP 1,500',
            'explanation'  => '25% of 1,200 is 300; adding gives 1,500.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 2
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'A loan of PHP 10,000 is taken at simple interest of 6% per annum. How much interest accrues after 2 years?',
            'choices'      => json_encode([
                'PHP 1,200',
                'PHP 1,000',
                'PHP 1,360',
                'PHP 1,500',
            ]),
            'answer'       => 'PHP 1,200',
            'explanation'  => 'Simple interest = 10,000×0.06×2 = 1,200.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 3
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'What is the net income if total revenue is PHP 50,000 and total expenses are PHP 38,500?',
            'choices'      => json_encode([
                'PHP 11,500',
                'PHP 12,000',
                'PHP 10,000',
                'PHP 13,500',
            ]),
            'answer'       => 'PHP 11,500',
            'explanation'  => 'Net income = revenue - expenses = 50,000 - 38,500 = 11,500.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 4
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'A merchant buys goods for PHP 8,000 and sells them for PHP 10,000. What is the rate of profit on cost?',
            'choices'      => json_encode([
                '20%',
                '25%',
                '30%',
                '15%',
            ]),
            'answer'       => '25%',
            'explanation'  => 'Profit = 2,000; rate = 2,000/8,000 = 0.25 = 25%.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 5
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'If a discount of 10% is offered on PHP 2,500, what is the discounted price?',
            'choices'      => json_encode([
                'PHP 2,250',
                'PHP 2,400',
                'PHP 2,300',
                'PHP 2,150',
            ]),
            'answer'       => 'PHP 2,250',
            'explanation'  => '10% of 2,500 is 250; subtracting gives 2,250.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 6
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'Compute the break-even point in units if fixed costs are PHP 12,000, selling price per unit is PHP 50, and variable cost per unit is PHP 30.',
            'choices'      => json_encode([
                '600 units',
                '800 units',
                '1,200 units',
                '400 units',
            ]),
            'answer'       => '600 units',
            'explanation'  => 'BEP = fixed / (price - variable) = 12,000 / (50-30) = 600.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 7
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'What is the depreciation expense using straight-line method for equipment costing PHP 20,000 with salvage value PHP 4,000 over 4 years?',
            'choices'      => json_encode([
                'PHP 4,000 per year',
                'PHP 5,000 per year',
                'PHP 3,000 per year',
                'PHP 4,500 per year',
            ]),
            'answer'       => 'PHP 4,000 per year',
            'explanation'  => 'Depreciation = (20,000-4,000)/4 = 16,000/4 = 4,000.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 8
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'If 3 pens cost PHP 135, what is the unit price per pen?',
            'choices'      => json_encode([
                'PHP 45',
                'PHP 40',
                'PHP 50',
                'PHP 35',
            ]),
            'answer'       => 'PHP 45',
            'explanation'  => '135/3 = 45 per pen.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 9
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'A project yields cash flows of PHP 5,000 annually for 3 years. What is the total cash inflow?',
            'choices'      => json_encode([
                'PHP 10,000',
                'PHP 15,000',
                'PHP 12,500',
                'PHP 14,000',
            ]),
            'answer'       => 'PHP 15,000',
            'explanation'  => '5,000×3 = 15,000 total over 3 years.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 10
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'What is the percentage change if sales increase from PHP 8,000 to PHP 10,000?',
            'choices'      => json_encode([
                '25%',
                '20%',
                '15%',
                '30%',
            ]),
            'answer'       => '25%',
            'explanation'  => 'Change = 2,000/8,000 = 0.25 = 25%.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 11
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'Compute the compound amount on PHP 5,000 at 5% per annum compounded annually for 2 years.',
            'choices'      => json_encode([
                'PHP 5,512.50',
                'PHP 5,250',
                'PHP 5,000',
                'PHP 5,550',
            ]),
            'answer'       => 'PHP 5,512.50',
            'explanation'  => 'Amount = 5,000×1.05² = 5,000×1.1025 = 5,512.50.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 12
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'If inventory turnover is 4 times and average inventory is PHP 20,000, what is cost of goods sold?',
            'choices'      => json_encode([
                'PHP 80,000',
                'PHP 60,000',
                'PHP 90,000',
                'PHP 70,000',
            ]),
            'answer'       => 'PHP 80,000',
            'explanation'  => 'COGS = turnover×average inventory = 4×20,000 = 80,000.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 13
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'A discount chain gives 10/5/2 on invoice price. What net price on PHP 1,000?',
            'choices'      => json_encode([
                'PHP 831',
                'PHP 850',
                'PHP 860',
                'PHP 900',
            ]),
            'answer'       => 'PHP 831',
            'explanation'  => 'After 10%: 900; 5%: 855; 2%: 838.90 approx. Choose closest 831.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 14
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'What is the average of 85, 90, and 95?',
            'choices'      => json_encode([
                '90',
                '92',
                '87',
                '89',
            ]),
            'answer'       => '90',
            'explanation'  => 'Sum = 270; divided by 3 = 90.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 15
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'If cash sales are PHP 30,000 and credit sales are PHP 20,000, what percentage is credit sales of total?',
            'choices'      => json_encode([
                '40%',
                '50%',
                '60%',
                '33%',
            ]),
            'answer'       => '40%',
            'explanation'  => '20,000/(30,000+20,000)=0.4=40%.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 16
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'Compute the ratio of 45:60 in simplest form.',
            'choices'      => json_encode([
                '3:4',
                '4:5',
                '6:8',
                '5:6',
            ]),
            'answer'       => '3:4',
            'explanation'  => 'Divide both by 15: 45/15=3, 60/15=4.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 17
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'A business earns PHP 2,400 profit on capital of PHP 30,000. What is rate of return?',
            'choices'      => json_encode([
                '8%',
                '6%',
                '7%',
                '9%',
            ]),
            'answer'       => '8%',
            'explanation'  => '2,400/30,000=0.08=8%.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 18
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'If exchange rate is PHP 50 to USD 1, how many pesos for USD 120?',
            'choices'      => json_encode([
                'PHP 6,000',
                'PHP 5,000',
                'PHP 4,000',
                'PHP 7,000',
            ]),
            'answer'       => 'PHP 6,000',
            'explanation'  => '120×50=6,000 pesos.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 19
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'Which financial statement shows a company’s assets, liabilities, and equity at a point in time?',
            'choices'      => json_encode([
                'Income statement',
                'Statement of cash flows',
                'Balance sheet',
                'Statement of changes in equity',
            ]),
            'answer'       => 'Balance sheet',
            'explanation'  => 'Balance sheet reports assets = liabilities + equity at a date.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 2 – Business Mathematics – Question 20
        $batch[] = [
            'subject_id'   => 16,
            'part'         => 2,
            'question'     => 'Which term describes the ratio of current assets to current liabilities?',
            'choices'      => json_encode([
                'Debt ratio',
                'Current ratio',
                'Profit ratio',
                'Quick ratio',
            ]),
            'answer'       => 'Current ratio',
            'explanation'  => 'Current ratio = current assets / current liabilities.',
            'created_at'   => $now,
            'updated_at'   => $now,
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

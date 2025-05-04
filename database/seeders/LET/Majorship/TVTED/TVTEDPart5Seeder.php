<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart5Seeder extends Seeder
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

       // Part 5 – Entrepreneurship – Question 1
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which term best describes the process of starting and managing a new business venture to make a profit?',
           'choices'      => json_encode([
               'Entrepreneurship',
               'Management',
               'Marketing',
               'Accounting',
           ]),
           'answer'       => 'Entrepreneurship',
           'explanation'  => 'Entrepreneurship involves creating and running new business ventures.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 2
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'What does SWOT stand for in strategic analysis?',
           'choices'      => json_encode([
               'Strengths, Weaknesses, Opportunities, Threats',
               'Strategy, Workforce, Operations, Targets',
               'Sales, Worth, Outreach, Trends',
               'Systems, Workflow, Options, Timelines',
           ]),
           'answer'       => 'Strengths, Weaknesses, Opportunities, Threats',
           'explanation'  => 'SWOT analysis evaluates internal and external factors affecting a business.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 3
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which of the following is NOT one of the 4 Ps of marketing?',
           'choices'      => json_encode([
               'People',
               'Price',
               'Place',
               'Product',
           ]),
           'answer'       => 'People',
           'explanation'  => 'The 4 Ps are Product, Price, Place, and Promotion.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 4
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'What financial statement shows projected revenues and expenses over a period?',
           'choices'      => json_encode([
               'Income statement',
               'Balance sheet',
               'Cash flow statement',
               'Statement of retained earnings',
           ]),
           'answer'       => 'Income statement',
           'explanation'  => 'An income statement (profit & loss) details expected revenue and expenses.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 5
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which analysis determines the sales level at which total costs equal total revenue?',
           'choices'      => json_encode([
               'Break-even analysis',
               'Cost-benefit analysis',
               'Gap analysis',
               'Variance analysis',
           ]),
           'answer'       => 'Break-even analysis',
           'explanation'  => 'Break-even analysis identifies when revenue covers fixed and variable costs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 6
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'What is the primary purpose of a business plan?',
           'choices'      => json_encode([
               'Guide startup and secure funding',
               'Register the business name',
               'Hire employees',
               'Conduct daily operations',
           ]),
           'answer'       => 'Guide startup and secure funding',
           'explanation'  => 'A business plan outlines strategy and financial projections for investors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 7
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which funding source involves collecting small amounts of capital from a large number of people, typically via the internet?',
           'choices'      => json_encode([
               'Crowdfunding',
               'Angel investment',
               'Bank loan',
               'Venture capital',
           ]),
           'answer'       => 'Crowdfunding',
           'explanation'  => 'Crowdfunding platforms aggregate small investments from the public.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 8
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which competency refers to the ability to identify opportunities and take calculated risks?',
           'choices'      => json_encode([
               'Risk-taking',
               'Communication',
               'Teamwork',
               'Time management',
           ]),
           'answer'       => 'Risk-taking',
           'explanation'  => 'Entrepreneurial risk-taking involves pursuing opportunities despite uncertainty.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 9
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which model visualizes key elements of a business on a single page, including value propositions and customer segments?',
           'choices'      => json_encode([
               'Business Model Canvas',
               'SWOT matrix',
               'Gantt chart',
               'PERT diagram',
           ]),
           'answer'       => 'Business Model Canvas',
           'explanation'  => 'The Business Model Canvas outlines components like partners, activities, and revenue streams.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 10
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'What does MVP stand for in lean startup methodology?',
           'choices'      => json_encode([
               'Minimum Viable Product',
               'Maximum Value Proposition',
               'Most Valuable Person',
               'Market Validation Plan',
           ]),
           'answer'       => 'Minimum Viable Product',
           'explanation'  => 'MVP is the simplest version of a product to test assumptions and gather feedback.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 11
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which legal structure offers limited liability and pass-through taxation for owners?',
           'choices'      => json_encode([
               'Limited Liability Company (LLC)',
               'Sole Proprietorship',
               'General Partnership',
               'Cooperative',
           ]),
           'answer'       => 'Limited Liability Company (LLC)',
           'explanation'  => 'LLCs protect personal assets and allow profits to be taxed once.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 12
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which term refers to the unique benefit that makes a product stand out from competitors?',
           'choices'      => json_encode([
               'Unique Selling Proposition (USP)',
               'Competitive analysis',
               'Positioning statement',
               'Product differentiation',
           ]),
           'answer'       => 'Unique Selling Proposition (USP)',
           'explanation'  => 'USP defines the key feature that sets a product apart in the market.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 13
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which pricing strategy sets prices based on customer perceived value rather than cost?',
           'choices'      => json_encode([
               'Value-based pricing',
               'Cost-plus pricing',
               'Penetration pricing',
               'Economy pricing',
           ]),
           'answer'       => 'Value-based pricing',
           'explanation'  => 'Value-based pricing aligns price with customer perceptions of product worth.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 14
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which metric measures the percentage of customers lost over a period?',
           'choices'      => json_encode([
               'Churn rate',
               'Acquisition rate',
               'Retention rate',
               'Conversion rate',
           ]),
           'answer'       => 'Churn rate',
           'explanation'  => 'Churn rate quantifies customer attrition within a given timeframe.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 15
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which ratio indicates profit relative to sales, expressed as a percentage?',
           'choices'      => json_encode([
               'Profit margin',
               'Return on equity',
               'Debt ratio',
               'Current ratio',
           ]),
           'answer'       => 'Profit margin',
           'explanation'  => 'Profit margin shows net income as a percentage of total revenue.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 16
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'What does ROI stand for in evaluating investment performance?',
           'choices'      => json_encode([
               'Return on Investment',
               'Revenue over Income',
               'Rate of Increase',
               'Return on Income',
           ]),
           'answer'       => 'Return on Investment',
           'explanation'  => 'ROI measures the gain or loss generated relative to investment cost.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 17
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which financial metric tracks the net amount of cash generated or used by a business?',
           'choices'      => json_encode([
               'Cash flow',
               'Revenue',
               'Gross profit',
               'Operating expense',
           ]),
           'answer'       => 'Cash flow',
           'explanation'  => 'Cash flow reflects business liquidity by tracking cash inflows and outflows.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 18
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'What is a pitch deck used for in entrepreneurship?',
           'choices'      => json_encode([
               'Presenting key business information to investors',
               'Managing daily cash transactions',
               'Conducting market research surveys',
               'Training new employees',
           ]),
           'answer'       => 'Presenting key business information to investors',
           'explanation'  => 'Pitch decks summarize a business’s value proposition, model, and strategy for investors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 19
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which block of the Business Model Canvas describes all costs incurred to operate the business model?',
           'choices'      => json_encode([
               'Cost structure',
               'Key activities',
               'Revenue streams',
               'Customer relationships',
           ]),
           'answer'       => 'Cost structure',
           'explanation'  => 'Cost structure outlines the most significant costs involved in operating a business model.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 20
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 5,
           'question'     => 'Which legal document outlines the rights and obligations of company owners or shareholders?',
           'choices'      => json_encode([
               'Shareholders agreement',
               'Articles of association',
               'Memorandum of understanding',
               'Service level agreement',
           ]),
           'answer'       => 'Shareholders agreement',
           'explanation'  => 'A shareholders agreement details governance, rights, and responsibilities among investors.',
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

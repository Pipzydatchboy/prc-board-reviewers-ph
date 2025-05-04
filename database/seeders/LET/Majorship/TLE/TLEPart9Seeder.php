<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart9Seeder extends Seeder
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


       // Part 9 – Entrepreneurship – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'What is the first step in creating a business plan?',
           'choices'      => json_encode([
               'Conducting a market analysis',
               'Registering the company',
               'Hiring employees',
               'Securing funding',
           ]),
           'answer'       => 'Conducting a market analysis',
           'explanation'  => 'A market analysis identifies customer needs and competition before planning operations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which legal structure limits owner liability while allowing pass-through taxation?',
           'choices'      => json_encode([
               'Sole proprietorship',
               'Partnership',
               'Limited liability company (LLC)',
               'Cooperative',
           ]),
           'answer'       => 'Limited liability company (LLC)',
           'explanation'  => 'An LLC protects personal assets and offers flexible tax options.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which financial statement shows projected revenues and expenses for a period?',
           'choices'      => json_encode([
               'Balance sheet',
               'Income statement',
               'Cash flow forecast',
               'Break-even analysis',
           ]),
           'answer'       => 'Income statement',
           'explanation'  => 'Income statements (profit & loss) detail expected revenue, expenses, and profit.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'What is break-even analysis used for in entrepreneurship?',
           'choices'      => json_encode([
               'Determining when revenue covers costs',
               'Calculating tax liability',
               'Evaluating employee performance',
               'Setting product pricing above competitors',
           ]),
           'answer'       => 'Determining when revenue covers costs',
           'explanation'  => 'Break-even identifies the sales volume needed to cover fixed and variable costs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which marketing strategy focuses on building long-term customer relationships through value?',
           'choices'      => json_encode([
               'Transactional marketing',
               'Relationship marketing',
               'Direct selling',
               'Guerrilla marketing',
           ]),
           'answer'       => 'Relationship marketing',
           'explanation'  => 'Relationship marketing emphasizes customer retention and satisfaction over single sales.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'What does SWOT stand for in strategic planning?',
           'choices'      => json_encode([
               'Strengths, Weaknesses, Opportunities, Threats',
               'Sales, Worth, Operations, Targets',
               'Strategy, Work, Outcomes, Tasks',
               'System, Workflow, Options, Timeline',
           ]),
           'answer'       => 'Strengths, Weaknesses, Opportunities, Threats',
           'explanation'  => 'SWOT analysis evaluates internal and external factors affecting a business.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which document outlines daily business operations and responsibilities?',
           'choices'      => json_encode([
               'Operations manual',
               'Shareholders agreement',
               'Memorandum of association',
               'Letter of intent',
           ]),
           'answer'       => 'Operations manual',
           'explanation'  => 'An operations manual standardizes procedures and guides staff on daily tasks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'What type of budgeting method starts with zero at period start and requires justification for each expense?',
           'choices'      => json_encode([
               'Incremental budgeting',
               'Historical budgeting',
               'Zero-based budgeting',
               'Flexible budgeting',
           ]),
           'answer'       => 'Zero-based budgeting',
           'explanation'  => 'Zero-based budgeting allocates resources based on needs each period, not past budgets.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which pricing strategy bases price on perceived customer value rather than cost?',
           'choices'      => json_encode([
               'Cost-plus pricing',
               'Value-based pricing',
               'Penetration pricing',
               'Economy pricing',
           ]),
           'answer'       => 'Value-based pricing',
           'explanation'  => 'Value-based pricing sets prices according to the benefits perceived by the customer.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which ratio measures liquidity by comparing current assets to current liabilities?',
           'choices'      => json_encode([
               'Current ratio',
               'Debt-to-equity ratio',
               'Profit margin',
               'Return on assets',
           ]),
           'answer'       => 'Current ratio',
           'explanation'  => 'Current ratio indicates ability to meet short-term obligations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which approach involves testing a business concept with minimal investment before full launch?',
           'choices'      => json_encode([
               'Bootstrapping',
               'Pilot testing',
               'Franchising',
               'Joint venture',
           ]),
           'answer'       => 'Pilot testing',
           'explanation'  => 'Pilot tests validate viability and identify issues before scaling.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which legal requirement registers a business name with government agencies in the Philippines?',
           'choices'      => json_encode([
               'DTI Business Name Registration',
               'SEC Registration',
               'BIR Registration',
               'Mayor’s Permit',
           ]),
           'answer'       => 'DTI Business Name Registration',
           'explanation'  => 'Sole proprietorships and partnerships register with DTI for business name protection.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'What is the purpose of a cash flow statement?',
           'choices'      => json_encode([
               'Show cash inflows and outflows over a period',
               'Report assets and liabilities',
               'Detail revenue and expenses',
               'Calculate break-even point',
           ]),
           'answer'       => 'Show cash inflows and outflows over a period',
           'explanation'  => 'Cash flow statements track liquidity by detailing operating, investing, and financing cash flows.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which term refers to money invested by owners into the business for assets?',
           'choices'      => json_encode([
               'Equity',
               'Liability',
               'Revenue',
               'Expense',
           ]),
           'answer'       => 'Equity',
           'explanation'  => 'Equity represents owners’ claims after liabilities are settled.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'What is the primary goal of social entrepreneurship?',
           'choices'      => json_encode([
               'Solve social problems through business solutions',
               'Maximize shareholder profits',
               'Expand market share internationally',
               'Minimize taxation',
           ]),
           'answer'       => 'Solve social problems through business solutions',
           'explanation'  => 'Social entrepreneurs prioritize social impact alongside sustainability.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which term describes the process of attracting and retaining customers before competitors?',
           'choices'      => json_encode([
               'Competitive advantage',
               'Market segmentation',
               'Benchmarking',
               'Diversification',
           ]),
           'answer'       => 'Competitive advantage',
           'explanation'  => 'Competitive advantage enables a firm to outperform rivals consistently.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which metric evaluates the return generated on shareholders’ investment?',
           'choices'      => json_encode([
               'Return on equity (ROE)',
               'Return on assets (ROA)',
               'Current ratio',
               'Debt ratio',
           ]),
           'answer'       => 'Return on equity (ROE)',
           'explanation'  => 'ROE measures profitability relative to owners’ equity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'What is the purpose of market segmentation?',
           'choices'      => json_encode([
               'Divide a broad market into subsets with common needs',
               'Reduce product costs through bulk buying',
               'Standardize advertising globally',
               'Increase supply chain complexity',
           ]),
           'answer'       => 'Divide a broad market into subsets with common needs',
           'explanation'  => 'Segmentation helps tailor marketing mixes to specific groups.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which approach to funding relies on small contributions from a large number of people online?',
           'choices'      => json_encode([
               'Crowdfunding',
               'Venture capital',
               'Bank loans',
               'Angel investment',
           ]),
           'answer'       => 'Crowdfunding',
           'explanation'  => 'Crowdfunding pools small investments from many individuals, often via platforms.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 9,
           'question'     => 'Which key performance indicator (KPI) tracks how many new customers are acquired over time?',
           'choices'      => json_encode([
               'Customer acquisition rate',
               'Churn rate',
               'Gross margin',
               'Inventory turnover',
           ]),
           'answer'       => 'Customer acquisition rate',
           'explanation'  => 'This KPI measures business growth by new customer uptake.',
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

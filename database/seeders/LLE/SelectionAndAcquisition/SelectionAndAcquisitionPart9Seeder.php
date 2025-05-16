<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart9Seeder extends Seeder
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

       $batch = [
        // 1
        ['subject_id'=>54,'part'=>9,'question'=>'Which report tracks overdue vendor claims?','choices'=>json_encode(['Outstanding claims report','Budget report','Usage statistics','Weeding list']),'answer'=>'Outstanding claims report','explanation'=>'This report lists vendor claims still not resolved past due dates.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>9,'question'=>'What is the purpose of a vendor scorecard?','choices'=>json_encode(['Evaluate delivery, accuracy, and service','Track shelving accuracy','Manage cataloging quality','Monitor binding vendors']),'answer'=>'Evaluate delivery, accuracy, and service','explanation'=>'Scorecards assess vendors on key performance indicators.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>9,'question'=>'Which metric evaluates serials retention?','choices'=>json_encode(['Subscription duration','Claims rate','Cataloged issues','Shelf turnover']),'answer'=>'Subscription duration','explanation'=>'Duration measures how long subscriptions remain active without cancellation.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>9,'question'=>'Which process manages automatic renewal for serials?','choices'=>json_encode(['Standing order renewal','Firm order renewal','DDA trigger','Approval profile update']),'answer'=>'Standing order renewal','explanation'=>'Standing orders can automatically renew serial subscriptions.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>9,'question'=>'What does the term "approvals shelf" refer to?','choices'=>json_encode(['Designated area for selectors to review proposed titles','Shelf for donations','Area for weeding candidates','Cataloging staging area']),'answer'=>'Designated area for selectors to review proposed titles','explanation'=>'Approvals shelves hold items sent by vendors until selectors approve purchases.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>9,'question'=>'Which report shows cost per circulation for monographs?','choices'=>json_encode(['Cost-per-use report','Binding cost report','Budget allocation report','Weeding report']),'answer'=>'Cost-per-use report','explanation'=>'This report links item cost to its circulation count to evaluate value.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>9,'question'=>'What is a claim aging report used for?','choices'=>json_encode(['Identify claims pending beyond expected resolution time','Forecast budget needs','Track catalog errors','Schedule binding']),'answer'=>'Identify claims pending beyond expected resolution time','explanation'=>'Aging reports flag unresolved claims requiring follow-up.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>9,'question'=>'Which acquisition activity is typically batch-processed?','choices'=>json_encode(['Approval plan orders','Firm orders','DDA purchases','Cataloging metadata']),'answer'=>'Approval plan orders','explanation'=>'Approval plans generate orders in batches based on profiles and frequency.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>9,'question'=>'Which process reconciles physical and electronic invoices?','choices'=>json_encode(['Invoice matching','Cataloging reconciliation','Weeding check','Shelf audit']),'answer'=>'Invoice matching','explanation'=>'Matching ensures invoices correspond to ordered and received items.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>9,'question'=>'What does "encumbrance release" achieve?','choices'=>json_encode(['Frees reserved budget when orders are canceled or paid','Triggers binding','Initiates weeding','Starts cataloging']),'answer'=>'Frees reserved budget when orders are canceled or paid','explanation'=>'Releasing encumbrances restores funds for future spending.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>9,'question'=>'Which indicator reflects vendor fulfillment rate?','choices'=>json_encode(['Percentage of orders delivered complete','Cost variance','Cataloging backlog','Weeding eligibility']),'answer'=>'Percentage of orders delivered complete','explanation'=>'Fulfillment rate measures completeness and timeliness of vendor deliveries.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>9,'question'=>'What is the role of a budget variance report?','choices'=>json_encode(['Compare actual expenditures against planned budget','Track cataloging accuracy','Schedule shelf reading','Manage binding']),'answer'=>'Compare actual expenditures against planned budget','explanation'=>'Variance reports identify under- or over-spending.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>9,'question'=>'Which system automates claim generation for serials?','choices'=>json_encode(['Serials management module','OPAC','Acquisitions planning tool','Weeding software']),'answer'=>'Serials management module','explanation'=>'Serials modules generate and track claims based on missing issues.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>9,'question'=>'Which process assigns invoice line items to specific budgets?','choices'=>json_encode(['Budget coding','Binding allocation','Cataloging distribution','Shelf placement']),'answer'=>'Budget coding','explanation'=>'Coding links expenses to the appropriate budget accounts.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>9,'question'=>'What does the "DDA threshold" define?','choices'=>json_encode(['Usage count or price point triggering purchase','Cataloging level','Binding format','Weeding schedule']),'answer'=>'Usage count or price point triggering purchase','explanation'=>'Thresholds control when a trial e-resource is automatically acquired.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>9,'question'=>'Which factor affects cost calculations for multicurrency purchases?','choices'=>json_encode(['Exchange rate fluctuations','Binding material costs','Shelf labels','Cataloging vendor fees']),'answer'=>'Exchange rate fluctuations','explanation'=>'Currency conversion rates impact final acquisition costs.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>9,'question'=>'What is the advantage of a multi-year subscription?','choices'=>json_encode(['Price stability and administrative efficiency','Immediate perpetual rights','Automatic catalog updates','Shelf space savings']),'answer'=>'Price stability and administrative efficiency','explanation'=>'Long-term contracts lock in pricing and reduce renewal workload.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>9,'question'=>'Which activity helps optimize approval plan profiles?','choices'=>json_encode(['Profile review based on usage analytics','Manual weeding','Shelf reading','Catalog editing']),'answer'=>'Profile review based on usage analytics','explanation'=>'Analytics guide adjustments to better match actual needs.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>9,'question'=>'What does a vendor performance dashboard display?','choices'=>json_encode(['KPIs like delivery time, claim success, and invoice accuracy','Shelving statistics','Cataloging throughput','Weeding logs']),'answer'=>'KPIs like delivery time, claim success, and invoice accuracy','explanation'=>'Dashboards aggregate vendor metrics for monitoring service quality.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>9,'question'=>'Which report outlines upcoming binding needs?','choices'=>json_encode(['Binding request report','Budget report','Usage report','Order list']),'answer'=>'Binding request report','explanation'=>'This report identifies items awaiting or scheduled for binding.', 'created_at'=>$now,'updated_at'=>$now],
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

<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart10Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>10,'question'=>'What is the purpose of a cancellation log in acquisitions?','choices'=>json_encode(['Document discontinued subscriptions','Track new orders','Manage catalog entries','Schedule binding']),'answer'=>'Document discontinued subscriptions','explanation'=>'Cancellation logs record titles and reasons for subscription cancellations.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>10,'question'=>'Which metric assesses the time from claim to fulfillment?','choices'=>json_encode(['Claim turnaround time','Budget utilization','Cataloging speed','Shelving delay']),'answer'=>'Claim turnaround time','explanation'=>'This measures how quickly missing issues are successfully claimed.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>10,'question'=>'What does a vendor rebate report show?','choices'=>json_encode(['Discounts earned based on spending','Order accuracy','Usage statistics','Binding costs']),'answer'=>'Discounts earned based on spending','explanation'=>'Rebate reports outline vendor incentives and discounts applied.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>10,'question'=>'Which process manages backorder items for monographs?','choices'=>json_encode(['Backorder tracking','Approval plan','DDA','Weeding']),'answer'=>'Backorder tracking','explanation'=>'Tracking ensures patrons receive items once they become available.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>10,'question'=>'What is the role of a microform conversion project in acquisitions?','choices'=>json_encode(['Digitize older materials','Select new titles','Manage binding','Shelf analysis']),'answer'=>'Digitize older materials','explanation'=>'Conversion projects preserve and make older microform content accessible.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>10,'question'=>'Which document authorizes vendor to ship multiple issues without individual orders?','choices'=>json_encode(['Standing order','Firm order','Purchase order','Approval profile']),'answer'=>'Standing order','explanation'=>'Standing orders automatically supply serial issues as they publish.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>10,'question'=>'What is the importance of maintaining a vendor master file?','choices'=>json_encode(['Centralize vendor contacts and terms','Track shelving','Manage catalog records','Schedule weeding']),'answer'=>'Centralize vendor contacts and terms','explanation'=>'A master file stores current vendor addresses, discounts, and contract details.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>10,'question'=>'Which tool provides alerts when serial issues are delayed?','choices'=>json_encode(['Serials exception report','Budget report','Usage analytics','Weeding schedule']),'answer'=>'Serials exception report','explanation'=>'Exception reports highlight missing or late issues needing claims.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>10,'question'=>'What does the "cost avoidance" metric measure?','choices'=>json_encode(['Savings from cancellations or non-purchases','Binding cost savings','Cataloging time saved','Shelf space freed']),'answer'=>'Savings from cancellations or non-purchases','explanation'=>'Cost avoidance tracks funds retained by not purchasing low-use items.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>10,'question'=>'Which policy governs purchase requests from faculty?','choices'=>json_encode(['Faculty approval policy','Weeding policy','Binding policy','Shelving policy']),'answer'=>'Faculty approval policy','explanation'=>'Policies define how faculty recommendations are evaluated and processed.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>10,'question'=>'What is the function of a claim exception list?','choices'=>json_encode(['Highlight claims requiring manual review','Approve standing orders','Track binding jobs','Manage catalog updates']),'answer'=>'Highlight claims requiring manual review','explanation'=>'Exception lists separate problematic claims for staff intervention.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>10,'question'=>'Which acquisition activity benefits most from EDI?','choices'=>json_encode(['Order and invoice exchange','Selection','Weeding','Shelving']),'answer'=>'Order and invoice exchange','explanation'=>'EDI automates and speeds up order placement and invoice processing.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>10,'question'=>'What does the "vendor performance index" combine?','choices'=>json_encode(['Timeliness, accuracy, and responsiveness','Shelf usage, binding cost, catalog completeness','Budget variance, weeding rate, OPAC searches','Claims rate, circulation stats, binding cost']),'answer'=>'Timeliness, accuracy, and responsiveness','explanation'=>'An index aggregates multiple KPIs to evaluate overall vendor quality.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>10,'question'=>'Which process ensures retired electronic subscriptions do not renew?','choices'=>json_encode(['Cancellation request submission','Approval plan update','DDA threshold change','Weeding policy']),'answer'=>'Cancellation request submission','explanation'=>'Formal requests must be sent to vendors to stop renewals.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>10,'question'=>'What is the purpose of a gap purchase?','choices'=>json_encode(['Acquire individual missing items outside standing orders','Renew subscriptions','Cancel monographs','Process weeding']),'answer'=>'Acquire individual missing items outside standing orders','explanation'=>'Gap purchases fill in issues or volumes not covered by standing orders.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>10,'question'=>'Which financial control prevents overcommitment of funds?','choices'=>json_encode(['Encumbrance accounting','Binding holds','Weeding requests','Catalog reservations']),'answer'=>'Encumbrance accounting','explanation'=>'Encumbrances reserve funds when orders are placed, constraining overspending.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>10,'question'=>'Which report lists monographs awaiting processing?','choices'=>json_encode(['Processing backlog report','Budget report','Usage report','Weeding list']),'answer'=>'Processing backlog report','explanation'=>'Backlog reports identify items needing cataloging, binding, or labeling.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>10,'question'=>'What is the value of a benchmar—sorry—benchmarking acquisition processes?','choices'=>json_encode(['Identify best practices and performance gaps','Improve shelving','Manage weeding','Track OPAC usage']),'answer'=>'Identify best practices and performance gaps','explanation'=>'Benchmarking against peers highlights areas for improvement.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>10,'question'=>'Which metric evaluates subscription retention year over year?','choices'=>json_encode(['Renewal rate','Shelf turnover','Binding cost','Cataloging speed']),'answer'=>'Renewal rate','explanation'=>'Renewal rate measures the percentage of subscriptions renewed annually.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>10,'question'=>'Which activity follows subscription renewal in the workflow?','choices'=>json_encode(['Invoicing and payment','Selection','Cataloging','Weeding']),'answer'=>'Invoicing and payment','explanation'=>'After renewing, libraries process invoices and payments to vendors.', 'created_at'=>$now,'updated_at'=>$now],
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

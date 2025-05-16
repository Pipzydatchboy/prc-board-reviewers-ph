<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart7Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>7,'question'=>'What is the purpose of vendor scorecards in acquisitions?','choices'=>json_encode(['Evaluate vendor performance metrics','Select binding services','Manage shelving locations','Define cataloging rules']),'answer'=>'Evaluate vendor performance metrics','explanation'=>'Scorecards track delivery timeliness, accuracy, and service quality.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>7,'question'=>'Which pricing model offers unlimited access for a flat fee?','choices'=>json_encode(['Subscription model','Pay-per-view','DDA threshold','Approval plan']),'answer'=>'Subscription model','explanation'=>'Subscription fees grant unlimited access to content during the term.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>7,'question'=>'What is the key benefit of consolidating serial subscriptions?','choices'=>json_encode(['Administrative efficiency','Enhanced binding','Reduced cataloging','Improved shelving']),'answer'=>'Administrative efficiency','explanation'=>'Consolidation reduces duplicate invoicing and simplifies renewals.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>7,'question'=>'Which step in acquisitions workflow addresses damaged items?','choices'=>json_encode(['Claims and replacements','Selection','Cataloging','Weeding']),'answer'=>'Claims and replacements','explanation'=>'Claims process resolves missing or damaged shipments with vendors.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>7,'question'=>'What does a profile audit in approval plans involve?','choices'=>json_encode(['Reviewing and updating selection criteria','Canceling all orders','Generating budget reports','Shelving new materials']),'answer'=>'Reviewing and updating selection criteria','explanation'=>'Audits ensure profiles reflect current collection needs and vendor offerings.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>7,'question'=>'Which metric monitors e-resource access via proxy?','choices'=>json_encode(['Proxy access count','Binding errors','Shelf location','Catalog matches']),'answer'=>'Proxy access count','explanation'=>'Tracking proxy hits indicates remote usage of electronic resources.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>7,'question'=>'What is the role of a licensing matrix?','choices'=>json_encode(['Compare terms across multiple licenses','Track physical holdings','Manage binding schedules','Define cataloging standards']),'answer'=>'Compare terms across multiple licenses','explanation'=>'Matrices simplify comparison of access rights, restrictions, and costs.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>7,'question'=>'Which acquisition practice helps mitigate budget fluctuations?','choices'=>json_encode(['Multi-year agreements','Annual renewals only','Cancel all standing orders','Bind all new books']),'answer'=>'Multi-year agreements','explanation'=>'Long-term deals lock in pricing and stabilize budgeting.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>7,'question'=>'What is the function of embargo monitoring?','choices'=>json_encode(['Track release dates for new publications','Cancel outdated items','Catalog new titles','Weed collections']),'answer'=>'Track release dates for new publications','explanation'=>'Monitoring embargoes ensures timely access to newly published content.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>7,'question'=>'Which report assists in identifying high-value but low-usage items?','choices'=>json_encode(['Cost-per-use analysis','Binding report','Shelf reading log','Cataloging backlog']),'answer'=>'Cost-per-use analysis','explanation'=>'This analysis highlights items with high cost relative to their usage.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>7,'question'=>'Which process ensures e-resource link redirects remain functional?','choices'=>json_encode(['Link redirection management','Approval plan update','Weeding','Shelf analysis']),'answer'=>'Link redirection management','explanation'=>'Managing redirects maintains persistent access URLs after migrations.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>7,'question'=>'What does a claim frequency report track?','choices'=>json_encode(['Number of claims over time','Shelf wear','Catalog corrections','Binding jobs']),'answer'=>'Number of claims over time','explanation'=>'Claim frequency indicates reliability of serial deliveries.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>7,'question'=>'Which procurement method is most suited for high-value single items?','choices'=>json_encode(['Request-for-quote (RFQ)','Approval plan','DDA','Standing order']),'answer'=>'Request-for-quote (RFQ)','explanation'=>'RFQs solicit competitive bids for expensive or specialized items.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>7,'question'=>'Which term describes licensing of multiple titles under one agreement?','choices'=>json_encode(['Bundled licensing','Pay-per-title','DDA','Firm order']),'answer'=>'Bundled licensing','explanation'=>'Bundles group multiple resources for a combined licensing agreement.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>7,'question'=>'What is the impact of perpetual access embargoes?','choices'=>json_encode(['Limits immediate perpetual rights','Reduces binding needs','Enhances catalog metadata','Accelerates approvals']),'answer'=>'Limits immediate perpetual rights','explanation'=>'Embargo delays when perpetual access rights commence.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>7,'question'=>'Which evaluation method uses focus groups for selection feedback?','choices'=>json_encode(['Focus group discussions','Binding trials','Shelf reading','Weeding panel']),'answer'=>'Focus group discussions','explanation'=>'Focus groups gather qualitative insights from user cohorts.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>7,'question'=>'Which automation reduces manual invoice entry errors?','choices'=>json_encode(['EDI invoice integration','Approval profile','Budget reconciliation','Weeding automation']),'answer'=>'EDI invoice integration','explanation'=>'Automating invoices through EDI minimizes data entry mistakes.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>7,'question'=>'What is the benefit of usage caps in license agreements?','choices'=>json_encode(['Control costs based on usage','Improve binding quality','Simplify cataloging','Weed collections']),'answer'=>'Control costs based on usage','explanation'=>'Caps prevent budgets from exceeding predefined usage thresholds.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>7,'question'=>'Which document defines e-resource authentication protocols?','choices'=>json_encode(['Authentication profile','Physical inventory','Approval plan','Selection log']),'answer'=>'Authentication profile','explanation'=>'Profiles outline methods like IP, VPN, and proxy for access.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>7,'question'=>'What is the role of a claim aging report?','choices'=>json_encode(['Measure time since claim submission','Track catalog requests','Monitor binding timelines','Weeding schedule']),'answer'=>'Measure time since claim submission','explanation'=>'Aging reports highlight outstanding claims requiring follow-up.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

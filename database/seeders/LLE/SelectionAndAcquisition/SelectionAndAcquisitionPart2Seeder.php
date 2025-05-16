<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart2Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>2,'question'=>'What is a blanket order in acquisitions?','choices'=>json_encode(['A standing order for multiple titles','A single copy purchase','Approval plan','Demand-driven model']),'answer'=>'A standing order for multiple titles','explanation'=>'Blanket orders allow bundling of titles over a period under one contract.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>2,'question'=>'Which report helps identify low-use materials for weeding?','choices'=>json_encode(['Circulation statistics','Approval plan profile','Budget report','Order summary']),'answer'=>'Circulation statistics','explanation'=>'Analysis of circulation data highlights underused items eligible for weeding.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>2,'question'=>'What is firm order processing?','choices'=>json_encode(['Manual ordering of specified titles','Automated approval plan','Demand-driven purchase','Subscription renewal']),'answer'=>'Manual ordering of specified titles','explanation'=>'Firm orders require selectors to identify and place orders for each item individually.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>2,'question'=>'Which mechanism controls purchasing within budget limits?','choices'=>json_encode(['Encumbrance accounting','Weeding policy','OPAC holds','Binding schedule']),'answer'=>'Encumbrance accounting','explanation'=>'Encumbrance systems reserve funds at order time, preventing budget overruns.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>2,'question'=>'What role do vendor performance evaluations play?','choices'=>json_encode(['Assess reliability and quality of service','Determine shelving location','Catalogue new materials','Bind serials']),'answer'=>'Assess reliability and quality of service','explanation'=>'Regular vendor reviews inform renewal decisions and procurement strategies.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>2,'question'=>'Which standard pricing model is based on institutional FTE count?','choices'=>json_encode(['Consortial pricing','Net price','List price','Patron-driven selection']),'answer'=>'Consortial pricing','explanation'=>'Consortial agreements often set costs relative to participating institution size.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>2,'question'=>'What is the purpose of a bid list?','choices'=>json_encode(['Invite vendors to quote','Weed outdated materials','Catalog new acquisitions','Track usage']),'answer'=>'Invite vendors to quote','explanation'=>'Bid lists solicit competitive pricing before placing major orders.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>2,'question'=>'Which document authorizes payment after invoice approval?','choices'=>json_encode(['Purchase order','Selection memo','Weeding report','Acquisition profile']),'answer'=>'Purchase order','explanation'=>'Purchase orders confirm price and terms and trigger invoicing and payment.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>2,'question'=>'What is a profile in approval plan selection?','choices'=>json_encode(['Preset criteria defining desired materials','Library floor map','Budget allocation','Circulation report']),'answer'=>'Preset criteria defining desired materials','explanation'=>'Profiles specify subject areas, formats, and thresholds for vendor shipments.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>2,'question'=>'Which acquisition metric tracks time from order to shelf?','choices'=>json_encode(['Turnaround time','Cost per use','Approval rate','Binding cost']),'answer'=>'Turnaround time','explanation'=>'Turnaround measures efficiency of acquisition workflows.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>2,'question'=>'Which report assists in forecasting future purchases?','choices'=>json_encode(['Usage trends report','Bindery schedule','OPAC search log','Vendor catalog']),'answer'=>'Usage trends report','explanation'=>'Analyzing past usage helps predict next period’s demand.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>2,'question'=>'What does DDA stand for in acquisitions?','choices'=>json_encode(['Demand-Driven Acquisition','Direct Data Analysis','Digital Delivery Access','Distributed Document Archiving']),'answer'=>'Demand-Driven Acquisition','explanation'=>'DDA purchases materials based on actual patron requests, reducing upfront costs.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>2,'question'=>'Which criterion is least relevant for e-resource selection?','choices'=>json_encode(['Physical binding quality','Platform stability','User access models','License terms']),'answer'=>'Physical binding quality','explanation'=>'Binding is irrelevant for electronic resources; other factors determine suitability.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>2,'question'=>'What is the function of a materials budget policy?','choices'=>json_encode(['Define fund allocations by format and department','Catalog items','Track circulation','Manage binding']),'answer'=>'Define fund allocations by format and department','explanation'=>'Budget policies guide selectors on spending priorities and allocations.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>2,'question'=>'Which step follows selection in the acquisition cycle?','choices'=>json_encode(['Ordering','Cataloging','Shelving','Weeding']),'answer'=>'Ordering','explanation'=>'Once materials are selected, the next step is to place orders with vendors.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>2,'question'=>'Which document ensures consistency across selectors?','choices'=>json_encode(['Collection development policy','Invoice','Order form','Cataloging manual']),'answer'=>'Collection development policy','explanation'=>'The policy outlines selection criteria to maintain coherence in acquisitions.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>2,'question'=>'Which process helps reduce duplicate purchases?','choices'=>json_encode(['Vendor record matching','Weeding','Shelf reading','Keyword indexing']),'answer'=>'Vendor record matching','explanation'=>'Matching vendor records against existing holdings prevents duplicate orders.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>2,'question'=>'Which license term is critical for e-resource selection?','choices'=>json_encode(['Perpetual access','Paper quality','Shelf space','Binding type']),'answer'=>'Perpetual access','explanation'=>'Ensuring ongoing access rights is crucial when selecting electronic resources.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>2,'question'=>'Which role does metadata quality play in acquisitions?','choices'=>json_encode(['Aids discovery and integration','Determines binding cost','Sets approval profile','Weeds materials']),'answer'=>'Aids discovery and integration','explanation'=>'High-quality metadata ensures acquired materials are discoverable and interoperable.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>2,'question'=>'What is the purpose of vendor negotiation?','choices'=>json_encode(['Secure favorable terms and pricing','Define cataloging rules','Track shelving locations','Manage user fines']),'answer'=>'Secure favorable terms and pricing','explanation'=>'Negotiating with vendors helps libraries obtain the best prices and conditions.', 'created_at'=>$now,'updated_at'=>$now],
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

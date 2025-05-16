<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart8Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>8,'question'=>'Which process involves verifying serial holdings against expected issues?','choices'=>json_encode(['Serials check-in','Monograph processing','Approval profiling','Weeding']),'answer'=>'Serials check-in','explanation'=>'Check-in confirms receipt and condition of each serial issue.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>8,'question'=>'What is the primary use of an acquisitions invoice report?','choices'=>json_encode(['Track payments due','Select new materials','Bind items','Weed collections']),'answer'=>'Track payments due','explanation'=>'Invoice reports show outstanding and paid invoices for budget management.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>8,'question'=>'Which tool aids reconciliation of purchase orders and invoices?','choices'=>json_encode(['Acquisitions module in ILS','OPAC','Weeding software','Shelf reading tool']),'answer'=>'Acquisitions module in ILS','explanation'=>'Integrated modules match and reconcile orders and invoices automatically.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>8,'question'=>'What is the function of a subscription expiration alert?','choices'=>json_encode(['Notify when renewals are due','Select new titles','Catalog serials','Manage binding']),'answer'=>'Notify when renewals are due','explanation'=>'Alerts prevent lapsed subscriptions by reminding staff to renew on time.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>8,'question'=>'Which acquisition strategy focuses on core collection titles?','choices'=>json_encode(['Core collection building','DDA','Approval plan','Weeding']),'answer'=>'Core collection building','explanation'=>'Core building ensures essential titles are acquired based on standards or benchmarks.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>8,'question'=>'What is the key benefit of multiple source quotes?','choices'=>json_encode(['Better pricing through competition','Faster binding','Reduced cataloging time','Simplified shelving']),'answer'=>'Better pricing through competition','explanation'=>'Soliciting quotes from multiple vendors can lower purchase costs.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>8,'question'=>'Which report identifies outstanding claim items older than a specified period?','choices'=>json_encode(['Claim aging report','Usage report','Weeding report','Budget report']),'answer'=>'Claim aging report','explanation'=>'Aging reports highlight claims pending beyond expected resolution time.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>8,'question'=>'Which step ensures accuracy of vendor shipments before processing?','choices'=>json_encode(['Verification of packing lists','Cataloging','Weeding','Patron surveys']),'answer'=>'Verification of packing lists','explanation'=>'Matching received items to packing lists prevents errors and missing items.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>8,'question'=>'What does a budget utilization percentage indicate?','choices'=>json_encode(['Proportion of budget spent','Number of items shelved','Binding rate','Cataloging completion']),'answer'=>'Proportion of budget spent','explanation'=>'This metric shows how much of the allocated funds have been committed or expended.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>8,'question'=>'Which factor is critical when evaluating a new vendor?','choices'=>json_encode(['Service reliability','Book cover design','Shelf labels','OPAC theme']),'answer'=>'Service reliability','explanation'=>'Reliable delivery, accurate invoicing, and good communication are key vendor traits.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>8,'question'=>'What is the role of digital rights management (DRM) in e-resources?','choices'=>json_encode(['Control usage according to license','Bind digital items','Catalog e-books','Weed digital archives']),'answer'=>'Control usage according to license','explanation'=>'DRM enforces license terms like printing and sharing restrictions.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>8,'question'=>'Which report helps forecast upcoming subscription renewals?','choices'=>json_encode(['Renewal forecast report','Usage trend','Claim frequency','Shelf analysis']),'answer'=>'Renewal forecast report','explanation'=>'Forecasting reports list upcoming expirations to plan for renewals.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>8,'question'=>'What is standing order cancellation?','choices'=>json_encode(['Stopping automatic receipt of serials','Canceling monographs','Binding stops','Weeding stops']),'answer'=>'Stopping automatic receipt of serials','explanation'=>'Cancellation halts further shipments under a standing order plan.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>8,'question'=>'Which metric is useful for evaluating e-book turnaways?','choices'=>json_encode(['Denied access count','Shelf usage','Binding cost','Cataloging delay']),'answer'=>'Denied access count','explanation'=>'Turnaway counts show unmet user demand for e-books due to licensing limits.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>8,'question'=>'What does the term copy cataloging imply?','choices'=>json_encode(['Using existing bibliographic records','Creating new classification','Binding copies','Weeding duplicate titles']),'answer'=>'Using existing bibliographic records','explanation'=>'Copy cataloging imports records from bibliographic utilities to save effort.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>8,'question'=>'Which clause limits digital interlibrary loan of e-resources?','choices'=>json_encode(['License ILL clause','Perpetual access','Embargo','Concurrent user clause']),'answer'=>'License ILL clause','explanation'=>'Some licenses prohibit or restrict e-resource sharing via ILL.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>8,'question'=>'Which system component integrates acquisitions and cataloging workflows?','choices'=>json_encode(['Integrated library system','OPAC','Digital repository','Binding module']),'answer'=>'Integrated library system','explanation'=>'ILS modules streamline data flow between ordering, receiving, and cataloging.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>8,'question'=>'Which practice supports budget control through encumbrance releases?','choices'=>json_encode(['Cancel unused orders before year-end','Bind all items','Weed frequently','Automate cataloging']),'answer'=>'Cancel unused orders before year-end','explanation'=>'Releasing encumbrances frees funds for other uses.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>8,'question'=>'What is the impact of exchange rate fluctuations on acquisitions?','choices'=>json_encode(['Affects cost of foreign currency purchases','Delays cataloging','Improves shelf placement','Reduces need for claims']),'answer'=>'Affects cost of foreign currency purchases','explanation'=>'Libraries buying internationally must account for currency risk.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>8,'question'=>'Which report tracks shelf-ready processing status?','choices'=>json_encode(['Processing status report','Usage report','Weeding report','Claim report']),'answer'=>'Processing status report','explanation'=>'These reports monitor labeling, covering, and other prep tasks before shelving.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

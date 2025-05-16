<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart6Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>6,'question'=>'Which report helps analyze monograph turnover rates?','choices'=>json_encode(['Circulation turnover report','Approval plan report','Weeding list','Budget summary']),'answer'=>'Circulation turnover report','explanation'=>'This report shows how often monographs circulate over a period.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>6,'question'=>'What is the primary benefit of patron-driven acquisition?','choices'=>json_encode(['Reduces unneeded purchases','Improves cataloging speed','Enhances binding durability','Automates shelving']),'answer'=>'Reduces unneeded purchases','explanation'=>'PDA ensures purchases align with actual user demand.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>6,'question'=>'Which system automates invoice reconciliation?','choices'=>json_encode(['Electronic Data Interchange','Approval plan','OPAC','Weeding module']),'answer'=>'Electronic Data Interchange','explanation'=>'EDI matches purchase orders to invoices electronically.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>6,'question'=>'What is bibliographic utility?','choices'=>json_encode(['Shared cataloging service','Binding vendor','Shelving plan','Weeding policy']),'answer'=>'Shared cataloging service','explanation'=>'Utilities like OCLC provide shared MARC records to libraries.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>6,'question'=>'Which factor most influences e-resource renewal decisions?','choices'=>json_encode(['Usage statistics','Print binding costs','Shelf arrangement','Cataloging delays']),'answer'=>'Usage statistics','explanation'=>'High usage supports renewal; low usage may lead to cancellation.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>6,'question'=>'What is the role of the subscription agent?','choices'=>json_encode(['Manage serials orders','Bind new books','Catalog monographs','Process interlibrary loans']),'answer'=>'Manage serials orders','explanation'=>'Agents handle negotiations, claims, and renewals with publishers.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>6,'question'=>'Which clause in vendor contracts addresses price escalation?','choices'=>json_encode(['Inflation adjustment clause','Cancellation clause','Access rights clause','Shelf-ready clause']),'answer'=>'Inflation adjustment clause','explanation'=>'This clause allows price changes based on economic indicators.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>6,'question'=>'What is the benefit of consolidation of serial subscriptions?','choices'=>json_encode(['Volume discount','Fewer catalog records','Less shelf space','Reduced weeding']),'answer'=>'Volume discount','explanation'=>'Bundling multiple serials often yields cost savings.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>6,'question'=>'Which tool ensures license compliance for e-resources?','choices'=>json_encode(['License management system','Approval plan','Budget spreadsheet','Circulation system']),'answer'=>'License management system','explanation'=>'These systems track terms, user counts, and access rights.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>6,'question'=>'What does the term gap analysis refer to?','choices'=>json_encode(['Identifying missing subjects in collections','Reviewing binding gaps','Catalog errors','Shelving misplaced items']),'answer'=>'Identifying missing subjects in collections','explanation'=>'Gap analysis compares holdings to desired profiles to guide acquisitions.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>6,'question'=>'Which metric helps assess serials claim effectiveness?','choices'=>json_encode(['Claim success rate','Budget utilization','Cataloging completion','Shelf turnover']),'answer'=>'Claim success rate','explanation'=>'This measures the proportion of missing issues successfully claimed.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>6,'question'=>'What is a coaxial subscription model?','choices'=>json_encode(['Multi-year subscription at fixed rate','Single year only','Print-only subscription','Digital-only subscription']),'answer'=>'Multi-year subscription at fixed rate','explanation'=>'Coaxial models lock in pricing for multiple years, protecting against inflation.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>6,'question'=>'Which acquisition approach prioritizes local authors?','choices'=>json_encode(['Community selection','Approval plan','DDA','Firm order']),'answer'=>'Community selection','explanation'=>'Selectors focus on materials by or about local authors to support community interests.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>6,'question'=>'Which document outlines budget allocations by fund?','choices'=>json_encode(['Chart of accounts','Order form','License agreement','Batch report']),'answer'=>'Chart of accounts','explanation'=>'Charts define how funds are allocated across budget lines.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>6,'question'=>'What is the purpose of a binding slip?','choices'=>json_encode(['Authorize and track binding work','Select titles','Manage invoices','Process claims']),'answer'=>'Authorize and track binding work','explanation'=>'Binding slips specify items to be bound and track their status.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>6,'question'=>'Which process reduces multiple invoices into one payment?','choices'=>json_encode(['Consolidated invoicing','EDI','Approval plan','Budget reconciliation']),'answer'=>'Consolidated invoicing','explanation'=>'Vendors can combine multiple orders into a single invoice to simplify payment.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>6,'question'=>'Which strategy enhances collection diversity?','choices'=>json_encode(['Multicultural selection','Budget cuts','Weeding','Binding']),'answer'=>'Multicultural selection','explanation'=>'Actively selecting works representing diverse perspectives enriches collections.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>6,'question'=>'Which acquisition process element addresses copyright clearance?','choices'=>json_encode(['Rights negotiation','Selection','Binding','Cataloging']),'answer'=>'Rights negotiation','explanation'=>'Libraries must secure permissions or licenses for copyrighted materials.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>6,'question'=>'What does a cancellation log track?','choices'=>json_encode(['Titles canceled and reasons','New acquisitions','Binding requests','Cataloging errors']),'answer'=>'Titles canceled and reasons','explanation'=>'Cancellation logs document discontinued subscriptions and underlying reasons.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>6,'question'=>'Which evaluation assesses electronic resource usability?','choices'=>json_encode(['Usability testing','Circulation report','Shelf reading','Binding quality']),'answer'=>'Usability testing','explanation'=>'Testing with users evaluates interface design and ease of access.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart5Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>5,'question'=>'What is shelf analysis in collection development?','choices'=>json_encode(['Reviewing physical placement and usage','Ordering new titles','Binding older materials','Circulation assessment']),'answer'=>'Reviewing physical placement and usage','explanation'=>'Shelf analysis evaluates organization and identifies gaps or redundancies in collections.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>5,'question'=>'Which method determines user needs through surveys?','choices'=>json_encode(['Patron surveys','Vendor profiles','Binding reports','Weeding schedules']),'answer'=>'Patron surveys','explanation'=>'Surveys collect feedback directly from users to guide selection.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>5,'question'=>'What does cost-per-circulation measure?','choices'=>json_encode(['Cost divided by number of checkouts','Budget allocation','Shelf space per item','Average binding cost']),'answer'=>'Cost divided by number of checkouts','explanation'=>'This metric assesses value by comparing purchase cost to actual use.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>5,'question'=>'Which licensing term addresses interlibrary loan?','choices'=>json_encode(['ILL permissions clause','Perpetual access','Concurrent user limit','Embargo period']),'answer'=>'ILL permissions clause','explanation'=>'Some e-resource licenses specify whether sharing with other libraries is allowed.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>5,'question'=>'What is the role of demand-driven acquisition in monograph collection?','choices'=>json_encode(['Purchase upon patron request','Buy entire publisher list','Discard rarely used items','Bind print books']),'answer'=>'Purchase upon patron request','explanation'=>'DDA for monographs triggers acquisition only when users request titles.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>5,'question'=>'Which analysis helps balance print and electronic resources?','choices'=>json_encode(['Format mix analysis','Binding analysis','Vendor scorecards','Cataloging rate']),'answer'=>'Format mix analysis','explanation'=>'Comparing usage across formats guides resource allocation decisions.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>5,'question'=>'What does perpetual access guarantee?','choices'=>json_encode(['Continued access after license expiration','Immediate purchase upon request','Automatic catalog updates','Print binding']),'answer'=>'Continued access after license expiration','explanation'=>'Perpetual access ensures resource availability even post-subscription.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>5,'question'=>'Which selection tool provides title approval based on editor picks?','choices'=>json_encode(['Publisher approval plan','Book sale flyer','Donation offer','OPAC listing']),'answer'=>'Publisher approval plan','explanation'=>'Approval plans use selections curated by publishers edited for libraries.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>5,'question'=>'What is the advantage of short-term loan models?','choices'=>json_encode(['Reduced acquisition cost','Permanent ownership','Immediate shelf placement','Simplified cataloging']),'answer'=>'Reduced acquisition cost','explanation'=>'Short-term loans allow temporary access at lower cost than purchases.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>5,'question'=>'Which process ensures e-resource link integrity?','choices'=>json_encode(['Link maintenance and validation','Batch ordering','Weeding','Shelf analysis']),'answer'=>'Link maintenance and validation','explanation'=>'Regular link checking prevents broken access for electronic content.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>5,'question'=>'What is the function of usage threshold in DDA?','choices'=>json_encode(['Trigger purchase after usage count','Limit binding operations','Define cataloging levels','Schedule weeding']),'answer'=>'Trigger purchase after usage count','explanation'=>'Thresholds determine when a resource moves from trial to purchased based on use.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>5,'question'=>'Which system supports automated invoice matching?','choices'=>json_encode(['EDI','Approval plan software','Weeding module','OPAC']),'answer'=>'EDI','explanation'=>'Electronic Data Interchange automates matching orders to invoices.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>5,'question'=>'What does shelf concentration indicate?','choices'=>json_encode(['Distribution of subjects on shelves','Binding density','Cataloging errors','Patron circulation patterns']),'answer'=>'Distribution of subjects on shelves','explanation'=>'Shelf concentration analysis helps identify over- or under-representation of topics.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>5,'question'=>'Which performance indicator assesses vendor fulfillment accuracy?','choices'=>json_encode(['Order accuracy rate','Cost per use','Shelf space usage','Cataloging time']),'answer'=>'Order accuracy rate','explanation'=>'Accuracy rate monitors correct and complete deliveries by vendors.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>5,'question'=>'What is the impact of embargo in acquisition?','choices'=>json_encode(['Delayed access to new content','Reduced binding costs','Enhanced cataloging metadata','Increased weeding']),'answer'=>'Delayed access to new content','explanation'=>'Embargo periods restrict access, often affecting timely resource availability.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>5,'question'=>'Which model allocates budget across academic departments?','choices'=>json_encode(['Responsibility Center Management','Approval plan','DDA','Firm order']),'answer'=>'Responsibility Center Management','explanation'=>'RCM models distribute funds based on departmental needs and usage.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>5,'question'=>'Which metric evaluates e-journal cost-effectiveness?','choices'=>json_encode(['Cost-per-download','Shelf space','Binding cost','Cataloging time']),'answer'=>'Cost-per-download','explanation'=>'Cost-per-download assesses value by relating cost to usage rates.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>5,'question'=>'Which clause in licenses covers archival rights?','choices'=>json_encode(['Archival storage clause','ILL permission','Perpetual access','Embargo']),'answer'=>'Archival storage clause','explanation'=>'Archival clauses define how and where content may be preserved.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>5,'question'=>'What is the purpose of a title list in acquisitions?','choices'=>json_encode(['Provide list of available titles for review','Weed existing collections','Track catalog errors','Manage binding']),'answer'=>'Provide list of available titles for review','explanation'=>'Title lists help selectors evaluate and choose titles offered by vendors.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>5,'question'=>'Which process adjusts approval plan profiles based on feedback?','choices'=>json_encode(['Profile tuning','Weeding','Cataloging edits','Binding updates']),'answer'=>'Profile tuning','explanation'=>'Profiles are regularly adjusted to better match evolving collection needs.', 'created_at'=>$now,'updated_at'=>$now],
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

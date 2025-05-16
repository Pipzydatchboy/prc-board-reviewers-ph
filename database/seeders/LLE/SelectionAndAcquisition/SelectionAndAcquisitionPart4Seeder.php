<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart4Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>4,'question'=>'What is the main purpose of vendor-supplied copy cataloging?','choices'=>json_encode(['Reduce local cataloging workload','Enhance binding quality','Manage shelving','Improve circulation']),'answer'=>'Reduce local cataloging workload','explanation'=>'Vendor copy cataloging uses provider records to expedite cataloging processes.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>4,'question'=>'Which step follows ordering in the acquisitions workflow?','choices'=>json_encode(['Receiving','Selection','Weeding','Budget allocation']),'answer'=>'Receiving','explanation'=>'After orders are placed, items are received and checked for accuracy and condition.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>4,'question'=>'What does MARC 852 field specify?','choices'=>json_encode(['Local call number and location','Subject headings','Publisher details','Electronic access URL']),'answer'=>'Local call number and location','explanation'=>'Field 852 contains data about item location and classification in holdings records.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>4,'question'=>'Which report tracks unpaid invoices?','choices'=>json_encode(['Open invoice report','Usage report','Weeding report','Selection log']),'answer'=>'Open invoice report','explanation'=>'Open invoice reports list invoices pending payment, aiding financial control.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>4,'question'=>'What is the purpose of an electronic resource maintenance plan?','choices'=>json_encode(['Ensure ongoing access and link integrity','Bind e-books','Shelf print journals','Catalog digital files']),'answer'=>'Ensure ongoing access and link integrity','explanation'=>'Maintenance plans include monitoring links, renewals, and license compliance.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>4,'question'=>'Which tool assists in batch ordering for approval plans?','choices'=>json_encode(['Acquisition management software','OPAC','Weeding module','Budget spreadsheet']),'answer'=>'Acquisition management software','explanation'=>'Software can automate approval plan triggers and batch order generation.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>4,'question'=>'What is the role of the receiving note (MARC field 588)?','choices'=>json_encode(['Document reception conditions and history','Subject headings','Funding information','Call number']),'answer'=>'Document reception conditions and history','explanation'=>'Field 588 records notes about item receipt, condition, or historical information.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>4,'question'=>'Which metric measures average shelf life of materials?','choices'=>json_encode(['Retention analysis','Turnover rate','Cost per use','Approval rate']),'answer'=>'Retention analysis','explanation'=>'Retention analysis assesses how long items remain in the collection before removal.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>4,'question'=>'What does the term encumbrance mean in acquisitions?','choices'=>json_encode(['Financial commitment to a purchase order','Physical binding','Removal of item','Cataloging error']),'answer'=>'Financial commitment to a purchase order','explanation'=>'Encumbrance reserves budget funds when an order is placed.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>4,'question'=>'Which document lists all items received and processed?','choices'=>json_encode(['Receiving report','Selection policy','Weeding schedule','Budget plan']),'answer'=>'Receiving report','explanation'=>'Receiving reports track shipments and ensure completeness before invoicing.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>4,'question'=>'What is the advantage of outsourcing cataloging?','choices'=>json_encode(['Access to expert records and reduced local workload','Lower binding costs','Improved shelving','Increased circulation']),'answer'=>'Access to expert records and reduced local workload','explanation'=>'Outsourcing to professional catalogers ensures high-quality records and saves local staff time.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>4,'question'=>'Which budget control technique uses encumbrance release?','choices'=>json_encode(['Adjust orders when funds are refunded','Binding reimbursement','Selection adjustment','Shelving delay']),'answer'=>'Adjust orders when funds are refunded','explanation'=>'Releasing encumbrances restores budget when orders are canceled or refunds issued.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>4,'question'=>'What is the purpose of a claim process for serials?','choices'=>json_encode(['Request missing issues','Cancel subscription','Weed serials','Catalog new issues']),'answer'=>'Request missing issues','explanation'=>'Claims ensure that missing or delayed serial issues are followed up with vendors.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>4,'question'=>'Which tool tracks subscription renewal dates?','choices'=>json_encode(['Renewal calendar','OPAC','Weeding report','Selection log']),'answer'=>'Renewal calendar','explanation'=>'Calendars or alert systems help manage renewal deadlines to prevent service lapses.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>4,'question'=>'Which MARC field records binding location and status?','choices'=>json_encode(['949','852','500','580']),'answer'=>'949','explanation'=>'Field 949 is a local holdings field often used to indicate binding details.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>4,'question'=>'What is a claim claimed rate in serials management?','choices'=>json_encode(['Percentage of issues successfully claimed','Error rate in catalog records','User satisfaction rate','Binding failure rate']),'answer'=>'Percentage of issues successfully claimed','explanation'=>'Claim claimed rate measures effectiveness of serials claim process.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>4,'question'=>'Which function does EDI serve in acquisitions?','choices'=>json_encode(['Automate order and invoice transactions','Cataloging','Weeding','Shelving']),'answer'=>'Automate order and invoice transactions','explanation'=>'EDI streamlines communication between library systems and vendors.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>4,'question'=>'What is the benefit of demand-driven acquisition for e-books?','choices'=>json_encode(['Budget optimization by purchasing only when needed','Faster binding','Better catalog records','Weeding efficiency']),'answer'=>'Budget optimization by purchasing only when needed','explanation'=>'DDA reduces upfront spending by acquiring titles based on actual demand.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>4,'question'=>'Which vendor performance metric evaluates delivery timeliness?','choices'=>json_encode(['On-time delivery rate','Budget variance','Cataloging proficiency','Weeding rate']),'answer'=>'On-time delivery rate','explanation'=>'Timeliness is crucial for maintaining continuous resource availability.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>4,'question'=>'What does the MARC field 506 specify?','choices'=>json_encode(['Restrictions on access','Call number','Publisher','Physical description']),'answer'=>'Restrictions on access','explanation'=>'Field 506 records information about special access restrictions for resources.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

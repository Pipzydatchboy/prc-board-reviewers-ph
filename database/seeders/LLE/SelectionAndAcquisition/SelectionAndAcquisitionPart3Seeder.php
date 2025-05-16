<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart3Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>3,'question'=>'What is the first step in the electronic resource acquisition process?','choices'=>json_encode(['Needs assessment','Vendor negotiation','Cataloging','Binding']),'answer'=>'Needs assessment','explanation'=>'Identifying user and institutional needs guides e-resource selection.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>3,'question'=>'Which agreement governs access rights for e-journals?','choices'=>json_encode(['License agreement','Purchase order','Donation agreement','Interlibrary loan agreement']),'answer'=>'License agreement','explanation'=>'License agreements define usage terms for electronic journals.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>3,'question'=>'Which model charges based on actual usage for e-resources?','choices'=>json_encode(['Pay-per-view','Subscription','One-time purchase','Gift model']),'answer'=>'Pay-per-view','explanation'=>'Pay-per-view or transactional models bill libraries per access or download.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>3,'question'=>'What does COUNTER report measure?','choices'=>json_encode(['E-resource usage','Print book wear','OPAC searches','Shelving time']),'answer'=>'E-resource usage','explanation'=>'COUNTER provides standardized metrics for electronic resource usage.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>3,'question'=>'Which metadata standard is critical for discovery of digital objects?','choices'=>json_encode(['Dublin Core','MARC','Dewey Decimal','LCSH']),'answer'=>'Dublin Core','explanation'=>'Dublin Core is widely used for metadata in digital collections.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>3,'question'=>'What is the purpose of a trial access period?','choices'=>json_encode(['Evaluate resource suitability','Bind new arrivals','Weed outdated material','Catalog new items']),'answer'=>'Evaluate resource suitability','explanation'=>'Trials allow librarians to assess content relevance before purchase.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>3,'question'=>'Which financial metric is essential in DDA models?','choices'=>json_encode(['Cost-per-click','Binding cost','Cataloging time','Shelf space']),'answer'=>'Cost-per-click','explanation'=>'Cost-per-click or cost-per-view helps manage budgets in demand-driven acquisitions.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>3,'question'=>'What does MARC field 856 indicate in e-resource records?','choices'=>json_encode(['Electronic access information','Physical description','Series title','Subject heading']),'answer'=>'Electronic access information','explanation'=>'Field 856 is used to provide URLs and other access details for digital resources.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>3,'question'=>'Which license clause limits simultaneous users?','choices'=>json_encode(['Concurrent user restriction','Perpetual rights','Print copy clause','Interlibrary loan clause']),'answer'=>'Concurrent user restriction','explanation'=>'Licenses often specify how many users can access simultaneously.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>3,'question'=>'What is the significance of perpetual access rights?','choices'=>json_encode(['Ensures long-term availability','Reduces binding needs','Improves shelving','Enhances cataloging']),'answer'=>'Ensures long-term availability','explanation'=>'Perpetual access rights guarantee continued access after subscription ends.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>3,'question'=>'Which report aids in reviewing vendor-supplied materials?','choices'=>json_encode(['Proof of performance report','Budget report','Circulation report','Weeding report']),'answer'=>'Proof of performance report','explanation'=>'Performance reports from vendors confirm delivery and adherence to agreements.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>3,'question'=>'What does the term embargo period refer to in acquisition?','choices'=>json_encode(['Delay before new content becomes available','Time to process print orders','Binding cycle','Cataloging lag']),'answer'=>'Delay before new content becomes available','explanation'=>'Embargo periods restrict access to newly published content for a specified time.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>3,'question'=>'Which factor is key in selecting a discovery platform?','choices'=>json_encode(['Integration with existing systems','Binding quality','Print location','Shelf space']),'answer'=>'Integration with existing systems','explanation'=>'Discovery tools must integrate with ILS, link resolvers, and authentication systems.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>3,'question'=>'What is the role of link resolvers?','choices'=>json_encode(['Connect metadata to full text','Manage budget allocations','Bind serials','Process invoices']),'answer'=>'Connect metadata to full text','explanation'=>'Link resolvers direct users from citations in discovery interfaces to available full text.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>3,'question'=>'Which document specifies e-resource authentication methods?','choices'=>json_encode(['License agreement','Purchase order','Approval profile','Weeding policy']),'answer'=>'License agreement','explanation'=>'Agreements define whether IP, proxy or authentication is used for access.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>3,'question'=>'What is COUNTER 5 REG 1?','choices'=>json_encode(['Number of successful item requests by month','Number of print copies','Number of catalog entries','Number of circulation transactions']),'answer'=>'Number of successful item requests by month','explanation'=>'COUNTER 5 REG 1 reports how many times content items were accessed.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>3,'question'=>'Which tool helps track license compliance?','choices'=>json_encode(['License management system','Approval plan','Budget spreadsheet','Circulation system']),'answer'=>'License management system','explanation'=>'Specialized systems monitor terms, user counts, and compliance metrics.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>3,'question'=>'What does Open Access mean for acquisitions?','choices'=>json_encode(['Free to access without subscription','Print only access','Shelving access','Paid access']),'answer'=>'Free to access without subscription','explanation'=>'Open Access content is freely accessible, affecting budget decisions.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>3,'question'=>'Which metric helps evaluate e-book usage?','choices'=>json_encode(['Download counts','Shelving location','Binding cost','Call number']),'answer'=>'Download counts','explanation'=>'Downloads are a primary usage indicator for electronic books.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>3,'question'=>'Which term describes user-driven purchase triggers?','choices'=>json_encode(['Patron-driven acquisition','Standing order','Approval plan','Firm order']),'answer'=>'Patron-driven acquisition','explanation'=>'Patron-driven acquisition empowers users to initiate purchases based on demand.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

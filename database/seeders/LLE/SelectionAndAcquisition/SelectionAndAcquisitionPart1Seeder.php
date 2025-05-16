<?php

namespace Database\Seeders\LLE\SelectionAndAcquisition;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SelectionAndAcquisitionPart1Seeder extends Seeder
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
        ['subject_id'=>54,'part'=>1,'question'=>'What is the primary goal of selection in library acquisition?','choices'=>json_encode(['To evaluate and choose materials that meet user needs','To catalog materials','To bind and process items','To shelve new books']),'answer'=>'To evaluate and choose materials that meet user needs','explanation'=>'Selection identifies resources most appropriate for the library’s collection and users.', 'created_at'=>$now,'updated_at'=>$now],
        // 2
        ['subject_id'=>54,'part'=>1,'question'=>'Which tool provides reviews and professional opinions for selection?','choices'=>json_encode(['Book review journals','Circulation reports','OPAC search','Budget spreadsheets']),'answer'=>'Book review journals','explanation'=>'Professional review sources like Library Journal aid selectors in decision-making.', 'created_at'=>$now,'updated_at'=>$now],
        // 3
        ['subject_id'=>54,'part'=>1,'question'=>'What does weeding refer to in collection management?','choices'=>json_encode(['Removing outdated or damaged materials','Acquiring new materials','Cataloging items','Processing invoices']),'answer'=>'Removing outdated or damaged materials','explanation'=>'Weeding maintains collection relevance and quality by discarding unneeded items.', 'created_at'=>$now,'updated_at'=>$now],
        // 4
        ['subject_id'=>54,'part'=>1,'question'=>'Which approach balances cost, demand, and content quality?','choices'=>json_encode(['Balanced selection','Selective weeding','Automated acquisition','Random purchase']),'answer'=>'Balanced selection','explanation'=>'Balanced selection uses multiple criteria to build a well-rounded collection.', 'created_at'=>$now,'updated_at'=>$now],
        // 5
        ['subject_id'=>54,'part'=>1,'question'=>'What is the purpose of a standing order plan?','choices'=>json_encode(['Automatically acquire each new issue of selected serials','Cancel unwanted subscriptions','Track user fines','Manage binding']),'answer'=>'Automatically acquire each new issue of selected serials','explanation'=>'Standing orders ensure continuous receipt of designated serial titles.', 'created_at'=>$now,'updated_at'=>$now],
        // 6
        ['subject_id'=>54,'part'=>1,'question'=>'Which standard detail is essential on an acquisition order?','choices'=>json_encode(['Bibliographic information and pricing','Call number','User’s name','Shelf location']),'answer'=>'Bibliographic information and pricing','explanation'=>'Accurate bibliographic details and cost enable correct ordering and budgeting.', 'created_at'=>$now,'updated_at'=>$now],
        // 7
        ['subject_id'=>54,'part'=>1,'question'=>'What is approval plan selection?','choices'=>json_encode(['Vendor supplies materials based on preset criteria','Librarian handpicks each title','User recommends purchases','Automated binding service']),'answer'=>'Vendor supplies materials based on preset criteria','explanation'=>'Approval plans streamline selection by having vendors send items matching library profiles.', 'created_at'=>$now,'updated_at'=>$now],
        // 8
        ['subject_id'=>54,'part'=>1,'question'=>'Which factor does not directly influence selection?','choices'=>json_encode(['Binding technique','User needs','Budget','Collection policy']),'answer'=>'Binding technique','explanation'=>'Binding is a processing concern, not a primary selection criterion.', 'created_at'=>$now,'updated_at'=>$now],
        // 9
        ['subject_id'=>54,'part'=>1,'question'=>'What is the role of a collection development policy?','choices'=>json_encode(['Guide selection and acquisition decisions','Organize shelving','Process acquisitions','Circulate materials']),'answer'=>'Guide selection and acquisition decisions','explanation'=>'A policy establishes criteria, scope, and responsibility for growing the collection.', 'created_at'=>$now,'updated_at'=>$now],
        // 10
        ['subject_id'=>54,'part'=>1,'question'=>'Which review source offers user-generated annotations?','choices'=>json_encode(['Online community reviews','Scholarly journals','Trade publications','Citation indexes']),'answer'=>'Online community reviews','explanation'=>'Platforms like Goodreads provide patron feedback and ratings.', 'created_at'=>$now,'updated_at'=>$now],
        // 11
        ['subject_id'=>54,'part'=>1,'question'=>'What is the purpose of an acquisitions workflow?','choices'=>json_encode(['Standardize ordering steps from selection to payment','Guide weeding','Define cataloging rules','Set shelving routines']),'answer'=>'Standardize ordering steps from selection to payment','explanation'=>'Workflows ensure efficient, accountable processing of orders and invoices.', 'created_at'=>$now,'updated_at'=>$now],
        // 12
        ['subject_id'=>54,'part'=>1,'question'=>'Which method helps track approval plan performance?','choices'=>json_encode(['Statistical analysis of usage','Manual shelving','Binding reports','OPAC listing']),'answer'=>'Statistical analysis of usage','explanation'=>'Usage data informs adjustments to approval profiles and vendor choices.', 'created_at'=>$now,'updated_at'=>$now],
        // 13
        ['subject_id'=>54,'part'=>1,'question'=>'What is firm order selection?','choices'=>json_encode(['Librarian orders each title individually after review','Vendor decides purchases','Budget is allocated automatically','User pays for items']),'answer'=>'Librarian orders each title individually after review','explanation'=>'Firm orders require manual review and individual ordering of materials.', 'created_at'=>$now,'updated_at'=>$now],
        // 14
        ['subject_id'=>54,'part'=>1,'question'=>'Which budget line is typically first exhausted?','choices'=>json_encode(['Monographs print budget','Serials budget','Binding budget','Staff training budget']),'answer'=>'Monographs print budget','explanation'=>'Monograph purchases often consume initial funds before subscriptions.', 'created_at'=>$now,'updated_at'=>$now],
        // 15
        ['subject_id'=>54,'part'=>1,'question'=>'What does shelf-ready processing include?','choices'=>json_encode(['Labeling and covering new materials','Selection criteria','Circulation status','Catalog metadata']),'answer'=>'Labeling and covering new materials','explanation'=>'Shelf-ready tasks prepare items for immediate shelving and use.', 'created_at'=>$now,'updated_at'=>$now],
        // 16
        ['subject_id'=>54,'part'=>1,'question'=>'Which metric assesses cost-effectiveness of acquisitions?','choices'=>json_encode(['Cost per use','Shelf space used','Binding cost','Processing time']),'answer'=>'Cost per use','explanation'=>'Cost per use evaluates value by dividing cost by circulation or usage counts.', 'created_at'=>$now,'updated_at'=>$now],
        // 17
        ['subject_id'=>54,'part'=>1,'question'=>'What is firm order renewal?','choices'=>json_encode(['Renewing serials issue by issue','Automatically renewing based on usage','Cancelling subscription','Approval plan update']),'answer'=>'Renewing serials issue by issue','explanation'=>'Firm order renewal requires manual renewal of each serial title.', 'created_at'=>$now,'updated_at'=>$now],
        // 18
        ['subject_id'=>54,'part'=>1,'question'=>'Which tool automates price comparison between vendors?','choices'=>json_encode(['Acquisition management software','Approval plan profile','Budget spreadsheet','OPAC']),'answer'=>'Acquisition management software','explanation'=>'Specialized software compares vendor quotes and automates ordering processes.', 'created_at'=>$now,'updated_at'=>$now],
        // 19
        ['subject_id'=>54,'part'=>1,'question'=>'Which guideline influences selection of electronic resources?','choices'=>json_encode(['COUNTER usage reports','Dewey Decimal Classification','AACR2','MARC21']),'answer'=>'COUNTER usage reports','explanation'=>'COUNTER reports provide standardized usage metrics for e-resources.', 'created_at'=>$now,'updated_at'=>$now],
        // 20
        ['subject_id'=>54,'part'=>1,'question'=>'What is the outcome of demand-driven acquisition (DDA)?','choices'=>json_encode(['Materials are purchased when users request access','All materials are acquired in advance','Materials are only borrowed','Collection is weeded']),'answer'=>'Materials are purchased when users request access','explanation'=>'DDA models trigger purchase upon user-driven demand, optimizing budgets.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

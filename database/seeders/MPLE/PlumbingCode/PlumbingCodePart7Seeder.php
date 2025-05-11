<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

$batch = [
    // 1
    ['subject_id'=>48,'part'=>7,'question'=>'What is the minimum diameter for a fixture drain serving a clothes washer?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'2 inches','explanation'=>'PRC code requires a 2" drain for washing machines to handle discharge flow.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>7,'question'=>'Which fitting is used to combine two vertical stacks underground?','choices'=>json_encode(['Sanitary tee','Double wye','Combination wye','Cross']),'answer'=>'Double wye','explanation'=>'Double wye fittings merge two stacks into one while maintaining flow.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>7,'question'=>'According to code, what is the required trap arm slope?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/4 in/ft','explanation'=>'Trap arms must slope at least 1/4" per foot to ensure proper drainage.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>7,'question'=>'What is the fixture unit value assigned to a bidet?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Bidets are rated at 2 fixture units per PRC drainage tables.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>7,'question'=>'Which vent type can serve multiple fixture units in a wet-vent system?','choices'=>json_encode(['Circuit vent','Studor vent','Stack vent','Relief vent']),'answer'=>'Circuit vent','explanation'=>'Circuit vents allow group venting of multiple fixtures within a common wet vent.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>7,'question'=>'What is the minimum burial depth for a building storm sewer to prevent freezing?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']),'answer'=>'300 mm','explanation'=>'PRC code requires 300 mm cover to protect storm lines against frost.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>7,'question'=>'Which device is mandatory at the inlet of a grease interceptor?','choices'=>json_encode(['Trap primer','Oil/water separator','Flow control device','Vent']),'answer'=>'Flow control device','explanation'=>'Flow control regulates inflow rate to grease interceptors.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>7,'question'=>'What is the required maximum spacing between supports on horizontal copper water tubing?','choices'=>json_encode(['600 mm','900 mm','1200 mm','1500 mm']),'answer'=>'900 mm','explanation'=>'Copper tubing must be supported at least every 900 mm to prevent sagging.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>7,'question'=>'Which test is used for pressure rating of new gas service lines?','choices'=>json_encode(['Hydrostatic test','Leak detection test','Air test','Vacuum test']),'answer'=>'Leak detection test','explanation'=>'Gas lines are tested with electronic leak detection at working pressure.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>7,'question'=>'What is the fixture unit rating for an electric water cooler?','choices'=>json_encode(['0.5 FU','1 FU','1.5 FU','2 FU']),'answer'=>'0.5 FU','explanation'=>'Electric coolers are intermittent-use devices rated at 0.5 FU.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>7,'question'=>'What is the minimum clearance for vent terminals from a ridge?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']),'answer'=>'450 mm','explanation'=>'Vent terminals must be at least 450 mm above the highest roof penetration within 2 m.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>7,'question'=>'Which material is prohibited for potable water piping inside buildings?','choices'=>json_encode(['Lead','Brass','Copper','PEX']),'answer'=>'Lead','explanation'=>'Lead piping is banned due to health hazards.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>7,'question'=>'What is the maximum developed length for a 3-inch trap arm?','choices'=>json_encode(['5 ft','6 ft','7 ft','8 ft']),'answer'=>'6 ft','explanation'=>'3-inch trap arms cannot exceed 6 feet according to code.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>7,'question'=>'Which fixture requires a vent within 30 inches of its trap weir?','choices'=>json_encode(['Bathtub','Toilet','Shower','Kitchen sink']),'answer'=>'Bathtub','explanation'=>'Bathtubs require venting no more than 30" from the trap.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>7,'question'=>'What slope is required for a 2-inch condensate drain from an air handler?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'Requires 1/8" per foot to clear condensate efficiently.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>7,'question'=>'Which valve type is preferred for fine flow regulation in domestic water lines?','choices'=>json_encode(['Globe valve','Gate valve','Ball valve','Check valve']),'answer'=>'Globe valve','explanation'=>'Globe valves provide precise flow control.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>7,'question'=>'Which fixture unit load does a dental laboratory sink require?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Dental lab sinks are rated at 2 FU for drainage design.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>7,'question'=>'What is the required test for new sanitary sewer laterals?','choices'=>json_encode(['Air test','Vacuum test','Hydrostatic test','Smoke test']),'answer'=>'Vacuum test','explanation'=>'Vacuum testing ensures airtightness of sewer laterals.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>7,'question'=>'Which device protects against surge pressure in potable water systems?','choices'=>json_encode(['Air chamber','Surge tank','Pressure relief valve','Check valve']),'answer'=>'Surge tank','explanation'=>'Surge tanks absorb pressure spikes to protect piping.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>7,'question'=>'What is the minimum size for a vent serving a gas appliance?','choices'=>json_encode(['1¼ inches','1½ inches','2 inches','3 inches']),'answer'=>'1½ inches','explanation'=>'Gas appliance vents require at least 1½" diameter.','created_at'=>$now,'updated_at'=>$now],
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

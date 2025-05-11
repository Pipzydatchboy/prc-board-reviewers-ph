<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart4Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>4,'question'=>'What minimum clearance does the PRC Plumbing Code require between a potable water line and a sewer line?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']),'answer'=>'300 mm','explanation'=>'Ensures separation to prevent contamination of drinking water.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>4,'question'=>'Which fitting does the code mandate for connecting a branch drain to a horizontal piping?','choices'=>json_encode(['Sanitary tee','Combination wye','45° elbow','90° elbow']),'answer'=>'Combination wye','explanation'=>'Provides smooth flow and venting at branch connections.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>4,'question'=>'What is the maximum distance permitted from the trap to the vent for a fixture with a 2-inch trap arm?','choices'=>json_encode(['2 ft','3 ft','4 ft','5 ft']),'answer'=>'4 ft','explanation'=>'Prevents siphoning by limiting trap arm before vent.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>4,'question'=>'According to code, what is the minimum diameter for a building storm sewer?','choices'=>json_encode(['3 inches','4 inches','6 inches','8 inches']),'answer'=>'6 inches','explanation'=>'Handles large stormwater flows effectively.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>4,'question'=>'Which device is required at every change of direction greater than 45° in a horizontal drain?','choices'=>json_encode(['Cleanout','Vent','Trap','Air admittance valve']),'answer'=>'Cleanout','explanation'=>'Allows maintenance access at significant bends.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>4,'question'=>'What is the minimum slope for a 6-inch horizontal drainage pipe according to PRC code?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'Ensures self-cleansing velocity in larger drains.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>4,'question'=>'Which fixture unit value is assigned to a barometer sink?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'1 FU','explanation'=>'Low discharge, rated at 1 fixture unit.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>4,'question'=>'What vent size does the code require for a group of eight fixture units?','choices'=>json_encode(['3 inches','4 inches','5 inches','6 inches']),'answer'=>'4 inches','explanation'=>'4-inch vent serves up to 12 fixture units.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>4,'question'=>'Which backflow prevention method is the strongest for high-hazard connections?','choices'=>json_encode(['Air gap','Double check valve','Vacuum breaker','Reduced pressure zone device']),'answer'=>'Air gap','explanation'=>'Physical separation offers the highest protection level.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>4,'question'=>'What is the minimum trap seal depth required for kitchen sinks?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'3 inches','explanation'=>'Prevents sewer gas entry under normal usage.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>4,'question'=>'According to PRC code, how often must backflow preventers be tested?','choices'=>json_encode(['Bi-annually','Annually','Every two years','Every five years']),'answer'=>'Annually','explanation'=>'Ensures devices operate correctly to protect potable supply.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>4,'question'=>'What is the minimum diameter for a building drain serving a commercial kitchen?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'4 inches','explanation'=>'Handles high volumes and grease-laden waste.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>4,'question'=>'Which test is required for newly installed potable water mains?','choices'=>json_encode(['Hydrostatic test','Air test','Smoke test','Vacuum test']),'answer'=>'Hydrostatic test','explanation'=>'Checks for leaks under water pressure.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>4,'question'=>'What is the required clearance above cleanouts for access?','choices'=>json_encode(['300 mm','450 mm','600 mm','900 mm']),'answer'=>'450 mm','explanation'=>'Allows tool clearance for cleaning operations.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>4,'question'=>'Which code specifies materials and methods for plumbing installations?','choices'=>json_encode(['PRC Plumbing Code','Building Code','Electrical Code','Fire Code']),'answer'=>'PRC Plumbing Code','explanation'=>'Sets the standard for plumbing design and installation.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>4,'question'=>'What minimum size is required for a vent on a 1.5-inch trap arm?','choices'=>json_encode(['1¼ inches','1½ inches','2 inches','2½ inches']),'answer'=>'1½ inches','explanation'=>'Ensures proper air flow for the trap arm.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>4,'question'=>'Which fixture requires a revent according to PRC code?','choices'=>json_encode(['Floor drain','Toilet','Kitchen sink','Shower']),'answer'=>'Floor drain','explanation'=>'Floor drains often need reventing to prevent trap depletion.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>4,'question'=>'What is the minimum distance between a septic tank and a potable well?','choices'=>json_encode(['5 m','10 m','15 m','20 m']),'answer'=>'15 m','explanation'=>'Prevents bacterial contamination of drinking water.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>4,'question'=>'Which material is prohibited for vent piping exterior to the building?','choices'=>json_encode(['PVC','Copper','CPVC','ABS']),'answer'=>'ABS','explanation'=>'ABS is not UV stable and degrades outdoors.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>4,'question'=>'What slope is required for a 2-inch horizontal waste line?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/4 in/ft','explanation'=>'Ensures rapid flow and prevents solids buildup.', 'created_at'=>$now,'updated_at'=>$now],
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

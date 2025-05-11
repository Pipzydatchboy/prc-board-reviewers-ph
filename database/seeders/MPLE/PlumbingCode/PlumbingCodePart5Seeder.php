<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart5Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>5,'question'=>'What is the minimum diameter for a building sewer cleanout?','choices'=>json_encode(['3 inches','4 inches','6 inches','8 inches']),'answer'=>'4 inches','explanation'=>'Cleanouts must match the building sewer diameter, minimum 4 inches.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>5,'question'=>'According to PRC code, what is the fixture unit rating of a shower and tub combination?','choices'=>json_encode(['2 FU','3 FU','4 FU','5 FU']),'answer'=>'3 FU','explanation'=>'A shower and tub combo is rated at 3 fixtures units.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>5,'question'=>'Which vent piping material is required above grade?','choices'=>json_encode(['PVC','Copper','Galvanized steel','PE']),'answer'=>'Copper','explanation'=>'Copper vents are required above grade for UV resistance.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>5,'question'=>'What is the required depth for a sanitary sewer trench bedding?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']),'answer'=>'300 mm','explanation'=>'300 mm of sand or fine material bedding protects pipe.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>5,'question'=>'Which device must be installed at the base of a sink trap arm?','choices'=>json_encode(['Cleanout','Vent','Trap primer','Check valve']),'answer'=>'Cleanout','explanation'=>'Cleanouts at trap arms provide access for clearing blockages.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>5,'question'=>'What is the minimum size of a vent serving a three-fixture bathroom group?','choices'=>json_encode(['2 inches','2½ inches','3 inches','4 inches']),'answer'=>'2 inches','explanation'=>'A 2" vent handles up to four fixture units per PRC code.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>5,'question'=>'Which fitting allows inspection and clearing in vertical stacks?','choices'=>json_encode(['Combination cleanout','Stack vent','Hub plug','Sanitary tee']),'answer'=>'Combination cleanout','explanation'=>'Combination cleanouts provide both vertical and horizontal access.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>5,'question'=>'According to code, what is the maximum developed length of a 2-inch trap arm?','choices'=>json_encode(['5 ft','6 ft','7 ft','8 ft']),'answer'=>'6 ft','explanation'=>'Trap arms of 2" piping cannot exceed 6 ft.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>5,'question'=>'What slope is required for a 3-inch horizontal drain?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'3" drains require at least 1/8" per foot slope.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>5,'question'=>'Which vent configuration serves two fixtures with one vent pipe?','choices'=>json_encode(['Dual vent','Wet vent','Circuit vent','Cross vent']),'answer'=>'Wet vent','explanation'=>'Wet vents carry both waste and venting for multiple fixtures.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>5,'question'=>'What is the required distance between a vent terminal and a property line?','choices'=>json_encode(['300 mm','900 mm','1.5 m','3 m']),'answer'=>'900 mm','explanation'=>'Vent terminals must be at least 900 mm from property lines.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>5,'question'=>'According to PRC code, what test is specified for grease interceptors?','choices'=>json_encode(['Water tightness test','Smoke test','Air test','Vacuum test']),'answer'=>'Water tightness test','explanation'=>'Grease interceptors must be tested by flood (water) test.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>5,'question'=>'Which device prevents sewer gas entry in floor drains?','choices'=>json_encode(['Trap primer','Air admittance valve','Backwater valve','Cleanout']),'answer'=>'Trap primer','explanation'=>'Trap primers maintain water seal in infrequently used drains.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>5,'question'=>'What is the minimum diameter for a fixture drain serving a dishwasher?','choices'=>json_encode(['1½ inches','2 inches','2½ inches','3 inches']),'answer'=>'2 inches','explanation'=>'2" drains handle dishwasher discharge loads.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>5,'question'=>'Which backflow prevention device uses mechanical check valves only?','choices'=>json_encode(['Double check valve','Reduced pressure zone device','Vacuum breaker','Air gap']),'answer'=>'Double check valve','explanation'=>'Double check assemblies use two check valves for protection.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>5,'question'=>'What is the required clearance around water heater gas control valves?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']),'answer'=>'450 mm','explanation'=>'Allows safe service and operation of gas controls.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>5,'question'=>'What is the minimum fixture unit rating for a floor mounted urinal?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Floor mounted urinals are rated 2 FU for drainage design.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>5,'question'=>'Which material is required for water service lines under roads?','choices'=>json_encode(['Ductile iron','PVC','Copper','PE']),'answer'=>'Ductile iron','explanation'=>'Ductile iron provides strength for buried service under roadways.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>5,'question'=>'According to code, what is the allowable vertical offset for a relief vent?','choices'=>json_encode(['1 ft','2 ft','3 ft','4 ft']),'answer'=>'3 ft','explanation'=>'Maximum 3 ft offset to prevent water sealing of vent.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>5,'question'=>'What is the required minimum diameter of a building stormwater downspout?','choices'=>json_encode(['75 mm','100 mm','125 mm','150 mm']),'answer'=>'100 mm','explanation'=>'Ensures adequate roof drainage capacity.','created_at'=>$now,'updated_at'=>$now],
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

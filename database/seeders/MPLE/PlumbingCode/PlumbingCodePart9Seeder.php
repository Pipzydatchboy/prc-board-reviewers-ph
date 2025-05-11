<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart9Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>9,'question'=>'According to the PRC Plumbing Code, what is the minimum size of a vent for a group of twelve fixture units?','choices'=>json_encode(['4 inches','5 inches','6 inches','3 inches']),'answer'=>'4 inches','explanation'=>'A 4" vent is required for up to 12 fixture units.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>9,'question'=>'Which fitting is required to clean a horizontal offset in a drain line?','choices'=>json_encode(['Yoke cleanout','Combination wye','Cleanout','Plugged hub']),'answer'=>'Yoke cleanout','explanation'=>'Yoke cleanouts allow access in horizontal offsets for maintenance.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>9,'question'=>'What is the fixture unit rating for a standard laundry tray?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Laundry trays are rated at 2 fixture units for drainage purposes.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>9,'question'=>'Which device prevents negative pressure in a drainage system?','choices'=>json_encode(['Air admittance valve','Revent','Relief vent','Vent stack']),'answer'=>'Air admittance valve','explanation'=>'Air admittance valves allow air intake to prevent trap siphonage.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>9,'question'=>'What is the maximum distance a vertical vent may rise before offsetting?','choices'=>json_encode(['10 feet','12 feet','15 feet','8 feet']),'answer'=>'10 feet','explanation'=>'Vents over 10 feet must be offset to prevent icing and ensure opening.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>9,'question'=>'What slope is required for a 4-inch horizontal fixture drain?','choices'=>json_encode(['1/8 in/ft','1/16 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'Maintains self-cleaning velocity in 4" drains.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>9,'question'=>'Which backflow prevention device must be installed on a lawn sprinkler system?','choices'=>json_encode(['Double check valve','Atmospheric vacuum breaker','Pressure vacuum breaker','Air gap']),'answer'=>'Atmospheric vacuum breaker','explanation'=>'AVBs are required on sprinkler systems to prevent back-siphonage.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>9,'question'=>'What is the minimum trap seal depth for a floor sink serving a commercial kitchen?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'3 inches','explanation'=>'Commercial floor sinks require deeper seals to handle heavy use.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>9,'question'=>'Which material is prohibited for vent piping exposed above grade?','choices'=>json_encode(['ABS','PVC','CPVC','Copper']),'answer'=>'ABS','explanation'=>'ABS cannot be used above grade due to UV degradation.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>9,'question'=>'Which fixture unit rating is assigned to an emergency eyewash station?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'3 FU','explanation'=>'Eyewash stations have high flow and are rated at 3 fixture units.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>9,'question'=>'What is the minimum clear distance required around a cleanout?','choices'=>json_encode(['450 mm','300 mm','600 mm','900 mm']),'answer'=>'450 mm','explanation'=>'Allows adequate access for cleaning tools.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>9,'question'=>'What is the required overlap when soldering copper water joints?','choices'=>json_encode(['1/16 inch','1/8 inch','1/4 inch','3/8 inch']),'answer'=>'1/8 inch','explanation'=>'Ensures sufficient solder penetration for strength.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>9,'question'=>'Which test is specified for backflow preventers on potable systems?','choices'=>json_encode(['Differential pressure test','Air test','Smoke test','Hydrostatic test']),'answer'=>'Differential pressure test','explanation'=>'Confirms operation of internal check valves and relief components.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>9,'question'=>'Which vent configuration allows multiple sanitary fixtures to share a common vent?','choices'=>json_encode(['Wet vent','Combination vent','Circuit vent','Revent']),'answer'=>'Wet vent','explanation'=>'Wet vents carry both drain waste and vent functions for grouped fixtures.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>9,'question'=>'What is the minimum required trap seal depth for a dishwasher tailpiece?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'2 inches','explanation'=>'Ensures seal maintenance for appliance drains.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>9,'question'=>'Which fitting is used to connect a trap to the fixture outlet on a vertical plane?','choices'=>json_encode(['Trap adapter','P-trap','S-trap','Flex connector']),'answer'=>'Trap adapter','explanation'=>'Adapters secure trap to fixture outlet stub.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>9,'question'=>'Which safety device must be provided on commercial sink drains?','choices'=>json_encode(['Strainer','Air gap','Check valve','Backwater valve']),'answer'=>'Air gap','explanation'=>'Prevents sink cross-connections from contaminating supply.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>9,'question'=>'What is the minimum diameter for a gas appliance connector?','choices'=>json_encode(['3/8 inch','1/2 inch','3/4 inch','1 inch']),'answer'=>'1/2 inch','explanation'=>'Standard connectors for residential gas appliances are 1/2 inch.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>9,'question'=>'Which code chapter covers fixture fixtures and their clearances?','choices'=>json_encode(['Chapter 4','Chapter 5','Chapter 6','Chapter 7']),'answer'=>'Chapter 4','explanation'=>'Chapter 4 specifies fixture types and installation requirements.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>9,'question'=>'What is the required minimum diameter for a building drain from a commercial kitchen?','choices'=>json_encode(['3 inches','4 inches','6 inches','8 inches']),'answer'=>'6 inches','explanation'=>'6" drains handle high flows and solids from commercial kitchens.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

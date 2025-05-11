<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart2Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>2,'question'=>'What is the minimum diameter for a vent serving a bathroom group of four fixtures?','choices'=>json_encode(['2 inches','3 inches','4 inches','5 inches']),'answer'=>'3 inches','explanation'=>'A 3" vent is required for four fixture units according to PRC code.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>2,'question'=>'According to the code, how far must a water closet cleanout be located from the fixture?','choices'=>json_encode(['Within 3 ft','Within 6 ft','Within 10 ft','Any distance']),'answer'=>'Within 3 ft','explanation'=>'Cleanouts must be within 3 feet of water closets for maintenance access.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>2,'question'=>'Which test is specified for verifying sewer gas-tight connections in plumbing fixtures?','choices'=>json_encode(['Smoke test','Hydrostatic test','Vacuum test','Air test']),'answer'=>'Smoke test','explanation'=>'Smoke testing reveals gas leaks in closed piping and fixtures.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>2,'question'=>'What is the maximum allowable distance between fixture and group vent connection?','choices'=>json_encode(['5 ft','6 ft','8 ft','10 ft']),'answer'=>'6 ft','explanation'=>'Trap arm length to group vent cannot exceed 6 feet to prevent siphoning.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>2,'question'=>'Which material is required for potable water fittings in the PRC code?','choices'=>json_encode(['Lead-free brass','Cast iron','PVC','Galvanized steel']),'answer'=>'Lead-free brass','explanation'=>'All potable water fittings must be lead-free per public health requirements.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>2,'question'=>'What is the minimum size of the relief vent for a 3-inch horizontal fixture branch?','choices'=>json_encode(['2 inches','3 inches','4 inches','5 inches']),'answer'=>'2 inches','explanation'=>'A 2" relief vent is the minimum for a 3" branch to relieve pressure.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>2,'question'=>'After installation, septic tanks must be tested by which method?','choices'=>json_encode(['Flood test','Vacuum test','Smoke test','Air test']),'answer'=>'Flood test','explanation'=>'Flood testing ensures watertight integrity by filling with water.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>2,'question'=>'According to PRC code, what is the minimum width of a chase enclosing drainage pipes?','choices'=>json_encode(['4 inches','6 inches','8 inches','10 inches']),'answer'=>'6 inches','explanation'=>'Chase must clear pipe diameter plus insulation, minimum 6".','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>2,'question'=>'Which fixture requires an accessible cleanout at the base of its vertical stack?','choices'=>json_encode(['Floor drain','Lavatory','Kitchen sink','Water closet']),'answer'=>'Floor drain','explanation'=>'Vertical floor drains must have a cleanout at the stack base.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>2,'question'=>'What is the required minimum pitch for underground sanitary sewers?','choices'=>json_encode(['0.3%','0.5%','0.75%','1.0%']),'answer'=>'0.5%','explanation'=>'A 0.5% slope (1/8" per ft) provides self-cleansing velocity.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>2,'question'=>'Which backflow device must be tested annually by a certified tester?','choices'=>json_encode(['Reduced pressure zone device','Double check valve','Atmospheric vacuum breaker','Air gap']),'answer'=>'Reduced pressure zone device','explanation'=>'RPZ assemblies require annual certification testing per code.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>2,'question'=>'What is the maximum distance a fixture trap arm can run horizontally before venting?','choices'=>json_encode(['5 ft','6 ft','7 ft','8 ft']),'answer'=>'6 ft','explanation'=>'Trap arm lengths for 2½" and larger cannot exceed 6 feet.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>2,'question'=>'According to code, a cleanout is required at changes in direction exceeding what angle?','choices'=>json_encode(['22½°','45°','60°','90°']),'answer'=>'45°','explanation'=>'Directional changes over 45° require cleanouts for maintenance.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>2,'question'=>'Which fixture unit value is assigned to a laundry tray?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Laundry trays are rated at 2 fixture units for drainage.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>2,'question'=>'What type of test is required for potable water distribution systems?','choices'=>json_encode(['Hydrostatic test','Smoke test','Air test','Vacuum test']),'answer'=>'Hydrostatic test','explanation'=>'Water systems are pressure-tested to 150% of operating pressure.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>2,'question'=>'Which vent must extend a minimum of 6 inches above the roof surface?','choices'=>json_encode(['Stack vent','Relief vent','Circuit vent','Combination vent']),'answer'=>'Stack vent','explanation'=>'Stack vents terminate above the roof by at least 6" to disperse gases.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>2,'question'=>'What is the fixture unit load for a dishwater disposal unit?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Disposals add drainage load and are rated at 2 FU.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>2,'question'=>'Which code-required device prevents trap siphonage in floor drains?','choices'=>json_encode(['Trap primer','Air admittance valve','Check valve','Backwater valve']),'answer'=>'Trap primer','explanation'=>'Primers maintain trap seal depth in infrequently used traps.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>2,'question'=>'What is the minimum clear spacing around a floor drain for fixture installation?','choices'=>json_encode(['12 inches','18 inches','24 inches','30 inches']),'answer'=>'18 inches','explanation'=>'Provides access and prevents obstruction around floor drains.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>2,'question'=>'Which material is mandated for all potable water piping exposed to sunlight?','choices'=>json_encode(['Copper','CPVC','PVC','PEX']),'answer'=>'CPVC','explanation'=>'CPVC resists UV degradation for exposed water lines.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart6Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>6,'question'=>'What is the minimum trap seal depth for a backflow preventer test port?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'3 inches','explanation'=>'A 3-inch trap seal ensures proper trap priming during testing.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>6,'question'=>'Which fitting is used to transition from cast iron to PVC in drainage systems?','choices'=>json_encode(['Fernco coupling','Dielectric union','Flange adapter','Hub adapter']),'answer'=>'Fernco coupling','explanation'=>'Fernco flexible couplings join dissimilar materials effectively.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>6,'question'=>'According to code, how many fixture units can a 2-inch horizontal drain serve?','choices'=>json_encode(['3 FU','5 FU','8 FU','10 FU']),'answer'=>'8 FU','explanation'=>'A 2-inch drain handles up to 8 fixture units per PRC code tables.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>6,'question'=>'What is the required minimum diameter for a relief vent on a group vent system?','choices'=>json_encode(['1¼ inches','1½ inches','2 inches','3 inches']),'answer'=>'1½ inches','explanation'=>'Relief vents must be sized appropriately; 1½-inch minimum for group vents.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>6,'question'=>'Which material is approved for underground drainage of acidic waste?','choices'=>json_encode(['CPVC','PVC','Cast iron','HDPE']),'answer'=>'HDPE','explanation'=>'High-density polyethylene resists acidic corrosion underground.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>6,'question'=>'What test is required for fire suppression water mains?','choices'=>json_encode(['Hydrostatic test','Smoke test','Vacuum test','Air test']),'answer'=>'Hydrostatic test','explanation'=>'Fire water mains are hydrostatically tested to ensure integrity.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>6,'question'=>'What is the minimum overlap length for solvent-welded PVC joints?','choices'=>json_encode(['1 inch','1½ inches','2 inches','2½ inches']),'answer'=>'1½ inches','explanation'=>'Ensures proper bonding area as per code guidelines.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>6,'question'=>'Which device protects boiler return lines from low-water conditions?','choices'=>json_encode(['Low-water cutoff','Pressure gauge','Check valve','Air vent']),'answer'=>'Low-water cutoff','explanation'=>'Prevents boiler operation under unsafe low-water conditions.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>6,'question'=>'Which fixture unit value does a water trough count as per PRC code?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'1 FU','explanation'=>'Low-flow fixtures like troughs are rated at 1 fixture unit.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>6,'question'=>'What is the required test for cross-connected potable lines?','choices'=>json_encode(['Air test','Differential pressure test','Smoke test','Hydrostatic test']),'answer'=>'Differential pressure test','explanation'=>'Verifies backflow device functionality on potable lines.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>6,'question'=>'For a 3-inch vertical stack, what is the minimum cleanout requirement?','choices'=>json_encode(['Top of stack','Base of stack','Every 30 feet','No cleanout required']),'answer'=>'Base of stack','explanation'=>'Cleanout required at the base of all vertical stacks.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>6,'question'=>'What is the minimum height above roof for a vent terminal?','choices'=>json_encode(['6 inches','12 inches','24 inches','36 inches']),'answer'=>'6 inches','explanation'=>'Vent terminals extend at least 6 inches above roof to prevent backflow.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>6,'question'=>'Which test measures the airtightness of combustion air ducts?','choices'=>json_encode(['Smoke test','Air test','Hydrostatic test','Vacuum test']),'answer'=>'Smoke test','explanation'=>'Smoke detects leaks in combustion air ductwork.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>6,'question'=>'What is the fixture unit rating for a janitor sink?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Janitor sinks are typically rated at 2 fixture units.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>6,'question'=>'Which device requires an air gap when connected to potable systems?','choices'=>json_encode(['Kitchen sink','Washing machine','Laundry tray','All of the above']),'answer'=>'All of the above','explanation'=>'All these fixtures require air gaps to prevent backflow.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>6,'question'=>'What is the minimum fixture unit load for a dental unit?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'3 FU','explanation'=>'Dental chairs generate significant drainage loads.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>6,'question'=>'Which test ensures the integrity of a grease interceptor under pressure?','choices'=>json_encode(['Air test','Water tightness test','Vacuum test','Hydrostatic test']),'answer'=>'Water tightness test','explanation'=>'Flood tests confirm no leakage under water pressure.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>6,'question'=>'What is the required slope for condensate drain lines?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'Prevents water pooling and ensures proper drainage.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>6,'question'=>'Which component alleviates thermal expansion in long hot water runs?','choices'=>json_encode(['Expansion tank','Air chamber','Loop vent','Trap primer']),'answer'=>'Expansion tank','explanation'=>'Absorbs pressure changes due to thermal expansion.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>6,'question'=>'What is the minimum diameter for a building tailpiece serving a bar sink?','choices'=>json_encode(['1¼ inches','1½ inches','2 inches','2½ inches']),'answer'=>'1¼ inches','explanation'=>'Matches fixture outlet size as per code requirements.','created_at'=>$now,'updated_at'=>$now],
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

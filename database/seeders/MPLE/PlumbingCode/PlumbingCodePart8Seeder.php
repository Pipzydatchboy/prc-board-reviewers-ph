<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart8Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>8,'question'=>'What is the minimum required air gap for a faucet spout?','choices'=>json_encode(['2 times spout diameter','4 times spout diameter','1 inch','2 inches']),'answer'=>'2 times spout diameter','explanation'=>'Air gap must be twice the diameter to prevent backflow.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>8,'question'=>'Which valve is used to prevent backflow in lawn irrigation systems?','choices'=>json_encode(['Atmospheric vacuum breaker','Pressure vacuum breaker','Double check valve','Reduced pressure zone device']),'answer'=>'Pressure vacuum breaker','explanation'=>'PVB prevents backflow under pressure in irrigation lines.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>8,'question'=>'What is the minimum number of cleanouts required for a 100-foot run of building sewer?','choices'=>json_encode(['1','2','3','4']),'answer'=>'2','explanation'=>'Cleanouts every 50 feet; 100 feet requires two cleanouts.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>8,'question'=>'According to code, what is the minimum slope for a 2-inch condensate trap arm?','choices'=>json_encode(['1/4 in/ft','1/8 in/ft','1/16 in/ft','1/2 in/ft']),'answer'=>'1/4 in/ft','explanation'=>'Ensures condensate does not accumulate in the trap.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>8,'question'=>'Which material is forbidden for potable water piping underground?','choices'=>json_encode(['Lead','Copper','PVC','HDPE']),'answer'=>'Lead','explanation'=>'Lead is banned due to toxicity concerns.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>8,'question'=>'What is the fixture unit rating for a standard pet wash station?','choices'=>json_encode(['2 FU','3 FU','4 FU','5 FU']),'answer'=>'3 FU','explanation'=>'Pet stations are high-flow, rated at 3 fixture units.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>8,'question'=>'What is the maximum horizontal distance between two cleanouts?','choices'=>json_encode(['30 feet','40 feet','50 feet','60 feet']),'answer'=>'50 feet','explanation'=>'Cleanouts are required every 50 feet for maintenance.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>8,'question'=>'Which vent application uses a 45-degree street elbow?','choices'=>json_encode(['Offset vent','Relief vent','Revent','Circuit vent']),'answer'=>'Offset vent','explanation'=>'45-degree street elbows offset vents around obstacles.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>8,'question'=>'What slope is required for a 1.5-inch washdown hose drain?','choices'=>json_encode(['1/8 in/ft','1/4 in/ft','1/2 in/ft','1 in/ft']),'answer'=>'1/4 in/ft','explanation'=>'Washdown drains require steeper slope to clear solids.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>8,'question'=>'Which device maintains trap water seal in floor drains?','choices'=>json_encode(['Trap primer','Air admittance valve','Backwater valve','Cleanout']),'answer'=>'Trap primer','explanation'=>'Primers add water to traps to preserve seals.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>8,'question'=>'What is the minimum diameter for a house service water meter?','choices'=>json_encode(['15 mm','20 mm','25 mm','32 mm']),'answer'=>'20 mm','explanation'=>'Standard residential meters are 20 mm minimum.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>8,'question'=>'Which fitting is required on a potable water line to transition to a flex connector?','choices'=>json_encode(['Threaded adapter','Flange adapter','Compression coupling','Union']),'answer'=>'Compression coupling','explanation'=>'Compression fittings provide secure, leak-free transitions.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>8,'question'=>'What is the fixture unit rating for a mop sink?','choices'=>json_encode(['2 FU','3 FU','4 FU','5 FU']),'answer'=>'2 FU','explanation'=>'Mop sinks are rated at 2 fixture units for drainage.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>8,'question'=>'What is the required minimum cover for underground PVC drainage?','choices'=>json_encode(['6 inches','12 inches','18 inches','24 inches']),'answer'=>'12 inches','explanation'=>'Protects PVC pipe from surface loads.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>8,'question'=>'Which device prevents siphoning in vertical vent stacks?','choices'=>json_encode(['Vent check valve','Trap primer','Air admittance valve','Flow control device']),'answer'=>'Vent check valve','explanation'=>'Check valves stop reverse airflow but allow discharge of gases.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>8,'question'=>'Which test ensures integrity of new rainwater harvesting systems?','choices'=>json_encode(['Water tightness test','Smoke test','Air test','Vacuum test']),'answer'=>'Water tightness test','explanation'=>'Rainwater systems are flood tested to check for leaks.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>8,'question'=>'Which code section governs installation of roof drains?','choices'=>json_encode(['Chapter 11','Chapter 12','Chapter 13','Chapter 14']),'answer'=>'Chapter 11','explanation'=>'Roof drainage is detailed in Chapter 11 of the PRC code.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>8,'question'=>'What is the minimum diameter for a mechanical vent terminator?','choices'=>json_encode(['1 inch','2 inches','3 inches','4 inches']),'answer'=>'2 inches','explanation'=>'Mechanical vents need at least 2" diameter for performance.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>8,'question'=>'What slope is required for a 4-inch trench drain?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'Prevents standing water in trench drains.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>8,'question'=>'Which backflow device must be tagged after testing?','choices'=>json_encode(['Reduced pressure zone device','Double check valve','Atmospheric vacuum breaker','Air gap']),'answer'=>'Reduced pressure zone device','explanation'=>'RPZ devices must have test tags indicating test date and results.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

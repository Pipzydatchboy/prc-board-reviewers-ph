<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart7Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>7,'question'=>'A kitchen faucet leaks steadily from the aerator. What practical action stops it?','choices'=>json_encode(['Clean or replace aerator','Tighten handle','Replace cartridge','Install new faucet']),'answer'=>'Clean or replace aerator','explanation'=>'Mineral buildup in aerators causes leaks; cleaning or replacing resolves it.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>7,'question'=>'You need to extend a copper line but lack fittings. What practical method joins sections?','choices'=>json_encode(['Use push‑fit couplings','Solder directly','Use pipe clamps','Use thread sealant']),'answer'=>'Use push‑fit couplings','explanation'=>'Push‑fit couplings provide secure, tool‑free connections when fittings are limited.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>7,'question'=>'A shower head sprays unevenly. What practical check should you perform first?','choices'=>json_encode(['Clean shower head nozzles','Replace shower arm','Increase water pressure','Install flow restrictor']),'answer'=>'Clean shower head nozzles','explanation'=>'Mineral deposits block nozzles; cleaning restores even spray.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>7,'question'=>'Your drain snake gets stuck in a 2” line. What practical technique frees it?','choices'=>json_encode(['Reverse rotation','Add lubricant','Pull harder','Flush with water']),'answer'=>'Reverse rotation','explanation'=>'Reversing the snake motor frees cables jammed in blockages.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>7,'question'=>'A washing machine drain overflows at high flow. What practical upgrade helps?','choices'=>json_encode(['Install larger standpipe','Add an air gap','Elevate trap','Install secondary drain']),'answer'=>'Install larger standpipe','explanation'=>'Increasing standpipe diameter prevents overflow under heavy discharge.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>7,'question'=>'During soldering, flux drips onto tile. What practical step avoids damage?','choices'=>json_encode(['Cover area with foil','Use low‑splash flux','Wipe immediately','Proceed carefully']),'answer'=>'Cover area with foil','explanation'=>'Covering surfaces protects finishes from corrosive flux drips.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>7,'question'=>'A floor drain trap is dry. What practical temporary measure restores seal?','choices'=>json_encode(['Pour water','Add vegetable oil','Install trap primer','Use PVC foam']),'answer'=>'Pour water','explanation'=>'Filling the trap with water re‑establishes the seal until permanent solution.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>7,'question'=>'Your power snake won’t reach a deep clog. What practical modification extends reach?','choices'=>json_encode(['Add extension cable','Use drill adapter','Replace inner coil','Switch to smaller head']),'answer'=>'Add extension cable','explanation'=>'Extension cables increase reach for deeper clogs without new access points.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>7,'question'=>'You install a new toilet but it rocks. What practical fix levels it?','choices'=>json_encode(['Shim with plastic wedges','Replace flange','Adjust floor','Use longer bolts']),'answer'=>'Shim with plastic wedges','explanation'=>'Shimming under the base levels the toilet without altering floors or flanges.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>7,'question'=>'A gas line connection leaks at joint. What practical sealant should you apply?','choices'=>json_encode(['Gas-rated pipe dope','Teflon tape','Thread sealant','Silicone caulk']),'answer'=>'Gas-rated pipe dope','explanation'=>'Approved gas pipe dope seals joints without risking chemical breakdown.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>7,'question'=>'During repiping, PEX kinks around a corner. What practical method corrects it?','choices'=>json_encode(['Use a spring insert','Heat gently','Replace section','Add elbow fitting']),'answer'=>'Use a spring insert','explanation'=>'Spring supports maintain shape and prevent PEX kinks in bends.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>7,'question'=>'A water pump cycles rapidly. What practical component resolves short cycling?','choices'=>json_encode(['Install expansion tank','Add check valve','Increase pump size','Throttle valve']),'answer'=>'Install expansion tank','explanation'=>'Expansion tanks buffer pressure swings, preventing rapid cycling.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>7,'question'=>'Your camera shows roots in sewer main. What practical treatment removes them?','choices'=>json_encode(['Chemical root killer','Mechanical cutting head','Hydro jet','Replace pipe']),'answer'=>'Hydro jet','explanation'=>'High-pressure jetting cuts roots and cleans pipe without excavation.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>7,'question'=>'A backflow preventer test fails due to air leakage. What practical maintenance helps?','choices'=>json_encode(['Bleed air lines','Replace gaskets','Tighten nuts','Clean test cocks']),'answer'=>'Bleed air lines','explanation'=>'Removing trapped air stabilizes test results and seat seal.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>7,'question'=>'A sink drain emits gurgle only when washer discharges. What practical vent addition fixes it?','choices'=>json_encode(['Add air admittance valve','Increase vent diameter','Install relief vent','Add studor vent']),'answer'=>'Add air admittance valve','explanation'=>'AAVs compensate for intermittent high flows to prevent siphoning.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>7,'question'=>'You need to secure a flexible gas connector. What practical support do you use?','choices'=>json_encode(['Strap clamp','Zip tie','Wire','Pipe clip']),'answer'=>'Strap clamp','explanation'=>'Manufacturer‑approved strap clamps secure connectors per code requirements.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>7,'question'=>'During tile removal, a drain flange cracks. What practical replacement method?','choices'=>json_encode(['Use rubber flange repair kit','Weld new flange','Apply epoxy','Replace entire drain assembly']),'answer'=>'Use rubber flange repair kit','explanation'=>'Repair kits seal and reinforce cracked flanges without full drain removal.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>7,'question'=>'Hot water pressure drops intermittently. What practical check resolves it?','choices'=>json_encode(['Clean aerators','Inspect pressure regulator','Clean shower head','Bleed air']),'answer'=>'Inspect pressure regulator','explanation'=>'Regulator issues cause pressure fluctuations; inspection and adjustment stabilize.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>7,'question'=>'A rainwater downpipe leaks at joint exposed to sunlight. What practical material change helps?','choices'=>json_encode(['Use UV‑resistant PVC','Switch to copper','Use ABS','Apply UV‑stable paint']),'answer'=>'Use UV‑resistant PVC','explanation'=>'UV‑resistant PVC withstands sun exposure, preventing joint degradation.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>7,'question'=>'During bathroom remodel, space limits sink drain height. What practical modification solves alignment?','choices'=>json_encode(['Use offset P-trap','Install drop-ear elbow','Use flexible coupling','Raise sink']),'answer'=>'Use offset P-trap','explanation'=>'Offset traps adjust height alignment without major rework.', 'created_at'=>$now,'updated_at'=>$now],
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

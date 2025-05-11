<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart7Seeder extends Seeder
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
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What is the primary function of a grease trap in plumbing systems?','choices'=>json_encode(['Remove oil and grease','Filter solids','Vent gases','Regulate flow']), 'answer'=>'Remove oil and grease', 'explanation'=>'Grease traps separate fats and oils from wastewater to prevent sewer blockages.', 'created_at'=>$now,'updated_at'=>$now ],
    // 2
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which material is unacceptable for acid waste piping?','choices'=>json_encode(['PVC','Glass-lined steel','Copper','Cast iron']), 'answer'=>'Copper', 'explanation'=>'Copper reacts with acids, causing corrosion in waste lines.', 'created_at'=>$now,'updated_at'=>$now ],
    // 3
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What fixture unit load does a bar sink contribute when part of a grease trap system?','choices'=>json_encode(['0.5 FU','1 FU','1.5 FU','2 FU']), 'answer'=>'1 FU', 'explanation'=>'Bar sinks are rated at 1 fixture unit for drainage when served by grease traps.', 'created_at'=>$now,'updated_at'=>$now ],
    // 4
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which test is performed for grease interceptor tightness?','choices'=>json_encode(['Hydrostatic','Vacuum','Air','Smoke']), 'answer'=>'Hydrostatic', 'explanation'=>'Hydrostatic tests verify that grease interceptor chambers are watertight.', 'created_at'=>$now,'updated_at'=>$now ],
    // 5
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What is the minimum retention time for grease traps?','choices'=>json_encode(['15 min','30 min','45 min','60 min']), 'answer'=>'30 min', 'explanation'=>'A 30-minute retention allows adequate separation of grease.', 'created_at'=>$now,'updated_at'=>$now ],
    // 6
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which device prevents grease trap overflow?','choices'=>json_encode(['Air admittance valve','Flow control device','Backwater valve','Check valve']), 'answer'=>'Flow control device', 'explanation'=>'Flow control devices regulate inflow to grease traps to prevent overflow.', 'created_at'=>$now,'updated_at'=>$now ],
    // 7
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What is the recommended cleaning frequency for grease interceptors?','choices'=>json_encode(['Monthly','Quarterly','Bi-annually','Annually']), 'answer'=>'Monthly', 'explanation'=>'Monthly cleaning prevents grease buildup and system failure.', 'created_at'=>$now,'updated_at'=>$now ],
    // 8
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which fitting is used to connect a cleanout to vertical stacks?','choices'=>json_encode(['Combination wye','Sanitary tee','45° street elbow','90° elbow']), 'answer'=>'Combination wye', 'explanation'=>'Combination wyes provide accessible cleanouts for vertical piping.', 'created_at'=>$now,'updated_at'=>$now ],
    // 9
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What is the minimum diameter for a stormwater downspout?','choices'=>json_encode(['50 mm','75 mm','100 mm','150 mm']), 'answer'=>'75 mm', 'explanation'=>'At least 75 mm diameter handles typical roof drainage rates.', 'created_at'=>$now,'updated_at'=>$now ],
    // 10
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which component traps debris in storm drainage systems?','choices'=>json_encode(['Leaf guard','Catch basin','Strainer','Cleanout']), 'answer'=>'Catch basin', 'explanation'=>'Catch basins intercept debris before stormwater enters sewers.', 'created_at'=>$now,'updated_at'=>$now ],
    // 11
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What slope is required for roof drainage gutters?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']), 'answer'=>'1/16 in/ft', 'explanation'=>'Minimal slope directs water toward downspouts without pooling.', 'created_at'=>$now,'updated_at'=>$now ],
    // 12
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which test checks for leaks in underground storm piping?','choices'=>json_encode(['Vacuum','Hydrostatic','Smoke','Air']), 'answer'=>'Air', 'explanation'=>'Air tests detect leaks in closed storm drainage systems.', 'created_at'=>$now,'updated_at'=>$now ],
    // 13
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What is the minimum clearance between vent terminations and windows?','choices'=>json_encode(['300 mm','600 mm','900 mm','1200 mm']), 'answer'=>'900 mm', 'explanation'=>'900 mm clearance prevents sewer gas entry into buildings.', 'created_at'=>$now,'updated_at'=>$now ],
    // 14
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which valve is used for automatic drainage of roof drains in winter?','choices'=>json_encode(['Frost-proof hydrant','Air admittance valve','Check valve','Drain valve']), 'answer'=>'Drain valve', 'explanation'=>'Drain valves allow winter drainage to prevent freezing in roof drains.', 'created_at'=>$now,'updated_at'=>$now ],
    // 15
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What material is used for corrosion-resistant storm piping?','choices'=>json_encode(['PVC','Cast iron','Copper','Galvanized steel']), 'answer'=>'PVC', 'explanation'=>'PVC resists rust and is ideal for stormwater applications.', 'created_at'=>$now,'updated_at'=>$now ],
    // 16
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which component reduces splash in floor drains?','choices'=>json_encode(['Flow control device','Splash pan','Strainer','P-Trap']), 'answer'=>'Splash pan', 'explanation'=>'Splash pans dissipate energy to reduce water splash.', 'created_at'=>$now,'updated_at'=>$now ],
    // 17
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What test verifies sewer gas-tightness of fixtures?','choices'=>json_encode(['Smoke','Air','Water','Vacuum']), 'answer'=>'Smoke', 'explanation'=>'Smoke testing identifies leaks in fixture seals and traps.', 'created_at'=>$now,'updated_at'=>$now ],
    // 18
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which device vents trapped water in roof drains?','choices'=>json_encode(['Roof vent','Air admittance valve','Overflow scupper','Vent stack']), 'answer'=>'Overflow scupper', 'explanation'=>'Scuppers allow excess water to bypass drains and prevent ponding.', 'created_at'=>$now,'updated_at'=>$now ],
    // 19
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'What is the minimum pitch for horizontal storm laterals?','choices'=>json_encode(['0.2%','0.5%','1.0%','2.0%']), 'answer'=>'0.5%', 'explanation'=>'Adequate pitch prevents sediment build-up in storm laterals.', 'created_at'=>$now,'updated_at'=>$now ],
    // 20
    [ 'subject_id'=>47, 'part'=>7, 'question'=>'Which component protects downspouts from clogging?','choices'=>json_encode(['Leaf guard','Cleanout','Strainer','Catch basin']), 'answer'=>'Leaf guard', 'explanation'=>'Leaf guards prevent debris entry into downspouts.', 'created_at'=>$now,'updated_at'=>$now ],
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

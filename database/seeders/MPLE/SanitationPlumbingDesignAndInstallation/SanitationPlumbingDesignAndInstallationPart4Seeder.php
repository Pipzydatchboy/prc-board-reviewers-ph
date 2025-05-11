<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart4Seeder extends Seeder
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
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What is the minimum required clearance between potable water pipes and sewer lines? (PRC code)', 'choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']), 'answer'=>'300 mm', 'explanation'=>'Potable water lines must maintain at least 300 mm horizontal separation from sewers to prevent contamination.', 'created_at'=>$now,'updated_at'=>$now ],
    // 2
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which plumbing fixture requires a 2" minimum trap arm size? (PRC standards)', 'choices'=>json_encode(['Kitchen sink','Bathroom lavatory','Bar sink','Shower']), 'answer'=>'Kitchen sink', 'explanation'=>'Kitchen sinks require a minimum 2-inch trap arm due to volume and solids.', 'created_at'=>$now,'updated_at'=>$now ],
    // 3
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What device prevents siphoning of traps when negative pressure occurs in drainage systems?', 'choices'=>json_encode(['Air admittance valve','Backwater valve','Pressure vacuum breaker','Check valve']), 'answer'=>'Air admittance valve', 'explanation'=>'Air admittance valves allow air in without discharging sewer gases, preventing siphonage.', 'created_at'=>$now,'updated_at'=>$now ],
    // 4
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What is the minimum slope for a 6-inch horizontal soil stack? (PRC code)', 'choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']), 'answer'=>'1/8 in/ft', 'explanation'=>'Large diameter soil stacks require at least 1/8" per foot slope for proper drainage.', 'created_at'=>$now,'updated_at'=>$now ],
    // 5
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which fixture unit value is assigned to a service sink (mop basin)?', 'choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']), 'answer'=>'2 FU', 'explanation'=>'Service sinks are typically rated at 2 fixture units for drainage calculations.', 'created_at'=>$now,'updated_at'=>$now ],
    // 6
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What type of vent must extend at least 6" above the roof? (PRC standard)', 'choices'=>json_encode(['Stack vent','Vent stack','Relief vent','Circuit vent']), 'answer'=>'Vent stack', 'explanation'=>'Vent stacks terminate above the roof to allow sewer gases to disperse safely.', 'created_at'=>$now,'updated_at'=>$now ],
    // 7
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which fitting is used to connect horizontal and vertical piping at 45°?', 'choices'=>json_encode(['Wye','Tee','Long sweep elbow','Short sweep elbow']), 'answer'=>'Wye', 'explanation'=>'Wye fittings facilitate smooth transition between horizontal and vertical piping.', 'created_at'=>$now,'updated_at'=>$now ],
    // 8
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What is the standard trap seal depth range for floor drains?', 'choices'=>json_encode(['1" to 2"','2" to 4"','3" to 5"','4" to 6"']), 'answer'=>'2" to 4"', 'explanation'=>'Floor drains require a deeper trap seal, typically between 2" and 4".', 'created_at'=>$now,'updated_at'=>$now ],
    // 9
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which device is mandatory on auxiliary vent lines?', 'choices'=>json_encode(['Check valve','Air admittance valve','Trap primer','Backwater valve']), 'answer'=>'Trap primer', 'explanation'=>'Trap primers are required to maintain seal on traps that rely on auxiliary vents.', 'created_at'=>$now,'updated_at'=>$now ],
    // 10
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What is the maximum developed length of a trap arm for a 1-1/4" trap?', 'choices'=>json_encode(['2 ft','3 ft','4 ft','5 ft']), 'answer'=>'2 ft', 'explanation'=>'Per PRC code, a 1-1/4" trap arm cannot exceed 2 feet before venting.', 'created_at'=>$now,'updated_at'=>$now ],
    // 11
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which plumbing material requires UV protection when exposed?', 'choices'=>json_encode(['PVC','Copper','Cast iron','Galvanized steel']), 'answer'=>'PVC', 'explanation'=>'PVC degrades under UV light and must be protected or painted when exposed.', 'created_at'=>$now,'updated_at'=>$now ],
    // 12
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What type of cleanout is required at the base of every stack?', 'choices'=>json_encode(['Combination cleanout','Stack cleanout','Plugged hub','Yoke cleanout']), 'answer'=>'Combination cleanout', 'explanation'=>'Combination cleanouts provide an accessible opening both vertically and horizontally.', 'created_at'=>$now,'updated_at'=>$now ],
    // 13
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which valve prevents sudden water pressure spikes?', 'choices'=>json_encode(['Surge tank','Pressure regulator','Check valve','Air chamber']), 'answer'=>'Pressure regulator', 'explanation'=>'Pressure regulators maintain consistent water pressure, preventing spikes.', 'created_at'=>$now,'updated_at'=>$now ],
    // 14
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which fixture unit value is assigned to a bar sink?', 'choices'=>json_encode(['0.5 FU','1 FU','1.5 FU','2 FU']), 'answer'=>'1 FU', 'explanation'=>'Bar sinks are small fixtures rated at 1 fixture unit.', 'created_at'=>$now,'updated_at'=>$now ],
    // 15
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What is the minimum diameter of an emergency overflow pipe?', 'choices'=>json_encode(['1/2"','3/4"','1"','1-1/4"']), 'answer'=>'1"', 'explanation'=>'Per PRC code, emergency overflow pipes must have a minimum diameter of 1" to handle flood flows.', 'created_at'=>$now,'updated_at'=>$now ],
    // 16
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which component ensures smooth flow from building drains to public sewers?', 'choices'=>json_encode(['Building sewer','Outlet sanitary tee','Flare coupling','Hub coupling']), 'answer'=>'Outlet sanitary tee', 'explanation'=>'Sanitary tees at outlets direct flow smoothly into public sewers.', 'created_at'=>$now,'updated_at'=>$now ],
    // 17
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What is the required distance between a grease interceptor and a building foundation? (PRC standard)', 'choices'=>json_encode(['1 m','2 m','3 m','4 m']), 'answer'=>'2 m', 'explanation'=>'Grease interceptors must be at least 2 m from foundations to allow maintenance.', 'created_at'=>$now,'updated_at'=>$now ],
    // 18
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which pipe joint type uses a rubber gasket for watertight seal?', 'choices'=>json_encode(['Solvent weld','Threaded','Flanged','Push-fit']), 'answer'=>'Push-fit', 'explanation'=>'Push-fit joints rely on rubber gaskets for quick, watertight connections.', 'created_at'=>$now,'updated_at'=>$now ],
    // 19
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'What is the minimum fixture unit load for a janitor sink?', 'choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']), 'answer'=>'2 FU', 'explanation'=>'Janitor sinks are rated at 2 fixture units for drainage design.', 'created_at'=>$now,'updated_at'=>$now ],
    // 20
    [ 'subject_id'=>47, 'part'=>4, 'question'=>'Which device prevents backflow in a drinking water line when downstream pressure drops?', 'choices'=>json_encode(['Check valve','Pressure vacuum breaker','Backwater valve','Vacuum breaker']), 'answer'=>'Pressure vacuum breaker', 'explanation'=>'Pressure vacuum breakers protect potable water from contamination during pressure loss.', 'created_at'=>$now,'updated_at'=>$now ],
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

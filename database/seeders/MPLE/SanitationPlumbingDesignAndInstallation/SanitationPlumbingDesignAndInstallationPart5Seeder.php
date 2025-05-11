<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart5Seeder extends Seeder
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
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What is the maximum allowable head pressure on a backflow preventer? (PRC code)', 'choices'=>json_encode(['10 m','15 m','20 m','25 m']), 'answer'=>'20 m', 'explanation'=>'Backflow preventers are rated for up to 20 meters (approx. 200 kPa) head pressure.', 'created_at'=>$now,'updated_at'=>$now ],
    // 2
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which fixture unit load is assigned to a dishwasher?', 'choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']), 'answer'=>'2 FU', 'explanation'=>'Dishwashers are assigned 2 fixture units for drainage design.', 'created_at'=>$now,'updated_at'=>$now ],
    // 3
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What type of pipe is used for natural gas supply inside buildings? (PRC standard)', 'choices'=>json_encode(['Black steel','PVC','Copper','PEX']), 'answer'=>'Black steel', 'explanation'=>'Black steel pipes are required for natural gas distribution due to strength and safety.', 'created_at'=>$now,'updated_at'=>$now ],
    // 4
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What is the minimum immersion depth for a water meter installation?', 'choices'=>json_encode(['50 mm','75 mm','100 mm','150 mm']), 'answer'=>'75 mm', 'explanation'=>'Meters must be installed with at least 75 mm immersion depth to ensure accuracy.', 'created_at'=>$now,'updated_at'=>$now ],
    // 5
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which device reduces velocity and turbulence in sewers?','choices'=>json_encode(['Manhole','Grease trap','Drop inlet','Cleanout']), 'answer'=>'Drop inlet', 'explanation'=>'Drop inlets allow flow to change elevation with reduced turbulence.', 'created_at'=>$now,'updated_at'=>$now ],
    // 6
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What is the minimum size for a building vent pipe? (PRC code)','choices'=>json_encode(['1"','1.25"','1.5"','2"']), 'answer'=>'1.25"', 'explanation'=>'Vents must be at least 1.25 inches in diameter to serve fixtures.', 'created_at'=>$now,'updated_at'=>$now ],
    // 7
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which fitting is used to combine two branch drains into one?','choices'=>json_encode(['Tee','Wye','Sanitary tee','Double wye']), 'answer'=>'Sanitary tee', 'explanation'=>'Sanitary tees direct branch flow into the main drain smoothly.', 'created_at'=>$now,'updated_at'=>$now ],
    // 8
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What is the standard floor drain opening size?','choices'=>json_encode(['75 mm','100 mm','125 mm','150 mm']), 'answer'=>'100 mm', 'explanation'=>'100 mm (4" ) opening is typical for floor drains to handle flow.', 'created_at'=>$now,'updated_at'=>$now ],
    // 9
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which material is recommended for acid waste piping?','choices'=>json_encode(['PVC','CPVC','Glass-lined steel','Copper']), 'answer'=>'CPVC', 'explanation'=>'CPVC resists chemical corrosion and is approved for acid waste.', 'created_at'=>$now,'updated_at'=>$now ],
    // 10
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What is the required test for new sanitary sewer mains?','choices'=>json_encode(['Air test','Hydrostatic test','Vacuum test','Smoke test']), 'answer'=>'Vacuum test', 'explanation'=>'Vacuum tests are used to verify joint integrity in sanitary sewer mains.', 'created_at'=>$now,'updated_at'=>$now ],
    // 11
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which safety device is required on toilet supply lines?','choices'=>json_encode(['Pressure regulator','Backflow preventer','Air gap','Check valve']), 'answer'=>'Backflow preventer', 'explanation'=>'Backflow preventers protect potable supply from contamination via toilet fill valves.', 'created_at'=>$now,'updated_at'=>$now ],
    // 12
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What clearance is needed around a water heater for service and maintenance?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']), 'answer'=>'450 mm', 'explanation'=>'At least 450 mm clearance is required for safe access to water heaters.', 'created_at'=>$now,'updated_at'=>$now ],
    // 13
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which meter type measures cumulative water usage?','choices'=>json_encode(['Volumetric','Velocity','Magnetic','Ultrasonic']), 'answer'=>'Velocity', 'explanation'=>'Velocity meters measure flow rate and accumulate total usage.', 'created_at'=>$now,'updated_at'=>$now ],
    // 14
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What slope is required for a storm sewer main?','choices'=>json_encode(['0.3%','0.5%','0.8%','1.0%']), 'answer'=>'0.5%', 'explanation'=>'A 0.5% slope ensures self-cleaning velocity in storm mains.', 'created_at'=>$now,'updated_at'=>$now ],
    // 15
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which valve is used to isolate sections of a pipeline?','choices'=>json_encode(['Gate valve','Globe valve','Check valve','Ball valve']), 'answer'=>'Gate valve', 'explanation'=>'Gate valves provide full shutoff for pipeline isolation.', 'created_at'=>$now,'updated_at'=>$now ],
    // 16
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What is the minimum cover over a buried water service line?','choices'=>json_encode(['450 mm','600 mm','750 mm','900 mm']), 'answer'=>'600 mm', 'explanation'=>'600 mm cover protects service lines from damage and freezing.', 'created_at'=>$now,'updated_at'=>$now ],
    // 17
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which condition requires a grease trap before sewer discharge?','choices'=>json_encode(['Commercial kitchen','Residential kitchen','Bathroom group','Laundry']), 'answer'=>'Commercial kitchen', 'explanation'=>'Grease traps are mandatory for commercial kitchens to prevent sewer blockages.', 'created_at'=>$now,'updated_at'=>$now ],
    // 18
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What is the fixture unit load for a wet vented kitchen sink?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']), 'answer'=>'2 FU', 'explanation'=>'Wet vented kitchen sinks are rated at 2 fixture units.', 'created_at'=>$now,'updated_at'=>$now ],
    // 19
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'Which component prevents air binding in water pumps?','choices'=>json_encode(['Air chamber','Air release valve','Check valve','Pressure tank']), 'answer'=>'Air release valve', 'explanation'=>'Air release valves expel trapped air to prevent pump cavitation.', 'created_at'=>$now,'updated_at'=>$now ],
    // 20
    [ 'subject_id'=>47, 'part'=>5, 'question'=>'What test is used to detect leaks in potable water piping?','choices'=>json_encode(['Hydrostatic test','Smoke test','Vacuum test','Flood test']), 'answer'=>'Hydrostatic test', 'explanation'=>'Hydrostatic tests pressurize piping to identify leaks.', 'created_at'=>$now,'updated_at'=>$now ],
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

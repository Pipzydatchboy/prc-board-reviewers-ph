<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart10Seeder extends Seeder
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
    ['subject_id'=>47,'part'=>10,'question'=>'What is the minimum fixture unit value for a shower head?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Standard shower heads are rated at 2 fixture units for drainage.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>47,'part'=>10,'question'=>'Which fitting permits cleanout access in horizontal drain lines?','choices'=>json_encode(['Yoke cleanout','Plugged hub','Combination cleanout','Stack cleanout']),'answer'=>'Combination cleanout','explanation'=>'Combination cleanouts allow access both vertically and horizontally.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>47,'part'=>10,'question'=>'What is the required slope for a 3-inch horizontal waste line?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'Ensures adequate flow velocity for solids transport.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>47,'part'=>10,'question'=>'Which pipe material is least suitable for high-chlorine discharge?','choices'=>json_encode(['PVC','Cast iron','Copper','CPVC']),'answer'=>'Copper','explanation'=>'Copper corrodes rapidly when exposed to chlorine.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>47,'part'=>10,'question'=>'What is the minimum vent size for a group of four fixtures?','choices'=>json_encode(['2"','2.5"','3"','4"']),'answer'=>'3"','explanation'=>'A 3-inch vent is required to serve up to four fixture units.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>47,'part'=>10,'question'=>'Which device maintains trap seal in unused fixtures?','choices'=>json_encode(['Trap primer','Air admittance valve','Backwater valve','Check valve']),'answer'=>'Trap primer','explanation'=>'Primers add water to traps to preserve seals.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>47,'part'=>10,'question'=>'What is the maximum distance a fixture can be from its vent?','choices'=>json_encode(['3 ft','5 ft','6 ft','8 ft']),'answer'=>'6 ft','explanation'=>'Prevents trap siphoning by limiting unvented trap arm length.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>47,'part'=>10,'question'=>'Which test checks for leaks in pressurized potable lines?','choices'=>json_encode(['Hydrostatic test','Air test','Smoke test','Vacuum test']),'answer'=>'Hydrostatic test','explanation'=>'Applies water pressure to identify leaks.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>47,'part'=>10,'question'=>'What fixture unit load is assigned to a kitchen sink disposal?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Disposals increase drainage load and are rated accordingly.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>47,'part'=>10,'question'=>'Which component prevents negative pressure from siphoning traps?','choices'=>json_encode(['Air admittance valve','Revent','Check valve','Trap primer']),'answer'=>'Air admittance valve','explanation'=>'Allows air in to balance pressure without letting gases escape.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>47,'part'=>10,'question'=>'What is the minimum trap seal depth for a floor drain?','choices'=>json_encode(['2"','3"','4"','6"']),'answer'=>'2"','explanation'=>'Floor drains require at least a 2-inch seal to block sewer gases.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>47,'part'=>10,'question'=>'Which valve is used to isolate sections of a fire protection system?','choices'=>json_encode(['Butterfly valve','Gate valve','Globe valve','Check valve']),'answer'=>'Butterfly valve','explanation'=>'Butterfly valves offer quick operation and low pressure drop.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>47,'part'=>10,'question'=>'What is the required clearance around a cleanout for maintenance?','choices'=>json_encode(['300 mm','450 mm','600 mm','750 mm']),'answer'=>'450 mm','explanation'=>'Allows sufficient access for cleaning tools.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>47,'part'=>10,'question'=>'Which device protects potable lines from back-pressure?','choices'=>json_encode(['Vacuum breaker','Check valve','Pressure vacuum breaker','Air gap']),'answer'=>'Vacuum breaker','explanation'=>'Prevents back-pressure backflow under reduced pressure.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>47,'part'=>10,'question'=>'What is the minimum diameter of a building drain?','choices'=>json_encode(['2"','3"','4"','6"']),'answer'=>'3"','explanation'=>'3-inch drains handle typical building waste loads.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>47,'part'=>10,'question'=>'Which fitting is used to clean horizontal 90° bends?','choices'=>json_encode(['Long sweep elbow','Short sweep elbow','Sanitary tee','Combination wye']),'answer'=>'Long sweep elbow','explanation'=>'Provides smoother flow and easier cleaning access.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>47,'part'=>10,'question'=>'Which code requires a vented trap for dishwashers?','choices'=>json_encode(['PRC plumbing code','Fire code','Electrical code','Building code']),'answer'=>'PRC plumbing code','explanation'=>'Mandates venting to prevent trap siphon.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>47,'part'=>10,'question'=>'What is the recommended spacing for vertical support of plastic piping?','choices'=>json_encode(['1 m','1.5 m','2 m','2.5 m']),'answer'=>'1.5 m','explanation'=>'Prevents sagging under weight and thermal expansion.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>47,'part'=>10,'question'=>'Which test is used to confirm backflow preventer functionality?','choices'=>json_encode(['Differential pressure test','Hydrostatic test','Air test','Smoke test']),'answer'=>'Differential pressure test','explanation'=>'Verifies relief valve opens at set pressure.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>47,'part'=>10,'question'=>'What is the main purpose of an expansion tank in hot water systems?','choices'=>json_encode(['Absorb thermal expansion','Filter impurities','Prevent backflow','Maintain pressure']),'answer'=>'Absorb thermal expansion','explanation'=>'Protects system from pressure spikes when water heats.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}

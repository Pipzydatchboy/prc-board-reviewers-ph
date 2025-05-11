<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart3Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>3,'question'=>'What is the minimum size of an air admittance valve connection?','choices'=>json_encode(['1¼ inches','1½ inches','2 inches','3 inches']),'answer'=>'1½ inches','explanation'=>'PRC Code requires at least 1½" connections for air admittance valves to function properly.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>3,'question'=>'Which fitting is required at the base of a fixture outlet before the vent connection?','choices'=>json_encode(['Sanitary tee','Hub','Combination wye','Cleanout']),'answer'=>'Sanitary tee','explanation'=>'Sanitary tees direct flow and allow venting from the fixture outlet.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>3,'question'=>'According to code, what is the maximum height of a vertical vent before offsetting?','choices'=>json_encode(['6 feet','8 feet','10 feet','12 feet']),'answer'=>'10 feet','explanation'=>'Vents over 10 feet high must be offset to prevent icing and maintain airflow.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>3,'question'=>'What is the required fixture unit for a standard hose bibb?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'1 FU','explanation'=>'Hose bibbs are rated at 1 fixture unit for drainage design.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>3,'question'=>'Which test is used to certify backflow preventers after installation?','choices'=>json_encode(['Differential pressure test','Hydrostatic test','Smoke test','Air test']),'answer'=>'Differential pressure test','explanation'=>'Tests relief valve and check valves operate within specified pressure ranges.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>3,'question'=>'What is the minimum slope for a 6-inch storm drain?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/16 in/ft','explanation'=>'Large storm drains require minimal slope to reduce excavation.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>3,'question'=>'Which material is approved for underground natural gas piping?','choices'=>json_encode(['PE','PVC','Copper','Cast iron']),'answer'=>'PE','explanation'=>'Polyethylene (PE) gas piping is preferred for underground installations.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>3,'question'=>'What clearance must be maintained between water heaters and electrical equipment?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']),'answer'=>'300 mm','explanation'=>'300 mm clearance ensures safe access and heat dissipation.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>3,'question'=>'Which valve is used to prevent backflow in health care facilities?','choices'=>json_encode(['Reduced pressure zone device','Double check valve','Air gap','Vacuum breaker']),'answer'=>'Reduced pressure zone device','explanation'=>'High-hazard cross-connections require RPZ devices.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>3,'question'=>'What is the required pipe material for corrosive waste service?','choices'=>json_encode(['Glass-lined steel','PVC','Copper','Cast iron']),'answer'=>'Glass-lined steel','explanation'=>'Glass-lined steel resists chemical attack in corrosive waste lines.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>3,'question'=>'Which fixture unit value applies to a water heater coil?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'1 FU','explanation'=>'Coils count minimally toward drainage loads and use 1 FU.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>3,'question'=>'What is the maximum allowable pressure loss in a fixture trap primer line?','choices'=>json_encode(['5 kPa','10 kPa','15 kPa','20 kPa']),'answer'=>'10 kPa','explanation'=>'Maintains adequate trap seal without loss of flow.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>3,'question'=>'Which vent type is permitted for individual fixtures without roof penetration?','choices'=>json_encode(['Air admittance valve','Studor vent','Both a and b','None']),'answer'=>'Both a and b','explanation'=>'Studor is a brand of air admittance valves; both vent types are acceptable.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>3,'question'=>'What is the minimum diameter for a water service meter tailpiece?','choices'=>json_encode(['15 mm','20 mm','25 mm','32 mm']),'answer'=>'20 mm','explanation'=>'20 mm tailpieces ensure accurate meter readings.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>3,'question'=>'Which test must new sanitary sewage systems undergo before use?','choices'=>json_encode(['Water test','Air test','Smoke test','Vacuum test']),'answer'=>'Air test','explanation'=>'Air tests verify joints and piping integrity in sewage systems.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>3,'question'=>'What is the required clearance around hydronic piping?','choices'=>json_encode(['50 mm','75 mm','100 mm','150 mm']),'answer'=>'75 mm','explanation'=>'Allows insulation and maintenance space around hydronic lines.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>3,'question'=>'Which trap seal depth is required for waste piping subject to high usage?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'4 inches','explanation'=>'Deep seals prevent siphonage during heavy flow.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>3,'question'=>'Which device is mandatory on swimming pool filling connections?','choices'=>json_encode(['Atmospheric vacuum breaker','Backflow preventer','Air gap','Double check valve']),'answer'=>'Air gap','explanation'=>'Pools represent high hazard; air gaps provide maximum protection.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>3,'question'=>'What spacing is required for supports on horizontal PV pipe?','choices'=>json_encode(['1 m','1.5 m','2 m','2.5 m']),'answer'=>'1.5 m','explanation'=>'Prevents sagging of pipes under weight.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>3,'question'=>'What is the minimum diameter of a stormwater leader entering a building?','choices'=>json_encode(['75 mm','100 mm','125 mm','150 mm']),'answer'=>'100 mm','explanation'=>'Ensures sufficient capacity for roof drainage.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart1Seeder extends Seeder
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
        ['subject_id'=>48,'part'=>1,'question'=>'According to the PRC Plumbing Code, what is the minimum size of a building sewer?','choices'=>json_encode(['3 inches','4 inches','6 inches','8 inches']),'answer'=>'4 inches','explanation'=>'PRC code requires a minimum 4-inch diameter for building sewers.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the required slope for a 4-inch building sewer according to the code?','choices'=>json_encode(['1/8 in/ft','1/4 in/ft','1/16 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'A 1/8 inch per foot slope ensures proper drainage for 4-inch sewers.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the maximum distance a trap can be from its vent pipe?','choices'=>json_encode(['3 ft','4 ft','5 ft','6 ft']),'answer'=>'5 ft','explanation'=>'PRC Code limits trap arm length to 5 feet before venting is required.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which material is prohibited for underground potable water piping?','choices'=>json_encode(['Copper','PVC','Galvanized steel','HDPE']),'answer'=>'Galvanized steel','explanation'=>'Galvanized steel is not allowed underground due to corrosion risk.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the minimum vent size for a single fixture unit?','choices'=>json_encode(['1 inch','1¼ inches','1½ inches','2 inches']),'answer'=>'1¼ inches','explanation'=>'A minimum 1¼-inch vent is required for one fixture unit.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the fixture unit value assigned to a standard bathroom group?','choices'=>json_encode(['2 FU','3 FU','4 FU','6 FU']),'answer'=>'4 FU','explanation'=>'PRC code assigns 4 fixture units for a bathroom group of three fixtures.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which fitting is recommended for a change of direction greater than 45° in drainage systems?','choices'=>json_encode(['90° elbow','45° elbow','Long sweep elbow','Sanitary tee']),'answer'=>'Long sweep elbow','explanation'=>'Long sweep elbows reduce turbulence and clogging at greater directional changes.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'According to the code, where must cleanouts be provided?','choices'=>json_encode(['At base of every stack','Every 50 ft horizontally','At every change of direction','All of the above']),'answer'=>'All of the above','explanation'=>'Cleanouts are required at stacks, every 50 ft of horizontal line, and at directional changes.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the minimum size of a fixture drain serving water closets?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'3 inches','explanation'=>'3-inch drains are required for water closets to accommodate solids.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which device must be installed to prevent backflow from a fixture into the potable supply?','choices'=>json_encode(['Air gap','Double check valve','Vacuum breaker','Reduced pressure zone device']),'answer'=>'Air gap','explanation'=>'Air gaps provide the highest form of backflow protection by physical separation.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the required trap seal depth for lavatories?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'2 inches','explanation'=>'A minimum 2-inch trap seal depth is mandated for lavatories.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which venting methods allow installation without roof penetration?','choices'=>json_encode(['Circuit vent','Air admittance valve','Studor vent','All of the above']),'answer'=>'All of the above','explanation'=>'Circuit vents and air admittance (Studor) valves permit venting without direct roof penetration.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the minimum size for a horizontal waste pipe from a single bathroom group?','choices'=>json_encode(['2 inches','3 inches','4 inches','6 inches']),'answer'=>'3 inches','explanation'=>'Per code, 3-inch waste pipes handle the combined load of a bathroom group.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which material requires dielectric fittings when joined to copper?','choices'=>json_encode(['PVC','Galvanized steel','Cast iron','HDPE']),'answer'=>'Galvanized steel','explanation'=>'Dielectric unions prevent galvanic corrosion between dissimilar metals.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the maximum developed length of a 1¼-inch trap arm?','choices'=>json_encode(['2 ft','3 ft','4 ft','5 ft']),'answer'=>'2 ft','explanation'=>'To prevent siphoning, the trap arm for 1¼-inch cannot exceed 2 feet.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which backflow prevention device is required for boiler feed lines?','choices'=>json_encode(['Air gap','Double check valve','Pressure vacuum breaker','Reduced pressure zone device']),'answer'=>'Reduced pressure zone device','explanation'=>'High-hazard lines like boiler feeds require RPZ devices.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the required distance between a vent terminal and an operable window?','choices'=>json_encode(['300 mm','450 mm','900 mm','1200 mm']),'answer'=>'900 mm','explanation'=>'Ensures that sewer gases discharge far enough from windows.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which method is used to test new gas piping installations?','choices'=>json_encode(['Soap solution','Hydrostatic test','Pressure decay','Smoke test']),'answer'=>'Pressure decay','explanation'=>'Gas lines are pressurized and monitored for pressure loss.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'What is the fixture unit value for a standard urinal?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'1 FU','explanation'=>'Urinals without flush valves are typically rated at 1 FU.','created_at'=>$now,'updated_at'=>$now],
        ['subject_id'=>48,'part'=>1,'question'=>'Which pipe material is recommended for high-temperature waste lines?','choices'=>json_encode(['PVC','Cast iron','Copper','HDPE']),'answer'=>'Cast iron','explanation'=>'Cast iron withstands high temperatures without deformation.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}

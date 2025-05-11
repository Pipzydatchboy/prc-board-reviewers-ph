<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart9Seeder extends Seeder
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
            ['subject_id'=>47,'part'=>9,'question'=>'Which device is used to prevent back-siphonage in potable water systems?','choices'=>json_encode(['Air gap','Check valve','Reduced pressure zone device','Vacuum breaker']),'answer'=>'Reduced pressure zone device','explanation'=>'It provides the highest level of backflow protection by maintaining a pressure differential.','created_at'=>$now,'updated_at'=>$now],
            // 2
            ['subject_id'=>47,'part'=>9,'question'=>'What is the minimum fixture unit value for a water closet?','choices'=>json_encode(['2 FU','3 FU','4 FU','5 FU']),'answer'=>'3 FU','explanation'=>'Standard water closets are rated at 3 fixture units for drainage design.','created_at'=>$now,'updated_at'=>$now],
            // 3
            ['subject_id'=>47,'part'=>9,'question'=>'Which slope is required for a 4-inch storm sewer main?','choices'=>json_encode(['0.3%','0.5%','0.8%','1.0%']),'answer'=>'0.5%','explanation'=>'Ensures self-cleaning velocity without excessive wear on pipes.','created_at'=>$now,'updated_at'=>$now],
            // 4
            ['subject_id'=>47,'part'=>9,'question'=>'What valve type allows quick shutoff for gas lines?','choices'=>json_encode(['Ball valve','Gate valve','Globe valve','Check valve']),'answer'=>'Ball valve','explanation'=>'Quarter-turn operation provides fast and reliable shutoff.','created_at'=>$now,'updated_at'=>$now],
            // 5
            ['subject_id'=>47,'part'=>9,'question'=>'Which material is approved for underground drainage?','choices'=>json_encode(['PVC','Copper','Steel','Glass-lined steel']),'answer'=>'PVC','explanation'=>'Lightweight, corrosion-resistant, and cost-effective.','created_at'=>$now,'updated_at'=>$now],
            // 6
            ['subject_id'=>47,'part'=>9,'question'=>'What is the required depth of bury for sewer mains to avoid freezing?','choices'=>json_encode(['300 mm','450 mm','600 mm','750 mm']),'answer'=>'600 mm','explanation'=>'Protects from frost in Philippine climate zones.','created_at'=>$now,'updated_at'=>$now],
            // 7
            ['subject_id'=>47,'part'=>9,'question'=>'Which test method is used for new water distribution mains?','choices'=>json_encode(['Hydrostatic test','Vacuum test','Air test','Smoke test']),'answer'=>'Hydrostatic test','explanation'=>'Checks joint integrity by pressurizing with water.','created_at'=>$now,'updated_at'=>$now],
            // 8
            ['subject_id'=>47,'part'=>9,'question'=>'What is the minimum size of a vent for a single bathroom group?','choices'=>json_encode(['1-1/4"','1-1/2"','2"','3"']),'answer'=>'2"','explanation'=>'A 2-inch vent supports the drainage load of three fixtures.','created_at'=>$now,'updated_at'=>$now],
            // 9
            ['subject_id'=>47,'part'=>9,'question'=>'Which device is installed after a water meter to prevent backward flow?','choices'=>json_encode(['Check valve','Pressure vacuum breaker','Air gap','Trap primer']),'answer'=>'Check valve','explanation'=>'Allows forward flow only, protecting meter accuracy.','created_at'=>$now,'updated_at'=>$now],
            // 10
            ['subject_id'=>47,'part'=>9,'question'=>'What fitting transitions a horizontal pipe to a vertical drain at 45°?','choices'=>json_encode(['Wye','Sanitary tee','45° elbow','Long sweep elbow']),'answer'=>'Wye','explanation'=>'Designed for smooth transition with minimal turbulence.','created_at'=>$now,'updated_at'=>$now],
            // 11
            ['subject_id'=>47,'part'=>9,'question'=>'Which fixture unit rating is applied to a commercial sink?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'3 FU','explanation'=>'Higher load to account for frequent use and volume.','created_at'=>$now,'updated_at'=>$now],
            // 12
            ['subject_id'=>47,'part'=>9,'question'=>'What is the maximum developed length of a 3" trap arm?','choices'=>json_encode(['4 ft','5 ft','6 ft','7 ft']),'answer'=>'5 ft','explanation'=>'Prevents siphoning while allowing practical piping layouts.','created_at'=>$now,'updated_at'=>$now],
            // 13
            ['subject_id'=>47,'part'=>9,'question'=>'Which test uses smoke to detect plumbing leaks?','choices'=>json_encode(['Smoke test','Air test','Hydrostatic test','Vacuum test']),'answer'=>'Smoke test','explanation'=>'Smoke reveals leaks in closed systems effectively.','created_at'=>$now,'updated_at'=>$now],
            // 14
            ['subject_id'=>47,'part'=>9,'question'=>'What is the recommended slope for a 2-inch waste line?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/4 in/ft','explanation'=>'Ensures rapid drainage and prevents solids collection.','created_at'=>$now,'updated_at'=>$now],
            // 15
            ['subject_id'=>47,'part'=>9,'question'=>'Which vent serves multiple fixtures before connecting to the main vent?','choices'=>json_encode(['Circuit vent','Studor vent','Revent','Stack vent']),'answer'=>'Circuit vent','explanation'=>'Allows group venting of several fixtures.','created_at'=>$now,'updated_at'=>$now],
            // 16
            ['subject_id'=>47,'part'=>9,'question'=>'What fixture unit load is assigned to a pedestal sink?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Standard rating for residential pedestal sinks.','created_at'=>$now,'updated_at'=>$now],
            // 17
            ['subject_id'=>47,'part'=>9,'question'=>'Which component prevents sewer gas from entering buildings?','choices'=>json_encode(['Trap seal','Backwater valve','Air admittance valve','Vent stack']),'answer'=>'Trap seal','explanation'=>'Maintains water barrier against gases.','created_at'=>$now,'updated_at'=>$now],
            // 18
            ['subject_id'=>47,'part'=>9,'question'=>'What is the minimum horizontal cleanout interval?','choices'=>json_encode(['30 m','45 m','60 m','75 m']),'answer'=>'60 m','explanation'=>'Allows regular access for maintenance.','created_at'=>$now,'updated_at'=>$now],
            // 19
            ['subject_id'=>47,'part'=>9,'question'=>'Which valve type is self-venting?','choices'=>json_encode(['Air admittance valve','Pressure vacuum breaker','Check valve','Ball valve']),'answer'=>'Air admittance valve','explanation'=>'Permits air intake but restricts gas escape.','created_at'=>$now,'updated_at'=>$now],
            // 20
            ['subject_id'=>47,'part'=>9,'question'=>'What is the purpose of a cleanout in plumbing?','choices'=>json_encode(['Access for cleaning','Pressure relief','Air intake','Flow regulation']),'answer'=>'Access for cleaning','explanation'=>'Provides entry point to clear blockages.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

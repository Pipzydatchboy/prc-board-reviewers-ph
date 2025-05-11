<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart8Seeder extends Seeder
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
    [ 'subject_id'=>47,'part'=>8,'question'=>'What is the standard fixture unit load for a drinking fountain?','choices'=>json_encode(['0.5 FU','1 FU','1.5 FU','2 FU']),'answer'=>'0.5 FU','explanation'=>'Drinking fountains are rated at 0.5 fixture units due to intermittent use.','created_at'=>$now,'updated_at'=>$now],
    // 2
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which pipe is typically used for compressed air distribution in workshops?','choices'=>json_encode(['Copper','Black steel','PVC','PEX']),'answer'=>'Black steel','explanation'=>'Black steel pipes withstand high pressure for compressed air.','created_at'=>$now,'updated_at'=>$now],
    // 3
    [ 'subject_id'=>47,'part'=>8,'question'=>'What is the minimum free air delivery for a respiratory protection system?','choices'=>json_encode(['50 L/min','100 L/min','150 L/min','200 L/min']),'answer'=>'100 L/min','explanation'=>'100 L/min ensures sufficient breathing air supply.','created_at'=>$now,'updated_at'=>$now],
    // 4
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which component is required on gas supply lines to detect leaks?','choices'=>json_encode(['Pressure gauge','Manual shutoff valve','Gas detector','Air admittance valve']),'answer'=>'Gas detector','explanation'=>'Gas detectors alert occupants to leaks for safety.','created_at'=>$now,'updated_at'=>$now],
    // 5
    [ 'subject_id'=>47,'part'=>8,'question'=>'What is the maximum length for a flexible connector on gas appliances?','choices'=>json_encode(['600 mm','900 mm','1200 mm','1500 mm']),'answer'=>'900 mm','explanation'=>'Flexible connectors should not exceed 900 mm to minimize stress.','created_at'=>$now,'updated_at'=>$now],
    // 6
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which fitting is used to join dissimilar metals in piping?','choices'=>json_encode(['Dielectric union','Coupling','Adapter','Reducer']),'answer'=>'Dielectric union','explanation'=>'Dielectric unions prevent galvanic corrosion between metals.','created_at'=>$now,'updated_at'=>$now],
    // 7
    [ 'subject_id'=>47,'part'=>8,'question'=>'What minimum cover protects buried potable water lines from freezing?','choices'=>json_encode(['450 mm','600 mm','750 mm','900 mm']),'answer'=>'600 mm','explanation'=>'600 mm cover protects against freezing in temperate climates.','created_at'=>$now,'updated_at'=>$now],
    // 8
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which backflow device is recommended for lawn irrigation systems?','choices'=>json_encode(['Atmospheric vacuum breaker','Pressure vacuum breaker','Double check valve','Reduced pressure zone device']),'answer'=>'Pressure vacuum breaker','explanation'=>'Pressure vacuum breakers prevent backflow under pressure.','created_at'=>$now,'updated_at'=>$now],
    // 9
    [ 'subject_id'=>47,'part'=>8,'question'=>'What spacing is required between hangers on horizontal water lines?','choices'=>json_encode(['600 mm','900 mm','1200 mm','1500 mm']),'answer'=>'900 mm','explanation'=>'900 mm hanger spacing supports horizontal pipes adequately.','created_at'=>$now,'updated_at'=>$now],
    // 10
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which valve is typically used for fine flow control?','choices'=>json_encode(['Globe valve','Gate valve','Ball valve','Check valve']),'answer'=>'Globe valve','explanation'=>'Globe valves allow precise flow regulation.','created_at'=>$now,'updated_at'=>$now],
    // 11
    [ 'subject_id'=>47,'part'=>8,'question'=>'What is the recommended slope for a grease interceptor discharge?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/8 in/ft','explanation'=>'Ensures effluent moves away without solids re-entry.','created_at'=>$now,'updated_at'=>$now],
    // 12
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which test evaluates integrity of potable water tanks?','choices'=>json_encode(['Hydrostatic','Vacuum','Pressure gauge','Smoke']),'answer'=>'Hydrostatic','explanation'=>'Hydrostatic tests detect leaks under water pressure.','created_at'=>$now,'updated_at'=>$now],
    // 13
    [ 'subject_id'=>47,'part'=>8,'question'=>'What is the fixture unit rating of a hose bib?','choices'=>json_encode(['0.5 FU','1 FU','2 FU','3 FU']),'answer'=>'1 FU','explanation'=>'Hose bibs are rated at 1 FU for continuous flow.','created_at'=>$now,'updated_at'=>$now],
    // 14
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which valve automatically vents air from water systems?','choices'=>json_encode(['Air release valve','Air admittance valve','Pressure relief valve','Check valve']),'answer'=>'Air release valve','explanation'=>'Air release valves expel trapped air.','created_at'=>$now,'updated_at'=>$now],
    // 15
    [ 'subject_id'=>47,'part'=>8,'question'=>'What is the required diameter for a washdown hose valve?','choices'=>json_encode(['19 mm','25 mm','32 mm','38 mm']),'answer'=>'19 mm','explanation'=>'19 mm valves provide adequate flow for washdown.','created_at'=>$now,'updated_at'=>$now],
    // 16
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which material is ideal for high-temperature waste lines?','choices'=>json_encode(['PVC','CPVC','Cast iron','Copper']),'answer'=>'Cast iron','explanation'=>'Cast iron withstands high temperatures without distortion.','created_at'=>$now,'updated_at'=>$now],
    // 17
    [ 'subject_id'=>47,'part'=>8,'question'=>'What is the maximum allowable lead content in potable water fittings?','choices'=>json_encode(['0.2%','0.25%','0.5%','1%']),'answer'=>'0.25%','explanation'=>'PRC limits lead to protect public health.','created_at'=>$now,'updated_at'=>$now],
    // 18
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which device monitors water quality parameters in real time?','choices'=>json_encode(['pH meter','Flow meter','Pressure gauge','Temperature sensor']),'answer'=>'pH meter','explanation'=>'pH meters track acidity to ensure safe water.','created_at'=>$now,'updated_at'=>$now],
    // 19
    [ 'subject_id'=>47,'part'=>8,'question'=>'What test is used for leak detection in buried gas lines?','choices'=>json_encode(['Soap solution','Pressure decay','Smoke','Hydrostatic']),'answer'=>'Pressure decay','explanation'=>'Pressure decay testing confirms gas line integrity.','created_at'=>$now,'updated_at'=>$now],
    // 20
    [ 'subject_id'=>47,'part'=>8,'question'=>'Which fitting type allows easy disassembly for maintenance?','choices'=>json_encode(['Union','Coupling','Adapter','Bushing']),'answer'=>'Union','explanation'=>'Unions facilitate quick pipe section removal.','created_at'=>$now,'updated_at'=>$now],
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

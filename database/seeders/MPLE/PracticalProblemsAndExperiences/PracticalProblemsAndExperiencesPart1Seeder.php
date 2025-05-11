<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart1Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>1,'question'=>'During a leak repair, you discover a corroded copper pipe. What is the safest replacement material approved by PRC code?','choices'=>json_encode(['PVC','CPVC','PEX','Galvanized steel']),'answer'=>'CPVC','explanation'=>'CPVC is approved for potable water and resists corrosion, unlike galvanized steel.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>1,'question'=>'A customer complains of low water pressure only at the kitchen sink. What practical check should you perform first?','choices'=>json_encode(['Replace faucet cartridge','Check aerator for debris','Install booster pump','Replace shutoff valve']),'answer'=>'Check aerator for debris','explanation'=>'Aerators often clog with sediment; cleaning restores flow without major work.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>1,'question'=>'While installing a toilet, the flange is 1/2" above finished floor. How do you correct this?','choices'=>json_encode(['Lower the flange','Use a thick wax ring','Shim the toilet','Raise the floor']),'answer'=>'Use a thick wax ring','explanation'=>'A thick wax ring accommodates flange height without modifying floor or flange.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>1,'question'=>'You encounter a frozen outdoor hose bib in Manila winter. What is the recommended practice?','choices'=>json_encode(['Apply heat lamp','Drill hole','Use antifreeze','Shut off supply and drain']),'answer'=>'Shut off supply and drain','explanation'=>'Shutting off and draining prevents freeze damage per best practice.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>1,'question'=>'A sewage ejector pump cycles rapidly. What is the likely cause?','choices'=>json_encode(['Faulty float switch','Pump oversized','Blockage in discharge','Low voltage']),'answer'=>'Faulty float switch','explanation'=>'Rapid cycling often indicates float switch malfunction causing rapid on/off.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>1,'question'=>'During backflow preventer testing, water leaks past test cocks. What should you do?','choices'=>json_encode(['Replace unit','Clean test cock threads','Tighten test cock caps','Bleed air']),'answer'=>'Replace unit','explanation'=>'Leakage past test cocks indicates internal seal failure requiring replacement.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>1,'question'=>'You need to solder a joint on a live gas pipe. What is the correct action?','choices'=>json_encode(['Purge gas and test','Proceed with care','Use silver solder','Call gas company']),'answer'=>'Purge gas and test','explanation'=>'Purging ensures no flammable gas presence before soldering.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>1,'question'=>'A customer’s water heater produces noisy banging. What is the typical practical remedy?','choices'=>json_encode(['Flush tank','Replace element','Insulate tank','Install air chamber']),'answer'=>'Flush tank','explanation'=>'Flushing removes sediment that causes water hammer noise.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>1,'question'=>'When replacing a section of buried PVC sewer pipe, what bedding should be provided?','choices'=>json_encode(['Concrete cradle','Sand bedding','Gravel bedding','No bedding']),'answer'=>'Sand bedding','explanation'=>'Sand bedding supports PVC uniformly and prevents stress points.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>1,'question'=>'You find root intrusion blocking a cast iron sewer line. What is the recommended approach?','choices'=>json_encode(['Chemical root killer','Mechanical auger','Replace length','Hydro jetting']),'answer'=>'Hydro jetting','explanation'=>'High-pressure jetting removes roots and cleans interior without replacement.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>1,'question'=>'A building drain emits sewer gas. What practical solution restores seal integrity?','choices'=>json_encode(['Add trap primer','Increase trap depth','Install air admittance valve','Pour water in drains']),'answer'=>'Add trap primer','explanation'=>'Trap primers maintain water seals in seldom-used traps to block gases.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>1,'question'=>'During fixture rough-in, how much height should you leave above trap weir for a tub trap?','choices'=>json_encode(['6 inches','8 inches','10 inches','12 inches']),'answer'=>'6 inches','explanation'=>'Standard practice leaves 6" for future adjustments and connections.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>1,'question'=>'A gas leak is detected downstream of a new fitting. What immediate action do you take?','choices'=>json_encode(['Tighten fitting','Evacuate area','Apply tape','Retest later']),'answer'=>'Evacuate area','explanation'=>'Safety protocol requires evacuation and securing gas immediately.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>1,'question'=>'You must install a cleanout in finished floor. Which cover type is practical and code-compliant?','choices'=>json_encode(['Flush floor box','Raised boss','Standard cleanout plug','Recessed lid']),'answer'=>'Flush floor box','explanation'=>'Flush floor boxes integrate cleanouts into finished floors safely and accessibly.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>1,'question'=>'A vent stack is blocked by debris. What tool is most practical for clearing?','choices'=>json_encode(['Auger','Water jet','Rooter','Hand snake']),'answer'=>'Hand snake','explanation'=>'Hand snakes navigate and clear small vent obstructions in tight spaces.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>1,'question'=>'During remodeling, how far from fixture must a new vent penetrate the roof?','choices'=>json_encode(['6 inches','12 inches','18 inches','24 inches']),'answer'=>'6 inches','explanation'=>'Vent terminations require 6" minimum above roof per PRC code.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>1,'question'=>'You install a shower pan but notice leaks at the drain assembly. What practical fix is applied?','choices'=>json_encode(['Re-trowel mortar','Replace flange','Use sealant','Replace pan']),'answer'=>'Replace flange','explanation'=>'A faulty flange causes leaks; replacing ensures proper seal.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>1,'question'=>'Customer complains of discolored hot water. What first practical troubleshooting step?','choices'=>json_encode(['Flush heater','Check anode rod','Replace heater','Install filter']),'answer'=>'Check anode rod','explanation'=>'Corroded anode causes rusty water; inspection resolves issue.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>1,'question'=>'A floor drain clogs frequently. What practical preventive measure do you recommend?','choices'=>json_encode(['Install strainer basket','Increase pipe size','Deepen trap','Add trap primer']),'answer'=>'Install strainer basket','explanation'=>'Strainers catch debris, reducing clogs without major retrofit.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>1,'question'=>'In a constrained crawl space, what is the best method to install PEX tubing?','choices'=>json_encode(['Push-fit fittings','Crimp fittings','Solder fittings','Threaded fittings']),'answer'=>'Push-fit fittings','explanation'=>'Push-fits allow quick connections without tools in tight spaces.', 'created_at'=>$now,'updated_at'=>$now],
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

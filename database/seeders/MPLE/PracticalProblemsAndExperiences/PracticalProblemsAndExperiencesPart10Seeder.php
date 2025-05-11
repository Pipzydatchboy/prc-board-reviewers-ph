<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart10Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>10,'question'=>'A homeowner complains that the toilet rocks after installation. What practical solution should you apply?','choices'=>json_encode(['Shims under base','Re-tighten bolts','Replace flange','Use thicker wax ring']),'answer'=>'Shims under base','explanation'=>'Shimming stabilizes the toilet base without altering plumbing.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>10,'question'=>'During a repipe, you need to identify hot and cold lines. What practical marking method is best?','choices'=>json_encode(['Color tape','Paint','Labels','Twisting wire']),'answer'=>'Color tape','explanation'=>'Color-coded tape is clear, durable, and code-compliant.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>10,'question'=>'The secondary drain pan under the water heater occasionally overflows. What practical device should you install?','choices'=>json_encode(['Float switch','Dedicated drain','Larger pan','Alarm']),'answer'=>'Float switch','explanation'=>'Float switches detect overflow and can shut off heater to prevent spills.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>10,'question'=>'A customer’s sink sprayer has low flow. What practical fix do you implement?','choices'=>json_encode(['Clean aerator','Check diverter valve','Increase supply size','Replace hose']),'answer'=>'Check diverter valve','explanation'=>'Faulty diverter valves restrict sprayer flow; cleaning or replacing restores performance.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>10,'question'=>'You need to locate a hidden water shutoff behind a cabinet. What practical tool helps?','choices'=>json_encode(['Electronic detector','Probe rod','Thermal camera','Magnet']),'answer'=>'Probe rod','explanation'=>'Probe rods detect pipe sounds and obstructions for hidden valves.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>10,'question'=>'A water heater pilot light flickers. What practical vent inspection should you perform?','choices'=>json_encode(['Check vent cap','Clean vent pipe','Inspect chimney','Install vent booster']),'answer'=>'Check vent cap','explanation'=>'Blocked vent caps cause backpressure and pilot instability.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>10,'question'=>'During drain installation, you encounter offset piping requiring cleanout. How often should you place cleanouts?','choices'=>json_encode(['Every 25 ft','Every 50 ft','Every 75 ft','Every 100 ft']),'answer'=>'Every 50 ft','explanation'=>'PRC code mandates cleanouts at maximum 50 ft intervals.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>10,'question'=>'Your snake reaches but cannot turn corner. What practical auger head style aids navigation?','choices'=>json_encode(['Rotary cutting head','Drum head','Hook tip','Blunt tip']),'answer'=>'Rotary cutting head','explanation'=>'Rotary heads cut through obstructions and navigate bends.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>10,'question'=>'A PEX connection leaks at a push-fit joint. What practical check should you do?','choices'=>json_encode(['Ensure pipe is fully seated','Replace O-ring','Tighten nut','Clean pipe end']),'answer'=>'Ensure pipe is fully seated','explanation'=>'Push-fits require proper seating to engage internal O-ring and teeth.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>10,'question'=>'A gas furnace won’t ignite despite a good flame sensor. What practical service step may help?','choices'=>json_encode(['Clean sensor','Replace ignitor','Adjust pressure','Check thermocouple']),'answer'=>'Clean sensor','explanation'=>'Sensor contamination prevents flame detection; cleaning restores operation.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>10,'question'=>'Your gasket seals fail under repeated cycles. What practical material should you upgrade to?','choices'=>json_encode(['EPDM','Neoprene','PVC','PTFE']),'answer'=>'EPDM','explanation'=>'EPDM offers superior resilience and chemical resistance for repeated use.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>10,'question'=>'A condensate pump in the HVAC system makes rattling noise. What practical check helps?','choices'=>json_encode(['Secure pump','Clean float switch','Replace motor','Add vibration pads']),'answer'=>'Add vibration pads','explanation'=>'Pads dampen motor vibrations, reducing rattling.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>10,'question'=>'During leak repair, you must resist corrosion. What practical anti-corrosion coating do you apply on steel?','choices'=>json_encode(['Zinc-rich primer','Epoxy paint','Galvanizing spray','None']),'answer'=>'Zinc-rich primer','explanation'=>'Zinc primers provide cathodic protection on steel surfaces.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>10,'question'=>'A customer has low pressure only at certain fixtures. What practical check should you perform?','choices'=>json_encode(['Check local shutoff','Clean aerator','Inspect supply line','Check mixing valve']),'answer'=>'Check local shutoff','explanation'=>'Partially closed shutoffs restrict flow downstream; correction restores pressure.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>10,'question'=>'You need a quick cap on a copper stub. What practical cap type is best?','choices'=>json_encode(['Compression cap','Solder cap','Push-fit cap','Rubber cap']),'answer'=>'Compression cap','explanation'=>'Compression caps seal stubs quickly without soldering.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>10,'question'=>'A grease interceptor test fails sludge level. What practical service removes excess sludge?','choices'=>json_encode(['Pumping out','Scraping walls','Backwashing','Adding enzyme']),'answer'=>'Pumping out','explanation'=>'Manual pumping removes heavy sludge to restore capacity.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>10,'question'=>'Hot water from laundry taps sputters. What practical cause should you check first?','choices'=>json_encode(['Air in riser','Sediment in line','Faulty faucet','Low pressure']),'answer'=>'Air in riser','explanation'=>'Air pockets cause sputtering; bleeding restores consistent flow.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>10,'question'=>'During repair, you encounter lead connections in a potable line. What practical replacement do you apply?','choices'=>json_encode(['Copper tubing','PEX tubing','PVC tubing','Brass tubing']),'answer'=>'Copper tubing','explanation'=>'Copper is approved and health-safe for potable water after lead removal.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>10,'question'=>'Your test snake cannot clear a hardened clog. What practical chemical supplement helps?','choices'=>json_encode(['Caustic soda','Enzyme cleanser','Bleach','Acid remover']),'answer'=>'Enzyme cleanser','explanation'=>'Enzymes break down organic matter without damaging pipes.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>10,'question'=>'A customer wants a cleanout in a tiled floor. What practical box is best?','choices'=>json_encode(['Floor cleanout box','Standard plug','Drop-in trap','Recessed cleanout']),'answer'=>'Floor cleanout box','explanation'=>'Floor boxes integrate with tile and provide durable access.','created_at'=>$now,'updated_at'=>$now],
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

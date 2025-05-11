<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart9Seeder extends Seeder
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
                    ['subject_id'=>49,'part'=>9,'question'=>'A customer’s outdoor spigot is dripping. What practical repair should you perform?','choices'=>json_encode(['Replace washer','Tighten packing nut','Replace spigot','Install backflow preventer']),'answer'=>'Replace washer','explanation'=>'Worn washers commonly cause dripping; replacement stops the leak.', 'created_at'=>$now,'updated_at'=>$now],
                    // 2
                    ['subject_id'=>49,'part'=>9,'question'=>'When threading a new gas line, threads bind. What practical lubricant is safe to use?','choices'=>json_encode(['Gas-rated pipe dope','WD-40','Motor oil','Silicone spray']),'answer'=>'Gas-rated pipe dope','explanation'=>'Only approved gas pipe dopes ensure proper seal without risk.', 'created_at'=>$now,'updated_at'=>$now],
                    // 3
                    ['subject_id'=>49,'part'=>9,'question'=>'Your shower valve handle feels loose. What practical step secures it?','choices'=>json_encode(['Tighten set screw','Replace handle','Apply threadlocker','Replace cartridge']),'answer'=>'Tighten set screw','explanation'=>'Loose handles usually have a set screw that can be tightened.', 'created_at'=>$now,'updated_at'=>$now],
                    // 4
                    ['subject_id'=>49,'part'=>9,'question'=>'A basement floor drain clogs frequently with debris. What practical device prevents this?','choices'=>json_encode(['Mesh strainer','Trap primer','Air admittance valve','Backwater valve']),'answer'=>'Mesh strainer','explanation'=>'Strainers stop large debris while allowing water flow.', 'created_at'=>$now,'updated_at'=>$now],
                    // 5
                    ['subject_id'=>49,'part'=>9,'question'=>'During hot water valve replacement, hot water spurts. What practical precaution prevents scalding?','choices'=>json_encode(['Shut off hot supply','Bleed cold line','Use mixing valve','Wear gloves']),'answer'=>'Shut off hot supply','explanation'=>'Isolating hot supply before work prevents accidental discharge.', 'created_at'=>$now,'updated_at'=>$now],
                    // 6
                    ['subject_id'=>49,'part'=>9,'question'=>'A toilet flushes weakly. What practical check should you perform first?','choices'=>json_encode(['Adjust water level','Clean rim jets','Replace flapper','Install pressure-assist']),'answer'=>'Adjust water level','explanation'=>'Insufficient tank water level reduces flush strength.', 'created_at'=>$now,'updated_at'=>$now],
                    // 7
                    ['subject_id'=>49,'part'=>9,'question'=>'You need to join two PVC pipes at an angle. What practical fitting do you use?','choices'=>json_encode(['45° elbow','90° elbow','Sanitary tee','Wye']),'answer'=>'45° elbow','explanation'=>'Elbows provide a simple angled connection between pipes.', 'created_at'=>$now,'updated_at'=>$now],
                    // 8
                    ['subject_id'=>49,'part'=>9,'question'=>'Your snake head detaches in the line. What practical tool retrieves it?','choices'=>json_encode(['Magnet tool','Plumber’s hook','Camera inspection','Hydro jet']),'answer'=>'Magnet tool','explanation'=>'Magnetic retrieval tools recover metal pieces from pipes.', 'created_at'=>$now,'updated_at'=>$now],
                    // 9
                    ['subject_id'=>49,'part'=>9,'question'=>'A sink stopper won’t stay up. What practical mechanism repair is needed?','choices'=>json_encode(['Adjust lift rod','Replace stopper','Clean linkage','Tighten pivot nut']),'answer'=>'Tighten pivot nut','explanation'=>'Loose pivot nuts allow linkage play; tightening stops movement.', 'created_at'=>$now,'updated_at'=>$now],
                    // 10
                    ['subject_id'=>49,'part'=>9,'question'=>'A gas leak test shows bubbles at a joint. What practical step do you take?','choices'=>json_encode(['Tighten joint','Reapply pipe dope','Cut and rethread','Replace fitting']),'answer'=>'Reapply pipe dope','explanation'=>'Proper application of gas-rated pipe dope seals minor leaks.', 'created_at'=>$now,'updated_at'=>$now],
                    // 11
                    ['subject_id'=>49,'part'=>9,'question'=>'Your PEX line is too long and kinks. What practical fix prevents future kinks?','choices'=>json_encode(['Use coil support','Add elbow fitting','Route differently','Use spring inserts']),'answer'=>'Use spring inserts','explanation'=>'Spring supports keep PEX from kinking around loops.', 'created_at'=>$now,'updated_at'=>$now],
                    // 12
                    ['subject_id'=>49,'part'=>9,'question'=>'During renovation, you must maintain drainage at a fixture. What practical temporary solution?','choices'=>json_encode(['Install temporary hose','Use bucket','Plug drain','Use temporary P-trap']),'answer'=>'Use temporary P-trap','explanation'=>'Temporary traps preserve drainage and seal until final connections.', 'created_at'=>$now,'updated_at'=>$now],
                    // 13
                    ['subject_id'=>49,'part'=>9,'question'=>'A rain gutter downspout clogs with leaves. What practical tool do you use?','choices'=>json_encode(['Leaf blower','Drain snake','Pressure washer','Plunger']),'answer'=>'Leaf blower','explanation'=>'Blowing debris clears downspouts without disassembly.', 'created_at'=>$now,'updated_at'=>$now],
                    // 14
                    ['subject_id'=>49,'part'=>9,'question'=>'Your water heater relief valve leaks occasionally. What practical maintenance fixes it?','choices'=>json_encode(['Exercise valve','Replace valve','Tighten connection','Add sealant']),'answer'=>'Exercise valve','explanation'=>'Opening and closing the valve clears debris that prevents proper seating.', 'created_at'=>$now,'updated_at'=>$now],
                    // 15
                    ['subject_id'=>49,'part'=>9,'question'=>'A dishwasher makes noise due to vibration. What practical repair reduces it?','choices'=>json_encode(['Secure dishwasher','Add anti-vibration mounts','Tighten bolts','Replace pump']),'answer'=>'Add anti-vibration mounts','explanation'=>'Mounts absorb vibration, reducing operational noise.', 'created_at'=>$now,'updated_at'=>$now],
                    // 16
                    ['subject_id'=>49,'part'=>9,'question'=>'You must cut a threaded brass adapter but lack a wrench. What practical tool helps?','choices'=>json_encode(['Pipe vise','Bench vise','Adjustable strap wrench','Channel locks']),'answer'=>'Adjustable strap wrench','explanation'=>'Strap wrenches grip brass without damage for turning.', 'created_at'=>$now,'updated_at'=>$now],
                    // 17
                    ['subject_id'=>49,'part'=>9,'question'=>'A floor drain trap siphons dry. What practical cause should you check?','choices'=>json_encode(['Vent blockage','Insufficient usage','Shallow trap','Dirty pipe']),'answer'=>'Vent blockage','explanation'=>'Blocked vents lead to negative pressure and trap siphoning.', 'created_at'=>$now,'updated_at'=>$now],
                    // 18
                    ['subject_id'=>49,'part'=>9,'question'=>'Hot water heater produces loud rumbling. What practical maintenance solves this?','choices'=>json_encode(['Flush heater','Insulate pipes','Replace element','Lower temperature']),'answer'=>'Flush heater','explanation'=>'Sediment buildup causes noise; flushing clears deposits.', 'created_at'=>$now,'updated_at'=>$now],
                    // 19
                    ['subject_id'=>49,'part'=>9,'question'=>'Your PVC joint leaks at the glued seam. What practical cause should you inspect?','choices'=>json_encode(['Insufficient primer','Incorrect glue','Dirty surfaces','Incorrect cure time']),'answer'=>'Insufficient primer','explanation'=>'Primer prepares PVC surfaces; skipping it weakens the bond.', 'created_at'=>$now,'updated_at'=>$now],
                    // 20
                    ['subject_id'=>49,'part'=>9,'question'=>'During a hydrostatic test, the gauge reads high. What practical cause should you consider?','choices'=>json_encode(['Gauge calibration','Temperature effects','Water hammer','Air in line']),'answer'=>'Temperature effects','explanation'=>'Cold water warms raises pressure; accounting for temperature is necessary.', 'created_at'=>$now,'updated_at'=>$now],
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

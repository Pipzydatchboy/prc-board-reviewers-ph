<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart8Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>8,'question'=>'A homeowner reports low hot water flow at shower. What practical check should you perform first?','choices'=>json_encode(['Clean showerhead','Replace valve cartridge','Upgrade piping','Install booster pump']),'answer'=>'Clean showerhead','explanation'=>'Mineral buildup in showerheads often restricts flow; cleaning restores performance.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>8,'question'=>'During drain clearing, your auger keeps slipping. What practical step prevents slippage?','choices'=>json_encode(['Apply downward pressure','Use thick cable','Increase speed','Add lubricant']),'answer'=>'Apply downward pressure','explanation'=>'Firm downward pressure ensures the auger bites into the blockage properly.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>8,'question'=>'A gas water heater pilot light goes out intermittently. What practical inspection helps?','choices'=>json_encode(['Check thermocouple','Clean pilot orifice','Inspect venting','Adjust gas pressure']),'answer'=>'Check thermocouple','explanation'=>'A failing thermocouple often causes the pilot to extinguish; replacement fixes this.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>8,'question'=>'You install a new P-trap but notice leaks at the joint. What practical fix resolves this?','choices'=>json_encode(['Tighten slip nut','Add plumber’s tape','Replace washer','Re-cut pipe']),'answer'=>'Replace washer','explanation'=>'Damaged washers in slip joints cause leaks; replacing seals the joint.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>8,'question'=>'A condensation line from the AC unit clogs with algae. What practical treatment prevents future clogs?','choices'=>json_encode(['Use algaecide tablet','Insulate line','Install trap','Increase slope']),'answer'=>'Use algaecide tablet','explanation'=>'Algaecide tablets in the condensate pan inhibit growth and maintain flow.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>8,'question'=>'During bathroom renovation, you need to reroute a 1¼" drain. Which fitting offers smooth flow?','choices'=>json_encode(['Long-sweep 45° elbow','90° street elbow','Hub transition','Sanitary tee']),'answer'=>'Long-sweep 45° elbow','explanation'=>'Long-sweep elbows minimize turbulence and clogging in drain lines.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>8,'question'=>'A utility sink traps odors. What practical device installation eliminates the smell?','choices'=>json_encode(['Trap primer','Air admittance valve','Backwater valve','Inline deodorizer']),'answer'=>'Trap primer','explanation'=>'Trap primers maintain water seal to block sewer gas in infrequently used fixtures.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>8,'question'=>'Your solder joint on copper pipe leaks. What practical step corrects this?','choices'=>json_encode(['Clean and resweat joint','Tighten fitting','Apply epoxy','Wrap tape']),'answer'=>'Clean and resweat joint','explanation'=>'Residue prevents solder adhesion; cleaning and reheating ensures seal.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>8,'question'=>'A pressure gauge on boiler reads low. What practical check helps diagnose this?','choices'=>json_encode(['Check expansion tank','Inspect gauge isolation valve','Bleed air','Test gauge accuracy']),'answer'=>'Inspect gauge isolation valve','explanation'=>'Partially closed isolation valves cause false readings; opening restores accuracy.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>8,'question'=>'You need to join PVC to ABS. What practical coupling should you use?','choices'=>json_encode(['Transition coupling','Solvent weld','Mechanical clamp','Rubber adapter']),'answer'=>'Transition coupling','explanation'=>'Transition couplings are specifically designed for PVC-to-ABS connections.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>8,'question'=>'A shower diverter valve drips. Which practical maintenance fixes it?','choices'=>json_encode(['Replace diverter assembly','Tighten bonnet nut','Add sealant','Install new showerhead']),'answer'=>'Replace diverter assembly','explanation'=>'Diverter assemblies contain multiple seals; replacement stops drips.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>8,'question'=>'Your snake exits the trap assembly repeatedly. What practical adapter avoids this?','choices'=>json_encode(['Trap adapter','Entry auger guide','Wye fitting','Drum auger head']),'answer'=>'Trap adapter','explanation'=>'Trap adapters secure the snake entry into the drain without exiting the trap.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>8,'question'=>'A toilet flange sits below finished floor. What practical solution raises the flange?','choices'=>json_encode(['Use flange extender','Reinstall floor','Use thick wax ring','Add spacer']),'answer'=>'Use flange extender','explanation'=>'Extenders mount over existing flange to elevate to proper height.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>8,'question'=>'During capillary joint soldering, the flow stops prematurely. What practical cause should you check?','choices'=>json_encode(['Insufficient flux','Dirty pipe ends','Too rapid cooling','Incorrect solder']),'answer'=>'Dirty pipe ends','explanation'=>'Contaminants prevent solder from drawing into the joint; cleaning solves it.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>8,'question'=>'A washbasin drain smells bad. What practical check should you perform?','choices'=>json_encode(['Verify trap seal','Clean stopper','Flush with water','Add bleach']),'answer'=>'Verify trap seal','explanation'=>'Dry or insufficient traps allow sewer gas; checking seal ensures odor prevention.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>8,'question'=>'Your outlet pipe is too long and hard to align. What practical cutting tool works best?','choices'=>json_encode(['Tubing cutter','Hacksaw','Cut-off wheel','Reciprocating saw']),'answer'=>'Tubing cutter','explanation'=>'Tubing cutters provide precise cuts on pipe with minimal effort.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>8,'question'=>'A condensate line from the furnace has a trap that dries out. What practical addition keeps it full?','choices'=>json_encode(['Trap primer','Air admittance valve','Check valve','S trap']),'answer'=>'Trap primer','explanation'=>'Primers periodically refill the trap to maintain water seal.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>8,'question'=>'A customer wants a quick emergency shutoff. Which valve type do you install?','choices'=>json_encode(['Ball valve','Gate valve','Globe valve','Check valve']),'answer'=>'Ball valve','explanation'=>'Ball valves provide fast shutoff with a quarter-turn handle.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>8,'question'=>'You find a cracked PVC slip joint. What practical repair do you apply?','choices'=>json_encode(['Replace slip nut and washer','Use rubber coupling','Apply epoxy','Wrap tape']),'answer'=>'Replace slip nut and washer','explanation'=>'Cracked nuts or washers cause leaks; replacement restores seal.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>8,'question'=>'During a rebuild, you must support a heavy copper branch. What practical hanger type is best?','choices'=>json_encode(['Clevis hanger','Pipe strap','U-bolt','Plastic clip']),'answer'=>'Clevis hanger','explanation'=>'Clevis hangers support heavy pipes and allow adjustment.', 'created_at'=>$now,'updated_at'=>$now],
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

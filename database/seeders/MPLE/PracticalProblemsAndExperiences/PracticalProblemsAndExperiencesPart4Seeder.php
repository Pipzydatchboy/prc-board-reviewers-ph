<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart4Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>4,'question'=>'A customer reports water hammer in their new branch line. Which simple device installation often resolves it?','choices'=>json_encode(['Air chamber','Pressure reducer','Check valve','Flow restrictor']),'answer'=>'Air chamber','explanation'=>'Air chambers absorb shock and prevent hammering.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>4,'question'=>'During a kitchen faucet replacement, the supply stops leak but water sputters. What practical step should you take?','choices'=>json_encode(['Flush lines','Tighten connections','Replace faucet','Add aerator']),'answer'=>'Flush lines','explanation'=>'Debris in lines causes sputter; flushing clears it.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>4,'question'=>'You find a poorly taped PVC joint. Which practical repair ensures a lasting seal?','choices'=>json_encode(['Solvent weld','Threaded adapter','Push-fit coupling','Rubber sealant']),'answer'=>'Solvent weld','explanation'=>'Solvent welding creates a permanent bond on PVC.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>4,'question'=>'A drain line runs through an attic and freezes. What practical burial or insulation practice prevents this?','choices'=>json_encode(['Add foam insulation','Reroute below insulation','Heat trace cable','All of the above']),'answer'=>'All of the above','explanation'=>'Combining insulation, proper routing, and heat trace prevents freezing.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>4,'question'=>'While pressure testing a new water main, you notice a slow pressure drop. What practical diagnostic is next?','choices'=>json_encode(['Listen for leaks','Check gauge calibration','Increase test pressure','Wait longer']),'answer'=>'Listen for leaks','explanation'=>'Audible inspection helps locate small leaks before further action.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>4,'question'=>'In a renovation, you must enlarge a drain opening in concrete. What tool is most practical?','choices'=>json_encode(['Core drill','Chipping hammer','Angle grinder','Circular saw']),'answer'=>'Core drill','explanation'=>'Core drills create precise, clean openings in concrete.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>4,'question'=>'A customer’s toilet fills slowly. What practical check addresses this?','choices'=>json_encode(['Inspect fill valve','Clean bowl jet','Replace flapper','Add booster pump']),'answer'=>'Inspect fill valve','explanation'=>'Worn fill valves restrict flow; cleaning or replacement fixes it.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>4,'question'=>'Your snake breaks off in a cast iron pipe. What is a practical recovery method?','choices'=>json_encode(['Use reverse snake','Apply penetrating oil','Use magnet tool','Replace pipe section']),'answer'=>'Use magnet tool','explanation'=>'Magnetic retrieval helps recover metal cable fragments.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>4,'question'=>'Installing a water softener adds pressure loss. What practical addition minimizes it?','choices'=>json_encode(['Install larger bypass','Add booster pump','Use high-flow valves','Use smoother fittings']),'answer'=>'Add booster pump','explanation'=>'A booster pump restores pressure lost through treatment equipment.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>4,'question'=>'During a gas leak repair, you must cap an unused stub. What is the practical method?','choices'=>json_encode(['Threaded brass cap','Weld cap','Push-fit cap','Rubber cap']),'answer'=>'Threaded brass cap','explanation'=>'Brass caps provide durable, code-compliant capping on gas stubs.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>4,'question'=>'A customer’s sink stop valve is stiff. What practical maintenance restores smooth operation?','choices'=>json_encode(['Apply plumbing grease','Replace valve','Tighten packing','Use penetrating oil']),'answer'=>'Apply plumbing grease','explanation'=>'Grease lubricates the valve spindle for smooth action.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>4,'question'=>'You need to install a vent through a roof. Which practical flashing ensures waterproofing?','choices'=>json_encode(['Rubber boot flashing','Metal flange','Sealant only','Saddle flashing']),'answer'=>'Rubber boot flashing','explanation'=>'Boot flashings accommodate pipe shapes and seal tightly to roof.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>4,'question'=>'A basement radon mitigation line discharges indoors. What practical fix is needed?','choices'=>json_encode(['Extend above roof','Install fan','Seal joints','Add check valve']),'answer'=>'Extend above roof','explanation'=>'Proper termination above roof prevents indoor gas entry.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>4,'question'=>'You observe scale buildup in toilet fill tubes. What practical solution prevents recurrence?','choices'=>json_encode(['Water softener','Clean regularly','Replace tubes','Use vinegar']),'answer'=>'Water softener','explanation'=>'Softened water reduces mineral deposits in plumbing.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>4,'question'=>'Hot water is too hot at fixtures. What practical valve addition solves this?','choices'=>json_encode(['Thermostatic mixing valve','Pressure relief valve','Check valve','Temper valve']),'answer'=>'Thermostatic mixing valve','explanation'=>'Mixing valves blend hot and cold to safe outlet temperatures.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>4,'question'=>'A customer wants to relocate a gas dryer vent. What practical material should the duct be?','choices'=>json_encode(['Smooth metal duct','Flexible foil','PVC','Copper']),'answer'=>'Smooth metal duct','explanation'=>'Rigid smooth metal resists lint buildup and complies with code.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>4,'question'=>'You must access a hidden cleanout behind drywall. What non-destructive method is practical?','choices'=>json_encode(['Locate with imaging camera','Cut large hole','Guess location','Install new cleanout']),'answer'=>'Locate with imaging camera','explanation'=>'Inspection cameras pinpoint cleanout without major demolition.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>4,'question'=>'A shower pan leaks at the curb. What practical fix do you apply?','choices'=>json_encode(['Re-mortar curb','Replace curb drain','Install flexible liner','Seal joint']),'answer'=>'Seal joint','explanation'=>'Proper sealant at joints stops leaks without full rebuild.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>4,'question'=>'During a water service replacement, you need a quick shutdown. Which practical valve is best?','choices'=>json_encode(['Ball valve','Gate valve','Globe valve','Check valve']),'answer'=>'Ball valve','explanation'=>'Ball valves provide quick, full shutoff with a quarter turn.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>4,'question'=>'A customer wants to hide PEX tubing. What practical mounting method is recommended?','choices'=>json_encode(['Concealed behind drywall','Surface clamp','Chase framing','Boxing in']),'answer'=>'Chase framing','explanation'=>'Framing chases allow neat concealment with future access.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}

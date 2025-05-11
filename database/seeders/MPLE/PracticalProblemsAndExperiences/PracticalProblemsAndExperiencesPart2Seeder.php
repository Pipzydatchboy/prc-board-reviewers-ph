<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart2Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>2,'question'=>'A shower drain is slow despite no visible clog. Which practical check can you perform?','choices'=>json_encode(['Remove and clean strainer','Replace trap','Increase pipe size','Add vent']),'answer'=>'Remove and clean strainer','explanation'=>'Hair and soap buildup on strainers often causes slow draining.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>2,'question'=>'While testing a newly installed backflow preventer, you get inconsistent readings. What is the likely cause?','choices'=>json_encode(['Air in test lines','Faulty gauge','Improper installation','Dirty water']),'answer'=>'Air in test lines','explanation'=>'Air pockets give erratic test readings; purging lines fixes this.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>2,'question'=>'A hot water recirculation pump hums but does not circulate. What should you inspect first?','choices'=>json_encode(['Check check valve','Bleed air from system','Inspect impeller','Test power supply']),'answer'=>'Bleed air from system','explanation'=>'Airlock prevents flow; bleeding restores circulation.', 'created_at'=>$now,'updated at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>2,'question'=>'You need to solder copper fittings in a small closet. Which ventilation practice is safest?','choices'=>json_encode(['Use fan and open door','Proceed without ventilation','Work quickly','Use water quench']),'answer'=>'Use fan and open door','explanation'=>'Ensures fumes are cleared, maintaining safety.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>2,'question'=>'A customer’s tub overflows due to low drain capacity. What practical fix helps?','choices'=>json_encode(['Install larger drain grate','Snake the line','Add second overflow','Thin shower pan']),'answer'=>'Install larger drain grate','explanation'=>'Larger grate reduces obstruction, improving flow.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>2,'question'=>'During retrofit, you find a hidden leak behind drywall. What is the minimal invasive repair?','choices'=>json_encode(['Cut access panel','Replace entire wall','Use stain-stop paint','Install external patch']),'answer'=>'Cut access panel','explanation'=>'Access panels allow targeted repair without full demolition.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>2,'question'=>'A commercial faucet drips from multiple points. Which action best addresses all leaks?','choices'=>json_encode(['Replace entire cartridge','Tighten all joints','Replace faucet','Install check valves']),'answer'=>'Replace entire cartridge','explanation'=>'Cartridges contain all seals; replacement stops all drips.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>2,'question'=>'You need to cut a cast iron pipe in situ. Which tool is most practical?','choices'=>json_encode(['Reciprocating saw','Pipe cutter','Torch','Hand saw']),'answer'=>'Reciprocating saw','explanation'=>'Equipped with a carbide blade, it cuts cast iron cleanly on site.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>2,'question'=>'A water meter shows high usage with no fixtures running. What should you check?','choices'=>json_encode(['Hidden leaks','Faulty meter','Meter reading error','Air in line']),'answer'=>'Hidden leaks','explanation'=>'Undetected leaks often cause phantom water usage.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>2,'question'=>'A gas appliance won’t light due to weak pilot. What practical adjustment is first step?','choices'=>json_encode(['Clean pilot orifice','Increase gas pressure','Replace valve','Install larger pilot']),'answer'=>'Clean pilot orifice','explanation'=>'Clogged orifice reduces pilot flow; cleaning restores proper function.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>2,'question'=>'Your snake cannot reach the clog far down the line. What technique can extend reach practicably?','choices'=>json_encode(['Use extension cable','Push snake harder','Flush with water','Install cleanout']),'answer'=>'Install cleanout','explanation'=>'Cleanout insertion points provide closer access for snaking long lines.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>2,'question'=>'A shower diverter valve leaks internally. What is the usual practical repair?','choices'=>json_encode(['Replace O-rings','Tighten bonnet nut','Re-seat valve','Replace diverter']),'answer'=>'Replace O-rings','explanation'=>'O-ring wear commonly causes internal leaks; replacement is effective.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>2,'question'=>'You must install a floor drain on a concrete slab. Which method is least disruptive?','choices'=>json_encode(['Core drilling slab','Cut and remove section','Use surface-mounted drain','Install trench drain']),'answer'=>'Core drilling slab','explanation'=>'Core drilling allows neat hole for drain without full slab removal.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>2,'question'=>'A backwater valve emits odor. What is a practical mitigation?','choices'=>json_encode(['Install trap primer','Add vent to valve','Replace valve','Seal vent']),'answer'=>'Add vent to valve','explanation'=>'Vent prevents pressure buildup and odor escape.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>2,'question'=>'During repiping, which PEX connection is fastest under time constraints?','choices'=>json_encode(['Crimp','Clamp','Push-fit','Sweat']),'answer'=>'Push-fit','explanation'=>'Push-fit fittings allow tool-free, quick connections.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>2,'question'=>'A customer’s water heater pilot won’t stay lit. What simple maintenance can fix this?','choices'=>json_encode(['Clean pilot tube','Replace thermocouple','Adjust gas valve','Add insulation']),'answer'=>'Clean pilot tube','explanation'=>'Clogged pilot tube often causes flame instability; cleaning resolves it.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>2,'question'=>'You discover a lead joint in a rainwater leader. What practical replacement do you apply?','choices'=>json_encode(['Replace with copper','Line with PVC','Use rubber coupling','Leave as is']),'answer'=>'Replace with copper','explanation'=>'Copper is approved and durable for exposed rainwater leaders.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>2,'question'=>'Hot water from the faucet sputters. What practical cause should you check?','choices'=>json_encode(['Air in line','Sediment in heater','Low pressure','Loose connection']),'answer'=>'Air in line','explanation'=>'Air pockets cause sputtering; bleeding resolves the issue.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>2,'question'=>'When joining PVC under pressure, what practical precaution is necessary?','choices'=>json_encode(['Depressurize line','Use primer only','Heat pipe','Use thread sealant']),'answer'=>'Depressurize line','explanation'=>'Solvent weld requires no internal pressure to cure properly.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>2,'question'=>'A customer wants to install a bar sink with disposal in tight counter space. What practical mounting is best?','choices'=>json_encode(['Top-mount','Under-mount','Flush-mount','Farmhouse-mount']),'answer'=>'Under-mount','explanation'=>'Under-mount sinks maximize counter space in tight installations.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}

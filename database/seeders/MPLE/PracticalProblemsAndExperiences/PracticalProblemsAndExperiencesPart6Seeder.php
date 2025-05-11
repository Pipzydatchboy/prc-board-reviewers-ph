<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart6Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>6,'question'=>'You install a new garbage disposal but hear a hum with no grinding. What practical check should you perform?','choices'=>json_encode(['Check for jam','Ensure power','Tighten mount','Add lubricant']),'answer'=>'Check for jam','explanation'=>'Disposals hum when jammed; clearing debris restores function.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>6,'question'=>'A commercial sink flange leaks. What practical repair should you apply?','choices'=>json_encode(['Tighten mounting bolts','Replace gasket','Re-seat flange','Apply sealant']),'answer'=>'Replace gasket','explanation'=>'Worn gaskets cause leaks; replacement restores seal.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>6,'question'=>'During a hydrostatic test, a trap floods. What practical remedy prevents this?','choices'=>json_encode(['Install trap plug','Add removable cap','Use test ball','Raise test pressure']),'answer'=>'Use test ball','explanation'=>'Test balls isolate fixtures without flooding traps.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>6,'question'=>'You must cut buried PVC under pressure. What safety measure is crucial?','choices'=>json_encode(['Depressurize line','Wear gloves','Use saw','Mark line']),'answer'=>'Depressurize line','explanation'=>'Pressure in line risks injury and poor cuts; depressurizing is essential.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>6,'question'=>'A restroom sink drain gurgles when the toilet flushes. What practical vent solution fixes it?','choices'=>json_encode(['Install an air admittance valve','Add a revent','Increase vent size','Install relief vent']),'answer'=>'Install an air admittance valve','explanation'=>'Air admittance valves prevent siphoning and gurgling.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>6,'question'=>'During repiping, conductor lines vibrate. What practical fitting reduces noise?','choices'=>json_encode(['Use rubber hangers','Add clamps','Increase insulation','Use steel hangers']),'answer'=>'Use rubber hangers','explanation'=>'Rubber isolators absorb vibration and reduce noise.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>6,'question'=>'A customer’s shower valve leaks at the handle. What practical repair addresses this?','choices'=>json_encode(['Replace cartridge','Tighten packing','Add sealant','Apply tape']),'answer'=>'Replace cartridge','explanation'=>'Valve cartridges contain seals; replacement stops leaks.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>6,'question'=>'You need to flush sediment from a water softener brine tank. What practical step is required?','choices'=>json_encode(['Remove sediment','Backwash system','Regenerate resin','Add water']),'answer'=>'Remove sediment','explanation'=>'Manual removal of sediment prevents system clogging.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>6,'question'=>'A grease trap overflows. What practical maintenance avoids recurrence?','choices'=>json_encode(['Clean trap regularly','Increase capacity','Install filter','Add enzyme']),'answer'=>'Clean trap regularly','explanation'=>'Routine cleaning prevents buildup and overflow.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>6,'question'=>'Your power snake loses power mid-clean. What practical troubleshooting step should you take?','choices'=>json_encode(['Check power cord','Replace motor','Add fuse','Lower torque']),'answer'=>'Check power cord','explanation'=>'Faulty cord connections cause power loss; inspecting restores function.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>6,'question'=>'A bathroom vent emits odor. What practical inspection addresses this?','choices'=>json_encode(['Check vent cap','Clean vent stack','Install AAV','Extend vent']),'answer'=>'Clean vent stack','explanation'=>'Debris in vent causes odor; cleaning restores proper airflow.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>6,'question'=>'During faucet installation, threads strip. What practical remedy secures the connection?','choices'=>json_encode(['Use threadless adapter','Apply sealant','Replace threaded piece','Use tape']),'answer'=>'Use threadless adapter','explanation'=>'SharkBite or similar fittings allow secure connections without threads.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>6,'question'=>'A water main backflow preventer leaks slightly. What practical service step should you perform?','choices'=>json_encode(['Clean seats','Replace seals','Tighten bolts','Add gasket']),'answer'=>'Replace seals','explanation'=>'Worn seals cause leaks; replacement restores integrity.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>6,'question'=>'Your camera cannot penetrate a thick clog. What practical tool clears it?','choices'=>json_encode(['Hydro jet','Coated cable','Reciprocating head','Rope auger']),'answer'=>'Hydro jet','explanation'=>'High-pressure water jets remove thick blockages effectively.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>6,'question'=>'A toilet refill tube falls into the overflow. What practical action resolves this?','choices'=>json_encode(['Secure tube clip','Shorten tube','Replace tube','Add clamp']),'answer'=>'Secure tube clip','explanation'=>'Tube clips keep refill tubes positioned correctly.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>6,'question'=>'A copper pipe pinhole leak appears. What practical repair patch works?','choices'=>json_encode(['Epoxy patch','Solder patch','Clamp patch','Tape patch']),'answer'=>'Epoxy patch','explanation'=>'Epoxy compounds bond to copper and seal pinholes effectively.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>6,'question'=>'Hot water system emits screeching. What practical check should you perform?','choices'=>json_encode(['Check pump bearings','Bleed air','Flush heater','Insulate pipes']),'answer'=>'Check pump bearings','explanation'=>'Worn bearings cause noise; inspection and lubrication or replacement fixes it.', 'created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>6,'question'=>'A customer’s tub diverter sticks. What practical maintenance solves it?','choices'=>json_encode(['Clean diverter','Replace assembly','Lubricate O-rings','Tighten screws']),'answer'=>'Clean diverter','explanation'=>'Mineral buildup causes sticking; cleaning restores free movement.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>6,'question'=>'During basement sump pump installation, you need temporary power. What practical solution is best?','choices'=>json_encode(['Generator','Extension cord','Solar panel','Battery backup']),'answer'=>'Generator','explanation'=>'Generators provide reliable temporary power without relying on house circuits.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>6,'question'=>'A customer’s PEX line is kinked. What practical method repairs it?','choices'=>json_encode(['Cut out kink','Use expansion tool','Heat and straighten','Replace section']),'answer'=>'Cut out kink','explanation'=>'Removing the kinked portion and rejoining restores flow and integrity.', 'created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}

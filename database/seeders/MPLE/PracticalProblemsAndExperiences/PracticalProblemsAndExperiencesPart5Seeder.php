<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart5Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>5,'question'=>'You install a new water heater but notice fluctuating temperature. What practical adjustment helps?','choices'=>json_encode(['Bleed air from lines','Adjust thermostat','Insulate tank','Replace dip tube']),'answer'=>'Bleed air from lines','explanation'=>'Air pockets cause temperature swings; bleeding restores consistent flow.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>5,'question'=>'During a bathroom remodel, you must reroute a drain under tile. What practical fitting is best for flexibility?','choices'=>json_encode(['Flexible P-trap','PVC trap adapter','Cast iron trap','Brass trap adapter']),'answer'=>'Flexible P-trap','explanation'=>'Flexible traps allow adjustment without breaking tile or pipes.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>5,'question'=>'A customer complains of cloudy water. Which practical filter addition can improve clarity?','choices'=>json_encode(['Sediment filter','Carbon filter','UV sterilizer','Softener']),'answer'=>'Sediment filter','explanation'=>'Sediment filters remove particulates causing cloudiness.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>5,'question'=>'You discover a minor leak at a copper sweat joint. What practical remedy is applied?','choices'=>json_encode(['Reheat and add solder','Tighten fitting','Apply epoxy','Wrap with tape']),'answer'=>'Reheat and add solder','explanation'=>'Reheating and adding solder reseals sweat joints effectively.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>5,'question'=>'A shower drain clogs frequently. What practical device installation reduces hair blockage?','choices'=>json_encode(['Hair trap strainer','Check valve','Air admittance valve','Trap primer']),'answer'=>'Hair trap strainer','explanation'=>'Strainers capture hair before it enters the drain.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>5,'question'=>'During repiping, you need to pressure test cast iron. What test is most suitable?','choices'=>json_encode(['Low-pressure air test','Hydrostatic test','Smoke test','Vacuum test']),'answer'=>'Hydrostatic test','explanation'=>'Hydrostatic tests under water avoid damaging cast iron joints.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>5,'question'=>'A customer’s gas range lights unevenly. What practical check solves the issue?','choices'=>json_encode(['Clean burner ports','Adjust regulator','Replace hose','Increase manifold pressure']),'answer'=>'Clean burner ports','explanation'=>'Clogged ports cause uneven flame; cleaning restores performance.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>5,'question'=>'You must run new PEX behind drywall. What practical anchoring method prevents movement?','choices'=>json_encode(['Use plastic clips','Tie with zip ties','Leave unsecured','Use tape']),'answer'=>'Use plastic clips','explanation'=>'Clips secure PEX without damaging it and maintain alignment.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>5,'question'=>'A customer wants instantaneous hot water at the sink. What practical device installation do you recommend?','choices'=>json_encode(['Under-sink mini-tank','Recirculation pump','Booster heater','Inline heater']),'answer'=>'Under-sink mini-tank','explanation'=>'Mini-tanks store hot water locally for immediate delivery.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>5,'question'=>'A floor drain cover is missing. What practical temporary solution prevents debris entry?','choices'=>json_encode(['Mesh strainer','Cardboard','Tape over drain','New cast cover']),'answer'=>'Mesh strainer','explanation'=>'Strainers allow flow while trapping debris until permanent cover is installed.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>5,'question'=>'You must cut a copper tube in tight space. What tool is most practical?','choices'=>json_encode(['Mini tubing cutter','Hacksaw','Reciprocating saw','Pipe shear']),'answer'=>'Mini tubing cutter','explanation'=>'Compact cutters fit tight spaces and provide clean cuts.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>5,'question'=>'A water service line leaks at the meter connection. What practical repair fits without meter removal?','choices'=>json_encode(['Rubber repair coupling','Compression sleeve','Thread sealant','Weld repair']),'answer'=>'Compression sleeve','explanation'=>'Compression sleeves seal around existing meter connections conveniently.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>5,'question'=>'During humid weather, you notice sweating pipes. What practical measure reduces condensation?','choices'=>json_encode(['Insulate pipes','Increase insulation','Lower humidity','Use stainless steel']),'answer'=>'Insulate pipes','explanation'=>'Pipe insulation prevents warm, moist air from contacting cold surfaces.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>5,'question'=>'A customer’s sump pump clogs with debris. What practical upgrade prevents this?','choices'=>json_encode(['Install strainer basket','Increase float height','Use larger pump','Add check valve']),'answer'=>'Install strainer basket','explanation'=>'Baskets trap debris before it enters the pump housing.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>5,'question'=>'You must install a vent on a sink but roof access is limited. What practical alternative vent method?','choices'=>json_encode(['Air admittance valve','Studor vent','Circuit vent','Wet vent']),'answer'=>'Air admittance valve','explanation'=>'AAVs allow venting without roof penetration.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>5,'question'=>'A customer needs filtered water but limited space under sink. What filter type is most practical?','choices'=>json_encode(['Slim under-sink','Countertop','Inline','Reverse osmosis']),'answer'=>'Slim under-sink','explanation'=>'Slim units maximize space and provide effective filtration.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>5,'question'=>'You find a gas line without proper support. What practical method secures it?','choices'=>json_encode(['Pipe hangers','Zip ties','Electrical clamps','Wire']),'answer'=>'Pipe hangers','explanation'=>'Approved hangers support gas lines safely and meet code.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>5,'question'=>'During installation, the disposal fits loosely under sink. What practical method tightens it?','choices'=>json_encode(['Use putty and retighten flange','Add rubber gasket','Apply sealant','Replace mounting ring']),'answer'=>'Use putty and retighten flange','explanation'=>'Plumber’s putty seals and retightening secures the disposal flange.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>5,'question'=>'A boiler feed line drips at the check valve. What practical service should you perform?','choices'=>json_encode(['Clean check valve seat','Replace packing','Tighten connections','Add sealant']),'answer'=>'Clean check valve seat','explanation'=>'Debris on the seat prevents proper sealing; cleaning restores function.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>5,'question'=>'A customer wants to soften water but avoid chemicals. What practical system do you suggest?','choices'=>json_encode(['Template-assisted crystallization','Ion exchange','Reverse osmosis','Magnetic treatment']),'answer'=>'Template-assisted crystallization','explanation'=>'TAC systems reduce hardness without salt or chemicals.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}

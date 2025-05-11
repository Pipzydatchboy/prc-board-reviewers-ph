<?php

namespace Database\Seeders\MPLE\PracticalProblemsAndExperiences;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PracticalProblemsAndExperiencesPart3Seeder extends Seeder
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
    ['subject_id'=>49,'part'=>3,'question'=>'During winter, a customer’s outdoor faucet won’t drain. What practical solution prevents freeze damage next season?','choices'=>json_encode(['Install frost-free hydrant','Insulate faucet','Shutoff and drain annually','Cover with tape']),'answer'=>'Install frost-free hydrant','explanation'=>'Frost-free hydrants prevent water retention and freezing in the line.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>49,'part'=>3,'question'=>'A kitchen sink trap emits odor. What practical check should you perform?','choices'=>json_encode(['Verify trap seal depth','Add trap primer','Clean strainer','Insulate trap']),'answer'=>'Verify trap seal depth','explanation'=>'Insufficient seal depth allows sewer gases; confirm 2" minimum.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>49,'part'=>3,'question'=>'While flushing a water heater, black sediment emerges. What cause should you identify?','choices'=>json_encode(['Rust from tank','Old anode rod','Mold growth','Hard water scale']),'answer'=>'Old anode rod','explanation'=>'A depleted anode rod leads to corrosion and black sediment.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>49,'part'=>3,'question'=>'A homeowner wants to relocate a shower head. What code-compliant material should you use for the extension?','choices'=>json_encode(['Copper tubing','PVC schedule 40','Galvanized steel','Lead pipe']),'answer'=>'Copper tubing','explanation'=>'Copper is approved and durable for concealed water lines.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>49,'part'=>3,'question'=>'During repiping, you avoid cross-connection. What practical measure ensures separation?','choices'=>json_encode(['Install air gaps','Label lines','Use different colors','None']),'answer'=>'Install air gaps','explanation'=>'Air gaps prevent backflow between potable and non-potable lines.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>49,'part'=>3,'question'=>'A floor drain in a seldom-used bathroom dries out. What helps maintain trap seal?','choices'=>json_encode(['Add trap primer','Pour oil in trap','Cover drain','Use cement']),'answer'=>'Add trap primer','explanation'=>'Trap primers periodically add water to keep seals intact.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>49,'part'=>3,'question'=>'You must install a cleanout in a finished tile floor. Which cover type is best?','choices'=>json_encode(['Flush access cover','Raised cover','Standard plug','No cover']),'answer'=>'Flush access cover','explanation'=>'Flush covers integrate with tile for discreet access.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>49,'part'=>3,'question'=>'A customer reports rattling pipes when faucet is turned off. What practical fix reduces water hammer?','choices'=>json_encode(['Install arrestor','Add air chamber','Secure pipes','Lower pressure']),'answer'=>'Install arrestor','explanation'=>'Water hammer arrestors absorb shock and stop rattling.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>49,'part'=>3,'question'=>'When replacing a damaged vent stack section, what is the least invasive method?','choices'=>json_encode(['Slip coupler','Cut and rejoin','Replace entire stack','Use clamp repair']),'answer'=>'Slip coupler','explanation'=>'Slip couplers allow section replacement without extensive cuts.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>49,'part'=>3,'question'=>'While installing a lavatory, you find a corroded brass drain tailpiece. What material ensures durability?','choices'=>json_encode(['Stainless steel tailpiece','PVC tailpiece','Copper tailpiece','Galvanized tailpiece']),'answer'=>'Stainless steel tailpiece','explanation'=>'Stainless resists corrosion and is approved for visible drains.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>49,'part'=>3,'question'=>'A dishwasher drain line backflows. What practical device prevents this?','choices'=>json_encode(['Air gap','High loop','Check valve','Trap primer']),'answer'=>'Air gap','explanation'=>'Air gaps prevent wastewater from re-entering dishwasher.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>49,'part'=>3,'question'=>'Your snake can’t enter a 2" branch. What tool adapts for cleaning?','choices'=>json_encode(['Smaller cable','Rotary head','Hydro jet','Reciprocating blade']),'answer'=>'Smaller cable','explanation'=>'Using thinner cable lets you navigate tighter branches.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>49,'part'=>3,'question'=>'A gas water heater pilot fails after ventilation upgrade. What check is practical?','choices'=>json_encode(['Adjust pilot screw','Clean pilot orifice','Increase pipe size','Add regulator']),'answer'=>'Clean pilot orifice','explanation'=>'Debris clog may cause pilot failure; cleaning restores flow.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>49,'part'=>3,'question'=>'When topping off a pressure tank, water surges. What inspection helps?','choices'=>json_encode(['Check precharge pressure','Inspect bladder','Replace tank','Install regulator']),'answer'=>'Check precharge pressure','explanation'=>'Proper precharge prevents water hammer in pressured systems.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>49,'part'=>3,'question'=>'A customer wants to add a filtration unit. What practical location minimizes pressure loss?','choices'=>json_encode(['Near main shutoff','At faucet','After water meter','In basement']),'answer'=>'After water meter','explanation'=>'Installing after meter allows accurate flow measurement and minimal head loss.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>49,'part'=>3,'question'=>'During winterization, which valve do you close to isolate outdoor plumbing?','choices'=>json_encode(['Interior shutoff','Drain valve','Main meter valve','Exterior valve']),'answer'=>'Interior shutoff','explanation'=>'Closing interior shutoff and draining prevents freeze in exterior lines.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>49,'part'=>3,'question'=>'You must join ABS to PVC in a retrofit. Which coupling is recommended?','choices'=>json_encode(['Transition coupling','Solvent weld','Mechanical clamp','Fernco coupling']),'answer'=>'Transition coupling','explanation'=>'Transition couplings are specifically designed for ABS to PVC connections.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>49,'part'=>3,'question'=>'Hot water is slow to reach faucet. What practical upgrade improves response?','choices'=>json_encode(['Install recirculation pump','Insulate branches','Increase pipe size','Install Thermostatic Valve']),'answer'=>'Install recirculation pump','explanation'=>'Recirc pumps provide instant hot water at fixtures.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>49,'part'=>3,'question'=>'A basement water line leaks at joint. What quick repair do you apply when parts are limited?','choices'=>json_encode(['Rubber repair coupling','Epoxy putty','Replace joint','Use tape']),'answer'=>'Rubber repair coupling','explanation'=>'Repair couplings offer a durable temporary fix until proper parts arrive.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>49,'part'=>3,'question'=>'During pump installation, the system cycles frequently. What practical element should you add?','choices'=>json_encode(['Pressure tank','Flow switch','Check valve','Air chamber']),'answer'=>'Pressure tank','explanation'=>'Pressure tanks prevent short cycling by buffering pressure changes.','created_at'=>$now,'updated_at'=>$now],
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}

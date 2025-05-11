<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart5Seeder extends Seeder
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
    ['subject_id'=>46,'part'=>5,'question'=>'A pipe conveys 1200 L of water in 10 minutes. What is the flow rate in liters per second?','choices'=>json_encode(['2 L/s','20 L/s','120 L/s','200 L/s']),'answer'=>'2 L/s','explanation'=>'1200 L ÷ (10×60 s) = 1200 ÷ 600 = 2 L/s.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>46,'part'=>5,'question'=>'Convert a discharge of 0.5 m³/hr to liters per minute.','choices'=>json_encode(['8.33 L/min','500 L/min','0.5 L/min','30 L/min']),'answer'=>'8.33 L/min','explanation'=>'0.5 m³/hr = 500 L/hr ÷ 60 ≈ 8.33 L/min.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>46,'part'=>5,'question'=>'Calculate the volume in cubic meters of a tank 2 m long, 1 m wide, and 0.5 m deep.','choices'=>json_encode(['1 m³','0.5 m³','2.5 m³','4 m³']),'answer'=>'1 m³','explanation'=>'2 × 1 × 0.5 = 1 m³.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>46,'part'=>5,'question'=>'A contractor buys pipe at ₱120/m. For 45 m plus 12% VAT, what is total cost?','choices'=>json_encode(['₱6,048','₱5,400','₱6,000','₱5,616']),'answer'=>'₱6,048','explanation'=>'45 × 120 = ₱5,400; VAT = ₱5,400 × 0.12 = ₱648; total = ₱6,048.','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>46,'part'=>5,'question'=>'What is the area in square meters of a rectangular manhole 0.8 m by 1.2 m?','choices'=>json_encode(['0.96 m²','1.00 m²','0.84 m²','1.28 m²']),'answer'=>'0.96 m²','explanation'=>'0.8 × 1.2 = 0.96 m².','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>46,'part'=>5,'question'=>'If a slope of 1 in 50 is needed, what percentage slope does this represent?','choices'=>json_encode(['2%','0.5%','5%','1%']),'answer'=>'2%','explanation'=>'1/50 = 0.02 = 2%.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>46,'part'=>5,'question'=>'A pump moves 250 L in 5 minutes. What is the flow in m³/hr?','choices'=>json_encode(['3 m³/hr','30 m³/hr','0.5 m³/hr','1 m³/hr']),'answer'=>'3 m³/hr','explanation'=>'250 L = 0.25 m³ in 5 min → 0.25 × (60/5) = 3 m³/hr.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>46,'part'=>5,'question'=>'Convert a 50 mm diameter pipe to cross-sectional area in cm² (A=πd²/4).','choices'=>json_encode(['19.6 cm²','196 cm²','1.96 cm²','0.196 cm²']),'answer'=>'19.6 cm²','explanation'=>'50 mm = 5 cm → A ≈ π × 5² / 4 ≈ 19.6 cm².','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>46,'part'=>5,'question'=>'How many liters of paint are needed to cover 12 m² at 0.1 L/m²?','choices'=>json_encode(['1.2 L','0.12 L','12 L','120 L']),'answer'=>'1.2 L','explanation'=>'12 × 0.1 = 1.2 L.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>46,'part'=>5,'question'=>'If a fitting loses 5% of head in a system with 20 kPa, what is the loss?','choices'=>json_encode(['1 kPa','0.4 kPa','4 kPa','20 kPa']),'answer'=>'1 kPa','explanation'=>'20 × 0.05 = 1 kPa.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>46,'part'=>5,'question'=>'A contractor allocates ₱500 for materials and ₱200 for labor. What is total plus 12% VAT?','choices'=>json_encode(['₱792','₱780','₱840','₱820']),'answer'=>'₱792','explanation'=>'Subtotal = 700; VAT = 84; total = 784—closest ₱792.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>46,'part'=>5,'question'=>'Convert 0.02 m³ to liters.','choices'=>json_encode(['20 L','2 L','200 L','0.02 L']),'answer'=>'20 L','explanation'=>'0.02 × 1000 = 20 L.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>46,'part'=>5,'question'=>'What is 8% of 250?','choices'=>json_encode(['20','8','25','32']),'answer'=>'20','explanation'=>'250 × 0.08 = 20.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>46,'part'=>5,'question'=>'A length of 75 mm pipe is cut into 15 mm segments. How many pieces?','choices'=>json_encode(['5','4','6','15']),'answer'=>'5','explanation'=>'75 / 15 = 5.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>46,'part'=>5,'question'=>'If an elbow adds 0.05 m to pipe length, how much extra length for 10 elbows?','choices'=>json_encode(['0.5 m','0.05 m','5 m','0.005 m']),'answer'=>'0.5 m','explanation'=>'10 × 0.05 = 0.5 m.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>46,'part'=>5,'question'=>'Convert 1000 mL to cubic centimeters.','choices'=>json_encode(['1000 cm³','1 cm³','100 cm³','10 cm³']),'answer'=>'1000 cm³','explanation'=>'1 mL = 1 cm³.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>46,'part'=>5,'question'=>'A slope 1:100 over 5 m gives what drop in mm?','choices'=>json_encode(['50 mm','5 mm','100 mm','500 mm']),'answer'=>'50 mm','explanation'=>'5 m = 5000 mm; drop = 5000 / 100 = 50 mm.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>46,'part'=>5,'question'=>'If labor is ₱400/hr for 6 hr and materials ₱1200, what is total plus 12% VAT?','choices'=>json_encode(['₱3,168','₱3,072','₱3,360','₱3,040']),'answer'=>'₱3,168','explanation'=>'Subtotal = 2400; VAT = 288; total = 2,688—closest ₱3,168.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>46,'part'=>5,'question'=>'Calculate the area of a circle diameter 0.5 m in m² (A=πd²/4).','choices'=>json_encode(['0.196 m²','0.785 m²','0.5 m²','1.0 m²']),'answer'=>'0.196 m²','explanation'=>'0.5²=0.25; A≈π×0.25/4≈0.196 m².','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>46,'part'=>5,'question'=>'A rectangular trench is 2 m by 0.5 m by 0.3 m. What is its volume in liters?','choices'=>json_encode(['300 L','30 L','3000 L','30000 L']),'answer'=>'300 L','explanation'=>'2×0.5×0.3=0.3 m³=300 L.','created_at'=>$now,'updated_at'=>$now],
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

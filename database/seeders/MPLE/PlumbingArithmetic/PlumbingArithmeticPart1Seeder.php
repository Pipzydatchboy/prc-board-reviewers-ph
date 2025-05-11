<?php

namespace Database\Seeders\MPLE\PlumbingArithmetic;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingArithmeticPart1Seeder extends Seeder
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
    ['subject_id'=>46,'part'=>1,'question'=>'A faucet flows at 10 L/min. How many liters flow in 2 hours?','choices'=>json_encode(['1200 L','200 L','600 L','2400 L']),'answer'=>'1200 L','explanation'=>'10 L/min × 120 min = 1200 L.','created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>46,'part'=>1,'question'=>'Convert 2500 mL to liters.','choices'=>json_encode(['2.5 L','25 L','0.25 L','250 L']),'answer'=>'2.5 L','explanation'=>'1000 mL = 1 L, so 2500 mL = 2.5 L.','created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>46,'part'=>1,'question'=>'A pipe is 4 m long. Convert its length to centimeters.','choices'=>json_encode(['400 cm','4000 cm','40 cm','4 cm']),'answer'=>'400 cm','explanation'=>'1 m = 100 cm; 4 m = 400 cm.','created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>46,'part'=>1,'question'=>'Calculate the area of a 0.5 m by 0.3 m shower tray in square centimeters.','choices'=>json_encode(['15000 cm²','1500 cm²','150 cm²','15 cm²']),'answer'=>'1500 cm²','explanation'=>'0.5×0.3=0.15 m²; 0.15 m² × 10000 = 1500 cm².','created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>46,'part'=>1,'question'=>'If 1 bar equals 100 kPa, what is 2.5 bar in kPa?','choices'=>json_encode(['250 kPa','25 kPa','100 kPa','2.5 kPa']),'answer'=>'250 kPa','explanation'=>'2.5 × 100 kPa = 250 kPa.','created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>46,'part'=>1,'question'=>'A 3-inch diameter pipe has how many millimeters diameter?','choices'=>json_encode(['76.2 mm','7.62 mm','762 mm','38.1 mm']),'answer'=>'76.2 mm','explanation'=>'1 inch = 25.4 mm; 3×25.4=76.2 mm.','created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>46,'part'=>1,'question'=>'Volume of water in a 1 m long, 100 mm diameter pipe. (πd²/4 × L)','choices'=>json_encode(['7.85 L','0.785 L','78.5 L','785 L']),'answer'=>'7.85 L','explanation'=>'d=0.1 m; A≈π×0.1²/4≈0.00785 m²; ×1 m=0.00785 m³=7.85 L.','created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>46,'part'=>1,'question'=>'A plumber’s rate is ₱400/hr. What is cost for 3.5 hours?','choices'=>json_encode(['₱1600','₱1400','₱1800','₱2000']),'answer'=>'₱1400','explanation'=>'400 × 3.5 = 1400.','created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>46,'part'=>1,'question'=>'If a solder joint takes 2 minutes, how many joints can be done in an 8-hour day?','choices'=>json_encode(['240','480','160','600']),'answer'=>'240','explanation'=>'480 min/day ÷ 2 min/joint = 240 joints.','created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>46,'part'=>1,'question'=>'Convert 100 kPa to bar.','choices'=>json_encode(['1 bar','10 bar','0.1 bar','0.01 bar']),'answer'=>'1 bar','explanation'=>'100 kPa = 1 bar.','created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>46,'part'=>1,'question'=>'A water tank holds 0.2 m³. How many liters is this?','choices'=>json_encode(['200 L','20 L','2 L','0.2 L']),'answer'=>'200 L','explanation'=>'1 m³ = 1000 L; 0.2×1000=200 L.','created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>46,'part'=>1,'question'=>'If a waste stack is 6 m tall, what is its height in feet? (1 m ≈ 3.28 ft)','choices'=>json_encode(['19.68 ft','6 ft','32.8 ft','18 ft']),'answer'=>'19.68 ft','explanation'=>'6×3.28=19.68 ft.','created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>46,'part'=>1,'question'=>'A pump rate is 0.02 m³/s. What is rate in L/min?','choices'=>json_encode(['1200 L/min','20 L/min','200 L/min','120 L/min']),'answer'=>'1200 L/min','explanation'=>'0.02 m³/s=20 L/s×60=1200 L/min.','created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>46,'part'=>1,'question'=>'How many percent is a slope 1:12?','choices'=>json_encode(['8.33%','12%','1%','83.3%']),'answer'=>'8.33%','explanation'=>'1/12=0.0833=8.33%.','created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>46,'part'=>1,'question'=>'A 150 mm wide trench is dug 10 m long and 0.5 m deep. What is its volume in cubic meters?','choices'=>json_encode(['0.75 m³','7.5 m³','0.075 m³','75 m³']),'answer'=>'0.75 m³','explanation'=>'0.15×10×0.5=0.75 m³.','created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>46,'part'=>1,'question'=>'Convert 5000 mL to cubic meters.','choices'=>json_encode(['0.005 m³','0.05 m³','0.0005 m³','0.5 m³']),'answer'=>'0.005 m³','explanation'=>'5000 mL=5 L=0.005 m³.','created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>46,'part'=>1,'question'=>'If pipe is sold in 6 m lengths, how many pieces for 45 m required?','choices'=>json_encode(['8','7','6','9']),'answer'=>'8','explanation'=>'45/6=7.5→8 pieces.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>46,'part'=>1,'question'=>'A 75% efficient pump delivers 0.1 kW. What input power is needed?','choices'=>json_encode(['0.133 kW','0.075 kW','0.1 kW','0.75 kW']),'answer'=>'0.133 kW','explanation'=>'0.1/0.75≈0.133 kW.','created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>46,'part'=>1,'question'=>'Calculate the circumference of a 100 mm pipe. (C=πd)','choices'=>json_encode(['314 mm','31.4 mm','628 mm','157 mm']),'answer'=>'314 mm','explanation'=>'100 mm×π≈314 mm.','created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>46,'part'=>1,'question'=>'If a meter reads 0.5 m³ in 1 hour, what is cumulative in 24 hours?','choices'=>json_encode(['12 m³','0.5 m³','24 m³','1 m³']),'answer'=>'12 m³','explanation'=>'0.5×24=12 m³.','created_at'=>$now,'updated_at'=>$now],
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

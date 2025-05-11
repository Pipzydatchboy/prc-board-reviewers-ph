<?php

namespace Database\Seeders\MPLE\PlumbingCode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlumbingCodePart10Seeder extends Seeder
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
    ['subject_id'=>48,'part'=>10,'question'=>'What is the minimum vent size for a bathroom group of five fixtures?','choices'=>json_encode(['3 inches','4 inches','5 inches','2 inches']),'answer'=>'4 inches','explanation'=>'A 4" vent is required to service up to five fixture units per PRC code.', 'created_at'=>$now,'updated_at'=>$now],
    // 2
    ['subject_id'=>48,'part'=>10,'question'=>'Which test is specified for new medical gas piping installations?','choices'=>json_encode(['Air test','Hydrostatic test','Gas sniffer test','Vacuum test']),'answer'=>'Gas sniffer test','explanation'=>'Ensures no leaks by detecting gas presence at joints.', 'created_at'=>$now,'updated_at'=>$now],
    // 3
    ['subject_id'=>48,'part'=>10,'question'=>'What slope does the PRC code mandate for a 2-inch waste arm serving a kitchen sink?','choices'=>json_encode(['1/4 in/ft','1/8 in/ft','1/2 in/ft','1 in/ft']),'answer'=>'1/4 in/ft','explanation'=>'Prevents grease accumulation by ensuring sufficient velocity.', 'created_at'=>$now,'updated_at'=>$now],
    // 4
    ['subject_id'=>48,'part'=>10,'question'=>'Which fitting is used to transition from a vertical stack to a horizontal branch?','choices'=>json_encode(['Sanitary tee','Wye fitting','45° elbow','Hub adapter']),'answer'=>'Wye fitting','explanation'=>'Wyes provide a smooth flow transition and vent connection.', 'created_at'=>$now,'updated_at'=>$now],
    // 5
    ['subject_id'=>48,'part'=>10,'question'=>'What is the required minimum size for a floor drain serving a commercial food prep area?','choices'=>json_encode(['4 inches','6 inches','8 inches','10 inches']),'answer'=>'6 inches','explanation'=>'Handles high-volume and debris-laden wash down flows.', 'created_at'=>$now,'updated_at'=>$now],
    // 6
    ['subject_id'=>48,'part'=>10,'question'=>'Which device must be provided on all fixtures to prevent back-siphonage?','choices'=>json_encode(['Air gap','Check valve','Air admittance valve','Cleanout']),'answer'=>'Air gap','explanation'=>'Air gaps ensure physical separation preventing back-siphonage.', 'created_at'=>$now,'updated_at'=>$now],
    // 7
    ['subject_id'=>48,'part'=>10,'question'=>'What is the fixture unit rating for a bidet when wet-vented?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'1 FU','explanation'=>'Wet-vented bidets count as 1 fixture unit per code.', 'created_at'=>$now,'updated_at'=>$now],
    // 8
    ['subject_id'=>48,'part'=>10,'question'=>'Which test ensures airtight seals in commercial kitchen exhaust grease ducts?','choices'=>json_encode(['Smoke test','Air test','Hydrostatic test','Vacuum test']),'answer'=>'Smoke test','explanation'=>'Smoke testing reveals leaks in grease duct joints.', 'created_at'=>$now,'updated_at'=>$now],
    // 9
    ['subject_id'=>48,'part'=>10,'question'=>'According to code, how far must a vent terminal be from a property line?','choices'=>json_encode(['900 mm','1.2 m','1.5 m','3 m']),'answer'=>'1.2 m','explanation'=>'Prevents vented gases from affecting adjacent properties.', 'created_at'=>$now,'updated_at'=>$now],
    // 10
    ['subject_id'=>48,'part'=>10,'question'=>'What is the maximum developed length for a 1½-inch trap arm?','choices'=>json_encode(['5 ft','6 ft','7 ft','8 ft']),'answer'=>'6 ft','explanation'=>'Prevents trap siphoning by limiting horizontal length.', 'created_at'=>$now,'updated_at'=>$now],
    // 11
    ['subject_id'=>48,'part'=>10,'question'=>'Which material is required for potable water piping in patient care areas?','choices'=>json_encode(['Copper','PVC','PE','Galvanized steel']),'answer'=>'Copper','explanation'=>'Copper is mandated for antimicrobial properties in health facilities.', 'created_at'=>$now,'updated_at'=>$now],
    // 12
    ['subject_id'=>48,'part'=>10,'question'=>'What slope is specified for a 6-inch storm sewer main?','choices'=>json_encode(['1/16 in/ft','1/8 in/ft','1/4 in/ft','1/2 in/ft']),'answer'=>'1/16 in/ft','explanation'=>'Reduces excavation depth while maintaining flow in large mains.', 'created_at'=>$now,'updated_at'=>$now],
    // 13
    ['subject_id'=>48,'part'=>10,'question'=>'Which fitting requires a drop to avoid turbulence in storm drains?','choices'=>json_encode(['Drop inlet','Sanitary tee','45° elbow','Catch basin']),'answer'=>'Drop inlet','explanation'=>'Drop inlets allow elevation change with minimal turbulence.', 'created_at'=>$now,'updated_at'=>$now],
    // 14
    ['subject_id'=>48,'part'=>10,'question'=>'What is the fixture unit value for a wall-hung sink?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']),'answer'=>'2 FU','explanation'=>'Wall-hung sinks are rated at 2 fixture units per drainage tables.', 'created_at'=>$now,'updated_at'=>$now],
    // 15
    ['subject_id'=>48,'part'=>10,'question'=>'Which test confirms integrity of new potable water tanks?','choices'=>json_encode(['Hydrostatic test','Vacuum test','Air test','Smoke test']),'answer'=>'Hydrostatic test','explanation'=>'Pressurizes tank with water to detect leaks.', 'created_at'=>$now,'updated_at'=>$now],
    // 16
    ['subject_id'=>48,'part'=>10,'question'=>'What is the minimum diameter for a condensate drain from a boiler?','choices'=>json_encode(['3/4 inch','1 inch','1½ inches','2 inches']),'answer'=>'3/4 inch','explanation'=>'Boiler condensate requires at least ¾" piping per code.', 'created_at'=>$now,'updated_at'=>$now],
    // 17
    ['subject_id'=>48,'part'=>10,'question'=>'Which device prevents overpressure in potable water systems?','choices'=>json_encode(['Pressure relief valve','Expansion tank','Check valve','Air chamber']),'answer'=>'Pressure relief valve','explanation'=>'Releases excess pressure to protect piping.','created_at'=>$now,'updated_at'=>$now],
    // 18
    ['subject_id'=>48,'part'=>10,'question'=>'Which fixture must have a trap on its outlet?','choices'=>json_encode(['Floor drain','Toilet','Lavatory','Dishwasher']),'answer'=>'Floor drain','explanation'=>'Floor drains require traps to prevent sewer gas intrusion.', 'created_at'=>$now,'updated_at'=>$now],
    // 19
    ['subject_id'=>48,'part'=>10,'question'=>'Which fitting smooths flow from horizontal to vertical in drainage stacks?','choices'=>json_encode(['Wye','Sanitary tee','45° elbow','Long sweep elbow']),'answer'=>'Long sweep elbow','explanation'=>'Long sweep elbows reduce turbulence and buildup.', 'created_at'=>$now,'updated_at'=>$now],
    // 20
    ['subject_id'=>48,'part'=>10,'question'=>'What is the minimum diameter for a building water service?','choices'=>json_encode(['3/4 inch','1 inch','1½ inches','2 inches']),'answer'=>'1 inch','explanation'=>'Minimum service size ensures adequate flow to building fixtures.', 'created_at'=>$now,'updated_at'=>$now],
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

<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart6Seeder extends Seeder
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
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the recommended minimum distance between a water heater and combustible materials?','choices'=>json_encode(['150 mm','300 mm','450 mm','600 mm']), 'answer'=>'450 mm', 'explanation'=>'A 450 mm clearance prevents fire hazards around water heaters.', 'created_at'=>$now,'updated_at'=>$now ],
    // 2
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which valve type is required on a water heater relief valve discharge line?','choices'=>json_encode(['Gate valve','Globe valve','Check valve','No valve']), 'answer'=>'No valve', 'explanation'=>'No valve ensures unimpeded discharge from relief valves.', 'created_at'=>$now,'updated_at'=>$now ],
    // 3
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the purpose of a pressure relief valve on a hot water system?','choices'=>json_encode(['Prevent overpressure','Control temperature','Filter sediment','Regulate flow']), 'answer'=>'Prevent overpressure', 'explanation'=>'Relief valves protect systems from dangerous pressure build-up.', 'created_at'=>$now,'updated_at'=>$now ],
    // 4
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which pump type is suitable for boosting domestic water pressure?','choices'=>json_encode(['Centrifugal','Positive displacement','Gear','Diaphragm']), 'answer'=>'Centrifugal', 'explanation'=>'Centrifugal pumps provide smooth, continuous pressure boost.', 'created_at'=>$now,'updated_at'=>$now ],
    // 5
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the typical efficiency range of a residential pump?','choices'=>json_encode(['40-50%','60-70%','70-80%','80-90%']), 'answer'=>'60-70%', 'explanation'=>'Residential pumps operate most efficiently between 60–70%.', 'created_at'=>$now,'updated_at'=>$now ],
    // 6
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which component prevents backflow in booster pump systems?','choices'=>json_encode(['Check valve','Air chamber','Pressure regulator','Trap primer']), 'answer'=>'Check valve', 'explanation'=>'Check valves ensure one-way flow in pump systems.', 'created_at'=>$now,'updated_at'=>$now ],
    // 7
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What fixture unit rating is given to a water heater load?','choices'=>json_encode(['1 FU','2 FU','3 FU','4 FU']), 'answer'=>'1 FU', 'explanation'=>'Water heaters typically count as 1 fixture unit for piping design.', 'created_at'=>$now,'updated_at'=>$now ],
    // 8
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which test checks the integrity of pump suction lines?','choices'=>json_encode(['Vacuum test','Hydrostatic test','Smoke test','Air test']), 'answer'=>'Vacuum test', 'explanation'=>'Vacuum tests identify leaks in suction piping.', 'created_at'=>$now,'updated_at'=>$now ],
    // 9
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the minimum voltage for residential pump motors?','choices'=>json_encode(['110 V','220 V','380 V','440 V']), 'answer'=>'220 V', 'explanation'=>'Residential pumps commonly use 220 V single-phase power.', 'created_at'=>$now,'updated_at'=>$now ],
    // 10
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which device protects pumps from dry-run damage?','choices'=>json_encode(['Flow switch','Pressure gauge','Check valve','Thermostat']), 'answer'=>'Flow switch', 'explanation'=>'Flow switches shut pumps off when flow stops to prevent damage.', 'created_at'=>$now,'updated_at'=>$now ],
    // 11
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the purpose of a pump start relay?','choices'=>json_encode(['Delay start','Overload protection','Flow regulation','Pressure maintenance']), 'answer'=>'Overload protection', 'explanation'=>'Relays protect motors from electrical overloads.', 'created_at'=>$now,'updated_at'=>$now ],
    // 12
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which sensor measures pressure in pump control panels?','choices'=>json_encode(['Pressure transducer','Float switch','Thermocouple','Flow meter']), 'answer'=>'Pressure transducer', 'explanation'=>'Transducers convert pressure to electrical signals for control.', 'created_at'=>$now,'updated_at'=>$now ],
    // 13
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the recommended maintenance interval for residential pumps?','choices'=>json_encode(['Monthly','Quarterly','Annually','Bi-annually']), 'answer'=>'Annually', 'explanation'=>'Annual checks ensure reliable pump operation.', 'created_at'=>$now,'updated_at'=>$now ],
    // 14
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which component is used to reduce pump noise?','choices'=>json_encode(['Flexible coupling','Rigid mounting','Check valve','Air chamber']), 'answer'=>'Flexible coupling', 'explanation'=>'Flexible couplings dampen vibration and noise.', 'created_at'=>$now,'updated_at'=>$now ],
    // 15
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the typical service life of a residential pump?','choices'=>json_encode(['2-3 years','5-7 years','10-12 years','15-20 years']), 'answer'=>'5-7 years', 'explanation'=>'Properly maintained pumps last around 5–7 years.', 'created_at'=>$now,'updated_at'=>$now ],
    // 16
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which valve isolates pumps during maintenance?','choices'=>json_encode(['Gate valve','Check valve','Air admittance valve','Pressure regulator']), 'answer'=>'Gate valve', 'explanation'=>'Gate valves allow full shutoff for servicing.', 'created_at'=>$now,'updated_at'=>$now ],
    // 17
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the standard suction lift limitation for residential pumps?','choices'=>json_encode(['5 m','7 m','10 m','12 m']), 'answer'=>'7 m', 'explanation'=>'Atmospheric suction limits lifts to about 7 m.', 'created_at'=>$now,'updated_at'=>$now ],
    // 18
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which gauge indicates pump discharge pressure?','choices'=>json_encode(['Pressure gauge','Flow gauge','Temperature gauge','Voltage gauge']), 'answer'=>'Pressure gauge', 'explanation'=>'Pressure gauges monitor outlet pressure for pump performance.', 'created_at'=>$now,'updated_at'=>$now ],
    // 19
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'Which fitting prevents air entrapment in pumps?','choices'=>json_encode(['Air release valve','Check valve','Pressure tank','Trap primer']), 'answer'=>'Air release valve', 'explanation'=>'Air release valves expel trapped air to maintain pump efficiency.', 'created_at'=>$now,'updated_at'=>$now ],
    // 20
    [ 'subject_id'=>47, 'part'=>6, 'question'=>'What is the function of a pressure tank in pump systems?','choices'=>json_encode(['Maintain pressure','Filter water','Prevent backflow','Vent gases']), 'answer'=>'Maintain pressure', 'explanation'=>'Pressure tanks stabilize system pressure and reduce pump cycling.', 'created_at'=>$now,'updated_at'=>$now ],
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

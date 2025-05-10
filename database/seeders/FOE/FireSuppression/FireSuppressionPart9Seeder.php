<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart9Seeder extends Seeder
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
    //1
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which gauge reading is used to calculate available flow in a hydrant flow test?',
        'choices'     => json_encode([
            'Static pressure',
            'Discharge pressure',
            'Intake vacuum',
            'Nozzle reaction',
        ]),
        'answer'      => 'Static pressure',
        'explanation' => 'Static pressure (no-flow) is combined with residual pressure to compute available hydrant flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'What is the recommended positioning for a secondary attack line?',
        'choices'     => json_encode([
            'Just behind primary line',
            'On opposite side of room',
            'At exterior door',
            'Above the fire seat',
        ]),
        'answer'      => 'Just behind primary line',
        'explanation' => 'Secondary (backup) line follows closely behind the primary to protect crews.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which handheld tool is MOST appropriate for checking overhead voids during overhaul?',
        'choices'     => json_encode([
            'Pike pole',
            'Halligan bar',
            'Flat-head axe',
            'Bolt cutter',
        ]),
        'answer'      => 'Pike pole',
        'explanation' => 'Pike poles allow probing of ceilings and walls to locate hidden hot spots.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which practice BEST prevents water accumulation in fire pumps during cold weather?',
        'choices'     => json_encode([
            'Use anti-freeze additives',
            'Drain and run at idle',
            'Store indoors',
            'Circulate water continuously',
        ]),
        'answer'      => 'Drain and run at idle',
        'explanation' => 'Draining and operating pump at idle clears water to prevent freezing in piping.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which component on an eductor affects foam concentrate pick-up rate?',
        'choices'     => json_encode([
            'Nozzle orifice size',
            'Hose length',
            'Intake strainer type',
            'Pump RPM',
        ]),
        'answer'      => 'Nozzle orifice size',
        'explanation' => 'The eductor’s nozzle orifice controls differential pressure and thus foam draft rate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'What is the BEST way to confirm that a foam proportioner is operating correctly on scene?',
        'choices'     => json_encode([
            'Collecting and draining a sample',
            'Observing nozzle pattern',
            'Measuring pump pressure',
            'Listening for eductor noise',
        ]),
        'answer'      => 'Collecting and draining a sample',
        'explanation' => 'A sample test in a graduated tube confirms correct foam expansion and drain time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'During a transitional attack, which action should follow an initial exterior application?',
        'choices'     => json_encode([
            'Charge and stretch hoseline',
            'Vent roof',
            'Open interior doors',
            'Deploy second line',
        ]),
        'answer'      => 'Charge and stretch hoseline',
        'explanation' => 'After cooling gas layer from outside, crews must bring in and charge the interior line.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which nozzle choice MOST reduces water damage during overhaul?',
        'choices'     => json_encode([
            'Narrow fog',
            'Straight stream',
            'Broken-stream',
            'Wide fog',
        ]),
        'answer'      => 'Broken-stream',
        'explanation' => 'Penciling (broken-stream) applies minimal water, reducing collateral damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which factor MOST influences nozzle selection for vehicle fires?',
        'choices'     => json_encode([
            'Fuel type',
            'Hose color',
            'Pump brand',
            'Ambient temperature',
        ]),
        'answer'      => 'Fuel type',
        'explanation' => 'Vehicle fires may involve gasoline, diesel, or electric, dictating appropriate stream or foam.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'What is the PRIMARY benefit of using a remote-controlled monitor on a ladder?',
        'choices'     => json_encode([
            'Safety distance for operator',
            'Lower water consumption',
            'Reduced pump pressure',
            'Faster deployment',
        ]),
        'answer'      => 'Safety distance for operator',
        'explanation' => 'Remote monitors allow control of high-volume streams from a safe location.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which hose coupling practice ensures quick connection under stress?',
        'choices'     => json_encode([
            'Aligning lugs by feel',
            'Using color-coded couplings',
            'Tightening by hand',
            'Applying coupling grease',
        ]),
        'answer'      => 'Using color-coded couplings',
        'explanation' => 'Color coding speeds visual identification and mate-up in low visibility and stress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which nozzle action is CORRECT when switching from fog to straight stream under load?',
        'choices'     => json_encode([
            'Close completely then re-open on straight',
            'Rotate pattern ring under pressure',
            'Reduce pump pressure first',
            'Switch while flowing',
        ]),
        'answer'      => 'Rotate pattern ring under pressure',
        'explanation' => 'Modern nozzles allow safe pattern change under pressure without shutting down.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which portable monitor placement gives best protection for exposures?',
        'choices'     => json_encode([
            'Between fire and exposures',
            'Directly at fire seat',
            'Near pump panel',
            'At turnout gear',
        ]),
        'answer'      => 'Between fire and exposures',
        'explanation' => 'Positioning the monitor between fire and exposures shields adjacent structures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which tool is ESSENTIAL for forcible entry through chain-link fences?',
        'choices'     => json_encode([
            'Bolt cutters',
            'Halligan bar',
            'Sledgehammer',
            'Pike pole',
        ]),
        'answer'      => 'Bolt cutters',
        'explanation' => 'Bolt cutters easily sever fence links and locks in one operation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which pump test parameter is MOST affected by elevation?',
        'choices'     => json_encode([
            'Intake pressure',
            'Discharge pressure',
            'Flow rate',
            'Nozzle reaction',
        ]),
        'answer'      => 'Intake pressure',
        'explanation' => 'Higher elevation reduces intake pressure due to lower atmospheric head.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'What is the BEST reason to periodically rotate hose couplings?',
        'choices'     => json_encode([
            'Prevent binding and corrosion',
            'Improve flow',
            'Enhance appearance',
            'Fit different brands',
        ]),
        'answer'      => 'Prevent binding and corrosion',
        'explanation' => 'Regular rotation prevents seizing and corrosion at coupling threads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which safety device on a ladder-mounted monitor protects against overpressure?',
        'choices'     => json_encode([
            'Relief valve',
            'Primer',
            'Discharge gauge',
            'Flowmeter',
        ]),
        'answer'      => 'Relief valve',
        'explanation' => 'Monitor-equipped pumps include relief valves to prevent excessive pressure damage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which technique best maintains hoseline integrity when passing through doorways?',
        'choices'     => json_encode([
            'Use boot cuffs',
            'Drag around frame',
            'Lift and place',
            'Fold over threshold',
        ]),
        'answer'      => 'Lift and place',
        'explanation' => 'Lifting hoses over thresholds prevents chafing and wear on jackets.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which monitor nozzle type provides the highest flow at lowest pressure?',
        'choices'     => json_encode([
            'Smooth-bore monitor',
            'Fog monitor',
            'Piercing nozzle',
            'Pistol-grip nozzle',
        ]),
        'answer'      => 'Smooth-bore monitor',
        'explanation' => 'Smooth bore yields maximum flow per psi and greatest reach on master streams.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 9,
        'question'    => 'Which measure MOST reduces risk of steam burns to firefighters?',
        'choices'     => json_encode([
            'Use broken-stream technique',
            'Apply straight stream continuously',
            'Maintain closed nozzles',
            'Deploy deck gun only',
        ]),
        'answer'      => 'Use broken-stream technique',
        'explanation' => 'Short bursts limit steam volume and exposure while cooling hot gases.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}

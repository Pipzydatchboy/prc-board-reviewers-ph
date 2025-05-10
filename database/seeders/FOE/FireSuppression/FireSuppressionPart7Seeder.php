<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart7Seeder extends Seeder
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
        'part'        => 7,
        'question'    => 'Which tactical priority is SECONDARY in an offensive fire attack after life safety?',
        'choices'     => json_encode([
            'Property conservation',
            'Exposure protection',
            'Incident stabilization',
            'Ventilation',
        ]),
        'answer'      => 'Incident stabilization',
        'explanation' => 'After rescuing victims, stabilizing the incident (extinguishing the fire) is the next priority.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'What is the MOST important consideration when stretching a hoseline uphill?',
        'choices'     => json_encode([
            'Maintaining control of the nozzle',
            'Minimizing kinks',
            'Avoiding trip hazards',
            'Ensuring adequate length',
        ]),
        'answer'      => 'Minimizing kinks',
        'explanation' => 'Uphill stretches are prone to kinks that restrict flow; preventing kinks is critical.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which stream pattern is BEST for rapid knockdown of a room and contents fire?',
        'choices'     => json_encode([
            'Straight solid stream',
            'Wide fog',
            'Narrow fog',
            'Broken-stream',
        ]),
        'answer'      => 'Straight solid stream',
        'explanation' => 'A solid stream delivers concentrated water to quickly cool burning surfaces and contents.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which component on a multi-gas meter must be checked before entering a confined space?',
        'choices'     => json_encode([
            'Sensor calibration',
            'Display brightness',
            'Alarm volume',
            'Battery indicator',
        ]),
        'answer'      => 'Sensor calibration',
        'explanation' => 'Accurate gas detection requires that sensors be calibrated to known standards before entry.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'What is the PRIMARY advantage of pre-connected hoselines?',
        'choices'     => json_encode([
            'Rapid deployment with charged line',
            'Longer reach',
            'Lower friction loss',
            'Reduced hose weight',
        ]),
        'answer'      => 'Rapid deployment with charged line',
        'explanation' => 'Pre-connects allow firefighters to advance with water immediately without charging first.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which tool is MOST appropriate to force entry through a padlocked gate?',
        'choices'     => json_encode([
            'Bolt cutters',
            'Halligan bar',
            'Flat-head axe',
            'Pike pole',
        ]),
        'answer'      => 'Bolt cutters',
        'explanation' => 'Bolt cutters are designed to sever padlocks and chains quickly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which ventilation action is LEAST likely to induce backdraft?',
        'choices'     => json_encode([
            'Positive-pressure ventilation',
            'Uncontrolled opening of door',
            'Cutting a vent hole in roof',
            'Opening a window at street level',
        ]),
        'answer'      => 'Positive-pressure ventilation',
        'explanation' => 'PPV pushes air in a controlled manner, reducing backdraft risk compared to uncontrolled openings.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which safety measure is MOST important when operating master streams on elevated platforms?',
        'choices'     => json_encode([
            'Stabilize the apparatus',
            'Check nozzle pressure',
            'Use gated wye',
            'Monitor wind direction',
        ]),
        'answer'      => 'Stabilize the apparatus',
        'explanation' => 'Elevated operations require a stable platform to prevent tipping or malfunction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which nozzle setting is BEST for personnel protection from radiant heat?',
        'choices'     => json_encode([
            'Wide fog curtain',
            'Straight stream',
            'Narrow fog',
            'Broken-stream',
        ]),
        'answer'      => 'Wide fog curtain',
        'explanation' => 'A fog curtain intercepts radiant heat and creates a protective water curtain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'What factor MOST affects the efficiency of a transitional attack?',
        'choices'     => json_encode([
            'Distance between nozzle and opening',
            'Hose diameter',
            'Water temperature',
            'Nozzle manufacturer',
        ]),
        'answer'      => 'Distance between nozzle and opening',
        'explanation' => 'Proper placement just inside the opening maximizes gas cooling and steam management.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which action should be taken FIRST when fire impinges on a structure’s soffit?',
        'choices'     => json_encode([
            'Apply water to roof line',
            'Vent roof directly above',
            'Pull down soffit material',
            'Evacuate occupants',
        ]),
        'answer'      => 'Vent roof directly above',
        'explanation' => 'Ventilation above fire impingement relieves heat and gas pressures protecting the structure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which foam application method yields the deepest fuel penetration?',
        'choices'     => json_encode([
            'Injected spray (air-aspirating nozzle)',
            'External curtain',
            'Surface sweep',
            'Low-expansion flooding',
        ]),
        'answer'      => 'Injected spray (air-aspirating nozzle)',
        'explanation' => 'Air-aspirating nozzles mix foam and air optimizing bubble size for penetration into fuel.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'What is the BEST method for protecting a fallen firefighter during interior operations?',
        'choices'     => json_encode([
            'Deploy back-up line',
            'Initiate evacuation',
            'Provide rapid intervention',
            'Apply universal donning',
        ]),
        'answer'      => 'Provide rapid intervention',
        'explanation' => 'Rapid intervention team (RIT) personnel rescue downed firefighters as primary task.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which approach to hose coupling on glass surfaces reduces breakage?',
        'choices'     => json_encode([
            'Wrap coupling in hose jacket',
            'Use metal-to-metal',
            'Clamp tightly',
            'Press firmly',
        ]),
        'answer'      => 'Wrap coupling in hose jacket',
        'explanation' => 'Hiding metal edges with jacket padding prevents glass scratching and shattering.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which factor MOST affects nozzle reaction force on a 2½-inch handline?',
        'choices'     => json_encode([
            'Flowrate',
            'Hose length',
            'Stream pattern',
            'Water temperature',
        ]),
        'answer'      => 'Flowrate',
        'explanation' => 'Nozzle reaction is primarily proportional to the flowrate exiting the nozzle.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which hoseline stretch is BEST for low-visibility basement search?',
        'choices'     => json_encode([
            'Recovery line',
            'Pre-connected',
            'Rear-lay supply',
            'Deck pipe',
        ]),
        'answer'      => 'Recovery line',
        'explanation' => 'Recovery lines remain charged but closed, guiding crews in darkness without limiting advance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which maintenance procedure EXTENDS the life of an air-aspirating nozzle?',
        'choices'     => json_encode([
            'Clean internal passages with water',
            'Store under pressure',
            'Use aggressive chemicals',
            'Lubricate exterior only',
        ]),
        'answer'      => 'Clean internal passages with water',
        'explanation' => 'Flushing Residues and foam concentrate from interior passages prevents corrosion and blockage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which indicator on a thermal imager warns of potential rollover?',
        'choices'     => json_encode([
            'Flame-like streaks in ceiling layer',
            'Cold blue spots',
            'Uniform gray',
            'Black smoke',
        ]),
        'answer'      => 'Flame-like streaks in ceiling layer',
        'explanation' => 'Visible flame patches in hot gas layer indicate rollover before flashover.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which device BEST monitors pressure drop across a foam proportioner?',
        'choices'     => json_encode([
            'Differential pressure gauge',
            'Intake gauge',
            'Pump panel gauge',
            'Flowmeter',
        ]),
        'answer'      => 'Differential pressure gauge',
        'explanation' => 'Differential gauges directly show inlet vs. outlet pressure across proportioning valve.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 7,
        'question'    => 'Which nozzle choice is BEST for transitional attack on high-pressure gas fires?',
        'choices'     => json_encode([
            'Narrow fog',
            'Solid stream',
            'Wide fog',
            'Broken-stream',
        ]),
        'answer'      => 'Narrow fog',
        'explanation' => 'Narrow fog minimizes disruption of fuel jets while cooling surrounding gases.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}

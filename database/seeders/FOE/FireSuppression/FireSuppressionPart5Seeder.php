<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart5Seeder extends Seeder
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
        'part'        => 5,
        'question'    => 'Which fire behavior indicator suggests an impending flashover?',
        'choices'     => json_encode([
            'Roll-over (flame overpressure)',
            'High humidity',
            'Slow heat rise',
            'Low smoke volume',
        ]),
        'answer'      => 'Roll-over (flame overpressure)',
        'explanation' => 'Roll-over—flames “rolling” across the ceiling—precedes flashover by indicating hot gas layer ignition.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'What is the PRIMARY reason to cool the upper layer of hot gases during interior attack?',
        'choices'     => json_encode([
            'Prevent flashover',
            'Increase steam production',
            'Reduce water usage',
            'Enhance visibility',
        ]),
        'answer'      => 'Prevent flashover',
        'explanation' => 'Cooling overhead gases reduces temperature below ignition point and delays or prevents flashover.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which technique applies water in short pulses to minimize steam and maintain gas cooling?',
        'choices'     => json_encode([
            'Penciling',
            'Continuous fog',
            'Full-flow straight',
            'Wide-angle fog',
        ]),
        'answer'      => 'Penciling',
        'explanation' => 'Penciling (broken-stream) applies short bursts, maximizing surface cooling while limiting steam.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'During a coordinated interior attack, which command is given after “Water on the fire”?',
        'choices'     => json_encode([
            'Advance line',
            'Cease water',
            'Hold position',
            'Vent roof',
        ]),
        'answer'      => 'Advance line',
        'explanation' => 'Once water reaches the seat, crews advance the line to maximize cooling and extinguishment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which search pattern is MOST effective in low-visibility conditions on a flat floor?',
        'choices'     => json_encode([
            'Link Search',
            'Right-hand search',
            'Crawl search',
            'V-search',
        ]),
        'answer'      => 'Crawl search',
        'explanation' => 'Crawl (close-contact) search keeps firefighters low under the smoke layer and maintains orientation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'What is the ideal angle for a hoseline when applying hydraulic ventilation at a window?',
        'choices'     => json_encode([
            '30° upward',
            'Horizontal',
            '30° downward',
            '90° vertical',
        ]),
        'answer'      => '30° upward',
        'explanation' => 'A 30° upward fog directs the plume to entrain and exhaust hot gases without knocking glass out violently.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which factor MOST limits hoseline advancement up stairs?',
        'choices'     => json_encode([
            'Nozzle reaction',
            'Hose weight',
            'Ambient temperature',
            'Hose color',
        ]),
        'answer'      => 'Hose weight',
        'explanation' => 'Weight and drag of charged hose on stairs is primary physical limitation to rapid advance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'When should a secondary search be conducted?',
        'choices'     => json_encode([
            'After fire is under control',
            'Immediately upon entry',
            'Prior to fire attack',
            'During apparatus setup',
        ]),
        'answer'      => 'After fire is under control',
        'explanation' => 'Secondary search is systematic and done after fire knockdown to ensure no victims remain.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which ventilation method improves interior tenability without cutting roof?',
        'choices'     => json_encode([
            'Positive-pressure ventilation',
            'Vertical ventilation',
            'Hydraulic ventilation',
            'Negative-pressure ventilation',
        ]),
        'answer'      => 'Positive-pressure ventilation',
        'explanation' => 'PPV uses fans to clear smoke through designated openings, avoiding roof operations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'What is the MAIN advantage of using a blitzfire nozzle on master streams?',
        'choices'     => json_encode([
            'High flow at low pressure',
            'Fine mist cooling',
            'Low water consumption',
            'Portability',
        ]),
        'answer'      => 'High flow at low pressure',
        'explanation' => 'Blitzfire nozzles deliver very high gpm at relatively low nozzle pressure for maximum master-stream effectiveness.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which indicator on an ICAR (Incident Command Accountability) tag helps track crew location?',
        'choices'     => json_encode([
            'Assigned sector',
            'Helmet color',
            'Radio channel',
            'Stenciled number',
        ]),
        'answer'      => 'Assigned sector',
        'explanation' => 'ICAR tags list crew assignment (sector/side) to ensure personnel can be tracked by division/group.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which hoseline size is STANDARD for a backup line on an interior attack?',
        'choices'     => json_encode([
            '1¾-inch',
            '2½-inch',
            '1½-inch',
            '1-inch',
        ]),
        'answer'      => '1¾-inch',
        'explanation' => 'A 1¾-inch handline provides sufficient flow for backup while remaining maneuverable.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'During overhaul, which tool is BEST for exposing hidden hot spots in walls?',
        'choices'     => json_encode([
            'Thermal imaging camera',
            'Halligan bar',
            'Pike pole',
            'Bolt cutter',
        ]),
        'answer'      => 'Thermal imaging camera',
        'explanation' => 'TIC reveals heat through walls/ceilings to find smoldering areas for extinguishment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which nozzle discharge is MOST effective at penetrating wind-driven fires?',
        'choices'     => json_encode([
            'Solid stream',
            'Wide fog',
            'Narrow fog',
            'Broken-stream',
        ]),
        'answer'      => 'Solid stream',
        'explanation' => 'Solid streams maintain velocity to penetrate against wind and reach seat of fire.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'What is the PRIMARY hazard when performing vertical ventilation on tile roofs?',
        'choices'     => json_encode([
            'Roof collapse',
            'Steam burns',
            'Electric shock',
            'Falling debris',
        ]),
        'answer'      => 'Roof collapse',
        'explanation' => 'Tile roofs can conceal structural rot; cutting them risks sudden collapse of unsupported sections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which action MOST reduces encouragement of rekindle during overhaul?',
        'choices'     => json_encode([
            'Thoroughly soak all debris',
            'Leave doors open',
            'Remove all hose lines',
            'Vent windows',
        ]),
        'answer'      => 'Thoroughly soak all debris',
        'explanation' => 'Soaking deep-seated embers prevents heat buildup and reignition in debris piles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which safety measure is ESSENTIAL when conducting attic search?',
        'choices'     => json_encode([
            'Stay low to floor',
            'Wear safety harness',
            'Use thermal imaging',
            'Chop multiple holes',
        ]),
        'answer'      => 'Wear safety harness',
        'explanation' => 'A harness connected to a lifeline prevents falls through weakened attic flooring.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which factor MOST influences selection of aerial master stream placement?',
        'choices'     => json_encode([
            'Building height',
            'Hose length',
            'Pump capacity',
            'Crew size',
        ]),
        'answer'      => 'Building height',
        'explanation' => 'Height determines elevation and reach requirements for aerial master streams to be effective.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'What is the BEST use of a Fog-Nozzle curtain pattern?',
        'choices'     => json_encode([
            'Protect exposures',
            'Penetrate seat of fire',
            'Vent roof',
            'Cool ground',
        ]),
        'answer'      => 'Protect exposures',
        'explanation' => 'A curtain pattern deflects radiant heat away from exposures without runoff issues.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 5,
        'question'    => 'Which hoseline placement technique minimizes damage to finished flooring?',
        'choices'     => json_encode([
            'Carry looped line',
            'Drag line',
            'Use stair pack',
            'Deploy pre-connected',
        ]),
        'answer'      => 'Carry looped line',
        'explanation' => 'Carrying loops off the floor avoids gouges and snags on finished surfaces during advance.',
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

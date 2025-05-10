<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart8Seeder extends Seeder
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
        'part'        => 8,
        'question'    => 'Which foam expansion ratio is TYPICAL for low-expansion Class B foams?',
        'choices'     => json_encode([
            '5–20:1',
            '20–200:1',
            '200–1000:1',
            '1000–2000:1',
        ]),
        'answer'      => '5–20:1',
        'explanation' => 'Low-expansion foams have ratios around 5–20:1 for rapid fuel surface coverage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'What is the PRIMARY hazard when using piercing nozzles through walls?',
        'choices'     => json_encode([
            'Propelling hot embers',
            'Water hammer',
            'Foam overspray',
            'Air entrainment',
        ]),
        'answer'      => 'Propelling hot embers',
        'explanation' => 'Piercing nozzles can drive burning debris and embers through wall cavities.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which device measures both static and residual hydrant pressures simultaneously?',
        'choices'     => json_encode([
            'Dual gauge hydrant stem',
            'Pitot gauge',
            'Flowmeter',
            'Thermocouple',
        ]),
        'answer'      => 'Dual gauge hydrant stem',
        'explanation' => 'Hydrant stems with two gauges allow direct reading of static (no-flow) and residual (flow) pressures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which principle explains why fog nozzles cool better than solid streams?',
        'choices'     => json_encode([
            'Increased surface area',
            'Greater reach',
            'Higher pressure',
            'Lower friction loss',
        ]),
        'answer'      => 'Increased surface area',
        'explanation' => 'Fog droplets expose more water to heat, absorbing more energy per gallon than solid streams.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'What is the recommended minimum discharge for a portable monitor used in exterior attack?',
        'choices'     => json_encode([
            '250 gpm',
            '100 gpm',
            '50 gpm',
            '500 gpm',
        ]),
        'answer'      => '250 gpm',
        'explanation' => 'Portable monitors typically flow 250–500 gpm; 250 gpm is a common minimum for effective coverage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which method of foam proportioning uses pump discharge pressure to supply concentrate?',
        'choices'     => json_encode([
            'Balanced-pressure proportioner',
            'Eductor',
            'In-line eductor',
            'Air-aspirating nozzle',
        ]),
        'answer'      => 'Eductor',
        'explanation' => 'Eductors create suction via discharge pressure to draft foam concentrate into the stream.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'When performing a hose lay, what is the BEST way to avoid kinks on a curved path?',
        'choices'     => json_encode([
            'Use the figure-eight method',
            'Straight lay only',
            'Reverse lay',
            'Continuous loop',
        ]),
        'answer'      => 'Use the figure-eight method',
        'explanation' => 'Figure-eight technique prevents twists and kinks when navigating curves.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which action MOST reduces nozzle reaction on high-flow lines?',
        'choices'     => json_encode([
            'Use a monitor instead of handline',
            'Switch to fog nozzle',
            'Reduce pump pressure',
            'Shorten hose length',
        ]),
        'answer'      => 'Use a monitor instead of handline',
        'explanation' => 'Monitors are secured and absorb reaction, sparing firefighters the force of high-flow streams.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which foam type is LEAST effective on polar solvent spills?',
        'choices'     => json_encode([
            'AFFF',
            'AR-AFFF',
            'Protein foam',
            'Alcohol-resistant AR-AFFF',
        ]),
        'answer'      => 'Protein foam',
        'explanation' => 'Protein foams lack polymer additives needed to resist alcohol and other polar solvents.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which practice ensures accurate nozzle pressure under flow?',
        'choices'     => json_encode([
            'Monitor nozzle pressure gauge',
            'Count hose diameter',
            'Measure pump rpm',
            'Check hydrant static',
        ]),
        'answer'      => 'Monitor nozzle pressure gauge',
        'explanation' => 'Nozzle gauges confirm operating pressure at the discharge point, ensuring correct pattern.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'What is the PRIMARY advantage of a balanced-pressure pump-mounted proportioner?',
        'choices'     => json_encode([
            'Maintains correct foam ratio at varied flows',
            'Simpler to operate',
            'No external equipment needed',
            'Lower maintenance',
        ]),
        'answer'      => 'Maintains correct foam ratio at varied flows',
        'explanation' => 'Balanced-pressure systems automatically adjust concentrate flow to match water flow changes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which nozzle tip is BEST for piercing through walls and floors?',
        'choices'     => json_encode([
            'Piercing nozzle tip',
            'Smooth bore tip',
            'Fog nozzle tip',
            'Pistol-grip tip',
        ]),
        'answer'      => 'Piercing nozzle tip',
        'explanation' => 'Piercing nozzles are specifically designed to penetrate walls and ceilings to apply water into hidden fires.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which device allows continuous measurement of nozzle reaction force?',
        'choices'     => json_encode([
            'Load cell nozzle ring',
            'Pitot gauge',
            'Pressure regulator',
            'Flowmeter',
        ]),
        'answer'      => 'Load cell nozzle ring',
        'explanation' => 'Load cell rings measure force at the nozzle, giving real-time reaction data.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which stream pattern is MOST effective for exposure protection in wind-driven fires?',
        'choices'     => json_encode([
            'Wide fog curtain',
            'Narrow fog',
            'Solid stream',
            'Broken-stream',
        ]),
        'answer'      => 'Wide fog curtain',
        'explanation' => 'Fog curtains block radiant heat and prevent exposure ignition, especially with wind-driven flames.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'What is the BEST method to confirm proper foam proportioning during flow?',
        'choices'     => json_encode([
            'Foam test tube sample test',
            'Check pump rpm',
            'Monitor nozzle reaction',
            'Observe hose color',
        ]),
        'answer'      => 'Foam test tube sample test',
        'explanation' => 'Sample tests show foam expansion and drain times, confirming correct concentrate ratio.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which pressure gauge must be monitored during high-rise standpipe operations?',
        'choices'     => json_encode([
            'Discharge gauge at FL',
            'Intake gauge',
            'Pump panel gauge',
            'Standpipe outlet gauge',
        ]),
        'answer'      => 'Standpipe outlet gauge',
        'explanation' => 'Monitoring outlet gauge at attack floor ensures correct nozzle pressure after system losses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which technique best protects firefighters from steam burns?',
        'choices'     => json_encode([
            'Broken-stream penciling',
            'Solid streams only',
            'Full-flow fog',
            'Wide fog continuous',
        ]),
        'answer'      => 'Broken-stream penciling',
        'explanation' => 'Penciling applies controlled pulses limiting steam volume and impact on firefighters.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which hose diameter minimizes friction loss for long exterior stretches?',
        'choices'     => json_encode([
            '4-inch',
            '2-inch',
            '1¾-inch',
            '1½-inch',
        ]),
        'answer'      => '4-inch',
        'explanation' => 'Larger 4″ supply lines dramatically reduce friction over extended lengths.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which nozzle type is MOST resistant to freezing during winter operations?',
        'choices'     => json_encode([
            'Brass smooth bore',
            'Plastic fog nozzle',
            'Aluminum fog',
            'Carbon-steel nozzle',
        ]),
        'answer'      => 'Brass smooth bore',
        'explanation' => 'Brass retains heat and resists corrosion, reducing freeze risk in sub-zero conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 8,
        'question'    => 'Which method ensures rapid hose replacement during prolonged incidents?',
        'choices'     => json_encode([
            'Use roller racks',
            'Manual carry',
            'Flat load',
            'Pre-connected loop',
        ]),
        'answer'      => 'Use roller racks',
        'explanation' => 'Roller racks allow quick removal of spent lines and rapid deployment of fresh hose.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}

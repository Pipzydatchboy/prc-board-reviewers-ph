<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart6Seeder extends Seeder
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
        'part'        => 6,
        'question'    => 'Which size fire hydrant main provides the greatest flow capacity?',
        'choices'     => json_encode([
            '6-inch',
            '4-inch',
            '3-inch',
            '2½-inch',
        ]),
        'answer'      => '6-inch',
        'explanation' => 'Larger diameter mains supply more volume with less friction loss.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'What is the MOST effective method to cool superheated gases in a room before entry?',
        'choices'     => json_encode([
            'Hydraulic ventilation',
            'Straight stream application',
            'High-expansion foam',
            'Wide fog exterior application',
        ]),
        'answer'      => 'Hydraulic ventilation',
        'explanation' => 'A narrow fog directed upward entrains and exhausts hot gases, cooling the space.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which tool is BEST to clear roof debris after vertical venting?',
        'choices'     => json_encode([
            'Roof hook',
            'Halligan bar',
            'Pike pole',
            'Sledgehammer',
        ]),
        'answer'      => 'Pike pole',
        'explanation' => 'The pike pole hooks and pulls away debris safely from the ground or roof edge.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which foam concentrate is NOT suitable for polar solvent fires?',
        'choices'     => json_encode([
            'Protein foam',
            'AR-AFFF',
            'AFFF',
            'Synthetic fluoroprotein',
        ]),
        'answer'      => 'AFFF',
        'explanation' => 'Standard AFFF breaks down on alcohol or polar solvents; AR-AFFF is required.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'What is the recommended airflow rate for positive-pressure ventilation at a doorway?',
        'choices'     => json_encode([
            '10,000 cfm',
            '1,000 cfm',
            '5,000 cfm',
            '500 cfm',
        ]),
        'answer'      => '5,000 cfm',
        'explanation' => 'Approximately 5,000 cfm provides effective pressure differential without overpressurizing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which nozzle pattern is LEAST likely to damage sensitive electronics during fire attack?',
        'choices'     => json_encode([
            'Narrow fog',
            'Solid stream',
            'Broken-stream',
            'Wide fog',
        ]),
        'answer'      => 'Narrow fog',
        'explanation' => 'Small droplet fog minimizes water volume and impact force on equipment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'What is the PRIMARY hazard when performing exterior master-stream operations near civilians?',
        'choices'     => json_encode([
            'Water runoff injury',
            'Heat exposure',
            'Smoke inhalation',
            'Exposure to foam',
        ]),
        'answer'      => 'Water runoff injury',
        'explanation' => 'High-volume streams can create slippery surfaces and high-impact runoff risk to bystanders.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which method MOST effectively prevents thermal layering during interior attack?',
        'choices'     => json_encode([
            'Horizontal ventilation',
            'Vertical ventilation',
            'Hydraulic ventilation',
            'Negative-pressure ventilation',
        ]),
        'answer'      => 'Horizontal ventilation',
        'explanation' => 'Opening side windows near the ceiling allows hot layers to escape and fresh air in.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which safety device on a portable fire pump prevents damage if discharge is suddenly blocked?',
        'choices'     => json_encode([
            'Relief valve',
            'Primer',
            'Foam injector',
            'Strainer',
        ]),
        'answer'      => 'Relief valve',
        'explanation' => 'The relief valve vents excess pressure to protect the pump when outlets are closed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which factor MOST determines the effectiveness of transitional fire attack?',
        'choices'     => json_encode([
            'Nozzle position relative to vent',
            'Hose diameter',
            'Pump pressure',
            'Water quality',
        ]),
        'answer'      => 'Nozzle position relative to vent',
        'explanation' => 'Water applied just inside an opening cools gases best when nozzle is properly positioned.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which SCBA component monitors remaining air and warns the user?',
        'choices'     => json_encode([
            'Heads-up display',
            'Pressure gauge',
            'Regulator',
            'Harness strap',
        ]),
        'answer'      => 'Heads-up display',
        'explanation' => 'HUD shows remaining cylinder pressure and alerts as air is depleted.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which hoseline technique reduces nozzle reaction for single firefighter operation?',
        'choices'     => json_encode([
            'Use a pistol-grip tip',
            'Switch to solid stream',
            'Use wide fog',
            'Operate with eductor',
        ]),
        'answer'      => 'Use a pistol-grip tip',
        'explanation' => 'Pistol-grip allows one-handed control and reduces reaction compared to straight barrel.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'What is the optimum nozzle pressure for most fog patterns?',
        'choices'     => json_encode([
            '100 psi',
            '50 psi',
            '150 psi',
            '75 psi',
        ]),
        'answer'      => '100 psi',
        'explanation' => '100 psi yields proper droplet size and reach for fog nozzles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which factor MOST influences nozzle reach?',
        'choices'     => json_encode([
            'Nozzle pressure',
            'Hose color',
            'Pump RPM',
            'Foam percentage',
        ]),
        'answer'      => 'Nozzle pressure',
        'explanation' => 'Higher pressure increases stream velocity and reach more than any other factor.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which technique uses a second hoseline to protect firefighters on primary line?',
        'choices'     => json_encode([
            'Back-up line',
            'Exposure line',
            'Recovery line',
            'Secondary line',
        ]),
        'answer'      => 'Back-up line',
        'explanation' => 'Back-up lines follow the primary to protect crews if conditions worsen.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which hose diameter is STANDARD for exterior blitzfire operations?',
        'choices'     => json_encode([
            '3-inch',
            '1¾-inch',
            '2½-inch',
            '1-inch',
        ]),
        'answer'      => '3-inch',
        'explanation' => 'Larger 3″ hose allows high-volume flow needed for blitzfire style master streams.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which fire suppression method is MOST appropriate for class D metal fires?',
        'choices'     => json_encode([
            'Dry powder',
            'Water',
            'AFFF',
            'CO₂',
        ]),
        'answer'      => 'Dry powder',
        'explanation' => 'Specialized dry powders smother and absorb heat from burning metals safely.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'What is the MAIN advantage of high-pressure fog systems on apparatus?',
        'choices'     => json_encode([
            'Enhanced steam conversion',
            'Increased reach',
            'Lower water use',
            'Simplified pump operation',
        ]),
        'answer'      => 'Enhanced steam conversion',
        'explanation' => 'High-pressure fog creates finer droplets that absorb more heat per gallon of water.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'Which practice MOST reduces hose friction loss on long supply lines?',
        'choices'     => json_encode([
            'Use larger diameter hose',
            'Use more hose couplings',
            'Increase pump RPM',
            'Lay hose in straight line',
        ]),
        'answer'      => 'Use larger diameter hose',
        'explanation' => 'Larger diameter significantly reduces friction losses over long distances.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 42,
        'part'        => 6,
        'question'    => 'During overhaul, which method BEST ensures hidden fire spread is located?',
        'choices'     => json_encode([
            'Thermal imaging survey',
            'Random probing',
            'Visual inspection only',
            'Use of only hand tools',
        ]),
        'answer'      => 'Thermal imaging survey',
        'explanation' => 'A TIC quickly identifies heat behind walls and ceilings to locate hidden hot spots.',
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
